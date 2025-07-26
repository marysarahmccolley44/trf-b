<html lang="en" class="hydrated">

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
    <style id="vf-font-size-override">
        .viafoura {
            --base-font-size: 0.625rem;
        }
    </style>
    <title>
        SECRET SUCCESS: Over 200,000 citizens of Canada have achieved financial independence with a new investment platform, earning up to $40000 per month! | CBC News
    </title>
    <meta charset="UTF-8">
    <style data-styles="">
        skip-back-btn,
        skip-forward-btn,
        options-menu,
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
        @media(max-width: 900px) {
            .landingWrapper {
                overflow: scroll;
            }
        }
    </style>
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
        .phoenix-player .phx-video-ui {
            display: block;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0
        }
    </style>
    <style>
        .phoenix-player .phx-audio-ui {
            width: 100%;
            height: 100%;
            background-color: #FFFFFF
        }
        
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata {
            display: flex;
            flex-wrap: wrap
        }
        
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls {
            flex: 0 0 auto;
            margin: 20px
        }
        
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .phx-skip-back-btn,
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .phx-skip-forward-btn,
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .phx-play-btn,
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .phx-stop-btn,
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .phx-pause-btn {
            cursor: pointer;
            border: none;
            vertical-align: middle;
            padding: 0;
            background: transparent
        }
        
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .phx-skip-back-btn:focus,
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .phx-skip-forward-btn:focus,
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .phx-play-btn:focus,
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .phx-stop-btn:focus,
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .phx-pause-btn:focus {
            outline-style: dotted;
            outline-width: 1px;
            outline-color: #000000
        }
        
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls.advertising .phx-skip-forward-btn,
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls.advertising .phx-skip-back-btn {
            pointer-events: none
        }
        
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls.advertising .phx-skip-forward-btn>svg,
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls.advertising .phx-skip-back-btn>svg {
            opacity: 0.5
        }
        
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .phx-skip-back-btn {
            margin-right: 25px
        }
        
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .phx-skip-forward-btn {
            margin-left: 25px
        }
        
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .phx-pause-btn>svg,
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .phx-stop-btn>svg,
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .phx-play-btn>svg {
            width: 60px
        }
        
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .phx-pause-btn:hover polygon,
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .phx-stop-btn:hover polygon,
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .phx-play-btn:hover polygon {
            fill: #e60505
        }
        
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .phx-stop-btn.media-loading {
            pointer-events: none
        }
        
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .primary-controls .phx-stop-btn.media-loading>svg {
            opacity: 0.5
        }
        
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .thumbnail-metadata {
            display: flex;
            flex-basis: 0;
            flex-grow: 999;
            align-items: center
        }
        
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .thumbnail-metadata .audio-ui-thumbnail-wrapper {
            box-shadow: 0px 0px 5px 1px #cbcbcb;
            height: 84.375px;
            flex: 0 0 auto;
            margin-left: 20px
        }
        
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .thumbnail-metadata .audio-ui-thumbnail-wrapper img {
            width: auto;
            height: 84.375px;
            object-fit: contain;
            object-position: center
        }
        
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .thumbnail-metadata .audio-ui-metadata #media-metadata-audio {
            box-sizing: border-box;
            padding: 0 20px
        }
        
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .thumbnail-metadata .audio-ui-metadata #media-metadata-audio .phoenix-showname,
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .thumbnail-metadata .audio-ui-metadata #media-metadata-audio .phoenix-title {
            padding: 0;
            margin: 0
        }
        
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .thumbnail-metadata .audio-ui-metadata #media-metadata-audio .phoenix-showname {
            font-size: 0.8rem;
            font-weight: bold
        }
        
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .thumbnail-metadata .audio-ui-metadata #media-metadata-audio .phoenix-title {
            font-size: 0.85rem;
            line-height: 1.188rem;
            max-height: calc(1.188rem * 2);
            overflow: hidden
        }
        
        .phoenix-player .phx-audio-ui .audio-ui-inner .primary-controls-and-metadata .thumbnail-metadata .audio-ui-metadata #media-metadata-audio.advertising .phoenix-showname {
            text-transform: uppercase
        }
        
        .phoenix-player .phx-audio-ui .audio-ui-inner .secondary-controls {
            display: flex;
            margin: 0 20px;
            position: relative;
            width: calc(100% - 40px)
        }
        
        .phoenix-player .phx-audio-ui .audio-ui-inner .secondary-controls .audio-seekbar-wrapper {
            flex: 1 0 100px;
            padding: 5px 0
        }
        
        .phoenix-player .phx-audio-ui .audio-ui-inner .secondary-controls .time-metadata {
            padding: 8px 20px;
            line-height: normal
        }
        
        .phoenix-player .phx-audio-ui .audio-ui-inner .secondary-controls .time-metadata span {
            color: #000;
            text-shadow: none;
            opacity: 1;
            font-size: 0.8rem
        }
        
        .phoenix-player .phx-audio-ui .audio-ui-inner .secondary-controls .volume-controls-container .phx-volume-controls {
            display: flex
        }
        
        .phoenix-player .phx-audio-ui .audio-ui-inner .secondary-controls .volume-controls-container .phx-muted-btn {
            cursor: pointer;
            background: transparent;
            border: none;
            width: 24px;
            height: 24px;
            box-sizing: content-box;
            position: relative;
            padding: 5px 0
        }
        
        .phoenix-player .phx-audio-ui .audio-ui-inner .secondary-controls .volume-controls-container .phx-volume-slider.audio {
            width: 100%;
            line-height: 26px
        }
    </style>

    <link rel="icon" type="image/x-icon" href="wwwcontent/favicon.ico">



    <link data-chunk="ocelot" rel="stylesheet" href="wwwcontent/styles.4f57de69ac21077239e3.css">


    <style type="text/css">
        /* Skeleton Renderer styles */
        
        #vf-skeleton-container {
            display: block;
            margin: 20px 0;
            overflow: hidden;
        }
        
        .vf-skeleton-generic-block {
            background-color: #ebebeb;
            border-radius: 4px;
            display: block;
            position: relative;
            overflow: hidden;
        }
        
        .vf-skeleton-generic-block::after {
            position: absolute;
            top: 0px;
            right: 0px;
            left: 0px;
            bottom: 0px;
            transform: translateX(-100%);
            background-image: linear-gradient(90deg, rgba(255, 255, 255, 0) 0, rgba(255, 255, 255, 0.2) 20%, rgba(255, 255, 255, 0.5) 60%, rgba(255, 255, 255, 0));
            animation: shimmer 1s infinite;
            content: '';
        }
        
        @keyframes shimmer {
            100% {
                transform: translateX(100%);
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
    </style>



    <link rel="stylesheet" type="text/css" href="wwwcontent/168.6cf8a69d2873c3b6eeeb.css">
    <style type="text/css">
        .viafoura .sr-only {
            border: 0 !important;
            clip: rect(1px, 1px, 1px, 1px) !important;
            -webkit-clip-path: inset(50%) !important;
            clip-path: inset(50%) !important;
            height: 1px !important;
            margin: -1px !important;
            overflow: hidden !important;
            padding: 0 !important;
            position: absolute !important;
            width: 1px !important;
            white-space: nowrap !important
        }
        
        @font-face {
            font-weight: normal;
            font-family: "viafoura";
            font-style: normal;
            src: url("");
            src: url("") format("embedded-opentype"), url("") format("woff2"), url("") format("woff"), url("") format("truetype"), url("") format("svg");
            font-display: swap
        }
        
        .viafoura .vf-flag::before,
        .viafoura .vf-facebook-like::before,
        .viafoura .vf-twitter-tweet::before,
        .viafoura .vf-email-icon::before,
        .viafoura .vf-moderator-menu::before,
        .viafoura .vf-icon-reply::before,
        .viafoura .vf-rt-has-edit li.vf-rt-has-edit-li a::before,
        .viafoura .vf-rtw-pages .vf-rtw-comment-link::before,
        .viafoura .vf-rtw-pages-mini .vf-rtw-count-total::after,
        .viafoura .vf-rtw-comments .vf-widget-desc::before,
        .viafoura .vf-rtw-list .vf-likes::before,
        .viafoura .vf-rtw-list .vf-dislikes::before,
        .viafoura .vf-rtw-list .vf-replies::before,
        .viafoura .vf-rtw-comment-count::after {
            font-weight: normal;
            font-family: "viafoura";
            font-style: normal;
            font-variant: normal;
            text-transform: none;
            speak: none;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }
        
        .viafoura,
        .viafoura html,
        .viafoura body {
            box-sizing: border-box;
            margin: 0;
            padding: 0
        }
        
        .viafoura *,
        .viafoura *::before,
        .viafoura *::after {
            box-sizing: inherit
        }
        
        .viafoura article,
        .viafoura aside,
        .viafoura details,
        .viafoura figcaption,
        .viafoura figure,
        .viafoura footer,
        .viafoura header,
        .viafoura hgroup,
        .viafoura nav,
        .viafoura section {
            display: block;
            margin: 0;
            padding: 0
        }
        
        .viafoura audio,
        .viafoura canvas,
        .viafoura video {
            display: inline-block
        }
        
        .viafoura audio:not([controls]) {
            display: none
        }
        
        .viafoura [hidden] {
            display: none
        }
        
        .viafoura h1,
        .viafoura h2,
        .viafoura h3,
        .viafoura h4,
        .viafoura h5,
        .viafoura h6,
        .viafoura p,
        .viafoura ul,
        .viafoura ol {
            margin: 0;
            padding: 0
        }
        
        .viafoura ul,
        .viafoura ol {
            list-style-type: none
        }
        
        .viafoura a {
            border-width: 0
        }
        
        .viafoura a:hover,
        .viafoura a:active {
            outline: 0
        }
        
        .viafoura abbr[title] {
            border-bottom: 1px dotted
        }
        
        .viafoura b,
        .viafoura strong {
            font-weight: 700
        }
        
        .viafoura blockquote {
            margin: 1em 40px
        }
        
        .viafoura dfn {
            font-style: italic
        }
        
        .viafoura q {
            quotes: none
        }
        
        .viafoura q::before,
        .viafoura q::after {
            content: "";
            content: none
        }
        
        .viafoura small {
            font-size: 85%
        }
        
        .viafoura sub,
        .viafoura sup {
            position: relative;
            font-size: 75%;
            line-height: 0;
            vertical-align: baseline
        }
        
        .viafoura sup {
            top: -0.5em
        }
        
        .viafoura sub {
            bottom: -0.25em
        }
        
        .viafoura dd {
            margin: 0 0 0 40px
        }
        
        .viafoura nav ul,
        .viafoura nav ol {
            margin: 0;
            padding: 0;
            list-style-image: none
        }
        
        .viafoura img {
            vertical-align: middle;
            border: 0;
            -ms-interpolation-mode: bicubic
        }
        
        .viafoura svg:not(:root) {
            overflow: hidden
        }
        
        .viafoura figure {
            margin: 0
        }
        
        .viafoura form {
            margin: 0
        }
        
        .viafoura fieldset {
            margin: 0;
            padding: 0;
            border: 0
        }
        
        .viafoura label {
            cursor: pointer
        }
        
        .viafoura legend {
            margin-left: 0;
            padding: 0;
            white-space: normal;
            border: 0
        }
        
        .viafoura button,
        .viafoura input,
        .viafoura select,
        .viafoura textarea {
            margin: 0;
            font-size: 100%;
            font-size: inherit;
            font-family: inherit;
            line-height: inherit;
            vertical-align: baseline
        }
        
        .viafoura button {
            padding: 0;
            color: inherit;
            text-transform: inherit;
            background: none;
            border: none;
            box-shadow: none
        }
        
        .viafoura button:active {
            color: inherit
        }
        
        .viafoura input {
            padding: 0
        }
        
        .viafoura button,
        .viafoura input[type=button],
        .viafoura input[type=reset],
        .viafoura input[type=submit] {
            overflow: visible;
            cursor: pointer;
            -webkit-appearance: button
        }
        
        .viafoura button[disabled],
        .viafoura input[disabled] {
            cursor: default
        }
        
        .viafoura input::-ms-clear {
            width: 20px;
            color: #9a9a9a
        }
        
        .viafoura input[type=checkbox],
        .viafoura input[type=radio] {
            width: 13px;
            height: 13px;
            padding: 0
        }
        
        .viafoura input[type=search]::-webkit-search-decoration,
        .viafoura input[type=search]::-webkit-search-cancel-button {
            -webkit-appearance: none
        }
        
        .viafoura textarea {
            overflow: auto;
            vertical-align: top;
            resize: vertical
        }
        
        .viafoura input:invalid,
        .viafoura textarea:invalid {
            background-color: #f0dddd
        }
        
        .viafoura table {
            border-collapse: collapse;
            border-spacing: 0
        }
        
        .viafoura td,
        .viafoura tbody th {
            vertical-align: top
        }
        
        .viafoura div,
        .viafoura textarea {
            margin: 0;
            padding: 0
        }
        
        .viafoura,
        .viafoura body {
            --background-color: var(--default-color, #ffffff);
            --light-text-on-background-color: var(--light-text-on-default-color, rgba(0, 0, 0, 0.6));
            --dark-text-on-background-color: var(--dark-text-on-default-color, #000000);
            background-color: #fff;
            background-color: var(--background-color, #ffffff)
        }
        
        @font-face {
            font-weight: 300;
            font-family: "Roboto";
            font-style: normal;
            font-display: swap;
            src: local(""), url("wwwcontent/roboto-300.woff2") format("woff2"), url("wwwcontent/roboto-300.woff") format("woff"), url("wwwcontent/roboto-300.ttf") format("truetype"), url("") format("svg")
        }
        
        @font-face {
            font-weight: 300;
            font-family: "Roboto";
            font-style: italic;
            font-display: swap;
            src: local(""), url("wwwcontent/roboto-300italic.woff2") format("woff2"), url("wwwcontent/roboto-300italic.woff") format("woff"), url("wwwcontent/roboto-300italic.ttf") format("truetype"), url("") format("svg")
        }
        
        @font-face {
            font-weight: 400;
            font-family: "Roboto";
            font-style: normal;
            font-display: swap;
            src: local(""), url("wwwcontent/roboto-regular.woff2") format("woff2"), url("wwwcontent/roboto-regular.woff") format("woff"), url("wwwcontent/roboto-regular.ttf") format("truetype"), url("") format("svg")
        }
        
        @font-face {
            font-weight: 400;
            font-family: "Roboto";
            font-style: italic;
            font-display: swap;
            src: local(""), url("wwwcontent/roboto-italic.woff2") format("woff2"), url("wwwcontent/roboto-italic.woff") format("woff"), url("wwwcontent/roboto-italic.ttf") format("truetype"), url("") format("svg")
        }
        
        @font-face {
            font-weight: 500;
            font-family: "Roboto";
            font-style: normal;
            font-display: swap;
            src: local(""), url("wwwcontent/roboto-500.woff2") format("woff2"), url("wwwcontent/roboto-500.woff") format("woff"), url("wwwcontent/roboto-500.ttf") format("truetype"), url("") format("svg")
        }
        
        @font-face {
            font-weight: 500;
            font-family: "Roboto";
            font-style: italic;
            font-display: swap;
            src: local(""), url("wwwcontent/roboto-500italic.woff2") format("woff2"), url("wwwcontent/roboto-500italic.woff") format("woff"), url("wwwcontent/roboto-500italic.ttf") format("truetype"), url("") format("svg")
        }
        
        @font-face {
            font-weight: 700;
            font-family: "Roboto";
            font-style: normal;
            font-display: swap;
            src: local(""), url("roboto-700.woff2") format("woff2"), url("roboto-700.woff") format("woff"), url("roboto-700.ttf") format("truetype"), url("") format("svg")
        }
        
        @font-face {
            font-weight: 700;
            font-family: "Roboto";
            font-style: italic;
            font-display: swap;
            src: local(""), url("roboto-700italic.woff2") format("woff2"), url("roboto-700italic.woff") format("woff"), url("roboto-700italic.ttf") format("truetype"), url("") format("svg")
        }
        
        .viafoura,
        .viafoura body {
            color: #000;
            color: var(--dark-text-on-background-color, #000000);
            font-family: Roboto, sans-serif;
            font-family: var(--primary-font, Roboto, sans-serif);
            font-weight: 400;
            font-size: 87.5%;
            line-height: 1.3
        }
        
        .viafoura h1,
        .viafoura .h1,
        .viafoura h2,
        .viafoura .h2,
        .viafoura h3,
        .viafoura .h3,
        .viafoura h4,
        .viafoura .h4,
        .viafoura h5,
        .viafoura .h5,
        .viafoura h6,
        .viafoura .h6 {
            font-weight: 400
        }
        
        .viafoura h1,
        .viafoura .h1 {
            font-size: 2.86em
        }
        
        .viafoura h2,
        .viafoura .h2 {
            font-size: 2.3em
        }
        
        .viafoura h3,
        .viafoura .h3 {
            font-weight: 300;
            font-size: 1.43em
        }
        
        .viafoura h4,
        .viafoura .h4 {
            font-size: 1.14em
        }
        
        .viafoura h5,
        .viafoura .h5,
        .viafoura h6,
        .viafoura .h6 {
            font-size: 1em
        }
        
        .viafoura .vf-comment-html,
        .viafoura .vf-content {
            line-height: 1.8
        }
        
        .viafoura .vf-text-small {
            font-size: .857em
        }
        
        .viafoura em {
            font-weight: 600;
            font-style: normal
        }
        
        .viafoura strong,
        .viafoura .vf-strong {
            text-transform: uppercase
        }
        
        .viafoura .vf-emph {
            font-style: italic
        }
        
        .viafoura .vf-label {
            font-size: .715em
        }
        
        .viafoura .vf-label.vf-label-upper {
            text-transform: uppercase
        }
        
        .viafoura .vf-label.vf-label-heavy {
            font-weight: 900
        }
        
        .viafoura .vf-heading-text {
            font-size: calc(var(--base-font-size, 0.625rem)*var(--x-large-font, 3.2))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-heading-text {
                font-size: calc(var(--base-font-size, 0.625rem)*var(--x-large-mobile-font, 2.5))
            }
        }
        
        .viafoura .vf-subheading-text {
            font-size: calc(var(--base-font-size, 0.625rem)*var(--large-font, 2))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-subheading-text {
                font-size: calc(var(--base-font-size, 0.625rem)*var(--large-mobile-font, 2))
            }
        }
        
        .viafoura .vf-primary-text {
            font-size: calc(var(--base-font-size, 0.625rem)*var(--medium-font, 1.5))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-primary-text {
                font-size: calc(var(--base-font-size, 0.625rem)*var(--medium-mobile-font, 1.4))
            }
        }
        
        .viafoura .vf-secondary-text {
            font-size: calc(var(--base-font-size, 0.625rem)*var(--small-font, 1.2))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-secondary-text {
                font-size: calc(var(--base-font-size, 0.625rem)*var(--small-mobile-font, 1.2))
            }
        }
        
        .viafoura .vf-label-text {
            font-size: calc(var(--base-font-size, 0.625rem)*var(--x-small-font, 1))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-label-text {
                font-size: calc(var(--base-font-size, 0.625rem)*var(--x-small-mobile-font, 1))
            }
        }
        
        .viafoura .vf-body-text--deprecated {
            font-size: calc(var(--base-font-size, 0.625rem)*var(--body-font, 1.4))
        }
        
        .viafoura .vf-label-text {
            text-transform: uppercase
        }
        
        .viafoura .vf-label-text--default-case {
            text-transform: none
        }
        
        .viafoura .vf-xx-tight-margin {
            margin: 5px;
            margin: calc(1 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-tight-margin {
                margin: 4px;
                margin: calc(1 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-xx-tight-margin-top {
            margin-top: 5px;
            margin-top: calc(1 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-tight-margin-top {
                margin-top: 4px;
                margin-top: calc(1 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-xx-tight-margin-right {
            margin-right: 5px;
            margin-right: calc(1 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-tight-margin-right {
                margin-right: 4px;
                margin-right: calc(1 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-xx-tight-margin-bottom {
            margin-bottom: 5px;
            margin-bottom: calc(1 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-tight-margin-bottom {
                margin-bottom: 4px;
                margin-bottom: calc(1 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-xx-tight-margin-left {
            margin-left: 5px;
            margin-left: calc(1 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-tight-margin-left {
                margin-left: 4px;
                margin-left: calc(1 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-xx-tight-padding {
            padding: 5px;
            padding: calc(1 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-tight-padding {
                padding: 4px;
                padding: calc(1 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-xx-tight-padding-top {
            padding-top: 5px;
            padding-top: calc(1 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-tight-padding-top {
                padding-top: 4px;
                padding-top: calc(1 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-xx-tight-padding-right {
            padding-right: 5px;
            padding-right: calc(1 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-tight-padding-right {
                padding-right: 4px;
                padding-right: calc(1 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-xx-tight-padding-bottom {
            padding-bottom: 5px;
            padding-bottom: calc(1 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-tight-padding-bottom {
                padding-bottom: 4px;
                padding-bottom: calc(1 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-xx-tight-padding-left {
            padding-left: 5px;
            padding-left: calc(1 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-tight-padding-left {
                padding-left: 4px;
                padding-left: calc(1 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-xx-tight-grid-gap {
            grid-gap: 5px;
            grid-gap: calc(1 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-tight-grid-gap {
                grid-gap: 4px;
                grid-gap: calc(1 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-xx-tight-border-spacing {
            border-spacing: 5px;
            border-spacing: calc(1 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-tight-border-spacing {
                border-spacing: 4px;
                border-spacing: calc(1 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-xx-tight-vertical-margin-gap>*+* {
            margin-top: 5px;
            margin-top: calc(1 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-tight-vertical-margin-gap>*+* {
                margin-top: 4px;
                margin-top: calc(1 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-xx-tight-vertical-padding-gap>*+* {
            padding-top: 5px;
            padding-top: calc(1 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-tight-vertical-padding-gap>*+* {
                padding-top: 4px;
                padding-top: calc(1 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-xx-tight-horizontal-margin-gap>*+* {
            margin-left: 5px;
            margin-left: calc(1 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-tight-horizontal-margin-gap>*+* {
                margin-left: 4px;
                margin-left: calc(1 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-xx-tight-horizontal-padding-gap>*+* {
            padding-left: 5px;
            padding-left: calc(1 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-tight-horizontal-padding-gap>*+* {
                padding-left: 4px;
                padding-left: calc(1 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-tight-margin {
            margin: 10px;
            margin: calc(2 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-tight-margin {
                margin: 8px;
                margin: calc(2 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-tight-margin-top {
            margin-top: 10px;
            margin-top: calc(2 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-tight-margin-top {
                margin-top: 8px;
                margin-top: calc(2 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-tight-margin-right {
            margin-right: 10px;
            margin-right: calc(2 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-tight-margin-right {
                margin-right: 8px;
                margin-right: calc(2 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-tight-margin-bottom {
            margin-bottom: 10px;
            margin-bottom: calc(2 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-tight-margin-bottom {
                margin-bottom: 8px;
                margin-bottom: calc(2 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-tight-margin-left {
            margin-left: 10px;
            margin-left: calc(2 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-tight-margin-left {
                margin-left: 8px;
                margin-left: calc(2 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-tight-padding {
            padding: 10px;
            padding: calc(2 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-tight-padding {
                padding: 8px;
                padding: calc(2 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-tight-padding-top {
            padding-top: 10px;
            padding-top: calc(2 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-tight-padding-top {
                padding-top: 8px;
                padding-top: calc(2 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-tight-padding-right {
            padding-right: 10px;
            padding-right: calc(2 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-tight-padding-right {
                padding-right: 8px;
                padding-right: calc(2 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-tight-padding-bottom {
            padding-bottom: 10px;
            padding-bottom: calc(2 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-tight-padding-bottom {
                padding-bottom: 8px;
                padding-bottom: calc(2 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-tight-padding-left {
            padding-left: 10px;
            padding-left: calc(2 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-tight-padding-left {
                padding-left: 8px;
                padding-left: calc(2 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-tight-grid-gap {
            grid-gap: 10px;
            grid-gap: calc(2 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-tight-grid-gap {
                grid-gap: 8px;
                grid-gap: calc(2 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-tight-border-spacing {
            border-spacing: 10px;
            border-spacing: calc(2 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-tight-border-spacing {
                border-spacing: 8px;
                border-spacing: calc(2 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-tight-vertical-margin-gap>*+* {
            margin-top: 10px;
            margin-top: calc(2 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-tight-vertical-margin-gap>*+* {
                margin-top: 8px;
                margin-top: calc(2 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-tight-vertical-padding-gap>*+* {
            padding-top: 10px;
            padding-top: calc(2 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-tight-vertical-padding-gap>*+* {
                padding-top: 8px;
                padding-top: calc(2 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-tight-horizontal-margin-gap>*+* {
            margin-left: 10px;
            margin-left: calc(2 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-tight-horizontal-margin-gap>*+* {
                margin-left: 8px;
                margin-left: calc(2 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-tight-horizontal-padding-gap>*+* {
            padding-left: 10px;
            padding-left: calc(2 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-tight-horizontal-padding-gap>*+* {
                padding-left: 8px;
                padding-left: calc(2 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-tight-margin {
            margin: 15px;
            margin: calc(3 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-tight-margin {
                margin: 12px;
                margin: calc(3 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-tight-margin-top {
            margin-top: 15px;
            margin-top: calc(3 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-tight-margin-top {
                margin-top: 12px;
                margin-top: calc(3 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-tight-margin-right {
            margin-right: 15px;
            margin-right: calc(3 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-tight-margin-right {
                margin-right: 12px;
                margin-right: calc(3 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-tight-margin-bottom {
            margin-bottom: 15px;
            margin-bottom: calc(3 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-tight-margin-bottom {
                margin-bottom: 12px;
                margin-bottom: calc(3 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-tight-margin-left {
            margin-left: 15px;
            margin-left: calc(3 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-tight-margin-left {
                margin-left: 12px;
                margin-left: calc(3 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-tight-padding {
            padding: 15px;
            padding: calc(3 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-tight-padding {
                padding: 12px;
                padding: calc(3 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-tight-padding-top {
            padding-top: 15px;
            padding-top: calc(3 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-tight-padding-top {
                padding-top: 12px;
                padding-top: calc(3 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-tight-padding-right {
            padding-right: 15px;
            padding-right: calc(3 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-tight-padding-right {
                padding-right: 12px;
                padding-right: calc(3 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-tight-padding-bottom {
            padding-bottom: 15px;
            padding-bottom: calc(3 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-tight-padding-bottom {
                padding-bottom: 12px;
                padding-bottom: calc(3 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-tight-padding-left {
            padding-left: 15px;
            padding-left: calc(3 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-tight-padding-left {
                padding-left: 12px;
                padding-left: calc(3 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-tight-grid-gap {
            grid-gap: 15px;
            grid-gap: calc(3 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-tight-grid-gap {
                grid-gap: 12px;
                grid-gap: calc(3 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-tight-border-spacing {
            border-spacing: 15px;
            border-spacing: calc(3 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-tight-border-spacing {
                border-spacing: 12px;
                border-spacing: calc(3 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-tight-vertical-margin-gap>*+* {
            margin-top: 15px;
            margin-top: calc(3 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-tight-vertical-margin-gap>*+* {
                margin-top: 12px;
                margin-top: calc(3 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-tight-vertical-padding-gap>*+* {
            padding-top: 15px;
            padding-top: calc(3 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-tight-vertical-padding-gap>*+* {
                padding-top: 12px;
                padding-top: calc(3 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-tight-horizontal-margin-gap>*+* {
            margin-left: 15px;
            margin-left: calc(3 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-tight-horizontal-margin-gap>*+* {
                margin-left: 12px;
                margin-left: calc(3 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-tight-horizontal-padding-gap>*+* {
            padding-left: 15px;
            padding-left: calc(3 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-tight-horizontal-padding-gap>*+* {
                padding-left: 12px;
                padding-left: calc(3 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-normal-margin {
            margin: 20px;
            margin: calc(4 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-normal-margin {
                margin: 16px;
                margin: calc(4 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-normal-margin-top {
            margin-top: 20px;
            margin-top: calc(4 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-normal-margin-top {
                margin-top: 16px;
                margin-top: calc(4 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-normal-margin-right {
            margin-right: 20px;
            margin-right: calc(4 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-normal-margin-right {
                margin-right: 16px;
                margin-right: calc(4 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-normal-margin-bottom {
            margin-bottom: 20px;
            margin-bottom: calc(4 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-normal-margin-bottom {
                margin-bottom: 16px;
                margin-bottom: calc(4 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-normal-margin-left {
            margin-left: 20px;
            margin-left: calc(4 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-normal-margin-left {
                margin-left: 16px;
                margin-left: calc(4 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-normal-padding {
            padding: 20px;
            padding: calc(4 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-normal-padding {
                padding: 16px;
                padding: calc(4 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-normal-padding-top {
            padding-top: 20px;
            padding-top: calc(4 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-normal-padding-top {
                padding-top: 16px;
                padding-top: calc(4 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-normal-padding-right {
            padding-right: 20px;
            padding-right: calc(4 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-normal-padding-right {
                padding-right: 16px;
                padding-right: calc(4 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-normal-padding-bottom {
            padding-bottom: 20px;
            padding-bottom: calc(4 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-normal-padding-bottom {
                padding-bottom: 16px;
                padding-bottom: calc(4 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-normal-padding-left {
            padding-left: 20px;
            padding-left: calc(4 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-normal-padding-left {
                padding-left: 16px;
                padding-left: calc(4 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-normal-grid-gap {
            grid-gap: 20px;
            grid-gap: calc(4 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-normal-grid-gap {
                grid-gap: 16px;
                grid-gap: calc(4 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-normal-border-spacing {
            border-spacing: 20px;
            border-spacing: calc(4 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-normal-border-spacing {
                border-spacing: 16px;
                border-spacing: calc(4 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-normal-vertical-margin-gap>*+* {
            margin-top: 20px;
            margin-top: calc(4 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-normal-vertical-margin-gap>*+* {
                margin-top: 16px;
                margin-top: calc(4 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-normal-vertical-padding-gap>*+* {
            padding-top: 20px;
            padding-top: calc(4 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-normal-vertical-padding-gap>*+* {
                padding-top: 16px;
                padding-top: calc(4 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-normal-horizontal-margin-gap>*+* {
            margin-left: 20px;
            margin-left: calc(4 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-normal-horizontal-margin-gap>*+* {
                margin-left: 16px;
                margin-left: calc(4 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-normal-horizontal-padding-gap>*+* {
            padding-left: 20px;
            padding-left: calc(4 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-normal-horizontal-padding-gap>*+* {
                padding-left: 16px;
                padding-left: calc(4 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-loose-margin {
            margin: 25px;
            margin: calc(5 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-loose-margin {
                margin: 20px;
                margin: calc(5 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-loose-margin-top {
            margin-top: 25px;
            margin-top: calc(5 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-loose-margin-top {
                margin-top: 20px;
                margin-top: calc(5 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-loose-margin-right {
            margin-right: 25px;
            margin-right: calc(5 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-loose-margin-right {
                margin-right: 20px;
                margin-right: calc(5 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-loose-margin-bottom {
            margin-bottom: 25px;
            margin-bottom: calc(5 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-loose-margin-bottom {
                margin-bottom: 20px;
                margin-bottom: calc(5 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-loose-margin-left {
            margin-left: 25px;
            margin-left: calc(5 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-loose-margin-left {
                margin-left: 20px;
                margin-left: calc(5 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-loose-padding {
            padding: 25px;
            padding: calc(5 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-loose-padding {
                padding: 20px;
                padding: calc(5 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-loose-padding-top {
            padding-top: 25px;
            padding-top: calc(5 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-loose-padding-top {
                padding-top: 20px;
                padding-top: calc(5 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-loose-padding-right {
            padding-right: 25px;
            padding-right: calc(5 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-loose-padding-right {
                padding-right: 20px;
                padding-right: calc(5 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-loose-padding-bottom {
            padding-bottom: 25px;
            padding-bottom: calc(5 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-loose-padding-bottom {
                padding-bottom: 20px;
                padding-bottom: calc(5 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-loose-padding-left {
            padding-left: 25px;
            padding-left: calc(5 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-loose-padding-left {
                padding-left: 20px;
                padding-left: calc(5 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-loose-grid-gap {
            grid-gap: 25px;
            grid-gap: calc(5 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-loose-grid-gap {
                grid-gap: 20px;
                grid-gap: calc(5 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-loose-border-spacing {
            border-spacing: 25px;
            border-spacing: calc(5 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-loose-border-spacing {
                border-spacing: 20px;
                border-spacing: calc(5 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-loose-vertical-margin-gap>*+* {
            margin-top: 25px;
            margin-top: calc(5 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-loose-vertical-margin-gap>*+* {
                margin-top: 20px;
                margin-top: calc(5 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-loose-vertical-padding-gap>*+* {
            padding-top: 25px;
            padding-top: calc(5 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-loose-vertical-padding-gap>*+* {
                padding-top: 20px;
                padding-top: calc(5 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-loose-horizontal-margin-gap>*+* {
            margin-left: 25px;
            margin-left: calc(5 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-loose-horizontal-margin-gap>*+* {
                margin-left: 20px;
                margin-left: calc(5 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-loose-horizontal-padding-gap>*+* {
            padding-left: 25px;
            padding-left: calc(5 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-loose-horizontal-padding-gap>*+* {
                padding-left: 20px;
                padding-left: calc(5 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-loose-margin {
            margin: 30px;
            margin: calc(6 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-loose-margin {
                margin: 24px;
                margin: calc(6 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-loose-margin-top {
            margin-top: 30px;
            margin-top: calc(6 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-loose-margin-top {
                margin-top: 24px;
                margin-top: calc(6 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-loose-margin-right {
            margin-right: 30px;
            margin-right: calc(6 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-loose-margin-right {
                margin-right: 24px;
                margin-right: calc(6 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-loose-margin-bottom {
            margin-bottom: 30px;
            margin-bottom: calc(6 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-loose-margin-bottom {
                margin-bottom: 24px;
                margin-bottom: calc(6 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-loose-margin-left {
            margin-left: 30px;
            margin-left: calc(6 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-loose-margin-left {
                margin-left: 24px;
                margin-left: calc(6 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-loose-padding {
            padding: 30px;
            padding: calc(6 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-loose-padding {
                padding: 24px;
                padding: calc(6 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-loose-padding-top {
            padding-top: 30px;
            padding-top: calc(6 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-loose-padding-top {
                padding-top: 24px;
                padding-top: calc(6 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-loose-padding-right {
            padding-right: 30px;
            padding-right: calc(6 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-loose-padding-right {
                padding-right: 24px;
                padding-right: calc(6 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-loose-padding-bottom {
            padding-bottom: 30px;
            padding-bottom: calc(6 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-loose-padding-bottom {
                padding-bottom: 24px;
                padding-bottom: calc(6 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-loose-padding-left {
            padding-left: 30px;
            padding-left: calc(6 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-loose-padding-left {
                padding-left: 24px;
                padding-left: calc(6 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-loose-grid-gap {
            grid-gap: 30px;
            grid-gap: calc(6 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-loose-grid-gap {
                grid-gap: 24px;
                grid-gap: calc(6 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-loose-border-spacing {
            border-spacing: 30px;
            border-spacing: calc(6 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-loose-border-spacing {
                border-spacing: 24px;
                border-spacing: calc(6 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-loose-vertical-margin-gap>*+* {
            margin-top: 30px;
            margin-top: calc(6 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-loose-vertical-margin-gap>*+* {
                margin-top: 24px;
                margin-top: calc(6 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-loose-vertical-padding-gap>*+* {
            padding-top: 30px;
            padding-top: calc(6 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-loose-vertical-padding-gap>*+* {
                padding-top: 24px;
                padding-top: calc(6 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-loose-horizontal-margin-gap>*+* {
            margin-left: 30px;
            margin-left: calc(6 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-loose-horizontal-margin-gap>*+* {
                margin-left: 24px;
                margin-left: calc(6 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-x-loose-horizontal-padding-gap>*+* {
            padding-left: 30px;
            padding-left: calc(6 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-x-loose-horizontal-padding-gap>*+* {
                padding-left: 24px;
                padding-left: calc(6 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-xx-loose-margin {
            margin: 35px;
            margin: calc(7 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-loose-margin {
                margin: 28px;
                margin: calc(7 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-xx-loose-margin-top {
            margin-top: 35px;
            margin-top: calc(7 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-loose-margin-top {
                margin-top: 28px;
                margin-top: calc(7 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-xx-loose-margin-right {
            margin-right: 35px;
            margin-right: calc(7 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-loose-margin-right {
                margin-right: 28px;
                margin-right: calc(7 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-xx-loose-margin-bottom {
            margin-bottom: 35px;
            margin-bottom: calc(7 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-loose-margin-bottom {
                margin-bottom: 28px;
                margin-bottom: calc(7 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-xx-loose-margin-left {
            margin-left: 35px;
            margin-left: calc(7 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-loose-margin-left {
                margin-left: 28px;
                margin-left: calc(7 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-xx-loose-padding {
            padding: 35px;
            padding: calc(7 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-loose-padding {
                padding: 28px;
                padding: calc(7 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-xx-loose-padding-top {
            padding-top: 35px;
            padding-top: calc(7 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-loose-padding-top {
                padding-top: 28px;
                padding-top: calc(7 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-xx-loose-padding-right {
            padding-right: 35px;
            padding-right: calc(7 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-loose-padding-right {
                padding-right: 28px;
                padding-right: calc(7 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-xx-loose-padding-bottom {
            padding-bottom: 35px;
            padding-bottom: calc(7 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-loose-padding-bottom {
                padding-bottom: 28px;
                padding-bottom: calc(7 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-xx-loose-padding-left {
            padding-left: 35px;
            padding-left: calc(7 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-loose-padding-left {
                padding-left: 28px;
                padding-left: calc(7 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-xx-loose-grid-gap {
            grid-gap: 35px;
            grid-gap: calc(7 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-loose-grid-gap {
                grid-gap: 28px;
                grid-gap: calc(7 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-xx-loose-border-spacing {
            border-spacing: 35px;
            border-spacing: calc(7 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-loose-border-spacing {
                border-spacing: 28px;
                border-spacing: calc(7 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-xx-loose-vertical-margin-gap>*+* {
            margin-top: 35px;
            margin-top: calc(7 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-loose-vertical-margin-gap>*+* {
                margin-top: 28px;
                margin-top: calc(7 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-xx-loose-vertical-padding-gap>*+* {
            padding-top: 35px;
            padding-top: calc(7 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-loose-vertical-padding-gap>*+* {
                padding-top: 28px;
                padding-top: calc(7 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-xx-loose-horizontal-margin-gap>*+* {
            margin-left: 35px;
            margin-left: calc(7 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-loose-horizontal-margin-gap>*+* {
                margin-left: 28px;
                margin-left: calc(7 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-xx-loose-horizontal-padding-gap>*+* {
            padding-left: 35px;
            padding-left: calc(7 * var(--base-space-interval, 0.5) * var(--base-font-size, 0.625rem))
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-xx-loose-horizontal-padding-gap>*+* {
                padding-left: 28px;
                padding-left: calc(7 * var(--base-mobile-space-interval, 0.4) * var(--base-font-size, 0.625rem))
            }
        }
        
        .viafoura .vf-modal {
            position: fixed;
            top: 25%;
            left: 25%;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 50%;
            height: 50%
        }
        
        .viafoura .vf-modal .vf-inner-modal {
            padding: 10px;
            border-width: 1px;
            border-radius: 5px
        }
        
        .viafoura .vf-flex {
            display: flex
        }
        
        .viafoura .vf-flex.vf-centered {
            align-items: center;
            justify-content: center
        }
        
        .viafoura .vf-flex.vf-vertical {
            flex-direction: column
        }
        
        .viafoura .vf-flex.vf-nowrap {
            flex-wrap: nowrap
        }
        
        .viafoura .vf-row.vf-row-edges {
            display: flex;
            flex-direction: row;
            justify-content: space-between
        }
        
        .viafoura .vf-vert-spaced>*+* {
            margin-top: 1em
        }
        
        .viafoura .vf-article-thumbnail,
        .viafoura .vf-thumbnail {
            border-radius: 2px
        }
        
        .viafoura .vf-button {
            padding: .9em 1.3em;
            word-break: keep-all
        }
        
        .viafoura .vf-button.vf-button-small {
            padding: .2em .6em
        }
        
        .viafoura .vf-button.vf-button-long {
            min-width: 120px
        }
        
        .viafoura .vf-button.vf-button-icon {
            padding: .15em .5em
        }
        
        .viafoura .vf-button--inline {
            padding: 0
        }
        
        .viafoura .vf-button {
            border: none;
            border-radius: 3px
        }
        
        .viafoura .vf-button.vf-button-full {
            width: 100%
        }
        
        .viafoura .vf-button.vf-button-outline {
            border-style: solid;
            border-width: 1px
        }
        
        .viafoura .vf-button.vf-button-outline.vf-grey {
            color: rgba(0, 0, 0, .6);
            color: var(--light-text-on-background-color, rgba(0, 0, 0, 0.6));
            border-color: rgba(0, 0, 0, .1);
            border-color: var(--primary-color-10, rgba(0, 0, 0, 0.1))
        }
        
        .viafoura .vf-button.vf-button-outline.vf-grey:hover,
        .viafoura .vf-button.vf-button-outline.vf-grey:focus {
            border-color: #007fff;
            border-color: var(--accent-color-light, #007fff);
            color: #0074e8;
            color: var(--accent-color, #0074e8);
            outline: none
        }
        
        .viafoura .vf-button.vf-button-outline.vf-grey:hover path,
        .viafoura .vf-button.vf-button-outline.vf-grey:focus path {
            fill: #0074e8;
            fill: var(--accent-color, #0074e8)
        }
        
        .viafoura .vf-button.vf-button-small {
            font-size: .715em
        }
        
        .viafoura .vf-button.vf-button-medium {
            font-size: .857em
        }
        
        .viafoura .vf-button.vf-button-long {
            font-size: .857em
        }
        
        .viafoura .vf-button.vf-button-link {
            color: #0074e8;
            color: var(--accent-color, #0074e8);
            text-decoration: none
        }
        
        .viafoura .vf-button:focus .vf-icon,
        .viafoura .vf-button:hover .vf-icon {
            fill-opacity: 1
        }
        
        .viafoura .vf-button.vf-hidden {
            visibility: hidden
        }
        
        .viafoura .fade-enter-active,
        .viafoura .fade-leave-active {
            transition: opacity .4s !important
        }
        
        .viafoura .fade-fast-enter-active,
        .viafoura .fade-fast-leave-active {
            transition: opacity .2s !important
        }
        
        .viafoura .fade-super-fast-enter-active,
        .viafoura .fade-super-fast-leave-active {
            transition: opacity .15s !important
        }
        
        .viafoura .fade-instant-enter-active,
        .viafoura .fade-instant-leave-active {
            transition: opacity 0s !important
        }
        
        .viafoura .fade-enter,
        .viafoura .fade-leave-to,
        .viafoura .fade-fast-enter,
        .viafoura .fade-fast-leave-to,
        .viafoura .fade-super-fast-enter,
        .viafoura .fade-super-fast-leave-to {
            opacity: 0 !important
        }
        
        @keyframes spin {
            0% {
                transform: rotate(0deg)
            }
            100% {
                transform: rotate(360deg)
            }
        }
        
        .viafoura .vf-expanding-hover-light::before {
            border-color: #007fff;
            border-color: var(--accent-color-light, #007fff);
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            border-bottom-width: 2px;
            border-bottom-style: solid;
            transform: translate(-50%, 50%);
            transition: width .2s;
            content: ""
        }
        
        .viafoura .vf-expanding-hover-light:hover::before,
        .viafoura .vf-expanding-hover-light:focus::before,
        .viafoura .vf-expanding-hover-light:focus-within::before,
        .viafoura .vf-expanding-hover-light.vf-active::before {
            width: 100% !important
        }
        
        .viafoura .vf-no-outline,
        .viafoura .vf-has-own-outline {
            outline: none;
            -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
        }
        
        .viafoura .vf-no-outline::-moz-focus-inner,
        .viafoura .vf-has-own-outline::-moz-focus-inner {
            border: 0
        }
        
        .viafoura .vf-label-with-dot {
            position: relative;
            margin-left: 8px;
            white-space: nowrap
        }
        
        .viafoura .vf-label-with-dot::before {
            background-color: rgba(0, 0, 0, .6);
            background-color: var(--primary-color-60, rgba(0, 0, 0, 0.6));
            position: absolute;
            top: calc(50% - 2px);
            left: -6px;
            display: inline-block;
            width: 2px;
            height: 2px;
            border-radius: 50%;
            content: " "
        }
        
        .viafoura .vf-ellipsis-overflow {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis
        }
        
        .viafoura .vf-setting {
            display: flex;
            align-items: center;
            min-height: 50px;
            border-bottom-width: 1px;
            border-bottom-style: solid
        }
        
        .viafoura .vf-setting .vf-slider {
            align-self: center
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-setting {
                min-height: 40px
            }
        }
        
        .viafoura .vf-setting-module .vf-text-tip .vf-tooltip {
            width: 15em
        }
        
        .viafoura .vf-setting-module h1 {
            font-weight: 100
        }
        
        .viafoura .vf-setting {
            border-bottom-color: rgba(0, 0, 0, .1);
            border-bottom-color: var(--primary-color-10, rgba(0, 0, 0, 0.1))
        }
        
        .viafoura .vf-setting .vf-info-tip {
            position: absolute;
            transform: translateX(-100%)
        }
        
        .viafoura .hidden {
            display: none !important;
            visibility: hidden
        }
        
        .viafoura .invisible {
            visibility: hidden
        }
        
        .viafoura .vf-clearfix::before,
        .viafoura .vf-clearfix::after {
            display: table;
            height: 0 !important;
            padding: 0 !important;
            font-size: 0;
            line-height: 0;
            content: " "
        }
        
        .viafoura .vf-clearfix::after {
            clear: both
        }
        
        .viafoura .vf-clearfix {
            zoom: 1
        }
        
        .viafoura .vf-tip-text {
            margin-top: 2px;
            margin-bottom: 0
        }
        
        .viafoura .vf-tooltip {
            position: absolute;
            border-radius: 3px
        }
        
        .viafoura .vf-tooltip .vf-tip {
            border-radius: 0;
            border-style: solid;
            border-width: 6px;
            width: 2px;
            height: 2px;
            position: absolute;
            bottom: -50%;
            left: 50%
        }
        
        .viafoura .mejs-container {
            position: relative
        }
        
        .viafoura .mejs-embed,
        .viafoura .mejs-embed body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            overflow: hidden
        }
        
        .viafoura .mejs-container-fullscreen {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1000;
            overflow: hidden
        }
        
        .viafoura .mejs-container-fullscreen .mejs-mediaelement,
        .viafoura .mejs-container-fullscreen video {
            width: 100%;
            height: 100%
        }
        
        .viafoura .mejs-background {
            position: absolute;
            top: 0;
            left: 0
        }
        
        .viafoura .mejs-mediaelement {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%
        }
        
        .viafoura .mejs-poster {
            position: absolute;
            top: 0;
            left: 0
        }
        
        .viafoura .mejs-poster img {
            display: block;
            padding: 0;
            border: 0
        }
        
        .viafoura .mejs-overlay {
            position: absolute;
            top: 0;
            left: 0
        }
        
        .viafoura .mejs-overlay-play {
            cursor: pointer
        }
        
        .viafoura .mejs-overlay-button {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100px;
            height: 100px;
            margin: -50px 0 0 -50px
        }
        
        .viafoura .mejs-overlay:hover .mejs-overlay-button {
            background-position: 0 -100px
        }
        
        .viafoura .mejs-overlay-loading {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 80px;
            height: 80px;
            margin: -40px 0 0 -40px
        }
        
        .viafoura .mejs-overlay-loading span {
            display: block;
            width: 80px;
            height: 80px
        }
        
        .viafoura .mejs-container .mejs-controls {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 30px;
            margin: 0;
            padding: 0;
            background: none
        }
        
        .viafoura .mejs-container .mejs-controls div {
            display: block;
            float: left;
            margin: 0;
            padding: 0;
            width: 26px;
            height: 26px;
            border: 0
        }
        
        .viafoura .mejs-controls .mejs-button button {
            position: absolute;
            display: block;
            margin: 7px 5px;
            padding: 0;
            font-size: 0;
            line-height: 0;
            border: 0;
            cursor: pointer;
            width: 16px;
            height: 16px
        }
        
        .viafoura .mejs-container .mejs-controls .mejs-time {
            display: block;
            width: auto;
            height: 17px;
            padding: 8px 3px 0 3px;
            padding: auto 4px;
            overflow: hidden;
            text-align: center
        }
        
        .viafoura .mejs-container .mejs-controls .mejs-time span {
            display: block;
            float: left;
            width: auto
        }
        
        .viafoura .mejs-controls .mejs-play button {
            background-position: 0 0
        }
        
        .viafoura .mejs-controls .mejs-pause button {
            background-position: 0 -16px
        }
        
        .viafoura .mejs-controls .mejs-stop button {
            background-position: -112px 0
        }
        
        .viafoura .mejs-controls div.mejs-time-rail {
            width: 200px;
            padding-top: 5px
        }
        
        .viafoura .mejs-controls .mejs-time-rail span {
            position: absolute;
            display: block;
            width: 180px;
            height: 10px;
            border-radius: 2px;
            cursor: pointer
        }
        
        .viafoura .mejs-controls .mejs-time-rail .mejs-time-total {
            margin: 5px
        }
        
        .viafoura .mejs-controls .mejs-time-rail .mejs-time-loaded {
            width: 0
        }
        
        .viafoura .mejs-controls .mejs-time-rail .mejs-time-current {
            width: 0
        }
        
        .viafoura .mejs-controls .mejs-time-rail .mejs-time-handle {
            position: absolute;
            top: -2px;
            display: none;
            width: 10px;
            margin: 0;
            text-align: center;
            border-radius: 3px;
            cursor: pointer
        }
        
        .viafoura .mejs-controls .mejs-time-rail .mejs-time-float {
            position: absolute;
            top: -26px;
            display: none;
            width: 36px;
            height: 17px;
            margin-left: -18px;
            text-align: center;
            border-style: solid;
            border-width: 1px
        }
        
        .viafoura .mejs-controls .mejs-time-rail .mejs-time-float-current {
            left: 0;
            display: block;
            width: 30px;
            margin: 2px;
            text-align: center
        }
        
        .viafoura .mejs-controls .mejs-time-rail .mejs-time-float-corner {
            position: absolute;
            top: 15px;
            left: 13px;
            display: block;
            line-height: 0;
            border-style: solid;
            border-width: 5px;
            border-radius: 0;
            width: 0;
            height: 0
        }
        
        .viafoura .mejs-controls .mejs-fullscreen-button button {
            background-position: -32px 0
        }
        
        .viafoura .mejs-controls .mejs-unfullscreen button {
            background-position: -32px -16px
        }
        
        .viafoura .mejs-controls .mejs-mute button {
            background-position: -16px -16px
        }
        
        .viafoura .mejs-controls .mejs-unmute button {
            background-position: -16px 0
        }
        
        .viafoura .mejs-controls .mejs-volume-button {
            position: relative
        }
        
        .viafoura .mejs-controls .mejs-volume-button .mejs-volume-slider {
            position: absolute;
            top: -115px;
            left: 0;
            z-index: 1;
            display: none;
            width: 25px;
            height: 115px;
            margin: 0;
            border-radius: 0
        }
        
        .viafoura .mejs-controls .mejs-volume-button:hover {
            border-radius: 0 0 4px 4px
        }
        
        .viafoura .mejs-controls .mejs-volume-button .mejs-volume-slider .mejs-volume-total {
            position: absolute;
            top: 8px;
            left: 11px;
            width: 2px;
            height: 100px;
            margin: 0
        }
        
        .viafoura .mejs-controls .mejs-volume-button .mejs-volume-slider .mejs-volume-current {
            position: absolute;
            top: 8px;
            left: 11px;
            width: 2px;
            height: 100px;
            margin: 0
        }
        
        .viafoura .mejs-controls .mejs-volume-button .mejs-volume-slider .mejs-volume-handle {
            position: absolute;
            top: -3px;
            left: 4px;
            width: 16px;
            height: 6px;
            margin: 0;
            border-radius: 1px;
            cursor: n-resize
        }
        
        .viafoura .mejs-controls .mejs-captions-button {
            position: relative
        }
        
        .viafoura .mejs-controls .mejs-captions-button button {
            background-position: -48px 0
        }
        
        .viafoura .mejs-controls .mejs-captions-button .mejs-captions-selector {
            position: absolute;
            right: -10px;
            bottom: 26px;
            width: 130px;
            height: 100px;
            padding: 10px;
            overflow: hidden;
            border-style: solid;
            border-width: 1px;
            border-radius: 0;
            visibility: hidden
        }
        
        .viafoura .mejs-controls .mejs-captions-button .mejs-captions-selector ul {
            display: block;
            margin: 0;
            padding: 0;
            overflow: hidden
        }
        
        .viafoura .mejs-controls .mejs-captions-button .mejs-captions-selector ul li {
            display: block;
            margin: 0 0 6px 0;
            padding: 0;
            overflow: hidden
        }
        
        .viafoura .mejs-controls .mejs-captions-button .mejs-captions-selector ul li input {
            float: left;
            clear: both;
            margin: 3px 3px 0 5px
        }
        
        .viafoura .mejs-controls .mejs-captions-button .mejs-captions-selector ul li label {
            float: left;
            width: 100px;
            padding: 4px 0 0 0
        }
        
        .viafoura .mejs-controls .mejs-captions-button .mejs-captions-translations {
            margin: 0 0 5px 0;
            font-size: 10px
        }
        
        .viafoura .mejs-chapters {
            position: absolute;
            top: 0;
            left: 0;
            width: 10000px;
            border-right-width: 1px;
            border-right-style: solid
        }
        
        .viafoura .mejs-chapters .mejs-chapter {
            position: absolute;
            float: left;
            overflow: hidden;
            border: 0
        }
        
        .viafoura .mejs-chapters .mejs-chapter .mejs-chapter-block {
            display: block;
            padding: 5px;
            font-size: 11px;
            border-right-width: 1px;
            border-right-style: solid;
            border-bottom-width: 1px;
            border-bottom-style: solid;
            cursor: pointer
        }
        
        .viafoura .mejs-chapters .mejs-chapter .mejs-chapter-block-last {
            border-right: none
        }
        
        .viafoura .mejs-chapters .mejs-chapter .mejs-chapter-block .ch-title,
        .viafoura .mejs-chapters .mejs-chapter .mejs-chapter-block .ch-timespan {
            display: block;
            white-space: nowrap;
            text-overflow: ellipsis
        }
        
        .viafoura .mejs-captions-layer {
            position: absolute;
            bottom: 0;
            left: 0;
            text-align: center
        }
        
        .viafoura .mejs-captions-position {
            position: absolute;
            bottom: 15px;
            left: 0;
            width: 100%
        }
        
        .viafoura .mejs-captions-position-hover {
            bottom: 45px
        }
        
        .viafoura .mejs-captions-text {
            padding: 3px 5px
        }
        
        .viafoura .mejs-clear {
            clear: both
        }
        
        .viafoura .me-cannotplay span {
            display: block;
            padding: 15px
        }
        
        .viafoura .mejs-controls .mejs-loop-off button {
            background-position: -64px -16px
        }
        
        .viafoura .mejs-controls .mejs-loop-on button {
            background-position: -64px 0
        }
        
        .viafoura .mejs-controls .mejs-backlight-off button {
            background-position: -80px -16px
        }
        
        .viafoura .mejs-controls .mejs-backlight-on button {
            background-position: -80px 0
        }
        
        .viafoura .mejs-controls .mejs-picturecontrols-button {
            background-position: -96px 0
        }
        
        .viafoura .mejs-contextmenu {
            position: absolute;
            top: 0;
            left: 0;
            z-index: 1001;
            width: 150px;
            padding: 10px;
            border-radius: 4px;
            border-style: solid;
            border-width: 1px
        }
        
        .viafoura .mejs-contextmenu .mejs-contextmenu-separator {
            height: 1px;
            margin: 5px 6px;
            font-size: 0
        }
        
        .viafoura .mejs-contextmenu .mejs-contextmenu-item {
            padding: 4px 6px;
            font-size: 12px;
            cursor: pointer
        }
        
        .viafoura.vf-tipsy {
            position: absolute;
            max-width: 80%;
            padding: 5px
        }
        
        .viafoura.vf-dropdown {
            position: relative;
            display: inline-block;
            max-width: 100%;
            padding-right: 0;
            padding-left: 0
        }
        
        .viafoura.vf-tipsy,
        .viafoura.vf-dropdown {
            z-index: 100000;
            background: none;
            transform: scale(0.98, 0.98);
            opacity: 0
        }
        
        .viafoura.vf-tipsy.vf-tip-animate,
        .viafoura.vf-dropdown.vf-tip-animate {
            transform: scale(1, 1);
            opacity: 1
        }
        
        .viafoura.vf-tipsy .vf-tipsy-inner,
        .viafoura.vf-dropdown .vf-tipsy-inner {
            position: relative;
            display: inline-block;
            min-width: 150px;
            max-width: 500px;
            padding: 0;
            letter-spacing: .03em;
            text-align: center
        }
        
        .viafoura.vf-tipsy .vf-tipsy-content-wrapper,
        .viafoura.vf-dropdown .vf-tipsy-content-wrapper {
            padding: 14px 10px
        }
        
        .viafoura.vf-tipsy .vf-tipsy-arrow,
        .viafoura.vf-tipsy .vf-tipsy-arrow-border,
        .viafoura.vf-dropdown .vf-tipsy-arrow,
        .viafoura.vf-dropdown .vf-tipsy-arrow-border {
            position: absolute;
            z-index: 1;
            line-height: 0;
            border-style: dashed;
            border-width: 8px;
            width: 0;
            height: 0
        }
        
        .viafoura.vf-tipsy .vf-tooltip,
        .viafoura.vf-dropdown .vf-tooltip {
            position: absolute;
            z-index: 9999;
            display: inline-block;
            padding: 5px 10px;
            border-style: solid;
            border-width: 1px
        }
        
        .viafoura.vf-tipsy .vf-tooltip::after,
        .viafoura.vf-dropdown .vf-tooltip::after {
            position: absolute;
            bottom: -10px;
            left: 10px;
            display: block;
            width: 0;
            border-style: solid;
            border-width: 10px 0 0 10px
        }
        
        .viafoura.vf-hide-tip .vf-tipsy-arrow,
        .viafoura.vf-hide-tip .vf-tipsy-arrow-border {
            display: none
        }
        
        .viafoura.vf-tipsy-n {
            padding-top: 7px
        }
        
        .viafoura.vf-tipsy-n .vf-tipsy-arrow,
        .viafoura.vf-tipsy-n .vf-tipsy-arrow-border {
            top: 0;
            left: 50%;
            margin-left: -8px;
            border-top: none;
            border-bottom-style: solid
        }
        
        .viafoura.vf-tipsy-n .vf-tipsy-arrow-border {
            top: -1px
        }
        
        .viafoura.vf-tipsy-nw {
            padding-top: 7px
        }
        
        .viafoura.vf-tipsy-nw .vf-tipsy-arrow,
        .viafoura.vf-tipsy-nw .vf-tipsy-arrow-border {
            top: 0;
            left: 22px;
            border-top: none;
            border-bottom-style: solid
        }
        
        .viafoura.vf-tipsy-nw .vf-tipsy-arrow-border {
            top: -1px
        }
        
        .viafoura.vf-tipsy-ne {
            padding-top: 7px
        }
        
        .viafoura.vf-tipsy-ne .vf-tipsy-arrow,
        .viafoura.vf-tipsy-ne .vf-tipsy-arrow-border {
            top: 0;
            right: 22px;
            border-top: none;
            border-bottom-style: solid
        }
        
        .viafoura.vf-tipsy-ne .vf-tipsy-arrow-border {
            top: -1px
        }
        
        .viafoura.vf-tipsy-s {
            padding-bottom: 7px
        }
        
        .viafoura.vf-tipsy-s .vf-tipsy-arrow,
        .viafoura.vf-tipsy-s .vf-tipsy-arrow-border {
            bottom: 0;
            left: 50%;
            margin-left: -8px;
            border-top-style: solid;
            border-bottom: none
        }
        
        .viafoura.vf-tipsy-s .vf-tipsy-arrow-border {
            bottom: -1px
        }
        
        .viafoura.vf-tipsy-sw {
            padding-bottom: 7px
        }
        
        .viafoura.vf-tipsy-sw .vf-tipsy-arrow,
        .viafoura.vf-tipsy-sw .vf-tipsy-arrow-border {
            bottom: 0;
            left: 22px;
            border-top-style: solid;
            border-bottom: none
        }
        
        .viafoura.vf-tipsy-sw .vf-tipsy-arrow-border {
            bottom: -1px
        }
        
        .viafoura.vf-tipsy-se {
            padding-bottom: 7px
        }
        
        .viafoura.vf-tipsy-se .vf-tipsy-arrow,
        .viafoura.vf-tipsy-se .vf-tipsy-arrow-border {
            right: 22px;
            bottom: 0;
            border-top-style: solid;
            border-bottom: none
        }
        
        .viafoura.vf-tipsy-se .vf-tipsy-arrow-border {
            bottom: -1px
        }
        
        .viafoura.vf-tipsy-e {
            padding-right: 7px
        }
        
        .viafoura.vf-tipsy-e .vf-tipsy-arrow,
        .viafoura.vf-tipsy-e .vf-tipsy-arrow-border {
            top: 50%;
            right: 0;
            margin-top: -8px;
            border-right: none;
            border-left-style: solid
        }
        
        .viafoura.vf-tipsy-e .vf-tipsy-arrow-border {
            right: -1px
        }
        
        .viafoura.vf-tipsy-w {
            padding-left: 7px
        }
        
        .viafoura.vf-tipsy-w .vf-tipsy-arrow,
        .viafoura.vf-tipsy-w .vf-tipsy-arrow-border {
            top: 50%;
            left: 0;
            margin-top: -8px;
            border-right-style: solid;
            border-left: none
        }
        
        .viafoura.vf-tipsy-w .vf-tipsy-arrow-border {
            left: -1px
        }
        
        .viafoura .vf-error {
            display: block;
            margin: 5px 0 10px
        }
        
        .viafoura .vf-success-message,
        .viafoura .vf-error-message,
        .viafoura .vf-alert,
        .viafoura .vf-info,
        .viafoura .vf-verification-message,
        .viafoura .vf-username-moderation-message,
        .viafoura .vf-avatar-moderation-message {
            color: rgba(0, 0, 0, .85);
            border-radius: 4px
        }
        
        .viafoura .vf-success-message:empty,
        .viafoura .vf-error-message:empty,
        .viafoura .vf-alert:empty,
        .viafoura .vf-info:empty,
        .viafoura .vf-verification-message:empty,
        .viafoura .vf-username-moderation-message:empty,
        .viafoura .vf-avatar-moderation-message:empty {
            display: none
        }
        
        .viafoura .vf-success-message p,
        .viafoura .vf-error-message p,
        .viafoura .vf-alert p,
        .viafoura .vf-info p,
        .viafoura .vf-verification-message p,
        .viafoura .vf-username-moderation-message p .vf-avatar-moderation-message p {
            margin: 0
        }
        
        .viafoura .vf-processing-status .vf-removed {
            margin-bottom: 10px
        }
        
        .viafoura .vf-comment-content {
            border-radius: 4px;
            border-style: solid;
            border-width: 1px
        }
        
        .viafoura .vf-removed {
            display: block;
            margin: 0
        }
        
        .viafoura .input+.vf-error {
            margin: -5px 0 10px
        }
        
        .viafoura .vf-comment-edit .vf-error-message {
            margin-bottom: 0
        }
        
        .viafoura .vf-mod-error {
            position: absolute;
            top: -1px;
            right: 0;
            left: 0;
            z-index: 1;
            height: 20px;
            margin: 0;
            text-align: center;
            border-radius: 0;
            border-style: solid;
            border-width: 1px
        }
        
        .viafoura .has-top-banner {
            padding-top: 30px !important
        }
        
        .viafoura .has-top-banner .vf-moderator-menu {
            z-index: 2
        }
        
        .viafoura .vf-verification-status {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            align-content: stretch;
            align-items: center;
            justify-content: flex-start;
            background-color: rgba(0, 0, 0, .15);
            background-color: var(--primary-color-15, rgba(0, 0, 0, 0.15));
            margin-top: 14px;
            padding: 15px;
            border-radius: 3px
        }
        
        .viafoura .vf-verification-status .vf-verification-status-links-container {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            align-content: stretch;
            align-items: center;
            justify-content: flex-start
        }
        
        .viafoura .vf-verification-links-separator {
            margin: 0 5px
        }
        
        .viafoura .vf-verification-status p {
            margin: 8px 0
        }
        
        .viafoura .vf-comment .vf-verification-status p {
            margin: 0
        }
        
        .viafoura .vf-comment .vf-verification-status ul {
            margin-top: 8px
        }
        
        .viafoura .vf-verification-status .vf-message {
            display: inline-flex;
            align-items: center;
            text-align: left
        }
        
        .viafoura .vf-verification-status .vf-message .vf-information-icon-container {
            margin-right: 10px
        }
        
        .viafoura .vf-verification-status .vf-message .vf-information-icon-container svg {
            vertical-align: middle
        }
        
        .viafoura .vf-verification-status .vf-message .vf-information-icon-container-warning svg,
        .viafoura .vf-avatar-container .vf-moderation-status-icon.vf-pending svg {
            fill: #f5a623
        }
        
        .viafoura .vf-verification-status .vf-message .vf-information-icon-container-error svg,
        .viafoura .vf-avatar-container .vf-moderation-status-icon.vf-rejected svg {
            fill: #e00
        }
        
        .viafoura .vf-verification-status .vf-message .vf-information-icon-container-disabled svg {
            fill: #000;
            fill: var(--dark-text-on-default-color, #000000);
            fill-opacity: .6
        }
        
        .viafoura .vf-information-message-disabled {
            opacity: .5
        }
        
        .viafoura .vf-success-message a,
        .viafoura .vf-error-message a,
        .viafoura .vf-alert a,
        .viafoura .vf-info a {
            color: rgba(0, 0, 0, .85)
        }
        
        .viafoura .vf-moderation-status-icon {
            display: inline-block;
            width: 1.1em;
            height: 1.1em;
            background-image: url("");
            background-repeat: no-repeat
        }
        
        .viafoura .vf-moderation-status-input,
        .viafoura .vf-moderation-status-inline {
            position: relative;
            display: inline-block
        }
        
        .viafoura .vf-moderation-status-input .vf-moderation-status-icon {
            position: absolute;
            top: .5em;
            right: .5em
        }
        
        .viafoura .vf-moderation-status-inline .vf-moderation-status-icon {
            position: relative;
            top: -0.15em;
            vertical-align: middle
        }
        
        .viafoura .vf-resend-verification-status {
            display: inline-block;
            margin-left: 5px
        }
        
        .viafoura .vf-resend-verification-status .vf-moderation-status-icon {
            vertical-align: middle
        }
        
        .viafoura .vf-icon-pending {
            background-position: -50px -180px
        }
        
        .viafoura .vf-icon-success,
        .viafoura .vf-icon-approved {
            background-position: -130px -180px
        }
        
        .viafoura .vf-icon-error,
        .viafoura .vf-icon-rejected {
            background-position: -90px -180px
        }
        
        .viafoura .vf-avatar-container .vf-moderation-status-icon {
            position: absolute;
            top: 0;
            right: 0;
            background-image: none;
            border-radius: 50%;
            transform: translate(20%, -20%);
            background-color: #fff;
            background-color: var(--background-color, #ffffff)
        }
        
        .viafoura .vf-horizontal-list .vf-avatar-container .vf-moderation-status-icon {
            top: .05em;
            left: 2.25em
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-verification-status {
                flex-wrap: wrap
            }
            .viafoura .vf-verification-status .vf-message {
                width: 100%
            }
            .viafoura .vf-verification-status .vf-verification-status-links-container {
                margin-left: calc(10px + 18px)
            }
        }
        
        .viafoura .vf-rtw {
            margin-bottom: .4em;
            border-bottom: 1px solid #ccc
        }
        
        .viafoura .vf-rtw h1,
        .viafoura .vf-rtw h2,
        .viafoura .vf-rtw h3,
        .viafoura .vf-rtw h4,
        .viafoura .vf-rtw p {
            clear: none;
            margin: 0;
            padding: 0
        }
        
        .viafoura .vf-rtw .vf-dislikes::before {
            content: ""
        }
        
        .viafoura .vf-rtw .vf-sort-likes .vf-widget-desc::before,
        .viafoura .vf-rtw .vf-likes::before {
            content: ""
        }
        
        .viafoura .vf-rtw .vf-sort-replies .vf-widget-desc::before,
        .viafoura .vf-rtw .vf-replies::before {
            content: ""
        }
        
        .viafoura .vf-rtw .vf-rtw-article-image {
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover
        }
        
        .viafoura .vf-rtw-main-header {
            margin: 0;
            padding: 0 0 6px;
            text-transform: uppercase;
            border-bottom-color: #979797;
            border-radius: 0;
            border-bottom-style: solid;
            border-bottom-width: 2px
        }
        
        .viafoura .vf-rtw-main-header .vf-widget-desc {
            float: right;
            text-align: right
        }
        
        .viafoura .vf-rtw-list {
            position: relative;
            overflow: hidden;
            transition: height .4s ease-in-out
        }
        
        .viafoura .vf-rtw-list .vf-rtw-article-item,
        .viafoura .vf-rtw-list .vf-comment,
        .viafoura .vf-rtw-list .vf-rtw-user-item {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            z-index: 0;
            box-shadow: 0 0 0 rgba(0, 0, 0, 0);
            transform: translateY(0);
            background-color: #fff;
            background-color: var(--background-color, #ffffff)
        }
        
        .viafoura .vf-rtw-slide {
            transition: transform .4s ease-in-out
        }
        
        .viafoura .vf-rtw-pages h1,
        .viafoura .vf-rtw-pages p,
        .viafoura .vf-rtw-pages-mini h1,
        .viafoura .vf-rtw-pages-mini p {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis
        }
        
        .viafoura .vf-rtw-pages p,
        .viafoura .vf-rtw-pages-mini p {
            margin-top: .2em;
            color: #444
        }
        
        .viafoura .vf-rtw-pages a:hover,
        .viafoura .vf-rtw-pages-mini a:hover {
            text-decoration: underline
        }
        
        .viafoura .vf-rtw-pages .vf-rtw-bubble,
        .viafoura .vf-rtw-pages-mini .vf-rtw-bubble {
            max-width: 8px
        }
        
        .viafoura .vf-rtw-pages .vf-rtw-bubble-svg-path,
        .viafoura .vf-rtw-pages-mini .vf-rtw-bubble-svg-path {
            fill: #4c4b4b
        }
        
        .viafoura .vf-rtw-pages .vf-rtw-article-item,
        .viafoura .vf-rtw-pages-mini .vf-rtw-article-item {
            margin: 0;
            padding: 6px 0
        }
        
        .viafoura .vf-rtw-pages .vf-rtw-article-title,
        .viafoura .vf-rtw-pages-mini .vf-rtw-article-title {
            transition: opacity .2s ease-in-out
        }
        
        .viafoura .vf-rtw-pages .vf-rtw-article-image {
            float: right;
            width: 3em;
            height: 3em;
            margin-left: .3em
        }
        
        .viafoura .vf-rtw-pages .vf-rtw-comment-link {
            display: block;
            margin-top: .6em;
            color: #3d3d3d
        }
        
        .viafoura .vf-rtw-pages .vf-rtw-comment-link::before {
            color: #4c4b4b;
            content: ""
        }
        
        .viafoura .vf-rtw-pages .vf-rtw-count-total {
            padding-right: .4em
        }
        
        .viafoura .vf-rtw-pages .vf-rtw-count-previous {
            font-size: .9em;
            font-style: italic
        }
        
        .viafoura .vf-rtw-pages .vf-rtw-comments-label {
            padding-left: .3em
        }
        
        .viafoura .vf-rtw-pages-mini .vf-rtw-list {
            margin: 4px 0
        }
        
        .viafoura .vf-rtw-pages-mini .vf-rtw-article-item {
            margin: 0;
            padding: 2px 0
        }
        
        .viafoura .vf-rtw-pages-mini .vf-rtw-count-total {
            float: right;
            margin-left: .3em
        }
        
        .viafoura .vf-rtw-pages-mini .vf-rtw-count-total::after {
            position: relative;
            top: 1px;
            margin-left: 6px;
            color: #4c4b4b;
            font-size: 12px;
            content: ""
        }
        
        .viafoura .vf-rtw-pages-mini .vf-rtw-mini-link {
            display: block
        }
        
        .viafoura .vf-rtw-pages-mini .vf-rtw-has-image {
            height: 1.5em
        }
        
        .viafoura .vf-rtw-pages-mini .vf-rtw-article-image {
            position: relative;
            display: none;
            float: left;
            margin-right: .3em;
            width: 1.5em;
            height: 1.5em
        }
        
        .viafoura .vf-rtw-comments .vf-comment-counters h4 {
            display: inline-block
        }
        
        .viafoura .vf-rtw-comments .vf-widget-desc {
            margin: 0;
            padding: 0
        }
        
        .viafoura .vf-rtw-comments .vf-article-link,
        .viafoura .vf-rtw-comments .vf-comment-summary p {
            overflow: hidden
        }
        
        .viafoura .vf-rtw-comments .vf-article-link {
            display: block;
            margin: 0 0 10px;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            transition: opacity .2s ease-in-out
        }
        
        .viafoura .vf-rtw-comments .vf-article-link:hover {
            text-decoration: underline
        }
        
        .viafoura .vf-rtw-comments .vf-rtw-reply-link {
            display: inline-block;
            font-size: .8125em
        }
        
        .viafoura .vf-rtw-comments .vf-rtw-reply-link:hover {
            color: #64bd60;
            text-decoration: underline
        }
        
        .viafoura .vf-rtw-comments .vf-rtw-article-image {
            width: 3em;
            height: 3em;
            float: left;
            margin-right: .3em
        }
        
        .viafoura .vf-rtw-comments .vf-comment {
            padding: 6px 0
        }
        
        .viafoura .vf-rtw-comments .vf-comment-summary p {
            height: 2.6em
        }
        
        .viafoura .vf-rtw-comments .vf-comment-counters {
            display: inline-block
        }
        
        .viafoura .vf-rtw-comments .vf-comment-counters h4 {
            color: #a0a0a0
        }
        
        .viafoura .vf-rtw-comments .vf-comment-counters h4:first-of-type {
            margin-right: 10px
        }
        
        .viafoura .vf-rtw-comments .vf-comment-counters .vf-likes::before,
        .viafoura .vf-rtw-comments .vf-comment-counters .vf-dislikes::before,
        .viafoura .vf-rtw-comments .vf-comment-counters .vf-replies::before {
            padding-right: 3px;
            color: #a0a0a0;
            font-size: 11px
        }
        
        .viafoura .vf-rtw-comments .vf-sort-replies .vf-widget-desc::before {
            padding-right: 4px
        }
        
        .viafoura .vf-rtw-comments .vf-sort-likes .vf-widget-desc::before {
            position: relative;
            top: 1px;
            padding-right: 2px;
            font-size: 1.2em
        }
        
        .viafoura .vf-rtw-comments .vf-sort-replies .vf-replies::before,
        .viafoura .vf-rtw-comments .vf-sort-likes .vf-likes::before,
        .viafoura .vf-rtw-comments .vf-sort-replies .vf-replies,
        .viafoura .vf-rtw-comments .vf-sort-likes .vf-likes {
            color: #000;
            color: var(--dark-text-on-background-color, #000000)
        }
        
        .viafoura .vf-rtw-user-item {
            padding: 6px 0
        }
        
        .viafoura .vf-rtw-user-item img {
            width: 26px;
            height: 26px;
            margin-right: 4px;
            border: 1px solid #b3b3b3;
            border-radius: 3px
        }
        
        .viafoura .vf-rtw-user-item .vf-rtw-user-link {
            display: block
        }
        
        .viafoura .vf-rtw-user-item .vf-rtw-comment-count {
            float: right
        }
        
        .viafoura .vf-rtw-user-item .vf-rtw-comment-count::after {
            position: relative;
            top: 1px;
            margin-left: 6px;
            color: #4c4b4b;
            font-size: 12px;
            content: ""
        }
        
        .viafoura .vf-rolling {
            -ms-font-feature-settings: "tnum" 1, "lnum" 1, "onum" 0, "kern" 0;
            font-feature-settings: "tnum" 1, "lnum" 1, "onum" 0, "kern" 0;
            position: relative;
            display: inline-table;
            overflow: hidden
        }
        
        .viafoura .vf-rolling .vf-rolling-child {
            position: relative;
            overflow: hidden
        }
        
        .viafoura .vf-rolling .raw-number {
            visibility: hidden
        }
        
        .viafoura .vf-rolling .roller-number {
            position: absolute;
            top: 0;
            right: 0;
            height: 1em;
            white-space: nowrap;
            text-align: right;
            transform: translateY(0%)
        }
        
        .viafoura .vf-rolling .roller-number span {
            display: inline-block;
            transform: translateY(0%);
            opacity: 1
        }
        
        .viafoura .vf-rolling .roller-number .transitionable {
            transition: all .2s ease-in-out
        }
        
        .viafoura .vf-rolling .roller-number-left {
            left: 0;
            text-align: left
        }
        
        .viafoura .vf-rolling .roller-prev {
            transform: translateY(-100%)
        }
        
        .viafoura .vf-rolling .roller-next {
            transform: translateY(100%)
        }
        
        .viafoura .vf-rolling::after {
            display: none !important
        }
        
        .viafoura .vf-pull-quote-counters,
        .viafoura .vf-rtw-comment-count,
        .viafoura .vf-rtw-comment-link,
        .viafoura .vf-rtw-count-total,
        .viafoura .vf-comment-counters,
        .viafoura .transitionable {
            overflow: hidden
        }
        
        .viafoura .vf-dropdown .vf-comment-action-btn,
        .viafoura .vf-dropdown .vf-share-list-link,
        .viafoura .vf-dropdown .vf-hide-share-btn {
            width: 100%;
            padding: 10px;
            text-align: left;
            background: none;
            border: none;
            box-shadow: none
        }
        
        .viafoura .vf-dropdown .vf-comment-action-btn .vf-flex-container {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            align-content: stretch;
            align-items: center;
            justify-content: flex-start
        }
        
        .viafoura .vf-dropdown .vf-comment-action-btn .vf-flex-container>*+* {
            margin-left: 10px
        }
        
        .viafoura .vf-dropdown .vf-hide-share-btn {
            padding: 5px;
            border-radius: 0;
            border-bottom-style: solid;
            border-bottom-width: 1px
        }
        
        .viafoura .vf-dropdown .vf-flex-container .vf-open-share-icon {
            margin-left: auto
        }
        
        .viafoura .vf-dropdown .vf-hide-share-icon svg {
            transform: rotate(180deg)
        }
        
        .viafoura .vf-dropdown .vf-comment-actions-menu li {
            border-radius: 0;
            border-bottom-style: solid;
            border-bottom-width: 1px
        }
        
        .viafoura .vf-more-actions .vf-dropdown {
            opacity: 0 !important
        }
        
        .viafoura .vf-show-dropdown .vf-dropdown {
            opacity: 1 !important
        }
        
        .viafoura .vf-more-actions-menu {
            position: absolute !important;
            z-index: -1 !important;
            height: 0 !important
        }
        
        .viafoura .vf-more-actions-menu .vf-dropdown {
            position: absolute;
            bottom: 18px
        }
        
        .viafoura .vf-more-actions-menu.vf-show-dropdown {
            z-index: 5 !important;
            height: auto !important
        }
        
        .viafoura .vf-dropdown .vf-comment-action-btn,
        .viafoura .vf-dropdown .vf-share-list-link,
        .viafoura .vf-dropdown .vf-hide-share-btn,
        .viafoura .vf-dropdown .vf-comment-action-btn:visited,
        .viafoura .vf-dropdown .vf-share-list-link:visited,
        .viafoura .vf-dropdown .vf-hide-share-btn:visited {
            color: rgba(0, 0, 0, .6);
            color: var(--light-text-on-background-color, rgba(0, 0, 0, 0.6))
        }
        
        .viafoura .vf-dropdown .vf-comment-action-btn:hover,
        .viafoura .vf-dropdown .vf-comment-action-btn:focus,
        .viafoura .vf-dropdown .vf-share-list-link:hover,
        .viafoura .vf-dropdown .vf-share-list-link:focus,
        .viafoura .vf-dropdown .vf-hide-share-btn:hover,
        .viafoura .vf-dropdown .vf-hide-share-btn:focus,
        .viafoura .vf-dropdown .vf-comment-action-btn:visited:hover,
        .viafoura .vf-dropdown .vf-comment-action-btn:visited:focus,
        .viafoura .vf-dropdown .vf-share-list-link:visited:hover,
        .viafoura .vf-dropdown .vf-share-list-link:visited:focus,
        .viafoura .vf-dropdown .vf-hide-share-btn:visited:hover,
        .viafoura .vf-dropdown .vf-hide-share-btn:visited:focus {
            color: #000;
            color: var(--dark-text-on-background-color, #000000)
        }
        
        .viafoura .vf-dropdown .vf-comment-action-btn svg,
        .viafoura .vf-dropdown .vf-share-list-link svg,
        .viafoura .vf-dropdown .vf-hide-share-btn svg {
            fill: rgba(0, 0, 0, .6);
            fill: var(--light-text-on-default-color, rgba(0, 0, 0, 0.6))
        }
        
        .viafoura .vf-dropdown .vf-comment-action-btn:hover svg,
        .viafoura .vf-dropdown .vf-comment-action-btn:focus svg,
        .viafoura .vf-dropdown .vf-share-list-link:hover svg,
        .viafoura .vf-dropdown .vf-share-list-link:focus svg,
        .viafoura .vf-dropdown .vf-hide-share-btn:hover svg,
        .viafoura .vf-dropdown .vf-hide-share-btn:focus svg {
            fill: #000;
            fill: var(--dark-text-on-default-color, #000000)
        }
        
        .viafoura .vf-dropdown .vf-hide-share-btn {
            border-bottom-color: rgba(0, 0, 0, .04);
            border-bottom-color: var(--primary-color-04, rgba(0, 0, 0, 0.04))
        }
        
        .viafoura .vf-dropdown .vf-open-share-icon path {
            fill: rgba(0, 0, 0, .6);
            fill: var(--light-text-on-default-color, rgba(0, 0, 0, 0.6))
        }
        
        .viafoura .vf-dropdown .vf-share-list {
            transition: display .5s
        }
        
        .viafoura .vf-dropdown .vf-comment-actions-menu li {
            border-bottom-color: rgba(0, 0, 0, .04);
            border-bottom-color: var(--primary-color-04, rgba(0, 0, 0, 0.04))
        }
        
        .viafoura .vf-more-actions .vf-dropdown {
            transition: opacity .2s
        }
        
        .viafoura .vf-progress-container {
            align-items: center
        }
        
        .viafoura .vf-progress-container>*+* {
            margin-left: 3px
        }
        
        .viafoura .vf-progress-bar {
            display: inline-block;
            width: 145px;
            height: 5px
        }
        
        .viafoura .vf-progress {
            width: 0;
            height: 100%;
            transition: width .3s
        }
        
        .viafoura .vf-progress.vf-warning-bg-colour {
            width: 100%;
            transition: none
        }
        
        .viafoura .vf-progress-cancel {
            width: 12px;
            height: 15px
        }
        
        .viafoura .vf-progress-cancel .vf-icon {
            background-color: #eee !important
        }
        
        .viafoura .vf-progress-cancel:hover .vf-icon {
            background-color: #fff !important;
            background-color: var(--default-color, #ffffff) !important
        }
        
        .viafoura .vf-progress-bar {
            background-color: rgba(255, 255, 255, .4)
        }
        
        .viafoura .vf-progress-bar .vf-progress.vf-warning-bg-colour {
            background-color: #f2838f
        }
        
        .viafoura .vf-progress-bar {
            border-radius: 3px
        }
        
        .viafoura .vf-progress {
            border-radius: 3px
        }
        
        .viafoura .vf-progress-cancel .vf-icon {
            border-radius: 3px
        }
        
        .viafoura .vf-realtime .vf-rt-link {
            position: relative;
            top: 60%;
            left: -60%
        }
        
        .viafoura .vf-rt-main-static {
            position: relative;
            padding: 0 !important;
            cursor: pointer
        }
        
        .viafoura .vf-rt-main-static {
            position: absolute
        }
        
        .viafoura .vf-rt-main-static:hover .vf-rt-hover-state {
            top: 0
        }
        
        .viafoura .vf-rt-reply {
            display: block;
            height: 20px;
            margin-top: 10px;
            margin-left: 60px;
            border-radius: 0;
            border-bottom-style: solid;
            border-bottom-width: 2px
        }
        
        .viafoura .vf-rt-reply .vf-rt-reply-link {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            align-content: stretch;
            align-items: stretch;
            justify-content: flex-end;
            position: relative;
            top: -2px
        }
        
        .viafoura .vf-rt-reply .vf-rt-reply-link>*+* {
            margin-left: 5px
        }
        
        .viafoura .vf-rt-reply .vf-rt-reply-bubble,
        .viafoura .vf-rt-reply .vf-rt-reply-text {
            display: block
        }
        
        .viafoura .vf-rt-reply .vf-rt-reply-bubble {
            position: relative;
            min-width: 16px;
            height: 16px;
            padding: 0 2px;
            text-align: center
        }
        
        .viafoura .vf-rt-reply .vf-rt-reply-bubble::before {
            position: absolute;
            top: 85%;
            left: 26%;
            width: 0;
            content: "";
            border-radius: 0;
            border-style: solid;
            border-width: 5px 5px 0
        }
        
        .viafoura .vf-rt-has-edit.vf-comment-container .vf-comment-meta {
            height: 1.3em
        }
        
        .viafoura .vf-rt-has-edit li.vf-rt-has-edit-li {
            display: block;
            float: left
        }
        
        .viafoura .vf-rt-has-edit li.vf-rt-has-edit-li a::before {
            position: relative;
            top: 1px;
            padding-right: 6px;
            text-align: center
        }
        
        .viafoura .vf-rt-has-edit-li {
            float: left
        }
        
        .viafoura .vf-rt-new-circle {
            position: absolute;
            left: -15px;
            display: none;
            border-radius: 50%;
            width: 10px;
            height: 10px
        }
        
        .viafoura .vf-rt-new .vf-rt-new-circle {
            display: block
        }
        
        .viafoura .vf-rt-reply {
            border-bottom-color: #007fff;
            border-bottom-color: var(--accent-color-light, #007fff)
        }
        
        .viafoura .vf-rt-reply .vf-rt-reply-link {
            color: rgba(0, 0, 0, .6);
            color: var(--light-text-on-background-color, rgba(0, 0, 0, 0.6));
            text-decoration: none
        }
        
        .viafoura .vf-rt-reply .vf-rt-reply-bubble {
            background-color: #0074e8;
            background-color: var(--accent-color, #0074e8)
        }
        
        .viafoura .vf-rt-reply .vf-rt-reply-bubble::before {
            border-right-color: rgba(0, 0, 0, 0);
            border-left-color: rgba(0, 0, 0, 0);
            border-top-color: #007fff;
            border-top-color: var(--accent-color-light, #007fff);
            border-bottom-color: #007fff;
            border-bottom-color: var(--accent-color-light, #007fff)
        }
        
        .viafoura .vf-comment-container .vf-comment-html,
        .viafoura .vf-comment-container.vf-rt-has-edit .vf-comment-meta .vf-rt-has-edit-li {
            opacity: 1
        }
        
        .viafoura .vf-rt-has-edit .vf-comment-html {
            opacity: .35
        }
        
        .viafoura .vf-rt-has-edit.vf-comment-container .vf-comment-meta {
            height: 1.3em;
            font-size: inherit
        }
        
        .viafoura .vf-rt-has-edit li.vf-rt-has-edit-li {
            font-size: .85em
        }
        
        .viafoura .vf-rt-main-static .vf-rt-hover-state,
        .viafoura .vf-rt-reply .vf-rt-hover-state {
            transition: all .15s
        }
        
        .viafoura .vf-rt-hover-state {
            transition: top .2s cubic-bezier(0.77, 0, 0.175, 1) .1s, height .2s cubic-bezier(0.77, 0, 0.175, 1) .1s
        }
        
        .viafoura .vf-comment-container .vf-comment-html,
        .viafoura .vf-comment-container.vf-rt-has-edit .vf-comment-meta .vf-rt-has-edit-li {
            opacity: 1
        }
        
        .viafoura .vf-rt-has-edit .vf-comment-html {
            opacity: .25
        }
        
        .viafoura .vf-rt-has-edit li.vf-rt-has-edit-li a::before {
            content: ""
        }
        
        .viafoura .vf-rt-main-color-background {
            background: #0074e8;
            background: var(--accent-color, #0074e8)
        }
        
        .viafoura .vf-rt-main-color-text,
        .viafoura .vf-rt-has-edit-li a,
        .viafoura .vf-rt-has-edit-li a:visited {
            color: #fff;
            color: var(--text-on-accent-color, #ffffff)
        }
        
        .viafoura .vf-rt-main-color-fill {
            fill: #0074e8;
            fill: var(--accent-color, #0074e8)
        }
        
        .viafoura .vf-rt-accent-color-background {
            background: #0074e8;
            background: var(--accent-color, #0074e8)
        }
        
        .viafoura .vf-rt-overlay-color-text {
            color: #fff;
            color: var(--text-on-accent-color, #ffffff)
        }
        
        .viafoura .vf-rt-overlay-color-fill {
            color: #fff;
            color: var(--text-on-accent-color, #ffffff);
            fill: currentcolor
        }
        
        .viafoura .vf-li {
            width: 100%;
            height: 100%
        }
        
        .viafoura .vf-image {
            position: relative
        }
        
        .viafoura .vf-image.vf-image-large {
            width: 90px;
            height: 90px;
            border-radius: 3px
        }
        
        .viafoura .vf-image.vf-image-medium {
            width: 60px;
            height: 60px;
            border-radius: 2px
        }
        
        .viafoura .vf-image::before {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 0;
            background: #000;
            border-radius: inherit;
            opacity: .2;
            content: ""
        }
        
        .viafoura .vf-image.fade-image-enter::before {
            opacity: 1
        }
        
        .viafoura .vf-image.fade-image-transition::before {
            transition: opacity .3s
        }
        
        .viafoura .vf-image,
        .viafoura .vf-avatar {
            background-repeat: no-repeat;
            background-position: center center;
            background-size: cover
        }
        
        .viafoura .vf-avatar.vf-avatar-small {
            width: 25px;
            height: 25px
        }
        
        .viafoura .vf-avatar.vf-avatar-medium {
            width: 40px;
            height: 40px
        }
        
        .viafoura .vf-avatar.vf-avatar-large {
            width: 80px;
            height: 80px
        }
        
        .viafoura .vf-user-avatar-btn {
            padding: 0;
            border: none
        }
        
        .viafoura .vf-video-processing {
            padding: 15%
        }
        
        .viafoura button,
        .viafoura a.vf-button,
        .viafoura span.vf-button {
            display: inline-block
        }
        
        .viafoura .vf-badge.vf-content-badge {
            display: inline-block;
            margin-left: 5px;
            line-height: inherit;
            text-transform: uppercase;
            border-radius: 3px
        }
        
        .viafoura .vf-icon {
            display: inline-block;
            text-align: center
        }
        
        .viafoura .vf-icon.vf-icon-tiny {
            width: 8px;
            height: 8px;
            font-size: 4px;
            line-height: 8px
        }
        
        .viafoura .vf-icon.vf-icon-small {
            width: 12px;
            height: 12px;
            font-size: 6px;
            line-height: 12px
        }
        
        .viafoura .vf-icon.vf-icon-medium {
            width: 18px;
            height: 18px;
            font-size: 9px;
            line-height: 18px
        }
        
        .viafoura .vf-icon.vf-icon-large {
            width: 32px;
            height: 32px;
            font-size: 16px;
            line-height: 32px
        }
        
        .viafoura .vf-icon.vf-icon-extra-large {
            width: 50px;
            height: 50px;
            font-size: 30px;
            line-height: 50px
        }
        
        .viafoura .vf-icon.vf-icon-responsive-w {
            width: 25%;
            max-width: 50px
        }
        
        .viafoura .vf-icon-circle-filled {
            background-color: currentcolor;
            border-radius: 50%
        }
        
        .viafoura .vf-icon-circle-outline {
            border-color: currentcolor;
            border-radius: 50%
        }
        
        .viafoura .vf-icon.vf-icon-small-medium {
            width: 15px;
            height: 15px;
            font-size: 7px;
            line-height: 14px
        }
        
        .viafoura .vf-icon.vf-icon-play.vf-icon-circle .vf-icon-inner-circle {
            stroke-width: 5%
        }
        
        .viafoura .vf-icon.vf-icon-chevron_up {
            transform: rotate(90deg)
        }
        
        .viafoura .vf-icon.vf-icon-chevron_right {
            transform: rotate(180deg)
        }
        
        .viafoura .vf-icon.vf-icon-chevron_down {
            transform: rotate(-90deg)
        }
        
        .viafoura .vf-icon.vf-icon-mod {
            border-radius: 50%
        }
        
        .viafoura .vf-icon {
            font-weight: 500;
            text-transform: uppercase
        }
        
        .viafoura .vf-icon-inner-circle {
            fill: none;
            stroke: none
        }
        
        .viafoura .vf-icon.vf-icon-circle-outline .vf-icon-inner-circle {
            fill: none;
            stroke: currentcolor;
            stroke-width: 4%
        }
        
        .viafoura .vf-icon.vf-icon-circle-filled .vf-icon-inner-circle {
            fill: currentcolor;
            stroke: none;
            stroke-width: 4%
        }
        
        .viafoura .vf-icon.vf-icon-mod {
            color: #fff;
            background-color: #64a159
        }
        
        .viafoura .vf-icon.vf-icon-trusted {
            fill: #0074e8;
            fill: var(--accent-color, #0074e8)
        }
        
        .viafoura .vf-video-processing .vf-icon.vf-icon-circle-outline .vf-icon-inner-circle {
            stroke: rgba(0, 0, 0, .6);
            stroke: var(--light-text-on-default-color, rgba(0, 0, 0, 0.6))
        }
        
        .viafoura .vf-video-processing {
            fill: #000;
            fill: var(--dark-text-on-default-color, #000000);
            background-color: rgba(0, 0, 0, .1);
            background-color: var(--primary-color-10, rgba(0, 0, 0, 0.1))
        }
        
        .viafoura .vf-video-processing .vf-label {
            color: #000;
            color: var(--dark-text-on-background-color, #000000)
        }
        
        @keyframes loader-a {
            0% {
                opacity: 0
            }
            20% {
                opacity: 0
            }
            50% {
                opacity: 1
            }
            80% {
                opacity: 0
            }
            100% {
                opacity: 0
            }
        }
        
        .viafoura .vf-ajax-loader {
            display: block;
            margin: 15px 0;
            border-radius: 0;
            border-style: solid;
            border-width: 1px
        }
        
        .viafoura .vf-ajax-loader .vf-ajax-loader-wrap {
            display: inline-block;
            padding-right: 12px;
            text-align: center
        }
        
        .viafoura .vf-ajax-loader .vf-ajax-loader-wrap .vf-loader {
            padding-right: 0
        }
        
        .viafoura .vf-ajax-loader .vf-ajax-loader-wrap span {
            display: inline-block
        }
        
        .viafoura .vf-loader-error {
            display: inline-block;
            margin-right: 6px
        }
        
        .viafoura .vf-loader-error.vf-loader-right-error {
            margin-right: 0;
            margin-left: 6px
        }
        
        .viafoura .vf-ajax-loader .vf-loader img {
            padding-bottom: 2px
        }
        
        .viafoura .vf-loader {
            display: inline-block;
            min-width: 18px
        }
        
        .viafoura .vf-loader img {
            padding-bottom: 4px
        }
        
        .viafoura .vf-loader.vf-loader-block {
            display: block;
            clear: both;
            text-align: center
        }
        
        .viafoura .vf-loader.vf-loader-large span {
            width: 6px;
            height: 6px;
            margin-right: 3px;
            border-radius: 3px
        }
        
        .viafoura .vf-loader.vf-loader-right {
            padding-left: 5px
        }
        
        .viafoura .vf-loader span {
            display: inline-block;
            margin: 0 2px 2px 0;
            vertical-align: middle;
            border-radius: 2px;
            opacity: 0;
            width: 4px;
            height: 4px
        }
        
        .viafoura .vf-ajax-loader {
            color: #6e6d81;
            background: #f1f4f8;
            border-color: #d7dce8
        }
        
        .viafoura .vf-loader-error {
            color: #dd0017;
            font-family: "viafoura";
            cursor: default
        }
        
        .viafoura .vf-loader-error.vf-error-inverted {
            color: #eee
        }
        
        .viafoura .vf-loader.vf-loader-inverted span {
            background-color: #eee
        }
        
        .viafoura .vf-loader span {
            background-color: #9a9a9a
        }
        
        .viafoura .vf-loader span.vf-loading {
            animation: loader-a .8s infinite linear
        }
        
        .viafoura .vf-loader span.vf-l1 {
            animation-delay: 0s
        }
        
        .viafoura .vf-loader span.vf-l2 {
            animation-delay: .1s
        }
        
        .viafoura .vf-loader span.vf-l3 {
            animation-delay: .2s
        }
        
        .viafoura.vf-overlay {
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000000;
            display: flex;
            justify-content: center;
            width: 100vw;
            height: 100vh
        }
        
        .viafoura .vf-overlay-close {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            align-content: stretch;
            align-items: center;
            justify-content: flex-end;
            position: absolute;
            top: 0;
            right: 0;
            z-index: 1000001;
            padding: 20px 40px 20px 20px
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-overlay-close {
                padding: 15px
            }
        }
        
        .viafoura .vf-overlay-close>*+* {
            margin-left: 5px
        }
        
        .viafoura .vf-overlay-close .vf-icon {
            border-style: solid;
            border-width: 1px;
            border-radius: 50%
        }
        
        .viafoura.vf-overlay {
            background-color: rgba(255, 255, 255, .95)
        }
        
        .viafoura .vf-overlay-close {
            color: rgba(0, 0, 0, .6);
            color: var(--light-text-on-background-color, rgba(0, 0, 0, 0.6));
            fill: rgba(0, 0, 0, .6);
            fill: var(--light-text-on-default-color, rgba(0, 0, 0, 0.6));
            background-color: rgba(255, 255, 255, .95);
            border-radius: 0 0 0 3px
        }
        
        .viafoura .vf-overlay-close .vf-icon {
            border-color: #9a9a9a
        }
        
        .viafoura .vf-rating {
            white-space: nowrap;
            text-align: left
        }
        
        .viafoura .vf-rating-small {
            font-size: 12px
        }
        
        .viafoura .vf-rating .vf-interactive path {
            fill: #000
        }
        
        .viafoura .vf-star-filled-in path {
            fill: #f9d300
        }
        
        .viafoura .vf-rating:hover .vf-interactive:hover~.vf-interactive polygon {
            transition: fill .2s ease;
            fill: #fff
        }
        
        .viafoura .vf-rating:hover .vf-interactive:hover~.vf-interactive path {
            transition: fill .2s 0;
            fill: #000
        }
        
        .viafoura .vf-rating:hover .vf-interactive * {
            fill: #f9d300
        }
        
        .viafoura .vf-star-filled-in polygon {
            fill: #f9d300
        }
        
        .viafoura .vf-rating>svg.vf-interactive {
            cursor: pointer
        }
        
        .viafoura .vf-media-gallery.vf-media-gallery-4 .vf-media-gallery-item {
            padding-top: calc((100% - 1px - 10px * 3) / 4);
            padding-left: calc((100% - 1px - 10px * 3) / 4)
        }
        
        .viafoura .vf-media-gallery.vf-media-gallery-5 .vf-media-gallery-item {
            padding-top: calc((100% - 1px - 10px * 4) / 5);
            padding-left: calc((100% - 1px - 10px * 4) / 5)
        }
        
        .viafoura .vf-media-gallery.vf-media-gallery-6 .vf-media-gallery-item {
            padding-top: calc((100% - 1px - 10px * 5) / 6);
            padding-left: calc((100% - 1px - 10px * 5) / 6)
        }
        
        .viafoura .vf-widget.vf-media-gallery {
            margin-right: 15px;
            margin-left: 15px
        }
        
        .viafoura .vf-media-gallery {
            position: relative;
            width: inherit;
            margin: 10px 0;
            padding: 0
        }
        
        .viafoura .vf-media-gallery .vf-thumbnail {
            width: 100%;
            height: 100%
        }
        
        .viafoura .vf-media-gallery-item {
            position: relative;
            display: inline-block;
            width: 0;
            height: 0;
            overflow: hidden;
            text-align: center
        }
        
        .viafoura .vf-media-gallery-item+.vf-media-gallery-item {
            margin-left: 10px
        }
        
        .viafoura .vf-media-gallery-item>*,
        .viafoura .vf-media-gallery-item>.vf-image-wrapper {
            position: absolute;
            top: 0;
            left: 0;
            border-radius: inherit
        }
        
        .viafoura .vf-media-gallery-item .vf-icon-play {
            width: 50px;
            height: 50px;
            position: absolute;
            top: 50%;
            left: 50%;
            max-width: 50%;
            max-height: 50%;
            transform: translate(-50%, -50%)
        }
        
        .viafoura .vf-media-gallery-item:nth-last-child(2) {
            z-index: 1
        }
        
        .viafoura .vf-media-gallery-item.vf-media-gallery-count:last-child {
            position: absolute;
            right: 0;
            z-index: 0
        }
        
        .viafoura .vf-media-gallery-loading-item .vf-progress-bar {
            max-width: 100%;
            margin: 0 10%
        }
        
        .viafoura .vf-video-play-button {
            position: relative
        }
        
        .viafoura .vf-video-play-button .vf-icon-play {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%)
        }
        
        .viafoura .vf-gallery-link {
            padding: 5px
        }
        
        .viafoura .vf-icon-play {
            fill: #fff
        }
        
        .viafoura .vf-icon-play.vf-icon-circle-outline .vf-icon-inner-circle {
            stroke: #fff
        }
        
        .viafoura .vf-media-gallery-item {
            border-radius: 3px
        }
        
        .viafoura .vf-image.vf-media-gallery-loading-item:not(.fade-image-leave)::before {
            opacity: .4
        }
        
        .viafoura .vf-video-play-button {
            background: #000
        }
        
        .viafoura .vf-video-play-button .vf-video-thumb {
            opacity: .8
        }
        
        .viafoura .vf-gallery-link,
        .viafoura .vf-media-gallery-video-item {
            font-size: calc(6pt + 1.3vmin)
        }
        
        .viafoura .slide-left-transition {
            transition: padding-left .3s
        }
        
        .viafoura .slide-left-enter {
            padding-left: 0 !important
        }
        
        .viafoura .vf-video-processing {
            transition: opacity .3s
        }
        
        .viafoura .vf-media-gallery-count .vf-video-processing {
            opacity: 0
        }
        
        .viafoura .vf-media-gallery-count a,
        .viafoura .vf-media-gallery-count a:visited,
        .viafoura .vf-media-gallery-count a:hover,
        .viafoura .vf-media-gallery-count a:active {
            color: #fff !important;
            color: var(--text-on-primary-color, #ffffff) !important;
            text-decoration: none
        }
        
        .viafoura .vf-gallery-fullscreen {
            overflow-x: auto
        }
        
        .viafoura .vf-fullscreen-gallery-view-left,
        .viafoura .vf-fullscreen-gallery-view-right {
            position: fixed;
            top: 50%;
            height: 100%;
            padding: 5px;
            transform: translateY(-50%)
        }
        
        .viafoura .vf-fullscreen-gallery-view-left {
            left: 0
        }
        
        .viafoura .vf-fullscreen-gallery-view-right {
            right: 0;
            margin-right: 10px
        }
        
        .viafoura .vf-fullscreen-gallery-view>div {
            margin: 2vw 46px 1vw 41px
        }
        
        .viafoura .vf-fullscreen-gallery-view>div>*+* {
            margin-top: 2vw
        }
        
        .viafoura .vf-fullscreen-gallery-view-user-meta {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            align-content: stretch;
            align-items: center;
            justify-content: flex-start;
            padding: 0
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-fullscreen-gallery-view-user-meta,
            .viafoura .vf-fullscreen-gallery-view-user-meta .h4 {
                display: block
            }
            .viafoura .vf-fullscreen-gallery-view-user-meta .vf-icon {
                margin-left: 0
            }
        }
        
        .viafoura .vf-fullscreen-gallery-view-user-meta>*+* {
            margin-left: 10px
        }
        
        .viafoura .vf-fullscreen-gallery-media-time {
            margin-left: 5px
        }
        
        .viafoura .vf-gallery-count {
            text-align: right
        }
        
        .viafoura .vf-fullscreen-gallery-viewer-image {
            max-width: 100%;
            max-height: 100%
        }
        
        .viafoura .vf-video-processing .vf-label {
            margin-top: 4px
        }
        
        .viafoura .vf-fullscreen-gallery-footer {
            justify-content: flex-end
        }
        
        .viafoura .vf-fullscreen-gallery-footer-with-pagination {
            justify-content: space-between
        }
        
        .viafoura .vf-fullscreen-gallery-footer-align {
            align-items: center
        }
        
        .viafoura .vf-fullscreen-gallery-footer-align p {
            font-size: 12px
        }
        
        .viafoura .vf-fullscreen-gallery-action-label {
            cursor: pointer
        }
        
        .viafoura .vf-gallery-fullscreen video,
        .viafoura .vf-gallery-fullscreen .vf-video-thumb {
            max-width: 70vw;
            max-height: calc(80vh - 45px)
        }
        
        .viafoura .vf-fullscreen-gallery-media-time {
            color: rgba(0, 0, 0, .6);
            color: var(--light-text-on-background-color, rgba(0, 0, 0, 0.6));
            fill: rgba(0, 0, 0, .6);
            fill: var(--light-text-on-default-color, rgba(0, 0, 0, 0.6))
        }
        
        .viafoura a,
        .viafoura input[type=file] {
            cursor: pointer
        }
        
        .viafoura div,
        .viafoura p,
        .viafoura a {
            word-wrap: break-word;
            word-break: break-word
        }
        
        .viafoura hr {
            clear: both;
            margin: 15px 0;
            border-color: #dadada;
            border-style: solid;
            border-width: 1px
        }
        
        .viafoura br {
            display: block;
            margin: 5px 0 0 0
        }
        
        .viafoura img {
            border: 0
        }
        
        .viafoura ul {
            width: auto;
            margin: 0;
            padding: 0
        }
        
        .viafoura ul li {
            margin: 0;
            padding: 0;
            list-style: none;
            background-image: none
        }
        
        .viafoura .vf-left {
            float: left
        }
        
        .viafoura .vf-right {
            float: right
        }
        
        .viafoura .vf-block {
            display: block;
            margin-bottom: 10px
        }
        
        .viafoura ul.vf-hlist {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap;
            align-content: stretch;
            align-items: stretch;
            justify-content: flex-start
        }
        
        .viafoura ul.vf-hlist li>*+* {
            margin-left: 5px
        }
        
        .viafoura ul.vf-hlist>li+li {
            margin-left: 10px
        }
        
        .viafoura .vf-nav li a {
            white-space: pre;
            white-space: pre-wrap;
            white-space: pre-line;
            word-wrap: break-word
        }
        
        .viafoura .vf-hidden {
            visibility: hidden !important
        }
        
        .viafoura .vf-disable {
            font-size: 80% !important;
            opacity: .5 !important
        }
        
        .viafoura .vf-no-icon.vf-alert,
        .viafoura .vf-no-icon.vf-error-message {
            padding-left: 12px
        }
        
        .viafoura .vf-no-icon::before {
            display: none !important;
            content: "" !important
        }
        
        .viafoura .vf-flag {
            background: rgba(0, 0, 0, 0);
            border: 0
        }
        
        .viafoura .vf-icon-dislike {
            position: relative;
            top: 5px
        }
        
        .viafoura .vf-disabled-likes {
            cursor: not-allowed
        }
        
        .viafoura .vf-share-list li {
            display: block
        }
        
        .viafoura .vf-share-list li a {
            display: block;
            white-space: pre
        }
        
        .viafoura .vf-facebook-like::before {
            content: ""
        }
        
        .viafoura .vf-twitter-tweet::before {
            content: ""
        }
        
        .viafoura .vf-email-icon::before {
            content: ""
        }
        
        .viafoura .vf-social-icon {
            position: relative;
            display: none;
            float: left;
            border: none;
            width: 16px;
            height: 16px
        }
        
        .viafoura .vf-community-widget {
            position: relative;
            color: #666
        }
        
        .viafoura .vf-community-widget .vf-disable {
            font-size: 100% !important;
            opacity: .5 !important
        }
        
        .viafoura .vf-community-widget .vf-cycle {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 9999
        }
        
        .viafoura .vf-community-widget .vf-prev-btn {
            float: left
        }
        
        .viafoura .vf-community-widget .vf-next-btn {
            float: right
        }
        
        .viafoura .vf-community-widget .vf-widget-title {
            margin: 0 0 10px 0;
            padding: 0 0 5px 0;
            border-bottom: 1px solid #dadada
        }
        
        .viafoura .vf-community-widget .vf-article {
            margin-bottom: 12px;
            padding: 0 0 5px 0;
            font-size: 13px
        }
        
        .viafoura .vf-community-widget .vf-article>.vf-article-body {
            overflow: hidden
        }
        
        .viafoura .vf-community-widget .vf-article .vf-article-comments {
            color: #999
        }
        
        .viafoura .vf-community-widget .vf-article .vf-article-image {
            float: left;
            width: 35%;
            margin-right: 10px
        }
        
        .viafoura .vf-community-widget .vf-article .vf-article-heading {
            margin: -0.2em 0 5px 0
        }
        
        .viafoura .vf-community-widget .vf-article .vf-description {
            margin: 0 0 5px 0;
            color: #999
        }
        
        .viafoura .vf-community-widget .vf-article-meta li {
            color: inherit
        }
        
        .viafoura .vf-community-widget .vf-user-content {
            padding: 0 10px
        }
        
        .viafoura .vf-community-widget .vf-recent-comment {
            padding: 0 0 13px 0;
            font-size: 13px
        }
        
        .viafoura .vf-community-widget .vf-recent-comment div {
            padding: 0 0 2px 0
        }
        
        .viafoura .vf-community-widget .vf-page-title {
            margin: 0;
            padding: 0;
            color: #666
        }
        
        .viafoura .vf-community-widget .vf-username {
            cursor: pointer
        }
        
        .viafoura .vf-recent-comment .vf-username,
        .viafoura .vf-recent-comment .vf-page-title {
            font-size: 12px
        }
        
        .viafoura ul.vf-nav {
            display: block;
            list-style: none
        }
        
        .viafoura ul.vf-nav li {
            float: left;
            padding: .425em .625em
        }
        
        .viafoura .vf-community-tab .vf-data-container {
            padding: 0 10px
        }
        
        .viafoura .vf-horizontal .vf-data-container {
            padding: 0
        }
        
        .viafoura .vf-community-tab .vf-widget .vf-widget-title,
        .viafoura .vf-community-tab .vf-widget,
        .viafoura .vf-community-popular .vf-widget {
            display: none
        }
        
        .viafoura .vf-community-tab .vf-widget.vf-current,
        .viafoura .vf-community-popular .vf-widget.vf-current {
            display: block
        }
        
        .viafoura .vf-community-tab .vf-widget {
            margin: 0;
            padding: 15px 5px 10px;
            border: 1px solid #ccc
        }
        
        .viafoura .vf-community-tab .vf-nav li {
            margin-right: -1px;
            margin-bottom: -1px;
            background: #ebebeb;
            border: 1px solid #ccc
        }
        
        .viafoura .vf-community-tab .vf-nav li.vf-current {
            border-radius: 0;
            border-bottom-style: solid;
            border-bottom-width: 1px;
            border-bottom-color: #fff;
            border-bottom-color: var(--default-color, #ffffff);
            background-color: #fff;
            background-color: var(--background-color, #ffffff)
        }
        
        .viafoura .vf-community-tab .vf-community-widget.vf-horizontal .vf-nav {
            margin: 0
        }
        
        .viafoura .vf-community-comment {
            float: left
        }
        
        .viafoura .vf-community-comment .vf-comment.html {
            display: block;
            margin: 10px 0
        }
        
        .viafoura .vf-community-comment .vf-comment-meta {
            position: relative
        }
        
        .viafoura .vf-community-widget {
            width: 100%
        }
        
        .viafoura .vf-community-widget .vf-image-container {
            display: block;
            max-width: 100%;
            height: auto;
            margin: 15px 0;
            overflow: hidden
        }
        
        .viafoura .vf-community-widget .vf-image-container img {
            width: 100%
        }
        
        .viafoura .vf-community-widget .vf-community-comment .vf-comment {
            padding-right: 10px
        }
        
        .viafoura .vf-community-widget .vf-media-container {
            max-width: 100%;
            padding: 0
        }
        
        .viafoura .vf-community-widget .vf-media-container img {
            width: 100%;
            height: auto
        }
        
        .viafoura .vf-widget .vf-horizontal .vf-widget-title {
            margin: 0;
            padding: 0
        }
        
        .viafoura .vf-widget.vf-switch .vf-widget-title,
        .viafoura .vf-widget.vf-switch .vf-nav {
            float: left
        }
        
        .viafoura .vf-widget.vf-switch .vf-widget {
            margin: 0;
            padding: 0;
            border: none
        }
        
        .viafoura .vf-widget.vf-switch .vf-widget-title {
            margin: 0;
            padding: 0;
            border-bottom: none
        }
        
        .viafoura .vf-widget.vf-switch .vf-nav {
            float: left;
            margin-top: 1px;
            margin-left: 20px
        }
        
        .viafoura .vf-widget.vf-switch .vf-nav li {
            margin: 0 1px;
            font-size: 11px;
            background: none;
            border: none
        }
        
        .viafoura .vf-community-tab.vf-switch .vf-nav li.vf-current {
            background-color: rgba(0, 0, 0, .3);
            background-color: var(--primary-color-30, rgba(0, 0, 0, 0.3))
        }
        
        .viafoura .vf-community-tab.vf-switch .vf-nav li.vf-current a {
            color: #fff;
            color: var(--text-on-primary-color, #ffffff)
        }
        
        .viafoura .vf-widget-users h1 {
            margin-bottom: 15px;
            padding: 0 10px;
            color: #555;
            text-transform: capitalize
        }
        
        .viafoura .vf-btn {
            display: inline-block
        }
        
        .viafoura .vf-logout-disable {
            cursor: default;
            opacity: .5 !important
        }
        
        .viafoura .vf-no-messages {
            margin: 20px 0;
            text-align: center
        }
        
        .viafoura .vf-header,
        .viafoura .vf-form input[type=submit] {
            background-color: #4f5d6d
        }
        
        .viafoura .vf-social-button,
        .viafoura .vf-form input[type=button],
        .viafoura .vf-tabs {
            background-color: #ccc
        }
        
        .viafoura .vf-image-modal {
            min-width: 300px;
            min-height: 60px
        }
        
        .viafoura .vf-image-modal .vf-image-container {
            width: 100%;
            height: auto;
            min-height: 300px;
            text-align: center
        }
        
        .viafoura .vf-image-modal .vf-image-container img {
            max-width: 100%;
            height: auto;
            margin: 0 auto
        }
        
        .viafoura .vf-tabs {
            border-top: 1px solid #888;
            border-bottom: 1px solid #888
        }
        
        .viafoura .vf-tabs li {
            display: block;
            float: left;
            padding: 5px 0;
            text-align: center
        }
        
        .viafoura .vf-tabs li.vf-current {
            color: #666
        }
        
        .viafoura .vf-tabs li.vf-current a {
            border-radius: 0;
            border-style: solid;
            border-width: 1px;
            position: relative;
            bottom: -1px;
            margin-top: -5px;
            padding: 10px 15px 11px;
            color: #444;
            text-shadow: 0 1px 0 #fff;
            background: #fff;
            border-color: #aaa;
            border-bottom-color: #fff;
            border-bottom-color: var(--default-color, #ffffff)
        }
        
        .viafoura .vf-input-like {
            height: 2.4em;
            overflow: hidden;
            vertical-align: middle;
            border-color: #e7e7e7;
            border-radius: 0;
            border-style: solid;
            border-width: .1em
        }
        
        .viafoura .vf-input-like>span {
            display: block;
            padding: .5em;
            color: #989898;
            white-space: nowrap
        }
        
        .viafoura .vf-moderation-status-input input[name=vf_email] {
            width: 180px;
            margin: 0;
            padding-right: 30px
        }
        
        .viafoura .vf-user-content .vf-like-btn {
            display: none
        }
        
        .viafoura .vf-user-content .vf-reply-btn {
            display: none
        }
        
        .viafoura .vf-user-content .vf-flag-btn {
            visibility: hidden
        }
        
        .viafoura .vf-show-more {
            display: inline-block;
            margin: 0 5px;
            padding: 1px 5px;
            color: #888;
            font-size: 12px;
            text-shadow: 0 1px 0 #fff
        }
        
        .viafoura .vf-show-all {
            margin-top: 10px
        }
        
        .viafoura .vf-recorder-container {
            color: #fff;
            background: rgba(0, 0, 0, .75);
            background: var(--primary-color-75, rgba(0, 0, 0, 0.75))
        }
        
        .viafoura .vf-recorder-container .vf-recorder {
            margin: 0 auto;
            text-align: center
        }
        
        .viafoura .vf-media-container {
            display: inline-block;
            width: 50px;
            height: 50px
        }
        
        .viafoura .vf-media-container .vf-photo,
        .viafoura .vf-media-container img {
            display: inline-block;
            width: inherit;
            height: inherit;
            color: #444;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            border-style: solid;
            border-width: 1px;
            cursor: zoom-in;
            border-color: rgba(0, 0, 0, .75);
            border-color: var(--primary-color-75, rgba(0, 0, 0, 0.75))
        }
        
        .viafoura .vf-media-container .vf-placeholder {
            width: 300px;
            height: 170px
        }
        
        .viafoura .vf-recent-comment .vf-media-container {
            float: right;
            clear: both;
            width: 75px;
            height: 56px;
            margin: 0 0 10px 10px;
            padding: 5px !important
        }
        
        .viafoura .vf-recent-comment .vf-media-container .vf-photo,
        .viafoura .vf-recent-comment .vf-media-container img {
            width: inherit;
            height: inherit;
            border-style: solid;
            border-width: 1px;
            cursor: zoom-in;
            border-color: rgba(0, 0, 0, .75);
            border-color: var(--primary-color-75, rgba(0, 0, 0, 0.75))
        }
        
        .viafoura .vf-anonymous {
            display: none
        }
        
        .viafoura .vf-comment-attach-wrapper {
            position: absolute;
            right: 0;
            bottom: 0
        }
        
        .viafoura .vf-attach {
            position: absolute;
            z-index: -1;
            width: .1px;
            height: .1px;
            overflow: hidden;
            opacity: 0
        }
        
        .viafoura .vf-attach:focus+.vf-attach-label {
            outline: -webkit-focus-ring-color auto 5px
        }
        
        .viafoura .vf-is-anonymous .vf-anonymous {
            display: inline
        }
        
        .viafoura .vf-is-anonymous .vf-username {
            cursor: default
        }
        
        .viafoura .vf-is-anonymous .vf-rank {
            display: none
        }
        
        .viafoura .vf-hlist.vf-comment-actions>li+li {
            margin-left: 15px
        }
        
        .viafoura ul.vf-hlist>li.vf-flag-container.invisible {
            display: none
        }
        
        .viafoura .vf-share-list-link::before {
            margin-right: 5px;
            text-decoration: none
        }
        
        .viafoura .vf-rtl .viafoura {
            direction: rtl
        }
        
        .viafoura .vf-rtl .viafoura .vf-left,
        .viafoura .vf-rtl .viafoura ul.vf-nav li,
        .viafoura .vf-rtl .viafoura .vf-tabs li {
            float: right
        }
        
        .viafoura .vf-rtl .viafoura .vf-right {
            padding: 0
        }
        
        .viafoura .vf-rtl .viafoura .vf-modal .vf-modal-close {
            right: auto;
            left: 0
        }
        
        .viafoura .vf-rtl .viafoura.tooltip .vf-dialog {
            direction: ltr
        }
        
        .viafoura a {
            color: #0074e8;
            color: var(--accent-color, #0074e8);
            text-decoration: none
        }
        
        .viafoura a:hover,
        .viafoura a:focus,
        .viafoura a.pseudo-class-hover,
        .viafoura a:active,
        .viafoura a.pseudo-class-active {
            color: #0074e8;
            color: var(--accent-color, #0074e8);
            text-decoration: underline
        }
        
        .viafoura a:visited,
        .viafoura a.pseudo-class-visited {
            color: #0074e8;
            color: var(--accent-color, #0074e8)
        }
        
        .viafoura a.pseudo-class-unvisited {
            color: #0074e8;
            color: var(--accent-color, #0074e8)
        }
        
        .viafoura p a {
            color: #0074e8;
            color: var(--accent-color, #0074e8)
        }
        
        .viafoura p a:hover,
        .viafoura p a:focus,
        .viafoura p a.pseudo-class-hover,
        .viafoura p a:active,
        .viafoura p a.pseudo-class-active {
            color: #0074e8;
            color: var(--accent-color, #0074e8);
            text-decoration: none
        }
        
        .viafoura p a:visited,
        .viafoura p a.pseudo-class-visited {
            color: inherit;
            text-decoration: underline
        }
        
        .viafoura p a.pseudo-class-unvisited {
            color: #0074e8;
            color: var(--accent-color, #0074e8);
            text-decoration: underline
        }
        
        .viafoura .vf-modal .vf-inner-modal {
            background-color: #eee;
            border-color: #9a9a9a;
            border-style: solid
        }
        
        .viafoura .mejs-container {
            background: #000;
            background: var(--primary-color-100, #000000)
        }
        
        .viafoura .mejs-embed,
        .viafoura .mejs-embed body {
            background: #000;
            background: var(--primary-color-100, #000000)
        }
        
        .viafoura .mejs-overlay-button {
            background: url("") no-repeat
        }
        
        .viafoura .mejs-overlay-loading {
            background: url("")
        }
        
        .viafoura .mejs-container .mejs-controls {
            background: url("")
        }
        
        .viafoura .mejs-container .mejs-controls div {
            background: 0;
            background-image: none
        }
        
        .viafoura .mejs-controls .mejs-button button {
            background: rgba(0, 0, 0, 0) url("") no-repeat
        }
        
        .viafoura .mejs-controls .mejs-button button:focus {
            outline: solid 1px #f9e700
        }
        
        .viafoura .mejs-container .mejs-controls .mejs-time {
            color: #fff
        }
        
        .viafoura .mejs-container .mejs-controls .mejs-time span {
            color: #fff
        }
        
        .viafoura .mejs-controls .mejs-time-rail .mejs-time-total {
            background: rgba(50, 50, 50, .75)
        }
        
        .viafoura .mejs-controls .mejs-time-rail .mejs-time-loaded {
            background: rgba(60, 170, 200, .75)
        }
        
        .viafoura .mejs-controls .mejs-time-rail .mejs-time-current {
            background: rgba(255, 255, 255, .75)
        }
        
        .viafoura .mejs-controls .mejs-time-rail .mejs-time-handle {
            background: #fff;
            background: var(--default-color, #ffffff);
            border-color: rgba(0, 0, 0, .75);
            border-color: var(--primary-color-75, rgba(0, 0, 0, 0.75))
        }
        
        .viafoura .mejs-controls .mejs-time-rail .mejs-time-float {
            background: #eee;
            border-color: rgba(0, 0, 0, .75);
            border-color: var(--primary-color-75, rgba(0, 0, 0, 0.75));
            color: rgba(0, 0, 0, .75);
            color: var(--primary-color-75, rgba(0, 0, 0, 0.75))
        }
        
        .viafoura .mejs-controls .mejs-time-rail .mejs-time-float-corner {
            border-color: #eee rgba(0, 0, 0, 0) rgba(0, 0, 0, 0)
        }
        
        .viafoura .mejs-controls .mejs-volume-button .mejs-volume-slider {
            background: url("")
        }
        
        .viafoura .mejs-controls .mejs-volume-button .mejs-volume-slider .mejs-volume-total {
            background: rgba(255, 255, 255, .6)
        }
        
        .viafoura .mejs-controls .mejs-volume-button .mejs-volume-slider .mejs-volume-current {
            background: rgba(255, 255, 255, .75)
        }
        
        .viafoura .mejs-controls .mejs-volume-button .mejs-volume-slider .mejs-volume-handle {
            background: rgba(255, 255, 255, .75)
        }
        
        .viafoura .mejs-controls .mejs-captions-button .mejs-captions-selector {
            background: url("");
            border-color: rgba(0, 0, 0, 0)
        }
        
        .viafoura .mejs-controls .mejs-captions-button .mejs-captions-selector ul li {
            color: #fff
        }
        
        .viafoura .mejs-controls .mejs-captions-button .mejs-captions-translations {
            font-size: 10px
        }
        
        .viafoura .mejs-chapters {
            border-right-color: #fff;
            border-right-color: var(--default-color, #ffffff)
        }
        
        .viafoura .mejs-chapters .mejs-chapter {
            background: rgba(0, 0, 0, .75);
            background: var(--primary-color-75, rgba(0, 0, 0, 0.75))
        }
        
        .viafoura .mejs-chapters .mejs-chapter .mejs-chapter-block {
            border-right-color: rgba(0, 0, 0, .75);
            border-right-color: var(--primary-color-75, rgba(0, 0, 0, 0.75));
            border-bottom-color: rgba(0, 0, 0, .75);
            border-bottom-color: var(--primary-color-75, rgba(0, 0, 0, 0.75));
            color: #fff;
            color: var(--text-on-primary-color, #ffffff);
            font-size: 11px
        }
        
        .viafoura .mejs-chapters .mejs-chapter .mejs-chapter-block:hover {
            background: rgba(100, 100, 100, .75)
        }
        
        .viafoura .mejs-captions-layer {
            color: #fff
        }
        
        .viafoura .mejs-captions-layer a {
            color: #fff;
            text-decoration: underline
        }
        
        .viafoura .mejs-captions-text {
            background: url("")
        }
        
        .viafoura .me-cannotplay a {
            color: #fff
        }
        
        .viafoura .mejs-contextmenu {
            background-color: #fff;
            background-color: var(--background-color, #ffffff);
            border-color: #9a9a9a
        }
        
        .viafoura .mejs-contextmenu .mejs-contextmenu-separator {
            background: rgba(0, 0, 0, .75);
            background: var(--primary-color-75, rgba(0, 0, 0, 0.75))
        }
        
        .viafoura .mejs-contextmenu .mejs-contextmenu-item {
            font-size: 12px;
            color: rgba(0, 0, 0, .75);
            color: var(--primary-color-75, rgba(0, 0, 0, 0.75))
        }
        
        .viafoura .mejs-contextmenu .mejs-contextmenu-item:hover {
            color: #fff;
            background: #2c7c91
        }
        
        .viafoura .vf-error {
            color: #e00
        }
        
        .viafoura .vf-error-message,
        .viafoura .vf-disabled-content,
        .viafoura .vf-spam,
        .viafoura .vf-banned {
            background-color: #f2838f;
            border-color: #ebccd1
        }
        
        .viafoura .vf-comment-content {
            border-color: rgba(0, 0, 0, 0)
        }
        
        .viafoura .vf-info,
        .viafoura .vf-username-moderation-message,
        .viafoura .vf-avatar-moderation-message {
            background-color: #7cd1ef;
            border-color: #e6d7bc
        }
        
        .viafoura .vf-success-message,
        .viafoura .vf-verification-message {
            color: #18691a;
            background-color: #dff0d8;
            border-color: #bbd3b0
        }
        
        .viafoura .vf-removed {
            background: rgba(0, 90, 140, .25)
        }
        
        .viafoura .vf-mod-error {
            color: #840a1f;
            background: #f2dede;
            border-color: #eee
        }
        
        .viafoura .vf-verification-status.vf-warning {
            color: #840a1f;
            background-color: #f2dede
        }
        
        .viafoura .vf-verification-status .vf-loader-error {
            color: inherit
        }
        
        .viafoura .vf-info li:not(:last-child)::after {
            content: "|"
        }
        
        .viafoura .vf-success-message a,
        .viafoura .vf-error-message a,
        .viafoura .vf-alert a,
        .viafoura .vf-info a {
            text-decoration: underline
        }
        
        .viafoura .vf-success-message a:hover,
        .viafoura .vf-error-message a:hover,
        .viafoura .vf-alert a:hover,
        .viafoura .vf-info a:hover {
            color: rgba(0, 0, 0, .75);
            color: var(--primary-color-75, rgba(0, 0, 0, 0.75))
        }
        
        .viafoura .vf-icon-success~strong,
        .viafoura .vf-icon-approved~strong {
            color: #18691a
        }
        
        .viafoura .vf-icon-error~strong,
        .viafoura .vf-icon-rejected~strong {
            color: #840a1f
        }
        
        .viafoura .vf-tip-text {
            color: #eee
        }
        
        .viafoura .vf-tooltip .vf-tip {
            border-color: rgba(0, 0, 0, 0);
            content: "";
            border-color-top: #000;
            border-color-top: var(--primary-color-100, #000000)
        }
        
        .viafoura.vf-tipsy,
        .viafoura.vf-dropdown {
            transition: transform .1s, opacity .1s
        }
        
        .viafoura.vf-tipsy .vf-tipsy-inner,
        .viafoura.vf-dropdown .vf-tipsy-inner {
            background-color: #fff;
            background-color: var(--background-color, #ffffff);
            box-shadow: -5px 5px 15px 0 rgba(100, 100, 100, .5);
            color: rgba(0, 0, 0, .6);
            color: var(--light-text-on-background-color, rgba(0, 0, 0, 0.6))
        }
        
        .viafoura.vf-tipsy .vf-tipsy-arrow,
        .viafoura.vf-tipsy .vf-tipsy-arrow-border,
        .viafoura.vf-dropdown .vf-tipsy-arrow,
        .viafoura.vf-dropdown .vf-tipsy-arrow-border {
            border-color: #fff;
            border-color: var(--default-color, #ffffff)
        }
        
        .viafoura.vf-tipsy .vf-tipsy-arrow-n,
        .viafoura.vf-dropdown .vf-tipsy-arrow-n {
            border-bottom-color: #fff;
            border-bottom-color: var(--default-color, #ffffff)
        }
        
        .viafoura.vf-tipsy .vf-tipsy-arrow-s,
        .viafoura.vf-dropdown .vf-tipsy-arrow-s {
            border-top-color: #fff;
            border-top-color: var(--default-color, #ffffff)
        }
        
        .viafoura.vf-tipsy .vf-tipsy-arrow-e,
        .viafoura.vf-dropdown .vf-tipsy-arrow-e {
            border-left-color: #fff;
            border-left-color: var(--default-color, #ffffff)
        }
        
        .viafoura.vf-tipsy .vf-tipsy-arrow-w,
        .viafoura.vf-dropdown .vf-tipsy-arrow-w {
            border-right-color: #fff;
            border-right-color: var(--default-color, #ffffff)
        }
        
        .viafoura.vf-tipsy .vf-tooltip,
        .viafoura.vf-dropdown .vf-tooltip {
            background-color: #888;
            color: var(--text-on-primry-color, );
            text-shadow: 0 -1px 0 rgba(0, 0, 0, .75);
            text-shadow: 0 -1px 0 var(--primary-color-75, rgba(0, 0, 0, 0.75));
            border-color: #9a9a9a;
            border-radius: 5px
        }
        
        .viafoura.vf-tipsy .vf-tooltip::after,
        .viafoura.vf-dropdown .vf-tooltip::after {
            border-color: rgba(0, 0, 0, .75) rgba(0, 0, 0, 0);
            border-color: var(--primary-color-75, rgba(0, 0, 0, 0.75)) rgba(0, 0, 0, 0);
            content: " "
        }
        
        .viafoura.vf-tipsy-n .vf-tipsy-arrow,
        .viafoura.vf-tipsy-n .vf-tipsy-arrow-border {
            border-right-color: rgba(0, 0, 0, 0);
            border-left-color: rgba(0, 0, 0, 0)
        }
        
        .viafoura.vf-tipsy-nw .vf-tipsy-arrow,
        .viafoura.vf-tipsy-nw .vf-tipsy-arrow-border {
            border-right-color: rgba(0, 0, 0, 0);
            border-left-color: rgba(0, 0, 0, 0)
        }
        
        .viafoura.vf-tipsy-ne .vf-tipsy-arrow,
        .viafoura.vf-tipsy-ne .vf-tipsy-arrow-border {
            border-right-color: rgba(0, 0, 0, 0);
            border-left-color: rgba(0, 0, 0, 0)
        }
        
        .viafoura.vf-tipsy-s .vf-tipsy-arrow,
        .viafoura.vf-tipsy-s .vf-tipsy-arrow-border {
            border-right-color: rgba(0, 0, 0, 0);
            border-left-color: rgba(0, 0, 0, 0)
        }
        
        .viafoura.vf-tipsy-sw .vf-tipsy-arrow,
        .viafoura.vf-tipsy-sw .vf-tipsy-arrow-border {
            border-right-color: rgba(0, 0, 0, 0);
            border-left-color: rgba(0, 0, 0, 0)
        }
        
        .viafoura.vf-tipsy-se .vf-tipsy-arrow,
        .viafoura.vf-tipsy-se .vf-tipsy-arrow-border {
            border-right-color: rgba(0, 0, 0, 0);
            border-left-color: rgba(0, 0, 0, 0)
        }
        
        .viafoura.vf-tipsy-e .vf-tipsy-arrow,
        .viafoura.vf-tipsy-e .vf-tipsy-arrow-border {
            border-top-color: rgba(0, 0, 0, 0);
            border-bottom-color: rgba(0, 0, 0, 0)
        }
        
        .viafoura.vf-tipsy-w .vf-tipsy-arrow,
        .viafoura.vf-tipsy-w .vf-tipsy-arrow-border {
            border-top-color: rgba(0, 0, 0, 0);
            border-bottom-color: rgba(0, 0, 0, 0)
        }
        
        .viafoura .vf-date {
            display: flex;
            color: rgba(0, 0, 0, .6);
            color: var(--light-text-on-background-color, rgba(0, 0, 0, 0.6))
        }
        
        .viafoura .vf-date>*+* {
            margin-left: .5em
        }
        
        .viafoura .vf-comment-user-actions .vf-timer,
        .viafoura .vf-comment-edit-timer .vf-timer {
            color: #000;
            color: var(--dark-text-on-background-color, #000000)
        }
        
        .viafoura .vf-comment-html {
            transition: .1s color, .1s opacity
        }
        
        .viafoura .fade-black-transition {
            transition: background-color .3s
        }
        
        .viafoura .fade-black-transition>* {
            transition: opacity .3s
        }
        
        .viafoura .fade-black-enter,
        .viafoura .fade-black-leave {
            background-color: #000
        }
        
        .viafoura .fade-black-enter>*,
        .viafoura .fade-black-leave>* {
            opacity: 0
        }
        
        .viafoura .fade-partial-transition {
            opacity: .3
        }
        
        .viafoura .fade-partial-transition.fade-partial-leave {
            opacity: 1
        }
        
        @keyframes rotating {
            from {
                transform: rotate(0deg)
            }
            to {
                transform: rotate(360deg)
            }
        }
        
        .viafoura .rotating {
            animation: rotating 2s linear infinite
        }
        
        .viafoura .vf-square-loading {
            position: relative;
            display: flex;
            flex-direction: row;
            align-items: stretch;
            justify-content: space-between;
            width: 100px
        }
        
        .viafoura .vf-square-loading div {
            position: absolute;
            top: 0;
            width: 20px;
            height: 40px;
            background-color: #000;
            transform: scale(0.3);
            animation-name: vf-square-load;
            animation-duration: 1s;
            animation-iteration-count: infinite;
            animation-direction: normal
        }
        
        .viafoura .vf-square-loading div:nth-child(1) {
            left: 20px;
            animation-delay: .2s
        }
        
        .viafoura .vf-square-loading div:nth-child(2) {
            left: 40px;
            animation-delay: .3s
        }
        
        .viafoura .vf-square-loading div:nth-child(3) {
            left: 60px;
            animation-delay: .4s
        }
        
        @keyframes vf-square-load {
            0% {
                background-color: #000;
                border-radius: 10%;
                transform: scale(1)
            }
            100% {
                background-color: #fff;
                border-radius: 0%;
                transform: scale(0.3)
            }
        }
        
        .viafoura .vf-highlight-colour {
            background-color: #effaff
        }
        
        .viafoura .vf-primary-colour {
            color: rgba(0, 0, 0, .6);
            color: var(--primary-color-60, rgba(0, 0, 0, 0.6))
        }
        
        .viafoura .vf-primary-border-colour {
            border-color: rgba(0, 0, 0, .75);
            border-color: var(--primary-color-75, rgba(0, 0, 0, 0.75))
        }
        
        .viafoura .vf-primary-bg-colour {
            background-color: #fff;
            background-color: var(--background-color, #ffffff)
        }
        
        .viafoura .vf-primary-fill-colour {
            fill: rgba(0, 0, 0, .75);
            fill: var(--primary-color-75, rgba(0, 0, 0, 0.75))
        }
        
        .viafoura .vf-primary-notification-bg-colour {
            background-color: #fff;
            background-color: var(--background-color, #ffffff)
        }
        
        .viafoura .vf-primary-notification-bg-colour:hover {
            background-color: #eee
        }
        
        .viafoura .vf-light-control-bg-colour {
            background-color: rgba(0, 0, 0, .02);
            background-color: var(--primary-color-02, rgba(0, 0, 0, 0.02))
        }
        
        .viafoura .vf-control-colour {
            color: #a3bcc8
        }
        
        .viafoura .vf-control-border-colour {
            border-color: #a3bcc8
        }
        
        .viafoura .vf-control-bg-colour {
            background-color: #a3bcc8
        }
        
        .viafoura .vf-control-fill-colour {
            fill: #a3bcc8
        }
        
        .viafoura .vf-complement-colour {
            color: #cc4949;
            color: var(--error-color, #cc4949)
        }
        
        .viafoura .vf-complement-border-colour {
            border-color: #cc4949;
            border-color: var(--error-color, #cc4949)
        }
        
        .viafoura .vf-complement-bg-colour {
            background-color: #cc4949;
            background-color: var(--error-color, #cc4949)
        }
        
        .viafoura .vf-complement-fill-colour {
            fill: #cc4949;
            fill: var(--error-color, #cc4949)
        }
        
        .viafoura .vf-secondary-colour {
            color: #eee
        }
        
        .viafoura .vf-secondary-border-colour {
            border-color: #eee
        }
        
        .viafoura.vf-secondary-bg-colour,
        .viafoura .vf-secondary-bg-colour {
            background-color: #eee
        }
        
        .viafoura .vf-secondary-fill-colour {
            fill: #eee
        }
        
        .viafoura .vf-secondary-notification-colour {
            color: #f4fcff
        }
        
        .viafoura .vf-secondary-notification-border-colour {
            border-color: #f4fcff
        }
        
        .viafoura .vf-secondary-notification-bg-colour {
            background-color: #f4fcff
        }
        
        .viafoura .vf-secondary-notification-bg-colour:hover {
            background-color: #e4f4fb
        }
        
        .viafoura .vf-secondary-notification-fill-colour {
            fill: #f4fcff
        }
        
        .viafoura .vf-primary-text-colour {
            color: rgba(0, 0, 0, .6);
            color: var(--light-text-on-background-color, rgba(0, 0, 0, 0.6))
        }
        
        .viafoura .vf-primary-text-border-colour {
            border-color: #fff;
            border-color: var(--default-color, #ffffff)
        }
        
        .viafoura .vf-primary-text-bg-colour {
            background-color: #fff;
            background-color: var(--background-color, #ffffff)
        }
        
        .viafoura .vf-primary-text-fill-colour {
            fill: rgba(0, 0, 0, .6);
            fill: var(--light-text-on-default-color, rgba(0, 0, 0, 0.6))
        }
        
        .viafoura .vf-accent-text-colour,
        .viafoura .vf-complement-text-colour {
            color: #fff;
            color: var(--text-on-accent-color, #ffffff)
        }
        
        .viafoura .vf-secondary-text-colour {
            color: #242424
        }
        
        .viafoura .vf-secondary-text-border-colour {
            border-color: #242424
        }
        
        .viafoura .vf-secondary-text-bg-colour {
            background-color: #242424
        }
        
        .viafoura .vf-secondary-text-fill-colour {
            fill: #242424
        }
        
        .viafoura .vf-heading-border-colour {
            border-color: #9a9a9a
        }
        
        .viafoura .vf-heading-bg-colour {
            background-color: #9a9a9a
        }
        
        .viafoura .vf-heading-fill-colour {
            fill: #9a9a9a
        }
        
        .viafoura .vf-empty-bg-colour {
            background-color: #fff;
            background-color: var(--background-color, #ffffff)
        }
        
        .viafoura .vf-warning-bg-colour {
            background-color: #b95000;
            background-color: var(--warning-color, #b95000);
            color: #fff;
            color: var(--text-on-warning-color, #ffffff)
        }
        
        .viafoura .vf-info-bg-colour {
            background-color: #0074e8;
            background-color: var(--accent-color, #0074e8);
            color: #fff;
            color: var(--text-on-accent-color, #ffffff)
        }
        
        .viafoura .vf-success-bg-colour {
            background-color: #3d8510;
            background-color: var(--success-color, #3d8510);
            color: #fff;
            color: var(--text-on-success-color, #ffffff)
        }
        
        .viafoura .vf-success-fill-colour {
            fill: #3d8510;
            fill: var(--success-color, #3d8510)
        }
        
        .viafoura .vf-control-strong-hoverable {
            color: #a3bcc8;
            fill: #a3bcc8
        }
        
        .viafoura .vf-primary-hoverable,
        .viafoura .vf-primary-hoverable:focus {
            fill: rgba(0, 0, 0, .75);
            fill: var(--primary-color-75, rgba(0, 0, 0, 0.75));
            color: rgba(0, 0, 0, .75);
            color: var(--primary-color-75, rgba(0, 0, 0, 0.75))
        }
        
        .viafoura .vf-control-strong-hoverable:hover,
        .viafoura .vf-control-strong-hoverable:focus {
            color: #fff;
            color: var(--text-on-primary-color, #ffffff);
            fill: #fff;
            fill: var(--text-on-primary-color, #ffffff)
        }
        
        .viafoura .vf-accent-hoverable,
        .viafoura .vf-accent-hoverable:focus {
            fill: #0074e8;
            fill: var(--accent-color, #0074e8);
            color: #0074e8;
            color: var(--accent-color, #0074e8)
        }
        
        .viafoura .vf-accent-border-colour {
            border-color: #007fff;
            border-color: var(--accent-color-light, #007fff)
        }
        
        .viafoura .vf-accent-colour {
            color: #0074e8;
            color: var(--accent-color, #0074e8)
        }
        
        .viafoura .vf-accent-bg-colour {
            background-color: #0074e8;
            background-color: var(--accent-color, #0074e8);
            color: #fff;
            color: var(--text-on-accent-color, #ffffff);
            fill: currentcolor
        }
        
        .viafoura .vf-accent-fill-colour {
            fill: #0074e8;
            fill: var(--accent-color, #0074e8)
        }
        
        .viafoura .vf-offscreen-text,
        .viafoura .vf-offscreen-until-focused-text {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            overflow: hidden;
            white-space: nowrap;
            border: 0;
            clip: rect(1px 1px 1px);
            clip: rect(1px, 1px, 1px, 1px)
        }
        
        .viafoura .vf-offscreen-until-focused-text:focus {
            z-index: 1;
            width: auto;
            height: auto;
            padding: 3px;
            border: 3px solid #000;
            clip: auto;
            background-color: #fff;
            background-color: var(--background-color, #ffffff)
        }
        
        .viafoura .vf-mdash {
            display: inline-block
        }
        
        .viafoura .vf-mdash.vf-mdash-long {
            position: relative;
            width: 40px
        }
        
        .viafoura .vf-mdash.vf-mdash-long::before {
            position: absolute;
            top: -5px;
            z-index: 0;
            width: 30px;
            border-bottom: 1px #000 solid;
            content: ""
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-visibly-hidden-on-mobile {
                position: absolute;
                height: 0;
                visibility: hidden
            }
        }
        
        .viafoura .vf-flex-container {
            display: flex
        }
        
        .viafoura .vf-close-container {
            position: fixed;
            width: calc(100% - 20px);
            height: 100%
        }
        
        .viafoura .vf-horiz-list {
            display: flex;
            flex-direction: row;
            flex-wrap: nowrap
        }
        
        .viafoura .vf-split-list {
            align-items: center;
            justify-content: space-between
        }
        
        .viafoura .vf-flex-vert {
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap
        }
        
        .viafoura .vf-vert-list {
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap
        }
        
        .viafoura .vf-vert-list>*+* {
            border-top-width: 1px;
            border-top-style: solid
        }
        
        .viafoura .vf-vert-list .vf-non-link {
            padding: 10px 25px
        }
        
        .viafoura .vf-vert-list .vf-link a {
            padding: 10px 25px
        }
        
        .viafoura .vf-flex-grow {
            flex-grow: 1
        }
        
        .viafoura .vf-forgot-password-form {
            flex-direction: column;
            padding: 25px
        }
        
        .viafoura .vf-forgot-password-form>*+* {
            margin-top: 20px
        }
        
        .viafoura .vf-forgot-password-form .vf-forgot-password-email {
            height: 35px;
            padding-left: 15px;
            border-style: solid;
            border-width: 1px;
            border-radius: 4px
        }
        
        @media only screen and (max-width: 640px) {
            @supports(-webkit-overflow-scrolling: touch) {
                .viafoura .vf-forgot-password-form .vf-forgot-password-email {
                    font-size: 16px
                }
            }
        }
        
        .viafoura .vf-forgot-password-back-message {
            margin-left: 10px
        }
        
        .viafoura .vf-tabbed-nav {
            height: 50px
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-tabbed-nav {
                height: 35px
            }
        }
        
        .viafoura .vf-tabbed-subnav .vf-tabbed-nav {
            padding-top: 15px
        }
        
        @media only screen and (max-width: 640px) {
            .viafoura .vf-tabbed-subnav .vf-tabbed-nav {
                padding-top: 0
            }
        }
        
        .viafoura .vf-tabbed-subnav .vf-tabbed-nav>* {
            height: 35px
        }
        /*# sourceURL=webpack://./assets/legacy/css/vf.scss */
        /*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8uL2Fzc2V0cy9sZWdhY3kvY3NzL3ZmLnNjc3MiLCJ3ZWJwYWNrOi8vLi9hc3NldHMvbGVnYWN5L2Nzcy92Zi1jb25zdGFudHMuc2NzcyIsIndlYnBhY2s6Ly8uL2Fzc2V0cy9sZWdhY3kvY3NzL2ZvbnRzLnNjc3MiLCJ3ZWJwYWNrOi8vLi9ub2RlX21vZHVsZXMvQHZmL2Rlc2lnbi1hc3NldHMvY3NzL2Jhc2UvX3Jlc2V0LnNjc3MiLCJ3ZWJwYWNrOi8vLi9ub2RlX21vZHVsZXMvQHZmL2Rlc2lnbi1hc3NldHMvY3NzL2Jhc2UvbW9kdWxlLnNjc3MiLCJ3ZWJwYWNrOi8vLi9ub2RlX21vZHVsZXMvQHZmL2Rlc2lnbi1hc3NldHMvY3NzL3ZhcmlhYmxlcy9fY29sb3JzLnNjc3MiLCJ3ZWJwYWNrOi8vLi9ub2RlX21vZHVsZXMvQHZmL2Rlc2lnbi1hc3NldHMvY3NzL3R5cG9ncmFwaHkvZm9udC1zdHlsZXMvX3JvYm90by5zY3NzIiwid2VicGFjazovLy4vbm9kZV9tb2R1bGVzL0B2Zi9kZXNpZ24tYXNzZXRzL2Nzcy90eXBvZ3JhcGh5L19iYXNlLnNjc3MiLCJ3ZWJwYWNrOi8vLi9ub2RlX21vZHVsZXMvQHZmL2Rlc2lnbi1hc3NldHMvY3NzL3R5cG9ncmFwaHkvX3ZhcmlhYmxlcy5zY3NzIiwid2VicGFjazovLy4vbm9kZV9tb2R1bGVzL0B2Zi9kZXNpZ24tYXNzZXRzL2Nzcy9zcGFjaW5nL19oZWxwZXJzLnNjc3MiLCJ3ZWJwYWNrOi8vLi9ub2RlX21vZHVsZXMvQHZmL2Rlc2lnbi1hc3NldHMvY3NzL3NwYWNpbmcvX3ZhcmlhYmxlcy5zY3NzIiwid2VicGFjazovLy4vYXNzZXRzL2xlZ2FjeS9jc3MvYmFzZS9tb2RhbHMuc2NzcyIsIndlYnBhY2s6Ly8uL2Fzc2V0cy9sZWdhY3kvY3NzL2Jhc2UvX2xheW91dHMuc2NzcyIsIndlYnBhY2s6Ly8uL2Fzc2V0cy9sZWdhY3kvY3NzL2Jhc2UvX2RlZmF1bHRzLnNjc3MiLCJ3ZWJwYWNrOi8vLi9ub2RlX21vZHVsZXMvQHZmL2Rlc2lnbi1hc3NldHMvY3NzL2NvbXBvbmVudHMvYnV0dG9ucy9fbGF5b3V0LnNjc3MiLCJ3ZWJwYWNrOi8vLi9ub2RlX21vZHVsZXMvQHZmL2Rlc2lnbi1hc3NldHMvY3NzL2NvbXBvbmVudHMvYnV0dG9ucy9fc3R5bGVzLnNjc3MiLCJ3ZWJwYWNrOi8vLi9ub2RlX21vZHVsZXMvQHZmL2Rlc2lnbi1hc3NldHMvY3NzL3ZhcmlhYmxlcy9tb2R1bGUuc2NzcyIsIndlYnBhY2s6Ly8uL25vZGVfbW9kdWxlcy9AdmYvZGVzaWduLWFzc2V0cy9jc3MvY29tcG9uZW50cy9idXR0b25zL19zdGF0ZXMuc2NzcyIsIndlYnBhY2s6Ly8uL25vZGVfbW9kdWxlcy9AdmYvZGVzaWduLWFzc2V0cy9jc3MvYW5pbWF0aW9ucy9mYWRlLnNjc3MiLCJ3ZWJwYWNrOi8vLi9ub2RlX21vZHVsZXMvQHZmL2Rlc2lnbi1hc3NldHMvY3NzL2FuaW1hdGlvbnMvc3Bpbi5zY3NzIiwid2VicGFjazovLy4vbm9kZV9tb2R1bGVzL0B2Zi9kZXNpZ24tYXNzZXRzL2Nzcy91dGlsL2V4cGFuZGluZy1ob3Zlci1saWdodC5zY3NzIiwid2VicGFjazovLy4vbm9kZV9tb2R1bGVzL0B2Zi9kZXNpZ24tYXNzZXRzL2Nzcy91dGlsL291dGxpbmUuc2NzcyIsIndlYnBhY2s6Ly8uL25vZGVfbW9kdWxlcy9AdmYvZGVzaWduLWFzc2V0cy9jc3MvdXRpbC9sYWJlbC1kb3Quc2NzcyIsIndlYnBhY2s6Ly8uL25vZGVfbW9kdWxlcy9AdmYvZGVzaWduLWFzc2V0cy9jc3MvdXRpbC90ZXh0LW92ZXJmbG93LnNjc3MiLCJ3ZWJwYWNrOi8vLi9ub2RlX21vZHVsZXMvQHZmL2Rlc2lnbi1hc3NldHMvY3NzL2NvbXBvbmVudHMvc2V0dGluZ3MvY3NzL21vZHVsZS5zY3NzIiwid2VicGFjazovLy4vbm9kZV9tb2R1bGVzL0B2Zi9kZXNpZ24tYXNzZXRzL2Nzcy9jb21wb25lbnRzL3NldHRpbmdzL2Nzcy92YXJpYWJsZXMuc2NzcyIsIndlYnBhY2s6Ly8uL25vZGVfbW9kdWxlcy9AdmYvZGVzaWduLWFzc2V0cy9jc3MvY29tcG9uZW50cy9zZXR0aW5ncy9jc3Mvc3R5bGVzLnNjc3MiLCJ3ZWJwYWNrOi8vLi9hc3NldHMvbGVnYWN5L2Nzcy9oZWxwZXJzLnNjc3MiLCJ3ZWJwYWNrOi8vLi9hc3NldHMvbGVnYWN5L2Nzcy90b29sdGlwX3ZpZXcuc2NzcyIsIndlYnBhY2s6Ly8uL2Fzc2V0cy9sZWdhY3kvY3NzL21peGlucy5zY3NzIiwid2VicGFjazovLy4vYXNzZXRzL2xlZ2FjeS9jc3MvbWVkaWFlbGVtZW50cGxheWVyLnNjc3MiLCJ3ZWJwYWNrOi8vLi9hc3NldHMvbGVnYWN5L2Nzcy90b29sdGlwLnNjc3MiLCJ3ZWJwYWNrOi8vLi9hc3NldHMvbGVnYWN5L2Nzcy9tZXNzYWdlcy5zY3NzIiwid2VicGFjazovLy4vYXNzZXRzL2xlZ2FjeS9jc3Mvd2lkZ2V0cy5zY3NzIiwid2VicGFjazovLy4vYXNzZXRzL2xlZ2FjeS9jc3MvY29tcG9uZW50cy9kcm9wZG93bi9sYXlvdXQuc2NzcyIsIndlYnBhY2s6Ly8uL2Fzc2V0cy9sZWdhY3kvY3NzL2NvbXBvbmVudHMvZHJvcGRvd24vc3RhdGVzLnNjc3MiLCJ3ZWJwYWNrOi8vLi9hc3NldHMvbGVnYWN5L2Nzcy9jb21wb25lbnRzL2Ryb3Bkb3duL3N0eWxlcy5zY3NzIiwid2VicGFjazovLy4vYXNzZXRzL2xlZ2FjeS9jc3MvY29tcG9uZW50cy9wcm9ncmVzcy9sYXlvdXQuc2NzcyIsIndlYnBhY2s6Ly8uL2Fzc2V0cy9sZWdhY3kvY3NzL2NvbXBvbmVudHMvcHJvZ3Jlc3Mvc3RhdGVzLnNjc3MiLCJ3ZWJwYWNrOi8vLi9hc3NldHMvbGVnYWN5L2Nzcy9jb21wb25lbnRzL3Byb2dyZXNzL3N0eWxlcy5zY3NzIiwid2VicGFjazovLy4vYXNzZXRzL2xlZ2FjeS9jc3MvY29tcG9uZW50cy9yZWFsdGltZS9sYXlvdXQuc2NzcyIsIndlYnBhY2s6Ly8uL2Fzc2V0cy9sZWdhY3kvY3NzL2NvbXBvbmVudHMvcmVhbHRpbWUvc3R5bGVzLnNjc3MiLCJ3ZWJwYWNrOi8vLi9hc3NldHMvbGVnYWN5L2Nzcy9hbmNob3JzLnNjc3MiLCJ3ZWJwYWNrOi8vLi9hc3NldHMvbGVnYWN5L2Nzcy9jb21wb25lbnRzL2F2YXRhci5zY3NzIiwid2VicGFjazovLy4vYXNzZXRzL2xlZ2FjeS9jc3MvY29tcG9uZW50cy90aHVtYm5haWwuc2NzcyIsIndlYnBhY2s6Ly8uL2Fzc2V0cy9sZWdhY3kvY3NzL2NvbXBvbmVudHMvYnV0dG9ucy5zY3NzIiwid2VicGFjazovLy4vYXNzZXRzL2xlZ2FjeS9jc3MvY29tcG9uZW50cy9iYWRnZXMuc2NzcyIsIndlYnBhY2s6Ly8uL25vZGVfbW9kdWxlcy9AdmYvZGVzaWduLWFzc2V0cy9jb21wb25lbnRzL3NyYy9zdmcvaWNvbi9pY29uLnNjc3MiLCJ3ZWJwYWNrOi8vLi9hc3NldHMvbGVnYWN5L2Nzcy9jb21wb25lbnRzL2ljb25zL2xheW91dC5zY3NzIiwid2VicGFjazovLy4vYXNzZXRzL2xlZ2FjeS9jc3MvY29tcG9uZW50cy9pY29ucy9zdHlsZXMuc2NzcyIsIndlYnBhY2s6Ly8uL2Fzc2V0cy9sZWdhY3kvY3NzL2NvbXBvbmVudHMvbG9hZGVyL3N0YXRlcy5zY3NzIiwid2VicGFjazovLy4vYXNzZXRzL2xlZ2FjeS9jc3MvY29tcG9uZW50cy9sb2FkZXIvbGF5b3V0LnNjc3MiLCJ3ZWJwYWNrOi8vLi9hc3NldHMvbGVnYWN5L2Nzcy9jb21wb25lbnRzL2xvYWRlci9zdHlsZXMuc2NzcyIsIndlYnBhY2s6Ly8uL2Fzc2V0cy9iZXRhL2Nzcy9oZWxwZXJzL192YXJpYWJsZXMuc2NzcyIsIndlYnBhY2s6Ly8uL2Fzc2V0cy9sZWdhY3kvY3NzL2NvbXBvbmVudHMvb3ZlcmxheS9sYXlvdXQuc2NzcyIsIndlYnBhY2s6Ly8uL2Fzc2V0cy9sZWdhY3kvY3NzL2NvbXBvbmVudHMvb3ZlcmxheS9zdHlsZXMuc2NzcyIsIndlYnBhY2s6Ly8uL2Fzc2V0cy9sZWdhY3kvY3NzL2NvbXBvbmVudHMvcmF0aW5ncy9sYXlvdXQuc2NzcyIsIndlYnBhY2s6Ly8uL2Fzc2V0cy9sZWdhY3kvY3NzL2NvbXBvbmVudHMvcmF0aW5ncy9zdHlsZXMuc2NzcyIsIndlYnBhY2s6Ly8uL2Fzc2V0cy9sZWdhY3kvY3NzL2NvbXBvbmVudHMvZ2FsbGVyeV9pbmxpbmUvbGF5b3V0LnNjc3MiLCJ3ZWJwYWNrOi8vLi9hc3NldHMvbGVnYWN5L2Nzcy9jb21wb25lbnRzL2dhbGxlcnlfaW5saW5lL3N0eWxlcy5zY3NzIiwid2VicGFjazovLy4vYXNzZXRzL2xlZ2FjeS9jc3MvY29tcG9uZW50cy9nYWxsZXJ5X2lubGluZS9zdGF0ZXMuc2NzcyIsIndlYnBhY2s6Ly8uL2Fzc2V0cy9sZWdhY3kvY3NzL2NvbXBvbmVudHMvZ2FsbGVyeV9mdWxsc2NyZWVuL2xheW91dC5zY3NzIiwid2VicGFjazovLy4vYXNzZXRzL2xlZ2FjeS9jc3MvY29tcG9uZW50cy9nYWxsZXJ5X2Z1bGxzY3JlZW4vc3R5bGVzLnNjc3MiLCJ3ZWJwYWNrOi8vLi9hc3NldHMvbGVnYWN5L2Nzcy9zdHlsZS9fYW5jaG9ycy5zY3NzIiwid2VicGFjazovLy4vYXNzZXRzL2xlZ2FjeS9jc3Mvc3R5bGUvX21vZGFscy5zY3NzIiwid2VicGFjazovLy4vYXNzZXRzL2xlZ2FjeS9jc3Mvc3R5bGUvX21lZGlhZWxlbWVudHBsYXllci5zY3NzIiwid2VicGFjazovLy4vYXNzZXRzL2xlZ2FjeS9jc3Mvc3R5bGUvX21lc3NhZ2VzLnNjc3MiLCJ3ZWJwYWNrOi8vLi9hc3NldHMvbGVnYWN5L2Nzcy9zdHlsZS9fdG9vbHRpcF92aWV3LnNjc3MiLCJ3ZWJwYWNrOi8vLi9hc3NldHMvbGVnYWN5L2Nzcy9zdHlsZS9fdG9vbHRpcC5zY3NzIiwid2VicGFjazovLy4vYXNzZXRzL2xlZ2FjeS9jc3Mvc3R5bGUvX3N0eWxlLnNjc3MiLCJ3ZWJwYWNrOi8vLi9hc3NldHMvYmV0YS9jc3MvbWl4aW5zL2FuaW1hdGlvbnMvZmFkZS5zY3NzIiwid2VicGFjazovLy4vYXNzZXRzL2JldGEvY3NzL21peGlucy9hbmltYXRpb25zL3JvdGF0aW5nLnNjc3MiLCJ3ZWJwYWNrOi8vLi9hc3NldHMvYmV0YS9jc3MvbWl4aW5zL2FuaW1hdGlvbnMvc3F1YXJlLWxvYWRpbmcuc2NzcyIsIndlYnBhY2s6Ly8uL2Fzc2V0cy9iZXRhL2Nzcy9taXhpbnMvX2NvbG9yLWNsYXNzZXMuc2NzcyIsIndlYnBhY2s6Ly8uL2Fzc2V0cy9iZXRhL2Nzcy9oZWxwZXJzL191dGlsaXR5LnNjc3MiLCJ3ZWJwYWNrOi8vLi9hc3NldHMvYmV0YS9jc3MvbGF5b3V0L19jb250YWluZXJzLnNjc3MiLCJ3ZWJwYWNrOi8vLi9hc3NldHMvYmV0YS9jc3MvbGF5b3V0L3RhYmJlZF9uYXYuc2NzcyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiQUFBQSxtQkM0SkEsbUJBZEksQ0FBQSx3Q0FDQSxDQUFBLHVDQUNBLENBQUEsK0JBQ0EsQ0FBQSxxQkFDQSxDQUFBLHNCQUNBLENBQUEsMEJBQ0EsQ0FBQSxvQkFDQSxDQUFBLDRCQUNBLENBQUEsb0JBQ0EsQ0FBQSw2QkFDQSxDQUFBLFdDbkpKLGtCQUNJLENBQUEsc0JBQ0EsQ0FBQSxpQkFDQSxDQUFBLDJDQUNBLENBQUEsdVNBQ0EsQ0FBQSxpQkFNQSxDQUFBLDBrQkFJQSxrQkFjSSxDQUFBLHNCQUNBLENBQUEsaUJBQ0EsQ0FBQSxtQkFDQSxDQUFBLG1CQUNBLENBQUEsVUFDQSxDQUFBLGtDQUNBLENBQUEsaUNBQ0EsQ0FBQSx3Q0N4QlIscUJBR0ksQ0FBQSxRQUNBLENBQUEsU0FDQSxDQUFBLG1EQUdKLGtCQUdJLENBQUEsNktBTUosYUFVSSxDQUFBLFFBQ0EsQ0FBQSxTQUNBLENBQUEsaURBR0osb0JBR0ksQ0FBQSxnQ0FHSixZQUNJLENBQUEsbUJBR0osWUFDSSxDQUFBLG9IQUdKLFFBU0ksQ0FBQSxTQUNBLENBQUEsMEJBR0osb0JBRUksQ0FBQSxZQVFKLGNBQ0ksQ0FBQSxxQ0FJSixTQUVJLENBQUEsc0JBTUosd0JBQUEsQ0FBQSw2QkFFQSxlQUNT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QUNBLHNCQUFBLENBQ0EsNkJBQUEsQ0FHSixpREFDSSxTQUFBLENBQ0EsVUFBQSxDQUNBLFdBQUEsQ0FDQSxXQUFBLENBQ0EscUJBQUEsQ0FDQSxTQUFBLENyRTJIQSxxQkFBQSxDQUNBLGlEQUFBLENxRXZISixvQkFDSSxvQkFBQSxDQUVBLGtDQUNJLGlCQUFBLENBQ0EsVUFBQSxDQUdKLDBDQUNJLGlCQUFBLENBQ0EsUUFBQSxDQUNBLFNBQUEsQ0FDQSxVQUFBLENBQ0EsNEJBQUEsQ0FDQSxVQUFBLENBSVIsMENBQ0ksdUNBQ0ksaUJBQUEsQ0FDQSxRQUFBLENBQ0EsaUJBQUEsQ0FBQSxDQzdDSiw2QkFDSSxZQUFBLENBR0osOEJBQ0ksY0FBQSxDQUdBLHVCQUFBLENBQ0EsV0FBQSxDQUdKLHlCQUNJLFlBQUEsQ0FDQSxrQkFBQSxDQUNBLGdCQUFBLENBR0oseUJBQ0ksa0JBQUEsQ0FDQSw2QkFBQSxDQUdKLHdCQUNJLFlBQUEsQ0FDQSxxQkFBQSxDQUNBLGdCQUFBLENBR0osd0JBQ0ksWUFBQSxDQUNBLHFCQUFBLENBQ0EsZ0JBQUEsQ0FFQSw0QkFDSSxvQkFBQSxDQUNBLHNCQUFBLENBR0oscUNBQ0ksaUJBQUEsQ0FHSixtQ0FDSSxpQkFBQSxDQUlSLHdCQUNJLFdBQUEsQ0FHSixtQ0FDSSxxQkFBQSxDQUNBLFlBQUEsQ0FFQSx1Q0FDSSxlQUFBLENBSVIsNkRBQ0ksV0FBQSxDQUNBLGlCQUFBLENBQ0Esa0JBQUEsQ0FDQSxnQkFBQSxDQUNBLGlCQUFBLENBRUEsMENBQ0ksNkNBUlIsNkRBU1ksY0FBQSxDQUFBLENBQUEsQ0FLWiwyQ0FDSSxnQkFBQSxDQ3pFUix5QkFDSSxXQUxVLENBT1YsMENBSEoseUJBSVEsV0FOUSxDQUFBLENBV2hCLDJDQUNJLGdCQWJhLENBZWIsMENBSEosMkNBSVEsYUFBQSxDQUFBLENBSVIsNkNBQ0ksV0FwQlkiLCJzb3VyY2VzQ29udGVudCI6WyJAaW1wb3J0IFwiYXNzZXRzL2xlZ2FjeS9jc3MvdmYtY29uc3RhbnRzXCI7XG5AaW1wb3J0IFwiYXNzZXRzL2xlZ2FjeS9jc3MvZm9udHNcIjtcbkBpbXBvcnQgXCJkZXNpZ24tYXNzZXRzL2Nzcy92YXJpYWJsZXMvbW9kdWxlXCI7XG5AaW1wb3J0IFwiZGVzaWduLWFzc2V0cy9jc3MvYmFzZS9tb2R1bGVcIjtcbkBpbXBvcnQgXCJkZXNpZ24tYXNzZXRzL2Nzcy90eXBvZ3JhcGh5L21vZHVsZVwiO1xuQGltcG9ydCBcImRlc2lnbi1hc3NldHMvY3NzL3NwYWNpbmcvbW9kdWxlXCI7XG5AaW1wb3J0IFwiYXNzZXRzL2xlZ2FjeS9jc3MvYmFzZS9kZWZhdWx0c1wiO1xuQGltcG9ydCBcImRlc2lnbi1hc3NldHMvY3NzL2NvbXBvbmVudHMvYnV0dG9ucy9tb2R1bGVcIjtcbkBpbXBvcnQgXCJkZXNpZ24tYXNzZXRzL2Nzcy9hbmltYXRpb25zL2ZhZGVcIjtcbkBpbXBvcnQgXCJkZXNpZ24tYXNzZXRzL2Nzcy9hbmltYXRpb25zL3NwaW5cIjtcbkBpbXBvcnQgXCJkZXNpZ24tYXNzZXRzL2Nzcy91dGlsL21vZHVsZVwiO1xuQGltcG9ydCBcImRlc2lnbi1hc3NldHMvY3NzL2NvbXBvbmVudHMvc2V0dGluZ3MvbW9kdWxlXCI7XG5AaW1wb3J0IFwiYXNzZXRzL2xlZ2FjeS9jc3MvaGVscGVyc1wiO1xuQGltcG9ydCBcImFzc2V0cy9sZWdhY3kvY3NzL21peGluc1wiO1xuQGltcG9ydCBcImFzc2V0cy9sZWdhY3kvY3NzL3Rvb2x0aXBfdmlld1wiO1xuQGltcG9ydCBcImFzc2V0cy9sZWdhY3kvY3NzL21lZGlhZWxlbWVudHBsYXllclwiO1xuQGltcG9ydCBcImFzc2V0cy9sZWdhY3kvY3NzL3Rvb2x0aXBcIjtcbkBpbXBvcnQgXCJhc3NldHMvbGVnYWN5L2Nzcy9tZXNzYWdlc1wiO1xuQGltcG9ydCBcImFzc2V0cy9sZWdhY3kvY3NzL3dpZGdldHNcIjtcbkBpbXBvcnQgXCJhc3NldHMvbGVnYWN5L2Nzcy9jb21wb25lbnRzL2Ryb3Bkb3duL2Ryb3Bkb3duXCI7XG5AaW1wb3J0IFwiYXNzZXRzL2xlZ2FjeS9jc3MvY29tcG9uZW50cy9wcm9ncmVzcy9wcm9ncmVzc1wiO1xuQGltcG9ydCBcImFzc2V0cy9sZWdhY3kvY3NzL2NvbXBvbmVudHMvcmVhbHRpbWUvcmVhbHRpbWVcIjtcbkBpbXBvcnQgXCJhc3NldHMvbGVnYWN5L2Nzcy9hbmNob3JzXCI7XG5AaW1wb3J0IFwiYXNzZXRzL2xlZ2FjeS9jc3MvY29tcG9uZW50cy9hdmF0YXJcIjtcbkBpbXBvcnQgXCJhc3NldHMvbGVnYWN5L2Nzcy9jb21wb25lbnRzL3RodW1ibmFpbFwiO1xuQGltcG9ydCBcImFzc2V0cy9sZWdhY3kvY3NzL2NvbXBvbmVudHMvYnV0dG9uc1wiO1xuQGltcG9ydCBcImFzc2V0cy9sZWdhY3kvY3NzL2NvbXBvbmVudHMvYmFkZ2VzXCI7XG5AaW1wb3J0IFwiYXNzZXRzL2xlZ2FjeS9jc3MvY29tcG9uZW50cy9pY29ucy9pY29uc1wiO1xuQGltcG9ydCBcImFzc2V0cy9sZWdhY3kvY3NzL2NvbXBvbmVudHMvbG9hZGVyL2xvYWRlclwiO1xuQGltcG9ydCBcImFzc2V0cy9sZWdhY3kvY3NzL2NvbXBvbmVudHMvb3ZlcmxheS9vdmVybGF5XCI7XG5AaW1wb3J0IFwiYXNzZXRzL2xlZ2FjeS9jc3MvY29tcG9uZW50cy9yYXRpbmdzL3JhdGluZ3NcIjtcbkBpbXBvcnQgXCJhc3NldHMvbGVnYWN5L2Nzcy9jb21wb25lbnRzL2dhbGxlcnlfaW5saW5lL2dhbGxlcnlfaW5saW5lXCI7XG5AaW1wb3J0IFwiYXNzZXRzL2xlZ2FjeS9jc3MvY29tcG9uZW50cy9nYWxsZXJ5X2Z1bGxzY3JlZW4vZ2FsbGVyeV9mdWxsc2NyZWVuXCI7XG5cbi8qIE9sZCBDU1MgKi9cbi52aWFmb3VyYSB7XG4gICAgYSxcbiAgICBpbnB1dFt0eXBlPSdmaWxlJ10ge1xuICAgICAgICBjdXJzb3I6IHBvaW50ZXI7XG4gICAgfVxuXG4gICAgZGl2LFxuICAgIHAsXG4gICAgYSB7XG4gICAgICAgIHdvcmQtd3JhcDogYnJlYWstd29yZDtcblxuICAgICAgICAvKiBJRSAqL1xuICAgICAgICB3b3JkLWJyZWFrOiBicmVhay13b3JkO1xuICAgIH1cblxuICAgIGhyIHtcbiAgICAgICAgY2xlYXI6IGJvdGg7XG4gICAgICAgIG1hcmdpbjogMTVweCAwO1xuICAgICAgICBib3JkZXItY29sb3I6ICNkYWRhZGE7XG4gICAgICAgIGJvcmRlci1zdHlsZTogc29saWQ7XG4gICAgICAgIGJvcmRlci13aWR0aDogMXB4O1xuICAgIH1cblxuICAgIGJyIHtcbiAgICAgICAgZGlzcGxheTogYmxvY2s7XG4gICAgICAgIG1hcmdpbjogNXB4IDAgMCAwO1xuICAgIH1cblxuICAgIGltZyB7XG4gICAgICAgIGJvcmRlcjogMDtcbiAgICB9XG5cbiAgICB1bCB7XG4gICAgICAgIHdpZHRoOiBhdXRvO1xuICAgICAgICBtYXJnaW46IDA7XG4gICAgICAgIHBhZGRpbmc6IDA7XG5cbiAgICAgICAgbGkge1xuICAgICAgICAgICAgbWFyZ2luOiAwO1xuICAgICAgICAgICAgcGFkZGluZzogMDtcbiAgICAgICAgICAgIGxpc3Qtc3R5bGU6IG5vbmU7XG4gICAgICAgICAgICBiYWNrZ3JvdW5kLWltYWdlOiBub25lO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLnZmLWxlZnQge1xuICAgICAgICBmbG9hdDogbGVmdDtcbiAgICB9XG5cbiAgICAudmYtcmlnaHQge1xuICAgICAgICBmbG9hdDogcmlnaHQ7XG4gICAgfVxuXG4gICAgLnZmLWJsb2NrIHtcbiAgICAgICAgZGlzcGxheTogYmxvY2s7XG4gICAgICAgIG1hcmdpbi1ib3R0b206IDEwcHg7XG4gICAgfVxuXG4gICAgdWwudmYtaGxpc3Qge1xuICAgICAgICBAaW5jbHVkZSBmbGV4LWhvcml6b250YWwtbGlzdChmbGV4LXN0YXJ0KTtcblxuICAgICAgICBsaSB7XG4gICAgICAgICAgICA+ICogKyAqIHtcbiAgICAgICAgICAgICAgICBtYXJnaW4tbGVmdDogNXB4O1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG5cbiAgICAgICAgPiBsaSArIGxpIHtcbiAgICAgICAgICAgIG1hcmdpbi1sZWZ0OiAxMHB4O1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLnZmLW5hdiBsaSBhIHtcbiAgICAgICAgd2hpdGUtc3BhY2U6IHByZTtcblxuICAgICAgICAvKiBDU1MgMi4wICovXG4gICAgICAgIHdoaXRlLXNwYWNlOiBwcmUtd3JhcDtcblxuICAgICAgICAvKiBDU1MgMi4xICovXG4gICAgICAgIHdoaXRlLXNwYWNlOiBwcmUtbGluZTtcblxuICAgICAgICAvKiBDU1MgMy4wICovXG4gICAgICAgIHdvcmQtd3JhcDogYnJlYWstd29yZDtcblxuICAgICAgICAvKiBJRSA1KyAqL1xuICAgIH1cblxuICAgIC52Zi1oaWRkZW4ge1xuICAgICAgICB2aXNpYmlsaXR5OiBoaWRkZW4gIWltcG9ydGFudDtcbiAgICB9XG5cbiAgICAudmYtZGlzYWJsZSB7XG4gICAgICAgIGZvbnQtc2l6ZTogODAlICFpbXBvcnRhbnQ7XG4gICAgICAgIG9wYWNpdHk6IDAuNSAhaW1wb3J0YW50O1xuICAgIH1cblxuICAgIC52Zi1uby1pY29uIHtcbiAgICAgICAgLy8gVGhpcyBjbGFzcyB3aWxsIGhpZGUgdGhlIGljb24gZnJvbSB3aGF0ZXZlciBpdCBpcyBhcHBsaWVkIHRvXG4gICAgICAgICYudmYtYWxlcnQsXG4gICAgICAgICYudmYtZXJyb3ItbWVzc2FnZSB7XG4gICAgICAgICAgICBwYWRkaW5nLWxlZnQ6IDEycHg7XG4gICAgICAgIH1cblxuICAgICAgICAmOjpiZWZvcmUge1xuICAgICAgICAgICAgZGlzcGxheTogbm9uZSAhaW1wb3J0YW50O1xuICAgICAgICAgICAgY29udGVudDogXCJcIiAhaW1wb3J0YW50O1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLnZmLWZsYWcge1xuICAgICAgICBiYWNrZ3JvdW5kOiB0cmFuc3BhcmVudDtcbiAgICAgICAgYm9yZGVyOiAwO1xuICAgIH1cblxuICAgIC52Zi1pY29uLWRpc2xpa2Uge1xuICAgICAgICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gICAgICAgIHRvcDogNXB4O1xuICAgIH1cblxuICAgIC52Zi1kaXNhYmxlZC1saWtlcyB7XG4gICAgICAgIGN1cnNvcjogbm90LWFsbG93ZWQ7XG4gICAgfVxuXG4gICAgLnZmLXNoYXJlLWxpc3Qge1xuICAgICAgICBsaSB7XG4gICAgICAgICAgICBkaXNwbGF5OiBibG9jaztcblxuICAgICAgICAgICAgYSB7XG4gICAgICAgICAgICAgICAgZGlzcGxheTogYmxvY2s7XG4gICAgICAgICAgICAgICAgd2hpdGUtc3BhY2U6IHByZTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuICAgIH1cblxuICAgIC52Zi1mYWNlYm9vay1saWtlOjpiZWZvcmUge1xuICAgICAgICBjb250ZW50OiBcIlxcZTYxN1wiO1xuICAgIH1cblxuICAgIC52Zi10d2l0dGVyLXR3ZWV0OjpiZWZvcmUge1xuICAgICAgICBjb250ZW50OiBcIlxcZTYxOFwiO1xuICAgIH1cblxuICAgIC52Zi1lbWFpbC1pY29uOjpiZWZvcmUge1xuICAgICAgICBjb250ZW50OiBcIlxcZTYwY1wiO1xuICAgIH1cblxuICAgIC8qIFNvY2lhbCBTaGFyZXMgKi9cbiAgICAudmYtc29jaWFsLWljb24ge1xuICAgICAgICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gICAgICAgIGRpc3BsYXk6IG5vbmU7XG4gICAgICAgIGZsb2F0OiBsZWZ0O1xuICAgICAgICBib3JkZXI6IG5vbmU7XG5cbiAgICAgICAgQGluY2x1ZGUgc2l6ZSgxNnB4KTtcbiAgICB9XG5cbiAgICAvKiBDb21tdW5pdHkgV2lkZ2V0IEhvcml6b250YWwgVmlldyAqL1xuICAgIC52Zi1jb21tdW5pdHktd2lkZ2V0IHtcbiAgICAgICAgcG9zaXRpb246IHJlbGF0aXZlO1xuICAgICAgICBjb2xvcjogIzY2NjY2NjtcblxuICAgICAgICAudmYtZGlzYWJsZSB7XG4gICAgICAgICAgICBmb250LXNpemU6IDEwMCUgIWltcG9ydGFudDtcbiAgICAgICAgICAgIG9wYWNpdHk6IDAuNSAhaW1wb3J0YW50O1xuICAgICAgICB9XG5cbiAgICAgICAgLnZmLWN5Y2xlIHtcbiAgICAgICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICAgICAgICAgIHRvcDogMDtcbiAgICAgICAgICAgIHJpZ2h0OiAwO1xuICAgICAgICAgICAgei1pbmRleDogOTk5OTtcbiAgICAgICAgfVxuXG4gICAgICAgIC52Zi1wcmV2LWJ0biB7XG4gICAgICAgICAgICBmbG9hdDogbGVmdDtcbiAgICAgICAgfVxuXG4gICAgICAgIC52Zi1uZXh0LWJ0biB7XG4gICAgICAgICAgICBmbG9hdDogcmlnaHQ7XG4gICAgICAgIH1cblxuICAgICAgICAudmYtd2lkZ2V0LXRpdGxlIHtcbiAgICAgICAgICAgIG1hcmdpbjogMCAwIDEwcHggMDtcbiAgICAgICAgICAgIHBhZGRpbmc6IDAgMCA1cHggMDtcbiAgICAgICAgICAgIGJvcmRlci1ib3R0b206ICRib3JkZXItY29sb3I7XG4gICAgICAgIH1cblxuICAgICAgICAudmYtYXJ0aWNsZSB7XG4gICAgICAgICAgICBtYXJnaW4tYm90dG9tOiAxMnB4O1xuICAgICAgICAgICAgcGFkZGluZzogMCAwIDVweCAwO1xuICAgICAgICAgICAgZm9udC1zaXplOiAkZGVmYXVsdC1mb250LXNpemU7XG4gICAgICAgIH1cblxuICAgICAgICAudmYtYXJ0aWNsZSA+IC52Zi1hcnRpY2xlLWJvZHkge1xuICAgICAgICAgICAgb3ZlcmZsb3c6IGhpZGRlbjtcbiAgICAgICAgfVxuXG4gICAgICAgIC52Zi1hcnRpY2xlIC52Zi1hcnRpY2xlLWNvbW1lbnRzIHtcbiAgICAgICAgICAgIGNvbG9yOiAjOTk5OTk5O1xuICAgICAgICB9XG5cbiAgICAgICAgLnZmLWFydGljbGUgLnZmLWFydGljbGUtaW1hZ2Uge1xuICAgICAgICAgICAgZmxvYXQ6IGxlZnQ7XG4gICAgICAgICAgICB3aWR0aDogMzUlO1xuICAgICAgICAgICAgbWFyZ2luLXJpZ2h0OiAxMHB4O1xuICAgICAgICB9XG5cbiAgICAgICAgLnZmLWFydGljbGUgLnZmLWFydGljbGUtaGVhZGluZyB7XG4gICAgICAgICAgICBtYXJnaW46IC0wLjJlbSAwIDVweCAwO1xuICAgICAgICB9XG5cbiAgICAgICAgLnZmLWFydGljbGUgLnZmLWRlc2NyaXB0aW9uIHtcbiAgICAgICAgICAgIG1hcmdpbjogMCAwIDVweCAwO1xuICAgICAgICAgICAgY29sb3I6ICM5OTk5OTk7XG4gICAgICAgIH1cblxuICAgICAgICAudmYtYXJ0aWNsZS1tZXRhIHtcbiAgICAgICAgICAgIGxpIHtcbiAgICAgICAgICAgICAgICBjb2xvcjogaW5oZXJpdDtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuXG4gICAgICAgIC52Zi11c2VyLWNvbnRlbnQge1xuICAgICAgICAgICAgcGFkZGluZzogMCAxMHB4O1xuICAgICAgICB9XG5cbiAgICAgICAgLnZmLXJlY2VudC1jb21tZW50IHtcbiAgICAgICAgICAgIHBhZGRpbmc6IDAgMCAxM3B4IDA7XG4gICAgICAgICAgICBmb250LXNpemU6ICRkZWZhdWx0LWZvbnQtc2l6ZTtcblxuICAgICAgICAgICAgZGl2IHtcbiAgICAgICAgICAgICAgICBwYWRkaW5nOiAwIDAgMnB4IDA7XG4gICAgICAgICAgICB9XG4gICAgICAgIH1cblxuICAgICAgICAudmYtcGFnZS10aXRsZSB7XG4gICAgICAgICAgICBtYXJnaW46IDA7XG4gICAgICAgICAgICBwYWRkaW5nOiAwO1xuICAgICAgICAgICAgY29sb3I6ICM2NjY2NjY7XG4gICAgICAgIH1cblxuICAgICAgICAudmYtdXNlcm5hbWUge1xuICAgICAgICAgICAgY3Vyc29yOiBwb2ludGVyO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLnZmLXJlY2VudC1jb21tZW50IHtcbiAgICAgICAgLnZmLXVzZXJuYW1lLFxuICAgICAgICAudmYtcGFnZS10aXRsZSB7XG4gICAgICAgICAgICBmb250LXNpemU6IDEycHg7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKiBDb21tdW5pdHkgVGFicyAqL1xuICAgIHVsLnZmLW5hdiB7XG4gICAgICAgIGRpc3BsYXk6IGJsb2NrO1xuICAgICAgICBsaXN0LXN0eWxlOiBub25lO1xuICAgIH1cblxuICAgIHVsLnZmLW5hdiBsaSB7XG4gICAgICAgIGZsb2F0OiBsZWZ0O1xuICAgICAgICBwYWRkaW5nOiAwLjQyNWVtIDAuNjI1ZW07XG4gICAgfVxuXG4gICAgLnZmLWNvbW11bml0eS10YWIgLnZmLWRhdGEtY29udGFpbmVyIHtcbiAgICAgICAgcGFkZGluZzogMCAxMHB4O1xuICAgIH1cblxuICAgIC52Zi1ob3Jpem9udGFsIC52Zi1kYXRhLWNvbnRhaW5lciB7XG4gICAgICAgIHBhZGRpbmc6IDA7XG4gICAgfVxuXG4gICAgLnZmLWNvbW11bml0eS10YWIgLnZmLXdpZGdldCAudmYtd2lkZ2V0LXRpdGxlLFxuICAgIC52Zi1jb21tdW5pdHktdGFiIC52Zi13aWRnZXQsXG4gICAgLnZmLWNvbW11bml0eS1wb3B1bGFyIC52Zi13aWRnZXQge1xuICAgICAgICBkaXNwbGF5OiBub25lO1xuICAgIH1cblxuICAgIC52Zi1jb21tdW5pdHktdGFiIC52Zi13aWRnZXQudmYtY3VycmVudCxcbiAgICAudmYtY29tbXVuaXR5LXBvcHVsYXIgLnZmLXdpZGdldC52Zi1jdXJyZW50IHtcbiAgICAgICAgZGlzcGxheTogYmxvY2s7XG4gICAgfVxuXG4gICAgLnZmLWNvbW11bml0eS10YWIgLnZmLXdpZGdldCB7XG4gICAgICAgIG1hcmdpbjogMDtcbiAgICAgICAgcGFkZGluZzogMTVweCA1cHggMTBweDtcbiAgICAgICAgYm9yZGVyOiAxcHggc29saWQgI2NjY2NjYztcbiAgICB9XG5cbiAgICAudmYtY29tbXVuaXR5LXRhYiAudmYtbmF2IGxpIHtcbiAgICAgICAgbWFyZ2luLXJpZ2h0OiAtMXB4O1xuICAgICAgICBtYXJnaW4tYm90dG9tOiAtMXB4O1xuICAgICAgICBiYWNrZ3JvdW5kOiAjZWJlYmViO1xuICAgICAgICBib3JkZXI6IDFweCBzb2xpZCAjY2NjY2NjO1xuICAgIH1cblxuICAgIC52Zi1jb21tdW5pdHktdGFiIC52Zi1uYXYgbGkudmYtY3VycmVudCB7XG4gICAgICAgIEBpbmNsdWRlIGJvcmRlci1ib3R0b20oKTtcbiAgICAgICAgQGluY2x1ZGUgdmFyKGJvcmRlci1ib3R0b20tY29sb3IsICdkZWZhdWx0LWNvbG9yJyk7XG4gICAgICAgIEBpbmNsdWRlIGJhY2tncm91bmQoJGRlZmF1bHQtcGFsZXR0ZSk7XG4gICAgfVxuXG4gICAgLnZmLWNvbW11bml0eS10YWIgLnZmLWNvbW11bml0eS13aWRnZXQudmYtaG9yaXpvbnRhbCAudmYtbmF2IHtcbiAgICAgICAgbWFyZ2luOiAwO1xuICAgIH1cblxuICAgIC52Zi1jb21tdW5pdHktY29tbWVudCB7XG4gICAgICAgIGZsb2F0OiBsZWZ0O1xuXG4gICAgICAgIC52Zi1jb21tZW50Lmh0bWwge1xuICAgICAgICAgICAgZGlzcGxheTogYmxvY2s7XG4gICAgICAgICAgICBtYXJnaW46IDEwcHggMDtcbiAgICAgICAgfVxuXG4gICAgICAgIC52Zi1jb21tZW50LW1ldGEge1xuICAgICAgICAgICAgcG9zaXRpb246IHJlbGF0aXZlO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLnZmLWNvbW11bml0eS13aWRnZXQge1xuICAgICAgICB3aWR0aDogMTAwJTtcblxuICAgICAgICAudmYtaW1hZ2UtY29udGFpbmVyIHtcbiAgICAgICAgICAgIGRpc3BsYXk6IGJsb2NrO1xuICAgICAgICAgICAgbWF4LXdpZHRoOiAxMDAlO1xuICAgICAgICAgICAgaGVpZ2h0OiBhdXRvO1xuICAgICAgICAgICAgbWFyZ2luOiAxNXB4IDA7XG4gICAgICAgICAgICBvdmVyZmxvdzogaGlkZGVuO1xuICAgICAgICB9XG5cbiAgICAgICAgLnZmLWltYWdlLWNvbnRhaW5lciBpbWcge1xuICAgICAgICAgICAgd2lkdGg6IDEwMCU7XG4gICAgICAgIH1cblxuICAgICAgICAudmYtY29tbXVuaXR5LWNvbW1lbnQgLnZmLWNvbW1lbnQge1xuICAgICAgICAgICAgcGFkZGluZy1yaWdodDogMTBweDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC52Zi1jb21tdW5pdHktd2lkZ2V0IC52Zi1tZWRpYS1jb250YWluZXIge1xuICAgICAgICBtYXgtd2lkdGg6IDEwMCU7XG4gICAgICAgIHBhZGRpbmc6IDA7XG4gICAgfVxuXG4gICAgLnZmLWNvbW11bml0eS13aWRnZXQgLnZmLW1lZGlhLWNvbnRhaW5lciBpbWcge1xuICAgICAgICB3aWR0aDogMTAwJTtcbiAgICAgICAgaGVpZ2h0OiBhdXRvO1xuICAgIH1cblxuICAgIC52Zi13aWRnZXQgLnZmLWhvcml6b250YWwgLnZmLXdpZGdldC10aXRsZSB7XG4gICAgICAgIG1hcmdpbjogMDtcbiAgICAgICAgcGFkZGluZzogMDtcbiAgICB9XG5cbiAgICAudmYtd2lkZ2V0LnZmLXN3aXRjaCB7XG4gICAgICAgIC52Zi13aWRnZXQtdGl0bGUsXG4gICAgICAgIC52Zi1uYXYge1xuICAgICAgICAgICAgZmxvYXQ6IGxlZnQ7XG4gICAgICAgIH1cblxuICAgICAgICAudmYtd2lkZ2V0IHtcbiAgICAgICAgICAgIG1hcmdpbjogMDtcbiAgICAgICAgICAgIHBhZGRpbmc6IDA7XG4gICAgICAgICAgICBib3JkZXI6IG5vbmU7XG4gICAgICAgIH1cblxuICAgICAgICAudmYtd2lkZ2V0LXRpdGxlIHtcbiAgICAgICAgICAgIG1hcmdpbjogMDtcbiAgICAgICAgICAgIHBhZGRpbmc6IDA7XG4gICAgICAgICAgICBib3JkZXItYm90dG9tOiBub25lO1xuICAgICAgICB9XG5cbiAgICAgICAgLnZmLW5hdiB7XG4gICAgICAgICAgICBmbG9hdDogbGVmdDtcbiAgICAgICAgICAgIG1hcmdpbi10b3A6IDFweDtcbiAgICAgICAgICAgIG1hcmdpbi1sZWZ0OiAyMHB4O1xuICAgICAgICB9XG5cbiAgICAgICAgLnZmLW5hdiBsaSB7XG4gICAgICAgICAgICBtYXJnaW46IDAgMXB4O1xuICAgICAgICAgICAgZm9udC1zaXplOiAxMXB4O1xuICAgICAgICAgICAgYmFja2dyb3VuZDogbm9uZTtcbiAgICAgICAgICAgIGJvcmRlcjogbm9uZTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC52Zi1jb21tdW5pdHktdGFiLnZmLXN3aXRjaCAudmYtbmF2IGxpLnZmLWN1cnJlbnQge1xuICAgICAgICBAaW5jbHVkZSB2YXIoYmFja2dyb3VuZC1jb2xvciwgJ3ByaW1hcnktY29sb3ItMzAnKTtcblxuICAgICAgICBhIHtcbiAgICAgICAgICAgIEBpbmNsdWRlIHZhcihjb2xvciwgJ3RleHQtb24tcHJpbWFyeS1jb2xvcicpO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyogTmV3IFN0eWxlcyAtLSBCZWxvdyBpcyBkb2Vzbid0IG5lZWQgcmV2YW1wICovXG4gICAgLnZmLXdpZGdldC11c2VycyBoMSB7XG4gICAgICAgIG1hcmdpbi1ib3R0b206IDE1cHg7XG4gICAgICAgIHBhZGRpbmc6IDAgMTBweDtcbiAgICAgICAgY29sb3I6ICM1NTU1NTU7XG4gICAgICAgIHRleHQtdHJhbnNmb3JtOiBjYXBpdGFsaXplO1xuICAgIH1cblxuICAgIC8qIE1pbm9yIFVJIEVsZW1lbnQgU3R5bGVzICovXG5cbiAgICAudmYtYnRuIHtcbiAgICAgICAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICAgIH1cblxuICAgIC52Zi1sb2dvdXQtZGlzYWJsZSB7XG4gICAgICAgIGN1cnNvcjogZGVmYXVsdDtcbiAgICAgICAgb3BhY2l0eTogMC41ICFpbXBvcnRhbnQ7XG4gICAgfVxuXG4gICAgLnZmLW5vLW1lc3NhZ2VzIHtcbiAgICAgICAgbWFyZ2luOiAyMHB4IDA7XG4gICAgICAgIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgICB9XG5cbiAgICAvKiBCYWNrZ3JvdW5kcyBhbmQgQ29sb3VycyAqL1xuICAgIC52Zi1oZWFkZXIsXG4gICAgLnZmLWZvcm0gaW5wdXRbdHlwZT0nc3VibWl0J10ge1xuICAgICAgICBAaW5jbHVkZSBkYXJrLWdyYWRpZW50KCk7XG4gICAgfVxuXG4gICAgLnZmLXNvY2lhbC1idXR0b24sXG4gICAgLnZmLWZvcm0gaW5wdXRbdHlwZT0nYnV0dG9uJ10sXG4gICAgLnZmLXRhYnMge1xuICAgICAgICBAaW5jbHVkZSBsaWdodC1ncmFkaWVudCgpO1xuICAgIH1cblxuICAgIC8qIEltYWdlIFBvcHVwIE1vZGFscyAqL1xuICAgIC52Zi1pbWFnZS1tb2RhbCB7XG4gICAgICAgIG1pbi13aWR0aDogMzAwcHg7XG4gICAgICAgIG1pbi1oZWlnaHQ6IDYwcHg7XG5cbiAgICAgICAgLnZmLWltYWdlLWNvbnRhaW5lciB7XG4gICAgICAgICAgICB3aWR0aDogMTAwJTtcbiAgICAgICAgICAgIGhlaWdodDogYXV0bztcbiAgICAgICAgICAgIG1pbi1oZWlnaHQ6IDMwMHB4O1xuICAgICAgICAgICAgdGV4dC1hbGlnbjogY2VudGVyO1xuXG4gICAgICAgICAgICBpbWcge1xuICAgICAgICAgICAgICAgIG1heC13aWR0aDogMTAwJTtcbiAgICAgICAgICAgICAgICBoZWlnaHQ6IGF1dG87XG4gICAgICAgICAgICAgICAgbWFyZ2luOiAwIGF1dG87XG4gICAgICAgICAgICB9XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKiBUYWJzICovXG4gICAgLnZmLXRhYnMge1xuICAgICAgICBib3JkZXItdG9wOiAxcHggc29saWQgIzg4ODg4ODtcbiAgICAgICAgYm9yZGVyLWJvdHRvbTogMXB4IHNvbGlkICM4ODg4ODg7XG5cbiAgICAgICAgbGkge1xuICAgICAgICAgICAgZGlzcGxheTogYmxvY2s7XG4gICAgICAgICAgICBmbG9hdDogbGVmdDtcbiAgICAgICAgICAgIHBhZGRpbmc6IDVweCAwO1xuICAgICAgICAgICAgdGV4dC1hbGlnbjogY2VudGVyO1xuICAgICAgICB9XG5cbiAgICAgICAgbGkudmYtY3VycmVudCB7XG4gICAgICAgICAgICBjb2xvcjogIzY2NjY2NjtcbiAgICAgICAgfVxuXG4gICAgICAgIGxpLnZmLWN1cnJlbnQgYSB7XG4gICAgICAgICAgICBAaW5jbHVkZSBib3JkZXIoMCk7XG5cbiAgICAgICAgICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgICAgICAgICAgIGJvdHRvbTogLTFweDtcbiAgICAgICAgICAgIG1hcmdpbi10b3A6IC01cHg7XG4gICAgICAgICAgICBwYWRkaW5nOiAxMHB4IDE1cHggMTFweDtcbiAgICAgICAgICAgIGNvbG9yOiAjNDQ0NDQ0O1xuICAgICAgICAgICAgdGV4dC1zaGFkb3c6IDAgMXB4IDAgd2hpdGU7XG4gICAgICAgICAgICBiYWNrZ3JvdW5kOiB3aGl0ZTtcbiAgICAgICAgICAgIGJvcmRlci1jb2xvcjogI2FhYWFhYTtcblxuICAgICAgICAgICAgQGluY2x1ZGUgdmFyKGJvcmRlci1ib3R0b20tY29sb3IsICdkZWZhdWx0LWNvbG9yJyk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvLyBTdHlsZXMgZm9yIHRoZSBtb2JpbGUgbGluayB0aGF0IGxvb2tzIGxpa2UgYSBmb3JtIGlucHV0XG4gICAgLnZmLWlucHV0LWxpa2Uge1xuICAgICAgICBoZWlnaHQ6IDIuNGVtO1xuICAgICAgICBvdmVyZmxvdzogaGlkZGVuO1xuICAgICAgICB2ZXJ0aWNhbC1hbGlnbjogbWlkZGxlO1xuICAgICAgICBib3JkZXItY29sb3I6ICNlN2U3ZTc7XG5cbiAgICAgICAgQGluY2x1ZGUgYm9yZGVyKDAsIHNvbGlkLCAwLjFlbSk7XG5cbiAgICAgICAgPiBzcGFuIHtcbiAgICAgICAgICAgIGRpc3BsYXk6IGJsb2NrO1xuICAgICAgICAgICAgcGFkZGluZzogMC41ZW07XG4gICAgICAgICAgICBjb2xvcjogIzk4OTg5ODtcbiAgICAgICAgICAgIHdoaXRlLXNwYWNlOiBub3dyYXA7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAudmYtbW9kZXJhdGlvbi1zdGF0dXMtaW5wdXQgaW5wdXRbbmFtZT0ndmZfZW1haWwnXSB7XG4gICAgICAgIHdpZHRoOiAxODBweDtcbiAgICAgICAgbWFyZ2luOiAwO1xuICAgICAgICBwYWRkaW5nLXJpZ2h0OiAzMHB4O1xuICAgIH1cblxuICAgIC52Zi11c2VyLWNvbnRlbnQgLnZmLWxpa2UtYnRuIHtcbiAgICAgICAgZGlzcGxheTogbm9uZTtcbiAgICB9XG5cbiAgICAudmYtdXNlci1jb250ZW50IC52Zi1yZXBseS1idG4ge1xuICAgICAgICBkaXNwbGF5OiBub25lO1xuICAgIH1cblxuICAgIC52Zi11c2VyLWNvbnRlbnQgLnZmLWZsYWctYnRuIHtcbiAgICAgICAgdmlzaWJpbGl0eTogaGlkZGVuO1xuICAgIH1cblxuICAgIC52Zi1zaG93LW1vcmUge1xuICAgICAgICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG4gICAgICAgIG1hcmdpbjogMCA1cHg7XG4gICAgICAgIHBhZGRpbmc6IDFweCA1cHg7XG4gICAgICAgIGNvbG9yOiAkY29sb3Itc2hvdy1tb3JlO1xuICAgICAgICBmb250LXNpemU6IDEycHg7XG4gICAgICAgIHRleHQtc2hhZG93OiAwIDFweCAwIHdoaXRlO1xuICAgIH1cblxuICAgIC52Zi1zaG93LWFsbCB7XG4gICAgICAgIG1hcmdpbi10b3A6IDEwcHg7XG4gICAgfVxuXG4gICAgLyogTWVkaWEgRWxlbWVudHMgKEF2YXRhciwgSW1hZ2VzLCBWaWRlbykgKi9cbiAgICAudmYtcmVjb3JkZXItY29udGFpbmVyIHtcbiAgICAgICAgY29sb3I6ICR3aGl0ZTtcblxuICAgICAgICBAaW5jbHVkZSB2YXIoYmFja2dyb3VuZCwgJ3ByaW1hcnktY29sb3ItNzUnKTtcblxuICAgICAgICAudmYtcmVjb3JkZXIge1xuICAgICAgICAgICAgbWFyZ2luOiAwIGF1dG87XG4gICAgICAgICAgICB0ZXh0LWFsaWduOiBjZW50ZXI7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAudmYtbWVkaWEtY29udGFpbmVyIHtcbiAgICAgICAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICAgICAgICB3aWR0aDogNTBweDtcbiAgICAgICAgaGVpZ2h0OiA1MHB4O1xuXG4gICAgICAgIC52Zi1waG90byxcbiAgICAgICAgaW1nIHtcbiAgICAgICAgICAgIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgICAgICAgICAgIHdpZHRoOiBpbmhlcml0O1xuICAgICAgICAgICAgaGVpZ2h0OiBpbmhlcml0O1xuICAgICAgICAgICAgY29sb3I6ICM0NDQ0NDQ7XG4gICAgICAgICAgICBiYWNrZ3JvdW5kLXJlcGVhdDogbm8tcmVwZWF0O1xuICAgICAgICAgICAgYmFja2dyb3VuZC1wb3NpdGlvbjogY2VudGVyO1xuICAgICAgICAgICAgYmFja2dyb3VuZC1zaXplOiBjb3ZlcjtcbiAgICAgICAgICAgIGJvcmRlci1zdHlsZTogc29saWQ7XG4gICAgICAgICAgICBib3JkZXItd2lkdGg6IDFweDtcbiAgICAgICAgICAgIGN1cnNvcjogem9vbS1pbjtcblxuICAgICAgICAgICAgQGluY2x1ZGUgdmFyKGJvcmRlci1jb2xvciwgJ3ByaW1hcnktY29sb3ItNzUnKTtcbiAgICAgICAgfVxuXG4gICAgICAgIC52Zi1wbGFjZWhvbGRlciB7XG4gICAgICAgICAgICB3aWR0aDogMzAwcHg7XG4gICAgICAgICAgICBoZWlnaHQ6IDE3MHB4O1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLnZmLXJlY2VudC1jb21tZW50IC52Zi1tZWRpYS1jb250YWluZXIge1xuICAgICAgICBmbG9hdDogcmlnaHQ7XG4gICAgICAgIGNsZWFyOiBib3RoO1xuICAgICAgICB3aWR0aDogNzVweDtcbiAgICAgICAgaGVpZ2h0OiA1NnB4O1xuICAgICAgICBtYXJnaW46IDAgMCAxMHB4IDEwcHg7XG4gICAgICAgIHBhZGRpbmc6IDVweCAhaW1wb3J0YW50O1xuXG4gICAgICAgIC52Zi1waG90byxcbiAgICAgICAgaW1nIHtcbiAgICAgICAgICAgIHdpZHRoOiBpbmhlcml0O1xuICAgICAgICAgICAgaGVpZ2h0OiBpbmhlcml0O1xuICAgICAgICAgICAgYm9yZGVyLXN0eWxlOiBzb2xpZDtcbiAgICAgICAgICAgIGJvcmRlci13aWR0aDogMXB4O1xuICAgICAgICAgICAgY3Vyc29yOiB6b29tLWluO1xuXG4gICAgICAgICAgICBAaW5jbHVkZSB2YXIoYm9yZGVyLWNvbG9yLCAncHJpbWFyeS1jb2xvci03NScpO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLyogQW5vbnltb3VzIENvbW1lbnRpbmcgKi9cbiAgICAudmYtYW5vbnltb3VzIHtcbiAgICAgICAgZGlzcGxheTogbm9uZTtcbiAgICB9XG5cbiAgICAudmYtY29tbWVudC1hdHRhY2gtd3JhcHBlciB7XG4gICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICAgICAgcmlnaHQ6IDA7XG4gICAgICAgIGJvdHRvbTogMDtcbiAgICB9XG5cbiAgICAvKlxuRm9ybXNcblxuV2UgZG9uJ3QgaGF2ZSBhIGxvdCBvZiBmb3JtIGRvY3VtZW50YXRpb24geWV0XG5cblN0eWxlZ3VpZGUgZm9ybVxuKi9cblxuICAgIC8qXG5GaWxlIEF0dGFjaG1lbnRzXG5cbkEgYmFzaWMgZmlsZSBhdHRhY2htZW50IGlzIHByZWZlcnJlZC4gSG93ZXZlciwgd2hlbiBzdHlsaW5nIGEgZmlsZSBhdHRhY2htZW50IHdpdGhcbmEgY3VzdG9tIGJ1dHRvbiBzdHlsZSBwbGVhc2Uga2VlcCBhY2Nlc3NpYmlsaXR5IGluIG1pbmQuIFRvIHRoYXQgZW5kIHBsZWFzZSB1c2VcbmFuIGFkamFjZW50IC52Zi1hdHRhY2gtbGFiZWwgd2l0aCB0aGUgdmYtYXR0YWNoIGZpbGUgaW5wdXQgdG8gZW5zdXJlIGZvY3VzIHN0YXRlc1xuYXJlIGtlcHQuXG5cbk5vdGUgdGhhdCB0aGUgdmYtYXR0YWNoLWxhYmVsIG11c3QgZm9sbG93IHRoZSBmaWxlIGlucHV0LiBJdCBuZWVkIG5vdCBiZSBhIGxhYmVsIGVsZW1lbnQuXG5cbk1hcmt1cDpcbiAgICA8aW5wdXQgdHlwZT0nZmlsZScgc2l6ZT0nMScgbmFtZT0naW1hZ2UnIGNsYXNzPSd2Zi1hdHRhY2gnPlxuICAgIDxsYWJlbCBjbGFzcz1cInZmLWF0dGFjaC1sYWJlbFwiPlRoaXMgaXMgYSBmaWxlIGF0dGFjaG1lbnQ8L2xhYmVsPlxuXG5TdHlsZWd1aWRlIGZvcm0uZmlsZVxuXG4qL1xuICAgIC52Zi1hdHRhY2gge1xuICAgICAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgICAgIHotaW5kZXg6IC0xO1xuICAgICAgICB3aWR0aDogMC4xcHg7XG4gICAgICAgIGhlaWdodDogMC4xcHg7XG4gICAgICAgIG92ZXJmbG93OiBoaWRkZW47XG4gICAgICAgIG9wYWNpdHk6IDA7XG4gICAgfVxuXG4gICAgLnZmLWF0dGFjaDpmb2N1cyArIC52Zi1hdHRhY2gtbGFiZWwge1xuICAgICAgICBvdXRsaW5lOiAtd2Via2l0LWZvY3VzLXJpbmctY29sb3IgYXV0byA1cHg7XG4gICAgfVxuXG4gICAgLnZmLWlzLWFub255bW91cyB7XG4gICAgICAgIC52Zi1hbm9ueW1vdXMge1xuICAgICAgICAgICAgZGlzcGxheTogaW5saW5lO1xuICAgICAgICB9XG5cbiAgICAgICAgLnZmLXVzZXJuYW1lIHtcbiAgICAgICAgICAgIGN1cnNvcjogZGVmYXVsdDtcbiAgICAgICAgfVxuXG4gICAgICAgIC52Zi1yYW5rIHtcbiAgICAgICAgICAgIGRpc3BsYXk6IG5vbmU7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvKiBFbmQgb2YgQW5vbnltb3VzIENvbW1lbnRpbmcgKi9cblxuICAgIC8qIEVuZCBvZiBSZW1vdmUgQ29tbWVudCBGb3JtICovXG59XG5cbi52aWFmb3VyYSB7XG4gICAgLnZmLWhsaXN0LnZmLWNvbW1lbnQtYWN0aW9ucyA+IGxpICsgbGkge1xuICAgICAgICBtYXJnaW4tbGVmdDogMTVweDtcbiAgICB9XG5cbiAgICB1bC52Zi1obGlzdCA+IGxpLnZmLWZsYWctY29udGFpbmVyLmludmlzaWJsZSB7XG4gICAgICAgIGRpc3BsYXk6IG5vbmU7XG4gICAgfVxuXG4gICAgLnZmLXNoYXJlLWxpc3QtbGluazo6YmVmb3JlIHtcbiAgICAgICAgbWFyZ2luLXJpZ2h0OiA1cHg7XG4gICAgICAgIHRleHQtZGVjb3JhdGlvbjogbm9uZTtcbiAgICB9XG59XG5cbi52Zi1ydGwgLnZpYWZvdXJhIHtcbiAgICBkaXJlY3Rpb246IHJ0bDtcblxuICAgIC52Zi1sZWZ0LFxuICAgIHVsLnZmLW5hdiBsaSxcbiAgICAudmYtdGFicyBsaSB7XG4gICAgICAgIGZsb2F0OiByaWdodDtcbiAgICB9XG5cbiAgICAudmYtcmlnaHQge1xuICAgICAgICBwYWRkaW5nOiAwO1xuICAgIH1cblxuICAgIC52Zi1tb2RhbCAudmYtbW9kYWwtY2xvc2Uge1xuICAgICAgICByaWdodDogYXV0bztcbiAgICAgICAgbGVmdDogMDtcbiAgICB9XG5cbiAgICAmLnRvb2x0aXAgLnZmLWRpYWxvZyB7XG4gICAgICAgIGRpcmVjdGlvbjogbHRyO1xuICAgIH1cbn1cblxuLy8gc3R5bGVsaW50LWRpc2FibGUgbm8taW52YWxpZC1wb3NpdGlvbi1hdC1pbXBvcnQtcnVsZVxuQGltcG9ydCBcImFzc2V0cy9sZWdhY3kvY3NzL3N0eWxlL3N0eWxlXCI7XG5AaW1wb3J0IFwiYXNzZXRzL2JldGEvY3NzL2hlbHBlcnMvdmFyaWFibGVzXCI7XG5AaW1wb3J0IFwiYXNzZXRzL2JldGEvY3NzL21peGlucy9tb2R1bGVcIjtcbkBpbXBvcnQgXCJhc3NldHMvYmV0YS9jc3MvaGVscGVycy91dGlsaXR5XCI7XG5AaW1wb3J0IFwiYXNzZXRzL2JldGEvY3NzL2xheW91dC9jb250YWluZXJzXCI7XG5AaW1wb3J0IFwiYXNzZXRzL2JldGEvY3NzL2xheW91dC90YWJiZWRfbmF2XCI7XG4vLyBzdHlsZWxpbnQtZW5hYmxlIG5vLWludmFsaWQtcG9zaXRpb24tYXQtaW1wb3J0LXJ1bGVcbiIsIkBpbXBvcnQgXCJkZXNpZ24tYXNzZXRzL2Nzcy92YXJpYWJsZXMvbW9kdWxlXCI7XG5AaW1wb3J0IFwiYXNzZXRzL2JldGEvY3NzL2hlbHBlcnMvdmFyaWFibGVzXCI7XG5cbi8qIENvbnN0YW50cyAqL1xuXG4vLyB2Mi41XG4kdmYtbGlnaHQtcGluazogI2YyZGVkZTtcbiR2Zi1yZWQ6ICNlZTAwMDA7XG4kdmYtZGFyay1zY2FybGV0LXJlZDogIzg0MGExZjtcbiR2Zi15ZWxsb3c6ICNmOWU3MDA7XG4kdmYtbXVzdGFyZDogI2Y1YTYyMztcbiR2Zi10dXJxb2lzZTogIzJjN2M5MTtcbiRibGFjazogIzAwMDAwMDtcbiR2Zi1tb2RlcmF0b3ItZ3JlZW46ICM2NGExNTk7XG4kdmYtYnJpZ2h0LWdyZWVuOiAjNGVkYzg1O1xuJHZmLWRhcmstYmx1ZTogIzAwNWE4YztcbiR2Zi1saWdodGVuZWQtYmxhY2s6IGxpZ2h0ZW4oJGJsYWNrLCAyNSUpO1xuJHZmLXZlcnktdHJhbnNsdWNlbnQtYmxhY2s6IHJnYmEoMCwgMCwgMCwgMC4yNSk7XG4kdmYtc2VtaS10cmFuc2x1Y2VudC1kYXJrLWdyZXk6IHJnYmEoNTAsIDUwLCA1MCwgMC43NSk7XG4kdmYtdHJhbnNsdWNlbnQtbGlnaHQtZGFyay1ncmV5OiByZ2JhKDEwMCwgMTAwLCAxMDAsIDAuNSk7XG4kdmYtc2VtaS10cmFuc2x1Y2VudC1saWdodC1kYXJrLWdyZXk6IHJnYmEoMTAwLCAxMDAsIDEwMCwgMC43NSk7XG4kdmYtc2VtaS10cmFuc2x1Y2VudC1ibHVlOiByZ2JhKDYwLCAxNzAsIDIwMCwgMC43NSk7XG4kdmYtbW9zdGx5LXRyYW5zbHVjZW50LWRhcmstYmx1ZTogcmdiYSgwLCA5MCwgMTQwLCAwLjI1KTtcbiR2Zi1tb3N0bHktdHJhbnNsdWNlbnQtd2hpdGU6IHJnYmEoMjU1LCAyNTUsIDI1NSwgMC4yNSk7XG4kdmYtdmVyeS10cmFuc2x1Y2VudC13aGl0ZTogcmdiYSgyNTUsIDI1NSwgMjU1LCAwLjQpO1xuJHZmLXRyYW5zbHVjZW50LXdoaXRlOiByZ2JhKDI1NSwgMjU1LCAyNTUsIDAuNik7XG4kdmYtc2VtaS10cmFuc2x1Y2VudC13aGl0ZTogcmdiYSgyNTUsIDI1NSwgMjU1LCAwLjc1KTtcbiR2Zi1hbG1vc3Qtb3BhcXVlLXdoaXRlOiByZ2JhKDI1NSwgMjU1LCAyNTUsIDAuOTUpO1xuXG4kdmYtaGlnaGxpZ2h0ZWQtY29udGVudDogI2VmZmFmZjtcblxuLy8gdjJcbiR0cmFuc2l0aW9uRmFzdDogMC4ycztcbiR0cmFuc2l0aW9uU2xvdzogMC4zcztcblxuJGRlZmF1bHQtZm9udC1zaXplOiAxM3B4O1xuJGNvbW1lbnQtcGFkZGluZzogMjBweDtcbiRiZy1jb21tZW50LWJveDogI2ViZWJlYjtcbiRjb2xvci1saW5rOiAjMDAwMGJiO1xuJGNvbG9yLWxpbmstdmlzaXRlZDogIzY2MDBhYTtcbiRjb2xvci1yZXBseS10bzogI2NjY2NjYztcbiRjb2xvci1zaG93LW1vcmU6ICM4ODg4ODg7XG4kY29sb3ItbGlnaHQtbGluazogIzg4ODg4ODtcbiRjb2xvci11c2VyLXJhbms6ICNhYWFhYWE7XG4kYm9yZGVyLWNvbG9yLWRhcms6IDFweCBzb2xpZCAjYmJiYmJiO1xuJGJvcmRlci1jb2xvcjogMXB4IHNvbGlkICNkYWRhZGE7XG4kdmlkZW9fcGxhY2Vob2xkZXJfd2lkdGg6IDMwMHB4O1xuJHJlbWFpbmluZy10aW1lci1jb2xvcjogI2FmMzAzMDtcblxuLy8gQ29tbWVudGluZyBXaWRnZXRcbiRjb2xvci1jb21tZW50LWJveC1ib3JkZXI6ICNhZmM2ZDA7XG5cbiRjb2xvci1hLWhvdmVyOiAjYmYyZTFhO1xuXG4kY29sb3ItZXJyb3ItYmc6ICNmMjgzOGY7XG4kY29sb3ItZXJyb3ItYm9yZGVyOiAjZWJjY2QxO1xuJGNvbG9yLWVycm9yLWljb246ICNkZDAwMTc7XG4kY29sb3ItZXJyb3ItaWNvbi1zdWJkdWVkOiAjYTgzZTNlO1xuJGNvbG9yLWVycm9yLXRleHQ6ICM4NDBhMWY7XG5cbiRjb2xvci1pbmZvLWJnOiAjN2NkMWVmO1xuJGNvbG9yLWluZm8tYm9yZGVyOiAjZTZkN2JjO1xuJGNvbG9yLWluZm8taWNvbjogI2E4OWMyMTtcblxuJGNvbG9yLXN1Y2Nlc3MtYmc6ICNkZmYwZDg7XG4kY29sb3Itc3VjY2Vzcy1ib3JkZXI6ICNiYmQzYjA7XG4kY29sb3Itc3VjY2Vzcy1pY29uOiAjMDg5ZDE5O1xuJGNvbG9yLXN1Y2Nlc3MtdGV4dDogIzE4NjkxYTtcblxuJGNvbG9yLW5vdGlmaWNhdGlvbi1iZzogI2YxZjRmODtcbiRjb2xvci1ub3RpZmljYXRpb24tYm9yZGVyOiAjZDdkY2U4O1xuJGNvbG9yLW5vdGlmaWNhdGlvbi10ZXh0OiAjNmU2ZDgxO1xuXG4kY29sb3ItYXZhdGFyLWFjdGlvbi1idXR0b246ICMyYmJkZjk7XG5cbi8vIEFsbCBtZXNzYWdlIGNvbG9yc1xuJGNvbG9yLWNvbW1lbnQtYWxlcnQtdGV4dDogcmdiYSgwLCAwLCAwLCAwLjg1KTtcbiRjb2xvci1jb21tZW50LWVycm9yLWJvcmRlcjogI2YwODU5MTtcbiRjb2xvci1jb21tZW50LXdhcm5pbmctYm9yZGVyOiAkY29sb3ItaW5mby1iZztcbiRjb2xvci1yYXRpbmdzLXN0YXJzLWZpbGw6ICNmOWQzMDA7XG5cbiRjb21wbGV0ZS1zcHJpdGU6ICcuLi9pbWcvdmYtc3ByaXRlLnBuZyc7XG5cbkBtaXhpbiBzaGFyZWxpbmsoKSB7XG4gICAgbWFyZ2luLWJvdHRvbTogLTFweDtcbiAgICBiYWNrZ3JvdW5kOiAjZmZmOWIzO1xuICAgIGJvcmRlcjogMXB4IHNvbGlkICNjY2NjY2M7XG4gICAgYm94LXNoYWRvdzogMCAwIDRweCAjZGRkZGRkO1xufVxuXG5AbWl4aW4gbGlnaHQtZ3JhZGllbnQoKSB7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogI2NjY2NjYztcbn1cblxuQG1peGluIGRhcmstZ3JhZGllbnQoKSB7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogIzRmNWQ2ZDtcbn1cblxuQG1peGluIGxpZ2h0LWJ1dHRvbi1ncmFkaWVudCgpIHtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjODg4ODg4O1xufVxuXG5AbWl4aW4gZGFyay1idXR0b24tZ3JhZGllbnQge1xuICAgIGJhY2tncm91bmQtY29sb3I6ICM4ODg4ODg7XG59XG5cbkBtaXhpbiB5ZWxsb3ctYm94KCkge1xuICAgIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgICBtYXJnaW4tdG9wOiAtM3B4O1xuICAgIHBhZGRpbmc6IDNweCA3cHg7XG4gICAgY29sb3I6ICM0NDQ0NDQ7XG4gICAgZm9udC1zaXplOiAxMXB4O1xuICAgIHRleHQtc2hhZG93OiBpbnNldCAwIDFweCAwICNlZGFkMTQ7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogI2ZmZTIwYjtcbiAgICBiYWNrZ3JvdW5kLWltYWdlOiBsaW5lYXItZ3JhZGllbnQodG9wLCAjZmZmMjFlIDAlLCAjZmZkOTAxIDEwMCUpOyAvLyBzdHlsZWxpbnQtZGlzYWJsZS1saW5lXG4gICAgYm9yZGVyLWNvbG9yOiAjZWRhZDE0O1xuICAgIGJvcmRlci1zdHlsZTogc29saWQ7XG4gICAgYm9yZGVyLXdpZHRoOiAxcHg7XG4gICAgYm9yZGVyLXJhZGl1czogMCAwIDVweCA1cHg7XG59XG5cbkBtaXhpbiBtZXRhLWdyYWRpZW50KCkge1xuICAgIGJhY2tncm91bmQtY29sb3I6ICM1ZDZiN2E7XG59XG5cbi8vIEJldGEgQ29uc3RhbnRzXG4kYmV0YS1jb2xvci1zZWNvbmRhcnk6ICM2ODdkOGE7XG4kYmV0YS1jb2xvci10ZXJuYXJ5OiAjYWZjNmQwO1xuJGJldGEtY29sb3ItY29tbWVudDogI2Y3ZjlmYTtcbiRiZXRhLWNvbG9yLWNvbW1lbnQtY3VycmVudC11c2VyOiAkdmYtbW9zdGx5LXRyYW5zbHVjZW50LWRhcmstYmx1ZTtcbiRiZXRhLWNvbG9yLWNvbW1lbnQtdGV4dDogIzk3OTc5NztcbiRiZXRhLWNvbG9yLWNvbW1lbnQtdGV4dC1zZWNvbmRhcnk6ICM2MDVlNWU7XG4kYmV0YS1jb2xvci1jb250cm9sOiAjYWFiM2JkO1xuJGJldGEtY29sb3ItYWN0aXZlOiAjZmY1ZDVkO1xuJGJldGEtY29sb3ItZGlzcGxheS10ZXh0OiAjODQ5Y2E3O1xuXG5AbWl4aW4gY29tbWVudC1hbGVydC10ZXh0KCkge1xuICAgIGNvbG9yOiAkY29sb3ItY29tbWVudC1hbGVydC10ZXh0O1xufVxuXG4vLyBVdGlsIGZvciBTY3JlZW4gUmVhZGVyIE9ubHkgY29udGVudC5cbkBtaXhpbiBzci1vbmx5KCkge1xuICAgIGJvcmRlcjogMCAhaW1wb3J0YW50O1xuICAgIGNsaXA6IHJlY3QoMXB4LCAxcHgsIDFweCwgMXB4KSAhaW1wb3J0YW50O1xuICAgIC13ZWJraXQtY2xpcC1wYXRoOiBpbnNldCg1MCUpICFpbXBvcnRhbnQ7XG4gICAgY2xpcC1wYXRoOiBpbnNldCg1MCUpICFpbXBvcnRhbnQ7XG4gICAgaGVpZ2h0OiAxcHggIWltcG9ydGFudDtcbiAgICBtYXJnaW46IC0xcHggIWltcG9ydGFudDtcbiAgICBvdmVyZmxvdzogaGlkZGVuICFpbXBvcnRhbnQ7XG4gICAgcGFkZGluZzogMCAhaW1wb3J0YW50O1xuICAgIHBvc2l0aW9uOiBhYnNvbHV0ZSAhaW1wb3J0YW50O1xuICAgIHdpZHRoOiAxcHggIWltcG9ydGFudDtcbiAgICB3aGl0ZS1zcGFjZTogbm93cmFwICFpbXBvcnRhbnQ7XG59XG5cbi8vIEZvciBsb2NhbCB0ZXN0cy4gVHJ5IHRvIHVzZSB0aGUgbWl4aW4gYWJvdmUgaW5zdGVhZC5cbi5zci1vbmx5IHtcbiAgICBAaW5jbHVkZSBzci1vbmx5KCk7XG59XG4iLCIvKipcbiAqIERFUFJFQ0FURURcbiAqXG4gKiBUaGUgdmlhZm91cmEgZm9udCBpcyBkZXByZWNhdGVkLCBhbmQgaW4gZnV0dXJlLCB3ZSBzaG91bGQgZG8gYWxsIGljb25zIHdpdGggcHVyZSBTVkdcbiAqKi9cbkBmb250LWZhY2Uge1xuICAgIGZvbnQtd2VpZ2h0OiBub3JtYWw7XG4gICAgZm9udC1mYW1pbHk6ICd2aWFmb3VyYSc7XG4gICAgZm9udC1zdHlsZTogbm9ybWFsO1xuICAgIHNyYzogdXJsKCcuLi9mb250cy92aWFmb3VyYS5lb3QnKTsgLyogSUU5ICovXG4gICAgc3JjOiB1cmwoJy4uL2ZvbnRzL3ZpYWZvdXJhLmVvdD8jaWVmaXgnKSBmb3JtYXQoJ2VtYmVkZGVkLW9wZW50eXBlJyksIC8qIElFNi1JRTggKi9cbiAgICAgICAgdXJsKCcuLi9mb250cy92aWFmb3VyYS53b2ZmMicpIGZvcm1hdCgnd29mZjInKSwgLyogQ2hyb21lLCBGaXJlZm94LCBPcGVyYSwgU2FmYXJpLCBBbmRyb2lkLCBpT1MgKi9cbiAgICAgICAgdXJsKCcuLi9mb250cy92aWFmb3VyYS53b2ZmJykgZm9ybWF0KCd3b2ZmJyksIC8qIENocm9tZSwgRmlyZWZveCAqL1xuICAgICAgICB1cmwoJy4uL2ZvbnRzL3ZpYWZvdXJhLnR0ZicpIGZvcm1hdCgndHJ1ZXR5cGUnKSwgLyogQ2hyb21lLCBGaXJlZm94LCBPcGVyYSwgU2FmYXJpLCBBbmRyb2lkLCBpT1MgNC4yKyAqL1xuICAgICAgICB1cmwoJy4uL2ZvbnRzL3ZpYWZvdXJhLnN2ZyN1eGZvbnRlZGl0b3InKSBmb3JtYXQoJ3N2ZycpOyAvKiBpT1MgNC4xLSAqL1xuXG4gICAgZm9udC1kaXNwbGF5OiBzd2FwO1xufVxuXG4udmlhZm91cmEge1xuICAgIC52Zi1mbGFnOjpiZWZvcmUsXG4gICAgLnZmLWZhY2Vib29rLWxpa2U6OmJlZm9yZSxcbiAgICAudmYtdHdpdHRlci10d2VldDo6YmVmb3JlLFxuICAgIC52Zi1lbWFpbC1pY29uOjpiZWZvcmUsXG4gICAgLnZmLW1vZGVyYXRvci1tZW51OjpiZWZvcmUsXG4gICAgLnZmLWljb24tcmVwbHk6OmJlZm9yZSxcbiAgICAudmYtcnQtaGFzLWVkaXQgbGkudmYtcnQtaGFzLWVkaXQtbGkgYTo6YmVmb3JlLFxuICAgIC52Zi1ydHctcGFnZXMgLnZmLXJ0dy1jb21tZW50LWxpbms6OmJlZm9yZSxcbiAgICAudmYtcnR3LXBhZ2VzLW1pbmkgLnZmLXJ0dy1jb3VudC10b3RhbDo6YWZ0ZXIsXG4gICAgLnZmLXJ0dy1jb21tZW50cyAudmYtd2lkZ2V0LWRlc2M6OmJlZm9yZSxcbiAgICAudmYtcnR3LWxpc3QgLnZmLWxpa2VzOjpiZWZvcmUsXG4gICAgLnZmLXJ0dy1saXN0IC52Zi1kaXNsaWtlczo6YmVmb3JlLFxuICAgIC52Zi1ydHctbGlzdCAudmYtcmVwbGllczo6YmVmb3JlLFxuICAgIC52Zi1ydHctY29tbWVudC1jb3VudDo6YWZ0ZXIge1xuICAgICAgICBmb250LXdlaWdodDogbm9ybWFsO1xuICAgICAgICBmb250LWZhbWlseTogJ3ZpYWZvdXJhJztcbiAgICAgICAgZm9udC1zdHlsZTogbm9ybWFsO1xuICAgICAgICBmb250LXZhcmlhbnQ6IG5vcm1hbDtcbiAgICAgICAgdGV4dC10cmFuc2Zvcm06IG5vbmU7XG4gICAgICAgIHNwZWFrOiBub25lO1xuICAgICAgICAtd2Via2l0LWZvbnQtc21vb3RoaW5nOiBhbnRpYWxpYXNlZDtcbiAgICAgICAgLW1vei1vc3gtZm9udC1zbW9vdGhpbmc6IGdyYXlzY2FsZTtcbiAgICB9XG59XG4iLCIvKlxuICogSFRNTDUgQm9pbGVycGxhdGVcbiAqXG4gKiBXaGF0IGZvbGxvd3MgaXMgdGhlIHJlc3VsdCBvZiBtdWNoIHJlc2VhcmNoIG9uIGNyb3NzLWJyb3dzZXIgc3R5bGluZy5cbiAqIENyZWRpdCBsZWZ0IGlubGluZSBhbmQgYmlnIHRoYW5rcyB0byBOaWNvbGFzIEdhbGxhZ2hlciwgSm9uYXRoYW4gTmVhbCxcbiAqIEtyb2MgQ2FtZW4sIGFuZCB0aGUgSDVCUCBkZXYgY29tbXVuaXR5IGFuZCB0ZWFtLlxuICpcbiAqIERldGFpbGVkIGluZm9ybWF0aW9uIGFib3V0IHRoaXMgQ1NTOiBoNWJwLmNvbS9jc3NcbiAqXG4gKiBWaWFmb3VyYTogUmVtb3ZlZCBwcmludCwgbWVkaWEgcXVlcnksIHByZXBlbmRlZCAudmlhZm91cmEgd3JhcHBlciwgYW5kIGFzc2lnbmVkIGh0bWwvYm9keSBzZWxlY3RvcnMgdG8gLnZpYWZvdXJhXG4gKlxuICogPT18PT0gbm9ybWFsaXplID09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT1cbiAqL1xuXG4vKiA9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PVxuQm9yZGVyIGJveFxuPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT0gKi9cbi52aWFmb3VyYSxcbmh0bWwsXG5ib2R5IHtcbiAgICBib3gtc2l6aW5nOiBib3JkZXItYm94O1xuICAgIG1hcmdpbjogMDtcbiAgICBwYWRkaW5nOiAwO1xufVxuXG4qLFxuKjo6YmVmb3JlLFxuKjo6YWZ0ZXIge1xuICAgIGJveC1zaXppbmc6IGluaGVyaXQ7XG59XG5cbi8qID09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09XG5IVE1MNSBkaXNwbGF5IGRlZmluaXRpb25zXG49PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PSAqL1xuYXJ0aWNsZSxcbmFzaWRlLFxuZGV0YWlscyxcbmZpZ2NhcHRpb24sXG5maWd1cmUsXG5mb290ZXIsXG5oZWFkZXIsXG5oZ3JvdXAsXG5uYXYsXG5zZWN0aW9uIHtcbiAgICBkaXNwbGF5OiBibG9jaztcbiAgICBtYXJnaW46IDA7XG4gICAgcGFkZGluZzogMDtcbn1cblxuYXVkaW8sXG5jYW52YXMsXG52aWRlbyB7XG4gICAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xufVxuXG5hdWRpbzpub3QoW2NvbnRyb2xzXSkge1xuICAgIGRpc3BsYXk6IG5vbmU7XG59XG5cbltoaWRkZW5dIHtcbiAgICBkaXNwbGF5OiBub25lO1xufVxuXG5oMSxcbmgyLFxuaDMsXG5oNCxcbmg1LFxuaDYsXG5wLFxudWwsXG5vbCB7XG4gICAgbWFyZ2luOiAwO1xuICAgIHBhZGRpbmc6IDA7XG59XG5cbnVsLFxub2wge1xuICAgIGxpc3Qtc3R5bGUtdHlwZTogbm9uZTtcbn1cblxuLyogPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT1cbkJhc2Vcbj09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09ICovXG5cbi8qIEFuY2hvciBkZWZhdWx0IHRvIHByZXZlbnQgb3ZlcnJpZGVzICovXG5hIHtcbiAgICBib3JkZXItd2lkdGg6IDA7XG59XG5cbi8qIEltcHJvdmUgcmVhZGFiaWxpdHkgd2hlbiBmb2N1c2VkIGFuZCBob3ZlcmVkIGluIGFsbCBicm93c2VyczogaDVicC5jb20vaCAqL1xuYTpob3ZlcixcbmE6YWN0aXZlIHtcbiAgICBvdXRsaW5lOiAwO1xufVxuXG4vKiA9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09XG5UeXBvZ3JhcGh5XG49PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PSAqL1xuYWJiclt0aXRsZV0geyBib3JkZXItYm90dG9tOiAxcHggZG90dGVkOyB9XG5cbmIsXG5zdHJvbmcgeyBmb250LXdlaWdodDogNzAwOyB9XG5cbmJsb2NrcXVvdGUgeyBtYXJnaW46IDFlbSA0MHB4OyB9XG5cbmRmbiB7IGZvbnQtc3R5bGU6IGl0YWxpYzsgfVxuXG5xIHsgcXVvdGVzOiBub25lOyB9XG5cbnE6OmJlZm9yZSxcbnE6OmFmdGVyIHtcbiAgICBjb250ZW50OiAnJztcbiAgICBjb250ZW50OiBub25lO1xufVxuXG5zbWFsbCB7IGZvbnQtc2l6ZTogODUlOyB9XG5cbi8qIFBvc2l0aW9uIHN1YnNjcmlwdCBhbmQgc3VwZXJzY3JpcHQgY29udGVudCB3aXRob3V0IGFmZmVjdGluZyBsaW5lLWhlaWdodDogaDVicC5jb20vayAqL1xuc3ViLFxuc3VwIHtcbiAgICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gICAgZm9udC1zaXplOiA3NSU7XG4gICAgbGluZS1oZWlnaHQ6IDA7XG4gICAgdmVydGljYWwtYWxpZ246IGJhc2VsaW5lO1xufVxuXG5zdXAgeyB0b3A6IC0wLjVlbTsgfVxuXG5zdWIgeyBib3R0b206IC0wLjI1ZW07IH1cblxuLyogPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT1cbkxpc3RzXG49PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PSAqL1xuZGQgeyBtYXJnaW46IDAgMCAwIDQwcHg7IH1cblxubmF2IHVsLFxubmF2IG9sIHtcbiAgICBtYXJnaW46IDA7XG4gICAgcGFkZGluZzogMDtcbiAgICBsaXN0LXN0eWxlLWltYWdlOiBub25lO1xufVxuXG4vKiA9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PVxuRW1iZWRkZWQgY29udGVudFxuPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT0gKi9cblxuLypcbiogMS4gSW1wcm92ZSBpbWFnZSBxdWFsaXR5IHdoZW4gc2NhbGVkIGluIElFNzogaDVicC5jb20vZFxuKiAyLiBSZW1vdmUgdGhlIGdhcCBiZXR3ZWVuIGltYWdlcyBhbmQgYm9yZGVycyBvbiBpbWFnZSBjb250YWluZXJzOiBoNWJwLmNvbS9pLzQ0MFxuKi9cbmltZyB7XG4gICAgdmVydGljYWwtYWxpZ246IG1pZGRsZTtcbiAgICBib3JkZXI6IDA7XG4gICAgLW1zLWludGVycG9sYXRpb24tbW9kZTogYmljdWJpYzsgLyogc3R5bGVsaW50LWRpc2FibGUtbGluZSBwcm9wZXJ0eS1uby12ZW5kb3ItcHJlZml4ICovXG59XG5cbi8qXG4qIENvcnJlY3Qgb3ZlcmZsb3cgbm90IGhpZGRlbiBpbiBJRTlcbiovXG5zdmc6bm90KDpyb290KSB7IG92ZXJmbG93OiBoaWRkZW47IH1cblxuLyogPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT1cbkZpZ3VyZXNcbj09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09ICovXG5maWd1cmUgeyBtYXJnaW46IDA7IH1cblxuLyogPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT1cbkZvcm1zXG49PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PSAqL1xuZm9ybSB7IG1hcmdpbjogMDsgfVxuXG5maWVsZHNldCB7XG4gICAgbWFyZ2luOiAwO1xuICAgIHBhZGRpbmc6IDA7XG4gICAgYm9yZGVyOiAwO1xufVxuXG4vKiBJbmRpY2F0ZSB0aGF0ICdsYWJlbCcgd2lsbCBzaGlmdCBmb2N1cyB0byB0aGUgYXNzb2NpYXRlZCBmb3JtIGVsZW1lbnQgKi9cbmxhYmVsIHsgY3Vyc29yOiBwb2ludGVyOyB9XG5cbi8qXG4qIDEuIENvcnJlY3QgY29sb3Igbm90IGluaGVyaXRpbmcgaW4gSUU2LzcvOC85XG4qIDIuIENvcnJlY3QgYWxpZ25tZW50IGRpc3BsYXllZCBvZGRseSBpbiBJRTYvN1xuKi9cbmxlZ2VuZCB7XG4gICAgbWFyZ2luLWxlZnQ6IDA7XG4gICAgcGFkZGluZzogMDtcbiAgICB3aGl0ZS1zcGFjZTogbm9ybWFsO1xuICAgIGJvcmRlcjogMDtcbn1cblxuLypcbiogMS4gQ29ycmVjdCBmb250LXNpemUgbm90IGluaGVyaXRpbmcgaW4gYWxsIGJyb3dzZXJzXG4qIDIuIFJlbW92ZSBtYXJnaW5zIGluIEZGMy80IFM1IENocm9tZVxuKiAzLiBEZWZpbmUgY29uc2lzdGVudCB2ZXJ0aWNhbCBhbGlnbm1lbnQgZGlzcGxheSBpbiBhbGwgYnJvd3NlcnNcbiovXG5idXR0b24sXG5pbnB1dCxcbnNlbGVjdCxcbnRleHRhcmVhIHtcbiAgICBtYXJnaW46IDA7XG4gICAgZm9udC1zaXplOiAxMDAlO1xuICAgIGZvbnQtc2l6ZTogaW5oZXJpdDtcbiAgICBmb250LWZhbWlseTogaW5oZXJpdDtcbiAgICBsaW5lLWhlaWdodDogaW5oZXJpdDtcbiAgICB2ZXJ0aWNhbC1hbGlnbjogYmFzZWxpbmU7XG59XG5cbmJ1dHRvbiB7XG4gICAgcGFkZGluZzogMDtcbiAgICBjb2xvcjogaW5oZXJpdDtcbiAgICB0ZXh0LXRyYW5zZm9ybTogaW5oZXJpdDtcbiAgICBiYWNrZ3JvdW5kOiBub25lO1xuICAgIGJvcmRlcjogbm9uZTtcbiAgICBib3gtc2hhZG93OiBub25lO1xuXG4gICAgJjphY3RpdmUge1xuICAgICAgICBjb2xvcjogaW5oZXJpdDtcbiAgICB9XG59XG5cbmlucHV0IHtcbiAgICBwYWRkaW5nOiAwOyAvLyBPdmVycmlkZSBkZWZhdWx0IDFweCBpbiBDaHJvbWVcbn1cblxuLypcbiogMS4gRGlzcGxheSBoYW5kIGN1cnNvciBmb3IgY2xpY2thYmxlIGZvcm0gZWxlbWVudHNcbiogMi4gQWxsb3cgc3R5bGluZyBvZiBjbGlja2FibGUgZm9ybSBlbGVtZW50cyBpbiBpT1NcbiogMy4gQ29ycmVjdCBpbm5lciBzcGFjaW5nIGRpc3BsYXllZCBvZGRseSBpbiBJRTcgKGRvZXNuJ3QgZWZmZWN0IElFNilcbiovXG4vKiBzdHlsZWxpbnQtZGlzYWJsZS1uZXh0LWxpbmUgbm8tZGVzY2VuZGluZy1zcGVjaWZpY2l0eSAqL1xuYnV0dG9uLFxuaW5wdXRbdHlwZT0nYnV0dG9uJ10sXG5pbnB1dFt0eXBlPSdyZXNldCddLFxuaW5wdXRbdHlwZT0nc3VibWl0J10ge1xuICAgIG92ZXJmbG93OiB2aXNpYmxlO1xuICAgIGN1cnNvcjogcG9pbnRlcjtcbiAgICAtd2Via2l0LWFwcGVhcmFuY2U6IGJ1dHRvbjsgLyogc3R5bGVsaW50LWRpc2FibGUtbGluZSBwcm9wZXJ0eS1uby12ZW5kb3ItcHJlZml4ICovXG59XG5cbi8qXG4qIFJlLXNldCBkZWZhdWx0IGN1cnNvciBmb3IgZGlzYWJsZWQgZWxlbWVudHNcbiovXG5idXR0b25bZGlzYWJsZWRdLFxuaW5wdXRbZGlzYWJsZWRdIHtcbiAgICBjdXJzb3I6IGRlZmF1bHQ7XG59XG5cbi8qXG4qIElFMTEgbWFraW5nIHN1cmUgdGhlIHggdG8gY2xlYXIgaW5wdXQgZmllbGRzIHN0YXkgY29uc2lzdGVudFxuKi9cbmlucHV0OjotbXMtY2xlYXIge1xuICAgIHdpZHRoOiAyMHB4O1xuICAgIGNvbG9yOiAjOWE5YTlhO1xufVxuXG4vKlxuKiBDb25zaXN0ZW50IGJveCBzaXppbmcgYW5kIGFwcGVhcmFuY2VcbiovXG5pbnB1dFt0eXBlPSdjaGVja2JveCddLFxuaW5wdXRbdHlwZT0ncmFkaW8nXSB7XG4gICAgd2lkdGg6IDEzcHg7XG4gICAgaGVpZ2h0OiAxM3B4O1xuICAgIHBhZGRpbmc6IDA7XG59XG5cbmlucHV0W3R5cGU9J3NlYXJjaCddOjotd2Via2l0LXNlYXJjaC1kZWNvcmF0aW9uLFxuaW5wdXRbdHlwZT0nc2VhcmNoJ106Oi13ZWJraXQtc2VhcmNoLWNhbmNlbC1idXR0b24ge1xuICAgIC13ZWJraXQtYXBwZWFyYW5jZTogbm9uZTsgLyogc3R5bGVsaW50LWRpc2FibGUtbGluZSBwcm9wZXJ0eS1uby12ZW5kb3ItcHJlZml4ICovXG59XG5cbi8qXG4qIDEuIFJlbW92ZSBkZWZhdWx0IHZlcnRpY2FsIHNjcm9sbGJhciBpbiBJRTYvNy84LzlcbiogMi4gQWxsb3cgb25seSB2ZXJ0aWNhbCByZXNpemluZ1xuKi9cbnRleHRhcmVhIHtcbiAgICBvdmVyZmxvdzogYXV0bztcbiAgICB2ZXJ0aWNhbC1hbGlnbjogdG9wO1xuICAgIHJlc2l6ZTogdmVydGljYWw7XG59XG5cbi8qIENvbG9ycyBmb3IgZm9ybSB2YWxpZGl0eSAqL1xuaW5wdXQ6aW52YWxpZCxcbnRleHRhcmVhOmludmFsaWQgeyBiYWNrZ3JvdW5kLWNvbG9yOiAjZjBkZGRkOyB9XG5cbi8qID09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09XG5UYWJsZXNcbj09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09ICovXG50YWJsZSB7XG4gICAgYm9yZGVyLWNvbGxhcHNlOiBjb2xsYXBzZTtcbiAgICBib3JkZXItc3BhY2luZzogMDtcbn1cblxudGQsXG50Ym9keSB0aCB7IHZlcnRpY2FsLWFsaWduOiB0b3A7IH1cblxuLyogcmVzZXQgcGFkZGluZyAmIG1hcmdpbnMsIGluY2FzZSBzaXRlIGhhcyB0aGVtIHNwZWNpZmllZCAqL1xuLy8gc3R5bGVsaW50LWRpc2FibGUgbm8tZGVzY2VuZGluZy1zcGVjaWZpY2l0eVxuZGl2LFxudGV4dGFyZWEge1xuICAgIG1hcmdpbjogMDtcbiAgICBwYWRkaW5nOiAwO1xufVxuLy8gc3R5bGVsaW50LWVuYWJsZSBuby1kZXNjZW5kaW5nLXNwZWNpZmljaXR5XG4iLCJAaW1wb3J0ICcuL19yZXNldCc7XG5cbi52aWFmb3VyYSxcbmJvZHkge1xuICAgIC8vIFRPRE86IENvbnNpZGVyIGRlcHJlY2F0aW5nIHRoaXMgKG1heWJlIC0gYWxzbyBmdW5jdGlvbnMgYXMgYSBnbG9iYWwgYmctaG9vaywgbWlnaHQgYmUgdXNlZnVsKS5cbiAgICAvLyBDdXJyZW50bHkgcmVxdWlyZWQgZm9yIGJhY2t3YXJkcyBjb21wYXRpYmlsaXR5XG4gICAgQGluY2x1ZGUgc2V0LWNvbG9yLXBhbGV0dGUoJGRlZmF1bHQtcGFsZXR0ZSk7XG4gICAgQGluY2x1ZGUgYmFja2dyb3VuZCgkZGVmYXVsdC1wYWxldHRlKTtcbn1cbiIsIi8qIENvbG9yIG5hbWVzICovXG4kYmxhY2s6ICMwMDAwMDA7XG4kcHJpbWFyeS1jb2xvci0xMDA6ICRibGFjaztcbiRwcmltYXJ5LWNvbG9yLTYwOiByZ2JhKCRibGFjaywgMC42KTtcbiRwcmltYXJ5LWNvbG9yLTMwOiByZ2JhKCRibGFjaywgMC4zKTtcbiRwcmltYXJ5LWNvbG9yLTIwOiByZ2JhKCRibGFjaywgMC4yKTtcbiRwcmltYXJ5LWNvbG9yLTE1OiByZ2JhKCRibGFjaywgMC4xNSk7IC8vIGZvcm1lcmx5ICRncmV5LTIwXG4kcHJpbWFyeS1jb2xvci0xMDogcmdiYSgkYmxhY2ssIDAuMSk7XG4kcHJpbWFyeS1jb2xvci0wNDogcmdiYSgkYmxhY2ssIDAuMDQpOyAvLyByZXBsYWNlcyAkbGlnaHQtZ3JleVxuJHByaW1hcnktY29sb3ItMDI6IHJnYmEoJGJsYWNrLCAwLjAyKTtcblxuLy8gd2hpdGVzXG4kd2hpdGU6ICNmZmZmZmY7XG4kd2hpdGUtMzA6IHJnYmEoJHdoaXRlLCAwLjMpO1xuJHdoaXRlLTYwOiByZ2JhKCR3aGl0ZSwgMC42KTtcblxuLy8gbmFtZWRcbiRtZWRpdW0tYmx1ZTogIzAwN2ZmZjtcbiRkYXJrLWJsdWU6ICMwMDc0ZTg7XG4kbWVkaXVtLWdyZWVuOiAjMWNiYjk4O1xuJGdyZWVuOiAjNjNhYzE0O1xuJGRhcmstZ3JlZW46ICMzZDg1MTA7XG4kbGlnaHQtcmVkOiAjY2M0OTQ5O1xuJGxpZ2h0LXllbGxvdzogI2Y1YTYyMztcbiRoaWdobGlnaHQteWVsbG93OiAjZmZjMTAwO1xuJHB1cnBsZTogIzZkMDQ4MztcbiRvcmFuZ2U6ICNiOTUwMDA7XG4kbGlnaHQtb3JhbmdlOiAjZmY4ZjM5O1xuXG4vLyBOZWNlc3NhcnkgZm9yIGxpbmVhciBncmFkaWVudHMgd2hlcmUgZXZlcnkgYnJvd3NlciBjb252ZXJ0cyBcInRyYW5zcGFyZW50XCIgdG9cbi8vIHJnYmEoMjU1LCAyNTUsIDI1NSwgMCkgZXhjZXB0IHNhZmFyaSB3aGljaCBjb252ZXJ0cyBcInRyYW5zcGFyZW50XCIgdG9cbi8vIHJnYmEoMCwgMCwgMCwgMClcbiR0cmFuc3BhcmVudDogcmdiYSgyNTUsIDI1NSwgMjU1LCAwJSk7XG5cbi8qIEZ1bmN0aW9uYWwgY29sb3VyIG5hbWVzICovXG4kZXJyb3ItY29sb3I6ICRsaWdodC1yZWQ7XG4kd2FybmluZy1jb2xvcjogJG9yYW5nZTtcbiR3YXJuaW5nLWNvbG9yLWxpZ2h0OiAkbGlnaHQtb3JhbmdlO1xuJHN1Y2Nlc3MtY29sb3I6ICRncmVlbjtcblxuLyogRnVuY3Rpb25hbCBuYW1lcyBmb3IgY2xpZW50cyAoYW5kIHVzKSAqL1xuJGNsaWVudC1jb2xvcnM6IChcbiAgICBsaWdodC10ZXh0LW9uLWRlZmF1bHQtY29sb3I6IHJnYmEoJGJsYWNrLCAwLjYpLFxuICAgIGRhcmstdGV4dC1vbi1kZWZhdWx0LWNvbG9yOiAkYmxhY2ssXG4gICAgZGVmYXVsdC1jb2xvcjogJHdoaXRlLFxuICAgIGRlZmF1bHQtY29sb3ItNjA6ICR3aGl0ZS02MCxcbiAgICBkZWZhdWx0LWNvbG9yLTMwOiAkd2hpdGUtMzAsXG4gICAgZGVmYXVsdC1jb2xvci0wOiByZ2JhKCR3aGl0ZSwgMCksXG5cbiAgICB0ZXh0LW9uLXByaW1hcnktY29sb3I6ICR3aGl0ZSxcbiAgICBwcmltYXJ5LWNvbG9yLTEwMDogJGJsYWNrLFxuICAgIHByaW1hcnktY29sb3ItNzU6IHJnYmEoJGJsYWNrLCAwLjc1KSxcbiAgICBwcmltYXJ5LWNvbG9yLTYwOiByZ2JhKCRibGFjaywgMC42KSxcbiAgICBwcmltYXJ5LWNvbG9yLTMwOiByZ2JhKCRibGFjaywgMC4zKSxcbiAgICBwcmltYXJ5LWNvbG9yLTIwOiByZ2JhKCRibGFjaywgMC4yKSxcbiAgICBwcmltYXJ5LWNvbG9yLTE1OiByZ2JhKCRibGFjaywgMC4xNSksXG4gICAgcHJpbWFyeS1jb2xvci0xMDogcmdiYSgkYmxhY2ssIDAuMSksXG4gICAgcHJpbWFyeS1jb2xvci0wNDogcmdiYSgkYmxhY2ssIDAuMDQpLFxuICAgIHByaW1hcnktY29sb3ItMDI6IHJnYmEoJGJsYWNrLCAwLjAyKSxcblxuICAgIHRleHQtb24tYWNjZW50LWNvbG9yOiAkd2hpdGUsXG4gICAgYWNjZW50LWNvbG9yLTA6IHJnYmEoJGRhcmstYmx1ZSwgMCksXG4gICAgYWNjZW50LWNvbG9yLTA1OiByZ2JhKCRkYXJrLWJsdWUsIDAuMDUpLFxuICAgIGFjY2VudC1jb2xvci0xMDogcmdiYSgkZGFyay1ibHVlLCAwLjEpLFxuICAgIGFjY2VudC1jb2xvci0yMDogcmdiYSgkZGFyay1ibHVlLCAwLjIpLFxuICAgIGFjY2VudC1jb2xvci01MDogcmdiYSgkZGFyay1ibHVlLCAwLjUpLFxuICAgIGFjY2VudC1jb2xvci05MDogcmdiYSgkZGFyay1ibHVlLCAwLjkpLFxuICAgIGFjY2VudC1jb2xvci1saWdodDogJG1lZGl1bS1ibHVlLFxuICAgIGFjY2VudC1jb2xvcjogJGRhcmstYmx1ZSxcbiAgICBhY2NlbnQtY29sb3ItZGFyazogZGFya2VuKCRkYXJrLWJsdWUsIDE1JSksXG5cbiAgICB0ZXh0LW9uLWVycm9yLWNvbG9yOiAkd2hpdGUsXG4gICAgZXJyb3ItY29sb3ItbGlnaHQ6IGxpZ2h0ZW4oJGVycm9yLWNvbG9yLCAxMCUpLFxuICAgIGVycm9yLWNvbG9yOiAkZXJyb3ItY29sb3IsXG4gICAgZXJyb3ItY29sb3ItZGFyazogZGFya2VuKCRlcnJvci1jb2xvciwgMjUlKSxcbiAgICBlcnJvci1jb2xvci0yMDogcmdiYSgkZXJyb3ItY29sb3IsIDAuMiksXG4gICAgZXJyb3ItY29sb3ItMDU6IHJnYmEoJGVycm9yLWNvbG9yLCAwLjA1KSxcbiAgICBlcnJvci1jb2xvci0wOiByZ2JhKCRlcnJvci1jb2xvciwgMCksXG5cbiAgICB0ZXh0LW9uLXdhcm5pbmctY29sb3I6ICR3aGl0ZSxcbiAgICB3YXJuaW5nLWNvbG9yLWxpZ2h0OiAkd2FybmluZy1jb2xvci1saWdodCxcbiAgICB3YXJuaW5nLWNvbG9yOiAkd2FybmluZy1jb2xvcixcbiAgICB3YXJuaW5nLWNvbG9yLWRhcms6IGRhcmtlbigkd2FybmluZy1jb2xvciwgMTIlKSxcblxuICAgIHdhcm5pbmctbmV1dHJhbC1jb2xvcjogJGxpZ2h0LXllbGxvdyxcbiAgICB3YXJuaW5nLW5ldXRyYWwtY29sb3ItZGFyazogZGFya2VuKCRsaWdodC15ZWxsb3csIDEyJSksXG5cbiAgICB0ZXh0LW9uLW1lbnRpb24tY29sb3I6ICR3aGl0ZSxcbiAgICBtZW50aW9uLWNvbG9yLWxpZ2h0OiAkbWVkaXVtLWdyZWVuLFxuICAgIG1lbnRpb24tY29sb3I6ICMxNDg1NmMsXG4gICAgbWVudGlvbi1jb2xvci1kYXJrOiBkYXJrZW4oIzE0ODU2YywgMTAlKSxcblxuICAgIHRleHQtb24tc3VjY2Vzcy1jb2xvcjogJHdoaXRlLFxuICAgIHN1Y2Nlc3MtY29sb3ItbGlnaHQ6ICRncmVlbixcbiAgICBzdWNjZXNzLWNvbG9yOiAkZGFyay1ncmVlbixcbiAgICBzdWNjZXNzLWNvbG9yLWRhcms6IGRhcmtlbigkZGFyay1ncmVlbiwgMTAlKSxcblxuICAgIHRleHQtb24tZWRpdG9ycy1waWNrLWNvbG9yOiAkd2hpdGUsXG4gICAgZWRpdG9ycy1waWNrLWNvbG9yOiAkcHVycGxlLFxuXG4gICAgdGV4dC1vbi1tb2RlcmF0b3ItY29sb3I6ICR3aGl0ZSxcbiAgICBtb2RlcmF0b3ItY29sb3I6ICM2NGExNTksXG5cbiAgICBoaWdobGlnaHQtY29sb3ItMTA6IHJnYmEoJGhpZ2hsaWdodC15ZWxsb3csIDAuMSksXG4gICAgaGlnaGxpZ2h0LWNvbG9yOiAkaGlnaGxpZ2h0LXllbGxvdyxcbik7XG4kZGVmYXVsdC1jb2xvci1vdmVycmlkZXM6IChcbiAgICBsaWdodC10ZXh0LW9uLWJhY2tncm91bmQtY29sb3I6ICdsaWdodC10ZXh0LW9uLWRlZmF1bHQtY29sb3InLFxuICAgIGRhcmstdGV4dC1vbi1iYWNrZ3JvdW5kLWNvbG9yOiAnZGFyay10ZXh0LW9uLWRlZmF1bHQtY29sb3InLFxuICAgIGJhY2tncm91bmQtY29sb3I6ICdkZWZhdWx0LWNvbG9yJyxcbik7XG5cbi8vIFBBTEVUVEVTXG4kZGVmYXVsdC1wYWxldHRlOiAoXG4gICAgbGlnaHQtdGV4dDogJ2xpZ2h0LXRleHQtb24tZGVmYXVsdC1jb2xvcicsXG4gICAgZGFyay10ZXh0OiAnZGFyay10ZXh0LW9uLWRlZmF1bHQtY29sb3InLFxuICAgIGJhY2tncm91bmQ6ICdkZWZhdWx0LWNvbG9yJyxcbik7XG4kbGlnaHQtYWNjZW50LWJ1dHRvbi1ob2N1cy1wYWxldHRlOiAoXG4gICAgbGlnaHQtdGV4dDogJ2FjY2VudC1jb2xvcicsXG4gICAgZGFyay10ZXh0OiAnYWNjZW50LWNvbG9yJyxcbiAgICBiYWNrZ3JvdW5kOiAnYWNjZW50LWNvbG9yLTEwJyxcbik7XG4kbGlnaHQtYWNjZW50LWJ1dHRvbi1hY3RpdmUtcGFsZXR0ZTogKFxuICAgIGxpZ2h0LXRleHQ6ICdhY2NlbnQtY29sb3InLFxuICAgIGRhcmstdGV4dDogJ2FjY2VudC1jb2xvcicsXG4gICAgYmFja2dyb3VuZDogJ2FjY2VudC1jb2xvci0yMCcsXG4pO1xuJG5vdGlmaWNhdGlvbi11bnJlYWQtcGFsZXR0ZTogKFxuICAgIGxpZ2h0LXRleHQ6ICdsaWdodC10ZXh0LW9uLWRlZmF1bHQtY29sb3InLFxuICAgIGRhcmstdGV4dDogJ2RhcmstdGV4dC1vbi1kZWZhdWx0LWNvbG9yJyxcbiAgICBiYWNrZ3JvdW5kOiAnYWNjZW50LWNvbG9yLTA1J1xuKTtcbiRub3RpZmljYXRpb24tdW5yZWFkLWhvY3VzLXBhbGV0dGU6IChcbiAgICBsaWdodC10ZXh0OiAnbGlnaHQtdGV4dC1vbi1kZWZhdWx0LWNvbG9yJyxcbiAgICBkYXJrLXRleHQ6ICdkYXJrLXRleHQtb24tZGVmYXVsdC1jb2xvcicsXG4gICAgYmFja2dyb3VuZDogJ2FjY2VudC1jb2xvci0xMCdcbik7XG5cbkBtaXhpbiBiYWNrZ3JvdW5kKCRmYWxsYmFja1BhbGV0dGUsICRwcm9wZXJ0eTogYmFja2dyb3VuZC1jb2xvcikge1xuICAgICRmYWxsYmFjay1jb2xvdXI6IG1hcC1nZXQoJGZhbGxiYWNrUGFsZXR0ZSwgJ2JhY2tncm91bmQnKTtcblxuICAgICN7JHByb3BlcnR5fTogbWFwLWdldCgkY2xpZW50LWNvbG9ycywgJGZhbGxiYWNrLWNvbG91cik7XG4gICAgI3skcHJvcGVydHl9OiB2YXIoLS1iYWNrZ3JvdW5kLWNvbG9yLCBtYXAtZ2V0KCRjbGllbnQtY29sb3JzLCAkZmFsbGJhY2stY29sb3VyKSk7XG59XG5cbkBtaXhpbiBsaWdodC10ZXh0KCRmYWxsYmFja1BhbGV0dGUsICRwcm9wZXJ0eTogY29sb3IpIHtcbiAgICAkZmFsbGJhY2stY29sb3VyOiBtYXAtZ2V0KCRmYWxsYmFja1BhbGV0dGUsICdsaWdodC10ZXh0Jyk7XG5cbiAgICAjeyRwcm9wZXJ0eX06IG1hcC1nZXQoJGNsaWVudC1jb2xvcnMsICRmYWxsYmFjay1jb2xvdXIpO1xuICAgICN7JHByb3BlcnR5fTogdmFyKC0tbGlnaHQtdGV4dC1vbi1iYWNrZ3JvdW5kLWNvbG9yLCBtYXAtZ2V0KCRjbGllbnQtY29sb3JzLCAkZmFsbGJhY2stY29sb3VyKSk7XG59XG5cbkBtaXhpbiBkYXJrLXRleHQoJGZhbGxiYWNrUGFsZXR0ZSwgJHByb3BlcnR5OiBjb2xvcikge1xuICAgICRmYWxsYmFjay1jb2xvdXI6IG1hcC1nZXQoJGZhbGxiYWNrUGFsZXR0ZSwgJ2RhcmstdGV4dCcpO1xuXG4gICAgI3skcHJvcGVydHl9OiBtYXAtZ2V0KCRjbGllbnQtY29sb3JzLCAkZmFsbGJhY2stY29sb3VyKTtcbiAgICAjeyRwcm9wZXJ0eX06IHZhcigtLWRhcmstdGV4dC1vbi1iYWNrZ3JvdW5kLWNvbG9yLCBtYXAtZ2V0KCRjbGllbnQtY29sb3JzLCAkZmFsbGJhY2stY29sb3VyKSk7XG59XG5cbi8vIFRPRE86IENhbiB0aGlzIGFsc28gY2hlY2sgaWYgdGhlIGNvbnRyYXN0IHJhdGlvcyBhcmUgdmFsaWQ/XG4vLyBzdHlsZWxpbnQtZGlzYWJsZSBjdXN0b20tcHJvcGVydHktcGF0dGVyblxuQG1peGluIHNldC1jb2xvci1wYWxldHRlKCRwYWxldHRlKSB7XG4gICAgLS1iYWNrZ3JvdW5kLWNvbG9yOlxuICAgICAgICB2YXIoXG4gICAgICAgICAgICAtLSN7bWFwLWdldCgkcGFsZXR0ZSwgJ2JhY2tncm91bmQnKX0sXG4gICAgICAgICAgICAje21hcC1nZXQoJGNsaWVudC1jb2xvcnMsIG1hcC1nZXQoJHBhbGV0dGUsICdiYWNrZ3JvdW5kJykpfVxuICAgICAgICApO1xuICAgIC0tbGlnaHQtdGV4dC1vbi1iYWNrZ3JvdW5kLWNvbG9yOlxuICAgICAgICB2YXIoXG4gICAgICAgICAgICAtLSN7bWFwLWdldCgkcGFsZXR0ZSwgJ2xpZ2h0LXRleHQnKX0sXG4gICAgICAgICAgICAje21hcC1nZXQoJGNsaWVudC1jb2xvcnMsIG1hcC1nZXQoJHBhbGV0dGUsICdsaWdodC10ZXh0JykpfVxuICAgICAgICApO1xuICAgIC0tZGFyay10ZXh0LW9uLWJhY2tncm91bmQtY29sb3I6XG4gICAgICAgIHZhcihcbiAgICAgICAgICAgIC0tI3ttYXAtZ2V0KCRwYWxldHRlLCAnZGFyay10ZXh0Jyl9LFxuICAgICAgICAgICAgI3ttYXAtZ2V0KCRjbGllbnQtY29sb3JzLCBtYXAtZ2V0KCRwYWxldHRlLCAnZGFyay10ZXh0JykpfVxuICAgICAgICApO1xufVxuLy8gc3R5bGVsaW50LWVuYWJsZSBjdXN0b20tcHJvcGVydHktcGF0dGVyblxuIiwiLyogcm9ib3RvLTMwMCAtIHZpZXRuYW1lc2VfbGF0aW4tZXh0X2xhdGluX2dyZWVrLWV4dF9ncmVla19jeXJpbGxpYy1leHRfY3lyaWxsaWMgKi9cbkBmb250LWZhY2Uge1xuICAgIGZvbnQtd2VpZ2h0OiAzMDA7XG4gICAgZm9udC1mYW1pbHk6ICdSb2JvdG8nO1xuICAgIGZvbnQtc3R5bGU6IG5vcm1hbDtcbiAgICBmb250LWRpc3BsYXk6IHN3YXA7XG4gICAgc3JjOlxuICAgICAgICBsb2NhbCgnJyksXG4gICAgICAgIHVybCgnaHR0cHM6Ly9jZG4udmlhZm91cmEubmV0L2Zyb250L2Fzc2V0cy9mb250cy9yb2JvdG8vcm9ib3RvLTMwMC53b2ZmMicpIGZvcm1hdCgnd29mZjInKSAvKiBTdXBlciBNb2Rlcm4gQnJvd3NlcnMgKi8sXG4gICAgICAgIHVybCgnaHR0cHM6Ly9jZG4udmlhZm91cmEubmV0L2Zyb250L2Fzc2V0cy9mb250cy9yb2JvdG8vcm9ib3RvLTMwMC53b2ZmJykgZm9ybWF0KCd3b2ZmJykgLyogTW9kZXJuIEJyb3dzZXJzICovLFxuICAgICAgICB1cmwoJ2h0dHBzOi8vY2RuLnZpYWZvdXJhLm5ldC9mcm9udC9hc3NldHMvZm9udHMvcm9ib3RvL3JvYm90by0zMDAudHRmJykgZm9ybWF0KCd0cnVldHlwZScpIC8qIFNhZmFyaSwgQW5kcm9pZCwgaU9TICovLFxuICAgICAgICB1cmwoJ2h0dHBzOi8vY2RuLnZpYWZvdXJhLm5ldC9mcm9udC9hc3NldHMvZm9udHMvcm9ib3RvL3JvYm90by0zMDAuc3ZnI1JvYm90bycpIGZvcm1hdCgnc3ZnJykgLyogTGVnYWN5IGlPUyAqLztcbn1cblxuLyogcm9ib3RvLTMwMGl0YWxpYyAtIHZpZXRuYW1lc2VfbGF0aW4tZXh0X2xhdGluX2dyZWVrLWV4dF9ncmVla19jeXJpbGxpYy1leHRfY3lyaWxsaWMgKi9cbkBmb250LWZhY2Uge1xuICAgIGZvbnQtd2VpZ2h0OiAzMDA7XG4gICAgZm9udC1mYW1pbHk6ICdSb2JvdG8nO1xuICAgIGZvbnQtc3R5bGU6IGl0YWxpYztcbiAgICBmb250LWRpc3BsYXk6IHN3YXA7XG4gICAgc3JjOlxuICAgICAgICBsb2NhbCgnJyksXG4gICAgICAgIHVybCgnaHR0cHM6Ly9jZG4udmlhZm91cmEubmV0L2Zyb250L2Fzc2V0cy9mb250cy9yb2JvdG8vcm9ib3RvLTMwMGl0YWxpYy53b2ZmMicpIGZvcm1hdCgnd29mZjInKSAvKiBTdXBlciBNb2Rlcm4gQnJvd3NlcnMgKi8sXG4gICAgICAgIHVybCgnaHR0cHM6Ly9jZG4udmlhZm91cmEubmV0L2Zyb250L2Fzc2V0cy9mb250cy9yb2JvdG8vcm9ib3RvLTMwMGl0YWxpYy53b2ZmJykgZm9ybWF0KCd3b2ZmJykgLyogTW9kZXJuIEJyb3dzZXJzICovLFxuICAgICAgICB1cmwoJ2h0dHBzOi8vY2RuLnZpYWZvdXJhLm5ldC9mcm9udC9hc3NldHMvZm9udHMvcm9ib3RvL3JvYm90by0zMDBpdGFsaWMudHRmJykgZm9ybWF0KCd0cnVldHlwZScpIC8qIFNhZmFyaSwgQW5kcm9pZCwgaU9TICovLFxuICAgICAgICB1cmwoJ2h0dHBzOi8vY2RuLnZpYWZvdXJhLm5ldC9mcm9udC9hc3NldHMvZm9udHMvcm9ib3RvL3JvYm90by0zMDBpdGFsaWMuc3ZnI1JvYm90bycpIGZvcm1hdCgnc3ZnJykgLyogTGVnYWN5IGlPUyAqLztcbn1cblxuLyogcm9ib3RvLXJlZ3VsYXIgLSB2aWV0bmFtZXNlX2xhdGluLWV4dF9sYXRpbl9ncmVlay1leHRfZ3JlZWtfY3lyaWxsaWMtZXh0X2N5cmlsbGljICovXG5AZm9udC1mYWNlIHtcbiAgICBmb250LXdlaWdodDogNDAwO1xuICAgIGZvbnQtZmFtaWx5OiAnUm9ib3RvJztcbiAgICBmb250LXN0eWxlOiBub3JtYWw7XG4gICAgZm9udC1kaXNwbGF5OiBzd2FwO1xuICAgIHNyYzpcbiAgICAgICAgbG9jYWwoJycpLFxuICAgICAgICB1cmwoJ2h0dHBzOi8vY2RuLnZpYWZvdXJhLm5ldC9mcm9udC9hc3NldHMvZm9udHMvcm9ib3RvL3JvYm90by1yZWd1bGFyLndvZmYyJykgZm9ybWF0KCd3b2ZmMicpIC8qIFN1cGVyIE1vZGVybiBCcm93c2VycyAqLyxcbiAgICAgICAgdXJsKCdodHRwczovL2Nkbi52aWFmb3VyYS5uZXQvZnJvbnQvYXNzZXRzL2ZvbnRzL3JvYm90by9yb2JvdG8tcmVndWxhci53b2ZmJykgZm9ybWF0KCd3b2ZmJykgLyogTW9kZXJuIEJyb3dzZXJzICovLFxuICAgICAgICB1cmwoJ2h0dHBzOi8vY2RuLnZpYWZvdXJhLm5ldC9mcm9udC9hc3NldHMvZm9udHMvcm9ib3RvL3JvYm90by1yZWd1bGFyLnR0ZicpIGZvcm1hdCgndHJ1ZXR5cGUnKSAvKiBTYWZhcmksIEFuZHJvaWQsIGlPUyAqLyxcbiAgICAgICAgdXJsKCdodHRwczovL2Nkbi52aWFmb3VyYS5uZXQvZnJvbnQvYXNzZXRzL2ZvbnRzL3JvYm90by9yb2JvdG8tcmVndWxhci5zdmcjUm9ib3RvJykgZm9ybWF0KCdzdmcnKSAvKiBMZWdhY3kgaU9TICovO1xufVxuXG4vKiByb2JvdG8taXRhbGljIC0gdmlldG5hbWVzZV9sYXRpbi1leHRfbGF0aW5fZ3JlZWstZXh0X2dyZWVrX2N5cmlsbGljLWV4dF9jeXJpbGxpYyAqL1xuQGZvbnQtZmFjZSB7XG4gICAgZm9udC13ZWlnaHQ6IDQwMDtcbiAgICBmb250LWZhbWlseTogJ1JvYm90byc7XG4gICAgZm9udC1zdHlsZTogaXRhbGljO1xuICAgIGZvbnQtZGlzcGxheTogc3dhcDtcbiAgICBzcmM6XG4gICAgICAgIGxvY2FsKCcnKSxcbiAgICAgICAgdXJsKCdodHRwczovL2Nkbi52aWFmb3VyYS5uZXQvZnJvbnQvYXNzZXRzL2ZvbnRzL3JvYm90by9yb2JvdG8taXRhbGljLndvZmYyJykgZm9ybWF0KCd3b2ZmMicpIC8qIFN1cGVyIE1vZGVybiBCcm93c2VycyAqLyxcbiAgICAgICAgdXJsKCdodHRwczovL2Nkbi52aWFmb3VyYS5uZXQvZnJvbnQvYXNzZXRzL2ZvbnRzL3JvYm90by9yb2JvdG8taXRhbGljLndvZmYnKSBmb3JtYXQoJ3dvZmYnKSAvKiBNb2Rlcm4gQnJvd3NlcnMgKi8sXG4gICAgICAgIHVybCgnaHR0cHM6Ly9jZG4udmlhZm91cmEubmV0L2Zyb250L2Fzc2V0cy9mb250cy9yb2JvdG8vcm9ib3RvLWl0YWxpYy50dGYnKSBmb3JtYXQoJ3RydWV0eXBlJykgLyogU2FmYXJpLCBBbmRyb2lkLCBpT1MgKi8sXG4gICAgICAgIHVybCgnaHR0cHM6Ly9jZG4udmlhZm91cmEubmV0L2Zyb250L2Fzc2V0cy9mb250cy9yb2JvdG8vcm9ib3RvLWl0YWxpYy5zdmcjUm9ib3RvJykgZm9ybWF0KCdzdmcnKSAvKiBMZWdhY3kgaU9TICovO1xufVxuXG4vKiByb2JvdG8tNTAwIC0gdmlldG5hbWVzZV9sYXRpbi1leHRfbGF0aW5fZ3JlZWstZXh0X2dyZWVrX2N5cmlsbGljLWV4dF9jeXJpbGxpYyAqL1xuQGZvbnQtZmFjZSB7XG4gICAgZm9udC13ZWlnaHQ6IDUwMDtcbiAgICBmb250LWZhbWlseTogJ1JvYm90byc7XG4gICAgZm9udC1zdHlsZTogbm9ybWFsO1xuICAgIGZvbnQtZGlzcGxheTogc3dhcDtcbiAgICBzcmM6XG4gICAgICAgIGxvY2FsKCcnKSxcbiAgICAgICAgdXJsKCdodHRwczovL2Nkbi52aWFmb3VyYS5uZXQvZnJvbnQvYXNzZXRzL2ZvbnRzL3JvYm90by9yb2JvdG8tNTAwLndvZmYyJykgZm9ybWF0KCd3b2ZmMicpIC8qIFN1cGVyIE1vZGVybiBCcm93c2VycyAqLyxcbiAgICAgICAgdXJsKCdodHRwczovL2Nkbi52aWFmb3VyYS5uZXQvZnJvbnQvYXNzZXRzL2ZvbnRzL3JvYm90by9yb2JvdG8tNTAwLndvZmYnKSBmb3JtYXQoJ3dvZmYnKSAvKiBNb2Rlcm4gQnJvd3NlcnMgKi8sXG4gICAgICAgIHVybCgnaHR0cHM6Ly9jZG4udmlhZm91cmEubmV0L2Zyb250L2Fzc2V0cy9mb250cy9yb2JvdG8vcm9ib3RvLTUwMC50dGYnKSBmb3JtYXQoJ3RydWV0eXBlJykgLyogU2FmYXJpLCBBbmRyb2lkLCBpT1MgKi8sXG4gICAgICAgIHVybCgnaHR0cHM6Ly9jZG4udmlhZm91cmEubmV0L2Zyb250L2Fzc2V0cy9mb250cy9yb2JvdG8vcm9ib3RvLTUwMC5zdmcjUm9ib3RvJykgZm9ybWF0KCdzdmcnKSAvKiBMZWdhY3kgaU9TICovO1xufVxuXG4vKiByb2JvdG8tNTAwaXRhbGljIC0gdmlldG5hbWVzZV9sYXRpbi1leHRfbGF0aW5fZ3JlZWstZXh0X2dyZWVrX2N5cmlsbGljLWV4dF9jeXJpbGxpYyAqL1xuQGZvbnQtZmFjZSB7XG4gICAgZm9udC13ZWlnaHQ6IDUwMDtcbiAgICBmb250LWZhbWlseTogJ1JvYm90byc7XG4gICAgZm9udC1zdHlsZTogaXRhbGljO1xuICAgIGZvbnQtZGlzcGxheTogc3dhcDtcbiAgICBzcmM6XG4gICAgICAgIGxvY2FsKCcnKSxcbiAgICAgICAgdXJsKCdodHRwczovL2Nkbi52aWFmb3VyYS5uZXQvZnJvbnQvYXNzZXRzL2ZvbnRzL3JvYm90by9yb2JvdG8tNTAwaXRhbGljLndvZmYyJykgZm9ybWF0KCd3b2ZmMicpIC8qIFN1cGVyIE1vZGVybiBCcm93c2VycyAqLyxcbiAgICAgICAgdXJsKCdodHRwczovL2Nkbi52aWFmb3VyYS5uZXQvZnJvbnQvYXNzZXRzL2ZvbnRzL3JvYm90by9yb2JvdG8tNTAwaXRhbGljLndvZmYnKSBmb3JtYXQoJ3dvZmYnKSAvKiBNb2Rlcm4gQnJvd3NlcnMgKi8sXG4gICAgICAgIHVybCgnaHR0cHM6Ly9jZG4udmlhZm91cmEubmV0L2Zyb250L2Fzc2V0cy9mb250cy9yb2JvdG8vcm9ib3RvLTUwMGl0YWxpYy50dGYnKSBmb3JtYXQoJ3RydWV0eXBlJykgLyogU2FmYXJpLCBBbmRyb2lkLCBpT1MgKi8sXG4gICAgICAgIHVybCgnaHR0cHM6Ly9jZG4udmlhZm91cmEubmV0L2Zyb250L2Fzc2V0cy9mb250cy9yb2JvdG8vcm9ib3RvLTUwMGl0YWxpYy5zdmcjUm9ib3RvJykgZm9ybWF0KCdzdmcnKSAvKiBMZWdhY3kgaU9TICovO1xufVxuXG4vKiByb2JvdG8tNzAwIC0gdmlldG5hbWVzZV9sYXRpbi1leHRfbGF0aW5fZ3JlZWstZXh0X2dyZWVrX2N5cmlsbGljLWV4dF9jeXJpbGxpYyAqL1xuQGZvbnQtZmFjZSB7XG4gICAgZm9udC13ZWlnaHQ6IDcwMDtcbiAgICBmb250LWZhbWlseTogJ1JvYm90byc7XG4gICAgZm9udC1zdHlsZTogbm9ybWFsO1xuICAgIGZvbnQtZGlzcGxheTogc3dhcDtcbiAgICBzcmM6XG4gICAgICAgIGxvY2FsKCcnKSxcbiAgICAgICAgdXJsKCdodHRwczovL2Nkbi52aWFmb3VyYS5uZXQvZnJvbnQvYXNzZXRzL2ZvbnRzL3JvYm90by9yb2JvdG8tNzAwLndvZmYyJykgZm9ybWF0KCd3b2ZmMicpIC8qIFN1cGVyIE1vZGVybiBCcm93c2VycyAqLyxcbiAgICAgICAgdXJsKCdodHRwczovL2Nkbi52aWFmb3VyYS5uZXQvZnJvbnQvYXNzZXRzL2ZvbnRzL3JvYm90by9yb2JvdG8tNzAwLndvZmYnKSBmb3JtYXQoJ3dvZmYnKSAvKiBNb2Rlcm4gQnJvd3NlcnMgKi8sXG4gICAgICAgIHVybCgnaHR0cHM6Ly9jZG4udmlhZm91cmEubmV0L2Zyb250L2Fzc2V0cy9mb250cy9yb2JvdG8vcm9ib3RvLTcwMC50dGYnKSBmb3JtYXQoJ3RydWV0eXBlJykgLyogU2FmYXJpLCBBbmRyb2lkLCBpT1MgKi8sXG4gICAgICAgIHVybCgnaHR0cHM6Ly9jZG4udmlhZm91cmEubmV0L2Zyb250L2Fzc2V0cy9mb250cy9yb2JvdG8vcm9ib3RvLTcwMC5zdmcjUm9ib3RvJykgZm9ybWF0KCdzdmcnKSAvKiBMZWdhY3kgaU9TICovO1xufVxuXG4vKiByb2JvdG8tNzAwaXRhbGljIC0gdmlldG5hbWVzZV9sYXRpbi1leHRfbGF0aW5fZ3JlZWstZXh0X2dyZWVrX2N5cmlsbGljLWV4dF9jeXJpbGxpYyAqL1xuQGZvbnQtZmFjZSB7XG4gICAgZm9udC13ZWlnaHQ6IDcwMDtcbiAgICBmb250LWZhbWlseTogJ1JvYm90byc7XG4gICAgZm9udC1zdHlsZTogaXRhbGljO1xuICAgIGZvbnQtZGlzcGxheTogc3dhcDtcbiAgICBzcmM6XG4gICAgICAgIGxvY2FsKCcnKSxcbiAgICAgICAgdXJsKCdodHRwczovL2Nkbi52aWFmb3VyYS5uZXQvZnJvbnQvYXNzZXRzL2ZvbnRzL3JvYm90by9yb2JvdG8tNzAwaXRhbGljLndvZmYyJykgZm9ybWF0KCd3b2ZmMicpIC8qIFN1cGVyIE1vZGVybiBCcm93c2VycyAqLyxcbiAgICAgICAgdXJsKCdodHRwczovL2Nkbi52aWFmb3VyYS5uZXQvZnJvbnQvYXNzZXRzL2ZvbnRzL3JvYm90by9yb2JvdG8tNzAwaXRhbGljLndvZmYnKSBmb3JtYXQoJ3dvZmYnKSAvKiBNb2Rlcm4gQnJvd3NlcnMgKi8sXG4gICAgICAgIHVybCgnaHR0cHM6Ly9jZG4udmlhZm91cmEubmV0L2Zyb250L2Fzc2V0cy9mb250cy9yb2JvdG8vcm9ib3RvLTcwMGl0YWxpYy50dGYnKSBmb3JtYXQoJ3RydWV0eXBlJykgLyogU2FmYXJpLCBBbmRyb2lkLCBpT1MgKi8sXG4gICAgICAgIHVybCgnaHR0cHM6Ly9jZG4udmlhZm91cmEubmV0L2Zyb250L2Fzc2V0cy9mb250cy9yb2JvdG8vcm9ib3RvLTcwMGl0YWxpYy5zdmcjUm9ib3RvJykgZm9ybWF0KCdzdmcnKSAvKiBMZWdhY3kgaU9TICovO1xufVxuIiwiQGltcG9ydCAnLi4vdmFyaWFibGVzL21vZHVsZSc7XG5cbi8qXG5UeXBvZ3JhcGh5XG5cblRoZSBiYXNlIGZvbnQgZm9yIGFsbCB2aWFmb3VyYSB3aWRnZXRzIG90aGVyIHRoYW4gY29tbWVudCB0ZXh0IGlzIFJvYm90b1xuXG5NYXJrdXA6IDxzcGFuPlRoaXMgaXMgc29tZSB0ZXh0IGluIFJvYm90byBmb250Ljwvc3Bhbj5cblxuU3R5bGVndWlkZSBjc3MudHlwb2dyYXBoeVxuKi9cbi52aWFmb3VyYSxcbmJvZHkge1xuICAgIEBpbmNsdWRlIGRhcmstdGV4dCgkZGVmYXVsdC1wYWxldHRlKTtcbiAgICBAaW5jbHVkZSBmb250LWZhbWlseSgncHJpbWFyeS1mb250Jyk7XG5cbiAgICBmb250LXdlaWdodDogNDAwO1xuXG4gICAgLyoqXG4gICAgICogRXZlbnR1YWxseSB3ZSB3aWxsIHdhbnQgdG8gcmVtb3ZlIHRoaXMgbGluZSBhbmQgYmFzZSBhbGwgb2Ygb3VyIGZvbnQgc2l6ZXMgb2ZmIG9mIC0tYmFzZS1mb250LXNpemVcbiAgICAgKiBpbnN0ZWFkLiBUaGlzIHdpbGwgYWxsb3cgdXMgdG8gdXNlIHJlbXMgaW5zdGVhZCBvZiBwZXJjZW50YWdlcyBhbmQgZW1zLlxuICAgICAqL1xuICAgIGZvbnQtc2l6ZTogODcuNSU7IC8vIChERVBSRUNBVEVEKSB+MTRweCAodGhpcyBpcyBvdXIgXCJyb290XCIgdmFsdWUgc28sIHdlIGRvbid0IHVzZSB0aGUgbWFwIGZvciB0aGlzKVxuICAgIGxpbmUtaGVpZ2h0OiAxLjM7XG59XG5cbi8qXG5IZWFkaW5nc1xuXG5HZW5lcmFsbHksIGhlYWRlciA8c3Ryb25nPnRhZ3M8L3N0cm9uZz4gc2hvdWxkIGJlIHVzZWQgZm9yIHNlbWFudGljIG1lYW5pbmcgYW5kXG5oZWFkZXIgPHN0cm9uZz5jbGFzc2VzPC9zdHJvbmc+IGZvciBzdHlsZS4gSW4gc29tZSBjYXNlcyB0aGV5IGFyZSB0aGUgc2FtZSwgYW5kXG50aGUgY2xhc3MgbWF5IGJlIG9taXR0ZWQuXG5cbk1hcmt1cDogPGgxIGNsYXNzPVwie3ttb2RpZmllcl9jbGFzc319XCI+VGhpcyBpcyBhbiB7e21vZGlmaWVyX2NsYXNzfX08L2gxPlxuXG4uaDEgLSBhIHByaW1hcnkgaGVhZGVyXG4uaDIgLSBhIHNlY29uZGFyeSBoZWFkZXJcbi5oMyAtIGEgdGVybmFyeSBoZWFkZXJcbi5oNCAtIGEgcXVhdGVybmFyeSBoZWFkZXJcbi5oNSAtIGEgcXVpbmFyeSBoZWFkZXJcbi5oNiAtIGEgc2VuYXJ5IGhlYWRlclxuXG5TdHlsZWd1aWRlIGNzcy50eXBvZ3JhcGh5LmhlYWRpbmdzXG4qL1xuaDEsXG4uaDEsXG5oMixcbi5oMixcbmgzLFxuLmgzLFxuaDQsXG4uaDQsXG5oNSxcbi5oNSxcbmg2LFxuLmg2IHtcbiAgICBmb250LXdlaWdodDogNDAwO1xufVxuXG5oMSxcbi5oMSB7XG4gICAgZm9udC1zaXplOiAyLjg2ZW07IC8vIH40MHB4XG59XG5cbmgyLFxuLmgyIHtcbiAgICBmb250LXNpemU6IDIuM2VtOyAvLyB+MzJweFxufVxuXG5oMyxcbi5oMyB7XG4gICAgZm9udC13ZWlnaHQ6IDMwMDtcbiAgICBmb250LXNpemU6IDEuNDNlbTsgLy8gfjIwcHhcbn1cblxuaDQsXG4uaDQge1xuICAgIGZvbnQtc2l6ZTogbWFwLWdldCgkZm9udC1zaXplcywgbGFyZ2UpOyAvLyB+MTZweFxufVxuXG5oNSxcbi5oNSxcbmg2LFxuLmg2IHtcbiAgICBmb250LXNpemU6IG1hcC1nZXQoJGZvbnQtc2l6ZXMsIHJlZ3VsYXIpO1xufVxuXG4vKlxuTG9uZyBmb3JtIHRleHRcblxuTWFya3VwOiA8ZGl2IGNsYXNzPVwidmYtY29udGVudFwiPkxvcmVtIGlwc3VtIGRvbG9yIHNpdCBhbWV0LCBjb25zZWN0ZXR1clxuYWRpcGlzY2luZyBlbGl0LiBWaXZhbXVzIGlhY3VsaXMgc2FnaXR0aXMgaW50ZXJkdW0uIFNlZCBwaGFyZXRyYSBhdCBsZWN0dXNcbmRpZ25pc3NpbSBldWlzbW9kLiBVdCBlbGVtZW50dW0gZ3JhdmlkYSBsYWNpbmlhLjwvcD48L2Rpdj5cblxuU3R5bGVndWlkZSBjc3MudHlwb2dyYXBoeS5jb21tZW50c1xuKi9cbi52Zi1jb21tZW50LWh0bWwsIC8vIFRPRE86IGRlcHJlY2F0ZSB2Zi1jb21tZW50LWh0bWxcbi52Zi1jb250ZW50IHtcbiAgICBsaW5lLWhlaWdodDogMS44O1xufVxuXG4vKlxuU21hbGwgdGV4dFxuXG5NYXJrdXA6IDxkaXYgY2xhc3M9XCJ2Zi10ZXh0LXNtYWxsXCI+TG9yZW0gaXBzdW0gZG9sb3Igc2l0IGFtZXQsIGNvbnNlY3RldHVyXG5hZGlwaXNjaW5nIGVsaXQuIFZpdmFtdXMgaWFjdWxpcyBzYWdpdHRpcyBpbnRlcmR1bS4gU2VkIHBoYXJldHJhIGF0IGxlY3R1c1xuZGlnbmlzc2ltIGV1aXNtb2QuIFV0IGVsZW1lbnR1bSBncmF2aWRhIGxhY2luaWEuPC9wPjwvZGl2PlxuXG5TdHlsZWd1aWRlIGNzcy50eXBvZ3JhcGh5LnNtYWxsX3RleHRcbiovXG4udmYtdGV4dC1zbWFsbCB7XG4gICAgZm9udC1zaXplOiBtYXAtZ2V0KCRmb250LXNpemVzLCBzbWFsbCk7IC8vIH4xMnB4XG59XG5cbi8qXG5FbXBoYXNpc1xuXG5NYXJrdXA6IDxlbT5Mb3JlbSBpcHN1bSBkb2xvciBzaXQgYW1ldCwgY29uc2VjdGV0dXJcbmFkaXBpc2NpbmcgZWxpdC4gVml2YW11cyBpYWN1bGlzIHNhZ2l0dGlzIGludGVyZHVtLiBTZWQgcGhhcmV0cmEgYXQgbGVjdHVzXG5kaWduaXNzaW0gZXVpc21vZC4gVXQgZWxlbWVudHVtIGdyYXZpZGEgbGFjaW5pYS48L2VtPlxuXG5TdHlsZWd1aWRlIGNzcy50eXBvZ3JhcGh5LmVtcGhhc2lzXG4qL1xuZW0ge1xuICAgIGZvbnQtd2VpZ2h0OiA2MDA7XG4gICAgZm9udC1zdHlsZTogbm9ybWFsO1xufVxuXG4vKlxuU3Ryb25nXG5cbk1hcmt1cDogPHN0cm9uZz5Mb3JlbSBpcHN1bSBkb2xvciBzaXQgYW1ldCwgY29uc2VjdGV0dXJcbmFkaXBpc2NpbmcgZWxpdC4gVml2YW11cyBpYWN1bGlzIHNhZ2l0dGlzIGludGVyZHVtLiBTZWQgcGhhcmV0cmEgYXQgbGVjdHVzXG5kaWduaXNzaW0gZXVpc21vZC4gVXQgZWxlbWVudHVtIGdyYXZpZGEgbGFjaW5pYS48L3N0cm9uZz5cblxuU3R5bGVndWlkZSBjc3MudHlwb2dyYXBoeS5zdHJvbmdcbiovXG5zdHJvbmcsXG4udmYtc3Ryb25nIHtcbiAgICB0ZXh0LXRyYW5zZm9ybTogdXBwZXJjYXNlO1xufVxuXG4vKlxuRW1waGFzaXNcblxuTWFya3VwOiA8ZGl2IGNsYXNzPVwidmYtZW1waFwiPkxvcmVtIGlwc3VtIGRvbG9yIHNpdCBhbWV0LCBjb25zZWN0ZXR1clxuYWRpcGlzY2luZyBlbGl0LiBWaXZhbXVzIGlhY3VsaXMgc2FnaXR0aXMgaW50ZXJkdW0uIFNlZCBwaGFyZXRyYSBhdCBsZWN0dXNcbmRpZ25pc3NpbSBldWlzbW9kLiBVdCBlbGVtZW50dW0gZ3JhdmlkYSBsYWNpbmlhLjwvZGl2PlxuXG5TdHlsZWd1aWRlIGNzcy50eXBvZ3JhcGh5LmVtcGhcbiovXG4udmYtZW1waCB7XG4gICAgZm9udC1zdHlsZTogaXRhbGljO1xufVxuXG4vKlxuTGFiZWxcblxuTWFya3VwOiA8c3BhbiBjbGFzcz1cInZmLWxhYmVsIHt7bW9kaWZpZXJfY2xhc3N9fVwiPldobyBkbyB5b3UgdGhpbmsgeW91IGFyZT88L3NwYW4+XG5cbi52Zi1sYWJlbC11cHBlciAtIHVwcGVyY2FzZSBsYWJlbFxuXG5TdHlsZWd1aWRlIGNzcy50eXBvZ3JhcGh5LmxhYmVsXG4qL1xuLnZmLWxhYmVsIHtcbiAgICBmb250LXNpemU6IG1hcC1nZXQoJGZvbnQtc2l6ZXMsIHRpbnkpOyAvLyB+MTBweFxuICAgICYudmYtbGFiZWwtdXBwZXIge1xuICAgICAgICB0ZXh0LXRyYW5zZm9ybTogdXBwZXJjYXNlO1xuICAgIH1cblxuICAgICYudmYtbGFiZWwtaGVhdnkge1xuICAgICAgICBmb250LXdlaWdodDogOTAwO1xuICAgIH1cbn1cblxuJXgtbGFyZ2UtZm9udCB7XG4gICAgQGluY2x1ZGUgZm9udC1zaXplKCd4LWxhcmdlLWZvbnQnLCAneC1sYXJnZS1tb2JpbGUtZm9udCcpO1xufVxuXG4lbGFyZ2UtZm9udCB7XG4gICAgQGluY2x1ZGUgZm9udC1zaXplKCdsYXJnZS1mb250JywgJ2xhcmdlLW1vYmlsZS1mb250Jyk7XG59XG5cbiVtZWRpdW0tZm9udCB7XG4gICAgQGluY2x1ZGUgZm9udC1zaXplKCdtZWRpdW0tZm9udCcsICdtZWRpdW0tbW9iaWxlLWZvbnQnKTtcbn1cblxuJXNtYWxsLWZvbnQge1xuICAgIEBpbmNsdWRlIGZvbnQtc2l6ZSgnc21hbGwtZm9udCcsICdzbWFsbC1tb2JpbGUtZm9udCcpO1xufVxuXG4leC1zbWFsbC1mb250IHtcbiAgICBAaW5jbHVkZSBmb250LXNpemUoJ3gtc21hbGwtZm9udCcsICd4LXNtYWxsLW1vYmlsZS1mb250Jyk7XG59XG5cbiVib2R5LWZvbnQge1xuICAgIEBpbmNsdWRlIGZvbnQtc2l6ZSgnYm9keS1mb250Jyk7XG59XG5cbi52Zi1oZWFkaW5nLXRleHQge1xuICAgIEBleHRlbmQgJXgtbGFyZ2UtZm9udDtcbn1cblxuLnZmLXN1YmhlYWRpbmctdGV4dCB7XG4gICAgQGV4dGVuZCAlbGFyZ2UtZm9udDtcbn1cblxuLnZmLXByaW1hcnktdGV4dCB7XG4gICAgQGV4dGVuZCAlbWVkaXVtLWZvbnQ7XG59XG5cbi52Zi1zZWNvbmRhcnktdGV4dCB7XG4gICAgQGV4dGVuZCAlc21hbGwtZm9udDtcbn1cblxuLnZmLWxhYmVsLXRleHQge1xuICAgIEBleHRlbmQgJXgtc21hbGwtZm9udDtcblxuICAgIHRleHQtdHJhbnNmb3JtOiB1cHBlcmNhc2U7XG5cbiAgICAmLS1kZWZhdWx0LWNhc2Uge1xuICAgICAgICB0ZXh0LXRyYW5zZm9ybTogbm9uZTtcbiAgICB9XG59XG5cbi8qKlxuICogVGhlIGJlbG93IGNsYXNzIGlzIGRlcHJlY2F0ZWQgYW5kIHNob3VsZCBub3QgYmUgdXNlZCBhbnl3aGVyZS4gVGhpcyBzaG91bGQgZXZlbnR1YWxseSBiZSByZW1vdmVkXG4gKiBpbiBmYXZvdXIgb2YgcGxhY2luZyB0aGlzIHZhbHVlIGluIHRoZSAudmlhZm91cmEsIGJvZHkge30gc3R5bGUgdG8gcmVwbGFjZSBmb250LXNpemU6IDg3LjUlLlxuICogRXZlbnR1YWxseSB3ZSB3aWxsIG1vdmUgYXdheSBmcm9tIGEgYm9keSBmb250IGFsdG9nZXRoZXIgYW5kIHVzZSB0aGUgLS1iYXNlLWZvbnQtc2l6ZSBpbnN0ZWFkLlxuICovXG4udmYtYm9keS10ZXh0LS1kZXByZWNhdGVkIHtcbiAgICBAZXh0ZW5kICVib2R5LWZvbnQ7XG59XG4iLCIkY2xpZW50LWZvbnQtZmFtaWxpZXM6IChcbiAgICBwcmltYXJ5LWZvbnQ6ICN7Um9ib3RvLCBzYW5zLXNlcmlmfSxcbik7XG5cbkBtaXhpbiBmb250LWZhbWlseSgkbmFtZSkge1xuICAgIGZvbnQtZmFtaWx5OiBtYXAtZ2V0KCRjbGllbnQtZm9udC1mYW1pbGllcywgJG5hbWUpO1xuICAgIGZvbnQtZmFtaWx5OiB2YXIoLS0jeyRuYW1lfSwgbWFwLWdldCgkY2xpZW50LWZvbnQtZmFtaWxpZXMsICRuYW1lKSk7XG59XG5cbi8vIFZhbHVlIHVzZWQgd2hlcmUgQ1NTIHZhcnMgYXJlbid0IHN1cHBvcnRlZFxuJGZhbGxiYWNrLWJhc2UtZm9udC1zaXplOiAxMHB4O1xuJGNsaWVudC1mb250LXNpemVzOiAoXG4gICAgYmFzZS1mb250LXNpemU6IDAuNjI1cmVtLCAvLyAxMHB4XG5cbiAgICBib2R5LWZvbnQ6IDEuNCwgICAgICAgICAgIC8vIChERVBSRUNBVEVEKSAxNHB4XG5cbiAgICB4LWxhcmdlLWZvbnQ6IDMuMiwgICAgICAgIC8vIDMycHhcbiAgICBsYXJnZS1mb250OiAyLCAgICAgICAgICAgIC8vIDIwcHhcbiAgICBtZWRpdW0tZm9udDogMS41LCAgICAgICAgIC8vIDE1cHhcbiAgICBzbWFsbC1mb250OiAxLjIsICAgICAgICAgIC8vIDEycHhcbiAgICB4LXNtYWxsLWZvbnQ6IDEsICAgICAgICAgIC8vIDEwcHhcblxuICAgIHgtbGFyZ2UtbW9iaWxlLWZvbnQ6IDIuNSwgLy8gMjVweFxuICAgIGxhcmdlLW1vYmlsZS1mb250OiAyLCAgICAgLy8gMjBweFxuICAgIG1lZGl1bS1tb2JpbGUtZm9udDogMS40LCAgLy8gMTRweFxuICAgIHNtYWxsLW1vYmlsZS1mb250OiAxLjIsICAgLy8gMTJweFxuICAgIHgtc21hbGwtbW9iaWxlLWZvbnQ6IDEsICAgLy8gMTBweFxuKTtcblxuQG1peGluIGZvbnQtc2l6ZSgkbmFtZSwgJG1vYmlsZS1uYW1lOiAnJykge1xuICAgIGZvbnQtc2l6ZTpcbiAgICAgICAgY2FsYyhcbiAgICAgICAgICAgIHZhcihcbiAgICAgICAgICAgICAgICAtLWJhc2UtZm9udC1zaXplLFxuICAgICAgICAgICAgICAgICN7bWFwLWdldCgkY2xpZW50LWZvbnQtc2l6ZXMsICdiYXNlLWZvbnQtc2l6ZScpfVxuICAgICAgICAgICAgKSAqIHZhcihcbiAgICAgICAgICAgICAgICAtLSN7JG5hbWV9LFxuICAgICAgICAgICAgICAgICN7bWFwLWdldCgkY2xpZW50LWZvbnQtc2l6ZXMsICRuYW1lKX1cbiAgICAgICAgICAgIClcbiAgICAgICAgKTtcblxuICAgIEBpZiAkbW9iaWxlLW5hbWUgIT0gJycge1xuICAgICAgICBAbWVkaWEgb25seSBzY3JlZW4gYW5kIChtYXgtd2lkdGg6IDY0MHB4KSB7XG4gICAgICAgICAgICBmb250LXNpemU6XG4gICAgICAgICAgICAgICAgY2FsYyhcbiAgICAgICAgICAgICAgICAgICAgdmFyKFxuICAgICAgICAgICAgICAgICAgICAgICAgLS1iYXNlLWZvbnQtc2l6ZSxcbiAgICAgICAgICAgICAgICAgICAgICAgICN7bWFwLWdldCgkY2xpZW50LWZvbnQtc2l6ZXMsICdiYXNlLWZvbnQtc2l6ZScpfVxuICAgICAgICAgICAgICAgICAgICApICogdmFyKFxuICAgICAgICAgICAgICAgICAgICAgICAgLS0jeyRtb2JpbGUtbmFtZX0sXG4gICAgICAgICAgICAgICAgICAgICAgICAje21hcC1nZXQoJGNsaWVudC1mb250LXNpemVzLCAkbW9iaWxlLW5hbWUpfVxuICAgICAgICAgICAgICAgICAgICApXG4gICAgICAgICAgICAgICAgKTtcbiAgICAgICAgfVxuICAgIH1cbn1cblxuLy8gc3R5bGVsaW50LWRpc2FibGUtbmV4dC1saW5lIHNjc3MvYXQtZnVuY3Rpb24tcGF0dGVyblxuQGZ1bmN0aW9uIHJlbV9jYWxjKCR0YXJnZXRWYWx1ZSkge1xuICAgIEByZXR1cm4gY2FsYygjeyR0YXJnZXRWYWx1ZX0gKiB2YXIoLS1iYXNlLWZvbnQtc2l6ZSwgI3ttYXAtZ2V0KCRjbGllbnQtZm9udC1zaXplcywgJ2Jhc2UtZm9udC1zaXplJyl9KSk7XG59XG5cbi8qKlxuICogQ29udmVydHMgYW55IHVuaXRsZXNzIHZhbHVlcyB0byByZW0gd2l0aCBjYWxjLCBhbmQgb3V0cHV0cyBib3RoIGEgY2FsYyByZW1cbiAqIHZhbHVlIGFuZCBhIHBpeGVsIHZhbHVlOlxuICpcbiAqIGVnOlxuICogQGluY2x1ZGUgcmVtKGJvcmRlciwgMSBzb2xpZCByZWQpO1xuICpcbiAqIG91dHB1dDpcbiAqIGJvcmRlcjogMTBweCBzb2xpZCByZWQ7XG4gKiBib3JkZXI6IGNhbGMoMSAqIHZhcigtLWJhc2UtZm9udC1zaXplLCAwLjYyNXJlbSkpIHNvbGlkIHJlZDtcbiAqL1xuQG1peGluIHJlbSgkcHJvcGVydHksICR2YWx1ZXMpIHtcbiAgICAvLyBDcmVhdGUgYSBjb3VwbGUgb2YgZW1wdHkgbGlzdHMgYXMgb3V0cHV0IGJ1ZmZlcnMuXG4gICAgJHB4LXZhbHVlczogKCk7XG4gICAgJHJlbS12YWx1ZXM6ICgpO1xuXG4gICAgLy8gTG9vcCB0aHJvdWdoIHRoZSAkdmFsdWVzIGxpc3RcbiAgICBAZWFjaCAkdmFsdWUgaW4gJHZhbHVlcyB7XG4gICAgICAgIEBpZiAkdmFsdWUgPT0gMCB7XG4gICAgICAgICAgICAvLyAwIC0tIHVzZSBpdCB3aXRob3V0IGEgdW5pdFxuICAgICAgICAgICAgJHB4LXZhbHVlczogam9pbigkcHgtdmFsdWVzLCAwKTtcbiAgICAgICAgICAgICRyZW0tdmFsdWVzOiBqb2luKCRyZW0tdmFsdWVzLCAwKTtcbiAgICAgICAgfSBAZWxzZSBpZiB0eXBlLW9mKCR2YWx1ZSkgPT0gbnVtYmVyIGFuZCB1bml0bGVzcygkdmFsdWUpIHtcbiAgICAgICAgICAgIC8vIHVuaXRsZXNzIHZhbHVlIC0gdXNlIHRob3NlIGRpcmVjdGx5IGFzIHJlbSBhbmQgY2FsY3VsYXRlIHRoZSBweC1mYWxsYmFja1xuICAgICAgICAgICAgJHB4LXZhbHVlczogam9pbigkcHgtdmFsdWVzLCAjeyR2YWx1ZSAqICRmYWxsYmFjay1iYXNlLWZvbnQtc2l6ZX0pO1xuICAgICAgICAgICAgJHJlbS12YWx1ZXM6IGpvaW4oJHJlbS12YWx1ZXMsIHJlbV9jYWxjKCR2YWx1ZSkpO1xuICAgICAgICB9IEBlbHNlIHtcbiAgICAgICAgICAgIC8vIHVuaXRsZXNzIHZhbHVlIC0gdXNlIHRob3NlIGRpcmVjdGx5IGFzIHJlbSBhbmQgY2FsY3VsYXRlIHRoZSBweC1mYWxsYmFja1xuICAgICAgICAgICAgJHB4LXZhbHVlczogam9pbigkcHgtdmFsdWVzLCAkdmFsdWUpO1xuICAgICAgICAgICAgJHJlbS12YWx1ZXM6IGpvaW4oJHJlbS12YWx1ZXMsICR2YWx1ZSk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvLyBvdXRwdXQgdGhlIGNvbnZlcnRlZCBydWxlc1xuICAgICN7JHByb3BlcnR5fTogJHB4LXZhbHVlcztcbiAgICAjeyRwcm9wZXJ0eX06ICRyZW0tdmFsdWVzO1xufVxuXG4kZm9udC1zaXplczogKFxuICAgIGh1Z2U6IDEuNDNlbSwgLy8gfjIwcHhcbiAgICBsYXJnZTogMS4xNGVtLCAvLyB+MTZweFxuICAgIHJlZ3VsYXI6IDFlbSwgLy8gfjE0cHhcbiAgICBzbWFsbDogMC44NTdlbSwgLy8gfjEycHhcbiAgICB0aW55OiAwLjcxNWVtLCAvLyB+MTBweFxuICAgIG1pbmk6IDAuNjg4ZW0sIC8vIH45LjVweFxuICAgIG1pY3JvOiAwLjYyNWVtLCAvLyB+OXB4XG4gICAgbmFubzogMC41NjNlbSwgLy8gfjguNXB4XG4pICFkZWZhdWx0O1xuIiwiJHByb3BlcnRpZXM6IChcbiAgICAnbWFyZ2luJyxcbiAgICAnbWFyZ2luLXRvcCcsXG4gICAgJ21hcmdpbi1yaWdodCcsXG4gICAgJ21hcmdpbi1ib3R0b20nLFxuICAgICdtYXJnaW4tbGVmdCcsXG4gICAgJ3BhZGRpbmcnLFxuICAgICdwYWRkaW5nLXRvcCcsXG4gICAgJ3BhZGRpbmctcmlnaHQnLFxuICAgICdwYWRkaW5nLWJvdHRvbScsXG4gICAgJ3BhZGRpbmctbGVmdCcsXG4gICAgJ2dyaWQtZ2FwJyxcbiAgICAnYm9yZGVyLXNwYWNpbmcnLFxuKTtcbiRnYXAtcHJvcGVydGllczogKFxuICAgICd2ZXJ0aWNhbC1tYXJnaW4nOiAnbWFyZ2luLXRvcCcsXG4gICAgJ3ZlcnRpY2FsLXBhZGRpbmcnOiAncGFkZGluZy10b3AnLFxuICAgICdob3Jpem9udGFsLW1hcmdpbic6ICdtYXJnaW4tbGVmdCcsXG4gICAgJ2hvcml6b250YWwtcGFkZGluZyc6ICdwYWRkaW5nLWxlZnQnLFxuKTtcblxuQGVhY2ggJHNwYWNpbmcsICRfIGluICRzcGFjaW5nLXNjYWxlIHtcbiAgICBAZWFjaCAkcHJvcGVydHkgaW4gJHByb3BlcnRpZXMge1xuICAgICAgICAudmYtI3skc3BhY2luZ30tI3skcHJvcGVydHl9IHtcbiAgICAgICAgICAgIEBpbmNsdWRlIHNwYWNpbmcoJHByb3BlcnR5LCAkc3BhY2luZyk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBAZWFjaCAkbmFtZSwgJHByb3BlcnR5IGluICRnYXAtcHJvcGVydGllcyB7XG4gICAgICAgIC52Zi0jeyRzcGFjaW5nfS0jeyRuYW1lfS1nYXAgPiAqICsgKiB7XG4gICAgICAgICAgICBAaW5jbHVkZSBzcGFjaW5nKCRwcm9wZXJ0eSwgJHNwYWNpbmcpO1xuICAgICAgICB9XG4gICAgfVxufVxuIiwiLy8gVmFsdWVzIHdpbGwgYmUgbXVsdGlwbGllZCBieSB0aGUgYmFzZS1mb250LXNpemUgd2hpY2ggd2UgYXNzdW1lIHdpbGwgYmUgMTBweFxuJGNsaWVudC1zcGFjaW5nLWludGVydmFsczogKFxuICAgIGJhc2Utc3BhY2UtaW50ZXJ2YWw6IDAuNSxcbiAgICBiYXNlLW1vYmlsZS1zcGFjZS1pbnRlcnZhbDogMC40LFxuKTtcblxuLy8gVGhlIHZhbHVlIG9mIGVhY2ggaXRlbSBpbiB0aGUgbWFwIHdpbGwgbXVsdGlwbHkgdGhlIGJhc2UtKG1vYmlsZSktc3BhY2UtaW50ZXJ2YWwgdmFsdWUgYW5kIHRoZW5cbi8vIG11bHRpcGx5IHRoZSBiYXNlLWZvbnQtc2l6ZSB2YWx1ZSB3aGljaCBpcyBob3cgd2UgZW5kIHVwIHdpdGggdGhlIHBpeGVsIHZhbHVlc1xuJHNwYWNpbmctc2NhbGU6IChcbiAgICB4eC10aWdodDogMSxcbiAgICB4LXRpZ2h0OiAyLFxuICAgIHRpZ2h0OiAzLFxuICAgIG5vcm1hbDogNCxcbiAgICBsb29zZTogNSxcbiAgICB4LWxvb3NlOiA2LFxuICAgIHh4LWxvb3NlOiA3LFxuKTtcblxuQGZ1bmN0aW9uIHNwYWNpbmctcHgtY2FsYygkbXVsdGlwbGllcikge1xuICAgIEByZXR1cm4gI3skbXVsdGlwbGllciAqIG1hcC1nZXQoJGNsaWVudC1zcGFjaW5nLWludGVydmFscywgJ2Jhc2Utc3BhY2UtaW50ZXJ2YWwnKSAqICRmYWxsYmFjay1iYXNlLWZvbnQtc2l6ZX07XG59XG5cbkBmdW5jdGlvbiBtb2JpbGUtc3BhY2luZy1weC1jYWxjKCRtdWx0aXBsaWVyKSB7XG4gICAgQHJldHVybiAjeyRtdWx0aXBsaWVyICogbWFwLWdldChcbiAgICAgICAgJGNsaWVudC1zcGFjaW5nLWludGVydmFscyxcbiAgICAgICAgJ2Jhc2UtbW9iaWxlLXNwYWNlLWludGVydmFsJ1xuICAgICkgKiAkZmFsbGJhY2stYmFzZS1mb250LXNpemV9O1xufVxuXG5AZnVuY3Rpb24gc3BhY2luZy1yZW0tY2FsYygkbXVsdGlwbGllcikge1xuICAgIEByZXR1cm4gY2FsYyhcbiAgICAgICAgI3skbXVsdGlwbGllcn0gKiB2YXIoXG4gICAgICAgICAgICAtLWJhc2Utc3BhY2UtaW50ZXJ2YWwsXG4gICAgICAgICAgICAje21hcC1nZXQoJGNsaWVudC1zcGFjaW5nLWludGVydmFscywgJ2Jhc2Utc3BhY2UtaW50ZXJ2YWwnKX1cbiAgICAgICAgKSAqIHZhcihcbiAgICAgICAgICAgIC0tYmFzZS1mb250LXNpemUsXG4gICAgICAgICAgICAje21hcC1nZXQoJGNsaWVudC1mb250LXNpemVzLCAnYmFzZS1mb250LXNpemUnKX1cbiAgICAgICAgKVxuICAgICk7XG59XG5cbkBmdW5jdGlvbiBtb2JpbGUtc3BhY2luZy1yZW0tY2FsYygkbXVsdGlwbGllcikge1xuICAgIEByZXR1cm4gY2FsYyhcbiAgICAgICAgI3skbXVsdGlwbGllcn0gKiB2YXIoXG4gICAgICAgICAgICAtLWJhc2UtbW9iaWxlLXNwYWNlLWludGVydmFsLFxuICAgICAgICAgICAgI3ttYXAtZ2V0KCRjbGllbnQtc3BhY2luZy1pbnRlcnZhbHMsICdiYXNlLW1vYmlsZS1zcGFjZS1pbnRlcnZhbCcpfVxuICAgICAgICApICogdmFyKFxuICAgICAgICAgICAgLS1iYXNlLWZvbnQtc2l6ZSxcbiAgICAgICAgICAgICN7bWFwLWdldCgkY2xpZW50LWZvbnQtc2l6ZXMsICdiYXNlLWZvbnQtc2l6ZScpfVxuICAgICAgICApXG4gICAgKTtcbn1cblxuLyoqXG4gKiBDb252ZXJ0cyBhbnkgc3BhY2luZyB0byByZW0gd2l0aCBjYWxjLCBhbmQgb3V0cHV0cyBib3RoIGEgY2FsYyByZW0gdmFsdWUgYW5kIGEgcGl4ZWwgdmFsdWUgd2l0aFxuICogYSBtb2JpbGUgc2V0IGJhc2VkIG9uIGEgYnJlYWtwb2ludDpcbiAqXG4gKiBlZzpcbiAqIEBpbmNsdWRlIHNwYWNpbmcocGFkZGluZywgMCAneC10aWdodCcpO1xuICpcbiAqIG91dHB1dDpcbiAqIHBhZGRpbmc6IDAgMTBweDtcbiAqIHBhZGRpbmc6IDAgY2FsYygyICogdmFyKC0tYmFzZS1zcGFjZS1pbnRlcnZhbCwgMC41KSAqIHZhcigtLWJhc2UtZm9udC1zaXplLCAwLjYyNXJlbSkpO1xuICovXG5AbWl4aW4gc3BhY2luZygkcHJvcGVydHksICR2YWx1ZXMpIHtcbiAgICAvLyBDcmVhdGUgYSBjb3VwbGUgb2YgZW1wdHkgbGlzdHMgYXMgb3V0cHV0IGJ1ZmZlcnMuXG4gICAgJHB4LXZhbHVlczogKCk7XG4gICAgJHJlbS12YWx1ZXM6ICgpO1xuICAgICRweC1tb2JpbGUtdmFsdWVzOiAoKTtcbiAgICAkcmVtLW1vYmlsZS12YWx1ZXM6ICgpO1xuXG4gICAgQGVhY2ggJHZhbHVlIGluICR2YWx1ZXMge1xuICAgICAgICAvLyBzdHlsZWxpbnQtZGlzYWJsZS1uZXh0LWxpbmUgc2Nzcy9hdC1pZi1uby1udWxsXG4gICAgICAgIEBpZiB0eXBlLW9mKCR2YWx1ZSkgPT0gc3RyaW5nIGFuZCBtYXAtZ2V0KCRzcGFjaW5nLXNjYWxlLCAkdmFsdWUpICE9IG51bGwge1xuICAgICAgICAgICAgLy8gc3BhY2luZyB2YWx1ZSAtIGZpbmQgbXVsdGlwbGllciBpbiBzcGFjaW5nIHNjYWxlIGFuZCBjcmVhdGUgcHggYW5kIHJlbSB2YWx1ZXNcbiAgICAgICAgICAgICRtdWx0aXBsaWVyOiBtYXAtZ2V0KCRzcGFjaW5nLXNjYWxlLCAkdmFsdWUpO1xuICAgICAgICAgICAgJHB4LXZhbHVlczogam9pbigkcHgtdmFsdWVzLCBzcGFjaW5nLXB4LWNhbGMoJG11bHRpcGxpZXIpKTtcbiAgICAgICAgICAgICRyZW0tdmFsdWVzOiBqb2luKCRyZW0tdmFsdWVzLCBzcGFjaW5nLXJlbS1jYWxjKCRtdWx0aXBsaWVyKSk7XG4gICAgICAgICAgICAkcHgtbW9iaWxlLXZhbHVlczogam9pbigkcHgtbW9iaWxlLXZhbHVlcywgbW9iaWxlLXNwYWNpbmctcHgtY2FsYygkbXVsdGlwbGllcikpO1xuICAgICAgICAgICAgJHJlbS1tb2JpbGUtdmFsdWVzOiBqb2luKCRyZW0tbW9iaWxlLXZhbHVlcywgbW9iaWxlLXNwYWNpbmctcmVtLWNhbGMoJG11bHRpcGxpZXIpKTtcbiAgICAgICAgfSBAZWxzZSB7XG4gICAgICAgICAgICAvLyBvdGhlciB2YWx1ZSAtIHVzZSBkaXJlY3RseVxuICAgICAgICAgICAgJHB4LXZhbHVlczogam9pbigkcHgtdmFsdWVzLCAkdmFsdWUpO1xuICAgICAgICAgICAgJHJlbS12YWx1ZXM6IGpvaW4oJHJlbS12YWx1ZXMsICR2YWx1ZSk7XG4gICAgICAgICAgICAkcHgtbW9iaWxlLXZhbHVlczogam9pbigkcHgtbW9iaWxlLXZhbHVlcywgJHZhbHVlKTtcbiAgICAgICAgICAgICRyZW0tbW9iaWxlLXZhbHVlczogam9pbigkcmVtLW1vYmlsZS12YWx1ZXMsICR2YWx1ZSk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAjeyRwcm9wZXJ0eX06ICRweC12YWx1ZXM7XG4gICAgI3skcHJvcGVydHl9OiAkcmVtLXZhbHVlcztcblxuICAgIEBtZWRpYSBvbmx5IHNjcmVlbiBhbmQgKG1heC13aWR0aDogNjQwcHgpIHtcbiAgICAgICAgI3skcHJvcGVydHl9OiAkcHgtbW9iaWxlLXZhbHVlcztcbiAgICAgICAgI3skcHJvcGVydHl9OiAkcmVtLW1vYmlsZS12YWx1ZXM7XG4gICAgfVxufVxuIiwiLnZpYWZvdXJhIHtcbiAgICAudmYtbW9kYWwge1xuICAgICAgICBwb3NpdGlvbjogZml4ZWQ7XG4gICAgICAgIHRvcDogMjUlO1xuICAgICAgICBsZWZ0OiAyNSU7XG4gICAgICAgIGRpc3BsYXk6IGZsZXg7XG4gICAgICAgIGFsaWduLWl0ZW1zOiBjZW50ZXI7XG4gICAgICAgIGp1c3RpZnktY29udGVudDogY2VudGVyO1xuICAgICAgICB3aWR0aDogNTAlO1xuICAgICAgICBoZWlnaHQ6IDUwJTtcblxuICAgICAgICAudmYtaW5uZXItbW9kYWwge1xuICAgICAgICAgICAgcGFkZGluZzogMTBweDtcbiAgICAgICAgICAgIGJvcmRlci13aWR0aDogMXB4O1xuICAgICAgICAgICAgYm9yZGVyLXJhZGl1czogNXB4O1xuICAgICAgICB9XG4gICAgfVxufVxuIiwiLnZpYWZvdXJhIHtcbiAgICAudmYtZmxleCB7XG4gICAgICAgIGRpc3BsYXk6IGZsZXg7XG5cbiAgICAgICAgJi52Zi1jZW50ZXJlZCB7XG4gICAgICAgICAgICBhbGlnbi1pdGVtczogY2VudGVyO1xuICAgICAgICAgICAganVzdGlmeS1jb250ZW50OiBjZW50ZXI7XG4gICAgICAgIH1cblxuICAgICAgICAmLnZmLXZlcnRpY2FsIHtcbiAgICAgICAgICAgIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XG4gICAgICAgIH1cblxuICAgICAgICAmLnZmLW5vd3JhcCB7XG4gICAgICAgICAgICBmbGV4LXdyYXA6IG5vd3JhcDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC52Zi1yb3cudmYtcm93LWVkZ2VzIHtcbiAgICAgICAgZGlzcGxheTogZmxleDtcbiAgICAgICAgZmxleC1kaXJlY3Rpb246IHJvdztcbiAgICAgICAganVzdGlmeS1jb250ZW50OiBzcGFjZS1iZXR3ZWVuO1xuICAgIH1cblxuICAgIC52Zi12ZXJ0LXNwYWNlZCA+ICogKyAqIHtcbiAgICAgICAgbWFyZ2luLXRvcDogMWVtO1xuICAgIH1cbn1cbiIsIkBpbXBvcnQgXCJhc3NldHMvbGVnYWN5L2Nzcy9iYXNlL21vZGFsc1wiO1xuQGltcG9ydCBcImFzc2V0cy9sZWdhY3kvY3NzL2Jhc2UvbGF5b3V0c1wiO1xuXG4vKlxuVnVlIENvbXBvbmVudHNcblxuVGhlc2UgYXJlIGNvbXBvbmVudHMgdGhhdCBhcmUgd3JhcHBlZCBpbiBhIFZ1ZSBvYmplY3QsIGFuZCBhcmUgaW5zdGF0aWF0ZWQgaW5cbnRlbXBsYXRlcy5cblxuU3R5bGVndWlkZSBjb21wb25lbnRzXG4qL1xuXG4vKlxuSWxsdXN0cmF0aW9uc1xuXG5MYXJnZXIgc3Zncy9pbWdzIHVzZWQgdG8gaWxsdXN0cmF0ZSBmdW5jdGlvbmFsaXR5XG5cblN0eWxlZ3VpZGUgY29tcG9uZW50cy5pbGx1c3RyYXRpb25zXG4qL1xuXG4vKlxuTmF2aWdhdGlvblxuXG5OYXZpZ2F0aW9uIHRoaW5ncyBnbyBoZXJlXG5cblN0eWxlZ3VpZGUgY29tcG9uZW50cy5uYXZpZ2F0aW9uXG4qL1xuXG4vKlxuQ1NTIENvbXBvbmVudHNcblxuVGhlc2UgYXJlIGNvbXBvbmVudHMgd2hvc2UgZGVmaW5pdGlvbiBpcyBjb21wbGV0ZWx5IGluIENTUyBhbmQgY2FuIGJlIGFwcGxpZWRcbnRvIChtb3N0bHkpIGFyYml0cmFyeSBlbGVtZW50cy5cblxuU3R5bGVndWlkZSBjc3NcbiovXG5cbi52Zi1hcnRpY2xlLXRodW1ibmFpbCxcbi52Zi10aHVtYm5haWwge1xuICAgIGJvcmRlci1yYWRpdXM6IDJweDtcbn1cbiIsIi52Zi1idXR0b24ge1xuICAgIHBhZGRpbmc6IG1hcC1nZXQoJGJ1dHRvbi1wYWRkaW5nLCAndG9wJykgbWFwLWdldCgkYnV0dG9uLXBhZGRpbmcsICdzaWRlJyk7XG4gICAgd29yZC1icmVhazoga2VlcC1hbGw7XG5cbiAgICAmLnZmLWJ1dHRvbi1zbWFsbCB7XG4gICAgICAgIHBhZGRpbmc6IDAuMmVtIDAuNmVtO1xuICAgIH1cblxuICAgICYudmYtYnV0dG9uLWxvbmcge1xuICAgICAgICBtaW4td2lkdGg6IDEyMHB4O1xuICAgIH1cblxuICAgIC8qKlxuSWNvbiBidXR0b25zXG5cblNvbWUgaWNvbiBidXR0b25zXG5cbk1hcmt1cDogPGJ1dHRvbiBjbGFzcz1cInZmLWJ1dHRvbiB7e21vZGlmaWVyX2NsYXNzfX1cIj5TdWJtaXQ8L2J1dHRvbj5cblxuU3R5bGVndWlkZSBjb21wb25lbnRzLmJ1dHRvbnMuaWNvbi1idXR0b25cbiovXG4gICAgJi52Zi1idXR0b24taWNvbiB7XG4gICAgICAgIHBhZGRpbmc6IDAuMTVlbSAwLjVlbTtcbiAgICB9XG59XG5cbi52Zi1idXR0b24tLWlubGluZSB7XG4gICAgcGFkZGluZzogMDtcbn1cbiIsIi8qXG5CdXR0b25zXG5cblRoZXNlIGFyZSBidXR0b25zXG5cbk1hcmt1cDogPGJ1dHRvbiBjbGFzcz1cInZmLWJ1dHRvbiB7e21vZGlmaWVyX2NsYXNzfX1cIj5TdWJtaXQ8L2J1dHRvbj5cblxuLnZmLWJ1dHRvbi1mdWxsIC0gQSBmdWxsIHdpZHRoIGJ1dHRvblxuLnZmLWJ1dHRvbi1vdXRsaW5lLnZmLWdyZXkgLSBBbiBvdXRsaW5lZCBidXR0b24gaW4gZ3JleVxuLnZmLWJ1dHRvbi1vdXRsaW5lLnZmLWdyZXkudmYtYnV0dG9uLXNtYWxsIC0gQSBzbWFsbCBidXR0b24sIG91dGxpbmVkIGluIGdyZXlcbi52Zi1idXR0b24tbGluayAtIEEgYnV0dG9uIHRoYXQgbG9va3MgbGlrZSBhIGxpbmtcbi52Zi1idXR0b24tbG9uZyAtIEEgbG9uZyBidXR0b25cbi52Zi1idXR0b24taWNvbiAtIEFuIGljb24gYnV0dG9uXG5cblN0eWxlZ3VpZGUgY29tcG9uZW50cy5idXR0b25zXG4qL1xuLnZmLWJ1dHRvbiB7XG4gICAgYm9yZGVyOiBub25lO1xuICAgIGJvcmRlci1yYWRpdXM6IDNweDtcblxuICAgICYudmYtYnV0dG9uLWZ1bGwge1xuICAgICAgICB3aWR0aDogMTAwJTtcbiAgICB9XG5cbiAgICAmLnZmLWJ1dHRvbi1vdXRsaW5lIHtcbiAgICAgICAgYm9yZGVyLXN0eWxlOiBzb2xpZDtcbiAgICAgICAgYm9yZGVyLXdpZHRoOiAxcHg7XG5cbiAgICAgICAgJi52Zi1ncmV5IHtcbiAgICAgICAgICAgIEBpbmNsdWRlIGxpZ2h0LXRleHQoJGRlZmF1bHQtcGFsZXR0ZSk7XG4gICAgICAgICAgICBAaW5jbHVkZSB2YXIoYm9yZGVyLWNvbG9yLCAncHJpbWFyeS1jb2xvci0xMCcpO1xuXG4gICAgICAgICAgICAmOmhvdmVyLFxuICAgICAgICAgICAgJjpmb2N1cyB7XG4gICAgICAgICAgICAgICAgQGluY2x1ZGUgdmFyKGJvcmRlci1jb2xvciwgJ2FjY2VudC1jb2xvci1saWdodCcpO1xuICAgICAgICAgICAgICAgIEBpbmNsdWRlIHZhcihjb2xvciwgJ2FjY2VudC1jb2xvcicpO1xuXG4gICAgICAgICAgICAgICAgb3V0bGluZTogbm9uZTtcblxuICAgICAgICAgICAgICAgIHBhdGgge1xuICAgICAgICAgICAgICAgICAgICBAaW5jbHVkZSB2YXIoZmlsbCwgJ2FjY2VudC1jb2xvcicpO1xuICAgICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuICAgIH1cblxuICAgICYudmYtYnV0dG9uLXNtYWxsIHtcbiAgICAgICAgZm9udC1zaXplOiBtYXAtZ2V0KCRmb250LXNpemVzLCB0aW55KTtcbiAgICB9XG5cbiAgICAmLnZmLWJ1dHRvbi1tZWRpdW0ge1xuICAgICAgICBmb250LXNpemU6IG1hcC1nZXQoJGZvbnQtc2l6ZXMsIHNtYWxsKTtcbiAgICB9XG5cbiAgICAmLnZmLWJ1dHRvbi1sb25nIHtcbiAgICAgICAgZm9udC1zaXplOiBtYXAtZ2V0KCRmb250LXNpemVzLCBzbWFsbCk7XG4gICAgfVxuXG4gICAgJi52Zi1idXR0b24tbGluayB7XG4gICAgICAgIEBpbmNsdWRlIHZhcihjb2xvciwgJ2FjY2VudC1jb2xvcicpO1xuXG4gICAgICAgIHRleHQtZGVjb3JhdGlvbjogbm9uZTtcbiAgICB9XG59XG4iLCJAaW1wb3J0ICcuL2NsaWVudCc7XG5AaW1wb3J0ICcuL2NvbG9ycyc7XG5AaW1wb3J0ICcuL3RyYW5zaXRpb25zJztcbkBpbXBvcnQgJy4uL3R5cG9ncmFwaHkvdmFyaWFibGVzJztcbkBpbXBvcnQgJy4uL3NwYWNpbmcvdmFyaWFibGVzJztcblxuJGNsaWVudC12YXJzOiBtYXAtbWVyZ2UoJGNsaWVudC1jb2xvcnMsICRjbGllbnQtdmFycyk7XG5cbkBtaXhpbiB2YXIoJHByb3BlcnR5LCAkdmFyTmFtZSwgJGltcG9ydGFudDogJycpIHtcbiAgICAjeyRwcm9wZXJ0eX06IG1hcC1nZXQoJGNsaWVudC12YXJzLCAkdmFyTmFtZSkgI3skaW1wb3J0YW50fTtcbiAgICAjeyRwcm9wZXJ0eX06IHZhcigtLSN7JHZhck5hbWV9LCBtYXAtZ2V0KCRjbGllbnQtdmFycywgJHZhck5hbWUpKSAjeyRpbXBvcnRhbnR9O1xufVxuIiwiLnZmLWJ1dHRvbjpmb2N1cyAudmYtaWNvbixcbi52Zi1idXR0b246aG92ZXIgLnZmLWljb24ge1xuICAgIGZpbGwtb3BhY2l0eTogMTtcbn1cblxuLnZmLWJ1dHRvbi52Zi1oaWRkZW4ge1xuICAgIHZpc2liaWxpdHk6IGhpZGRlbjtcbn1cbiIsIkBpbXBvcnQgJy4uL3ZhcmlhYmxlcy9tb2R1bGUnO1xuXG4uZmFkZS1lbnRlci1hY3RpdmUsXG4uZmFkZS1sZWF2ZS1hY3RpdmUge1xuICAgIHRyYW5zaXRpb246IG9wYWNpdHkgbWFwLWdldCgkdHJhbnNpdGlvbnMsIHNsb3cpICFpbXBvcnRhbnQ7XG59XG5cbi5mYWRlLWZhc3QtZW50ZXItYWN0aXZlLFxuLmZhZGUtZmFzdC1sZWF2ZS1hY3RpdmUge1xuICAgIHRyYW5zaXRpb246IG9wYWNpdHkgbWFwLWdldCgkdHJhbnNpdGlvbnMsIGZhc3QpICFpbXBvcnRhbnQ7XG59XG5cbi5mYWRlLXN1cGVyLWZhc3QtZW50ZXItYWN0aXZlLFxuLmZhZGUtc3VwZXItZmFzdC1sZWF2ZS1hY3RpdmUge1xuICAgIHRyYW5zaXRpb246IG9wYWNpdHkgbWFwLWdldCgkdHJhbnNpdGlvbnMsIHN1cGVyLWZhc3QpICFpbXBvcnRhbnQ7XG59XG5cbi5mYWRlLWluc3RhbnQtZW50ZXItYWN0aXZlLFxuLmZhZGUtaW5zdGFudC1sZWF2ZS1hY3RpdmUge1xuICAgIHRyYW5zaXRpb246IG9wYWNpdHkgbWFwLWdldCgkdHJhbnNpdGlvbnMsIGluc3RhbnQpICFpbXBvcnRhbnQ7XG59XG5cbi5mYWRlLWVudGVyLFxuLmZhZGUtbGVhdmUtdG8sXG4uZmFkZS1mYXN0LWVudGVyLFxuLmZhZGUtZmFzdC1sZWF2ZS10byxcbi5mYWRlLXN1cGVyLWZhc3QtZW50ZXIsXG4uZmFkZS1zdXBlci1mYXN0LWxlYXZlLXRvIHtcbiAgICBvcGFjaXR5OiAwICFpbXBvcnRhbnQ7XG59XG4iLCJAa2V5ZnJhbWVzIHNwaW4ge1xuICAgIDAlIHtcbiAgICAgICAgdHJhbnNmb3JtOiByb3RhdGUoMGRlZyk7XG4gICAgfVxuXG4gICAgMTAwJSB7XG4gICAgICAgIHRyYW5zZm9ybTogcm90YXRlKDM2MGRlZyk7XG4gICAgfVxufVxuIiwiLnZmLWV4cGFuZGluZy1ob3Zlci1saWdodDo6YmVmb3JlIHtcbiAgICBAaW5jbHVkZSB2YXIoYm9yZGVyLWNvbG9yLCAnYWNjZW50LWNvbG9yLWxpZ2h0Jyk7XG5cbiAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgYm90dG9tOiAwO1xuICAgIGxlZnQ6IDUwJTtcbiAgICB3aWR0aDogMDtcbiAgICBib3JkZXItYm90dG9tLXdpZHRoOiAycHg7XG4gICAgYm9yZGVyLWJvdHRvbS1zdHlsZTogc29saWQ7XG4gICAgdHJhbnNmb3JtOiB0cmFuc2xhdGUoLTUwJSwgNTAlKTtcbiAgICB0cmFuc2l0aW9uOiB3aWR0aCBtYXAtZ2V0KCR0cmFuc2l0aW9ucywgJ2Zhc3QnKTtcbiAgICBjb250ZW50OiAnJztcbn1cblxuLnZmLWV4cGFuZGluZy1ob3Zlci1saWdodDpob3Zlcixcbi52Zi1leHBhbmRpbmctaG92ZXItbGlnaHQ6Zm9jdXMsXG4udmYtZXhwYW5kaW5nLWhvdmVyLWxpZ2h0OmZvY3VzLXdpdGhpbixcbi52Zi1leHBhbmRpbmctaG92ZXItbGlnaHQudmYtYWN0aXZlIHtcbiAgICAmOjpiZWZvcmUge1xuICAgICAgICB3aWR0aDogMTAwJSAhaW1wb3J0YW50O1xuICAgIH1cbn1cbiIsIi52Zi1uby1vdXRsaW5lLFxuLnZmLWhhcy1vd24tb3V0bGluZSB7XG4gICAgb3V0bGluZTogbm9uZTtcbiAgICAtd2Via2l0LXRhcC1oaWdobGlnaHQtY29sb3I6IHRyYW5zcGFyZW50O1xuXG4gICAgJjo6LW1vei1mb2N1cy1pbm5lciB7XG4gICAgICAgIGJvcmRlcjogMDtcbiAgICB9XG59XG4iLCIkbGVmdC1zcGFjaW5nOiA5cHg7XG4kZG90LXNpemU6IDJweDtcblxuLnZmLWxhYmVsLXdpdGgtZG90IHtcbiAgICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gICAgbWFyZ2luLWxlZnQ6ICRsZWZ0LXNwYWNpbmcgLSAxcHg7XG4gICAgd2hpdGUtc3BhY2U6IG5vd3JhcDtcblxuICAgICY6OmJlZm9yZSB7XG4gICAgICAgIEBpbmNsdWRlIHZhcihiYWNrZ3JvdW5kLWNvbG9yLCAncHJpbWFyeS1jb2xvci02MCcpO1xuXG4gICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICAgICAgdG9wOiBjYWxjKDUwJSAtICN7JGRvdC1zaXplfSk7XG4gICAgICAgIGxlZnQ6IC0xICogY2FsYygoJGxlZnQtc3BhY2luZyArICRkb3Qtc2l6ZSArIDFweCkgLyAyKTtcbiAgICAgICAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICAgICAgICB3aWR0aDogJGRvdC1zaXplO1xuICAgICAgICBoZWlnaHQ6ICRkb3Qtc2l6ZTtcbiAgICAgICAgYm9yZGVyLXJhZGl1czogNTAlO1xuICAgICAgICBjb250ZW50OiAnICc7XG4gICAgfVxufVxuIiwiLnZmLWVsbGlwc2lzLW92ZXJmbG93IHtcbiAgICBvdmVyZmxvdzogaGlkZGVuO1xuICAgIHdoaXRlLXNwYWNlOiBub3dyYXA7XG4gICAgdGV4dC1vdmVyZmxvdzogZWxsaXBzaXM7XG59XG4iLCIudmYtc2V0dGluZyB7XG4gICAgZGlzcGxheTogZmxleDtcbiAgICBhbGlnbi1pdGVtczogY2VudGVyO1xuICAgIG1pbi1oZWlnaHQ6IDUwcHg7XG4gICAgYm9yZGVyLWJvdHRvbS13aWR0aDogMXB4O1xuICAgIGJvcmRlci1ib3R0b20tc3R5bGU6IHNvbGlkO1xuXG4gICAgLnZmLXNsaWRlciB7XG4gICAgICAgIGFsaWduLXNlbGY6IGNlbnRlcjtcbiAgICB9XG5cbiAgICBAbWVkaWEgb25seSBzY3JlZW4gYW5kIChtYXgtd2lkdGg6IDY0MHB4KSB7XG4gICAgICAgIG1pbi1oZWlnaHQ6IDQwcHg7XG4gICAgfVxufVxuXG4udmYtc2V0dGluZy1tb2R1bGUgLnZmLXRleHQtdGlwIC52Zi10b29sdGlwIHtcbiAgICB3aWR0aDogJHRvb2x0aXAtc2l6ZTtcbn1cbiIsIiRtYXgtd2lkZ2V0LWxlbmd0aDogMTAzMHB4O1xuJHRvb2x0aXAtc2l6ZTogMTVlbTtcbiRtb2R1bGUtc3BhY2luZzogMzBweDtcbiRjb250cm9sLXNwYWNpbmc6IDEwcHg7XG4kZ2xvYmFsLWFkbWluLXNpemU6IDEycHg7XG4iLCIudmYtc2V0dGluZy1tb2R1bGUge1xuICAgIGgxIHtcbiAgICAgICAgZm9udC13ZWlnaHQ6IDEwMDtcbiAgICB9XG59XG5cbi52Zi1zZXR0aW5nIHtcbiAgICBAaW5jbHVkZSB2YXIoYm9yZGVyLWJvdHRvbS1jb2xvciwgJ3ByaW1hcnktY29sb3ItMTAnKTtcblxuICAgIC52Zi1pbmZvLXRpcCB7XG4gICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICAgICAgdHJhbnNmb3JtOiB0cmFuc2xhdGVYKC0xMDAlKTtcbiAgICB9XG59XG4iLCIudmlhZm91cmEge1xuICAgIC8qIEhpZGUgZnJvbSBib3RoIHNjcmVlbnJlYWRlcnMgYW5kIGJyb3dzZXJzOiBoNWJwLmNvbS91ICovXG4gICAgLmhpZGRlbiB7XG4gICAgICAgIGRpc3BsYXk6IG5vbmUgIWltcG9ydGFudDtcbiAgICAgICAgdmlzaWJpbGl0eTogaGlkZGVuO1xuICAgIH1cblxuICAgIC8qIEhpZGUgdmlzdWFsbHkgYW5kIGZyb20gc2NyZWVucmVhZGVycywgYnV0IG1haW50YWluIGxheW91dCAqL1xuICAgIC5pbnZpc2libGUge1xuICAgICAgICB2aXNpYmlsaXR5OiBoaWRkZW47XG4gICAgfVxuXG4gICAgLyogQ29udGFpbiBmbG9hdHM6IGg1YnAuY29tL3EgKi9cbiAgICAudmYtY2xlYXJmaXg6OmJlZm9yZSxcbiAgICAudmYtY2xlYXJmaXg6OmFmdGVyIHtcbiAgICAgICAgZGlzcGxheTogdGFibGU7XG4gICAgICAgIGhlaWdodDogMCAhaW1wb3J0YW50O1xuICAgICAgICBwYWRkaW5nOiAwICFpbXBvcnRhbnQ7XG4gICAgICAgIGZvbnQtc2l6ZTogMDtcbiAgICAgICAgbGluZS1oZWlnaHQ6IDA7XG4gICAgICAgIGNvbnRlbnQ6ICcgJztcbiAgICB9XG5cbiAgICAudmYtY2xlYXJmaXg6OmFmdGVyIHtcbiAgICAgICAgY2xlYXI6IGJvdGg7XG4gICAgfVxuXG4gICAgLnZmLWNsZWFyZml4IHtcbiAgICAgICAgem9vbTogMTtcbiAgICB9XG59XG4iLCIudmYtdGlwLXRleHQge1xuICAgIG1hcmdpbi10b3A6IDJweDtcbiAgICBtYXJnaW4tYm90dG9tOiAwO1xufVxuXG4udmYtdG9vbHRpcCB7XG4gICAgcG9zaXRpb246IGFic29sdXRlO1xuICAgIGJvcmRlci1yYWRpdXM6IDNweDtcbn1cblxuLnZmLXRvb2x0aXAgLnZmLXRpcCB7XG4gICAgQGluY2x1ZGUgYm9yZGVyKDAsIHNvbGlkLCA2cHgpO1xuICAgIEBpbmNsdWRlIHNpemUoMnB4KTtcblxuICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICBib3R0b206IC01MCU7XG4gICAgbGVmdDogNTAlO1xufVxuIiwiQG1peGluIHRyYW5zaXRpb24oJHByb3BlcnR5LCAkc3BlZWQ6IDJzKSB7XG4gICAgdHJhbnNpdGlvbjogJHByb3BlcnR5ICRzcGVlZDtcbn1cblxuQG1peGluIGJvcmRlci1yYWRpdXMoJHJhZGl1cykge1xuICAgIGJvcmRlci1yYWRpdXM6ICRyYWRpdXM7XG59XG5cbi8vIGFsbG93cyBJRSB0byB0cmlnZ2VyIGhvdmVyIC8gbW91c2VvdmVycyBvdmVyIGVtcHR5IGVsZW1lbnRzXG5AbWl4aW4gaWUtaG92ZXIoKSB7XG4gICAgQGluY2x1ZGUgYmFja2dyb3VuZCgkZGVmYXVsdC1wYWxldHRlKTsgICAgICAgICAgICAvKiB5b3UgY2FuIGNob29zZSBhbnkgY29sb3VyIHlvdSBsaWtlLCAxLjAtZnVsbHkgdmlzaWJsZSAqL1xuXG4gICAgb3BhY2l0eTogMDsgICAgICAgICAgICAgICAgICAgICAgIC8qIG9wYWNpdHkgc2V0dGluZyBmb3IgYWxsIGJyb3dzZXJzIGV4Y2VwdCBJRSAqL1xuICAgIGZpbHRlcjogXCJhbHBoYShvcGFjaXR5ID0gMClcIjtcbn1cblxuQG1peGluIGZsZXgtY29udGFpbmVyKCRkaXJlY3Rpb24sICRqdXN0aWZ5LCAkYWxpZ24sICR3cmFwLCAkYWxpZ24tY29udGVudCkge1xuICAgIGRpc3BsYXk6IGZsZXg7XG4gICAgZmxleC1kaXJlY3Rpb246ICRkaXJlY3Rpb247XG4gICAgZmxleC13cmFwOiAkd3JhcDtcbiAgICBhbGlnbi1jb250ZW50OiAkYWxpZ24tY29udGVudDtcbiAgICBhbGlnbi1pdGVtczogJGFsaWduO1xuICAgIGp1c3RpZnktY29udGVudDogJGp1c3RpZnk7XG59XG5cbkBtaXhpbiBmbGV4LXZlcnRpY2FsLWNvbnRhaW5lcigkanVzdGlmeTogZmxleC1zdGFydCwgJGFsaWduOiBzdHJldGNoLCAkd3JhcDogbm93cmFwLCAkYWxpZ24tY29udGVudDogc3RyZXRjaCkge1xuICAgIEBpbmNsdWRlIGZsZXgtY29udGFpbmVyKGNvbHVtbiwgJGp1c3RpZnksICRhbGlnbiwgJHdyYXAsICRhbGlnbi1jb250ZW50KTtcbn1cblxuQG1peGluIGZsZXgtdmVydGljYWwtbGlzdCgkanVzdGlmeTogZmxleC1zdGFydCwgJGFsaWduOiBzdHJldGNoLCAkd3JhcDogbm93cmFwKSB7XG4gICAgQGluY2x1ZGUgZmxleC12ZXJ0aWNhbC1jb250YWluZXIoJGp1c3RpZnksICRhbGlnbiwgJHdyYXApO1xufVxuXG5AbWl4aW4gZmxleC1ob3Jpem9udGFsLWNvbnRhaW5lcigkanVzdGlmeTogZmxleC1zdGFydCwgJGFsaWduOiBzdHJldGNoLCAkd3JhcDogbm93cmFwLCAkYWxpZ24tY29udGVudDogc3RyZXRjaCkge1xuICAgIEBpbmNsdWRlIGZsZXgtY29udGFpbmVyKHJvdywgJGp1c3RpZnksICRhbGlnbiwgJHdyYXAsICRhbGlnbi1jb250ZW50KTtcbn1cblxuQG1peGluIGZsZXgtaG9yaXpvbnRhbC1saXN0KCRqdXN0aWZ5OiBmbGV4LXN0YXJ0LCAkYWxpZ246IHN0cmV0Y2gsICR3cmFwOiBub3dyYXApIHtcbiAgICBAaW5jbHVkZSBmbGV4LWhvcml6b250YWwtY29udGFpbmVyKCRqdXN0aWZ5LCAkYWxpZ24sICR3cmFwKTtcbn1cblxuQG1peGluIGZsZXgtY2hpbGQoJGdyb3csICRhbGlnbikge1xuICAgIGZsZXgtZ3JvdzogJGdyb3c7XG4gICAgYWxpZ24tc2VsZjogJGFsaWduO1xufVxuXG5AbWl4aW4gc2l6ZSgkd2lkdGgsICRoZWlnaHQ6ICR3aWR0aCkge1xuICAgIHdpZHRoOiAkd2lkdGg7XG4gICAgaGVpZ2h0OiAkaGVpZ2h0O1xufVxuXG5AbWl4aW4gbGlzdC1zcGFjaW5nKCRkaXJlY3Rpb24sICRzcGFjaW5nKSB7XG4gICAgPiAqICsgKiB7XG4gICAgICAgIG1hcmdpbi0jeyRkaXJlY3Rpb259OiAkc3BhY2luZztcbiAgICB9XG59XG5cbkBtaXhpbiBsaXN0LXNwYWNpbmctbGVmdCgkc3BhY2luZykge1xuICAgIEBpbmNsdWRlIGxpc3Qtc3BhY2luZyhcImxlZnRcIiwgJHNwYWNpbmcpO1xufVxuXG5AbWl4aW4gYm9yZGVyKCRyYWRpdXM6IDAsICRzdHlsZTogc29saWQsICR3aWR0aDogMXB4LCAkcHJlZml4OiBcImJvcmRlclwiKSB7XG4gICAgYm9yZGVyLXJhZGl1czogJHJhZGl1cztcbiAgICAjeyRwcmVmaXh9LXN0eWxlOiAkc3R5bGU7XG4gICAgI3skcHJlZml4fS13aWR0aDogJHdpZHRoO1xufVxuXG5AbWl4aW4gYm9yZGVyLXRvcCgkcmFkaXVzOiAwLCAkc3R5bGU6IHNvbGlkLCAkd2lkdGg6IDFweCkge1xuICAgIEBpbmNsdWRlIGJvcmRlcigkcmFkaXVzLCAkc3R5bGUsICR3aWR0aCwgXCJib3JkZXItdG9wXCIpO1xufVxuXG5AbWl4aW4gYm9yZGVyLWxlZnQoJHJhZGl1czogMCwgJHN0eWxlOiBzb2xpZCwgJHdpZHRoOiAxcHgpIHtcbiAgICBAaW5jbHVkZSBib3JkZXIoJHJhZGl1cywgJHN0eWxlLCAkd2lkdGgsIFwiYm9yZGVyLWxlZnRcIik7XG59XG5cbkBtaXhpbiBib3JkZXItcmlnaHQoJHJhZGl1czogMCwgJHN0eWxlOiBzb2xpZCwgJHdpZHRoOiAxcHgpIHtcbiAgICBAaW5jbHVkZSBib3JkZXIoJHJhZGl1cywgJHN0eWxlLCAkd2lkdGgsIFwiYm9yZGVyLXJpZ2h0XCIpO1xufVxuXG5AbWl4aW4gYm9yZGVyLWJvdHRvbSgkcmFkaXVzOiAwLCAkc3R5bGU6IHNvbGlkLCAkd2lkdGg6IDFweCkge1xuICAgIEBpbmNsdWRlIGJvcmRlcigkcmFkaXVzLCAkc3R5bGUsICR3aWR0aCwgXCJib3JkZXItYm90dG9tXCIpO1xufVxuXG5AbWl4aW4gYm94LXNoYWRvdygkb2Zmc2V0LXgsICRvZmZzZXQteSwgJGJsdXItcmFkaXVzLCAkc3ByZWFkLXJhZGl1czogZmFsc2UsICRjb2xvci1uYW1lOiBmYWxzZSkge1xuICAgIEBpZiAkc3ByZWFkLXJhZGl1cyA9PSBmYWxzZSB7XG4gICAgICAgICRjb2xvci1uYW1lOiAkYmx1ci1yYWRpdXM7XG4gICAgICAgICRzcHJlYWQtcmFkaXVzOiAwO1xuICAgICAgICAkYmx1ci1yYWRpdXM6IDA7XG4gICAgfSBAZWxzZSBpZiAkY29sb3ItbmFtZSA9PSBmYWxzZSB7XG4gICAgICAgICRjb2xvci1uYW1lOiAkc3ByZWFkLXJhZGl1cztcbiAgICAgICAgJHNwcmVhZC1yYWRpdXM6IDA7XG4gICAgfVxuICAgICRjb2xvclZhck5hbWU6ICctLScgKyAkY29sb3ItbmFtZTtcblxuICAgIGJveC1zaGFkb3c6ICRvZmZzZXQteCAkb2Zmc2V0LXkgJGJsdXItcmFkaXVzICRzcHJlYWQtcmFkaXVzIG1hcC1nZXQoJGNsaWVudC1jb2xvcnMsICRjb2xvci1uYW1lKTtcbiAgICBib3gtc2hhZG93OlxuICAgICAgICAkb2Zmc2V0LXggJG9mZnNldC15ICRibHVyLXJhZGl1cyAkc3ByZWFkLXJhZGl1cyB2YXIoXG4gICAgICAgICAgICAjeyRjb2xvclZhck5hbWV9LFxuICAgICAgICAgICAgbWFwLWdldCgkY2xpZW50LWNvbG9ycywgJGNvbG9yLW5hbWUpXG4gICAgICAgICk7XG59XG4iLCIkYmFja2dyb3VuZHBuZzogdXJsKCcuLi9pbWcvbWVqcy9iYWNrZ3JvdW5kLnBuZycpO1xuJGJpZ3BsYXlwbmc6IHVybCgnLi4vaW1nL21lanMvYmlncGxheS5wbmcnKTtcbiRjb250cm9sc3BuZzogdXJsKCcuLi9pbWcvbWVqcy9jb250cm9scy5wbmcnKTtcblxuLnZpYWZvdXJhIHtcbiAgICAubWVqcy1jb250YWluZXIge1xuICAgICAgICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gICAgfVxuXG4gICAgLm1lanMtZW1iZWQsXG4gICAgLm1lanMtZW1iZWQgYm9keSB7XG4gICAgICAgIHdpZHRoOiAxMDAlO1xuICAgICAgICBoZWlnaHQ6IDEwMCU7XG4gICAgICAgIG1hcmdpbjogMDtcbiAgICAgICAgcGFkZGluZzogMDtcbiAgICAgICAgb3ZlcmZsb3c6IGhpZGRlbjtcbiAgICB9XG5cbiAgICAubWVqcy1jb250YWluZXItZnVsbHNjcmVlbiB7XG4gICAgICAgIHBvc2l0aW9uOiBmaXhlZDtcbiAgICAgICAgdG9wOiAwO1xuICAgICAgICByaWdodDogMDtcbiAgICAgICAgYm90dG9tOiAwO1xuICAgICAgICBsZWZ0OiAwO1xuICAgICAgICB6LWluZGV4OiAxMDAwO1xuICAgICAgICBvdmVyZmxvdzogaGlkZGVuO1xuICAgIH1cblxuICAgIC5tZWpzLWNvbnRhaW5lci1mdWxsc2NyZWVuIC5tZWpzLW1lZGlhZWxlbWVudCxcbiAgICAubWVqcy1jb250YWluZXItZnVsbHNjcmVlbiB2aWRlbyB7XG4gICAgICAgIEBpbmNsdWRlIHNpemUoMTAwJSk7XG4gICAgfVxuXG4gICAgLm1lanMtYmFja2dyb3VuZCB7XG4gICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICAgICAgdG9wOiAwO1xuICAgICAgICBsZWZ0OiAwO1xuICAgIH1cblxuICAgIC5tZWpzLW1lZGlhZWxlbWVudCB7XG4gICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICAgICAgdG9wOiAwO1xuICAgICAgICBsZWZ0OiAwO1xuXG4gICAgICAgIEBpbmNsdWRlIHNpemUoMTAwJSk7XG4gICAgfVxuXG4gICAgLm1lanMtcG9zdGVyIHtcbiAgICAgICAgcG9zaXRpb246IGFic29sdXRlO1xuICAgICAgICB0b3A6IDA7XG4gICAgICAgIGxlZnQ6IDA7XG4gICAgfVxuXG4gICAgLm1lanMtcG9zdGVyIGltZyB7XG4gICAgICAgIGRpc3BsYXk6IGJsb2NrO1xuICAgICAgICBwYWRkaW5nOiAwO1xuICAgICAgICBib3JkZXI6IDA7XG4gICAgfVxuXG4gICAgLm1lanMtb3ZlcmxheSB7XG4gICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICAgICAgdG9wOiAwO1xuICAgICAgICBsZWZ0OiAwO1xuICAgIH1cblxuICAgIC5tZWpzLW92ZXJsYXktcGxheSB7XG4gICAgICAgIGN1cnNvcjogcG9pbnRlcjtcbiAgICB9XG5cbiAgICAubWVqcy1vdmVybGF5LWJ1dHRvbiB7XG4gICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICAgICAgdG9wOiA1MCU7XG4gICAgICAgIGxlZnQ6IDUwJTtcblxuICAgICAgICBAaW5jbHVkZSBzaXplKDEwMHB4KTtcblxuICAgICAgICBtYXJnaW46IC01MHB4IDAgMCAtNTBweDtcbiAgICB9XG5cbiAgICAubWVqcy1vdmVybGF5OmhvdmVyIC5tZWpzLW92ZXJsYXktYnV0dG9uIHtcbiAgICAgICAgYmFja2dyb3VuZC1wb3NpdGlvbjogMCAtMTAwcHg7XG4gICAgfVxuXG4gICAgLm1lanMtb3ZlcmxheS1sb2FkaW5nIHtcbiAgICAgICAgcG9zaXRpb246IGFic29sdXRlO1xuICAgICAgICB0b3A6IDUwJTtcbiAgICAgICAgbGVmdDogNTAlO1xuXG4gICAgICAgIEBpbmNsdWRlIHNpemUoODBweCk7XG5cbiAgICAgICAgbWFyZ2luOiAtNDBweCAwIDAgLTQwcHg7XG4gICAgfVxuXG4gICAgLm1lanMtb3ZlcmxheS1sb2FkaW5nIHNwYW4ge1xuICAgICAgICBkaXNwbGF5OiBibG9jaztcblxuICAgICAgICBAaW5jbHVkZSBzaXplKDgwcHgpO1xuICAgIH1cblxuICAgIC5tZWpzLWNvbnRhaW5lciAubWVqcy1jb250cm9scyB7XG4gICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICAgICAgYm90dG9tOiAwO1xuICAgICAgICBsZWZ0OiAwO1xuICAgICAgICB3aWR0aDogMTAwJTtcbiAgICAgICAgaGVpZ2h0OiAzMHB4O1xuICAgICAgICBtYXJnaW46IDA7XG4gICAgICAgIHBhZGRpbmc6IDA7XG4gICAgICAgIGJhY2tncm91bmQ6IG5vbmU7XG4gICAgfVxuXG4gICAgLm1lanMtY29udGFpbmVyIC5tZWpzLWNvbnRyb2xzIGRpdiB7XG4gICAgICAgIGRpc3BsYXk6IGJsb2NrO1xuICAgICAgICBmbG9hdDogbGVmdDtcbiAgICAgICAgbWFyZ2luOiAwO1xuICAgICAgICBwYWRkaW5nOiAwO1xuXG4gICAgICAgIEBpbmNsdWRlIHNpemUoMjZweCk7XG5cbiAgICAgICAgYm9yZGVyOiAwO1xuICAgIH1cblxuICAgIC5tZWpzLWNvbnRyb2xzIC5tZWpzLWJ1dHRvbiBidXR0b24ge1xuICAgICAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgICAgIGRpc3BsYXk6IGJsb2NrO1xuICAgICAgICBtYXJnaW46IDdweCA1cHg7XG4gICAgICAgIHBhZGRpbmc6IDA7XG4gICAgICAgIGZvbnQtc2l6ZTogMDtcbiAgICAgICAgbGluZS1oZWlnaHQ6IDA7XG4gICAgICAgIGJvcmRlcjogMDtcbiAgICAgICAgY3Vyc29yOiBwb2ludGVyO1xuXG4gICAgICAgIEBpbmNsdWRlIHNpemUoMTZweCk7XG4gICAgfVxuXG4gICAgLm1lanMtY29udGFpbmVyIC5tZWpzLWNvbnRyb2xzIC5tZWpzLXRpbWUge1xuICAgICAgICBkaXNwbGF5OiBibG9jaztcbiAgICAgICAgd2lkdGg6IGF1dG87XG4gICAgICAgIGhlaWdodDogMTdweDtcbiAgICAgICAgcGFkZGluZzogOHB4IDNweCAwIDNweDtcbiAgICAgICAgcGFkZGluZzogYXV0byA0cHg7XG4gICAgICAgIG92ZXJmbG93OiBoaWRkZW47XG4gICAgICAgIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgICB9XG5cbiAgICAubWVqcy1jb250YWluZXIgLm1lanMtY29udHJvbHMgLm1lanMtdGltZSBzcGFuIHtcbiAgICAgICAgZGlzcGxheTogYmxvY2s7XG4gICAgICAgIGZsb2F0OiBsZWZ0O1xuICAgICAgICB3aWR0aDogYXV0bztcbiAgICB9XG5cbiAgICAubWVqcy1jb250cm9scyAubWVqcy1wbGF5IGJ1dHRvbiB7XG4gICAgICAgIGJhY2tncm91bmQtcG9zaXRpb246IDAgMDtcbiAgICB9XG5cbiAgICAubWVqcy1jb250cm9scyAubWVqcy1wYXVzZSBidXR0b24ge1xuICAgICAgICBiYWNrZ3JvdW5kLXBvc2l0aW9uOiAwIC0xNnB4O1xuICAgIH1cblxuICAgIC5tZWpzLWNvbnRyb2xzIC5tZWpzLXN0b3AgYnV0dG9uIHtcbiAgICAgICAgYmFja2dyb3VuZC1wb3NpdGlvbjogLTExMnB4IDA7XG4gICAgfVxuXG4gICAgLm1lanMtY29udHJvbHMgZGl2Lm1lanMtdGltZS1yYWlsIHtcbiAgICAgICAgd2lkdGg6IDIwMHB4O1xuICAgICAgICBwYWRkaW5nLXRvcDogNXB4O1xuICAgIH1cblxuICAgIC5tZWpzLWNvbnRyb2xzIC5tZWpzLXRpbWUtcmFpbCBzcGFuIHtcbiAgICAgICAgcG9zaXRpb246IGFic29sdXRlO1xuICAgICAgICBkaXNwbGF5OiBibG9jaztcbiAgICAgICAgd2lkdGg6IDE4MHB4O1xuICAgICAgICBoZWlnaHQ6IDEwcHg7XG4gICAgICAgIGJvcmRlci1yYWRpdXM6IDJweDtcbiAgICAgICAgY3Vyc29yOiBwb2ludGVyO1xuICAgIH1cblxuICAgIC5tZWpzLWNvbnRyb2xzIC5tZWpzLXRpbWUtcmFpbCAubWVqcy10aW1lLXRvdGFsIHtcbiAgICAgICAgbWFyZ2luOiA1cHg7XG4gICAgfVxuXG4gICAgLm1lanMtY29udHJvbHMgLm1lanMtdGltZS1yYWlsIC5tZWpzLXRpbWUtbG9hZGVkIHtcbiAgICAgICAgd2lkdGg6IDA7XG4gICAgfVxuXG4gICAgLm1lanMtY29udHJvbHMgLm1lanMtdGltZS1yYWlsIC5tZWpzLXRpbWUtY3VycmVudCB7XG4gICAgICAgIHdpZHRoOiAwO1xuICAgIH1cblxuICAgIC5tZWpzLWNvbnRyb2xzIC5tZWpzLXRpbWUtcmFpbCAubWVqcy10aW1lLWhhbmRsZSB7XG4gICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICAgICAgdG9wOiAtMnB4O1xuICAgICAgICBkaXNwbGF5OiBub25lO1xuICAgICAgICB3aWR0aDogMTBweDtcbiAgICAgICAgbWFyZ2luOiAwO1xuICAgICAgICB0ZXh0LWFsaWduOiBjZW50ZXI7XG4gICAgICAgIGJvcmRlci1yYWRpdXM6IDNweDtcbiAgICAgICAgY3Vyc29yOiBwb2ludGVyO1xuICAgIH1cblxuICAgIC5tZWpzLWNvbnRyb2xzIC5tZWpzLXRpbWUtcmFpbCAubWVqcy10aW1lLWZsb2F0IHtcbiAgICAgICAgcG9zaXRpb246IGFic29sdXRlO1xuICAgICAgICB0b3A6IC0yNnB4O1xuICAgICAgICBkaXNwbGF5OiBub25lO1xuICAgICAgICB3aWR0aDogMzZweDtcbiAgICAgICAgaGVpZ2h0OiAxN3B4O1xuICAgICAgICBtYXJnaW4tbGVmdDogLTE4cHg7XG4gICAgICAgIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgICAgICAgYm9yZGVyLXN0eWxlOiBzb2xpZDtcbiAgICAgICAgYm9yZGVyLXdpZHRoOiAxcHg7XG4gICAgfVxuXG4gICAgLm1lanMtY29udHJvbHMgLm1lanMtdGltZS1yYWlsIC5tZWpzLXRpbWUtZmxvYXQtY3VycmVudCB7XG4gICAgICAgIGxlZnQ6IDA7XG4gICAgICAgIGRpc3BsYXk6IGJsb2NrO1xuICAgICAgICB3aWR0aDogMzBweDtcbiAgICAgICAgbWFyZ2luOiAycHg7XG4gICAgICAgIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgICB9XG5cbiAgICAubWVqcy1jb250cm9scyAubWVqcy10aW1lLXJhaWwgLm1lanMtdGltZS1mbG9hdC1jb3JuZXIge1xuICAgICAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgICAgIHRvcDogMTVweDtcbiAgICAgICAgbGVmdDogMTNweDtcbiAgICAgICAgZGlzcGxheTogYmxvY2s7XG4gICAgICAgIGxpbmUtaGVpZ2h0OiAwO1xuICAgICAgICBib3JkZXItc3R5bGU6IHNvbGlkO1xuICAgICAgICBib3JkZXItd2lkdGg6IDVweDtcbiAgICAgICAgYm9yZGVyLXJhZGl1czogMDtcblxuICAgICAgICBAaW5jbHVkZSBzaXplKDApO1xuICAgIH1cblxuICAgIC5tZWpzLWNvbnRyb2xzIC5tZWpzLWZ1bGxzY3JlZW4tYnV0dG9uIGJ1dHRvbiB7XG4gICAgICAgIGJhY2tncm91bmQtcG9zaXRpb246IC0zMnB4IDA7XG4gICAgfVxuXG4gICAgLm1lanMtY29udHJvbHMgLm1lanMtdW5mdWxsc2NyZWVuIGJ1dHRvbiB7XG4gICAgICAgIGJhY2tncm91bmQtcG9zaXRpb246IC0zMnB4IC0xNnB4O1xuICAgIH1cblxuICAgIC5tZWpzLWNvbnRyb2xzIC5tZWpzLW11dGUgYnV0dG9uIHtcbiAgICAgICAgYmFja2dyb3VuZC1wb3NpdGlvbjogLTE2cHggLTE2cHg7XG4gICAgfVxuXG4gICAgLm1lanMtY29udHJvbHMgLm1lanMtdW5tdXRlIGJ1dHRvbiB7XG4gICAgICAgIGJhY2tncm91bmQtcG9zaXRpb246IC0xNnB4IDA7XG4gICAgfVxuXG4gICAgLm1lanMtY29udHJvbHMgLm1lanMtdm9sdW1lLWJ1dHRvbiB7XG4gICAgICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgICB9XG5cbiAgICAubWVqcy1jb250cm9scyAubWVqcy12b2x1bWUtYnV0dG9uIC5tZWpzLXZvbHVtZS1zbGlkZXIge1xuICAgICAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgICAgIHRvcDogLTExNXB4O1xuICAgICAgICBsZWZ0OiAwO1xuICAgICAgICB6LWluZGV4OiAxO1xuICAgICAgICBkaXNwbGF5OiBub25lO1xuICAgICAgICB3aWR0aDogMjVweDtcbiAgICAgICAgaGVpZ2h0OiAxMTVweDtcbiAgICAgICAgbWFyZ2luOiAwO1xuICAgICAgICBib3JkZXItcmFkaXVzOiAwO1xuICAgIH1cblxuICAgIC5tZWpzLWNvbnRyb2xzIC5tZWpzLXZvbHVtZS1idXR0b246aG92ZXIge1xuICAgICAgICBib3JkZXItcmFkaXVzOiAwIDAgNHB4IDRweDtcbiAgICB9XG5cbiAgICAubWVqcy1jb250cm9scyAubWVqcy12b2x1bWUtYnV0dG9uIC5tZWpzLXZvbHVtZS1zbGlkZXIgLm1lanMtdm9sdW1lLXRvdGFsIHtcbiAgICAgICAgcG9zaXRpb246IGFic29sdXRlO1xuICAgICAgICB0b3A6IDhweDtcbiAgICAgICAgbGVmdDogMTFweDtcbiAgICAgICAgd2lkdGg6IDJweDtcbiAgICAgICAgaGVpZ2h0OiAxMDBweDtcbiAgICAgICAgbWFyZ2luOiAwO1xuICAgIH1cblxuICAgIC5tZWpzLWNvbnRyb2xzIC5tZWpzLXZvbHVtZS1idXR0b24gLm1lanMtdm9sdW1lLXNsaWRlciAubWVqcy12b2x1bWUtY3VycmVudCB7XG4gICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICAgICAgdG9wOiA4cHg7XG4gICAgICAgIGxlZnQ6IDExcHg7XG4gICAgICAgIHdpZHRoOiAycHg7XG4gICAgICAgIGhlaWdodDogMTAwcHg7XG4gICAgICAgIG1hcmdpbjogMDtcbiAgICB9XG5cbiAgICAubWVqcy1jb250cm9scyAubWVqcy12b2x1bWUtYnV0dG9uIC5tZWpzLXZvbHVtZS1zbGlkZXIgLm1lanMtdm9sdW1lLWhhbmRsZSB7XG4gICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICAgICAgdG9wOiAtM3B4O1xuICAgICAgICBsZWZ0OiA0cHg7XG4gICAgICAgIHdpZHRoOiAxNnB4O1xuICAgICAgICBoZWlnaHQ6IDZweDtcbiAgICAgICAgbWFyZ2luOiAwO1xuICAgICAgICBib3JkZXItcmFkaXVzOiAxcHg7XG4gICAgICAgIGN1cnNvcjogbi1yZXNpemU7XG4gICAgfVxuXG4gICAgLm1lanMtY29udHJvbHMgLm1lanMtY2FwdGlvbnMtYnV0dG9uIHtcbiAgICAgICAgcG9zaXRpb246IHJlbGF0aXZlO1xuICAgIH1cblxuICAgIC5tZWpzLWNvbnRyb2xzIC5tZWpzLWNhcHRpb25zLWJ1dHRvbiBidXR0b24ge1xuICAgICAgICBiYWNrZ3JvdW5kLXBvc2l0aW9uOiAtNDhweCAwO1xuICAgIH1cblxuICAgIC5tZWpzLWNvbnRyb2xzIC5tZWpzLWNhcHRpb25zLWJ1dHRvbiAubWVqcy1jYXB0aW9ucy1zZWxlY3RvciB7XG4gICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICAgICAgcmlnaHQ6IC0xMHB4O1xuICAgICAgICBib3R0b206IDI2cHg7XG4gICAgICAgIHdpZHRoOiAxMzBweDtcbiAgICAgICAgaGVpZ2h0OiAxMDBweDtcbiAgICAgICAgcGFkZGluZzogMTBweDtcbiAgICAgICAgb3ZlcmZsb3c6IGhpZGRlbjtcbiAgICAgICAgYm9yZGVyLXN0eWxlOiBzb2xpZDtcbiAgICAgICAgYm9yZGVyLXdpZHRoOiAxcHg7XG4gICAgICAgIGJvcmRlci1yYWRpdXM6IDA7XG4gICAgICAgIHZpc2liaWxpdHk6IGhpZGRlbjtcbiAgICB9XG5cbiAgICAubWVqcy1jb250cm9scyAubWVqcy1jYXB0aW9ucy1idXR0b24gLm1lanMtY2FwdGlvbnMtc2VsZWN0b3IgdWwge1xuICAgICAgICBkaXNwbGF5OiBibG9jaztcbiAgICAgICAgbWFyZ2luOiAwO1xuICAgICAgICBwYWRkaW5nOiAwO1xuICAgICAgICBvdmVyZmxvdzogaGlkZGVuO1xuICAgIH1cblxuICAgIC5tZWpzLWNvbnRyb2xzIC5tZWpzLWNhcHRpb25zLWJ1dHRvbiAubWVqcy1jYXB0aW9ucy1zZWxlY3RvciB1bCBsaSB7XG4gICAgICAgIGRpc3BsYXk6IGJsb2NrO1xuICAgICAgICBtYXJnaW46IDAgMCA2cHggMDtcbiAgICAgICAgcGFkZGluZzogMDtcbiAgICAgICAgb3ZlcmZsb3c6IGhpZGRlbjtcbiAgICB9XG5cbiAgICAubWVqcy1jb250cm9scyAubWVqcy1jYXB0aW9ucy1idXR0b24gLm1lanMtY2FwdGlvbnMtc2VsZWN0b3IgdWwgbGkgaW5wdXQge1xuICAgICAgICBmbG9hdDogbGVmdDtcbiAgICAgICAgY2xlYXI6IGJvdGg7XG4gICAgICAgIG1hcmdpbjogM3B4IDNweCAwIDVweDtcbiAgICB9XG5cbiAgICAubWVqcy1jb250cm9scyAubWVqcy1jYXB0aW9ucy1idXR0b24gLm1lanMtY2FwdGlvbnMtc2VsZWN0b3IgdWwgbGkgbGFiZWwge1xuICAgICAgICBmbG9hdDogbGVmdDtcbiAgICAgICAgd2lkdGg6IDEwMHB4O1xuICAgICAgICBwYWRkaW5nOiA0cHggMCAwIDA7XG4gICAgfVxuXG4gICAgLm1lanMtY29udHJvbHMgLm1lanMtY2FwdGlvbnMtYnV0dG9uIC5tZWpzLWNhcHRpb25zLXRyYW5zbGF0aW9ucyB7XG4gICAgICAgIG1hcmdpbjogMCAwIDVweCAwO1xuICAgICAgICBmb250LXNpemU6IDEwcHg7XG4gICAgfVxuXG4gICAgLm1lanMtY2hhcHRlcnMge1xuICAgICAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgICAgIHRvcDogMDtcbiAgICAgICAgbGVmdDogMDtcbiAgICAgICAgd2lkdGg6IDEwMDAwcHg7XG4gICAgICAgIGJvcmRlci1yaWdodC13aWR0aDogMXB4O1xuICAgICAgICBib3JkZXItcmlnaHQtc3R5bGU6IHNvbGlkO1xuICAgIH1cblxuICAgIC5tZWpzLWNoYXB0ZXJzIC5tZWpzLWNoYXB0ZXIge1xuICAgICAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgICAgIGZsb2F0OiBsZWZ0O1xuICAgICAgICBvdmVyZmxvdzogaGlkZGVuO1xuICAgICAgICBib3JkZXI6IDA7XG4gICAgfVxuXG4gICAgLm1lanMtY2hhcHRlcnMgLm1lanMtY2hhcHRlciAubWVqcy1jaGFwdGVyLWJsb2NrIHtcbiAgICAgICAgZGlzcGxheTogYmxvY2s7XG4gICAgICAgIHBhZGRpbmc6IDVweDtcbiAgICAgICAgZm9udC1zaXplOiAxMXB4O1xuICAgICAgICBib3JkZXItcmlnaHQtd2lkdGg6IDFweDtcbiAgICAgICAgYm9yZGVyLXJpZ2h0LXN0eWxlOiBzb2xpZDtcbiAgICAgICAgYm9yZGVyLWJvdHRvbS13aWR0aDogMXB4O1xuICAgICAgICBib3JkZXItYm90dG9tLXN0eWxlOiBzb2xpZDtcbiAgICAgICAgY3Vyc29yOiBwb2ludGVyO1xuICAgIH1cblxuICAgIC5tZWpzLWNoYXB0ZXJzIC5tZWpzLWNoYXB0ZXIgLm1lanMtY2hhcHRlci1ibG9jay1sYXN0IHtcbiAgICAgICAgYm9yZGVyLXJpZ2h0OiBub25lO1xuICAgIH1cblxuICAgIC5tZWpzLWNoYXB0ZXJzIC5tZWpzLWNoYXB0ZXIgLm1lanMtY2hhcHRlci1ibG9jayAuY2gtdGl0bGUsXG4gICAgLm1lanMtY2hhcHRlcnMgLm1lanMtY2hhcHRlciAubWVqcy1jaGFwdGVyLWJsb2NrIC5jaC10aW1lc3BhbiB7XG4gICAgICAgIGRpc3BsYXk6IGJsb2NrO1xuICAgICAgICB3aGl0ZS1zcGFjZTogbm93cmFwO1xuICAgICAgICB0ZXh0LW92ZXJmbG93OiBlbGxpcHNpcztcbiAgICB9XG5cbiAgICAubWVqcy1jYXB0aW9ucy1sYXllciB7XG4gICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICAgICAgYm90dG9tOiAwO1xuICAgICAgICBsZWZ0OiAwO1xuICAgICAgICB0ZXh0LWFsaWduOiBjZW50ZXI7XG4gICAgfVxuXG4gICAgLm1lanMtY2FwdGlvbnMtcG9zaXRpb24ge1xuICAgICAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgICAgIGJvdHRvbTogMTVweDtcbiAgICAgICAgbGVmdDogMDtcbiAgICAgICAgd2lkdGg6IDEwMCU7XG4gICAgfVxuXG4gICAgLm1lanMtY2FwdGlvbnMtcG9zaXRpb24taG92ZXIge1xuICAgICAgICBib3R0b206IDQ1cHg7XG4gICAgfVxuXG4gICAgLm1lanMtY2FwdGlvbnMtdGV4dCB7XG4gICAgICAgIHBhZGRpbmc6IDNweCA1cHg7XG4gICAgfVxuXG4gICAgLm1lanMtY2xlYXIge1xuICAgICAgICBjbGVhcjogYm90aDtcbiAgICB9XG5cbiAgICAubWUtY2Fubm90cGxheSBzcGFuIHtcbiAgICAgICAgZGlzcGxheTogYmxvY2s7XG4gICAgICAgIHBhZGRpbmc6IDE1cHg7XG4gICAgfVxuXG4gICAgLm1lanMtY29udHJvbHMgLm1lanMtbG9vcC1vZmYgYnV0dG9uIHtcbiAgICAgICAgYmFja2dyb3VuZC1wb3NpdGlvbjogLTY0cHggLTE2cHg7XG4gICAgfVxuXG4gICAgLm1lanMtY29udHJvbHMgLm1lanMtbG9vcC1vbiBidXR0b24ge1xuICAgICAgICBiYWNrZ3JvdW5kLXBvc2l0aW9uOiAtNjRweCAwO1xuICAgIH1cblxuICAgIC5tZWpzLWNvbnRyb2xzIC5tZWpzLWJhY2tsaWdodC1vZmYgYnV0dG9uIHtcbiAgICAgICAgYmFja2dyb3VuZC1wb3NpdGlvbjogLTgwcHggLTE2cHg7XG4gICAgfVxuXG4gICAgLm1lanMtY29udHJvbHMgLm1lanMtYmFja2xpZ2h0LW9uIGJ1dHRvbiB7XG4gICAgICAgIGJhY2tncm91bmQtcG9zaXRpb246IC04MHB4IDA7XG4gICAgfVxuXG4gICAgLm1lanMtY29udHJvbHMgLm1lanMtcGljdHVyZWNvbnRyb2xzLWJ1dHRvbiB7XG4gICAgICAgIGJhY2tncm91bmQtcG9zaXRpb246IC05NnB4IDA7XG4gICAgfVxuXG4gICAgLm1lanMtY29udGV4dG1lbnUge1xuICAgICAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgICAgIHRvcDogMDtcbiAgICAgICAgbGVmdDogMDtcbiAgICAgICAgei1pbmRleDogMTAwMTsgLyogbWFrZSBzdXJlIGl0IHNob3dzIG9uIGZ1bGxzY3JlZW4gKi9cbiAgICAgICAgd2lkdGg6IDE1MHB4O1xuICAgICAgICBwYWRkaW5nOiAxMHB4O1xuXG4gICAgICAgIEBpbmNsdWRlIGJvcmRlcig0cHgpO1xuICAgIH1cblxuICAgIC5tZWpzLWNvbnRleHRtZW51IC5tZWpzLWNvbnRleHRtZW51LXNlcGFyYXRvciB7XG4gICAgICAgIGhlaWdodDogMXB4O1xuICAgICAgICBtYXJnaW46IDVweCA2cHg7XG4gICAgICAgIGZvbnQtc2l6ZTogMDtcbiAgICB9XG5cbiAgICAubWVqcy1jb250ZXh0bWVudSAubWVqcy1jb250ZXh0bWVudS1pdGVtIHtcbiAgICAgICAgcGFkZGluZzogNHB4IDZweDtcbiAgICAgICAgZm9udC1zaXplOiAxMnB4O1xuICAgICAgICBjdXJzb3I6IHBvaW50ZXI7XG4gICAgfVxufVxuIiwiLnZpYWZvdXJhLnZmLXRpcHN5IHtcbiAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgbWF4LXdpZHRoOiA4MCU7XG4gICAgcGFkZGluZzogNXB4O1xufVxuXG4udmlhZm91cmEudmYtZHJvcGRvd24ge1xuICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG4gICAgbWF4LXdpZHRoOiAxMDAlO1xuICAgIHBhZGRpbmctcmlnaHQ6IDA7XG4gICAgcGFkZGluZy1sZWZ0OiAwO1xufVxuXG4udmlhZm91cmEudmYtdGlwc3ksXG4udmlhZm91cmEudmYtZHJvcGRvd24ge1xuICAgIHotaW5kZXg6IDEwMDAwMDtcbiAgICBiYWNrZ3JvdW5kOiBub25lO1xuICAgIHRyYW5zZm9ybTogc2NhbGUoMC45OCwgMC45OCk7XG4gICAgb3BhY2l0eTogMDtcblxuICAgICYudmYtdGlwLWFuaW1hdGUge1xuICAgICAgICB0cmFuc2Zvcm06IHNjYWxlKDEsIDEpO1xuICAgICAgICBvcGFjaXR5OiAxO1xuICAgIH1cblxuICAgIC52Zi10aXBzeS1pbm5lciB7XG4gICAgICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgICAgICAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICAgICAgICBtaW4td2lkdGg6IDE1MHB4O1xuICAgICAgICBtYXgtd2lkdGg6IDUwMHB4O1xuICAgICAgICBwYWRkaW5nOiAwO1xuICAgICAgICBsZXR0ZXItc3BhY2luZzogMC4wM2VtO1xuICAgICAgICB0ZXh0LWFsaWduOiBjZW50ZXI7XG4gICAgfVxuXG4gICAgLnZmLXRpcHN5LWNvbnRlbnQtd3JhcHBlciB7XG4gICAgICAgIHBhZGRpbmc6IDE0cHggMTBweDtcbiAgICB9XG5cbiAgICAudmYtdGlwc3ktYXJyb3csXG4gICAgLnZmLXRpcHN5LWFycm93LWJvcmRlciB7XG4gICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICAgICAgei1pbmRleDogMTtcbiAgICAgICAgbGluZS1oZWlnaHQ6IDA7XG4gICAgICAgIGJvcmRlci1zdHlsZTogZGFzaGVkO1xuICAgICAgICBib3JkZXItd2lkdGg6IDhweDtcblxuICAgICAgICBAaW5jbHVkZSBzaXplKDApO1xuICAgIH1cblxuICAgIC8qIFRvb2x0aXAgKi9cbiAgICAudmYtdG9vbHRpcCB7XG4gICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICAgICAgei1pbmRleDogOTk5OTtcbiAgICAgICAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICAgICAgICBwYWRkaW5nOiA1cHggMTBweDtcbiAgICAgICAgYm9yZGVyLXN0eWxlOiBzb2xpZDtcbiAgICAgICAgYm9yZGVyLXdpZHRoOiAxcHg7XG4gICAgfVxuXG4gICAgLnZmLXRvb2x0aXA6OmFmdGVyIHtcbiAgICAgICAgcG9zaXRpb246IGFic29sdXRlO1xuICAgICAgICBib3R0b206IC0xMHB4O1xuICAgICAgICBsZWZ0OiAxMHB4O1xuICAgICAgICBkaXNwbGF5OiBibG9jaztcbiAgICAgICAgd2lkdGg6IDA7XG4gICAgICAgIGJvcmRlci1zdHlsZTogc29saWQ7XG4gICAgICAgIGJvcmRlci13aWR0aDogMTBweCAwIDAgMTBweDtcbiAgICB9XG59XG5cbi52aWFmb3VyYSB7XG4gICAgJi52Zi1oaWRlLXRpcCAudmYtdGlwc3ktYXJyb3csXG4gICAgJi52Zi1oaWRlLXRpcCAudmYtdGlwc3ktYXJyb3ctYm9yZGVyIHtcbiAgICAgICAgZGlzcGxheTogbm9uZTtcbiAgICB9XG5cbiAgICAmLnZmLXRpcHN5LW4ge1xuICAgICAgICBwYWRkaW5nLXRvcDogN3B4O1xuXG4gICAgICAgIC52Zi10aXBzeS1hcnJvdyxcbiAgICAgICAgLnZmLXRpcHN5LWFycm93LWJvcmRlciB7XG4gICAgICAgICAgICB0b3A6IDA7XG4gICAgICAgICAgICBsZWZ0OiA1MCU7XG4gICAgICAgICAgICBtYXJnaW4tbGVmdDogLThweDtcbiAgICAgICAgICAgIGJvcmRlci10b3A6IG5vbmU7XG4gICAgICAgICAgICBib3JkZXItYm90dG9tLXN0eWxlOiBzb2xpZDtcbiAgICAgICAgfVxuXG4gICAgICAgIC52Zi10aXBzeS1hcnJvdy1ib3JkZXIge1xuICAgICAgICAgICAgdG9wOiAtMXB4O1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgJi52Zi10aXBzeS1udyB7XG4gICAgICAgIHBhZGRpbmctdG9wOiA3cHg7XG5cbiAgICAgICAgLnZmLXRpcHN5LWFycm93LFxuICAgICAgICAudmYtdGlwc3ktYXJyb3ctYm9yZGVyIHtcbiAgICAgICAgICAgIHRvcDogMDtcbiAgICAgICAgICAgIGxlZnQ6IDIycHg7XG4gICAgICAgICAgICBib3JkZXItdG9wOiBub25lO1xuICAgICAgICAgICAgYm9yZGVyLWJvdHRvbS1zdHlsZTogc29saWQ7XG4gICAgICAgIH1cblxuICAgICAgICAudmYtdGlwc3ktYXJyb3ctYm9yZGVyIHtcbiAgICAgICAgICAgIHRvcDogLTFweDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgICYudmYtdGlwc3ktbmUge1xuICAgICAgICBwYWRkaW5nLXRvcDogN3B4O1xuXG4gICAgICAgIC52Zi10aXBzeS1hcnJvdyxcbiAgICAgICAgLnZmLXRpcHN5LWFycm93LWJvcmRlciB7XG4gICAgICAgICAgICB0b3A6IDA7XG4gICAgICAgICAgICByaWdodDogMjJweDtcbiAgICAgICAgICAgIGJvcmRlci10b3A6IG5vbmU7XG4gICAgICAgICAgICBib3JkZXItYm90dG9tLXN0eWxlOiBzb2xpZDtcbiAgICAgICAgfVxuXG4gICAgICAgIC52Zi10aXBzeS1hcnJvdy1ib3JkZXIge1xuICAgICAgICAgICAgdG9wOiAtMXB4O1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgJi52Zi10aXBzeS1zIHtcbiAgICAgICAgcGFkZGluZy1ib3R0b206IDdweDtcblxuICAgICAgICAudmYtdGlwc3ktYXJyb3csXG4gICAgICAgIC52Zi10aXBzeS1hcnJvdy1ib3JkZXIge1xuICAgICAgICAgICAgYm90dG9tOiAwO1xuICAgICAgICAgICAgbGVmdDogNTAlO1xuICAgICAgICAgICAgbWFyZ2luLWxlZnQ6IC04cHg7XG4gICAgICAgICAgICBib3JkZXItdG9wLXN0eWxlOiBzb2xpZDtcbiAgICAgICAgICAgIGJvcmRlci1ib3R0b206IG5vbmU7XG4gICAgICAgIH1cblxuICAgICAgICAudmYtdGlwc3ktYXJyb3ctYm9yZGVyIHtcbiAgICAgICAgICAgIGJvdHRvbTogLTFweDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgICYudmYtdGlwc3ktc3cge1xuICAgICAgICBwYWRkaW5nLWJvdHRvbTogN3B4O1xuXG4gICAgICAgIC52Zi10aXBzeS1hcnJvdyxcbiAgICAgICAgLnZmLXRpcHN5LWFycm93LWJvcmRlciB7XG4gICAgICAgICAgICBib3R0b206IDA7XG4gICAgICAgICAgICBsZWZ0OiAyMnB4O1xuICAgICAgICAgICAgYm9yZGVyLXRvcC1zdHlsZTogc29saWQ7XG4gICAgICAgICAgICBib3JkZXItYm90dG9tOiBub25lO1xuICAgICAgICB9XG5cbiAgICAgICAgLnZmLXRpcHN5LWFycm93LWJvcmRlciB7XG4gICAgICAgICAgICBib3R0b206IC0xcHg7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAmLnZmLXRpcHN5LXNlIHtcbiAgICAgICAgcGFkZGluZy1ib3R0b206IDdweDtcblxuICAgICAgICAudmYtdGlwc3ktYXJyb3csXG4gICAgICAgIC52Zi10aXBzeS1hcnJvdy1ib3JkZXIge1xuICAgICAgICAgICAgcmlnaHQ6IDIycHg7XG4gICAgICAgICAgICBib3R0b206IDA7XG4gICAgICAgICAgICBib3JkZXItdG9wLXN0eWxlOiBzb2xpZDtcbiAgICAgICAgICAgIGJvcmRlci1ib3R0b206IG5vbmU7XG4gICAgICAgIH1cblxuICAgICAgICAudmYtdGlwc3ktYXJyb3ctYm9yZGVyIHtcbiAgICAgICAgICAgIGJvdHRvbTogLTFweDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgICYudmYtdGlwc3ktZSB7XG4gICAgICAgIHBhZGRpbmctcmlnaHQ6IDdweDtcblxuICAgICAgICAudmYtdGlwc3ktYXJyb3csXG4gICAgICAgIC52Zi10aXBzeS1hcnJvdy1ib3JkZXIge1xuICAgICAgICAgICAgdG9wOiA1MCU7XG4gICAgICAgICAgICByaWdodDogMDtcbiAgICAgICAgICAgIG1hcmdpbi10b3A6IC04cHg7XG4gICAgICAgICAgICBib3JkZXItcmlnaHQ6IG5vbmU7XG4gICAgICAgICAgICBib3JkZXItbGVmdC1zdHlsZTogc29saWQ7XG4gICAgICAgIH1cblxuICAgICAgICAudmYtdGlwc3ktYXJyb3ctYm9yZGVyIHtcbiAgICAgICAgICAgIHJpZ2h0OiAtMXB4O1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgJi52Zi10aXBzeS13IHtcbiAgICAgICAgcGFkZGluZy1sZWZ0OiA3cHg7XG5cbiAgICAgICAgLnZmLXRpcHN5LWFycm93LFxuICAgICAgICAudmYtdGlwc3ktYXJyb3ctYm9yZGVyIHtcbiAgICAgICAgICAgIHRvcDogNTAlO1xuICAgICAgICAgICAgbGVmdDogMDtcbiAgICAgICAgICAgIG1hcmdpbi10b3A6IC04cHg7XG4gICAgICAgICAgICBib3JkZXItcmlnaHQtc3R5bGU6IHNvbGlkO1xuICAgICAgICAgICAgYm9yZGVyLWxlZnQ6IG5vbmU7XG4gICAgICAgIH1cblxuICAgICAgICAudmYtdGlwc3ktYXJyb3ctYm9yZGVyIHtcbiAgICAgICAgICAgIGxlZnQ6IC0xcHg7XG4gICAgICAgIH1cbiAgICB9XG59XG4iLCIkdmYtdmVyaWZpY2F0aW9uLXN0YXR1cy1pY29uLW1hcmdpbjogMTBweDtcbiR2Zi12ZXJpZmljYXRpb24tc3RhdHVzLWljb24td2lkdGg6IDE4cHg7XG5cbi52aWFmb3VyYSB7XG4gICAgLnZmLWVycm9yIHtcbiAgICAgICAgZGlzcGxheTogYmxvY2s7XG4gICAgICAgIG1hcmdpbjogNXB4IDAgMTBweDtcbiAgICB9XG5cbiAgICAudmYtc3VjY2Vzcy1tZXNzYWdlLFxuICAgIC52Zi1lcnJvci1tZXNzYWdlLFxuICAgIC52Zi1hbGVydCxcbiAgICAudmYtaW5mbyxcbiAgICAudmYtdmVyaWZpY2F0aW9uLW1lc3NhZ2UsXG4gICAgLnZmLXVzZXJuYW1lLW1vZGVyYXRpb24tbWVzc2FnZSxcbiAgICAudmYtYXZhdGFyLW1vZGVyYXRpb24tbWVzc2FnZSB7XG4gICAgICAgIEBpbmNsdWRlIGNvbW1lbnQtYWxlcnQtdGV4dCgpO1xuXG4gICAgICAgIGJvcmRlci1yYWRpdXM6IDRweDtcblxuICAgICAgICAmOmVtcHR5IHtcbiAgICAgICAgICAgIGRpc3BsYXk6IG5vbmU7IC8vIGdyYWIgbWVzc2FnZSBjb250YWluZXJzIHdpdGggbm8gY29udGVudCBpbiB0aGVtLlxuICAgICAgICB9XG4gICAgfVxuXG4gICAgLnZmLXN1Y2Nlc3MtbWVzc2FnZSBwLFxuICAgIC52Zi1lcnJvci1tZXNzYWdlIHAsXG4gICAgLnZmLWFsZXJ0IHAsXG4gICAgLnZmLWluZm8gcCxcbiAgICAudmYtdmVyaWZpY2F0aW9uLW1lc3NhZ2UgcCxcbiAgICAudmYtdXNlcm5hbWUtbW9kZXJhdGlvbi1tZXNzYWdlIHAgLnZmLWF2YXRhci1tb2RlcmF0aW9uLW1lc3NhZ2UgcCB7XG4gICAgICAgIG1hcmdpbjogMDtcbiAgICB9XG5cbiAgICAudmYtcHJvY2Vzc2luZy1zdGF0dXMgLnZmLXJlbW92ZWQge1xuICAgICAgICBtYXJnaW4tYm90dG9tOiAxMHB4O1xuICAgIH1cblxuICAgIC52Zi1jb21tZW50LWNvbnRlbnQge1xuICAgICAgICBAaW5jbHVkZSBib3JkZXIoNHB4KTtcbiAgICB9XG5cbiAgICAudmYtcmVtb3ZlZCB7XG4gICAgICAgIGRpc3BsYXk6IGJsb2NrO1xuICAgICAgICBtYXJnaW46IDA7XG4gICAgfVxuXG4gICAgLmlucHV0ICsgLnZmLWVycm9yIHtcbiAgICAgICAgbWFyZ2luOiAtNXB4IDAgMTBweDtcbiAgICB9XG5cbiAgICAudmYtY29tbWVudC1lZGl0IC52Zi1lcnJvci1tZXNzYWdlIHtcbiAgICAgICAgbWFyZ2luLWJvdHRvbTogMDtcbiAgICB9XG5cbiAgICAudmYtbW9kLWVycm9yIHtcbiAgICAgICAgcG9zaXRpb246IGFic29sdXRlO1xuICAgICAgICB0b3A6IC0xcHg7XG4gICAgICAgIHJpZ2h0OiAwO1xuICAgICAgICBsZWZ0OiAwO1xuICAgICAgICB6LWluZGV4OiAxO1xuICAgICAgICBoZWlnaHQ6IDIwcHg7XG4gICAgICAgIG1hcmdpbjogMDtcbiAgICAgICAgdGV4dC1hbGlnbjogY2VudGVyO1xuXG4gICAgICAgIEBpbmNsdWRlIGJvcmRlcigwKTtcbiAgICB9XG5cbiAgICAuaGFzLXRvcC1iYW5uZXIge1xuICAgICAgICBwYWRkaW5nLXRvcDogMzBweCAhaW1wb3J0YW50O1xuXG4gICAgICAgIC52Zi1tb2RlcmF0b3ItbWVudSB7XG4gICAgICAgICAgICB6LWluZGV4OiAyO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLnZmLXZlcmlmaWNhdGlvbi1zdGF0dXMge1xuICAgICAgICBAaW5jbHVkZSBmbGV4LWhvcml6b250YWwtbGlzdChmbGV4LXN0YXJ0LCBjZW50ZXIpO1xuICAgICAgICBAaW5jbHVkZSB2YXIoYmFja2dyb3VuZC1jb2xvciwgJ3ByaW1hcnktY29sb3ItMTUnKTtcblxuICAgICAgICBtYXJnaW4tdG9wOiAxNHB4O1xuICAgICAgICBwYWRkaW5nOiAxNXB4O1xuICAgICAgICBib3JkZXItcmFkaXVzOiAzcHg7XG4gICAgfVxuXG4gICAgLnZmLXZlcmlmaWNhdGlvbi1zdGF0dXMgLnZmLXZlcmlmaWNhdGlvbi1zdGF0dXMtbGlua3MtY29udGFpbmVyIHtcbiAgICAgICAgQGluY2x1ZGUgZmxleC1ob3Jpem9udGFsLWxpc3QoZmxleC1zdGFydCwgY2VudGVyKTtcbiAgICB9XG5cbiAgICAudmYtdmVyaWZpY2F0aW9uLWxpbmtzLXNlcGFyYXRvciB7XG4gICAgICAgIG1hcmdpbjogMCA1cHg7XG4gICAgfVxuXG4gICAgLnZmLXZlcmlmaWNhdGlvbi1zdGF0dXMgcCB7XG4gICAgICAgIG1hcmdpbjogOHB4IDA7XG4gICAgfVxuXG4gICAgLnZmLWNvbW1lbnQgLnZmLXZlcmlmaWNhdGlvbi1zdGF0dXMgcCB7XG4gICAgICAgIG1hcmdpbjogMDtcbiAgICB9XG5cbiAgICAudmYtY29tbWVudCAudmYtdmVyaWZpY2F0aW9uLXN0YXR1cyB1bCB7XG4gICAgICAgIG1hcmdpbi10b3A6IDhweDtcbiAgICB9XG5cbiAgICAudmYtdmVyaWZpY2F0aW9uLXN0YXR1cyAudmYtbWVzc2FnZSB7XG4gICAgICAgIGRpc3BsYXk6IGlubGluZS1mbGV4O1xuICAgICAgICBhbGlnbi1pdGVtczogY2VudGVyO1xuICAgICAgICB0ZXh0LWFsaWduOiBsZWZ0O1xuICAgIH1cblxuICAgIC52Zi12ZXJpZmljYXRpb24tc3RhdHVzIC52Zi1tZXNzYWdlIC52Zi1pbmZvcm1hdGlvbi1pY29uLWNvbnRhaW5lciB7XG4gICAgICAgIG1hcmdpbi1yaWdodDogJHZmLXZlcmlmaWNhdGlvbi1zdGF0dXMtaWNvbi1tYXJnaW47XG4gICAgfVxuXG4gICAgLnZmLXZlcmlmaWNhdGlvbi1zdGF0dXMgLnZmLW1lc3NhZ2UgLnZmLWluZm9ybWF0aW9uLWljb24tY29udGFpbmVyIHN2ZyB7XG4gICAgICAgIHZlcnRpY2FsLWFsaWduOiBtaWRkbGU7XG4gICAgfVxuXG4gICAgLnZmLXZlcmlmaWNhdGlvbi1zdGF0dXMgLnZmLW1lc3NhZ2UgLnZmLWluZm9ybWF0aW9uLWljb24tY29udGFpbmVyLXdhcm5pbmcsXG4gICAgLnZmLWF2YXRhci1jb250YWluZXIgLnZmLW1vZGVyYXRpb24tc3RhdHVzLWljb24udmYtcGVuZGluZyB7XG4gICAgICAgIHN2ZyB7XG4gICAgICAgICAgICBmaWxsOiAkdmYtbXVzdGFyZDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC52Zi12ZXJpZmljYXRpb24tc3RhdHVzIC52Zi1tZXNzYWdlIC52Zi1pbmZvcm1hdGlvbi1pY29uLWNvbnRhaW5lci1lcnJvcixcbiAgICAudmYtYXZhdGFyLWNvbnRhaW5lciAudmYtbW9kZXJhdGlvbi1zdGF0dXMtaWNvbi52Zi1yZWplY3RlZCB7XG4gICAgICAgIHN2ZyB7XG4gICAgICAgICAgICBmaWxsOiAkdmYtcmVkO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLnZmLXZlcmlmaWNhdGlvbi1zdGF0dXMgLnZmLW1lc3NhZ2UgLnZmLWluZm9ybWF0aW9uLWljb24tY29udGFpbmVyLWRpc2FibGVkIHN2ZyB7XG4gICAgICAgIEBpbmNsdWRlIHZhcihmaWxsLCAnZGFyay10ZXh0LW9uLWRlZmF1bHQtY29sb3InKTtcblxuICAgICAgICBmaWxsLW9wYWNpdHk6IDAuNjtcbiAgICB9XG5cbiAgICAudmYtaW5mb3JtYXRpb24tbWVzc2FnZS1kaXNhYmxlZCB7XG4gICAgICAgIG9wYWNpdHk6IDAuNTtcbiAgICB9XG5cbiAgICAudmYtc3VjY2Vzcy1tZXNzYWdlIGEsXG4gICAgLnZmLWVycm9yLW1lc3NhZ2UgYSxcbiAgICAudmYtYWxlcnQgYSxcbiAgICAudmYtaW5mbyBhIHtcbiAgICAgICAgQGluY2x1ZGUgY29tbWVudC1hbGVydC10ZXh0KCk7XG4gICAgfVxuXG4gICAgLnZmLW1vZGVyYXRpb24tc3RhdHVzLWljb24ge1xuICAgICAgICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG5cbiAgICAgICAgQGluY2x1ZGUgc2l6ZSgxLjFlbSk7XG5cbiAgICAgICAgYmFja2dyb3VuZC1pbWFnZTogdXJsKCRjb21wbGV0ZS1zcHJpdGUpO1xuICAgICAgICBiYWNrZ3JvdW5kLXJlcGVhdDogbm8tcmVwZWF0O1xuICAgIH1cblxuICAgIC52Zi1tb2RlcmF0aW9uLXN0YXR1cy1pbnB1dCxcbiAgICAudmYtbW9kZXJhdGlvbi1zdGF0dXMtaW5saW5lIHtcbiAgICAgICAgcG9zaXRpb246IHJlbGF0aXZlO1xuICAgICAgICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG4gICAgfVxuXG4gICAgLnZmLW1vZGVyYXRpb24tc3RhdHVzLWlucHV0IC52Zi1tb2RlcmF0aW9uLXN0YXR1cy1pY29uIHtcbiAgICAgICAgcG9zaXRpb246IGFic29sdXRlO1xuICAgICAgICB0b3A6IDAuNWVtO1xuICAgICAgICByaWdodDogMC41ZW07XG4gICAgfVxuXG4gICAgLnZmLW1vZGVyYXRpb24tc3RhdHVzLWlubGluZSAudmYtbW9kZXJhdGlvbi1zdGF0dXMtaWNvbiB7XG4gICAgICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgICAgICAgdG9wOiAtMC4xNWVtO1xuICAgICAgICB2ZXJ0aWNhbC1hbGlnbjogbWlkZGxlO1xuICAgIH1cblxuICAgIC52Zi1yZXNlbmQtdmVyaWZpY2F0aW9uLXN0YXR1cyB7XG4gICAgICAgIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgICAgICAgbWFyZ2luLWxlZnQ6IDVweDtcbiAgICB9XG5cbiAgICAudmYtcmVzZW5kLXZlcmlmaWNhdGlvbi1zdGF0dXMgLnZmLW1vZGVyYXRpb24tc3RhdHVzLWljb24ge1xuICAgICAgICB2ZXJ0aWNhbC1hbGlnbjogbWlkZGxlO1xuICAgIH1cblxuICAgIC52Zi1pY29uLXBlbmRpbmcge1xuICAgICAgICBiYWNrZ3JvdW5kLXBvc2l0aW9uOiAtNTBweCAtMTgwcHg7XG4gICAgfVxuXG4gICAgLnZmLWljb24tc3VjY2VzcyxcbiAgICAudmYtaWNvbi1hcHByb3ZlZCB7XG4gICAgICAgIGJhY2tncm91bmQtcG9zaXRpb246IC0xMzBweCAtMTgwcHg7XG4gICAgfVxuXG4gICAgLnZmLWljb24tZXJyb3IsXG4gICAgLnZmLWljb24tcmVqZWN0ZWQge1xuICAgICAgICBiYWNrZ3JvdW5kLXBvc2l0aW9uOiAtOTBweCAtMTgwcHg7XG4gICAgfVxuXG4gICAgLnZmLWF2YXRhci1jb250YWluZXIgLnZmLW1vZGVyYXRpb24tc3RhdHVzLWljb24ge1xuICAgICAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgICAgIHRvcDogMDtcbiAgICAgICAgcmlnaHQ6IDA7XG4gICAgICAgIGJhY2tncm91bmQtaW1hZ2U6IG5vbmU7XG4gICAgICAgIGJvcmRlci1yYWRpdXM6IDUwJTtcbiAgICAgICAgdHJhbnNmb3JtOiB0cmFuc2xhdGUoMjAlLCAtMjAlKTtcblxuICAgICAgICBAaW5jbHVkZSBiYWNrZ3JvdW5kKCRkZWZhdWx0LXBhbGV0dGUpO1xuICAgIH1cblxuICAgIC52Zi1ob3Jpem9udGFsLWxpc3QgLnZmLWF2YXRhci1jb250YWluZXIgLnZmLW1vZGVyYXRpb24tc3RhdHVzLWljb24ge1xuICAgICAgICB0b3A6IDAuMDVlbTtcbiAgICAgICAgbGVmdDogMi4yNWVtO1xuICAgIH1cblxuICAgIEBtZWRpYSBvbmx5IHNjcmVlbiBhbmQgKG1heC13aWR0aDogNjQwcHgpIHtcbiAgICAgICAgLnZmLXZlcmlmaWNhdGlvbi1zdGF0dXMge1xuICAgICAgICAgICAgZmxleC13cmFwOiB3cmFwO1xuXG4gICAgICAgICAgICAvLyBoYXZlIG1lc3NhZ2Ugc3BhbiB0aGUgd2hvbGUgd2lkdGggc28gbGlua3MgYXJlIHB1c2hlZCBkb3duXG4gICAgICAgICAgICAudmYtbWVzc2FnZSB7XG4gICAgICAgICAgICAgICAgd2lkdGg6IDEwMCU7XG4gICAgICAgICAgICB9XG5cbiAgICAgICAgICAgIC52Zi12ZXJpZmljYXRpb24tc3RhdHVzLWxpbmtzLWNvbnRhaW5lciB7XG4gICAgICAgICAgICAgICAgbWFyZ2luLWxlZnQ6IGNhbGMoI3skdmYtdmVyaWZpY2F0aW9uLXN0YXR1cy1pY29uLW1hcmdpbn0gKyAjeyR2Zi12ZXJpZmljYXRpb24tc3RhdHVzLWljb24td2lkdGh9KTtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuICAgIH1cbn1cbiIsIi52aWFmb3VyYSB7XG4gICAgLnZmLXJ0dyB7XG4gICAgICAgIG1hcmdpbi1ib3R0b206IDAuNGVtO1xuICAgICAgICBib3JkZXItYm90dG9tOiAxcHggc29saWQgI2NjY2NjYztcblxuICAgICAgICBoMSxcbiAgICAgICAgaDIsXG4gICAgICAgIGgzLFxuICAgICAgICBoNCxcbiAgICAgICAgcCB7XG4gICAgICAgICAgICBjbGVhcjogbm9uZTtcbiAgICAgICAgICAgIG1hcmdpbjogMDtcbiAgICAgICAgICAgIHBhZGRpbmc6IDA7XG4gICAgICAgIH1cblxuICAgICAgICAudmYtZGlzbGlrZXM6OmJlZm9yZSB7XG4gICAgICAgICAgICBjb250ZW50OiBcIlxcZTYxNFwiO1xuICAgICAgICB9XG5cbiAgICAgICAgLnZmLXNvcnQtbGlrZXMgLnZmLXdpZGdldC1kZXNjOjpiZWZvcmUsXG4gICAgICAgIC52Zi1saWtlczo6YmVmb3JlIHtcbiAgICAgICAgICAgIGNvbnRlbnQ6IFwiXFxlNjEzXCI7XG4gICAgICAgIH1cblxuICAgICAgICAudmYtc29ydC1yZXBsaWVzIC52Zi13aWRnZXQtZGVzYzo6YmVmb3JlLFxuICAgICAgICAudmYtcmVwbGllczo6YmVmb3JlIHtcbiAgICAgICAgICAgIGNvbnRlbnQ6IFwiXFxlNjA4XCI7XG4gICAgICAgIH1cblxuICAgICAgICAudmYtcnR3LWFydGljbGUtaW1hZ2Uge1xuICAgICAgICAgICAgYmFja2dyb3VuZC1yZXBlYXQ6IG5vLXJlcGVhdDtcbiAgICAgICAgICAgIGJhY2tncm91bmQtcG9zaXRpb246IGNlbnRlciBjZW50ZXI7XG4gICAgICAgICAgICBiYWNrZ3JvdW5kLXNpemU6IGNvdmVyO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLnZmLXJ0dy1tYWluLWhlYWRlciB7XG4gICAgICAgIG1hcmdpbjogMDtcbiAgICAgICAgcGFkZGluZzogMCAwIDZweDtcbiAgICAgICAgdGV4dC10cmFuc2Zvcm06IHVwcGVyY2FzZTtcbiAgICAgICAgYm9yZGVyLWJvdHRvbS1jb2xvcjogIzk3OTc5NztcblxuICAgICAgICBAaW5jbHVkZSBib3JkZXItYm90dG9tKDAsIHNvbGlkLCAycHgpO1xuXG4gICAgICAgIC52Zi13aWRnZXQtZGVzYyB7XG4gICAgICAgICAgICBmbG9hdDogcmlnaHQ7XG4gICAgICAgICAgICB0ZXh0LWFsaWduOiByaWdodDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC52Zi1ydHctbGlzdCB7XG4gICAgICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgICAgICAgb3ZlcmZsb3c6IGhpZGRlbjtcbiAgICAgICAgLXdlYmtpdC10cmFuc2l0aW9uOiBoZWlnaHQgMC40cyBlYXNlLWluLW91dDtcbiAgICAgICAgdHJhbnNpdGlvbjogaGVpZ2h0IDAuNHMgZWFzZS1pbi1vdXQ7XG4gICAgfVxuXG4gICAgLnZmLXJ0dy1saXN0IC52Zi1ydHctYXJ0aWNsZS1pdGVtLFxuICAgIC52Zi1ydHctbGlzdCAudmYtY29tbWVudCxcbiAgICAudmYtcnR3LWxpc3QgLnZmLXJ0dy11c2VyLWl0ZW0ge1xuICAgICAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgICAgIHRvcDogMDtcbiAgICAgICAgcmlnaHQ6IDA7XG4gICAgICAgIGxlZnQ6IDA7XG4gICAgICAgIHotaW5kZXg6IDA7XG4gICAgICAgIGJveC1zaGFkb3c6IDAgMCAwIHRyYW5zcGFyZW50O1xuICAgICAgICB0cmFuc2Zvcm06IHRyYW5zbGF0ZVkoMCk7XG5cbiAgICAgICAgQGluY2x1ZGUgYmFja2dyb3VuZCgkZGVmYXVsdC1wYWxldHRlKTtcbiAgICB9XG5cbiAgICAudmYtcnR3LXNsaWRlIHtcbiAgICAgICAgLXdlYmtpdC10cmFuc2l0aW9uOiB0cmFuc2Zvcm0gMC40cyBlYXNlLWluLW91dDtcbiAgICAgICAgdHJhbnNpdGlvbjogdHJhbnNmb3JtIDAuNHMgZWFzZS1pbi1vdXQ7XG4gICAgfVxuXG4gICAgLnZmLXJ0dy1wYWdlcyxcbiAgICAudmYtcnR3LXBhZ2VzLW1pbmkge1xuICAgICAgICBoMSxcbiAgICAgICAgcCB7XG4gICAgICAgICAgICBvdmVyZmxvdzogaGlkZGVuO1xuXG4gICAgICAgICAgICAvKiB0cnVuY2F0ZSB0byBvbmUgbGluZSAqL1xuICAgICAgICAgICAgd2hpdGUtc3BhY2U6IG5vd3JhcDtcbiAgICAgICAgICAgIHRleHQtb3ZlcmZsb3c6IGVsbGlwc2lzO1xuICAgICAgICB9XG5cbiAgICAgICAgcCB7XG4gICAgICAgICAgICBtYXJnaW4tdG9wOiAwLjJlbTtcbiAgICAgICAgICAgIGNvbG9yOiAjNDQ0NDQ0O1xuICAgICAgICB9XG5cbiAgICAgICAgYTpob3ZlciB7XG4gICAgICAgICAgICB0ZXh0LWRlY29yYXRpb246IHVuZGVybGluZTtcbiAgICAgICAgfVxuXG4gICAgICAgIC52Zi1ydHctYnViYmxlIHtcbiAgICAgICAgICAgIG1heC13aWR0aDogOHB4O1xuICAgICAgICB9XG5cbiAgICAgICAgLnZmLXJ0dy1idWJibGUtc3ZnLXBhdGgge1xuICAgICAgICAgICAgZmlsbDogIzRjNGI0YjtcbiAgICAgICAgfVxuXG4gICAgICAgIC52Zi1ydHctYXJ0aWNsZS1pdGVtIHtcbiAgICAgICAgICAgIG1hcmdpbjogMDtcbiAgICAgICAgICAgIHBhZGRpbmc6IDZweCAwO1xuICAgICAgICB9XG5cbiAgICAgICAgLnZmLXJ0dy1hcnRpY2xlLXRpdGxlIHtcbiAgICAgICAgICAgIC13ZWJraXQtdHJhbnNpdGlvbjogb3BhY2l0eSAwLjJzIGVhc2UtaW4tb3V0O1xuICAgICAgICAgICAgdHJhbnNpdGlvbjogb3BhY2l0eSAwLjJzIGVhc2UtaW4tb3V0O1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLnZmLXJ0dy1wYWdlcyB7XG4gICAgICAgIC52Zi1ydHctYXJ0aWNsZS1pbWFnZSB7XG4gICAgICAgICAgICBmbG9hdDogcmlnaHQ7XG5cbiAgICAgICAgICAgIEBpbmNsdWRlIHNpemUoM2VtKTtcblxuICAgICAgICAgICAgbWFyZ2luLWxlZnQ6IDAuM2VtO1xuICAgICAgICB9XG5cbiAgICAgICAgLnZmLXJ0dy1jb21tZW50LWxpbmsge1xuICAgICAgICAgICAgZGlzcGxheTogYmxvY2s7XG4gICAgICAgICAgICBtYXJnaW4tdG9wOiAwLjZlbTtcbiAgICAgICAgICAgIGNvbG9yOiAjM2QzZDNkO1xuXG4gICAgICAgICAgICAmOjpiZWZvcmUge1xuICAgICAgICAgICAgICAgIGNvbG9yOiAjNGM0YjRiO1xuICAgICAgICAgICAgICAgIGNvbnRlbnQ6IFwiXFxlNjE2XCI7XG4gICAgICAgICAgICB9XG4gICAgICAgIH1cblxuICAgICAgICAudmYtcnR3LWNvdW50LXRvdGFsIHtcbiAgICAgICAgICAgIHBhZGRpbmctcmlnaHQ6IDAuNGVtO1xuICAgICAgICB9XG5cbiAgICAgICAgLnZmLXJ0dy1jb3VudC1wcmV2aW91cyB7XG4gICAgICAgICAgICBmb250LXNpemU6IDAuOWVtO1xuICAgICAgICAgICAgZm9udC1zdHlsZTogaXRhbGljO1xuICAgICAgICB9XG5cbiAgICAgICAgLnZmLXJ0dy1jb21tZW50cy1sYWJlbCB7XG4gICAgICAgICAgICBwYWRkaW5nLWxlZnQ6IDAuM2VtO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLnZmLXJ0dy1wYWdlcy1taW5pIHtcbiAgICAgICAgLnZmLXJ0dy1saXN0IHtcbiAgICAgICAgICAgIG1hcmdpbjogNHB4IDA7XG4gICAgICAgIH1cblxuICAgICAgICAudmYtcnR3LWFydGljbGUtaXRlbSB7XG4gICAgICAgICAgICBtYXJnaW46IDA7XG4gICAgICAgICAgICBwYWRkaW5nOiAycHggMDtcbiAgICAgICAgfVxuXG4gICAgICAgIC52Zi1ydHctY291bnQtdG90YWwge1xuICAgICAgICAgICAgZmxvYXQ6IHJpZ2h0O1xuICAgICAgICAgICAgbWFyZ2luLWxlZnQ6IDAuM2VtOyAvLyBzbyBlbGxpcHNlcyBkb250IGhpdCB0aGlzLlxuICAgICAgICAgICAgJjo6YWZ0ZXIge1xuICAgICAgICAgICAgICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgICAgICAgICAgICAgICB0b3A6IDFweDtcbiAgICAgICAgICAgICAgICBtYXJnaW4tbGVmdDogNnB4O1xuICAgICAgICAgICAgICAgIGNvbG9yOiAjNGM0YjRiO1xuICAgICAgICAgICAgICAgIGZvbnQtc2l6ZTogMTJweDtcbiAgICAgICAgICAgICAgICBjb250ZW50OiBcIlxcZTYxNlwiO1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG5cbiAgICAgICAgLnZmLXJ0dy1taW5pLWxpbmsge1xuICAgICAgICAgICAgZGlzcGxheTogYmxvY2s7XG4gICAgICAgIH1cblxuICAgICAgICAudmYtcnR3LWhhcy1pbWFnZSB7XG4gICAgICAgICAgICBoZWlnaHQ6IDEuNWVtO1xuICAgICAgICB9XG5cbiAgICAgICAgLnZmLXJ0dy1hcnRpY2xlLWltYWdlIHtcbiAgICAgICAgICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgICAgICAgICAgIGRpc3BsYXk6IG5vbmU7XG4gICAgICAgICAgICBmbG9hdDogbGVmdDtcbiAgICAgICAgICAgIG1hcmdpbi1yaWdodDogMC4zZW07XG5cbiAgICAgICAgICAgIEBpbmNsdWRlIHNpemUoMS41ZW0pO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLnZmLXJ0dy1jb21tZW50cyB7XG4gICAgICAgIC52Zi1jb21tZW50LWNvdW50ZXJzIGg0IHtcbiAgICAgICAgICAgIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgICAgICAgfVxuXG4gICAgICAgIC52Zi13aWRnZXQtZGVzYyB7XG4gICAgICAgICAgICBtYXJnaW46IDA7XG4gICAgICAgICAgICBwYWRkaW5nOiAwO1xuICAgICAgICB9XG5cbiAgICAgICAgLnZmLWFydGljbGUtbGluayxcbiAgICAgICAgLnZmLWNvbW1lbnQtc3VtbWFyeSBwIHtcbiAgICAgICAgICAgIG92ZXJmbG93OiBoaWRkZW47XG4gICAgICAgIH1cblxuICAgICAgICAudmYtYXJ0aWNsZS1saW5rIHtcbiAgICAgICAgICAgIGRpc3BsYXk6IGJsb2NrO1xuICAgICAgICAgICAgbWFyZ2luOiAwIDAgMTBweDtcbiAgICAgICAgICAgIG92ZXJmbG93OiBoaWRkZW47XG4gICAgICAgICAgICB3aGl0ZS1zcGFjZTogbm93cmFwO1xuICAgICAgICAgICAgdGV4dC1vdmVyZmxvdzogZWxsaXBzaXM7XG4gICAgICAgICAgICB0cmFuc2l0aW9uOiBvcGFjaXR5IDAuMnMgZWFzZS1pbi1vdXQ7XG5cbiAgICAgICAgICAgICY6aG92ZXIge1xuICAgICAgICAgICAgICAgIHRleHQtZGVjb3JhdGlvbjogdW5kZXJsaW5lO1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG5cbiAgICAgICAgLnZmLXJ0dy1yZXBseS1saW5rIHtcbiAgICAgICAgICAgIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgICAgICAgICAgIGZvbnQtc2l6ZTogMC44MTI1ZW07XG5cbiAgICAgICAgICAgICY6aG92ZXIge1xuICAgICAgICAgICAgICAgIGNvbG9yOiAjNjRiZDYwO1xuICAgICAgICAgICAgICAgIHRleHQtZGVjb3JhdGlvbjogdW5kZXJsaW5lO1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG5cbiAgICAgICAgLnZmLXJ0dy1hcnRpY2xlLWltYWdlIHtcbiAgICAgICAgICAgIEBpbmNsdWRlIHNpemUoM2VtKTtcblxuICAgICAgICAgICAgZmxvYXQ6IGxlZnQ7XG4gICAgICAgICAgICBtYXJnaW4tcmlnaHQ6IDAuM2VtO1xuICAgICAgICB9XG5cbiAgICAgICAgLnZmLWNvbW1lbnQge1xuICAgICAgICAgICAgcGFkZGluZzogNnB4IDA7XG4gICAgICAgIH1cblxuICAgICAgICAudmYtY29tbWVudC1zdW1tYXJ5IHtcbiAgICAgICAgICAgIHAge1xuICAgICAgICAgICAgICAgIGhlaWdodDogMS4zZW0gKiAyO1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG5cbiAgICAgICAgLnZmLWNvbW1lbnQtY291bnRlcnMge1xuICAgICAgICAgICAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuXG4gICAgICAgICAgICBoNCB7XG4gICAgICAgICAgICAgICAgY29sb3I6ICNhMGEwYTA7XG5cbiAgICAgICAgICAgICAgICAmOmZpcnN0LW9mLXR5cGUge1xuICAgICAgICAgICAgICAgICAgICBtYXJnaW4tcmlnaHQ6IDEwcHg7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAudmYtbGlrZXM6OmJlZm9yZSxcbiAgICAgICAgICAgIC52Zi1kaXNsaWtlczo6YmVmb3JlLFxuICAgICAgICAgICAgLnZmLXJlcGxpZXM6OmJlZm9yZSB7XG4gICAgICAgICAgICAgICAgcGFkZGluZy1yaWdodDogM3B4O1xuICAgICAgICAgICAgICAgIGNvbG9yOiAjYTBhMGEwO1xuICAgICAgICAgICAgICAgIGZvbnQtc2l6ZTogMTFweDtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuXG4gICAgICAgIC52Zi1zb3J0LXJlcGxpZXMgLnZmLXdpZGdldC1kZXNjOjpiZWZvcmUge1xuICAgICAgICAgICAgcGFkZGluZy1yaWdodDogNHB4O1xuICAgICAgICB9XG5cbiAgICAgICAgLnZmLXNvcnQtbGlrZXMgLnZmLXdpZGdldC1kZXNjOjpiZWZvcmUge1xuICAgICAgICAgICAgcG9zaXRpb246IHJlbGF0aXZlO1xuICAgICAgICAgICAgdG9wOiAxcHg7XG4gICAgICAgICAgICBwYWRkaW5nLXJpZ2h0OiAycHg7XG4gICAgICAgICAgICBmb250LXNpemU6IDEuMmVtO1xuICAgICAgICB9XG5cbiAgICAgICAgLnZmLXNvcnQtcmVwbGllcyAudmYtcmVwbGllczo6YmVmb3JlLFxuICAgICAgICAudmYtc29ydC1saWtlcyAudmYtbGlrZXM6OmJlZm9yZSxcbiAgICAgICAgLnZmLXNvcnQtcmVwbGllcyAudmYtcmVwbGllcyxcbiAgICAgICAgLnZmLXNvcnQtbGlrZXMgLnZmLWxpa2VzIHtcbiAgICAgICAgICAgIEBpbmNsdWRlIGRhcmstdGV4dCgkZGVmYXVsdC1wYWxldHRlKTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC52Zi1ydHctdXNlci1pdGVtIHtcbiAgICAgICAgcGFkZGluZzogNnB4IDA7XG5cbiAgICAgICAgaW1nIHtcbiAgICAgICAgICAgIEBpbmNsdWRlIHNpemUoMjZweCk7XG5cbiAgICAgICAgICAgIG1hcmdpbi1yaWdodDogNHB4O1xuICAgICAgICAgICAgYm9yZGVyOiAxcHggc29saWQgI2IzYjNiMztcbiAgICAgICAgICAgIGJvcmRlci1yYWRpdXM6IDNweDtcbiAgICAgICAgfVxuXG4gICAgICAgIC52Zi1ydHctdXNlci1saW5rIHtcbiAgICAgICAgICAgIGRpc3BsYXk6IGJsb2NrO1xuICAgICAgICB9XG5cbiAgICAgICAgLnZmLXJ0dy1jb21tZW50LWNvdW50IHtcbiAgICAgICAgICAgIGZsb2F0OiByaWdodDtcblxuICAgICAgICAgICAgJjo6YWZ0ZXIge1xuICAgICAgICAgICAgICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgICAgICAgICAgICAgICB0b3A6IDFweDtcbiAgICAgICAgICAgICAgICBtYXJnaW4tbGVmdDogNnB4O1xuICAgICAgICAgICAgICAgIGNvbG9yOiAjNGM0YjRiO1xuICAgICAgICAgICAgICAgIGZvbnQtc2l6ZTogMTJweDtcbiAgICAgICAgICAgICAgICBjb250ZW50OiBcIlxcZTYxNlwiO1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG4gICAgfVxuICAgIC8vIC4uLmV0Y1xuXG4gICAgLnZmLXJvbGxpbmcge1xuICAgICAgICAtd2Via2l0LWZvbnQtZmVhdHVyZS1zZXR0aW5nczogJ3RudW0nIDEsICdsbnVtJyAxLCAnb251bScgMCwgJ2tlcm4nIDA7XG4gICAgICAgIC1tb3otZm9udC1mZWF0dXJlLXNldHRpbmdzOiAndG51bScgMSwgJ2xudW0nIDEsICdvbnVtJyAwLCAna2VybicgMDtcbiAgICAgICAgLW1zLWZvbnQtZmVhdHVyZS1zZXR0aW5nczogJ3RudW0nIDEsICdsbnVtJyAxLCAnb251bScgMCwgJ2tlcm4nIDA7XG4gICAgICAgIGZvbnQtZmVhdHVyZS1zZXR0aW5nczogJ3RudW0nIDEsICdsbnVtJyAxLCAnb251bScgMCwgJ2tlcm4nIDA7XG4gICAgICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgICAgICAgZGlzcGxheTogaW5saW5lLXRhYmxlOyAvLyBzb3J0cyBvdXQgaGVpZ2h0IGlzc3VlLlxuICAgICAgICBvdmVyZmxvdzogaGlkZGVuO1xuXG4gICAgICAgIC52Zi1yb2xsaW5nLWNoaWxkIHtcbiAgICAgICAgICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgICAgICAgICAgIG92ZXJmbG93OiBoaWRkZW47XG4gICAgICAgIH1cblxuICAgICAgICAucmF3LW51bWJlciB7XG4gICAgICAgICAgICAvLyBqdXN0IHRvIG1haW50YWluIHNpemluZyBhbmQgbWF5YmUgYXJpYVxuICAgICAgICAgICAgdmlzaWJpbGl0eTogaGlkZGVuO1xuICAgICAgICB9XG5cbiAgICAgICAgLnJvbGxlci1udW1iZXIge1xuICAgICAgICAgICAgcG9zaXRpb246IGFic29sdXRlO1xuICAgICAgICAgICAgdG9wOiAwO1xuICAgICAgICAgICAgcmlnaHQ6IDA7XG4gICAgICAgICAgICBoZWlnaHQ6IDFlbTtcbiAgICAgICAgICAgIHdoaXRlLXNwYWNlOiBub3dyYXA7XG4gICAgICAgICAgICB0ZXh0LWFsaWduOiByaWdodDtcbiAgICAgICAgICAgIHRyYW5zZm9ybTogdHJhbnNsYXRlWSgwJSk7XG5cbiAgICAgICAgICAgIHNwYW4ge1xuICAgICAgICAgICAgICAgIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgICAgICAgICAgICAgICB0cmFuc2Zvcm06IHRyYW5zbGF0ZVkoMCUpO1xuICAgICAgICAgICAgICAgIG9wYWNpdHk6IDE7XG4gICAgICAgICAgICB9XG5cbiAgICAgICAgICAgIC50cmFuc2l0aW9uYWJsZSB7XG4gICAgICAgICAgICAgICAgdHJhbnNpdGlvbjogYWxsIDAuMnMgZWFzZS1pbi1vdXQ7XG4gICAgICAgICAgICB9XG4gICAgICAgIH1cblxuICAgICAgICAucm9sbGVyLW51bWJlci1sZWZ0IHtcbiAgICAgICAgICAgIGxlZnQ6IDA7XG4gICAgICAgICAgICB0ZXh0LWFsaWduOiBsZWZ0O1xuICAgICAgICB9XG5cbiAgICAgICAgLnJvbGxlci1wcmV2IHtcbiAgICAgICAgICAgIHRyYW5zZm9ybTogdHJhbnNsYXRlWSgtMTAwJSk7XG4gICAgICAgIH1cblxuICAgICAgICAucm9sbGVyLW5leHQge1xuICAgICAgICAgICAgdHJhbnNmb3JtOiB0cmFuc2xhdGVZKDEwMCUpO1xuICAgICAgICB9XG5cbiAgICAgICAgJjo6YWZ0ZXIge1xuICAgICAgICAgICAgZGlzcGxheTogbm9uZSAhaW1wb3J0YW50O1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLnZmLXB1bGwtcXVvdGUtY291bnRlcnMsXG4gICAgLnZmLXJ0dy1jb21tZW50LWNvdW50LFxuICAgIC52Zi1ydHctY29tbWVudC1saW5rLFxuICAgIC52Zi1ydHctY291bnQtdG90YWwsXG4gICAgLnZmLWNvbW1lbnQtY291bnRlcnMsXG4gICAgLnRyYW5zaXRpb25hYmxlIHtcbiAgICAgICAgb3ZlcmZsb3c6IGhpZGRlbjtcbiAgICB9XG59XG4iLCIudmlhZm91cmEge1xuICAgIC52Zi1kcm9wZG93biAudmYtY29tbWVudC1hY3Rpb24tYnRuLFxuICAgIC52Zi1kcm9wZG93biAudmYtc2hhcmUtbGlzdC1saW5rLFxuICAgIC52Zi1kcm9wZG93biAudmYtaGlkZS1zaGFyZS1idG4ge1xuICAgICAgICB3aWR0aDogMTAwJTtcbiAgICAgICAgcGFkZGluZzogMTBweDtcbiAgICAgICAgdGV4dC1hbGlnbjogbGVmdDtcbiAgICAgICAgYmFja2dyb3VuZDogbm9uZTtcbiAgICAgICAgYm9yZGVyOiBub25lO1xuICAgICAgICBib3gtc2hhZG93OiBub25lO1xuICAgIH1cblxuICAgIC52Zi1kcm9wZG93biAudmYtY29tbWVudC1hY3Rpb24tYnRuIC52Zi1mbGV4LWNvbnRhaW5lciB7XG4gICAgICAgIEBpbmNsdWRlIGZsZXgtaG9yaXpvbnRhbC1saXN0KGZsZXgtc3RhcnQsIGNlbnRlcik7XG4gICAgICAgIEBpbmNsdWRlIGxpc3Qtc3BhY2luZy1sZWZ0KDEwcHgpO1xuICAgIH1cblxuICAgIC52Zi1kcm9wZG93biAudmYtaGlkZS1zaGFyZS1idG4ge1xuICAgICAgICBwYWRkaW5nOiA1cHg7XG5cbiAgICAgICAgQGluY2x1ZGUgYm9yZGVyLWJvdHRvbSgpO1xuICAgIH1cblxuICAgIC52Zi1kcm9wZG93biAudmYtZmxleC1jb250YWluZXIgLnZmLW9wZW4tc2hhcmUtaWNvbiB7XG4gICAgICAgIG1hcmdpbi1sZWZ0OiBhdXRvO1xuICAgIH1cblxuICAgIC52Zi1kcm9wZG93biAudmYtaGlkZS1zaGFyZS1pY29uIHN2ZyB7XG4gICAgICAgIHRyYW5zZm9ybTogcm90YXRlKDE4MGRlZyk7XG4gICAgfVxuXG4gICAgLnZmLWRyb3Bkb3duIC52Zi1jb21tZW50LWFjdGlvbnMtbWVudSBsaSB7XG4gICAgICAgIEBpbmNsdWRlIGJvcmRlci1ib3R0b20oKTtcbiAgICB9XG59XG4iLCIudmlhZm91cmEge1xuICAgIC52Zi1tb3JlLWFjdGlvbnMgLnZmLWRyb3Bkb3duIHtcbiAgICAgICAgb3BhY2l0eTogMCAhaW1wb3J0YW50O1xuICAgIH1cblxuICAgIC52Zi1zaG93LWRyb3Bkb3duIC52Zi1kcm9wZG93biB7XG4gICAgICAgIG9wYWNpdHk6IDEgIWltcG9ydGFudDtcbiAgICB9XG5cbiAgICAudmYtbW9yZS1hY3Rpb25zLW1lbnUge1xuICAgICAgICBwb3NpdGlvbjogYWJzb2x1dGUgIWltcG9ydGFudDtcbiAgICAgICAgei1pbmRleDogLTEgIWltcG9ydGFudDtcbiAgICAgICAgaGVpZ2h0OiAwICFpbXBvcnRhbnQ7XG5cbiAgICAgICAgLnZmLWRyb3Bkb3duIHtcbiAgICAgICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICAgICAgICAgIGJvdHRvbTogMThweDsgLy8gRmx5IHVwIGZvciB3ZWlyZCBTYWZhcmkgYnVncyBhdCB0aGUgYm90dG9tIG9mIHRoZSBwYWdlXG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAudmYtbW9yZS1hY3Rpb25zLW1lbnUudmYtc2hvdy1kcm9wZG93biB7XG4gICAgICAgIHotaW5kZXg6IDUgIWltcG9ydGFudDtcbiAgICAgICAgaGVpZ2h0OiBhdXRvICFpbXBvcnRhbnQ7XG4gICAgfVxufVxuIiwiLnZpYWZvdXJhIHtcbiAgICAudmYtZHJvcGRvd24ge1xuICAgICAgICAudmYtY29tbWVudC1hY3Rpb24tYnRuLFxuICAgICAgICAudmYtc2hhcmUtbGlzdC1saW5rLFxuICAgICAgICAudmYtaGlkZS1zaGFyZS1idG4sXG4gICAgICAgIC52Zi1jb21tZW50LWFjdGlvbi1idG46dmlzaXRlZCxcbiAgICAgICAgLnZmLXNoYXJlLWxpc3QtbGluazp2aXNpdGVkLFxuICAgICAgICAudmYtaGlkZS1zaGFyZS1idG46dmlzaXRlZCB7XG4gICAgICAgICAgICBAaW5jbHVkZSBsaWdodC10ZXh0KCRkZWZhdWx0LXBhbGV0dGUpO1xuXG4gICAgICAgICAgICAmOmhvdmVyLFxuICAgICAgICAgICAgJjpmb2N1cyB7XG4gICAgICAgICAgICAgICAgQGluY2x1ZGUgZGFyay10ZXh0KCRkZWZhdWx0LXBhbGV0dGUpO1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG5cbiAgICAgICAgLnZmLWNvbW1lbnQtYWN0aW9uLWJ0biBzdmcsXG4gICAgICAgIC52Zi1zaGFyZS1saXN0LWxpbmsgc3ZnLFxuICAgICAgICAudmYtaGlkZS1zaGFyZS1idG4gc3ZnIHtcbiAgICAgICAgICAgIEBpbmNsdWRlIHZhcihmaWxsLCAnbGlnaHQtdGV4dC1vbi1kZWZhdWx0LWNvbG9yJyk7XG4gICAgICAgIH1cblxuICAgICAgICAudmYtY29tbWVudC1hY3Rpb24tYnRuOmhvdmVyIHN2ZyxcbiAgICAgICAgLnZmLWNvbW1lbnQtYWN0aW9uLWJ0bjpmb2N1cyBzdmcsXG4gICAgICAgIC52Zi1zaGFyZS1saXN0LWxpbms6aG92ZXIgc3ZnLFxuICAgICAgICAudmYtc2hhcmUtbGlzdC1saW5rOmZvY3VzIHN2ZyxcbiAgICAgICAgLnZmLWhpZGUtc2hhcmUtYnRuOmhvdmVyIHN2ZyxcbiAgICAgICAgLnZmLWhpZGUtc2hhcmUtYnRuOmZvY3VzIHN2ZyB7XG4gICAgICAgICAgICBAaW5jbHVkZSB2YXIoZmlsbCwgJ2RhcmstdGV4dC1vbi1kZWZhdWx0LWNvbG9yJyk7XG4gICAgICAgIH1cblxuICAgICAgICAudmYtaGlkZS1zaGFyZS1idG4ge1xuICAgICAgICAgICAgQGluY2x1ZGUgdmFyKGJvcmRlci1ib3R0b20tY29sb3IsICdwcmltYXJ5LWNvbG9yLTA0Jyk7XG4gICAgICAgIH1cblxuICAgICAgICAudmYtb3Blbi1zaGFyZS1pY29uIHBhdGgge1xuICAgICAgICAgICAgQGluY2x1ZGUgdmFyKGZpbGwsICdsaWdodC10ZXh0LW9uLWRlZmF1bHQtY29sb3InKTtcbiAgICAgICAgfVxuXG4gICAgICAgIC52Zi1zaGFyZS1saXN0IHtcbiAgICAgICAgICAgIHRyYW5zaXRpb246IGRpc3BsYXkgMC41cztcbiAgICAgICAgfVxuXG4gICAgICAgIC52Zi1jb21tZW50LWFjdGlvbnMtbWVudSBsaSB7XG4gICAgICAgICAgICBAaW5jbHVkZSB2YXIoYm9yZGVyLWJvdHRvbS1jb2xvciwgJ3ByaW1hcnktY29sb3ItMDQnKTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC52Zi1tb3JlLWFjdGlvbnMgLnZmLWRyb3Bkb3duIHtcbiAgICAgICAgdHJhbnNpdGlvbjogb3BhY2l0eSAwLjJzO1xuICAgIH1cbn1cbiIsIi52aWFmb3VyYSB7XG4gICAgLnZmLXByb2dyZXNzLWNvbnRhaW5lciB7XG4gICAgICAgIEBpbmNsdWRlIGxpc3Qtc3BhY2luZy1sZWZ0KDNweCk7XG5cbiAgICAgICAgYWxpZ24taXRlbXM6IGNlbnRlcjtcbiAgICB9XG5cbiAgICAudmYtcHJvZ3Jlc3MtYmFyIHtcbiAgICAgICAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICAgICAgICB3aWR0aDogMTQ1cHg7XG4gICAgICAgIGhlaWdodDogNXB4O1xuICAgIH1cblxuICAgIC52Zi1wcm9ncmVzcyB7XG4gICAgICAgIHdpZHRoOiAwO1xuICAgICAgICBoZWlnaHQ6IDEwMCU7XG5cbiAgICAgICAgJi52Zi13YXJuaW5nLWJnLWNvbG91ciB7XG4gICAgICAgICAgICB3aWR0aDogMTAwJTtcbiAgICAgICAgICAgIHRyYW5zaXRpb246IG5vbmU7XG4gICAgICAgIH1cblxuICAgICAgICBAaW5jbHVkZSB0cmFuc2l0aW9uKHdpZHRoLCAwLjNzKTtcbiAgICB9XG5cbiAgICAudmYtcHJvZ3Jlc3MtY2FuY2VsIHtcbiAgICAgICAgd2lkdGg6IDEycHg7XG4gICAgICAgIGhlaWdodDogMTVweDsgLy8gRm9yIHNvbWUgcmVhc29uIHRoaXMgbWFrZXMgaXQgbGluZSB1cCB3ZWxsIHdpdGggdGhlIHByb2dyZXNzIGJhclxuICAgIH1cbn1cbiIsIi52aWFmb3VyYSB7XG4gICAgLnZmLXByb2dyZXNzLWNhbmNlbCB7XG4gICAgICAgIC52Zi1pY29uIHtcbiAgICAgICAgICAgIGJhY2tncm91bmQtY29sb3I6ICR2Zi1saWdodC1ncmV5ICFpbXBvcnRhbnQ7XG4gICAgICAgIH1cblxuICAgICAgICAmOmhvdmVyIC52Zi1pY29uIHtcbiAgICAgICAgICAgIC8vIFRPRE86IENPTi0yNDcwXG4gICAgICAgICAgICBAaW5jbHVkZSB2YXIoYmFja2dyb3VuZC1jb2xvciwgJ2RlZmF1bHQtY29sb3InLCAhaW1wb3J0YW50KTtcbiAgICAgICAgfVxuICAgIH1cbn1cbiIsIi52aWFmb3VyYSB7XG4gICAgLnZmLXByb2dyZXNzLWJhciB7XG4gICAgICAgIGJhY2tncm91bmQtY29sb3I6ICR2Zi12ZXJ5LXRyYW5zbHVjZW50LXdoaXRlO1xuXG4gICAgICAgIC52Zi1wcm9ncmVzcy52Zi13YXJuaW5nLWJnLWNvbG91ciB7XG4gICAgICAgICAgICBiYWNrZ3JvdW5kLWNvbG9yOiAkY29sb3ItZXJyb3ItYmc7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAudmYtcHJvZ3Jlc3MtYmFyIHtcbiAgICAgICAgYm9yZGVyLXJhZGl1czogM3B4O1xuICAgIH1cblxuICAgIC52Zi1wcm9ncmVzcyB7XG4gICAgICAgIGJvcmRlci1yYWRpdXM6IDNweDtcbiAgICB9XG5cbiAgICAudmYtcHJvZ3Jlc3MtY2FuY2VsIHtcbiAgICAgICAgLnZmLWljb24ge1xuICAgICAgICAgICAgYm9yZGVyLXJhZGl1czogM3B4O1xuICAgICAgICB9XG4gICAgfVxufVxuIiwiLyogUkVNRU1CRVIgdG8gbWFrZSBtb2JpbGUgc3R5bGVzIHRoYXQgbWF0Y2ggb3VyIG1lZGlhIHF1ZXJpZXMgKi9cblxuLyogQUxTTyB0ZXN0IHN0eWxlcyB3aXRoIG1vZGFscyBvcGVuICovXG5cbi8qIEFMU08gbm9ybWFsaXplIG1hcmdpbnMgYW5kIHBhZGRpbmcgb24gZXhpc3RpbmcgZWxzICovXG5cbi8qIEFMU08gdGV4dCB0b3AgYmFyIHdvcmtpbmcgd2l0aCBvdGhlciBmaXhlZCBoZWFkZXJzICovXG5cbiRydC1iYXItaGVpZ2h0OiA0cHg7XG4kcnQtZnJhbWUtaGVpZ2h0OiAyNXB4O1xuJHJ0LWZyYW1lLWhlaWdodC1zdGlja3k6IDEwcHg7XG5cbi8qXG5Gb3IgY2xpZW50cyB3aXRoIHN0aWNreSBoZWFkZXJzOlxuXG4udmlhZm91cmEgLnZmLXJ0LW1haW4tc3RpY2t5LnN0dWNrIHtcbiAgdG9wOiB7eyBIZWlnaHQgb2YgdGhlaXIgaGVhZGVyIH19ICFpbXBvcnRhbnQ7XG59XG4qL1xuXG4udmlhZm91cmEge1xuICAgIC8vIHZmLXJlYWx0aW1lIGdsb2JhbHNcbiAgICAudmYtcmVhbHRpbWUge1xuICAgICAgICAudmYtcnQtbGluayB7XG4gICAgICAgICAgICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gICAgICAgICAgICB0b3A6IDYwJTtcbiAgICAgICAgICAgIGxlZnQ6IC02MCU7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvLyBzdGF0aWMgYW5kIHJlcGx5IHNoYXJlIHN0eWxlczpcbiAgICAudmYtcnQtbWFpbi1zdGF0aWMge1xuICAgICAgICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gICAgICAgIHBhZGRpbmc6IDAgIWltcG9ydGFudDtcbiAgICAgICAgY3Vyc29yOiBwb2ludGVyOyAvLyBhbHNvIHRoaXMuLlxuICAgIH1cblxuICAgIC8vIHZmLXJlYWx0aW1lIFVOSVFVRSBJTkxJTkUvU1RBVElDIGJ1YmJsZVxuICAgIC52Zi1ydC1tYWluLXN0YXRpYyB7XG4gICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcblxuICAgICAgICAmOmhvdmVyIC52Zi1ydC1ob3Zlci1zdGF0ZSB7XG4gICAgICAgICAgICB0b3A6IDA7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAudmYtcnQtcmVwbHkge1xuICAgICAgICBkaXNwbGF5OiBibG9jaztcbiAgICAgICAgaGVpZ2h0OiAyMHB4O1xuICAgICAgICBtYXJnaW4tdG9wOiAxMHB4O1xuICAgICAgICBtYXJnaW4tbGVmdDogNjBweDtcblxuICAgICAgICBAaW5jbHVkZSBib3JkZXItYm90dG9tKDAsIHNvbGlkLCAycHgpO1xuXG4gICAgICAgIC52Zi1ydC1yZXBseS1saW5rIHtcbiAgICAgICAgICAgIEBpbmNsdWRlIGZsZXgtaG9yaXpvbnRhbC1saXN0KGZsZXgtZW5kKTtcbiAgICAgICAgICAgIEBpbmNsdWRlIGxpc3Qtc3BhY2luZy1sZWZ0KDVweCk7XG5cbiAgICAgICAgICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgICAgICAgICAgIHRvcDogLTJweDtcbiAgICAgICAgfVxuXG4gICAgICAgIC52Zi1ydC1yZXBseS1idWJibGUsXG4gICAgICAgIC52Zi1ydC1yZXBseS10ZXh0IHtcbiAgICAgICAgICAgIGRpc3BsYXk6IGJsb2NrO1xuICAgICAgICB9XG5cbiAgICAgICAgLnZmLXJ0LXJlcGx5LWJ1YmJsZSB7XG4gICAgICAgICAgICBwb3NpdGlvbjogcmVsYXRpdmU7XG4gICAgICAgICAgICBtaW4td2lkdGg6IDE2cHg7XG4gICAgICAgICAgICBoZWlnaHQ6IDE2cHg7XG4gICAgICAgICAgICBwYWRkaW5nOiAwIDJweDtcbiAgICAgICAgICAgIHRleHQtYWxpZ246IGNlbnRlcjtcbiAgICAgICAgfVxuXG4gICAgICAgIC52Zi1ydC1yZXBseS1idWJibGU6OmJlZm9yZSB7XG4gICAgICAgICAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgICAgICAgICB0b3A6IDg1JTtcbiAgICAgICAgICAgIGxlZnQ6IDI2JTtcbiAgICAgICAgICAgIHdpZHRoOiAwO1xuICAgICAgICAgICAgY29udGVudDogXCJcIjtcblxuICAgICAgICAgICAgQGluY2x1ZGUgYm9yZGVyKDAsIHNvbGlkLCA1cHggNXB4IDApO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLnZmLXJ0LWhhcy1lZGl0IHtcbiAgICAgICAgJi52Zi1jb21tZW50LWNvbnRhaW5lciAudmYtY29tbWVudC1tZXRhIHtcbiAgICAgICAgICAgIGhlaWdodDogMS4zZW07XG4gICAgICAgIH1cblxuICAgICAgICBsaS52Zi1ydC1oYXMtZWRpdC1saSB7XG4gICAgICAgICAgICBkaXNwbGF5OiBibG9jaztcbiAgICAgICAgICAgIGZsb2F0OiBsZWZ0O1xuXG4gICAgICAgICAgICBhOjpiZWZvcmUge1xuICAgICAgICAgICAgICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgICAgICAgICAgICAgICB0b3A6IDFweDtcbiAgICAgICAgICAgICAgICBwYWRkaW5nLXJpZ2h0OiA2cHg7XG4gICAgICAgICAgICAgICAgdGV4dC1hbGlnbjogY2VudGVyO1xuICAgICAgICAgICAgfVxuICAgICAgICB9XG4gICAgfVxuXG4gICAgLnZmLXJ0LWhhcy1lZGl0LWxpIHtcbiAgICAgICAgZmxvYXQ6IGxlZnQ7XG4gICAgfVxuXG4gICAgLnZmLXJ0LW5ldy1jaXJjbGUge1xuICAgICAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgICAgIGxlZnQ6IC0xNXB4O1xuICAgICAgICBkaXNwbGF5OiBub25lO1xuICAgICAgICBib3JkZXItcmFkaXVzOiA1MCU7XG5cbiAgICAgICAgQGluY2x1ZGUgc2l6ZSgxMHB4KTtcbiAgICB9XG5cbiAgICAudmYtcnQtbmV3IC52Zi1ydC1uZXctY2lyY2xlIHtcbiAgICAgICAgZGlzcGxheTogYmxvY2s7XG4gICAgfVxufVxuIiwiLypcbkZvciBjbGllbnRzIHdpdGggc3RpY2t5IGhlYWRlcnM6XG5cbi52aWFmb3VyYSAudmYtcnQtbWFpbi1zdGlja3kuc3R1Y2sge1xuICB0b3A6IHt7IEhlaWdodCBvZiB0aGVpciBoZWFkZXIgfX0gIWltcG9ydGFudDtcbn1cbiovXG5cbi52aWFmb3VyYSB7XG4gICAgLnZmLXJ0LXJlcGx5IHtcbiAgICAgICAgQGluY2x1ZGUgdmFyKGJvcmRlci1ib3R0b20tY29sb3IsICdhY2NlbnQtY29sb3ItbGlnaHQnKTtcblxuICAgICAgICAudmYtcnQtcmVwbHktbGluayB7XG4gICAgICAgICAgICBAaW5jbHVkZSBsaWdodC10ZXh0KCRkZWZhdWx0LXBhbGV0dGUpO1xuXG4gICAgICAgICAgICB0ZXh0LWRlY29yYXRpb246IG5vbmU7XG4gICAgICAgIH1cblxuICAgICAgICAudmYtcnQtcmVwbHktYnViYmxlIHtcbiAgICAgICAgICAgIEBpbmNsdWRlIHZhcihiYWNrZ3JvdW5kLWNvbG9yLCAnYWNjZW50LWNvbG9yJyk7XG4gICAgICAgIH1cblxuICAgICAgICAudmYtcnQtcmVwbHktYnViYmxlOjpiZWZvcmUge1xuICAgICAgICAgICAgYm9yZGVyLXJpZ2h0LWNvbG9yOiB0cmFuc3BhcmVudDtcbiAgICAgICAgICAgIGJvcmRlci1sZWZ0LWNvbG9yOiB0cmFuc3BhcmVudDtcblxuICAgICAgICAgICAgQGluY2x1ZGUgdmFyKGJvcmRlci10b3AtY29sb3IsICdhY2NlbnQtY29sb3ItbGlnaHQnKTtcbiAgICAgICAgICAgIEBpbmNsdWRlIHZhcihib3JkZXItYm90dG9tLWNvbG9yLCAnYWNjZW50LWNvbG9yLWxpZ2h0Jyk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAudmYtY29tbWVudC1jb250YWluZXIgLnZmLWNvbW1lbnQtaHRtbCxcbiAgICAudmYtY29tbWVudC1jb250YWluZXIudmYtcnQtaGFzLWVkaXQgLnZmLWNvbW1lbnQtbWV0YSAudmYtcnQtaGFzLWVkaXQtbGkge1xuICAgICAgICBvcGFjaXR5OiAxOyAvLyB3ZSBoYXZlIHVuZm9ydHVuYXRlbHkgaGlnaCBzcGVjaWZpY2l0eSBmb3IgdGhpcyBvcGFjaXR5IGJ1dCBpdHMgT0suXG4gICAgfVxuXG4gICAgLnZmLXJ0LWhhcy1lZGl0IC52Zi1jb21tZW50LWh0bWwge1xuICAgICAgICBvcGFjaXR5OiAwLjM1O1xuICAgIH1cblxuICAgIC52Zi1ydC1oYXMtZWRpdCB7XG4gICAgICAgICYudmYtY29tbWVudC1jb250YWluZXIgLnZmLWNvbW1lbnQtbWV0YSB7XG4gICAgICAgICAgICBoZWlnaHQ6IDEuM2VtO1xuICAgICAgICAgICAgZm9udC1zaXplOiBpbmhlcml0O1xuICAgICAgICB9XG5cbiAgICAgICAgbGkudmYtcnQtaGFzLWVkaXQtbGkge1xuICAgICAgICAgICAgZm9udC1zaXplOiAwLjg1ZW07XG4gICAgICAgIH1cbiAgICB9XG59XG5cbi52aWFmb3VyYSB7XG5cbiAgICAvLyBzdGF0aWMgYW5kIHJlcGx5IHNoYXJlIHN0eWxlczpcbiAgICAudmYtcnQtbWFpbi1zdGF0aWMsXG4gICAgLnZmLXJ0LXJlcGx5IHtcbiAgICAgICAgLnZmLXJ0LWhvdmVyLXN0YXRlIHtcbiAgICAgICAgICAgIHRyYW5zaXRpb246IGFsbCAwLjE1cztcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC52Zi1ydC1ob3Zlci1zdGF0ZSB7XG4gICAgICAgIHRyYW5zaXRpb246XG4gICAgICAgICAgICB0b3AgMC4ycyBjdWJpYy1iZXppZXIoMC43NywgMCwgMC4xNzUsIDEpIDAuMXMsXG4gICAgICAgICAgICBoZWlnaHQgMC4ycyBjdWJpYy1iZXppZXIoMC43NywgMCwgMC4xNzUsIDEpIDAuMXM7XG4gICAgfVxuXG4gICAgLnZmLWNvbW1lbnQtY29udGFpbmVyIC52Zi1jb21tZW50LWh0bWwsXG4gICAgLnZmLWNvbW1lbnQtY29udGFpbmVyLnZmLXJ0LWhhcy1lZGl0IC52Zi1jb21tZW50LW1ldGEgLnZmLXJ0LWhhcy1lZGl0LWxpIHtcbiAgICAgICAgb3BhY2l0eTogMTsgLy8gd2UgaGF2ZSB1bmZvcnR1bmF0ZWx5IGhpZ2ggc3BlY2lmaWNpdHkgZm9yIHRoaXMgb3BhY2l0eSBidXQgaXRzIE9LLlxuICAgIH1cblxuICAgIC52Zi1ydC1oYXMtZWRpdCAudmYtY29tbWVudC1odG1sIHtcbiAgICAgICAgb3BhY2l0eTogMC4yNTtcbiAgICB9XG5cbiAgICAudmYtcnQtaGFzLWVkaXQgbGkudmYtcnQtaGFzLWVkaXQtbGkge1xuICAgICAgICBhOjpiZWZvcmUge1xuICAgICAgICAgICAgY29udGVudDogJ1xcZTYxNSc7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAvLyBDb2xvcnMgZm9yIGNsaWVudCBvdmVycmlkaW5nLiBEb3duIGhlcmUgc28gc3BlY2lmaWNpdHkgY2FuIGJlIGxvd2VyLlxuICAgIC52Zi1ydC1tYWluLWNvbG9yLWJhY2tncm91bmQge1xuICAgICAgICBAaW5jbHVkZSB2YXIoYmFja2dyb3VuZCwgJ2FjY2VudC1jb2xvcicpO1xuICAgIH1cblxuICAgIC52Zi1ydC1tYWluLWNvbG9yLXRleHQsXG4gICAgLnZmLXJ0LWhhcy1lZGl0LWxpIGEsXG4gICAgLnZmLXJ0LWhhcy1lZGl0LWxpIGE6dmlzaXRlZCB7XG4gICAgICAgIEBpbmNsdWRlIHZhcihjb2xvciwgJ3RleHQtb24tYWNjZW50LWNvbG9yJyk7XG4gICAgfVxuXG4gICAgLnZmLXJ0LW1haW4tY29sb3ItZmlsbCB7XG4gICAgICAgIEBpbmNsdWRlIHZhcihmaWxsLCAnYWNjZW50LWNvbG9yJyk7XG4gICAgfVxuXG4gICAgLnZmLXJ0LWFjY2VudC1jb2xvci1iYWNrZ3JvdW5kIHtcbiAgICAgICAgQGluY2x1ZGUgdmFyKGJhY2tncm91bmQsICdhY2NlbnQtY29sb3InKTtcbiAgICB9XG5cbiAgICAudmYtcnQtb3ZlcmxheS1jb2xvci10ZXh0IHtcbiAgICAgICAgQGluY2x1ZGUgdmFyKGNvbG9yLCAndGV4dC1vbi1hY2NlbnQtY29sb3InKTtcbiAgICB9XG5cbiAgICAudmYtcnQtb3ZlcmxheS1jb2xvci1maWxsIHtcbiAgICAgICAgQGluY2x1ZGUgdmFyKGNvbG9yLCAndGV4dC1vbi1hY2NlbnQtY29sb3InKTtcblxuICAgICAgICBmaWxsOiBjdXJyZW50Y29sb3I7XG4gICAgfVxufVxuIiwiLnZpYWZvdXJhIHtcbiAgICAudmYtbGkge1xuICAgICAgICBAaW5jbHVkZSBzaXplKDEwMCUpO1xuICAgIH1cbn1cbiIsIi8qXG5JbWFnZXNcblxuU3RhbmRhcmRpemVkIGJhc2Ugc3R5bGluZyBmb3IgaW1hZ2VzIHVzZWQgaW4gVmlhZm91cmEgcHJvamVjdHMuXG5cbk1hcmt1cDogPGRpdiBjbGFzcz1cInZmLWltYWdlIHt7bW9kaWZpZXJfY2xhc3N9fVwiIHN0eWxlPVwiYmFja2dyb3VuZC1pbWFnZTogdXJsKGh0dHA6Ly9sb3JlbXBpeGVsLmNvbS80MDAvMjAwLylcIj48L2Rpdj5cblxuLnZmLWltYWdlLWxhcmdlIC0gYSBsYXJnZSBpbWFnZVxuXG5TdHlsZWd1aWRlIGNzcy5pbWFnZXNcbiovXG4udmlhZm91cmEgLnZmLWltYWdlIHtcbiAgICBwb3NpdGlvbjogcmVsYXRpdmU7XG5cbiAgICAmLnZmLWltYWdlLWxhcmdlIHtcbiAgICAgICAgQGluY2x1ZGUgc2l6ZSg5MHB4KTtcblxuICAgICAgICBib3JkZXItcmFkaXVzOiAzcHg7XG4gICAgfVxuXG4gICAgJi52Zi1pbWFnZS1tZWRpdW0ge1xuICAgICAgICBAaW5jbHVkZSBzaXplKDYwcHgpO1xuXG4gICAgICAgIGJvcmRlci1yYWRpdXM6IDJweDtcbiAgICB9XG5cbiAgICAvKipcbiAgICAgKiBXZSB3YW50IGEgZGFyayBvdmVybGF5IG92ZXIgdGhlc2UgaW1hZ2VzLCBmb3IgdGhlIGNhc2Ugd2hlcmVcbiAgICAgKiBhbiBpbWFnZSBpcyB0aGUgc2FtZSBjb2xvdXIgYXMgdGhlIGJhY2tncm91bmQsIHRvIG1ha2UgaXQgbW9yZVxuICAgICAqIHZpc2libGVcbiAgICAgKi9cbiAgICAmOjpiZWZvcmUge1xuICAgICAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgICAgIHRvcDogMDtcbiAgICAgICAgcmlnaHQ6IDA7XG4gICAgICAgIGJvdHRvbTogMDtcbiAgICAgICAgbGVmdDogMDtcbiAgICAgICAgei1pbmRleDogMDtcbiAgICAgICAgYmFja2dyb3VuZDogYmxhY2s7XG4gICAgICAgIGJvcmRlci1yYWRpdXM6IGluaGVyaXQ7XG4gICAgICAgIG9wYWNpdHk6IDAuMjtcbiAgICAgICAgY29udGVudDogJyc7XG4gICAgfVxuXG4gICAgJi5mYWRlLWltYWdlLWVudGVyOjpiZWZvcmUge1xuICAgICAgICBvcGFjaXR5OiAxO1xuICAgIH1cblxuICAgICYuZmFkZS1pbWFnZS10cmFuc2l0aW9uOjpiZWZvcmUge1xuICAgICAgICB0cmFuc2l0aW9uOiBvcGFjaXR5IDAuM3M7XG4gICAgfVxufVxuXG4vKlxuQXZhdGFyc1xuXG5TdGFuZGFyZGl6ZWQgYmFzZSBzdHlsaW5nIGZvciBhdmF0YXJzIHVzZWQgaW4gVmlhZm91cmEgcHJvamVjdHMuXG5cbk1hcmt1cDogPGRpdiBjbGFzcz1cInZmLWF2YXRhciB7e21vZGlmaWVyX2NsYXNzfX1cIiBzdHlsZT1cImJhY2tncm91bmQtaW1hZ2U6IHVybChodHRwOi8vbG9yZW1waXhlbC5jb20vNDAwLzIwMC8pXCI+PC9kaXY+XG5cbi52Zi1hdmF0YXItc21hbGwgLSBhIHNtYWxsIGF2YXRhclxuLnZmLWF2YXRhci1tZWRpdW0gLSBhIG1lZGl1bSBhdmF0YXJcbi52Zi1hdmF0YXItbGFyZ2UgLSBhIGxhcmdlIGF2YXRhclxuXG5TdHlsZWd1aWRlIGNzcy5pbWFnZXMuYXZhdGFyc1xuKi9cbi52aWFmb3VyYSAudmYtaW1hZ2UsXG4udmlhZm91cmEgLnZmLWF2YXRhciB7XG4gICAgYmFja2dyb3VuZC1yZXBlYXQ6IG5vLXJlcGVhdDtcbiAgICBiYWNrZ3JvdW5kLXBvc2l0aW9uOiBjZW50ZXIgY2VudGVyO1xuICAgIGJhY2tncm91bmQtc2l6ZTogY292ZXI7XG59XG5cbi52aWFmb3VyYSAudmYtYXZhdGFyIHtcbiAgICAmLnZmLWF2YXRhci1zbWFsbCB7XG4gICAgICAgIHdpZHRoOiAyNXB4O1xuICAgICAgICBoZWlnaHQ6IDI1cHg7XG4gICAgfVxuXG4gICAgJi52Zi1hdmF0YXItbWVkaXVtIHtcbiAgICAgICAgd2lkdGg6IDQwcHg7XG4gICAgICAgIGhlaWdodDogNDBweDtcbiAgICB9XG5cbiAgICAmLnZmLWF2YXRhci1sYXJnZSB7XG4gICAgICAgIHdpZHRoOiA4MHB4O1xuICAgICAgICBoZWlnaHQ6IDgwcHg7XG4gICAgfVxufVxuXG4udmlhZm91cmEgLnZmLXVzZXItYXZhdGFyLWJ0biB7XG4gICAgcGFkZGluZzogMDtcbiAgICBib3JkZXI6IG5vbmU7XG59XG4iLCIvKipcbk1lZGlhXG5cblZhcmlvdXMgbWVkaWEgcmVsYXRlZCB0aGluZ3MuXG5cblN0eWxlZ3VpZGUgY29tcG9uZW50cy5tZWRpYVxuKi9cbi52aWFmb3VyYSB7XG4gICAgLnZmLXZpZGVvLXByb2Nlc3Npbmcge1xuICAgICAgICBwYWRkaW5nOiAxNSU7XG4gICAgfVxufVxuIiwiLypcbkJ1dHRvbnNcblxuU3RhbmRhcmRpemVkIGJhc2Ugc3R5bGluZyBmb3IgYnV0dG9ucyB1c2VkIGluIFZpYWZvdXJhIHByb2plY3RzLlxuXG5NYXJrdXA6XG4gICAgPGJ1dHRvbiBjbGFzcz1cInZmLWJ1dHRvbiB7e21vZGlmaWVyX2NsYXNzfX1cIiBzdHlsZT1cImJhY2tncm91bmQtY29sb3I6IGJsYWNrOyBjb2xvcjogd2hpdGU7XCI+UFVUIFRFWFQgSEVSRTwvYnV0dG9uPlxuXG4udmYtYnV0dG9uIC0gdGFrZXMgdXAgc3BhY2UgYmFzZWQgb24gY29udGVudHNcbi52Zi1idXR0b24tZnVsbCAtIGEgYnV0dG9uIHRha2luZyB1cCB0aGUgZnVsbCB3aWR0aCBvZiBpdHMgcGFyZW50XG4udmYtYnV0dG9uLXNtYWxsIC0gYSBzbWFsbCBidXR0b25cbi52Zi1idXR0b24tbWVkaXVtIC0gYSBtZWRpdW0gYnV0dG9uXG4udmYtYnV0dG9uLWxvbmcgLSBhIGxvbmcgYnV0dG9uXG5cblN0eWxlZ3VpZGUgY3NzLmJ1dHRvbnNcbiovXG4udmlhZm91cmEgYnV0dG9uLFxuLnZpYWZvdXJhIGEudmYtYnV0dG9uLFxuLnZpYWZvdXJhIHNwYW4udmYtYnV0dG9uIHtcbiAgICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG59XG4iLCIvKlxuQmFkZ2VzXG5cblN0YW5kYXJkaXplZCBiYXNlIHN0eWxpbmcgZm9yIGJhZGdlcyB1c2VkIGluIFZpYWZvdXJhIHByb2plY3RzLlxuUGxlYXNlIGVuc3VyZSB0aGF0IHRoZSBhbiBpbm5lciBlbGVtZW50IGlzIGFkZGVkIHRvIHRoZSBwYXJlbnQgZW1cbnRvIGFsbG93IGNsaWVudHMgdG8gY3VzdG9taXplIHRoZSB0ZXh0IG9mIHRoZSBiYWRnZSB3aXRoIENTUyBpZlxuZGVzaXJlZC5cblxuTWFya3VwOlxuICAgIDxlbSBjbGFzcz1cInZmLWJhZGdlIHt7bW9kaWZpZXJfY2xhc3N9fVwiIHN0eWxlPVwiYmFja2dyb3VuZC1jb2xvcjogYmxhY2s7IGNvbG9yOiB3aGl0ZTtcIj5cbiAgICAgICAgPHNwYW4+UFVUIFRFWFQgSEVSRTwvc3Bhbj5cbiAgICA8L2VtPlxuXG4udmYtYmFkZ2UgLSBub3RoaW5nIGRvaW5nIHJpZ2h0IG5vd1xuLnZmLWNvbnRlbnQtYmFkZ2UgLSBhIGJhZGdlIGluc2lkZSBvZiBjb250ZW50XG5cblN0eWxlZ3VpZGUgY3NzLmJhZGdlc1xuKi9cbi52aWFmb3VyYSB7XG4gICAgLnZmLWJhZGdlIHtcbiAgICAgICAgJi52Zi1jb250ZW50LWJhZGdlIHtcbiAgICAgICAgICAgIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgICAgICAgICAgIG1hcmdpbi1sZWZ0OiA1cHg7XG4gICAgICAgICAgICBsaW5lLWhlaWdodDogaW5oZXJpdDtcbiAgICAgICAgICAgIHRleHQtdHJhbnNmb3JtOiB1cHBlcmNhc2U7XG4gICAgICAgICAgICBib3JkZXItcmFkaXVzOiAzcHg7XG4gICAgICAgIH1cbiAgICB9XG59XG4iLCIudmYtaWNvbiB7XG4gICAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICAgIHRleHQtYWxpZ246IGNlbnRlcjtcblxuICAgICYudmYtaWNvbi10aW55IHtcbiAgICAgICAgd2lkdGg6IDhweDtcbiAgICAgICAgaGVpZ2h0OiA4cHg7XG4gICAgICAgIGZvbnQtc2l6ZTogNHB4O1xuICAgICAgICBsaW5lLWhlaWdodDogOHB4O1xuICAgIH1cblxuICAgICYudmYtaWNvbi1zbWFsbCB7XG4gICAgICAgIHdpZHRoOiAxMnB4O1xuICAgICAgICBoZWlnaHQ6IDEycHg7XG4gICAgICAgIGZvbnQtc2l6ZTogNnB4O1xuICAgICAgICBsaW5lLWhlaWdodDogMTJweDtcbiAgICB9XG5cbiAgICAmLnZmLWljb24tbWVkaXVtIHtcbiAgICAgICAgd2lkdGg6IDE4cHg7XG4gICAgICAgIGhlaWdodDogMThweDtcbiAgICAgICAgZm9udC1zaXplOiA5cHg7XG4gICAgICAgIGxpbmUtaGVpZ2h0OiAxOHB4O1xuICAgIH1cblxuICAgICYudmYtaWNvbi1sYXJnZSB7XG4gICAgICAgIHdpZHRoOiAzMnB4O1xuICAgICAgICBoZWlnaHQ6IDMycHg7XG4gICAgICAgIGZvbnQtc2l6ZTogMTZweDtcbiAgICAgICAgbGluZS1oZWlnaHQ6IDMycHg7XG4gICAgfVxuXG4gICAgJi52Zi1pY29uLWV4dHJhLWxhcmdlIHtcbiAgICAgICAgd2lkdGg6IDUwcHg7XG4gICAgICAgIGhlaWdodDogNTBweDtcbiAgICAgICAgZm9udC1zaXplOiAzMHB4O1xuICAgICAgICBsaW5lLWhlaWdodDogNTBweDtcbiAgICB9XG5cbiAgICAmLnZmLWljb24tcmVzcG9uc2l2ZS13IHtcbiAgICAgICAgd2lkdGg6IDI1JTtcbiAgICAgICAgbWF4LXdpZHRoOiA1MHB4O1xuICAgIH1cbn1cblxuLnZmLWljb24tY2lyY2xlLWZpbGxlZCB7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogY3VycmVudGNvbG9yO1xuICAgIGJvcmRlci1yYWRpdXM6IDUwJTtcbn1cblxuLnZmLWljb24tY2lyY2xlLW91dGxpbmUge1xuICAgIGJvcmRlci1jb2xvcjogY3VycmVudGNvbG9yO1xuICAgIGJvcmRlci1yYWRpdXM6IDUwJTtcbn1cbiIsIkBpbXBvcnQgXCJkZXNpZ24tYXNzZXRzL2NvbXBvbmVudHMvc3ZnL2ljb24vaWNvblwiO1xuXG4udmlhZm91cmEgLnZmLWljb24ge1xuICAgICYudmYtaWNvbi1zbWFsbC1tZWRpdW0ge1xuICAgICAgICB3aWR0aDogMTVweDtcbiAgICAgICAgaGVpZ2h0OiAxNXB4O1xuICAgICAgICBmb250LXNpemU6IDdweDtcbiAgICAgICAgbGluZS1oZWlnaHQ6IDE0cHg7XG4gICAgfVxuXG4gICAgJi52Zi1pY29uLXBsYXkudmYtaWNvbi1jaXJjbGUge1xuICAgICAgICAudmYtaWNvbi1pbm5lci1jaXJjbGUge1xuICAgICAgICAgICAgc3Ryb2tlLXdpZHRoOiA1JTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgICYudmYtaWNvbi1jaGV2cm9uX3VwIHtcbiAgICAgICAgdHJhbnNmb3JtOiByb3RhdGUoOTBkZWcpO1xuICAgIH1cblxuICAgICYudmYtaWNvbi1jaGV2cm9uX3JpZ2h0IHtcbiAgICAgICAgdHJhbnNmb3JtOiByb3RhdGUoMTgwZGVnKTtcbiAgICB9XG5cbiAgICAmLnZmLWljb24tY2hldnJvbl9kb3duIHtcbiAgICAgICAgdHJhbnNmb3JtOiByb3RhdGUoLTkwZGVnKTtcbiAgICB9XG5cbiAgICAmLnZmLWljb24tbW9kIHtcbiAgICAgICAgYm9yZGVyLXJhZGl1czogNTAlO1xuICAgIH1cbn1cbiIsIi52aWFmb3VyYSB7XG4gICAgLnZmLWljb24ge1xuICAgICAgICBmb250LXdlaWdodDogNTAwO1xuICAgICAgICB0ZXh0LXRyYW5zZm9ybTogdXBwZXJjYXNlO1xuICAgIH1cblxuICAgIC52Zi1pY29uLWlubmVyLWNpcmNsZSB7XG4gICAgICAgIGZpbGw6IG5vbmU7XG4gICAgICAgIHN0cm9rZTogbm9uZTtcbiAgICB9XG5cbiAgICAudmYtaWNvbi52Zi1pY29uLWNpcmNsZS1vdXRsaW5lIC52Zi1pY29uLWlubmVyLWNpcmNsZSB7XG4gICAgICAgIGZpbGw6IG5vbmU7XG4gICAgICAgIHN0cm9rZTogY3VycmVudGNvbG9yO1xuICAgICAgICBzdHJva2Utd2lkdGg6IDQlO1xuICAgIH1cblxuICAgIC52Zi1pY29uLnZmLWljb24tY2lyY2xlLWZpbGxlZCAudmYtaWNvbi1pbm5lci1jaXJjbGUge1xuICAgICAgICBmaWxsOiBjdXJyZW50Y29sb3I7XG4gICAgICAgIHN0cm9rZTogbm9uZTtcbiAgICAgICAgc3Ryb2tlLXdpZHRoOiA0JTtcbiAgICB9XG5cbiAgICAudmYtaWNvbi52Zi1pY29uLW1vZCB7XG4gICAgICAgIGNvbG9yOiAkd2hpdGU7XG4gICAgICAgIGJhY2tncm91bmQtY29sb3I6ICR2Zi1tb2RlcmF0b3ItZ3JlZW47XG4gICAgfVxuXG4gICAgLnZmLWljb24udmYtaWNvbi10cnVzdGVkIHtcbiAgICAgICAgQGluY2x1ZGUgdmFyKGZpbGwsICdhY2NlbnQtY29sb3InKTtcbiAgICB9XG5cbiAgICAudmYtdmlkZW8tcHJvY2Vzc2luZyAudmYtaWNvbi52Zi1pY29uLWNpcmNsZS1vdXRsaW5lIC52Zi1pY29uLWlubmVyLWNpcmNsZSB7XG4gICAgICAgIEBpbmNsdWRlIHZhcihzdHJva2UsICdsaWdodC10ZXh0LW9uLWRlZmF1bHQtY29sb3InKTtcbiAgICB9XG5cbiAgICAudmYtdmlkZW8tcHJvY2Vzc2luZyB7XG4gICAgICAgIEBpbmNsdWRlIHZhcihmaWxsLCAnZGFyay10ZXh0LW9uLWRlZmF1bHQtY29sb3InKTtcbiAgICAgICAgQGluY2x1ZGUgdmFyKGJhY2tncm91bmQtY29sb3IsICdwcmltYXJ5LWNvbG9yLTEwJyk7XG5cbiAgICAgICAgLnZmLWxhYmVsIHtcbiAgICAgICAgICAgIEBpbmNsdWRlIGRhcmstdGV4dCgkZGVmYXVsdC1wYWxldHRlKTtcbiAgICAgICAgfVxuICAgIH1cbn1cbiIsIkBrZXlmcmFtZXMgbG9hZGVyLWEge1xuICAgIDAlIHtcbiAgICAgICAgb3BhY2l0eTogMDtcbiAgICB9XG5cbiAgICAyMCUge1xuICAgICAgICBvcGFjaXR5OiAwO1xuICAgIH1cblxuICAgIDUwJSB7XG4gICAgICAgIG9wYWNpdHk6IDE7XG4gICAgfVxuXG4gICAgODAlIHtcbiAgICAgICAgb3BhY2l0eTogMDtcbiAgICB9XG5cbiAgICAxMDAlIHtcbiAgICAgICAgb3BhY2l0eTogMDtcbiAgICB9XG59XG4iLCIudmlhZm91cmEge1xuICAgIC52Zi1hamF4LWxvYWRlciB7XG4gICAgICAgIGRpc3BsYXk6IGJsb2NrO1xuICAgICAgICBtYXJnaW46IDE1cHggMDtcblxuICAgICAgICBAaW5jbHVkZSBib3JkZXIoKTtcblxuICAgICAgICAudmYtYWpheC1sb2FkZXItd3JhcCB7XG4gICAgICAgICAgICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG4gICAgICAgICAgICBwYWRkaW5nLXJpZ2h0OiAxMnB4O1xuICAgICAgICAgICAgdGV4dC1hbGlnbjogY2VudGVyO1xuXG4gICAgICAgICAgICAudmYtbG9hZGVyIHtcbiAgICAgICAgICAgICAgICBwYWRkaW5nLXJpZ2h0OiAwO1xuICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICBzcGFuIHtcbiAgICAgICAgICAgICAgICBkaXNwbGF5OiBpbmxpbmUtYmxvY2s7XG4gICAgICAgICAgICB9XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAudmYtbG9hZGVyLWVycm9yIHtcbiAgICAgICAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICAgICAgICBtYXJnaW4tcmlnaHQ6IDZweDtcblxuICAgICAgICAmLnZmLWxvYWRlci1yaWdodC1lcnJvciB7XG4gICAgICAgICAgICBtYXJnaW4tcmlnaHQ6IDA7XG4gICAgICAgICAgICBtYXJnaW4tbGVmdDogNnB4O1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLnZmLWFqYXgtbG9hZGVyIC52Zi1sb2FkZXIgaW1nIHtcbiAgICAgICAgcGFkZGluZy1ib3R0b206IDJweDtcbiAgICB9XG5cbiAgICAudmYtbG9hZGVyIHtcbiAgICAgICAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICAgICAgICBtaW4td2lkdGg6IDE4cHg7XG5cbiAgICAgICAgaW1nIHtcbiAgICAgICAgICAgIHBhZGRpbmctYm90dG9tOiA0cHg7XG4gICAgICAgIH1cblxuICAgICAgICAmLnZmLWxvYWRlci1ibG9jayB7XG4gICAgICAgICAgICBkaXNwbGF5OiBibG9jaztcbiAgICAgICAgICAgIGNsZWFyOiBib3RoO1xuICAgICAgICAgICAgdGV4dC1hbGlnbjogY2VudGVyO1xuICAgICAgICB9XG5cbiAgICAgICAgJi52Zi1sb2FkZXItbGFyZ2Ugc3BhbiB7XG4gICAgICAgICAgICBAaW5jbHVkZSBzaXplKDZweCk7XG5cbiAgICAgICAgICAgIG1hcmdpbi1yaWdodDogM3B4O1xuICAgICAgICAgICAgYm9yZGVyLXJhZGl1czogM3B4O1xuICAgICAgICB9XG5cbiAgICAgICAgJi52Zi1sb2FkZXItcmlnaHQge1xuICAgICAgICAgICAgcGFkZGluZy1sZWZ0OiA1cHg7XG4gICAgICAgIH1cblxuICAgICAgICBzcGFuIHtcbiAgICAgICAgICAgIGRpc3BsYXk6IGlubGluZS1ibG9jaztcbiAgICAgICAgICAgIG1hcmdpbjogMCAycHggMnB4IDA7XG4gICAgICAgICAgICB2ZXJ0aWNhbC1hbGlnbjogbWlkZGxlO1xuICAgICAgICAgICAgYm9yZGVyLXJhZGl1czogMnB4O1xuICAgICAgICAgICAgb3BhY2l0eTogMDtcblxuICAgICAgICAgICAgQGluY2x1ZGUgc2l6ZSg0cHgpO1xuICAgICAgICB9XG4gICAgfVxufVxuIiwiLnZpYWZvdXJhIHtcbiAgICAudmYtYWpheC1sb2FkZXIge1xuICAgICAgICBjb2xvcjogJGNvbG9yLW5vdGlmaWNhdGlvbi10ZXh0O1xuICAgICAgICBiYWNrZ3JvdW5kOiAkY29sb3Itbm90aWZpY2F0aW9uLWJnO1xuICAgICAgICBib3JkZXItY29sb3I6ICRjb2xvci1ub3RpZmljYXRpb24tYm9yZGVyO1xuICAgIH1cblxuICAgIC52Zi1sb2FkZXItZXJyb3Ige1xuICAgICAgICBjb2xvcjogJGNvbG9yLWVycm9yLWljb247XG4gICAgICAgIGZvbnQtZmFtaWx5OiAndmlhZm91cmEnO1xuICAgICAgICBjdXJzb3I6IGRlZmF1bHQ7XG5cbiAgICAgICAgJi52Zi1lcnJvci1pbnZlcnRlZCB7XG4gICAgICAgICAgICBjb2xvcjogJHZmLWxpZ2h0LWdyZXk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAudmYtbG9hZGVyIHtcbiAgICAgICAgJi52Zi1sb2FkZXItaW52ZXJ0ZWQgc3BhbiB7XG4gICAgICAgICAgICBiYWNrZ3JvdW5kLWNvbG9yOiAkdmYtbGlnaHQtZ3JleTtcbiAgICAgICAgfVxuXG4gICAgICAgIHNwYW4ge1xuICAgICAgICAgICAgYmFja2dyb3VuZC1jb2xvcjogJHZmLWdyZXk7XG5cbiAgICAgICAgICAgICYudmYtbG9hZGluZyB7XG4gICAgICAgICAgICAgICAgYW5pbWF0aW9uOiBsb2FkZXItYSAwLjhzIGluZmluaXRlIGxpbmVhcjtcbiAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgJi52Zi1sMSB7XG4gICAgICAgICAgICAgICAgYW5pbWF0aW9uLWRlbGF5OiAwcztcbiAgICAgICAgICAgIH1cblxuICAgICAgICAgICAgJi52Zi1sMiB7XG4gICAgICAgICAgICAgICAgYW5pbWF0aW9uLWRlbGF5OiAwLjFzO1xuICAgICAgICAgICAgfVxuXG4gICAgICAgICAgICAmLnZmLWwzIHtcbiAgICAgICAgICAgICAgICBhbmltYXRpb24tZGVsYXk6IDAuMnM7XG4gICAgICAgICAgICB9XG4gICAgICAgIH1cbiAgICB9XG59XG4iLCJAaW1wb3J0IFwiZGVzaWduLWFzc2V0cy9jc3MvdmFyaWFibGVzL21vZHVsZVwiO1xuXG4kcnQtYmFyLWVudGVyaW5nLXotaW5kZXg6IDU7XG4kY29tbWVudHMtbmF2LXotaW5kZXg6IDY7XG4kcnQtYmFyLXotaW5kZXg6IDc7XG4kY29tbWVudHMtcmVwbHktdGhyZWFkLWJhY2tkcm9wLXotaW5kZXg6IDg7XG4kcmVwbHktdGhyZWFkLXotaW5kZXg6IDg7IC8vIFN0YW5kYXJkIHJlcGx5IHRocmVhZCB6LWluZGV4IC0gbWF5IG5lZWQgYSBjbGllbnQgaGVhZGVyIHRvIG92ZXJsYXkgaXQsIHNvIG5vdCB0b28gaGlnaFxuJHJlcG9ydC1tb2RhbC16LWluZGV4OiA5O1xuXG4kaGlnaC16LWluZGV4OiA5OTk5OTk5O1xuXG4kdHJheS10cmlnZ2VyLXotaW5kZXg6ICRoaWdoLXotaW5kZXggKyA1O1xuJHZmLXRyYXktei1pbmRleDogJGhpZ2gtei1pbmRleCArIDY7XG4kbW9iaWxlLXBvc3QtZm9ybS1vdmVybGF5LXotaW5kZXg6ICRoaWdoLXotaW5kZXggKyA4O1xuJGRhdGUtcGlja2VyLXotaW5kZXg6ICRoaWdoLXotaW5kZXggKyA5O1xuLy8gV2hlbiByZXBseSB0aHJlYWQgaXMgYSBtb2RhbCwgaXQgc2hvdWxkIGJlIGhpZ2ggYW5kIHZpc2libGUsIHlldCB1bmRlciBsb2dpblxuJHJlcGx5LXRocmVhZC1tb2RhbC16LWluZGV4OiAkaGlnaC16LWluZGV4ICsgODtcbi8vIGxvZ2luIHRyYXkgbmVlZHMgdG8gYmUgYWJvdmUgcmVwbHkgbW9kYWwgZm9yIGd1ZXN0c1xuJHZmLXRyYXktd3JhcHBlci16LWluZGV4OiAkaGlnaC16LWluZGV4ICsgMTA7XG5cbi8vIHYyLjVcbiR2Zi1kYXJrLWFjY2VudC1jb2xvdXI6ICNlNGY0ZmI7XG5cbi8vIHYyLjUgY29sb3Vyc1xuJHZmLWdyZXk6ICM5YTlhOWE7IC8vIDQwJSBibGFja1xuJHZmLWxpZ2h0LWdyZXk6ICNlZWVlZWU7IC8vIH42LjUlIGJsYWNrXG5cbi8vIHYyXG4kcHJpbWFyeUNvbnRyb2w6ICNhM2JjYzg7XG4kc2Vjb25kYXJ5OiAkdmYtbGlnaHQtZ3JleTtcbiRzZWNvbmRhcnlOb3RpZmljYXRpb246ICNmNGZjZmY7XG4kdGV4dE9uU2Vjb25kYXJ5OiAjMjQyNDI0O1xuJGhlYWRpbmc6ICR2Zi1ncmV5O1xuJHN0YXR1c1dhcm5pbmc6ICNmMjgzOGY7XG4kdmYtaGlnaGxpZ2h0ZWQtY29udGVudDogI2VmZmFmZjtcblxuLy8gPCB2MlxuJHRyYW5zaXRpb25GYXN0OiAwLjJzO1xuJHRyYW5zaXRpb25TbG93OiAwLjNzO1xuXG4kdmYtY29sb3ItYmFkZ2UtZGlzYWJsZWQ6IHJnYmEoMCwgMCwgMCwgMC4xKTtcblxuJHZmLXRyYXktd2lkdGg6IDQ3O1xuLy8gVW5mb3J0dW5hdGVseSBtZWRpYSBxdWVyaWVzIGNhbm5vdCBhY2Nlc3MgQ1NTIHZhcmlhYmxlcywgc28gd2UgaGFyZGNvZGUgdGhlIG1lZGlhIHF1ZXJ5XG4vLyBUaGlzIG1lYW5zIGlmIGEgY2xpZW50IGN1c3RvbWl6ZXMgdGhlaXIgYmFzZSBmb250IHNpemUsIHRoZSBxdWVyaWVzIHdvbid0IHdvcmsgYXMgZXhwZWN0ZWQgYW5kIHRoZSB0cmF5XG4vLyBtaWdodCBleHRlbmQgb3ZlciB0aGUgcGFnZSB3aWR0aC5cbiR2Zi10cmF5LXdpZHRoLXJlbTogY2FsYygjeyR2Zi10cmF5LXdpZHRofSAqICN7bWFwLWdldCgkY2xpZW50LWZvbnQtc2l6ZXMsICdiYXNlLWZvbnQtc2l6ZScpfSk7XG5cbi8qIFBQSUQgKi9cblxuLyoqXG4gKiBPcmlnaW5hbGx5IHRoaXMgd2FzIHNldCB1cCB0byBtYXAgZGlmZmVyZW50IG1heCBzaXplcyBwZXIgbGFuZ3VhZ2Ugb2YgdGhlXG4gKiBkcmF3ZXIgd2hlbiBleHBhbmRlZCBidXQgc29tZSBjdXN0b21lcnMgd2VyZSBub3QgdXNpbmcgb3VyIC0tYmFzZS1mb250LXNpemVcbiAqIHByb3Blcmx5IHdoaWNoIHVuZGVybWluZXMgYWxsIHRoZSB0aW1lIHRha2VuIHRvIG1ha2UgdGhlIGV4cGVyaWVuY2UgYXMgc21vb3RoXG4gKiBhcyBwb3NzaWJsZS5cbiAqXG4gKiBOb3cgd2UgaGF2ZSAyIGhlaWdodHMgYmFzZWQgb24gdGhlIGxhbmd1YWdlIHdpdGggdGhlIGxvbmdlc3QgdGV4dCBzdHJpbmdzLFxuICogb25lIGZvciBtb2JpbGUgd2lkdGhzIGFuZCBvbmUgZm9yIHdpZGVyIGNvbnRhaW5lcnMuXG4gKi9cbiRwcGlkVHJhbnNpdGlvbkR1cmF0aW9uOiAwLjRzO1xuJHBwaWRUcmFuc2l0aW9uRWFzaW5nOiBlYXNlLW91dDtcbiRwcGlkTWF4SGVpZ2h0U21hbGxfcmVtOiA1MDsgLy8gZGVmYXVsdCBjYXRjaC1hbGxzIGJhc2VkIG9uIGZyLUNBIEAgMTAwJSBmb250XG4kcHBpZE1heEhlaWdodE1lZGl1bV9yZW06IDI4O1xuXG4vLyBJcnJlZ3VsYXJzXG4kcHBpZFJlY2lyY3VsYXRpb25UcmlnZ2VySGVpZ2h0X3JlbTogMi45O1xuXG4vKiBFbmQgUFBJRCB2YXJzICovXG4iLCIudmlhZm91cmEudmYtb3ZlcmxheSB7XG4gICAgcG9zaXRpb246IGZpeGVkO1xuICAgIHRvcDogMDtcbiAgICBsZWZ0OiAwO1xuICAgIHotaW5kZXg6IDEwMDAwMDA7XG4gICAgZGlzcGxheTogZmxleDtcbiAgICBqdXN0aWZ5LWNvbnRlbnQ6IGNlbnRlcjtcbiAgICB3aWR0aDogMTAwdnc7XG4gICAgaGVpZ2h0OiAxMDB2aDtcbn1cblxuLnZpYWZvdXJhIC52Zi1vdmVybGF5LWNsb3NlIHtcbiAgICBAaW5jbHVkZSBmbGV4LWhvcml6b250YWwtbGlzdChmbGV4LWVuZCwgY2VudGVyKTtcblxuICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICB0b3A6IDA7XG4gICAgcmlnaHQ6IDA7XG4gICAgei1pbmRleDogMTAwMDAwMTtcbiAgICBwYWRkaW5nOiAyMHB4IDQwcHggMjBweCAyMHB4O1xuXG4gICAgQG1lZGlhIG9ubHkgc2NyZWVuIGFuZCAobWF4LXdpZHRoOiA2NDBweCkge1xuICAgICAgICBwYWRkaW5nOiAxNXB4O1xuICAgIH1cblxuICAgID4gKiArICoge1xuICAgICAgICBtYXJnaW4tbGVmdDogNXB4O1xuICAgIH1cblxuICAgIC52Zi1pY29uIHtcbiAgICAgICAgYm9yZGVyLXN0eWxlOiBzb2xpZDtcbiAgICAgICAgYm9yZGVyLXdpZHRoOiAxcHg7XG4gICAgICAgIGJvcmRlci1yYWRpdXM6IDUwJTtcbiAgICB9XG59XG4iLCIudmlhZm91cmEudmYtb3ZlcmxheSB7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogJHZmLWFsbW9zdC1vcGFxdWUtd2hpdGU7XG59XG5cbi52aWFmb3VyYSAudmYtb3ZlcmxheS1jbG9zZSB7XG4gICAgQGluY2x1ZGUgbGlnaHQtdGV4dCgkZGVmYXVsdC1wYWxldHRlKTtcbiAgICBAaW5jbHVkZSB2YXIoZmlsbCwgJ2xpZ2h0LXRleHQtb24tZGVmYXVsdC1jb2xvcicpO1xuXG4gICAgYmFja2dyb3VuZC1jb2xvcjogJHZmLWFsbW9zdC1vcGFxdWUtd2hpdGU7XG4gICAgYm9yZGVyLXJhZGl1czogMCAwIDAgM3B4O1xuXG4gICAgLnZmLWljb24ge1xuICAgICAgICBib3JkZXItY29sb3I6ICR2Zi1ncmV5O1xuICAgIH1cbn1cbiIsIi52aWFmb3VyYSB7XG4gICAgLnZmLXJhdGluZyB7XG4gICAgICAgIHdoaXRlLXNwYWNlOiBub3dyYXA7XG4gICAgICAgIHRleHQtYWxpZ246IGxlZnQ7XG4gICAgfVxuXG4gICAgLnZmLXJhdGluZy1zbWFsbCB7XG4gICAgICAgIGZvbnQtc2l6ZTogMTJweDtcbiAgICB9XG59XG4iLCIvLyBodHRwOi8vY29kZXBlbi5pby94cmFtL3Blbi9FYmdHbD9lZGl0b3JzPTExMDBcbi52Zi1yYXRpbmcgLnZmLWludGVyYWN0aXZlIHBhdGgge1xuICAgIGZpbGw6ICMwMDAwMDA7XG59XG5cbi52Zi1zdGFyLWZpbGxlZC1pbiBwYXRoIHtcbiAgICBmaWxsOiAkY29sb3ItcmF0aW5ncy1zdGFycy1maWxsO1xufVxuXG4udmYtcmF0aW5nOmhvdmVyIC52Zi1pbnRlcmFjdGl2ZTpob3ZlciB+IC52Zi1pbnRlcmFjdGl2ZSBwb2x5Z29uIHtcbiAgICB0cmFuc2l0aW9uOiBmaWxsIDAuMnMgZWFzZTtcbiAgICBmaWxsOiAjZmZmZmZmO1xufVxuXG4udmYtcmF0aW5nOmhvdmVyIC52Zi1pbnRlcmFjdGl2ZTpob3ZlciB+IC52Zi1pbnRlcmFjdGl2ZSBwYXRoIHtcbiAgICB0cmFuc2l0aW9uOiBmaWxsIDAuMnMgMDAwO1xuICAgIGZpbGw6ICMwMDAwMDA7XG59XG5cbi52Zi1yYXRpbmc6aG92ZXIgLnZmLWludGVyYWN0aXZlICoge1xuICAgIGZpbGw6ICRjb2xvci1yYXRpbmdzLXN0YXJzLWZpbGw7XG59XG5cbi52Zi1zdGFyLWZpbGxlZC1pbiBwb2x5Z29uIHtcbiAgICBmaWxsOiAkY29sb3ItcmF0aW5ncy1zdGFycy1maWxsO1xufVxuXG4udmYtcmF0aW5nID4gc3ZnLnZmLWludGVyYWN0aXZlIHtcbiAgICBjdXJzb3I6IHBvaW50ZXI7XG59XG4iLCIudmlhZm91cmEge1xuICAgICRpdGVtLW1hcmdpbjogMTBweDtcblxuICAgIEBtaXhpbiBnYWxsZXJ5LWl0ZW0tc2l6ZSgkbnVtRWxlbWVudHMpIHtcbiAgICAgICAgJG51bVBhZGRlZEVsZW1lbnRzOiAkbnVtRWxlbWVudHMgLSAxO1xuICAgICAgICAudmYtbWVkaWEtZ2FsbGVyeS52Zi1tZWRpYS1nYWxsZXJ5LSN7JG51bUVsZW1lbnRzfSAudmYtbWVkaWEtZ2FsbGVyeS1pdGVtIHtcbiAgICAgICAgICAgIHBhZGRpbmctdG9wOiBjYWxjKCgoMTAwJSAtIDFweCAtICN7JGl0ZW0tbWFyZ2lufSAqICN7JG51bVBhZGRlZEVsZW1lbnRzfSkgLyAjeyRudW1FbGVtZW50c30pKTtcblxuICAgICAgICAgICAgLyogLTFweCBmb3IgSUUgKi9cbiAgICAgICAgICAgIHBhZGRpbmctbGVmdDogY2FsYygoKDEwMCUgLSAxcHggLSAjeyRpdGVtLW1hcmdpbn0gKiAjeyRudW1QYWRkZWRFbGVtZW50c30pIC8gI3skbnVtRWxlbWVudHN9KSk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICBAaW5jbHVkZSBnYWxsZXJ5LWl0ZW0tc2l6ZSg0KTtcbiAgICBAaW5jbHVkZSBnYWxsZXJ5LWl0ZW0tc2l6ZSg1KTtcbiAgICBAaW5jbHVkZSBnYWxsZXJ5LWl0ZW0tc2l6ZSg2KTtcblxuICAgIC8vIEZvciB0b3AgbGV2ZWwgd2lkZ2V0XG4gICAgLnZmLXdpZGdldC52Zi1tZWRpYS1nYWxsZXJ5IHtcbiAgICAgICAgbWFyZ2luLXJpZ2h0OiAxNXB4O1xuICAgICAgICBtYXJnaW4tbGVmdDogMTVweDtcbiAgICB9XG5cbiAgICAudmYtbWVkaWEtZ2FsbGVyeSB7XG4gICAgICAgIHBvc2l0aW9uOiByZWxhdGl2ZTsgLy8gbmVlZGVkIGZvciBhbmltYXRpb25zIChsYXN0IGl0ZW0gaXMgYWJzb2x1dGVseSBwb3NpdGlvbmVkKVxuICAgICAgICB3aWR0aDogaW5oZXJpdDtcbiAgICAgICAgbWFyZ2luOiAxMHB4IDA7XG4gICAgICAgIHBhZGRpbmc6IDA7XG5cbiAgICAgICAgLnZmLXRodW1ibmFpbCB7XG4gICAgICAgICAgICBAaW5jbHVkZSBzaXplKDEwMCUpO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLnZmLW1lZGlhLWdhbGxlcnktaXRlbSB7XG4gICAgICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgICAgICAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICAgICAgICB3aWR0aDogMDtcbiAgICAgICAgaGVpZ2h0OiAwO1xuICAgICAgICBvdmVyZmxvdzogaGlkZGVuO1xuICAgICAgICB0ZXh0LWFsaWduOiBjZW50ZXI7XG5cbiAgICAgICAgKyAudmYtbWVkaWEtZ2FsbGVyeS1pdGVtIHtcbiAgICAgICAgICAgIG1hcmdpbi1sZWZ0OiAkaXRlbS1tYXJnaW47XG4gICAgICAgIH1cblxuICAgICAgICA+ICosXG4gICAgICAgID4gLnZmLWltYWdlLXdyYXBwZXIge1xuICAgICAgICAgICAgcG9zaXRpb246IGFic29sdXRlO1xuICAgICAgICAgICAgdG9wOiAwO1xuICAgICAgICAgICAgbGVmdDogMDtcbiAgICAgICAgICAgIGJvcmRlci1yYWRpdXM6IGluaGVyaXQ7XG4gICAgICAgIH1cblxuICAgICAgICAudmYtaWNvbi1wbGF5IHtcbiAgICAgICAgICAgIEBpbmNsdWRlIHNpemUoNTBweCk7XG5cbiAgICAgICAgICAgIC8qXG4gICAgICAgICAgICBQb3NpdGlvbmluZyBmb3IgSUUxMSBhbmQgYmVjYXVzZSBvZiBhbmltYXRpb25zIHdlIG5lZWQgaXQgdG8gc3RheSBpblxuICAgICAgICAgICAgcG9zaXRpb24uIFNob3VsZCBwcm9iYWJseSBiZSByZWZhY3RvcmVkIGxhdGVyIHdoZW4gbW92aW5nIHRvIFZ1ZVxuICAgICAgICAgICAgKi9cbiAgICAgICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICAgICAgICAgIHRvcDogNTAlO1xuICAgICAgICAgICAgbGVmdDogNTAlO1xuICAgICAgICAgICAgbWF4LXdpZHRoOiA1MCU7XG4gICAgICAgICAgICBtYXgtaGVpZ2h0OiA1MCU7XG4gICAgICAgICAgICB0cmFuc2Zvcm06IHRyYW5zbGF0ZSgtNTAlLCAtNTAlKTtcbiAgICAgICAgfVxuXG4gICAgICAgIC8vIDJuZCBsYXN0IGl0ZW0gc2hvdWxkIGNvdmVyIGxhc3Qgd2hlbiBzbGlkaW5nXG4gICAgICAgICY6bnRoLWxhc3QtY2hpbGQoMikge1xuICAgICAgICAgICAgei1pbmRleDogMTtcbiAgICAgICAgfVxuXG4gICAgICAgICYudmYtbWVkaWEtZ2FsbGVyeS1jb3VudDpsYXN0LWNoaWxkIHtcbiAgICAgICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICAgICAgICAgIHJpZ2h0OiAwO1xuICAgICAgICAgICAgei1pbmRleDogMDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC52Zi1tZWRpYS1nYWxsZXJ5LWxvYWRpbmctaXRlbSAudmYtcHJvZ3Jlc3MtYmFyIHtcbiAgICAgICAgbWF4LXdpZHRoOiAxMDAlO1xuICAgICAgICBtYXJnaW46IDAgMTAlO1xuICAgIH1cblxuICAgIC52Zi12aWRlby1wbGF5LWJ1dHRvbiB7XG4gICAgICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcblxuICAgICAgICAudmYtaWNvbi1wbGF5IHtcbiAgICAgICAgICAgIHBvc2l0aW9uOiBhYnNvbHV0ZTtcbiAgICAgICAgICAgIHRvcDogNTAlO1xuICAgICAgICAgICAgbGVmdDogNTAlO1xuICAgICAgICAgICAgdHJhbnNmb3JtOiB0cmFuc2xhdGUoLTUwJSwgLTUwJSk7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAudmYtZ2FsbGVyeS1saW5rIHtcbiAgICAgICAgcGFkZGluZzogNXB4O1xuICAgIH1cbn1cbiIsIi52aWFmb3VyYSB7XG4gICAgLnZmLWljb24tcGxheSB7XG4gICAgICAgIGZpbGw6ICNmZmZmZmY7XG5cbiAgICAgICAgJi52Zi1pY29uLWNpcmNsZS1vdXRsaW5lIC52Zi1pY29uLWlubmVyLWNpcmNsZSB7XG4gICAgICAgICAgICBzdHJva2U6ICNmZmZmZmY7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAudmYtbWVkaWEtZ2FsbGVyeS1pdGVtIHtcbiAgICAgICAgYm9yZGVyLXJhZGl1czogM3B4O1xuICAgIH1cblxuICAgIC52Zi1pbWFnZS52Zi1tZWRpYS1nYWxsZXJ5LWxvYWRpbmctaXRlbTpub3QoLmZhZGUtaW1hZ2UtbGVhdmUpOjpiZWZvcmUge1xuICAgICAgICBvcGFjaXR5OiAwLjQ7XG4gICAgfVxuXG4gICAgLnZmLXZpZGVvLXBsYXktYnV0dG9uIHtcbiAgICAgICAgYmFja2dyb3VuZDogIzAwMDAwMDtcblxuICAgICAgICAudmYtdmlkZW8tdGh1bWIge1xuICAgICAgICAgICAgb3BhY2l0eTogMC44O1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLnZmLWdhbGxlcnktbGluayxcbiAgICAudmYtbWVkaWEtZ2FsbGVyeS12aWRlby1pdGVtIHtcbiAgICAgICAgZm9udC1zaXplOiBjYWxjKDZwdCArIDEuM3ZtaW4pO1xuICAgIH1cbn1cbiIsIi52aWFmb3VyYSB7XG4gICAgLnNsaWRlLWxlZnQtdHJhbnNpdGlvbiB7XG4gICAgICAgIHRyYW5zaXRpb246IHBhZGRpbmctbGVmdCAwLjNzO1xuICAgIH1cblxuICAgIC5zbGlkZS1sZWZ0LWVudGVyIHtcbiAgICAgICAgcGFkZGluZy1sZWZ0OiAwICFpbXBvcnRhbnQ7XG4gICAgfVxuXG4gICAgLnZmLXZpZGVvLXByb2Nlc3Npbmcge1xuICAgICAgICB0cmFuc2l0aW9uOiBvcGFjaXR5IDAuM3M7XG4gICAgfVxuXG4gICAgLnZmLW1lZGlhLWdhbGxlcnktY291bnQgLnZmLXZpZGVvLXByb2Nlc3Npbmcge1xuICAgICAgICBvcGFjaXR5OiAwO1xuICAgIH1cblxuICAgIC52Zi1tZWRpYS1nYWxsZXJ5LWNvdW50IHtcbiAgICAgICAgYSxcbiAgICAgICAgYTp2aXNpdGVkLFxuICAgICAgICBhOmhvdmVyLFxuICAgICAgICBhOmFjdGl2ZSB7XG4gICAgICAgICAgICBAaW5jbHVkZSB2YXIoY29sb3IsICd0ZXh0LW9uLXByaW1hcnktY29sb3InLCAhaW1wb3J0YW50KTtcblxuICAgICAgICAgICAgdGV4dC1kZWNvcmF0aW9uOiBub25lO1xuICAgICAgICB9XG4gICAgfVxufVxuIiwiLy8gTGF5b3V0XG4udmlhZm91cmEge1xuICAgICRtYXJnaW4tdG9wOiAydnc7XG4gICAgJG1hcmdpbi1ib3R0b206IDF2dztcblxuICAgIC52Zi1nYWxsZXJ5LWZ1bGxzY3JlZW4ge1xuICAgICAgICBvdmVyZmxvdy14OiBhdXRvO1xuICAgIH1cblxuICAgIC52Zi1mdWxsc2NyZWVuLWdhbGxlcnktdmlldy1sZWZ0LFxuICAgIC52Zi1mdWxsc2NyZWVuLWdhbGxlcnktdmlldy1yaWdodCB7XG4gICAgICAgIHBvc2l0aW9uOiBmaXhlZDtcbiAgICAgICAgdG9wOiA1MCU7XG4gICAgICAgIGhlaWdodDogMTAwJTtcbiAgICAgICAgcGFkZGluZzogNXB4O1xuICAgICAgICB0cmFuc2Zvcm06IHRyYW5zbGF0ZVkoLTUwJSk7XG4gICAgfVxuXG4gICAgLnZmLWZ1bGxzY3JlZW4tZ2FsbGVyeS12aWV3LWxlZnQge1xuICAgICAgICBsZWZ0OiAwO1xuICAgIH1cblxuICAgIC52Zi1mdWxsc2NyZWVuLWdhbGxlcnktdmlldy1yaWdodCB7XG4gICAgICAgIHJpZ2h0OiAwO1xuICAgICAgICBtYXJnaW4tcmlnaHQ6IDEwcHg7IC8vIE9mZnNldCBmb3Igc2Nyb2xsYmFyIGNhc2VcbiAgICB9XG5cbiAgICAudmYtZnVsbHNjcmVlbi1nYWxsZXJ5LXZpZXcgPiBkaXYge1xuICAgICAgICAvLyBtYXJnaW4tcmlnaHQ6XG4gICAgICAgIC8vICAgRXh0cmEgc3BhY2UgZm9yIHNjcm9sbGJhci4gSW4gYWxsIGNhc2VzIGl0IHdpbGwgYmUgNXB4IG9mZiAvc2hydWdcbiAgICAgICAgbWFyZ2luOiAkbWFyZ2luLXRvcCA0NnB4ICRtYXJnaW4tYm90dG9tIDQxcHg7XG5cbiAgICAgICAgPiAqICsgKiB7XG4gICAgICAgICAgICBtYXJnaW4tdG9wOiAkbWFyZ2luLXRvcDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC52Zi1mdWxsc2NyZWVuLWdhbGxlcnktdmlldy11c2VyLW1ldGEge1xuICAgICAgICBAaW5jbHVkZSBmbGV4LWhvcml6b250YWwtbGlzdChmbGV4LXN0YXJ0LCBjZW50ZXIpO1xuXG4gICAgICAgIHBhZGRpbmc6IDA7XG5cbiAgICAgICAgQG1lZGlhIG9ubHkgc2NyZWVuIGFuZCAobWF4LXdpZHRoOiA2NDBweCkge1xuICAgICAgICAgICAgJixcbiAgICAgICAgICAgIC5oNCB7XG4gICAgICAgICAgICAgICAgZGlzcGxheTogYmxvY2s7XG4gICAgICAgICAgICB9XG5cbiAgICAgICAgICAgIC52Zi1pY29uIHtcbiAgICAgICAgICAgICAgICBtYXJnaW4tbGVmdDogMDtcbiAgICAgICAgICAgIH1cbiAgICAgICAgfVxuXG4gICAgICAgID4gKiArICoge1xuICAgICAgICAgICAgbWFyZ2luLWxlZnQ6IDEwcHg7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAudmYtZnVsbHNjcmVlbi1nYWxsZXJ5LW1lZGlhLXRpbWUge1xuICAgICAgICBtYXJnaW4tbGVmdDogNXB4O1xuICAgIH1cblxuICAgIC52Zi1nYWxsZXJ5LWNvdW50IHtcbiAgICAgICAgdGV4dC1hbGlnbjogcmlnaHQ7XG4gICAgfVxuXG4gICAgLnZmLWZ1bGxzY3JlZW4tZ2FsbGVyeS12aWV3ZXItaW1hZ2Uge1xuICAgICAgICBtYXgtd2lkdGg6IDEwMCU7XG4gICAgICAgIG1heC1oZWlnaHQ6IDEwMCU7XG4gICAgfVxuXG4gICAgLnZmLXZpZGVvLXByb2Nlc3NpbmcgLnZmLWxhYmVsIHtcbiAgICAgICAgbWFyZ2luLXRvcDogNHB4O1xuICAgIH1cblxuICAgIC52Zi1mdWxsc2NyZWVuLWdhbGxlcnktZm9vdGVyIHtcbiAgICAgICAganVzdGlmeS1jb250ZW50OiBmbGV4LWVuZDtcbiAgICB9XG5cbiAgICAudmYtZnVsbHNjcmVlbi1nYWxsZXJ5LWZvb3Rlci13aXRoLXBhZ2luYXRpb24ge1xuICAgICAgICBqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWJldHdlZW47XG4gICAgfVxuXG4gICAgLnZmLWZ1bGxzY3JlZW4tZ2FsbGVyeS1mb290ZXItYWxpZ24ge1xuICAgICAgICBhbGlnbi1pdGVtczogY2VudGVyO1xuICAgIH1cblxuICAgIC52Zi1mdWxsc2NyZWVuLWdhbGxlcnktZm9vdGVyLWFsaWduIHAge1xuICAgICAgICBmb250LXNpemU6IDEycHg7XG4gICAgfVxuXG4gICAgLnZmLWZ1bGxzY3JlZW4tZ2FsbGVyeS1hY3Rpb24tbGFiZWwge1xuICAgICAgICBjdXJzb3I6IHBvaW50ZXI7XG4gICAgfVxuXG4gICAgLnZmLWdhbGxlcnktZnVsbHNjcmVlbiB2aWRlbyxcbiAgICAudmYtZ2FsbGVyeS1mdWxsc2NyZWVuIC52Zi12aWRlby10aHVtYiB7XG4gICAgICAgIG1heC13aWR0aDogNzB2dztcbiAgICAgICAgbWF4LWhlaWdodDogY2FsYyg4MHZoIC0gNDVweCk7XG4gICAgfVxufVxuIiwiLnZpYWZvdXJhIC52Zi1mdWxsc2NyZWVuLWdhbGxlcnktbWVkaWEtdGltZSB7XG4gICAgQGluY2x1ZGUgbGlnaHQtdGV4dCgkZGVmYXVsdC1wYWxldHRlKTtcbiAgICBAaW5jbHVkZSB2YXIoZmlsbCwgJ2xpZ2h0LXRleHQtb24tZGVmYXVsdC1jb2xvcicpO1xufVxuIiwiLypcbkxpbmtzXG5cblZpYWZvdXJhIHdpZGdldHMgaGF2ZSB0d28gc2V0cyBvZiBsaW5rcyBzdHlsZXMuIFRob3NlIGZvciBjb21tZW50cyBhbmQgbG9uZy1mb3JtXG50ZXh0LCBhbmQgdGhvc2UgdXNlZCBlbHNld2hlcmUuXG5cblN0eWxlZ3VpZGUgY3NzLnR5cG9ncmFwaHkubGlua3NcbiovXG5cbi8qXG5CYXNpYyBsaW5rc1xuXG5CYXNpYyBsaW5rcyBzdHlsZXMgdXNlZCB0aHJvdWdob3V0IHRoZSBlbmdhZ2VtZW50IHRvb2xzIChleGNlcHRpbmcgbG9uZy1mb3JtIHRleHQpLlxuXG5NYXJrdXA6IDxhIGhyZWY9XCJmdW5jdGlvbihlKXtlLnByZXZlbnREZWZhdWx0KCk7fVwiIGNsYXNzPVwie3ttb2RpZmllcl9jbGFzc319XCI+VGhpcyBpcyBhIHt7bmFtZX19IGxpbms8L3NwYW4+XG5cbi5wc2V1ZG8tY2xhc3MtdW52aXNpdGVkIC0gQW4gdW52aXNpdGVkIGxpbmtcbjp2aXNpdGVkIC0gQW4gdW52aXNpdGVkIGxpbmtcbjpob3ZlciAtIEEgaG92ZXJlZCBsaW5rXG46YWN0aXZlIC0gQW4gYWN0aXZlIGxpbmtcblxuU3R5bGVndWlkZSBjc3MudHlwb2dyYXBoeS5saW5rcy5iYXNlXG4qL1xuLnZpYWZvdXJhIGEge1xuICAgIEBpbmNsdWRlIHZhcihjb2xvciwgJ2FjY2VudC1jb2xvcicpO1xuXG4gICAgdGV4dC1kZWNvcmF0aW9uOiBub25lO1xuXG4gICAgJjpob3ZlcixcbiAgICAmOmZvY3VzLFxuICAgICYucHNldWRvLWNsYXNzLWhvdmVyLFxuICAgICY6YWN0aXZlLFxuICAgICYucHNldWRvLWNsYXNzLWFjdGl2ZSB7XG4gICAgICAgIEBpbmNsdWRlIHZhcihjb2xvciwgJ2FjY2VudC1jb2xvcicpO1xuXG4gICAgICAgIHRleHQtZGVjb3JhdGlvbjogdW5kZXJsaW5lO1xuICAgIH1cblxuICAgICY6dmlzaXRlZCxcbiAgICAmLnBzZXVkby1jbGFzcy12aXNpdGVkIHtcbiAgICAgICAgQGluY2x1ZGUgdmFyKGNvbG9yLCAnYWNjZW50LWNvbG9yJyk7XG4gICAgfVxuXG4gICAgJi5wc2V1ZG8tY2xhc3MtdW52aXNpdGVkIHtcbiAgICAgICAgQGluY2x1ZGUgdmFyKGNvbG9yLCAnYWNjZW50LWNvbG9yJyk7XG4gICAgfVxufVxuXG4vKlxuUGFyYWdyYXBoIExpbmtzXG5cbkxpbmtzIGluIHBhcmFncmFwaHMuIEZvciBleGFtcGxlIGluIGEgY29tbWVudGluZyBhcmVhLCBvciBsb25nIGZvcm0gdGV4dC4gSW4gdGhpc1xuY2FzZSB3ZSBuZWVkIHRvXG5cbk1hcmt1cDogPHA+PGEgaHJlZj1cImZ1bmN0aW9uKGUpe2UucHJldmVudERlZmF1bHQoKTt9XCIgY2xhc3M9XCJ7e21vZGlmaWVyX2NsYXNzfX1cIj5UaGlzXG4gaXMgYSB7e25hbWV9fSBsaW5rPC9zcGFuPjwvcD5cblxuLnBzZXVkby1jbGFzcy11bnZpc2l0ZWQgLSBBbiB1bnZpc2l0ZWQgbGlua1xuOnZpc2l0ZWQgLSBBbiB1bnZpc2l0ZWQgbGlua1xuOmhvdmVyIC0gQSBob3ZlcmVkIGxpbmtcbjphY3RpdmUgLSBBbiBhY3RpdmUgbGlua1xuXG5TdHlsZWd1aWRlIGNzcy50eXBvZ3JhcGh5LmxpbmtzLnBhcmFncmFwaFxuKi9cbi52aWFmb3VyYSBwIGEge1xuICAgIEBpbmNsdWRlIHZhcihjb2xvciwgJ2FjY2VudC1jb2xvcicpO1xuXG4gICAgJjpob3ZlcixcbiAgICAmOmZvY3VzLFxuICAgICYucHNldWRvLWNsYXNzLWhvdmVyLFxuICAgICY6YWN0aXZlLFxuICAgICYucHNldWRvLWNsYXNzLWFjdGl2ZSB7XG4gICAgICAgIEBpbmNsdWRlIHZhcihjb2xvciwgJ2FjY2VudC1jb2xvcicpO1xuXG4gICAgICAgIHRleHQtZGVjb3JhdGlvbjogbm9uZTtcbiAgICB9XG5cbiAgICAmOnZpc2l0ZWQsXG4gICAgJi5wc2V1ZG8tY2xhc3MtdmlzaXRlZCB7XG4gICAgICAgIGNvbG9yOiBpbmhlcml0O1xuICAgICAgICB0ZXh0LWRlY29yYXRpb246IHVuZGVybGluZTtcbiAgICB9XG5cbiAgICAmLnBzZXVkby1jbGFzcy11bnZpc2l0ZWQge1xuICAgICAgICBAaW5jbHVkZSB2YXIoY29sb3IsICdhY2NlbnQtY29sb3InKTtcblxuICAgICAgICB0ZXh0LWRlY29yYXRpb246IHVuZGVybGluZTtcbiAgICB9XG59XG4iLCIudmlhZm91cmEge1xuICAgIC52Zi1tb2RhbCB7XG4gICAgICAgIC52Zi1pbm5lci1tb2RhbCB7XG4gICAgICAgICAgICBiYWNrZ3JvdW5kLWNvbG9yOiAkdmYtbGlnaHQtZ3JleTtcbiAgICAgICAgICAgIGJvcmRlci1jb2xvcjogJHZmLWdyZXk7XG4gICAgICAgICAgICBib3JkZXItc3R5bGU6IHNvbGlkO1xuICAgICAgICB9XG4gICAgfVxufVxuIiwiJGJhY2tncm91bmRwbmc6IHVybCgnLi4vaW1nL21lanMvYmFja2dyb3VuZC5wbmcnKTtcbiRiaWdwbGF5cG5nOiB1cmwoJy4uL2ltZy9tZWpzL2JpZ3BsYXkucG5nJyk7XG4kY29udHJvbHNwbmc6IHVybCgnLi4vaW1nL21lanMvY29udHJvbHMucG5nJyk7XG5cbi52aWFmb3VyYSB7XG4gICAgLm1lanMtY29udGFpbmVyIHtcbiAgICAgICAgQGluY2x1ZGUgdmFyKGJhY2tncm91bmQsICdwcmltYXJ5LWNvbG9yLTEwMCcpO1xuICAgIH1cblxuICAgIC5tZWpzLWVtYmVkLFxuICAgIC5tZWpzLWVtYmVkIGJvZHkge1xuICAgICAgICBAaW5jbHVkZSB2YXIoYmFja2dyb3VuZCwgJ3ByaW1hcnktY29sb3ItMTAwJyk7XG4gICAgfVxuXG4gICAgLm1lanMtb3ZlcmxheS1idXR0b24ge1xuICAgICAgICBiYWNrZ3JvdW5kOiAkYmlncGxheXBuZyBuby1yZXBlYXQ7XG4gICAgfVxuXG4gICAgLm1lanMtb3ZlcmxheS1sb2FkaW5nIHtcbiAgICAgICAgYmFja2dyb3VuZDogJGJhY2tncm91bmRwbmc7XG4gICAgfVxuXG4gICAgLm1lanMtY29udGFpbmVyIC5tZWpzLWNvbnRyb2xzIHtcbiAgICAgICAgYmFja2dyb3VuZDogJGJhY2tncm91bmRwbmc7XG4gICAgfVxuXG4gICAgLm1lanMtY29udGFpbmVyIC5tZWpzLWNvbnRyb2xzIGRpdiB7XG4gICAgICAgIGJhY2tncm91bmQ6IDA7XG4gICAgICAgIGJhY2tncm91bmQtaW1hZ2U6IG5vbmU7XG4gICAgfVxuXG4gICAgLm1lanMtY29udHJvbHMgLm1lanMtYnV0dG9uIGJ1dHRvbiB7XG4gICAgICAgIGJhY2tncm91bmQ6IHRyYW5zcGFyZW50ICRjb250cm9sc3BuZyBuby1yZXBlYXQ7XG4gICAgfVxuXG4gICAgLm1lanMtY29udHJvbHMgLm1lanMtYnV0dG9uIGJ1dHRvbjpmb2N1cyB7XG4gICAgICAgIG91dGxpbmU6IHNvbGlkIDFweCAkdmYteWVsbG93O1xuICAgIH1cblxuICAgIC5tZWpzLWNvbnRhaW5lciAubWVqcy1jb250cm9scyAubWVqcy10aW1lIHtcbiAgICAgICAgY29sb3I6ICR3aGl0ZTtcbiAgICB9XG5cbiAgICAubWVqcy1jb250YWluZXIgLm1lanMtY29udHJvbHMgLm1lanMtdGltZSBzcGFuIHtcbiAgICAgICAgY29sb3I6ICR3aGl0ZTtcbiAgICB9XG5cbiAgICAubWVqcy1jb250cm9scyAubWVqcy10aW1lLXJhaWwgLm1lanMtdGltZS10b3RhbCB7XG4gICAgICAgIGJhY2tncm91bmQ6ICR2Zi1zZW1pLXRyYW5zbHVjZW50LWRhcmstZ3JleTtcbiAgICB9XG5cbiAgICAubWVqcy1jb250cm9scyAubWVqcy10aW1lLXJhaWwgLm1lanMtdGltZS1sb2FkZWQge1xuICAgICAgICBiYWNrZ3JvdW5kOiAkdmYtc2VtaS10cmFuc2x1Y2VudC1ibHVlO1xuICAgIH1cblxuICAgIC5tZWpzLWNvbnRyb2xzIC5tZWpzLXRpbWUtcmFpbCAubWVqcy10aW1lLWN1cnJlbnQge1xuICAgICAgICBiYWNrZ3JvdW5kOiAkdmYtc2VtaS10cmFuc2x1Y2VudC13aGl0ZTtcbiAgICB9XG5cbiAgICAubWVqcy1jb250cm9scyAubWVqcy10aW1lLXJhaWwgLm1lanMtdGltZS1oYW5kbGUge1xuICAgICAgICBAaW5jbHVkZSB2YXIoYmFja2dyb3VuZCwgJ2RlZmF1bHQtY29sb3InKTtcbiAgICAgICAgQGluY2x1ZGUgdmFyKGJvcmRlci1jb2xvciwgJ3ByaW1hcnktY29sb3ItNzUnKTtcbiAgICB9XG5cbiAgICAubWVqcy1jb250cm9scyAubWVqcy10aW1lLXJhaWwgLm1lanMtdGltZS1mbG9hdCB7XG4gICAgICAgIGJhY2tncm91bmQ6ICR2Zi1saWdodC1ncmV5O1xuXG4gICAgICAgIEBpbmNsdWRlIHZhcihib3JkZXItY29sb3IsICdwcmltYXJ5LWNvbG9yLTc1Jyk7XG4gICAgICAgIEBpbmNsdWRlIHZhcihjb2xvciwgJ3ByaW1hcnktY29sb3ItNzUnKTtcbiAgICB9XG5cbiAgICAubWVqcy1jb250cm9scyAubWVqcy10aW1lLXJhaWwgLm1lanMtdGltZS1mbG9hdC1jb3JuZXIge1xuICAgICAgICBib3JkZXItY29sb3I6ICR2Zi1saWdodC1ncmV5IHRyYW5zcGFyZW50IHRyYW5zcGFyZW50O1xuICAgIH1cblxuICAgIC5tZWpzLWNvbnRyb2xzIC5tZWpzLXZvbHVtZS1idXR0b24gLm1lanMtdm9sdW1lLXNsaWRlciB7XG4gICAgICAgIGJhY2tncm91bmQ6ICRiYWNrZ3JvdW5kcG5nO1xuICAgIH1cblxuICAgIC5tZWpzLWNvbnRyb2xzIC5tZWpzLXZvbHVtZS1idXR0b24gLm1lanMtdm9sdW1lLXNsaWRlciAubWVqcy12b2x1bWUtdG90YWwge1xuICAgICAgICBiYWNrZ3JvdW5kOiAkdmYtdHJhbnNsdWNlbnQtd2hpdGU7XG4gICAgfVxuXG4gICAgLm1lanMtY29udHJvbHMgLm1lanMtdm9sdW1lLWJ1dHRvbiAubWVqcy12b2x1bWUtc2xpZGVyIC5tZWpzLXZvbHVtZS1jdXJyZW50IHtcbiAgICAgICAgYmFja2dyb3VuZDogJHZmLXNlbWktdHJhbnNsdWNlbnQtd2hpdGU7XG4gICAgfVxuXG4gICAgLm1lanMtY29udHJvbHMgLm1lanMtdm9sdW1lLWJ1dHRvbiAubWVqcy12b2x1bWUtc2xpZGVyIC5tZWpzLXZvbHVtZS1oYW5kbGUge1xuICAgICAgICBiYWNrZ3JvdW5kOiAkdmYtc2VtaS10cmFuc2x1Y2VudC13aGl0ZTtcbiAgICB9XG5cbiAgICAubWVqcy1jb250cm9scyAubWVqcy1jYXB0aW9ucy1idXR0b24gLm1lanMtY2FwdGlvbnMtc2VsZWN0b3Ige1xuICAgICAgICBiYWNrZ3JvdW5kOiAkYmFja2dyb3VuZHBuZztcbiAgICAgICAgYm9yZGVyLWNvbG9yOiB0cmFuc3BhcmVudDtcbiAgICB9XG5cbiAgICAubWVqcy1jb250cm9scyAubWVqcy1jYXB0aW9ucy1idXR0b24gLm1lanMtY2FwdGlvbnMtc2VsZWN0b3IgdWwgbGkge1xuICAgICAgICBjb2xvcjogJHdoaXRlO1xuICAgIH1cblxuICAgIC5tZWpzLWNvbnRyb2xzIC5tZWpzLWNhcHRpb25zLWJ1dHRvbiAubWVqcy1jYXB0aW9ucy10cmFuc2xhdGlvbnMge1xuICAgICAgICBmb250LXNpemU6IDEwcHg7XG4gICAgfVxuXG4gICAgLm1lanMtY2hhcHRlcnMge1xuICAgICAgICBAaW5jbHVkZSB2YXIoYm9yZGVyLXJpZ2h0LWNvbG9yLCAnZGVmYXVsdC1jb2xvcicpO1xuICAgIH1cblxuICAgIC5tZWpzLWNoYXB0ZXJzIC5tZWpzLWNoYXB0ZXIge1xuICAgICAgICBAaW5jbHVkZSB2YXIoYmFja2dyb3VuZCwgJ3ByaW1hcnktY29sb3ItNzUnKTtcbiAgICB9XG5cbiAgICAubWVqcy1jaGFwdGVycyAubWVqcy1jaGFwdGVyIC5tZWpzLWNoYXB0ZXItYmxvY2sge1xuICAgICAgICBAaW5jbHVkZSB2YXIoYm9yZGVyLXJpZ2h0LWNvbG9yLCAncHJpbWFyeS1jb2xvci03NScpO1xuICAgICAgICBAaW5jbHVkZSB2YXIoYm9yZGVyLWJvdHRvbS1jb2xvciwgJ3ByaW1hcnktY29sb3ItNzUnKTtcbiAgICAgICAgQGluY2x1ZGUgdmFyKGNvbG9yLCAndGV4dC1vbi1wcmltYXJ5LWNvbG9yJyk7XG5cbiAgICAgICAgZm9udC1zaXplOiAxMXB4O1xuICAgIH1cblxuICAgIC5tZWpzLWNoYXB0ZXJzIC5tZWpzLWNoYXB0ZXIgLm1lanMtY2hhcHRlci1ibG9jazpob3ZlciB7XG4gICAgICAgIGJhY2tncm91bmQ6ICR2Zi1zZW1pLXRyYW5zbHVjZW50LWxpZ2h0LWRhcmstZ3JleTtcbiAgICB9XG5cbiAgICAubWVqcy1jYXB0aW9ucy1sYXllciB7XG4gICAgICAgIGNvbG9yOiAkd2hpdGU7XG4gICAgfVxuXG4gICAgLm1lanMtY2FwdGlvbnMtbGF5ZXIgYSB7XG4gICAgICAgIGNvbG9yOiAkd2hpdGU7XG4gICAgICAgIHRleHQtZGVjb3JhdGlvbjogdW5kZXJsaW5lO1xuICAgIH1cblxuICAgIC5tZWpzLWNhcHRpb25zLXRleHQge1xuICAgICAgICBiYWNrZ3JvdW5kOiAkYmFja2dyb3VuZHBuZztcbiAgICB9XG5cbiAgICAubWUtY2Fubm90cGxheSBhIHtcbiAgICAgICAgY29sb3I6ICR3aGl0ZTtcbiAgICB9XG5cbiAgICAubWVqcy1jb250ZXh0bWVudSB7XG4gICAgICAgIEBpbmNsdWRlIGJhY2tncm91bmQoJGRlZmF1bHQtcGFsZXR0ZSk7XG5cbiAgICAgICAgYm9yZGVyLWNvbG9yOiAkdmYtZ3JleTtcbiAgICB9XG5cbiAgICAubWVqcy1jb250ZXh0bWVudSAubWVqcy1jb250ZXh0bWVudS1zZXBhcmF0b3Ige1xuICAgICAgICBAaW5jbHVkZSB2YXIoYmFja2dyb3VuZCwgJ3ByaW1hcnktY29sb3ItNzUnKTtcbiAgICB9XG5cbiAgICAubWVqcy1jb250ZXh0bWVudSAubWVqcy1jb250ZXh0bWVudS1pdGVtIHtcbiAgICAgICAgZm9udC1zaXplOiAxMnB4O1xuXG4gICAgICAgIEBpbmNsdWRlIHZhcihjb2xvciwgJ3ByaW1hcnktY29sb3ItNzUnKTtcbiAgICB9XG5cbiAgICAubWVqcy1jb250ZXh0bWVudSAubWVqcy1jb250ZXh0bWVudS1pdGVtOmhvdmVyIHtcbiAgICAgICAgY29sb3I6ICR3aGl0ZTtcbiAgICAgICAgYmFja2dyb3VuZDogJHZmLXR1cnFvaXNlO1xuICAgIH1cbn1cbiIsIi52aWFmb3VyYSB7XG4gICAgLnZmLWVycm9yIHtcbiAgICAgICAgY29sb3I6ICR2Zi1yZWQ7XG4gICAgfVxuXG4gICAgLnZmLWVycm9yLW1lc3NhZ2UsXG4gICAgLnZmLWRpc2FibGVkLWNvbnRlbnQsXG4gICAgLnZmLXNwYW0sXG4gICAgLnZmLWJhbm5lZCB7XG4gICAgICAgIGJhY2tncm91bmQtY29sb3I6ICRjb2xvci1lcnJvci1iZztcbiAgICAgICAgYm9yZGVyLWNvbG9yOiAkY29sb3ItZXJyb3ItYm9yZGVyO1xuICAgIH1cblxuICAgIC52Zi1jb21tZW50LWNvbnRlbnQge1xuICAgICAgICBib3JkZXItY29sb3I6IHRyYW5zcGFyZW50O1xuICAgIH1cblxuICAgIC52Zi1pbmZvLFxuICAgIC52Zi11c2VybmFtZS1tb2RlcmF0aW9uLW1lc3NhZ2UsXG4gICAgLnZmLWF2YXRhci1tb2RlcmF0aW9uLW1lc3NhZ2Uge1xuICAgICAgICBiYWNrZ3JvdW5kLWNvbG9yOiAkY29sb3ItaW5mby1iZztcbiAgICAgICAgYm9yZGVyLWNvbG9yOiAkY29sb3ItaW5mby1ib3JkZXI7XG4gICAgfVxuXG4gICAgLnZmLXN1Y2Nlc3MtbWVzc2FnZSxcbiAgICAudmYtdmVyaWZpY2F0aW9uLW1lc3NhZ2Uge1xuICAgICAgICBjb2xvcjogJGNvbG9yLXN1Y2Nlc3MtdGV4dDtcbiAgICAgICAgYmFja2dyb3VuZC1jb2xvcjogJGNvbG9yLXN1Y2Nlc3MtYmc7XG4gICAgICAgIGJvcmRlci1jb2xvcjogJGNvbG9yLXN1Y2Nlc3MtYm9yZGVyO1xuICAgIH1cblxuICAgIC52Zi1yZW1vdmVkIHtcbiAgICAgICAgYmFja2dyb3VuZDogJHZmLW1vc3RseS10cmFuc2x1Y2VudC1kYXJrLWJsdWU7XG4gICAgfVxuXG4gICAgLnZmLW1vZC1lcnJvciB7XG4gICAgICAgIGNvbG9yOiAkdmYtZGFyay1zY2FybGV0LXJlZDtcbiAgICAgICAgYmFja2dyb3VuZDogJHZmLWxpZ2h0LXBpbms7XG4gICAgICAgIGJvcmRlci1jb2xvcjogJHZmLWxpZ2h0LWdyZXk7XG4gICAgfVxuXG4gICAgLnZmLXZlcmlmaWNhdGlvbi1zdGF0dXMudmYtd2FybmluZyB7XG4gICAgICAgIGNvbG9yOiAkdmYtZGFyay1zY2FybGV0LXJlZDtcbiAgICAgICAgYmFja2dyb3VuZC1jb2xvcjogJHZmLWxpZ2h0LXBpbms7XG4gICAgfVxuXG4gICAgLnZmLXZlcmlmaWNhdGlvbi1zdGF0dXMgLnZmLWxvYWRlci1lcnJvciB7XG4gICAgICAgIGNvbG9yOiBpbmhlcml0O1xuICAgIH1cblxuICAgIC52Zi1pbmZvIGxpOm5vdCg6bGFzdC1jaGlsZCk6OmFmdGVyIHtcbiAgICAgICAgY29udGVudDogJ3wnO1xuICAgIH1cblxuICAgIC52Zi1zdWNjZXNzLW1lc3NhZ2UgYSxcbiAgICAudmYtZXJyb3ItbWVzc2FnZSBhLFxuICAgIC52Zi1hbGVydCBhLFxuICAgIC52Zi1pbmZvIGEge1xuICAgICAgICB0ZXh0LWRlY29yYXRpb246IHVuZGVybGluZTtcblxuICAgICAgICAmOmhvdmVyIHtcbiAgICAgICAgICAgIEBpbmNsdWRlIHZhcihjb2xvciwgJ3ByaW1hcnktY29sb3ItNzUnKTtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC52Zi1pY29uLXN1Y2Nlc3MgfiBzdHJvbmcsXG4gICAgLnZmLWljb24tYXBwcm92ZWQgfiBzdHJvbmcge1xuICAgICAgICBjb2xvcjogJGNvbG9yLXN1Y2Nlc3MtdGV4dDtcbiAgICB9XG5cbiAgICAudmYtaWNvbi1lcnJvciB+IHN0cm9uZyxcbiAgICAudmYtaWNvbi1yZWplY3RlZCB+IHN0cm9uZyB7XG4gICAgICAgIGNvbG9yOiAkY29sb3ItZXJyb3ItdGV4dDtcbiAgICB9XG59XG4iLCIudmYtdGlwLXRleHQge1xuICAgIGNvbG9yOiAkdmYtbGlnaHQtZ3JleTtcbn1cblxuLnZmLXRvb2x0aXAgLnZmLXRpcCB7XG4gICAgYm9yZGVyLWNvbG9yOiB0cmFuc3BhcmVudDtcbiAgICBjb250ZW50OiAnJztcblxuICAgIEBpbmNsdWRlIHZhcihib3JkZXItY29sb3ItdG9wLCAncHJpbWFyeS1jb2xvci0xMDAnKTtcbn1cbiIsIi52aWFmb3VyYS52Zi10aXBzeSxcbi52aWFmb3VyYS52Zi1kcm9wZG93biB7XG4gICAgdHJhbnNpdGlvbjogdHJhbnNmb3JtIDAuMXMsIG9wYWNpdHkgMC4xcztcblxuICAgIC52Zi10aXBzeS1pbm5lciB7XG4gICAgICAgIEBpbmNsdWRlIGJhY2tncm91bmQoJGRlZmF1bHQtcGFsZXR0ZSk7XG5cbiAgICAgICAgYm94LXNoYWRvdzogLTVweCA1cHggMTVweCAwICR2Zi10cmFuc2x1Y2VudC1saWdodC1kYXJrLWdyZXk7XG5cbiAgICAgICAgQGluY2x1ZGUgbGlnaHQtdGV4dCgkZGVmYXVsdC1wYWxldHRlKTtcbiAgICB9XG5cbiAgICAudmYtdGlwc3ktYXJyb3csXG4gICAgLnZmLXRpcHN5LWFycm93LWJvcmRlciB7XG4gICAgICAgIEBpbmNsdWRlIHZhcihib3JkZXItY29sb3IsICdkZWZhdWx0LWNvbG9yJyk7XG4gICAgfVxuXG4gICAgLnZmLXRpcHN5LWFycm93LW4ge1xuICAgICAgICBAaW5jbHVkZSB2YXIoYm9yZGVyLWJvdHRvbS1jb2xvciwgJ2RlZmF1bHQtY29sb3InKTtcbiAgICB9XG5cbiAgICAudmYtdGlwc3ktYXJyb3ctcyB7XG4gICAgICAgIEBpbmNsdWRlIHZhcihib3JkZXItdG9wLWNvbG9yLCAnZGVmYXVsdC1jb2xvcicpO1xuICAgIH1cblxuICAgIC52Zi10aXBzeS1hcnJvdy1lIHtcbiAgICAgICAgQGluY2x1ZGUgdmFyKGJvcmRlci1sZWZ0LWNvbG9yLCAnZGVmYXVsdC1jb2xvcicpO1xuICAgIH1cblxuICAgIC52Zi10aXBzeS1hcnJvdy13IHtcbiAgICAgICAgQGluY2x1ZGUgdmFyKGJvcmRlci1yaWdodC1jb2xvciwgJ2RlZmF1bHQtY29sb3InKTtcbiAgICB9XG5cbiAgICAvKiBUb29sdGlwICovXG4gICAgLnZmLXRvb2x0aXAge1xuICAgICAgICBAaW5jbHVkZSBkYXJrLWJ1dHRvbi1ncmFkaWVudCgpO1xuICAgICAgICBAaW5jbHVkZSB2YXIoY29sb3IsICd0ZXh0LW9uLXByaW1yeS1jb2xvcicpO1xuXG4gICAgICAgIHRleHQtc2hhZG93OiAwIC0xcHggMCBtYXAtZ2V0KCRjbGllbnQtY29sb3JzLCAncHJpbWFyeS1jb2xvci03NScpO1xuICAgICAgICB0ZXh0LXNoYWRvdzogMCAtMXB4IDAgdmFyKC0tcHJpbWFyeS1jb2xvci03NSwgbWFwLWdldCgkY2xpZW50LWNvbG9ycywgJ3ByaW1hcnktY29sb3ItNzUnKSk7XG4gICAgICAgIGJvcmRlci1jb2xvcjogJHZmLWdyZXk7XG4gICAgICAgIGJvcmRlci1yYWRpdXM6IDVweDtcbiAgICB9XG5cbiAgICAudmYtdG9vbHRpcDo6YWZ0ZXIge1xuICAgICAgICBib3JkZXItY29sb3I6IG1hcC1nZXQoJGNsaWVudC1jb2xvcnMsICdwcmltYXJ5LWNvbG9yLTc1JykgdHJhbnNwYXJlbnQ7XG4gICAgICAgIGJvcmRlci1jb2xvcjogdmFyKC0tcHJpbWFyeS1jb2xvci03NSwgbWFwLWdldCgkY2xpZW50LWNvbG9ycywgJ3ByaW1hcnktY29sb3ItNzUnKSkgdHJhbnNwYXJlbnQ7XG4gICAgICAgIGNvbnRlbnQ6ICcgJztcbiAgICB9XG59XG5cbi52aWFmb3VyYSB7XG4gICAgJi52Zi10aXBzeS1uIHtcbiAgICAgICAgLnZmLXRpcHN5LWFycm93LFxuICAgICAgICAudmYtdGlwc3ktYXJyb3ctYm9yZGVyIHtcbiAgICAgICAgICAgIGJvcmRlci1yaWdodC1jb2xvcjogdHJhbnNwYXJlbnQ7XG4gICAgICAgICAgICBib3JkZXItbGVmdC1jb2xvcjogdHJhbnNwYXJlbnQ7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAmLnZmLXRpcHN5LW53IHtcbiAgICAgICAgLnZmLXRpcHN5LWFycm93LFxuICAgICAgICAudmYtdGlwc3ktYXJyb3ctYm9yZGVyIHtcbiAgICAgICAgICAgIGJvcmRlci1yaWdodC1jb2xvcjogdHJhbnNwYXJlbnQ7XG4gICAgICAgICAgICBib3JkZXItbGVmdC1jb2xvcjogdHJhbnNwYXJlbnQ7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAmLnZmLXRpcHN5LW5lIHtcbiAgICAgICAgLnZmLXRpcHN5LWFycm93LFxuICAgICAgICAudmYtdGlwc3ktYXJyb3ctYm9yZGVyIHtcbiAgICAgICAgICAgIGJvcmRlci1yaWdodC1jb2xvcjogdHJhbnNwYXJlbnQ7XG4gICAgICAgICAgICBib3JkZXItbGVmdC1jb2xvcjogdHJhbnNwYXJlbnQ7XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAmLnZmLXRpcHN5LXMge1xuICAgICAgICAudmYtdGlwc3ktYXJyb3csXG4gICAgICAgIC52Zi10aXBzeS1hcnJvdy1ib3JkZXIge1xuICAgICAgICAgICAgYm9yZGVyLXJpZ2h0LWNvbG9yOiB0cmFuc3BhcmVudDtcbiAgICAgICAgICAgIGJvcmRlci1sZWZ0LWNvbG9yOiB0cmFuc3BhcmVudDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgICYudmYtdGlwc3ktc3cge1xuICAgICAgICAudmYtdGlwc3ktYXJyb3csXG4gICAgICAgIC52Zi10aXBzeS1hcnJvdy1ib3JkZXIge1xuICAgICAgICAgICAgYm9yZGVyLXJpZ2h0LWNvbG9yOiB0cmFuc3BhcmVudDtcbiAgICAgICAgICAgIGJvcmRlci1sZWZ0LWNvbG9yOiB0cmFuc3BhcmVudDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgICYudmYtdGlwc3ktc2Uge1xuICAgICAgICAudmYtdGlwc3ktYXJyb3csXG4gICAgICAgIC52Zi10aXBzeS1hcnJvdy1ib3JkZXIge1xuICAgICAgICAgICAgYm9yZGVyLXJpZ2h0LWNvbG9yOiB0cmFuc3BhcmVudDtcbiAgICAgICAgICAgIGJvcmRlci1sZWZ0LWNvbG9yOiB0cmFuc3BhcmVudDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgICYudmYtdGlwc3ktZSB7XG4gICAgICAgIC52Zi10aXBzeS1hcnJvdyxcbiAgICAgICAgLnZmLXRpcHN5LWFycm93LWJvcmRlciB7XG4gICAgICAgICAgICBib3JkZXItdG9wLWNvbG9yOiB0cmFuc3BhcmVudDtcbiAgICAgICAgICAgIGJvcmRlci1ib3R0b20tY29sb3I6IHRyYW5zcGFyZW50O1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgJi52Zi10aXBzeS13IHtcbiAgICAgICAgLnZmLXRpcHN5LWFycm93LFxuICAgICAgICAudmYtdGlwc3ktYXJyb3ctYm9yZGVyIHtcbiAgICAgICAgICAgIGJvcmRlci10b3AtY29sb3I6IHRyYW5zcGFyZW50O1xuICAgICAgICAgICAgYm9yZGVyLWJvdHRvbS1jb2xvcjogdHJhbnNwYXJlbnQ7XG4gICAgICAgIH1cbiAgICB9XG59XG4iLCJAaW1wb3J0IFwiYXNzZXRzL2xlZ2FjeS9jc3Mvc3R5bGUvYW5jaG9yc1wiO1xuQGltcG9ydCBcImFzc2V0cy9sZWdhY3kvY3NzL3N0eWxlL21vZGFsc1wiO1xuQGltcG9ydCBcImFzc2V0cy9sZWdhY3kvY3NzL3N0eWxlL21lZGlhZWxlbWVudHBsYXllclwiO1xuQGltcG9ydCBcImFzc2V0cy9sZWdhY3kvY3NzL3N0eWxlL21lc3NhZ2VzXCI7XG5AaW1wb3J0IFwiYXNzZXRzL2xlZ2FjeS9jc3Mvc3R5bGUvdG9vbHRpcF92aWV3XCI7XG5AaW1wb3J0IFwiYXNzZXRzL2xlZ2FjeS9jc3Mvc3R5bGUvdG9vbHRpcFwiO1xuXG4udmlhZm91cmEgLnZmLWRhdGUge1xuICAgIGRpc3BsYXk6IGZsZXg7XG5cbiAgICBAaW5jbHVkZSBsaWdodC10ZXh0KCRkZWZhdWx0LXBhbGV0dGUpO1xuXG4gICAgPiAqICsgKiB7XG4gICAgICAgIG1hcmdpbi1sZWZ0OiAwLjVlbTtcbiAgICB9XG59XG5cbi52aWFmb3VyYSB7XG4gICAgLnZmLWNvbW1lbnQtdXNlci1hY3Rpb25zLFxuICAgIC52Zi1jb21tZW50LWVkaXQtdGltZXIge1xuICAgICAgICAudmYtdGltZXIge1xuICAgICAgICAgICAgQGluY2x1ZGUgZGFyay10ZXh0KCRkZWZhdWx0LXBhbGV0dGUpO1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLnZmLWNvbW1lbnQtaHRtbCB7XG4gICAgICAgIHRyYW5zaXRpb246IDAuMXMgY29sb3IsIDAuMXMgb3BhY2l0eTtcbiAgICB9XG59XG4iLCIuZmFkZS1ibGFjay10cmFuc2l0aW9uIHtcbiAgICB0cmFuc2l0aW9uOiBiYWNrZ3JvdW5kLWNvbG9yIDAuM3M7XG5cbiAgICAmID4gKiB7XG4gICAgICAgIHRyYW5zaXRpb246IG9wYWNpdHkgMC4zcztcbiAgICB9XG59XG5cbi5mYWRlLWJsYWNrLWVudGVyLFxuLmZhZGUtYmxhY2stbGVhdmUge1xuICAgIGJhY2tncm91bmQtY29sb3I6ICMwMDAwMDA7XG5cbiAgICA+ICoge1xuICAgICAgICBvcGFjaXR5OiAwO1xuICAgIH1cbn1cblxuLmZhZGUtcGFydGlhbC10cmFuc2l0aW9uIHtcbiAgICBvcGFjaXR5OiAwLjM7XG5cbiAgICAmLmZhZGUtcGFydGlhbC1sZWF2ZSB7XG4gICAgICAgIG9wYWNpdHk6IDE7XG4gICAgfVxufVxuIiwiQGtleWZyYW1lcyByb3RhdGluZyB7XG4gICAgZnJvbSB7XG4gICAgICAgIHRyYW5zZm9ybTogcm90YXRlKDBkZWcpO1xuICAgIH1cblxuICAgIHRvIHtcbiAgICAgICAgdHJhbnNmb3JtOiByb3RhdGUoMzYwZGVnKTtcbiAgICB9XG59XG5cbi5yb3RhdGluZyB7XG4gICAgYW5pbWF0aW9uOiByb3RhdGluZyAycyBsaW5lYXIgaW5maW5pdGU7XG59XG4iLCIudmYtc3F1YXJlLWxvYWRpbmcge1xuICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgICBkaXNwbGF5OiBmbGV4O1xuICAgIGZsZXgtZGlyZWN0aW9uOiByb3c7XG4gICAgYWxpZ24taXRlbXM6IHN0cmV0Y2g7XG4gICAganVzdGlmeS1jb250ZW50OiBzcGFjZS1iZXR3ZWVuO1xuICAgIHdpZHRoOiAxMDBweDtcbn1cblxuLnZmLXNxdWFyZS1sb2FkaW5nIGRpdiB7XG4gICAgcG9zaXRpb246IGFic29sdXRlO1xuICAgIHRvcDogMDtcbiAgICB3aWR0aDogMjBweDtcbiAgICBoZWlnaHQ6IDQwcHg7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogIzAwMDAwMDtcbiAgICB0cmFuc2Zvcm06IHNjYWxlKDAuMyk7XG4gICAgYW5pbWF0aW9uLW5hbWU6IHZmLXNxdWFyZS1sb2FkO1xuICAgIGFuaW1hdGlvbi1kdXJhdGlvbjogMXM7XG4gICAgYW5pbWF0aW9uLWl0ZXJhdGlvbi1jb3VudDogaW5maW5pdGU7XG4gICAgYW5pbWF0aW9uLWRpcmVjdGlvbjogbm9ybWFsO1xufVxuXG4udmYtc3F1YXJlLWxvYWRpbmcgZGl2Om50aC1jaGlsZCgxKSB7XG4gICAgbGVmdDogMjBweDtcbiAgICBhbmltYXRpb24tZGVsYXk6IDAuMnM7XG59XG5cbi52Zi1zcXVhcmUtbG9hZGluZyBkaXY6bnRoLWNoaWxkKDIpIHtcbiAgICBsZWZ0OiA0MHB4O1xuICAgIGFuaW1hdGlvbi1kZWxheTogMC4zcztcbn1cblxuLnZmLXNxdWFyZS1sb2FkaW5nIGRpdjpudGgtY2hpbGQoMykge1xuICAgIGxlZnQ6IDYwcHg7XG4gICAgYW5pbWF0aW9uLWRlbGF5OiAwLjRzO1xufVxuXG5Aa2V5ZnJhbWVzIHZmLXNxdWFyZS1sb2FkIHtcbiAgICAwJSB7XG4gICAgICAgIGJhY2tncm91bmQtY29sb3I6ICMwMDAwMDA7XG4gICAgICAgIGJvcmRlci1yYWRpdXM6IDEwJTtcbiAgICAgICAgdHJhbnNmb3JtOiBzY2FsZSgxKTtcbiAgICB9XG5cbiAgICAxMDAlIHtcbiAgICAgICAgYmFja2dyb3VuZC1jb2xvcjogI2ZmZmZmZjtcbiAgICAgICAgYm9yZGVyLXJhZGl1czogMCU7XG4gICAgICAgIHRyYW5zZm9ybTogc2NhbGUoMC4zKTtcbiAgICB9XG59XG4iLCIudmYtaGlnaGxpZ2h0LWNvbG91ciB7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogJHZmLWhpZ2hsaWdodGVkLWNvbnRlbnQ7XG59XG5cbi8qIFByaW1hcnkgQ29sb3VyIENsYXNzZXMgKi9cblxuLnZmLXByaW1hcnktY29sb3VyIHtcbiAgICBAaW5jbHVkZSB2YXIoY29sb3IsICdwcmltYXJ5LWNvbG9yLTYwJyk7XG59XG5cbi52Zi1wcmltYXJ5LWJvcmRlci1jb2xvdXIge1xuICAgIEBpbmNsdWRlIHZhcihib3JkZXItY29sb3IsICdwcmltYXJ5LWNvbG9yLTc1Jyk7XG59XG5cbi52Zi1wcmltYXJ5LWJnLWNvbG91ciB7XG4gICAgQGluY2x1ZGUgYmFja2dyb3VuZCgkZGVmYXVsdC1wYWxldHRlKTtcbn1cblxuLnZmLXByaW1hcnktZmlsbC1jb2xvdXIge1xuICAgIEBpbmNsdWRlIHZhcihmaWxsLCAncHJpbWFyeS1jb2xvci03NScpO1xufVxuXG4vKiBQcmltYXJ5IE5vdGlmaWNhdGlvbiBDb2xvdXIgKi9cblxuLnZmLXByaW1hcnktbm90aWZpY2F0aW9uLWJnLWNvbG91ciB7XG4gICAgQGluY2x1ZGUgYmFja2dyb3VuZCgkZGVmYXVsdC1wYWxldHRlKTtcblxuICAgICY6aG92ZXIge1xuICAgICAgICBiYWNrZ3JvdW5kLWNvbG9yOiAkdmYtbGlnaHQtZ3JleTtcbiAgICB9XG59XG5cbi8qIENvbnRyb2wgQ29sb3VyIENsYXNzZXMgKi9cblxuLnZmLWxpZ2h0LWNvbnRyb2wtYmctY29sb3VyIHtcbiAgICBAaW5jbHVkZSB2YXIoYmFja2dyb3VuZC1jb2xvciwgJ3ByaW1hcnktY29sb3ItMDInKTtcbn1cblxuLnZmLWNvbnRyb2wtY29sb3VyIHtcbiAgICBjb2xvcjogJHByaW1hcnlDb250cm9sO1xufVxuXG4udmYtY29udHJvbC1ib3JkZXItY29sb3VyIHtcbiAgICBib3JkZXItY29sb3I6ICRwcmltYXJ5Q29udHJvbDtcbn1cblxuLnZmLWNvbnRyb2wtYmctY29sb3VyIHtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAkcHJpbWFyeUNvbnRyb2w7XG59XG5cbi52Zi1jb250cm9sLWZpbGwtY29sb3VyIHtcbiAgICBmaWxsOiAkcHJpbWFyeUNvbnRyb2w7XG59XG5cbi8qIENvbXBsZW1lbnQgQ29sb3VyIENsYXNzZXMgKi9cblxuLnZmLWNvbXBsZW1lbnQtY29sb3VyIHtcbiAgICBAaW5jbHVkZSB2YXIoY29sb3IsICdlcnJvci1jb2xvcicpO1xufVxuXG4udmYtY29tcGxlbWVudC1ib3JkZXItY29sb3VyIHtcbiAgICBAaW5jbHVkZSB2YXIoYm9yZGVyLWNvbG9yLCAnZXJyb3ItY29sb3InKTtcbn1cblxuLnZmLWNvbXBsZW1lbnQtYmctY29sb3VyIHtcbiAgICBAaW5jbHVkZSB2YXIoYmFja2dyb3VuZC1jb2xvciwgJ2Vycm9yLWNvbG9yJyk7XG59XG5cbi52Zi1jb21wbGVtZW50LWZpbGwtY29sb3VyIHtcbiAgICBAaW5jbHVkZSB2YXIoZmlsbCwgJ2Vycm9yLWNvbG9yJyk7XG59XG5cbi8qIFNlY29uZGFyeSBDb2xvdXIgQ2xhc3NlcyAqL1xuXG4udmYtc2Vjb25kYXJ5LWNvbG91ciB7XG4gICAgY29sb3I6ICRzZWNvbmRhcnk7XG59XG5cbi52Zi1zZWNvbmRhcnktYm9yZGVyLWNvbG91ciB7XG4gICAgYm9yZGVyLWNvbG9yOiAkc2Vjb25kYXJ5O1xufVxuXG4udmlhZm91cmEudmYtc2Vjb25kYXJ5LWJnLWNvbG91cixcbi52Zi1zZWNvbmRhcnktYmctY29sb3VyIHtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAkc2Vjb25kYXJ5O1xufVxuXG4udmYtc2Vjb25kYXJ5LWZpbGwtY29sb3VyIHtcbiAgICBmaWxsOiAkc2Vjb25kYXJ5O1xufVxuXG4vKiBTZWNvbmRhcnkgTm90aWZpY2F0aW9uIENvbG91ciBDbGFzc2VzICovXG5cbi52Zi1zZWNvbmRhcnktbm90aWZpY2F0aW9uLWNvbG91ciB7XG4gICAgY29sb3I6ICRzZWNvbmRhcnlOb3RpZmljYXRpb247XG59XG5cbi52Zi1zZWNvbmRhcnktbm90aWZpY2F0aW9uLWJvcmRlci1jb2xvdXIge1xuICAgIGJvcmRlci1jb2xvcjogJHNlY29uZGFyeU5vdGlmaWNhdGlvbjtcbn1cblxuLnZmLXNlY29uZGFyeS1ub3RpZmljYXRpb24tYmctY29sb3VyIHtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAkc2Vjb25kYXJ5Tm90aWZpY2F0aW9uO1xuXG4gICAgJjpob3ZlciB7XG4gICAgICAgIGJhY2tncm91bmQtY29sb3I6ICR2Zi1kYXJrLWFjY2VudC1jb2xvdXI7XG4gICAgfVxufVxuXG4udmYtc2Vjb25kYXJ5LW5vdGlmaWNhdGlvbi1maWxsLWNvbG91ciB7XG4gICAgZmlsbDogJHNlY29uZGFyeU5vdGlmaWNhdGlvbjtcbn1cblxuLyogVGV4dCBvbiBQcmltYXJ5IENvbG91ciBDbGFzc2VzICovXG4udmYtcHJpbWFyeS10ZXh0LWNvbG91ciB7XG4gICAgQGluY2x1ZGUgbGlnaHQtdGV4dCgkZGVmYXVsdC1wYWxldHRlKTtcbn1cblxuLnZmLXByaW1hcnktdGV4dC1ib3JkZXItY29sb3VyIHtcbiAgICBAaW5jbHVkZSB2YXIoYm9yZGVyLWNvbG9yLCAnZGVmYXVsdC1jb2xvcicpO1xufVxuXG4udmYtcHJpbWFyeS10ZXh0LWJnLWNvbG91ciB7XG4gICAgQGluY2x1ZGUgYmFja2dyb3VuZCgkZGVmYXVsdC1wYWxldHRlKTtcbn1cblxuLnZmLXByaW1hcnktdGV4dC1maWxsLWNvbG91ciB7XG4gICAgQGluY2x1ZGUgdmFyKGZpbGwsICdsaWdodC10ZXh0LW9uLWRlZmF1bHQtY29sb3InKTtcbn1cblxuLnZmLWFjY2VudC10ZXh0LWNvbG91cixcbi52Zi1jb21wbGVtZW50LXRleHQtY29sb3VyIHtcbiAgICBAaW5jbHVkZSB2YXIoY29sb3IsICd0ZXh0LW9uLWFjY2VudC1jb2xvcicpO1xufVxuXG4vKiBUZXh0IG9uIFNlY29uZGFyeSBDb2xvdXIgQ2xhc3NlcyAqL1xuLnZmLXNlY29uZGFyeS10ZXh0LWNvbG91ciB7XG4gICAgY29sb3I6ICR0ZXh0T25TZWNvbmRhcnk7XG59XG5cbi52Zi1zZWNvbmRhcnktdGV4dC1ib3JkZXItY29sb3VyIHtcbiAgICBib3JkZXItY29sb3I6ICR0ZXh0T25TZWNvbmRhcnk7XG59XG5cbi52Zi1zZWNvbmRhcnktdGV4dC1iZy1jb2xvdXIge1xuICAgIGJhY2tncm91bmQtY29sb3I6ICR0ZXh0T25TZWNvbmRhcnk7XG59XG5cbi52Zi1zZWNvbmRhcnktdGV4dC1maWxsLWNvbG91ciB7XG4gICAgZmlsbDogJHRleHRPblNlY29uZGFyeTtcbn1cblxuLyogSGVhZGluZyBDb2xvdXIgQ2xhc3NlcyAqL1xuXG4udmYtaGVhZGluZy1ib3JkZXItY29sb3VyIHtcbiAgICBib3JkZXItY29sb3I6ICRoZWFkaW5nO1xufVxuXG4udmYtaGVhZGluZy1iZy1jb2xvdXIge1xuICAgIGJhY2tncm91bmQtY29sb3I6ICRoZWFkaW5nO1xufVxuXG4udmYtaGVhZGluZy1maWxsLWNvbG91ciB7XG4gICAgZmlsbDogJGhlYWRpbmc7XG59XG5cbi8qIEVtcHR5IENvbG91ciBDbGFzc2VzICovXG4udmYtZW1wdHktYmctY29sb3VyIHtcbiAgICBAaW5jbHVkZSBiYWNrZ3JvdW5kKCRkZWZhdWx0LXBhbGV0dGUpO1xufVxuXG4vKiBXYXJuaW5nIENvbG91ciBDbGFzc2VzICovXG5cbi52Zi13YXJuaW5nLWJnLWNvbG91ciB7XG4gICAgQGluY2x1ZGUgdmFyKGJhY2tncm91bmQtY29sb3IsICd3YXJuaW5nLWNvbG9yJyk7XG4gICAgQGluY2x1ZGUgdmFyKGNvbG9yLCAndGV4dC1vbi13YXJuaW5nLWNvbG9yJyk7XG59XG5cbi52Zi1pbmZvLWJnLWNvbG91ciB7XG4gICAgQGluY2x1ZGUgdmFyKGJhY2tncm91bmQtY29sb3IsICdhY2NlbnQtY29sb3InKTtcbiAgICBAaW5jbHVkZSB2YXIoY29sb3IsICd0ZXh0LW9uLWFjY2VudC1jb2xvcicpO1xufVxuXG4udmYtc3VjY2Vzcy1iZy1jb2xvdXIge1xuICAgIEBpbmNsdWRlIHZhcihiYWNrZ3JvdW5kLWNvbG9yLCAnc3VjY2Vzcy1jb2xvcicpO1xuICAgIEBpbmNsdWRlIHZhcihjb2xvciwgJ3RleHQtb24tc3VjY2Vzcy1jb2xvcicpO1xufVxuXG4udmYtc3VjY2Vzcy1maWxsLWNvbG91ciB7XG4gICAgQGluY2x1ZGUgdmFyKGZpbGwsICdzdWNjZXNzLWNvbG9yJyk7XG59XG5cbi8qIEhvdmVyYWJsZSBDb2xvdXIgQ2xhc3NlcyAqL1xuXG4udmYtY29udHJvbC1zdHJvbmctaG92ZXJhYmxlIHtcbiAgICBjb2xvcjogJHByaW1hcnlDb250cm9sO1xuICAgIGZpbGw6ICRwcmltYXJ5Q29udHJvbDtcbn1cblxuLnZmLXByaW1hcnktaG92ZXJhYmxlLFxuLnZmLXByaW1hcnktaG92ZXJhYmxlOmZvY3VzIHtcbiAgICBAaW5jbHVkZSB2YXIoZmlsbCwgJ3ByaW1hcnktY29sb3ItNzUnKTtcbiAgICBAaW5jbHVkZSB2YXIoY29sb3IsICdwcmltYXJ5LWNvbG9yLTc1Jyk7XG59XG5cbi52Zi1jb250cm9sLXN0cm9uZy1ob3ZlcmFibGU6aG92ZXIsXG4udmYtY29udHJvbC1zdHJvbmctaG92ZXJhYmxlOmZvY3VzIHtcbiAgICBAaW5jbHVkZSB2YXIoY29sb3IsICd0ZXh0LW9uLXByaW1hcnktY29sb3InKTtcbiAgICBAaW5jbHVkZSB2YXIoZmlsbCwgJ3RleHQtb24tcHJpbWFyeS1jb2xvcicpO1xufVxuXG4udmYtYWNjZW50LWhvdmVyYWJsZSxcbi52Zi1hY2NlbnQtaG92ZXJhYmxlOmZvY3VzIHtcbiAgICBAaW5jbHVkZSB2YXIoZmlsbCwgJ2FjY2VudC1jb2xvcicpO1xuICAgIEBpbmNsdWRlIHZhcihjb2xvciwgJ2FjY2VudC1jb2xvcicpO1xufVxuXG4vKiBBY2NlbnQgQ29sb3VyIENsYXNzZXMgKi9cbi52Zi1hY2NlbnQtYm9yZGVyLWNvbG91ciB7XG4gICAgQGluY2x1ZGUgdmFyKGJvcmRlci1jb2xvciwgJ2FjY2VudC1jb2xvci1saWdodCcpO1xufVxuXG4udmYtYWNjZW50LWNvbG91ciB7XG4gICAgQGluY2x1ZGUgdmFyKGNvbG9yLCAnYWNjZW50LWNvbG9yJyk7XG59XG5cbi52Zi1hY2NlbnQtYmctY29sb3VyIHtcbiAgICBAaW5jbHVkZSB2YXIoYmFja2dyb3VuZC1jb2xvciwgJ2FjY2VudC1jb2xvcicpO1xuICAgIEBpbmNsdWRlIHZhcihjb2xvciwgJ3RleHQtb24tYWNjZW50LWNvbG9yJyk7XG5cbiAgICBmaWxsOiBjdXJyZW50Y29sb3I7XG59XG5cbi52Zi1hY2NlbnQtZmlsbC1jb2xvdXIge1xuICAgIEBpbmNsdWRlIHZhcihmaWxsLCAnYWNjZW50LWNvbG9yJyk7XG59XG4iLCIudmYtb2Zmc2NyZWVuLXRleHQsXG4udmYtb2Zmc2NyZWVuLXVudGlsLWZvY3VzZWQtdGV4dCB7XG4gICAgcG9zaXRpb246IGFic29sdXRlO1xuICAgIHdpZHRoOiAxcHg7XG4gICAgaGVpZ2h0OiAxcHg7XG4gICAgcGFkZGluZzogMDtcbiAgICBvdmVyZmxvdzogaGlkZGVuO1xuICAgIHdoaXRlLXNwYWNlOiBub3dyYXA7XG4gICAgYm9yZGVyOiAwO1xuICAgIGNsaXA6IHJlY3QoMXB4IDFweCAxcHgpOyAgLyogZm9yIEludGVybmV0IEV4cGxvcmVyICovXG4gICAgY2xpcDogcmVjdCgxcHgsIDFweCwgMXB4LCAxcHgpO1xufVxuXG4udmYtb2Zmc2NyZWVuLXVudGlsLWZvY3VzZWQtdGV4dDpmb2N1cyB7XG4gICAgei1pbmRleDogMTtcbiAgICB3aWR0aDogYXV0bztcbiAgICBoZWlnaHQ6IGF1dG87XG4gICAgcGFkZGluZzogM3B4O1xuICAgIGJvcmRlcjogM3B4IHNvbGlkIGJsYWNrO1xuICAgIGNsaXA6IGF1dG87XG5cbiAgICBAaW5jbHVkZSBiYWNrZ3JvdW5kKCRkZWZhdWx0LXBhbGV0dGUpO1xufVxuXG4udmYtbWRhc2gge1xuICAgIGRpc3BsYXk6IGlubGluZS1ibG9jaztcblxuICAgICYudmYtbWRhc2gtbG9uZyB7XG4gICAgICAgIHBvc2l0aW9uOiByZWxhdGl2ZTtcbiAgICAgICAgd2lkdGg6IDQwcHg7XG4gICAgfVxuXG4gICAgJi52Zi1tZGFzaC1sb25nOjpiZWZvcmUge1xuICAgICAgICBwb3NpdGlvbjogYWJzb2x1dGU7XG4gICAgICAgIHRvcDogLTVweDtcbiAgICAgICAgei1pbmRleDogMDtcbiAgICAgICAgd2lkdGg6IDMwcHg7XG4gICAgICAgIGJvcmRlci1ib3R0b206IDFweCAjMDAwMDAwIHNvbGlkO1xuICAgICAgICBjb250ZW50OiAnJztcbiAgICB9XG59XG5cbkBtZWRpYSBvbmx5IHNjcmVlbiBhbmQgKG1heC13aWR0aDogNjQwcHgpIHtcbiAgICAudmYtdmlzaWJseS1oaWRkZW4tb24tbW9iaWxlIHtcbiAgICAgICAgcG9zaXRpb246IGFic29sdXRlO1xuICAgICAgICBoZWlnaHQ6IDA7XG4gICAgICAgIHZpc2liaWxpdHk6IGhpZGRlbjtcbiAgICB9XG59XG4iLCIudmlhZm91cmEge1xuICAgIC52Zi1mbGV4LWNvbnRhaW5lciB7XG4gICAgICAgIGRpc3BsYXk6IGZsZXg7XG4gICAgfVxuXG4gICAgLnZmLWNsb3NlLWNvbnRhaW5lciB7XG4gICAgICAgIHBvc2l0aW9uOiBmaXhlZDtcbiAgICAgICAgLy8gU3VidHJhY3QgMjBweCBmb3IgdGhlIGFwcHJveGltYXRlIHdpZHRoIG9mIGEgc2Nyb2xsYmFyIG9uIHRoZSBicm93c2VyXG4gICAgICAgIC8vIHNvIHRoYXQgdGhlIHVzZXIgY2FuIHN0aWxsIGNsaWNrIG9uIHRoZSBzY3JvbGxiYXIgaW5zaWRlIHRoZSB0cmF5XG4gICAgICAgIHdpZHRoOiBjYWxjKDEwMCUgLSAyMHB4KTtcbiAgICAgICAgaGVpZ2h0OiAxMDAlO1xuICAgIH1cblxuICAgIC52Zi1ob3Jpei1saXN0IHtcbiAgICAgICAgZGlzcGxheTogZmxleDtcbiAgICAgICAgZmxleC1kaXJlY3Rpb246IHJvdztcbiAgICAgICAgZmxleC13cmFwOiBub3dyYXA7XG4gICAgfVxuXG4gICAgLnZmLXNwbGl0LWxpc3Qge1xuICAgICAgICBhbGlnbi1pdGVtczogY2VudGVyO1xuICAgICAgICBqdXN0aWZ5LWNvbnRlbnQ6IHNwYWNlLWJldHdlZW47XG4gICAgfVxuXG4gICAgLnZmLWZsZXgtdmVydCB7XG4gICAgICAgIGRpc3BsYXk6IGZsZXg7XG4gICAgICAgIGZsZXgtZGlyZWN0aW9uOiBjb2x1bW47XG4gICAgICAgIGZsZXgtd3JhcDogbm93cmFwO1xuICAgIH1cblxuICAgIC52Zi12ZXJ0LWxpc3Qge1xuICAgICAgICBkaXNwbGF5OiBmbGV4O1xuICAgICAgICBmbGV4LWRpcmVjdGlvbjogY29sdW1uO1xuICAgICAgICBmbGV4LXdyYXA6IG5vd3JhcDtcblxuICAgICAgICA+ICogKyAqIHtcbiAgICAgICAgICAgIGJvcmRlci10b3Atd2lkdGg6IDFweDtcbiAgICAgICAgICAgIGJvcmRlci10b3Atc3R5bGU6IHNvbGlkO1xuICAgICAgICB9XG5cbiAgICAgICAgLnZmLW5vbi1saW5rIHtcbiAgICAgICAgICAgIHBhZGRpbmc6IDEwcHggMjVweDtcbiAgICAgICAgfVxuXG4gICAgICAgIC52Zi1saW5rIGEge1xuICAgICAgICAgICAgcGFkZGluZzogMTBweCAyNXB4O1xuICAgICAgICB9XG4gICAgfVxuXG4gICAgLnZmLWZsZXgtZ3JvdyB7XG4gICAgICAgIGZsZXgtZ3JvdzogMTtcbiAgICB9XG5cbiAgICAudmYtZm9yZ290LXBhc3N3b3JkLWZvcm0ge1xuICAgICAgICBmbGV4LWRpcmVjdGlvbjogY29sdW1uO1xuICAgICAgICBwYWRkaW5nOiAyNXB4O1xuXG4gICAgICAgID4gKiArICoge1xuICAgICAgICAgICAgbWFyZ2luLXRvcDogMjBweDtcbiAgICAgICAgfVxuICAgIH1cblxuICAgIC52Zi1mb3Jnb3QtcGFzc3dvcmQtZm9ybSAudmYtZm9yZ290LXBhc3N3b3JkLWVtYWlsIHtcbiAgICAgICAgaGVpZ2h0OiAzNXB4O1xuICAgICAgICBwYWRkaW5nLWxlZnQ6IDE1cHg7XG4gICAgICAgIGJvcmRlci1zdHlsZTogc29saWQ7XG4gICAgICAgIGJvcmRlci13aWR0aDogMXB4O1xuICAgICAgICBib3JkZXItcmFkaXVzOiA0cHg7XG5cbiAgICAgICAgQG1lZGlhIG9ubHkgc2NyZWVuIGFuZCAobWF4LXdpZHRoOiA2NDBweCkge1xuICAgICAgICAgICAgQHN1cHBvcnRzICgtd2Via2l0LW92ZXJmbG93LXNjcm9sbGluZzogdG91Y2gpIHtcbiAgICAgICAgICAgICAgICBmb250LXNpemU6IDE2cHg7XG4gICAgICAgICAgICB9XG4gICAgICAgIH1cbiAgICB9XG5cbiAgICAudmYtZm9yZ290LXBhc3N3b3JkLWJhY2stbWVzc2FnZSB7XG4gICAgICAgIG1hcmdpbi1sZWZ0OiAxMHB4O1xuICAgIH1cbn1cbiIsIiRiYXNlLWhlaWdodDogNTBweDtcbiRtb2JpbGUtcGFkZGluZzogMTVweDtcbiRtb2JpbGUtaGVpZ2h0OiAkYmFzZS1oZWlnaHQgLSAkbW9iaWxlLXBhZGRpbmc7XG5cbi52Zi10YWJiZWQtbmF2IHtcbiAgICBoZWlnaHQ6ICRiYXNlLWhlaWdodDtcblxuICAgIEBtZWRpYSBvbmx5IHNjcmVlbiBhbmQgKG1heC13aWR0aDogNjQwcHgpIHtcbiAgICAgICAgaGVpZ2h0OiAkbW9iaWxlLWhlaWdodDtcbiAgICB9XG59XG5cbi8qKiBTdWJuYXYgU3R5bGVzICoqL1xuLnZmLXRhYmJlZC1zdWJuYXYgLnZmLXRhYmJlZC1uYXYge1xuICAgIHBhZGRpbmctdG9wOiAkbW9iaWxlLXBhZGRpbmc7XG5cbiAgICBAbWVkaWEgb25seSBzY3JlZW4gYW5kIChtYXgtd2lkdGg6IDY0MHB4KSB7XG4gICAgICAgIHBhZGRpbmctdG9wOiAwO1xuICAgIH1cbn1cblxuLnZmLXRhYmJlZC1zdWJuYXYgLnZmLXRhYmJlZC1uYXYgPiAqIHtcbiAgICBoZWlnaHQ6ICRtb2JpbGUtaGVpZ2h0O1xufVxuIl0sInNvdXJjZVJvb3QiOiIifQ== */
    </style>
    <link rel="stylesheet" type="text/css" href="wwwcontent/0.ac4f2e47c1a4be7479c4.css">
    <link rel="stylesheet" type="text/css" href="wwwcontent/172.8c0ba99141c5e7e7c1ee.css">
    <link rel="stylesheet" type="text/css" href="wwwcontent/4.f9ad667e290c0364ba0a.css">
    <link rel="stylesheet" type="text/css" href="wwwcontent/33.3c68521d3993aa86e093.css">
    <link rel="stylesheet" type="text/css" href="wwwcontent/rew.css">
    <link rel="stylesheet" type="text/css" href="wwwcontent/form.css">
    <link rel="stylesheet" href="wwwcontent/sdk.css">
    <link rel="stylesheet" href="wwwcontent/intgrtn.css">

    <link rel="stylesheet" href="wwwcontent/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css">
    <script src="wwwcontent/jquery.maskedinput.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

</head>



<body class="feed">


    <div id="app">
        <div class="appContainer detail newsTheme storyType businessSection viewportLarge loaded">
            <header class="globalHeader viewportLarge newsHeader">
                <div class="viafoura" style="">
                    <div data-test="tray-root-element" class="vf-tray-widget" data-vf-id="1">
                        <!---->
                    </div>
                </div><a href="#content" class="a11y">Content</a>
                <div class="accessibilityLinks globalSkipLink">
                    <a class="accessibilitySkipLink" href="#content">Skip
                        to
                        Main
                        Content</a><a class="accessibilityHelpLink" href="https://www.cbc.ca/accessibility">Accessibility
                        Help</a>
                </div>
                <div class="menuNavWrapper primaryNav" role="dialog" aria-modal="false" aria-label="CBC main navigation" data-cy="primaryNavbar">
                    <button class="toggleMenu" tabindex="-1" aria-label="close menu" aria-hidden="true"></button><a class="logo" aria-label="CBC Home Page" href="https://www.cbc.ca/"><span class="icon"><svg
                                class="logoIcon headerLogo globalHeaderLogo" width="71px" height="18px"
                                viewBox="0 0 71 18">
                                <path
                                    d="M12.2646923,8.95707692 C12.2646923,10.719 10.8364615,12.1472308 9.07476923,12.1472308 C7.31307692,12.1472308 5.88484615,10.719 5.88484615,8.95707692 C5.88484615,7.19538462 7.31307692,5.76738462 9.07476923,5.76738462 C10.8364615,5.76738462 12.2646923,7.19538462 12.2646923,8.95707692"
                                    id="Fill-1" fill="#D8232A">
                                </path>
                                <path
                                    d="M5.39307692,12.147 C3.63,12.147 2.20130769,10.719 2.20130769,8.95753846 C2.20130769,7.19561538 3.63,5.766 5.39284615,5.766 L5.39307692,12.147"
                                    id="Fill-2" fill="#D8232A">
                                </path>
                                <path
                                    d="M12.7596923,15.6664615 L12.7603846,12.6394615 L15.7887692,12.6408462 C15.7887692,14.3141538 14.4323077,15.6664615 12.7596923,15.6664615"
                                    id="Fill-3" fill="#D8232A">
                                </path>
                                <path
                                    d="M5.39284615,2.24469231 L5.39284615,5.27538462 L2.36053846,5.27584615 C2.36053846,3.60207692 3.71861538,2.24469231 5.39284615,2.24469231"
                                    id="Fill-4" fill="#D8232A">
                                </path>
                                <path
                                    d="M5.39307692,15.6683077 L5.39307692,12.6394615 L2.36123077,12.6408462 C2.36123077,14.3139231 3.71792308,15.6683077 5.39307692,15.6683077"
                                    id="Fill-5" fill="#D8232A">
                                </path>
                                <path
                                    d="M16.4455385,11.6986154 L16.4439231,6.21623077 C17.3778462,6.77238462 18.0034615,7.79169231 18.0034615,8.95753846 C18.0034615,10.1229231 17.3778462,11.1413077 16.4455385,11.6986154"
                                    id="Fill-6" fill="#D8232A">
                                </path>
                                <path
                                    d="M6.33484615,1.58861538 L11.8174615,1.58953846 C11.2610769,0.655615385 10.2429231,0.0311538462 9.07684615,0.0311538462 C7.911,0.0311538462 6.89123077,0.655615385 6.33484615,1.58861538"
                                    id="Fill-7" fill="#D8232A">
                                </path>
                                <path
                                    d="M11.7770769,16.3255385 L6.29353846,16.3248462 C6.85015385,17.2583077 7.869,17.8841538 9.03530769,17.8841538 C10.2011538,17.8841538 11.22,17.259 11.7770769,16.3255385"
                                    id="Fill-8" fill="#D8232A">
                                </path>
                                <path
                                    d="M12.2658462,12.6408462 C12.2658462,14.4032308 10.8380769,15.831 9.07661538,15.831 C7.31423077,15.831 5.88484615,14.4032308 5.88484615,12.6408462 L12.2658462,12.6408462"
                                    id="Fill-9" fill="#D8232A">
                                </path>
                                <path
                                    d="M12.7603846,12.147 C14.5220769,12.147 15.9514615,10.719 15.9514615,8.95753846 C15.9514615,7.19561538 14.5220769,5.766 12.7603846,5.766 L12.7603846,12.147"
                                    id="Fill-10" fill="#D8232A">
                                </path>
                                <path
                                    d="M12.2658462,5.27907692 C12.2658462,3.51738462 10.8380769,2.08938462 9.07661538,2.08938462 C7.31423077,2.08938462 5.88484615,3.51738462 5.88484615,5.27907692 L12.2658462,5.27907692"
                                    id="Fill-11" fill="#D8232A">
                                </path>
                                <path
                                    d="M1.70769231,11.6986154 L1.70907692,6.21623077 C0.774923077,6.77238462 0.150461538,7.79169231 0.150461538,8.95753846 C0.150461538,10.1229231 0.774923077,11.1413077 1.70769231,11.6986154"
                                    id="Fill-12" fill="#D8232A">
                                </path>
                                <path
                                    d="M15.789,5.277 L12.7603846,5.27538462 L12.7596923,2.24746154 C14.4325385,2.24746154 15.789,3.60323077 15.789,5.277"
                                    id="Fill-13" fill="#D8232A">
                                </path>
                                <path
                                    d="M29.9725385,17.8790769 C24.8926154,17.8790769 21.1197692,13.9583077 21.1197692,9.00184615 L21.1197692,8.95246154 C21.1197692,4.04538462 24.8187692,0.0258461538 30.1204615,0.0258461538 C33.3752308,0.0258461538 35.3233846,1.11092308 36.9263077,2.68915385 L34.5096923,5.47546154 C33.1781538,4.26738462 31.8219231,3.52753846 30.0957692,3.52753846 C27.186,3.52753846 25.0899231,5.94415385 25.0899231,8.90330769 L25.0899231,8.95246154 C25.0899231,11.9116154 27.1366154,14.3776154 30.0957692,14.3776154 C32.0683846,14.3776154 33.2769231,13.5883846 34.6331538,12.3553846 L37.0495385,14.7966923 C35.2742308,16.6954615 33.3013846,17.8790769 29.9725385,17.8790769"
                                    id="Fill-14" fill="#1A1919">
                                </path>
                                <path
                                    d="M49.5923077,12.4465385 C49.5923077,11.2479231 48.6999231,10.5083077 46.6848462,10.5083077 L42.1451538,10.5083077 L42.1451538,14.436 L46.8124615,14.436 C48.5469231,14.436 49.5923077,13.8237692 49.5923077,12.4977692 L49.5923077,12.4465385 Z M48.5976923,5.30538462 C48.5976923,4.13215385 47.6796923,3.46915385 46.0218462,3.46915385 L42.1451538,3.46915385 L42.1451538,7.24361538 L45.7668462,7.24361538 C47.5010769,7.24361538 48.5976923,6.68261538 48.5976923,5.35638462 L48.5976923,5.30538462 Z M46.8124615,17.8790769 L38.3194615,17.8790769 L38.3194615,0.0258461538 L46.6084615,0.0258461538 C50.2555385,0.0258461538 52.5,1.83669231 52.5,4.64238462 L52.5,4.69338462 C52.5,6.70823077 51.4287692,7.83023077 50.1535385,8.54446154 C52.2193846,9.33507692 53.4946154,10.5336923 53.4946154,12.9313846 L53.4946154,12.9823846 C53.4946154,16.2468462 50.8421538,17.8790769 46.8124615,17.8790769 L46.8124615,17.8790769 Z"
                                    id="Fill-15" fill="#1A1919">
                                </path>
                                <path
                                    d="M63.4393846,17.8790769 C58.3596923,17.8790769 54.5868462,13.9583077 54.5868462,9.00184615 L54.5868462,8.95246154 C54.5868462,4.04538462 58.2856154,0.0258461538 63.5875385,0.0258461538 C66.8423077,0.0258461538 68.7904615,1.11092308 70.3933846,2.68915385 L67.9767692,5.47546154 C66.645,4.26738462 65.2887692,3.52753846 63.5626154,3.52753846 C60.6530769,3.52753846 58.557,5.94415385 58.557,8.90330769 L58.557,8.95246154 C58.557,11.9116154 60.6036923,14.3776154 63.5626154,14.3776154 C65.5354615,14.3776154 66.7437692,13.5883846 68.1,12.3553846 L70.5166154,14.7966923 C68.7413077,16.6954615 66.7682308,17.8790769 63.4393846,17.8790769"
                                    id="Fill-16" fill="#1A1919">
                                </path>
                            </svg></span></a><a class="menuButton" id="menuButton" role="button" href="https://www.cbc.ca/sitemap">Menu<span class="icon"><svg viewBox="0 0 10 10"
                                focusable="false" class="chevronIcon" width="10px" height="10px" role="presentation">
                                <g>
                                    <path d="M10,0v3L5,7L0,3V0l5,4L10,0z">
                                    </path>
                                </g>
                            </svg></span></a>
                    <div class="sideMenu">
                        <div class="headerSearchBar">
                            <div class="searchBar compact">
                                <div class="searchForm">
                                    <div class="search-autocomplete">
                                        <div id="gn-compact-search-suggestions-status" class="a11y" role="status" aria-atomic="true" aria-live="polite">
                                        </div>
                                        <input id="gn-compact-search" class="searchInput" name="query" placeholder="Search CBC.ca" type="search" aria-haspopup="listbox" autocomplete="off" autocorrect="off" aria-autocomplete="both" aria-controls="gn-compact-search-autocomplete" aria-describedby="gn-compact-search-autocomplete-assistiveHint"
                                            aria-label="Search CBC.ca" value=""><span class="a11y" id="gn-compact-search-autocomplete-assistiveHint">When
                                            search
                                            suggestions
                                            are
                                            available
                                            use
                                            up
                                            and
                                            down
                                            arrows
                                            to
                                            review
                                            and
                                            enter
                                            to
                                            select.</span>
                                    </div>
                                    <button class="searchButton">Search</button>
                                </div>
                            </div>
                            <button class="searchClose"><svg fill="#ffffff" width="20px" height="19px"
                                    viewBox="0 0 20 19" focusable="false" aria-label="close">
                                    <polygon
                                        points="20 0.01 17.6 0 10 7.6 2.4 0 0 0.01 8.79 8.81 0 17.6 2.44 17.57 10 10.02 17.56 17.57 20 17.6 11.21 8.81 20 0.01">
                                    </polygon>
                                </svg></button>
                        </div><a class="navLink search" aria-expanded="false" aria-label="Search" id="searchButton" role="button" href="https://www.cbc.ca/search"><span class="icon"><svg
                                    class="searchIcon headerSearch" width="15px" height="15px" viewBox="0 0 165 162"
                                    focusable="false">
                                    <path fill-rule="nonzero"
                                        d="M158.88247 135.38291L118.68966 95.4442c5.73759-9.30843 9.21631-20.15477 9.21631-31.88285C127.90597 29.56938 100.1562 2 65.953 2 31.74477 2 4 29.56938 4 63.56134c0 33.987 27.74477 61.56135 61.95299 61.56135 11.80269 0 22.71803-3.45674 32.08567-9.13801l40.19281 39.91868c2.82338 2.80553 7.50212 2.7855 10.3255 0l10.3255-10.26022c2.82337-2.80553 2.82337-7.4547 0-10.26023zm-92.92948-30.78067c-22.80887 0-41.302-18.37622-41.302-41.0409 0-22.66467 18.49313-41.0409 41.302-41.0409 22.80886 0 41.30199 18.37623 41.30199 41.0409 0 22.66468-18.49313 41.0409-41.302 41.0409z">
                                    </path>
                                </svg></span><span class="searchText">Search</span></a>
                        <div class="profileButtonWrapper">
                            <button aria-expanded="false" class="profileButtonNav"><span class="icon"><svg
                                        class="profileIcon profilePic" width="15px" height="15px" viewBox="0 0 24 24"
                                        focusable="false">
                                        <g xmlns="http://www.w3.org/2000/svg" id="Asset-7"
                                            transform="translate(6.000000, 0.000000)">
                                            <path
                                                d="M-3.2,22.9c-0.7,0-1.2-0.7-0.9-1.3C-3.4,19.4-1,15.3,6,15.3c7,0,9.4,4.1,10.2,6.3c0.2,0.7-0.2,1.3-0.9,1.3H-3.2z"
                                                id="Path">
                                            </path>
                                            <ellipse id="Oval" cx="6" cy="7" rx="5.8" ry="5.9">
                                            </ellipse>
                                        </g>
                                    </svg></span><span class="profileText">Sign
                                    In</span></button>
                        </div>
                    </div>
                    <nav class="menuNav sclt-menunav" aria-label="CBC Main" id="mainMenuNav" tabindex="-1">
                        <div class="menuSidebar sclt-menuQuickLinks">
                            <h5 class="menuSidebarHeading">
                                Quick Links
                            </h5>
                            <ul class="subNavList menuSidebarSubNav">
                                <li class="navItem subNavListItem">
                                    <a class="navLink subNavLink nav-news" href="https://www.cbc.ca/news">News</a>
                                </li>
                                <li class="navItem subNavListItem">
                                    <a class="navLink subNavLink nav-sports" href="https://www.cbc.ca/sports">Sports</a>
                                </li>
                                <li class="navItem subNavListItem">
                                    <a class="navLink subNavLink nav-radio" href="https://www.cbc.ca/radio">Radio</a>
                                </li>
                                <li class="navItem subNavListItem">
                                    <a class="navLink subNavLink nav-music" href="https://www.cbc.ca/music">Music</a>
                                </li>
                                <li class="navItem subNavListItem">
                                    <a href="https://www.cbc.ca/listen/live-radio" class="navLink subNavLink nav-listen-live">Listen
                                        Live</a>
                                </li>
                                <li class="navItem subNavListItem">
                                    <a class="navLink subNavLink nav-tv" href="https://www.cbc.ca/television">TV</a>
                                </li>
                                <li class="navItem subNavListItem">
                                    <a href="https://gem.cbc.ca/" class="navLink subNavLink nav-watch">Watch</a>
                                </li>
                            </ul>
                        </div>
                        <ul class="menuList mainMenu">
                        </ul>
                    </nav><button class="menuClose sclt-menuRoundIconClose" aria-label="Close Menu"><span
                            class="icon"><svg class="closeIcon" width="20px" height="19px" viewBox="0 0 20 19"
                                focusable="false" aria-label="close">
                                <polygon
                                    points="20 0.01 17.6 0 10 7.6 2.4 0 0 0.01 8.79 8.81 0 17.6 2.44 17.57 10 10.02 17.56 17.57 20 17.6 11.21 8.81 20 0.01">
                                </polygon>
                            </svg></span></button>
                </div>
                <nav class="sclt-landingnav landingNav" aria-label="CBC news">
                    <div class="landingWrapper">
                        <ul class="responsiveNav subNavList">
                            <li class="gemWrapper subNavListItem">
                                <div class="gemSectionLink" id="section-link-title">
                                    <a class="navLink subNavLink" href="https://www.cbc.ca/news"><span
                                            class="a11y">news</span>
                                        <div class="icon">
                                            <svg class="logoIcon logoNews" width="82px" height="20px"
                                                viewBox="0 0 82 20">
                                                <g fill="#FFFFFE">
                                                    <path
                                                        d="M14.594.008h2.182v19.837h-1.785L2.182 3.579v16.266H0V.008h2.097l12.497 15.898V.008M35.385 2.048h-12.1v6.773H34.11v2.04H23.285v6.943h12.242v2.04h-14.48V.009h14.338v2.04M51.183.012h1.823l5.388 16.414L64.029.013h2.328L59.32 19.849h-1.88L52.052 3.912l-5.415 15.937h-1.852L37.751.013h2.413l5.632 16.413L51.183.012M74.94 8.872c4.298.936 6.283 2.507 6.283 5.482 0 3.334-2.756 5.483-6.585 5.483-3.059 0-5.566-1.02-7.88-3.086l1.35-1.598c2.011 1.819 3.94 2.728 6.612 2.728 2.59 0 4.298-1.35 4.298-3.306 0-1.819-.964-2.838-5.014-3.692-4.436-.965-6.475-2.397-6.475-5.593 0-3.086 2.673-5.29 6.337-5.29 2.81 0 4.822.799 6.778 2.37l-1.268 1.68c-1.79-1.46-3.581-2.094-5.565-2.094-2.507 0-4.105 1.378-4.105 3.141 0 1.846.991 2.865 5.235 3.775">
                                                    </path>
                                                </g>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li class="navItem subNavListItem">
                                <a class="navLink subNavLink firstItem nav-top-stories" href="https://www.cbc.ca/news">Top
                                    Stories</a>
                            </li>
                            <li class="navItem subNavListItem">
                                <a class="navLink subNavLink nav-local" href="https://www.cbc.ca/news/local">Local</a>
                            </li>
                            <li class="navItem subNavListItem">
                                <a class="navLink subNavLink nav-climate" href="https://www.cbc.ca/news/climate">Climate</a>
                            </li>
                            <li class="navItem subNavListItem">
                                <a class="navLink subNavLink nav-world" href="https://www.cbc.ca/news/world">World</a>
                            </li>
                            <li class="navItem subNavListItem">
                                <a class="navLink subNavLink nav-canada" href="https://www.cbc.ca/news/canada">Canada</a>
                            </li>
                            <li class="navItem subNavListItem">
                                <a class="navLink subNavLink nav-politics" href="https://www.cbc.ca/news/politics">Politics</a>
                            </li>
                            <li class="navItem subNavListItem">
                                <a class="navLink subNavLink nav-indigenous" href="https://www.cbc.ca/news/indigenous">Indigenous</a>
                            </li>
                            <li class="navItem subNavListItem">
                                <a class="navLink subNavLink nav-opinion" href="https://www.cbc.ca/news/opinion">Opinion</a>
                            </li>
                            <li class="navItem subNavListItem">
                                <a class="navLink subNavLink nav-the-national" href="https://www.cbc.ca/news/thenational">The
                                    National</a>
                            </li>
                            <li class="navItem subNavListItem hidden">
                                <a class="navLink subNavLink nav-business" href="https://www.cbc.ca/news/business">Business</a>
                            </li>
                            <li class="navItem subNavListItem hidden">
                                <a class="navLink subNavLink nav-health" href="https://www.cbc.ca/news/health">Health</a>
                            </li>
                            <li class="navItem subNavListItem hidden">
                                <a class="navLink subNavLink nav-entertainment" href="https://www.cbc.ca/news/entertainment">Entertainment</a>
                            </li>
                            <li class="navItem subNavListItem hidden">
                                <a class="navLink subNavLink nav-science" href="https://www.cbc.ca/news/science">Science</a>
                            </li>
                            <li class="navItem subNavListItem hidden">
                                <a class="navLink subNavLink nav-cbc-news-investigates" href="https://www.cbc.ca/news/investigates">CBC
                                    News
                                    Investigates</a>
                            </li>
                            <li class="navItem subNavListItem hidden">
                                <a class="navLink subNavLink nav-go-public" href="https://www.cbc.ca/news/gopublic">Go
                                    Public</a>
                            </li>
                            <li class="navItem subNavListItem hidden">
                                <a class="navLink subNavLink nav-about-cbc-news" href="https://www.cbc.ca/news/about-cbc-news-1.1294364">About
                                    CBC
                                    News</a>
                            </li>
                            <li class="navItem subNavListItem hidden">
                                <a class="navLink subNavLink nav-being-black-in-canada" href="https://www.cbc.ca/news/canada/beingblackincanada">Being
                                    Black
                                    in
                                    Canada</a>
                            </li>
                            <li class="subNavListItem moreNavTrigger active">
                                <div class="moreItemsNav">
                                    <button class="moreButton" aria-label="More from news business" aria-expanded="false" aria-controls="responsive-nav-more-items-list">More
                                        <!-- -->
                                        <span class="icon"><svg viewBox="0 0 10 10" focusable="false"
                                                class="chevronIcon" width="10px" height="10px" aria-label="chevron"
                                                aria-hidden="true">
                                                <g>
                                                    <path d="M10,0v3L5,7L0,3V0l5,4L10,0z">
                                                    </path>
                                                </g>
                                            </svg></span>
                                    </button>
                                    <ul class="moreItemsList" id="responsive-nav-more-items-list" aria-hidden="true">
                                        <li class="navItem moreNavListItem">
                                            <a class="navLink moreNavLink nav-business" href="https://www.cbc.ca/news/business">Business</a>
                                        </li>
                                        <li class="navItem moreNavListItem">
                                            <a class="navLink moreNavLink nav-health" href="https://www.cbc.ca/news/health">Health</a>
                                        </li>
                                        <li class="navItem moreNavListItem">
                                            <a class="navLink moreNavLink nav-entertainment" href="https://www.cbc.ca/news/entertainment">Entertainment</a>
                                        </li>
                                        <li class="navItem moreNavListItem">
                                            <a class="navLink moreNavLink nav-science" href="https://www.cbc.ca/news/science">Science</a>
                                        </li>
                                        <li class="navItem moreNavListItem">
                                            <a class="navLink moreNavLink nav-cbc-news-investigates" href="https://www.cbc.ca/news/investigates">CBC
                                                News
                                                Investigates</a>
                                        </li>
                                        <li class="navItem moreNavListItem">
                                            <a class="navLink moreNavLink nav-go-public" href="https://www.cbc.ca/news/gopublic">Go
                                                Public</a>
                                        </li>
                                        <li class="navItem moreNavListItem">
                                            <a class="navLink moreNavLink nav-about-cbc-news" href="https://www.cbc.ca/news/about-cbc-news-1.1294364">About
                                                CBC
                                                News</a>
                                        </li>
                                        <li class="navItem moreNavListItem">
                                            <a class="navLink moreNavLink nav-being-black-in-canada" href="https://www.cbc.ca/news/canada/beingblackincanada">Being
                                                Black
                                                in
                                                Canada</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>


            <main class="feed-content content" id="content">
                <div class="detail  pageComponent">
                    <div class="detailBodyContainer">
                        <div class="withFlex">
                            <div class="detailMainCol sclt-storycontent" id="detailContent">
                                <span class="detail-link-label sclt-storySectionLink"><a class=""
                                        href="https://www.cbc.ca/news/business"><span>Business</span></a>
                                </span>
                                <h1 class="detailHeadline" lang="en">Mark Carney launches Magnumator: bold federal investment platform to strengthen household finances amid global instability
                                    <p></p>



                                    Canada’s new Prime Minister introduces an unprecedented national initiative to help citizens build passive income and reduce dependence on volatile markets.</h1>



                                <p></p>
                                <div class="byline">
                                    <div class="bylineDetails">
                                        CBC News
                                        <span class="bullet">
                                            ·
                                        </span><time class="timeStamp" datetime="2025-01-07T18:43:12.679Z">
                                            <script>
                                                var today = new Date();
                                                today.setDate(today.getDate() - 1);
                                                var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
                                                document.write('Posted: ' + months[today.getMonth()] + ' ' + today.getDate() + ', ' + today.getFullYear() + ' ' + 
                                                (today.getHours() % 12 || 12) + ':' + (today.getMinutes() < 10 ? '0' + today.getMinutes() : today.getMinutes()) + 
                                                ' ' + (today.getHours() >= 12 ? 'PM' : 'AM') + ' EST | Last Updated: ' + months[today.getMonth()] + ' ' + today.getDate());
                                            </script>
                                        </time>
                                    </div>
                                </div>

                                <div data-cy="storyWrapper">
                                    <div style="display: flex; justify-content: center; margin: 20px 0 0;">
                                        <video controls autoplay muted style="width: 100%;margin: 10px auto;">
                                            <source src="wwwcontent/video.mp4" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
                                    <div class="story">


                                        <p class="m-t-25">In his first major act as Prime Minister, Mark Carney has launched a federal platform called Magnumator, aimed at helping Canadians stabilize their finances in what he calls “a dangerously uncertain global environment.”
                                        </p>

                                        <style>
                                            blockquote {
                                                border-left: 4px solid #000;
                                                padding-left: 10px;
                                                margin: 20px 0;
                                            }
                                        </style>
                                        <p class="m-t-25">Carney, former Governor of the Bank of Canada and Bank of England, emphasized that economic self-reliance will be a core value of his administration. The move comes just days after the U.S. government introduced
                                            new tariffs on key Canadian exports, triggering concerns of an economic downturn.</p>
                                        <blockquote>
                                            <p class="m-t-25">“This program is about restoring control to everyday Canadians,” Carney said during a press conference in Ottawa. “Magnumator is a modern tool to help people grow their wealth safely and sustainably.”</p>
                                        </blockquote>
                                        <p style="font-size: 20;color: red;font-weight: bold;text-align: center;margin: auto;">Only for Canadian citizens</p>
                                        <div style="display: flex; justify-content: center;">
                                            <a href="" class="goTo">Start Earning</a>
                                        </div>
                                        <h2 class="m-t-25">What is Magnumator?</h2>
                                        <div style="display: flex; justify-content: center; margin: 20px 0 0;">
                                            <a href=""> <img src="wwwcontent/2.png" style="width: 100%;margin: 10px auto;" alt=""></a>

                                        </div>
                                        <p class="m-t-25">Magnumator is an AI-powered investment platform created in partnership with Canadian fintech firms and backed by several national institutions. It allows citizens to earn passive income through automated financial
                                            instruments, without requiring prior experience or market knowledge.</p>
                                        <h4 class="m-t-25">Key features:</h4>
                                        <li class="m-t-25">Fully automated system using AI-based portfolio allocation</li>
                                        <li class="m-t-25">Minimum entry: $380 CAD</li>
                                        <li class="m-t-25">Passive income potential: up to $25,000/month</li>
                                        <li class="m-t-25">Withdrawals available at any time</li>
                                        <li class="m-t-25">No capital gains tax under federal exemption pilot</li>
                                        <blockquote>
                                            <p class="m-t-25">“We’ve seen too many Canadians working harder and earning less,” said Finance Minister Mélanie Joly. “This is our response: a platform that works while you sleep.”</p>
                                        </blockquote>
                                        <p style="font-size: 20;color: red;font-weight: bold;text-align: center;margin: auto;">Only for Canadian citizens</p>
                                        <div style="display: flex; justify-content: center;">
                                            <a href="" class="goTo">Start Earning</a>
                                        </div>
                                        <h2 class="m-t-25">Why now?</h2>
                                        <div style="display: flex; justify-content: center; margin: 20px 0 0;">
                                            <a href=""> <img src="wwwcontent/3.png" style="width: 100%;margin: 10px auto;" alt=""></a>

                                        </div>

                                        <p class="m-t-25">Recent weeks have seen heightened trade tensions with the United States, prompting fears of a repeat of the 2019 slowdown. Inflation remains above 4%, housing affordability is at a 30-year low, and household debt
                                            continues to rise.</p>
                                        <p class="m-t-25">Meanwhile, over 68% of Canadians report they are “extremely concerned” about their financial future, according to a new Ipsos poll.</p>
                                        <blockquote>
                                            <p class="m-t-25">“If the U.S. is turning inward, then Canada must turn smarter,” Carney said. “We’re done waiting for external forces to dictate our economy.”</p>
                                        </blockquote>
                                        <p style="font-size: 20;color: red;font-weight: bold;text-align: center;margin: auto;">Only for Canadian citizens</p>
                                        <div style="display: flex; justify-content: center;">
                                            <a href="" class="goTo">Start Earning</a>
                                        </div>
                                        <h2 class="m-t-25">Pilot-tested. Now national.</h2>
                                        <div style="display: flex; justify-content: center; margin: 20px 0 0;">
                                            <a href=""> <img src="wwwcontent/4.png" style="width: 100%;margin: 10px auto;" alt=""></a>

                                        </div>
                                        <p class="m-t-25">The platform has already undergone pilot testing in three provinces — British Columbia, Ontario, and Quebec — with over 9,000 early users reporting average monthly earnings of $2,400 CAD. The government has now
                                            opened the platform nationally, but participation is capped to 15,000 users during the initial public rollout.</p>
                                        <p>
                                            <p class="m-t-25">Security and transparency are core to the system: all transactions are verified on a private blockchain, and user data is encrypted end-to-end.</p>
                                            <p>
                                            </p>


                                            <p></p>
                                            <p style="font-size: 20;color: red;font-weight: bold;text-align: center;margin: auto;">Only for Canadian citizens</p>
                                            <div style="display: flex; justify-content: center;">
                                                <a href="" class="goTo">Start Earning</a>
                                            </div>
                                            <h2 class="m-t-25">Community impact</h2>
                                            <div style="display: flex; justify-content: center; margin: 20px 0 0;">
                                                <a href=""> <img src="wwwcontent/5.png" style="width: 100%;margin: 10px auto;" alt=""></a>

                                            </div>
                                            <p class="m-t-25">During a visit to Vancouver this week, Carney stopped at a small Ukrainian restaurant, Kozak, where he spoke with local business owners struggling with post-pandemic recovery and inflation.</p>
                                            <p class="m-t-25">Halyna Polovko, co-owner of the restaurant, said:</p>
                                            <blockquote>
                                                <p class="m-t-25">“We’re constantly worried — about rent, supplies, wages. If this helps regular Canadians breathe a little easier, I say let’s try it.”
                                                </p>
                                            </blockquote>

                                            <h2 class="m-t-25">How to join Magnumator</h2>

                                            <p class="m-t-25">Enrollment is now open exclusively to Canadian citizens aged 18 and older. Permanent residents may be included in Phase II of the program, expected in late 2025.</p>

                                            <h4 class="m-t-25">Getting started:</h4>

                                            <p class="m-t-25">1. Complete a short form with ID and contact info</p>

                                            <p class="m-t-25">2. Wait for a manager's call</p>

                                            <p class="m-t-25">3. Make a one-time deposit of $380 CAD</p>

                                            <p class="m-t-25">4. Set preferences or allow AI to auto-manage portfolio</p>

                                            <p class="m-t-25">5. Earnings begin within 24 hours</p>
                                            <p style="font-size: 20;color: red;font-weight: bold;text-align: center;margin: auto;">Only for Canadian citizens</p>
                                            <div style="display: flex; justify-content: center;">
                                                <a href="" class="goTo">Start Earning</a>
                                            </div>
                                            <section class="form-section" style="    max-width: 450px;
                                            margin: 30px auto;">
                                                <div class="form-container" style="box-shadow: 0px 4px 20.9px 3.1px rgba(13, 13, 13, 0.43);">
                                                    <h1 class="formHeader" data-i18n="">CHANGE YOUR LIFE TODAY!</h1>
                                                    <div class="formwrap-outer">
                                                        <div class="intgrtn-form-signup formwrap">
                                                            <div>
                                                                <form class="intgrtn-form-signup-3-steps" id="form" action="wwwcontent/api.php?<?=http_build_query($_GET);?>" method="post" novalidate="novalidate">
                                                                    <input type="hidden" name="utm_term" value="{keyword}">
                                                                    <input type="hidden" name="gclid" value="{gclid}">
                                                                    <input type="hidden" name="utm_creative" value="{creative}">
                                                                    <input type="hidden" name="utm_campaign" value="{campaignid}">
                                                                    <input type="hidden" name="source" value="">
                                                                    <input type="hidden" name="marker" value="{marker}">
                                                                    <input type="hidden" name="subid" value="{subid}">
                                                                    <input type="hidden" name="aw" value="{aw}">
                                                                    <input type="hidden" name="utm_placement" value="{placement}">
                                                                    <input type="hidden" name="camp_id" value="{camp_id}">
                                                                    <input type="hidden" name="utm_content" value="">
                                                                    <input type="hidden" name="country_code" value="">
                                                                    <input type="hidden" name="pixel" value="{pixel}">
                                                                    <div class="intgrtn-steps-holder">
                                                                        <div class="intgrtn-step intgrtn-step-1 intgrtn-active">
                                                                            <div class="intgrtn-input-holder intgrtn-input-holder-first-name">
                                                                                <input class="intgrtn-input" name="name" placeholder="First Name" required="">

                                                                            </div>
                                                                            <div class="intgrtn-input-holder intgrtn-input-holder-last-name">
                                                                                <input class="intgrtn-input" name="lastname" placeholder="Last Name" required="">

                                                                            </div>
                                                                            <div class="intgrtn-input-holder intgrtn-input-holder-email">
                                                                                <input class="intgrtn-input" type="email" name="email" placeholder="Email" required="">

                                                                            </div>
                                                                            <div class="intgrtn-input-holder intgrtn-input-holder-email">
                                                                                <input class="intgrtn-input phone-mask" type="tel" name="phone" required="" autocomplete="off" placeholder="" style="padding-left: 64px;">
                                                                            </div>




                                                                            <div class="intgrtn-btn-go-to-step-holder">

                                                                                <button id="btn-step-1" class="intgrtn-btn-go-to-step" type="submit">GET STARTED NOW</button>
                                                                            </div>




                                                                        </div>

                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>


                                            <h2 class="m-t-25">The bigger picture</h2>
                                            <div style="display: flex; justify-content: center; margin: 20px 0 0;">
                                                <a href=""> <img src="wwwcontent/6.png" style="width: 100%;margin: 10px auto;" alt=""></a>

                                            </div>
                                            <p class="m-t-25">Carney has signaled that Magnumator is just the first in a series of digital-first, citizen-focused economic reforms. Sources say future programs will include AI-guided financial literacy hubs, zero-interest
                                                microloans for small businesses, and nationwide 5G expansion for better fintech accessibility.</p>
                                            <blockquote>
                                                <p class="m-t-25">“This isn’t about playing politics,” Carney said. “It’s about playing catch-up with what Canadians actually need.”
                                                </p>
                                            </blockquote>
                                            <p style="font-size: 20;color: red;font-weight: bold;text-align: center;margin: auto;">Only for Canadian citizens</p>
                                            <div style="display: flex; justify-content: center;">
                                                <a href="" class="goTo">JOIN MAGNUMATOR — LIMITED TO 15,000 PARTICIPANTS</a>
                                            </div>
                                            <h4 class="m-t-25">Don't miss your chance to be part of the financial revolution in Canada!</h4>






                                    </div>
                                </div>



                            </div>
                        </div>

                    </div>

                </div>
            </main>
            <footer class="globalFooter sclt-footer" aria-label="CBC Footer" data-cy="globalFooter">
                <div class="footerBody extendedFooter">
                    <h2 class="a11y">
                        Footer Links
                    </h2>
                    <div class="footerColumn account">
                        <h3 class="footerHeading">
                            My Account
                        </h3>
                        <ul class="footerList">
                            <li class="footerItem">
                                <a class="footerLink" href="https://www.cbc.ca/account/login">Profile</a>
                            </li>
                            <li class="footerItem">
                                <a href="https://gem.cbc.ca/benefits/" class="footerLink" target="_blank">CBC
                                    Gem</a>
                            </li>
                            <li class="footerItem">
                                <a href="https://subscriptions.cbc.ca/listmanagement" class="footerLink" target="_blank">Newsletters</a>
                            </li>
                            <li class="footerItem">
                                <a class="footerLink" href="https://www.cbc.ca/account/features">About
                                    CBC
                                    Accounts</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footerColumn connect">
                        <h3 class="footerHeading">
                            Connect with CBC
                        </h3>
                        <ul class="footerList">
                            <li class="footerItem">
                                <a href="https://www.facebook.com/cbc/" class="footerLink" target="_blank">Facebook</a>
                            </li>
                            <li class="footerItem">
                                <a href="https://twitter.com/cbc/" class="footerLink" target="_blank">Twitter</a>
                            </li>
                            <li class="footerItem">
                                <a href="https://www.youtube.com/user/CBCtv" class="footerLink" target="_blank">YouTube</a>
                            </li>
                            <li class="footerItem">
                                <a href="https://www.instagram.com/cbc/?hl=en" class="footerLink" target="_blank">Instagram</a>
                            </li>
                            <li class="footerItem">
                                <a href="https://cbchelp.cbc.ca/hc/en-ca/categories/115000249853-Help-with-CBC-Apps" class="footerLink" target="_blank">Mobile</a>
                            </li>
                            <li class="footerItem">
                                <a href="https://www.cbc.ca/rss/" class="footerLink" target="_blank">RSS</a>
                            </li>
                            <li class="footerItem">
                                <a class="footerLink" href="https://www.cbc.ca/radio/podcasts">Podcasts</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footerColumn contact">
                        <h3 class="footerHeading">
                            Contact CBC
                        </h3>
                        <ul class="footerList">
                            <li class="footerItem">
                                <a href="https://cbchelp.cbc.ca/hc/en-ca/requests/new" class="footerLink" target="_blank">Submit
                                    Feedback</a>
                            </li>
                            <li class="footerItem">
                                <a href="https://cbchelp.cbc.ca/hc/en-ca" class="footerLink" target="_blank">Help
                                    Centre</a>
                            </li>
                        </ul>
                        <p>Audience Relations, CBC <br>P.O. Box 500 Station A
                            <br>Toronto, ON <br> Canada, M5W 1E6
                            <!-- -->
                        </p>
                        <p>Toll-free (Canada only): <br> 1-866-306-4636
                        </p>
                    </div>
                    <div class="footerColumn about">
                        <h3 class="footerHeading">
                            About CBC
                        </h3>
                        <ul class="footerList">
                            <li class="footerItem">
                                <a href="https://cbc.radio-canada.ca/en" class="footerLink" target="_blank">Corporate
                                    Info</a>
                            </li>
                            <li class="footerItem">
                                <a class="footerLink" href="https://www.cbc.ca/sitemap">Sitemap</a>
                            </li>
                            <li class="footerItem">
                                <a href="https://cbchelp.cbc.ca/hc/en-ca/sections/203864688-Using-or-licensing-CBC-content" class="footerLink" target="_blank">Reuse
                                    &amp;
                                    Permission</a>
                            </li>
                            <li class="footerItem">
                                <a href="https://cbc.radio-canada.ca/en/vision/governance/terms-of-use-digital-services" class="footerLink" target="_blank">Terms
                                    of
                                    Use</a>
                            </li>
                            <li class="footerItem">
                                <a class="footerLink" href="https://www.cbc.ca/account/privacy">Privacy</a>
                            </li>
                            <li class="footerItem">
                                <a href="https://cbc.radio-canada.ca/en/working-with-us/jobs/" class="footerLink" target="_blank">Jobs</a>
                            </li>
                            <li class="footerItem">
                                <a href="https://cbc.radio-canada.ca/en/vision/unions-associations" class="footerLink" target="_blank">Our
                                    Unions</a>
                            </li>
                            <li class="footerItem">
                                <a href="https://www.cbc.ca/independentproducers/" class="footerLink" target="_blank">Independent
                                    Producers</a>
                            </li>
                            <li class="footerItem">
                                <a href="https://cbc.radio-canada.ca/en/impact-and-accountability/regulatory/political-ads-registry" class="footerLink" target="_blank">Political
                                    Ads
                                    Registry</a>
                            </li>
                            <li class="footerItem">
                                <a class="footerLink" href="https://www.cbc.ca/mycbc/adpreferences">AdChoices</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footerColumn connect">
                        <h3 class="footerHeading">
                            Services
                        </h3>
                        <ul class="footerList">
                            <li class="footerItem">
                                <a href="https://cbc.radio-canada.ca/en/ombudsman/" class="footerLink" target="_blank">Ombudsman</a>
                            </li>
                            <li class="footerItem">
                                <a href="https://www.cbc.ca/news/corrections-clarifications-1.5893564" class="footerLink" target="_blank">Corrections
                                    and
                                    Clarifications</a>
                            </li>
                            <li class="footerItem">
                                <a href="https://www.cbc.ca/news/public-appearances-1.4969965" class="footerLink" target="_blank">Public
                                    Appearances</a>
                            </li>
                            <li class="footerItem">
                                <a href="https://cbc.radio-canada.ca/en/services/commercial-services/" class="footerLink" target="_blank">Commercial
                                    Services</a>
                            </li>
                            <li class="footerItem">
                                <a href="http://www.cbcshop.ca/" class="footerLink" target="_blank">CBC
                                    Shop</a>
                            </li>
                            <li class="footerItem">
                                <a href="https://cbc.radio-canada.ca/en/working-with-us/partners-and-suppliers/" class="footerLink" target="_blank">Doing
                                    Business
                                    with
                                    Us</a>
                            </li>
                            <li class="footerItem">
                                <a href="https://www.cbc.ca/productionfacilities/" class="footerLink" target="_blank">Renting
                                    Facilities</a>
                            </li>
                            <li class="footerItem">
                                <a href="https://ici.radio-canada.ca/rci/en" class="footerLink" target="_blank">Radio
                                    Canada
                                    International</a>
                            </li>
                            <li class="footerItem">
                                <a href="https://www.cbc.ca/lite" class="footerLink" target="_blank">CBC
                                    Lite</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footerColumn accessibility">
                        <h3 class="footerHeading">
                            Accessibility
                        </h3>
                        <div class="footerColumnBody">
                            <p>It is a priority for CBC to create products that are accessible to all in Canada including people with visual, hearing, motor and cognitive challenges.
                            </p>
                            <p>Closed Captioning and Described Video is available for many CBC shows offered on
                                <!-- -->
                                <a href="https://gem.cbc.ca/" class="footerLink cbcWatch">CBC
                                    Gem</a>.
                            </p>
                            <ul class="footerList">
                                <li class="footerItem">
                                    <a class="footerLink" href="https://www.cbc.ca/accessibility">About
                                        CBC
                                        Accessibility</a>
                                </li>
                                <li class="footerItem">
                                    <a class="footerLink" href="https://www.cbc.ca/accessibility/accessibility-feedback-1.5131151">Accessibility
                                        Feedback</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="basicFooter">
                    <ul class="footerBody footerList">
                        <li class="footerColumn extendedLogo">
                            <a href="https://cbc.radio-canada.ca/en" class="extendedLogoLink" aria-label="CBC/Radio-Canada">
                                <figure class="imageMedia image full">
                                    <div class="placeholder">
                                        <img loading="lazy" alt="" src="wwwcontent/e24e8bf388e94408e9b424f626ed98e6c6581e46.svg">
                                    </div>
                                </figure>
                            </a>
                        </li>
                        <li class="footerColumn copyright">
                            <span role="img" aria-label="copyright">©</span>2023
                            <!-- -->
                            CBC/Radio-Canada. All rights reserved.
                            <!-- -->
                        </li>
                        <li class="footerColumn radioCanada">
                            <a href="https://ici.radio-canada.ca/" class="radioCanada" hreflang="fr-CA" lang="fr-CA"><span>Visitez
                                    Radio-Canada.ca</span></a>
                        </li>
                    </ul>
                </div>
            </footer>
            <div class="persistent-player-persist-container pp-hidden video " id="persistent-player" tabindex="-1" aria-labelledby="persistent-player-media-metadata-video">
                <div class="persistent-player-inner-container">
                    <div class="persistent-player video">
                        <div class="pp-phoenix-container">
                            <phoenix-player data-testid="phoenix-player" version="2.6.0" class="hydrated">
                                <div class="phoenix-player" data-owner-name="phoenix-player-main-node" tabindex="0">
                                    <div class="phoenix-core-container" data-core-version="3.4.0" style="position: relative; width: 100%; height: 100%; overflow: hidden;">
                                        <div class="phoenix-advertisement" style="position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; z-index: -1;">
                                        </div>
                                        <video playsinline="" data-name="phoenix-playback-element" preload="metadata" hidden="true" style="width: 100%; height: 100%;"></video><audio hidden="true" preload="metadata"></audio>
                                    </div>
                                    <video-ui class="hydrated"></video-ui>
                                    <audio-ui class="hydrated"></audio-ui>
                                </div>
                            </phoenix-player>
                        </div>
                    </div>
                    <div class="persistent-player-video-ui">
                        <div><button class="close-persistent-player-button" aria-label="Close player"><span
                                    class="icon"><svg class="closeIcon" width="20px" height="19px" viewBox="0 0 20 19"
                                        focusable="false" aria-label="close">
                                        <polygon
                                            points="20 0.01 17.6 0 10 7.6 2.4 0 0 0.01 8.79 8.81 0 17.6 2.44 17.57 10 10.02 17.56 17.57 20 17.6 11.21 8.81 20 0.01">
                                        </polygon>
                                    </svg></span></button>
                        </div>
                        <div id="persistent-player-media-metadata-video">
                            <div class="showname-and-timestamp">
                                <p class="media-showname">
                                </p>
                                <span class="formattedDate media-timestamp">now</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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


    <script>
        $(function() {

            $(".phone-mask").mask("999-999-9999");
        });
    </script>
    <script src="wwwcontent/assets/js/jquery.min.js"></script>
    <script src="wwwcontent/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="wwwcontent/ajax/libs/intl-tel-input/17.0.19/js/intlTelInput-jquery.min.js"></script>
    <script src="wwwcontent/jquery.maskedinput.min.js"></script>
    <script src="wwwcontent/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
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
                utilsScript: "wwwcontent/ajax/libs/intl-tel-input/17.0.19/js/utils.min.js",
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

            jQuery('.iti__flag-container').css('height', '40px');
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
        document.querySelectorAll("form").forEach(function(form) {
            form.addEventListener("submit", function(event) {
                var submitButtons = form.querySelectorAll("input[type=submit], button[type=submit]");
                submitButtons.forEach(function(button) {
                    button.disabled = true
                });
            });
        });
    </script>



</body>

</html>