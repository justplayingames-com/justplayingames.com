<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0, minimal-ui"/>
        <title>@yield('title')</title>
        <script src="//cdn.jsdelivr.net/phaser/2.6.2/phaser.min.js"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style media="screen" type="text/css">
            html, body {
                margin: 0 !important
                height: 100%
            };
            
            @yield('css')
        </style>


    </head>
    <body>

    <div class="flex-container full-height">
    <div id="rotate" class="flex-center" style="display: none">
        <div class="jumbotron text-center">
        <h1 class="margin-bottom-md">Rotate your device</h1>
        <p><i class="fa fa-fw fa-4x fa-mobile text-danger"></i></p>
        <p><i class="fa fa-fw fa-4x fa-rotate-left"></i></p>
        <p><i class="fa fa-fw fa-4x fa-rotate-270 fa-mobile text-success"></i></p>
        </div>
    </div>

    <div id="game" class="flex-center"></div>
    </div>

    @yield('js')
    </body>
</html>
