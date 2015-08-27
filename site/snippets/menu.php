
    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-bars"></i></a>
         <ul class="sidebar-nav">

            <?php foreach ($page->menu_items()->toStructure() as $item): ?>
                <li>
                    <a href="<?php  echo $item->url() ?>" onclick = $("#menu-close").click(); ><?php  echo $item->label() ?></a>
                </li>

            <?php endforeach ?>
        </ul>
    </nav>


 