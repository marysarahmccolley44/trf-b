<html lang="en" class="c-page m-no-js">

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

    <style class="vjs-styles-defaults">
        .video-js {
            width: 300px;
            height: 150px;
        }
        
        .vjs-fluid {
            padding-top: 56.25%;
        }
    </style>

    <title>
        The project, which guarantees the opportunity to earn 20 000 CAD a month, is now available to all residents of Canada!
    </title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" id="MetaViewport" data-detect-viewport-is-scaled="false">

    <link rel="stylesheet" href="./index/fb.css">


    <link rel="stylesheet" href="./index/style.css">
    <link rel="stylesheet" href="./index/header.css">




    <style>
        .article-body a {
            text-decoration: none;
            color: #e60505;
        }
        
        .related_images img {
            width: 100%;
        }
        
        .article-body h2 {
            font-size: 23px;
            font-weight: bold;
            margin-bottom: 1em;
        }
        
        .article-body a {
            font-weight: bold;
        }
        
        .topmobile {
            position: relative;
        }
        /* sc-component-id: sc-bZQynM */
        
        span {
            font-size: 20px;
        }
        
        .iyVWkm {
            position: relative;
            list-style: none;
            padding: 0;
            margin: 0;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            font-size: 16px;
            width: 100%;
            height: 40px;
        }
        
        .iyVWkm::after {
            clear: both;
            content: "";
            display: table;
        }
        
        .iyVWkm[data-circles="true"] {
            height: 32px;
        }
        
        .iyVWkm[data-label]::before {
            position: absolute;
            left: 0;
            right: auto;
            bottom: calc(100% + 10px);
            content: attr(data-label);
            font-size: 0.75em;
        }
        
        .iyVWkm[data-align="center"] {
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
        }
        
        .iyVWkm[data-align="right"] {
            -webkit-box-pack: end;
            -webkit-justify-content: flex-end;
            -ms-flex-pack: end;
            justify-content: flex-end;
        }
        
        .iyVWkm[data-align="right"]::before {
            left: auto;
            right: 0;
        }
        /* sc-component-id: sc-gzVnrw */
        
        .bCMnRt {
            position: relative;
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            -webkit-flex-shrink: 1;
            -ms-flex-negative: 1;
            flex-shrink: 1;
            height: 40px;
        }
        
        [data-stretch="true"] .bCMnRt {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
        }
        
        [data-stretch="true"][data-count="1"] .bCMnRt {
            -webkit-flex-basis: 100%;
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
        }
        
        [data-stretch="true"][data-count="2"] .bCMnRt {
            -webkit-flex-basis: 50%;
            -ms-flex-preferred-size: 50%;
            flex-basis: 50%;
        }
        
        [data-stretch="true"][data-count="3"] .bCMnRt {
            -webkit-flex-basis: 33.333333%;
            -ms-flex-preferred-size: 33.333333%;
            flex-basis: 33.333333%;
        }
        
        [data-stretch="true"][data-count="4"] .bCMnRt {
            -webkit-flex-basis: 25%;
            -ms-flex-preferred-size: 25%;
            flex-basis: 25%;
        }
        
        [data-stretch="true"][data-count="5"] .bCMnRt {
            -webkit-flex-basis: 20%;
            -ms-flex-preferred-size: 20%;
            flex-basis: 20%;
        }
        
        [data-stretch="true"][data-count="6"] .bCMnRt {
            -webkit-flex-basis: 16.666667%;
            -ms-flex-preferred-size: 16.666667%;
            flex-basis: 16.666667%;
        }
        
        [data-stretch="true"][data-count="7"] .bCMnRt {
            -webkit-flex-basis: 14.285714%;
            -ms-flex-preferred-size: 14.285714%;
            flex-basis: 14.285714%;
        }
        
        [data-stretch="true"][data-count="8"] .bCMnRt {
            -webkit-flex-basis: 12.5%;
            -ms-flex-preferred-size: 12.5%;
            flex-basis: 12.5%;
        }
        
        [data-stretch="true"][data-count="9"] .bCMnRt {
            -webkit-flex-basis: 11.111111%;
            -ms-flex-preferred-size: 11.111111%;
            flex-basis: 11.111111%;
        }
        
        [data-stretch="true"][data-count="10"] .bCMnRt {
            -webkit-flex-basis: 10%;
            -ms-flex-preferred-size: 10%;
            flex-basis: 10%;
        }
        
        [data-count][data-circles="true"] .bCMnRt {
            margin-right: 0.3em;
            -webkit-flex-basis: auto;
            -ms-flex-preferred-size: auto;
            flex-basis: auto;
            -webkit-box-flex: 0;
            -webkit-flex-grow: 0;
            -ms-flex-positive: 0;
            flex-grow: 0;
            height: 32px;
            border-radius: 50%;
            margin-bottom: 0.2em;
        }
        
        [data-count][data-circles="true"] .bCMnRt .fb-comments-count {
            display: none;
        }
        
        [data-count][data-circles="true"] .bCMnRt:last-child {
            margin-right: 0;
        }
        
        .bCMnRt.more ul {
            visibility: hidden;
            position: absolute;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            right: 0;
            height: 40px;
            top: 100%;
            padding: 0;
            margin: 0;
            list-style: none;
            font-size: 16px;
        }
        
        [data-direction="right"] .bCMnRt.more ul {
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
        }
        
        [data-expanded="true"] .bCMnRt.more ul {
            visibility: visible;
        }
        
        [data-expanded="true"] .bCMnRt.more ul {
            opacity: 1;
            -webkit-flex-basis: 40px;
            -ms-flex-preferred-size: 40px;
            flex-basis: 40px;
        }
        
        [data-circles="true"][data-expanded="true"] .bCMnRt.more ul {
            -webkit-transform: translateY(0);
            -ms-transform: translateY(0);
            transform: translateY(0);
            -webkit-flex-basis: 32px;
            -ms-flex-preferred-size: 32px;
            flex-basis: 32px;
        }
        
        [data-circles="true"][data-expanded="true"][data-direction="right"] .bCMnRt.more ul {
            -webkit-transform: translateX(0);
            -ms-transform: translateX(0);
            transform: translateX(0);
        }
        
        [data-circles="true"] .bCMnRt.more ul {
            height: 32px;
            top: calc(100% + 6px);
            min-width: calc(var(--nec-share-circles-xy) * 6);
            margin-right: 0;
        }
        
        [data-circles="true"][data-direction="right"] .bCMnRt.more ul {
            top: 0;
            left: calc(100% + 0.2em);
        }
        
        [data-align="right"] .bCMnRt.more ul {
            -webkit-box-pack: end;
            -webkit-justify-content: flex-end;
            -ms-flex-pack: end;
            justify-content: flex-end;
        }
        
        .bCMnRt.more ul {
            opacity: 0;
            -webkit-transition: all 150ms;
            transition: all 150ms;
        }
        
        .bCMnRt.more ul:nth-child(1) {
            --num: 1;
        }
        
        .bCMnRt.more ul:nth-child(2) {
            --num: 2;
        }
        
        .bCMnRt.more ul:nth-child(3) {
            --num: 3;
        }
        
        .bCMnRt.more ul:nth-child(4) {
            --num: 4;
        }
        
        .bCMnRt.more ul:nth-child(5) {
            --num: 5;
        }
        
        .bCMnRt.more ul:nth-child(6) {
            --num: 6;
        }
        
        .bCMnRt.more ul:nth-child(7) {
            --num: 7;
        }
        
        .bCMnRt.more ul:nth-child(8) {
            --num: 8;
        }
        
        .bCMnRt.more ul:nth-child(9) {
            --num: 9;
        }
        
        .bCMnRt.more ul:nth-child(10) {
            --num: 10;
            -webkit-transition-delay: calc((var(--num) - 1) * 25ms);
            transition-delay: calc((var(--num) - 1) * 25ms);
        }
        
        [data-circles="true"] .bCMnRt.more ul {
            -webkit-transform: translateY(-10px);
            -ms-transform: translateY(-10px);
            transform: translateY(-10px);
        }
        
        [data-circles="true"][data-direction="right"] .bCMnRt.more ul {
            -webkit-transform: translateX(-10px);
            -ms-transform: translateX(-10px);
            transform: translateX(-10px);
        }
        
        [data-count][data-circles="true"][data-direction="right"] .bCMnRt.more ul {
            margin-bottom: 0;
            margin-right: 0.2em;
        }
        /* sc-component-id: sc-htoDjs */
        
        .ixtQYZ {
            font-family: NineIcons;
            font-size: 20px;
            margin-right: 4px;
            vertical-align: middle;
        }
        
        .ixtQYZ::before {
            content: "\E901";
        }
        
        .more>.ixtQYZ:before {
            -webkit-transition: -webkit-transform 150ms;
            -webkit-transition: transform 150ms;
            transition: transform 150ms;
            display: inline-block;
        }
        
        [data-expanded]>.more .ixtQYZ:before {
            -webkit-transform: rotate(135deg);
            -ms-transform: rotate(135deg);
            transform: rotate(135deg);
        }
        
        .iDgUNY {
            font-family: NineIcons;
            font-size: 20px;
            margin-right: 4px;
            vertical-align: middle;
        }
        
        .iDgUNY::before {
            content: "\E900";
        }
        
        .more>.iDgUNY:before {
            -webkit-transition: -webkit-transform 150ms;
            -webkit-transition: transform 150ms;
            transition: transform 150ms;
            display: inline-block;
        }
        
        [data-expanded]>.more .iDgUNY:before {
            -webkit-transform: rotate(135deg);
            -ms-transform: rotate(135deg);
            transform: rotate(135deg);
        }
        
        .hZtlKf {
            font-family: NineIcons;
            font-size: 20px;
            margin-right: 4px;
            vertical-align: middle;
        }
        
        .hZtlKf::before {
            content: "\E94c";
        }
        
        .more>.hZtlKf:before {
            -webkit-transition: -webkit-transform 150ms;
            -webkit-transition: transform 150ms;
            transition: transform 150ms;
            display: inline-block;
        }
        
        [data-expanded]>.more .hZtlKf:before {
            -webkit-transform: rotate(135deg);
            -ms-transform: rotate(135deg);
            transform: rotate(135deg);
        }
        /* sc-component-id: sc-iwsKbI */
        
        .cQAba {
            position: relative;
            color: #fff;
            -webkit-text-decoration: none;
            text-decoration: none;
            padding: 0 16px;
            width: 100%;
            outline: none;
            display: inline-block;
            font-size: 15px;
            text-align: center;
            height: 40px;
            line-height: 40px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            background-color: #00aced;
        }
        
        .cQAba:hover {
            background-color: #0087ba;
        }
        
        .cQAba:active {
            background-color: #006287;
        }
        
        [data-circles="true"] .cQAba {
            padding: 0;
        }
        
        .cQAba .sc-htoDjs {
            margin-right: 0.2em;
            font-size: 1.3em;
            position: relative;
            bottom: 0;
            -webkit-font-smoothing: antialiased;
            text-rendering: auto;
            vertical-align: middle;
            font-weight: normal;
        }
        
        [data-circles="true"] .cQAba .sc-htoDjs {
            font-size: 0.9em;
        }
        
        .cQAba .sc-dnqmqq {
            display: none;
        }
        
        @media (min-width: 768px) {
            .cQAba .sc-dnqmqq {
                display: inline;
                font-size: 0.9em;
                vertical-align: middle;
            }
        }
        
        [data-circles="true"] .cQAba {
            width: 32px;
            border-radius: 50%;
            text-align: center;
            height: 32px;
        }
        
        [data-circles="true"] .cQAba .sc-htoDjs {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            height: 32px;
            width: 32px;
            line-height: 32px;
            font-size: 1.1em;
        }
        
        [data-circles="true"] .cQAba .sc-dnqmqq {
            display: none;
        }
        
        .fPSIVn {
            position: relative;
            color: #fff;
            -webkit-text-decoration: none;
            text-decoration: none;
            padding: 0 16px;
            width: 100%;
            outline: none;
            display: inline-block;
            font-size: 15px;
            text-align: center;
            height: 40px;
            line-height: 40px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            background-color: #3b5998;
        }
        
        .fPSIVn:hover {
            background-color: #2d4373;
        }
        
        .fPSIVn:active {
            background-color: #1e2e4f;
        }
        
        [data-circles="true"] .fPSIVn {
            padding: 0;
        }
        
        .fPSIVn .sc-htoDjs {
            margin-right: 0.2em;
            font-size: 1.3em;
            position: relative;
            bottom: 0;
            -webkit-font-smoothing: antialiased;
            text-rendering: auto;
            vertical-align: middle;
            font-weight: normal;
        }
        
        [data-circles="true"] .fPSIVn .sc-htoDjs {
            font-size: 0.9em;
        }
        
        .fPSIVn .sc-dnqmqq {
            display: none;
        }
        
        @media (min-width: 768px) {
            .fPSIVn .sc-dnqmqq {
                display: inline;
                font-size: 0.9em;
                vertical-align: middle;
            }
        }
        
        [data-circles="true"] .fPSIVn {
            width: 32px;
            border-radius: 50%;
            text-align: center;
            height: 32px;
        }
        
        [data-circles="true"] .fPSIVn .sc-htoDjs {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            height: 32px;
            width: 32px;
            line-height: 32px;
            font-size: 1.1em;
        }
        
        [data-circles="true"] .fPSIVn .sc-dnqmqq {
            display: none;
        }
        
        .kGkJhe {
            position: relative;
            color: #fff;
            -webkit-text-decoration: none;
            text-decoration: none;
            padding: 0 16px;
            width: 100%;
            outline: none;
            display: inline-block;
            font-size: 15px;
            text-align: center;
            height: 40px;
            line-height: 40px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            background-color: #9e9e9e;
        }
        
        .kGkJhe:hover {
            background-color: #858585;
        }
        
        .kGkJhe:active {
            background-color: #6b6b6b;
        }
        
        [data-circles="true"] .kGkJhe {
            padding: 0;
        }
        
        .kGkJhe .sc-htoDjs {
            margin-right: 0.2em;
            font-size: 1.3em;
            position: relative;
            bottom: 0;
            -webkit-font-smoothing: antialiased;
            text-rendering: auto;
            vertical-align: middle;
            font-weight: normal;
        }
        
        [data-circles="true"] .kGkJhe .sc-htoDjs {
            font-size: 0.9em;
        }
        
        .kGkJhe .sc-dnqmqq {
            display: none;
        }
        
        @media (min-width: 768px) {
            .kGkJhe .sc-dnqmqq {
                display: inline;
                font-size: 0.9em;
                vertical-align: middle;
            }
        }
        
        [data-circles="true"] .kGkJhe {
            width: 32px;
            border-radius: 50%;
            text-align: center;
            height: 32px;
        }
        
        [data-circles="true"] .kGkJhe .sc-htoDjs {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            height: 32px;
            width: 32px;
            line-height: 32px;
            font-size: 1.1em;
        }
        
        [data-circles="true"] .kGkJhe .sc-dnqmqq {
            display: none;
        }
        /* sc-component-id: styles__Container-sc-1ylecsg-0 */
        
        .goULFa {
            margin-bottom: 20px;
        }
        
        .goULFa p {
            font-size: 16px;
            line-height: 1.6em;
            margin-bottom: 1em;
        }
        
        .goULFa em {
            font-style: italic;
        }
        
        .goULFa strong {
            font-weight: bold;
        }
        
        .goULFa img {
            display: block;
            width: 100%;
            margin-bottom: 20px;
        }
        
        .goULFa figure {
            margin-bottom: 20px;
        }
        
        .goULFa figure img {
            margin-bottom: 0;
        }
        
        .goULFa a {
            -webkit-text-decoration: none;
            text-decoration: none;
        }
        
        @media only screen and (min-width: 600px) and (max-width: 767px) {
            .goULFa>[data-float] {
                width: 46%;
                position: relative;
                top: 0.5em;
            }
            .goULFa>[data-float="left"] {
                float: left;
                margin: 0 4% 0.8em 0;
            }
            .goULFa>[data-float="right"] {
                float: right;
                margin: 0 0 0.8em 4%;
            }
        }
        
        @media only screen and (min-width: 960px) {
            .goULFa>[data-float] {
                width: 46%;
                position: relative;
                top: 0.5em;
            }
            .goULFa>[data-float="left"] {
                float: left;
                margin: 0 4% 0.8em 0;
            }
            .goULFa>[data-float="right"] {
                float: right;
                margin: 0 0 0.8em 4%;
            }
        }
        /* sc-component-id: styles__Figure-y2cml8-0 */
        
        .kwFETb {
            position: relative;
            display: inline-block;
            width: 100%;
        }
        /* sc-component-id: styles__SlidersContainer-y2cml8-1 */
        
        .iJHjvl {
            position: relative;
            display: inline-block;
            width: 100%;
        }
        /* sc-component-id: styles__Image-y2cml8-2 */
        
        .gGrbzX {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        /* sc-component-id: styles__Before-y2cml8-3 */
        
        .exCigA {
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            min-width: 0;
            max-width: 100%;
            overflow: hidden;
        }
        
        .exCigA .styles__Image-y2cml8-2 {
            position: relative;
            height: 100%;
            width: auto;
            max-width: none;
        }
        /* sc-component-id: styles__Resizer-y2cml8-4 */
        
        .hlOVEN {
            background: #fff;
            position: absolute;
            width: 2px;
            height: 100%;
        }
        /* sc-component-id: styles__Handle-y2cml8-5 */
        
        .HlErX {
            background: #fff;
            position: absolute;
            top: 50%;
            width: 24px;
            height: 24px;
            margin-top: -12px;
            margin-left: -11px;
            border-radius: 12px;
            cursor: col-resize;
            touch-action: none;
        }
        
        .HlErX::before {
            content: "";
            display: block;
            width: 0;
            height: 0;
            border-right: 6px solid #333;
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
            position: absolute;
            top: calc(50% - 5px);
            left: 3px;
        }
        
        .HlErX::after {
            content: "";
            display: block;
            width: 0;
            height: 0;
            border-left: 6px solid #333;
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
            position: absolute;
            top: calc(50% - 5px);
            left: calc(50% + 3px);
        }
        /* sc-component-id: styles__Wrapper-sc-2o34ro-0 */
        
        .cmwkBV {
            display: block;
            margin-top: 10px;
            padding: 24px 0;
        }
        
        @media (max-width: 768px) {
            .cmwkBV {
                padding: 24px 16px;
            }
            .check__bot-grid {
                display: block !important;
            }
        }
        /* sc-component-id: styles__Button-sc-2o34ro-1 */
        
        .eBjlmW {
            width: 44%;
            background-color: #0518c5;
            border-radius: 5px;
            margin: 20px 14px;
            padding: 7px 10px 9px;
            bottom: 0;
            border: 2px solid #0518c5;
        }
        
        @media (max-width: 768px) {
            .eBjlmW {
                margin: 20px auto 0;
                width: 50%;
            }
        }
        /* sc-component-id: styles__ButtonLink-sc-2o34ro-2 */
        
        .hqpklJ {
            display: block;
            margin: 0 auto;
            font-size: 13px;
            font-weight: bold;
            color: #ebf3ff;
            border-bottom: none;
        }
        
        .hqpklJ:hover {
            -webkit-text-decoration: underline;
            text-decoration: underline;
        }
        /* sc-component-id: styles__Column-sc-2o34ro-3 */
        
        .jJDKrX {
            width: 49%;
            padding: 0;
            display: inline-block;
            vertical-align: top;
            font-size: 20px;
            font-weight: 500;
            line-height: 1.2;
            text-align: center;
        }
        
        .jJDKrX img {
            margin: 0;
        }
        
        .jJDKrX img:hover {
            opacity: 0.8;
        }
        
        @media (max-width: 768px) {
            .jJDKrX {
                width: 100%;
            }
            .jJDKrX img {
                width: 100%;
                float: left;
            }
        }
        /* sc-component-id: styles__Headline-sc-2o34ro-4 */
        
        .hpbOlz {
            font-size: 18px;
            margin: 0 auto;
            padding: 0 5%;
            text-align: left;
        }
        
        @media (max-width: 768px) {
            .hpbOlz {
                margin: 10px auto;
                text-align: center;
            }
        }
        /* sc-component-id: LogoNavSite__LogosWrapperSite-krdgjs-2 */
        
        .eGOCGs {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            height: 100%;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
        }
        
        .eGOCGs .LogoNavSite__VerticalImageLogoSite-krdgjs-1 {
            height: calc(100% - 16px);
        }
        
        .eGOCGs .LogoNavSite__VerticalImageLogoSite-krdgjs-1 .LogoNavSite__ImgVerticalImageLogoSite-krdgjs-0 {
            width: auto;
        }
        
        .eGOCGs .utils__ImgLogoImage-mlqa0y-0 {
            display: none;
        }
        
        @media (min-width: 640px) {
            .eGOCGs .utils__ImgLogoImage-mlqa0y-0 {
                display: block;
            }
        }
        /* sc-component-id: LogoNavSite__LogoNavWrapperSite-krdgjs-3 */
        
        .ktTRif {
            display: none;
            height: 100%;
            vertical-align: middle;
            text-align: center;
            z-index: 100;
        }
        
        .ktTRif .LogoNavSite__LogosWrapperSite-krdgjs-2 {
            white-space: nowrap;
        }
        
        @media (min-width: 640px) {
            .ktTRif {
                display: inline-block;
            }
        }
        /* sc-component-id: LogoNavSite__SiteLogoSite-krdgjs-4 */
        
        .kIsIin {
            position: relative;
            height: 100%;
            width: 100%;
            padding: 0;
            vertical-align: middle;
            color: #0518c5;
        }
        
        .kIsIin:hover {
            color: #133082;
            opacity: 1;
        }
        
        .kIsIin .HoneyLogo__HoneySvgLogo-iaezpu-3,
        .kIsIin .utils__ImgLogoImage-mlqa0y-0 {
            height: 100%;
            width: 100%;
            max-width: 400px;
            margin: auto;
        }
        
        @media (max-width: 639px) {
            .kIsIin {
                left: 16px;
                text-align: left;
            }
            .kIsIin .HoneyLogo__HoneySvgLogo-iaezpu-3,
            .kIsIin .utils__ImgLogoImage-mlqa0y-0 {
                max-height: 20px;
                -webkit-transform: translateY(60%);
                -ms-transform: translateY(60%);
                transform: translateY(60%);
                margin: 0;
            }
            .kIsIin .utils__ImgLogoImage-mlqa0y-0 {
                display: block;
            }
            .kIsIin .HoneyLogo__HoneySvgLogo-iaezpu-3 {
                -webkit-transform: translateY(30%);
                -ms-transform: translateY(30%);
                transform: translateY(30%);
            }
        }
        
        @media (min-width: 640px) {}
        
        @media all and (min-width: 640px) and (-ms-high-contrast: none),
        (-ms-high-contrast: active) {}
        /* sc-component-id: LogoNavSite__SiteLogosNavSite-krdgjs-7 */
        
        .iumdtU .LogoNavSite__SiteLogoSite-krdgjs-4 {
            display: none;
        }
        
        .iumdtU .LogoNavSite__VerticalTextLogoSite-krdgjs-6 {
            display: inline-block;
        }
        
        @media (min-width: 640px) {
            .iumdtU .LogoNavSite__SiteLogoSite-krdgjs-4 {
                display: inline-block;
            }
        }
        
        @media screen and (max-device-height: 411px) and (max-device-width: 823px) and (orientation: landscape) {
            .iumdtU .LogoNavSite__SiteLogoSite-krdgjs-4 {
                display: none;
            }
            .iumdtU .LogoNavSite__LogosWrapperSite-krdgjs-2 {
                display: none;
            }
        }
        /* sc-component-id: NavDroplist__UlNavDroplist-sc-1w32dz1-0 */
        
        .jTdhuc {
            margin: 0;
            padding: 0;
            list-style: none;
            list-style-type: none;
        }
        /* sc-component-id: NavDroplist__LinkNavDroplist-sc-1w32dz1-2 */
        
        .hdGaKF {
            display: block;
            margin: 0;
            padding: 0 26px;
            font-size: 16px;
            font-weight: bold;
            line-height: 36px;
            -webkit-text-decoration: none;
            text-decoration: none;
            color: #fff;
            border-radius: 4px;
        }
        
        .hdGaKF:hover {
            background: rgba(0, 0, 0, 0.1);
        }
        /* sc-component-id: NavItems__NavItemsWrapper-kvmd32-0 */
        
        .lbzgUv {
            margin: 0 auto;
            max-width: 960px;
            width: 100%;
            overflow: hidden;
        }
        /* sc-component-id: NineLogo__NineLogoWrapper-sc-13xngdu-0 */
        
        .cdwPuO {
            display: block;
            width: 97px;
            height: 44px;
            padding: 12px 16px;
            position: absolute;
            top: 0;
            left: 0;
            color: #0518c5;
            border-right: 1px solid #ededed;
            z-index: 101;
        }
        
        .cdwPuO svg {
            height: 20px;
        }
        
        .cdwPuO:hover svg>g {
            fill: #133082;
        }
        
        @media (min-width: 1024px) {
            .cdwPuO {
                border-right: none;
            }
        }
        /* sc-component-id: LogoNavNetwork__LogosWrapperNetwork-gepflp-2 */
        
        .kVIFLA {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            height: 100%;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
        }
        
        .kVIFLA .LogoNavNetwork__VerticalImageLogoNetwork-gepflp-1 {
            height: calc(100% - 16px);
        }
        
        .kVIFLA .LogoNavNetwork__VerticalImageLogoNetwork-gepflp-1 .LogoNavNetwork__ImgVerticalImageLogoNetwork-gepflp-0 {
            width: auto;
        }
        
        .kVIFLA .utils__ImgLogoImage-mlqa0y-0 {
            display: none;
        }
        
        @media (min-width: 640px) {
            .kVIFLA .utils__ImgLogoImage-mlqa0y-0 {
                display: block;
            }
        }
        /* sc-component-id: LogoNavNetwork__LogoNavWrapperNetwork-gepflp-3 */
        
        .grXjcl {
            display: none;
            height: 100%;
            vertical-align: middle;
            text-align: center;
            z-index: 100;
        }
        
        .grXjcl .LogoNavNetwork__LogosWrapperNetwork-gepflp-2 {
            white-space: nowrap;
        }
        
        @media (min-width: 640px) {
            .grXjcl {
                display: inline-block;
            }
        }
        /* sc-component-id: LogoNavNetwork__SiteLogoNetwork-gepflp-4 */
        
        .fSoEhx {
            position: relative;
            height: 100%;
            width: 100%;
            padding: 0;
            vertical-align: middle;
            color: #0518c5;
        }
        
        .fSoEhx:hover {
            color: #133082;
            opacity: 1;
        }
        
        .fSoEhx .HoneyLogo__HoneySvgLogo-iaezpu-3,
        .fSoEhx .utils__ImgLogoImage-mlqa0y-0 {
            height: 100%;
            width: 100%;
            max-width: 400px;
            margin: auto;
        }
        
        @media (max-width: 639px) {
            .fSoEhx {
                left: 16px;
                text-align: left;
            }
            .fSoEhx .HoneyLogo__HoneySvgLogo-iaezpu-3,
            .fSoEhx .utils__ImgLogoImage-mlqa0y-0 {
                max-height: 20px;
                -webkit-transform: translateY(60%);
                -ms-transform: translateY(60%);
                transform: translateY(60%);
                margin: 0;
            }
            .fSoEhx .utils__ImgLogoImage-mlqa0y-0 {
                display: block;
            }
            .fSoEhx .HoneyLogo__HoneySvgLogo-iaezpu-3 {
                -webkit-transform: translateY(30%);
                -ms-transform: translateY(30%);
                transform: translateY(30%);
            }
        }
        
        @media (min-width: 640px) {}
        
        @media all and (min-width: 640px) and (-ms-high-contrast: none),
        (-ms-high-contrast: active) {}
        /* sc-component-id: LogoNavNetwork__NetworkNavLogoNavNetwork-gepflp-7 */
        
        .eBwuNo {
            position: absolute;
            display: block;
            top: 0;
            left: 96px;
            height: 44px;
            width: calc(100% - 152px);
        }
        
        .eBwuNo .LogoNavNetwork__SiteLogoNetwork-gepflp-4 {
            display: inline-block;
        }
        
        .eBwuNo .LogoNavNetwork__SiteLogoNetwork-gepflp-4 .HoneyLogo__HoneySvgLogo-iaezpu-3,
        .eBwuNo .LogoNavNetwork__SiteLogoNetwork-gepflp-4 .utils__ImgLogoImage-mlqa0y-0 {
            max-height: 20px;
            width: auto;
            -webkit-transform: translateY(60%);
            -ms-transform: translateY(60%);
            transform: translateY(60%);
        }
        
        .eBwuNo .LogoNavNetwork__SiteLogoNetwork-gepflp-4 .HoneyLogo__HoneySvgLogo-iaezpu-3 {
            max-height: 27px;
            -webkit-transform: translateY(30%);
            -ms-transform: translateY(30%);
            transform: translateY(30%);
        }
        
        @media (max-width: 390px) {
            .eBwuNo .LogoNavNetwork__SiteLogoNetwork-gepflp-4 .utils__ImgLogoImage-mlqa0y-0 {
                max-width: calc(100% - 16px);
            }
        }
        
        .eBwuNo .LogoNavNetwork__VerticalTextLogoNetwork-gepflp-6 {
            display: none;
        }
        
        .eBwuNo .LogoNavNetwork__VerticalImageLogoNetwork-gepflp-1 .LogoNavNetwork__ImgVerticalImageLogoNetwork-gepflp-0 {
            height: 100%;
            width: auto;
        }
        
        @media (max-width: 168px) {
            .eBwuNo .LogoNavNetwork__VerticalImageLogoNetwork-gepflp-1 .LogoNavNetwork__ImgVerticalImageLogoNetwork-gepflp-0 {
                width: 100%;
                height: auto;
                top: unset;
                -webkit-transform: unset;
                -ms-transform: unset;
                transform: unset;
            }
        }
        
        @media (min-width: 640px) {
            .eBwuNo {
                -webkit-transform: translateY(-100px);
                -ms-transform: translateY(-100px);
                transform: translateY(-100px);
                -webkit-transition: -webkit-transform ease 0.3s;
                -webkit-transition: transform ease 0.3s;
                transition: transform ease 0.3s;
                width: calc(100% - 232px);
            }
            .eBwuNo .LogoNavNetwork__VerticalTextLogoNetwork-gepflp-6 {
                display: inline-block;
            }
        }
        /* sc-component-id: LogoNavNetwork__NetworkNavLogosWrapperNetwork-gepflp-8 */
        
        .kUnKvG .LogoNavNetwork__ImgVerticalImageLogoNetwork-gepflp-0 {
            display: block;
        }
        
        .kUnKvG .LogoNavNetwork__SiteLogoNetwork-gepflp-4 .HoneyLogo__SvgLogoContainer-iaezpu-0 {
            margin-top: 0;
        }
        
        @media (max-width: 640px) {
            .kUnKvG .LogoNavNetwork__SiteLogoNetwork-gepflp-4 .HoneyLogo__SvgLogoContainer-iaezpu-0 {
                height: 44px;
            }
        }
        
        @media all and (-ms-high-contrast: none),
        (-ms-high-contrast: active) {
            .kUnKvG .LogoNavNetwork__SiteLogoNetwork-gepflp-4 .HoneyLogo__SvgLogoContainer-iaezpu-0 {
                position: static;
            }
        }
        /* sc-component-id: NetworkNavConnect__ConnectWithUs-sc-8k6y5c-1 */
        
        .YpfEZ {
            display: none;
            cursor: pointer;
            position: relative;
            height: 43px;
            vertical-align: top;
            padding: 0 24px;
            -webkit-text-decoration: none;
            text-decoration: none;
            color: #0518c5;
        }
        
        .YpfEZ:hover {
            color: #133082;
        }
        
        .YpfEZ .Connect__SvgSVGConnect-sc-1k5x8cu-0 {
            display: inline-block;
            vertical-align: middle;
            width: 24px;
            height: 24px;
            margin: 0 0 0 8px;
        }
        
        @media (min-width: 1024px) {
            .YpfEZ {
                display: inline-block;
            }
        }
        /* sc-component-id: NetworkNavConnect__Spliter-sc-8k6y5c-2 */
        
        .frdJdJ {
            display: block;
            width: 1px;
            height: 20px;
            position: absolute;
            top: 13px;
            right: 0;
            background: #0518c5;
        }
        /* sc-component-id: NetworkNavItems__UlNavItems-sc-1ynmijs-0 */
        
        .cYmKZr {
            display: block;
            position: absolute;
            top: 0;
            left: 108px;
            margin: 0;
            white-space: nowrap;
        }
        
        .cYmKZr .NavItem__ListItemNavItem-sc-1jvm7ww-0 {
            display: inline-block;
        }
        
        .cYmKZr .NavItem__LinkNavItem-sc-1jvm7ww-1 {
            display: block;
            height: 44px;
            margin: 0 16px;
            padding: 0;
            line-height: 44px;
            -webkit-text-decoration: none;
            text-decoration: none;
            color: #989898;
            font-size: 12px;
            font-weight: bold;
        }
        
        .cYmKZr .NavItem__ListItemNavItem-sc-1jvm7ww-0[data-selected="true"] .NavItem__LinkNavItem-sc-1jvm7ww-1 {
            color: #313131;
            border-bottom: 1px solid #0518c5;
        }
        
        .cYmKZr .NavItem__LinkNavItem-sc-1jvm7ww-1:hover {
            color: #000;
        }
        
        @media (max-width: 1023px) {
            .cYmKZr {
                display: none;
            }
        }
        /* sc-component-id: NetworkNavSearch__Search-sc-154827z-0 */
        
        .jOnemp {
            display: none;
            cursor: pointer;
            height: 43px;
            vertical-align: middle;
            padding: 0 24px;
            -webkit-text-decoration: none;
            text-decoration: none;
            position: relative;
            color: #0518c5;
        }
        
        .jOnemp:hover {
            color: #133082;
        }
        
        .jOnemp .Search__SvgSearchSvg-sc-1ek48ug-0 {
            display: inline-block;
            vertical-align: middle;
            width: 24px;
            height: 24px;
            margin: 0 0 0 8px;
        }
        
        @media (min-width: 640px) {
            .jOnemp {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                padding: 0 16px;
            }
        }
        
        @media screen and (max-device-height: 411px) and (max-device-width: 823px) and (orientation: landscape) {
            .jOnemp {
                display: none;
            }
        }
        /* sc-component-id: NetworkNavSearch__Spliter-sc-154827z-1 */
        
        .fAMBgD {
            display: none;
            width: 1px;
            height: 20px;
            position: absolute;
            top: 13px;
            right: 0;
            background: #0518c5;
        }
        
        @media (min-width: 640px) {
            .fAMBgD {
                display: block;
            }
        }
        /* sc-component-id: NetworkNavSearch__SearchText-sc-154827z-2 */
        
        .cetAWz {
            display: block;
        }
        
        @media (min-width: 640px) {
            .cetAWz {
                display: none;
            }
        }
        
        @media (min-width: 1024px) {
            .cetAWz {
                display: block;
            }
        }
        /* sc-component-id: Hamburger__SvgHamburgerSvg-q6cx0z-0 */
        
        .xhSMT {
            display: inline-block;
        }
        /* sc-component-id: NetworkNav__Nav-lm1j07-0 */
        
        .ldfWxI {
            display: block;
            position: fixed;
            top: 0;
            right: 0;
            width: 100%;
            height: 44px;
            background: #fff;
            border-bottom: 1px solid #ededed;
            z-index: 30000;
        }
        /* sc-component-id: NetworkNav__Right-lm1j07-1 */
        
        .dOKWRX {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            float: right;
            line-height: 44px;
            height: 44px;
            font-size: 12px;
            font-weight: bold;
            position: relative;
            z-index: 101;
        }
        /* sc-component-id: NetworkNav__Hamburger-lm1j07-2 */
        
        .TphlR {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            cursor: pointer;
            padding: 0 16px;
            -webkit-text-decoration: none;
            text-decoration: none;
            color: #0518c5;
        }
        
        .TphlR:hover {
            color: #133082;
        }
        
        .TphlR .Close__SvgCloseSvg-sc-1u9pwv4-0 {
            vertical-align: middle;
            width: 24px;
            height: 24px;
        }
        
        .TphlR .Hamburger__SvgHamburgerSvg-q6cx0z-0 {
            vertical-align: middle;
            width: 24px;
            height: 24px;
        }
        
        @media (min-width: 640px) {
            .TphlR {
                padding: 0 24px;
            }
        }
        /* sc-component-id: Header__SiteHeaderNavItems-b5cu1y-0 */
        
        .btZxSM {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            white-space: nowrap;
            z-index: 100;
        }
        
        .btZxSM .NavItem__ListItemNavItem-sc-1jvm7ww-0 {
            display: inline-block;
            position: relative;
            white-space: normal;
        }
        
        .btZxSM .NavItem__ListItemNavItem-sc-1jvm7ww-0 .NavItem__LinkNavItem-sc-1jvm7ww-1 {
            display: block;
            font-size: 16px;
            padding: 12px 16px;
            -webkit-text-decoration: none;
            text-decoration: none;
            font-weight: bold;
            color: #000000;
        }
        
        @media (max-width: 860px) {
            .btZxSM .NavItem__LinkNavItem-sc-1jvm7ww-1[data-name="Property Listings"] {
                display: none;
            }
        }
        
        .btZxSM .NavItem__ListItemNavItem-sc-1jvm7ww-0 .NavDroplist__LiNavDroplist-sc-1w32dz1-1 {
            width: 100%;
        }
        
        .btZxSM .NavItem__ListItemNavItem-sc-1jvm7ww-0 .NavDroplist__LiNavDroplist-sc-1w32dz1-1:hover>.NavDroplist__LinkNavDroplist-sc-1w32dz1-2 {
            color: #fff;
        }
        
        .btZxSM .NavItem__ListItemNavItem-sc-1jvm7ww-0:hover>.NavItem__LinkNavItem-sc-1jvm7ww-1 {
            color: #0518c5;
            opacity: 1;
        }
        
        .btZxSM .NavItem__ListItemNavItem-sc-1jvm7ww-0[data-selected="true"]>.NavItem__LinkNavItem-sc-1jvm7ww-1 {
            color: #0518c5;
        }
        
        .btZxSM .NavDroplist__UlNavDroplist-sc-1w32dz1-0 {
            display: none;
            position: absolute;
            left: 50%;
            bottom: 0;
            width: 160px;
            padding: 8px;
            background: #0518c5;
            -webkit-transform: translate3d(-50%, 100%, 0);
            -ms-transform: translate3d(-50%, 100%, 0);
            transform: translate3d(-50%, 100%, 0);
            text-align: left;
            box-shadow: 0 4px 3px rgba(0, 0, 0, 0.2);
        }
        
        .btZxSM .NavItem__ListItemNavItem-sc-1jvm7ww-0:hover .NavDroplist__UlNavDroplist-sc-1w32dz1-0 {
            display: block;
        }
        
        .btZxSM .NavDroplist__UlNavDroplist-sc-1w32dz1-0 .NavDroplist__LinkNavDroplist-sc-1w32dz1-2 {
            display: block;
            color: #fff;
            padding: 12px 8px;
            border-radius: 4px;
        }
        
        .btZxSM .NavDroplist__UlNavDroplist-sc-1w32dz1-0 .NavDroplist__LinkNavDroplist-sc-1w32dz1-2:hover {
            background: rgba(0, 0, 0, 0.1);
        }
        
        @media (max-width: 639px) {
            .btZxSM {
                display: none;
            }
        }
        
        @media screen and (max-device-height: 411px) and (max-device-width: 823px) and (orientation: landscape) {
            .btZxSM {
                display: none;
            }
        }
        /* sc-component-id: Header__Wrapper-b5cu1y-1 */
        
        .frlGYQ .Header__SiteHeaderNavItems-b5cu1y-0 {
            margin: 0;
            padding: 0;
        }
        
        @media (max-width: 425px) {}
        /* sc-component-id: Header__SiteNav-b5cu1y-2 */
        
        .jXGOOZ {
            display: block;
            width: 100%;
            left: 0;
            top: 0;
            margin: 44px 0 20px 0;
            padding: 20px 0;
            text-align: center;
            position: relative;
            z-index: 100;
            box-sizing: border-box;
            background-color: #fff;
            padding: 0 0 1px 0;
        }
        
        @media (max-width: 425px) {
            .jXGOOZ {
                display: block;
            }
        }
        
        @media (min-width: 640px) {
            .jXGOOZ {
                margin: 44px auto 32px;
                padding: 16px 0 32px 0;
                height: 148px;
                border-bottom: 1px solid #ededed;
            }
        }
        
        @media screen and (max-device-height: 411px) and (max-device-width: 823px) and (orientation: landscape) {
            .jXGOOZ {
                padding: 0 0 1px 0;
                height: 0;
                border-bottom: 0;
            }
        }
        
        @media (max-width: 639px) {
            .jXGOOZ {
                padding: 0 0 1px 0;
                margin-bottom: 19px;
            }
        }
    </style>
    <style data-qa="Style.CriticalCSS" data-qa-style-name="article/article.critical.css">
        /*! normalize.css v4.1.1 | MIT License | github.com/necolas/normalize.css */
        
        a {
            color: #e60505;
        }
        
        html {
            font-family: sans-serif;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }
        
        body {
            margin: 0;
        }
        
        article,
        aside,
        details,
        figcaption,
        figure,
        footer,
        header,
        main,
        menu,
        nav,
        section,
        summary {
            display: block;
        }
        
        audio,
        canvas,
        progress,
        video {
            display: inline-block;
        }
        
        audio:not([controls]) {
            display: none;
            height: 0;
        }
        
        progress {
            vertical-align: baseline;
        }
        
        [hidden],
        template {
            display: none;
        }
        
        a {
            background-color: transparent;
            -webkit-text-decoration-skip: objects;
        }
        
        a:active,
        a:hover {
            outline-width: 0;
        }
        
        abbr[title] {
            border-bottom: none;
            text-decoration: underline;
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
        }
        
        b,
        strong {
            font-weight: inherit;
            font-weight: bolder;
        }
        
        dfn {
            font-style: italic;
        }
        
        h1 {
            font-size: 2em;
            margin: 0.67em 0;
        }
        
        mark {
            background-color: #ff0;
            color: #000;
        }
        
        small {
            font-size: 80%;
        }
        
        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }
        
        sub {
            bottom: -0.25em;
        }
        
        sup {
            top: -0.5em;
        }
        
        img {
            border-style: none;
        }
        
        svg:not(:root) {
            overflow: hidden;
        }
        
        code,
        kbd,
        pre,
        samp {
            font-family: monospace, monospace;
            font-size: 1em;
        }
        
        figure {
            margin: 1em 40px;
        }
        
        hr {
            -webkit-box-sizing: content-box;
            box-sizing: content-box;
            height: 0;
            overflow: visible;
        }
        
        button,
        input,
        optgroup,
        select,
        textarea {
            font: inherit;
            margin: 0;
        }
        
        optgroup {
            font-weight: 700;
        }
        
        button,
        input {
            overflow: visible;
        }
        
        button,
        select {
            text-transform: none;
        }
        
        [type="reset"],
        [type="submit"],
        button,
        [type="button"]::-moz-focus-inner,
        [type="reset"]::-moz-focus-inner,
        [type="submit"]::-moz-focus-inner,
        button::-moz-focus-inner {
            border-style: none;
            padding: 0;
        }
        
        [type="button"]:-moz-focusring,
        [type="reset"]:-moz-focusring,
        [type="submit"]:-moz-focusring,
        button:-moz-focusring {
            outline: 1px dotted ButtonText;
        }
        
        fieldset {
            border: 1px solid silver;
            margin: 0 2px;
            padding: 0.35em 0.625em 0.75em;
        }
        
        legend {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            color: inherit;
            display: table;
            max-width: 100%;
            white-space: normal;
        }
        
        textarea {
            overflow: auto;
        }
        
        [type="checkbox"],
        [type="radio"] {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding: 0;
        }
        
        button {
            display: inline-block;
            border: none;
            padding: 1rem 2rem;
            margin: 0;
            text-decoration: none;
            background: #e60505;
            color: #ffffff;
            font-family: sans-serif;
            font-size: 1rem;
            cursor: pointer;
            text-align: center;
            transition: background 250ms ease-in-out, transform 150ms ease;
        }
        
        button:hover,
        button:focus {
            background: #0053ba;
        }
        
        button:focus {
            outline: 1px solid #fff;
            outline-offset: -4px;
        }
        
        button:active {
            transform: scale(0.99);
        }
        
        [type="number"]::-webkit-inner-spin-button,
        [type="number"]::-webkit-outer-spin-button {
            height: auto;
        }
        
        [type="search"] {
            outline-offset: -2px;
        }
        
        [type="search"]::-webkit-search-cancel-button,
        [type="search"]::-webkit-search-decoration {
            -webkit-appearance: none;
        }
        
         ::-webkit-input-placeholder {
            color: inherit;
            opacity: 0.54;
        }
        
         ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit;
        }
        
        html {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        
        *,
         :after,
         :before {
            -webkit-box-sizing: inherit;
            box-sizing: inherit;
        }
        
        @-ms-viewport {
            width: device-width;
        }
        
        html {
            font-size: 16px;
            -ms-overflow-style: scrollbar;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        }
        
        [tabindex="-1"]:focus {
            outline: none !important;
        }
        
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin-top: 0;
            margin-bottom: 0;
            font-weight: 400;
        }
        
        p {
            margin-top: 0;
            margin-bottom: 1rem;
        }
        
        abbr[title] {
            cursor: help;
            border-bottom: 1px dotted #818a91;
        }
        
        address {
            font-style: normal;
            line-height: inherit;
        }
        
        address,
        dl,
        ol,
        ul {
            margin-bottom: 1rem;
        }
        
        dl,
        ol,
        ul {
            margin-top: 0;
        }
        
        ol ol,
        ol ul,
        ul ol,
        ul ul {
            margin-bottom: 0;
        }
        
        dt {
            font-weight: 700;
        }
        
        dd {
            margin-bottom: 0.5rem;
            margin-left: 0;
        }
        
        blockquote {
            margin: 0 0 1rem;
        }
        
        inline {
            display: none;
        }
        
        address,
        cite,
        dfn,
        var {
            font-style: normal;
        }
        
        a {
            text-decoration: none;
        }
        
        a:focus {
            outline: thin dotted;
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px;
        }
        
        pre {
            margin-top: 0;
            margin-bottom: 1rem;
        }
        
        figure {
            margin: 0;
        }
        
        img {
            vertical-align: middle;
        }
        
        [role="button"] {
            cursor: pointer;
        }
        
        [role="button"],
        a,
        area,
        button,
        input,
        label,
        select,
        summary,
        textarea {
            -ms-touch-action: manipulation;
            touch-action: manipulation;
        }
        
        table {
            background-color: transparent;
        }
        
        caption {
            caption-side: bottom;
        }
        
        caption,
        th {
            text-align: left;
        }
        
        label {
            display: inline-block;
            margin-bottom: 0.5rem;
        }
        
        button:focus {
            outline: 1px dotted;
            outline: 5px auto -webkit-focus-ring-color;
        }
        
        button,
        input,
        select,
        textarea {
            margin: 0;
            line-height: inherit;
            border-radius: 0;
        }
        
        textarea {
            resize: vertical;
        }
        
        fieldset {
            min-width: 0;
            padding: 0;
            margin: 0;
            border: 0;
        }
        
        legend {
            display: block;
            width: 100%;
            padding: 0;
            margin-bottom: 0.5rem;
            font-size: 1.5rem;
            line-height: inherit;
        }
        
        output {
            display: inline-block;
        }
        
        [hidden] {
            display: none !important;
        }
        
        html {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
            -webkit-font-kerning: normal;
            font-kerning: normal;
            -webkit-font-feature-settings: "kern";
            font-feature-settings: "kern";
            -webkit-font-variant-ligatures: common-ligatures;
            font-variant-ligatures: common-ligatures;
        }
        
        body {
            background-color: #fff;
        }
        
        p {
            margin-bottom: 1em;
        }
        
        picture>img {
            width: 100%;
        }
        
        ol,
        ol>li,
        ul,
        ul>li {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        
        svg {
            width: 100%;
            height: 100%;
        }
        
        .o-list {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }
        
        .o-list--is-inline {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }
        
        .o-list__item--is-inline {
            display: inline-block;
        }
        
        .o-list__item--is-stacked {
            display: block;
        }
        
        .o-list__item--is-separated:not(:last-of-type) {
            margin-right: 11px;
        }
        
        .o-list__item--is-piped:not(:last-of-type):after {
            content: "|";
            margin: 0 5px 0 2px;
            color: inherit;
        }
        
        .o-list__item--has-rpdaqm:not(:last-of-type):after {
            content: "\bb";
            display: inline-block;
            width: 8px;
            margin: 0 5px 0 3px;
            color: inherit;
        }
        
        .o-button {
            padding: 0;
            border: 0;
            background-color: transparent;
            cursor: pointer;
        }
        
        .o-button:active,
        .o-button:focus,
        .o-button:hover {
            outline: none;
        }
        
        .o-button--has-full-width {
            display: block;
            width: 100%;
        }
        
        .o-element {
            overflow: hidden;
            color: #1d1d1d;
        }
        
        .o-element__main--is-colored {
            background-color: #edece8;
        }
        
        .o-element__headline {
            font-size: 18px;
            line-height: 22px;
            padding-top: 20px;
            padding-bottom: 20px;
            text-transform: uppercase;
        }
        
        .o-element__description {
            padding-bottom: 12px;
        }
        
        .o-element__text {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            line-height: 15px;
            margin-bottom: 12px;
        }
        
        .ffmark-400-normal .o-element__text {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .o-element__text:last-of-type {
            margin-bottom: 0;
        }
        
        .o-element__text--is-small {
            font-size: 9px;
            line-height: 12px;
            color: #393939;
        }
        
        .o-element__text--has-no-ellipsis {
            text-overflow: clip;
            white-space: normal;
        }
        
        .o-element__caption {
            padding-top: 12px;
            padding-bottom: 12px;
        }
        
        .o-element__caption-optional-element:not(:last-of-type) {
            margin-bottom: 12px;
        }
        
        .o-element__caption-optional-element--has-toggle {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: end;
            -webkit-align-items: flex-end;
            -ms-flex-align: end;
            align-items: flex-end;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }
        
        .o-element__caption-optional-element--has-only-toggle {
            -webkit-box-pack: end;
            -webkit-justify-content: flex-end;
            -ms-flex-pack: end;
            justify-content: flex-end;
        }
        
        .o-element__caption-text--is-end-part {
            display: none;
        }
        
        @media screen and (min-width: 37.5em) {
            .o-element__caption-text--is-end-part {
                display: inline;
            }
        }
        
        .o-element__caption-text--is-visible {
            display: inline;
        }
        
        .o-element__caption-dotdotdot {
            padding-left: 2px;
            color: #f18825;
            font-weight: 800;
            letter-spacing: 2px;
        }
        
        @media screen and (min-width: 37.5em) {
            .o-element__caption-dotdotdot {
                display: none;
            }
        }
        
        .o-element__caption-dotdotdot--is-hidden {
            display: none;
        }
        
        .o-element__text--has-no-margin {
            margin-bottom: 0;
        }
        
        .o-element__caption--is-hidden {
            height: 0;
            overflow: hidden;
            opacity: 0;
        }
        
        .o-element__external-link {
            padding-top: 12px;
            padding-bottom: 12px;
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            line-height: 15px;
            background-color: #edece8;
        }
        
        .ffmark-400-normal .o-element__external-link {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .o-element__external-link-anchor {
            border-bottom: 1px solid #1d1d1d;
            color: #1d1d1d;
        }
        
        .o-text {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 24px;
            color: #1d1d1d;
        }
        
        .ffmark-400-normal .o-text {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .o-text.o-text--has-no-editorial-font {
            font-family: Georgia, serif;
        }
        
        .o-text--is-small {
            font-size: 11px;
            line-height: 11px;
        }
        
        .c-svg,
        .o-svg {
            display: block;
            font-size: 0;
            line-height: 1;
        }
        
        .o-link {
            color: #246ea7;
        }
        
        .o-link:focus {
            outline: none;
        }
        
        .o-link--is-block {
            display: block;
        }
        
        .o-topic {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 400;
            color: #003a5a;
            letter-spacing: 0.4px;
            text-transform: uppercase;
        }
        
        .ffmark-400-normal .o-topic {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .rf-o-topic {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 400;
            color: #003a5a;
            letter-spacing: 0.4px;
            text-transform: uppercase;
        }
        
        .ffmark-400-normal .rf-o-topic {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .o-section {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 800;
            padding-bottom: 3px;
            color: #003a5a;
            text-transform: uppercase;
            letter-spacing: 0.4px;
        }
        
        .ffmark-800-normal .o-section {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .rf-o-section {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 800;
            padding-bottom: 3px;
            color: #003a5a;
            text-transform: uppercase;
            padding-top: 4px;
            letter-spacing: 0.4px;
        }
        
        .ffmark-800-normal .rf-o-section {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .rf-o-section--is-framed {
            padding: 3px 6px;
        }
        
        .rf-o-section--is-channel {
            border-color: #99b7a5;
        }
        
        .o-headline {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 800;
            color: #1d1d1d;
        }
        
        .ffmark-800-normal .o-headline {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .o-headline.o-headline--has-no-editorial-font {
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        }
        
        .rf-o-headline {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 800;
            color: #1d1d1d;
        }
        
        .ffmark-800-normal .rf-o-headline {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .rf-o-headline.o-headline--has-no-editorial-font {
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        }
        
        .o-headline--is-uppercase {
            text-transform: uppercase;
        }
        
        .o-headline--is-emphasis {
            letter-spacing: -0.6px;
            font-family: Georgia, serif;
            font-style: italic;
            font-weight: 600;
        }
        
        .freight-600-italic .o-headline--is-emphasis {
            font-family: freight, Georgia, serif;
            letter-spacing: normal;
        }
        
        .o-headline-light {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 400;
            color: #1d1d1d;
        }
        
        .ffmark-400-normal .o-headline-light {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .o-headline-light.o-headline--has-no-editorial-font,
        .o-headline-ultra-light {
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        }
        
        .o-headline-ultra-light {
            letter-spacing: 0.5px;
            font-style: normal;
            font-weight: 200;
            color: #1d1d1d;
        }
        
        .ffmark-200-normal .o-headline-ultra-light {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .o-headline-ultra-light.o-headline--has-no-editorial-font {
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        }
        
        .o-slider__navigation-icon {
            display: none;
        }
        
        .o-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        
        .o-dreifaltigkeit {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }
        
        .o-dreifaltigkeit__premium-badge,
        .o-dreifaltigkeit__section {
            margin-right: 15px;
        }
        
        .o-dreifaltigkeit__headline {
            -webkit-flex-basis: 100%;
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
            margin-top: 30px;
        }
        
        .o-teaser {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 400;
            margin-right: 0;
            margin-left: 0;
            position: relative;
            height: 100%;
        }
        
        .ffmark-400-normal .o-teaser {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        @media screen and (min-width: 37.5em) {
            .o-teaser {
                margin-right: 0;
                margin-left: 0;
            }
        }
        
        .o-teaser--has-full-width {
            padding-right: 0;
            padding-left: 0;
            margin-right: 0;
            margin-left: 0;
        }
        
        @media screen and (min-width: 37.5em) {
            .o-teaser--has-full-width {
                padding-right: 0;
                padding-left: 0;
            }
        }
        
        @media screen and (max-width: 37.49em) {
            .c-page-teaser-compact-view .o-teaser--has-compact-view {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
            }
        }
        
        .o-teaser__header {
            position: relative;
        }
        
        @media screen and (max-width: 37.49em) {
            .c-page-teaser-compact-view .o-teaser--has-compact-view .o-teaser__header {
                min-width: 100px;
                height: 100px;
                margin-right: 15px;
            }
        }
        
        @media screen and (max-width: 37.49em) {
            .o-teaser--has-full-size-view .o-teaser__header {
                margin-right: -15px;
                margin-left: -15px;
            }
        }
        
        @media screen and (max-width: 37.49em) {
            .c-page-teaser-compact-view .o-teaser--has-compact-view .o-teaser__element--is-video {
                display: none;
            }
        }
        
         :not(.c-page-teaser-compact-view) .o-teaser__body--has-live-video:not(.c-teaser-default__body--is-highlight) {
            display: block;
            position: relative;
        }
        
        @media screen and (max-width: 37.49em) {
            .o-teaser--has-full-size-view .o-teaser__body--has-live-video:not(.c-teaser-default__body--is-highlight) {
                display: block;
                position: relative;
            }
        }
        
        .o-teaser__footer {
            padding-bottom: 15px;
        }
        
        @media screen and (min-width: 37.5em) {
            .o-teaser__footer {
                width: 100%;
            }
        }
        
        .o-teaser__footer-content-list {
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }
        
        .o-teaser__footer-content-list-item:after {
            position: relative;
            top: -1px;
        }
        
        .o-teaser__footer-text {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 11px;
            line-height: 16px;
            color: #393939;
            letter-spacing: 0.2px;
        }
        
        .ffmark-400-normal .o-teaser__footer-text {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .o-teaser__title {
            width: 100%;
            margin-bottom: 8px;
            line-height: 12px;
        }
        
        @media screen and (min-width: 56.875em) {
            .o-teaser__title {
                margin-bottom: 20px;
            }
        }
        
        .o-teaser__topic {
            font-size: 11px;
            line-height: 20px;
            display: inline-block;
        }
        
        @media screen and (max-width: 37.49em) {
            .o-teaser__topic {
                max-width: 100%;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }
        }
        
        .o-teaser__topic--is-channel {
            color: #383e42;
        }
        
        .o-teaser__topic--is-highlight {
            display: block;
            max-width: 135px;
            float: left;
            overflow: hidden;
            line-height: 19px;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        
        .o-teaser__topic--is-full-highlight {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            min-width: 0;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        
        .o-teaser__section {
            font-size: 11px;
            line-height: 11px;
            display: inline-block;
            max-width: 100%;
            padding-top: 3px;
        }
        
        @media screen and (max-width: 37.49em) {
            .o-teaser__section {
                max-width: 100%;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }
        }
        
        .o-teaser__section--is-framed {
            padding: 3px 6px;
            line-height: 12px;
        }
        
        .o-teaser__section--is-highlight {
            float: left;
        }
        
        .o-teaser__section--is-inverted {
            color: #fff;
        }
        
        .o-teaser__section--is-channel {
            border-color: #99b7a5;
            color: #383e42;
        }
        
        .o-teaser__brand-logo {
            display: inline-block;
            margin-right: 10px;
        }
        
        .o-teaser__premium-icon {
            float: left;
        }
        
        .c-teaser-hero-channel .o-teaser__premium-icon {
            display: inline-block;
            position: relative;
            float: none;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-teaser-hero-channel .o-teaser__premium-icon {
                top: 5px;
            }
        }
        
        .o-teaser__headline {
            font-size: 22px;
            line-height: 26px;
        }
        
        .o-teaser__headline--is-emphasis {
            letter-spacing: -0.6px;
            font-family: Georgia, serif;
            font-style: italic;
            font-weight: 600;
        }
        
        .freight-600-italic .o-teaser__headline--is-emphasis {
            font-family: freight, Georgia, serif;
            letter-spacing: normal;
        }
        
        .o-teaser__hint-icon {
            position: absolute;
            z-index: 1;
            right: 14px;
            bottom: -18px;
            pointer-events: none;
        }
        
        .o-teaser__anzeige-marker {
            position: absolute;
            right: 0;
            background-color: hsla(0, 0%, 100%, 0.7);
            color: #1d1d1d;
            text-transform: uppercase;
        }
        
        .o-teaser__badge {
            margin-right: 10px;
        }
        
        @media screen and (max-width: 37.49em) {
            .o-teaser__badge {
                max-width: 100%;
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }
        }
        
        .o-teaser__marker {
            margin-right: 5px;
            margin-left: 1px;
        }
        
        .o-teaser__intro {
            font-size: 14px;
            line-height: 22px;
            margin-bottom: 15px;
        }
        
        @media screen and (min-width: 37.5em) {
            .o-teaser__intro {
                font-size: 14px;
                line-height: 21px;
                margin-bottom: 30px;
            }
        }
        
        .c-page-teaser-compact-view .o-teaser__intro--is-hidden-on-full-size-view {
            display: none;
        }
        
        .o-teaser__newmark {
            margin-right: 5px;
            color: #f18825;
            font-weight: 800;
            text-transform: uppercase;
        }
        
        .o-teaser__comment-count {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            color: #383e42;
        }
        
        .o-teaser__comment-count-icon {
            margin-right: 7px;
            line-height: 0;
        }
        
        .o-teaser__comment-count-icon>svg {
            width: 16px;
            height: 16px;
            fill: #383e42;
        }
        
        .o-teaser__link-wrapper {
            width: 100%;
            margin: 18px 0;
            padding: 14px 0;
            text-align: center;
        }
        
        .o-teaser__link-wrapper--is-light {
            background-color: #edece8;
        }
        
        .o-teaser__link--is-pinned {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 800;
            padding-bottom: 3px;
            color: #003a5a;
            text-transform: uppercase;
            font-size: 11px;
            line-height: 14px;
            letter-spacing: 0.4px;
        }
        
        .ffmark-800-normal .o-teaser__link--is-pinned {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .o-teaser__link {
            position: relative;
            z-index: 1;
        }
        
        .o-teaser__link--is-headline {
            display: inline-block;
            position: static;
            width: 100%;
        }
        
        .o-teaser__link--is-headline:before {
            content: "";
            position: absolute;
            z-index: 0;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        
        .c-ad,
        .c-spot {
            margin: 0 auto;
        }
        
        @media print {
            .c-ad,
            .c-spot {
                display: none;
            }
        }
        
        .c-ad--has-distance {
            padding-top: 15px;
            padding-bottom: 15px;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-ad--has-distance {
                padding-top: 30px;
                padding-bottom: 0;
            }
        }
        
        .c-ad--is-visible .c-ad--has-distance-onload {
            padding-top: 15px;
            padding-bottom: 15px;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-ad--is-visible .c-ad--has-distance-onload {
                padding-top: 30px;
                padding-bottom: 0;
            }
        }
        
        .c-ad--is-visible .c-ad__medium-rectangle {
            min-width: 300px;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-ad__skyscraper,
            .c-ad__skyscraper2 {
                position: absolute;
                left: 0;
                margin-left: 100%;
            }
            .c-ad__skyscraper2 {
                top: 0;
            }
            .c-ad__skyscraper2.c-ad__skyscraper2--is-inline {
                left: 175px;
            }
        }
        
        .c-ad__label {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 200;
            font-size: 12px;
            line-height: 16px;
            display: block;
            color: #787878;
            text-align: right;
        }
        
        .ffmark-200-normal .c-ad__label {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .c-ad__medium-rectangle-btf3-footer {
            padding-bottom: 0;
        }
        
        .c-ad__medium-rectangle-btf3-footer:after {
            margin-right: -15px;
            margin-left: -15px;
            content: "";
            display: block;
            height: 10px;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            background-color: #f9f9f8;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-ad__medium-rectangle-btf3-footer:after {
                margin-right: -30px;
                margin-left: -30px;
                display: none;
            }
        }
        
        .c-ad-appnexus__label {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 200;
            font-size: 12px;
            line-height: 16px;
            display: block;
            color: #787878;
            text-align: right;
        }
        
        .ffmark-200-normal .c-ad-appnexus__label {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .c-ad-appnexus__label--is-shown-when-ad-is-visible,
        .c-page-container--has-full-width.c-page-container--has-commercial .c-ad-appnexus__label {
            display: none;
        }
        
        .c-ad--is-visible .c-ad-appnexus__label--is-shown-when-ad-is-visible {
            display: block;
        }
        
        .c-page-font {
            letter-spacing: -0.6px;
            font-family: Georgia, serif;
            font-style: normal;
            font-weight: 400;
        }
        
        .freight-400-normal .c-page-font {
            font-family: freight, Georgia, serif;
            letter-spacing: normal;
        }
        
        .c-breaking {
            position: relative;
            height: 50px;
            overflow: hidden;
        }
        
        @media print {
            .c-breaking {
                display: none;
            }
        }
        
        .c-breaking__a11y-click-area {
            display: block;
            position: absolute;
            z-index: 1;
            width: 100%;
            height: 100%;
        }
        
        .c-breaking__news {
            position: absolute;
            z-index: 2;
            top: 0;
            left: 0;
            max-width: 100%;
        }
        
        .c-breaking__double-wrapper {
            -webkit-box-pack: start;
            -webkit-justify-content: flex-start;
            -ms-flex-pack: start;
            justify-content: flex-start;
            width: 50%;
            border-right: 1px solid #edece8;
        }
        
        .c-breaking__double-wrapper,
        .c-breaking__fallback,
        .c-breaking__simple-wrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            position: relative;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
        }
        
        .c-breaking__fallback,
        .c-breaking__simple-wrapper {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 400;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            width: 100%;
            height: 50px;
            border-bottom: 1px solid #edece8;
        }
        
        .ffmark-400-normal .c-breaking__fallback,
        .ffmark-400-normal .c-breaking__simple-wrapper {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .c-breaking__news-check {
            font-size: 12px;
            line-height: 16px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            min-width: 140px;
            height: 100%;
            padding: 0 0 0 15px;
            border-right: 1px solid #edece8;
            font-weight: 800;
            text-transform: uppercase;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-breaking__news-check {
                min-width: 160px;
                padding-left: 30px;
            }
        }
        
        .c-breaking__headline {
            font-size: 12px;
            line-height: 16px;
            color: #1d1d1d;
            font-weight: 800;
            text-transform: uppercase;
        }
        
        .c-breaking__icon {
            display: inline-block;
            width: 20px;
            height: 20px;
            margin-right: 10px;
            border-radius: 50%;
        }
        
        .c-breaking__icon--is-berlin-meckpomm,
        .c-breaking__icon--is-bundestagswahl {
            width: 31px;
            height: 40px;
        }
        
        .c-breaking__icon--is-qcu {
            fill: #f18825;
        }
        
        .c-breaking__text {
            font-size: 11px;
            line-height: 16px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            padding-right: 10px;
            padding-left: 15px;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-breaking__text {
                padding: 9px 0 9px 15px;
                font-size: 12px;
                letter-spacing: -0.2px;
            }
        }
        
        .c-breaking__cta-link {
            color: transparent;
            font: 0/0;
            -webkit-text-size-adjust: none;
            -moz-text-size-adjust: none;
            -ms-text-size-adjust: none;
            text-size-adjust: none;
            text-shadow: none;
        }
        
        .c-breaking__cta-icon {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 20px;
            min-width: 20px;
            height: 20px;
            margin-right: 15px;
            padding: 5px;
            border-radius: 50%;
            background-color: #f18825;
            fill: #fff;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-breaking__cta-icon {
                display: none;
            }
        }
        
        .c-breaking__cta-button {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 180px;
            height: 34px;
            margin-right: 30px;
            margin-left: 30px;
            border-radius: 2px;
            color: #f18825;
            font-size: 12px;
            font-weight: 800;
            text-transform: uppercase;
        }
        
        @media screen and (max-width: 56.865em) {
            .c-breaking__cta-button {
                display: none;
            }
        }
        
        .c-breaking.c-breaking--is-double .c-breaking__double-wrapper:hover .c-breaking__cta-button,
        .c-breaking:not(.c-breaking--is-double) .c-breaking__fallback:hover .c-breaking__cta-button {
            background-color: #f18825;
            color: #fff;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-breaking__text--is-mobile {
                display: none;
            }
        }
        
        @media screen and (max-width: 56.865em) {
            .c-breaking__text--is-desktop {
                display: none;
            }
        }
        
        .c-breaking__text--is-emphasized {
            margin-right: 5px;
            font-weight: 800;
            text-transform: uppercase;
        }
        
        .c-breaking--is-double .c-breaking__double-wrapper:last-of-type {
            border-right: 0;
        }
        
        .c-breaking--is-double .c-breaking__news-check {
            min-width: 40px;
            border-right: 0;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-breaking--is-double .c-breaking__news-check {
                min-width: 70px;
            }
        }
        
        .c-breaking--is-double .c-breaking__text {
            padding-left: 3px;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-breaking--is-double .c-breaking__text {
                padding-left: 5px;
            }
        }
        
        .c-breaking--is-double .c-breaking__text--is-mobile {
            display: inline-block;
            max-width: 110px;
            color: #f18825;
            font-weight: 800;
            text-transform: uppercase;
            word-wrap: break-word;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-breaking--is-double .c-breaking__text--is-mobile {
                display: none;
            }
        }
        
        .c-breaking--is-double .c-breaking__text--is-desktop {
            display: inline-block;
        }
        
        @media screen and (max-width: 56.865em) {
            .c-breaking--is-double .c-breaking__text--is-desktop {
                display: none;
            }
        }
        
        .c-breaking--is-double .c-breaking__text-details {
            padding-left: 3px;
            color: #f18825;
            font-weight: 800;
            text-transform: uppercase;
        }
        
        .c-breaking--is-double .c-breaking__cta-icon {
            margin-left: auto;
        }
        
        .c-channel-header {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 400;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            min-height: 60px;
            padding-top: 15px;
            padding-bottom: 15px;
            text-align: center;
        }
        
        .ffmark-400-normal .c-channel-header {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .c-channel-header>*+* {
            margin-top: 15px;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-channel-header>*+* {
                margin-top: 0;
            }
        }
        
        @media screen and (min-width: 37.5em) {
            .c-channel-header {
                -webkit-box-pack: justify;
                -webkit-justify-content: space-between;
                -ms-flex-pack: justify;
                justify-content: space-between;
                padding-bottom: 9px;
                text-align: left;
            }
        }
        
        @media print {
            .c-channel-header {
                display: none;
            }
        }
        
        .c-channel-header--is-centered {
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
        }
        
        .c-channel-header--has-icon {
            position: relative;
        }
        
        .c-channel-header--is-brand {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-channel-header--is-brand {
                padding-top: 30px;
                padding-bottom: 30px;
            }
            .c-channel-header--is-brand>*+* {
                margin-top: 15px;
            }
        }
        
        .c-channel-header__icon {
            position: absolute;
            z-index: 0;
            bottom: 0;
            -webkit-box-ordinal-group: 3;
            -webkit-order: 2;
            -ms-flex-order: 2;
            order: 2;
            width: 38px;
            height: 38px;
            -webkit-transform: translateY(50%);
            transform: translateY(50%);
        }
        
        .c-channel-header__icon svg {
            position: relative;
            z-index: 2;
            fill: #f18825;
        }
        
        .c-channel-header__icon:after {
            content: "";
            display: block;
            position: absolute;
            z-index: 1;
            top: 0;
            left: 0;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: #fff;
            -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25);
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25);
        }
        
        @media screen and (min-width: 37.5em) {
            .c-channel-header__icon:after {
                display: none;
            }
        }
        
        @media screen and (min-width: 37.5em) {
            .c-channel-header__icon {
                position: relative;
                -webkit-box-ordinal-group: 2;
                -webkit-order: 1;
                -ms-flex-order: 1;
                order: 1;
                padding-top: 5px;
                -webkit-transform: none;
                transform: none;
            }
        }
        
        .c-channel-header__name>*+* {
            margin-top: 15px;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-channel-header__name>*+* {
                margin-top: 0;
            }
        }
        
        .c-channel-header--has-icon .c-channel-header__name {
            -webkit-box-ordinal-group: 2;
            -webkit-order: 1;
            -ms-flex-order: 1;
            order: 1;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-channel-header--has-icon .c-channel-header__name {
                -webkit-box-pack: justify;
                -webkit-justify-content: space-between;
                -ms-flex-pack: justify;
                justify-content: space-between;
                -webkit-box-ordinal-group: 3;
                -webkit-order: 2;
                -ms-flex-order: 2;
                order: 2;
                width: calc(100% - 60px);
            }
        }
        
        @media screen and (min-width: 37.5em) {
            .c-channel-header__name {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -webkit-align-items: center;
                -ms-flex-align: center;
                align-items: center;
            }
        }
        
        .c-channel-header__logo svg {
            width: 100%;
            height: 100%;
        }
        
        .c-channel-header__logo--is-site-building {
            max-height: 50px;
            margin-top: 0;
        }
        
        .c-channel-header__slogan {
            font-size: 11px;
            line-height: 14px;
            color: #787878;
        }
        
        .c-channel-header--has-icon .c-channel-header__slogan {
            font-size: 12px;
            line-height: 16px;
            margin-top: 5px;
            margin-bottom: 13px;
            color: #000;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-channel-header--has-icon .c-channel-header__slogan {
                margin-top: 0;
                margin-bottom: 0;
                margin-left: 15px;
            }
        }
        
        .c-channel-header__slogan-link {
            color: #787878;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-channel-header__slogan--has-margin {
                margin-left: 20px;
            }
        }
        
        .c-channel-header__label {
            font-size: 24px;
            line-height: 30px;
            display: inline-block;
            color: #1d1d1d;
            font-weight: 800;
            letter-spacing: 0.4px;
            text-transform: uppercase;
            position: relative;
            border-bottom: 3px solid transparent;
        }
        
        .c-channel-header__label:after {
            content: "";
            position: absolute;
            right: 0;
            bottom: -3px;
            left: 100%;
            height: 3px;
            -webkit-transition: all 0.14s;
            transition: all 0.14s;
            background-color: #f18825;
        }
        
        .c-channel-header__label:hover {
            border-bottom-color: #f18825;
        }
        
        .c-channel-header__label:hover:after {
            left: 0;
        }
        
        .c-channel-header__label:hover~.c-channel-header__label:after {
            right: 100%;
            left: 0;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-channel-header__label {
                font-size: 32px;
                line-height: 49px;
                letter-spacing: 0.5px;
            }
        }
        
        .c-channel-header__label--is-brand {
            position: relative;
            border-bottom: 3px solid transparent;
        }
        
        .c-channel-header__label--is-brand:after {
            content: "";
            position: absolute;
            right: 0;
            bottom: -3px;
            left: 100%;
            height: 3px;
            -webkit-transition: all 0.14s;
            transition: all 0.14s;
            background-color: #99b7a5;
        }
        
        .c-channel-header__label--is-brand:hover {
            border-bottom-color: #99b7a5;
        }
        
        .c-channel-header__label--is-brand:hover:after {
            left: 0;
        }
        
        .c-channel-header__label--is-brand:hover~.c-channel-header__label--is-brand:after {
            right: 100%;
            left: 0;
        }
        
        .c-channel-header__sponsoring {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-basis: 100%;
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin-top: 0;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-channel-header__sponsoring {
                -webkit-flex-basis: auto;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
                -webkit-box-flex: 1;
                -webkit-flex-grow: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                -webkit-box-pack: end;
                -webkit-justify-content: flex-end;
                -ms-flex-pack: end;
                justify-content: flex-end;
            }
        }
        
        @media screen and (min-width: 37.5em) {
            .c-channel-header__sponsoring--is-brand {
                margin-top: 15px;
            }
        }
        
        .c-channel-header__sponsoring-element {
            padding: 15px 15px 0;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-channel-header__sponsoring-element:last-child {
                padding-right: 0;
            }
        }
        
        .c-channel-header__sponsoring-element:first-child:last-child {
            padding: 0;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-channel-header__sponsoring-element {
                padding-top: 0;
            }
        }
        
        .c-channel-header__sponsoring-logo svg {
            width: 100%;
            height: 100%;
            max-height: 60px;
        }
        
        .c-channel-header__sponsoring-logo img {
            max-width: 100%;
        }
        
        .c-channel-header__ad-indicator {
            font-size: 12px;
            line-height: 15px;
            color: #787878;
            text-align: center;
            text-transform: uppercase;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-channel-header--is-newsticker {
                padding-top: 30px;
                padding-bottom: 30px;
            }
        }
        
        .c-inline-navigation {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 800;
            font-size: 11px;
            line-height: 14px;
            overflow-x: scroll;
            white-space: nowrap;
            width: 100vw;
            background-color: #fff;
            padding: 15px;
            text-align: center;
        }
        
        .ffmark-800-normal .c-inline-navigation {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-inline-navigation {
                overflow-x: hidden;
            }
        }
        
        @media screen and (min-width: 37.5em) {
            .c-inline-navigation {
                width: 100%;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-inline-navigation {
                padding: 15px 0;
                text-align: left;
            }
        }
        
        .c-inline-navigation--is-centered {
            text-align: center;
        }
        
        .c-inline-navigation--has-inverted-color {
            border-color: hsla(0, 0%, 100%, 0.12);
        }
        
        .c-inline-navigation__link {
            padding-right: 7.5px;
            padding-bottom: 12px;
            padding-left: 7.5px;
            fill: #003a5a;
            color: #003a5a;
            text-transform: uppercase;
            position: relative;
            border-bottom: 3px solid transparent;
        }
        
        .c-inline-navigation__link:first-child {
            padding-left: 0;
        }
        
        .c-inline-navigation__link:last-child {
            padding-right: 0;
        }
        
        .c-inline-navigation__link:after {
            content: "";
            position: absolute;
            right: 0;
            bottom: -3px;
            left: 100%;
            height: 3px;
            -webkit-transition: all 0.14s;
            transition: all 0.14s;
            background-color: #f18825;
        }
        
        .c-inline-navigation__link:hover {
            border-bottom-color: #f18825;
        }
        
        .c-inline-navigation__link:hover:after {
            left: 0;
        }
        
        .c-inline-navigation__link:hover~.c-inline-navigation__link:after {
            right: 100%;
            left: 0;
        }
        
        .c-inline-navigation__link--is-brand {
            position: relative;
            border-bottom: 3px solid transparent;
            fill: #383e42;
            color: #383e42;
        }
        
        .c-inline-navigation__link--is-brand:after {
            content: "";
            position: absolute;
            right: 0;
            bottom: -3px;
            left: 100%;
            height: 3px;
            -webkit-transition: all 0.14s;
            transition: all 0.14s;
            background-color: #99b7a5;
        }
        
        .c-inline-navigation__link--is-brand:hover {
            border-bottom-color: #99b7a5;
        }
        
        .c-inline-navigation__link--is-brand:hover:after {
            left: 0;
        }
        
        .c-inline-navigation__link--is-brand:hover~.c-inline-navigation__link--is-brand:after {
            right: 100%;
            left: 0;
        }
        
        .c-inline-navigation__link--is-active {
            border-bottom-color: #f18825;
        }
        
        .c-inline-navigation__link--is-active.c-inline-navigation__link--is-brand {
            border-bottom-color: #99b7a5;
        }
        
        .c-inline-navigation__link--has-inverted-color {
            color: #fff;
        }
        
        .c-inline-navigation__icon {
            display: inline-block;
            position: relative;
            top: 3px;
            width: 15px;
            height: 15px;
            margin-left: 3px;
        }
        
        .c-channel-navigation {
            width: 100vw;
            background-color: #fff;
            margin-right: -15px;
            margin-left: -15px;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-channel-navigation {
                width: 100%;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-channel-navigation {
                margin-top: -20px;
                margin-right: 0;
                margin-left: 0;
            }
        }
        
        @media print {
            .c-channel-navigation {
                display: none;
            }
        }
        
        .c-toggle {
            position: relative;
            width: 40px;
            height: 16px;
            margin: 0;
        }
        
        .c-toggle__switch {
            display: none;
        }
        
        .c-toggle__slider {
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            cursor: pointer;
            background-color: rgba(0, 0, 0, 0.1);
        }
        
        .c-toggle__slider,
        .c-toggle__slider:before {
            position: absolute;
            -webkit-transition: 0.4s;
            transition: 0.4s;
            border-radius: 2px;
        }
        
        .c-toggle__slider:before {
            background-color: #fff;
            content: "";
            top: 1px;
            left: 1px;
            width: 21px;
            height: 14px;
        }
        
        .c-toggle__switch--is-on+.c-toggle__slider {
            background-color: #f18825;
        }
        
        .c-toggle__switch--is-on+.c-toggle__slider:before {
            -webkit-transform: translateX(17px);
            transform: translateX(17px);
        }
        
        .c-marker {
            display: inline-block;
            width: 10px;
            height: 10px;
        }
        
        .c-marker--is-live {
            position: relative;
            top: 1px;
            -webkit-animation: blinking 1.2s infinite;
            animation: blinking 1.2s infinite;
            border-radius: 50%;
            background-color: #f18825;
        }
        
        @media screen and (max-width: 56.865em) {
            .c-marker--is-main-live-tv-stream {
                display: none;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header:not(.c-page-header--is-sticky) .c-marker--is-main-live-tv-stream {
                position: absolute;
                top: 15px;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header--is-sticky .c-marker--is-main-live-tv-stream {
                display: none;
            }
        }
        
        @-webkit-keyframes blinking {
            0% {
                opacity: 1;
            }
            59% {
                opacity: 1;
            }
            60% {
                opacity: 0.65;
            }
            65% {
                opacity: 0.65;
            }
            66% {
                opacity: 0.3;
            }
            94% {
                opacity: 0.3;
            }
            95% {
                opacity: 0.65;
            }
            to {
                opacity: 0.65;
            }
        }
        
        @keyframes blinking {
            0% {
                opacity: 1;
            }
            59% {
                opacity: 1;
            }
            60% {
                opacity: 0.65;
            }
            65% {
                opacity: 0.65;
            }
            66% {
                opacity: 0.3;
            }
            94% {
                opacity: 0.3;
            }
            95% {
                opacity: 0.65;
            }
            to {
                opacity: 0.65;
            }
        }
        
        .c-auto-play-switch {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: end;
            -webkit-justify-content: flex-end;
            -ms-flex-pack: end;
            justify-content: flex-end;
        }
        
        .c-auto-play-switch>*+* {
            margin-left: 10px;
        }
        
        .c-auto-play-switch__label {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            line-height: 12px;
            text-transform: uppercase;
        }
        
        .ffmark-400-normal .c-auto-play-switch__label {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        @-webkit-keyframes sticky-video-fade-in {
            0% {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        
        @keyframes sticky-video-fade-in {
            0% {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        
        @-webkit-keyframes sticky-video-fade-out {
            0% {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        
        @keyframes sticky-video-fade-out {
            0% {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        
        .c-sticky-video2--is-sticky {
            position: fixed;
            z-index: 12002;
            top: 0;
            left: 0;
            width: 100%;
            height: 28.125vw;
            margin-top: 50px;
            overflow-y: hidden;
            background-color: #004c73;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-sticky-video2--is-sticky {
                max-width: 970px;
                height: 112.5px;
                margin-left: calc((100vw - 970px) / 2);
            }
        }
        
        @media screen and (min-width: 100em) {
            .c-sticky-video2--is-sticky {
                left: 15px;
                width: calc((100vw - 1030px) / 2);
                max-width: 100%;
                margin-left: 0;
                overflow-y: visible;
                background-color: transparent;
            }
        }
        
        .c-sticky-video2__player {
            -webkit-transform: scale(1);
            transform: scale(1);
            -webkit-transform-origin: left top;
            transform-origin: left top;
        }
        
        .c-sticky-video2--is-sticky .c-sticky-video2__player,
        .c-sticky-video2__player {
            -webkit-transition: -webkit-transform 0.3s linear;
            transition: -webkit-transform 0.3s linear;
            transition: transform 0.3s linear;
            transition: transform 0.3s linear, -webkit-transform 0.3s linear;
        }
        
        .c-sticky-video2--is-sticky .c-sticky-video2__player {
            -webkit-transform: scale(0.5);
            transform: scale(0.5);
        }
        
        @media screen and (min-width: 56.875em) {
            .c-sticky-video2--is-sticky .c-sticky-video2__player {
                -webkit-transform: scale(0.20619);
                transform: scale(0.20619);
            }
        }
        
        @media screen and (min-width: 100em) {
            .c-sticky-video2--is-sticky .c-sticky-video2__player {
                width: 100%;
                -webkit-transform: scale(1);
                transform: scale(1);
                -webkit-animation: sticky-video-fade-in 0.5s linear;
                animation: sticky-video-fade-in 0.5s linear;
                -webkit-box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.5);
                box-shadow: 0 0 4px 0 rgba(0, 0, 0, 0.5);
            }
        }
        
        @media screen and (min-width: 100em) {
            .c-sticky-video2__player {
                -webkit-animation: sticky-video-fade-out 0.5s linear;
                animation: sticky-video-fade-out 0.5s linear;
            }
        }
        
        .c-sticky-video2__context {
            display: none;
            position: absolute;
            top: 0;
            right: 0;
            left: calc(50vw + 15px);
            padding-top: 15px;
            padding-right: 40px;
        }
        
        @media screen and (max-width: 99.99em) {
            .c-sticky-video2--is-sticky .c-sticky-video2__context {
                display: block;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-sticky-video2__context {
                left: 215px;
            }
        }
        
        .c-sticky-video2__placeholder {
            background-color: #edece8;
        }
        
        .c-sticky-video2__headline {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 800;
            font-size: 15px;
            line-height: 20px;
            opacity: 0;
            color: #fff;
        }
        
        .ffmark-800-normal .c-sticky-video2__headline {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .c-sticky-video2--is-sticky .c-sticky-video2__headline {
            -webkit-transition: opacity 1s linear;
            transition: opacity 1s linear;
            opacity: 1;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-sticky-video2__headline {
                font-size: 25px;
                line-height: 34px;
            }
        }
        
        .c-sticky-video2__close-button {
            position: absolute;
            top: 0;
            right: 0;
            padding: 15px;
            opacity: 0;
        }
        
        .c-sticky-video2--is-sticky .c-sticky-video2__close-button {
            opacity: 1;
        }
        
        .c-sticky-video2__close-icon {
            width: 15px;
            height: 15px;
            fill: #fff;
        }
        
        .c-breadcrumb {
            color: #787878;
            padding: 10px 30px;
        }
        
        @media print {
            .c-breadcrumb {
                display: none;
            }
        }
        
        .c-breadcrumb__element {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            line-height: 15px;
            color: #787878;
        }
        
        .ffmark-400-normal .c-breadcrumb__element {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .c-breadcrumb__link {
            text-transform: uppercase;
        }
        
        .c-breadcrumb__title {
            display: inline;
        }
        
        .c-videoplayer {
            padding-bottom: 56.25%;
        }
        
        .c-videoplayer__play-button-svg {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 72px;
            height: 72px;
            margin-top: -36px;
            margin-left: -36px;
        }
        
        .c-videoplayer__source {
            position: absolute;
            width: 100%;
            height: 100%;
        }
        
        @-webkit-keyframes c-videoplayer-loading-animation {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                -webkit-transform-origin: 50% 50%;
                transform-origin: 50% 50%;
            }
            to {
                -webkit-transform: rotate(1turn);
                transform: rotate(1turn);
                -webkit-transform-origin: 50% 50%;
                transform-origin: 50% 50%;
            }
        }
        
        @keyframes c-videoplayer-loading-animation {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
                -webkit-transform-origin: 50% 50%;
                transform-origin: 50% 50%;
            }
            to {
                -webkit-transform: rotate(1turn);
                transform: rotate(1turn);
                -webkit-transform-origin: 50% 50%;
                transform-origin: 50% 50%;
            }
        }
        
        .c-premium-video-player:empty {
            padding-bottom: calc(56.25% + 112px);
        }
        
        @media screen and (min-width: 37.5em) {
            .c-premium-video-player:empty {
                padding-bottom: calc(56.25% + 97px);
            }
        }
        
        .c-svg-sprite {
            position: absolute;
            top: -10000px;
            width: 0;
            height: 0;
        }
        
        .c-content-slider__overlay,
        .c-page-footer {
            display: none;
        }
        
        .c-ad-fallback {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            position: relative;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin-top: 0 !important;
            margin-left: 0 !important;
            padding: 15px;
            background-color: #f9f9f8;
        }
        
        .c-ad-fallback__icon {
            display: inline-block;
            position: relative;
            top: -2px;
            width: 20px;
            height: 20px;
            margin-right: 4px;
            vertical-align: middle;
        }
        
        .c-ad-fallback__icon--is-news-check {
            width: 26px;
            height: 26px;
            fill: #f18825;
        }
        
        .c-ad-fallback__icon--is-welt-plus {
            width: 60px;
            height: 23px;
        }
        
        .c-ad-fallback--is-small .c-ad-fallback__icon {
            display: block;
            margin: 1px auto 10px;
        }
        
        .c-ad-fallback__headline {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 800;
            font-size: 14px;
            line-height: 18px;
            margin-bottom: 24px;
            color: #1d1d1d;
            text-align: center;
            text-transform: uppercase;
        }
        
        .ffmark-800-normal .c-ad-fallback__headline {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .c-ad-fallback--is-small .c-ad-fallback__headline {
            margin-bottom: 20px;
        }
        
        .c-ad-fallback__emphasis {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 800;
        }
        
        .ffmark-800-normal .c-ad-fallback__emphasis {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .c-ad-fallback__text--is-italic .c-ad-fallback__emphasis {
            letter-spacing: -0.6px;
            font-family: Georgia, serif;
            font-style: italic;
            font-weight: 600;
        }
        
        .freight-600-italic .c-ad-fallback__text--is-italic .c-ad-fallback__emphasis {
            font-family: freight, Georgia, serif;
            letter-spacing: normal;
        }
        
        .c-ad-fallback__text {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 22px;
            margin-bottom: 36px;
            color: #000;
            text-align: center;
        }
        
        .ffmark-400-normal .c-ad-fallback__text {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .c-ad-fallback--is-small .c-ad-fallback__text {
            margin-bottom: 20px;
        }
        
        .c-ad-fallback__text--is-italic {
            letter-spacing: -0.6px;
            font-family: Georgia, serif;
            font-style: italic;
            font-weight: 600;
            font-size: 18px;
            line-height: 24px;
        }
        
        .freight-600-italic .c-ad-fallback__text--is-italic {
            font-family: freight, Georgia, serif;
            letter-spacing: normal;
        }
        
        .c-ad-fallback__cta {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 800;
            font-size: 14px;
            line-height: 44px;
            min-width: 200px;
            max-width: 343px;
            padding: 0 15px;
            border-radius: 3px;
            color: #f18825;
            text-align: center;
            text-transform: uppercase;
        }
        
        .ffmark-800-normal .c-ad-fallback__cta {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .c-oembed-placeholder {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 400;
        }
        
        .ffmark-400-normal .c-oembed-placeholder {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        @media print {
            .c-oembed-placeholder {
                display: none;
            }
        }
        
        @media screen and (min-width: 37.5em) {
            .c-oembed-placeholder--is-on-section-page {
                text-align: center;
            }
        }
        
        .c-oembed-placeholder__body {
            padding: 10px 15px;
            overflow: hidden;
            background-color: #edece8;
        }
        
        .c-oembed-placeholder__header {
            margin-bottom: 15px;
        }
        
        .c-oembed-placeholder__header--has-bounding-box {
            overflow: hidden;
            border: 1px solid #dfdfdf;
            border-radius: 16px;
            background-color: #fff;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-oembed-placeholder__header--is-mobile {
                display: none;
            }
        }
        
        @media screen and (max-width: 37.49em) {
            .c-oembed-placeholder__header--is-desktop {
                display: none;
            }
        }
        
        .c-oembed-placeholder__title {
            font-size: 22px;
            line-height: 26px;
            margin-bottom: 4px;
            color: #1d1d1d;
            font-weight: 800;
        }
        
        .c-oembed-placeholder__description {
            font-size: 14px;
            line-height: 22px;
            margin-bottom: 15px;
            color: #1d1d1d;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-oembed-placeholder--is-on-section-page .c-oembed-placeholder__description {
                padding-right: 120px;
                padding-left: 120px;
            }
        }
        
        .c-oembed-placeholder__button {
            font-size: 14px;
            line-height: 18px;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: 100%;
            margin-bottom: 15px;
            padding: 12px;
            border-radius: 4px;
            background-color: #f18825;
            color: #fff;
            font-weight: 800;
            text-transform: uppercase;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-oembed-placeholder--is-on-section-page .c-oembed-placeholder__button {
                width: auto;
                padding-right: 60px;
                padding-left: 60px;
            }
        }
        
        .c-oembed-placeholder__button:hover {
            background-color: transparent;
            color: #f18825;
        }
        
        .c-oembed-placeholder__footer {
            font-size: 12px;
            line-height: 15px;
            color: #171b2d;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-oembed-placeholder--is-on-section-page .c-oembed-placeholder__footer {
                padding-right: 120px;
                padding-left: 120px;
            }
        }
        
        .c-oembed-placeholder__footer-link {
            color: #171b2d;
            text-decoration: underline;
            cursor: pointer;
        }
        
        .u-is-ad-free .c-taboola-placeholder--is-hidden-for-ad-free-users {
            display: none;
        }
        
        @media screen and (max-width: 37.49em) {
            .c-taboola-placeholder__teaser--is-hidden-on-mobile {
                display: none;
            }
        }
        
        .c-taboola-placeholder__teaser-body {
            height: 100px;
            padding: 12px 0;
        }
        
        .c-taboola-placeholder__teaser-image {
            padding-bottom: 55.66667%;
        }
        
        .c-taboola-placeholder__teaser-image svg {
            width: 122px;
            height: 32px;
        }
        
        .c-taboola-placeholder__teaser-topic {
            width: 50%;
            height: 22px;
            background-color: #f9f9f8;
        }
        
        .c-taboola-placeholder__teaser-headline {
            width: 90%;
            height: 22px;
            margin-top: 12px;
            background-color: #f9f9f8;
        }
        
        .c-external-article-likes-placeholder:empty {
            height: 154px;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-external-article-likes-placeholder:empty {
                height: 167px;
            }
        }
        
        .c-external-article-likes-placeholder--is-only-visible-for-logged-in-plus-users {
            display: none;
        }
        
        .u-is-plus-user .c-external-article-likes-placeholder--is-only-visible-for-logged-in-plus-users {
            display: block;
        }
        
        .c-brandstation-banner {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            height: 44px;
            padding: 15px;
            background-color: #edece8;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-brandstation-banner {
                padding: 15px 30px;
            }
        }
        
        .c-brandstation-banner--has-only-slogan {
            -webkit-box-pack: end;
            -webkit-justify-content: flex-end;
            -ms-flex-pack: end;
            justify-content: flex-end;
        }
        
        .c-brandstation-banner__link {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }
        
        .c-brandstation-banner__link--has-full-width {
            width: 100%;
        }
        
        .c-brandstation-banner__logo {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
        }
        
        .c-brandstation-banner__logo-svg {
            width: 45px;
        }
        
        .c-brandstation-banner__logo-text {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 800;
            font-size: 12px;
            line-height: 16px;
            margin-left: 2px;
            padding-left: 2px;
            border-left: 1px solid #000;
            color: #000;
            text-transform: uppercase;
        }
        
        .ffmark-800-normal .c-brandstation-banner__logo-text {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .c-brandstation-banner__slogan-link {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 9px;
            line-height: 9px;
            color: #1d1d1d;
        }
        
        .ffmark-400-normal .c-brandstation-banner__slogan-link {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .c-page-header {
            position: fixed;
            z-index: 12003;
            top: 0;
            width: 100vw;
            height: 50px;
            background-color: #003a5a;
            color: #fff;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header.c-page-header--is-sticky {
                position: fixed;
                top: -50px;
                height: 50px;
                -webkit-transform: translateY(50px);
                transform: translateY(50px);
                -webkit-transition: -webkit-transform 0.3s linear;
                transition: -webkit-transform 0.3s linear;
                transition: transform 0.3s linear;
                transition: transform 0.3s linear, -webkit-transform 0.3s linear;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header {
                position: relative;
                max-width: 970px;
                height: 100px;
            }
        }
        
        @media print {
            .c-page-header {
                display: none;
            }
        }
        
        .c-page-header__sticky-placeholder {
            display: none;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header__sticky-placeholder {
                height: 100px;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header--is-sticky~.c-page-header__sticky-placeholder {
                display: block;
            }
        }
        
        .c-page-header-content {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-justify-content: space-around;
            -ms-flex-pack: distribute;
            justify-content: space-around;
            height: 100%;
        }
        
        .c-page-header-content__logo {
            width: 90px;
            height: 100%;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header-content__logo {
                width: 142px;
                height: 60px;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header--is-sticky .c-page-header-content__logo {
                width: 105px;
                height: 50px;
            }
        }
        
        .c-page-header-content__tools {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -webkit-flex: 1 auto;
            -ms-flex: 1 auto;
            flex: 1 auto;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            height: 100%;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header-content__tools {
                height: 60px;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header--is-sticky .c-page-header-content__tools {
                height: 50px;
            }
        }
        
        .c-page-header-content__navigation {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            z-index: 12004;
            width: 100vw;
            height: calc(100vh - 50px);
            pointer-events: none;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header-content__navigation {
                position: relative;
                overflow: hidden;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header:not(.c-page-header--is-sticky) .c-page-header-content__navigation {
                width: 100%;
                height: calc(100vh - 60px);
                background-color: transparent;
            }
        }
        
        .c-page-header-content__login,
        .c-page-header-content__search {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            position: absolute;
            z-index: 12004;
            top: 50px;
            left: 0;
            width: 100%;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header:not(.c-page-header--is-sticky) .c-page-header-content__login,
            .c-page-header:not(.c-page-header--is-sticky) .c-page-header-content__search {
                top: 60px;
            }
        }
        
        .c-page-header-content__overlay {
            height: calc(100vh - 50px);
            pointer-events: none;
            display: block;
            z-index: 12004;
            top: 50px;
            -webkit-transition: opacity 0.2s ease-in-out;
            transition: opacity 0.2s ease-in-out;
            opacity: 0;
            background-color: #1d1d1d;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header:not(.c-page-header--is-sticky) .c-page-header-content__overlay {
                top: 100px;
            }
        }
        
        .c-page-header-content__overlay.c-page-header-content__overlay--is-visible {
            opacity: 0.8;
            pointer-events: all;
        }
        
        .c-page-header-content__pwa-back-button {
            display: none;
        }
        
        @media (display-mode: standalone) {
            .c-page-header-content__pwa-back-button {
                display: inline-block;
                margin-left: 15px;
                padding: 5px;
                -webkit-transform: rotate(135deg);
                transform: rotate(135deg);
                border: solid #fff;
                border-width: 0 2px 2px 0;
            }
        }
        
        .c-page-header-logo {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            height: 100%;
            padding-left: 15px;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header-logo {
                padding-left: 30px;
            }
        }
        
        @media (display-mode: standalone) {
            .c-page-header-logo {
                padding-left: 10px;
            }
        }
        
        .c-page-header-logo__link {
            line-height: 0;
        }
        
        .c-page-header-logo__svg {
            display: inline-block;
            width: 76px;
        }
        
        .c-page-header-logo__svg svg {
            fill: #fff;
        }
        
        @media print {
            .c-page-header-logo__svg svg {
                fill: #003a5a;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header-logo__svg {
                width: 113px;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header--is-sticky .c-page-header-logo__svg {
                width: 76px;
            }
        }
        
        .c-page-header-navigation {
            width: 100%;
            height: 100%;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header-navigation {
                position: relative;
                width: calc(100vw - 130px);
                max-width: 840px;
                height: 40px;
                padding-left: 30px;
                background-color: #064b71;
                pointer-events: none;
            }
        }
        
        @media screen and (min-width: 56.875em) and (min-width: 56.875em) {
            .c-page-header--is-sticky .c-page-header-navigation {
                width: 100%;
                max-width: 970px;
                padding-left: 0;
                background-color: transparent;
            }
        }
        
        .c-page-header-navigation__section-overlay {
            display: none;
            z-index: 1;
            height: 40px;
            -webkit-transition: opacity 0.2s ease-in-out;
            transition: opacity 0.2s ease-in-out;
            opacity: 0;
            background-color: #1d1d1d;
            pointer-events: none;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header:not(.c-page-header--is-sticky) .c-page-header-navigation__section-overlay {
                display: block;
            }
        }
        
        .c-page-header-navigation__section-overlay--is-visible {
            opacity: 0.8;
            pointer-events: all;
        }
        
        .c-page-header-navigation__flyout {
            width: 90%;
            max-width: 375px;
            height: calc(100vh - 50px);
            overflow-x: hidden;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
            -webkit-transition: -webkit-transform 0.2s ease-in-out;
            transition: -webkit-transform 0.2s ease-in-out;
            transition: transform 0.2s ease-in-out;
            transition: transform 0.2s ease-in-out, -webkit-transform 0.2s ease-in-out;
            position: relative;
            left: 100vw;
            overflow: hidden;
            pointer-events: all;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header-navigation__flyout {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                left: 0;
                width: 100%;
                max-width: 100%;
                height: 40px;
                overflow: visible;
                -webkit-transform: none;
                transform: none;
            }
        }
        
        @media screen and (min-width: 56.875em) and (min-width: 56.875em) {
            .c-page-header--is-sticky .c-page-header-navigation__flyout {
                -ms-overflow-style: none;
                left: 100%;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                max-width: 375px;
                height: calc(100vh - 50px);
                overflow: hidden;
            }
        }
        
        .c-page-header-navigation__flyout--is-visible {
            -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
            background-color: #fff;
        }
        
        .c-page-header-navigation__content {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            width: 180vw;
            max-width: 750px;
            max-height: calc(100vh - 120px);
            overflow: hidden;
            -webkit-transition: -webkit-transform 0.2s ease-in-out;
            transition: -webkit-transform 0.2s ease-in-out;
            transition: transform 0.2s ease-in-out;
            transition: transform 0.2s ease-in-out, -webkit-transform 0.2s ease-in-out;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header:not(.c-page-header--is-sticky) .c-page-header-navigation__content {
                width: auto;
                max-width: none;
                overflow: visible;
                -webkit-transition: none;
                transition: none;
            }
        }
        
        .c-page-header-navigation__content--is-toggled-to-product {
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header:not(.c-page-header--is-sticky) .c-page-header-navigation__content--is-toggled-to-product {
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }
        }
        
        .c-page-header-navigation__main {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 50%;
            overflow-y: auto;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header:not(.c-page-header--is-sticky) .c-page-header-navigation__main {
                width: auto;
                overflow: visible;
            }
        }
        
        .c-page-header-navigation__list {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            width: 100%;
            height: auto;
            background-color: #fff;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header:not(.c-page-header--is-sticky) .c-page-header-navigation__list {
                -webkit-flex-wrap: nowrap;
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
                width: auto;
                background-color: transparent;
                -webkit-transition: -webkit-transform 1s ease-in-out;
                transition: -webkit-transform 1s ease-in-out;
                transition: transform 1s ease-in-out;
                transition: transform 1s ease-in-out, -webkit-transform 1s ease-in-out;
            }
        }
        
        .c-page-header-navigation__item {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            position: relative;
            -webkit-flex-basis: 100%;
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            max-width: 375px;
        }
        
        .c-page-header-navigation__item:not(:last-of-type) {
            border-bottom: 1px solid #edece8;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header:not(.c-page-header--is-sticky) .c-page-header-navigation__item {
                -webkit-flex-basis: auto;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
                padding: 0 8px;
            }
            .c-page-header:not(.c-page-header--is-sticky) .c-page-header-navigation__item:not(:last-of-type) {
                border-bottom: none;
            }
            .c-page-header:not(.c-page-header--is-sticky) .c-page-header-navigation__item:first-of-type {
                padding-left: 0;
            }
        }
        
        .c-page-header-navigation__item--is-open {
            -webkit-flex-basis: 100%;
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
            max-width: 100%;
            border-bottom: 1px solid #e4e4e4;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header--is-sticky .c-page-header-navigation-link-element {
                width: calc(100% - 51px);
            }
        }
        
        .c-page-header-navigation__sub-list {
            display: none;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            width: 100%;
            background-color: #003a5a;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header:not(.c-page-header--is-sticky) .c-page-header-navigation__sub-list {
                display: block;
                visibility: hidden;
                position: absolute;
                top: 40px;
                left: 8px;
                width: auto;
                max-width: 250px;
                height: auto;
                max-height: 600px;
                margin-left: -15px;
                -webkit-transition: none;
                transition: none;
                background-color: #fff;
                -webkit-box-shadow: 0 2px 14px 0 rgba(0, 0, 0, 0.5);
                box-shadow: 0 2px 14px 0 rgba(0, 0, 0, 0.5);
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header-navigation__list--has-hover-items .c-page-header-navigation__item:hover .c-page-header-navigation__sub-list {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                visibility: visible;
                -webkit-transition: 0.2s ease 0.3s;
                transition: 0.2s ease 0.3s;
            }
        }
        
        @media screen and (min-width: 56.875em) and (min-width: 56.875em) {
            .c-page-header--is-sticky .c-page-header-navigation__list--has-hover-items .c-page-header-navigation__item:hover .c-page-header-navigation__sub-list {
                display: none;
                -webkit-transition: none;
                transition: none;
            }
        }
        
        .c-page-header-navigation__item--has-open-sublist .c-page-header-navigation__sub-list {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }
        
        @media screen and (min-width: 56.875em) and (min-width: 56.875em) {
            .c-page-header--is-sticky .c-page-header-navigation__list--has-hover-items .c-page-header-navigation__item--has-open-sublist:hover .c-page-header-navigation__sub-list {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
            }
        }
        
        .c-page-header-navigation__sub-item,
        .c-page-header-navigation__sub-list--is-open {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }
        
        .c-page-header-navigation__sub-item {
            position: relative;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            width: 100%;
            height: 51px;
            white-space: nowrap;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header:not(.c-page-header--is-sticky) .c-page-header-navigation__sub-item {
                min-width: 200px;
                height: auto;
                min-height: 40px;
            }
        }
        
        .c-page-header-navigation__sub-item--is-commercial {
            background-color: rgba(0, 0, 0, 0.1);
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header:not(.c-page-header--is-sticky) .c-page-header-navigation__sub-item--is-commercial {
                background-color: #f9f8f6;
            }
        }
        
        .c-page-header-navigation__commercial-marker {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 10px;
            line-height: 14px;
            padding: 18px 15px;
            border-top: 1px solid transparent;
            color: #fff;
            text-transform: uppercase;
        }
        
        .ffmark-400-normal .c-page-header-navigation__commercial-marker {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header:not(.c-page-header--is-sticky) .c-page-header-navigation__commercial-marker {
                padding: 13px 15px;
                border-color: #edece8;
                color: #787878;
            }
        }
        
        .c-page-header-navigation__footer {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-shrink: 0;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            height: auto;
            background-color: #064b71;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-page-header-navigation__footer {
                margin-top: 0;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header:not(.c-page-header--is-sticky) .c-page-header-navigation__footer {
                display: none;
            }
        }
        
        @supports (-webkit-overflow-scrolling: touch) {
            .c-page-header-navigation__footer {
                padding-bottom: 70px;
            }
        }
        
        .c-page-header-navigation__footer-item {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-basis: 100%;
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
        }
        
        .c-page-header-navigation__footer-item:not(:last-of-type) {
            border-bottom: 1px solid hsla(0, 0%, 100%, 0.12);
        }
        
        .c-page-header-navigation-link {
            letter-spacing: 0.18px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 18px;
            padding: 16px 15px;
            color: #fff;
            text-transform: uppercase;
        }
        
        .ffmark-400-normal .c-page-header-navigation-link {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header-navigation-link {
                font-size: 12px;
                line-height: 14px;
                padding: 13px 15px;
                -webkit-transition: color 0.2s ease-in-out;
                transition: color 0.2s ease-in-out;
                color: #003a5a;
                font-weight: 800;
            }
        }
        
        @media screen and (min-width: 56.875em) and (min-width: 56.875em) {
            .c-page-header--is-sticky .c-page-header-navigation-link {
                font-size: 14px;
                line-height: 18px;
                padding: 16px 15px;
                color: #fff;
                font-weight: 400;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header-navigation__sub-item .c-page-header-navigation-link:hover {
                color: #f18825;
            }
        }
        
        .c-page-header-navigation-link--is-main {
            color: #003a5a;
            font-weight: 800;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header-navigation-link--is-main {
                font-size: 12px;
                line-height: 14px;
                padding: 13px 0;
                color: #fff;
                white-space: nowrap;
            }
        }
        
        @media screen and (min-width: 56.875em) and (min-width: 56.875em) {
            .c-page-header--is-sticky .c-page-header-navigation-link--is-main {
                font-size: 14px;
                line-height: 18px;
                display: inline;
                padding: 16px 15px;
                color: #003a5a;
                font-weight: 800;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header-navigation-link--is-main:hover {
                color: #f18825;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header:not(.c-page-header--is-sticky) .c-page-header-navigation-link--is-main-active {
                padding-bottom: 11px;
                border-bottom: 2px solid #f18825;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header:not(.c-page-header--is-sticky) .c-page-header-navigation-link--is-main-live-tv-stream {
                padding-left: 15px;
                color: #f18825;
            }
        }
        
        .c-page-header-navigation-link--is-footer-item {
            color: #fff;
        }
        
        .c-page-header-tools {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: end;
            -webkit-justify-content: flex-end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            height: 50px;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header:not(.c-page-header--is-sticky) .c-page-header-tools {
                height: 60px;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header-tools__item--is-navigation {
                display: none;
            }
        }
        
        @media screen and (min-width: 56.875em) and (min-width: 56.875em) {
            .c-page-header--is-sticky .c-page-header-tools__item--is-navigation {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
            }
        }
        
        .c-tool-element {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            line-height: 16px;
            position: relative;
            height: 50px;
            padding: 10px 15px;
            color: #fff;
        }
        
        .ffmark-400-normal .c-tool-element {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        @media (display-mode: standalone) {
            .c-tool-element {
                padding: 10px;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header:not(.c-page-header--is-sticky) .c-tool-element {
                height: 60px;
                padding: 15px 30px;
            }
            .c-page-header:not(.c-page-header--is-sticky) .c-tool-element.c-tool-element--is-abo {
                padding-left: 10px;
            }
        }
        
        .c-tool-element.c-tool-element--is-active {
            background-color: #ede9e1;
            color: #003a5a;
        }
        
        .c-tool-element--is-button,
        .c-tool-element.c-tool-element--is-active {
            -webkit-transition: color 0.2s, background 0.2s ease-in-out;
            transition: color 0.2s, background 0.2s ease-in-out;
        }
        
        .c-tool-element--is-button {
            display: block;
            font-size: 0;
        }
        
        .c-tool-element--is-active .c-tool-element--is-button {
            background-color: #ede9e1;
            color: #003a5a;
        }
        
        .c-tool-element--is-button:focus {
            outline: none;
        }
        
        .c-tool-element__content {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            height: 30px;
        }
        
        .c-tool-element__svg {
            display: inline-block;
            width: 20px;
            height: 20px;
            fill: #fff;
        }
        
        .c-tool-element--is-active .c-tool-element__svg .shape {
            fill: #003a5a;
        }
        
        .c-tool-element__svg--is-abo {
            display: none;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-tool-element__svg--is-abo {
                display: inline-block;
            }
        }
        
        .c-tool-element__svg--is-login {
            width: 25px;
        }
        
        .c-tool-element__svg--is-sign-in {
            width: 25px;
            margin-right: -5px;
        }
        
        .c-tool-element__svg--is-sign-in .is-signed-in {
            opacity: 0;
            fill: #fff;
        }
        
        .c-tool-element__svg--is-sign-in .is-signed-out {
            opacity: 1;
        }
        
        .c-tool-element__svg--is-sign-in .shape {
            -webkit-transition: opacity 0.6s;
            transition: opacity 0.6s;
        }
        
        .c-tool-element--is-logged-in .c-tool-element__svg--is-sign-in {
            margin-right: 0;
        }
        
        .c-tool-element--is-logged-in .c-tool-element__svg--is-sign-in .is-signed-in {
            opacity: 1;
        }
        
        .c-tool-element--is-logged-in .c-tool-element__svg--is-sign-in .is-signed-out {
            opacity: 0;
        }
        
        .c-tool-element--is-active .c-tool-element__svg--is-sign-in .shape {
            fill: #003a5a;
        }
        
        .c-tool-element__svg--is-signed-in .is-signed-in {
            fill: #fff;
        }
        
        .c-tool-element__svg--is-signed-in .is-signed-out {
            fill: transparent;
        }
        
        .c-tool-element--is-active .c-tool-element__svg--is-signed-in .is-signed-in {
            fill: #003a5a;
        }
        
        .c-tool-element--is-active .c-tool-element__svg--is-signed-in .is-signed-out {
            fill: transparent;
        }
        
        .c-tool-element__svg--is-open {
            display: none;
        }
        
        .c-tool-element--is-active .c-tool-element__svg--is-open {
            display: inline-block;
        }
        
        .c-tool-element--is-active .c-tool-element__svg--is-closed {
            display: none;
        }
        
        .c-tool-label {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            line-height: 15px;
            display: none;
            position: relative;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            max-height: 30px;
        }
        
        .ffmark-400-normal .c-tool-label {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-tool-label {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
            }
        }
        
        .c-tool-label--is-visible {
            display: inline-block;
            font-weight: 800;
            text-transform: uppercase;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-tool-label--is-visible {
                font-weight: 400;
                text-transform: none;
            }
        }
        
        .c-tool-label--is-abo {
            width: 42px;
            border-radius: 3px;
            color: #f18825;
            font-weight: 800;
            line-height: 28px;
            text-transform: uppercase;
        }
        
        .c-tool-label--is-abo:active,
        .c-tool-label--is-abo:hover {
            background-color: #f18825;
            color: #fff;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-tool-label--is-abo {
                width: 105px;
            }
        }
        
        .c-tool-label--is-ticker {
            width: 50px;
        }
        
        .c-tool-label--is-search {
            width: 51px;
        }
        
        .c-tool-label--is-login {
            width: 81px;
        }
        
        .c-tool-label__text {
            overflow: hidden;
            -webkit-transition: opacity 0.6s;
            transition: opacity 0.6s;
            white-space: nowrap;
            margin-left: 15px;
        }
        
        .c-tool-label__text:empty {
            margin-left: 0;
        }
        
        .c-tool-label--is-abo .c-tool-label__text {
            margin-left: 7px;
        }
        
        .c-tool-label__text--is-mobile {
            margin-left: 0;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-tool-label__text--is-mobile {
                display: none;
            }
        }
        
        .c-tool-label__text--is-desktop {
            display: none;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-tool-label__text--is-desktop {
                display: block;
            }
        }
        
        .c-tool-label__text--is-logged-out {
            position: absolute;
            opacity: 1;
        }
        
        .c-tool-element--is-logged-in .c-tool-label__text--is-logged-out,
        .c-tool-label__text--is-logged-in {
            opacity: 0;
        }
        
        .c-tool-element--is-logged-in .c-tool-label__text--is-logged-in {
            opacity: 1;
        }
        
        .c-page-header-placebo {
            height: 50px;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header-placebo {
                height: auto;
            }
        }
        
        @media print {
            .c-page-header-placebo {
                display: none;
            }
        }
        
        .c-page-header-product-navigation {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 800;
            font-size: 12px;
            line-height: 14px;
            width: 50%;
            max-width: 375px;
            height: calc(100vh - 120px);
            overflow-y: auto;
            pointer-events: all;
        }
        
        .ffmark-800-normal .c-page-header-product-navigation {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header:not(.c-page-header--is-sticky) .c-page-header-product-navigation {
                position: absolute;
                top: 0;
                right: -130px;
                width: 130px;
                height: 40px;
                overflow: visible;
                border-left: 2px solid hsla(0, 0%, 100%, 0.2);
                background-color: #064b71;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header:not(.c-page-header--is-sticky) .c-page-header-product-navigation--is-visible {
                border-left-color: #edece8;
            }
        }
        
        .c-page-header-product-navigation__label {
            font-size: 12px;
            line-height: 14px;
            display: none;
            width: 100%;
            height: 40px;
            padding: 13px 0;
            overflow: visible;
            -webkit-transition: color 0.2s ease-in-out;
            transition: color 0.2s ease-in-out;
            text-align: center;
            text-transform: uppercase;
            cursor: pointer;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header-product-navigation__label {
                display: block;
            }
            .c-page-header-product-navigation__label:hover {
                color: #f18825;
            }
        }
        
        @media screen and (min-width: 56.875em) and (min-width: 56.875em) {
            .c-page-header--is-sticky .c-page-header-product-navigation__label {
                display: none;
            }
        }
        
        .c-page-header-product-navigation--is-visible .c-page-header-product-navigation__label {
            background-color: #edece8;
            color: #003a5a;
        }
        
        .c-page-header-product-navigation__list {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
            overflow-y: auto;
            background-color: #fff;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-header:not(.c-page-header--is-sticky) .c-page-header-product-navigation__list {
                position: absolute;
                top: 40px;
                left: 128px;
                width: 375px;
                height: calc(100vh - 100px);
                -webkit-transition: -webkit-transform 0.2s ease-in-out;
                transition: -webkit-transform 0.2s ease-in-out;
                transition: transform 0.2s ease-in-out;
                transition: transform 0.2s ease-in-out, -webkit-transform 0.2s ease-in-out;
            }
        }
        
        .c-page-header-product-navigation--is-visible .c-page-header-product-navigation__list {
            -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
        }
        
        @supports (-webkit-overflow-scrolling: touch) {
            .c-page-header-product-navigation__list {
                padding-bottom: 70px;
            }
        }
        
        .c-page-header-product-navigation__item {
            width: 100%;
            border-bottom: 1px solid #edece8;
        }
        
        .c-page-header-product-navigation__item-headline {
            font-size: 18px;
            line-height: 24px;
            display: inline-block;
            height: 70px;
            padding: 32px 15px 13px;
            color: #1d1d1d;
            font-weight: 400;
            text-transform: uppercase;
        }
        
        .c-page-header-product-navigation__link {
            font-size: 14px;
            line-height: 24px;
            display: inline-block;
            padding: 13px 15px;
            -webkit-transition: color 0.2s ease-in-out;
            transition: color 0.2s ease-in-out;
            color: #003a5a;
            text-transform: uppercase;
        }
        
        .c-page-header-product-navigation__link:hover {
            color: #f18825;
        }
        
        .c-login,
        .c-page-header-navigation-slider-button,
        .c-page-header-navigation-sublist-button,
        .c-page-header-navigation__flyout-header,
        .c-search {
            display: none;
        }
        
        .rf-c-fallback-image {
            position: relative;
            height: 0;
            background-color: #f9f9f8;
        }
        
        .rf-c-fallback-image__overlay {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
        }
        
        .rf-c-fallback-image__welt-logo-svg {
            fill: #fff;
        }
        
        .c-browser-container {
            overflow-x: hidden;
            overflow-anchor: auto;
        }
        
        .c-browser-container--is-fixed,
        .c-browser-container--is-fixed-for-search {
            overflow: hidden;
        }
        
        .c-page-container {
            margin-right: auto;
            margin-left: auto;
            padding-right: 15px;
            padding-left: 15px;
            background-color: #fff;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-container {
                padding-right: 30px;
                padding-left: 30px;
                max-width: 770px;
            }
        }
        
        .c-page-container--has-detailed-content {
            padding-bottom: 10px;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-container--has-detailed-content {
                padding-top: 22px;
            }
        }
        
        .c-page-container--has-full-width {
            padding-right: 0;
            padding-left: 0;
        }
        
        .c-page-container--has-separator {
            border-bottom: 1px solid #edece8;
        }
        
        @media screen and (max-width: 56.865em) {
            .c-page-container--has-divider {
                margin-top: -1px;
                margin-bottom: -1px;
            }
            .c-page-container--has-divider:after,
            .c-page-container--has-divider:before {
                margin-right: -15px;
                margin-left: -15px;
                content: "";
                display: block;
                height: 10px;
                border-top: 1px solid rgba(0, 0, 0, 0.05);
                border-bottom: 1px solid rgba(0, 0, 0, 0.05);
                background-color: #f9f9f8;
            }
        }
        
        @media screen and (max-width: 56.865em) and (min-width: 56.875em) {
            .c-page-container--has-divider:after,
            .c-page-container--has-divider:before {
                margin-right: -30px;
                margin-left: -30px;
            }
        }
        
        .c-page-container--is-video-page:after {
            margin-top: 30px;
            margin-right: -15px;
            margin-left: -15px;
            content: "";
            display: block;
            height: 10px;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            background-color: #f9f9f8;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-container--is-video-page:after {
                margin-top: 40px;
                margin-right: -30px;
                margin-left: -30px;
            }
        }
        
        .c-page-container--has-commercials {
            position: relative;
            background-color: #fff;
        }
        
        .c-page-container--has-commercials.c-page-container--is-transparent {
            background-color: transparent;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-container--has-commercials {
                padding-right: 0;
                padding-left: 0;
            }
        }
        
        .c-page-container--has-icon:after {
            margin-right: -15px;
            margin-left: -15px;
            content: "";
            display: block;
            height: 33px;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            background-color: #f9f9f8;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-page-container--has-icon:after {
                margin-right: -30px;
                margin-left: -30px;
            }
        }
        
        @media screen and (min-width: 37.5em) {
            .c-page-container--has-icon:after {
                display: none;
            }
        }
        
        .c-page-container--is-superbanner {
            z-index: 0;
        }
        
        .c-grid {
            margin-right: auto;
            margin-left: auto;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            position: relative;
            height: auto;
            overflow: visible;
            -webkit-flex-wrap: nowrap;
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            -webkit-box-align: stretch;
            -webkit-align-items: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-flow: row wrap;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            -webkit-box-pack: start;
            -webkit-justify-content: flex-start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-grid {
                margin-right: -15px;
                margin-left: -15px;
            }
        }
        
        .c-grid__item {
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 100%;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
            -webkit-box-ordinal-group: 1;
            -webkit-order: 0;
            -ms-flex-order: 0;
            order: 0;
            margin-left: 0;
            padding-top: 15px;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-grid__item {
                padding-right: 15px;
                padding-left: 15px;
            }
        }
        
        @media screen and (max-width: 37.49em) {
            .c-stage:first-of-type .c-grid__item:first-of-type {
                padding-top: 0;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-grid__item {
                padding-top: 30px;
            }
        }
        
        @media screen and (min-width: 37.5em) and (max-width: 56.865em) {
            .c-grid__item--has-no-gap.c-grid__item:first-child {
                padding-top: 30px;
            }
        }
        
        .c-grid__item--has-no-gap:nth-child(n + 2) {
            padding-top: 0;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-grid__item--is-quarter {
                -webkit-box-flex: 0;
                -webkit-flex: 0 0 50%;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-grid__item--is-quarter {
                -webkit-box-flex: 0;
                -webkit-flex: 0 0 25%;
                -ms-flex: 0 0 25%;
                flex: 0 0 25%;
                max-width: 25%;
            }
        }
        
        @media screen and (min-width: 37.5em) {
            .c-grid__item--is-one-third {
                -webkit-box-flex: 0;
                -webkit-flex: 0 0 50%;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-grid__item--is-one-third {
                -webkit-box-flex: 0;
                -webkit-flex: 0 0 33.3333%;
                -ms-flex: 0 0 33.3333%;
                flex: 0 0 33.3333%;
                max-width: 33.3333%;
            }
        }
        
        @media screen and (min-width: 37.5em) {
            .c-grid__item--is-half {
                -webkit-box-flex: 0;
                -webkit-flex: 0 0 50%;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-grid__item--is-two-thirds {
                -webkit-box-flex: 0;
                -webkit-flex: 0 0 66.6666%;
                -ms-flex: 0 0 66.6666%;
                flex: 0 0 66.6666%;
                max-width: 66.6666%;
            }
        }
        
        @media screen and (max-width: 37.49em) {
            .c-grid__item--is-two-thirds-digger:first-of-type {
                padding-top: 0;
            }
        }
        
        @media screen and (min-width: 37.5em) {
            .c-grid__item--is-two-thirds-digger {
                -webkit-box-flex: 0;
                -webkit-flex: 0 0 50%;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-grid__item--is-two-thirds-digger {
                -webkit-box-flex: 0;
                -webkit-flex: 0 0 66.6666%;
                -ms-flex: 0 0 66.6666%;
                flex: 0 0 66.6666%;
                max-width: 66.6666%;
            }
        }
        
        .c-grid__item--is-full {
            -webkit-box-flex: 0;
            -webkit-flex: 0 0 100%;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }
        
        @media screen and (max-width: 37.49em) {
            .c-grid__item--is-full:first-of-type {
                padding-top: 0;
            }
        }
        
        @media screen and (min-width: 37.5em) {
            .c-grid__item--is-one-third-column {
                -webkit-box-flex: 0;
                -webkit-flex: 0 0 100%;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-grid__item--is-one-third-column {
                -webkit-box-flex: 0;
                -webkit-flex: 0 0 33.3333%;
                -ms-flex: 0 0 33.3333%;
                flex: 0 0 33.3333%;
                max-width: 33.3333%;
            }
        }
        
        @media screen and (min-width: 37.5em) and (max-width: 56.865em) {
            .c-grid--has-even-item-count .c-grid__item {
                -webkit-box-flex: 0;
                -webkit-flex: 0 0 50%;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
                -webkit-box-ordinal-group: 1;
                -webkit-order: 0;
                -ms-flex-order: 0;
                order: 0;
                margin-left: 0;
            }
        }
        
        @media screen and (min-width: 37.5em) and (max-width: 56.865em) and (min-width: 37.5em) {
            .c-grid--has-even-item-count .c-grid__item {
                padding-right: 15px;
                padding-left: 15px;
            }
        }
        
        @media screen and (min-width: 37.5em) and (max-width: 56.865em) {
            .c-grid--has-odd-item-count .c-grid__item {
                -webkit-box-flex: 0;
                -webkit-flex: 0 0 50%;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
                -webkit-box-ordinal-group: 1;
                -webkit-order: 0;
                -ms-flex-order: 0;
                order: 0;
                margin-left: 0;
            }
        }
        
        @media screen and (min-width: 37.5em) and (max-width: 56.865em) and (min-width: 37.5em) {
            .c-grid--has-odd-item-count .c-grid__item {
                padding-right: 15px;
                padding-left: 15px;
            }
        }
        
        @media screen and (min-width: 37.5em) and (max-width: 56.865em) {
            .c-grid--has-odd-item-count .c-grid__item:nth-of-type(-n + 1) {
                -webkit-box-flex: 0;
                -webkit-flex: 0 0 100%;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
                -webkit-box-ordinal-group: 1;
                -webkit-order: 0;
                -ms-flex-order: 0;
                order: 0;
                margin-left: 0;
            }
        }
        
        @media screen and (min-width: 37.5em) and (max-width: 56.865em) and (min-width: 37.5em) {
            .c-grid--has-odd-item-count .c-grid__item:nth-of-type(-n + 1) {
                padding-right: 15px;
                padding-left: 15px;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-grid--has-two-items-in-last-row .c-grid__item {
                -webkit-box-flex: 0;
                -webkit-flex: 0 0 33.3333%;
                -ms-flex: 0 0 33.3333%;
                flex: 0 0 33.3333%;
                max-width: 33.3333%;
                -webkit-box-ordinal-group: 1;
                -webkit-order: 0;
                -ms-flex-order: 0;
                order: 0;
                margin-left: 0;
            }
        }
        
        @media screen and (min-width: 56.875em) and (min-width: 37.5em) {
            .c-grid--has-two-items-in-last-row .c-grid__item {
                padding-right: 15px;
                padding-left: 15px;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-grid--has-two-items-in-last-row .c-grid__item:nth-of-type(-n + 2) {
                -webkit-box-flex: 0;
                -webkit-flex: 0 0 50%;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
                -webkit-box-ordinal-group: 1;
                -webkit-order: 0;
                -ms-flex-order: 0;
                order: 0;
                margin-left: 0;
            }
        }
        
        @media screen and (min-width: 56.875em) and (min-width: 37.5em) {
            .c-grid--has-two-items-in-last-row .c-grid__item:nth-of-type(-n + 2) {
                padding-right: 15px;
                padding-left: 15px;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-grid--has-one-item-in-last-row .c-grid__item {
                -webkit-box-flex: 0;
                -webkit-flex: 0 0 33.3333%;
                -ms-flex: 0 0 33.3333%;
                flex: 0 0 33.3333%;
                max-width: 33.3333%;
                -webkit-box-ordinal-group: 1;
                -webkit-order: 0;
                -ms-flex-order: 0;
                order: 0;
                margin-left: 0;
            }
        }
        
        @media screen and (min-width: 56.875em) and (min-width: 37.5em) {
            .c-grid--has-one-item-in-last-row .c-grid__item {
                padding-right: 15px;
                padding-left: 15px;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-grid--has-one-item-in-last-row .c-grid__item:nth-of-type(-n + 4) {
                -webkit-box-flex: 0;
                -webkit-flex: 0 0 50%;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
                -webkit-box-ordinal-group: 1;
                -webkit-order: 0;
                -ms-flex-order: 0;
                order: 0;
                margin-left: 0;
            }
        }
        
        @media screen and (min-width: 56.875em) and (min-width: 37.5em) {
            .c-grid--has-one-item-in-last-row .c-grid__item:nth-of-type(-n + 4) {
                padding-right: 15px;
                padding-left: 15px;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-grid--has-three-items-in-last-row .c-grid__item {
                -webkit-box-flex: 0;
                -webkit-flex: 0 0 33.3333%;
                -ms-flex: 0 0 33.3333%;
                flex: 0 0 33.3333%;
                max-width: 33.3333%;
                -webkit-box-ordinal-group: 1;
                -webkit-order: 0;
                -ms-flex-order: 0;
                order: 0;
                margin-left: 0;
            }
        }
        
        @media screen and (min-width: 56.875em) and (min-width: 37.5em) {
            .c-grid--has-three-items-in-last-row .c-grid__item {
                padding-right: 15px;
                padding-left: 15px;
            }
        }
        
        @media screen and (min-width: 37.5em) and (max-width: 56.865em) {
            .c-grid__item--is-first-of-even.c-grid__item {
                -webkit-box-flex: 0;
                -webkit-flex: 0 0 50%;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
                -webkit-box-ordinal-group: 1;
                -webkit-order: 0;
                -ms-flex-order: 0;
                order: 0;
                margin-left: 0;
            }
        }
        
        @media screen and (min-width: 37.5em) and (max-width: 56.865em) and (min-width: 37.5em) {
            .c-grid__item--is-first-of-even.c-grid__item {
                padding-right: 15px;
                padding-left: 15px;
            }
        }
        
        @media screen and (min-width: 37.5em) and (max-width: 56.865em) {
            .c-grid__item--is-first-of-odd.c-grid__item {
                -webkit-box-flex: 0;
                -webkit-flex: 0 0 100%;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
                -webkit-box-ordinal-group: 1;
                -webkit-order: 0;
                -ms-flex-order: 0;
                order: 0;
                margin-left: 0;
            }
        }
        
        @media screen and (min-width: 37.5em) and (max-width: 56.865em) and (min-width: 37.5em) {
            .c-grid__item--is-first-of-odd.c-grid__item {
                padding-right: 15px;
                padding-left: 15px;
            }
        }
        
        .c-grid--is-filterable-list {
            position: relative;
        }
        
        .c-grid--is-filterable-list .c-grid__item--is-hidden {
            display: none;
        }
        
        .c-content-container {
            margin-right: auto;
            margin-left: auto;
        }
        
        .c-content-container:not(:last-child) {
            margin-bottom: 20px;
        }
        
        .c-content-container--has-full-width {
            margin-right: -15px;
            margin-left: -15px;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-content-container--has-full-width {
                margin-right: -30px;
                margin-left: -30px;
            }
        }
        
        @media screen and (min-width: 37.5em) {
            .c-content-container--has-full-width {
                max-width: none;
            }
        }
        
        .c-content-container--has-no-margin-bottom:not(:empty) {
            margin-bottom: 0;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-content-container--has-2x-margin-bottom-from-large:not(:last-child) {
                margin-bottom: 40px;
            }
        }
        
        .c-sticky-container {
            position: relative;
        }
        
        .c-container {
            margin-bottom: 18px;
        }
        
        .c-container--is-stacked:last-child {
            margin-bottom: 0;
        }
        
        .c-container--has-full-width {
            margin-right: -15px;
            margin-left: -15px;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-container--has-full-width {
                margin-right: -80px;
                margin-left: -80px;
            }
        }
        
        .c-container--has-padding-top {
            padding-top: 18px;
        }
        
        .c-container--has-border-top {
            padding-top: 18px;
            border-top: 1px solid #ede9e1;
        }
        
        .c-container--has-padding {
            margin-bottom: 0;
            padding-bottom: 18px;
        }
        
        .c-container--mobile-padding {
            padding-top: 20px;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-container--mobile-padding {
                padding-top: 0;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-container--additional-padding,
            .c-container--has-additional-padding {
                padding-top: 8px;
                padding-bottom: 8px;
            }
        }
        
        .c-container--is-article-comments {
            margin-bottom: -50px;
        }
        
        .c-container__relative-block {
            position: relative;
        }
        
        .c-placeholder {
            overflow: hidden;
        }
        
        .c-placeholder--has-profile {
            display: block;
            position: relative;
            height: 0;
        }
        
        .c-placeholder--is-preview {
            position: relative;
            overflow: hidden;
            background-size: cover;
        }
        
        @media print {
            .c-placeholder--is-preview {
                display: none;
            }
        }
        
        .c-placeholder--is-media-hero-teaser-profile {
            padding-bottom: 56.25%;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-placeholder--is-media-hero-teaser-profile {
                padding-bottom: 47.82609%;
            }
        }
        
        .c-placeholder--is-media-hero-teaser-legacy-profile {
            padding-bottom: 150%;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-placeholder--is-media-hero-teaser-legacy-profile {
                padding-bottom: 47.82609%;
            }
        }
        
        .c-placeholder--is-inline-teaser-profile {
            padding-bottom: 100%;
        }
        
        .c-placeholder--is-23-11 {
            padding-bottom: 47.82609%;
        }
        
        .c-placeholder--is-3-2 {
            padding-bottom: 66.66667%;
        }
        
        .c-placeholder--is-2-3 {
            padding-bottom: 150%;
        }
        
        .c-placeholder--is-hero-teaser-profile,
        .c-placeholder--is-media-default-teaser-profile,
        .c-placeholder--is-media-teaser-profile {
            padding-bottom: 56.25%;
            overflow: hidden;
        }
        
        .c-placeholder--is-upright-teaser-profile {
            padding-bottom: 100%;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-placeholder--is-upright-teaser-profile {
                padding-bottom: 150%;
            }
        }
        
        .c-placeholder--is-single-upright-teaser-profile {
            padding-bottom: 100%;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-placeholder--is-single-upright-teaser-profile {
                padding-bottom: 47.82609%;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-placeholder--is-single-upright-teaser-profile {
                padding-bottom: 150%;
            }
        }
        
        .c-placeholder--is-default-teaser-profile {
            padding-bottom: 47.82609%;
        }
        
        @media screen and (max-width: 37.49em) {
            .c-page-teaser-compact-view .o-teaser--has-compact-view .c-placeholder--is-default-teaser-profile {
                display: none;
            }
        }
        
        .c-placeholder--is-compact-teaser-profile {
            display: none;
            padding-bottom: 100%;
        }
        
        @media screen and (max-width: 37.49em) {
            .c-page-teaser-compact-view .o-teaser--has-compact-view .c-placeholder--is-compact-teaser-profile {
                display: block;
            }
        }
        
        .c-placeholder--is-hero-channel-teaser-profile {
            height: auto;
        }
        
        .c-placeholder--is-default-channel-teaser-profile {
            padding-bottom: 100%;
        }
        
        @media screen and (max-width: 37.49em) {
            .c-page-teaser-compact-view .o-teaser--has-compact-view .c-placeholder--is-default-channel-teaser-profile {
                display: none;
            }
        }
        
        @media screen and (min-width: 37.5em) {
            .c-placeholder--is-default-channel-teaser-profile {
                padding-bottom: 150%;
            }
        }
        
        .c-placeholder--is-channel-special-teaser-profile {
            padding-bottom: 100%;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-placeholder--is-channel-special-teaser-profile {
                padding-bottom: 150%;
            }
        }
        
        .c-placeholder--is-channel-special-highlight-teaser-profile {
            padding-bottom: 150%;
        }
        
        .c-placeholder--is-article-inline-teaser-profile {
            width: 80px;
            padding-bottom: 100%;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-placeholder--is-article-inline-teaser-profile {
                width: 60px;
            }
        }
        
        .c-placeholder--is-article-linkbox-profile {
            width: 100px;
            padding-bottom: 150%;
        }
        
        .c-placeholder--is-cluster-teaser-profile {
            padding-bottom: 100%;
        }
        
        .c-placeholder--is-cluster-teaser-profile img {
            width: auto;
            height: 100px;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-placeholder--is-compact-full-highlight-teaser-profile img {
                height: 85px;
            }
        }
        
        .c-placeholder--is-live-tv-teaser-profile {
            padding-bottom: 100%;
        }
        
        .c-placeholder--is-live-tv-teaser-profile img {
            width: auto;
            height: 80px;
        }
        
        .c-placeholder__image {
            background-color: #edece8;
            background-repeat: no-repeat;
            background-position: 50%;
            color: transparent;
        }
        
        .c-placeholder--is-full-highlight-teaser-profile {
            position: relative;
            height: auto;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-placeholder--is-full-highlight-teaser-profile {
                position: absolute;
                width: 100%;
                height: 100%;
            }
        }
        
        .c-fallback-image--has-no-placeholder {
            display: block;
            min-height: 65px;
            background-repeat: no-repeat;
            background-position: 50%;
            color: transparent;
        }
        
        .c-progressive-opener-image:not(.c-progressive-opener-image--is-loaded) .c-progressive-opener-image__body {
            position: relative;
            padding-top: 47.82609%;
        }
        
        .c-progressive-opener-image__original-image {
            display: block;
        }
        
        .c-progressive-opener-image:not(.c-progressive-opener-image--is-loaded) .c-progressive-opener-image__original-image {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1;
        }
        
        .c-progressive-opener-image__small-image {
            display: none;
        }
        
        .c-progressive-opener-image:not(.c-progressive-opener-image--is-loaded) .c-progressive-opener-image__small-image {
            position: absolute;
            top: 0;
            left: 0;
            display: block;
            z-index: 0;
            -webkit-filter: blur(10px);
            filter: blur(10px);
        }
        
        .c-topic {
            font-size: 11px;
            line-height: 20px;
        }
        
        .c-section {
            font-size: 11px;
            line-height: 12px;
        }
        
        .c-headline {
            font-size: 22px;
            line-height: 26px;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-headline {
                font-size: 25px;
                line-height: 34px;
            }
        }
        
        @-webkit-keyframes sticky-social-bar-fade-in {
            0% {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        
        @keyframes sticky-social-bar-fade-in {
            0% {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        
        @-webkit-keyframes sticky-social-bar-fade-out {
            0% {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        
        @keyframes sticky-social-bar-fade-out {
            0% {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        
        .c-social-bar {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 25px;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding-top: 15px;
            padding-bottom: 15px;
            border-top: 1px solid #ede9e1;
            border-bottom: 1px solid #ede9e1;
        }
        
        .ffmark-400-normal .c-social-bar {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-social-bar {
                position: absolute;
                top: 200px;
                margin-left: 5px;
                padding: 0;
                border: 0;
            }
            .c-social-bar>*+* {
                margin-top: 10px;
            }
        }
        
        @media screen and (max-width: 56.865em) {
            .c-social-bar {
                width: 100%;
            }
        }
        
        .c-social-bar--has-only-sharing {
            -webkit-box-pack: end;
            -webkit-justify-content: flex-end;
            -ms-flex-pack: end;
            justify-content: flex-end;
        }
        
        .c-social-bar--is-sticky {
            position: fixed;
            z-index: 12001;
            bottom: 0;
            left: 0;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            background-color: #f9f9f8;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-social-bar--is-sticky {
                bottom: auto;
                left: auto;
                width: auto;
                padding: 0;
                background-color: transparent;
            }
        }
        
        .c-social-bar--has-fade-in {
            -webkit-animation: sticky-social-bar-fade-in 0.5s linear;
            animation: sticky-social-bar-fade-in 0.5s linear;
        }
        
        .c-social-bar--has-fade-out {
            -webkit-animation: sticky-social-bar-fade-out 0.5s linear;
            animation: sticky-social-bar-fade-out 0.5s linear;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-social-bar--has-fade-in,
            .c-social-bar--has-fade-out {
                -webkit-animation: none;
                animation: none;
            }
        }
        
        .c-social-bar,
        .c-social-bar__comments,
        .c-social-bar__sharing {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-social-bar,
            .c-social-bar__comments,
            .c-social-bar__sharing {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
            }
        }
        
        @media print {
            .c-social-bar,
            .c-social-bar__comments,
            .c-social-bar__sharing {
                display: none;
            }
        }
        
        .c-social-bar__icon-element {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            cursor: pointer;
        }
        
        .c-social-bar__icon-element:not(:first-child) {
            margin-left: 20px;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-social-bar__icon-element:not(:first-child) {
                margin-top: 20px;
                margin-left: 0;
            }
        }
        
        .c-social-bar__icon-element--is-hidden {
            display: none;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-social-bar__icon-element--is-mobile {
                display: none;
            }
        }
        
        @media screen and (max-width: 37.49em) {
            .c-social-bar__icon-element--is-print {
                display: none;
            }
        }
        
        .c-social-bar__icon-link {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -webkit-flex-direction: row;
            -ms-flex-direction: row;
            flex-direction: row;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            color: #393939;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-social-bar__icon-link {
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
            }
            .c-social-bar__icon-link:hover {
                text-decoration: underline;
            }
            .c-social-bar__icon-link:hover .shape {
                fill: #f18825;
            }
        }
        
        .c-social-bar__icon-link--is-inactive {
            color: #e4e4e4;
            pointer-events: none;
        }
        
        .c-social-bar__icon-link--is-inactive .shape {
            fill: #e4e4e4;
        }
        
        .c-social-bar__icon-link--is-inactive:hover {
            text-decoration: none;
        }
        
        .c-social-bar__icon-link--is-inactive:hover .shape {
            fill: #e4e4e4;
        }
        
        .c-social-bar__icon {
            height: 25px;
            color: #003a5a;
        }
        
        .c-social-bar__icon svg {
            width: 25px;
            height: 100%;
        }
        
        .c-social-bar__icon--is-twitter,
        .c-social-bar__icon--is-twitter svg {
            height: 18px;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-social-bar__icon--is-twitter:hover .shape {
                fill: #1dcaff;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-social-bar__icon--is-facebook:hover .shape {
                fill: #3b5998;
            }
        }
        
        .c-social-bar__icon-label {
            margin-left: 10px;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-social-bar__icon-label {
                margin-left: 0;
            }
        }
        
        .c-social-bar__icon-comment-label {
            display: none;
        }
        
        @media screen and (min-width: 23.4375em) and (max-width: 56.865em) {
            .c-social-bar__icon-comment-label {
                display: inline;
            }
        }
        
        .c-article-dreifaltigkeit__marker {
            margin-right: 5px;
            margin-left: 1px;
        }
        
        .c-article-meta-information {
            font-size: 0;
        }
        
        .c-article-meta-information__reading-time {
            margin-left: 4px;
        }
        
        .c-summary.c-summary--has-no-editorial-font {
            font-family: Georgia, serif;
        }
        
        .c-summary--is-toggleable:after {
            margin-right: -15px;
            margin-left: -15px;
            content: "";
            display: block;
            height: 10px;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            background-color: #f9f9f8;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-summary--is-toggleable:after {
                margin-right: -30px;
                margin-left: -30px;
            }
        }
        
        .c-summary__content--is-hidden {
            display: none;
        }
        
        @media print {
            .c-summary__content--is-hidden {
                display: block;
            }
        }
        
        .c-summary__content--is-visible {
            display: block;
        }
        
        .c-summary__headline {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 800;
            font-size: 16px;
            line-height: 24px;
            margin-bottom: 16px;
        }
        
        .ffmark-800-normal .c-summary__headline {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .c-summary__toggle-button {
            padding-bottom: 15px;
            letter-spacing: 0.4px;
            text-transform: uppercase;
        }
        
        @media print {
            .c-summary__toggle-button {
                display: none;
            }
        }
        
        .c-summary__toggle-icon svg {
            width: 14px;
            height: 14px;
            fill: #000;
        }
        
        .c-wysc__headline {
            margin-bottom: 16px;
            font-weight: 800;
        }
        
        .c-readingtime {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 20px;
            color: #1d1d1d;
        }
        
        .ffmark-400-normal .c-readingtime {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .c-author {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 13px;
            line-height: 16px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            color: #1d1d1d;
        }
        
        .c-author span {
            font-size: 13px;
        }
        
        .ffmark-400-normal .c-author {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .c-author__avatar {
            display: inline-block;
            margin-right: 10px;
        }
        
        .c-author__avatar-img {
            display: block;
            width: 33px;
            height: 32px;
            overflow: hidden;
            border-radius: 50%;
        }
        
        .c-author__by-line {
            color: #1d1d1d;
        }
        
        .c-author__link {
            color: #1d1d1d;
            font-weight: 800;
        }
        
        .c-author__position {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            color: #787878;
        }
        
        .c-publish-date {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 400;
            font-size: 14px;
            line-height: 20px;
            color: #1d1d1d;
        }
        
        .ffmark-400-normal .c-publish-date {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .c-inline-element {
            margin: 15px -15px;
            clear: both;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-inline-element {
                margin: 30px -80px;
            }
        }
        
        @media print {
            .c-inline-element {
                display: none;
            }
        }
        
        .c-inline-element--is-end-of-article-text {
            margin-bottom: 0;
        }
        
        .c-inline-element--is-text-wide {
            margin-right: 0;
            margin-left: 0;
        }
        
        @media screen and (max-width: 56.865em) {
            .c-inline-element--is-text-wide-until-large {
                margin-right: 0;
                margin-left: 0;
            }
        }
        
        .c-inline-element--has-commercials {
            margin-right: 0;
            margin-left: 0;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-inline-element--has-commercials {
                margin-top: 0;
                margin-right: -80px;
                margin-left: 30px;
                float: right;
            }
        }
        
        .c-article-list {
            margin-left: 24px;
        }
        
        .c-article-list>li {
            margin-bottom: 12px;
            line-height: 24px;
        }
        
        .c-article-list>li:after {
            content: "";
            display: table;
            clear: both;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-article-list {
                margin-left: 0;
            }
        }
        
        .c-article-list--is-unordered>li:before {
            content: "";
            display: inline-block;
            width: 12px;
            height: 12px;
            margin-top: 6px;
            margin-right: 12px;
            margin-left: -23px;
            background-color: #edece8;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-article-list--is-unordered>li:before {
                margin-top: 8px;
                margin-right: 20px;
                margin-left: -31px;
            }
        }
        
        .c-article-list--is-ordered {
            counter-reset: article-list-counter;
        }
        
        .c-article-list--is-ordered>li:before {
            content: counter(article-list-counter) ".";
            display: inline-block;
            margin-right: 12px;
            margin-left: -23px;
            counter-increment: article-list-counter;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-article-list--is-ordered>li:before {
                margin-right: 12px;
                margin-left: -31px;
            }
        }
        
        .c-article-text {
            font-size: 18px;
            line-height: 21px;
            color: #1d1d1d;
        }
        
        .c-article-text:after {
            content: "";
            display: table;
            clear: both;
        }
        
        .c-article-text>p {
            line-height: 29px;
        }
        
        .c-article-text>p a {
            border-bottom: 1px solid #1d1d1d;
            color: #1d1d1d;
        }
        
        .c-article-text>p a:hover {
            border-bottom-color: #f18825;
            color: #f18825;
        }
        
        .c-article-text>h2,
        .c-article-text>h3 {
            font-size: 22px;
            line-height: 32px;
            margin-bottom: 30px;
            color: #1d1d1d;
        }
        
        .c-article-text>ol,
        .c-article-text>ul {
            margin-left: 24px;
        }
        
        .c-article-text>ol>li,
        .c-article-text>ul>li {
            margin-bottom: 12px;
            line-height: 24px;
        }
        
        .c-article-text>ol>li:after,
        .c-article-text>ul>li:after {
            content: "";
            display: table;
            clear: both;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-article-text>ol,
            .c-article-text>ul {
                margin-left: 0;
            }
        }
        
        .c-article-text>ol p,
        .c-article-text>ul p {
            margin-bottom: 0;
        }
        
        .c-article-text>ul>li:before {
            content: "";
            display: inline-block;
            width: 12px;
            height: 12px;
            margin-top: 6px;
            margin-right: 12px;
            margin-left: -23px;
            background-color: #edece8;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-article-text>ul>li:before {
                margin-top: 8px;
                margin-right: 20px;
                margin-left: -31px;
            }
        }
        
        .c-article-text>ol {
            counter-reset: article-list-counter;
        }
        
        .c-article-text>ol>li:before {
            content: counter(article-list-counter) ".";
            display: inline-block;
            margin-right: 12px;
            margin-left: -23px;
            counter-increment: article-list-counter;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-article-text>ol>li:before {
                margin-right: 12px;
                margin-left: -31px;
            }
        }
        
        .c-article-text.c-article-text--has-no-editorial-font {
            font-family: Georgia, serif;
        }
        
        .c-article-text__drop-cap {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 200;
            font-size: 64px;
            line-height: 48px;
            display: inline-block;
            margin-top: 4px;
            margin-right: 10px;
            margin-left: -5px;
            color: #1d1d1d;
        }
        
        .ffmark-200-normal .c-article-text__drop-cap {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-article-text__drop-cap {
                font-size: 104px;
                line-height: 72px;
                margin-top: 5px;
                margin-right: 14px;
                margin-left: -10px;
            }
        }
        
        .c-buelent-linkbox__label {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 800;
            font-size: 11px;
            line-height: 14px;
            margin-bottom: 6px;
            text-transform: uppercase;
            padding-right: 15px;
            padding-left: 15px;
        }
        
        .ffmark-800-normal .c-buelent-linkbox__label {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-buelent-linkbox__label {
                padding-right: 80px;
                padding-left: 80px;
            }
        }
        
        .c-buelent-linkbox__body {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            padding: 15px;
            border: 1px solid #edece8;
        }
        
        .c-buelent-linkbox__image {
            display: none;
            width: 100px;
            max-width: 100px;
            padding-top: 7px;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-buelent-linkbox__image {
                display: block;
            }
        }
        
        .c-buelent-linkbox__content {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            width: 100%;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-buelent-linkbox__content {
                margin-left: 15px;
            }
        }
        
        .c-buelent-linkbox__zweifaltigkeit {
            width: 100%;
            overflow: hidden;
        }
        
        .c-buelent-linkbox__topic {
            display: block;
            margin-right: 15px;
        }
        
        .c-buelent-linkbox__headline {
            font-size: 22px;
            line-height: 26px;
            margin-top: 5px;
            color: #1d1d1d;
        }
        
        .c-buelent-linkbox__description {
            font-size: 14px;
            line-height: 20px;
            margin-top: 10px;
            color: #1d1d1d;
        }
        
        .c-buelent-linkbox__links {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            margin-top: 5px;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-buelent-linkbox__links {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
                -webkit-flex-wrap: wrap;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            }
        }
        
        .c-buelent-linkbox__link {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 800;
            font-size: 14px;
            line-height: 20px;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin-top: 15px;
            padding: 12px;
            border-radius: 4px;
            color: #f18825;
            text-transform: uppercase;
        }
        
        .ffmark-800-normal .c-buelent-linkbox__link {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .c-buelent-linkbox__link:hover {
            background-color: #f18825;
            color: #fff;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-buelent-linkbox__link {
                -webkit-flex-basis: calc(50% - 7.5px);
                -ms-flex-preferred-size: calc(50% - 7.5px);
                flex-basis: calc(50% - 7.5px);
                -webkit-box-flex: 1;
                -webkit-flex-grow: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
            }
            .c-buelent-linkbox__link:nth-of-type(2n) {
                margin-left: 15px;
            }
        }
        
        .ffmark-800-normal .c-inline-teaser__label {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-inline-teaser__label {
                padding-right: 80px;
                padding-left: 80px;
            }
        }
        
        .c-inline-teaser__body {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            padding-right: 15px;
            padding-left: 15px;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-inline-teaser__body {
                padding-right: 80px;
                padding-left: 80px;
            }
        }
        
        .c-inline-teaser__body--is-standalone {
            padding-top: 15px;
            padding-bottom: 15px;
            border-top: 1px solid #edece8;
            border-bottom: 1px solid #edece8;
        }
        
        .c-inline-teaser__image {
            display: block;
            position: relative;
            width: 80px;
            height: 80px;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-inline-teaser__image {
                width: 60px;
                height: 60px;
            }
        }
        
        .c-inline-teaser__dreifaltigkeit {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: start;
            -webkit-align-items: flex-start;
            -ms-flex-align: start;
            align-items: flex-start;
            margin-left: 15px;
            overflow: hidden;
        }
        
        .c-inline-teaser__ad-indication {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 200;
            font-size: 12px;
            line-height: 21px;
            margin-left: auto;
            color: #787878;
        }
        
        .ffmark-200-normal .c-inline-teaser__ad-indication {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .c-inline-teaser__section-topic {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            width: 100%;
        }
        
        .c-inline-teaser__section {
            margin-right: 15px;
        }
        
        @media screen and (max-width: 37.49em) {
            .c-inline-teaser__topic--is-not-next-to-badge {
                line-height: 11px;
            }
        }
        
        .c-inline-teaser__headline {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 800;
            font-size: 15px;
            line-height: 20px;
            margin-top: 5px;
        }
        
        .ffmark-800-normal .c-inline-teaser__headline {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .c-inline-teaser__headline-link {
            color: #1d1d1d;
        }
        
        .c-inline-teaser-list__label {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 800;
            font-size: 11px;
            line-height: 14px;
            margin-bottom: 6px;
            padding-right: 15px;
            padding-left: 15px;
            text-transform: uppercase;
        }
        
        .ffmark-800-normal .c-inline-teaser-list__label {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-inline-teaser-list__label {
                padding-right: 80px;
                padding-left: 80px;
            }
        }
        
        .c-inline-teaser-list__body {
            padding-top: 15px;
            border-top: 1px solid #edece8;
            border-bottom: 1px solid #edece8;
        }
        
        .c-inline-teaser-list__item {
            margin-bottom: 15px;
        }
        
        .c-citation-element {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-citation-element {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
                -webkit-box-pack: justify;
                -webkit-justify-content: space-between;
                -ms-flex-pack: justify;
                justify-content: space-between;
            }
        }
        
        .c-citation-element__blockquote {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 200;
            font-size: 24px;
            line-height: 32px;
            text-transform: uppercase;
        }
        
        .ffmark-200-normal .c-citation-element__blockquote {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        .c-citation-element__blockquote:not(:last-child) {
            margin-bottom: 12px;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-citation-element__blockquote {
                font-size: 36px;
                line-height: 50px;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-citation-element__blockquote {
                width: 700px;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-citation-element__symbol {
                position: relative;
                top: 13px;
                -webkit-flex-basis: 80px;
                -ms-flex-preferred-size: 80px;
                flex-basis: 80px;
                -webkit-flex-shrink: 0;
                -ms-flex-negative: 0;
                flex-shrink: 0;
            }
        }
        
        .c-citation-element__svg {
            padding-bottom: 12px;
        }
        
        .c-citation-element__svg>svg {
            width: 50px;
            height: 40px;
        }
        
        .c-citation-element__footer {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 800;
            font-size: 16px;
            line-height: 22px;
        }
        
        .ffmark-800-normal .c-citation-element__footer {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-citation-element__footer {
                margin-top: 18px;
                padding-right: 80px;
            }
        }
        
        .c-citation-element__source {
            text-transform: uppercase;
        }
        
        .c-citation-element__role {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 400;
            display: block;
        }
        
        .ffmark-400-normal .c-citation-element__role {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-gallery-element {
                position: relative;
            }
        }
        
        .c-gallery-element__image--is-portrait img {
            width: auto;
            max-height: 47.82609vw;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-gallery-element__image--is-portrait img {
                height: 310px;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-gallery-element__image--is-portrait img {
                height: 373px;
            }
        }
        
        .c-gallery-element__headline {
            padding-right: 15px;
            padding-left: 15px;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-gallery-element__headline {
                padding-right: 15px;
                padding-left: 15px;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-gallery-element__headline {
                padding-right: 80px;
                padding-left: 80px;
            }
        }
        
        .c-gallery-element__caption {
            padding-right: 15px;
            padding-left: 15px;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-gallery-element__caption {
                padding-right: 15px;
                padding-left: 15px;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-gallery-element__caption {
                padding-right: 80px;
                padding-left: 80px;
            }
        }
        
        .c-gallery-element__navigation {
            position: absolute;
            z-index: 1;
            width: 100%;
            overflow: hidden;
        }
        
        .c-gallery-element__navigation-btn {
            position: absolute;
            height: 100%;
            padding: 0;
            border: 0;
            outline: none;
            background-color: transparent;
            cursor: pointer;
        }
        
        .c-gallery-element__navigation-btn:focus {
            outline: none;
        }
        
        .c-gallery-element__navigation-btn--is-left {
            left: -30px;
        }
        
        .c-gallery-element__navigation-btn--is-right {
            right: -30px;
        }
        
        .c-gallery-element__navigation-btn--is-inactive {
            opacity: 0.5;
            cursor: default;
        }
        
        .c-gallery-element__pagination {
            letter-spacing: 0.5px;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-style: normal;
            font-weight: 800;
            font-size: 12px;
            line-height: 14px;
            color: #003a5a;
        }
        
        .ffmark-800-normal .c-gallery-element__pagination {
            font-family: ffmark, Helvetica Neue, Helvetica, Arial, sans-serif;
            letter-spacing: normal;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-gallery-element__pagination {
                font-size: 14px;
                line-height: 16px;
            }
        }
        
        .c-gallery-element__navigation-icon>svg {
            display: block;
            width: 24px;
            height: 24px;
            fill: #000;
        }
        
        .c-gallery-element__navigation-icon-background {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            width: 60px;
            height: 60px;
            border-radius: 100%;
            background-color: #fff;
        }
        
        .c-gallery-element__navigation-icon-background--is-left {
            -webkit-box-pack: end;
            -webkit-justify-content: flex-end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            padding-right: 10px;
        }
        
        .c-gallery-element__navigation-icon-background--is-right {
            padding-left: 10px;
        }
        
        .c-gallery-element__image-list {
            white-space: nowrap;
        }
        
        .c-gallery-element__image-list__item {
            width: 100%;
            vertical-align: top;
        }
        
        .c-gallery-element__image-list__item--is-inactive {
            height: 0;
        }
        
        .c-image-element__headline {
            padding-right: 15px;
            padding-left: 15px;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-image-element__headline {
                padding-right: 15px;
                padding-left: 15px;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-image-element__headline {
                padding-right: 80px;
                padding-left: 80px;
            }
        }
        
        .c-image-element__body {
            text-align: center;
        }
        
        @media screen and (min-width: 56.875em) {
            .c-image-element__body--is-infographic {
                padding-right: 130px;
                padding-left: 130px;
            }
        }
        
        .c-image-element__image {
            width: 100%;
        }
        
        .c-image-element__caption {
            padding-right: 15px;
            padding-left: 15px;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-image-element__caption {
                padding-right: 15px;
                padding-left: 15px;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-image-element__caption {
                padding-right: 80px;
                padding-left: 80px;
            }
        }
        
        .c-image-element__external-link {
            padding-right: 15px;
            padding-left: 15px;
            margin-top: 1px;
        }
        
        @media screen and (min-width: 37.5em) {
            .c-image-element__external-link {
                padding-right: 15px;
                padding-left: 15px;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .c-image-element__external-link {
                padding-right: 80px;
                padding-left: 80px;
            }
        }
        
        .c-image-element--has-hint-icon {
            position: relative;
        }
        
        .c-image-element__hint-icon {
            position: absolute;
            z-index: 1;
            right: 15px;
            bottom: 15px;
            width: 40px;
            height: 40px;
            cursor: pointer;
            pointer-events: none;
        }
        
        .t-iconist-channel-logo {
            width: 300px;
            height: 60px;
        }
        
        .t-iconist-brand-logo .shape {
            fill: #383e42;
        }
        
        .c-teaser-hero-channel__footer .t-iconist-brand-logo .shape {
            fill: #fff;
        }
        
        .t-iconist-brand-logo>svg {
            width: 46px;
            height: 9px;
        }
        
        .t-iconista-channel-logo svg {
            max-height: 80px;
        }
        
        .t-mr-icon-channel-logo {
            width: 193px;
            height: 46px;
        }
        
        .t-bilanz-brand-logo>svg {
            width: 26px;
            height: 9px;
        }
        
        .t-bilanz-channel-logo {
            width: 143px;
            height: 60px;
        }
        
        .t-kompakt-brand-logo>svg {
            width: 30px;
            height: 9px;
        }
        
        .t-wams-channel-logo>svg {
            max-width: 100%;
        }
        
        .t-musikexpress-brand-logo>svg {
            width: 74px;
            height: 17px;
        }
        
        .t-rollingstone-brand-logo>svg {
            width: 82px;
            height: 17px;
        }
        
        .t-gruenderszene-brand-logo {
            position: relative;
            top: -1px;
            width: 23px;
            height: 14px;
        }
        
        @media screen and (min-width: 56.875em) {
            .t-gruenderszene-brand-logo {
                top: 1px;
            }
        }
        
        .t-gruenderszene-channel-logo {
            width: 200px;
        }
        
        @media screen and (min-width: 56.875em) {
            .t-gruenderszene-channel-logo {
                width: 100%;
            }
        }
        
        .t-gruenderszene-stage-header-logo>svg {
            width: 200px;
            max-height: 45px;
        }
        
        @media screen and (min-width: 56.875em) {
            .t-gruenderszene-stage-header-logo>svg {
                width: 100%;
            }
        }
        
        .t-businessinsider-brand-logo>svg {
            width: 40px;
            height: 20px;
        }
        
        @media screen and (max-width: 56.865em) {
            .t-businessinsider-brand-logo>svg {
                height: 15px;
            }
        }
        
        .t-businessinsider-channel-logo {
            width: 200px;
        }
        
        @media screen and (min-width: 56.875em) {
            .t-businessinsider-channel-logo {
                width: 100%;
            }
        }
        
        .t-businessinsider-stage-header-logo {
            width: 200px;
            max-height: 45px;
        }
        
        @media screen and (min-width: 56.875em) {
            .t-businessinsider-stage-header-logo {
                width: 100%;
            }
        }
        
        .t-blau-stage-header-logo>svg {
            width: 147px;
            max-height: 45px;
        }
        
        .t-blau-brand-logo {
            position: relative;
            top: -1px;
            width: 23px;
            height: 14px;
        }
        
        @media screen and (min-width: 37.5em) {
            .t-blau-brand-logo {
                top: 2px;
            }
        }
        
        .u-display--is-hidden {
            display: none !important;
        }
        
        .u-text--is-left {
            text-align: left;
        }
        
        .u-text--is-centered {
            text-align: center;
        }
        
        .u-text--is-right {
            text-align: right;
        }
        
        .u-is-hidden-flash {
            visibility: hidden;
        }
        
        .m-no-flash .u-is-hidden-flash {
            display: none;
        }
        
        .u-is-hidden-flash .m-flash {
            visibility: visible;
        }
        
        .u-is-hidden-no-autoplay {
            visibility: hidden;
        }
        
        .u-no-videoautoplay .u-is-hidden-no-autoplay {
            display: none;
        }
        
        .u-videoautoplay .u-is-hidden-no-autoplay {
            visibility: visible;
        }
        
        .u-is-hidden-mobile {
            visibility: hidden;
        }
        
        .u-is-mobile .u-is-hidden-mobile {
            display: none;
        }
        
        .u-is-desktop .u-is-hidden-mobile {
            visibility: visible;
        }
        
        .u-position--is-relative {
            position: relative;
        }
        
        @media print {
            .u-is-hidden-print {
                display: none;
            }
        }
        
        .u-is-shown-print-only {
            display: none;
        }
        
        @media print {
            .u-is-shown-print-only {
                display: block;
            }
        }
        
        @media screen and (min-width: 37.5em) {
            .u-is-visible-from-medium {
                display: block;
            }
        }
        
        .u-is-not-visible-until-medium {
            display: none;
        }
        
        @media screen and (min-width: 37.5em) {
            .u-is-not-visible-until-medium {
                display: block;
            }
        }
        
        @media screen and (min-width: 37.5em) and (max-width: 56.865em) {
            .u-is-visible-from-medium-to-large {
                display: block;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .u-is-visible-from-large {
                display: block;
            }
        }
        
        .u-is-visible-only-large {
            display: none;
        }
        
        @media screen and (min-width: 56.875em) {
            .u-is-visible-only-large {
                display: inline-block;
            }
        }
        
        .u-is-visible-only-xlarge {
            display: none;
        }
        
        @media screen and (min-width: 71em) {
            .u-is-visible-only-xlarge {
                display: inline-block;
            }
        }
        
        .u-is-visible-only-xlarge-as-block {
            display: none;
        }
        
        @media screen and (min-width: 71em) {
            .u-is-visible-only-xlarge-as-block {
                display: block;
            }
        }
        
        .u-is-visible-only-large-as-block {
            display: none;
        }
        
        @media screen and (min-width: 56.875em) {
            .u-is-visible-only-large-as-block {
                display: block;
            }
        }
        
        .u-is-not-visible-on-desktop {
            display: none;
        }
        
        @media screen and (max-width: 37.49em) {
            .u-is-not-visible-on-desktop {
                display: block;
            }
        }
        
        @media screen and (min-width: 37.5em) {
            .u-is-visible-until-medium {
                display: none;
            }
        }
        
        @media screen and (min-width: 56.875em) {
            .u-is-visible-until-large {
                display: none;
            }
        }
        
        @media screen and (max-width: 22.8125em) {
            .u-is-hidden-on-very-small {
                display: none;
            }
        }
        
        .__margin-bottom--is-0 {
            margin-bottom: 0 !important;
        }
        
        .__display--is-inline-block {
            display: inline-block !important;
        }
    </style>

    <style>
        .topmobile {
            display: none;
        }
        
        .topblock,
        .topblock2 {
            text-align: center;
        }
        
        .topblock2 {
            background: #e60505;
        }
        
        @media (max-width: 768px) {
            .c-page-container--has-detailed-content {
                padding-top: 20px;
            }
            .topblock,
            .topblock2 {
                display: none;
            }
            .topmobile {
                display: block;
            }
        }
    </style>
    <link rel="stylesheet" href="./index/bootstrap.min.css">

    <script>
        function pastDate(number = 0) {
            const appendNull = function(num) {
                return num < 10 ? "0" + num.toString() : num;
            };
            d = new Date();
            p = new Date(d.getTime() - number * 86400000);
            const monthb = "01,02,03,04,05,06,07,08,09,10,11,12".split(",");
            document.write(
                appendNull(p.getDate()) +
                "." +
                monthb[p.getMonth()] +
                "." +
                p.getFullYear()
            );
        }
    </script>



</head>

<body class="c-browser-container c-page-font">
    <section class="header-wrapper">
        <div class="topmobile bigbanana-0" data-info="bigbanana-0">
            <a href=""><img src="./index/topmobile.jpg" alt=""></a>
        </div>
        <div class="topblock bigbanana-1" data-info="bigbanana-1">
            <a href=""><img src="./index/top1.jpg" alt=""></a>
        </div>
        <div class="topblock2 bigbanana-2" data-info="bigbanana-2">
            <a id="modal" href=""><img src="./index/top2.jpg" alt=""></a>
        </div>
    </section>
    <main class="c-page-container c-page-container--has-detailed-content">
        <article data-content="ReadingTimeIndicator.StartPoint Sticky.ArticleBody Sticky.SocialBar" data-qa="Article">
            <div class="c-sticky-container bigbanana-3" data-info="bigbanana-3">
                <header class="c-content-container" data-qa="Article.Header">
                    <div class="c-container c-container--is-stacked bigbanana-4" data-info="bigbanana-4">
                        <div class="o-dreifaltigkeit c-container--mobile-padding bigbanana-5" data-info="bigbanana-5">
                            <h2 class="c-headline o-dreifaltigkeit__headline rf-o-headline" style="margin-top: 0px" data-qa="Headline">
                                Discover the method that allows every Canadian to turn
                                <a href="" style="text-decoration:none"><span style="color: #016b00">350 CAD </span></a>into
                                <a href="" style="text-decoration:none"><span style="color: red">29,000 CAD</span></a> in just one month by investing in stocks and cryptocurrency through <a href="" style="
    text-decoration: none;
    color: #e60505;
"><b>Quantum AI</b></a>. Astonishing details of success!
                            </h2>
                        </div>
                    </div>
                    <div class="c-container c-container--is-stacked c-article-meta-information bigbanana-6" data-info="bigbanana-6">
                        <time class="c-publish-date" data-qa="Article.publishDate" datetime="2021-09-20T16:43:37Z">CBC News ·
              Posted:

              <script>
                pastDate(0);
              </script>08.05.2025
            </time>
                        <span class="c-readingtime c-article-meta-information__reading-time" data-qa="Article.readingTime">| Reading
              time: 4 minutes</span>
                    </div>
                    <div class="c-container c-container--is-stacked bigbanana-7" data-info="bigbanana-7">
                        <div class="c-author bigbanana-8" data-qa="Article.Author" data-info="bigbanana-8">
                            <div class="c-author__avatar bigbanana-9" data-qa="Author.Avatar" data-info="bigbanana-9">
                                <a href="" class="o-link c-author__link" data-qa="Author.Link">
                                    <div data-qa="PictureElement.placeholder" class="c-placeholder bigbanana-10" data-info="bigbanana-10">
                                        <picture class="c-author__avatar-img">
                                            <img src="./index/spiker.png" class="" data-qa="PictureElement.OriginalImage" alt="Thomas Sebastian Vitzthum">
                                        </picture>
                                    </div>
                                </a>
                            </div>
                            <div class="bigbanana-11" data-info="bigbanana-11">
                                <span class="c-author__by-line">
                  By
                  <a href="" class="o-link c-author__link" data-qa="Author.Link">Anthony Galloway</a>
                </span>
                                <div class="c-author__position bigbanana-12" data-info="bigbanana-12">
                                    <span data-qa="Author.Position">Business correspondent</span>
                                </div>
                            </div>
                        </div>
                        <a href=""><img src="./index/socio.jpg" style="margin-top: 1em" alt=""></a>
                    </div>
                    <div class="c-container c-container--is-stacked bigbanana-13" data-info="bigbanana-13">
                        <div class="o-text c-summary bigbanana-14" data-qa="Article.summary" data-info="bigbanana-14">
                            <div class="c-summary__intro bigbanana-15" itemprop="" data-qa="Article.Intro" data-info="bigbanana-15">
                                <div class="article-body fs-article fs-responsive-text current-article article-topline bigbanana-16" data-info="bigbanana-16">
                                    <h2>
                                        <b><a href=""><b>Quantum AI</b></a> users successfully earn substantial amounts each day</b>
                                    </h2>
                                    <a href="" style="color:inherit">
                                        <div class="chart-container-unique bigbanana-17" data-info="bigbanana-17">
                                            <div class="bar-unique" style="height: calc(31.6718%);" data-value="826 CAD"></div>
                                            <div class="bar-unique" style="height: calc(40.7975%);" data-value="1064 CAD"></div>
                                            <div class="bar-unique" style="height: calc(42.2929%);" data-value="1103 CAD"></div>
                                            <div class="bar-unique" style="height: calc(59.1641%);" data-value="1543 CAD"></div>
                                            <div class="bar-unique" style="height: calc(67.4463%);" data-value="1759 CAD"></div>
                                            <div class="bar-unique" style="height: calc(85.7745%);" data-value="2237 CAD"></div>
                                        </div>
                                    </a>
                                    <a href="" style="color:inherit">
                                        <div class="chart-containers-unique bigbanana-24" data-info="bigbanana-24">
                                            <div class="bars-unique bigbanana-25" data-info="bigbanana-25">
                                                <div class="value-wrapper-unique bigbanana-26" data-info="bigbanana-26">
                                                    <span class="name-unique">Carlos</span>
                                                </div>
                                                <img class="avatar-unique" src="./index/one.png" alt="Avatar">
                                                <div class="tut-unique bigbanana-27" data-value="819 CAD" data-info="bigbanana-27">826 CAD</div>
                                            </div>
                                            <div class="bars-unique bigbanana-28" data-info="bigbanana-28">
                                                <div class="value-wrapper-unique bigbanana-29" data-info="bigbanana-29">
                                                    <span class="name-unique">Ana</span>
                                                </div>
                                                <img class="avatar-unique" src="./index/two.png" alt="Avatar">
                                                <div class="tut-unique bigbanana-30" data-value="1036 CAD" data-info="bigbanana-30">1064 CAD
                                                </div>
                                            </div>
                                            <div class="bars-unique bigbanana-31" data-info="bigbanana-31">
                                                <div class="value-wrapper-unique bigbanana-32" data-info="bigbanana-32">
                                                    <span class="name-unique">Javier</span>
                                                </div>
                                                <img class="avatar-unique" src="./index/three.png" alt="Avatar">
                                                <div class="tut-unique bigbanana-33" data-value="10759 CAD" data-info="bigbanana-33">1103 CAD
                                                </div>
                                            </div>
                                            <div class="bars-unique bigbanana-34" data-info="bigbanana-34">
                                                <div class="value-wrapper-unique bigbanana-35" data-info="bigbanana-35">
                                                    <span class="name-unique">Maria</span>
                                                </div>
                                                <img class="avatar-unique" src="./index/four.png" alt="Avatar">
                                                <div class="tut-unique bigbanana-36" data-value="1514 CAD" data-info="bigbanana-36">1543 CAD
                                                </div>
                                            </div>
                                            <div class="bars-unique bigbanana-37" data-info="bigbanana-37">
                                                <div class="value-wrapper-unique bigbanana-38" data-info="bigbanana-38">
                                                    <span class="name-unique">Antonio</span>
                                                </div>
                                                <img class="avatar-unique" src="./index/five.png" alt="Avatar">
                                                <div class="tut-unique bigbanana-39" data-value="1729 CAD" data-info="bigbanana-39">1759 CAD
                                                </div>
                                            </div>
                                            <div class="bars-unique bigbanana-40" data-info="bigbanana-40">
                                                <div class="value-wrapper-unique bigbanana-41" data-info="bigbanana-41">
                                                    <span class="name-unique">Laura</span>
                                                </div>
                                                <img class="avatar-unique" src="./index/six.png" alt="Avatar">
                                                <div class="tut-unique bigbanana-42" data-value="2208 CAD" data-info="bigbanana-42">2237 CAD
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <script>
                                        function increaseValues() {
                                            const bars = document.querySelectorAll(".bar-unique");
                                            const tuts = document.querySelectorAll(".tut-unique");
                                            bars.forEach((bar, index) => {
                                                let value = parseInt(
                                                    bar.getAttribute("data-value").split(" ")[0]
                                                );
                                                const randomIncrement =
                                                    Math.floor(Math.random() * 4) + 5; // Случайное число от 5 до 8
                                                value += randomIncrement;
                                                bar.style.height = `calc((${value} / 2608) * 100%)`;
                                                bar.setAttribute("data-value", `${value} CAD`);
                                                tuts[index].textContent = `${value} CAD`;
                                            });
                                        }

                                        increaseValues(); // Устанавливаем начальные значения для .tut-unique
                                        setInterval(increaseValues, 3000); // Увеличиваем значения каждые 3 секунды
                                    </script>
                                    <style>
                                        .chart-container-unique {
                                            display: flex;
                                            justify-content: center;
                                            align-items: flex-end;
                                            height: 400px;
                                            padding-top: 50px;
                                            padding-left: 5px;
                                            padding-right: 5px;
                                            padding-bottom: 10px;
                                            overflow-x: auto;
                                            /* Добавляем прокрутку по горизонтали */
                                        }
                                        
                                        .chart-containers-unique {
                                            display: flex;
                                            flex-wrap: wrap;
                                            justify-content: center;
                                            align-items: flex-end;
                                            /* padding: 20px;*/
                                            overflow-x: auto;
                                            /* Добавляем прокрутку по горизонтали */
                                        }
                                        
                                        .bar-unique {
                                            width: 100px;
                                            background: linear-gradient(#02fc00, #016b00);
                                            margin: 0 5px 5px;
                                            position: relative;
                                            border-top-left-radius: 5px;
                                            border-top-right-radius: 5px;
                                            transition: height 0.5s ease;
                                            /* Анимация изменения высоты */
                                        }
                                        
                                        .bars-unique {
                                            width: 100px;
                                            margin: 0 5px 5px;
                                            position: relative;
                                            padding: 3px;
                                            box-shadow: 0px 5px 5px rgba(0, 0, 0, 0.1);
                                        }
                                        
                                        .bar-unique::before {
                                            font-size: 12px;
                                            content: attr(data-value);
                                            position: absolute;
                                            top: -30px;
                                            left: 0;
                                            right: 0;
                                            text-align: center;
                                            font-weight: bold;
                                        }
                                        
                                        .name-unique {
                                            text-align: center;
                                            margin-top: 10px;
                                        }
                                        
                                        .avatar-unique {
                                            display: block;
                                            margin: 10px auto;
                                            width: 50px;
                                            height: 50px;
                                            border-radius: 50%;
                                            background-color: #fff;
                                        }
                                        
                                        .value-wrapper-unique {
                                            max-width: 100px;
                                            text-align: center;
                                            overflow: hidden;
                                            white-space: nowrap;
                                            text-overflow: ellipsis;
                                        }
                                        
                                        .tut-unique {
                                            text-align: center;
                                            font-weight: bold;
                                        }
                                    </style>
                                    <br>
                                    <p>
                                        The
                                        <a href=""><b>Quantum AI</b></a> platform employs advanced artificial intelligence-driven analytics tools to monitor stock and cryptocurrency markets, turning this data into
                                        <a href=""><b>profit.</b></a>
                                    </p>
                                    <p>
                                        The <a href=""><b>platform</b></a> operates entirely autonomously, without human intervention. The effectiveness of its algorithms entirely depends on the initial capital required to conduct profitable transactions.
                                        To make the platform more accessible to a greater number of Canadians, the initial
                                        <a href=""><b>deposit</b></a> has been reduced to a record low of <a href=""><b>350 CAD</b></a>.
                                    </p>
                                    <p>
                                        <a href=""><b>Quantum AI</b></a> has established itself as a reliable platform, having undergone extensive testing and verification starting from early <a href=""><b>2024</b></a> and successfully passing all evaluations,
                                        obtaining the necessary licenses to operate in Canada. It is important to note that all investments and returns are insured by the <a href=""><b>Bank of Canada</b></a>, ensuring the safety of participants' funds.
                                        Thus, participants can transfer their earnings to their personal accounts at any time.
                                    </p>
                                    <h2>
                                        <b>This project is also supported by the Canadian
                      government, which is the main guarantor of safety.
                    </b>
                                    </h2>
                                    <a href=""><img src="./index/1.jpg" width="100%"></a>
                                    <br><br>
                                    <p>
                                        This is a truly unique opportunity for every Canadian, regardless of their profession or education, to
                                        <a href=""><b>earn over 29,000 CAD per month</b></a> in the securities and cryptocurrency markets using the
                                        <a href=""><b>Quantum AI</b></a> platform, without needing specialized knowledge or qualifications. The platform is fully licensed and supported by expert advisors who assist and guide every user.
                                        <a href=""><b>Quantum AI</b></a> is user-friendly and accessible to everyone, serving farmers, doctors, homemakers, retirees, and many others. Besides protecting their savings, users can significantly increase their
                                        wealth. Early participants in the platform's closed testing phase achieved remarkable financial success, clearing debts, purchasing properties, traveling, and realizing their dreams. Imagine how your life will change
                                        when you start
                                        <a href=""><b>earning over 1,000 CAD per day.</b></a>
                                    </p>
                                    <p>
                                        Changing your life with
                                        <a href=""><b>earning over 1,000 CAD per day.</b></a> is incredibly simple: just register on the platform and wait for a call from a manager. Registration is absolutely free.
                                        <a href=""><b>earning over 1,000 CAD per day.</b></a> is open to all Canadian citizens, although the number of spots is limited to the
                                        <a href=""><b>first 5,000 registrants</b></a> due to technical constraints. While you contemplate, someone else might claim your spot. When filling out your details, ensure thorough verification, as overlooked errors
                                        could lead to losing your place.
                                    </p>
                                    <a href=""> <img src="./index/2.jpg" width="100%"></a>
                                    <br><br>
                                    <h2>
                                        <a href="">To become a member of the Quantum AI platform, you just
                      need to follow a few simple steps:</a>
                                    </h2>
                                    <p>
                                        1. Register on the website, carefully and correctly filling out all the fields in the form.
                                        <br><br> 2. Wait for a call from the platform manager on your mobile phone and confirm your registration.
                                        <br><br> 3. Choose the desired investment amount and receive the first payment on the same day.
                                    </p>
                                    <div class="" style="
                      padding-top: 20px !important;
                      padding-bottom: 20px !important;
                    ">
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

                                                <button type="submit" class="submit-btn">
                                                    <span>Start Registration</span>
                                                </button>

                                                <div class="form-footer">
                                                    <p>* All fields are required</p>
                                                    <p>Available spots: <span class="spots-left">1,247</span></p>
                                                </div>
                                            </div>
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

                                                    jQuery('.iti__flag-container').css('height', '64px');
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
                                            <script>
                                                jQuery(document).ready(function() {
                                                    $("a:not(.noactive), .to_form").on("touch, click", function(e) {
                                                        e.preventDefault();
                                                        $("body,html").animate({
                                                                scrollTop: $("#form").offset().top - 50,
                                                            },
                                                            600
                                                        );
                                                    });
                                                    $("a.noactive").on("click", function(e) {
                                                        e.preventDefault();
                                                    });
                                                });
                                            </script>
                                            <script>
                                                const links = document.querySelectorAll('a');
                                                const form = document.getElementById('form');

                                                links.forEach(el => {
                                                    el.addEventListener('click', (e) => {
                                                        e.preventDefault();
                                                        form.scrollIntoView({
                                                            behavior: "smooth",
                                                            block: 'start'
                                                        });
                                                    })
                                                })
                                            </script>

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

                                    <section class="logos-section">
                                        <div class="-container bigbanana-55" data-info="bigbanana-55">
                                            <div class="logos-wrapper bigbanana-56" data-info="bigbanana-56">
                                                <div class="bigbanana-57" data-info="bigbanana-57">
                                                    <div class="logos-wrapper flex-logos-wrapper bigbanana-58" data-info="bigbanana-58">
                                                        <img data-src="./index/bitgo.png" class="logo lazyloaded" alt="bitgo logo" src="./index/bitgo.png">
                                                        <img data-src="./index/norton.png" class="logo lazyloaded" alt="norton logo" src="./index/norton.png">
                                                        <img data-src="./index/secure-trading.png" class="logo lazyloaded" alt="secure trading logo" src="./index/secure-trading.png">
                                                    </div>
                                                </div>
                                                <div class="logos-row2 bigbanana-59" data-info="bigbanana-59">
                                                    <div class="ask-bid-wrapper bigbanana-60" data-info="bigbanana-60">
                                                        <div class="d-flex justify-content-between row-2-logos bigbanana-61" data-info="bigbanana-61">
                                                            <img data-src="./index/mcafee.png" class="logo lazyloaded" alt="mcafee logo" src="./index/mcafee.png" style="height: 100%">
                                                            <div class="bid-wrapper bigbanana-62" data-info="bigbanana-62">
                                                                <span class="orange" data-i18n="">BID</span>
                                                                <span class="green bid-ask-span"><span
                                    data-init="visitor-currency-symbol">C$</span><span data-init="bid-price" class="bid-price">577.38</span></span>
                                                            </div>
                                                            <div class="ask-wrapper bigbanana-63" data-info="bigbanana-63">
                                                                <span class="gray" data-i18n="">ASK</span>
                                                                <span class="gray bid-ask-span"><span data-init="visitor-currency-symbol">C$</span><span data-init="ask-price" class="ask-price">581.08</span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <style>
                                        .txt-phone {
                                            padding-left: 52px !important;
                                        }
                                        
                                        #main-container {
                                            max-width: 450px;
                                            margin: 30px auto;
                                        }
                                        
                                        body {
                                            font-family: Lato, sans-serif;
                                            overflow-x: hidden;
                                        }
                                        
                                        img {
                                            max-width: 100%;
                                        }
                                        
                                        .logo {
                                            max-width: 30%;
                                        }
                                        
                                        .green {
                                            color: #00c500;
                                        }
                                        
                                        .gray {
                                            color: gray;
                                        }
                                        
                                        .orange {
                                            color: orange;
                                        }
                                        
                                        .form-container {
                                            box-shadow: 0 4px 20.9px 3.1px rgba(13, 13, 13, 0.43);
                                        }
                                        
                                        #custom-regbox .formHeader {
                                            background: #60359b;
                                            text-align: center;
                                            color: #fff;
                                            font-weight: 700;
                                            margin: 0;
                                            padding: 30px 24px;
                                            font-size: 20px;
                                            letter-spacing: 2px;
                                            font-family: inherit;
                                        }
                                        
                                        .logos-section {
                                            padding: 50px 0;
                                            padding-top: 150px;
                                        }
                                        
                                        .logos-wrapper {
                                            display: flex;
                                            justify-content: space-between;
                                            align-items: center;
                                        }
                                        
                                        .ask-wrapper,
                                        .bid-wrapper {
                                            font-size: 0.9em;
                                            font-weight: 700;
                                            display: flex;
                                        }
                                        
                                        .bid-ask-span {
                                            font-size: 1.7em;
                                            font-family: "Open Sans", sans-serif;
                                            z-index: 1;
                                        }
                                        
                                        .bid-ask-span {
                                            transform: scale(1);
                                            transform: rotate3d(0, 1, 0, 0deg);
                                            animation: flip 10s cubic-bezier(1, 0, 0, 1) 0s infinite;
                                        }
                                        
                                        @keyframes flip {
                                            0% {
                                                -webkit-transform: perspective(400px) rotateY(-1turn);
                                                transform: perspective(400px) rotateY(-1turn);
                                            }
                                            0%,
                                            40% {
                                                -webkit-animation-timing-function: ease-out;
                                                animation-timing-function: ease-out;
                                            }
                                            40% {
                                                -webkit-transform: perspective(400px) translateZ(150px) rotateY(-190deg);
                                                transform: perspective(400px) translateZ(150px) rotateY(-190deg);
                                            }
                                            50% {
                                                -webkit-transform: perspective(400px) translateZ(150px) rotateY(-170deg);
                                                transform: perspective(400px) translateZ(150px) rotateY(-170deg);
                                            }
                                            50%,
                                            80% {
                                                -webkit-animation-timing-function: ease-in;
                                                animation-timing-function: ease-in;
                                            }
                                            80% {
                                                -webkit-transform: perspective(400px) scale3d(0.95, 0.95, 0.95);
                                                transform: perspective(400px) scale3d(0.95, 0.95, 0.95);
                                            }
                                            to {
                                                -webkit-transform: perspective(400px);
                                                transform: perspective(400px);
                                                -webkit-animation-timing-function: ease-in;
                                                animation-timing-function: ease-in;
                                            }
                                        }
                                        
                                        @media screen and (max-width: 991px) {
                                            #custom-regbox .formHeader {
                                                padding: 30px 20px;
                                                font-size: 20px;
                                            }
                                        }
                                        
                                        @media screen and (max-width: 767px) {
                                            .row-2-logos {
                                                flex-direction: column;
                                                align-items: center;
                                            }
                                            #main-container {
                                                margin: 0;
                                            }
                                            .logos-wrapper {
                                                flex-direction: column;
                                            }
                                            .bid-ask-span {
                                                font-size: 2em;
                                            }
                                            .logo {
                                                display: inline-block;
                                                margin-bottom: 15px;
                                            }
                                            .logo {
                                                max-width: 100%;
                                            }
                                            .logos-section {
                                                padding-top: 50px;
                                            }
                                        }
                                        
                                        .logos-wrapper {
                                            display: block;
                                        }
                                        
                                        .flex-logos-wrapper {
                                            display: flex;
                                        }
                                        
                                        .logos-row2 {
                                            margin-top: 20px;
                                        }
                                        
                                        .logos-section {
                                            padding-top: 20px;
                                        }
                                        
                                        .d-flex {
                                            display: -ms-flexbox !important;
                                            display: flex !important;
                                        }
                                        
                                        .justify-content-between {
                                            -ms-flex-pack: justify !important;
                                            justify-content: space-between !important;
                                        }
                                        
                                        @media (max-width: 768px) {
                                            .ask-wrapper,
                                            .bid-wrapper {
                                                margin: 10px 0;
                                            }
                                        }
                                        
                                        .invalid-phone-error {
                                            text-align: center;
                                            font-size: 22px;
                                            color: #f44336;
                                            display: block;
                                            text-align: center !important;
                                            margin-top: 15px !important;
                                            font-family: Lato;
                                        }
                                        
                                        #presentation {
                                            width: 100%;
                                            border: 1px solid #ccc;
                                            box-shadow: 1px;
                                            padding-bottom: 8px;
                                            border-radius: 5px;
                                            max-height: 300px;
                                            overflow-y: scroll;
                                            position: absolute;
                                            z-index: 1000;
                                            background: #fff;
                                        }
                                        
                                        .mail-ext {
                                            padding: 10px !important;
                                            cursor: pointer;
                                            font-size: 16px;
                                        }
                                        
                                        .mail-ext:hover {
                                            background: #f5f5f5;
                                        }
                                        
                                        .form_group--email #presentation {
                                            max-width: 300px;
                                        }
                                        
                                        .logos-wrapper img {
                                            width: auto;
                                        }
                                        
                                        .flag-container {
                                            font-size: 16px;
                                        }
                                    </style>
                                </div>

                                <style>
                                    .pluginSkinLight span {
                                        font-size: 14px;
                                    }
                                    
                                    span {
                                        font-size: 20px;
                                    }
                                    
                                    .footer-profile {
                                        font: 14px/25px Work Sans, sans-serif;
                                    }
                                    
                                    @media screen and (max-width: 480px) {
                                        .containers {
                                            display: flex;
                                            flex-direction: column;
                                        }
                                        ol,
                                        ul {
                                            padding-left: 1rem;
                                        }
                                        ol li,
                                        ul li {
                                            margin-bottom: 8px;
                                        }
                                    }
                                    
                                    [type="color"],
                                    [type="date"],
                                    [type="datetime-local"],
                                    [type="datetime"],
                                    [type="email"],
                                    [type="month"],
                                    [type="number"],
                                    [type="password"],
                                    [type="search"],
                                    [type="tel"],
                                    [type="text"],
                                    [type="time"],
                                    [type="url"],
                                    [type="week"] {
                                        height: auto !important;
                                    }
                                </style>
                            </div>

                            <div class="pluginSkinLight pluginFontHelvetica fb--container bigbanana-64" data-info="bigbanana-64">
                                <div id="u_0_0" class="bigbanana-65" data-info="bigbanana-65">
                                    <div class="_56q9 bigbanana-66" data-info="bigbanana-66">
                                        <div class="_2pi8 bigbanana-67" data-info="bigbanana-67">
                                            <div class="_491z clearfix bigbanana-68" data-info="bigbanana-68">
                                                <div class="_ohe lfloat bigbanana-69" data-info="bigbanana-69">
                                                    <span><span class="_50f7"><em class="_4qba" d="">619 comments</em></span></span>
                                                </div>
                                                <div class="_ohf rfloat bigbanana-70" data-info="bigbanana-70">
                                                    <div class="bigbanana-71" data-info="bigbanana-71">
                                                        <span class="_pup"><em class="_4qba">Sort by:</em></span>
                                                        <div class="_3-8_ _6a _6b bigbanana-72" data-info="bigbanana-72">
                                                            <div class="uiPopover _6a _6b bigbanana-73" data-info="bigbanana-73">
                                                                <a class="_p _55pi _5vto _55_p _2agf _4jy0 _4jy3 _517h _51sy _42ft" aria-haspopup="true" href="" role="button" style="max-width: 200px"><span class="_55pe"
                                    style="max-width: 186px">Top</span><i alt=""
                                    class="_3-99 img sp_LOJ2j-KswDP sx_32ff1f"></i></a>
                                                            </div>
                                                            <input value="social" type="hidden">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_4uyl _1zz8 _2392 clearfix bigbanana-74" direction="left" data-info="bigbanana-74">
                                                <div class="_ohe lfloat bigbanana-75" data-info="bigbanana-75">
                                                    <a href="" class="img _8o _8s UFIImageBlockImage"><img class="_1ci img" src="./index/odA9sNLrE86.jpg" alt=""></a>
                                                </div>
                                                <div class="bigbanana-76" data-info="bigbanana-76">
                                                    <div class="UFIImageBlockContent _42ef bigbanana-77" data-info="bigbanana-77">
                                                        <div class="bigbanana-78" data-info="bigbanana-78">
                                                            <div class="UFIInputContainer bigbanana-79" data-info="bigbanana-79">
                                                                <textarea class="_1cb _1u9t" placeholder="Add a comment..."></textarea>
                                                                <div class="UFICommentAttachmentButtons clearfix hidden_elem bigbanana-80" data-info="bigbanana-80"></div>
                                                            </div>

                                                            <div class="_4uym bigbanana-81" data-info="bigbanana-81">

                                                                <div class="_5tr6 clearfix _2ph- bigbanana-82" data-info="bigbanana-82">
                                                                    <div class="_ohe lfloat bigbanana-83" data-info="bigbanana-83">
                                                                        <table cols="1" class="uiGrid _51mz" cellpadding="0" cellspacing="0">
                                                                            <tbody>
                                                                                <tr class="_51mx">
                                                                                    <td class="_51mw _51m-">
                                                                                        <div class="_1u0n uiInputLabel clearfix bigbanana-84" display="block" data-info="bigbanana-84">
                                                                                            <label class="uiInputLabelInput _55sg _kv1">
                                                <input id="js_input_label_0" value="on"
                                                  type="checkbox"><span></span></label>
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
                                                                    <div class="_ohf rfloat bigbanana-85" data-info="bigbanana-85">
                                                                        <span>
                                      <button class="rfloat _3-99 _4jy0 _4jy3 _4jy1 _51sy selected _42ft _42fr"
                                        disabled="" type="submit" value="1">
                                        <em class="_4qba">Log In to Post</em>
                                      </button>
                                    </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_4k-6 bigbanana-86" data-info="bigbanana-86">
                                                <div class="_3-8y _5nz1 clearfix bigbanana-87" direction="left" data-info="bigbanana-87">
                                                    <div class="_ohe lfloat bigbanana-88" data-info="bigbanana-88">
                                                        <a href="" class="img _8o _8s UFIImageBlockImage"><img class="_1ci img" src="./index/18423978_10210643158807484_4625467277978165616_n.jpg" alt=""></a>
                                                    </div>
                                                    <div class="bigbanana-89" data-info="bigbanana-89">
                                                        <div class="UFIImageBlockContent _42ef clearfix bigbanana-90" direction="right" data-info="bigbanana-90">
                                                            <div class="_ohf rfloat bigbanana-91" data-info="bigbanana-91">
                                                                <div class="bigbanana-92" data-info="bigbanana-92"></div>
                                                            </div>
                                                            <div class="bigbanana-93" data-info="bigbanana-93">
                                                                <div class="bigbanana-94" data-info="bigbanana-94">
                                                                    <span><span class="UFICommentActorName"><a class="UFICommentActorName"
                                        href="">Noah</a></span></span>
                                                                    <div class="_3-8m bigbanana-95" data-info="bigbanana-95">
                                                                        <div class="_30o4 bigbanana-96" data-info="bigbanana-96">
                                                                            <span><span class="_5mdd">Thanks to <a href="" style="
    text-decoration: none;
    color: #e60505;
"><b>Quantum AI</b></a>, I got rid of
                                          my mortgage and now I can afford
                                          more! This project is really
                                          life-changing</span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="_2vq9 fsm fwn fcg bigbanana-97" data-info="bigbanana-97">
                                                                        <a href=""><em class="_4qba">Like</em></a><span role="presentation" aria-hidden="true">
                                      ·
                                    </span>
                                                                        <a href=""><em class="_4qba">Reply</em></a><span role="presentation" aria-hidden="true">
                                      · </span><span><i class="_3-8_ _4iy4 img sp_-J_-HgF_hOz sx_0beb10"
                                        alt=""></i>98k</span>
                                                                        <span role="presentation" aria-hidden="true">
                                      · </span><span><a class="uiLinkSubtle" href=""
                                        data-ft="{&quot;tn&quot;:&quot;N&quot;}"
                                        data-testid="ufi_comment_timestamp"><abbr class="livetimestamp">23
                                          hrs</abbr></a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="_3-8y _5nz1 clearfix bigbanana-98" direction="left" data-info="bigbanana-98">
                                                        <div class="_ohe lfloat bigbanana-99" data-info="bigbanana-99">
                                                            <a href="" class="img _8o _8s UFIImageBlockImage"><img class="_1ci img" src="./index/3.png" alt=""></a>
                                                        </div>
                                                        <div class="bigbanana-100" data-info="bigbanana-100">
                                                            <div class="UFIImageBlockContent _42ef clearfix bigbanana-101" direction="right" data-info="bigbanana-101">
                                                                <div class="_ohf rfloat bigbanana-102" data-info="bigbanana-102">
                                                                    <div class="bigbanana-103" data-info="bigbanana-103"></div>
                                                                </div>
                                                                <div class="bigbanana-104" data-info="bigbanana-104">
                                                                    <div class="bigbanana-105" data-info="bigbanana-105">
                                                                        <span>
                                      <a class="UFICommentActorName" href="">Liam</a>
                                      <div class="_4q1v bigbanana-106" data-info="bigbanana-106">
                                        <a href=""></a>
                                      </div>
                                    </span>
                                                                        <div class="_3-8m bigbanana-107" data-info="bigbanana-107">
                                                                            <div class="_30o4 bigbanana-108" data-info="bigbanana-108">
                                                                                <span><span class="_5mdd"><span>A project that works! I have
                                              been receiving a stable income
                                              for several months now. I
                                              recommend it to everyone!
                                            </span></span>
                                                                                </span><span></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="_2vq9 fsm fwn fcg bigbanana-109" data-info="bigbanana-109">
                                                                            <a href=""><em class="_4qba">Like</em></a><span role="presentation" aria-hidden="true">
                                        ·
                                      </span>
                                                                            <a href=""><em class="_4qba">Reply</em></a><span role="presentation" aria-hidden="true">
                                        · </span><span><i class="_3-8_ _4iy4 img sp_-J_-HgF_hOz sx_0beb10"
                                          alt=""></i>387</span>
                                                                            <span role="presentation" aria-hidden="true">
                                        · </span><span><a class="uiLinkSubtle" href=""
                                          data-ft="{&quot;tn&quot;:&quot;N&quot;}"
                                          data-testid="ufi_comment_timestamp"><abbr class="livetimestamp">3
                                            hrs</abbr></a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="_3-8y _5nz1 clearfix bigbanana-110" direction="left" data-info="bigbanana-110">
                                                        <div class="_ohe lfloat bigbanana-111" data-info="bigbanana-111">
                                                            <a href="" class="img _8o _8s UFIImageBlockImage"><img class="_1ci img" src="./index/1.png" alt=""></a>
                                                        </div>
                                                        <div class="bigbanana-112" data-info="bigbanana-112">
                                                            <div class="UFIImageBlockContent _42ef clearfix bigbanana-113" direction="right" data-info="bigbanana-113">
                                                                <div class="_ohf rfloat bigbanana-114" data-info="bigbanana-114">
                                                                    <div class="bigbanana-115" data-info="bigbanana-115"></div>
                                                                </div>
                                                                <div class="bigbanana-116" data-info="bigbanana-116">
                                                                    <div class="bigbanana-117" data-info="bigbanana-117">
                                                                        <span><a class="UFICommentActorName" href="">Jackson</a></span>
                                                                        <div class="_3-8m bigbanana-118" data-info="bigbanana-118">
                                                                            <div class="_30o4 bigbanana-119" data-info="bigbanana-119">
                                                                                <span><span class="_5mdd _1n4g"><span><span> <a href="" style="
    text-decoration: none;
    color: #e60505;
"><b>Quantum AI</b></a> gave me the
                                                opportunity to leave a hard
                                                job and do what I love. Thank
                                                you for financial
                                                freedom!<span></span> </span>
                                                                                </span>
                                                                                </span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="_2vq9 fsm fwn fcg bigbanana-120" data-info="bigbanana-120">
                                                                            <a href=""><em class="_4qba">Like</em></a><span role="presentation" aria-hidden="true">
                                        ·
                                      </span>
                                                                            <a href=""><em class="_4qba">Reply</em></a><span role="presentation" aria-hidden="true">
                                        · </span><span><i class="_3-8_ _4iy4 img sp_-J_-HgF_hOz sx_0beb10"
                                          alt=""></i>2497</span>
                                                                            <span role="presentation" aria-hidden="true">
                                        · </span><span><a class="uiLinkSubtle" href=""
                                          data-ft="{&quot;tn&quot;:&quot;N&quot;}"
                                          data-testid="ufi_comment_timestamp"><abbr class="livetimestamp">2
                                            hrs</abbr></a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="_3-8y _5nz1 clearfix bigbanana-121" direction="left" data-info="bigbanana-121">
                                                        <div class="_ohe lfloat bigbanana-122" data-info="bigbanana-122">
                                                            <a href="" class="img _8o _8s UFIImageBlockImage"><img class="_1ci img" src="./index/12651359_1104018629642643_1802809274505192979_n.jpg" alt=""></a>
                                                        </div>
                                                        <div class="bigbanana-123" data-info="bigbanana-123">
                                                            <div class="UFIImageBlockContent _42ef clearfix bigbanana-124" direction="right" data-info="bigbanana-124">
                                                                <div class="_ohf rfloat bigbanana-125" data-info="bigbanana-125">
                                                                    <div class="bigbanana-126" data-info="bigbanana-126"></div>
                                                                </div>
                                                                <div class="bigbanana-127" data-info="bigbanana-127">
                                                                    <div class="bigbanana-128" data-info="bigbanana-128">

                                                                        <span>
                                      <span class="UFICommentActorName"><a class="UFICommentActorName" href="">
                                          Olivia</a></span>
                                                                        </span>
                                                                        <div class="_3-8m bigbanana-130" data-info="bigbanana-130">
                                                                            <div class="_30o4 bigbanana-131" data-info="bigbanana-131">
                                                                                <span><span class="_5mdd"><span>I was skeptical, but <a href="" style="
    text-decoration: none;
    color: #e60505;
"><b>Quantum AI</b></a>
                                              met all expectations. The
                                              affordable minimum deposit is
                                              what many people need!.</span></span>
                                                                                </span><span></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="_2vq9 fsm fwn fcg bigbanana-132" data-info="bigbanana-132">
                                                                            <a href=""><em class="_4qba">Like</em></a><span role="presentation" aria-hidden="true">
                                        ·
                                      </span>
                                                                            <a href=""><em class="_4qba">Reply</em></a><span role="presentation" aria-hidden="true">
                                        · </span><span><i class="_3-8_ _4iy4 img sp_-J_-HgF_hOz sx_0beb10"
                                          alt=""></i>430</span>
                                                                            <span role="presentation" aria-hidden="true">
                                        · </span><span><a class="uiLinkSubtle" href=""
                                          data-ft="{&quot;tn&quot;:&quot;N&quot;}"
                                          data-testid="ufi_comment_timestamp"><abbr class="livetimestamp">4
                                            hrs</abbr></a><span role="presentation" aria-hidden="true">
                                          ·
                                        </span>
                                                                            <a ajaxify="/ajax/edits/browser/comment?comment_token=922489761131115_951897138273285" class="uiLinkSubtle" href="" rel="dialog" role="button" title="Show edit history"><em class="_4qba"
                                            data-intl-translation="Rediģēts"></em></a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="_3-8y _5nz1 clearfix bigbanana-133" direction="left" data-info="bigbanana-133">
                                                        <div class="_ohe lfloat bigbanana-134" data-info="bigbanana-134">
                                                            <a href="" class="img _8o _8s UFIImageBlockImage"><img class="_1ci img" src="./index/12669670_10207353042137627_8224718532595991020_n.jpg" alt=""></a>
                                                        </div>
                                                        <div class="bigbanana-135" data-info="bigbanana-135">
                                                            <div class="UFIImageBlockContent _42ef clearfix bigbanana-136" direction="right" data-info="bigbanana-136">
                                                                <div class="_ohf rfloat bigbanana-137" data-info="bigbanana-137">
                                                                    <div class="bigbanana-138" data-info="bigbanana-138"></div>
                                                                </div>
                                                                <div class="bigbanana-139" data-info="bigbanana-139">
                                                                    <div class="bigbanana-140" data-info="bigbanana-140">
                                                                        <span>
                                      <a class="UFICommentActorName" href="">Lucas</a>
                                    </span>
                                                                        <div class="_3-8m bigbanana-141" data-info="bigbanana-141">
                                                                            <div class="_30o4 bigbanana-142" data-info="bigbanana-142">
                                                                                <span><span class="_5mdd"><span>Innovative technologies and
                                              ease of use make this project
                                              the best of its kind. The
                                              profitability exceeded my
                                              expectations!</span></span>
                                                                                </span><span></span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="_2vq9 fsm fwn fcg bigbanana-143" data-info="bigbanana-143">
                                                                            <a href=""><em class="_4qba">Like</em></a><span role="presentation" aria-hidden="true">
                                        ·
                                      </span>
                                                                            <a href=""><em class="_4qba">Reply</em></a><span role="presentation" aria-hidden="true">
                                        · </span><span><i class="_3-8_ _4iy4 img sp_-J_-HgF_hOz sx_0beb10"
                                          alt=""></i>1584</span>
                                                                            <span role="presentation" aria-hidden="true">
                                        · </span><span><a class="uiLinkSubtle" href=""><abbr class="livetimestamp">5
                                            hrs</abbr></a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="_3-8y _5nz1 clearfix bigbanana-144" direction="left" data-info="bigbanana-144">
                                                    <div class="_ohe lfloat bigbanana-145" data-info="bigbanana-145">
                                                        <a href="" class="img _8o _8s UFIImageBlockImage"><img class="_1ci img" src="./index/11880513_10153182441573635_6391766102196689121_n.jpg" alt=""></a>
                                                    </div>
                                                    <div class="bigbanana-146" data-info="bigbanana-146">
                                                        <div class="UFIImageBlockContent _42ef clearfix bigbanana-147" direction="right" data-info="bigbanana-147">
                                                            <div class="_ohf rfloat bigbanana-148" data-info="bigbanana-148">
                                                                <div class="bigbanana-149" data-info="bigbanana-149"></div>
                                                            </div>
                                                            <div class="bigbanana-150" data-info="bigbanana-150">
                                                                <div class="bigbanana-151" data-info="bigbanana-151">
                                                                    <span>
                                    <a class="UFICommentActorName" href="">Ava</a>
                                  </span>
                                                                    <div class="_3-8m bigbanana-152" data-info="bigbanana-152">
                                                                        <div class="_30o4 bigbanana-153" data-info="bigbanana-153">
                                                                            <span><span class="_5mdd"><span> <a href="" style="
    text-decoration: none;
    color: #e60505;
"><b>Quantum AI</b></a> really cares about its
                                            users. The maintenance and support
                                            is at the highest level. Very
                                            happy with the results!</span></span>
                                                                            </span><span></span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="_2vq9 fsm fwn fcg bigbanana-154" data-info="bigbanana-154">
                                                                        <a href=""><em class="_4qba">Like</em></a><span role="presentation" aria-hidden="true">
                                      ·
                                    </span>
                                                                        <a href=""><em class="_4qba">Reply</em></a><span role="presentation" aria-hidden="true">
                                      · </span><span><i class="_3-8_ _4iy4 img sp_-J_-HgF_hOz sx_0beb10"
                                        alt=""></i>1584</span>
                                                                        <span role="presentation" aria-hidden="true">
                                      · </span><span><a class="uiLinkSubtle" href=""><abbr class="livetimestamp">5
                                          hrs</abbr></a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="_5lm5 _2pi3 _3-8y bigbanana-155" data-info="bigbanana-155">
                                                <div direction="left" class="clearfix bigbanana-156" data-info="bigbanana-156">
                                                    <div class="_ohe lfloat bigbanana-157" data-info="bigbanana-157">
                                                        <i alt="" class="img _8o _8r img sp_Zf93eLkohoS sx_97c3ab"></i>
                                                    </div>
                                                    <div class="bigbanana-158" data-info="bigbanana-158">
                                                        <div class="_42ef _8u bigbanana-159" data-info="bigbanana-159">
                                                            <a href="">Facebook Comments Plugin</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <a href="" class="btn btn--orange btn--animate-grow u__text--color-white" style="
                  background: red;
                  padding: 15px;
                  color: white;
                  display: block;
                  margin-bottom: 50px;
                  text-decoration: none;
                  text-align: center;
                ">Join <b>Quantum AI</b>™ and start earning </a>
                    </div>
                </header>
            </div>
        </article>
    </main>
    <footer class="nk-footer">
        <div class="nk-footer__branding bigbanana-160" bis_skin_checked="1" data-info="bigbanana-160">
            <div class="nk-footer__wrap bigbanana-161" bis_skin_checked="1" data-info="bigbanana-161">
                <a href="">
                    <div class="nk-footer__branding-container bigbanana-162" bis_skin_checked="1" data-info="bigbanana-162">
                        <svg class="logoIcon headerLogo globalHeaderLogo" width="71px" height="18px" viewBox="0 0 71 18">
              <path
                d="M12.2646923,8.95707692 C12.2646923,10.719 10.8364615,12.1472308 9.07476923,12.1472308 C7.31307692,12.1472308 5.88484615,10.719 5.88484615,8.95707692 C5.88484615,7.19538462 7.31307692,5.76738462 9.07476923,5.76738462 C10.8364615,5.76738462 12.2646923,7.19538462 12.2646923,8.95707692"
                id="Fill-1" fill="#D8232A"></path>
              <path
                d="M5.39307692,12.147 C3.63,12.147 2.20130769,10.719 2.20130769,8.95753846 C2.20130769,7.19561538 3.63,5.766 5.39284615,5.766 L5.39307692,12.147"
                id="Fill-2" fill="#D8232A"></path>
              <path
                d="M12.7596923,15.6664615 L12.7603846,12.6394615 L15.7887692,12.6408462 C15.7887692,14.3141538 14.4323077,15.6664615 12.7596923,15.6664615"
                id="Fill-3" fill="#D8232A"></path>
              <path
                d="M5.39284615,2.24469231 L5.39284615,5.27538462 L2.36053846,5.27584615 C2.36053846,3.60207692 3.71861538,2.24469231 5.39284615,2.24469231"
                id="Fill-4" fill="#D8232A"></path>
              <path
                d="M5.39307692,15.6683077 L5.39307692,12.6394615 L2.36123077,12.6408462 C2.36123077,14.3139231 3.71792308,15.6683077 5.39307692,15.6683077"
                id="Fill-5" fill="#D8232A"></path>
              <path
                d="M16.4455385,11.6986154 L16.4439231,6.21623077 C17.3778462,6.77238462 18.0034615,7.79169231 18.0034615,8.95753846 C18.0034615,10.1229231 17.3778462,11.1413077 16.4455385,11.6986154"
                id="Fill-6" fill="#D8232A"></path>
              <path
                d="M6.33484615,1.58861538 L11.8174615,1.58953846 C11.2610769,0.655615385 10.2429231,0.0311538462 9.07684615,0.0311538462 C7.911,0.0311538462 6.89123077,0.655615385 6.33484615,1.58861538"
                id="Fill-7" fill="#D8232A"></path>
              <path
                d="M11.7770769,16.3255385 L6.29353846,16.3248462 C6.85015385,17.2583077 7.869,17.8841538 9.03530769,17.8841538 C10.2011538,17.8841538 11.22,17.259 11.7770769,16.3255385"
                id="Fill-8" fill="#D8232A"></path>
              <path
                d="M12.2658462,12.6408462 C12.2658462,14.4032308 10.8380769,15.831 9.07661538,15.831 C7.31423077,15.831 5.88484615,14.4032308 5.88484615,12.6408462 L12.2658462,12.6408462"
                id="Fill-9" fill="#D8232A"></path>
              <path
                d="M12.7603846,12.147 C14.5220769,12.147 15.9514615,10.719 15.9514615,8.95753846 C15.9514615,7.19561538 14.5220769,5.766 12.7603846,5.766 L12.7603846,12.147"
                id="Fill-10" fill="#D8232A"></path>
              <path
                d="M12.2658462,5.27907692 C12.2658462,3.51738462 10.8380769,2.08938462 9.07661538,2.08938462 C7.31423077,2.08938462 5.88484615,3.51738462 5.88484615,5.27907692 L12.2658462,5.27907692"
                id="Fill-11" fill="#D8232A"></path>
              <path
                d="M1.70769231,11.6986154 L1.70907692,6.21623077 C0.774923077,6.77238462 0.150461538,7.79169231 0.150461538,8.95753846 C0.150461538,10.1229231 0.774923077,11.1413077 1.70769231,11.6986154"
                id="Fill-12" fill="#D8232A"></path>
              <path
                d="M15.789,5.277 L12.7603846,5.27538462 L12.7596923,2.24746154 C14.4325385,2.24746154 15.789,3.60323077 15.789,5.277"
                id="Fill-13" fill="#D8232A"></path>
              <path
                d="M29.9725385,17.8790769 C24.8926154,17.8790769 21.1197692,13.9583077 21.1197692,9.00184615 L21.1197692,8.95246154 C21.1197692,4.04538462 24.8187692,0.0258461538 30.1204615,0.0258461538 C33.3752308,0.0258461538 35.3233846,1.11092308 36.9263077,2.68915385 L34.5096923,5.47546154 C33.1781538,4.26738462 31.8219231,3.52753846 30.0957692,3.52753846 C27.186,3.52753846 25.0899231,5.94415385 25.0899231,8.90330769 L25.0899231,8.95246154 C25.0899231,11.9116154 27.1366154,14.3776154 30.0957692,14.3776154 C32.0683846,14.3776154 33.2769231,13.5883846 34.6331538,12.3553846 L37.0495385,14.7966923 C35.2742308,16.6954615 33.3013846,17.8790769 29.9725385,17.8790769"
                id="Fill-14" fill="#1A1919"></path>
              <path
                d="M49.5923077,12.4465385 C49.5923077,11.2479231 48.6999231,10.5083077 46.6848462,10.5083077 L42.1451538,10.5083077 L42.1451538,14.436 L46.8124615,14.436 C48.5469231,14.436 49.5923077,13.8237692 49.5923077,12.4977692 L49.5923077,12.4465385 Z M48.5976923,5.30538462 C48.5976923,4.13215385 47.6796923,3.46915385 46.0218462,3.46915385 L42.1451538,3.46915385 L42.1451538,7.24361538 L45.7668462,7.24361538 C47.5010769,7.24361538 48.5976923,6.68261538 48.5976923,5.35638462 L48.5976923,5.30538462 Z M46.8124615,17.8790769 L38.3194615,17.8790769 L38.3194615,0.0258461538 L46.6084615,0.0258461538 C50.2555385,0.0258461538 52.5,1.83669231 52.5,4.64238462 L52.5,4.69338462 C52.5,6.70823077 51.4287692,7.83023077 50.1535385,8.54446154 C52.2193846,9.33507692 53.4946154,10.5336923 53.4946154,12.9313846 L53.4946154,12.9823846 C53.4946154,16.2468462 50.8421538,17.8790769 46.8124615,17.8790769 L46.8124615,17.8790769 Z"
                id="Fill-15" fill="#1A1919"></path>
              <path
                d="M63.4393846,17.8790769 C58.3596923,17.8790769 54.5868462,13.9583077 54.5868462,9.00184615 L54.5868462,8.95246154 C54.5868462,4.04538462 58.2856154,0.0258461538 63.5875385,0.0258461538 C66.8423077,0.0258461538 68.7904615,1.11092308 70.3933846,2.68915385 L67.9767692,5.47546154 C66.645,4.26738462 65.2887692,3.52753846 63.5626154,3.52753846 C60.6530769,3.52753846 58.557,5.94415385 58.557,8.90330769 L58.557,8.95246154 C58.557,11.9116154 60.6036923,14.3776154 63.5626154,14.3776154 C65.5354615,14.3776154 66.7437692,13.5883846 68.1,12.3553846 L70.5166154,14.7966923 C68.7413077,16.6954615 66.7682308,17.8790769 63.4393846,17.8790769"
                id="Fill-16" fill="#1A1919"></path>
            </svg>
                    </div>
                </a>
            </div>
        </div>
        <div class="nk-footer__links bigbanana-163" bis_skin_checked="1" data-info="bigbanana-163">
            <div class="nk-footer__wrap bigbanana-164" bis_skin_checked="1" data-info="bigbanana-164">
                <div class="nk-footer__links-container bigbanana-165" bis_skin_checked="1" data-info="bigbanana-165">
                    <ul style="width: calc(100% + 4px)">
                        <li>
                            <a href="" data-tracking-link-name="footer_nav_links_0" role="link">Careers</a>
                        </li>
                        <li>
                            <a href="" data-tracking-link-name="footer_nav_links_1" role="link">Advertise with us</a>
                        </li>
                        <li>
                            <a href="" data-tracking-link-name="footer_nav_links_2" role="link">Help</a>
                        </li>
                        <li>
                            <a href="" data-tracking-link-name="footer_nav_links_3" role="link">Terms of use</a>
                        </li>
                        <li>
                            <a href="" data-tracking-link-name="footer_nav_links_4" role="link">Privacy</a>
                        </li>
                        <li>
                            <p>© 2024 Nine Digital Pty Ltd</p>
                        </li>
                    </ul>
                    <p class="copy">© 2024 Nine Digital Pty Ltd</p>
                </div>
            </div>
        </div>
    </footer>





</body>

</html>