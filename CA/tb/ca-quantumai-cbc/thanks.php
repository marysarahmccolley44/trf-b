<?php
ob_start();
$redirectUrl = null;
if (isset($_GET['r']) && filter_var($_GET['r'], FILTER_VALIDATE_URL)) {
    $redirectUrl = $_GET['r'];
}
?>
<!DOCTYPE html>
<html lang="ro">
<head>
<?php $pxl = isset($_GET["fbp"]) ? $_GET["fbp"] : (isset($_GET["pixel"]) ? $_GET["pixel"] : 'Unknown'); ?>
<?php $aw = isset($_GET["aw"]) ? $_GET["aw"] : 'Unknown'; ?>
<?php $camp = isset($_GET["camp_id"]) ? $_GET["camp_id"] : 'Unknown'; ?>
 <!-- Facebook Pixel Code --><script>//PageView
        !(function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);};
            if (!f._fbq) f._fbq = n;
            n.push = n; n.loaded = !0; n.version = "2.0"; n.queue = [];
            t = b.createElement(e); t.async = !0; t.src = v;
            s = b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t, s);
        })(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
        fbq("init", "<?= $pxl; ?>"); fbq('track','Lead');
    </script>
    <noscript><img height="1" width="1" style="display: none" src="https://www.facebook.com/tr?id=<?= $pxl; ?>&ev=Lead&noscript=1"/></noscript>
    <!-- End Facebook Pixel Code -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-<?= $camp; ?>"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-<?= $camp; ?>');
</script>
<!-- Event snippet for conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-<?= $camp; ?>/<?= $aw; ?>'});
</script>

<?php if ($redirectUrl): ?>
<script>
  setTimeout(function() {
    window.location.href = "<?= $redirectUrl ?>";
  }, 2000);
</script>
<?php endif; ?>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thank you</title>
    <style>
      body {
        font-size: 1.25em;
        margin: 0;
        color: #fff;
        text-align: center;
        min-height: 100vh;
        background: #14171f;
      }
      body,
      .container {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
      }
      .container {
        border: 2px solid #e6e6e6;
        padding: 1em 3em;
        box-shadow: 0 0 10px 1px #ebebeb;
        background: rgb(44, 44, 44, 0.8);
        border-radius: 14px;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Your request has been accepted.</h1>
      <h3 style="margin-top: 1em;">Our representative will contact you within 30 minutes.</h3>
    </div>
</body>
</html>
