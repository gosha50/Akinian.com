
    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-bars"></i></a>
         <ul class="sidebar-nav">

            <li>
                <a href="<?php echo $page->Items()->url() ?>" onclick = $("#menu-close").click(); ><?php echo $page->Items()->toStructure()->html() ?></a>
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



