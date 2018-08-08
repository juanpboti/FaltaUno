<!DOCTYPE html>
<html lang="en" dir="ltr">
  @include('partials/head')
  <body>
    @include('partials/header')
    <div class="container-fluid-main">
      @yield('main')
    </div>
    @include('partials/footer')
    
    @include('partials/script')
  </body>
</html>
