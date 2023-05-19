<?php

/**
 * Block Name: Accordion
 *
 * This is the template that displays the hero block.
 */

// create id attribute for specific styling

?>

<section class="accordion">
    <h1>Accordion</h1>
    <?php

    // Check rows existexists.
    if( have_rows('item') ):

        // Loop through rows.
        while( have_rows('item') ) : the_row();

            // Load sub field value.
            $title = get_sub_field('title');
            $content = get_sub_field('content');
            ?>
            <button class="accordion-button"><?php echo $title ?></button>
            <div class="panel">
                <p><?php echo $content ?></p>
            </div>
            <?php
            
        // End loop.
        endwhile;

    // No value.
    else :
        // Do something...
    endif;
    ?>
</section>