


<div class="container">


    <div class="page__container">
        <h1 class="single-post__heading"><?php the_title(); ?></h1>
        

        <div class="column-container">

            <div class="single-post__content column-content">
                
                    <div class="post__meta single-post__meta">
                        <?php echo get_the_category_list(); ?>

                        <b><?php echo get_the_date('n.j.Y'); ?></b>
                    </div>
                    <div class="single-post__body cms">
                    
                    <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post), 'sr-hero' ) ?>

                    <?php if($thumb): ?>
                    <div class="single-post__image">
                    
                    <img src="<?php echo $thumb['0']; ?>" alt="">
                    </div>
                    <?php endif; ?>

                    

                    <?php the_content(); ?>
                    </div>

            </div>

            <div class="column-sidebar">
                
                <h2 class="sidebar__heading">Recent News</h2>
                
                
                <ul class="sidebar__posts">
                <?php $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                );
                $query = new WP_Query( $args ); ?>

                <?php if($query->have_posts()): ?> 

                <?php while($query->have_posts()) : $query->the_post(); ?>

                    <li>
                        <a href="<?php the_permalink(); ?>">
                        <h4><?php echo get_the_date('n.j.Y'); ?></h4>
                        <p><?php the_title(); ?></p>
                        </a>
                    </li>

                <?php endwhile; ?>
                
                <?php endif; ?>
                </ul>

            </div>

        </div>
    </div>

</div>
