
    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Our Work</h2>
                    <hr class="small">
                    <div class="row">
                        <?php foreach ($page->our_work_images()->toStructure() as $item): 
                        // toStructure makes structure a kirby object which makes it possible to use kirbies channing syntax http://getkirby.com/docs/cheatsheet/field-methods/toStructure ?>  

                        <div class="col-md-6">
                            <div class="portfolio-item">
                                <a href="#">

                                     <img class="img-portfolio img-responsive" src="<?php echo thumb( $page->file($item->image()), 
                                     array('width' => 458, 'height' =>230, 'crop' =>true))->url() ?>">  
                                </a>
                                <h5> <?php echo $item->image_name()->html() ?> </h5>
                            </div>
                        </div>
                           <?php endforeach ?>
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
                    <h3><?php echo $page->upsite()->html() ?></h3>
                    <a href="#" class="btn btn-lg btn-light">Top Page!</a> or
                    <a href="#contact_2" class="btn btn-lg btn-dark">Contact!</a>
                </div>
            </div>
        </div>
    </aside>

   