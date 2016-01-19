<html class="no-js" lang=""> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Yavu.cl</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        {!!Html::style('css/yavuadm.css')!!}
        {!!Html::style('css/bootstrap.css')!!}
        {!!Html::style('css/style.css')!!}
        {!!Html::style('css/main.css')!!}
        {!!Html::style('css/bootstrap-theme.min.css')!!}
        {!!Html::script('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')!!}
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
    </head>
    <body>
     <!-- @yield('content') --> 
          <ul class="sidebar">
      <li class="sidebar-brand"><a href="">Administración Yavu</a></li>
      <li><a href="#">Servicios</a></li>
      <li><a href="#">Empresas</a></li>
      <li><a href="#">Salir</a></li>
      </ul>

<!-- footer 
 Sin footer 
    /footer -->
      
    </div> <!-- /container -->        
        {!!Html::script('//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js')!!}
        {!!Html::script('js/vendor/bootstrap.min.js')!!}
        {!!Html::script('js/plugins.js')!!}
        {!!Html::script('js/main.js')!!}
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>