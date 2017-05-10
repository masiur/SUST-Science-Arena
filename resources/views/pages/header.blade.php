<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title }} || SUST Science Arena</title>
        <meta name="description" content="SUST Science Arena(SSA) is one of the science based organizations of SUST. SSA is committed to popularize science among young people.">
        <meta name="keywords" content="SSA,SUST,Science,Arena, SUST Science Arena, Science Arena">
        <meta name="author" content="SUST Science Arena">

        <!-- Developers
        Masiur Rahman Siddiki
        mrsiddiki AT gmail DOT com
        CSE'12, SUST.

        &&

        Mithun Das
        mithun.das227 AT gmail DOT com
        CSE'12, SUST. -->

        <!-- Bootstrap -->
        {!! Html::style('frontend/bootstrap/css/bootstrap.min.css') !!}
        <!-- font awesome for icons -->
        {!! Html::style('frontend/font-awesome/css/font-awesome.min.css') !!}
        <!-- flex slider css -->
        {!! Html::style('frontend/css/flexslider.css',['media' => 'screen']) !!}
        <!-- animated css  -->
        {!! Html::style('frontend/css/animate.css',['media' => 'screen']) !!}
        <!-- Revolution Style-sheet -->
        {!! Html::style('frontend/rs-plugin/css/settings.css') !!}
        {!! Html::style('frontend/css/rev-style.css') !!}
        <!--owl carousel css-->
        {!! Html::style('frontend/css/owl.carousel.css',['media' => 'screen']) !!}
        {!! Html::style('frontend/css/owl.theme.css',['media' => 'screen']) !!}
        <!--mega menu -->
        {!! Html::style('frontend/css/yamm.css') !!}
        <!--cube css-->
        {!! Html::style('frontend/cubeportfolio/css/cubeportfolio.min.css') !!}
        <!-- custom css-->
        {!! Html::style('frontend/css/style.css',['media' => 'screen']) !!}
        @yield('style')
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js') !!}</script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') !!}</script>
        <![endif]-->
        <style type="text/css">
            .masiur-navlogo-pos {
                position: absolute;
                left: 12%;
                top: 24%;
            }
            .masiur-developers-corner-name {
                font-size: large;
                font-family: cursive;
            }
            .masiur-developers-corner-text {
                font-size: large;
                font-family: inherit;
            }
            .navbar-brand img {
                width: 80px;
                height: auto;
                margin-top: -17px !important;
            }
        </style>
        
    </head>