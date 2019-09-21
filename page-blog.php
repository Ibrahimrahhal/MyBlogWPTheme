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
<div style="height: 10vh; background-color:#121212;">
<?php
if ( has_nav_menu( 'blog' ) ) {
     wp_nav_menu( array(
         'menu'=>'blog',
         'menu_class'=>'blogPageMenu',

     ) );
} ?> 
</div>
<div class="w-100 mt-5">
<h1 class="ml-3 mt-4 font-bitter font-weight-bold">
So What Are You Waiting For,
</h1>
<h3 class="ml-3 ">
Choose You Today's Fast Read.
</h3>
<div class="w-100 d-flex align-items-center px-2 ">
<div class="swiper-container mx-0" >
        <div class=" swiper-wrapper postsCardsContainerBlog py-2">
        <?php
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => -1
        );

        $query = new WP_Query($args);
        if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="swiper-slide topLevelCardContainer mt-4 transition3s scaleOnHover">
        <div class="smallCircleForReadtime">
            8
            <span>
            Min
            </span>
        </div>
        <div>
        <div class="postThumb" style="background-image:url('<?php

        echo get_the_post_thumbnail_url(null, 'wordpress-thumbnail' );

        ?>');">
        </div>
        <h6 class="postTitleBlogPage my-3">
        <?php 
        the_title();
        ?>
        </h6>
        </div>

        </a>
        <?php endwhile; else : ?>
            <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>
        </div>
        </div>
        <div class="h-100 w-20 d-flex align-items-center justify-content-center">
            <div class="user-select-none nextIconButton cursor-pointer transition3s scaleOnHover d-flex align-items-center justify-content-center" onclick="goNextSlide()">
                <img src="<?php echo get_template_directory_uri().'/Assets/Images/arrow.svg' ;?>" height="20px" width="20px" />
            </div>
        </div>
    </div>
</div>
</div>
<?php 
get_footer();

?>