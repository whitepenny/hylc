


<div class="container">


    <div class="page__container">
        

        <div class="column-container">

            <div class="single-post__content column-content">
                
                   
                    <div class="single-post__body cms">
                    <?php the_content(); ?>
                    </div>

            </div>

            <div class="column-sidebar subnav">
               <?php $args = array(
                 'menu' => 'main-menu',
                 'depth'          => 2
               );

               wp_nav_menu( $args );

               ?>
                
                
                

            </div>

        </div>
    </div>

</div>
