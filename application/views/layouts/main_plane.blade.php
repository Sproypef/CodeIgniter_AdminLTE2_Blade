<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('page_title', 'AdminLTE 2 | Dashboard')</title>

    @section('main_styles')

      <!-- Tell the browser to be responsive to screen width -->
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
      <!-- Bootstrap 3.3.6 -->
      <link rel="stylesheet" href="{{asset_url()}}bootstrap/css/bootstrap.min.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
      <!-- Ionicons -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
      <!-- Theme style -->
      <link rel="stylesheet" href="{{asset_url()}}dist/css/AdminLTE.min.css">
      <!-- AdminLTE Skins. Choose a skin from the css/skins
           folder instead of downloading all of them to reduce the load. -->
      <link rel="stylesheet" href="{{asset_url()}}dist/css/skins/_all-skins.min.css">

    @show

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body class="@yield('body_class', isset($body_class) ? $body_class : 'hold-transition skin-blue sidebar-mini')">

  	@yield('body')

    @section('main_scripts')

      <!-- jQuery 2.2.3 -->
      <script src="{{asset_url()}}plugins/jQuery/jquery-2.2.3.min.js"></script>
      <!-- Bootstrap 3.3.6 -->
      <script src="{{asset_url()}}bootstrap/js/bootstrap.min.js"></script>
      <!-- FastClick -->
      <script src="{{asset_url()}}plugins/fastclick/fastclick.js"></script>
      <!-- SlimScroll 1.3.0 -->
      <script src="{{asset_url()}}plugins/slimScroll/jquery.slimscroll.min.js"></script>
      <!-- AdminLTE App -->
      <script src="{{asset_url()}}dist/js/app.min.js"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="{{asset_url()}}dist/js/demo.js"></script>

    @show

  </body>
</html>
