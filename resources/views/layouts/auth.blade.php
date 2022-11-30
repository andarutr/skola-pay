<!DOCTYPE html>
<html lang="en">
<head>
  @include('partials.auth.header')
</head>
<body>
  <div class="hk-wrapper hk-pg-auth" data-footer="simple">
    @yield('content')
  </div>
  @include('partials.auth.footer')    
</body>
</html>