<?php get_header() ?>

<div class="upperContainerForContactPage d-flex">
        <div id="sideName" class="d-flex justify-content-center align-items-center">
               <div class="animationUpperConatiner">
                   <div class="nameAndCircleAnimation d-flex justify-content-center oneElementOfTheAnimaiton">
                    <div class="lineForNameAndCircleAnimations"></div>  
                    <div class="mynameAnimation px-4 py-3 font-weight-bold" style="display: none;">
                            Ibrahim Rahhal
                       </div>
                        <div class="circleLogo" >
            
                        </div>
                   </div>

               </div>

            </div>
            
            <div id="sideInfo">
            <?php
		while ( have_posts() ) :
			the_post();
                        the_content();
                endwhile;
		?>
            </div>
</div>

<?php get_footer() ?>