<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link
        href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">

</head>

<body>
  <!-- Title -->
  @include('partials.title')
  
  <!-- Navigation -->
  @include('partials.header')

  {{-- {{dd(Route::getCurrentRoute()->uri())}} --}}

    <!-- Contents of Pages ... -->
    @yield('content')

    <!-- Footer -->
    @include('partials.footer')

    <!-- Bootstrap core JavaScript -->
    @include('partials.scripts')


</body>

</html>
