<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="assets/images/favicon_1.ico">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

   <link rel="stylesheet" type="text/css" href="/css/custombox.css">
      <!-- UBOLD THEME -->
    <link href="{{ asset('css/theme.main.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/theme.responsive.css') }}" rel="stylesheet" type="text/css" />

     <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    @yield('css')

  


    
</head>
<body>

    @include('layouts.nav')

    <div id="app">
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/theme.main.js') }}"></script>
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script src="{{ asset('js/datatables.js') }}"></script>

    <script src="{{ asset('js/moment.js') }}"></script>
    <script src="{{ asset('js/helpers.js') }}"></script>

    <script src="https://www.gstatic.com/firebasejs/4.1.2/firebase.js"></script>


        <script>
      $.validate({
        modules : 'security'
      });
    </script>


    <script type="text/javascript">
        moment.fn.diffSecs = function (a) {
                var duration = moment().diff(this, 'seconds');
                return duration;
            }
    </script>

    <script>
      // Initialize Firebase
      var config = {
        apiKey: "AIzaSyAu6Sb4PjlovzWwseUrvAKFlu2gzuE3i1E",
        authDomain: "technocoup-165903.firebaseapp.com",
        databaseURL: "https://technocoup-165903.firebaseio.com",
        projectId: "technocoup-165903",
        storageBucket: "technocoup-165903.appspot.com",
        messagingSenderId: "35617699424"
      };
      firebase.initializeApp(config);
    </script>


    @yield('js')

</body>
</html>
