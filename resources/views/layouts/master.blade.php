<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@@page-discription">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>@yield('page-title') | Modern Citi Group</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css?ver=1.4.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css?ver=1.4.0') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/screen.css') }}">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    @stack('css')

    @yield('page-css')

</head>

<body class="nk-body npc-crypto has-sidebar has-sidebar-fat ui-clean ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->

            @include('layouts.sidebar1')

            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                    @include('layouts.head1')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content nk-content-fluid">
                    <div class="">
                        <div class="nk-content-body">
                            @yield('page-content')
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                    @include('layouts.footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>

    @stack('modals')

    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('assets/js/bundle.js?ver=1.4.0') }}"></script>
    <script src="{{ asset('assets/js/scripts.js?ver=1.4.0') }}"></script>
    <script src="{{ asset('assets/js/charts/gd-general.js?ver=1.4.0') }}"></script>
    <script src="{{ asset('assets/js/global-scripts.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.20/lodash.min.js"></script>

    @stack('js')
    @yield('page-js')
</body>

</html>
