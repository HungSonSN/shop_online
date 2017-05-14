<!DOCTYPE html>
<html>
    <head>
        <title>Shop Online</title>

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" type="text/css">        
        <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('js/select2.min.js')}}"></script>
    </head>
    <body>

        <div class='container' id='content-panel'>
          <div class='row main_search'>
            @yield('main_search')
          </div>
          <div class='row'>
            <div class='col-md-3'>
              @yield('pagination')
            </div>
            <div class='col-md-9'>
              @yield('content')
            </div>
          </div>
        </div>
        @include('layouts.footer')
    </body>
</html>
