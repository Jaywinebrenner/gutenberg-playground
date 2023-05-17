<?php

/**
 * Block Name: Hero
 *
 * This is the template that displays the hero block.
 */

// create id attribute for specific styling
$id = 'hero-' . $block['id'];
?>

<div id="<?php echo $id; ?>" class="hc-hero" style="background-image: url('<?php the_field('background'); ?>');">
  <div class="hc-hero__content container">
    <h5><?php the_field('eyebrow'); ?></h5>
    <h1><?php the_field('title'); ?></h1>
    <p><?php the_field('content'); ?></p>
  </div>
</div>