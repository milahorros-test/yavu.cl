<html class="no-js" lang=""> 
    <head>
        <meta charset="utf-8">
        <meta >
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Yavu.cl</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        {!!Html::style('css/bootstrap.css')!!}
        {!!Html::style('css/sidebar.css')!!}
        <!-- {!!Html::style('css/style.css')!!} -->
        <!-- {!!Html::style('css/main.css')!!} -->
        {!!Html::style('css/fontawesome/css/font-awesome.min.css')!!}
        {!!Html::style('css/bootstrap-theme.min.css')!!}
        {!!Html::script('js/jquery.js')!!}
        {!!Html::script('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')!!}
        {!!Html::script('js/refresh.js')!!}


    </head>
    <body>
<div class="container">
        <div class="clear-backend">
            <div class="avatar ease">
                <div>
                        <img class="ease" src="img/admin.png" alt="">
                        <hr>
                    </a>
                </div>
            </div>

            <!-- tab-menu -->



            <input type="radio" class="tab-1" name="tab" checked="checked" >
            <span>HOME</span><i class="fa fa-home"></i>
            <span>EMPRESA</span><i class="fa fa-building"></i>
            <input type="radio" class="tab-2" name="tab" onclick="refresh()">
            <span>Registrar</span><i class="fa fa-book"></i>

            <input id="refresh" type="radio" class="tab-3" name="tab" onclick="refresh()">
            <span>Listado</span><i class="fa fa-list-alt"></i>

            <span>SERVICIOS</span><i class="fa fa-cogs"></i>
            <input type="radio" class="tab-4" name="tab">
            <span>Registrar</span><i class="fa fa-book"></i>
            
            <input type="radio" class="tab-5" name="tab">
            <span>Listado</span><i class="fa fa-list-alt"></i>

            <span>PAGOS</span><i class="fa fa-credit-card"></i>
            <input type="radio" class="tab-4" name="tab">
            <span>Registrar</span><i class="fa fa-book"></i>
            
            <input type="radio" class="tab-5" name="tab">
            <span>Listado</span><i class="fa fa-list-alt"></i>

            <input type="radio" class="tab-5" name="tab">
            <span>Deudores</span><i class="fa fa-usd"></i>

            
            <input type="radio" class="tab-6" name="tab">
            <span>Settings</span><i class="fa fa-cog"></i>

            <!-- tab-top-bar -->
            <div class="top-bar">
            <h2> Bienvenido Admin! </h2>
            </div>

            <!-- tab-content -->
            <div class="tab-content">
                <section class="tab-item-1">
                Bienviendo al panel de administración de yavu.cl!
                Si has olvidado tu contraseña, consulta Restablecer la contraseña de administrador. 
                </section>
                <section class="tab-item-2">
                    <iframe width="800" height="700" src="{!!URL::to('/empresas/create')!!}"></a></li>" frameborder="0" allowfullscreen>
                    </iframe>
                </section>
                <section class="tab-item-3">
                    <iframe width="800" height="600" src="{!!URL::to('/empresas/')!!}"></a></li>" frameborder="0" allowfullscreen>
                    </iframe>
                </section>
                <section class="tab-item-4">
                    <iframe width="800" height="700" src="{!!URL::to('/servicios/create')!!}"></a></li>" frameborder="0" allowfullscreen>
                    </iframe>
                </section>
                <section class="tab-item-5">
                    <iframe width="800" height="600" src="{!!URL::to('/servicios/')!!}"></a></li>" frameborder="0" allowfullscreen>
                    </iframe>
                </section>
                <section class="tab-item-6">
                    <h1>Configuraciones para administrador</h1>
                </section>
                </section>
            </div>
        </div>
    </div>
    <footer class="footer">

      <!-- No hay footer  -->

    </footer>
      
      
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