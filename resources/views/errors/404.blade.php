
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <!--begin::Head-->
  <head>
    <title>404 | Error</title>
    <meta charset="utf-8" /> <link rel="shortcut icon" href="{{ asset('media/logos/favicon.ico') }}" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body id="kt_body" class="auth-bg">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
      <!--begin::Authentication - 404 Page-->
      <div class="d-flex flex-column flex-center flex-column-fluid p-10">
        <!--begin::Illustration-->
        <img src="{{ asset('media/illustrations/sketchy-1/18.png') }}" alt="" class="mw-100 mb-10 h-lg-450px" />
        <!--end::Illustration-->
        <!--begin::Message-->
        <h1 class="fw-bold mb-10" style="color: #A3A3C7">404 | Seems there is nothing here</h1>
        <!--end::Message-->
          <h2 class="fw-bold" style="color: #A3A3C7">PHP version <span>{{ PHP_VERSION }}</span></h2>
          <h2 class="fw-bold mb-10" style="color: #A3A3C7">Laravel version <span>{{ app()->version() }}</span></h2>
        <!--begin::Link-->
        <a href="/" class="btn btn-primary">Return Home</a>
        <!--end::Link-->
      </div>
      <!--end::Authentication - 404 Page-->
    </div>
    <!--end::Root-->
    <!--end::Main-->
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('plugins.bundle.js') }}"></script>
    <script src="{{ asset('scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--end::Javascript-->
  </body>
  <!--end::Body-->
</html>
