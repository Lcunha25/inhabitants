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

<?php 
    function latestAdv ($cat, $postPP){
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

<?php 
    function productLoop(){
        $query = array( 
			'tax_query' => array(
				'post_type'=>'product',
				'posts_per_page'=>'16',
		));

        $newsPosts = new WP_Query($query);
			 if ( $newsPosts->have_posts() ) : 

				 if ( $newsPosts->is_home() && ! $newsPosts->is_front_page() ) : 
					echo '<header>';
					echo '<h1 class="page-title screen-reader-text">' .  single_post_title() . '</h1>';
					echo '</header>';
				 endif; 

				 /* Start the Loop */ 
				 while ( $newsPosts->have_posts() ) : $newsPosts->the_post(); 
					
					echo '<div>';
					// echo get_post('96');
					// print_r(get_post('96'));
					// print_r(get_the_post_thumbnail());
					// echo get_post();
					// echo '<a><img src=' . get_posts('96') . '></a>';
					// get_template_part( 'template-parts/content', 'product' ); 
					echo '</div>';

				 endwhile; 

				 the_posts_navigation(); 

			 else : 

				 get_template_part( 'template-parts/content', 'none' ); 

             endif; 
    }
?>