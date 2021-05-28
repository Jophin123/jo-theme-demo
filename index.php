
<?php get_header(); ?>
<?php if(have_posts()):while (have_posts()):the_post();?>
    <div>
    <header>
        <?php the_title()?>
    </header>
    <div class="content">
        <?php the_content() ?>
    </div>
<?php endwhile;else:?>
    <div class="content">
        <?php esc_html_e('no content')?>
    </div>
    </div>
<?php endif; ?>
<?php get_sidebar() ?>
<?php get_footer(); ?>
