<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Kenneth's Blog</title>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">


    <link href="{{ URL::asset('css/blog.css') }}" rel="stylesheet">
  </head>

  @include('layouts.nav')

  @include('layouts.header')

  <div class="container">
    <div class="row">
      @yield ('content')

      @include('layouts.sidebar')
    </div>

  </div>


  @include('layouts.footer')

</html>
