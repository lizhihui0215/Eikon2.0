<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@section('title')</title>
    @section('meta_keyword')
      <meta name="keywords" content="content">
    @show @section('meta_author')
      <meta name="author" content="lizhhui">
    @show @section('meta_description')
        <meta name="description"
              content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei."/>
    @show
    @section('stylesheets')
      <link rel="stylesheet" href="{{ asset('vendor/bootstrap/dist/css/bootstrap.min.css') }}" >
    @show
  </head>
  <body>
    @yield('content')

    <!-- Scripts -->
    @yield('scripts')
  </body>
</html>
