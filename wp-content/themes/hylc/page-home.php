<?php
/*
Template Name: Home
*/

get_header(); ?>



<div class="feature container">
    
        <div class="feature__image">
            <?php $featureImage = get_field('feature_image'); ?>

            <img src="<?php echo $featureImage['url']; ?>" alt="">
        </div>

        <div class="feature__content">
            <?php the_field('feature_content') ?>
        </div>
        
    
</div>


<?php $args = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
);
$query = new WP_Query( $args ); ?>

<?php if($query->have_posts()): ?> 
<div class="section-container">
    <div class="container">


    <h2 class="section-heading">
        News & Events
    </h2>

    <div class="grid-previews">
<?php while($query -> have_posts()) : $query->the_post(); ?>


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
    </div>

    <div class="section-footer">
        <a href="<?php echo get_post_type_archive_link( 'post' ); ?>" class="btn btn-primary">All News & Events</a>
    </div>

    </div>
</div>
<?php endif; ?>


<?php $prefooterImage = get_field('prefooter_image', 'options'); ?>


<div class="prefooter" style="background-image:linear-gradient( rgba(0,0,0,.7), rgba(0,0,0,.7) ), url(<?php echo $prefooterImage['url']; ?>);">
    <div class="prefooter__content">
        <blockquote>
            <h3>
                <?php the_field('prefooter_quote', 'options'); ?>
            </h3>
        </blockquote>
        <cite>
            <?php the_field('prefooter_cite', 'options'); ?>
        </cite>
        
        <?php $prefooterButton = get_field('prefooter_button', 'options') ?>
        <div>
            <a href="<?php echo $prefooterButton['url']; ?>" class="btn btn-primary"><?php echo $prefooterButton['title']; ?></a>
        </div>
    </div>
</div>

<?php get_footer();  ?>
