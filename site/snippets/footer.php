
    <!-- Footer -->
    <footer id="contact_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Contact Info</strong>
                    </h4>
                    <p><?php echo $page->Address()->html() ?></p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> <?php echo $page->phone()->html() ?></li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:name@akinian.com"><?php echo $page->email()->html() ?></a>
                        </li>
                    </ul>
                    <br>
                    <p> </p>
                    <ul class="list-inline">
                       
                        <li>
                            <a href="https://twitter.com/GeorgeAkinian"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                          <li>
                            <a href="https://github.com/gosha50"><i class="fa fa-github fa-fw fa-3x"></i></a>
                        </li>
                     
                    </ul>
                
                      <hr class="small">
                    <p class="text-muted">Copyright &copy; akinian.com 2015</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/assets/js/bootstrap.min.js"></script>

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

</body>

</html>