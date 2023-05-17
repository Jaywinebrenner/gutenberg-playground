<?php

/**
 * Block Name: Image Slider
 *
 * This is the template that displays the image slider
 */

// get image field (array)
$avatar = get_field('avatar');

// create id attribute for specific styling
$id = 'hero-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>

<div class="hc-image-slider container">
  <h3><?php the_field('title'); ?></h3>
  <div class="slides">
    <?php
    $images = get_field('images');
    $size = 'full'; // (thumbnail, medium, large, full or custom size)
    if ($images) : ?>
      <?php foreach ($images as $image) : ?>
        <img src="<?php echo $image; ?>" alt="">
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</div>


