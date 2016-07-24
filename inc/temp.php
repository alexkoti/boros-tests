<?php
/**
 * Apenas functions, actions e filters de teste
 * 
 */

$config = array(
    'path' => BTESTS_DIR . 'admin-pages/',
    'url' => BTESTS_URL . 'admin-pages/',
    'pages' => array(
        'edit.php' => array(
            'subpages' => array(
                'category_order' => array(
                    'page_title'    => 'Ordem das Categorias', 
                    'menu_title'    => 'Ordenar Categorias', 
                    'menu_slug'     => 'category_order', 
                    'capability'    => 'manage_options',
                ),
            ),
        ),
        'tools.php' => array(
            'subpages' => array(
                'sub_tools' => array(
                    'page_title'    => 'Conteúdo de Testes', 
                    'menu_title'    => 'Conteúdo de Testes', 
                    'menu_slug'     => 'sub_tools', 
                    'capability'    => 'manage_options', 
                ),
            ),
        ),
        'section-content' => array(
            'page_title'    => 'Opções do Site', 
            'menu_title'    => 'Opções do Site', 
            'capability'    => 'edit_posts', 
            'icon_url'      => 'dashicons-admin-generic',
            'subpages' => array(
                'section-general' => array(
                    'page_title'    => 'Opções de Administração', 
                    'menu_title'    => 'Opções de Administração', 
                    'capability'    => 'manage_options', 
                ),
                'section-emails' => array(
                    'page_title'    => 'Emails', 
                    'menu_title'    => 'Emails', 
                    'capability'    => 'manage_options', 
                ),
            ),
        ),
        'section-networks' => array(
            'page_title'    => 'Redes Sociais', 
            'menu_title'    => 'Redes Sociais', 
            'capability'    => 'manage_options', 
            'icon_url'      => 'dashicons-admin-share',
            'enqueues'      => array(
                'css' => array(
                    'section-networks.css',                                                     // relativo
                    'section-networks-secondary.css',                                           // relativo
                    'jcrop',                                                                    // registered
                    'http://boros.dev.br/wp-content/themes/boros/js/boros_slider_plugin.css',   // absolute
                    array(                                                                      // array config
                        'full-path-style', 
                        BTESTS_URL . 'admin-pages/full-path-style.css', 
                        false,
                        '2.2.2',
                        'screen'
                    ),
                ),
                'js' => array(
                    'section-networks.js',                                                      // relativo
                    'section-networks-secondary.js',                                            // relativo
                    'jcrop',                                                                    // registered
                    'http://boros.dev.br/wp-content/themes/boros/js/boros_slider_plugin.js',    // absolute
                    array(                                                                      // array config
                        'full-path-script', 
                        BTESTS_URL . 'admin-pages/full-path-script.js', 
                        'jquery', 
                        '2', 
                        false
                    ),
                ),
            ),
        ),
    ),
);

$admin_pages = new Boros_Admin_Pages( $config );

$config2 = array(
    'path' => BTESTS_DIR . 'admin-pages/',
    'url' => BTESTS_URL . 'admin-pages/',
    'pages' => array(
        'section-extra' => array(
            'page_title'    => 'Opções Extras', 
            'menu_title'    => 'Opções Extras', 
            'capability'    => 'edit_posts', 
            'icon_url'      => 'dashicons-admin-generic',
        ),
    ),
);
$admin_pages2 = new Boros_Admin_Pages( $config2 );





