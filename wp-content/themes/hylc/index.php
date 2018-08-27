<?php get_header(); ?>


  

<div class="section-container">
    <div class="container">


    <?php if(have_posts()): ?>

    <div class="grid-previews">
<?php while(have_posts()) : the_post(); ?>


    <div class="grid-preview">
        
        <a href="<?php the_permalink(); ?>">
        <h3>
            <?php the_title(); ?>    
        </h3>
        </a>
        
        <a href="<?php the_permalink(); ?>">
        <?php the_excerpt(); ?>
        </a>

        <div class="post__meta grid-preview__meta">
            <?php echo get_the_category_list(); ?>

            <b><?php echo get_the_date('n.j.Y'); ?></b>
        </div>
            
    </div>

<?php endwhile; ?>
    <div class="grid-preview empty"></div>
    <div class="grid-preview empty"></div>
    <div class="grid-preview empty"></div>
<?php endif; ?>
    </div>

    <?php sr_pagination(); ?>

    </div>
</div>


    




<?php get_footer(); ?>
