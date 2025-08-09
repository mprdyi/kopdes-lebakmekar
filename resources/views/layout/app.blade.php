
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('Asset/fontawesome-free/css/all.min.css') }} " rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">
  @include('layout.app.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
    @include('layout.app.navbar')
     @yield('content')
     @include('layout.app.footer')
     </div>



</body>
</html>
