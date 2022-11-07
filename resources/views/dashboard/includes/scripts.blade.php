<!--
    OneUI JS Core

    Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
    to handle those dependencies through webpack. Please check out dashboard/_js/main/bootstrap.js for more info.

    If you like, you could also include them separately directly from the dashboard/js/core folder in the following
    order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

    dashboard/js/core/jquery.min.js
    dashboard/js/core/bootstrap.bundle.min.js
    dashboard/js/core/simplebar.min.js
    dashboard/js/core/jquery-scrollLock.min.js
    dashboard/js/core/jquery.appear.min.js
    dashboard/js/core/js.cookie.min.js
-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<script src="{{ asset('dashboard/js/oneui.core.min.js') }}"></script>

<!--
    OneUI JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at dashboard/_js/main/app.js
-->
<script src="{{ asset('dashboard/js/oneui.app.min.js')}}"></script>
<script src="{{ asset('dashboard/js/scriptcustomizedjs.js')}}"></script>

<!-- Page JS Plugins -->
<script src="{{ asset('dashboard/js/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('dashboard/js/plugins/chart.js/Chart.bundle.min.js') }}"></script>

<!-- Page JS Code -->
<script src="{{ asset('dashboard/js/pages/be_pages_dashboard.min.js') }}"></script>

<!-- Page JS Helpers (jQuery Sparkline Plugins) -->
<script>
    jQuery(function () {
        One.helpers(['sparkline']);
    });
</script>

</body>
</html>
