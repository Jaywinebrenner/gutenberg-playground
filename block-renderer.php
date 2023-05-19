<?php
// Load block parts

add_action('acf/init', 'init_acf_fields');
function init_acf_fields()
{
    // check function exists
    if (function_exists('acf_register_block')) {

        // register hero block
        acf_register_block(array(
            'name'              => 'hero',
            'title'             => __('Hero'),
            'description'       => __('Custom Hero'),
            'render_callback'   => 'block_renderer',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'align'           => 'full',
            'supports'        => array(
                'align' => array('full'),
            ),
            'keywords'          => array('hero', 'masthead'),
        ));

        // register parallax column
        acf_register_block(array(
            'name'              => 'parallax-column',
            'title'             => __('Parallax Column'),
            'description'       => __('Right column is a gallery, left is parallax repeater'),
            'render_callback'   => 'block_renderer',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'align'           => 'full',
            'supports'        => array(
                'align' => array('full'),
            ),
            'keywords'          => array('parallax', 'column'),
            'enqueue_assets' => function () {
                wp_enqueue_script(
                    'parallax-column-script',
                    get_template_directory_uri() . '/assets/js/init-parallax-column.js',
                    ['wp-blocks', 'wp-element', 'wp-components', 'wp-i18n'],
                    22
                );
            },
        ));


                // register hero block
                acf_register_block(array(
                    'name'              => 'hero',
                    'title'             => __('Hero'),
                    'description'       => __('Custom Hero'),
                    'render_callback'   => 'block_renderer',
                    'category'          => 'formatting',
                    'icon'              => 'admin-comments',
                    'align'           => 'full',
                    'supports'        => array(
                        'align' => array('full'),
                    ),
                    'keywords'          => array('hero', 'masthead'),
                ));
        
                // register accordion
                acf_register_block(array(
                    'name'              => 'accordion',
                    'title'             => __('Accordion'),
                    'description'       => __('Accordion'),
                    'render_callback'   => 'block_renderer',
                    'category'          => 'formatting',
                    'icon'              => 'admin-comments',
                    'align'           => 'full',
                    'supports'        => array(
                        'align' => array('full'),
                    ),
                    'keywords'          => array('accordion', 'column'),
                    'enqueue_assets' => function () {
                        wp_enqueue_script(
                            'accordion-script',
                            get_template_directory_uri() . '/assets/js/init-accordion.js',
                            ['wp-blocks', 'wp-element', 'wp-components', 'wp-i18n'],
                            22
                        );
                    },
                ));

        // register slider block
        acf_register_block(array(
            'name'              => 'slider',
            'title'             => __('Image Slider'),
            'description'       => __('Image slider using slick.js'),
            'render_callback'   => 'block_renderer',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array('slider', 'gallery'),
            'align'           => 'full',
            'supports'        => array(
                'align' => array('full'),
            ),
            'enqueue_assets' => function () {
                wp_enqueue_script(
                    'jquery',
                    'https://code.jquery.com/jquery-3.7.0.min.js"
                    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=',
                    ['wp-blocks', 'wp-element', 'wp-components', 'wp-i18n'],
                    22
                );

                wp_enqueue_script(
                    'slick',
                    'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js',
                    ['wp-blocks', 'wp-element', 'wp-components', 'wp-i18n'],
                    22
                );

                wp_enqueue_script(
                    'slick-init',
                    get_template_directory_uri() . '/assets/js/slick-init.js',
                    ['wp-blocks', 'wp-element', 'wp-components', 'wp-i18n'],
                    22
                );
            },
        ));
    }
}

function block_renderer($block)
{
    // convert name ("acf/testimonial") into path friendly slug ("testimonial")
    $slug = str_replace('acf/', '', $block['name']);

    // include a template part from within the "template-parts/block" folder
    if (file_exists(get_theme_file_path("/template-parts/block/{$slug}.php"))) {
        include(get_theme_file_path("/template-parts/block/{$slug}.php"));
    }
}
