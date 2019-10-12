<?php 
get_header();

?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div id="heroArea">
<main class="mainBlogContent mt-5">
    <h1 class="TitlaMainBlog">
		<?php 
			the_title();
		?>
    </h1>
    <h1 class=" TitlaMainBlog TitlaMainBlogAR" style="text-align:right;">
		<?php 
			the_field('name_in_arabic');
		?>
    </h1>

    <h5 class="ml-3 smallTileMainBlog">
        <?php 
        // the_field('smallTitle'); 
        ?>
    </h5>
    <figure>  
    <!-- <img src="./Assets/Images/deadpool.jpg" class="mt-4" width="100%" height="auto" alt="" /> -->
<?php
    the_post_thumbnail();
?>
            <figcaption class="text-center">Hot Photo of Deadpool</figcaption>

    </figure>
    <div class="blogBody">
			<?php
					the_content();
			?>
    </div>

    <div>
        <div class="lineBreak w-75 mx-auto"></div>
        <div class="sectionForAuthorNameAndSocialMedia d-flex align-items-center justify-content-between">
            <div class="my-3 d-flex align-items-center" >
                <div class="writerIcon mx-2">

                </div>
                <div>
                    <div class="writtenByWord">
                        Written By
                    </div>
                    <div class="writerName">
                        Ibrahim Rahhal
                    </div>
                    <em class="writerPostion">
                        Full Stack & Mobile Developer
                    </em>
                </div>
            </div>
            <div class="socialMediaIconsAndClap d-flex align-items-center">
                <div class="clapButton d-flex align-items-center justify-content-center">
                    <div class="clapNumbers">
                        5
                    </div>
                    <svg class="clapIcon" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                    <g>
                        <g>
                            <g>
                                <path d="M511.67,313.812c-0.051-0.307-0.119-0.606-0.205-0.896l-1.485-5.257c-6.093-22.724-44.322-44.8-67.046-38.707
                                    c-4.548,1.22-7.253,5.897-6.033,10.453c1.22,4.548,5.862,7.262,10.453,6.033c13.602-3.652,42.496,13.047,46.174,26.761
                                    l1.374,4.838c0.043,0.427,0.026,0.7-0.026,0.845c-3.934,1.263-22.093,7.066-32.188,9.771
                                    c-10.351,2.773-21.154,6.332-32.41,10.377c-4.326-31.753-13.116-64.683-26.163-113.382l-30.925-115.388
                                    c-6.912-25.796-29.79-36.198-47.94-31.326c-7.356,1.971-13.995,6.417-18.935,12.553l-6.281-23.467
                                    c-6.827-25.455-30.302-36.036-48.094-31.283c-7.433,1.988-14.319,6.886-19.362,13.688c-3.755-7.578-9.566-13.79-16.905-17.937
                                    c-9.702-5.487-21.146-6.869-32.213-3.9c-11.102,2.97-20.326,9.847-25.975,19.371c-1.946,3.294-3.413,6.801-4.378,10.445
                                    c-0.503-0.299-1.015-0.589-1.536-0.87c-9.284-4.975-20.582-6.05-31.846-3.038c-11.008,2.953-20.207,10.01-25.907,19.874
                                    c-5.7,9.873-7.219,21.376-4.258,32.375l23.509,87.782c-5.623,7.185-17.775,24.533-24.465,48.162
                                    c-1.289,4.531,1.357,9.25,5.888,10.53c0.777,0.222,1.553,0.333,2.33,0.333c3.721,0,7.142-2.458,8.209-6.212
                                    c3.575-12.672,9.054-23.313,13.85-31.138l25.882,96.606c1.22,4.557,5.854,7.262,10.453,6.033
                                    c4.557-1.212,7.253-5.897,6.033-10.445l-55.211-206.071c-1.766-6.596-0.862-13.5,2.56-19.422
                                    c3.413-5.914,8.934-10.155,15.539-11.921c7.049-1.903,13.918-1.331,19.371,1.596c5.777,3.098,9.924,8.798,11.981,16.503
                                    l46.387,173.099c1.22,4.548,5.914,7.27,10.445,6.033c4.557-1.22,7.253-5.897,6.033-10.453l-48.58-181.342
                                    c-1.869-6.98-1.024-13.995,2.389-19.755c3.362-5.666,8.943-9.779,15.718-11.597c6.716-1.801,13.611-0.99,19.396,2.278
                                    c5.862,3.311,10.103,8.926,11.947,15.821l48.589,181.342c1.22,4.548,5.905,7.279,10.453,6.033
                                    c4.557-1.22,7.253-5.897,6.033-10.453L242.341,82.473c-4.267-15.915,5.581-27.989,14.02-30.259
                                    c8.269-2.219,22.656,2.347,27.187,19.217l41.958,156.612c1.22,4.557,5.854,7.279,10.453,6.033
                                    c4.548-1.212,7.253-5.897,6.033-10.445l-26.462-98.927c-2.492-9.301-0.35-16.128,1.886-20.216
                                    c2.765-5.06,7.228-8.73,12.245-10.078c10.052-2.662,22.895,3.797,27.042,19.268l30.933,115.405
                                    c25.54,95.343,34.509,128.836,24.841,214.187l-185.532,49.707C185.62,415.009,96.694,343.883,45.699,314.443
                                    c-9.088-5.248-25.225-15.616-28.612-17.801c0.034-0.162,0.102-0.418,0.247-0.785l2.637-4.42
                                    c3.226-5.581,12.561-11.136,23.791-14.148s22.101-2.867,27.674,0.35l40.004,23.108c4.087,2.347,9.301,0.947,11.657-3.132
                                    c2.355-4.079,0.964-9.301-3.123-11.657l-40.004-23.1c-9.591-5.538-24.781-6.306-40.627-2.048
                                    c-15.855,4.25-28.621,12.51-34.082,21.982l-2.859,4.787c-0.162,0.265-0.307,0.538-0.435,0.819
                                    c-3.738,8.158-2.082,16.23,4.437,21.589c0.247,0.205,0.512,0.401,0.785,0.572c0.794,0.512,19.465,12.587,29.978,18.662
                                    c50.458,29.124,139.23,100.258,177.442,177.084c1.331,3.191,4.471,5.24,7.885,5.24c0.683,0,1.382-0.085,2.074-0.256
                                    c0.085-0.026,0.162-0.043,0.239-0.06l197.683-52.975c3.371-0.896,5.854-3.763,6.263-7.228
                                    c4.702-39.305,5.769-67.985,3.448-95.573c12.271-4.523,23.842-8.354,34.901-11.315c11.733-3.149,32.896-9.975,33.792-10.266
                                    c0.307-0.102,0.606-0.222,0.905-0.35C509.477,330.034,513.172,322.661,511.67,313.812z"/>
                                <path d="M103.307,29.874c1.493,2.995,4.506,4.719,7.637,4.719c1.28,0,2.586-0.29,3.806-0.896
                                    c4.216-2.108,5.931-7.236,3.823-11.452l-8.542-17.067c-2.099-4.215-7.219-5.939-11.443-3.814
                                    c-4.215,2.108-5.931,7.228-3.823,11.443L103.307,29.874z"/>
                                <path d="M299.992,25.684c8.422-9.079,20.25-9.779,27.085-5.845c7.561,4.369,13.943,18.569,5.726,32.836l-0.017,0.026
                                    c-2.355,4.079-0.956,9.293,3.123,11.656c4.087,2.355,9.301,0.947,11.657-3.123c0.008-0.009,0.017-0.026,0.017-0.034
                                    l12.783-22.135c7.296-12.646,22.332-16.674,34.97-9.378c12.843,7.424,16.785,22.135,9.378,34.978l-4.079,7.066l-13.082,19.755
                                    c-2.603,3.925-1.527,9.224,2.406,11.827c1.451,0.956,3.089,1.417,4.702,1.417c2.765,0,5.487-1.348,7.125-3.823l13.184-19.908
                                    c0.051-0.077,0.051-0.171,0.102-0.247c0.043-0.077,0.119-0.111,0.171-0.196v-0.009l0.009-0.009
                                    c9.438-16.299,24.235-15.505,34.944-9.31c5.914,3.413,10.155,8.926,11.921,15.531c1.775,6.605,0.862,13.5-2.551,19.422
                                    l-48.111,83.328c-2.355,4.079-0.947,9.301,3.123,11.656c1.348,0.777,2.816,1.143,4.267,1.143c2.944,0,5.811-1.527,7.398-4.267
                                    l48.094-83.328c5.7-9.865,7.219-21.359,4.267-32.367c-2.953-11.017-10.01-20.215-19.874-25.899
                                    c-11.093-6.417-22.758-7.885-33.203-4.898c0.094-14.609-7.578-28.501-21.658-36.642c-18.091-10.436-39.885-6.536-53.094,8.405
                                    c-3.115-7.893-8.499-14.404-15.172-18.253c-12.868-7.424-33.536-6.707-48.12,9.028c-3.208,3.456-3.004,8.849,0.452,12.058
                                    C291.39,29.344,296.775,29.14,299.992,25.684z"/>
                                <path d="M53.703,66.226c1.664,1.664,3.849,2.5,6.033,2.5c2.185,0,4.369-0.836,6.033-2.5c3.337-3.337,3.337-8.73,0-12.066
                                    L48.702,37.093c-3.337-3.337-8.73-3.337-12.066,0c-3.336,3.337-3.336,8.73,0,12.066L53.703,66.226z"/>
                                <path d="M34.136,119.926h17.067c4.71,0,8.533-3.823,8.533-8.533s-3.823-8.533-8.533-8.533H34.136
                                    c-4.71,0-8.533,3.823-8.533,8.533S29.426,119.926,34.136,119.926z"/>
                                <path d="M34.136,179.659c0.887,0,1.801-0.137,2.697-0.435l25.6-8.533c4.471-1.493,6.895-6.332,5.402-10.795
                                    c-1.493-4.471-6.315-6.895-10.795-5.402l-25.6,8.533c-4.471,1.493-6.886,6.332-5.402,10.795
                                    C27.233,177.398,30.561,179.659,34.136,179.659z"/>
                            </g>
                        </g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    </svg>
                    
                </div>
                <div class="verLineSepForSocialMedia mx-3"></div>
                <div class="socialMediaIconForSharing d-flex flex-column align-items-center">
                        <i class="fab fa-facebook-square mx-2"></i>
                        <i class="fab fa-twitter-square mx-2"></i>
                        <i class="fab fa-linkedin mx-2"></i>
                </div>
            </div>
        </div>
        <div class="lineBreak lineBreakLast w-75 mx-auto"></div>
    </div>


    <div class="my-5">
        
        <h5> <i class="fas fa-star mx-1" style="font-size: 1.4rem"></i>Also By Me</h5>

        <div class="containerForMoreBlogs mt-5 d-flex justify-content-center align-items-center">
        <?php
 
                // The Query
                $the_query = new WP_Query( array('post_type'=>'post','posts_per_page'=>'3') );
                
                // The Loop
                if ( $the_query->have_posts() ):
                    while ( $the_query->have_posts() ):
                        $the_query->the_post();
                ?>
            <a href="<?php the_permalink(); ?>" class="upperContainerForBlogThumb shadow mx-2 rounded px-4 py-5">
            <div class="postThumbList" style="background-image:url('<?php
                echo get_the_post_thumbnail_url();
                ?>');"> 
    </div>
                <h6 class="titleOfSuggestedBlog font-weight-bold my-2"><?php the_title(); ?></h6>
                <div class="extasLikeClapAndReadTime mt-4 d-flex align-items-center justify-content-between">
                <div class="readingTimeInMiniBlog px-2 py-1 rounded">
                <?php 
                the_field('reading_time'); ?>
                Min
                </div>
                <div>
                    20 <i class="fas fa-heart"></i>
                </div>
                </div>
            </a>
                    <?php  endwhile; endif;?>

        </div>
    </div>
</main>
<?php endwhile; ?>
<?php endif; ?>  
</div>
<?php 
get_footer();

?>