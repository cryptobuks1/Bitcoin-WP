<?php

//require get_template_directory() . '/inc/sample-config.php';
add_action('init', 'register_posttypes');
function register_posttypes(){

    register_post_type('project', array(
        'labels' => array(
            'name' => 'Проекты', // Основное название типа записи
            'singular_name' => 'Проект', // отдельное название записи типа Book
            'add_new' => 'Добавить новый',
            'add_new_item' => 'Добавить новый проект',
            'edit_item' => 'Редактировать проект',
            'new_item' => 'Новый проект',
            'view_item' => 'Посмотреть проект',
            'search_items' => 'Найти проект',
            'not_found' => 'Проект не найден',
            'not_found_in_trash' => 'В корзине проектов не найдено',
            'parent_item_colon' => '',
            'menu_name' => 'Проекты'

        ),
        'public' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => false,
        'menu_position' => 10,
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail')
    ));
    register_taxonomy( 'directions', [ 'project' ], [
            'label'                 => '', // определяется параметром $labels->name
            'labels'                => [
                'name'              => 'Направления',
                'singular_name'     => 'Направление',
                'search_items'      => 'Поиск направлений',
                'all_items'         => 'Все направления',
                'view_item '        => 'Посмотреть направление',
                'parent_item'       => 'Родительское направление',
                'parent_item_colon' => 'Родительское направление:',
                'edit_item'         => 'Редактировать направление',
                'update_item'       => 'Обновить направление',
                'add_new_item'      => 'Добавить направление',
                'new_item_name'     => 'Имя нового направление',
                'menu_name'         => 'Направления',
            ],
            'description'           => '', // описание таксономии
            'public'                => true,
            'hierarchical'          => true,
            'rewrite'               => true,
            'publicly_queryable' => true,

            'show_admin_column'     => true, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)

        ] );
    }


//register_taxonomy

//Создаем отзывы и вопросы в админке