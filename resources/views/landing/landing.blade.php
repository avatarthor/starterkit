<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic
Product Version: 8.2.0
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
    <!--begin::Head-->
    <head><base href="../../"/>
        <title>Metronic - The World's #1 Selling Bootstrap Admin Template by Keenthemes</title>
        <meta charset="utf-8" />
        <meta name="description" content="The most advanced Bootstrap 5 Admin Theme with 40 unique prebuilt layouts on Themeforest trusted by 100,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel versions. Grab your copy now and get life-time updates for free." />
        <meta name="keywords" content="metronic, bootstrap, bootstrap 5, angular, VueJs, React, Asp.Net Core, Rails, Spring, Blazor, Django, Express.js, Node.js, Flask, Symfony & Laravel starter kits, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" />
        <meta property="og:url" content="https://keenthemes.com/metronic" />
        <meta property="og:site_name" content="Keenthemes | Metronic" />
        <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
        <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
        <!--end::Fonts-->
        <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
        <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Global Stylesheets Bundle-->
        <script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body id="kt_body" class="auth-bg bgi-size-cover bgi-position-center bgi-no-repeat">
        <!--begin::Theme mode setup on page load-->
        <script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); </script>
        <!--end::Theme mode setup on page load-->
        <!--begin::Main-->
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Page bg image-->
            <style>body { background-image: url('assets/media/auth/bg4.jpg'); } [data-bs-theme="dark"] body { background-image: url('assets/media/auth/bg4-dark.jpg'); }</style>
            <!--end::Page bg image-->
            <!--begin::Authentication - Signup Welcome Message -->
            <div class="d-flex flex-column flex-center flex-column-fluid">
                <!--begin::Content-->
                <div class="d-flex flex-column flex-center text-center p-10">
                    <!--begin::Wrapper-->
                    <div class="card card-flush w-lg-650px py-5">
                        <div class="card-body py-15 py-lg-20">
                            <!--begin::Logo-->
                            <div class="mb-13">
                                <a href="../../demo8/dist/index.html" class="">
                                    <img alt="Logo" src="assets/media/logos/custom-2.svg" class="h-40px" />
                                </a>
                            </div>
                            <!--end::Logo-->
                            <!--begin::Title-->
                            <h1 class="fw-bolder text-gray-900 mb-7">We're Launching Soon</h1>
                            <!--end::Title-->
                            <!--begin::Counter-->
                            <div id="countdown" class="mb-7">
                                <div class="d-flex flex-center pb-10 pt-lg-5 pb-lg-12">
                                    <div class="w-65px rounded-3 bg-body shadow-sm py-4 px-5 mx-3">
                                        <div class="fs-2 fw-bold text-gray-800" id="days"></div>
                                        <div class="fs-7 fw-semibold text-muted">days</div>
                                    </div>

                                    <div class="w-65px rounded-3 bg-body shadow-sm py-4 px-5 mx-3">
                                        <div class="fs-2 fw-bold text-gray-800" id="hours"></div>
                                        <div class="fs-7 text-muted">hrs</div>
                                    </div>

                                    <div class="w-65px rounded-3 bg-body shadow-sm py-4 px-5 mx-3">
                                        <div class="fs-2 fw-bold text-gray-800" id="minutes"></div>
                                        <div class="fs-7 text-muted">min</div>
                                    </div>

                                    <div class="w-65px rounded-3 bg-body shadow-sm py-4 px-5 mx-3">
                                        <div class="fs-2 fw-bold text-gray-800" id="seconds"></div>
                                        <div class="fs-7 text-muted">sec</div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Counter-->
                            <!--begin::Text-->
                            <div class="fw-semibold fs-6 text-gray-500 mb-7">This is your opportunity to get creative amazing opportunaties
                            <br />that gives readers an idea</div>
                            <!--end::Text-->
                            <!--begin::Form-->
                            <form class="w-md-350px mb-2 mx-auto" action="#" id="kt_coming_soon_form">
                                <div class="fv-row text-start">
                                    <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                                        <!--end::Input=-->
                                        <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control" />
                                        <!--end::Input=-->
                                        <!--begin::Submit-->
                                        <button class="btn btn-primary text-nowrap" id="kt_coming_soon_submit">
                                            <!--begin::Indicator label-->
                                            <span class="indicator-label">Notify Me</span>
                                            <!--end::Indicator label-->
                                            <!--begin::Indicator progress-->
                                            <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                            <!--end::Indicator progress-->
                                        </button>
                                        <!--end::Submit-->
                                    </div>
                                </div>
                            </form>
                            <!--end::Form-->
                            <!--begin::Illustration-->
                            <div class="mb-n5">
                                <img src="assets/media/auth/chart-graph.png" class="mw-100 mh-300px theme-light-show" alt="" />
                                <img src="assets/media/auth/chart-graph-dark.png" class="mw-100 mh-300px theme-dark-show" alt="" />
                            </div>
                            <!--end::Illustration-->
                        </div>
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Authentication - Signup Welcome Message-->
        </div>
        <!--end::Root-->
        <!--end::Main-->
        <!--begin::Javascript-->
        <script>var hostUrl = "assets/";</script>
        <!--begin::Global Javascript Bundle(mandatory for all pages)-->
        <script src="assets/plugins/global/plugins.bundle.js"></script>
        <script src="assets/js/scripts.bundle.js"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Custom Javascript(used for this page only)-->
        <script src="assets/js/custom/authentication/sign-up/coming-soon.js"></script>
        <!--end::Custom Javascript-->
        <!--begin::Countdown Script-->
        <script>
            // Set the date we're counting down to
            var countDownDate = new Date();
            countDownDate.setDate(countDownDate.getDate() + 17);

            // Update the count down every 1 second
            var x = setInterval(function() {
                // Get today's date and time
                var now = new Date().getTime();

                // Find the distance between now and the count down date
                var distance = countDownDate - now;

                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                // Display the result in the elements with corresponding ids
                document.getElementById("days").innerHTML = days;
                document.getElementById("hours").innerHTML = hours;
                document.getElementById("minutes").innerHTML = minutes;
                document.getElementById("seconds").innerHTML = seconds;

                // If the count down is over, write some text
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("days").innerHTML = "0";
                    document.getElementById("hours").innerHTML = "0";
                    document.getElementById("minutes").innerHTML = "0";
                    document.getElementById("seconds").innerHTML = "0";
                }
            }, 1000);
        </script>
        <!--end::Countdown Script-->
        <!--end::Javascript-->
    </body>
    <!--end::Body-->
</html>
