<!DOCTYPE html>
<?php 
  require_once('vendor/cachebuster.php');
    $cachebuster = new DannyNimmo\Cachebuster();
    $cachebuster
        ->setFileRoot(dirname(__FILE__))
        ->setWebRoot('/');

?>



<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- This is the favicon code -->
  <!--   <link rel="shortcut icon" href="favicon.ico" > -->

    <title>Akinian.com</title>
 
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $cachebuster->getUrl('css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $cachebuster->getUrl('css/stylish-portfolio.css'); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
     

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>


    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top"  onclick = $("#menu-close").click(); >akinian</a>
            </li>
            <li>
                <a href="#top" onclick = $("#menu-close").click(); >Home</a>
            </li>
            <li>
                <a href="#about" onclick = $("#menu-close").click(); >About</a>
            </li>
            <li>
                <a href="#services" onclick = $("#menu-close").click(); >Services</a>
            </li>
            <li>
                <a href="#portfolio" onclick = $("#menu-close").click(); >Portfolio</a>
            </li>
            <li>
                <a href="#contact" onclick = $("#menu-close").click(); >Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="header">
        <div class= "text-vertical-center">
            <h1>george akinian</h1>
            <h3>Web Solutions &amp; Software Development</h3>
            <br>
            <a href="#about" class="btn btn-dark btn-lg">Find Out More</a>
        </div>
    </header>

    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>New face in Portland, handcrafting websites to your taste   </h2>
                    <p class="lead">Turning users into raving fanatics and generating consistent leads for your business. <!-- <a target="_blank" href="http://join.deathtothestockphoto.com/">Search..</a>. --></p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2> Web Design Services</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                            </span>
                                <h4> 
                                    <strong> responsive applications </strong>
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-compass fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong> ecommerce platform</strong>
                                </h4>
                                 
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-flask fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong> domain & hosting </strong>
                                </h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-shield fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong> SEO program </strong>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Callout -->
    <aside class="callout">
        <div class="text-vertical-center">
            <h2>Custom Website Request</h2>
        </div>
    </aside>

    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Our Work</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portfolio-item">
                               <!--  <a href="#"> -->
                                    <img class="img-portfolio img-responsive" src="<?php echo $cachebuster->getUrl("img/portfolio-1.jpg"); ?>">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                               <!--  <a href="#">
 -->                                    <img class="img-portfolio img-responsive" src="<?php echo $cachebuster->getUrl("img/portfolio-2.jpg"); ?>">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <!-- <a href="#"> -->
                                    <img class="img-portfolio img-responsive" src="<?php echo $cachebuster->getUrl("img/portfolio-3.jpg"); ?>">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <!-- <a href="#"> -->
                                    <img class="img-portfolio img-responsive" src="<?php echo $cachebuster->getUrl("img/portfolio-4.jpg"); ?>">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                   <!--  <a href="#" class="btn btn-dark">View More Items</a> -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Call to Action -->
    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>This site is so pretty you want to look at it again!</h3>
                    <a href="#" class="btn btn-lg btn-light">Top Page!</a> or
                    <a href="#contact_2" class="btn btn-lg btn-dark">Contact!</a>
                </div>
            </div>
        </div>
    </aside>

    <!-- Map -->
    <section id="contact" class="map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=9120%20NE%20Vancouver%20Mall%20Loop%2C%20Vancouver%2C%20WA%2C%20United%20States&key=AIzaSyDnTAHg5u8PZl-Ahh59oU3ZVmyAslMd9WA"></iframe>
        <br />
        <small>
            <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,9120+NE+Vancouver+Mall+Loop,+Vancouver,+WA+98662&amp;aq=0&amp;oq=twitter&amp;sll=45.6599517,-122.5789116&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,9120+NE+Vancouver+Mall+Loop,+Vancouver,+WA+98662&amp;t=m&amp;z=15&amp;iwloc=A"></a>
        </small>
        </iframe>
       <!-- https://www.google.com/maps/place/9120+NE+Vancouver+Mall+Loop,+Vancouver,+WA+98662/@45.6599517,-122.5789116,17z/data=!3m1!4b1!4m2!3m1!1s0x5495afe938cce8d3:0xf1b7084a7c2a1a10 -->
    </section>
    
    <!-- Footer -->
    <footer id="contact_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Contact Info</strong>
                    </h4>
                    <p>9120 Northeast Vancouver Mall Loop,<br>Vancouver, WA 98662</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (360) 609-9987</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:hello@akinian.com">hello@akinian.com</a>
                        </li>
                    </ul>
                    <br>
                    <p> </p>
                    <ul class="list-inline">
                        <li>
                         <a href="https://www.linkedin.com/profile/edit?trk=nav_responsive_sub_nav_edit_profile/"><i class="fa fa-linkedin fa-fw fa-3x">
                         </i>
                        <li>
                            <a href="https://twitter.com/GeorgeAkinian"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                         <li>
                            <a href="https://www.facebook.com/George.Akinian"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="https://dribbble.com/"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                        
                         <li>
                            <a href="https://github.com/gosha50"><i class="fa fa-github fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="https://www.pinterest.com/GeorgeAkinian/"><i class="fa fa-pinterest fa-fw fa-3x"></i></a>
                        </li>
                         <li>
                            <a href="https://instagram.com/georgeakinian/"><i class="fa fa-instagram fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
            

           <!-- Rotating Icons -->   
<i class="fa fa-spinner fa-spin"></i>
<i class="fa fa-circle-o-notch fa-spin"></i>
<i class="fa fa-refresh fa-spin"></i>
<i class="fa fa-cog fa-spin"></i>
                    
                      <hr class="small">
                    <p class="text-muted">Copyright &copy; akinian.com 2015</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Font -->
    <script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Source+Sans+Pro:300,400,700,300italic,400italic,700italic:latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); </script>
  <script type="text/javascript">
    (function() {
        var css = document.createElement('link');
        css.href = '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css';
        css.rel = 'stylesheet';
        css.type = 'text/css';
        document.getElementsByTagName('head')[0].appendChild(css);
    })();
</script>
    <!-- jQuery -->
    <script src="<?php echo $cachebuster->getUrl('js/jquery.js'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $cachebuster->getUrl('js/bootstrap.min.js'); ?>"></script>

    <!-- Custom Theme JavaScript -->
    <script>
    // Closes the sidebar menu
    $("#menu-close").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar-wrapper").toggleClass("active");
    });

    // Scrolls to the selected menu item on the page
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>
    <!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-62537419-1', 'auto');
ga('send', 'pageview');

</script>
<!-- End Google Analytics -->
    

</body>

</html>
