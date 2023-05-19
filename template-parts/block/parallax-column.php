<?php

/**
 * Block Name: Parallax Column
 *
 * This is the template that displays the hero block.
 */

// create id attribute for specific styling
$id = 'parallax-column-' . $block['id'];
?>

<div class="parallax-column">
    <div class="title-wrapper">
        <h1><?php the_field('title'); ?></h1>
    </div>
    <div class="parallax-column-wrapper">
        <div class="parallax-column-wrapper__left">
            <h2><?php the_field('left_column'); ?></h2>
        </div>
        <div class="parallax-column-wrapper__right">
    
        <?php
        $images = get_field('right_column');
    
        if ($images) : ?>
          <?php foreach ($images as $image) : ?>
            <div class="image-wrapper">
                <img src="<?php echo $image; ?>" alt="">
            </div>
          <?php endforeach; ?>
        <?php endif; ?>
        </div>
    </div>
</div>