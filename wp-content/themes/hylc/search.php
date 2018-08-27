<?php get_header(); ?>

  <div class="single-post__header">

      <div class="container">
          <h1>Search Results</h1>

          

      </div>
  </div>

    <div class="container main__container">
        
        <div class="main__content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                
                
                
                
                    <div class="search-result">
                        

                        
                        
                        <h2><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink( $post ); ?>" class="continue">Continue Reading</a>

                        

                        
                    </div>

                    

            <?php endwhile; ?>
                


            <?php else : ?>

                    Sorry. There are no posts matching your search term. Please try again.

            <?php endif; ?>
            <?php 
            echo '<div class="pagination">';
            echo paginate_links(array(
                'type' => 'list',
                'prev_text' => '',
                'next_text' => '',
            ));
            echo '</div>';
            ?>        
        </div>
        <div class="main__sidebar">
            
            Sidebar
        </div>
    </div>


    




<?php get_footer(); ?>
