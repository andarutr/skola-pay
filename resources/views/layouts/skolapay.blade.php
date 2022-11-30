<!DOCTYPE html>
<html lang="id">
<head>
    @include('partials.skolapay.header')
</head>
<body>
    <div id="wrapper" class="wrapper">
        <livewire:partials.skolapay.navbar />
        @if($menu == 'Home')
            <livewire:partials.skolapay.heroslider-home />
        @else
            @yield('breadcrumb')
        @endif
        <main class="main-content">
            @yield('content')
        </main>
        <livewire:partials.skolapay.copyright />
    </div>
    @include('partials.skolapay.footer')
</body>
</html>