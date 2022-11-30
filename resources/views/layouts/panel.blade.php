<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.panel.header')
</head>
<body>
    <div class="hk-wrapper" data-layout="vertical" data-layout-style="default" data-menu="light" data-footer="simple">
        @include('partials.panel.navbar')
        @include('partials.panel.sidebar')
        <div class="hk-pg-wrapper">
            @yield('content')
        </div>
    </div>
    @include('partials.panel.footer')
</body>
</html>