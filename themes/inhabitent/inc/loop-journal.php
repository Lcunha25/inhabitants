<?php 
    function displayPost ($cat, $postPP){
        $query = "cat=$cat&posts_per_page=$postPP";

        $newsPosts = new WP_Query($query);
			 if ( $newsPosts->have_posts() ) : 

				 if ( $newsPosts->is_home() && ! $newsPosts->is_front_page() ) : 
					echo '<header>';
					echo	'<h1 class="page-title screen-reader-text"> single_post_title(); </h1>';
					echo '</header>';
				 endif; 

				 /* Start the Loop */ 
				 while ( $newsPosts->have_posts() ) : $newsPosts->the_post(); 

					 get_template_part( 'template-parts/content' ); 

				 endwhile; 

				 the_posts_navigation(); 

			 else : 

				 get_template_part( 'template-parts/content', 'none' ); 

             endif; 
    }
?>