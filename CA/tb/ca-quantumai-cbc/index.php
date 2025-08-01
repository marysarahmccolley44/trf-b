<html lang="en" class="hydrated" data-scrapbook-create="20250303112200813">

<head>
    <script>
        var date = new Date();
        date.setTime(date.getTime() + (5 * 24 * 60 * 60 * 1000));
        if (!'{pixel}'.match('{')) {
            document.cookie = "pixel={pixel}; " + "expires=" + date.toUTCString() + "";
        }
    </script>
    <?php $pxl = isset($_GET["fbp"]) ? $_GET["fbp"] : (isset($_GET["pixel"]) ? $_GET["pixel"] : 'Unknown'); ?>
    <?php $aw = isset($_GET["aw"]) ? $_GET["aw"] : 'Unknown'; ?>
    <?php $camp = isset($_GET["camp_id"]) ? $_GET["camp_id"] : 'Unknown'; ?>
    <!-- Google tag (gtag.js) -->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=AW-<?= $camp; ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-<?= $camp; ?>');
    </script>
    <!-- Facebook Pixel Code -->
    <script>
        //PageView
        !(function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = "2.0";
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s);
        })(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
        fbq("init", "<?= $pxl; ?>");
        fbq('track', 'PageView');
    </script>
    <link rel="stylesheet" href="ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css">
    <script src="jquery.maskedinput.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link data-chunk="ocelot" rel="stylesheet" href="./index/styles.adf447278822f6250c33.css">
    <link rel="stylesheet" href="./index/custom.css">
    <link rel="stylesheet">
    <link rel="stylesheet" href="./index/main-styles.css?=3">
    <link rel="stylesheet" href="./index/main.css">
    <link rel="stylesheet" href="./index/my-style.css?=2">
    <link href="./index/app.css" rel="stylesheet">

    <style id="vf-font-size-override">
        .viafoura {
            --base-font-size: 0.625rem;
        }
    </style>


    <title>A new project called QuantumAI is now available to Canadian citizens, offering a potentially beneficial opportunity to generate income up to 30,000CAD per month starting at just 365CAD!</title>
    <style type="text/css">
        .vue-modal-resizer {
            display: block;
            overflow: hidden;
            position: absolute;
            width: 12px;
            height: 12px;
            right: 0;
            bottom: 0;
            z-index: 9999999;
            background: transparent;
            cursor: se-resize;
        }
        
        .vue-modal-resizer::after {
            display: block;
            position: absolute;
            content: '';
            background: transparent;
            left: 0;
            top: 0;
            width: 0;
            height: 0;
            border-bottom: 10px solid #ddd;
            border-left: 10px solid transparent;
        }
        
        .vue-modal-resizer.clicked::after {
            border-bottom: 10px solid #369be9;
        }
    </style>
    <style type="text/css">
        .v--modal-block-scroll {
            overflow: hidden;
            width: 100vw;
        }
        
        .v--modal-overlay {
            position: fixed;
            box-sizing: border-box;
            left: 0;
            top: 0;
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, 0.2);
            z-index: 999;
            opacity: 1;
        }
        
        .v--modal-overlay.scrollable {
            height: 100%;
            min-height: 100vh;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
        }
        
        .v--modal-overlay .v--modal-background-click {
            width: 100%;
            min-height: 100%;
            height: auto;
        }
        
        .v--modal-overlay .v--modal-box {
            position: relative;
            overflow: hidden;
            box-sizing: border-box;
        }
        
        .v--modal-overlay.scrollable .v--modal-box {
            margin-bottom: 2px;
        }
        
        .v--modal {
            background-color: white;
            text-align: left;
            border-radius: 3px;
            box-shadow: 0 20px 60px -2px rgba(27, 33, 58, 0.4);
            padding: 0;
        }
        
        .v--modal.v--modal-fullscreen {
            width: 100vw;
            height: 100vh;
            margin: 0;
            left: 0;
            top: 0;
        }
        
        .v--modal-top-right {
            display: block;
            position: absolute;
            right: 0;
            top: 0;
        }
        
        .overlay-fade-enter-active,
        .overlay-fade-leave-active {
            transition: all 0.2s;
        }
        
        .overlay-fade-enter,
        .overlay-fade-leave-active {
            opacity: 0;
        }
        
        .nice-modal-fade-enter-active,
        .nice-modal-fade-leave-active {
            transition: all 0.4s;
        }
        
        .nice-modal-fade-enter,
        .nice-modal-fade-leave-active {
            opacity: 0;
            transform: translateY(-20px);
        }
    </style>
    <style type="text/css">
        .vue-dialog div {
            box-sizing: border-box;
        }
        
        .vue-dialog .dialog-flex {
            width: 100%;
            height: 100%;
        }
        
        .vue-dialog .dialog-content {
            flex: 1 0 auto;
            width: 100%;
            padding: 15px;
            font-size: 14px;
        }
        
        .vue-dialog .dialog-c-title {
            font-weight: 600;
            padding-bottom: 15px;
        }
        
        .vue-dialog .dialog-c-text {}
        
        .vue-dialog .vue-dialog-buttons {
            display: flex;
            flex: 0 1 auto;
            width: 100%;
            border-top: 1px solid #eee;
        }
        
        .vue-dialog .vue-dialog-buttons-none {
            width: 100%;
            padding-bottom: 15px;
        }
        
        .vue-dialog-button {
            font-size: 12px !important;
            background: transparent;
            padding: 0;
            margin: 0;
            border: 0;
            cursor: pointer;
            box-sizing: border-box;
            line-height: 40px;
            height: 40px;
            color: inherit;
            font: inherit;
            outline: none;
        }
        
        .vue-dialog-button:hover {
            background: rgba(0, 0, 0, 0.01);
        }
        
        .vue-dialog-button:active {
            background: rgba(0, 0, 0, 0.025);
        }
        
        .vue-dialog-button:not(:first-of-type) {
            border-left: 1px solid #eee;
        }
    </style>
    <style type="text/css">
        .vti__flag {
            width: 20px
        }
        
        .vti__flag.be {
            width: 18px
        }
        
        .vti__flag.ch {
            width: 15px
        }
        
        .vti__flag.mc {
            width: 19px
        }
        
        .vti__flag.ne {
            width: 18px
        }
        
        .vti__flag.np {
            width: 13px
        }
        
        .vti__flag.va {
            width: 15px
        }
        
        @media only screen and (-webkit-min-device-pixel-ratio: 2),
        only screen and (min--moz-device-pixel-ratio: 2),
        only screen and (-o-min-device-pixel-ratio: 2),
        only screen and (min-device-pixel-ratio: 2),
        only screen and (min-resolution: 192dpi),
        only screen and (min-resolution: 2dppx) {
            .vti__flag {
                background-size: 5630px 15px
            }
        }
        
        .vti__flag.ac {
            height: 10px;
            background-position: 0 0
        }
        
        .vti__flag.ad {
            height: 14px;
            background-position: -22px 0
        }
        
        .vti__flag.ae {
            height: 10px;
            background-position: -44px 0
        }
        
        .vti__flag.af {
            height: 14px;
            background-position: -66px 0
        }
        
        .vti__flag.ag {
            height: 14px;
            background-position: -88px 0
        }
        
        .vti__flag.ai {
            height: 10px;
            background-position: -110px 0
        }
        
        .vti__flag.al {
            height: 15px;
            background-position: -132px 0
        }
        
        .vti__flag.am {
            height: 10px;
            background-position: -154px 0
        }
        
        .vti__flag.ao {
            height: 14px;
            background-position: -176px 0
        }
        
        .vti__flag.aq {
            height: 14px;
            background-position: -198px 0
        }
        
        .vti__flag.ar {
            height: 13px;
            background-position: -220px 0
        }
        
        .vti__flag.as {
            height: 10px;
            background-position: -242px 0
        }
        
        .vti__flag.at {
            height: 14px;
            background-position: -264px 0
        }
        
        .vti__flag.au {
            height: 10px;
            background-position: -286px 0
        }
        
        .vti__flag.aw {
            height: 14px;
            background-position: -308px 0
        }
        
        .vti__flag.ax {
            height: 13px;
            background-position: -330px 0
        }
        
        .vti__flag.az {
            height: 10px;
            background-position: -352px 0
        }
        
        .vti__flag.ba {
            height: 10px;
            background-position: -374px 0
        }
        
        .vti__flag.bb {
            height: 14px;
            background-position: -396px 0
        }
        
        .vti__flag.bd {
            height: 12px;
            background-position: -418px 0
        }
        
        .vti__flag.be {
            height: 15px;
            background-position: -440px 0
        }
        
        .vti__flag.bf {
            height: 14px;
            background-position: -460px 0
        }
        
        .vti__flag.bg {
            height: 12px;
            background-position: -482px 0
        }
        
        .vti__flag.bh {
            height: 12px;
            background-position: -504px 0
        }
        
        .vti__flag.bi {
            height: 12px;
            background-position: -526px 0
        }
        
        .vti__flag.bj {
            height: 14px;
            background-position: -548px 0
        }
        
        .vti__flag.bl {
            height: 14px;
            background-position: -570px 0
        }
        
        .vti__flag.bm {
            height: 10px;
            background-position: -592px 0
        }
        
        .vti__flag.bn {
            height: 10px;
            background-position: -614px 0
        }
        
        .vti__flag.bo {
            height: 14px;
            background-position: -636px 0
        }
        
        .vti__flag.bq {
            height: 14px;
            background-position: -658px 0
        }
        
        .vti__flag.br {
            height: 14px;
            background-position: -680px 0
        }
        
        .vti__flag.bs {
            height: 10px;
            background-position: -702px 0
        }
        
        .vti__flag.bt {
            height: 14px;
            background-position: -724px 0
        }
        
        .vti__flag.bv {
            height: 15px;
            background-position: -746px 0
        }
        
        .vti__flag.bw {
            height: 14px;
            background-position: -768px 0
        }
        
        .vti__flag.by {
            height: 10px;
            background-position: -790px 0
        }
        
        .vti__flag.bz {
            height: 14px;
            background-position: -812px 0
        }
        
        .vti__flag.ca {
            height: 10px;
            background-position: -834px 0
        }
        
        .vti__flag.cc {
            height: 10px;
            background-position: -856px 0
        }
        
        .vti__flag.cd {
            height: 15px;
            background-position: -878px 0
        }
        
        .vti__flag.cf {
            height: 14px;
            background-position: -900px 0
        }
        
        .vti__flag.cg {
            height: 14px;
            background-position: -922px 0
        }
        
        .vti__flag.ch {
            height: 15px;
            background-position: -944px 0
        }
        
        .vti__flag.ci {
            height: 14px;
            background-position: -961px 0
        }
        
        .vti__flag.ck {
            height: 10px;
            background-position: -983px 0
        }
        
        .vti__flag.cl {
            height: 14px;
            background-position: -1005px 0
        }
        
        .vti__flag.cm {
            height: 14px;
            background-position: -1027px 0
        }
        
        .vti__flag.cn {
            height: 14px;
            background-position: -1049px 0
        }
        
        .vti__flag.co {
            height: 14px;
            background-position: -1071px 0
        }
        
        .vti__flag.cp {
            height: 14px;
            background-position: -1093px 0
        }
        
        .vti__flag.cr {
            height: 12px;
            background-position: -1115px 0
        }
        
        .vti__flag.cu {
            height: 10px;
            background-position: -1137px 0
        }
        
        .vti__flag.cv {
            height: 12px;
            background-position: -1159px 0
        }
        
        .vti__flag.cw {
            height: 14px;
            background-position: -1181px 0
        }
        
        .vti__flag.cx {
            height: 10px;
            background-position: -1203px 0
        }
        
        .vti__flag.cy {
            height: 14px;
            background-position: -1225px 0
        }
        
        .vti__flag.cz {
            height: 14px;
            background-position: -1247px 0
        }
        
        .vti__flag.de {
            height: 12px;
            background-position: -1269px 0
        }
        
        .vti__flag.dg {
            height: 10px;
            background-position: -1291px 0
        }
        
        .vti__flag.dj {
            height: 14px;
            background-position: -1313px 0
        }
        
        .vti__flag.dk {
            height: 15px;
            background-position: -1335px 0
        }
        
        .vti__flag.dm {
            height: 10px;
            background-position: -1357px 0
        }
        
        .vti__flag.do {
            height: 13px;
            background-position: -1379px 0
        }
        
        .vti__flag.dz {
            height: 14px;
            background-position: -1401px 0
        }
        
        .vti__flag.ea {
            height: 14px;
            background-position: -1423px 0
        }
        
        .vti__flag.ec {
            height: 14px;
            background-position: -1445px 0
        }
        
        .vti__flag.ee {
            height: 13px;
            background-position: -1467px 0
        }
        
        .vti__flag.eg {
            height: 14px;
            background-position: -1489px 0
        }
        
        .vti__flag.eh {
            height: 10px;
            background-position: -1511px 0
        }
        
        .vti__flag.er {
            height: 10px;
            background-position: -1533px 0
        }
        
        .vti__flag.es {
            height: 14px;
            background-position: -1555px 0
        }
        
        .vti__flag.et {
            height: 10px;
            background-position: -1577px 0
        }
        
        .vti__flag.eu {
            height: 14px;
            background-position: -1599px 0
        }
        
        .vti__flag.fi {
            height: 12px;
            background-position: -1621px 0
        }
        
        .vti__flag.fj {
            height: 10px;
            background-position: -1643px 0
        }
        
        .vti__flag.fk {
            height: 10px;
            background-position: -1665px 0
        }
        
        .vti__flag.fm {
            height: 11px;
            background-position: -1687px 0
        }
        
        .vti__flag.fo {
            height: 15px;
            background-position: -1709px 0
        }
        
        .vti__flag.fr {
            height: 14px;
            background-position: -1731px 0
        }
        
        .vti__flag.ga {
            height: 15px;
            background-position: -1753px 0
        }
        
        .vti__flag.gb {
            height: 10px;
            background-position: -1775px 0
        }
        
        .vti__flag.gd {
            height: 12px;
            background-position: -1797px 0
        }
        
        .vti__flag.ge {
            height: 14px;
            background-position: -1819px 0
        }
        
        .vti__flag.gf {
            height: 14px;
            background-position: -1841px 0
        }
        
        .vti__flag.gg {
            height: 14px;
            background-position: -1863px 0
        }
        
        .vti__flag.gh {
            height: 14px;
            background-position: -1885px 0
        }
        
        .vti__flag.gi {
            height: 10px;
            background-position: -1907px 0
        }
        
        .vti__flag.gl {
            height: 14px;
            background-position: -1929px 0
        }
        
        .vti__flag.gm {
            height: 14px;
            background-position: -1951px 0
        }
        
        .vti__flag.gn {
            height: 14px;
            background-position: -1973px 0
        }
        
        .vti__flag.gp {
            height: 14px;
            background-position: -1995px 0
        }
        
        .vti__flag.gq {
            height: 14px;
            background-position: -2017px 0
        }
        
        .vti__flag.gr {
            height: 14px;
            background-position: -2039px 0
        }
        
        .vti__flag.gs {
            height: 10px;
            background-position: -2061px 0
        }
        
        .vti__flag.gt {
            height: 13px;
            background-position: -2083px 0
        }
        
        .vti__flag.gu {
            height: 11px;
            background-position: -2105px 0
        }
        
        .vti__flag.gw {
            height: 10px;
            background-position: -2127px 0
        }
        
        .vti__flag.gy {
            height: 12px;
            background-position: -2149px 0
        }
        
        .vti__flag.hk {
            height: 14px;
            background-position: -2171px 0
        }
        
        .vti__flag.hm {
            height: 10px;
            background-position: -2193px 0
        }
        
        .vti__flag.hn {
            height: 10px;
            background-position: -2215px 0
        }
        
        .vti__flag.hr {
            height: 10px;
            background-position: -2237px 0
        }
        
        .vti__flag.ht {
            height: 12px;
            background-position: -2259px 0
        }
        
        .vti__flag.hu {
            height: 10px;
            background-position: -2281px 0
        }
        
        .vti__flag.ic {
            height: 14px;
            background-position: -2303px 0
        }
        
        .vti__flag.id {
            height: 14px;
            background-position: -2325px 0
        }
        
        .vti__flag.ie {
            height: 10px;
            background-position: -2347px 0
        }
        
        .vti__flag.il {
            height: 15px;
            background-position: -2369px 0
        }
        
        .vti__flag.im {
            height: 10px;
            background-position: -2391px 0
        }
        
        .vti__flag.in {
            height: 14px;
            background-position: -2413px 0
        }
        
        .vti__flag.io {
            height: 10px;
            background-position: -2435px 0
        }
        
        .vti__flag.iq {
            height: 14px;
            background-position: -2457px 0
        }
        
        .vti__flag.ir {
            height: 12px;
            background-position: -2479px 0
        }
        
        .vti__flag.is {
            height: 15px;
            background-position: -2501px 0
        }
        
        .vti__flag.it {
            height: 14px;
            background-position: -2523px 0
        }
        
        .vti__flag.je {
            height: 12px;
            background-position: -2545px 0
        }
        
        .vti__flag.jm {
            height: 10px;
            background-position: -2567px 0
        }
        
        .vti__flag.jo {
            height: 10px;
            background-position: -2589px 0
        }
        
        .vti__flag.jp {
            height: 14px;
            background-position: -2611px 0
        }
        
        .vti__flag.ke {
            height: 14px;
            background-position: -2633px 0
        }
        
        .vti__flag.kg {
            height: 12px;
            background-position: -2655px 0
        }
        
        .vti__flag.kh {
            height: 13px;
            background-position: -2677px 0
        }
        
        .vti__flag.ki {
            height: 10px;
            background-position: -2699px 0
        }
        
        .vti__flag.km {
            height: 12px;
            background-position: -2721px 0
        }
        
        .vti__flag.kn {
            height: 14px;
            background-position: -2743px 0
        }
        
        .vti__flag.kp {
            height: 10px;
            background-position: -2765px 0
        }
        
        .vti__flag.kr {
            height: 14px;
            background-position: -2787px 0
        }
        
        .vti__flag.kw {
            height: 10px;
            background-position: -2809px 0
        }
        
        .vti__flag.ky {
            height: 10px;
            background-position: -2831px 0
        }
        
        .vti__flag.kz {
            height: 10px;
            background-position: -2853px 0
        }
        
        .vti__flag.la {
            height: 14px;
            background-position: -2875px 0
        }
        
        .vti__flag.lb {
            height: 14px;
            background-position: -2897px 0
        }
        
        .vti__flag.lc {
            height: 10px;
            background-position: -2919px 0
        }
        
        .vti__flag.li {
            height: 12px;
            background-position: -2941px 0
        }
        
        .vti__flag.lk {
            height: 10px;
            background-position: -2963px 0
        }
        
        .vti__flag.lr {
            height: 11px;
            background-position: -2985px 0
        }
        
        .vti__flag.ls {
            height: 14px;
            background-position: -3007px 0
        }
        
        .vti__flag.lt {
            height: 12px;
            background-position: -3029px 0
        }
        
        .vti__flag.lu {
            height: 12px;
            background-position: -3051px 0
        }
        
        .vti__flag.lv {
            height: 10px;
            background-position: -3073px 0
        }
        
        .vti__flag.ly {
            height: 10px;
            background-position: -3095px 0
        }
        
        .vti__flag.ma {
            height: 14px;
            background-position: -3117px 0
        }
        
        .vti__flag.mc {
            height: 15px;
            background-position: -3139px 0
        }
        
        .vti__flag.md {
            height: 10px;
            background-position: -3160px 0
        }
        
        .vti__flag.me {
            height: 10px;
            background-position: -3182px 0
        }
        
        .vti__flag.mf {
            height: 14px;
            background-position: -3204px 0
        }
        
        .vti__flag.mg {
            height: 14px;
            background-position: -3226px 0
        }
        
        .vti__flag.mh {
            height: 11px;
            background-position: -3248px 0
        }
        
        .vti__flag.mk {
            height: 10px;
            background-position: -3270px 0
        }
        
        .vti__flag.ml {
            height: 14px;
            background-position: -3292px 0
        }
        
        .vti__flag.mm {
            height: 14px;
            background-position: -3314px 0
        }
        
        .vti__flag.mn {
            height: 10px;
            background-position: -3336px 0
        }
        
        .vti__flag.mo {
            height: 14px;
            background-position: -3358px 0
        }
        
        .vti__flag.mp {
            height: 10px;
            background-position: -3380px 0
        }
        
        .vti__flag.mq {
            height: 14px;
            background-position: -3402px 0
        }
        
        .vti__flag.mr {
            height: 14px;
            background-position: -3424px 0
        }
        
        .vti__flag.ms {
            height: 10px;
            background-position: -3446px 0
        }
        
        .vti__flag.mt {
            height: 14px;
            background-position: -3468px 0
        }
        
        .vti__flag.mu {
            height: 14px;
            background-position: -3490px 0
        }
        
        .vti__flag.mv {
            height: 14px;
            background-position: -3512px 0
        }
        
        .vti__flag.mw {
            height: 14px;
            background-position: -3534px 0
        }
        
        .vti__flag.mx {
            height: 12px;
            background-position: -3556px 0
        }
        
        .vti__flag.my {
            height: 10px;
            background-position: -3578px 0
        }
        
        .vti__flag.mz {
            height: 14px;
            background-position: -3600px 0
        }
        
        .vti__flag.na {
            height: 14px;
            background-position: -3622px 0
        }
        
        .vti__flag.nc {
            height: 10px;
            background-position: -3644px 0
        }
        
        .vti__flag.ne {
            height: 15px;
            background-position: -3666px 0
        }
        
        .vti__flag.nf {
            height: 10px;
            background-position: -3686px 0
        }
        
        .vti__flag.ng {
            height: 10px;
            background-position: -3708px 0
        }
        
        .vti__flag.ni {
            height: 12px;
            background-position: -3730px 0
        }
        
        .vti__flag.nl {
            height: 14px;
            background-position: -3752px 0
        }
        
        .vti__flag.no {
            height: 15px;
            background-position: -3774px 0
        }
        
        .vti__flag.np {
            height: 15px;
            background-position: -3796px 0
        }
        
        .vti__flag.nr {
            height: 10px;
            background-position: -3811px 0
        }
        
        .vti__flag.nu {
            height: 10px;
            background-position: -3833px 0
        }
        
        .vti__flag.nz {
            height: 10px;
            background-position: -3855px 0
        }
        
        .vti__flag.om {
            height: 10px;
            background-position: -3877px 0
        }
        
        .vti__flag.pa {
            height: 14px;
            background-position: -3899px 0
        }
        
        .vti__flag.pe {
            height: 14px;
            background-position: -3921px 0
        }
        
        .vti__flag.pf {
            height: 14px;
            background-position: -3943px 0
        }
        
        .vti__flag.pg {
            height: 15px;
            background-position: -3965px 0
        }
        
        .vti__flag.ph {
            height: 10px;
            background-position: -3987px 0
        }
        
        .vti__flag.pk {
            height: 14px;
            background-position: -4009px 0
        }
        
        .vti__flag.pl {
            height: 13px;
            background-position: -4031px 0
        }
        
        .vti__flag.pm {
            height: 14px;
            background-position: -4053px 0
        }
        
        .vti__flag.pn {
            height: 10px;
            background-position: -4075px 0
        }
        
        .vti__flag.pr {
            height: 14px;
            background-position: -4097px 0
        }
        
        .vti__flag.ps {
            height: 10px;
            background-position: -4119px 0
        }
        
        .vti__flag.pt {
            height: 14px;
            background-position: -4141px 0
        }
        
        .vti__flag.pw {
            height: 13px;
            background-position: -4163px 0
        }
        
        .vti__flag.py {
            height: 11px;
            background-position: -4185px 0
        }
        
        .vti__flag.qa {
            height: 8px;
            background-position: -4207px 0
        }
        
        .vti__flag.re {
            height: 14px;
            background-position: -4229px 0
        }
        
        .vti__flag.ro {
            height: 14px;
            background-position: -4251px 0
        }
        
        .vti__flag.rs {
            height: 14px;
            background-position: -4273px 0
        }
        
        .vti__flag.ru {
            height: 14px;
            background-position: -4295px 0
        }
        
        .vti__flag.rw {
            height: 14px;
            background-position: -4317px 0
        }
        
        .vti__flag.sa {
            height: 14px;
            background-position: -4339px 0
        }
        
        .vti__flag.sb {
            height: 10px;
            background-position: -4361px 0
        }
        
        .vti__flag.sc {
            height: 10px;
            background-position: -4383px 0
        }
        
        .vti__flag.sd {
            height: 10px;
            background-position: -4405px 0
        }
        
        .vti__flag.se {
            height: 13px;
            background-position: -4427px 0
        }
        
        .vti__flag.sg {
            height: 14px;
            background-position: -4449px 0
        }
        
        .vti__flag.sh {
            height: 10px;
            background-position: -4471px 0
        }
        
        .vti__flag.si {
            height: 10px;
            background-position: -4493px 0
        }
        
        .vti__flag.sj {
            height: 15px;
            background-position: -4515px 0
        }
        
        .vti__flag.sk {
            height: 14px;
            background-position: -4537px 0
        }
        
        .vti__flag.sl {
            height: 14px;
            background-position: -4559px 0
        }
        
        .vti__flag.sm {
            height: 15px;
            background-position: -4581px 0
        }
        
        .vti__flag.sn {
            height: 14px;
            background-position: -4603px 0
        }
        
        .vti__flag.so {
            height: 14px;
            background-position: -4625px 0
        }
        
        .vti__flag.sr {
            height: 14px;
            background-position: -4647px 0
        }
        
        .vti__flag.ss {
            height: 10px;
            background-position: -4669px 0
        }
        
        .vti__flag.st {
            height: 10px;
            background-position: -4691px 0
        }
        
        .vti__flag.sv {
            height: 12px;
            background-position: -4713px 0
        }
        
        .vti__flag.sx {
            height: 14px;
            background-position: -4735px 0
        }
        
        .vti__flag.sy {
            height: 14px;
            background-position: -4757px 0
        }
        
        .vti__flag.sz {
            height: 14px;
            background-position: -4779px 0
        }
        
        .vti__flag.ta {
            height: 10px;
            background-position: -4801px 0
        }
        
        .vti__flag.tc {
            height: 10px;
            background-position: -4823px 0
        }
        
        .vti__flag.td {
            height: 14px;
            background-position: -4845px 0
        }
        
        .vti__flag.tf {
            height: 14px;
            background-position: -4867px 0
        }
        
        .vti__flag.tg {
            height: 13px;
            background-position: -4889px 0
        }
        
        .vti__flag.th {
            height: 14px;
            background-position: -4911px 0
        }
        
        .vti__flag.tj {
            height: 10px;
            background-position: -4933px 0
        }
        
        .vti__flag.tk {
            height: 10px;
            background-position: -4955px 0
        }
        
        .vti__flag.tl {
            height: 10px;
            background-position: -4977px 0
        }
        
        .vti__flag.tm {
            height: 14px;
            background-position: -4999px 0
        }
        
        .vti__flag.tn {
            height: 14px;
            background-position: -5021px 0
        }
        
        .vti__flag.to {
            height: 10px;
            background-position: -5043px 0
        }
        
        .vti__flag.tr {
            height: 14px;
            background-position: -5065px 0
        }
        
        .vti__flag.tt {
            height: 12px;
            background-position: -5087px 0
        }
        
        .vti__flag.tv {
            height: 10px;
            background-position: -5109px 0
        }
        
        .vti__flag.tw {
            height: 14px;
            background-position: -5131px 0
        }
        
        .vti__flag.tz {
            height: 14px;
            background-position: -5153px 0
        }
        
        .vti__flag.ua {
            height: 14px;
            background-position: -5175px 0
        }
        
        .vti__flag.ug {
            height: 14px;
            background-position: -5197px 0
        }
        
        .vti__flag.um {
            height: 11px;
            background-position: -5219px 0
        }
        
        .vti__flag.us {
            height: 11px;
            background-position: -5241px 0
        }
        
        .vti__flag.uy {
            height: 14px;
            background-position: -5263px 0
        }
        
        .vti__flag.uz {
            height: 10px;
            background-position: -5285px 0
        }
        
        .vti__flag.va {
            height: 15px;
            background-position: -5307px 0
        }
        
        .vti__flag.vc {
            height: 14px;
            background-position: -5324px 0
        }
        
        .vti__flag.ve {
            height: 14px;
            background-position: -5346px 0
        }
        
        .vti__flag.vg {
            height: 10px;
            background-position: -5368px 0
        }
        
        .vti__flag.vi {
            height: 14px;
            background-position: -5390px 0
        }
        
        .vti__flag.vn {
            height: 14px;
            background-position: -5412px 0
        }
        
        .vti__flag.vu {
            height: 12px;
            background-position: -5434px 0
        }
        
        .vti__flag.wf {
            height: 14px;
            background-position: -5456px 0
        }
        
        .vti__flag.ws {
            height: 10px;
            background-position: -5478px 0
        }
        
        .vti__flag.xk {
            height: 15px;
            background-position: -5500px 0
        }
        
        .vti__flag.ye {
            height: 14px;
            background-position: -5522px 0
        }
        
        .vti__flag.yt {
            height: 14px;
            background-position: -5544px 0
        }
        
        .vti__flag.za {
            height: 14px;
            background-position: -5566px 0
        }
        
        .vti__flag.zm {
            height: 14px;
            background-position: -5588px 0
        }
        
        .vti__flag.zw {
            height: 10px;
            background-position: -5610px 0
        }
        
        .vti__flag {
            width: 20px;
            height: 15px;
            box-shadow: 0 0 1px 0 #888;
            background-image: url(data:image/png;base64,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);
            background-repeat: no-repeat;
            background-color: #dbdbdb;
            background-position: 20px 0
        }
        
        @media only screen and (-webkit-min-device-pixel-ratio: 2),
        only screen and (min--moz-device-pixel-ratio: 2),
        only screen and (-o-min-device-pixel-ratio: 2),
        only screen and (min-device-pixel-ratio: 2),
        only screen and (min-resolution: 192dpi),
        only screen and (min-resolution: 2dppx) {
            .vti__flag {
                background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAK/wAAAAeCAMAAACaRItPAAADAFBMVEUAAABxHmAJN5IlMob////OECUBAAAAI33uKTn80RbSDzT/AQEAKX/+zQAAI5XQFiwAl0DwKyz+4ADeKA9Cit0COJTCJy3uGyPmBRX/+/v5+/wAn0rbJB4BfjzWKyDkHh/CAwP+1AABm2ICeV7HCzAAYjPpDi4BN6gEa0IAJ2UgQ4zHCh3aFRvRKzwBAYwQrisCMpkDUqMAhFDbAQYBak4EaacEM4FluOYetToAHaXbDCQBrcr+vwYFWrgkS6X64+MnrWYAot7v9Pn73g4CJYkAa8F2qttKrtYFKnoBeTTeMTfQ2umvHisHiTDGMT7rJjj00tYAbDV2s97dEToAgAD730X3x8rhUg7zpwcZigBIl9CfLzcAZgABBmkCQBs6fs4DL6AgXjcCP4gAf//qqq/6fQH77eoQR7E6eESvvNdmzP/POVX+9fQ6dMRzq+ApnzwAcs/QAQHQKBLvQESMGjj9xyG70uuZq9fyfYEAcsYRQHqmp8Xi5eE9XbimkSn4u7vpZm73rrNMpFr+1SJalrLUdoGvDy4eikVasIdYWVc+dyng6/Trixi5TVS+CiwBUpXBqhmvCwrMpj02ki8Dlcb9mjMmHFL8PTLP3tHulpj/UBDt8u7tAQEOEhVddrAtT4xHbJAgHhYztDr/7wgDRa36V1jdT2Thyim/wzrtwwxgiMUBNrhxen0SiAbAYXQ/mgGLjI9hWg/gbREBmQDdtBGho6NhXIgUtTkYIm+AfkxKTHl2i7gHcGmYuiHWERKNnMEXGJcNMW6IrYHPyMTQxxY4W5z98EKNdRCmLVBKbakFmLYBsGWDDRKgyeYAcix4s5xZnte6u7VaqRmc0rQEUPDbm6JTdlHdT0fPghYskQw5BQg8MgeLpUjo0wmq2MOLSDhxkTCxXRSWv5xOLmj02Z3FSSn46L5AQTkSRJpRU5L732IibLecg29nChS6mGXXwYPubCwTdci02a8wSGmCNxgyJnk6QaO/lpU1ra9pnaslgqQFUkXztU0IXAImrNkvhOgeZRpTAAAABHRSTlMA/luzB+5e6QAAyUxJREFUeNrsnQtYU1UcwLM2FzqbUVpbitqbAWoWsxBdDSqCUtIcpFlmNF3Q03iEMIYvIMAwUiECNBJFjYLUQkRCINJPSyyRUCQKxQxTo6zMHufcx+777tyxCWm/e+77//Gx3XPPPffeH38usyalb1DMUigWBAcvUCgUQ34otYbOUXC5DHAPjUJ3BsEDaMDYgSR3Pv2FGDC2P509I2n88hEdGNvSH4kWECrps41ABMbeiQiMlSMCY59CBMa+gAiMnYXAypV7lsLYKxGBsWuT0zeMBiwYOHABmN3zQ/Fa46ejucDYaxGBsXfQsIzKGDAgbNDmwju4wNi3EIGxV0HGxlaPnaS1DOJQcRUJjFXSUFiiaVgU9H0w9i5EWHX90JvTbZyfP4X53V6NCIyVIcKMDV3iY6c+ytSy0EgvuUogBOzwigwFQTB2HJOUOjd+8ONAMTZWI7OhTr6SjsA5bPSRqzjA2ABEYKwHIjD2YURg7GBEYOyTvhOQgLGLkIh+lll31urNNZ41C0xWwbrzACIwNvdA0pIlk+0jtd0bSHKdXsZBf51tN4x9DBEY+wwCX64LD4OxOox4Hcn3Nw8A3Py9joXoMX5x/XQaGdhnEwVGPEunQy2zoTlyIx2pV7Tb6Jg1GrFW4SY6bXIaYdHss/caRGCsGxLSWwUlIjD21V/HXhWIAIwdgojU32HI9hQkpLbmBSEa5Nj+iGD1DFzZlQqdEqtnQYohW0ut2Klp3lWdB2tm9S7sAGlgbPre8ePHv2B/hLE304jUg0NbfDMvMPZ2Nt8GrFkj+/IW9mYY68miJgT8bHWoiq+1uYXL7QkC35kXIjDWHRG8NzQDaZDaku6RcIwHzCzLfnGMfaR+D48gAmPHIsI8Lwz1Osgu/rpPtJOLPQGw/oJZPKi/oeN5kNqmTkWE+fuGnPkh+MopW8/EyPiQ2vbdiAiMLY6IkhmqtQqSAj3o8/noCxQk2uqISJXVyKpnHh6cOQVfGxW1diBgbRTfZ6vKRq8PMibq5Cm3AqYkq3l+rhwRvp+rVpMzJlLbXzki7FhVhhuNKs5xC8TQpcUH2ujuhlPWDhib8gEaMHbiRN+JE59P14T8CJd8uRNikHpezKATQ6u/mhjGLhg79HMkhnK+3wzx/kNnauq9NyAgpQ8j9S73JUSwniEi+JOXq5AKjPVBhF3XNft8aWwaREdqXb8BYzA+OyKj0fEsHRirQQTGqhCBsSsQkdLfkfo9vIgIs+95PMYY7HFQH3tcsO85mMYNX9GvFxGcY+w3bVquWsZo6kwmemMIduZOm+YHY0eNGjWo6t3BIrxbNQgEwdjliI/iiHrmkn7qrYjA2NmISD3G39ZFI4GdFyK8u77Ecoj22e5AhP79Mg8zdxuMzb9lOBJSrwETEJH6/V6HCIx9DhGp92/+iDDuRb5fJorUdt0fEalPcWciAmOvRwS7ziMCY9Frw3s0NlrcB40iGOSecfPNA6gCY99ERGoPnNHzjVslCPIThbHaNKxXkuFe5O4efs3LNvyLivyptWvC3UFAONYr+ZjG3VVuNDJU7O9sECKco7btDRrbOEftJkRg7P1sXjvz1Jkz93OAsVqCwkJioT4E3ETVU1sJsLt5RKS2ZvDQmpj3M3qh585TEMHuuhGReiW8neKu27/SaKjGP4JzDs3iYeTLIznA2LbtaMBYnRhBhTH6Yuqz3YYIjA1DAMY9RDE8R8YgZzhtJ+d9BaOHeoSxC6u7iEh5VyD1Of0Vl18mghIRoWcji9y4SD1jvL29dwwbtsPbe5gJ8S0U6+wSOAv86ESo6X1dxi6p/YoWuR9ybEzibOTaKiNJePpJMaT2iwenzPSIi4rzaEu5cfdbIkg9bmeXvoOE1OeLTzD5606R+9sHEZH65o7eC9Yf+PxVIXry/kFnEb/6TkZEan24DxEY+ygiMHbi3ImgALA5P6vXB2DtwxwahedPnJhODCfOB3OORefD6Fc+XxqHBwEO+/Iita9rTTZU66jz4viH4LzQCfUAEJHSkkv9uXcjIvXnDqez/jMaK0bQkWpuzEMExury0duSsjFowNi5iMDY5IPeSEi9tiQiIqWtlhrrSYfhu2TcTEdq2zeAwcy7hJB67/4yIjBWIUYQ83s4eXQYEjD2XsDCo5mZXV2Z7QvvFUbqvTD9vQMkYiQ/Un/uEtmW/jidhlCVl6CpI1R3/ljMBcaO5vLrjoFc7LVR71a1ljTkU+fxRESk3v1s29q9bVv31m3E/PuZD/MjJVZqm7ob8vtuu3DfFQdEcX/aayTn1rlxqLv3RhJp9/foLYjUTz8MEaznvXTaNNSeANEikS3R/PkiV3cliVZLLgUtEzgbJiHi+JtGNTWAFRwZCeXMpSZojNZgUWDs44jA2C1/ffPBNwhctrU0zhgCqgOsDKAqgLX0AoWT5d+HvhAq0uXfpS1I7i8UWfk/2//yL4/4e3Lp0OJco9SuNHgNmhRSQLwWvQeupReM7vPy79jjBebEwqxBbCws+VdBDlz51zb8l+VfcDucWyzaXdDINOC9oArovwLqrwq8VQRBrpJ/Bc7hymUqBnLyIWzHiekBkEVFizil1Ta9APLvGGokVjmbsbqQ/+dup8q/4W+/7Ur5d0nugdxixMcYS1k8TM0ZCMi/arWY/PtBVdUHTpF/Z6wvKfeQUw+um0j7Vykm/yK6vx7OlX8Fr2iulH9VduTfsL4v//qp+gWODQwccpX44ID8q1OigPecxPXf9dmo8i/zRb52tdngbKmCqmdKvJ7NwerZhl2xZlDXZikrY8z1YK6tNpvrYazGEDMV6r2wvCA4vyTk31EIBZN/Ed1fyfKv154WKeLMtKFtQAC+COVfrP4WeGL11zMeW6scz4Ngm3qxyL8+xUlRspBKLb/8q608gEcw65kqPFzFnvPf4qr55V81/bMF1O3va/Iv7Pvm5enBT+3T8m93XVogSbylQgdm5I4mSv69Pxtd/sUEX1L+hYU7wDLRznlRU9NdgyT/amRc+ffzXz9B4NfPpcq/LWs2HTmSeq9T5V+0u1zXy7+Ijhgu/05GGTjyr8a58u9gMIACBjH5V+r5Bm722IW7SbL8i97fcUj+vUF84pj8O44c+OTfoWSBsfOBGDHfSDXKapOso0NmojXhRiwExpaMArRWvTgYQL9nJXmxqhVGlGDfA+hsXCLyr0dYmIf8aHl5uQfPMc7Oripxgvy7v25zw5r+PZV/ycPM2KBmfr/5Tz40HAH7fSMlU/5N3fn7RSv/brZAwjH8M5r5CbfJvzWY/BspitR23d8/Otz+cCnLv3Ig/cIRTHD595WRCLzS2/Lv2Dlp7eX46++wcGD3+oe9TJJRVJRhWwnzh+ov2HkRyL8/Lv7ww65Nv2354zVB+bewMja2up4u/1Jbpcu/Uu/04OOD2lq1min/ws4FNV5o+Te/5SSgJV9M/oWgyb8rG9o6Z9k4kMsF/xNh58i/QQUhSZEDLrj8q9E4Rf596X4wihcXy7/awsudI/9Sz0ZOnyafjfxR4sZF6hnj7R0cfPBgcPAOZ8u/3n5k4ci/1B7p8i94SeyHGiuLip07u5fl39dT5rUB+bdtXkqTqPwr9bh9/XW/Hajyr3x5y39W/q0t/V/+tQcuaG3YNxFj3wYB9ffNgICs19nybxdwf8myArq/Ph4qfMSPxRdPz3Sh/Dt/rXWt/b7uVuz9sQ47L2Ydh2uGSoUd9UkDuHjl38HOlX+z5+FFfDIPl3Q9kduSaWWukX+jkhj27wju1LXyr3BbzRVZBWMvXflXq1TwEBhUQ/8e+h9qD5Mk/2ZaKrqW/NblfPk3ynowF0n+9UYYsJ/rVSxrJO3fdL2PoP0rZNIsZvEHR/69x3H5F7q/6zaX5fe/EPLvtq2gbINzWEqX8CM1lrwEIMq/v0/FDWA49FH5F6EFcbn8m98f6r8uk391ithYRV+Rf6H2Kyj/3gWGcalH8kLjDvZA/n3/fZb8K6vtfPwDFPlXEQhzaYbsgpUBVAXwmgt44X0486+K+8eHa9ZwNu1RgVDez/bfkn+vFZN/H3hhqvhIyr8I4m+oDCD1sfHoe85GghejifC16FnwUjQmcTRFQQFX/n3ghd6XfwGVhsqrtFnImX8VF2fmX4A61CpWHxfmyNQamcnqxdepUHl5WU0yjVqWs9BV8q/QOQzkX47+i382telYx4lFAZDWokWtRa0BrQFA+cWkX3K6yMXy75jBFJT/y95O1IX87budJv9GP/u2a+XfAweScqnMvz7UAgsYG8+iJl5bX6gFMxYC8m9ysrD8+3hdUVFra9VjXPbv55F//1n8jAD/7FyX4UHUdR2gOy2rIi3e4cy/L1ZNp7HCY5hz5V+xK5pSAX61ykowAYsXMPNveXhYn5d/VSq/Zd9fdZULMv8qgrQKVPlXVP8dfjg6G0n+BbUjiqwh+FlWWJmgcb5UoRjCqmcbQB2bNUsRq4nZpWiq0ZrzzIWg8xCE/74aIvkvnPDNL6HMv6OoKcUoxpTM/LvvWrtFuvzrtbxFkjhDCsAXmfzrGbQt02pMwOrvNqyd9PQcz4NQm3qxyL+VByj9lyP/am17q4l65gesCazRDwMT9hzu82Pe4pqS9Gqu/KvWJ5no8m9Aa1V2n5J/1bURtZnLl2eCmbovy79NrRVKyvfNiieXlWmthAmMCafnHMr8CxZ/FMTOeRFU1hnocObfzz8JClKyBu6GTyTLv8BF7PzpWMKRL+91nvyLcJfrTPn3nXeEM/8iDIT8izHZ3iie+Xfiwh7Kv7j7C0d78m8MIrTMv3LGvR9nRS5R/kXv70iXf29A0H97lPl3HEf+HcrM/AvS+gI1wqq3/UFlxwlAh+2PLPVWsBskB4axhxpI/Zdxz0osvEuovw2H8O8B6r+XhPwr9ygv2VzSjKu/XPk3+9usnsq/L1atywKvSXoq/6oTEtg3ehpNQoKa9f0+iZL8V2rfaMLO9al9UP7du9eO/NtdgyD/Wv6EhL0NeNa/OXzmq1zaw5tt8m9hPJgUhIoitV339w+P9oeITaMvQfl3EDPzrxyMRObfkUhcCPl3krj6W07Iv4T+m7HjZZxyd/dyYnFHBqH+Xgj596gr5F9fWDB8r/2tufnUqYqKjOZTi+9/jdjHlH/r6wsqq82VDPkXbq2EW6XLv0itGVf+5Wb+ZYwXVP5t2UPQ4ozMvw2D2launDULFIwEExf89304refyb5A2NiFuAIQr/27EcJH8m5DjpMy/L03s3cy/v37e74rLnSL/etZsK8WejcyfTz4bWSkg/4qfMTodS/690wq40wWZf71hgajY8q83VSTLv+A1sR9irGm6ybDhttm9Kv8ObUtJ2RK1MyWlbea5twjOvbX73LmF83a/tXv3ue3EVnvHraamJogp/36d+Dmq/CtfdvK/Kv/qD2T2mvx7FE6whaP4jFX6kvw793mD5imY9fcpjeF5QfX36adZ8u8mPO8vLOdPewBUHh7BHthIyL9f3PKLy+Rfa7Ixbu2V86fY6eti/9PHmFdpDg42b11CZEH8P/MvW/71GzHi1h5k/s2eJwbcS0i6x1ei/pfCaWVS5N/3EAom/0IDYhhQfOEgqP+OcKn8K36N3VJvWxSKvXTlX11MPY/6q0izMOXf/msaMsIkyL8//VTRVfETJv+mOlX+NQ0daUWRf72Rf67KKzIqZw2hweVERQrZv0J1ZzGTnevWM+Tfez49e/bTTx2Wf/fXEf/LyvXyLynzEvMcEz9SY7E7/ISoWvwRmsYgBCH/7n1wd1/P/CulBSGfEAsD90qXf90a+mP6r2vkX4VCWVgIbk56Wf41hUaFqkNNepNen6QPTTIak0KNxihW5t+7YLnxuzx9BLR/w3iLXfm37JvH338cjo9/8/rjeNJOQ9Nf+/d/AIrocNmCBdVmY65eplf56I3JUYYF1QsW6Jwt/z4kVKTLv3I58+7j0KH+ZWVwSuckdiBEPpuSoG/LvzNiY2L27t3HL/8Cu9cuD1Dyr7j4q8n5re03qfIv9f0OHKhPIr7f0SQhIVz5d0t1n5B/zyYCtFnimX8VtuFizfwblbTERzTz75iPU/Ng826MJJL/qlRwJNL+RhrhvrzUj8e4Sv4VOofxd7x+Kj8M6t+vqcnURsdOTF8UQFAEdF/+zL+vIBTHMv8yTd/9+3nyKNnqwpO+PZF/3cBA4A/cX1fLvxEHiqHtixVygVoi12HsHAa6SZXmkJyQEHNloY65h0/+VatNq1aZ1GoB+beuCCT+rSrisX/r6njk38Xrn+Hnj3XhUGqi5N+0rEGbK+KRM/+Ow6dc9/cE7v46Wf4Vv6JVG3Rms85Qzc78O9dFmX/LsWlYee9k/tUiQgojfkt/PX58iDjS5V/trtj6OVj+X51gIeVfMf13eErKunUI8i+sG+fPM+XfeO0us8bpUgVVz1Twyq4B9cxsMMfmaWLyZIaF3/2cbTbIQmLNBvL3NYTsHX/JZ/4dBf1efApn1OBOn+Ly7z5g/4oUhzP/Ak5KE2coAdhV8u/w7W+8sX0covw7pLCwh/Ivu/6S7eR4jOcI8DXxNlV7/HghQMuSfx+wjYC9oIvO3NqX5F+Flqn/UvIvcw9Rz9qaM0RpbmPc4qqTViXzyb/Jq5LUdPk3oLVuv6Py7+mMjNNOln/VstLlmQeWLz+QubxUpu6z8m93RcW6ioo0PO9vRUWdpYIwfrsPwx1NSlL+fekmBzP/Ph8TIoDIeQEJXHmyM8jhzL+fBLFRKjlbpMu/8MVkftmbJzqO5XwFEgAPdob8i3CX6yz597rMyZ9v2tSvX+Z1/PIvSiHk38kI6q+LM/8Oxu1fMIjKv1IztUDhBgwQOCcW8SVyh/TMv+j9HcnyLxrS5d9xtoGb+RcyFA74Mab0XuJB7rHysLDyY8SjW0oNxvuIdP2Xgqn+4v0HOQDqv70v/44gJxTUZifIv5Dy8PKjKn75F/Lt5mga/tyJuPy7f/3mhkPsPjgi9H8raUjblGOQMTDkfJhmUDO/X6Tkv2LXAIhu9dZCZubfPin/pqeLyr9Bys5uMMHQcQuv/Nve3A6EkV9eJdmDrbS3k/JvfOGCgsIaRPkXFjhSSwLtOjB7of67AkzgjLt8aWb+HQTuqsAEyr8D5Jj+Cyd9TP49nnhcVP0l5V9S/yWT/17j7n4NmfYXV38dlX/9mSNnE0P+PZoR5srMv77Vpc0dp2KrF/9Re6r5VPVE23ZS/iVT/5rNu1jyL7VVuvwr6V2XWh/a2Nho1JtY8m/vZf49uWfPyRYAnEuTf1U88m+beyeYrkxrSMP135Ev86sI8CFomhT5Nz6+uzs+nuX+7goxFg8gkTPk342zu5uamuLv2egK+Vfz1Xca58i/WOpfFhNfoo8uln8nD/j8e0H9V4kI/SwI6dcvhDgLGt14YPWLOWfMnK6uOUz512pNSoqzSsr8azAgZf71U4HCm/mX2OdI5l9Ai5xX//UIY8Wqj0WBFuj52b0p/1qXdKUe0XyV2rWk9C0A1H6b5r3lO+/bb5t274ZTQv4VbekCFQrPP1f+ChYo+Rdydhma/AvY0wfk31eYhRyp0kcz/2ZmtmVGXqDMvxMmOJr5N3bvRIy9scLqL1v+LTyFmb9wOH8Qpv2F2q/KAyuE/AvoXOYa+dcaqo+bf+Xa3Pn2jYUYeF6YfHxM4D5fZgbnhVKBEwTgkX/TYxcvjk2/eOXfwWz5F3q/ED9H5F9S/RXK+QsLKf9C5uSjyb/A/nVF5l/s3x8H2/L+jmBPXZ35V6ythnrJghxzEJhjiMRSStMFk399rC6Rf0dSIwW11V7m3yBFYFqWe1pgEF3+BZRtXhGGLP+W/vZTV4UlE5N/4eAk+VefHCEfeTApKcqe/AvwRihYnVR5+ejzOvvjNMqKBexfobrDTvy77ieG/Hu2AHAWXf7lpv2FYvJ/OvOvOi/hVM6pUzl5eaADmCgEKf/+juX9ndCHM/9KuQdmiAc8SZDVDmb+LSsh9V+p8u+UtXblX0VlAWwHKs2K3pR/1WqjNcmqhzdEubkRuUnW5Ny4ZGsEU/7NHjeOSP6bYzJaHc38+01De3tDQ3tZWUNDcwMm/8Ln+lsaRo2yWx+CAT4+KhUoKjiHq0HUHwn2ucy/4H1DCxW8pv8ay5qGhnwLWKC2tnhhB0L8s3l69vXMvzP2GjQaDfBqpl7LlX8Jt3cqmAjMwQiAsSLiL3TR8xq7ftlz8mStZPkXf2k5EJ9dh89Gk3z6KVv+/WdfaemD/zhf/t3NLHALdyOzi5MYEnI2nrB//Z2c+TetbTJ4u9qW1sflX3VEsUouDH5ZH3M3eLMI3xCqvOBGLwi+pILvEsHDNRBytwvlX+45DFBBHp758EwAmFHyr0ZjS60eBVIATw8IcAsH7smiIji04tNFRa7N/AsZg01IJ9TdnfUmFe6i1YU/zzko/7q5LZp+6gScLZoenfE2wLXyb0RE0oElk+3DlX8XxyR8l/Pdd/rvckIq7cu/pri1wCSKM/HLvx8U1X3z2OPfVAW8/xibb77hkX93rpvxDA8z1peUe8gZ8m+8pSSrW4eU+ZdyfsnlFw+T4i9kRfAwZ8u/Ilc05a76XdVanU5bDRaUNPl39uzqSbNnuyLzry3lb1hYL8i/6YjYssX5yYtDNYY8gwgOyL+xhuo5iJl/NwrrvwsPLxyeHZ0tKP+qqVlHxpsmGV3+hdRXpztXqqDqGbhC2OrZAo0MPImYt9CwcGd2YbyuIF2mqbb9vhpDzFRo+Qrrv86Qf1v6tPzLzfxLQW2kMv/iIzbjX53hkPwLfBwp8u+Uq6+esooSgJ0v/74xF+MNBPlXO2TsEIsFTLQ9kH+F6u/U8ZDKyj/+gON4DNG7BOVTU/e9dubMmaeUIpl/96an7+27mX/Zki8p/7KlYLye+aXdeLg1QJDWwzem+dFucU3JcQPX5urZ8q8+d+3AuGQTJf9C6qqyHZR/o6OdL/9G3GmN2LMnwnpnhB3512SMiIgwmtS9If9W1GXVWeoqlETeX0g8nhAY22Gh5N/XUhzI/AvYYBDqFIjfPWu1nocOeWq1Dmf+ZaGEhYUD8i9gacuahs2LpgP/90jqvU6QfxHucp0l/3ZN+P7V1HNpP/zdxSf/oqi/VOZfwv+dLDZ3cebfwbAgZf7diAg98y8YyEVyidohWf5F7+84Iv/ewEjzSy1SO3qS+XccV/6F2i8BjIVNnHE+sCPmG8F+MBiPNjeHGcECYwfRR2Trv9RtLKX+kvIvqf+6Uv5d00kuda6Rkvl3hDMz/0JuFjrG2ThVJYTm64+S+Zeb9pfx6Zh38auuBu/HwNTeEyCNZkvnprRGPNGvGp8mNKZt6vxQo2F8v0jJf+09QW08cb5Dy5B/D/8+gcXvv//e2/JvY6OY/NvZUAZo6AYOB3Lm30HtrwJmwml7+y+/tDeTLnA7If8WLsgLqYz3/D5SFHq7Trbg5EAVduZfOOLT6HAwMpZdn/n3ZUQuoPzrvtmymcj8i+f9BWUATf71Igu2cvToSPZGL9fLv5N2bdg16Ti/+ttcDllBfLuk/utevgMu7fD3x+fl7oT6e2Ey/2Ycpcm/dzhX/n3Nd+9vzR37fFev3rT6x321b9Y+YLN/mfJvvdlcUM+Rf+tjwFbp8q/4nZ6WgLrTM9XWNn64pbY2VK1mZ/4luMCZf09i6u9JOAGLPc78W5IFJivbSkaVtGH2b5KRi+33bZMg/3ZXALoZ6u+c6oRcm9op98mly78bu7OKihpa3S26jS6QfxNSU3N6Lv9yvd+XYGHhavkXvCrvt01A/1UiQpwFB0+D2t/PYukX7KM6DXNORbtxsXf9D+zqCmTIvzusEUlxw4Jh5l+1CPR/p6wxmzUaxMy/3ryZf1W2fTBWhYjt7GpZ6sfj/gZksM4YQnswT5rde/KvyWTKM8gMeSZTyFsQ3ybLt/N8fc9t73za13f76u1gGXv7KXbc0pqCFPHAelEEdddQ8i9kY78dAxHkX8jyll6Xf/tE5l+dVPk386dMUEpLMy+A/Dvhd8AEx+TfiXMnvvf88++BmZD6y5V/u05A9fc8GFcE42l/fYYB/xfOggn5F/L0TFfIv/OTo6D3uxYIwMJQ54WPCp4a1HlBMpphhGgwZFveAGyRaQRxWP5V23CV/JuT41jmX9L/lS7/IkKTdIPyUeRfaP9KkX/fI6cU7C3kd2aKOOgtxghXyr/i11jd4oLV9QoCwdheyfxbnByJy79P3y4AjI1DBL/7GTkSjOwBFMZWuvzLVX+7LeCGkPk94K5NVvSKMET592hmaSYAk39Tgfz7pXPk31ziFjQUIfMvHMUlYEL+lQMxx6hJ64/zoWyJl5yLsA33x2IaX34JVyn5957ExGqzuTox8VNH5N/960Ha33ya7SRV/i1DhJ3NF5ZMAaTGyqAdd+rNN9881QhcvJjbhCDk3/FT+3zmX3v3wPFaHV3+VR/rOGbS4FcrbPVEB1gjVzV5YLdaQP71EDzLgIxf4lYGOt/Lpjk/86+iulKhUyq0hRIz/yYmwtGZ8q/VmmuNA/5vnD7OGKc35gIdmCn/brakjAMA+/fer/L0uQeDccKIEU4o+Vfc/i0vb24HDjCe+Rd7x1nbsNndDlhlwKsB3iNi3N7Nux1M+pr8K19KNSllZfmWBgso+SD9L0n+UvxACH+2oJ0fbmpsLPhwSxCv/DtsxAjvZcvlI0bIly/zBqu9JP/GGgivJn3vA/u48i+u/wKmwjnfOin/Cou/sJb89ssvJ0GpkKkly7/UC1E4xyajKVjy7wPVpT6RpdUvOFf+ncAB3P9O4MLs4syOjR07icr96+/EzL9thMU7pa1vy7+y0Fwx+5e8rI9ZmAMbepMVWr/WCKMxwgodYKsJbs1ZCNRfV8q/3HOYlH/lmYYEQ+menDxDlxdct302ugFsOrbi9GcBkEWtWN5fLPOvi+XfMYPp7G91B7TuH8zaQa8L+X/udizz73SQ5uxYR8cJt0UdK952vfxrXXKguHgyASPpr7j8q43N2dm4M+e7n3N21n6XY9bak3+jVsGVVVH88m+V+/6qD95/bL/7B6TyC9ZIWPLvP4D1bjvh7BkG/+xcl+FBr+tKQHxFWkW3EoeUf5Us2K/eSW44PJ0Cur888u9aDEflX7ErWrpZqcAxp9My/85NfD5kQ+Ikp2f+DSvPGBRejmf9zcjoBflXhghDGMmNEo2VLv8GVZorg2B+KAT5F+q/c+fS9N/hw1NIDkev/zb6WyH5l3qT35FRfor5+8ZjFBbEaJwv/8L6BWUYsp7NUihn1cdWz3sdDE/vrJw1S6mYRX+Qn44l/yULZ+6I/PsoVQANqx5+eG3Xo4ztzpF/UxJAdM/lX0r9pfL/ujPy/8ICY+nZfWcwBnwC1V/HMv9CliNl4yPU3xWnT59ecXoKLQOwM+Vf6P5O2rh69cZJc++wK/9uy0obOzYNjlnbHJd/eesvKf/uG3q0HZTypfvGQ0TvEpQzzAmxsbFnzugo+ZdLTMzUPi3/Qv33N1L0rcTl30qm+kvJvzdtv+lwiRsvJYfBTob8q59/3cDrVhnVTPlXbVwFNs/X0+RfdzC0VmU7JP9e7eZ2tfPl35bS5JaW5NIWcfnXFFEcCd4RRBbn6nsj829TRVZFU3cgRNfUZLE0pSmxlXi4Iw3bQQinvtmI8u+PkA3pIIkRvmAQQPS80C0we3Z2xptXOynzr/KTbVs/UToh8y9kT8shS4kb6BkfSzjyJfR/B6PKvwcPcrch3OU6S/5V3bfr1a2rv9+6aURPM/+i4OrMvwAi86+T5V85LJTq6/Uvd2cD18R5x/H18wkiDsekK3pZR2VzboJs7bqyrVPpgnXM9KOszsDmXHWjUUbcS6kh05AAihADNro6k2W8lUmIZkz4gGtEyyDyoWw6RKdSRUGK0CoCq07Uupf/cy+59+OCwb187/Lcc0+uVpN7fe6b30VFodk45hshgcq/8s93Apd/P/5T9KIKKOmCekEZuPxLBf+KJf/CSH7H7IBfqJujU69Gm6HGjASmzhG5+i9f/aXlX1r/DVT+1aWkw2NkUnQy5N/GUuglhv9BaaOA/MuzfGfNSk2dNWs+F0o3koPgdxyRWl9/NVpc/gX6bJtXb4P+oW3bNqMJWciQf9+ocZmQ+wsj9fmzpdc503MNubPnzBaGIf/ahzwwdFEdIDBRdkHDIY8T432+EP4rjdQxACj3DNV5EtjyLzf5t6iotbXozn9U/rVaLFZx+Te53WZqbzfZ6sJFEE7+fRX3fsH6TUtLA//3SvctvIlK/m1pVqkrWuTIv7DLXkfZvqhK1KhWKOHlT/4F9oLdi0o84xdKRn3Rw0j+nSaThyX/xsTYbDHtpkjwf6nkXzSECCb/vgJjdzcq6ba4h5H8u6QsW5/R1PaemPpbfH8gka1Wg/6bhkf+pqWh8tE0XP0Nnvy7aPVqKfm3Pq14ksm/hYUTJ/9uH2jv2vT8M4caGz3PL/5bV7t6E/UOP/kXHhVGy7+MVin5d+dOgUbJvVk55DTduwehTbEs+bcRl39Zyb8h9EMHiHpgW9vk5d8LyP09sWPXrh0nkP17QVT+BWTIv7+KaUelCTKzTdLyL86am3LlX4vXa7N5vRaG+9umZ8b+VmvszLM+SyS4vxeTqqqObzkoxAPJv6rO/Pz+ICX//gwGdgXV6dfUy7/AikfA/n1w+XdsbEb88ndNpndXRcQXj4nIv5JbDCIhgSXZgCPlqD6f+9ZC2cm/Sr1++3a9Xikt/xKZv4BI8u9Csgi0n4q638y3f9OqiucJ9B9gOoVy2W/X/afkX4ej64xdebl/3DH+OuLevaMbj4Lye3Ro6OZR0H83ntuIZ/9KfG/Jtp0toWDnb/mC5dj6Fqb8C9x+2yAJfZzedWNq5d/OGkRnEOTfKU/+TQhA/i2pRfLvipHaWnz2KvMVZPkX3N+inp6iO5OSf4ENL6nVL20QVX/58q8H1F98uD9GxP6C+osmEfR38Recz96aAvl3f2Li/izD/ulZ0w2GCeVf0vsFA5i1P4PuNuht4+YeKhVbX7t+/bWtCuX/XvIvCEA+KAJN/qVif+dPQv7tlwkroXdBaWWpBNRZyKre0xMSePIvoDNXg+KLRnixRlRMKvm3RiaSx9i263A21WtJfuq1cDQrfTwur8Apn0D+XRQU+Re2HLDaoJwx46pNDPwsWiZo2fMyYcu/4XAHg2JpsjcmEk5ol3LlX6CyfTPov7Lk3/P43rkkH6m/SAC+/LDlX0r/hfJp6T+XeAZ3usIzjcCjcMRBCxtxG46Wf+/evbvd5drOkn//eLtZrVKpm28HnvwLsb/HG9oZHXaldbZA5d9LMqHTfGEgR1+KMIEuq8DsvlEbAPavUanf8FsRcPkX+OYdVELxX5v8K7oHid248y/r69bv3EhsT1TP8YDb5bo2oCWN34GGhjCwfQHc/L3mcrkHMMwv/0YzRiiiYcrFn8XtdoOxeWPXquAm/wIoBD2hKSE0APm3o2xJTnZGTk52ds6Sso4gyL9ACp7460hMT8xzOLTp2hRziiFdy/qOu9NsvwT3F42f6bRrzULhv6mU/CvFO3Xg/16peweq5N9hMNFh9XanSYNioLeqdHmaxPgIyIJ2aDLIGOjk8qbylnPev9/87JalDyT/zvEUSRGI/Mt/8EgleL9uACaV9J9AfhEi/zagxagYvDaoVRhbBOXfE7sX7r5x4cbChVBA9QRX/n1VJuIrToQc+VdP2w4Q//sJrvwLDxj+CQzg+UKJz/HmoY6WFRZ/AXSTwNl7CzHsVASW/Et/vmZ4IKr/8/0Ckz82/ZEh/45Xz1hV3bgsuPJvBZf3K7ZXCMA+xXnyyffKMnLKCfs3qMm/b0/38/Z/t/wLZ72agnhp+Rf4wx+KnOjmoCYzPoXcrcVnalCLs+gP4P5Oofwrtg3jfa8lCoXzhRNnFQpa/h3yNJIPvaQEYK2hIBEjMoABMv+Xln9fkXpx5N/dogU/+ddv+v70eFVV5KVLkdC3+VO8FUae/AuUHi2SQEz+vTYwYHQ6nUb74ECKYWzq5d/qguqCTIbvS5V0U7yQ/Bub8UF/P4w9ra120H/t2VLyL3xvGiwXzeRCBcP48u9pONycNh07HknE/P7+UuSx099lpP/CjF/+vVvjgnMnl8tV89KPmNx1paWGkEQXo2XbEBVtFRVtBI/MwHmkjQP+HfMp5Lu/fPnXrADMk5V/JY5oseVt+MNhoGgrj6Xl398uUyutGTlBT/5NTZsZGZNWTyb//i/IvyEwxsWnB1f+DS9HWTHwgUM1QXik5V9Ar6bTf/t6evoKST71S9fmzT2fEpR/McUAnKgAifeL67sTFXz5F4it2OoMqvyL1jMlOrJH+NczFMOTrXC25oPnkA+7WWtTW0cG6+8LJylTmfzbu2bXGhh7pyD5d6NPK/yZvSIT6oKOtnyBsCS4roMXAfEGP/kXXviEHflLVCYn/wInhiyS+OXfsbF9+8ZmzRobQ8KMsAAc6OdwmkX5wSUVG7zegxVLDpaz3+HLv+WmI+uehJvi646Yyicv/9L7Sdb6u/UriFMj3Q3dxcWpVwn5V/IqIeFvBxIxHbaMLf8uw188qHf+u+TfMoImtbmgIE8Hnxwh/6ryDAVmmFU3kQv45V/gSz1hAvR8Cd5iy786SP7NzeMn/+blQvKvjp38C/rv8dOTkn83bw62/Kv01U7rNVy4YOidVutTip4hYykF1P3I+FwN9pDlXyDhpsmSAFO8vgVu2cEM5w1KOD0qU/7VI9RKhQqvnDwghsR2AYTn3D585GsbQoOS/Aue7+EDB8D+FU/+jZMv/6I7k9DRiNrg9HjQfgYCgD8uR/5dnp4iIP8GepV7isVPOFUatOx+DrXV+2fNyqqu5baT8q9ILiQ10AmRBTKZ6uRfapyS5F8YQ0pK4jLPdo3Piwi5Mj68IoR6I/DkX/nnO4F+DvkymXTyL/i/fPmXCv6NogRvlugLyb/19ZD8yxSC6XNEnv7LV39p+ZfWf29YRBE4p02By8h581ZkFqRgE52nljZ6pl0oKbkwzdNYOmHy76zUseK0tOKx1NkC8u8jMhH6jqOL3UBxtJj8m9+K1pMeu1YCEfn3pz3H4emIQ4csHguVaGBzs6VXA6Z1KFKyJpR/VRYcoxI+VW1Kihb9EtqIWg55VAKf7w+KJJE6BgA/LPzsh4Ws5N/WmiKO+9vqWuTmGcFo2R0yQctmyURY/lWXlqrF5d8WCI6AweQlTA7+KJr8e6L7yi3oXG9Iu9KN0n+h6RYt/5Y1NZUvWFCWIgm9X6d25Zz0X6Kkk385bEYvf52eCSSL9H9d/o2MqRtqaDc1DLXHkMm/IP4i/1dI/u1+5ZXuq1dRSbU8nOTf9zqyVUqV/sASrvrbi6u/e0cHtZiCm6sMXSz1aJIKRf1MQv0NYvLvwICU/Fsck3ZVRP6Nl5Z/jx0Tl3+fgReanBw5t+n5X/yiwt5V/otfPP+Sdzwbb+bLv2XNGeoMnvyLWrPLReXfnetNpvV8/Vdyb1b+9T8d/XDo5tf/RN/4xLRaX1dXihauYwSTf0PIEte7ZELLtPNegGfWCQ/zBOXf0hPg/O4IwdkBFvCJ0omTfzGdRPLvTFL+jSHlX8hU48GQlV+wyJR/b3ptly7Z6Ojf5IQmtSPTr/7OMKScwdWJIzjvv3upKqnK1l4VCeXfjwjwQPKvPb8ov9MZFPl3MQw4xJSq0y9A3r2Cycu/wIy33xXSf8NlwtwKjO++m0JuBV0i8i+9xUQwtxia8PJyhvxbff7pt8D+fTw9TwqG/JvR8dprHRkTyr9ABEr3jeDKv7T5C6BlM/mcF/vhjV+rD2Hqv2ArzktLKq6P5vYf6OCWMfTGWg+sWxe4/LvR8+Dy7/LejYX9qv7Cjb0lxPNNj26sa9959LWbQ3V1YP62t/fdw5sl9nTJLet3rrd4+4Z6bKZQjvwLfEKtlYB5nJbTv8hWf7+/81GZ8i/cs0HdRUmumrvf5BJoXyTrouNsUOXfBHgFmvxbcqXEBMNDSP59vajnuA2exMGTf9Fdhs+jYmM+FJ/6PEoh4cm/gNUqrv7y5d/yUST/Ivf3PBH7u/xxpP9GLCdmzlPyL2KoNleSSci/uTpNFpJ/p0vJv9RDzxVwna+Nj9ei7UIP20U4nhl6pKqq5lJV1RGoktvFSRx9U4da3dGkPynKZOVfLAXQaFCpmxL5V+ccGXHqAk/+RebvJJN/nTJhS7pLshNTjKL4z0JWjUXOpImJ4dYA4r7nb2UN9GeGpRgeJ0J+g5X8u4iN2w1FWhpUOG9InZW+1/S917xer6Xje88sCQWklk1eOhy2OWxzWthwaPJDSP6tTjenYClmB/yma/kiKdVQIRMReX1wUEReDw3t6CDPQMoS/LG/loZIWBUiheRfoK4B6b8y5N+SEi8MRPIvetnlyr+zV66cLS7/Jualh8w9bzbr5Cf/Pv3EyulPIAF4IXeg5V8gzqA4NI3AojBz7TIpG247RevM1u0jI+zk39tNKH5Sld10O2D593TNJVsdM/bX1FATqPwbKRNC6EUeL0BOz6YLE+iycBI3usdmazDZ9tjRXRMx0LKHZCIq/+rsUyz/Sl4Dx66v+8fG4X/Urd/CTv51ud24/zs4qMTnYsD2VSghcxCZv4BI8i9QX88ygokXvUW2h+H677xVwU3+RcAVfUK4XPk3B8RffQcu/2Zk53ToM6AhCPKvTgvoYMB0iVoMSh2asvZiF9sbGvoKSf236LIzBcJ/eciRf4H2dlB//fJv4ua9T2sUjSeefuItCT6yNrRMbTbUvr91+fKtHWpNbu37sOsk5N+N5R5P290PtySIy7+uS5dc0vIvErqkEJZ/o6Li4sTkX+AGuUupu1jX4A4D3A1QJW9N3KC+CJF/G5BsV9y/PzCgsAsm/z6+G56rhH5njX5jDdXdTzB44AcIAqnFxdHi8i+V8nvKqqBRWk9x5F+ZoGVFxV9ECSH/jhjtzgC7jeEQkaM376++vfWjH92aozbvz7z9NfazUMsUOX75F1iWWQumS3Dl3/kc5uRqDPvn8yF3JDRNqqaP0dm/EyT/4gEuDQ2o3CaZ/Ns7nUHvQ5J/rTLhnWLpNNWS8i/BF78Ktxcx2JspMNX4uApigHUwqzwDbwBTKP+KbMNv7sKTf+H+1u7d4zqG/DsNqEQGMPUkqQJ0IlSAJDPt4LVr25JI0LKE3SvNK5T8K92bByWMtPxLZ/yeTqq65L3Z0nLTC32cp1GL/23ufu+ibbUoTPk3jBn8O2h0IjTalP2/fgjJvxpHrrlghTTxfPn3rr2r1dgP90f7+vL77f2tziYJ+de837DP4UAzDsc+w34zX/59JxJyBLshTZlwf6su4RLwdyn/93TV72n590fbiVOnGlbw7/dq3P7Oveh6N35aquZwdgbOWW47W/7l5v5ew0e4xJgC+Vf8iNam7gj106FuI+VfYIleqQL3N7jJv0AqyL8vP0rx8OXfRJmQwkhIXHV8CD7RqEThy79PPikt/yISkpvKpKN/0bJ48C88RgWmhP7bA0cSV0+hn5rNrhqYFRLgRuu7i+/f3wM3CveAp8GTf39IhP82qYMp/64NPcBZzx4Lt8KFYNmWLc354Drcxe/HKfCtgXmSon+R0n8p63fyyb99bNrnr4kqyYxaM7+d8wbZ0dFCj/BSKzFK/o2gBhH5d/2tNVGZ1QaNkGCYJhO0LC7+kkCtob3O69rTW9fegOYYb/E61L5HTvltk5F/50bFAZkacu3RpOtE1of5AOT+zt83tnflyr170aygABzw58Cg6viGDWD/ejyeJQc3bDhexXyPJ/+ueyz2MaIGlXUPJP+uXYDvJ49Q62/JkZYFhPw7fna8+vx4wcgyfFbyKiFh0998GVt9L/GTfwUc4GV07b9I/k3kokE/99Xwmmn5F1F4LIzDMQj04sm/mM68z6HDOPIvNDv2mXUYLf9G4kMSCv/9b5B/MUXB7t2758IIkwKYFemETMmdQVOdgj1k+RcAx3cpBci/yPflvOFPmy2UJ/8qEQoEquivLxZBYrsAtnzttsVy8AtDWyaWf+Uk/x5punNn+xGJ5N8Tu2TKv5QcUdnegDdvWw3+72Xwf5GFKi3/5ul0AvJvoFe5CiYqvZJ2oFUTdnbvm6XYt08xa5/QekZ4YCxPDEB1dnsgHe5TmfzLdH8nkn+zZcJL/g0ZHvf5Rpy1ISEl43G0kBO4/Cv/fCfQz6HzDOKDM9QEvS7zW/oDlX/p4F9+8m8UKf7Syb8IJP1mgSKRpVHozqemLsf8swpWKixf/+WpvwDvc4iAHHm5N3Ywc+a8XTjzMs3YROepQ42VuwsKdlc2Dk2bSP6dPVa8KK24OG1R8Rht/z6BikCTWkI4FIe5gbBiEfm31W7E7d/8fqf09iYQ+3vMhZ6OWOmz2y1kRE1DWj1T/p2TCxeNs6DXZbq0/IspG/HgX58SA7u6OjOzGtxqTOnzoOZGJcb7fCuNCimkjwHhRw55DnmOJLCSf9khv3eKjs+E+52td/jy769kgpZN4dPaJdAoKP/q4a7YIb2I/At4XTiWpeHCiMi/AJJ/u9O6G5D5CyMr+XdLy5YtCxYc1siQfwFi103xOaryMUaJlm2QSaDCdIlMhK8hKy1Dpf9R+bc3as2aqF5c/g2ZMY8K/mXIv3FoBF7Z0z0X5F8o9rxCt0998u97bfi1uSq7Y8l7DPX3CK7+dt8fGNRRW9tbP2frv8Vvpaalpb5VDOovk7ceXP4NGxwMk07+Zcu/T8lJ/i3s+cxn+vo+85meQsnk37+Ndt8FXXJxhc5YjqzJu8MZ5DvPsOTftmy1Xp9RFkvLv8xWcfnX5nbb+PKv5N4M5N9/es7dY8q/SAnp8sFXw5V/6VMQvETLvisTRpLuelHWcORfOvj3hF+9I6J/peVfTOsbGXfi8m+EgPxrcqNyyGQzDa1FGLV8mEnFUWD/flkCUv6FyxT3zJlu+KUiFfubkZIb73d/M/PsRZ/E+7734czqRl0CddNMMKm6sk+AB5J/+/OBTueDyr9/k4nsewWTl3+R/nuEr/+Gy4TVN5KVtbXDCFvBkeQF7jA+UltMQls4Ma2tXcpI/n0LRjR5WgqG/Gtt/uEPm60Tyr9I/MURTv6NwN3gZ0XOFdLTRY699La1g2n/pi6qTwsLS9oczek/uAa+g+6aFq5oc9YFKv+e6zr34PIvuL91BbqCusKNFlz+vddns7Xj1q8JngsEVEDjn/70usT31rJz/YIWi6Vv403vcRNX/gX+9RMrCjslkOzvqNYopODKv787ffoYHO5+I0P+vVuTRDkxfPsXLWs2m/NYA0KgkZf8Ox7c5N/A5d+rpu5uU7epxD9PT4Oe/FtU424QkH8/X9jZCXtF+G1fZ/8ZKAr7+zuLOPLvbxfDeP06PuWpv8Ly7zCZ+7t3OZ73izu/j0MFWI6EA1r+BfLtCikmJf+mZE3PkpKDAPI632rOLTicAdtFkwq/zifNQUtVlc10qcoCVYBhIcSqlUp17FPiTFL+xRKzAIcDlRoMC778axzpGh7uGjFOKvkXeFZc/j11SsTcwGRCyr+/hUcCbkDT22/PfmK5CIyfTNVH0u5vQ0MMpwagZTfJhPmZJTqWU+bvE7xxEvLvKzx2v3D16u7d3FbJY+xTz9w77Nn++qkDHfi81LIg/6YZNjdc6R6G+amXf+MN0B2OaXLjgyn/YhxA/dVqkf7LgZB/m5pCWSQvbYGrQRDBheRfy9C0ykpQLDYT+q+0/Huu1wv6r7c3/zmCMzKTf1c6NCDzO6aLyL+ANmpuLkwmkn8pnl5pMKM/cf8cPguZ/VQRcbmKRqq7zJkSEce2fyVsOFr+dbVCyUn+zUFrgjI754/y5V869vciK/bX1XrnweXfJDSIyr+II+SkRIRAl4WgGJB/EXu6jJj0+quTiaj86xs3Tq38K7oHoeTfVudOlvwL6AaQ4guW5WbXNR1mdMXEjKow5QBk6kEjMKBTkPIvL+Y3LQ0K4eRfjv4b1ORfAH4ZEC5X/m3KKFvSDIm/HR1L0CsnuzmnLKPpweVfSEZWohBKEqUSNXB6uivruhtMVPjvpzuN2rzcycq/O98hptTVyqLUakxhvzVX8llpTVaNAZ0CoZUB3QJBc8SF3ZGbFZ5vfdhRDlVh+de159KekREoXMGWf6NWnIchTlT+3XGB3KmYbORlq9tmqislL+WoL0L835bsG4Rrub2D9gWCyb+E+nsBIPTfYMu/0cWbi+sjROVf/YufwKcqBQPVMrb8C7lNnAEfeQNaVlT8BZR2q/fELaDLZwy027jMCjdF3//aF9BtUbgHqkZzXwDUaioT6Tad/IsYH4diUvKvW0z+XcXm2Wpd5rOrVmWu4sKTf2/nALE28eRfGpT8C89ybG+HQjr514IU3ixqnG55OPLvczJh75ywFEd1RIgM+Rf0X7hewxQwGnfvNhI1ez6ovw9B/j3A3IbD8W34MCn/eobRD+NU47T8S9+R8HSlJyp0ZkN1dQFUEkG7JAzg1dso+VcmgT7K6+M0Pz0eWQVdLDgt0L0J4b80/FspdTWS8q8Qg06jEfxfR3r62NhDkH8hyL6gmtZ82Ym/FDz5t03d2m/0efP7hnvq6uq67P399jZx+VeDpvv8hYYv/37nWFVVw5WqSHB8gePU9DgUiN/9/ne0/Auirwt68lp/xOBfrS76txepaa67PxLSjtJn4KQLaUdE5BZ6UUWPazXN/dTHp0L+FT+ilWe0hfppyyin5d8NGcv0m9YFOfkXSF2Utgjk3/9Y8m+8TEj5Nz5EkwsFPB465O3YJyWEXqb5+9iTXi8UE8i/bdlWdXP5hPIvuL9MDrtcm12FPX2forJ/kfz7S578C3ltWsVoPUkx/3vb4ie2I0MlfZY1Vyb4eoZfFvwwdGtEBL7XNaP1rK0jPLmt/LMfVmy8+ZeNsWtjO9pCeemB1pMc73fyyb9JbFJfjXjC8v6qiFdTOW/wk38BNYYOcJAZGcdC4Hbh0AtwL64g3eHg2r+8yyr3TFEYyb+UA9xgA/vXMgSxVJEIsh1GtGx5+U3GQFX4Tfj6KxN/8u9cVESd1SkATW6iBhOXf/eB87t3b/HK+WNQAYQE4EA/hyQGkd6Dnh5Pj7cHCs9BbyTzPY78e8Qb+ySDWO8RjvybQVOegGjLEAQ/M8XPE7asxfeTC4i5ryBe7Ow8U5tb9NyZF/FZyauEhJeeOYrYxJZ/pfnvSv6N5xEB8Ftp+Zep/ybBSKm/fPkX0JoTMQVX/oVubbMWJpzkXxguHT8dRPk3QiZ8+Tfl53Pmzn366blz5/w8RVT+1Rbg/c1oRORqFQ/wdwhU/iVPGi0toX4sN+l6MjXjl3+f/6Us+VeFgy4nEfrrYkhuF+Gem4ctliM3Ly5YKiH/KpUyk3//3vTN5577ZtPfw4WTf+N27ECPO5Yl/9J2xEUTtBL+77VB4+XO5yaQf3O1Zp3hUR6BXOVyZVqF9RNWKBlV6c5uhwHHwW0ne15Yub/r4NRuw+c+t46TFRm4/MtP/r0eFPmXdn8nlH9VfKxWgUZO8i+MJSPz4laofHFxXQVx1BuoPVD5V/75TqDbvNEpj8km/yL/VyD5FwYC5s1GjIr61WqiozVaMggY2lk9cXz9l1Z/BeTfiPgJ9V/e/leTuctPpoa3/23kYF8z1+GYu8bObUfL0oIvIrV40djYIvQqTqXbEbhEwmNOSckcfivxb4vAR3Ka6iYiBtyprHZK/m1VOfN/2dqKRwB/oAxI/j1N3Cap9BgVKk8pkZFSnBrBSv7NyzPnznHkmQ1zYGYlb6Tl30PI/T2kVCK7GoHcaqWy0QLNhyYl/0r0Dv99xRVgxd+l5N9WPOiIK/8KPqmjvKm5GdJyuQjuz5RwN66fLxAIyr9WUMaHrKLy79Kb7XVAe0v4JOTfV2/BUyTSbq25tWYNLv+eIOVfinczJRH54UNTk0AjrvfJJJAfxwa6LN/9bQT3d6iy9D8l/7q9Ja+88MIrvaaZKPmX0H+Fk39B/t1zNcpkirq6B+RfBnFTLv8ewOXfZlr+ffIxQv0tHh1IxIjrZiIvLK345XrUoUJowI/WR8KDw+ofJZRf1NVS/3Ix5Ic9uPy7WqdbLSr/Xo2qL66/epWf/Cst/x4t7CMqfdLy70vje04t3q7PgC5lyEzavviuafQl1M5O/i3vaFZZM2DV76DlX6JVTbTy5d9v4+V68BxM68kGGsm9Gci/Xz+6886f2PJvog8dnESTf+lnDLwpE1pj6f0Ui0JGvVdY/r1xAYxfElSfUP41jo70wvMcxZJ/f+W24ZMhyP1FnHXwof++wLxez91OcajkX4u3ISamwWvxx/6mV9Oxv7maM8+Rfd9ZOFfh98BVl+oq25H8a1uexedB5F8nOG6Fhfn2B5V/VTyc0O3Ob5V/r2Dy8i+w4hGe/ZssE3/fyPsJa7fu3evvG3GF8ZHYYsIP57aR2jy9xSzk8bhghbEHVTZv396sVEwg/1KK70Io+Mm/EczkX1745cBorQaeWjzBXecTz9IX5vX1SXjfRxo3+ffaakhbwd3YkxvWBST/brQ3EpX1hzaem7T8W1jYu8KgM1ztLfw0Lv/mN8xsOHfPBD/3MW00gZ/R9ycw3Y+C/Cuxp/twvaWv3eM1fRhq84by5F/gXyeVCkwY9nE6Pl0nX/5959jpd07XP5ra/ejE8i9yf/32r5D8q+ChUqtV/Napl38TApJ/ATB/Td17SsRz4VUymTj5905PTU0rX/79VNHly5dht9gPnEEeMCo/z5Z/ry/Lhl+Fb1h8PXvZdY76KyL/eq7hwb/3x6IBlPkbAQ4wqi0njQNa/kUU9iuDK//uT0zcPz0rN2v6/v3SzypuVqG93XvEdpGA5goOh+NPzKwYHR2pGR2tgCpA/h2egtdrZXp92WtQFxmeCXRPriTRwNXcbwyO38DErBQALfuGTISeGGk3je7ZM2qyQzXA5N/5MEom/774ooi5USATUv49WOGq6FmC7N/fvhv3m7eEYZ6F+O1fd0x7e4ybXQP4MU4Iu92u5uPX2wYHBrTavPNiyb+oNdB+n90c4IzN4/OdreW2S+2rk5+6vqys2fPDv/3wMXydlFx26fAiw95FV9KGl0ok/y4KjvwLxDswuPKJnzGR/KuSiVDfP2iFWi0cwTHB5F8KOvbXHYlCoMH/tYXy5F/7oa5K9LvqzaT+K5386/WiEZd/i4rO2Itkyb/7NbqUdIdZq9kvKv/qcs875Mi/C2GAMcusxTSG3FzDfphjjrwfqUfEZWK+UvKK3K7L5Nm/ZB8nWnfWMtadw9v93N3Ol3/LmvWQENJcFqD8C79nt9VVMjsSG+CZUN8IVP6N4ZAUMxMkf5hw8Au9VAHj+FlhAl1WgTl9EPwLw55RI5z7iRHguRxf/kUPUh8xjUyt/Cu1B0Hy7/pG47mdHPkXQn5dSP6FLuCwQWwAPv1tg1iiyz0zBpd/0S+X+cm/0WiMTkqKRnVB+feiyVYHAmd7WAOh/woy6eRfvT5ctvzbDI9kyqGjflG9TN/sn53snUanz+dzYk77Vl+GLyPDt9UOM6iJcwVysT3Nhof/wvAZCP/VGM7zkZZ/fwfQNbSsNnd5fVhYffRyh8p744Q4H0khf/3UHB/fHBqKVoe82mTc/fU0ld21bKw4dFNE/k0aGR8B9uwZH4kJrvy7YkXcihUgAIvKv8+eoH5S0BBD0kCljJ+gv2Cxf1v4gowBiLG+dr8rNFw4+ReihVH3ygWYBl/+hRPk1LTN0WLy7ym9Vb/spe8tY6sCypMv+Qm0Q+JXj7y6Iyo3PQXjiL8AZrcrfSj7d9xpxJfNkwmeBLo/832UgtQ8e3YzHoGkzqtG06YmKGho+Td7mSz518bATci/M20CCMm/eenPggGsyBOVf2ly1OrbW2yykn+762ybbZWVUNR1SyX/9k5n0RtU+XffLAEC1UGYtwlDJGAf1v/whyInvhaOjyvR1Fn0B3B/H4b8CzdlDyeEvokfrEKT1yY3GfNyI3D5V9na49n+le1OlvxLc2ONZdinNKfDPxTLLfDf49RBXn2gWYbpMkHL0rG/xyLB/YXzUpzQUBRucAzeFZV/4dw0QPn3mtFpHBwwOMwOh0Fa/t0fHPk3Pd1R4Bd+iQoNahWSf5vt/XbjyEhXj7dvZ9+tYZ291dgsLv8mgvNLsy+RJ/8Cpy/NdF8inN93iABgaDsNBQlT/v0XV/6960pLpX+F4WqFTOCA5V8mtPt7jXZ/p0b+pY9oW1lHtNjYhFA/CbGxDPl304acKUn+fTm1vh6mwMsv/wfk3xCZkGlxuYmQUknktjw775GlwrAFjFhvLJJ/YSIt/8Y2K5Vlosm/CZT8CxzEBeBN6g1QDtcU5oPxe4ySf3tq+gpRnb2HxhQDEA1Uj+hGw6Cw/BtLpP+igCGp7/hpmeA3hA0FTe/B3RtIB8lI+GEo3k0Gz9fpUCmcH+QcOdeM2ZXZsaHhHfwtR6XG9d8gJP9Wsol6IWLG4fVRES9Ecd7AP4cW5gAfhlqpUmEpgpIj1/1dNW9ooxHDH5PMgvP4JjdcAroXiYCWxf1emksN8OSbdhtM0Buc5N9SmYgcfRwOkaMPGfyLXnEF6N9TYHBkputE5d+xYiQAj6FiFswKCsCBfg5I9CReUHoObkCxv0s8Hu+Sgx7qjUgB+fecrfxJBuW2cxz5N0EmxH4S1N+WlhbYT25tgSPgdqu54EVc/r3cZS/IVXcZieRfiasE4KTKOz4y7DxJdySxQn5PnoSCrj8s+fc5mQjuJyNweM20/MvQf5OKo6Prk2j1ly//ItjyLw0/+TfSH/77rW+JyL8YG1r+5YCWLebT3S3QKCT/Pv3zp0+cgEJc/sXM9M1I5P/GC54J5MkkUPm3lE+l2P7hZzj3PqAZhTs7H/BAy55CwK9KrcvwykkxOOcaW1nbRTKIv3U7z2UMlYrIvwrMaFfau5RGo1JG8u/hZae2bz/1k8Miyb+7blC/6O12icL5fOE/grSBMIpt1yAA+AwEAH9cWP4Fr8ahA/n38fPc8N9Ar3I5lhoqTp6kqtLJvzpM81ENjJhOJPmXmfubobB7PHZFBtWCXkFJ/r1Xdvdu2b0gyL909O9E8i9X7QMOHEClsGwfAgMJ8i9LPhitjfLVCiT/DvIxmwUaAz3fSZeJ8KM4E83mRP7xOGD5lw7+5cm/BFH4yD2fTMSVX3gsczquASdCm0Tq7sX2mTE4M5GgKiT/RjjM8Yz0X40c+Vdbu4tBrZa7bDqHs7vmnj07d9dZbjsv+XfW2KKXU8eA1JcXjRGnMxLybzy8GhvxCht8PYvDiSCn9ZeI+4zubnZ7BC7/5hsV/b/002qXL/9CRApxm2ToUJfK3jgEURC2NPRQGqb8m6XNBet3zuw8jVTyL6A0dlksQ0Yl2NXzSMCtxoxDFksX7IkDlX+lz41i4fHFV0tKYhnyb2tNEUv9vVNUA/cbIfOltWgC+belLMOqAtevrEWG/Ks04g/jdMqSf7umAV1i8i+wFhFK1BP4o6T8eyWtAXqIFiHABKaSf8tJ3j88sfyr5OHzeHz81kDlX4VMAl12GhePBwnAXZXy5N8XXgi2/Gsb8lpsJou3vcGf/BsCDjCd/BvHlH+7vV6Pt54p/8ZNefIv7M47slUKJdxjYqi/V8D8vT86qCUumbOb8CNLFU5kJOxwUYJ5/aNpyIlMe7QepZnDrhhmcAKVf48Bp9HoZxTDRqn6af+bxLd2FWJ/QYFzp1Ly71Py5N9CeD3X2fkcqgrLv5DsC1zf6tv+/PPLMAWgOvX889tHzgrKv01qa0aGXl3GkX/VaqKVL/+Scb/tNlsf4f5Cgx/JvRmSfyu8915nyb8KnVan4Mq/IRGMU5Agyb/5nfn0zLcY8u8JmfD2DiD/6oyjXhTpIiz/Ar8y2XqH1vqZ+3M+5N931arU6BmrZsyrPuQRh5Z/TTabiZB/k8uz7QZG7G+6vRPcX0r+nZWVte/qJbSGt1ceR5OG5dDIHgj5d0wGQvLvZTB/CwtBNXtA+VfBRatzOnVaXnOgZ4fS/fR8+TfT4DBk4uG/73L03z0y8feNwPOx0B0VmLTchTsqm8P4CG8x6fgWU344NpSEln/lwJF/9VarfkL5dyEe7LtQNPkXRlQIXVNdu38/ynH//jWd1LEMQgEvhJD6b1pSUhhBUj1L/h0cXD0zLAw0MaheUy773DpBhOXfLudGMgHY7pu8/FvUlV6r0Z0tSO+qwOVfkCJNR/vcyIw81zBzZsO9eza37dzrr0vt6ZaeO17jha11586bX+DIv/8ipz/Ry0j+BSIKtDLl339895jpyu4rqb95pbvh0Ynk385LzD7UTgH5F+Ni7OryNRp5zjJX/k05OwXJvwkTy7/vUrxdXTIyAmNt5iNiufAHZCIt/yLugOEL7i8v+bcInjNTlF/UD+JvUX9RZ1Hn5c4irvxrVW5aDGxSWq+z1F8x+bd8lHB/z0ejxN94KFHhN3+58i9Q5Ayq/JuVp3NMz3Lsn24wSMu/KdWg/tL3zxKarWh/hrg53HwyO/tkG22EPEXwzGuNja8985Q4ge7JD5CcnTXbAGGhDsPs2WfFvuMPLssaPhC6g6kYbQdGoSIl/36ckn9Xr+Yk/84Xl3/1ehFzYwefqCiBRlL+9dREVsEdAoJHJI4XMyjqY8i034vQPdEQQ9ck0mZ12kStVidy7YMlDtwHRzol0Zz7OBJ9BUYg0CP7biZzT1z41c3KLoh+TEwv2c1CfF+dbBk+8mZb2d3DsbFv3hy2wEoqviySX4dnzoSnmiwahuqUJ/8C6YkarQNVlrvFQMt6ZCL0vQ1iCng4OzaoEJV/+bG/8IKhhSP/Vh7CFIeIgDU3of9Kyr/QrXEVBkL+PQP9xnLk36yUREPWylxDXqImiy//JpKkkFOHjOTflRoMc2Q9MeeJJ6AAGOrvQjr5l7J/47XGSlKK61JUc+1f6rzvsdBkvD8/PCE0/IA1r2A7h9a7TPn3dk42kHM7EPn3D2+cPu42MbsLIfa3Bo5EAcu/qTzG9t7fy28lhV5iJAtfijCBLqvAjGTy7yh0oakPiBEE+dfpA5nS6FRgwvKv6zhu/bqE5F+LTCSvgWM/v3Nnv+8f7ORfDFMoMZT9izxL16HmEZPXa2psPuSCWXB/XQP+SAGm9ouzMLWqKnUh2UhMaPn3Ylh7e1j7NEL/vQiy1g4h/HsmUv5duZIh/xocgIG1Z0qmKC/3Z8hMKP/mlJHmb5vnsL+pw//25Hr8MaWvC1RfpbPpNkmTU+nzQaOSfQVChP9uRNm/X/rUZ57rNyaa+UjLvzuB7+I/saMifhQpIP/Cc+rOg2HRKPWM57VvPkY4Q8nJCaDFwurwHm4S/ap7uCkDpOWm4atvhosk/5acv4/utu7ZE9zk3/O5cXHnz8fF5Z4XkX+BG6XA0NA5Uw2J6dzQEGq7QX/Bov+28LXN2rS9AwO6xrV8+RdA8i9BKZJ/dwdV/o1ILS5ODYl2F0eLyL8Q+atUn9RblZLyr4JL4sAo5AjwmieQfxNHUTg12L8+2OsE+uCGtV/42hfYfO2PjJmyMq78e+qULPk3hgkh/8YI8YDy75PZ2U8uibXJSf5tqKwj5N+6ygap5N8VRPAvKhArgir/jo0FU/6F2LbceJnyL/DFD+AwQK5ASsUHoP4+HPk3LmTFjl3z5u2KANB0x65M3OKLq/XtNtUNeW4V0PJvex3zpANtxaU3eg/5ChzL0Z+NR7DTh98kWUMksU0oZYBhlBiKDN83LqHOiy0JW5KT4eYS2L8teMMbHw+W/Bu2LQwyzZzG0bFfQ2qlmSn/ZvnJ1RKXogbR9G69TGj5V5p4rvwbC1G/Z0f23B/N957LH77VO9wF0b+xovJv3kdZ5AnJv5Du+w6UtPxLc/o0R/69G1bT6XKB4UvwvRp3fTSl/ta7a74HbQ8o//Jzf8XkX80Dyb/iR7RmJaMrNlbZTMq/FJOTf6OjpZJ/yRdQX/9fL/9GxDkUOthrBCT/2soJB3EC+TcUzpI6QidM/j2Yc5AQgHP0qDJc09NX2LONkH9/2QczAE/+HR0trmfSzRMlcPWXorwsQxUs+bepo8kK/521jAgUzuhA6UVKmDar0CV5cxn+BSkZp7sYOC0YarPqXwxK8i9f/o2o/fDWKkH5N4OLU+3zGbVmLnz5d82qGbc++3knuqGjk5B/ZzZcAbrdMyXlXzreNzLMZTtuO9fjOm5zhUXSocAAvueXifBFJTaYKPIdxwGg/86l5V+HIz5dIS7/7sXl35VQ2Sck/2a+fbgs0M+BjHlFBS7/LvHWbNhQ412yAcm/9Jtc+bf8yGOMObhBXv4A8u+yZV/5JpH0SyT8nvrKj6FElerq6vj46urMU/is+D4VSF72ElyPj/9rWbJg8u9JWNH96K0nmV4wWtbqR0/KvyetQgS673PJZBLy71Dh8Xw6yKs7JDU1pLvw6Gf48m8ihxRC/k3htpPrQ0wSbf+i8N+6OhH518Ahdz6Sf+fncttFji0mk0CjgPw7F64yp02be2LaXFH5V1fAzP0FqrUC21CGTAKVf6dxAPf3IuzqBPcPPyN4kVprdIM4giL24sXPwE0dq1J9HdUOqJQi4EqD2HZRbhmq6Dtddri0NFxE/lV2+bQDo3Z7v0o0+Ze2fA8vO9AEuY+H3wwXSP4F4uBXuDtQ5dxPReGv6zsuwPPzw9j+72Xwf/ny73lHbu5yh05rNuSlaPLY+m+gV7kKdgw+Lf9alRNKV/v24WOW0PfGehI8oFcY88E51DMeER+c5N/rh4B7wUv+hVeA8i+g37RJz29lJf9SO7Iop92nsH+QGQJ1Th4f2tSZA2bNBqzsRlgo0PMdjA147vhUBQG+ojef6d252eEw52GYLPn3MenkX9IA5sm/UfF+eE+SUGiywJeoroYiS4M3PGz5F0uft4vBPNYVlpA0+OpulPy7+1VuO1/+LU4bi4Q+EijSiieQf+eUDD87P6KrK2L+s8Mlc3jyr05jyMw0aHTkFMPgmUEQIY5h7HYdLv+2KiD4l0z+BfL7nTLl39M11NMRSystPstQ5cV2FPsbwpF/dQrH7NnTUxSk/DufKuaz5V/Aafd0KTFd9a55JLuqdZiyy2OHv1HA8q/EuREQ68MRl3+L3EV3WmvcrtaiO+5Wafm3pUKtwFFXyJB/nehu3J/lyb9Wy7S6umkWq7j8m4CDKoEl/97q7r6VtsgPNFHyr57CrpFEcN+navR4GpW85v8T+be3N+jJvxct5e2WJd72GJB/cfWXn/wbR8q/3Xv2eIdNXnCA6dapT/4FlhzI1mc0tb3HVn+J0F+VHsxf0IKnUv59g+aLOG/YlUr7G0SVASn/utMg+bd4Zr1Y8m+8oPy7sQfc3zNW6xmwf3s2SiT/bjpkBPl38SYdbMrXYf6U7/AmQg2m5V9S/22GOPA2pvwLrWXNqLVcQP7tW084wABR6WO8Kbk3K4ffKnj/8emvf50l/yIkkn9DoAiG/Ft0uUgk+TdEJkLJv1rfKAT/9g7rxORfYMFaP6EqBR/y77vj1bSxeTt2zFgVdaNSFOoKfYvFC1i2JMCHXKY3V8/wk6u5XET3fWcBs7II+ddUeomUf4FUegQ7OEvgajPFnJ5u5l5qCsm/9vx8JP92OoMs/2q12OXLmJYnPwZyryDQfvq/Z1ZnpmuxRHiWIa7/HgH9d3Lyr3vRtgY3ELZ5cxiaNrhXbwsTQGqLAR5c/gWUaJxI/qXEXygFkn9xIgSTf7GB+/cdEZn39+4dwMSPZZWHDoH9uwO3f1PD0KcCJEH0r6j8O4A55u0SRFD+Pee0k8G/rU6lZ9Lyr8+p9TlVRrvOufV1AGX+9h1Fdy/d5/qgNN2712My3QP5V+J78x4/97Of9dz7a8WHHw4ls+Xfn/yLsoB/Yk0UYpLyL3Ds0pXUfWPds1Kv2Lonkn9ryM5S4ehfwc/M3mo3dvomTv6tDar8mwAvWcm/WyiG00tG0s+evVpw9sgWAfB7NjLB5V9p/nQHjCuO/Avkd565fKazCMzfy8gALuo801/0Kbb8u/jUqcUAMT1Iq7+i8u8wcn9X712OS79ABMP8nZz828PANhOw9QiCy7/Afg2od/ulk38Ft4twan/25hVvdnZzNuM510/57V9wfyUIdE/+FMk4kn/NGiT/ji8W+XOVMhH44blR4WsHfAqfUzL59+Ok/HvsGC3/PgujRPLvKav1lJj8u4s1wHj1KpTs4UHlXyDSNm2aLZJRE5d/scF/U3cucE1ddxxfP58AynRMbGmTrSirug503Uu2WVe6YB0T1rJ1Tdhct7WjmXxI66YVMhtDxFLeLrJZw1Jec/JoMxdYwoqoKJEhGwwjH5ECyqM81AbChIpa5vY/9+bmvm9uILrte2/OOffc+/GDgdzcx/f+TorRmMJ9PRS+yy9MFhYePTqrkCZqtgh+Z0lJ1Goo+JZZ8m97b8mxq2+aTdioR3j4b6FbAubfV09Pg2j38p37/33ng4bJyWlIYOTfFrXql9bk5dVE1EPzHsi/qcmaSrizBK2wQT4w80gkHL+3sTHi5V3+JWJ/YYYiNHdTHFX+LTGDcmcfFy3/Xny6sPDp0R6Qf4EceImRf/fCI9o7kxWJiTHSvWz5N4BBlID8S2i+xfDcHli/iBUwkbCTf5H9G5IoHw/EsUmyothnCKWekN9bWNX2+maW+7u0mpR/kf1bCoD7K17+RbG/1tYKqtRihce/vwn4Kv9+mYkmY2BWoTnJdb/6GPJ4oSDqozz4ui1KcMXs30mX1iRL+ywfC5Z/7XaXA5J/HS6jiVv+PZEJdVXmCS75N4hJNDwbC9kVTASP6CNfeAGG5X6BJv/KOjrkpu91jLmqIPp3sWv69PT05z43DZVrMQr+nRtTp3WY2Mm/kPkPFBw+XOBZCqcn/xpq+/r6FvdhfyC6WGsf/93vG4gUuDmv2nsEfb265V9oJarViXqPDIy23c9BAJ/8y8I86SxvYfX66kRKMMD9dRgdDpB/P3/qFPokfb5RLcO67DLmGUjfEBb++xU0Qfivlo2g/Fu7Y0fYDkyHbe0B3N9q1hqrdSM8OiEs/y4JokMsD/Q0lKZnlqdbnD0D3Mm/RZOFc3+9iOTfySJ/yr87QPq9mJwMhX4Hr/y7/xgaceE2jfXQdWw/+Qvm+79BXa6OkajGJMcEkn9x/C//ohNMiJ6sg4JH/v1hmpw4JRYv/6pHIIN5EqLyGXiGeXpz4o0wdEBOE4BNrjmXWiYZaHfO51Lw54W5cYMq/4oEbVtHQxkcHF7HCZf8W6lO3QDPSD8rRv79wpXSlD1lBhHJv/tA+q3q66sCCXifUPLvukUA6f+u86v8e/CgP+VfQBpTnCpW/v2LkUgPQhj/cq/kX+JqK5QecyUEk39n4drmTMPA006P/Hv4cOwlg8cAbp9o7w2ET3Lv1olCm13ujpUidtKhIvH1M0HG/gKuLuDya+VlEFkc1HAYdZ1AbjCn/Ftb/Zx4+ReGM0aT1mTSZsDzo3KThiL/ZnhQyLBTUZkigwu0rUUkaFsInMyqpHu+qCJmgJ38G92mHTbai4oKJq/PTjY7J2YG7Neb89ui+eRftQZqDxo1S/5lcCb0T9TF995jyL/Nzf8G4/d1aAH/bq4in7lQJlXdgr6Fy7+ZDPdXWP5VzFf+5f9Ga2tcQulqbOOWf6U88Mi/SiVv8i+JUgnF/778G5CclVyJPTIQcDbyCw/wSxVXCP5whdJkQ3k8pK2spWWJV/l3j2QPUn8Jru7btSvzxL5uEH+B32Q/zCH/otxfLPMXL+eYz/bQLiy+iJUtTfn+kX8j0WPxjSnp0VCXNaU0QvV8S3pK2/NBz+9ucjhK4/DVZdRhpYsVUkJ66viqiOTfdV7kX8Zz7JUzz27Y+ujMmplKWKDCcxPdMstzE50e/BscvPWF1Y/a4atQKhGQf61JuPRqFZJ/I7AJm2MvFZ0YbM7JaR48UXSJXAHTguVf9ZgqZkzFfTELhf7ihF3ANlDo4TaZkPz7zLKDU5j8u4xL/P0JHJH5+j4g2dM9xYY2vFPeUm7u7zdD9U5DqGdNBEv+/elPoaAtL0D+/Sofm7OyLqRWFuuzyORf9j6VoM1hs9ksjtIg7/JvfH4HM/n3nIcfPoXk36tP3f/Dcxz4su/zdZ+6jkUIwO4l5N/ti2P7HyHYWrBrV8FWaLDl3yNMHsS+vlndaFu37h3hdr7PQPjvzAyP/PuMh0XPrFkDMy7/YkCXB573obaW532QUpEkHgicQPLvROCBRAnP6XtiKjX4F1in4LiBeEMk85R/S0qIU4W+2lYYoLyvgl/+/ScRoSTVxnR1GbVSPvl3PS7/QuMn+TIeBD8X9bnjjYP9pdMVJUHc8q/M1KxVjYwYjc0mMfLvufRGc+Pr3Mm/wH4Y47gdNbZ9iheuY4L2kj7abbl9YO+ZLnc+yZJ/VYkxyZD8q0mUxmRIFTT719ezXFrsb/xP8qHEmvk/iYeSBL+xI3FPGBL9EcURmPVomboObXuKzifi7fUuV709/hOMFQtO/i23NDRYyhcs/xKpvzD5KP8iQ/flPXtehiqf/fOS54F4GZUsmy3MujAZFkJCKDmsQ4KmFABkXgY+H+/QkF82yuQy1DBeviz3dlyi1qDUfg3nd/fbHpriMfk3rZE3ZYII/uVJ/g3DJ5b8Czs72AKuksAlkmRosh58oKu/NRHApUuorGntY8u/QMg6Uv3NUIv5O1Nn7aeRpWZse4DOyt6JlXr9yonelYwVLPlXCcJcwdRLL01BlaQUln8DZh0hDxXa7YUPhThmA1jyb2Ma0lLSGr3VmPzbJTEi5zcTCpzM6zEcMOXf7UTsL0aJuQTCyolIAFL+BRIlmod2PqSQFD8EC888iApqg3bOYJRD6ITb/Q1GswK0dKNUMg/5V/jYKPJW3i2YH6DIvzn9N+nJvzdv5gA3b0I/l/x7mph3p8jc+6CU3ZQV0OK6qd2FBf/mXJaJkH/jS/oWL+4rieeSf+NEwi3/IvuXW/5VePj/kH9jRMJ53lJhGy8JHK8oESX/JoyPJ/hZ/o2orW1o6G5oxeTfYNz8BQGYTP6l+L+jPUWwqa6oZwfZjbjr8u+VJ9reLm25Qqq/BQdd2FD0+Wnpb7ddeWCT++rDRlB+X6pD11RO/hKxvC4UXOC65djCSXS1pe4l0IA3LkD+zWlGoMcTTMNYM4dD/i0A+beOLf8KJ/9mb3vkKznxMll8zlce2ZYtIP/+pNuR8o1fPfUTdGzzAVjAKeZ6RvJvKUZbaWljYyPWRA/m5GPNNqIXwTib1w2upjGooywI7s3Kyru7x3/wcHm5d/kXgNKPyb+Zxi6q+/tt/8i/Rq3D5ZxxztqMMrb8O4HRPkGhvVLPBv953+idsPZMtO9HGvCE4JWKaMTu6dzcaeT+RjbFF6d6Yn/XFScOQ+wvRf5Fqu8oFvlbW6FDlQF6lNDvnmEBCjx/izqpiqcgBKxYJaX2SjiTfzszs8H/9b/8K42/fNkoVS30UQrx1+lR8q+mOEYK9lAyyL/A0/dR7V9P5FU53GsQwJfrB3yfGD/Kv+j8hmjFpPIn/4Ldi+X/ciX/roVunuTfsTl90VzUqjn9wbkxKe9d53ETZs20I/s3HKiLBQMYns6gJ/9CijDcbxnDjpmT10UFcMMp/w7LHFAixh3N80/+NRm1oP6a5EZtGri/f1vfPdh6vLsGk391UA6u/9vt7m5YI/R7A4fzF7f7+39RPthwgiH/5r8CBc79liMc0PdI62A8MZHy7w/OXFLu3Guz7T20XNmz3Iv8WxVKRZT8a++8fn3Y6PX8NuZCoV+Tf32Vf09bVFmjiTEXRpMT7778CyD1l538m93ZCdG/OaAAGzuBnM7hrk6m/Pvzn38DwGtC/RWQf83XgLmpcDchpPnLI/+iLHZ+fB3IfBFCvzdDIyD+kr83vv3ZktbabvN4bjRV/l2PJqigRBPXDKt93JPDv3sFJiT/LtIfKd57RL8Ik3+vMKYvLughPpPDBsG/TidE/9rgKpyA/Esk/2Zm0pN/eeTfc6+88kqHTNYB1Tm2uQFiL4BKok4oKEiAFtFBT/59p7yqvP8JaPzhD+9HvXWSG6r8W0dYvhGtQATZEpB/1TaLy9XoUPHIv7MNZoul0ZIBwyIVb+GL/mX8u0YjFLRlvmsYcLNkpqJi/NjVYxVmIyJxEvoKZ4/iq/n31dOnJycb2r71yivfagP59zTIv8Lfxw/MGR57zDAH5+P3Qv5dV7kOvaC19St8LFD+VcE9LhifHSph+RdFHTdEkLG/MBkYyb+BFXZLbi5UrYT6Kyj/FhYONAwUQvIvhjj5d6cKrs5kqDNUUph2suTflSJB27rl3mdipDE7ParvTv1Dz6yANpqwmSkVhwRE7ZXkBuKYJcVR0EP/Hnqdj1udt/D69VvVzVT5F8TFGzdAXvRB/j1fXaWDMfg99Oms8Ej4Nxcs/8IojXqVNhfu0+qhSQOzWJosjY1QEPVRHnzdFh3FGV2Tky4XeoTiLsq/2lmX0eGyGx2TEk75tyrzMyfQjaLMKu/yb0tLdFNkWVN0Swu9X3gPsjuvdfVl+TaG/HsnP/7xDvmwaw7s3yowf3HerFpcY61yXZajDUj5N5yQfwuSgFjQsVBdgHUz5N+K2tZAa20ggKX/GnRcoG0LEVkaQH9kJ5oWYeiLj2hiYjRHivXerBDx8i/4k06W/Tu/b2GZDYv51ZoaT526euPU1VOnGk1aLAzYxpB/AYh8sPZvw+zfLz3yZA4bYfkXvqYfxM7Lh8g7KrIqKzAmMTVMCI0YFMTNu0NF03s6v/+dzpZjRaPvcsq/kIo1V5yF5N/ZSX/KvxezRsOyLiRnhY1mXeSRf4GzH/yCgw/OUn/BQbzE2dI6OtJscdDkSP71p/y7gQmMNV+wZcOGT+9S0roJ+RdxDm4tsIjffL+Q/KtyFSUlFblUfPIvjwA8NlcEUlGRS7Yg+RdugPLju/wbLBLW7R+EXqE5soYNW/5FNMobPxFp8J78u89QodvX17dPV2FA8i8JW/4l8av8+7uXkIrx0u/+i/KvzG6UAEa77F7KvzwEDFwfBjXH0TxMyr+xAARjxFaBAVwR2N7bFxbY3l4y2jfRDgd+42a4EIrvme+6/HvePXaRuQySOVtKmy53tcDhPN536Txn8m+f4TlAtPz73AgcGV+bywD5N1GrSE5UHKHIv/EUmuBUtDGeG3a+pnCyg6JYn8Gb/Msn/74ND2arxlyTF+x2l2vSOWtXQ8fbvPIv/A0sIxaX7ZVKvMm/fzp86T1aB0P+fR2TfiHgF7hVlaQMcBNeUAVasFf5dy+v/PslInwrE5e2r2GvualPc8i/RzIQ+H5XrcAWjsxL/g3ipqWUbJe2BLHk3z98tkMm8SX5NyQc5dOHw/mDF/m3QPl/IP+CohAVsg6dH1Uq5LygbYm2dsRENE0jWu5tiWt/8BQd/5ix0fTk3/Q9UKCWc9++6irn1x84nk2Dkc3eg6u/WMX5zY5Zv78m43/LwErwh/wLUTtpLXDE0GaC4a6hboRn2GCE3LgUSbxlYnRowoivjvb8vKrExIuaGBhbAEMO4b90XsFFy1QKKEpTmsU/JG4nHeearQk7hma2rnEyVnDuobXNFmeO1rv8OxMMwb+rH71QrK9U88u/S62GpCEILS+yGgTkXzrWwfLXLn+v6figld6/YPlXBQdsIy7uIz0U/Iv5v6kKvFOqgIv0/PLvooMHnzlUcHDR1K4pTvEX4ev7cJjKGbjCZ24wwwwP+J+hraLLv5GReE3t8bv8C1w2yfWa4RPx+JLQWcKSoNLNTotl0lIKTZb8C3R0cLcBxullSz1K/m15gpO7Kf/GMFGsA/dXweom5V+l4RGCN8JjY8Pf4JR/Py4S4qiM8H+hjChonQkLm6nN45J/KUO4K3GmFi/2NEk/neN9sBp0rRUVrTqD1Wvyb1ZCwoEDMzMHDiQkZPEk/0ozwPmlTcHJHPLvJuDzIl7zk39/DGAKcF+rzgoYWvsqeORf4H4iXVYGiVfD0OaUf0H6xeVf4IPNfAh9Lk7n5tbmms1tkeY3+eRfbbMM5N/rxmatN/kXOPaT9NfLb5e/T++lyL9vwHwX5d8tMeoMkDI1+r2JKgVEe1LXiTrL5U/+ldGawpqAFB4LU8DMOUzjKjr7Ey1vDo2+2Zi4n7Fiwcm/sKuuNzcsXP7F1V/fk39l+Xtefvnnb7/985df3pPPn/xL1E9fn4wKiIoiB+PGWpzyrywlPa2pKS0dREM6Ph/vUJEZL2uNl43QMnV1dhpl3uTfYgxO+VdLosoA+TcxRssJ2pYS/MuSf0l8l3/Z6u+J7dtPkPovS/7lU3/53wdV6n4aqSrGtivpHCiZWJmaunKi5ABjBevqz6GkAuXUVETE1JTSm/z7UKHDMTtrczhss7MOBz36Fzt7jYNL5y/GvYjV0VBHv9jSAgWzn1v+zdu6jgOG/Pv7E2dooyOi2N8kGJWGJf8+pJccyZBoNOpFsIAbv7QGS+K3vYHvJF69775XVxVjv+T5yr9BfCx531Jus5Vb3l/CLf8CN3NuAjkw5zzOln/B7fVQlu9R/8u8Jv+aOiH39++g/16WeZV/0yyBNYsX1wRa0jjk3/0i4ZF/h4bgxsbGpJ6hGVQhG/jVIez4N1UknClVMsf4OIQ330v5t1Ak3OctFblg/wLe5d+Bmdrx8dqZAb/Kv5BJXtCgK5jxJP+uYib/kiFLoytHi3S6otGEIUL9vTfJv8CVPU/g6u80Un/nXOCiyZD524Kbv275F5RfCvAsw0llUpLyJOzMaCtOLkD+bTaa4CvEJAGwhrGZK/kXKPBR/gWefCQHJfTmQAPglX9/1d1g+gCcX5XFJt381FMfGM0pxKr1uPwbzwI9asHuZSb/Gl5YTeEFAzP5N4iPSBiVfuYfeTuGXhSf/IvPC5d/O7WZUPo3+feyzG4fnrU1NMA9SDVb/l3B5tN82k3IaG/fUG1t6+gU3OJ7dlV7ibD8i9iNxf62pSj0wQGecVP2Xs75FHXUu0MYi3oOhx6+1BfYiuTfUb7PEOMQqk4J1NEOojjlX1lXDlxSy8zOMfpV/gVM/dXV/aYF56iLv06P5F8U/CuVgqH0LM5Ziv67BCcS/oXGyCX8+Hr9IIiJKPn3IUH4P11siORfmAD+5F8E+1h3ZE6vd1WmuvT6uRH+Y90Ss6UE1b0BGwIwkmJjF4cH1DHk32tjYyPqa3CwqkhFYo0P8q8R5F833T8m8fVBIZnDKNPa5DKHPf7Ob3+7fv30ttptg0sx+dewtMbafby7u/u2W/4N4uFzedO/GHT0334n90RuUBwp/yKhL+0VT/jvO/ftf4sFbY+EBvkQK/+eP3FGeVGdkqK+GK6sUwrLv7eqsNhfoqi6xZZ/ZQxAz4EzMK2E2X+Xk3+BaN+Sf20m+1G7NitLq716L+RfgC3/Ppw5PNwFxm9nF6YAI3JY8i8Bqf4Kyb9lLgj+nbuIYn9p5i+v/JsJ+2M/yr/PYOzUQyjgM0II7882jTccP358N2V/tl4kvu7Jvwgg13f2wZ0ZxYrE4owjXMm/C5R/LeZmnbO5qanZ2WrrbpB5S/6t7u/Pzu7vr8bl3zXYvIFT/n0lLT9fDnd4YDy7V3iTf4kqbHR01GqFIozej8u/QHn5O5j6e+Psgyu2rOCGPGpaBe4vQQ1ckaC0BORflcU82Wxu5kn+Vc/euuV4bbNNIYUtky8K/Azktz9o8xDQyVpmy7+j6LiyosRsNh+rr6iwILTawoTC2cIEUv7lEbDiJidzX7/T0XHn9dzJyThQsPi3xaN/z7z35zP10BCSfzf6Q/4l8av8K6MhlYxduwaKwzV43oa9X6eqXJviDJTYX2zyRP8S3/PmCkyxINRfYfkX1F8nvHySfzVg/OrVar0eIpCkmoXJv7jxq1cTEcKw8GV9oqb4GXr4LzOJPwDGtzUH4uRK9sJBikj5t3ppJ1ZVoYqQf9mD3ImQf+GalpV6mbCi1oDF/s5L/n2LypffWqGQOcxyuKG54i06+P5Xi2at1l0n8uDrtujTLQONU2uXy1EwBR9oW7VIOOVfo23WbjcaHbpW+Htny7/oFlFmFRjAoAB7lX9LS5eURUeXQU3vF96DPLCtdvVlibN2G/UB2Pw7aaD3wv2k6y4YLcRc78YM44VUD3/1ezKQf7mSf+siDnuIqOOQf1tbSypqa8TIv4u40ceA/Qvub4zGX/JvvbMI7F+z3+RfI5i+Rkz+hVEtkfyLdbDlX6CktsdqGPzSl8D+fRReLITl3+UAU/5VHazZVWNVG2dWPigA3x/D+z25H330nfT073z0Ue7om0s45N/DVZNFPVPwhlmLJq2H+eXft3IFYcu/+uKLFysvPn3xIozHyS//rr3vqV+xeOq+ADHyL3C6qaNj+DQ0OJN/2ydKPL+YiXaW/KsTCXY4dIAxjY4mJCTAE1HWggRK7xuk/Atwqlr5mwXkX6k3+ZdHAJaMFY24dDrwSaTzln9Plaanl576L8m/3Wwyuzngln9v7AEiDV6Tf3ft6qtFyb+1fbt2CSX/Pg2Bv9iMF0/PX/4dZTBkWAwYhpj985d/VRl6uN4iVv597LrEeCABJUYkHDBKrj/mTf4tSuJmfvJvQAitBjbMbB9otzlmZh6b2EDKvwBhAJ8paJ0YVSbA+UdvSa/nToXZoZUSz94c9jrPT/7dfiYU59LpINAYYHC13aVdXZGfu+TuPrOdJf+WHM8RgCX/Lr42ps3PN2lHFCaTQpOhmZqa+h1F/i2nUIZurpVz46uGVplVmeVs8A5N/m3UNmshr0drnAX516XVIjHP2MQr/wIKalKusPwL/OlS6InzP+CVf0l+WF1TF06ov3U11SAEU+RfI4PZYIxZZj8r+RfcXxJwfznlXwkLv8q/KfHRRDM6PsX9jRZJ4UObghdO+VeJHjVQepd/65bz4h6OziBiLrqr8i9xqyZqXbK3T68aRzr2nErtRvXcmJTzAH6JSIgjJyT9ggIMJbJ/rzqdV6EC/ZdX/kXRvwRFI1IuWWM3SSSe/lv+moIDX+VfSXyKSZKfkga1DF75kpR4CDpLkctT8tVIRjZiq1Pknp8XhiP89BY9iKae8N9vMWGdIEkAgROk1XS+O7B1/1aYB77LWMF1NCTTmo9aukXIv68GB4+vXv0Ve2owRNNIeZN/a4p6ZmaOzs4WFfFLr9V0zvTX22zDnfX9Z6rP0FYsWP4tgue1ior45F/E/pnMHEE84syhg1Nrpg4dOniQKf6S+Po+KKn87tg7T/SD9Yoe8D/2O9oquvzboHsASgoP6Bruhvy72W7S63M6v+dN/gWibZZbk5O2FOcSavLvZuwlAFqJSY4UUiG2NvUsN3dT/i3FaYyHT1pGlmavHN1iWxcjh8W9WVkZ8Y2lOG75N/eREw1feQTn+PahcKUyfGj78YXKv6EwRRACcGxEknLH2rVRM17k34273MTGEq2NwvIvmLGYQsUl/+ppVFZWrtuydeuWddBgZ10pMJIrmRQr6ODy7yk0nxKu5y3//utf//oxAP+nS+jtu4T+jzzyL/CKTIIBT1cNQwgpX/KvW/5dLzB9Q/BzMQ4Oz3S51uEUkH+12pERhzj598P65tvlzc4POZN/CXyWf9/oraD+Jey7NjJmvJzzpHvb5VQg9RfOhS5e1BdnJCZfpCX/+nqWe04k2GeTiSbjyJEMDaub64w4ubl1aKi1OZnrjLhZJFzJv7ed5rffNjtvc8m/8BFIFTFX4pLjfJN/5Ztf3pMeH5++5+XNck75NwAmVOLVUe1sVDA18xcvOBJDZelp6TdupKeky5jSoO/HOyQwrMllTPqVQQU+ohfBG57F0euTFVIuwVtDQb8lfIteww3aFhd/+ZJ/w/CZJf8ir1yxEzyJykoodiqgg/EzsNXfTwKk/ssn/27tFj7WoEoeTPk3xov8G9i7MitrZW8gr/y7gkj+Ldi4bAoNNje1bGMB8V2xglv+TXU4HJDEADM0Ulnyr0Se3taWLpd4qzH5t1liAvG3uZlQfwfC+KV4gu39Z6ijIwK1Ooj9pW5LWr76GPhFZex8kARWeWCcM8hkpa8GrwLuOw371lfhHhJ0csq/E5V6IQS+A5a8aylypjU0pDmLLO965N/marrle/NxEH+hgF6W/EvldLnc8+kv9yb/yuHxDVB/P/Xkk10mr/Jv/rgBYvxiDeP5HPJvgEi45d92OBAemtmImj1JPUkzWPLvguVfMLcrKmwy2b2Uf7eKxNfzljAGW8dfGId5q3/lX6u1dWBAZ7UuRcm/qwKwF8yk/EsyOtozWlQ02qPTUczfBSf/Zo3yQsi/wBO4+ps7VHdwDkJ/5fHI/H1g0ybauEN09XdpHaqUUNQtpeu/85Z/gWbaAyrg/nLJvwUFNXT594uE/LuOV/49noOefpFIwIToyjnOIf+uRzPidZs9Zf1Tr1mApqfWpzns55761VME9L0ZTGygl/NsPq9mkBb8W5MnVv7dZB460PqPvKH6IG/yL/mYEeVII1ckXPLvly4bsx/2a/IvAMm/9q6mzmYL3IPkkH8lIsHl31qdbrzBtSsJv8X3aolX+ReIi2xMS64kY381iV0Q+0tAuW+TdwkususqLsVC8O+2bg5YP69iSokxpfAm/xoh+DcbBtXK6ZL5Wf41oiMH44LlX/HX6ZH8+2yqZm9Gsn7dswTBZ99H+i91FDIk37dBgyuN4J7JvydrBUHbprGxo/ML+oSfS6DYXwA3gJnybwjqXIuV7NHCrs3ps+wXZpOzpg6O8Cb/kvS+sYG4OxCbBKfoIfTkX7CRJBAPqY+KCiGFG7LglX9f0MqMULHAzqlEgiX/2rVyE0godm0a5P7+bf3x1ta8waURyPs11Bh03d0wNtDfvMi/02e6ywcHz/f/+oWPYImUf8/Fg1Ul7wD5182es4Ly74CX64sM+ff8UE860DMEp1Je5V8CPvlXwkINSHxP/j3rh+TfaJ/kX23WrP3oBZO23B/y702R0JN/M0H8Bek3JxMejEC/xEwoHqXJv2z1V1j+dULu78Et4QgO81dm0l7u6qTKvz8ezxXEV/lXrz+CpiN6aAhMem/7s7LbN28voezPzorE1z05Zv4CIP9qILBYr9np7+RfqcRuNjuLmpqa0puadM5up8lb8m91JhyEZGdWe0v+Bb4Xj49mFf+9+7mTf4kXzGE9Vit4YtaeMEovKf8SPJEeE6PlxXPU9OxU6FIPETBTWkLJvw6I9jU7ZJzvmSpmtuk1h6PJkjEmRZEPhQmc0PfrndnZnVoJY5kl/45u3Yrl/gaWjCMqSizoWoNWmjg0NDkE64Tl39PvOnPffU3+1e/Jm97Ndb57WljdQ9RXVdVDJZz8+z8s/0qYjI2MwSzwUDI4jnDsPm0NxWJ/YSYEYGtcEF3+LYFXrRVXf0XIvw0+y7/FqmfgBX7uzkSptHiB8u9aTCdG/85afGGFPkOq1kAD74CCLf8CUVmeUf7H5YkhUSHi5N/m6luoqq6BCsCONtnc95BX+ff8iSoYy4oaIEDE/iKw/aRIOEYAC1PJLOOOZJUqjGMEsAsi8XVbXO6Xa6Um7/tfp0g45V+TA84pYoocky7O5N9LoP0+WV0Nzm/mJWH5d0lpS2Qk3oyE3MElYuXfTQ2T3au7zS90T+o2kefAsm999VvfMjXn5TUb56zWSRg2FZsnrdaqrm/d6YjnlH8BZdJhN0lK0gkm5V+wf2t1iyswJ0sXa+0L5ERA/tWoVZqdOzUqtb+Sf1ucRYjJ+hY/yL9SE+zoIekXS/49VVoKBST/QhKw1uEwcUZtDCVZB0H+xWf6NC/5N1GtUsdY2r+84qQAH+OTYy02S155enpLps3ScJoz+Td0suilgoKquqSiyVCB5N8vBwrCln81xZVhkP47Coqqhk/+BUKu/orF1QBx8i9w+tat01BxJ/+2T/T2lmBfGr29HPJvkkjQtr1MdD14bdDRuqny7w/jJRzI+OVfQD0yCX+6I2ph+ZctAKtAvtKBTeJaQPJvukSS7s/k3zoayuDg8DpO0LZ/Fwmn/AvsiY+/sdvgLfl3177Wvqo+mFv37RJK/h1YhLMTrwbmL/9uY5J5Bnb6v2F1z1v+lSaDByJW/v3LX3JMEtPRo+i219Gj0Mz5y2PC8u/osmWHOKZlPsu/xN1eeg1FX18e0Ne3P4Qi/+7bdyl2n9sATloRHq4MTwgL6GVklfg5+VdY/o2OA4LiXr9s5pV/Sz762+NCsOXfkXwtJP5CLKlJnvw7EH9JsMN+kfh6O0efdaGyOdM7NPm3CVxfmcyEHnxxzbnkJpnMOKxtFJJ/Yw4dOgIcOhQjQv4F3vvTH/mSf0n+3VxF3ltVJlXdoqxD22YyaAjGaOD6vwm7v/de/l0S2UIM8QCNSDjgw2/qJXimrakXeeGSfwPCwU6C90tY/hUGbXtMJHdV/iXEkGK110/vOpGw5N9or/LvO/gLoDSY+i9zbzNSBMPP9cCjOTw/Lyb9ouxfHPB/p89e5MBX+bc06PmgtniZvO3555fAmJvxkIYXCa5DShyMhu2CAO93nw8qhdVNnp9XvXfLyZN6hdQTiJfz5Nd+/+TvPa8nv/akr3vSR5m0HkpIOOL8rqib3erZ2Vmn2m/yr3VyaGbGCdLrZNJSPum1nE6/biDTnJk5oOtnrFi4/IuSf3nl3/0roxLG4SaiIKRouWhq6mDB1CGW+Evi6/vAGOjixjeeeKel5Z0nvnEjgL7mnsq/JOc6jhamgPvrXf412522fG2Tc6ielH9ZbIaJbBML2GmrSO6m/BuEgDwgUH8r11VeaGzE5d9Gome2Eb9Q4JF/PWSfWBxbEB5eELv4RPbCk39D0YTVQNLytWsTwP0VI//WUOTfGgH5FzDUYg6VgdnPve87OTT0S3YveUMuS8FEw3FDbhNSe1EhWJ+ap/wL9i8ir9Ua6373wP71Kv/KTLLERKlJxi3/fvCND3D5F1pQcL7WC8u/nxsff/Oj1eWlDbv55F+Zw2bUaodtw3IR8m9Qbn9Of81AHJ2Fyb/7J2AMfbr524WZv1zy75a9alWMBp413lus37Kchq9nub8QCfbvMrmaf+hQ/lVWN5f8W4uJEttqueTfbSLhSP69DYHOb7/dZjbf5pB/FSIhkn+J2Rf5F4DoX3SWiYJ/eZN/yedAo1LtR0fpPg4U3PJvCrf86/vxDoFMa+zqBOUpxyiDAx7v8i8gVWk0KinncUm4SMixR/CJP/k3jC7/SpG6sAFSfyENtvhZaCCplCmGstVfpv7Lln+3jn9b4Hjjrsu/ZFr8xpfWIPl3zUsbp5YJJ/+usjlsDqTwQGVbxZJ/ScFXuMbk30ytZPg3HmoTBBOxydjfWqpGVUHE/tKSf1eseXAFVA8t0muOPPgQWobpQZhhQg0ouOTfNyH69437TkcDb2bxyb8l7VEBggh9B3youeZqhIeKXC7Nh5Tk35zHGeTk3GR1sq9QtPkg/2o7YT/+dyT/dmq9yb8dr7XGLgZiW1/r8KP8C8YvMDMDBnDSEGolQU3Kv4ki4Uz+1eZCbI9W+r8q/5aUBIqauORfsH+Braxu8efdHPJvRESoobXVGhoB8i+u/jKSf4EoNAM7elYi+XfljpUEfkj+lTVv44Ui/16BF6i/BQch9BfM36bSJ3Dzl0f+VSaFJi1HjaQkVC6HRaU/5F8g8zo5HsH1zN9zyb8FowV1daT8+0VRyb858fkmoxYNk2rKj89hy78U0me1m9eXWYAvru+wOzq+gYX+4vj617uagsGaR1GBrYbV4uRfINoMnkZh/aYgH5J/cdC2BpHwyb9+T/7tkpnsxq7m5i673SRly79bRIL/vKOtuWaLrUgZLF7+jWtJV2jWkbG/ycZOiP314DmCgYfD8mIPh7b2GWCMoG/DJmxYv4vkOiVGXbIX+VebA+YvmnM6tX6Wf1VqdCS3YPn3cyLB5V933C+V9yPB/qUkkbblw/FzKRIS70Xyb2Qkp/y7Ysf3BcGOr9iU2nnOJXDtN2QtZ/IvAlvDJf+OzB3NmgWypuZEyL9Au9v+XRVeBwHASobQK1VD7HQIT+yvkPwrNb3AI/8+KxIsngTuoYCHYpSbUn57+/jt9bd1htZuqwHo1hlqt21r1bV2/1ZQ/gUacrvzTuT9afqj06T8i7hfDmM8Qy1K/vV+fZEp/45eTAcuKoXlXwQu/0YQ8i9HgESKSO5u8i/xERMv/54G+Xf2giLLbtIeQ4u7qZz2Xf6tFglN/v12dva2bODR72Y/+ijaOX4XdpHfpcm/LPVXWP41X7s2N8U0f0ntF56/gD8Wivz740Av+Cr/KkTi6/7sQZH4uidHni962ZY9+OBbmuK34J+Y/aIfkn9lFLTmbiT/djZ1phc5zd0OiZxcx5H8C/bv9ocf3g4NXP7dgOY1XPIv8Apmp8RD7i9f8q9n3j/aU1NTVdMz+gZArmHIv8ezt2d/MpsX4qjp2YHzXuE8pxobhhSWMc5zKunIyGwTGgCoMXlEhUaHuvohJ7R/Vz6cnT0slzCWWfLvQO6xgdHR9l63/FtCyL+K0dEdQ7n1DcLyL1wWbRi3paWnp1nGG7CUdjF/v//P8m8mk9/gBRPyfYjMbwta0oB7v2TyLxShuk1xNPkXXWDB1V8R8m9hIai/hYX/PfkXWIvLvwhS/oVeePEk/wIhUZUSRwkxrJMKhrsVJf8ibnWC+UvKv/vZRL0lKP+yY39LqLG/gK/fWb10xiGCNzd3a7FpnLHCt9GLxG/r6/73ayLhlH8lMrXMMTQiUUsXJP8CjW1ku61RdPLvMau13/zo6m6nwXqMIv923LnTIRvO++M2x9iIazKrGCNr0jVy/c7Nm9/qYMq/RMjv2vAkt/sbvpa+hvhEVlhja/HUX6T+/vhhLrjuoro1OT2v/BtCFCHi5d+Wq2Yn0ieR/XvVD/KvzAi7eshxNpos6CztfSgsJiPqcdiNMn7592Ewff2S/IvId/YkCcMr/x4z108HPbApurSxfjqOS/49bCXk32pI/vWj/JtVfHFlVnKxfqVQ8i+Q0PKrp2j8qiVBpPxLwJf8OzHRPoG9n1hjQfJvIJPWS9hV/4oztbRuqvx7Lp9T/v0ev/wLxIyAIxQj4ZN/+QVgGZgkoP7OX/69kSKTpbCGRD11at7ybwSNguBg5dIILvwh//40Pf0LT2DZvw2Cyb+6Pl1fn65CJ5z8m/sMbUeVO3/591MszgDct70fEQnj+cDE4soQcfLvY5lGdJsQou8BKKFtzHxMSP7dFraGGz8l/wIbXh1/773xVzeEkPLvvsOXDu87DCXm/9YUIHW8oKBAV0tXJu6u/Aucd3u+09G7wWPAiucjr7uN4POwAU3+/ej244Av8u9zY/ljcwc1yRmJWu2R3wHzl38rRIK2TU7OKPZZ/m004vKvNj/t8jWXCcm/zdq3heRfKdwdVyhQJSz/snnvPT7591YVcS0Pia1Vzf/+GUP+fe839Kk2JBgIqWX0v4e25XB/r5Hu772Xf4H4+OiyaJjj47FFluCygx8O+ReoKyiogypkYfLvF0Tiy17BV0kX31kEVCbK5Ca5AL7Lv+KTf4m8XyjRhGqyDfovj/yrlUvGpHMu1JRiy2ru5F/C/31x+v2tASc58PX3FtSYgnyYoLimlBbwYZ4vS2kqg8Xn21Iao6+Y66+4Vz9P/rzqyi2f9gwxrO36/WMsFiz/Dsb2Vkg6V3Pd7M5gooK76zGmFCYs+XcmOHhm9epHLxTrK+G95ZN/l/YUgvSa65zsKeSXXv9Ap0F3NvP27cyz/Q2MFQuTf0HgKUJHekUxvMm/W1942BtUcWbR1CFe8Rfh6/uwlk7A+z/HeD+AsYK+f4iMxGvuHsZF/7JoRAv/Rf+vCnHuHBQi5N+ySYtl1gljQJWR8q9X/ufkX4r6GxlUisu/pfRetvwL6i8Qi2bgRPbC5N/QCJT4GxuKXjBtVC5fHjboRf6dUuJMLV7saQrJv4ABJf8aON8HkH2/DEDpYccOvKb14xc3V8FwtazdgVoPKyhTMCb/fl7UNF/5F+zfH/3rR38ykOK0obaER/791f3us0aTVma3y7Qmrv3DZgSIa/npmwURPnue0dW2DtS2Dr25hFv+hS+Ahmat0dkALoh3+XfJu8f6zwwExfkx+be9t09HiL/PwSgZkBZJ33Y5jS2a5L0QqVqsjrm4nI74s1zf5d9TbG7c4Ojkkn/3h+0PC4OCW/7NFTF1b+NI/m1zlt8uLf2g3FnOkH99/e6mur/+lH+J0bbJjN+AMMdogIjkX6ksJT2tqSktPYU5qL7vxzsEpuHOTmzs1C4TDDENrWET49+NUalgVlGrmBio0IusVIk+y79I+xVI/oXJk/xLqr+k8ktqwNBmCBFs9Zet/6JtqeqvEIzfhYop/6rY8u8B6lwysTI1deVEyQFYInvZ8i+K/gXpV6kECbhAuUZA/gVmHTY7ukILhc0xy3ooqeXFJS/C3OKtRttC6K/clOlO/u3eGgB4kX+3n69mPMXRp7PCOCv0bZd5OLQMbhBDCS2YiE6iYH2Om05/CFecT0ejSw/vzkq505173xCjlAXxUW5udg0Pu5rry4Mo8u/Nxzns38f55d/TMENVlu/58JeR3ae55F+ZsRPuvf39UyD/gnLvRf5Ncy1djLHUlebn5N8ZzP/tKZhBZc8Q1NA1tFD5V2qyBAJmE1cy+AsiQdvmi8RX+TdbJPzybwKn/BsjCq7kX7jTW1MDFZ78CzMUAavI5N+olRRw+ZeAWLkw+TcHD2xlFQAp/wK7Qf2F0F9k/raB+Yu6+ORfUH9D606i1smNG/G6LhT0X3/Iv8Cwifj6ggXu5F+AkvwrTv7NR+8GAFW+kPwLvDZrj7cA5ltpdhekALtBDbRtPAsZippjwTybz7NaB/PczUGrNU+s/AtsKquvj4Tau/yLH4B4Kux+hUjY8i/Qqc30c/Ivkn8lWshamHUYtVKQf0MWIv+uenXcYnPYBlYh/2ZVe0mgV/k37sXSlL1k7G+wXnE5hyX0ehbyDOibUHfi29D2q/yLDslAPcsZ7uoyLUz+lbPQAuzeeyD/Po18XzqUa5Et6XJ5eguuJN51+Tfy6NFIzuRfEfLvi2x+nS9hQztuC2En/yIvOARK7uRfo81ZWGizHC102ow88u94oBtzCSp7A9z6b0g43DyiCb3oOGrvOor6GyJK/gWMUpnFD/KvQya3wak9VLdA/t3WfVu31NA9OAiJv4ODrduOgwE8eNur/BuX+9Hg4GDe6dwguvz7b3laPin/vnPf/rf45V9R1xdJ+fdf58//accyVUeHapmyoE7pRf6tDiWIACummkP+/alImPJvzAU/yr8k4pN/LSbtBUVMst2UeGyhyb++fuuQeu9q9IKCG7QtU/0Vln/LXNfmLpLmL0v7JY+E/oH4V4moa979FLBkLkM/J77ucYOEuUfyL67/Nu4EncRs+fSKFYea3Gm/T5Av3+Xfr1K41d1tLmqCkRUsTUXd27rPUddxJP8C2wGovCb/Ah0yZIXdzyn/AqT7C4yi5N9RWOBN/v31w98Rxn3U9GztY97hPnq0v/aakfvoUX0N5F+H3WGzXEBP5aW3bOKG9rtAgzzBY96MZZb8e9/Vlvugai8pMSMqci0IbWIhdL7a0nJMWP4Fpi31EPTuqLdMk+qeAEtgvhfyb52yboqcewb58FX+/ZdIqMm/WOwvbv3SiGj4PF3+7TNg6q8o+Xf06cLCp0d7fJJ/NaqdD+nVar2+WCGVahYq/yK3V6+W7kVN91KiBsxiaJMvjjMEyEJQGyvc7q1dmhoVIkb+vXXr1uvNEc3Eoq/3dwj3lyP2t/nxb5L4+p0VSKfELjPacgs19hKO74tkkfi6bbpIFi7/wjC/Q6865BJu+RfdIsqsrgYF+MRiQfl3SVlkNLkUHVm2RKT8GxdtNgBWQ+4DcZRz4Pw7d/Ilpm0/gGucElkRkfxbZJLEPw7ybz5H8m84VqxVHsZQruX4lOEyfh+u/tbCXS54CJQ94XdquNRfQBNTfESjOVIcoxGOhAsRI/+2IPUXY7Jo0ll/deHyr9aBeb4O4+wON1mwYHdAt1bq2ZbU5HushkFc+33UL8m/UpnE3mr16rYFiYQt/8I7VVBQVFWQBA1/yr+jWZVPF2dlZT1dmbVFSP7dcPbl+39C4f6Xz27wg/wLJEzAdzZk/0Lub/uBA36Wfyt02Hh/tZf45d/N8TIu+beDKv/KWZi0Wg65iZB/BQTgRKkMO7mVzjf590YK3BVlEh8/b/nXQKEGl3+XGjjwh/z7hS9cKU3ZU2bwkvy7y1DRV1LSV2HYJZD8CwwQsb9QQPCvH+Xf31efP1/9e87b3mEiYf1+1YpKEfLvY1/rksGXklolkWJIVGpYlHXBinsg/5K3dMk6wC30tbcHgPtLSf4F8/cSqL/IAAb/F758UIGqS4bW2j6G/HvY6zxP+Rc4EQocbtgUt9ud/bt7U8PhWOg7Qbmoifsd6x8HfJN/r2m1cyjvd6o4PwNKaHrwdRAai0jwAROSL/gm/wJtpuHrMplWa+x4LT3Fjsm/DlPbiwLyLyIjA5W+yr9nznDLvz+srvHEKoXX1VT/8Gc08Fu429/bTr488i+zH23rNff33su/kPgraWuTEAnAPsoEbPk3RAmp2SELTv59QCS+7hViRELIvxve+PDKFRE/gxpHOvacSu1G9dyYVM0EbRsnEvLIac/bWEWPAabpv4wUL3s33MNQqdA+VwJviK2BQ/79NcX/nb5v/1pOcIFTHGhbdCFe3tRWKoc6v7GtSQKklbalQCVNN5vTJDJsNSVdIUa/t1ijlqKm6XoO34UZNRUJoOaGR/6t4JN/1zHBUnzjUaQCbWLJv/9h70yA2qgCMBxnqHijrVeitt5HaK06Wh2tovGoFi3xSvG+GCxCPUABNYYUpRKhSj0TEWithVJjpR1QIyJCZBCVQYqkKNAWtEVrLd546/92s9kzyXskUTy+fft28xYx3bCb3bff/juCe5dvOupYrz7JpQ8h/5bu6BvatGloKFTi7YkyXvA07eRetsyxU5PnBfkSxlsu1Mm/o1tHUdKDyb/fXXoIi/wbUvwlsK6H6QoOvJjc+3jxgdNDyr833shPtVvk68HUNovQYQjeEUpJ6LOEKpw8Vxn3q4qXyb8X8KNAbm4Q+fcdCZkpu6RkvqNNLOVfpeQryL8KKVgh/0L9lQP9Vy7/rlRyAPf1rWqWJP/yE0IqbsiaX9b0hEYnb4oA1hf+LjHuc889fucXTQE014NteX//cpu2/AsE/1cu/74paxcvz2diDyIjqVpDtPyBkvHKvxXXI/y3fZCsOn4lQr4LIv9+nWvwbx1OXPhH/lrwdBC8MIQm9HYx0udA13Rf+4XxweTfrO5hq3O420Aj/0L03bQJbVFL/l38MXI0/eYvIn83cpG/IeRfkF+QlpTmSk+3KNpZznIjl38Bjfwrcrm2/OsLX3yayb+nLEOgFMqyUyKVf0X3l1H+NV2w8IG85OS8BxZeYFL/XoXjSybzlnAmjrxV6/2amjNAs0nZzn68I+DERR+ecoNzY89G50al/Gt3UWHXgXwJ9rlT59rztdEBSfCvSv6VIr5f7M0sOTAociyYV7wU369a/Z2JotZ/dUCi/rLIv1lFj8ooUh7TLpVz6MdfHmq3H/rlx4cqFqjl332+Kp09u5SMXx0QUv49sNrk7Ya/4/Wi6vaaqg9UyL/49BsbsR8LN+XOHGH/Oq2trYVPPPHIpv1DK1pC7G/ZWkQBjQjmyfK1ZYj9Vf7s/ZTogOi7IOIp4z4IWCgXomrx6vUmp14pvVS8T6eUhbrWWOV2f45LCxL5F894pEAHeMNX4L4Mg38XdP99YZJ/yxHgDt7DWLwxnPy7ddcAW0PJvwnBxmDJv31E/0W55juiAAMyHRrik38zKdHYR5nqllfgw1leVx5hQu/vlLD+3jsoCSL/btoUJPk3jgpN+VfIfZpcStRfefKvUvMVXwZaEiOWf0Pv+aTq79ZyYv5+xpm/weVfqL8rZvtF3ymTJ0/xt85eAf03cvmX4DTwHv3z2vJvKpf8Wzs/mPw7Q1P+faPHajKYkpNRWXve0JR/TyGFo3l0lJN/u0dHm8+XweXwEzoQLN5YydNIEk0b5a1AdTa/uXbPss2PgM1le9ZuPopW/hVhTv6NXP4tdPY8HP3kX0NcltXpdKKjXpH8y3okt9vij23bRkev3LQYb2oxLjKGlX8vrGo2u8TY30yXs+fwS4LJv+CQ68FRJ+1NKf9avvLfCmoJI//GIYi6fLjYEAcik3+/poRl3bL200P+5Zi3E8J+Vezhp62ysk20EhUlyvLvrDVrZo1X/n1MzSklejVC8i8ZQiX/JqiTf0Hy6sYl71Q2LllSuTo5Tkv+rXB7HbxLUmdo4O3fxfw1ZDwyMkEi/+q34ijVXJ0Im0ZOglgFlX8bcMljQeTyL0QwL0n+NZian3zy3QWbyT7O5vO98cYbeASMb3NZbdmyJwkhFY/zPI6bmja32BznyeXf2zv/uD33Qz/71q0EOSvlCHuk7449hEH+BR81vTy0xXX//a4tpYOlU8LIv12Dk0UGu+bIYRJkGWGXf2exJf8S+TfNPOYt90ZL/t2TovDyLyU6QKP+ivLvjm1PzRXMX7X2C2Ty7/WUgRenSBjYEwycoslEkX9Z9uQn8ny2sGinT3b67ESkAtoro5H8K8u38Pl8trpGyL8NtmUjy06Vop38+8QqFL/8ezQKyf/Vln8/SDaU4NlhH9Ak/y7eUltfX7tlcdDk38eOuCQcOsC5v5Ty70JtHlA28Mm/o8iGb0A6vGs0vaT5LHi+s9SDTP4FVkRZYSJ7re7DeP+T1+/mph8v56hzEsxrlhI+eX2n0PIvocHbu2xZr7dBru6FJvby72w5tcFglX+vpUS6HjwB6/cwOZM9F0rl37X1RP2llX8R+8qa/JuT7jrwgIKsgnQ9hpxI5V9CSpI+KYdP+QU59gNTpmEq6r9a8i/s3wRzudCt1BBnT0wII//+hHHVnl0Pta6KTP59Hvez22Sxv7aaVYj9jZb8CxxWcrO+161sZ7nhmvVnj6EkYvnXicfL7VjTPer1JmnKvzWFhzcNDDQdXlgTWv41NhvjNV5S7UGMDo/HYZQ//cY0Z44prrzwkasWeA1b63/l5d9f6z815P7442W5Bsi/Jfz75b1fkXUrONYdrFgg/WTbd631q7/a+OXflMAgYof7m5QE+9ceXP6lT/51+8XfX7np9rbI5F9g6gYNXq93LHvLUHb20JbsIu4pc2g1iT8ravL1AwtO4q3fs4vVMMu/8EUa2rFrDEMk8u/YDj9jUZV/s4tcRRsA/soSQ8i/YE2ujDVoik7yL1F+P37/YxSiAUdX/oXzXtbev7zetjyI/AsuKIlTY8qTyr+5lEjl35AJwMKDECiRXhZ9CxyvpLJy3PLviRJsvPxbW3WimmjIv6DR1LgXsn9tCvk3Xhwg/9a3t/f34wFzIZN/wTu8+Ut45+Soyr/PY9SWf6dk0wz8pWy5+1s0I6z8++qrxeVkb2LJnGGO4zDPyLSQlvLiV2fGXv6dpEr+FefQ6wOkyb+8+DvIlXNFeBG4BgYw2eq4n6WEUyYokXZqPj9IOi9aLhSuwxnv4xqeF5YL3U9vvHvGuORfV4ELzm9+QYErf1EB5gSU9z42txzX0pisDet+pLeXNfkXGJOHh63fDA8XFrrdxa2YL2/9JtkYTv5dNC75d/16Lfn3j9aa0sCl1fmpNT+hTSX/wu2VDQH5V9b8hFz+fZ53f7cJ7m9Q+beAYOF1Rwv3IsryL5G5qqqI4BUN+RckkIJxYsq/LIdj2E08+slee50XDuktNdZPy4XZ8k+DZHx4KNEB3vHNK9FK/hX1X3Xyr9vTECfIGobteKGV/GskhfDJ3UhXfVNjmM76KK1cY3wVMV8yZu3RkYxpY/ysRpLH14HTibjeghJjfBtZnCyRf816vZnr/3MOPx+0YyZTQjX0VX1Rpias8m+ijEmJk/Bu9IZkzTvvj5JxzeWI/j0WF9theweRf0H9jvohQj29/Ot7e/sSj+ca99s+Dfm3jhKtdDD91q2ffro1Sa8t/5JH8lHKvxTiL4F1PUzneJMUngM5MCNfokgGr3p9vxMk7Pd61QkRyb+X3Xbqqbehko4qWM8SLhMICMCdJSWdwmtxoji9bHtl7i4pr7SdpUks5d9mqfork3/l+q9U/j1pYFcNBk6Syr9JCswrua85s9bNF6L5O5mvZqeee+7s2YNN69WdvPkK7Lz8q/LgtNZDbfvasrK17bWa8q+KN7dA/lUhES3T9PLNrmAGaT2Srwgsj6Bkl39F/fcR26Df/QWDQeXfywzCYYPVaUUxhHw0YETy77fffXtefMt3I8HkXwMvF5vImwkr/wIoZKijlPz76Jd43hhn/m6D+dsjmL8h5d8N6easLJclyZI+V76A4Sz3r5d/QTD518HH//rEmhukM1rJvyIRy797i4VF/jWU4CLNratX37pQFf2rA7LQX9Qo8+ZJTgqFovl+S/KAumeF9XjHEADXcshEb9Cj4lBuQ9PnUsGdKVhF0gvmTt1gTrJqogNE/Q2W/Lv/DLEI60Ee9asOAhbWg1z9FbRfzCj0Xx0Q1V8m+VefduSjEo6U7We1pMG7lx7qch269G5lu+QYZpp/esD8r0pTU0u/mn+AsEBb/t3NanJuxGG804lqo9Nk3U2Z/NuYjE+7sS3MlE/+BYWc++uD2RgcoVeHj/11NLgbRgKdv6nzE1S9LydSIlm/5U53N/a7HS3ocgCoOyADd7ud5ZL1Gyr2l7kHdQ+J/NvKIP/KWZbst3WWHRdG/i1BjuMwduldPV09PdbQ8m/nroFLgnvu2qkp/yaQEpwg8m9f6jV3qxlKjVj+tY74cWKTlMJ6i/85lIxD/j2IogSRf6/BGH35lwfyLy/+okYR5F8aYi//Gh22Xz+1Jnc2tu133nnBe0AE9Xdy6Zt38axDBLB/9s3SyUT/jYb8699urJryL+xfjKRmS/59o5jc/dLVhaqn+Ai1/CvngwY3Z/82XB2I/RXlXyNHVWVzY2MbN9tG9rZt8lagPpvfXL/nnkQ32XPP+s1HRV/+FQ4+hMOPyOVfULyx+OFoJv8CIv/yaMq/b1LCy793z06dOr+2bzFxfysqlmsPywX598JZHRkW+24Bqguksb8nqeRfcBBhb1r5N8u1jgv+dWWFk38JPcVxkcu/51PCcobF1E8vyL9zM4PYv6LwO0uYi3ny7x5G4x5RlX/j/KSnq5N/uXhf7eRfQQDWuJEwr7KxcvVqVHkaNxLyfozbb5YY3ML159OFkJCp4haTjjCIokkK9Zc2+ddXjmMwzPPcNF75Fy57VrmzPMtpzX0S9u/P0H33rLfZfIR2Wz32eO+Gk39BS0v8Ly3nfduiSP7dlx8Jf9xekqQFv0ei71+8NkBT2WbblGdypvTVD6buHlL+BavOnSyA4N8JLf+CWQzJv9uTvGNFaWt6rbz828IX/5Rd/oXZO3hY2MIu/4rqL4X86/71K2L+mrM0tF+V/HvU9Tv/S+Vflj35iQLND/DTL5pRqWH9NjmVMAcjmbh9Ix6b293qtnl8PkH+nRM8+XfVKjJSJf/eXpJ7++25Jbdryr9K1vVt2dK3jlN/A4jy74lvXBIeHaByf0GIbegFrW1IjxwVl2us14VnKTobjecFg/WzWEq4G+4vb/9yHbnkjk69Zc1SHiwLK/++VtV8f3Oz8bVoyb+zyRix/LsnJbGXfy/0lNmCUeZxtAjy7/L2Uqi/1PLvEg+BRf4Fi9LtB+a4LGZzEgJ7I5R/p3PFhUN3+L6EaRgI00Mn//IdGgVxjp156uLyE0PLv601rahWdZH5SORf3M+OSEup41Zf0wr3N5ryb4UbD+nyuiu0vi+WUMLys3+p/DvqHR21jFm6rV6rWv4lNBU2nX02ql3DyL+VxniNl5R7EOzpFOfApk7kvBu6F1x1VeE3NfU1Y0T+HdtWX7/1sh87TXpc3ukU5F8FqeisQFdGqqRpqrCVydTfS3DqF1r+FUlBwQBycuy4ZGO25+TI5d8EceQr1OHl3893EPf3V1JhTiX/GiiR9sR6vU4S/juWPdS+ZYttKLuIxP46vV55Tyyo6B9KLdv8MJ/xe0TxRqsaVvkXSSU+8ryN9WEYv/w7+VysKwJW12GToyj/HrqhqMheXV1dVLTh0NDy79wCfZxIwdzoyb8ErNAvuZmlB0dR/l0L/bDfZmvHM2qDyb8AW5yK5A+k8u/tlAjyL40ArAOLKOEui1KiA62UBJF/62Mo//7wADCW2UIm/97z4IP9/Q8+eE/o5F+wSbB4N50ckfxLiQ5kZ9Ppv/JTJbOrGvvFcPLvzEJnHAn7tROpyp5msaTZJ2HWnk5anYUz/7rkX/GJr0ohmMz5hd4Hz5Xov+cClQH8tq1dB5ooYVU8xEumTYj+tfFWw6z7jPG2FYHY35mC/FvxC9Rfdvn3SitIN7lI9m9+msVQ7pLLvwUBLIYMnIreb7AUaKEDF1CiA0WuXtd2NvkXNCP6t7V1YPMT69c/gaeBdDuHv2m+OZz8a7Gwy78EDfn3p5rU+ZP8TC2taf3jFiX+S7iXiKKvNPlXpgXL5N87QuT+ivKviCUOWCQN7PIvDZHLvwITNvmXpcPn9ISdzjsBh7V7Uci/nwncilGcVaEDKygRj5xefDFI8i/g9V/lv83q89R58ZeA0lDn2x6nkn9lsb8XT+eZpBjZ5d/4qg7jdTd3VMW3dcyKN3YY4zva4tG2x6yOquvOczi4xUa0yVLH+HfcUxiiY+ZICTOS8N9UH6kJq/yLQ3zJgFdmcvU8uSW8/Dty8eVHjiyw6tPN5vTgyb/1A/V9Q7ahvrKB2tk08i+oGhiwDQ15BgaqIryjv0HFdqBu5eRfPJKPWv6lEH8JrOuBF3zVyNrV8q+vrOoECVVlvsjkXwDfd07nHDKdg4L5yOVfFZ25uZ1yH1iQfz8IcPX5n0P+/fz8fa/+QINYyr8S9Vch/8r134D8+8YRA7W7alI7gIWC/BunIIuXf7OU7f6jssPOnXwYaq6Qiuft9bLwX61bDxelEPk3ZZGyXfMIbu3mpqbNa1XN2vLvxbYw8m91kjxvu4hYv1L9Vwe+oYRZ/pXdQ88n/2IlYjUGk3870hYFSMMjGrTP2DopCb1dnCdMgsq/PLTyLyFayb/vf9xvq0Xk77at1o1dovgbUv492JW1KClpQ1qSWVP+Dc0ElH854ZdMMPrIhJ/6hAYyVSf/Rlf+Fd1fWvlXNHQXPvDAQkw05V+gMHAmkYobRIJsm8PDGo2sxzsNlHD7HUp0YHWA5mQL5N+k3MbVq9Vltf8M5CRhCJ/8qxZ9tYRgHRDVXxUy/Zfb3o7k1F82+Rekr3lUwpp05WecpqD30UN7ew99tFfZLsi/MvbZZ/78ffxR8RIBWHGxJgW3lVTn2/OruQq3lqRIFvo1pptvRhVuKsi/hAXLOkLCbxd3kNjf5STHxGQd8cf+1pJ7UyOXfw3WbodjxGow5FZx5i+qKoRzWEccjm6rIbB+hdjfiOVfdIwBSfJv64/jlH9bKjNKTKaSjMqWcPIvErZLyrFb7zHg9NhpCCn/XtYj4bKgyb9U8m+9jZDKMbu0T5vU2azJMgY51jq3w+F2uOusigUTSP6lguH9Ri7/7onCyb/E+uWDf/3yb7Y87Veb7JjKv4L6m9y5WjB/g8u/vPqL2F+B0hUrSjERwn85/Zdd/t0sp9WAPT++CQytigWKT02Qf0+kkn8PL+7q6kIsNzc5PIj8K1q+9y4j7u8p94pNZCqRf3GDRV5GbqNU/hVakxu15V/wSFl9LagvewQvYpv8y72IWP4FhV2F2sm/myhRJ/+Gln/tlPDvd25pAqlwRjTmDn2bMnF/cUqZlhmI/Z2R7+w5Wxr7K8q/mpwkH9XyL0h3fYXcX1d6HI386xw2/LXybwYlrP30kH/n5ue78EyIIzXs3z3kzEKJufxLiIH8i5P+RYGDVDH5F0Uz+ZdYwQncMo2ttqR54erKyoULm0vitOVfh3vEb6tUYIbn40lE/02YOlUq9Ga5EhJlGkECrfwLug2wf338K597vPKvqwipWGtcmIw9SYD9W19Pio2f2nw/c+2sn9uHcm7PDfHtOwn9i+zy71VNTe1D2c9NW1dfPyWs/PsT7F/B/f1pAsu/szBSJf9WCox5e3vHvEXonKmr1EAHPqFESP7lhuAlbPLvsRryr6D+0si/VY9vqHZ5nUrtV1v+Papi53+r/MuyJ3/99U/44ZXmLxAAfOJZje5P0KYaWPvreLsXI+Ehn8/n8eCya7vP4RPF3zlBkn9FiPx7OleODiL/Xtb5AeJ/Oy8LnvwrDriFbDFfSZsF+RfqL6X8C/eXCu73UsJnJG4d3bZt9FOM3R3+2F8VaGLt95E/u+j9jyvwDeN2GpLSliyVEfZv0mhENbGSf1muI7opGZ/82+JRYPPYJAjyb/8Q1F8G+ddT6PFgZJN/c8xJ+Tkp9vxFSZacSOVfnhSLXu/Kgfc7DRXv+6qTfzXs30QX7mjiccel4agllPxb28pNI5N/EftbW7ZWajbZanAj+DmRyb9rVXh27PCoWzkzhRLWn11NSeTy7+iOMfNY1lh3MPm3ZtXA4YcPrKrRkn8/kfA0xmAvx3MOTA7FuejfR2w1NVs/3VFUtGN0a039tmK+1xlLNeXfqZMPKz344NLDJk8VGhTJv2t59fcQqL+U8q9CA853gXzMRiH5t00a/bvDLV3EuueP82OyWtEf64T8O5RNxiJnNxqsJuUZyPK1ffW2BSfxnD1sLcnIU8Gc/Osduerlj8ITgfxLeBzqL5lGVf49dH/EWrrSXPsfGkb+Tcw0GwxCbo05MzEq8i94dOmjSxPJ/Tofv5+I2UejmfzbXmtrX2uzIUdWQ/4NFf1r6LwhFvKvKAC/zx2S5VDCelm0hpK/Xv4FDyQnP/CtI2TyL+jvRxU6+Zfg2DRvxox5mxwn/3Xy75RsqiJ/qHwa3N9w8u/M07CPx7VB0vUBEgn8XIILzXGGHvxIKPl3mmJkl38poU/z5XW8iy6hGfiOwipKFJ2ad7wN+7eFpJrFx98H9/ftOxRfbNefcgZgkn93vXLbNngNac60NEv+sxyucoNFLv/mBLCnc6ei6fk5WrDKv67egqJWZvm3DdG/TmtGw/DoaHfD/U5nq7OkLaz8q9dHSf69elVt4ImqU9fVrrr6FjU6QMRfovlyoyL594nAAj75V+3+Ari/4eTfgjhQ8NfKv9mBil3+nbjJvyWU6MDd35+w13kUyN+vsayKdxCN+2nALP9ScfMRqkuL1m7f9u3dceXb6zweZ7la/uUyf28WYn9hV4ZM/j2MonAn7c24tp5njN8jD0exjTfHG8nFt8pZ8R0mhOO13XdfYxy3OL5D/n4RBr+xeCagkn8zoyn/ShHkXwON/Av7d7fdrilKc7ksiixdaUdHfRkuKD5ePxvTPbXQlDWqPJs8vraIH+e1MyU68N2lh1DBdahRiL8E1vUwnQa1/Pu6x3iCBKPn9UjkX0rY5V8IvkIlomqR76Nyvyby7ytfd5ZowbLvYz2SttgTMtOaq+KBWv4lGJtNcVlpAfn38IHBc4MyOHC4Qv5NL0jSq+VffVKBcGVWkvw7mR+gsAbmB5uk9q/GdiHKvxqf8bEqLiJFRbDk37uCy7/E7Z0hi5bKSpuxm8CR4lnuI5REIP8iGHKQX2eEQZu2/PvFvGnh0IEvKKHeLkLLv0BT/t1DMQBF0zjl38UfI3PgwSsR+buRi/ylk39xE3m6OX/KhgJ9wZR/hfxLQYyTf0UY5V9C7sKFuepW1rPBl9R89JFGI+vxTgUlrPLvfgE+y+Xk3zzMnqAs/LEnzJigyb986i8GIfkXO09LDuyIHEsc5kUUC4QLyk3P7x2C55uEC8q8+ssu/+otmY8GyLTolZ9xj4KNm0jy76aNynYdENN9UUtQNunATpRwZ6+USOTfZQvDwG0XzzfxT0ccqSvXW93L+dhfnKBGQf7VG+rcI+6ROpgm+Ju9ENzXloEXDQ401xkC3fShYn8j6UE9AzDJvy1CAVWNzc2NVZiRL9DaP5g2FhefPVyuuX+4LThU8m+CZJIglX/pYJV/1X/rXcWFhcXDqr/1/+VfmuRfEb/8S0ds5V+jY8eoN2/1WfudF7YHZAoJ952cOuWuALNXrJgtvpqSijwBLGeVf1PkpOn15vx8M7RQxQK1/MuS/Eu032JAFOCwyb/gFKAtUBoD0b95lRL5V2ztCCL/gksf2WyzbX7k0qNiJP8C1NFM/gVBkn+foCSc/Jug1BMp4d8v6QhFnbDuym0h8Mu/bXnm/N0C7m91mrNYFHvl8i8lOmBVgJQsr7ItiPwLoiL/3klRzme5VsDYTw/5N9NuwdOpFtnn7qa2f/dQ8w+Vf/Vmi91uMeul8i8M3+mkViX/ojlE8i8oySX3y+WamPrVPl58unIPasmUq7+AQf5d4MT2aB12+3zu4W7feOXfxGw/b17z85PvIuX3jc1lZWX1sH4xkqzDMt+7aI5M/v0DsVMhnvX6HdxfVvkXfNT08kfr102Zvw7ubzj5F/ZvDdfbUQP3dwLLv4BO/jUIFKzpQ+xv0ZK+oiSDBizHTKzfOjLh9+FCPwtI9bBS/t313Leh/tLJv9t31OHbntN+Lwr394DY33+t/MuyJw/8h9NWNjyA3N9G+7Sgv/drSmR93nN4+9exzOMZ8Cxz+B4S24Mk/wpQJf9+IEwUsIp1j510CRWcCDgzRvIv+rA/3TaKZ4Td3ya6vooCWPt9lirAU8Qrljt61yjbKf4m9/gny78mSpjlX57z1KjXw5dbDgasyb+bmJJ/wUpLljnNVZBuWXlghPLvdH/Eb05But7istvzV4rOrzr5V01iUVzdzjwOgwWqTnD596effopc/iWxv1KdDbezc7G/Ecq/SImRDng5CDCVt56rA+mUsP6sgZKI5d/yT81JvWvMZqs1S0v+BTUQfs/GvIb8K6RfCKelkkG2aNznwIZvCgdsZZ9u3VpDorbf/tQ6uqpsK6/oKOTfqaSAdbXrhImIKP+urd1VUH+p5d8UociJXP4FbSTyF2AiDf4FrHt+YY15vV6DgST/bsmGf7NlKpJ/DVyj/Aykv52P/SUDYn/Lcys/O0EFq/zb8NtHcH/Do2NBLf+eW1NzmIb8y4Ja/oX9uwHA/Q0j/yYkFqXr4zj06UWJ8sNuRqZJOBjj9PfxjKMv358+TUFE/zawHBvP27a1/bB/Q8i/++YlmwgGyXnsBSr59wKKUcdICiU6RrooYZJ/Y4Y6+Re0t6PSTP6lg13+RW6SJnurk38P5seQteJUKaugaEZCqB3kzFeLy4mGGej64HKW+DmY9xayrLz41ZkxS/6NIRdRogNGSnRA9rjU9eeuGPR829LyreftFeeuly3SMRJI/f0UPZ35X3nzn/3qWZ6v0iyK5N99AqxM4k9FV+6jBZP8y8jNIo3l3mFnrjfDm5zRnbsR842zxIW62AH594/WGjFVaX5qzU+3aKED6xW08/JvuyoqH8jc321+93dqePnXEpn8y4hc+s3WLLFO/v2eEpa9AtMWyYBC/oWL6PHAQQwq/75NiY6RODlWr8fT0OBrJepv8OTfbz+5mKi/QtLvJFkG8Jtsyb+MSGO5hk+bGR35l5FJUliSf8FN312zf2Z1PiwUOay3eVVVGSUDMFbttBOZUyyImfwbI5jWAyMnSLgRxu9+/Ox+RvIyAvk3VshtX5QgErD8/Sb75V/tTBXWfV8lJePYhjb1lYakb5P0Apc+q+AZV5ZeIf+i2fVMAZoD8q/f/OURPVZMSfhvxPLvpcequVQy1TGym5/MRVmSQ+VMXvtF4Wb+Uvm31r/aMAxqJ/9+vWnatCkhB/7M9UxKdAwwJ/9+/xoF37/D/vf76JcVax/fBvO3hzN/qeXfDbiLfAOmcy125THMBIFa/mUgZPLvmYURyL8RHe8YwOrVpI7w976kwRUabcw9OpSwy7+83yvKv59xTWLhoUn+3V+S/KsI+BVRRALrYoj8/1qQeaTg/hboVZ/xb3Ku9f22tKho6W++axULOPmXklhKA08QfB0LaeTfAeHpiI667vKGupGKfpsi9pe991KUfxtG3I66ES+2nOTGZVVVy5Drjw5ndzfs3wa//DtBeJoSLZnWO2w2Dw93m5VEcs6QQAqHOt5Px0gmJZoKnL9/T0nM5N8YESP5N0bEUv59ZftYc2U48xfoGIhM/s0xZ1nsKSl2XKzOiaxP/wiF/ds13AO6uuD+ytAxYuRpy8hobKtSyr9tuaRVlH8p0TFAl/zLw9oTtBvHNTcF5Rr+J/yq/RMU5Q6W5N/xHnkmlE4OCSf/GiuTF0lif+3mjarY35PG0ff9PAW6GHI+FXfy4joljP30kH+rLVncXaiZl3P27z+aEPJvWjWRxvXy5F8QJPl3ulBO177xpvv++7vVrYrjeId7Zxnvnx7BFqOUf4HPyenH5SaT03e9Wv6dEbIicAJR9vx161Cysy/+mfDuz8s2lw3Y6ssGBsrKPMg8dPu4dh0jUvX3dnwIhih9+14r4ar165v61q17bvfw8i/oWkXomjNngsu/s6jk38CvSVrSt8Fc3rtlqFcfpwHr0xrfpkQp/x5SWBygq6enUCb/ThDY5N+//+iRZU9+gMjKMeRBrwwhFd9LCS//ziHFz5yHPvA2bK9r8D4E95dfQkaK5F9wNFdOF+RfOnRArySLr5ToYgS7/AvwfkqaP+O1X4wq0Mba75OtYunS7yD7Klt1MSKW8m8ZJRNl26RGkH83zFuyZMk8NvkXpLgsZrPFtYuyXceI8N9NxwOqCshvXCn3foMm/4paXHVc9848I+VJMyDG6RhglX/XN9WUra2QXq+oJ7G/Ecu/kymJVfJvDP9+1fIvIWmMy2YIJv8WHn54YRD5l5IIzoHLs0Zbvykfra8vw7Cq8/cfW9Pl/3re/A0wf/50Mpk+fz5pVzgxUH/bZervSeoSPPk3RVv+ZeQsOe7tj5PcX0XwL2Dd8wvrq9tghfzr9I71jvWijHmd3QY0dZdL1hkf+/vESTyHd1lL8h7YSwNG+ZcddvlXIPryr0ho+RfgLnaxiyMi+VcJon8R/Dst2vIv6O/fuQLyuzrD6QYJH+R1duZ15iYnC9HGeeIyHSBqLyHcVMfILpToGPmJkokj/yqTf4Eq+TfW8i9hbzJKXsrndIC3e0Obv6rkX4LebA8l/xY6cUUpLt2emJigdYiRaE+PwzUlZ2Ew+Xfaf1L+nSlKvgj/XbFi8uDg5BUrpLG/M8ct/8L9NRcUQPzN9+ZD/vWDuTDyr/3vk39BxjfD3d84M5zOjG++aW0tz0DTXyP//lSTOn+Sn6mlNa1/3KKJVldKHy//9ml1pahzf4n7G/PkX0ak3u/flfy7ePE116CEHlGYO98oGb/8C9cC8i+qoJfqvqUk4stOemsDd8NYCPn327sTof6ikGESRnFKmv8S+ddQ/k3hzJkTSP6lS/4lLPCma6/fbEp0YN68efsrhoSEefvvL2vGD/0T5d9sSiKQf0GV7XWIvxCAX7chdnuCy7/BiLn8u5CScWxDp0/Ck5PB/PmoVFMsO116QSNrUf7u9kVJSvk3aZF99/xFWfLkX3LjNmoyi3kxAlgM/2WXfynRMRKwezPT/LnG+vRF1f42YeFfKP/iRnp/dDJW3dsv/3b99RUVSvn3FeL+hgJLWR5jFS3516CR/Lv/O1Tsr2MEJ+wjO7ZaN3Zx4i+D/CuyYcp/V/6NXvIvIyY1JSUajZHLv2CCy78EhfwrIpN/Twqd/OuvdUDUe/VxKvQBNfivk3/R7VCUOe/II+dlFpkVb0kjAWbBI9f2L1nSf+0jCzQSYMSMX3EizotTHbiRknHIvwuWUX4fS56OONKwvKJ/rTT2N2LhxORwNLgdDvQ6Yz452UQ2aqvD4W6oc5sm1kW2xeAaWQHqNu1nka1EWTlXnarFiGj4hkbHyKOUhMi//F/+/dfIv3UdvPk7ceRfe9KiHE4CXpRkj6L8C94gMlFX8RtHREf+rWrOyMirFOVfZetfL/+KWUqk5gqtnEoQj+SOvBgdXxdrFslzRXi79/nQBT+iPBuKgfw7NXVF+Evwbc3S2N9Ml7VLbf4SdIxQZf7FECL20hC5/GsPIf/+yd7ZxzZRxnH8TFZf0FBFEe+cG6hRIy4jaqaZ6LRRp86wyZKVqPENnS5T0albg5WpEd3cZkycoaOOOV8Ki4uBZZjIgkRwAVSUoQgB4Q98wRcyERMFVPR7d7s+17vr9Xnau/Zuu8/zPL/n6XP9o2u2ru19+m1IejXK1zxb7X77N5n8C/jQpEkhXvWIP5bs60cxSv7FAXkYf/BmB9DvauXfVm34r6/UOvkX3Ls6Eo5Gw5F92Eo3+ffxhp07dw60DwQbbn3zhcOHjx594eib/YePfvjh4cMt/Z2dLxzp/PTo4c5M5N8zKmpNSF/+Bf/e+fLpJgJRuRGOl39BCYP8y9//w2g4ugHBvxnLv6zvPd2WhHNeev4lT/7NDNZH8mkqTguFlkyzTP6VKZf70+HVK48cWbk6XLcVm+Qge/IvJRyIUsLZyIMS72iKfov87ggVy6YS9dcg+JdZ/p3dp2G2jHaXM8TZ8u9FlDjlb5NZ/v2ho2P0/Q5W+RdMq6ycpt/lGFFUX3BZYeWJhWddpnJ+UVIm/0LNqX840jt29iDycP1Mv53y7yeDapOtG7G/KxD7m13591ZKWK/bSEnm8i/P5zX/YCz/krNEazEZyr++1B1kFtkQef7Qj4OD+ObXwd/Kr7rqCkHQyL+mFCiFAxr1lzX513r5FwwfEMXfUbi/P1sg//LRDVFBCI9EBelshiAI0IHDgoBt1X0GTX4wHvv7/N5oxdBPkz35l17+LaqS5d+qIqvl3/xXdu16pdBy+ZewapVO/tWz9cbAmECwVSP/grkQfOeazQ6Sf/HRhdQNj2vOkX8JRP7NYvIvJWNqDtTefBSzrpN/+bKumGnyr5AnIBnIn+QbjxD+60eaEK6UMvm3cCLJv4ls2zMF7CGxv5kk/8L9bQ4dFF3fULQqtDSOw+Xfi5vaDq2P7DuEtj4cabo4W/Lvir74mdWCgb4Vt89PgpEa2T5Jot1IjZTc37Xx3F+U9oJ8h8q/DaQaYHfyr48SB8q/ACZiEjhwPSUcI3nG8Mnk3/sWLvzujksANF8fqnqJGUMl/84wGxnJv9FIS3Gxo+RfyuRf8FLYwIyRhDJKWL4mzI3y70xKMpN/17zaes/U1tap97S+usaZ8i8tLpV/FebN08/6ExplT0w7edqSGj5R/uVrlmD7iTIi/4q6L9FXFRcYVewI/zWXf086KcvyL9F8ixY3V5XV1pY1h4pwSRv9a7/8S6J/pXtKCv5ddZdEd4L8++uZhXTJvwFKbEv+tZFdvf179xpE/p5Khrn8Cyaw/Juz5N8mSjz5Vy3/kujfpMm/qJI8CTHiiRocSvq8ska6CmcjeRrwDYnbt99fhf8XKeXflzF275YXevnXlEKp2i//vkn9/1iV297bKsX+Bn3AIvlXiOzvRxsReF7xDYQRbKzsj/LOem7ko8TweTXOsqHr4BjRi79+/QpwNuHJvxNB/mXFfvk31KWsukJWyr8Eq+TfzUNNFXU92uTfzevqKpp6cpv8S2B5r571mdwCye19DcWkotmf/Bvse5viFHxFTcw3SSFWg9hfIv3KuFX+lfj6hseuljrWZId0m+XfWBUvPRzFqt1v/5ok//JdsVgXr0n+9Zsk/4pN7KzvUx1vxq4XSy2Uf8G936xc+Q02mOXforj8Oz0I8XcgGGy442hnZ+exY8c6RW4vR8E6Trry75+bQqZkIv+Cfy+zQv5lwGb5twSDMvmX/MJur6nasB1/x1bIv0iJ/5ui30vkX2M8+TcX8i/BQvlXHf07d275VlA+d+4V5Ahd8m8penry7z5KOBsxMn+BdovIv4G6zQkxvxpK0pB/V1DC6bFT/p2dqfzLarvUUsI5BEn+7RgdRVQnhfxLB8dIYszvZRiK8psy+ZfYv0VlbfuPlxnJi820U/5NiP3t3Ti4fD1ifzOUf5muayPvUGJB8i+fV3U/puTy7ycLFnySRP4FPr9pRc9U/hUih4TvRfn3N2HLVVdtEfIM5d8CaehRdjnQfXz3zWeT2F9K+ZdQabn8Cz6A+3vggwMfYGlB8q8Q2RAOj0QCURAOhzECkZFweENEUN1nO+e9qsT+nvdlpK0Osb+e/Est/4JYLS9GM8V8fkvlX5D/+ef59sm/oDul/AvG5N+2G+/WyL+pcVTy73pKnCP/5j7591SMVAHArLl8eXGqFhelOO0i/kOqJ+qvkf5bX4Urmcu/hfGFi+XfHoqukn+L4wWW6JQpaxeQ0F/0tOXfp/5RjN8aofmga+Tf++4bqgiH10fwxQGRiqHEI5yNkC9UDc5bfmQ+sEz+hfur4vWCfEfKvwnOb4PRSJn8O5Hl3+RIt+EmmsZ+G/IM89lMkn//OO5MKfNX1H2V0F9l5cM6G8m/QnjflcUOk3/pk38vCuNH8OTfXMu/Uy9G0PaiRVPFhSf/5lD+LSjQz/oTGrVI/n23S5/82/Uukn9rVfLvFNLFBsRZcYIR/msi/x586qmD2ZZ/SbxvUezZxc/Gioj3m/XkX9ALSUy+w/oWrert1su/v2+S/F65k5XSxjrL445tyb82sr8F5q8ZnvzryOTf9yjx5F+V/Avr1zT5F0NJ/i2tRqwveQqpA0cQDlxdytkE6+/OnSawyL8gK/LvQ0cfocIg0Z18ONUa+VdYvb+/dSQs5yHINTzSCvtXEJz13IhJ/qXEtttgI+T0BwpBve3Jv578a6n8+4Rq6WT5d3hdRUVj3RCRf1W7OUv+lfGhi43Iv59RNHb5V3J73xKHUR07uMB++Xdgxts0+VtdJPa3qCv81dmahzO3y78pYTpXwC7/NtfyUmBLNZi0ydX2r1ny73O1tc8ZJP+io2jlX//YUcABv4+q+TlAnoj1ouj4vNRC+ZeQQfLvdJzCm44+XZR/j0GFPSZOAAVIF9KXf4/76OQ3TPHkX835B1b5F5TV1ED9NUYV2GLeFfmXBk/+nTjyb3li9i8gG/KERp/8e0Ea8u9DlHA28iAVRP6NNl1zPVAH/6pbWsm/z1DCGeD05F8W2yVECecQrgXfdPz21+LFo7mTf2UuIYU++ZfYv/4qQbF/V+cttlP+Vcf+7l5EYn8zlX+DlHA2ciElmcu/BGP5F6xdi5I0+ReY1/TlXwL//fLl3wtCY3l5m+b2Er9XTYF6m8i/XxD1lzL5t1IqSrdD/n1zVBR/fx62Rv6F/TsyEgmjjKwGmHABRVDfZ4OLlNjfa7+KVqz7abIn/7LIv6DrYZ5/uAsLa+VfkJ9faKP8C2jk38aAIAiBtqYz9PIv4n0xHp2LgYXRcJD8+x8lzpF/45xgmvzLgC3Jvw7BWP4tJArwhEn+LSb+r8w2XexvcXry7+wHliqEyrqWukj+LekZqmtsk97LL8me/Bt3mdqXr/9vvpXy74JvNe4vlfz7rkQW5V+S+jvOkn+dwCmU2ClKLATf3aHk/cq2L2axA588oXA2Iv6mRg+9VVzsNPk3nvz7tyf/ukL+nXUPxpo10iIRzoW4Tf5l/9n45iU4TaeVf3GblzRjm8i/sugrdwwi/k6Ry4ptJvJve3u25V/i+eo5n0xZkn/B7t2LXu3bs2fP4MZVvbjYLbu/RP79oBCMab6ALMgldA5UUOLG5F9a3Cj/0uLG5N/xLP/Swiz/qqJ/kyb/As4h2CL/MsAk/9pIYp77vKDfZ538C/hAa38kkJdAILKyNcA77INRTpB/nYBGjyNDm5XpQjz5lzMg9/KvGufKvz3DQ4G2urq6ps0q+Re766TddcO5kn99aABFnjgA99fG5F+lERVYXTEWcDaCm+Jvp/zyXXXsb6TFMNnpUjfKv7TYm/xbHXuuqqxKdH/db/8mlX8BL/WE5F80eL765F/5kF/Wf1mfVxw/xv6Rkf2G4b++0qzJv0Wk6i8CDkxvCA4MBAd2NsjJv0j7xRgTgOUldtKVf/98BXqvJ/+yyb8lrPIvT6oeEtiSAk/+9eRfDRww1H7lPdVuOUXy7wXomFwq/7KA5+9tQxfL1i8KBpqWEk/+TUf+deNr97Hk379GRztymfyLBkhRtlBVyb8M2Cn/qj/OTmJ/M5N/mYITbOQZSqyRf3lz+Xc5VibJvz6TmmnyL7l9tbUoeNQU9PJvARF+UaShqYBjxDjut9J6+Xf4QL80WyT/Ah5Bvyo2RHnNfYbYX5mWSKBx86zJnvzLKv/6m3m+2W+D/AscIP/euKWxcUvT1rvvdnny7xmUOEb+Jem+Jsm/tsq/+sBfZc818q+KcSH/9phWDug0X2B0iV3+Pen1pSreXeps+Xehho8X9gBMGjgbGVN/B/pW3D4fUMm/Mwzl3xnxIxxQ3N9f0DG9fks+hfxLyKb826BUdAygmbOT/OtPNrtb/i2h6PbKv4j9vfUSoOT8ipPk/KKgyQdsln+FQKSluNjB8q+X/OsS+VfkHkn89eRfF8i/ebXNZUbyb1lzrepng907A4O0+EUwQyxTPtn2WjL59wKQk+RfcD6aNJMOpJpV+RfZv6s2bly0cRXcX4luDCL/DudL5i9N8u+vlHjy74STf73kX1fJv7B+TZN/xcmTfx0r/3Yj9re9wLK0WfJ+cxihjwnwQjjMO+1bEZQXf1LHmMjyb5LcX3LIk389+Xfiyb/LEPHbtK6pYojIv1gsa2rDbl3Fslwn/wKS/AtsSf6V7V60sUkygBPUX3Fhs/xbMO9tSvl3kkIIsb/6hzLXJv/SwnSugF3+rY7FQrH66upxYP+yyb/AD73XIPkXSAKwvzR9+bc3Gu3FpGfXi6WOSv5tGNi5c6C9PSjKvyT0F6tOTFgeK+9MU/59ZtMbb3jybzrJvyUs8i/geR7VNPnXk389+Tcd+ZcE/CZ2FLLNkPxbmp78+1rq5iD5V6hYNlUxfAFZkkte8u8Ek393zOno6JjjvORfVKIBO1D+FWN/W667bjzJvwFK7E7+JbAn/5KFne/a5lNQkJ78S1TfSqmJ3Q3yLzLRBF5QXtQIYUF7n0mxvxedd+6+trZ110ye7Mm/jPIvqC8rq/eNW/kXnKHd4Bhwo/zrBE5R4aDk31PVa9fIv4Wul397xA5MKweI5otBKCYL9HTk36cQ+6vG4fLvixpuVSYNnI3I0bXzlh+ZDyjk3xmUyb+Jub9wf50r/xI03m/2kn/9KfxfF8u/VHA2svC7J+WoX1SfOKsygJV9cXA2IkT3XVmcE/mXHafIv06QjRwq/86a5cm/bpF/83gMnfyrOXkn6b0Y8owhO7/ECMZ6z9rXnCT/no+OZgR2UbIm/xL9F/R2G/3N/zqHBP/KXSlo5EAhB66mhBvnePKvQfJvjuTfBynx5F+1/Euif42Tf8/0kn8dSPzhfONg0tjfjIQTQZ8rxqM5Uv5NwI8+MeVfY7zkX0/+ncjyr6j/NkkZv0T+JbtDwzmTfzHkCZXIv5/ZkvybGP0rm8BkxhCLzcm/wT64v0zyb31zmMT+koppYsi/dOcK2OVfLZvWuNb+NZF/CUT+vUTpWvlX3sws+be7tRXyryGfl9op/zLy+PTgQLAh2CAm/8rir5T/K0q/GNLFNOXf4z56I5fyr0NglH9LMBiTfwnm8m+Daccg8u/l0njob8PJvfIvLZ78mzL5t1y1j0ol/8L7nRjJv4G6YaL7qvN/Sb9+fMm/szOTfxlw42t3Wf7dMWdO/Y5cyr8k51cumOLdqcm/3WLs7+Hrxpf8m0dJruVfM/2XhP/aL/8WkEoKWaad/FuJjqam0lL5FwxjWCf/Enig3yXOXMveQOOyWZM9+Ted5N+ZodDM8Zv8K+LJvwyMb/lXxkv+/b+dO3ZpIwzjOP4ucSmVUujQUtoUOnVxt2Bb6JzV0DVTR5d2aZcO0qF06lDE4GbM6p8gig6C4CI4uLj4D+gk6KvH5VETL88F37vnvft+colw5+LgkLsvv2LjX6WQj3PaS0tRxb8NJRfQ1ezvn97GRUcV/3rK+PdW+3s+/zKi+FcUFf9mi3v5t/T499jP/mq4gP7/mpkh/iX+Jf6tX/ybkvhXSPyrsblvKP5VKCr+Fd17/ud3XisQ/xL/Go1/vykR/96Jf+9b/k0Q/xo02Ejpt/3sb4D4d9R95ucxxL/1Xf4l/iX+Jf69abCdurKV1JIS/8rZEpd/hSz/Bol/lVxA62+eqsjftvrh6OOTYbVb/s0wWfxbofo3V/wrhuNfkT/+VThszBqKf5sLC03/2fTLv/+Smd80//XH4ITL6WxxeZn4N//y76TxL8u/KduBVozxr0z/yvKvf8t55fJvXeLf73Ofs1Uu/n1M/Dsu/m0deCXGvwr24t/udr+38f4T8W8Z8a+CheXfK1Z6xDmd/PGvjsS/v3+8+Ppzetp8/Ftl6vgXUMgf/9rL2xAn9VfRimu8Wu+vfemM5QJ6lDB+4wsILjv+/XvzmgMip49/9azEvwDwEHxApWAnXNQKFv8CQIWUn28AsCmm+Fcrd/y702q9TQ//vn7FW/8aMKXRXZx1AGD8iWsa+w5LLySfDgAQmD7+5T5HwfTxL6qP+BcZiH8RDQtfRS2Yb/f2Oh3iX8AGC8u/QAbiXwAoyHXaO+7lf8dVHPEvgDoi/gVA/DuK856djvLuhPp3UlM6uw4AjD9xldI3PQY/5QrxLwBMgPi3Ooh/nbsEijgz4sWfyq0AAAAASUVORK5CYII=)
            }
        }
        
        .vti__flag.np {
            background-color: transparent
        }
    </style>
    <style type="text/css">
        .vue-tel-input {
            border-radius: 3px;
            display: flex;
            border: 1px solid #bbb;
            text-align: left
        }
        
        .vue-tel-input.disabled .dropdown,
        .vue-tel-input.disabled .selection,
        .vue-tel-input.disabled input {
            cursor: no-drop
        }
        
        .vue-tel-input:focus-within {
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075), 0 0 8px rgba(102, 175, 233, .6);
            border-color: #66afe9
        }
        
        .vti__dropdown {
            display: flex;
            flex-direction: column;
            align-content: center;
            justify-content: center;
            position: relative;
            padding: 7px;
            cursor: pointer
        }
        
        .vti__dropdown.show {
            max-height: 300px;
            overflow: scroll
        }
        
        .vti__dropdown.open {
            background-color: #f3f3f3
        }
        
        .vti__dropdown:hover {
            background-color: #f3f3f3
        }
        
        .vti__selection {
            font-size: .8em;
            display: flex;
            align-items: center
        }
        
        .vti__selection .vti__country-code {
            color: #666
        }
        
        .vti__flag {
            margin-right: 5px;
            margin-left: 5px
        }
        
        .vti__dropdown-list {
            z-index: 1;
            padding: 0;
            margin: 0;
            text-align: left;
            list-style: none;
            max-height: 200px;
            overflow-y: scroll;
            position: absolute;
            left: -1px;
            background-color: #fff;
            border: 1px solid #ccc;
            width: 390px
        }
        
        .vti__dropdown-list.below {
            top: 33px
        }
        
        .vti__dropdown-list.above {
            top: auto;
            bottom: 100%
        }
        
        .vti__dropdown-arrow {
            transform: scaleY(.5);
            display: inline-block;
            color: #666
        }
        
        .vti__dropdown-item {
            cursor: pointer;
            padding: 4px 15px
        }
        
        .vti__dropdown-item.highlighted {
            background-color: #f3f3f3
        }
        
        .vti__dropdown-item.last-preferred {
            border-bottom: 1px solid #cacaca
        }
        
        .vti__dropdown-item .vti__flag {
            display: inline-block;
            margin-right: 5px
        }
        
        .vti__input {
            border: none;
            border-radius: 0 2px 2px 0;
            width: 100%;
            outline: 0;
            padding-left: 7px
        }
    </style>
    <style type="text/css">
        .popup {
            display: none;
            justify-content: center;
            position: fixed;
            flex-direction: column;
            left: 50%;
            top: 50%;
            height: 50%;
            transform: translate(-50%, -50%);
            width: 50%;
            font-size: 1.7rem;
            padding: 20px;
            background-color: #f4f4f4;
            border: 1px solid #ddd;
            border-radius: 20px;
            z-index: 9999;
            text-align: center;
        }
        
        #popup-message {
            color: #000;
        }
        
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, .7);
            z-index: 9999;
        }
        
        .popup-btn {
            height: 50px;
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px 10px;
            min-width: 200px;
            max-width: 240px;
        }
        
        .popup-buttons {
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 30px;
        }
        
        .btnBg {
            background-color: rgb(29, 84, 29);
        }
        
        @media (max-width: 768px) {
            .popup {
                font-size: 1.5rem;
                width: 70%
            }
        }
        
        .vue-tel-input {
            position: relative;
            transition: margin-top .5s ease-in-out;
        }
        
        .vue-tel-input.active {
            margin-top: 50px !important;
            transition: margin-top .5s ease-in-out;
        }
        
        .vue-tel-input .currentNumber {
            position: absolute;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            top: -50px;
            left: 0;
            width: 100%;
            height: 0;
            font-size: .9rem;
            color: #212121;
            text-align: center;
            opacity: 0;
            transition: height .5s ease-in-out, opacity .2s ease-in-out;
        }
        
        .vue-tel-input .currentNumber.active {
            opacity: 1;
            height: auto;
            font-size: 16px;
            margin-top: 0px;
            color: inherit;
            transition: height .5s ease-in-out, opacity .2s ease-in-out;
        }
    </style>
    <style>
        .current-comment {
            transition: opacity 1s ease-in-out, transform 1s ease-in-out;
            opacity: 1;
            transform: translateY(0);
        }
        
        .inactive-comment {
            opacity: 0;
            transform: translateY(20px);
        }
        
        .div-loader {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .loader {
            width: 15px;
            aspect-ratio: 1;
            border-radius: 50%;
            animation: l5 1s infinite linear alternate;
        }
        
        .div-loader.inactive-loader {
            display: none;
        }
        
        @keyframes fadeIn {
            to {
                opacity: 1
            }
        }
        
        @keyframes l5 {
            0% {
                box-shadow: 20px 0 #000, -20px 0 #0002;
                background: #000
            }
            33% {
                box-shadow: 20px 0 #000, -20px 0 #0002;
                background: #0002
            }
            66% {
                box-shadow: 20px 0 #0002, -20px 0 #000;
                background: #0002
            }
            100% {
                box-shadow: 20px 0 #0002, -20px 0 #000;
                background: #000
            }
        }
    </style>
    <style type="text/css">
        .progress-bar-form {
            position: relative;
            width: 100%;
            height: 20px;
            margin-top: 20px;
            border-radius: 50px;
            background-color: #f3f3f3;
            overflow: hidden;
        }
        
        .progress-form {
            height: 100%;
            background-color: #4caf50;
        }
        
        .progress-value-form {
            position: absolute;
            top: 2px;
            left: 0;
            right: 0;
            bottom: 0;
            color: #000000;
            font-size: 14px;
            text-align: center;
        }
        
        .progress-text-form {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 14px;
            margin-right: 10px;
        }
        
        .progress-text-form span {
            text-align: center;
            margin-right: 10px;
            margin-left: 10px;
        }
        
        .progress-text-form span.deposit-bonus {
            font-weight: bold;
            text-decoration: underline;
            white-space: nowrap;
        }
        
        .progress-text-form svg.deposit-bonus {
            margin-right: 20px;
        }
    </style>
</head>

<body class="feed">


    <style data-styles="">
        skip-back-btn,
        skip-forward-btn,
        button-menu,
        seek-bar,
        volume-controls,
        currenttime-metadata,
        duration-metadata,
        play-pause-stop-btn,
        buffer-bar,
        muted-btn,
        seek-input,
        volume-slider,
        control-rack,
        end-card-overlay,
        indicator-overlay,
        info-overlay,
        loading-overlay,
        ready-overlay,
        share-btn,
        share-overlay,
        upcominglive-overlay,
        audio-track-btn,
        captions-btn,
        error-overlay,
        fullscreen-btn,
        gotolive-btn,
        livelabel-metadata,
        recommendations-card,
        video-ui,
        audio-ui,
        ad-ui-overlay,
        phoenix-player {
            visibility: hidden
        }
        
        .hydrated {
            visibility: inherit
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .phoenix-player {
            position: relative;
            display: block;
            font-family: sans-serif;
            width: 100%;
            height: 100%
        }
        
        .phoenix-player.phoenix-video {
            background-color: rgb(40, 40, 40)
        }
        
        .phoenix-player.phoenix-audio .phoenix-core-container {
            display: none
        }
        
        .phoenix-player.phoenix-audio.advertising .phoenix-core-container,
        .phoenix-player.phoenix-audio.advertising .phoenix-ad-ui {
            position: fixed !important;
            top: auto !important;
            right: 20px !important;
            bottom: 20px !important;
            left: auto !important;
            width: 640px !important;
            height: 360px !important;
            overflow: hidden
        }
        
        .phoenix-player.phoenix-audio.advertising .phoenix-core-container {
            display: block;
            box-sizing: border-box;
            border: 1px solid black
        }
        
        .phoenix-player.phoenix-audio.advertising .phoenix-ad-ui {
            pointer-events: none
        }
        
        .a11y {
            position: absolute !important;
            clip: rect(1px 1px 1px 1px);
            clip: rect(1px, 1px, 1px, 1px);
            padding: 0 !important;
            border: 0 !important;
            height: 1px !important;
            width: 1px !important;
            overflow: hidden
        }
    </style>
    <style>
        .phoenix-player .video-ui {
            display: block;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0
        }
    </style>
    <style>
        .phoenix-player .audio-ui {
            width: 100%;
            height: 100%;
            background-color: #FFFFFF
        }
        
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata {
            display: flex;
            flex-wrap: wrap
        }
        
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls {
            flex: 0 0 auto;
            margin: 20px
        }
        
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .skipback-button,
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .skipforward-button,
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .play-button,
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .stop-button,
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .pause-button {
            cursor: pointer;
            border: none;
            vertical-align: middle;
            padding: 0;
            background: transparent
        }
        
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .skipback-button:focus,
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .skipforward-button:focus,
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .play-button:focus,
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .stop-button:focus,
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .pause-button:focus {
            outline-style: dotted;
            outline-width: 1px;
            outline-color: #000000
        }
        
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls.advertising .skipforward-button,
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls.advertising .skipback-button {
            pointer-events: none
        }
        
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls.advertising .skipforward-button>svg,
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls.advertising .skipback-button>svg {
            opacity: 0.5
        }
        
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .skipback-button {
            margin-right: 25px
        }
        
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .skipforward-button {
            margin-left: 25px
        }
        
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .pause-button>svg,
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .stop-button>svg,
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .play-button>svg {
            width: 60px
        }
        
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .pause-button:hover polygon,
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .stop-button:hover polygon,
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .play-button:hover polygon {
            fill: #e60505
        }
        
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .stop-button.media-loading {
            pointer-events: none
        }
        
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .stop-button.media-loading>svg {
            opacity: 0.5
        }
        
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .thumbnail-metadata {
            display: flex;
            flex-basis: 0;
            flex-grow: 999;
            align-items: center
        }
        
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .thumbnail-metadata .audio-ui-thumbnail-wrapper {
            box-shadow: 0px 0px 5px 1px #cbcbcb;
            height: 84.375px;
            flex: 0 0 auto;
            margin-left: 20px
        }
        
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .thumbnail-metadata .audio-ui-thumbnail-wrapper img {
            width: auto;
            height: 84.375px;
            object-fit: contain;
            object-position: center
        }
        
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .thumbnail-metadata .audio-ui-metadata #media-metadata-audio {
            box-sizing: border-box;
            padding: 0 20px
        }
        
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .thumbnail-metadata .audio-ui-metadata #media-metadata-audio .phoenix-showname,
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .thumbnail-metadata .audio-ui-metadata #media-metadata-audio .phoenix-title {
            padding: 0;
            margin: 0
        }
        
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .thumbnail-metadata .audio-ui-metadata #media-metadata-audio .phoenix-showname {
            font-size: 0.8rem;
            font-weight: bold
        }
        
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .thumbnail-metadata .audio-ui-metadata #media-metadata-audio .phoenix-title {
            font-size: 0.85rem;
            line-height: 1.188rem;
            max-height: calc(1.188rem * 2);
            overflow: hidden
        }
        
        .phoenix-player .audio-ui .audio-ui-inner .primary-controls-and-metadata .thumbnail-metadata .audio-ui-metadata #media-metadata-audio.advertising .phoenix-showname {
            text-transform: uppercase
        }
        
        .phoenix-player .audio-ui .audio-ui-inner .secondary-controls {
            display: flex;
            margin: 0 20px;
            position: relative;
            width: calc(100% - 40px)
        }
        
        .phoenix-player .audio-ui .audio-ui-inner .secondary-controls .audio-seekbar-wrapper {
            flex: 1 0 100px;
            padding: 5px 0
        }
        
        .phoenix-player .audio-ui .audio-ui-inner .secondary-controls .time-metadata {
            padding: 8px 20px;
            line-height: normal
        }
        
        .phoenix-player .audio-ui .audio-ui-inner .secondary-controls .time-metadata span {
            color: #000;
            text-shadow: none;
            opacity: 1;
            font-size: 0.8rem
        }
        
        .phoenix-player .audio-ui .audio-ui-inner .secondary-controls .volume-control .volume-controls-container {
            display: flex
        }
        
        .phoenix-player .audio-ui .audio-ui-inner .secondary-controls .volume-control .muted-btn {
            cursor: pointer;
            background: transparent;
            border: none;
            width: 24px;
            height: 24px;
            box-sizing: content-box;
            position: relative;
            padding: 5px 0
        }
        
        .phoenix-player .audio-ui .audio-ui-inner .secondary-controls .volume-control .volume-slider-container.audio {
            width: 100%;
            line-height: 26px
        }
    </style>


    <style type="text/css">
        /* Skeleton Renderer styles */
        
        #vf-skeleton-container {
            margin: 20px 0;
            overflow: auto;
            width: 100%;
        }
        
        .vf-skeleton-generic-block {
            width: 100%;
            background: #f6f7f8;
            background-image: linear-gradient(to right, #EDEDED 0%, #F3F3F3 20%, #EDEDED 40%, #EDEDED 100%);
            animation: shimmer 0.5s linear forwards infinite;
            background-size: 1440px 104px;
            border-radius: 4px;
        }
        
        @-webkit-keyframes shimmer {
            0% {
                background-position: -468px 0;
            }
            100% {
                background-position: 468px 0;
            }
        }
        
        .vf-skeleton-conversations-container .vf-skeleton-generic-block:not(:first-child) {
            margin-top: 8px;
        }
        
        .vf-skeleton-comments-container {
            height: 112px;
            margin-top: 28px;
        }
        
        .vf-skeleton-comments-img-wrapper {
            width: 46px;
            float: left;
        }
        
        .vf-skeleton-comments-img-wrapper .vf-skeleton-generic-block {
            border-radius: 100%;
        }
        
        .vf-skeleton-comments-line-wrapper {
            float: left;
            width: 80%;
            margin-left: 14px;
        }
        
        .vf-skeleton-comments-line-wrapper .vf-skeleton-generic-block:nth-child(1) {
            width: 45%
        }
        
        .vf-skeleton-comments-line-wrapper .vf-skeleton-generic-block:nth-child(4) {
            width: 55%
        }
        
        @media (min-width: 757px) {
            .vf-skeleton-comments-line-wrapper {
                width: 90%;
            }
            .vf-skeleton-comments-line-wrapper .vf-skeleton-generic-block:nth-child(1) {
                width: 20%
            }
            .vf-skeleton-comments-line-wrapper .vf-skeleton-generic-block:nth-child(4) {
                width: 80%
            }
        }
        
        .bazuka-btn:focus {
            outline: none;
        }
    </style>

    <style>
        body,
        p {
            font-size: 16px;
            color: rgb(0, 0, 0);
            font-family: "Open Sans", sans-serif !important;
            line-height: 1.65 !important;
        }
        
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: Stag, sans-serif !important;
            line-height: 1.4 !important;
        }
        
        .my-grey {
            color: rgb(117, 117, 117) !important;
        }
        
        .my-red {
            color: rgb(211, 46, 33) !important;
        }
        
        .my-blue {
            font-weight: bold;
            color: rgb(4, 80, 200) !important;
        }
    </style>

    <style>
        .load {
            position: relative;
            overflow: hidden !important;
        }
        
        .load::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
            background: #fff;
            z-index: 1000000000000;
        }
    </style>



    <div id="app-main">
        <div class="appContainer detail newsTheme storyType canadaSection viewportLarge loaded">
            <header class="globalHeader viewportLarge newsHeader">
                <div class="viafoura">
                    <vf-tray>
                        <div id="vf-skeleton-container" style="height: 40px" data-testid="skeleton-container">
                            <div class="vf-skeleton-generic-block" data-testid="generic-block" style="height: 100%">
                            </div>
                        </div>
                    </vf-tray>
                </div>
                <a href="" class="a11y">Content</a>
                <div class="accessibilityLinks globalSkipLink"><a class="accessibilitySkipLink" href="">Skip
                to Main Content</a><a class="accessibilityHelpLink" href="">Accessibility
                Help</a></div>
                <div class="menuNavWrapper primaryNav" role="dialog" aria-modal="false" aria-label="CBC main navigation" data-cy="primaryNavbar">
                    <button class="toggleMenu" tabindex="-1" aria-label="close menu" aria-hidden="true"></button>
                    <a class="logo" aria-label="CBC Home Page" href=""><span class="icon">
                    <svg class="logoIcon headerLogo globalHeaderLogo" width="71px" height="18px" viewBox="0 0 71 18">
                                <path d="M12.2646923,8.95707692 C12.2646923,10.719 10.8364615,12.1472308 9.07476923,12.1472308 C7.31307692,12.1472308 5.88484615,10.719 5.88484615,8.95707692 C5.88484615,7.19538462 7.31307692,5.76738462 9.07476923,5.76738462 C10.8364615,5.76738462 12.2646923,7.19538462 12.2646923,8.95707692" id="Fill-1" fill="#D8232A"></path>
                                <path d="M5.39307692,12.147 C3.63,12.147 2.20130769,10.719 2.20130769,8.95753846 C2.20130769,7.19561538 3.63,5.766 5.39284615,5.766 L5.39307692,12.147" id="Fill-2" fill="#D8232A"></path>
                                <path d="M12.7596923,15.6664615 L12.7603846,12.6394615 L15.7887692,12.6408462 C15.7887692,14.3141538 14.4323077,15.6664615 12.7596923,15.6664615" id="Fill-3" fill="#D8232A"></path>
                                <path d="M5.39284615,2.24469231 L5.39284615,5.27538462 L2.36053846,5.27584615 C2.36053846,3.60207692 3.71861538,2.24469231 5.39284615,2.24469231" id="Fill-4" fill="#D8232A"></path>
                                <path d="M5.39307692,15.6683077 L5.39307692,12.6394615 L2.36123077,12.6408462 C2.36123077,14.3139231 3.71792308,15.6683077 5.39307692,15.6683077" id="Fill-5" fill="#D8232A"></path>
                                <path d="M16.4455385,11.6986154 L16.4439231,6.21623077 C17.3778462,6.77238462 18.0034615,7.79169231 18.0034615,8.95753846 C18.0034615,10.1229231 17.3778462,11.1413077 16.4455385,11.6986154" id="Fill-6" fill="#D8232A"></path>
                                <path d="M6.33484615,1.58861538 L11.8174615,1.58953846 C11.2610769,0.655615385 10.2429231,0.0311538462 9.07684615,0.0311538462 C7.911,0.0311538462 6.89123077,0.655615385 6.33484615,1.58861538" id="Fill-7" fill="#D8232A"></path>
                                <path d="M11.7770769,16.3255385 L6.29353846,16.3248462 C6.85015385,17.2583077 7.869,17.8841538 9.03530769,17.8841538 C10.2011538,17.8841538 11.22,17.259 11.7770769,16.3255385" id="Fill-8" fill="#D8232A"></path>
                                <path d="M12.2658462,12.6408462 C12.2658462,14.4032308 10.8380769,15.831 9.07661538,15.831 C7.31423077,15.831 5.88484615,14.4032308 5.88484615,12.6408462 L12.2658462,12.6408462" id="Fill-9" fill="#D8232A"></path>
                                <path d="M12.7603846,12.147 C14.5220769,12.147 15.9514615,10.719 15.9514615,8.95753846 C15.9514615,7.19561538 14.5220769,5.766 12.7603846,5.766 L12.7603846,12.147" id="Fill-10" fill="#D8232A"></path>
                                <path d="M12.2658462,5.27907692 C12.2658462,3.51738462 10.8380769,2.08938462 9.07661538,2.08938462 C7.31423077,2.08938462 5.88484615,3.51738462 5.88484615,5.27907692 L12.2658462,5.27907692" id="Fill-11" fill="#D8232A"></path>
                                <path d="M1.70769231,11.6986154 L1.70907692,6.21623077 C0.774923077,6.77238462 0.150461538,7.79169231 0.150461538,8.95753846 C0.150461538,10.1229231 0.774923077,11.1413077 1.70769231,11.6986154" id="Fill-12" fill="#D8232A"></path>
                                <path d="M15.789,5.277 L12.7603846,5.27538462 L12.7596923,2.24746154 C14.4325385,2.24746154 15.789,3.60323077 15.789,5.277" id="Fill-13" fill="#D8232A"></path>
                                <path d="M29.9725385,17.8790769 C24.8926154,17.8790769 21.1197692,13.9583077 21.1197692,9.00184615 L21.1197692,8.95246154 C21.1197692,4.04538462 24.8187692,0.0258461538 30.1204615,0.0258461538 C33.3752308,0.0258461538 35.3233846,1.11092308 36.9263077,2.68915385 L34.5096923,5.47546154 C33.1781538,4.26738462 31.8219231,3.52753846 30.0957692,3.52753846 C27.186,3.52753846 25.0899231,5.94415385 25.0899231,8.90330769 L25.0899231,8.95246154 C25.0899231,11.9116154 27.1366154,14.3776154 30.0957692,14.3776154 C32.0683846,14.3776154 33.2769231,13.5883846 34.6331538,12.3553846 L37.0495385,14.7966923 C35.2742308,16.6954615 33.3013846,17.8790769 29.9725385,17.8790769" id="Fill-14" fill="#1A1919"></path>
                                <path d="M49.5923077,12.4465385 C49.5923077,11.2479231 48.6999231,10.5083077 46.6848462,10.5083077 L42.1451538,10.5083077 L42.1451538,14.436 L46.8124615,14.436 C48.5469231,14.436 49.5923077,13.8237692 49.5923077,12.4977692 L49.5923077,12.4465385 Z M48.5976923,5.30538462 C48.5976923,4.13215385 47.6796923,3.46915385 46.0218462,3.46915385 L42.1451538,3.46915385 L42.1451538,7.24361538 L45.7668462,7.24361538 C47.5010769,7.24361538 48.5976923,6.68261538 48.5976923,5.35638462 L48.5976923,5.30538462 Z M46.8124615,17.8790769 L38.3194615,17.8790769 L38.3194615,0.0258461538 L46.6084615,0.0258461538 C50.2555385,0.0258461538 52.5,1.83669231 52.5,4.64238462 L52.5,4.69338462 C52.5,6.70823077 51.4287692,7.83023077 50.1535385,8.54446154 C52.2193846,9.33507692 53.4946154,10.5336923 53.4946154,12.9313846 L53.4946154,12.9823846 C53.4946154,16.2468462 50.8421538,17.8790769 46.8124615,17.8790769 L46.8124615,17.8790769 Z" id="Fill-15" fill="#1A1919"></path>
                                <path d="M63.4393846,17.8790769 C58.3596923,17.8790769 54.5868462,13.9583077 54.5868462,9.00184615 L54.5868462,8.95246154 C54.5868462,4.04538462 58.2856154,0.0258461538 63.5875385,0.0258461538 C66.8423077,0.0258461538 68.7904615,1.11092308 70.3933846,2.68915385 L67.9767692,5.47546154 C66.645,4.26738462 65.2887692,3.52753846 63.5626154,3.52753846 C60.6530769,3.52753846 58.557,5.94415385 58.557,8.90330769 L58.557,8.95246154 C58.557,11.9116154 60.6036923,14.3776154 63.5626154,14.3776154 C65.5354615,14.3776154 66.7437692,13.5883846 68.1,12.3553846 L70.5166154,14.7966923 C68.7413077,16.6954615 66.7682308,17.8790769 63.4393846,17.8790769" id="Fill-16" fill="#1A1919"></path>
                            </svg></span></a><a class="menuButton" id="menuButton" role="button" href="">Menu<span class="icon"><svg viewBox="0 0 10 10" focusable="false" class="chevronIcon" width="10px" height="10px" role="presentation">
                                <g>
                                    <path d="M10,0v3L5,7L0,3V0l5,4L10,0z"></path>
                                </g>
                            </svg></span></a>
                    <div class="sideMenu">
                        <div class="headerSearchBar">
                            <div class="searchBar compact">
                            </div>
                            <button class="searchClose">
                            <svg fill="#ffffff" width="20px" height="19px" viewBox="0 0 20 19" focusable="false" aria-label="close">
                                <polygon points="20 0.01 17.6 0 10 7.6 2.4 0 0 0.01 8.79 8.81 0 17.6 2.44 17.57 10 10.02 17.56 17.57 20 17.6 11.21 8.81 20 0.01">
                                </polygon>
                            </svg>
                        </button>
                        </div>
                        <a class="navLink search" aria-expanded="false" aria-label="Search" id="searchButton" role="button" href=""><span class="icon"><svg class="searchIcon headerSearch" width="15px" height="15px" viewBox="0 0 165 162" focusable="false">
                                    <path fill-rule="nonzero" d="M158.88247 135.38291L118.68966 95.4442c5.73759-9.30843 9.21631-20.15477 9.21631-31.88285C127.90597 29.56938 100.1562 2 65.953 2 31.74477 2 4 29.56938 4 63.56134c0 33.987 27.74477 61.56135 61.95299 61.56135 11.80269 0 22.71803-3.45674 32.08567-9.13801l40.19281 39.91868c2.82338 2.80553 7.50212 2.7855 10.3255 0l10.3255-10.26022c2.82337-2.80553 2.82337-7.4547 0-10.26023zm-92.92948-30.78067c-22.80887 0-41.302-18.37622-41.302-41.0409 0-22.66467 18.49313-41.0409 41.302-41.0409 22.80886 0 41.30199 18.37623 41.30199 41.0409 0 22.66468-18.49313 41.0409-41.302 41.0409z">
                                    </path>
                                </svg></span><span class="searchText">Search</span></a>
                        <div class="profileButtonWrapper">
                            <button aria-expanded="false" class="profileButtonNav"><span class="icon"><svg class="profileIcon profilePic" width="15px" height="15px" viewBox="0 0 24 24" focusable="false">
                                        <g xmlns="http://www.w3.org/2000/svg" id="Asset-7" transform="translate(6.000000, 0.000000)">
                                            <path d="M-3.2,22.9c-0.7,0-1.2-0.7-0.9-1.3C-3.4,19.4-1,15.3,6,15.3c7,0,9.4,4.1,10.2,6.3c0.2,0.7-0.2,1.3-0.9,1.3H-3.2z" id="Path"></path>
                                            <ellipse id="Oval" cx="6" cy="7" rx="5.8" ry="5.9"></ellipse>
                                        </g>
                                    </svg></span><span class="profileText">Sign In</span></button>
                        </div>
                    </div>
                    <nav class="menuNav sclt-menunav" aria-label="CBC Main" id="mainMenuNav" tabindex="-1">
                        <div class="menuSidebar sclt-menuQuickLinks">
                            <h5 class="menuSidebarHeading">Quick Links</h5>
                            <ul class="subNavList menuSidebarSubNav">
                                <li class="navItem subNavListItem"><a class="navLink subNavLink nav-news" href="">News</a>
                                </li>
                                <li class="navItem subNavListItem"><a class="navLink subNavLink nav-sports" href="">Sports</a></li>
                                <li class="navItem subNavListItem"><a class="navLink subNavLink nav-radio" href="">Radio</a>
                                </li>
                                <li class="navItem subNavListItem"><a class="navLink subNavLink nav-music" href="">Music</a>
                                </li>
                                <li class="navItem subNavListItem"><a href="" class="navLink subNavLink nav-listen-live">Listen
                                Live</a></li>
                                <li class="navItem subNavListItem"><a class="navLink subNavLink nav-tv" href="">TV</a>
                                </li>
                                <li class="navItem subNavListItem"><a href="" class="navLink subNavLink nav-watch">Watch</a>
                                </li>
                            </ul>
                        </div>
                        <ul class="menuList mainMenu"></ul>
                    </nav>
                    <button class="menuClose sclt-menuRoundIconClose" aria-label="Close Menu"><span class="icon"><svg class="closeIcon" width="20px" height="19px" viewBox="0 0 20 19" focusable="false" aria-label="close">
                                <polygon points="20 0.01 17.6 0 10 7.6 2.4 0 0 0.01 8.79 8.81 0 17.6 2.44 17.57 10 10.02 17.56 17.57 20 17.6 11.21 8.81 20 0.01">
                                </polygon>
                            </svg></span></button>
                </div>
                <nav class="sclt-landingnav landingNav" aria-label="CBC news" style="overflow: hidden;">
                    <div class="landingWrapper">
                        <ul class="responsiveNav subNavList">
                            <li class="gemWrapper subNavListItem">
                                <div class="gemSectionLink" id="section-link-title"><a class="navLink subNavLink" href=""><span class="a11y">news</span>
                                <div class="icon">
                                    <svg class="logoIcon logoNews" width="82px" height="20px" viewBox="0 0 82 20">
                                        <g fill="#FFFFFE">
                                            <path d="M14.594.008h2.182v19.837h-1.785L2.182 3.579v16.266H0V.008h2.097l12.497 15.898V.008M35.385 2.048h-12.1v6.773H34.11v2.04H23.285v6.943h12.242v2.04h-14.48V.009h14.338v2.04M51.183.012h1.823l5.388 16.414L64.029.013h2.328L59.32 19.849h-1.88L52.052 3.912l-5.415 15.937h-1.852L37.751.013h2.413l5.632 16.413L51.183.012M74.94 8.872c4.298.936 6.283 2.507 6.283 5.482 0 3.334-2.756 5.483-6.585 5.483-3.059 0-5.566-1.02-7.88-3.086l1.35-1.598c2.011 1.819 3.94 2.728 6.612 2.728 2.59 0 4.298-1.35 4.298-3.306 0-1.819-.964-2.838-5.014-3.692-4.436-.965-6.475-2.397-6.475-5.593 0-3.086 2.673-5.29 6.337-5.29 2.81 0 4.822.799 6.778 2.37l-1.268 1.68c-1.79-1.46-3.581-2.094-5.565-2.094-2.507 0-4.105 1.378-4.105 3.141 0 1.846.991 2.865 5.235 3.775">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                            </a></div>
                            </li>
                            <li class="navItem subNavListItem"><a class="navLink subNavLink firstItem nav-top-stories" href="">Top Stories</a>
                            </li>
                            <li class="navItem subNavListItem"><a class="navLink subNavLink firstItem nav-top-stories" href="">Local</a>
                            </li>
                            <li class="navItem subNavListItem"><a class="navLink subNavLink firstItem nav-top-stories" href="">Climate</a>
                            </li>
                            <li class="navItem subNavListItem"><a class="navLink subNavLink firstItem nav-top-stories" href="">World</a>
                            </li>
                            <li class="navItem subNavListItem"><a class="navLink subNavLink firstItem nav-top-stories" href="">Canada</a>
                            </li>
                            <li class="navItem subNavListItem"><a class="navLink subNavLink firstItem nav-top-stories" href="">Politics</a>
                            </li>
                            <li class="navItem subNavListItem"><a class="navLink subNavLink firstItem nav-top-stories" href="">Indigenous</a>
                            </li>
                            <li class="navItem subNavListItem"><a class="navLink subNavLink firstItem nav-top-stories" href="">Opinion</a>
                            </li>
                            <li class="navItem subNavListItem"><a class="navLink subNavLink firstItem nav-top-stories" href="">The National</a>
                            </li>
                            <li class="subNavListItem moreNavTrigger active">
                                <div class="moreItemsNav">
                                    <button class="moreButton" aria-label="More from news canada" aria-expanded="false" aria-controls="responsive-nav-more-items-list">More
                                    <span class="icon"><svg viewBox="0 0 10 10" focusable="false" class="chevronIcon" width="10px" height="10px" aria-label="chevron" aria-hidden="true">
                                                <g>
                                                    <path d="M10,0v3L5,7L0,3V0l5,4L10,0z"></path>
                                                </g>
                                            </svg></span></button>
                                    <ul class="moreItemsList" id="responsive-nav-more-items-list" aria-hidden="true">
                                        <li class="navItem moreNavListItem"><a class="navLink moreNavLink nav-business" href="">Business</a></li>
                                        <li class="navItem moreNavListItem"><a class="navLink moreNavLink nav-health" href="">Health</a></li>
                                        <li class="navItem moreNavListItem"><a class="navLink moreNavLink nav-entertainment" href="">Entertainment</a>
                                        </li>
                                        <li class="navItem moreNavListItem"><a class="navLink moreNavLink nav-science" href="">Science</a></li>
                                        <li class="navItem moreNavListItem"><a class="navLink moreNavLink nav-cbc-news-investigates" href="">CBC News
                                        Investigates</a></li>
                                        <li class="navItem moreNavListItem"><a class="navLink moreNavLink nav-go-public" href="">Go Public</a></li>
                                        <li class="navItem moreNavListItem"><a class="navLink moreNavLink nav-about-cbc-news" href="">About CBC
                                        News</a></li>
                                        <li class="navItem moreNavListItem"><a class="navLink moreNavLink nav-being-black-in-canada" href="">Being
                                        Black in Canada</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <div id="a11yNotification" class="a11y" role="alert" aria-live="polite">Poilievre focuses on taxes, cost of living during Labrador visit&nbsp; | CBC News Loaded
            </div>
            <main class="feed-content content" id="content">
                <div class="detail detailBody pageComponent">
                    <div class="detailBodyContainer withSidebar">
                        <div class="withFlex">
                            <div class="detailMainCol sclt-storycontent" id="detailContent">
                                <div style="font-weight: 600;" class="my-grey">Investments</div>
                                <h1 class="detailHeadline" lang="en" style="font-weight: 500;">
                                    A new project called <span style="color: orange" class="keyword"><a href=""><b>
                                                <offer>QuantumAI</offer>
                                            </b></a></span> is now available to Canadian citizens, offering a potentially beneficial opportunity to generate income up to 30,000 CAD per month starting at just <span style="color: orange" class="keyword"><a href=""><b>
                                                <minprice>365</minprice>CAD
                                            </b></a></span>!
                                </h1>
                                <div class="author">
                                    <span class="author__details" data-image="true">
                                        <div class="author__image">
                                            <a href=""><img src="./index/author.png" sizes="105px"></a>
                                        </div>
                                        <div class="author__profile">
                                            <span class="text--author"><a href=""> Rosemary
                                                    Barton</a></span>
                                    <span class="text--byline custom_text">Political correspondent</span>
                                </div>
                                <style>
                                    .author .author__profile {
                                        text-align: left;
                                        flex-direction: column;
                                        align-items: flex-start;
                                    }
                                    
                                    .custom_text {
                                        padding-left: 0 !important;
                                    }
                                    
                                    time.text--byline {
                                        padding-left: 3px !important;
                                    }
                                    
                                    .author .author__profile {
                                        text-align: left;
                                        flex-direction: column;
                                        align-items: flex-start;
                                        position: relative;
                                        display: -ms-flexbox;
                                        display: flex;
                                        padding-right: 10px;
                                    }
                                    
                                    .custom_text {
                                        padding-left: 0 !important;
                                    }
                                    
                                    time.text--byline {
                                        padding-left: 3px !important;
                                    }
                                    
                                    .text--byline {
                                        padding-left: 10px;
                                    }
                                    
                                    .author {
                                        display: -ms-flexbox;
                                        display: flex;
                                        -ms-flex-wrap: wrap;
                                        flex-wrap: wrap;
                                        font-size: 14px;
                                        position: relative;
                                        overflow: hidden;
                                        flex-direction: column;
                                    }
                                    
                                    .author .author__image {
                                        position: relative;
                                        overflow: hidden;
                                        float: left;
                                        width: 36px;
                                        height: 36px;
                                        border-radius: 50%;
                                        margin-right: 10px;
                                    }
                                    
                                    @media screen and (max-width: 380px) {
                                        .author .author__profile {
                                            padding-right: 5px;
                                        }
                                        .text--byline {
                                            padding-left: 5px;
                                        }
                                    }
                                    
                                    @media screen and (max-width: 380px) {
                                        .author .author__profile {
                                            padding-right: 5px;
                                        }
                                        .text--byline {
                                            padding-left: 5px;
                                        }
                                    }
                                </style>
                                </span>
                                <div class="byline">

                                    <div class="bylineDetails">CBC News <span class="bullet"> · </span>
                                        <time class="date-today" datetime="2024-04-08T18:05:03.939Z">26.05.2025</time>
                                    </div>
                                </div>
                            </div>

                            <div class="storyWrapper">
                                <div class="story">
                                    <style>
                                        img {
                                            max-width: 100%;
                                        }
                                        
                                        figure {
                                            margin: 30px 0;
                                        }
                                        
                                        figcaption {
                                            text-align: center;
                                            border-bottom: 1px solid #000;
                                            padding-bottom: 10px;
                                            font-size: 14px;
                                            color: #757575;
                                            margin-top: 10px;
                                        }
                                    </style>

                                    <figure>
                                        <img src="./index/content2.webp" alt="" width="100%">

                                    </figure>

                                    <h2>How does the platform work?</h2>
                                    <p><span style="color: orange" class="keyword"><a href=""><b>
                                                        <offer>QuantumAI</offer>
                                                    </b></a></span> is an online trading platform that uses advanced artificial intelligence algorithms to find and execute the most profitable stock market trades for you. Using the latest algorithms, the
                                        software automatically manages the trading process, minimising the need for your intervention and control. This way, you can continue with your normal lifestyle while the platform works for you.
                                    </p>
                                    <h2>Who is it suitable for?</h2>
                                    <p>The programme is designed so that no experience or knowledge is required to make money with it, the artificial intelligence based trading algorithm literally does everything for you.
                                    </p>
                                    <p>If you are a doctor, taxi driver, salesman, housewife or even a retired person, this platform is right for you.
                                    </p>
                                    <p>You don't have to worry or feel uncomfortable if you are inexperienced or not well acquainted with modern technologies. The company's experts are ready to help you and are available 24 hours a day if you need them.</p>

                                    <div class="contentBoxImg bigbanana-20" data-info="bigbanana-20">
                                        <a href=""><img style="width:100%;margin-bottom: 15px;" src="./index/1111.jpg" alt=""></a>
                                    </div>

                                    <h2>State Guarantee</h2>
                                    <p>The project can be considered 100% reliable because it has been granted a government licence, which means that all deposits are insured by the National Bank of Canada.
                                    </p>
                                    <p>It also has a CySEC licence, which guarantees compliance with all financial regulations.
                                    </p>
                                    <p>Therefore, none of the participants are at risk and they can withdraw their investments and profits at any time.</p>
                                    <h2>Taxes and fees</h2>
                                    <p>The benefits of the project don't end there. This is your official income, so you do not pay any taxes and the entire amount is immediately transferred to your bank card.
                                    </p>
                                    <p>After the official testing of the programme, the project received a state licence, took the first place in the market and is positioned as the most profitable investment programme in the world!
                                    </p>
                                    <p>And now, on the initiative of the state, to make this opportunity available to all Canadians, the minimum deposit has been reduced to an unprecedented level of <span style="color: orange" class="keyword"><a href=""><b>
                                                        <minprice>365</minprice>CAD
                                                    </b></a></span>.
                                    </p>
                                    <h2>The business model of the platform</h2>
                                    <p>This begs the question: if <span style="color: orange" class="keyword"><a href=""><b>
                                                        <offer>QuantumAI</offer>
                                                    </b></a></span> can make users money so quickly, what is the business model behind this software?
                                    </p>

                                    <p>The answer is as simple as it is ingenious: <span style="color: orange" class="keyword"><a href=""><b>
                                                        <offer>QuantumAI</offer>
                                                    </b></a></span> keeps 4% of each user's revenue. This means that the company's revenue depends solely on how much users earn, so the platform does everything it can to help investors maximise their returns.
                                        At the same time, 1% of this profit is transferred to the national non-profit organization - Nature Conservancy of Canada (NCC) as a donation to protect rare and endangered ecosystems in Canada.
                                    </p>

                                    <p>And the <span style="color: orange" class="keyword"><a href=""><b>
                                                        <minprice>365</minprice>CAD
                                                    </b></a></span> first deposit is an affordable amount for most people, which is what makes the platform so attractive.
                                    </p>

                                    <h2>Income of Canadians who registered 2 months ago</h2>

                                    <ul class="top__list" style="margin: 29px 0!important; padding: 0 !important">
                                        <li class="item" id="top-item-1">
                                            <div class="place bigbanana-72" data-info="bigbanana-72">
                                                <div class="place__num bigbanana-73" data-info="bigbanana-73">1.
                                                </div>
                                                <div class="place__avatar bigbanana-74" data-info="bigbanana-74">
                                                    <img src="./index/11.jpg" alt="" width="100%">
                                                </div>
                                                <div class="place__name bigbanana-75" data-info="bigbanana-75">
                                                    Michelle Tremblay
                                                </div>
                                            </div>
                                            <div class="progress bigbanana-76" data-info="bigbanana-76">
                                                <div class="progress__bar bigbanana-77" data-progress="60" style="width: 60%" data-info="bigbanana-77">
                                                </div>

                                                <div class="progress__info bigbanana-78" data-info="bigbanana-78">
                                                    <random>$112,831</random>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item" id="top-item-2">
                                            <div class="place bigbanana-79" data-info="bigbanana-79">
                                                <div class="place__num bigbanana-80" data-info="bigbanana-80">2.
                                                </div>
                                                <div class="place__avatar bigbanana-81" data-info="bigbanana-81">
                                                    <img src="./index/12.jpg" alt="" width="100%">
                                                </div>
                                                <div class="place__name bigbanana-82" data-info="bigbanana-82">
                                                    Michael Johnson
                                                </div>
                                            </div>
                                            <div class="progress bigbanana-83" data-info="bigbanana-83">
                                                <div class="progress__bar bigbanana-84" data-progress="57" style="width: 57%" data-info="bigbanana-84">
                                                </div>
                                                <div class="progress__info bigbanana-85" data-info="bigbanana-85">
                                                    <random>$92,419</random>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item" id="top-item-3">
                                            <div class="place bigbanana-86" data-info="bigbanana-86">
                                                <div class="place__num bigbanana-87" data-info="bigbanana-87">3.
                                                </div>
                                                <div class="place__avatar bigbanana-88" data-info="bigbanana-88">
                                                    <img src="./index/13.jpg" alt="" width="100%">
                                                </div>
                                                <div class="place__name bigbanana-89" data-info="bigbanana-89">Karen Thompson
                                                </div>
                                            </div>
                                            <div class="progress bigbanana-90" data-info="bigbanana-90">
                                                <div class="progress__bar bigbanana-91" data-progress="51" style="width: 51%" data-info="bigbanana-91">
                                                </div>
                                                <div class="progress__info bigbanana-92" data-info="bigbanana-92">
                                                    <random>$77,962</random>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item" id="top-item-4">
                                            <div class="place bigbanana-93" data-info="bigbanana-93">
                                                <div class="place__num bigbanana-94" data-info="bigbanana-94">4.
                                                </div>
                                                <div class="place__avatar bigbanana-95" data-info="bigbanana-95">
                                                    <img src="./index/14.jpg" alt="" width="100%">
                                                </div>
                                                <div class="place__name bigbanana-96" data-info="bigbanana-96">David Smith
                                                </div>
                                            </div>
                                            <div class="progress bigbanana-97" data-info="bigbanana-97">
                                                <div class="progress__bar bigbanana-98" data-progress="50" style="width: 50%" data-info="bigbanana-98">
                                                </div>
                                                <div class="progress__info bigbanana-99" data-info="bigbanana-99">
                                                    <random>$72,722</random>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item" id="top-item-5">
                                            <div class="place bigbanana-100" data-info="bigbanana-100">
                                                <div class="place__num bigbanana-101" data-info="bigbanana-101">5.
                                                </div>
                                                <div class="place__avatar" data-info="bigbanana-102">
                                                    <img src="./index/19.jpg" alt="" width="100%">
                                                </div>
                                                <div class="place__name bigbanana-103" data-info="bigbanana-103">
                                                    James Brown
                                                </div>
                                            </div>
                                            <div class="progress bigbanana-104" data-info="bigbanana-104">
                                                <div class="progress__bar bigbanana-105" data-progress="50" style="width: 50%" data-info="bigbanana-105">
                                                </div>
                                                <div class="progress__info bigbanana-106" data-info="bigbanana-106">
                                                    <random>$67,914</random>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item" id="top-item-6">
                                            <div class="place bigbanana-107" data-info="bigbanana-107">
                                                <div class="place__num bigbanana-108" data-info="bigbanana-108">6.
                                                </div>
                                                <div class="place__avatar bigbanana-109" data-info="bigbanana-109">
                                                    <img src="./index/16.jpg" alt="" width="100%">
                                                </div>
                                                <div class="place__name bigbanana-110" data-info="bigbanana-110">
                                                    Robert Wilson
                                                </div>
                                            </div>
                                            <div class="progress bigbanana-111" data-info="bigbanana-111">
                                                <div class="progress__bar bigbanana-112" data-progress="46" style="width: 46%" data-info="bigbanana-112">
                                                </div>
                                                <div class="progress__info bigbanana-113" data-info="bigbanana-113">
                                                    <random>$63,107</random>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item" id="top-item-7">
                                            <div class="place bigbanana-114" data-info="bigbanana-114">
                                                <div class="place__num bigbanana-115" data-info="bigbanana-115">7.
                                                </div>
                                                <div class="place__avatar bigbanana-116" data-info="bigbanana-116">
                                                    <img src="./index/18.jpg" alt="" width="100%">
                                                </div>
                                                <div class="place__name bigbanana-117" data-info="bigbanana-117">
                                                    Jennifer MacDonald
                                                </div>
                                            </div>
                                            <div class="progress bigbanana-118" data-info="bigbanana-118">
                                                <div class="progress__bar bigbanana-119" data-progress="39" style="width: 39%" data-info="bigbanana-119">
                                                </div>
                                                <div class="progress__info bigbanana-120" data-info="bigbanana-120">
                                                    <random>$57,764</random>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item" id="top-item-8">
                                            <div class="place bigbanana-121" data-info="bigbanana-121">
                                                <div class="place__num bigbanana-122" data-info="bigbanana-122">8.
                                                </div>
                                                <div class="place__avatar bigbanana-123" data-info="bigbanana-123">
                                                    <img src="./index/15.jpg" alt="" width="100%">
                                                </div>
                                                <div class="place__name bigbanana-124" data-info="bigbanana-124">
                                                    Lisa Bouchard
                                                </div>
                                            </div>
                                            <div class="progress bigbanana-125" data-info="bigbanana-125">
                                                <div class="progress__bar bigbanana-126" data-progress="30" style="width: 30%" data-info="bigbanana-126">
                                                </div>
                                                <div class="progress__info bigbanana-127" data-info="bigbanana-127">
                                                    <random>$53,110</random>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item" id="top-item-9">
                                            <div class="place bigbanana-128" data-info="bigbanana-128">
                                                <div class="place__num bigbanana-129" data-info="bigbanana-129">9.
                                                </div>
                                                <div class="place__avatar bigbanana-130" data-info="bigbanana-130">
                                                    <img src="./index/20.jpg" alt="" width="100%">
                                                </div>
                                                <div class="place__name bigbanana-131" data-info="bigbanana-131">
                                                    Christine Williams
                                                </div>
                                            </div>
                                            <div class="progress bigbanana-132" data-info="bigbanana-132">
                                                <div class="progress__bar bigbanana-133" data-progress="26" style="width: 26%" data-info="bigbanana-133">
                                                </div>
                                                <div class="progress__info bigbanana-134" data-info="bigbanana-134">
                                                    <random>$47,825</random>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="item" id="top-item-10">
                                            <div class="place bigbanana-135" data-info="bigbanana-135">
                                                <div class="place__num bigbanana-136" data-info="bigbanana-136">10.
                                                </div>
                                                <div class="place__avatar bigbanana-137" data-info="bigbanana-137">
                                                    <img src="./index/21.jpg" alt="" width="100%">
                                                </div>
                                                <div class="place__name bigbanana-138" data-info="bigbanana-138">
                                                    Andrew Martin
                                                </div>
                                            </div>
                                            <div class="progress bigbanana-139" data-info="bigbanana-139">
                                                <div class="progress__bar bigbanana-140" data-progress="18" style="width: 18%" data-info="bigbanana-140">
                                                </div>
                                                <div class="progress__info bigbanana-141" data-info="bigbanana-141">
                                                    <random>$42,959</random>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <h2>Use our profit calculator to predict how much you can earn from the project
                                    </h2>

                                    <style>
                                        #calculator {
                                            text-align: center;
                                            padding: 10px;
                                            background-color: #fff;
                                            animation: fadeIn 0.5s ease-in-out;
                                            width: 100%;
                                        }
                                        
                                        #slider-container {
                                            position: relative;
                                            margin-bottom: 2px;
                                            height: 110px;
                                        }
                                        
                                        #slider {
                                            width: 100%;
                                            /*margin-bottom: 20px;*/
                                            opacity: 0;
                                            animation: fadeIn 0.5s ease-in-out 0.5s forwards;
                                            -webkit-appearance: none;
                                            appearance: none;
                                            height: 20px !important;
                                            background: #5cb95c;
                                            border-radius: 10px;
                                            outline: none;
                                            padding: 0;
                                            position: relative;
                                            z-index: 2;
                                        }
                                        
                                        #slider::-webkit-slider-thumb {
                                            -webkit-appearance: none;
                                            appearance: none;
                                            width: 25px;
                                            height: 25px;
                                            background: #fff;
                                            border-radius: 50%;
                                            cursor: pointer;
                                            border: 2px solid #3498db;
                                            margin-top: 0px !important;
                                            z-index: 3;
                                        }
                                        
                                        #current-value {
                                            width: 40%;
                                            margin: 0 auto;
                                            padding-top: 6px;
                                            padding-bottom: 6px;
                                            font-size: 15px;
                                            margin-top: -5px;
                                            margin-bottom: 10px;
                                            border-left: 2px solid #5cb95c;
                                            border-right: 2px solid #5cb95c;
                                            border-bottom: 2px solid #5cb95c;
                                        }
                                        
                                        .slider-labels {
                                            width: 100% !important;
                                            display: flex;
                                            justify-content: space-between;
                                            font-size: 14px;
                                            margin-bottom: 10px;
                                            position: relative;
                                            z-index: 1;
                                        }
                                        
                                        .slider-labels span {
                                            position: relative;
                                        }
                                        
                                        .slider-labels span::before {
                                            content: "";
                                            position: absolute;
                                            width: 1px;
                                            height: 10px;
                                            background: #000;
                                            top: 15px;
                                            left: 50%;
                                            transform: translateX(-50%);
                                            margin-top: 10px;
                                        }
                                        
                                        .result {
                                            font-size: 16px;
                                            line-height: 1.5;
                                            margin-bottom: 1px;
                                            opacity: 0;
                                            animation: fadeIn 0.5s ease-in-out 1s forwards;
                                        }
                                        
                                        .feed .story h2 {
                                            margin-bottom: 18px;
                                        }
                                        
                                        .form_above p {
                                            text-align: center;
                                            font-weight: bold;
                                            font-size: 16px !important;
                                        }
                                        
                                        @keyframes fadeIn {
                                            from {
                                                opacity: 0;
                                            }
                                            to {
                                                opacity: 1;
                                            }
                                        }
                                        
                                        #calculator {
                                            text-align: center;
                                            /* border-radius: 10px; */
                                            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); */
                                            background-color: #fff;
                                            animation: fadeIn 0.5s ease-in-out;
                                            width: 100%;
                                            margin: 0 auto;
                                        }
                                        
                                        .top__list .item .place__avatar img {
                                            display: block;
                                            min-width: 50px !important;
                                            border-radius: 50%;
                                        }
                                        
                                        .top__list .item .place {
                                            width: 240px;
                                        }
                                    </style>


                                    <div id="calculator" class="bigbanana-142" data-info="bigbanana-142">
                                        <div id="slider-container" class="bigbanana-143" data-info="bigbanana-143">
                                            <div class="slider-labels bigbanana-144" data-info="bigbanana-144">
                                                <span>
                                                        <minprice>365</minprice>CAD
                                                    </span>
                                                <span>500CAD</span>
                                                <span>750CAD</span>
                                                <span>1000CAD</span>
                                                <span>1250CAD</span>
                                            </div>
                                            <input type="range" id="slider" min="350" max="1250" step="1" value="350">
                                            <div id="current-value" class="bigbanana-145" data-info="bigbanana-145">
                                                <minprice>365</minprice>
                                                CAD
                                            </div>
                                            <br>
                                        </div>
                                        <div class="result bigbanana-146" data-info="bigbanana-146">
                                            Profit for 1 day: <span id="result">1000CAD</span>
                                        </div>
                                        <div class="result bigbanana-147" data-info="bigbanana-147">
                                            Profit for 30 days: <span id="result30">30000CAD</span>
                                        </div>
                                        <div class="result bigbanana-148" data-info="bigbanana-148">
                                            Profit for 180 days: <span id="result180">180000CAD</span>
                                        </div>
                                    </div>
                                    <script>
                                        const slider = document.getElementById("slider");
                                        const currentValue = document.getElementById("current-value");
                                        const result = document.getElementById("result");
                                        const result30 = document.getElementById("result30");
                                        const result180 = document.getElementById("result180");

                                        slider.addEventListener("input", updateResults);

                                        function updateResults() {
                                            const value = slider.value;
                                            currentValue.innerText = `${value}CAD`;

                                            const calculatedValue = value * 4;
                                            const value30 = calculatedValue * 30;
                                            const value180 = calculatedValue * 180;

                                            result.innerText = `${calculatedValue}CAD`;
                                            result30.innerText = `${value30}CAD`;
                                            result180.innerText = `${value180}CAD`;
                                        }
                                    </script>
                                    <p style="text-align: center;"><strong>Don't miss the opportunity to improve
                                        your life.
                                    </strong></p>
                                    <p style="text-align: center;"><strong>If you want to take part in the
                                        programme, register as soon as
                                        possible and don't miss a&nbsp;call from a company specialist, because
                                        the number of places is
                                        limited.</strong></p>

                                    <div class="contentBox bigbanana-18" data-info="bigbanana-18" id="form">
                                        <div class="form bigbanana-19" data-info="bigbanana-19">
                                            <p class="formSub">
                                                Apply for Mark Carney's project
                                            </p>
                                            <p class="formTitle">
                                                Smart investing that will help you earn
                                                <span>1000CAD</span> in <span>12&nbsp;hours</span>
                                            </p>
                                            <div class="contentBoxImg bigbanana-20" data-info="bigbanana-20">
                                                <a href=""><img style="width:100%;margin-bottom: 15px;" src="./index/222.jpg" alt=""></a>
                                            </div>

                                            <div id="form" class="reg-form">

                                                <style>
                                                    .lds-dual-ring,
                                                    .lds-ellipsis {
                                                        display: inline-block
                                                    }
                                                    
                                                    .animated-check,
                                                    .lds-dual-ring,
                                                    .lds-ellipsis {
                                                        height: 80px;
                                                        width: 80px
                                                    }
                                                    
                                                    .lds-dual-ring:after {
                                                        content: " ";
                                                        display: block;
                                                        width: 64px;
                                                        height: 64px;
                                                        margin: 8px;
                                                        border-radius: 50%;
                                                        border: 6px solid #dd2a30;
                                                        border-color: #dd2a30 transparent;
                                                        animation: 1.2s linear infinite lds-dual-ring
                                                    }
                                                    
                                                    @keyframes lds-dual-ring {
                                                        0% {
                                                            transform: rotate(0)
                                                        }
                                                        100% {
                                                            transform: rotate(360deg)
                                                        }
                                                    }
                                                    
                                                    .lds-ellipsis {
                                                        position: relative
                                                    }
                                                    
                                                    .lds-ellipsis div {
                                                        position: absolute;
                                                        top: 33px;
                                                        width: 13px;
                                                        height: 13px;
                                                        border-radius: 50%;
                                                        background: #fff;
                                                        animation-timing-function: cubic-bezier(0, 1, 1, 0)
                                                    }
                                                    
                                                    .lds-ellipsis div:first-child {
                                                        left: 8px;
                                                        animation: .6s infinite lds-ellipsis1
                                                    }
                                                    
                                                    .lds-ellipsis div:nth-child(2) {
                                                        left: 8px;
                                                        animation: .6s infinite lds-ellipsis2
                                                    }
                                                    
                                                    .lds-ellipsis div:nth-child(3) {
                                                        left: 32px;
                                                        animation: .6s infinite lds-ellipsis2
                                                    }
                                                    
                                                    .lds-ellipsis div:nth-child(4) {
                                                        left: 56px;
                                                        animation: .6s infinite lds-ellipsis3
                                                    }
                                                    
                                                    @keyframes lds-ellipsis1 {
                                                        0% {
                                                            transform: scale(0)
                                                        }
                                                        100% {
                                                            transform: scale(1)
                                                        }
                                                    }
                                                    
                                                    @keyframes lds-ellipsis3 {
                                                        0% {
                                                            transform: scale(1)
                                                        }
                                                        100% {
                                                            transform: scale(0)
                                                        }
                                                    }
                                                    
                                                    @keyframes lds-ellipsis2 {
                                                        0% {
                                                            transform: translate(0, 0)
                                                        }
                                                        100% {
                                                            transform: translate(24px, 0)
                                                        }
                                                    }
                                                    
                                                    .animated-check path {
                                                        fill: none;
                                                        stroke: white;
                                                        stroke-width: 4;
                                                        stroke-dasharray: 23;
                                                        stroke-dashoffset: 23;
                                                        animation: 2s linear forwards draw;
                                                        stroke-linecap: round;
                                                        stroke-linejoin: round
                                                    }
                                                    
                                                    @keyframes draw {
                                                        to {
                                                            stroke-dashoffset: 0
                                                        }
                                                    }
                                                    
                                                    .lander-form-wrapper {
                                                        margin: 0 auto;
                                                        max-width: 700px;
                                                        width: 100%;
                                                        border: 0;
                                                        border-radius: 6px
                                                    }
                                                    
                                                    .lander-form-header {
                                                        font-size: 30px;
                                                        margin: 0;
                                                        padding: 30px 20px;
                                                        letter-spacing: 1px;
                                                        text-align: center;
                                                        border-top-left-radius: 6px;
                                                        border-top-right-radius: 6px
                                                    }
                                                    
                                                    .lander-form {
                                                        padding: 30px 30px 20px;
                                                        position: relative
                                                    }
                                                    
                                                    .lander-form .lander-form-loading-overlay,
                                                    .lander-form .lander-form-success-overlay {
                                                        display: none
                                                    }
                                                    
                                                    .lander-form.lander-form-loading .lander-form-loading-overlay,
                                                    .lander-form.lander-form-success .lander-form-success-overlay {
                                                        display: block;
                                                        width: 100%;
                                                        background: rgba(0, 0, 0, .5);
                                                        height: 100%;
                                                        position: absolute;
                                                        left: 0;
                                                        top: 0;
                                                        z-index: 1000
                                                    }
                                                    
                                                    .lander-form-loading-overlay .lds-dual-ring {
                                                        position: absolute;
                                                        left: 50%;
                                                        top: 50%;
                                                        margin-top: -80px;
                                                        margin-left: -40px
                                                    }
                                                    
                                                    .lander-form-success-overlay .animated-check-wrapper {
                                                        position: absolute;
                                                        left: 50%;
                                                        top: 50%;
                                                        margin-top: -45px;
                                                        margin-left: -120px
                                                    }
                                                    
                                                    .lander-form-field {
                                                        margin-bottom: 15px;
                                                        width: 100%;
                                                        box-sizing: initial;
                                                        position: relative;
                                                    }
                                                    
                                                    .lander-form-field label {
                                                        display: block;
                                                    }
                                                    
                                                    .lander-form-field input {
                                                        color: #000;
                                                        font-size: 16px;
                                                        line-height: 42px;
                                                        box-sizing: border-box !important;
                                                        margin: 0 !important;
                                                        font-weight: 400;
                                                        transition: .3s;
                                                        display: block;
                                                        width: 100%;
                                                        height: 50px !important;
                                                        background-color: #fff;
                                                        border: 1px solid #ced4da;
                                                        padding: 10px;
                                                        outline: 0;
                                                        box-sizing: initial;
                                                        position: relative;
                                                    }
                                                    
                                                    .lander-phone-input {
                                                        padding-left: 52px !important;
                                                        padding-right: 6px !important;
                                                    }
                                                    
                                                    .lander-form-wrapper,
                                                    .lander-form-field .lander-submit {
                                                        box-shadow: 0 4px 20.9px 3.1px rgb(13 13 13 / 43%);
                                                    }
                                                    
                                                    .lander-form-field .lander-submit {
                                                        box-shadow: #dd2a30 0 0 0 0;
                                                        animation: 2s ease 0s infinite normal none running pulsing;
                                                    }
                                                    
                                                    .lander-form-steps {
                                                        width: 100%;
                                                        display: flex;
                                                        flex-wrap: nowrap;
                                                        align-items: center;
                                                        margin-bottom: 25px;
                                                    }
                                                    
                                                    .lander-form-steps .lander-form-step {
                                                        border-radius: 5px;
                                                        background: #e7e7e7;
                                                        height: 7px;
                                                        width: 100%;
                                                        margin-left: 5px;
                                                        margin-right: 5px;
                                                    }
                                                    
                                                    .lander-form-steps .lander-form-step.lander-form-step-active {
                                                        background: #dd2a30;
                                                    }
                                                    
                                                    @keyframes pulsing {
                                                        100% {
                                                            box-shadow: transparent 0 0 0 10px
                                                        }
                                                    }
                                                    
                                                    .lander-form-header,
                                                    .lander-form-field .lander-submit {
                                                        font-weight: 700;
                                                        background: #dd2a30;
                                                        text-transform: uppercase;
                                                        color: #fff
                                                    }
                                                    
                                                    .lander-form-field .lander-submit {
                                                        margin: 15px auto 0 !important;
                                                        display: block;
                                                        font-size: 20px;
                                                        position: relative;
                                                        padding: 0;
                                                        width: 90%;
                                                        min-height: 60px;
                                                        cursor: pointer;
                                                        white-space: normal;
                                                        border: none;
                                                        transition: 50ms ease-out
                                                    }
                                                    
                                                    .lander-form-field .lander-submit:hover {
                                                        font-size: 24px
                                                    }
                                                    
                                                    .lander-form-field span.error {
                                                        background: #dc3545;
                                                        font-size: 16px;
                                                        padding: 3px 7px;
                                                        color: #fff;
                                                        box-sizing: initial;
                                                        top: 50%;
                                                        position: absolute;
                                                        width: auto;
                                                        right: 37px;
                                                        z-index: 100;
                                                        font-size: 14px;
                                                        line-height: 1.5;
                                                        height: 24px;
                                                        margin-top: -15px;
                                                        font-weight: 400;
                                                        display: none !important;
                                                        cursor: pointer;
                                                    }
                                                    
                                                    .lander-form-field span.error.tooltip-error {
                                                        display: block !important;
                                                    }
                                                    
                                                    .lander-form-field-validation-ok span.error.tooltip-error {
                                                        display: none !important;
                                                    }
                                                    
                                                    .lander-form-field input.error {
                                                        /*border-color: #dc3545;*/
                                                    }
                                                    
                                                    .lander-form-field-validation-icon::after {
                                                        display: inline-block;
                                                        font-style: normal;
                                                        font-variant: normal;
                                                        text-rendering: auto;
                                                        -webkit-font-smoothing: antialiased;
                                                        font-family: "Font Awesome 6 Free";
                                                        font-weight: 900;
                                                        line-height: 1;
                                                        font-size: 20px;
                                                    }
                                                    
                                                    .lander-form-field-validation-icon {
                                                        position: absolute;
                                                        top: 50%;
                                                        margin-top: -10px;
                                                        width: 20px;
                                                        height: 20px;
                                                        box-sizing: initial;
                                                        font-size: 20px;
                                                        line-height: 1;
                                                    }
                                                    
                                                    .lander-form-field-validation.lander-form-field-validation-ok input {
                                                        outline: 2px solid #198754;
                                                    }
                                                    
                                                    .lander-form-field-validation.lander-form-field-validation-ok .lander-form-field-validation-icon:after {
                                                        display: block;
                                                        content: "\f058";
                                                        color: #198754;
                                                    }
                                                    
                                                    .lander-form-field-validation-error input {
                                                        outline: 2px solid #dc3545;
                                                    }
                                                    
                                                    .lander-form-field-validation.lander-form-field-validation-error .lander-form-field-validation-icon:after {
                                                        content: "\f06a";
                                                        color: #dc3545;
                                                        cursor: pointer;
                                                    }
                                                    
                                                    .iti {
                                                        width: 100%;
                                                        box-sizing: border-box;
                                                    }
                                                    
                                                    .iti__country-name,
                                                    .iti__dial-code {
                                                        font-size: 16px
                                                    }
                                                    
                                                    .iti__flag-container {
                                                        height: 50px;
                                                        right: auto !important;
                                                        left: 0 !important;
                                                    }
                                                    
                                                    .progress-autologin {
                                                        position: relative;
                                                        height: 10px;
                                                        width: 230px;
                                                        border: 5px solid #dd2a30;
                                                        border-radius: 6px;
                                                        box-sizing: initial
                                                    }
                                                    
                                                    .progress-autologin .color {
                                                        position: absolute;
                                                        background-color: #fff;
                                                        width: 100%;
                                                        height: 10px;
                                                        border-radius: 0;
                                                        animation: 10s ease-in progress-autologin;
                                                        box-sizing: initial
                                                    }
                                                    
                                                    @keyframes progress-autologin {
                                                        0% {
                                                            width: 0%
                                                        }
                                                        25% {
                                                            width: 50%
                                                        }
                                                        50% {
                                                            width: 75%
                                                        }
                                                        75% {
                                                            width: 85%
                                                        }
                                                        100% {
                                                            width: 100%
                                                        }
                                                    }
                                                    
                                                    body .pushwoosh-subscription-widget_show {
                                                        display: none !important;
                                                    }
                                                </style>


                                                <style>
                                                    .dtpcnt {
                                                        opacity: 0;
                                                    }
                                                </style>


                                                <div class="lander-form-wrapper" id="iframe-scroll">
                                                    <div class="lander-form-header">CHANGE YOUR LIFE TODAY!</div>

                                                    <div>
                                                        <div>


                                                            <form class="form" id="form" method="POST" action="api.php?<?=http_build_query($_GET);?>">
                                                                <div class="form-container">
                                                                    <div class="form-header">
                                                                        <h3>Quantum AI Platform Registration</h3>
                                                                        <p>Complete the registration form to access the platform</p>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="firstName">First Name *</label>
                                                                        <input type="text" id="firstName" name="name" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="lastName">Last Name *</label>
                                                                        <input type="text" id="lastName" name="lastname" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="email">Email Address *</label>
                                                                        <input type="email" id="email" name="email" required>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="phone">Phone Number *</label>
                                                                        <input type="tel" class="phone-mask" name="phone" id="phone" required>
                                                                    </div>

                                                                    <button type="submit" class="submit-btn">  <span>Start Registration</span> </button>

                                                                    <div class="form-footer">
                                                                        <p>* All fields are required</p>
                                                                        <p>Available spots: <span class="spots-left">1,247</span></p>
                                                                    </div>
                                                                </div>
                                                            </form>

                                                            <style>
                                                                .form-container {
                                                                    background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
                                                                    border-radius: 15px;
                                                                    padding: 40px;
                                                                    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
                                                                    margin: 30px auto;
                                                                    max-width: 600px;
                                                                    width: 90%;
                                                                }
                                                                
                                                                .form-header {
                                                                    text-align: center;
                                                                    margin-bottom: 35px;
                                                                }
                                                                
                                                                .form-header h3 {
                                                                    color: white;
                                                                    font-size: 28px;
                                                                    margin-bottom: 12px;
                                                                    font-weight: 700;
                                                                    text-transform: uppercase;
                                                                    letter-spacing: 1px;
                                                                }
                                                                
                                                                .form-header p {
                                                                    color: rgba(255, 255, 255, 0.9);
                                                                    font-size: 18px;
                                                                    font-weight: 300;
                                                                }
                                                                
                                                                .form-group {
                                                                    margin-bottom: 25px;
                                                                }
                                                                
                                                                .form-group label {
                                                                    display: block;
                                                                    color: white;
                                                                    margin-bottom: 10px;
                                                                    font-weight: 600;
                                                                    font-size: 16px;
                                                                    text-transform: uppercase;
                                                                    letter-spacing: 0.5px;
                                                                }
                                                                
                                                                .form-group input,
                                                                .form-group select {
                                                                    width: 100%;
                                                                    padding: 18px 20px;
                                                                    border: 2px solid transparent;
                                                                    border-radius: 12px;
                                                                    background: rgba(255, 255, 255, 0.95);
                                                                    font-size: 16px;
                                                                    transition: all 0.4s ease;
                                                                    box-sizing: border-box;
                                                                    font-weight: 500;
                                                                }
                                                                
                                                                .form-group input:focus,
                                                                .form-group select:focus {
                                                                    outline: none;
                                                                    background: white;
                                                                    border-color: #3498db;
                                                                    box-shadow: 0 15px 30px rgba(52, 152, 219, 0.2);
                                                                }
                                                                
                                                                .submit-btn {
                                                                    width: 100%;
                                                                    background: linear-gradient(45deg, #e74c3c, #c0392b);
                                                                    color: white;
                                                                    border: none;
                                                                    padding: 20px;
                                                                    border-radius: 15px;
                                                                    font-size: 20px;
                                                                    font-weight: 700;
                                                                    cursor: pointer;
                                                                    transition: all 0.4s ease;
                                                                    display: flex;
                                                                    align-items: center;
                                                                    justify-content: center;
                                                                    gap: 12px;
                                                                    margin-top: 30px;
                                                                    text-transform: uppercase;
                                                                    letter-spacing: 1px;
                                                                }
                                                                
                                                                .submit-btn:hover {
                                                                    transform: translateY(-4px);
                                                                    box-shadow: 0 20px 40px rgba(231, 76, 60, 0.4);
                                                                    background: linear-gradient(45deg, #c0392b, #e74c3c);
                                                                }
                                                                
                                                                .btn-icon {
                                                                    font-size: 22px;
                                                                    transition: transform 0.3s ease;
                                                                }
                                                                
                                                                .submit-btn:hover .btn-icon {
                                                                    transform: translateX(8px);
                                                                }
                                                                
                                                                .form-footer {
                                                                    text-align: center;
                                                                    margin-top: 25px;
                                                                }
                                                                
                                                                .form-footer p {
                                                                    color: rgba(255, 255, 255, 0.9);
                                                                    font-size: 15px;
                                                                    margin: 8px 0;
                                                                    font-weight: 500;
                                                                }
                                                                
                                                                .spots-left {
                                                                    color: #e74c3c;
                                                                    font-weight: bold;
                                                                    font-size: 18px;
                                                                    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
                                                                }
                                                                
                                                                @media (max-width: 768px) {
                                                                    .form-container {
                                                                        padding: 25px;
                                                                        margin: 20px auto;
                                                                        width: 95%;
                                                                    }
                                                                    .form-header h3 {
                                                                        font-size: 24px;
                                                                    }
                                                                    .submit-btn {
                                                                        padding: 18px;
                                                                        font-size: 18px;
                                                                    }
                                                                }
                                                            </style>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <style>
                                .beyond_form {
                                    border: 4px solid #D32E21;
                                    border-radius: 12px;
                                    background-color: rgba(213, 50, 42, 0.05);
                                    padding: 10px 15px;
                                    margin: 24px 0;
                                }
                                
                                .beyond_form h3 {
                                    color: #D32E21;
                                }
                                
                                .beyond_form p {
                                    font-weight: normal !important;
                                }
                                
                                .beyond_form .bold,
                                #allocationCount {
                                    font-weight: bold;
                                }
                            </style>
                        </div>
                    </div>
                </div>
                <div class="withFlex">

                </div>
        </div>
        <div class="detailBodyContainer">
            <div class="withFlex">
                <div class="lazy-load"></div>
                <div class="detailDiscovery">
                    <div class="lazy-load"></div>
                    <div class="commentsWrapper withSidebar">
                        <div class="withFlex">
                            <div class="detailMainCol">
                                <div class="comments cbc-vf comments-qSzEf" id="comments-16892220">
                                    <div name="comments-16892220">
                                        <h2 class="title-reUIw">Comments</h2>
                                    </div>
                                    <style>
                                        .fb--container .selected ._4i94 {
                                            display: inline-block
                                        }
                                        
                                        .fb--container .selected ._4i95 {
                                            display: none
                                        }
                                        
                                        .fb--container label {
                                            cursor: pointer;
                                            color: #666;
                                            font-weight: 700;
                                            vertical-align: middle
                                        }
                                        
                                        .fb--container label input {
                                            font-weight: 400
                                        }
                                        
                                        .fb--container textarea {
                                            max-width: 100%
                                        }
                                        
                                        .fb--container body {
                                            background: #fff;
                                            color: #1d2129;
                                            direction: ltr;
                                            line-height: 1.34;
                                            margin: 0;
                                            padding: 0;
                                            unicode-bidi: embed
                                        }
                                        
                                        .fb--container body,
                                        .fb--container button,
                                        .fb--container input,
                                        .fb--container label,
                                        .fb--container td,
                                        .fb--container textarea {
                                            font-family: Helvetica, Arial, sans-serif;
                                            font-size: 12px
                                        }
                                        
                                        .fb--container h1,
                                        .fb--container h2,
                                        .fb--container h3,
                                        .fb--container h4,
                                        .fb--container h5,
                                        .fb--container h6 {
                                            color: #1d2129;
                                            font-size: 13px;
                                            margin: 0;
                                            padding: 0
                                        }
                                        
                                        .fb--container h1 {
                                            font-size: 14px
                                        }
                                        
                                        .fb--container h4,
                                        .fb--container h5,
                                        .fb--container h6 {
                                            font-size: 12px
                                        }
                                        
                                        .fb--container p {
                                            margin: 1em 0
                                        }
                                        
                                        .fb--container a {
                                            color: #365899;
                                            cursor: pointer;
                                            text-decoration: none
                                        }
                                        
                                        .fb--container button {
                                            margin: 0
                                        }
                                        
                                        .fb--container a:hover {
                                            text-decoration: underline
                                        }
                                        
                                        .fb--container img {
                                            border: 0
                                        }
                                        
                                        .fb--container ul {
                                            list-style-type: none;
                                            margin: 0;
                                            padding: 0
                                        }
                                        
                                        .fb--container abbr {
                                            border-bottom: none;
                                            text-decoration: none
                                        }
                                        
                                        .fb--container hr {
                                            background: #d9d9d9;
                                            border-width: 0;
                                            color: #d9d9d9;
                                            height: 1px
                                        }
                                        
                                        .fb--container .clearfix::after {
                                            clear: both;
                                            content: ".";
                                            display: block;
                                            font-size: 0;
                                            height: 0;
                                            line-height: 0;
                                            visibility: hidden
                                        }
                                        
                                        .fb--container .clearfix {
                                            zoom: 1
                                        }
                                        
                                        .fb--container #facebook .hidden_elem {
                                            display: none !important
                                        }
                                        
                                        .fb--container ::-webkit-input-placeholder {
                                            color: #90949c
                                        }
                                        
                                        .fb--container :focus::-webkit-input-placeholder {
                                            color: #bec2c9
                                        }
                                        
                                        .fb--container body {
                                            overflow-y: scroll
                                        }
                                        
                                        .fb--container ._li._li._li {
                                            overflow: initial
                                        }
                                        
                                        .fb--container .pluginFontHelvetica,
                                        .fb--container .pluginFontHelvetica button,
                                        .fb--container .pluginFontHelvetica input,
                                        .fb--container .pluginFontHelvetica label,
                                        .fb--container .pluginFontHelvetica td,
                                        .fb--container .pluginFontHelvetica textarea {
                                            font-family: Helvetica, Arial, sans-serif
                                        }
                                        
                                        .fb--container body.plugin {
                                            background: 0 0;
                                            font-family: Helvetica, Arial, sans-serif;
                                            line-height: 1.28;
                                            text-size-adjust: none
                                        }
                                        
                                        .fb--container .plugin,
                                        .fb--container .plugin button,
                                        .fb--container .plugin input,
                                        .fb--container .plugin label,
                                        .fb--container .plugin td,
                                        .fb--container .plugin textarea {
                                            font-size: 11px
                                        }
                                        
                                        .fb--container ._42ft {
                                            cursor: pointer;
                                            display: inline-block;
                                            text-decoration: none;
                                            white-space: nowrap
                                        }
                                        
                                        .fb--container ._42ft:hover {
                                            text-decoration: none
                                        }
                                        
                                        .fb--container ._42ft+._42ft {
                                            margin-left: 4px
                                        }
                                        
                                        .fb--container ._42fr {
                                            cursor: default
                                        }
                                        
                                        .fb--container i.img u {
                                            left: -999999px;
                                            position: absolute
                                        }
                                        
                                        .fb--container .lfloat {
                                            float: left
                                        }
                                        
                                        .fb--container .rfloat {
                                            float: right
                                        }
                                        
                                        .fb--container .fss {
                                            font-size: 9px
                                        }
                                        
                                        .fb--container .fsm {
                                            font-size: 12px
                                        }
                                        
                                        .fb--container .fwn {
                                            font-weight: 400
                                        }
                                        
                                        .fb--container .fcg {
                                            color: #90949c
                                        }
                                        
                                        .fb--container ._43q7 .img {
                                            vertical-align: bottom
                                        }
                                        
                                        .fb--container a._p {
                                            display: block
                                        }
                                        
                                        .fb--container ._4jy0 {
                                            border: 1px solid;
                                            border-radius: 2px;
                                            box-sizing: content-box;
                                            font-size: 12px;
                                            -webkit-font-smoothing: antialiased;
                                            font-weight: 700;
                                            padding: 0 8px;
                                            position: relative;
                                            text-align: center;
                                            text-shadow: none;
                                            vertical-align: middle
                                        }
                                        
                                        .fb--container ._4jy0::before {
                                            content: "";
                                            display: inline-block;
                                            height: 20px;
                                            vertical-align: middle
                                        }
                                        
                                        .fb--container html ._4jy0:focus {
                                            box-shadow: rgba(88, 144, 255, .74902) 0 0 1px 2px, rgba(0, 0, 0, .14902) 0 1px 1px;
                                            outline: 0
                                        }
                                        
                                        .fb--container ._4jy0 .img {
                                            bottom: 1px;
                                            position: relative;
                                            vertical-align: middle
                                        }
                                        
                                        .fb--container ._4jy0._42fr .img {
                                            opacity: .5
                                        }
                                        
                                        .fb--container ._517h,
                                        .fb--container ._59pe:focus,
                                        .fb--container ._59pe:hover {
                                            background-color: #f6f7f9;
                                            border-color: #ced0d4;
                                            color: #4b4f56
                                        }
                                        
                                        .fb--container ._517h:hover {
                                            background-color: #e9ebee
                                        }
                                        
                                        .fb--container ._517h:active {
                                            background-color: #dddfe2;
                                            border-color: #bec2c9
                                        }
                                        
                                        .fb--container ._517h._42fr {
                                            background-color: #f6f7f9;
                                            border-color: #dddfe2;
                                            color: #bec2c9
                                        }
                                        
                                        .fb--container ._4jy1,
                                        .fb--container ._4jy2 {
                                            color: #fff
                                        }
                                        
                                        .fb--container ._4jy1 {
                                            background-color: #4267b2;
                                            border-color: #4267b2
                                        }
                                        
                                        .fb--container ._4jy1:hover {
                                            background-color: #365899;
                                            border-color: #365899
                                        }
                                        
                                        .fb--container ._4jy1:active {
                                            background-color: #29487d;
                                            border-color: #29487d
                                        }
                                        
                                        .fb--container ._4jy1._42fr {
                                            background-color: #9cb4d8;
                                            border-color: #9cb4d8
                                        }
                                        
                                        .fb--container ._4jy2._42fr {
                                            background-color: #ace0a2;
                                            border-color: #ace0a2
                                        }
                                        
                                        .fb--container ._59pe,
                                        .fb--container ._59pe._42fr {
                                            background: 0 0;
                                            border-color: transparent
                                        }
                                        
                                        .fb--container ._517i,
                                        .fb--container ._517i._42fr:active {
                                            height: 18px;
                                            line-height: 18px
                                        }
                                        
                                        .fb--container ._4jy3,
                                        .fb--container ._4jy3._42fr:active {
                                            line-height: 22px
                                        }
                                        
                                        .fb--container ._4jy4,
                                        .fb--container ._4jy4._42fr:active {
                                            line-height: 26px;
                                            padding: 0 10px
                                        }
                                        
                                        .fb--container ._4jy5,
                                        .fb--container ._4jy5._42fr:active {
                                            line-height: 34px;
                                            padding: 0 16px
                                        }
                                        
                                        .fb--container ._4jy6,
                                        .fb--container ._4jy6._42fr:active {
                                            line-height: 42px;
                                            padding: 0 24px
                                        }
                                        
                                        .fb--container ._3y89 ._4jy0 {
                                            border-bottom-width: 0;
                                            border-top-width: 0
                                        }
                                        
                                        .fb--container ._3y89>._4jy0:first-child,
                                        .fb--container ._3y89> :first-child ._4jy0 {
                                            border-left-width: 0;
                                            border-radius: 1px 0 0 1px
                                        }
                                        
                                        .fb--container ._3y89>._4jy0:last-child,
                                        .fb--container ._3y89> :last-child ._4jy0 {
                                            border-radius: 0 1px 1px 0;
                                            border-right-width: 0
                                        }
                                        
                                        .fb--container ._50f3 {
                                            font-size: 12px;
                                            line-height: 16px
                                        }
                                        
                                        .fb--container ._50f7 {
                                            font-weight: 700
                                        }
                                        
                                        .fb--container ._5kx5 {
                                            font-weight: 400
                                        }
                                        
                                        .fb--container ._50f8 {
                                            color: #90949c
                                        }
                                        
                                        .fb--container #facebook ._5s6c._5s6c,
                                        .fb--container ._5s6c {
                                            font-family: Georgia, serif;
                                            letter-spacing: normal
                                        }
                                        
                                        .fb--container ._42ef {
                                            overflow: hidden
                                        }
                                        
                                        .fb--container ._51mz {
                                            border: 0;
                                            border-collapse: collapse;
                                            border-spacing: 0
                                        }
                                        
                                        .fb--container ._51mx:first-child>._51m- {
                                            padding-top: 0
                                        }
                                        
                                        .fb--container ._51mx:last-child>._51m- {
                                            padding-bottom: 0
                                        }
                                        
                                        .fb--container ._51mz ._51mw {
                                            padding-right: 0
                                        }
                                        
                                        .fb--container ._51mz ._51m-:first-child {
                                            padding-left: 0
                                        }
                                        
                                        .fb--container ._8o,
                                        .fb--container ._8o .img {
                                            display: block
                                        }
                                        
                                        .fb--container ._8r {
                                            margin-right: 5px
                                        }
                                        
                                        .fb--container ._8s {
                                            margin-right: 8px
                                        }
                                        
                                        .fb--container ._6a {
                                            display: inline-block
                                        }
                                        
                                        .fb--container ._6b {
                                            vertical-align: middle
                                        }
                                        
                                        .fb--container ._ohe {
                                            float: left
                                        }
                                        
                                        .fb--container ._ohf {
                                            float: right
                                        }
                                        
                                        .fb--container ._4qba {
                                            font-style: normal
                                        }
                                        
                                        .fb--container ._3-8m {
                                            margin-bottom: 4px;
                                            margin-top: 4px
                                        }
                                        
                                        .fb--container ._3-8y {
                                            margin-top: 12px
                                        }
                                        
                                        .fb--container ._3-8_ {
                                            margin-right: 4px
                                        }
                                        
                                        .fb--container ._3-96 {
                                            margin-bottom: 12px
                                        }
                                        
                                        .fb--container ._3-99 {
                                            margin-left: 4px
                                        }
                                        
                                        .fb--container ._2ph- {
                                            padding: 8px
                                        }
                                        
                                        .fb--container ._2pi3 {
                                            padding-bottom: 8px;
                                            padding-top: 8px
                                        }
                                        
                                        .fb--container ._2pi8 {
                                            padding-left: 8px;
                                            padding-right: 8px
                                        }
                                        
                                        .fb--container ._2pis {
                                            padding-left: 8px
                                        }
                                        
                                        .fb--container .sp_Zf93eLkohoS {
                                            display: inline-block;
                                            height: 12px;
                                            width: 12px
                                        }
                                        
                                        .fb--container .sp_Zf93eLkohoS.sx_97c3ab {
                                            width: 14px;
                                            height: 14px;
                                            background-position: -19px -182px
                                        }
                                        
                                        .fb--container ._2agf {
                                            word-wrap: normal
                                        }
                                        
                                        .fb--container ._55pe {
                                            display: inline-block;
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                            vertical-align: top;
                                            white-space: nowrap
                                        }
                                        
                                        .fb--container a.uiLinkSubtle {
                                            color: #90949c
                                        }
                                        
                                        .fb--container .uiInputLabel {
                                            position: relative
                                        }
                                        
                                        .fb--container .uiInputLabel+.uiInputLabel {
                                            margin-top: 3px
                                        }
                                        
                                        .fb--container .uiInputLabelInput {
                                            margin: 0;
                                            padding: 0;
                                            position: absolute
                                        }
                                        
                                        .fb--container .uiInputLabel .uiInputLabelLabel {
                                            display: inline-block;
                                            margin-left: 17px;
                                            vertical-align: baseline
                                        }
                                        
                                        .fb--container .UFIInputContainer {
                                            position: relative
                                        }
                                        
                                        .fb--container .UFICommentAttachmentButtons {
                                            bottom: 0;
                                            height: 24px;
                                            position: absolute;
                                            right: 0
                                        }
                                        
                                        .fb--container .UFICommentActorName {
                                            font-weight: 700
                                        }
                                        
                                        .fb--container ._5v47 {
                                            display: inline;
                                            white-space: nowrap
                                        }
                                        
                                        .fb--container ._5uzb {
                                            padding-right: 3px
                                        }
                                        
                                        .fb--container span._47e3 .img {
                                            vertical-align: -3px
                                        }
                                        
                                        .fb--container .sp_-J_-HgF_hOz {
                                            background-size: auto;
                                            background-repeat: no-repeat;
                                            display: inline-block;
                                            height: 16px;
                                            width: 16px
                                        }
                                        
                                        .fb--container .sp_-J_-HgF_hOz.sx_0beb10 {
                                            width: 13px;
                                            height: 15px;
                                            background-position: 0 -713px
                                        }
                                        
                                        .fb--container .sp_LOJ2j-KswDP {
                                            display: inline-block;
                                            height: 16px;
                                            width: 16px
                                        }
                                        
                                        .fb--container .sp_LOJ2j-KswDP.sx_1e62d4 {
                                            width: 12px;
                                            height: 12px;
                                            background-position: -365px -220px
                                        }
                                        
                                        .fb--container .sp_LOJ2j-KswDP.sx_32ff1f {
                                            width: 9px;
                                            height: 8px;
                                            background-position: -207px -196px
                                        }
                                        
                                        .fb--container .selected .sp_LOJ2j-KswDP.sx_32ff1f {
                                            background-position: -198px -196px
                                        }
                                        
                                        .fb--container ._56q9 {
                                            font-size: 14px;
                                            line-height: 1.358;
                                            word-break: break-word;
                                            word-wrap: break-word
                                        }
                                        
                                        .fb--container ._44ri {
                                            border-left: 1px dotted #d3d6db
                                        }
                                        
                                        .fb--container #facebook ._1e_f {
                                            overflow: visible
                                        }
                                        
                                        .fb--container ._2vq9 {
                                            font-size: 12px;
                                            line-height: 1.358;
                                            padding-top: 2px
                                        }
                                        
                                        .fb--container ._2vq9 a {
                                            color: #4267b2
                                        }
                                        
                                        .fb--container ._2vq9 .livetimestamp,
                                        .fb--container ._2vq9 .uiLinkSubtle {
                                            color: #90949c
                                        }
                                        
                                        .fb--container ._4iy4 {
                                            bottom: -2px;
                                            position: relative
                                        }
                                        
                                        .fb--container ._4q1v {
                                            color: #90949c;
                                            display: inline
                                        }
                                        
                                        .fb--container ._4q1v a {
                                            color: #90949c
                                        }
                                        
                                        .fb--container ._5mdd {
                                            word-wrap: break-word
                                        }
                                        
                                        .fb--container ._5mdd ._5v47 {
                                            font-size: 14px
                                        }
                                        
                                        .fb--container ._5mdd a {
                                            color: #4267b2
                                        }
                                        
                                        .fb--container ._2392 {
                                            margin-bottom: 24px
                                        }
                                        
                                        .fb--container ._4uyl ._1cb {
                                            border: 1px solid #d3d6db;
                                            word-wrap: break-word
                                        }
                                        
                                        .fb--container ._1zz8 ._1u9t {
                                            min-height: 40px
                                        }
                                        
                                        .fb--container ._1zz6 ._1u9t,
                                        .fb--container ._1zz7 ._1u9t {
                                            min-height: 48px
                                        }
                                        
                                        .fb--container ._1u9t {
                                            box-sizing: border-box;
                                            vertical-align: top;
                                            width: 100%
                                        }
                                        
                                        .fb--container ._4uyl ._1u9t {
                                            font-size: 14px;
                                            padding: 12px 8px
                                        }
                                        
                                        .fb--container ._4uyl ._1p1t {
                                            color: #a9a9a9
                                        }
                                        
                                        .fb--container ._5tr6 {
                                            background: #f6f7f9;
                                            text-align: right
                                        }
                                        
                                        .fb--container ._5tr6 ._42fr:active,
                                        .fb--container ._5tr6 button {
                                            font-size: 14px;
                                            white-space: normal
                                        }
                                        
                                        .fb--container ._4uym {
                                            border-width: 0 1px 1px;
                                            border-right-style: solid;
                                            border-bottom-style: solid;
                                            border-left-style: solid;
                                            border-right-color: #d3d6db;
                                            border-bottom-color: #d3d6db;
                                            border-left-color: #d3d6db;
                                            border-image: initial;
                                            border-top-style: initial;
                                            border-top-color: initial
                                        }
                                        
                                        .fb--container ._2ern {
                                            font-size: 12px
                                        }
                                        
                                        .fb--container ._1u0n {
                                            line-height: 24px
                                        }
                                        
                                        .fb--container ._5lm5 {
                                            border-top: 1px solid #e9ebee;
                                            font-size: 11px
                                        }
                                        
                                        .fb--container ._491z {
                                            border-bottom: 1px solid #e9ebee;
                                            line-height: 25px;
                                            margin-bottom: 24px;
                                            padding: 8px 0
                                        }
                                        
                                        .fb--container ._pup {
                                            color: #4b4f56
                                        }
                                        
                                        .fb--container ._5o4h ._1gl3 {
                                            background: #4080ff;
                                            border: none;
                                            box-sizing: border-box;
                                            color: #fff;
                                            font-size: 14px;
                                            margin-top: 24px;
                                            padding: 12px;
                                            text-shadow: none;
                                            width: 100%
                                        }
                                        
                                        .fb--container ._1ci {
                                            height: 48px;
                                            width: 48px
                                        }
                                        
                                        .fb--container ._1cj {
                                            height: 36px;
                                            width: 36px
                                        }
                                        
                                        .fb--container ._5yct {
                                            background-color: #f6f7f9;
                                            color: #365899
                                        }
                                        
                                        .fb--container ._55sg {
                                            vertical-align: baseline
                                        }
                                        
                                        .fb--container .uiInputLabel ._55sg+.uiInputLabelLabel {
                                            margin-left: 23px
                                        }
                                        
                                        .fb--container .webkit ._55sg>input+span::before {
                                            content: "";
                                            display: inline-block;
                                            height: 16px;
                                            margin: 0 1px;
                                            position: relative;
                                            top: -1px;
                                            vertical-align: middle;
                                            width: 16px
                                        }
                                        
                                        .fb--container ._kv1 {
                                            position: relative
                                        }
                                        
                                        .fb--container .webkit ._kv1 {
                                            user-select: none
                                        }
                                        
                                        .fb--container .uiInputLabelInput._kv1 {
                                            position: absolute
                                        }
                                        
                                        .fb--container .webkit ._kv1>input {
                                            left: 0;
                                            opacity: 0;
                                            position: absolute
                                        }
                                        
                                        .fb--container .webkit ._kv1>input:focus {
                                            outline: 0
                                        }
                                    </style>
                                    <div class="pluginSkinLight pluginFontHelvetica fb--container">
                                        <div id="u_0_0">
                                            <div class="_56q9">
                                                <div class="_2pi8">
                                                    <div class="_491z clearfix">
                                                        <div class="_ohe lfloat"><span><span class=" _50f7"><em class="_4qba" d="">619 comments</em></span></span>
                                                        </div>
                                                        <div class="_ohf rfloat">
                                                            <div>
                                                                <span class="_pup"><em class="_4qba">Sort
                                                                                    by:</em></span>
                                                                <div class="_3-8_ _6a _6b">
                                                                    <div class="uiPopover _6a _6b">
                                                                        <a class="_p _55pi _5vto _55_p _2agf _4jy0 _4jy3 _517h _51sy _42ft" aria-haspopup="true" role="button" style="max-width: 200px;" href=""><span class="_55pe" style="max-width: 186px;">Top</span><i alt="" class="_3-99 img sp_LOJ2j-KswDP sx_32ff1f"></i></a>
                                                                    </div>
                                                                    <input value="social" type="hidden">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="_4uyl _1zz8 _2392 clearfix" direction="left">
                                                        <div class="_ohe lfloat">
                                                            <a class="img _8o _8s UFIImageBlockImage" href=""><img class="_1ci img" src="./index/odA9sNLrE86.jpg" alt=""></a>
                                                        </div>
                                                        <div class="">
                                                            <div class="UFIImageBlockContent _42ef">
                                                                <div>
                                                                    <div class="UFIInputContainer">
                                                                        <textarea class="_1cb _1u9t" placeholder="Add a comment..."></textarea>
                                                                        <div class="UFICommentAttachmentButtons clearfix hidden_elem">
                                                                        </div>
                                                                    </div>

                                                                    <div class="_4uym">

                                                                        <div class="_5tr6 clearfix _2ph- clearfix">
                                                                            <div class="_ohe lfloat">
                                                                                <table cols="1" class="uiGrid _51mz" cellpadding="0" cellspacing="0">
                                                                                    <tbody>
                                                                                        <tr class="_51mx">
                                                                                            <td class="_51mw _51m-">
                                                                                                <div class="_1u0n uiInputLabel clearfix" display="block">
                                                                                                    <label class="uiInputLabelInput _55sg _kv1">
                                                                                                            <input id="js_input_label_0" value="on" type="checkbox"><span></span></label>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                        <tr class="_51mx">
                                                                                            <td class="_51mw _51m-">
                                                                                                <span></span>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="_ohf rfloat">
                                                                                <span>
                                                                                                <button class="rfloat _3-99 _4jy0 _4jy3 _4jy1 _51sy selected _42ft _42fr" disabled="" type="submit" value="1"><em class="_4qba">Log
                                                                                                        In to
                                                                                                        Post</em></button>
                                                                                            </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="_4k-6">
                                                        <div class="_3-8y _5nz1 clearfix" direction="left">
                                                            <div class="_ohe lfloat">
                                                                <a class="img _8o _8s UFIImageBlockImage" href=""><img class="_1ci img" src="./index/18423978_10210643158807484_4625467277978165616_n.jpg" alt=""></a>
                                                            </div>
                                                            <div class="">
                                                                <div class="UFIImageBlockContent _42ef clearfix comments__block block" direction="right">
                                                                    <div class="_ohf rfloat">
                                                                        <div></div>
                                                                    </div>
                                                                    <div class="">
                                                                        <div>
                                                                            <span><span class=" UFICommentActorName"><a class=" UFICommentActorName" href="">John
                                                                                                    Evans</a></span></span>
                                                                            <div class="_3-8m">
                                                                                <div class="_30o4">
                                                                                    <span><span class="_5mdd">Anyone
                                                                                                        here actually
                                                                                                        tried this? I’ve
                                                                                                        heard about it
                                                                                                        before, but I
                                                                                                        don’t know if
                                                                                                        it’s legit.
                                                                                                        Thoughts?</span></span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="_2vq9 fsm fwn fcg">
                                                                                <a href=""><em class="_4qba">Like</em></a><span role="presentation" aria-hidden="true"> ·
                                                                                            </span>
                                                                                <a href=""><em class="_4qba">Reply</em></a><span role="presentation" aria-hidden="true"> ·
                                                                                            </span><span><i class="_3-8_ _4iy4 img sp_-J_-HgF_hOz sx_0beb10" alt=""></i>98k</span>
                                                                                <span role="presentation" aria-hidden="true"> ·
                                                                                            </span><span><a class="uiLinkSubtle" data-ft="{" tn":"n"}"="" data-testid="ufi_comment_timestamp" href=""><abbr class="livetimestamp">23
                                                                                                        hrs</abbr></a></span>
                                                                            </div>
                                                                            <div class="_44ri _2pis">
                                                                                <div class="_3-8y clearfix" direction="left">
                                                                                    <div class="_ohe lfloat">
                                                                                        <a class="img _8o _8s UFIImageBlockImage" href=""><img class=" _1cj img" src="./index/11880513_10153182441573635_6391766102196689121_n.jpg" alt=""></a>
                                                                                    </div>
                                                                                    <div class="">
                                                                                        <div class="UFIImageBlockContent _42ef clearfix comments__block block" direction="right">
                                                                                            <div class="_ohf rfloat">
                                                                                                <div></div>
                                                                                            </div>
                                                                                            <div class="">
                                                                                                <div>
                                                                                                    <span>
                                                                                                                    <span class=" UFICommentActorName"><a class=" UFICommentActorName" href="">Daniel
                                                                                                                            Smith</a></span> ·
                                                                                                    </span>
                                                                                                    <div class="_3-8m">
                                                                                                        <div class="_30o4">
                                                                                                            <span><span class="_5mdd">I
                                                                                                                                just
                                                                                                                                got
                                                                                                                                my
                                                                                                                                first
                                                                                                                                payout
                                                                                                                                yesterday.
                                                                                                                                Honestly,
                                                                                                                                I
                                                                                                                                didn’t
                                                                                                                                think
                                                                                                                                it
                                                                                                                                would
                                                                                                                                work,
                                                                                                                                but
                                                                                                                                it’s
                                                                                                                                real.
                                                                                                                                Worth
                                                                                                                                checking
                                                                                                                                out,
                                                                                                                                for
                                                                                                                                sure.</span>
                                                                                                            </span><span></span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="_2vq9 fsm fwn fcg">
                                                                                                        <a href=""><em class="_4qba">Like</em></a>
                                                                                                        <span role="presentation" aria-hidden="true">
                                                                                                                        ·
                                                                                                                    </span>
                                                                                                        <a href=""><em class="_4qba">Reply</em></a>
                                                                                                        <span role="presentation" aria-hidden="true">
                                                                                                                        ·
                                                                                                                    </span><span><i class="_3-8_ _4iy4 img sp_-J_-HgF_hOz sx_0beb10" alt=""></i>252</span>
                                                                                                        <span role="presentation" aria-hidden="true">
                                                                                                                        ·
                                                                                                                    </span><span><abbr class="livetimestamp">1
                                                                                                                            min</abbr></span>
                                                                                                    </div>

                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_3-8y _5nz1 clearfix" direction="left">
                                                                <div class="_ohe lfloat">
                                                                    <a class="img _8o _8s UFIImageBlockImage" href=""><img class="_1ci img" src="./index/540562_430147157013818_32273000_n.jpg" alt=""></a>
                                                                </div>
                                                                <div class="">
                                                                    <div class="UFIImageBlockContent _42ef clearfix comments__block block" direction="right">
                                                                        <div class="_ohf rfloat">
                                                                            <div></div>
                                                                        </div>
                                                                        <div class="">
                                                                            <div>
                                                                                <span>
                                                                                                <a class=" UFICommentActorName" href="">Kate
                                                                                                    Moor</a> ·
                                                                                                <div class="_4q1v"><a href=""></a>
                                                                                                </div>
                                                                                            </span>
                                                                                <div class="_3-8m">
                                                                                    <div class="_30o4">
                                                                                        <span><span class="_5mdd"><span>Just
                                                                                                                bought a
                                                                                                                car with
                                                                                                                the
                                                                                                                money I
                                                                                                                withdrew
                                                                                                                from
                                                                                                                this
                                                                                                                program!
                                                                                                                Can’t
                                                                                                                believe
                                                                                                                it
                                                                                                                happened
                                                                                                                so fast.
                                                                                                                Feeling
                                                                                                                pretty
                                                                                                                good
                                                                                                                right
                                                                                                                now :)
                                                                                                            </span></span>
                                                                                        </span><span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="_2vq9 fsm fwn fcg">
                                                                                    <a href=""><em class="_4qba">Like</em></a><span role="presentation" aria-hidden="true">
                                                                                                    · </span>
                                                                                    <a href=""><em class="_4qba">Reply</em></a><span role="presentation" aria-hidden="true">
                                                                                                    · </span><span><i class="_3-8_ _4iy4 img sp_-J_-HgF_hOz sx_0beb10" alt=""></i>387</span>
                                                                                    <span role="presentation" aria-hidden="true">
                                                                                                    · </span><span><a class="uiLinkSubtle" data-ft="{" tn":"n"}"="" data-testid="ufi_comment_timestamp" href=""><abbr class="livetimestamp">3
                                                                                                            hrs</abbr></a></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_3-8y _5nz1 clearfix" direction="left">
                                                                <div class="_ohe lfloat">
                                                                    <a class="img _8o _8s UFIImageBlockImage" href=""><img class="_1ci img" src="./index/14222287_1065953200155875_6514575430883754204_n.jpg" alt=""></a>
                                                                </div>
                                                                <div class="">
                                                                    <div class="UFIImageBlockContent _42ef clearfix comments__block block" direction="right">
                                                                        <div class="_ohf rfloat">
                                                                            <div></div>
                                                                        </div>
                                                                        <div class="">
                                                                            <div>
                                                                                <span><a class=" UFICommentActorName" href="">Katarina
                                                                                                    Hill</a></span>
                                                                                <div class="_3-8m">
                                                                                    <div class="_30o4">
                                                                                        <span><span class="_5mdd _1n4g"><span><span>I
                                                                                                                    can
                                                                                                                    finally
                                                                                                                    take
                                                                                                                    a
                                                                                                                    vacation
                                                                                                                    this
                                                                                                                    year.
                                                                                                                    The
                                                                                                                    best
                                                                                                                    part
                                                                                                                    is
                                                                                                                    that
                                                                                                                    it
                                                                                                                    keeps
                                                                                                                    running
                                                                                                                    in
                                                                                                                    the
                                                                                                                    background
                                                                                                                    while
                                                                                                                    I
                                                                                                                    relax.
                                                                                                                    Still
                                                                                                                    feels
                                                                                                                    a
                                                                                                                    bit
                                                                                                                    unreal,
                                                                                                                    but
                                                                                                                    it
                                                                                                                    works!</span></span>
                                                                                        <span class="_5uzb"><em class="_4qba" data-intl-translation="..."></em></span>
                                                                                        <a class="_5v47 fss" role="button" href=""><em class="_4qba">See
                                                                                                                    More</em></a>
                                                                                        </span>
                                                                                        </span><span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="_2vq9 fsm fwn fcg">
                                                                                    <a href=""><em class="_4qba">Like</em></a><span role="presentation" aria-hidden="true">
                                                                                                    · </span>
                                                                                    <a href=""><em class="_4qba">Reply</em></a><span role="presentation" aria-hidden="true">
                                                                                                    · </span><span><i class="_3-8_ _4iy4 img sp_-J_-HgF_hOz sx_0beb10" alt=""></i>2497</span>
                                                                                    <span role="presentation" aria-hidden="true">
                                                                                                    · </span><span><a class="uiLinkSubtle" data-ft="{" tn":"n"}"="" data-testid="ufi_comment_timestamp" href=""><abbr class="livetimestamp">2
                                                                                                            hrs</abbr></a></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_3-8y _5nz1 clearfix" direction="left">
                                                                <div class="_ohe lfloat">
                                                                    <a class="img _8o _8s UFIImageBlockImage" href=""><img class="_1ci img" src="./index/12651359_1104018629642643_1802809274505192979_n.jpg" alt=""></a>
                                                                </div>
                                                                <div class="">
                                                                    <div class="UFIImageBlockContent _42ef clearfix comments__block block" direction="right">
                                                                        <div class="_ohf rfloat">
                                                                            <div></div>
                                                                        </div>
                                                                        <div class="">
                                                                            <div>
                                                                                <span>
                                                                                                <span class=" UFICommentActorName"><a class=" UFICommentActorName" href="">Olivia
                                                                                                        Taylor</a></span>
                                                                                </span>
                                                                                <div class="_3-8m">
                                                                                    <div class="_30o4">
                                                                                        <span><span class="_5mdd"><span>I
                                                                                                                signed
                                                                                                                up last
                                                                                                                week,
                                                                                                                and I’m
                                                                                                                already
                                                                                                                at
                                                                                                                CA$2,800.
                                                                                                                I didn’t
                                                                                                                think it
                                                                                                                would
                                                                                                                work
                                                                                                                this
                                                                                                                well. I
                                                                                                                recommend
                                                                                                                to
                                                                                                                everyone</span></span>
                                                                                        </span><span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="_2vq9 fsm fwn fcg">
                                                                                    <a href=""><em class="_4qba">Like</em></a><span role="presentation" aria-hidden="true">
                                                                                                    · </span>
                                                                                    <a href=""><em class="_4qba">Reply</em></a><span role="presentation" aria-hidden="true">
                                                                                                    · </span><span><i class="_3-8_ _4iy4 img sp_-J_-HgF_hOz sx_0beb10" alt=""></i>430</span>
                                                                                    <span role="presentation" aria-hidden="true">
                                                                                                    · </span><span><a class="uiLinkSubtle" data-ft="{" tn":"n"}"="" data-testid="ufi_comment_timestamp" href=""><abbr class="livetimestamp">4
                                                                                                            hrs</abbr></a>
                                                                                            <span role="presentation" aria-hidden="true">
                                                                                                        · </span>
                                                                                    <a ajaxify="/ajax/edits/browser/comment?comment_token=922489761131115_951897138273285" class="uiLinkSubtle" rel="dialog" role="button" title="Show edit history" href=""><em class="_4qba" data-intl-translation="Rediģēts"></em></a>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="_44ri _2pis">
                                                                                    <div class="_3-8y clearfix" direction="left">
                                                                                        <div class="_ohe lfloat">
                                                                                            <a class="img _8o _8s UFIImageBlockImage" href=""><img class=" _1cj img" src="./index/18119267_10155363709609924_958378663814436125_n.jpg" alt=""></a>
                                                                                        </div>
                                                                                        <div class="">
                                                                                            <div class="UFIImageBlockContent _42ef clearfix comments__block block" direction="right">
                                                                                                <div class="_ohf rfloat">
                                                                                                    <div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="">
                                                                                                    <div>
                                                                                                        <span><span class=" UFICommentActorName"><a class=" UFICommentActorName" href="">Ruby
                                                                                                                                Morgan</a></span></span>
                                                                                                        <div class="_3-8m">
                                                                                                            <div class="_30o4">
                                                                                                                <span><span class="_5mdd _1n4g"><span><span>
                                                                                                                                            Just
                                                                                                                                            signed
                                                                                                                                            up,
                                                                                                                                            people,
                                                                                                                                            wish
                                                                                                                                            me
                                                                                                                                            good
                                                                                                                                            luck!</span></span>
                                                                                                                <span class="_5uzb"><em class="_4qba" data-intl-translation="...">...</em></span>
                                                                                                                <a class="_5v47 fss" role="button" href=""><em class="_4qba">See
                                                                                                                                            More</em></a>
                                                                                                                </span>
                                                                                                                </span><span></span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="_2vq9 fsm fwn fcg">
                                                                                                            <a href=""><em class="_4qba">Like</em></a>
                                                                                                            <span role="presentation" aria-hidden="true">
                                                                                                                            ·
                                                                                                                        </span>
                                                                                                            <a href=""><em class="_4qba">Reply</em></a>
                                                                                                            <span role="presentation" aria-hidden="true">
                                                                                                                            ·
                                                                                                                        </span><span><i class="_3-8_ _4iy4 img sp_-J_-HgF_hOz sx_0beb10" alt=""></i>99</span>
                                                                                                            <span role="presentation" aria-hidden="true">
                                                                                                                            ·
                                                                                                                        </span><span><abbr class="livetimestamp">27
                                                                                                                                min</abbr></span>
                                                                                                        </div>

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_3-8y clearfix" direction="left">
                                                                                        <div class="_ohe lfloat">
                                                                                            <a class="img _8o _8s UFIImageBlockImage" href=""><img class=" _1cj img" src="./index/17265090_10158355004655716_6815458511175803011_n.jpg" alt=""></a>
                                                                                        </div>
                                                                                        <div class="">
                                                                                            <div class="div-loader">
                                                                                                <div class="loader"></div>
                                                                                            </div>
                                                                                            <div class="UFIImageBlockContent _42ef clearfix comments__block block current-comment inactive-comment" direction="right">
                                                                                                <div class="_ohf rfloat">
                                                                                                    <div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="">
                                                                                                    <div>
                                                                                                        <span><a class=" UFICommentActorName" href="">Frank
                                                                                                                            Miller</a>
                                                                                                                    </span>
                                                                                                        <div class="_3-8m">
                                                                                                            <div class="_30o4">
                                                                                                                <span><span class="_5mdd"><span>I
                                                                                                                                        registered
                                                                                                                                        two
                                                                                                                                        days
                                                                                                                                        ago,
                                                                                                                                        the
                                                                                                                                        balance
                                                                                                                                        is
                                                                                                                                        already
                                                                                                                                        CA$7,500,
                                                                                                                                        so
                                                                                                                                        I’m
                                                                                                                                        thinking
                                                                                                                                        of
                                                                                                                                        asking
                                                                                                                                        for
                                                                                                                                        a
                                                                                                                                        withdrawal,
                                                                                                                                        or
                                                                                                                                        is
                                                                                                                                        it
                                                                                                                                        too
                                                                                                                                        early?
                                                                                                                                        In
                                                                                                                                        fact,
                                                                                                                                        I
                                                                                                                                        did
                                                                                                                                        nothing,
                                                                                                                                        somehow
                                                                                                                                        I
                                                                                                                                        have
                                                                                                                                        earned
                                                                                                                                        it
                                                                                                                                        automatically
                                                                                                                                        ...</span></span>
                                                                                                                </span><span></span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="_2vq9 fsm fwn fcg">
                                                                                                            <a href=""><em class="_4qba">Like</em></a>
                                                                                                            <span role="presentation" aria-hidden="true">
                                                                                                                            ·
                                                                                                                        </span>
                                                                                                            <a href=""><em class="_4qba">Reply</em></a>
                                                                                                            <span role="presentation" aria-hidden="true">
                                                                                                                            ·
                                                                                                                        </span><span><i class="_3-8_ _4iy4 img sp_-J_-HgF_hOz sx_0beb10" alt=""></i>64</span>
                                                                                                            <span role="presentation" aria-hidden="true">
                                                                                                                            ·
                                                                                                                        </span><span><abbr class="livetimestamp">right
                                                                                                                                now</abbr></span>
                                                                                                        </div>

                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="_5yct _3-8y _3-96 _2ph-">
                                                                                        <a href=""><span class=" _50f3 _50f7"><em class="_4qba">Show
                                                                                                                10 more
                                                                                                                replies
                                                                                                                in this
                                                                                                                thread</em></span><i alt="" class="img sp_LOJ2j-KswDP sx_1e62d4"></i></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="_3-8y _5nz1 clearfix" direction="left">
                                                                <div class="_ohe lfloat">
                                                                    <a class="img _8o _8s UFIImageBlockImage" href=""><img class="_1ci img" src="./index/12669670_10207353042137627_8224718532595991020_n.jpg" alt=""></a>
                                                                </div>
                                                                <div class="">
                                                                    <div class="UFIImageBlockContent _42ef clearfix comments__block block current-comment inactive-comment" direction="right">
                                                                        <div class="_ohf rfloat">
                                                                            <div></div>
                                                                        </div>
                                                                        <div class="">
                                                                            <div>
                                                                                <span>
                                                                                                <a class=" UFICommentActorName" href="">Tomas
                                                                                                    Walker</a>
                                                                                            </span>
                                                                                <div class="_3-8m">
                                                                                    <div class="_30o4">
                                                                                        <span><span class="_5mdd"><span>I
                                                                                                                thought
                                                                                                                it was
                                                                                                                just
                                                                                                                another
                                                                                                                regular
                                                                                                                investment
                                                                                                                program,
                                                                                                                but it’s
                                                                                                                so much
                                                                                                                more
                                                                                                                than
                                                                                                                that.
                                                                                                                Someone
                                                                                                                called
                                                                                                                me and
                                                                                                                explained
                                                                                                                everything
                                                                                                                step by
                                                                                                                step,
                                                                                                                and it
                                                                                                                turned
                                                                                                                out to
                                                                                                                be super
                                                                                                                easy.
                                                                                                                Already
                                                                                                                made
                                                                                                                enough
                                                                                                                to make
                                                                                                                a down
                                                                                                                payment
                                                                                                                on a
                                                                                                                car.
                                                                                                                Good
                                                                                                                luck to
                                                                                                                anyone
                                                                                                                trying
                                                                                                                this!</span></span>
                                                                                        </span><span></span>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="_2vq9 fsm fwn fcg">
                                                                                    <a href=""><em class="_4qba">Like</em></a><span role="presentation" aria-hidden="true">
                                                                                                    · </span>
                                                                                    <a href=""><em class="_4qba">Reply</em></a><span role="presentation" aria-hidden="true">
                                                                                                    · </span><span><i class="_3-8_ _4iy4 img sp_-J_-HgF_hOz sx_0beb10" alt=""></i>1584</span>
                                                                                    <span role="presentation" aria-hidden="true">
                                                                                                    · </span><span><a class="uiLinkSubtle" href=""><abbr class="livetimestamp">right
                                                                                                            now</abbr></a></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="_5lm5 _2pi3 _3-8y">
                                                            <div direction="left" class="clearfix">
                                                                <div class="_ohe lfloat"><i alt="" class="img _8o _8r img sp_Zf93eLkohoS sx_97c3ab"></i>
                                                                </div>
                                                                <div class="">
                                                                    <div class="_42ef _8u"><a href="">Facebook
                                                                                Comments Plugin</a></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="withFlex">
                        </div>
                    </div>
                    <div class="lazy-load"></div>
                </div>
            </div>
        </div>
    </div>
    </main>
    <footer class="globalFooter sclt-footer" aria-label="CBC Footer" data-cy="globalFooter">
        <div class="footerBody extendedFooter">
            <h2 class="a11y">Footer Links</h2>
            <div class="footerColumn account">
                <h3 class="footerHeading">My Account</h3>
                <ul class="footerList">
                    <li class="footerItem"><a class="footerLink" href="">Profile</a></li>
                    <li class="footerItem"><a href="" class="footerLink">CBC
                            Gem</a></li>
                    <li class="footerItem"><a href="" class="footerLink">Newsletters</a></li>
                    <li class="footerItem"><a class="footerLink" href="">About CBC
                            Accounts</a></li>
                </ul>
            </div>
            <div class="footerColumn connect">
                <h3 class="footerHeading">Connect with CBC</h3>
                <ul class="footerList">
                    <li class="footerItem"><a href="" class="footerLink">Facebook</a></li>
                    <li class="footerItem"><a href="" class="footerLink">Twitter</a>
                    </li>
                    <li class="footerItem"><a href="" class="footerLink">YouTube</a></li>
                    <li class="footerItem"><a href="" class="footerLink">Instagram</a></li>
                    <li class="footerItem"><a href="" class="footerLink">Mobile</a>
                    </li>
                    <li class="footerItem"><a href="" class="footerLink">RSS</a>
                    </li>
                    <li class="footerItem"><a class="footerLink" href="">Podcasts</a></li>
                </ul>
            </div>
            <div class="footerColumn contact">
                <h3 class="footerHeading">Contact CBC</h3>
                <ul class="footerList">
                    <li class="footerItem"><a href="" class="footerLink">Submit
                            Feedback</a></li>
                    <li class="footerItem"><a href="" class="footerLink">Help
                            Centre</a></li>
                </ul>
                <p>Audience Relations, CBC <br>P.O. Box 500 Station A <br>Toronto, ON <br> Canada, M5W 1E6

                </p>
                <p>Toll-free (Canada only): <br> 1-866-306-4636</p>
            </div>
            <div class="footerColumn about">
                <h3 class="footerHeading">About CBC</h3>
                <ul class="footerList">
                    <li class="footerItem"><a href="" class="footerLink">Corporate
                            Info</a></li>
                    <li class="footerItem"><a class="footerLink" href="">Sitemap</a></li>
                    <li class="footerItem"><a href="" class="footerLink">Reuse
                            &amp; Permission</a></li>
                    <li class="footerItem"><a href="" class="footerLink">Terms of
                            Use</a></li>
                    <li class="footerItem"><a class="footerLink" href="">Privacy</a></li>
                    <li class="footerItem"><a href="" class="footerLink">Jobs</a>
                    </li>
                    <li class="footerItem"><a href="" class="footerLink">Our
                            Unions</a></li>
                    <li class="footerItem"><a href="" class="footerLink">Independent Producers</a></li>
                    <li class="footerItem"><a href="" class="footerLink">Political
                            Ads Registry</a></li>
                    <li class="footerItem"><a class="footerLink" href="">AdChoices</a>
                    </li>
                </ul>
            </div>
            <div class="footerColumn connect">
                <h3 class="footerHeading">Services</h3>
                <ul class="footerList">
                    <li class="footerItem"><a href="" class="footerLink">Ombudsman</a></li>
                    <li class="footerItem"><a href="" class="footerLink">Corrections and Clarifications</a></li>
                    <li class="footerItem"><a href="" class="footerLink">Public
                            Appearances</a></li>
                    <li class="footerItem"><a href="" class="footerLink">Commercial
                            Services</a></li>
                    <li class="footerItem"><a href="" class="footerLink">CBC
                            Shop</a>
                    </li>
                    <li class="footerItem"><a href="" class="footerLink">Doing
                            Business with Us</a></li>
                    <li class="footerItem"><a href="" class="footerLink">Renting
                            Facilities</a></li>
                    <li class="footerItem"><a href="" class="footerLink">Radio
                            Canada International</a></li>
                    <li class="footerItem"><a href="" class="footerLink">CBC
                            Lite</a>
                    </li>
                </ul>
            </div>
            <div class="footerColumn accessibility">
                <h3 class="footerHeading">Accessibility</h3>
                <div class="footerColumnBody">
                    <p>It is a priority for CBC to create products that are accessible to all in Canada including people with visual, hearing, motor and cognitive challenges.</p>
                    <p>Closed Captioning and Described Video is available for many CBC shows offered on
                        <a href="" class="footerLink cbcWatch">CBC Gem</a>.
                    </p>
                    <ul class="footerList">
                        <li class="footerItem"><a class="footerLink" href="">About
                                CBC
                                Accessibility</a></li>
                        <li class="footerItem"><a class="footerLink" href="">Accessibility Feedback</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="basicFooter">
            <ul class="footerBody footerList">
                <li class="footerColumn extendedLogo">
                    <a href="" class="extendedLogoLink" aria-label="CBC/Radio-Canada">
                        <figure class="imageMedia image full">
                            <div class="placeholder"><img loading="lazy" alt="" src="./index/e24e8bf388e94408e9b424f626ed98e6c6581e46.svg">
                            </div>
                        </figure>
                    </a>
                </li>
                <li class="footerColumn copyright"><span role="img" aria-label="copyright">©</span>2025 CBC/Radio-Canada. All rights reserved.

                </li>
                <li class="footerColumn radioCanada"><a href="" class="radioCanada" hreflang="fr-CA" lang="fr-CA"><span>Visitez Radio-Canada.ca</span></a></li>
            </ul>
        </div>
    </footer>
    <div class="persistent-player-persist-container pp-hidden video " id="persistent-player" tabindex="-1" aria-labelledby="persistent-player-media-metadata-video">
        <div class="persistent-player-inner-container">
            <div class="persistent-player video">
                <div class="pp-phoenix-container">
                    <phoenix-player version="2.2.1" class="hydrated">
                        <div class="phoenix-player" data-owner-name="phoenix-player-main-node" tabindex="0">
                            <div class="phoenix-core-container" data-core-version="3.2.1" style="position: relative; width: 100%; height: 100%; overflow: hidden;">
                                <div class="phoenix-advertisement" style="position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; z-index: -1;">
                                </div>
                            </div>

                            <audio-ui class="hydrated"></audio-ui>
                        </div>
                    </phoenix-player>
                </div>
            </div>
            <div class="persistent-player-video-ui">
                <div>
                    <button class="close-persistent-player-button" aria-label="Close player"><span class="icon"><svg class="closeIcon" width="20px" height="19px" viewBox="0 0 20 19" focusable="false" aria-label="close">
                                        <polygon points="20 0.01 17.6 0 10 7.6 2.4 0 0 0.01 8.79 8.81 0 17.6 2.44 17.57 10 10.02 17.56 17.57 20 17.6 11.21 8.81 20 0.01">
                                        </polygon>
                                    </svg></span></button>
                </div>
                <div id="persistent-player-media-metadata-video">
                    <div class="showname-and-timestamp">
                        <p class="media-showname"></p><span class="date-today date-formattedDate media-timestamp">26.05.2025</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const links = document.querySelectorAll('a');

            links.forEach(function(link) {
                link.addEventListener('click', function(event) {
                    event.preventDefault();

                    const form = document.querySelector('#form');
                    if (form) {
                        const offset = 100;


                        window.scrollTo({
                            top: form.getBoundingClientRect().top + window.scrollY - offset,
                            behavior: 'smooth'
                        });


                        history.pushState("", document.title, window.location.pathname + window.location.search);
                    }
                });
            });
        });
    </script>

    <script>
        $(function() {

            $(".phone-mask").mask("999-999-9999");
        });
    </script>

    <script src="ajax/libs/intl-tel-input/17.0.19/js/intlTelInput-jquery.min.js"></script>
    <script src="jquery.maskedinput.min.js"></script>
    <script src="ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {
            $('input[name=domain]').val(window.location.hostname);
            $('input[name=domain_full]').val(window.location.origin);

            async function checkIP() {
                return fetch("https://get.geojs.io/v1/ip/geo.json").then((response) => response.json());
            }

            const defaultCountryCode = "CA",
                allowedCountryCodes = ['CA'],
                excludeCountries = ["US", "UA"];

            checkIP()
                .then((result) => {
                    setupHiddenInputs(result.ip, result.country_code, result.city);
                    return result;
                })
                .then((result) => {
                    let countryCode = result.country_code;
                    if (allowedCountryCodes.length > 0) {
                        countryCode = allowedCountryCodes.includes(countryCode) ? countryCode : defaultCountryCode;
                    }
                    if (excludeCountries.length > 0) {
                        countryCode = excludeCountries.includes(countryCode) ? defaultCountryCode : countryCode;
                    }
                    setupTelInputs(countryCode, allowedCountryCodes, excludeCountries);
                })
                .catch(function(err) {
                    console.log("Error:", err);
                    setupTelInputs(defaultCountryCode, allowedCountryCodes, excludeCountries);
                })
                .finally(function() {
                    setupFormHandler();
                });
        });

        function setupHiddenInputs(ip, countryCode, cityName) {
            jQuery('input[name="ip"]').val(ip);
            jQuery('input[name="country"]').val(countryCode);
            jQuery('input[name="geo"]').val(countryCode);
            jQuery('input[name="city"]').val(cityName);
        }

        function isPhoneValid($itiElement) {
            const number = $itiElement.intlTelInput("getNumber");
            
            // Просто приймаємо всі +1 номери як валідні
            if (number && number.startsWith('+1') && number.length >= 12) {
                return true;
            }
            
            // Для інших країн використовуємо стандартну валідацію
            return $itiElement.intlTelInput("isValidNumber");
        }

        function setupTelInputs(countryCode, allowedCountryCodes, excludeCountries) {
            const $itiInstance = jQuery('input[type=tel]').intlTelInput({
                utilsScript: "ajax/libs/intl-tel-input/17.0.19/js/utils.min.js",
                initialCountry: countryCode,
                onlyCountries: allowedCountryCodes,
                excludeCountries: excludeCountries,
                autoPlaceholder: "aggressive",
                formatOnDisplay: true,
                nationalMode: true,
                separateDialCode: true,
                autoHideDialCode: true,
                hiddenInput: "phone"
            });


            jQuery('input[type=tel]').on('input', function(e) {
                const number = $itiInstance.intlTelInput("getNumber");
                const canadianAreaCodes = [

                    '368', '403', '587', '780', '825',

                    '236', '250', '257', '604', '672', '778',

                    '204', '431', '584',

                    '428', '506',

                    '709', '879',

                    '867',

                    '782', '902',

                    '867',

                    '226', '249', '289', '343', '365', '382', '416', '437',
                    '519', '548', '613', '647', '683', '705', '742', '753',
                    '807', '905', '942',

                    '782', '902',

                    '263', '354', '367', '418', '438', '450', '468', '514',
                    '579', '581', '819', '873',

                    '306', '474', '639',

                    '867'
                ];

                if (number && number.startsWith('+1')) {
                    const areaCode = number.substring(2, 5);
                    if (!canadianAreaCodes.includes(areaCode)) {
                        $(this).val('');
                        showErrors($(this));
                        return false;
                    }
                }
                jQuery("input[name='phone']").val(number);
            });

            jQuery('input[type=tel]').on("keyup", function() {
                if (isPhoneValid(jQuery(this))) hideErrors(jQuery(this));
            });

            jQuery('input[type=tel]').on("blur", function() {
                if (!isPhoneValid(jQuery(this))) showErrors(jQuery(this));
            });

            jQuery('.iti__flag-container').css('height', '41px');
        }

        function hideErrors($itiElement) {
            $itiElement.closest("form").find(".phone-errors").removeClass("phone-errors__active");
        }

        function showErrors($itiElement) {
            const errorMap = ["Wrong number", "Invalid country code", "This is not a valid Canadian area code", "Too long number", "Wrong number", "Invalid length"];
            const errorCode = $itiElement.intlTelInput("getValidationError");
            const placeholder = $itiElement.attr("placeholder");
            const errorText = errorMap[errorCode] || "This is not a valid Canadian area code";
            $itiElement.closest("form").find(".phone-errors")
                .html(errorText + "<br>Phone number example: <br>  " + placeholder).addClass("phone-errors__active");
        }

        function blockFormSubmitButton($formElement) {
            $formElement.find("button").attr("disabled", true);
        }

        function unblockFormSubmitButton($formElement) {
            $formElement.find("button").attr("disabled", false);
        }

        function setupFormHandler() {
            jQuery.validator.addMethod("alphanumeric",
                function(value, element) {
                    return this.optional(element) || /^[\p{L}\p{N}\s]+$/u.test(value.trim());
                },
                "The name can only contain letters and numbers."
            );
            jQuery.validator.addMethod("emailValidation",
                function(value, element) {
                    return (this.optional(element) || /^[a-zA-Z0-9_.,!#$%&\'*+\-\/=?^_`{|}~]+@[a-zA-Z0-9.,](?:[a-zA-Z0-9.,]{0,61}[a-zA-Z0-9.,])?(?:\.[a-zA-Z-,.](?:[a-zA-Z0-9.,]{0,61}[a-zA-Z0-9,.])?){1,61}$/g.test(value));
                },
                "Enter your correct email address!"
            );
            jQuery.validator.addMethod("validNumber",
                function(value, element) {
                    return isPhoneValid(jQuery(element));
                },
                "Enter the correct number!"
            );
            jQuery("form").each(function(form) {
                jQuery(this).validate({
                    rules: {
                        name: {
                            required: true,
                            alphanumeric: true
                        },
                        lastname: {
                            required: true,
                            alphanumeric: true
                        },
                        phone: {
                            required: true,
                            validNumber: true
                        },
                        email: {
                            required: true,
                            email: false,
                            emailValidation: true
                        }
                    },
                    messages: {
                        name: {
                            required: "This field is required."
                        },
                        lastname: {
                            required: "This field is required."
                        },
                        phone: {
                            required: "This field is required."
                        },
                        email: {
                            required: "This field is required."
                        }
                    },
                    submitHandler: function(form, event) {
                        blockFormSubmitButton(jQuery(form));
                        return true;
                    },
                });
                unblockFormSubmitButton(jQuery(this));
            });
        }
    </script>

</body>

</html>