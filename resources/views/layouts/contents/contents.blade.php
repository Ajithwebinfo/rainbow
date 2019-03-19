<body class="fix-header fix-sidebar card-no-border">
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>


<div id="main-wrapper">
    <header class="topbar">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
            @include('layouts.header.leftsidelogo.left_logo')

            <div class="navbar-collapse">
                @include('layouts.header.notificationbar.notifications')
                @include('layouts.header.userprofile.profile')
            </div>
        </nav>
    </header>
    <aside class="left-sidebar">
        @include('layouts.navigation.side_nav')
    </aside>

    @yield('content')

</div>

</body>
