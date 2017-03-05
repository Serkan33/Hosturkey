<html>
    <head>
        <title> @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="/css/bootstrap.css" media="screen">
        <link rel="stylesheet" href="/css/bootstrap.min.css" media="screen">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/footer.css">
        <link rel="shortcut icon" href="../favicon.ico">
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/cs-select.css" />
        <link rel="stylesheet" type="text/css" href="css/cs-skin-underline.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <script src="/js/jquery.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/js/script.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
        <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
        <script>
            //paste this code under head tag or in a seperate js file.
            // Wait for window load
            $(window).load(function() {
                // Animate loader off screen
                $(".se-pre-con").delay(800).fadeOut("slow");
            });



        </script>
        @yield('impor')


    </head>
    <body>
    <div class="se-pre-con"></div>
      @include('MasterBlade.header')
            @yield('content')
    @include('Pages.footer')

    </body>
</html>
