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

  $post_data = [
    "landing_name" => $nameOffer,
    "ip" => $ip,
    'source' => 'google',
    'full_name' => $name . ' ' . $last,
    'email' => $email,
    'landing' => $domain,
    "country" => $summ,
    'phone' => str_replace('+', '', $phone),
    'pixel' => $fbPixel,
    'description' => $comment,
    'keitaro_id' => $subid,
    'user_id' => '70',
    'lang' => 'en',

  ];




  $newPost = json_encode($post_data, true);

  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://crm.traffic-g.live/api/leads',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 3,
    CURLOPT_TIMEOUT => 3,              // Зменшено з 10 до 3 секунд
    CURLOPT_CONNECTTIMEOUT => 2,       // Зменшено з 5 до 2 секунд
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => http_build_query($post_data),
    CURLOPT_HTTPHEADER => array(
      'Accept: application/json',
      'Content-Type: application/x-www-form-urlencoded'
    ),
    CURLOPT_NOSIGNAL => 1,             // Додано для кращої продуктивності
    CURLOPT_TCP_NODELAY => 1,          // Вимкнути алгоритм Nagle
  ));

  $response = curl_exec($curl);
  $crm_time = microtime(true);
  $performance_log .= "CRM API completed: " . number_format($crm_time - $start_time, 4) . "s\n";

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

  $chatId1 = "-1002022816437";
  $token1 = "7175616144:AAEbkPLZkqLEXdL0NUa1oqcoRRou_aa0Gqo";
  $message1 = "🚀 <b>НОВИЙ ЛІД - Magnumator</b> 🚀\n\n" .
              "👤 <b>Ім'я:</b> $name\n" .
              "👤 <b>Прізвище:</b> $last\n" .
              "📱 <b>Телефон:</b> $phone\n" .
              "📧 <b>Email:</b> $email\n" .
              "🌍 <b>Країна:</b> $summ\n" .
              "📞 <b>Код країни:</b> $messageT\n" .
              "🌐 <b>IP адреса:</b> $ip\n" .
              "💬 <b>Коментар:</b> " . ($comment ?: 'Немає') . "\n" .
              "🔗 <b>Домен:</b> $domain\n\n" .
              "⏰ <b>Час:</b> " . date('Y-m-d H:i:s');

  $chatId2 = "-1002514536713";
  $token2 = "8024703814:AAEHGtZ9JToh9azbQ4ExrOb7m_UVk5Yizh0";
  $message2 = "💼 <b>НОВИЙ ЛІД</b> 💼\n\n" .
              "👤 <b>Ім'я:</b> $name\n" .
              "👤 <b>Прізвище:</b> $last\n" .
              "📱 <b>Телефон:</b> $phone\n" .
              "📧 <b>Email:</b> $email\n" .
              "🌍 <b>Країна:</b> $summ\n" .
              "📞 <b>Код країни:</b> $messageT\n" .
              "🌐 <b>IP адреса:</b> $ip\n" .
              "💬 <b>Коментар:</b> " . ($comment ?: 'Немає') . "\n" .
              "🔗 <b>Домен:</b> $domain\n\n" .
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