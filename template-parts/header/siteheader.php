<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <?php
            wp_nav_menu(
                array(
                    'menu'=> 'primary',
                    'container' => '',
                    'theme_location' => 'primary',
                    'items_wrap' => '<ul id="" class="navbar-nav me-auto mb-2 mb-lg-0"">%3$s</ul>'
                )
            );
            ?>

<!--            <form class="d-flex">-->
<!--                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
<!--                <button class="btn btn-outline-success" type="submit">Search</button>-->
<!--            </form>-->
        </div>
    </div>
</nav>
