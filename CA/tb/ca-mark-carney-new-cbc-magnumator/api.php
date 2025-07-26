<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  // Початок логування часу виконання
  $start_time = microtime(true);
  $performance_log = "=== PERFORMANCE LOG " . date('Y-m-d H:i:s') . " ===\n";
  $performance_log .= "Start: " . number_format($start_time, 4) . "\n";

  function getIp()
  {
    $keys = [
      'HTTP_CLIENT_IP',
      'HTTP_X_FORWARDED_FOR',
      'REMOTE_ADDR'
    ];
    foreach ($keys as $key) {
      if (!empty($_SERVER[$key])) {
        $ip = trim(end(explode(',', $_SERVER[$key])));
        if (filter_var($ip, FILTER_VALIDATE_IP)) {
          return $ip;
        }
      }
    }
  }



  $name = $_POST["name"];
  $last = $_POST["lastname"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $summ = "CA";
  $ip = getIp();
  $comment = $_POST['answer'] ?? '';
  $get = $_POST['get'] ?? '';
  $messageT = $_POST['phonecc'] ?? '';
  $nameOffer = 'Magnumator';
  $domain = $_SERVER['HTTP_REFERER'] ?? '';
  $fbPixel = $_COOKIE['pixel'] ?? '';
  $subid = $_POST['subid'] ?? '';

  // New API data structure according to .cursorrules
  $data = array(
    "firstName" => $name,
    "lastName" => $last,
    "email" => $email,
    "phone" => $phone,
    "country" => $summ,
    "lang" => "EN",
    "marker" => isset($_GET['marker']) ? $_GET['marker'] : "",
    "offer" => $nameOffer,
    "domain" => $domain,
    "ip" => $ip,
    "sub_id_1" => isset($_GET['sub_id_1']) ? $_GET['sub_id_1'] : "",
    "sub_id_2" => isset($_GET['sub_id_2']) ? $_GET['sub_id_2'] : "",
    "sub_id_3" => isset($_GET['sub_id_3']) ? $_GET['sub_id_3'] : $_SERVER['HTTP_USER_AGENT'],
    "sub_id_4" => isset($_GET['sub_id_4']) ? $_GET['sub_id_4'] : (isset($_SERVER['HTTP_REFERER']) ? parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) : ""),
    "utm_medium" => isset($_GET['utm_medium']) ? $_GET['utm_medium'] : "",
    "utm_content" => isset($_GET['utm_content']) ? $_GET['utm_content'] : "",
    "utm_campaign" => isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : "",
    "utm_source" => isset($_GET['utm_source']) ? $_GET['utm_source'] : "",
    "utm_term" => isset($_GET['utm_term']) ? $_GET['utm_term'] : ""
  );

  // Log submitted data
  file_put_contents('log_submit_data2.txt', date('Y-m-d H:i:s', strtotime('+3 hours')).PHP_EOL .print_r($data, true).PHP_EOL, FILE_APPEND);




  // New API cURL configuration according to .cursorrules
  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://slm.api.vibero.tech/clients/lead',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 3,              // Keep optimized 3 second timeout
    CURLOPT_CONNECTTIMEOUT => 2,       // Keep optimized 2 second connect timeout
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode($data), // JSON format
    CURLOPT_HTTPHEADER => array(
      'x-api-key: Og00Z1h-skZfY4IY-GMxzH73NjX6AwQZ',
      'Content-Type: application/json'
    ),
    CURLOPT_NOSIGNAL => 1,             // Keep performance optimization
    CURLOPT_TCP_NODELAY => 1,          // Keep performance optimization
  ));

  $response = curl_exec($curl);
  $crm_time = microtime(true);
  $performance_log .= "CRM API completed: " . number_format($crm_time - $start_time, 4) . "s\n";

  // Log API response
  file_put_contents('log_submit_data.txt', date('Y-m-d H:i:s', strtotime('+2 hours')).PHP_EOL .'RESPONSE: '.print_r($response, true).PHP_EOL.PHP_EOL, FILE_APPEND);

  // Log leads in tab-separated format
  file_put_contents('log_submit_data_leads.txt', date("Y-m-d H:i:s")."\t".json_decode('"'.str_replace('"', '\\"', json_encode($data)).'"')."\t".$response.PHP_EOL, FILE_APPEND);

  // Conversion tracking (if subid is available)
  if (!empty($subid)) {
    file_get_contents('https://investhorizon.biz/click?cnv_id=' . urlencode($subid) . '&payout=0&cnv_status=lead');
  }

  curl_close($curl);



  function sendTelegramMessage($chatId, $token, $message)
  {
    $telegramApiUrl = "https://api.telegram.org/bot$token/sendMessage";

    $postData = array(
      "chat_id" => $chatId,
      "text" => $message,
      "parse_mode" => "HTML"  // Додано підтримку HTML форматування
    );

    // Швидкий cURL з агресивними таймаутами
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => $telegramApiUrl,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_TIMEOUT => 1,              // Максимум 1 секунда
      CURLOPT_CONNECTTIMEOUT => 1,       // Максимум 1 секунда на підключення
      CURLOPT_POST => true,
      CURLOPT_POSTFIELDS => http_build_query($postData),
      CURLOPT_HTTPHEADER => array('Content-Type: application/x-www-form-urlencoded'),
      CURLOPT_NOSIGNAL => 1,
      CURLOPT_TCP_NODELAY => 1,
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    return $response;
  }

  $chatId1 = "-100_SHAT_ID";
  $token1 = "botfather_TOKEN";
  $message1 = "🚀 <b>НОВИЙ ЛІД - Magnumator</b> 🚀\n\n" .
              "👤 <b>Ім'я:</b> " . $data['firstName'] . "\n" .
              "👤 <b>Прізвище:</b> " . $data['lastName'] . "\n" .
              "📱 <b>Телефон:</b> " . $data['phone'] . "\n" .
              "📧 <b>Email:</b> " . $data['email'] . "\n" .
              "🌍 <b>Країна:</b> " . $data['country'] . "\n" .
              "📞 <b>Код країни:</b> $messageT\n" .
              "🌐 <b>IP адреса:</b> " . $data['ip'] . "\n" .
              "💬 <b>Коментар:</b> " . ($comment ?: 'Немає') . "\n" .
              "🔗 <b>Домен:</b> " . $data['domain'] . "\n\n" .
              "⏰ <b>Час:</b> " . date('Y-m-d H:i:s');

  $chatId2 = "-100_SHAT_ID";
  $token2 = "botfather_TOKEN";
  $message2 = "💼 <b>НОВИЙ ЛІД</b> 💼\n\n" .
              "👤 <b>Ім'я:</b> " . $data['firstName'] . "\n" .
              "👤 <b>Прізвище:</b> " . $data['lastName'] . "\n" .
              "📱 <b>Телефон:</b> " . $data['phone'] . "\n" .
              "📧 <b>Email:</b> " . $data['email'] . "\n" .
              "🌍 <b>Країна:</b> " . $data['country'] . "\n" .
              "📞 <b>Код країни:</b> $messageT\n" .
              "🌐 <b>IP адреса:</b> " . $data['ip'] . "\n" .
              "💬 <b>Коментар:</b> " . ($comment ?: 'Немає') . "\n" .
              "🔗 <b>Домен:</b> " . $data['domain'] . "\n\n" .
              "⏰ <b>Час:</b> " . date('Y-m-d H:i:s');

  $result1 = sendTelegramMessage($chatId1, $token1, $message1);
  $telegram1_time = microtime(true);
  $performance_log .= "Telegram Bot 1 completed: " . number_format($telegram1_time - $crm_time, 4) . "s\n";

  $result2 = sendTelegramMessage($chatId2, $token2, $message2);
  $telegram2_time = microtime(true);
  $performance_log .= "Telegram Bot 2 completed: " . number_format($telegram2_time - $telegram1_time, 4) . "s\n";

  // Логування результатів Telegram
  file_put_contents('telegram_log.txt', date('Y-m-d H:i:s')."\nBot1 result: ".print_r($result1, true)."\nBot2 result: ".print_r($result2, true)."\n\n", FILE_APPEND);


  $result = [];
  if ($fbPixel) $result['pixel'] = $fbPixel;
  if (isset($_GET['aw'])) $result['aw'] = $_GET['aw'];
  if (isset($_GET['camp_id'])) $result['camp_id'] = $_GET['camp_id'];
  if (count($_GET)) $result = array_merge($result, $_GET);
  // Обробка відповіді API
  $json_response = json_decode($response, true);
  file_put_contents('api_response_log.txt', date('Y-m-d H:i:s')."\nAPI Response: ".print_r($response, true)."\n\n", FILE_APPEND);

  // Якщо API повернув redirect_url - передаємо його як параметр r для затриманого редиректу
  if (!empty($json_response) && isset($json_response['redirect_url']) && !empty($json_response['redirect_url'])) {
    $redirect_url = $json_response['redirect_url'];
    // Додаємо трекінг параметри до broker URL
    if (!empty($result)) {
      $separator = strpos($redirect_url, '?') !== false ? '&' : '?';
      $redirect_url .= $separator . http_build_query($result);
    }
    // Передаємо redirect_url як параметр r для thanks.php
    $result['r'] = $redirect_url;
  }

  // Фінальне логування перед редиректом
  $end_time = microtime(true);
  $total_time = $end_time - $start_time;
  $performance_log .= "Total execution time: " . number_format($total_time, 4) . "s\n";
  $performance_log .= "=== END PERFORMANCE LOG ===\n\n";

  // Записуємо лог продуктивності
  file_put_contents('performance_log.txt', $performance_log, FILE_APPEND | LOCK_EX);

  // Завжди редиректимо на thanks.php для забезпечення спрацювання пікселів
  header("Location: thanks/thanks.php?".http_build_query($result));
  exit();
}