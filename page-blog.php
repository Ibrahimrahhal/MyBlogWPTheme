<?php
get_header();

?>

<div>
<div class="spaceHero" style="background-image:url('<?php  
echo (get_template_directory_uri() . '/Assets/Images/blogPageHero.png');
?>
');">
<div class="logoBlog">
</div>

<h1 class="allHeadingContainerBlog">
The Universe is Made of Stories,
<span class="allHeadingContainerBlogSecondLine">
So Here’s Mine
</span>
</h1>

</div>
<div style="height:15px; background-color:#121212;">
</div>
<div class="swiper-container">
        <div class=" swiper-wrapper postsCardsContainerBlog px-3 py-2">
        <?php
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => -1
        );

        $query = new WP_Query($args);
        if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class=" swiper-wrapper topLevelCardContainer mt-4 mx-4">
        <div class="smallCircleForReadtime">
            8
            <span>
            Min
            </span>
        </div>
        <div>
        <?php
        the_post_thumbnail( 'wordpress-thumbnail' );
        ?>
        <h6 class="postTitleBlogPage my-3">
        <?php 
        the_title();
        ?>
        </h6>
        </div>

        </div>
        <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
        </div>
        <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

</div>
<?php 
get_footer();

?>