<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        {{ HTML::style('assets/css/bootstrap.min.css') }}
        {{ HTML::script('assets/js/vendor/modernizr-2.6.2.min.js') }}
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <div class="jumbotron">
            <div class="container">
                <img src="" alt=""/>

            <h1>Hello, world!</h1>
            <p>...</p>
            <p><a class="btn btn-primary btn-lg" role="button">Learn more</a></p>
            </div>
        </div>
        <

        {{-- 联系表格开始 --}}
        {{ Form::open(array('url' => $url, 'class' => 'form-horizontal', 'role' => 'form' )) }}
        <div class="form-group">
        {{ Form::label('email', 'E-Mail', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-3">
        {{ Form::email('email', null, array('placeholder'=>'youremail@example.com', 'class' => 'form-control')) }}
        </div>
        </div>

        <div class="form-group">
        {{ Form::label('subject', 'Subject', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-3">
        {{ Form::text('subject', null, array('placeholder' =>  $product, 'class' => 'form-control')) }}
        </div>
        </div>

        <div class="form-group">
        {{ Form::label('message', 'Message', array('class' => 'col-sm-2 control-label')) }}
        <div class="col-sm-3">
        {{ Form::textarea('message', null, array('class' => 'form-control', 'rows' => '5')) }}
        </div></div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
        {{ Form::submit('Send Message', array('class' => 'btn btn-default')) }}
            </div>
        </div>
        {{ Form::close() }}
        {{-- 联系表格结束 --}}


        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="/assets/js/vendor/jquery.min.js"><\/script>')</script>
        {{ HTML::script('assets/js/plugins.js') }}
        {{ HTML::script('assets/js/main.js') }}

    {{--
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    --}}
    </body>
</html>
