<head>
    <title>{!! $title !!} - {!! Config::get('customConfig.names.siteName')!!}</title>
    <meta charset="utf-8">
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    {!! Html::style('frontend/css/bootstrap.min.css') !!}

    {!! Html::style('frontend/css/bootstrap.min.css') !!}
    {!! Html::style('frontend/css/main.css', ['id' => 'color-switcher-link']) !!}
    {!! Html::style('frontend/css/animations.css') !!}
    {!! Html::style('frontend/css/fonts.css') !!}
    <!-- only one script file  -->
    {!! Html::script('frontend/js/vendor/modernizr-2.6.2.min.js') !!}

    <!--[if lt IE 9]>
        <script src="js/vendor/html5shiv.min.js"></script>
        <script src="js/vendor/respond.min.js"></script>
    <![endif]-->

</head>