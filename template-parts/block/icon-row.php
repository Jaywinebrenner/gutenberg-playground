<?php
/**
 * Block Name: Icon Row
 *
 * This is the template that displays the icon row block.
 */
?>

 <div class="hc-icon-row container">
  <div class="icons">
    <?php
    $images = get_field('icons');
    $size = 'full'; // (thumbnail, medium, large, full or custom size)
    if ($images) : ?>
      <?php foreach ($images as $image) : ?>
        <img src="<?php echo $image; ?>" alt="">
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</div>