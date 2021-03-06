<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title> @yield("pageTitle") </title>
    
        <link rel="stylesheet" href="/css/loading-bar.min.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/font-awesome4.min.css" />
        <link rel="stylesheet" href="/css/flatpickr.min.css"/>
        <link rel="stylesheet" href="/css/jquery-confirm.min.css">
        <link rel="stylesheet" href="/css/handsontable.full.min.css">
        <link rel="stylesheet" href="/css/handsontable.bootstrap.css">
        <link href="http://hayageek.github.io/jQuery-Upload-File/4.0.11/uploadfile.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css" />
        <link rel="stylesheet" href="/css/custom.bootstrap.css" />
        <link rel="stylesheet" href="/css/layout.css" />
	    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie" />
        <link rel="icon" href="/img/logo.png">
        <!-- END DEV ENVIROMENT LINK -->

        <!-- ON DEPLOYMENT LINK-->
        <script src="/js/app.js"></script>
        <script src="/js/loading-bar.min.js"></script>
        <script src="/js/calender.js"></script>
        {{-- <script src="/js/angular.min.js"></script> --}}
        {{-- <script src="js/nprogress.min.js"></script> --}}
        <script src="/js/angular/custom.angular.js"></script>
        {{-- <link rel="stylesheet" href="%bootstrap.css%" />
        <script src='#angular'></script>
        <script src='#angular-route'></script> --}}
        <!-- END ON DEPLOYMENT LINK -->


    </head>
    <body ng-app="skuler">
        @include('layouts.navbar')
        @yield('content')
        @include('layouts.footer')
        <!-- JS DEV -->
        {{-- <script src="js/app.js"></script> --}}
        <script src="js/main.js"></script>
        <script src='js/jquery-confirm.min.js'></script>
        <script src="js/validation.js"></script>
         {{-- <script src="js/custom.angular.js"></script> --}}
        <script src="js/functions.js"></script>
        {{--  <script src="js/pages.js"></script>  --}}
        <script src="js/handsontable.full.min.js"></script>
        <script src="http://hayageek.github.io/jQuery-Upload-File/4.0.11/jquery.uploadfile.min.js"></script>
        <script src="js/moment.js"></script>
        <script src="js/flatpickr.js"></script>
        <!-- END JS -->


        <!-- JS DEPLOYMENT -->
        {{-- <script src="#jquery"></script>
        <script src="#bootstrap"></script> --}}
        <!-- END JS DEPLOYMENT -->
    </body>
</html>