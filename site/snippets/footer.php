
    <!-- Footer -->
    <footer id="contact_2">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Contact Info</strong>
                    </h4>
                    <p><?php echo $page->Address()->html() ?><br><?php echo $page->City()->html() ?>, <?php echo $page->State()->html() ?>  <?php echo $page->Zip()->html() ?>, <?php echo $page->Country()->html() ?>.</p>

                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> <?php echo $page->phone()->html() ?></li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:name@akinian.com"><?php echo $page->email()->html() ?></a>
                        </li>
                    </ul>
                    <br>
                    <p> </p>
                    <ul class="list-inline">
                       

                        <?php foreach ($page->accounts()->toStructure() as $account): // toStructure makes structure a kirby object which makes it possible to use kirbies chaining syntax http://getkirby.com/docs/cheatsheet/field-methods/toStructure ?>  

                            <li>
                                <a href="<?php echo $account->url()->html() ?>">
                                    <i class="fa fa-<?php echo $account->social()->html() ?> fa-fw fa-3x"></i>
                                </a>
                            </li>

                        <?php endforeach; ?>


    
                     
                    </ul>
                
                      <hr class="small">
                    <p class="text-muted">Copyright &copy; <?php echo $page->copyright()->html() ?></p>
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
