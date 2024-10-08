  <!--Gradient-->
  <div class="blob"></div>

<script>
    var cursor = document.querySelector('.blob');

    document.addEventListener('mousemove', function (e) {
        var x = e.clientX;
        var y = e.clientY;
        cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`
    });
</script>


<!-- Return to Top -->
<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script>
        var $jq = jQuery.noConflict();
        $jq(document).ready(function () {
            $jq(window).scroll(function () {
                if ($jq(this).scrollTop() >= 50) {
                    $jq('#return-to-top').fadeIn(200);
                } else {
                    $jq('#return-to-top').fadeOut(200);
                }
            });

            $jq('#return-to-top').click(function () {
                $jq('body,html').animate({ scrollTop: 0 }, 500);
            });
        });
    </script>

    <!--[ Cookies Consent Notice ]-->
    <div class='TW TWhide' id='TW_box'>
        <div class='TW-Main'>
            <svg viewbox='0 0 50 50'>
                <path
                    d='M 25 4 C 13.414063 4 4 13.414063 4 25 C 4 36.585938 13.414063 46 25 46 C 36.585938 46 46 36.585938 46 25 C 46 24.378906 45.960938 23.78125 45.910156 23.203125 C 45.878906 22.855469 45.671875 22.546875 45.359375 22.390625 C 45.042969 22.234375 44.671875 22.253906 44.375 22.441406 C 43.824219 22.792969 43.191406 23 42.5 23 C 41.015625 23 39.769531 22.082031 39.253906 20.792969 C 39.148438 20.527344 38.933594 20.320313 38.667969 20.222656 C 38.398438 20.125 38.101563 20.144531 37.847656 20.28125 C 37.003906 20.738281 36.035156 21 35 21 C 31.675781 21 29 18.324219 29 15 C 29 13.964844 29.261719 12.996094 29.71875 12.152344 C 29.855469 11.898438 29.875 11.601563 29.777344 11.332031 C 29.679688 11.066406 29.472656 10.851563 29.207031 10.746094 C 27.917969 10.230469 27 8.984375 27 7.5 C 27 6.808594 27.207031 6.175781 27.558594 5.625 C 27.746094 5.328125 27.765625 4.957031 27.609375 4.640625 C 27.453125 4.328125 27.144531 4.121094 26.796875 4.089844 C 26.21875 4.039063 25.621094 4 25 4 Z M 38 4 C 36.894531 4 36 4.894531 36 6 C 36 7.105469 36.894531 8 38 8 C 39.105469 8 40 7.105469 40 6 C 40 4.894531 39.105469 4 38 4 Z M 25 6 C 25.144531 6 25.292969 6.015625 25.4375 6.023438 C 25.285156 6.519531 25 6.953125 25 7.5 C 25 9.4375 26.136719 10.984375 27.660156 11.960938 C 27.269531 12.90625 27 13.917969 27 15 C 27 19.40625 30.59375 23 35 23 C 36.082031 23 37.09375 22.730469 38.039063 22.339844 C 39.015625 23.863281 40.5625 25 42.5 25 C 43.046875 25 43.480469 24.714844 43.980469 24.5625 C 43.984375 24.707031 44 24.855469 44 25 C 44 35.503906 35.503906 44 25 44 C 14.496094 44 6 35.503906 6 25 C 6 14.496094 14.496094 6 25 6 Z M 36.5 12 C 35.671875 12 35 12.671875 35 13.5 C 35 14.328125 35.671875 15 36.5 15 C 37.328125 15 38 14.328125 38 13.5 C 38 12.671875 37.328125 12 36.5 12 Z M 21.5 15 C 20.671875 15 20 15.671875 20 16.5 C 20 17.328125 20.671875 18 21.5 18 C 22.328125 18 23 17.328125 23 16.5 C 23 15.671875 22.328125 15 21.5 15 Z M 45 15 C 44.449219 15 44 15.449219 44 16 C 44 16.550781 44.449219 17 45 17 C 45.550781 17 46 16.550781 46 16 C 46 15.449219 45.550781 15 45 15 Z M 15 20 C 13.34375 20 12 21.34375 12 23 C 12 24.65625 13.34375 26 15 26 C 16.65625 26 18 24.65625 18 23 C 18 21.34375 16.65625 20 15 20 Z M 24.5 24 C 23.671875 24 23 24.671875 23 25.5 C 23 26.328125 23.671875 27 24.5 27 C 25.328125 27 26 26.328125 26 25.5 C 26 24.671875 25.328125 24 24.5 24 Z M 17 31 C 15.894531 31 15 31.894531 15 33 C 15 34.105469 15.894531 35 17 35 C 18.105469 35 19 34.105469 19 33 C 19 31.894531 18.105469 31 17 31 Z M 30.5 32 C 29.121094 32 28 33.121094 28 34.5 C 28 35.878906 29.121094 37 30.5 37 C 31.878906 37 33 35.878906 33 34.5 C 33 33.121094 31.878906 32 30.5 32 Z' />
            </svg>
            <h2>Cookies Consent</h2>
            <p>This website uses cookies to offer you a better Browsing Experience. By using our website, You agree to
                the use of Cookies</p>
        </div>
        <button class='C-button' id='Cookie_btn'>Accept Cookies!</button>
        <a class='C-button outl' href='privacy-policy.html'>Learn More</a>
    </div>

    <script>
        /*<![CDATA[*/
        var TW_box = document.querySelector("#TW_box"), Cookie_btn = document.querySelector("#Cookie_btn"), ckErrMes = "Cookie can't be set! Please unblock this site from the cookie setting of your browser."; if (null != TW_box) { Cookie_btn.onclick = () => { document.cookie = "CookieConsentByFineshop=Accepted; max-age=2592000; path=/", document.cookie ? TW_box.classList.add("acptd") : alert(ckErrMes) }; let e = document.cookie.indexOf("CookieConsentByFineshop=Accepted"); -1 != e ? TW_box.classList.add("TWhide") : TW_box.classList.remove("TWhide") }
        /*]]>*/

    </script>
  
    <header>
        <div class="marquee-row">
            <div class="marquee-block marquee1">
                <ul class="marquee-item-list">
                    <li>Consumer Advisory: APR Rates Range From 5.99% to 35.99% Maximum APR for qualified consumers
                    </li>
                    <li>Consumer Advisory: APR Rates Range From 5.99% to 35.99% Maximum APR for qualified consumers
                    </li>
                    <li>Consumer Advisory: APR Rates Range From 5.99% to 35.99% Maximum APR for qualified consumers
                    </li>
                </ul>
            </div>
        </div>
        <script>
            var elements = $('ul.marquee-item-list li').length;
            for (var i = 0; i < elements; i++) {
                $(".marquee-item-list").clone().prependTo(".marquee-block");
            };
            var liEle = [];
            var liEle = $(".marquee-item-list li");
        </script>

        <nav class="navbar navbar-expand-md container">
            <a class="navbar-brand" href="#"><img src="assets/images/logo.png" alt=""></a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="terms-and-conditions.html">Terms & Conditions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="privacy-policy.html">Privacy Policy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">FAQ</a>
                    </li>

                </ul>

            </div>
        </nav>
    </header>