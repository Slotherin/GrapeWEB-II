
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>{$site->title} Housekeeping: {$page->title}</title>

    <meta name="description" content="overview &amp; stats" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--basic styles-->

    <link href="http://easy-themes.tk/themes/preview/ace/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="http://easy-themes.tk/themes/preview/ace/assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="http://easy-themes.tk/themes/preview/ace/assets/css/font-awesome.min.css" />

    <!--[if IE 7]>
      <link rel="stylesheet" href="http://easy-themes.tk/themes/preview/ace/assets/css/font-awesome-ie7.min.css" />
    <![endif]-->

    <!--page specific plugin styles-->

    <!--fonts-->

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

    <!--ace styles-->

    <link rel="stylesheet" href="http://easy-themes.tk/themes/preview/ace/assets/css/ace.min.css" />
    <link rel="stylesheet" href="http://easy-themes.tk/themes/preview/ace/assets/css/ace-responsive.min.css" />
    <link rel="stylesheet" href="http://easy-themes.tk/themes/preview/ace/assets/css/ace-skins.min.css" />

    <!--[if lte IE 8]>
      <link rel="stylesheet" href="http://easy-themes.tk/themes/preview/ace/assets/css/ace-ie.min.css" />
    <![endif]-->

    <!--inline styles if any-->


    <style>
    body {
      background: rgb(231, 231, 231) url('Public/Housekeeping/Assets/img/bg.png') !important;
        overflow: auto;

    }

    .login-layout .widget-box {
      background-color: #2283c5;
      padding: 3px;
    }

    .login-layout {
      margin-top: 100px;
    }

    .ace-nav .nav-user-photo {
      border: none;
    }

    </style>
  </head>

  <body class="{$body->class}">
    <?php if($_SERVER['REQUEST_URI'] != '/housekeeping') { $this->Show_View('Base/Navigation', true); } ?>
    {$page->body}

    <!--basic scripts-->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript">
      window.jQuery || document.write("<script src='http://easy-themes.tk/themes/preview/ace/assets/js/jquery-1.9.1.min.js'>"+"<"+"/script>");
    </script>
        <script src="http://easy-themes.tk/themes/preview/ace/assets/js/bootstrap.min.js"></script>


    <!--page specific plugin scripts-->

    <!--[if lte IE 8]>
      <script src="http://easy-themes.tk/themes/preview/ace/assets/js/excanvas.min.js"></script>
    <![endif]-->

    <script src="http://easy-themes.tk/themes/preview/ace/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="http://easy-themes.tk/themes/preview/ace/assets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="http://easy-themes.tk/themes/preview/ace/assets/js/jquery.slimscroll.min.js"></script>
    <script src="http://easy-themes.tk/themes/preview/ace/assets/js/jquery.easy-pie-chart.min.js"></script>
    <script src="http://easy-themes.tk/themes/preview/ace/assets/js/jquery.sparkline.min.js"></script>
    <script src="http://easy-themes.tk/themes/preview/ace/assets/js/flot/jquery.flot.min.js"></script>
    <script src="http://easy-themes.tk/themes/preview/ace/assets/js/flot/jquery.flot.pie.min.js"></script>
    <script src="http://easy-themes.tk/themes/preview/ace/assets/js/flot/jquery.flot.resize.min.js"></script>

    <!--ace scripts-->

    <script src="http://easy-themes.tk/themes/preview/ace/assets/js/ace-elements.min.js"></script>
    <script src="http://easy-themes.tk/themes/preview/ace/assets/js/ace.min.js"></script>

    <!--inline scripts related to this page-->




  </body>
</html>
