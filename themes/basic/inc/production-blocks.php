<?php
function main_slider($args)
{
    ?>
    <div class = "main-slider">
        <?php
            foreach ($args as $slide)
            {
                $bg = "background-image:url('".$slide["bg"]."')";
                ?>
                <div class = "main-slider__slide <?php echo $slide['position'] ?>" style = "<?php echo $bg ?>">
                    <div class = "main-slider__content d-flex ja ac">
                        <div class = "d-flex jc ac">
                            <div>
                                <div class = "main-slider__title mb20"><?php echo $slide['title'] ?></div>
                                <div class = "main-slider__description mb20"><?php echo $slide['description'] ?></div>
                                <div>
                                    <a class = "main-slider__button btn2" href = "<?php echo $slide['btn_link'] ?>"><?php echo $slide['btn_text'] ?></a>
                                </div>
                            </div>
                        </div>
                        <div class = "main-slider__image-wrapper d-flex jc ac">
                            <img src = "<?php echo $slide['img'] ?>">
                        </div>
                    </div>
                </div>
                <?php
            }
        ?>
    </div>
    <?php
}

function category_title_block($args)
{
    ?>
    <div class = "category-header">
        <h1 class = "category-header__title mb25"><?php echo $args['title'] ?></h1>
        <div class = "category-header__description"><?php echo $args['description'] ?></div>
    </div>
    <?php
}

function category_header_block($args)
{
    ?>
    <div class = "category-header-block">
        <div class = "mw d-flex jb">
        <div class = "w33">
            <?php
                get_block('category_title_block',[
                   'title'=>$args['category_title'],
                   'description'=>$args['category_description'],
                ]);
            ?>
        </div>
        <div class = "w66 filters-block">
            <div class = "filters-block__search-wrapper mb15">
                <input id = "filter-search" placeholder="Введите название проекта для поиска">
            </div>

            <div class = "d-flex jb mb30">
                <div class = "w45">
                    <div class = "finters-block__input-wrapper filters-block__total-rating d-flex jc mb15">
                        <div class = "d-flex ac">
                            <label for = "filter-total-rating">
                                Общий рейтинг:
                            </label>
                            <select id = "filter-total-rating">
                                <option value="" selected>--</option>
                                <?php for ($i= 1;$i<=10;$i++) {
                                    ?>
                                    <option value = "<?php echo $i ?>"><?php echo $i ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class = "w55">
                    <div class = "d-flex jb ac mb15">
                        <div class = "finters-block__input-wrapper">
                            <div class = "d-flex ac">
                                <label for = "filter-rating1">
                                    Доходность:
                                </label>
                                <select id = "filter-rating1">
                                    <option value="" selected>--</option>
                                    <?php for ($i= 1;$i<=10;$i++) {
                                        ?>
                                        <option value = "<?php echo $i ?>"><?php echo $i ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class = "finters-block__input-wrapper">
                            <div class = "d-flex ac">
                                <label for = "filter-rating2">
                                    Удобство:
                                </label>
                                <select id = "filter-rating2">
                                    <option value="" selected>--</option>
                                    <?php for ($i= 1;$i<=10;$i++) {
                                        ?>
                                        <option value = "<?php echo $i ?>"><?php echo $i ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class = "d-flex jb ac mb15">
                        <div class = "finters-block__input-wrapper">
                            <div class = "d-flex ac">
                                <label for = "filter-rating1">
                                    Скорость вывода:
                                </label>
                                <select id = "filter-rating1">
                                    <option value="" selected>--</option>
                                    <?php for ($i= 1;$i<=10;$i++) {
                                        ?>
                                        <option value = "<?php echo $i ?>"><?php echo $i ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class = "finters-block__input-wrapper">
                            <div class = "d-flex ac">
                                <label for = "filter-rating2">
                                    Надежность:
                                </label>
                                <select id = "filter-rating2">
                                    <option value="" selected>--</option>
                                    <?php for ($i= 1;$i<=10;$i++) {
                                        ?>
                                        <option value = "<?php echo $i ?>"><?php echo $i ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <button class = "search-btn btn1">Поиск проектов</button>
            </div>
        </div>
        </div>
    </div>
    <?php
}


function rating_block($args)
{
    ?>
    <div class = "rating-block__title">
                            Общий рейтинг: <span class = "rating-block__total-rating"><?php echo $args['total_rating'] ?></span>
                        </div>
                        <div class = "rating-block__line progress-line">
                            <div class = "progress-line__title-wrapper d-flex jb ac">
                                <div class = "progress-line__title">
                                    Доходность
                                </div>
                                <div class = "progress-line__rating">
                                    <?php echo $args['rating1'] ?>
                                </div>
                            </div>
                            <?php
                                $width =  ($args['rating1']*100/10);
                                $class = '';
                                if ($args['rating1']>=9)
                                    $class = 'high';
                                else if ($args['rating1']<3)
                                    $class = 'low';
                            ?>
                            <div class = "progress-line__progress-bg">
                                <div class = "progress-line__progress <?php echo $class ?>" style = "width:<?php echo $width ?>%"></div>
                            </div>
                        </div>
                        <div class = "rating-block__line progress-line">
                            <div class = "progress-line__title-wrapper d-flex jb ac">
                                <div class = "progress-line__title">
                                    Удобство
                                </div>
                                <div class = "progress-line__rating">
                                    <?php echo $args['rating2'] ?>

                                </div>
                            </div>
                            <?php
                            $width =  ($args['rating2']*100/10);
                            $class = '';
                            if ($args['rating2']>=9)
                                $class = 'high';
                            else if ($args['rating2']<3)
                                $class = 'low';
                            ?>
                            <div class = "progress-line__progress-bg">
                                <div class = "progress-line__progress <?php echo $class ?>" style = "width:<?php echo $width ?>%"></div>
                            </div>
                        </div>
                        <div class = "rating-block__line progress-line">
                            <div class = "progress-line__title-wrapper d-flex jb ac">
                                <div class = "progress-line__title">
                                    Скорость вывода
                                </div>
                                <div class = "progress-line__rating">
                                    <?php echo $args['rating3'] ?>
                                </div>
                            </div>
                            <?php
                            $width =  ($args['rating3']*100/10);
                            $class = '';
                            if ($args['rating3']>=9)
                                $class = 'high';
                            else if ($args['rating3']<3)
                                $class = 'low';
                            ?>
                            <div class = "progress-line__progress-bg">
                                <div class = "progress-line__progress <?php echo $class ?>" style = "width:<?php echo $width ?>%"></div>
                            </div>
                        </div>
                        <div class = "rating-block__line progress-line">
                            <div class = "progress-line__title-wrapper d-flex jb ac">
                                <div class = "progress-line__title">
                                    Надежность
                                </div>
                                <div class = "progress-line__rating">
                                    <?php echo $args['rating4'] ?>
                                </div>
                            </div>
                            <?php
                            $width =  ($args['rating4']*100/10);
                            $class = '';
                            if ($args['rating4']>=9)
                                $class = 'high';
                            else if ($args['rating4']<3)
                                $class = 'low';
                            ?>
                            <div class = "progress-line__progress-bg">
                                <div class = "progress-line__progress <?php echo $class ?>" style = "width:<?php echo $width ?>%"></div>
                            </div>
                        </div>
                        <div class = "rating-block__footer tc">
                            <button class = "vote-btn btn3 orange">
                                Проголосовать
                            </button>
                        </div>
    <?php
}

function project_detail_panel($args)
{
    ?>
    <div class = "project-panel-list">
        <div class = "mw">
        <?php
            foreach ($args as $project)
            {
                ?>
                <div class = "project-panel d-flex jb">
                    <div class = "project-panel__content">
                        <div class = "project-panel__title mb10"><?php echo $project['name'] ?></div>
                        <div class = "mb20"><a class = "basic-link" href = "<?php echo $project['external_link'] ?>">Перейти на сайт проекта</a></div>
                        <div class = "project-panel__description mb20"><?php echo $project['description'] ?></div>
                        <div class = "project-panel__profit mb30">Доходность: <span><?php echo $project['profit'] ?></span></div>
                        <div class = "project-panel__btns-wrapper">
                            <a class = "btn2" href = "<?php echo $project['link'] ?>">Подробнее</a>
                        </div>
                    </div>
                    <div class = "project-panel__rating-block rating-block">
                        <?php
                        get_block('rating_block',[
                           'total_rating'=>$project['total_rating'],
                            'rating1'=>$project['rating1'],
                            'rating2'=>$project['rating2'],
                            'rating3'=>$project['rating3'],
                            'rating4'=>$project['rating4'],
                        ]);
                        ?>
                    </div>
                </div>
                <?php
            }
        ?>
        <div class = "mb40"></div>
        <div class = "tc">
            <button class = "load-more btn1">Загрузить еще</button>
        </div>
    </div>
    </div>
<?php
}


function single_project_panel($args)
{
    ?>
    <div class = "side-panel">
        <div class = 'side-panel__profit mb30'>
            Доходность проекта:<br> <span><?php echo $args['profit']?></span>
        </div>
        <div class = "side-panel__qrcode mb30 tc">
            <img class = "mb10" src = "<?php echo $args['qr_code'] ?>">
            <a  class = "basic-link" href = '<?php echo $args['link'] ?>'>Ссылка на страницу проекта</a>
        </div>
        <div class = 'mb30'>
        <?php get_block('rating_block',$args['ratings']); ?>
        </div>
    </div>
    <?php
}
function single_project($args)
{
    global $post;
    ?>
    <div class = "detail-project">
        <div class = "mw">
        <h1><?php echo get_the_title($post->ID) ?></h1>
        <div class = "d-flex">
            <div class = "detail-project__content-wrapper w100">
                <div class = "detail-project__tabs tab-panel d-flex">
                    <?php
                    $i = 0;
                    foreach ($args['tabs'] as $tab){
                        ?>
                        <div class = "tab-panel__item <?php echo ($i==0)?'active':'' ?>"><?php echo $tab['name'] ?></div>
                        <?php
                        $i = 1;
                    }
                    ?>
                    <div class = "tab-panel__item review-tab">Отзывы</div>
                </div>
                <div class = "detail-project__content">
                    <?php the_content() ?>
                </div>
                <div class = "detail-project__reviews">

                </div>
            </div>
            <div class = "detail-project__side-panel">
            <?php
                get_block('single_project_panel',
                [
                    'profit'=>$args['profit'],
                    'link'=>$args['link'],
                    'qr_code'=>$args['qr_code'],
                    'ratings'=>[
                            'total_rating'=>$args['total_rating'],
                            'rating1'=>$args['rating1'],
                        'rating2'=>$args['rating2'],
                        'rating3'=>$args['rating3'],
                        'rating4'=>$args['rating4'],
                    ],
                ]);
            ?>
            </div>
        </div>
    </div>
    </div>
    <?php
}
function project_list_main($args)
{
    ?>
    <div class = "project-card-list">
        <div class = "mw">
            <div class="title-wrapper">
                <h2><a href="<?php echo $args['link']?>"><?php echo $args['name']?></a> </h2>
                <div class = "mb40"><span class="underline">#</span>
                </div>
            </div>
                <div class = "product-card-list__projects d-flex jb fw">
            <?php
            foreach ($args['project'] as $project)
            {
                ?>

                <div class = "project-card d-flex jb">
                    <?php
                    $class = '';
                    if ($project['total_rating']>=9)
                        $class = 'high';
                    else if ($project['total_rating']<3)
                    $class = 'low';
                    ?>
                    <div class = "rating-label <?php echo $class?>">Рейтинг <div><?php echo $project['total_rating'] ?></div></div>
                    <div class = "project-card__content">
                        <div class = "project-card__title mb10"><?php echo $project['name'] ?></div>
                        <div class = "mb20"><a class = "basic-link" href = "<?php echo $project['external_link'] ?>">Перейти на сайт проекта</a></div>
                        <div class = "project-card__description mb20"><?php echo $project['description'] ?></div>
                        <div class = "project-card__profit mb30">Доходность: <span><?php echo $project['profit'] ?></span></div>
                        <div class = "project-card__btns-wrapper">
                            <a class = "btn2" href = "<?php echo $project['link'] ?>">Подробнее</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
                    <div class = "project-card-ph"></div><div class = "project-card-ph"> </div>
                </div>
            <div class = "mb40"></div>
            <div class = "tc">
                <button class = "load-more btn1">Смотреть еще</button>
            </div>
        </div>
    </div>
    <?php
}