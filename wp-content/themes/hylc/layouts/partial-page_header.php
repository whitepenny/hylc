<?php
if ( ! empty( $page_image ) /* $page_type == 'image' */ ) :
  $background_options = sr_image_background_page_header( $page_image['ID'] );
?>
<div class="page_header image_header js-background" data-background-options="<?php echo sr_json_options( $background_options ); ?>">
<?php
elseif ( ! empty( $page_icon ) /* $page_type == 'icon' */ ) :
?>
<div class="page_header icon_header">
<?php
else :
?>
<div class="page_header">
<?php
endif;
?>

      <h1 class="single-post__heading"><?php echo sr_format_content( $page_title ); ?></h1>
      <?php if ( ! empty( $page_intro ) ) : ?>
      <div class="page-intro">
        <p><?php echo $page_intro; ?></p>
      </div>
      <?php endif; ?>
     
</div>
