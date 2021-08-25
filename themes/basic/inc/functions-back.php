<?php

//require get_template_directory() . '/inc/sample-config.php';
/*add_action('init', 'register_posttypes');
function register_posttypes()
{
    register_post_type('feedback', array(
        'labels' => array(
            'name' => 'Отзывы', // Основное название типа записи
            'singular_name' => 'Отзыв', // отдельное название записи типа Book
            'add_new' => 'Добавить новый',
            'add_new_item' => 'Добавить новый отзыв',
            'edit_item' => 'Редактировать отзыв',
            'new_item' => 'Новый отзыв',
            'view_item' => 'Посмотреть отзыв',
            'search_items' => 'Найти отзыв',
            'not_found' => 'Отзыв не найден',
            'not_found_in_trash' => 'В корзине отзывов не найдено',
            'parent_item_colon' => '',
            'menu_name' => 'Отзывы'

        ),
        'public' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 10,
        'supports' => array('title', 'editor', 'thumbnail')
    ));
    register_taxonomy( 'services_types', [ 'services' ], [
            'label'                 => '', // определяется параметром $labels->name
            'labels'                => [
                'name'              => 'Виды услуг',
                'singular_name'     => 'Вид услуги',
                'search_items'      => 'Поиск вида услуг',
                'all_items'         => 'Все виды услуг',
                'view_item '        => 'Посмотреть вид услуг',
                'parent_item'       => 'Родительский вид услуг',
                'parent_item_colon' => 'Родительский вид услуг:',
                'edit_item'         => 'Редактировать вид услуги',
                'update_item'       => 'Обновить вид услуг',
                'add_new_item'      => 'Добавить новый вид услуг',
                'new_item_name'     => 'Имя нового вида услуг',
                'menu_name'         => 'Виды услуг',
            ],
            'description'           => '', // описание таксономии
            'public'                => true,
            'hierarchical'          => true,
            'rewrite'               => true,
            'publicly_queryable' => true,
            //'query_var'             => 'taxonomy',// название параметра запроса
            'show_admin_column'     => true, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
            // '_builtin'              => false,
            //'update_count_callback' => '_update_post_term_count',
        ] );
    }
function my_extra_gallery_fields( $args, $attachment_id, $field ){
    unset($args['target']);

    if ($field=='slides') {
        $args['button-text'] = array(
            'type' => 'text',
            'label' => 'Надпись на кнопке',
            'name' => 'button-text',
            'value' => get_field($field . '_button-text', $attachment_id)
        );
    }
    if ($field=='letters')
    {
        unset($args['url']);
        unset($args['caption']);
    }
    if ($field=='photo')
    {
        unset($args['url']);
        unset($args['caption']);
        unset($args['title']);
    }
    return $args;
}
add_filter( 'acf_photo_gallery_image_fields', 'my_extra_gallery_fields', 10, 3 );*/


//include  get_template_directory() . '/inc/sample-config.php';
/*include  get_template_directory() . '/inc/contents.php';

//Добавляем содержанеие к постам блога
add_filter( 'the_content', 'contents_on_post_top', 20 );
function contents_on_post_top( $content ){
    if( ! is_single() )
        return $content;

    $args = array(
        //'margin'    => 50,
        //'to_menu'   => false,
        //'title'     => false,
        'selectors' => array('h2'),
    );
    $contents = Kama_Contents::init( $args )->make_contents( $content );
    
    //// Перевод таблицы в дивы?? зачем? хмм..
    // $replace = array("<table>" => "<div class = 'table'>", "<tbody>" => "<div>",
    //     "<tr>" => "<div class = 'table-row'>",  "<td>" => "<div class = 'table-cell'>",
    //     "</table>" =>"</div>", "</tbody>" =>"</div>", "</tr>" =>"</div>", "</td>" =>"</div>");
    // $content = strtr($content, $replace);

    return $contents . $content;
}
*/

//Создаем отзывы и вопросы в админке