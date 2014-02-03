<!DOCTYPE html>
<html>
    <head>
        <title>visualCaptcha - A cool visual drag-and-drop captcha jQuery plugin by emotionLoop - Demo</title>
        <meta charset="utf-8">
        <meta name="keywords" content="visualcaptcha, visual, jquery captcha, captcha, mobile-friendly, better captcha, fancy captcha, captcha alternative, jquery, jquery ui, drag, draggable, demo, retina, accessibility">
        <meta name="description" content="A cool visual drag-and-drop captcha jQuery plugin. Mobile-friendly. Retina-ready. Accessible.">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- favicon.ico and apple-touch-icon.png  -->
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png" />
        <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png" />
        
        <!-- CSS -->
        <link href="css/demo.css" media="all" rel="stylesheet">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
      <div id="wrap">
        <div class="container">
          <a href="/" target="_blank" id="logo"><img src="img/logo.png" alt="visualCaptcha"></a>
          <br />

          <div class="row">
            <!-- Form one -->
            <div class="col-lg-6">
              <div class="pre-captcha-wrapper">
                <div class="captcha-wrapper">
                  <h1>Fill in the form and submit it</h1>

                  <form name="frm-one" id="frm-sample" action="/try" method="post">
                    <input class="form-control" type="text" placeholder="Name" value="" />

                    <div class="captcha-status"></div>
                    <div data-captcha data-namespace="one"></div>

                    <a id="check-is-filled" class="check-captcha">Check if visualCaptcha is filled</a>
                    <button type="submit" name="submit-bt" class="submit">Submit form</button>
                  </form>
                </div>
              </div>
            </div>

            <!-- Form two -->
            <div class="col-lg-6">
              <div class="pre-captcha-wrapper">
                <div class="captcha-wrapper">
                  <h1>Fill in the form and submit it</h1>

                  <form name="frm-two" id="frm-sample" action="/try" method="post">
                    <input class="form-control" type="text" placeholder="Name" value="" />

                    <div class="captcha-status"></div>
                    <div data-captcha data-namespace="two"></div>

                    <a id="check-is-filled" class="check-captcha">Check if visualCaptcha is filled</a>
                    <button type="submit" name="submit-bt" class="submit">Submit form</button>
                  </form>
                </div>
              </div>
            </div>

            <!-- Bottom links -->
            <div class="col-xs-12 links">
              <p class="txt-center">
                <br />
                <a href="/" target="_blank"><b>visualCaptcha</b></a> by <a href="http://emotionloop.com/" target="_blank"><b>emotionLoop</b></a>
                <br />
                View other demos:
                <a href="http://node.demo.visualcaptcha.net/"><strong>Node.js</strong></a> |
                <a href="http://ruby.demo.visualcaptcha.net/"><strong>Ruby</strong></a> |
                <a href="http://meteor.demo.visualcaptcha.net/"><strong>Meteor</strong></a>
                <br />
                You can get it at <a href="https://github.com/emotionLoop/visualCaptcha" target="_blank"><b>GitHub</b></a>
              </p>
            </div>
          </div>
        </div>
      </div>

      <script src="/js/jquery.min.js"></script>
      <script src="/js/visualcaptcha.jquery.js"></script>
      <script src="/js/main.js"></script>

      <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-43214420-4', 'visualcaptcha.net');
        ga('send', 'pageview');
      </script>
    </body>
</html>

