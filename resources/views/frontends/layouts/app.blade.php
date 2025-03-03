<!DOCTYPE html>
<html data-wf-domain="ovo-mark.webflow.io" data-wf-page="64e79e5ac8962aa3798e3f9c" data-wf-site="64e79e5ac8962aa3798e3f94"
    class="w-mod-js wf-montserrat-n1-active wf-montserrat-i1-active wf-montserrat-n2-active wf-montserrat-i2-active wf-montserrat-n3-active wf-montserrat-i3-active wf-montserrat-n4-active wf-montserrat-i4-active wf-montserrat-n5-active wf-montserrat-i5-active wf-montserrat-n6-active wf-montserrat-i6-active wf-montserrat-n7-active wf-montserrat-i7-active wf-montserrat-n8-active wf-montserrat-i8-active wf-montserrat-n9-active wf-montserrat-i9-active wf-lato-n1-active wf-lato-i1-active wf-lato-n3-active wf-lato-i3-active wf-lato-n4-active wf-lato-i4-active wf-lato-n7-active wf-lato-i7-active wf-lato-n9-active wf-lato-i9-active wf-bebasneue-n4-active wf-active w-mod-ix">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>
        .wf-force-outline-none[tabindex="-1"]:focus {
            outline: none;
        }
    </style>
    <title>Mark - Webflow HTML website template</title>
    <meta content="Mark - Webflow HTML website template" name="description">
    <meta content="Mark - Webflow HTML website template" property="og:title">
    <meta content="Mark - Webflow HTML website template" property="og:description">
    <meta content="Mark - Webflow HTML website template" property="twitter:title">
    <meta content="Mark - Webflow HTML website template" property="twitter:description">
    <meta property="og:type" content="website">
    <meta content="summary_large_image" name="twitter:card">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="{{ asset('frontend/assets') }}/css/ovo-mark.webflow.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/" rel="preconnect">
    <link href="https://fonts.gstatic.com/" rel="preconnect" crossorigin="anonymous">
    <script src="{{ asset('frontend/assets') }}/js/webfont.js" type="text/javascript"></script>
    <link rel="stylesheet" href="{{ asset('frontend/assets') }}/css/style.css" media="all">
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: [
                    "Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic",
                    "Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic",
                    "Bebas Neue:regular"
                ]
            }
        });
    </script>
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n
                .className += t + "touch")
        }(window, document);
    </script>
    <link href="https://cdn.prod.website-files.com/64e79e5ac8962aa3798e3f94/64e7a3c3958b23a5a1d19e5b_Favicon.jpg"
        rel="shortcut icon" type="image/x-icon">
    <link href="https://cdn.prod.website-files.com/64e79e5ac8962aa3798e3f94/64e7a3c7646ba4e3a372ce41_Webclip.jpg"
        rel="apple-touch-icon">
</head>

<body>
    {{-- Header --}}
    @include('frontends.partials.header');

    {{-- Hero --}}

    <div id="Hero" data-w-id="571295d4-519e-dc5e-8e0f-f3d5cdf36c27" class="section">
        <div class="hero-section">

            {{-- Hero-Section --}}
            @include('frontends.partials.hero-section');

            {{-- Infinite-Text --}}
            @include('frontends.partials.infinite-text');

        </div>
    </div>


    <div class="section">
        <div class="line-divider">
            <div class="line-holder">
                <div class="line"></div>
                <div class="lines-holder">
                    <div class="up-line"></div>
                    <div class="up-line small"></div>
                    <div class="up-line"></div>
                    <div class="up-line small"></div>
                    <div class="up-line"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- About --}}
    @include('frontends.partials.about');

    {{-- Project --}}
    @include('frontends.partials.project');

    {{-- Footer --}}
    @include('frontends.partials.footer');

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('frontend/assets') }}/js/webflow.js" type="text/javascript"></script>
</body>

</html>
