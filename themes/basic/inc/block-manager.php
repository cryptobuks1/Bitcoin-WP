<?php
include get_template_directory() . '/inc/production-blocks.php';
function get_block($name, $args = null)
{
    $suffixes = ['_rdy','_v'];
    foreach ($suffixes as $s) {
        $f = $name . $s;
        if (function_exists($f)) {
            $f($args);
            /*$last_tick = timer_stop(0, 3);
            $diff = str_replace(',','.',$last_tick)-(float)str_replace(',','.',$GLOBALS['last_tick']);
            echo '<b style = "font-size:24px">'.$name.' WP-time:' .number_format($diff,3) . '</b>';
            $GLOBALS['last_tick'] = $last_tick;*/

            return;
        }
    }
    if (function_exists($name))
        $name($args);
            /*$last_tick = timer_stop(0, 3);
            $diff = str_replace(',','.',$last_tick)-(float)str_replace(',','.',$GLOBALS['last_tick']);
            echo '<b style = "font-size:24px">'.$name.' WP-time:' .number_format($diff,3) . '</b>';
            $GLOBALS['last_tick'] = $last_tick;*/
};

function test($args)
{
    ?>
        <header class="header">
            <div class="header__upper-wrapper">
                <div class="header__upper-header upper-header d-flex ac jb mw">
                    <div class="upper-header__contact-info w75">
                         <span class="upper-header__name icon-home">
                             ICO Floor New World
                         </span>
                         <a href="tel:+998 556 778 344" class="upper-header__phone icon-phone">
                             +998 556 778 344
                        </a>
                        <a href="mailto:demo@example.com" class="upper-header__email icon-envelope">
                            demo@example.com
                        </a>
                    </div>
                    <div class="upper-header_soc-bar soc-bar tr w25">
                        <a href="#" class="icon-facebook"></a>
                        <a href="#" class="icon-twitter"></a>
                        <a href="#" class="icon-instagram"></a>
                        <a href="#" class="icon-pinterest2"></a>
                        <a href="#" class="icon-youtube"></a>
                    </div>
                </div>
            </div>
            <div class="header_main-menu-wrapper mw">
                <div class="header__main-menu  main-menu d-flex jb">
                    <div class="main-menu__logo-wrapper w25">
                        <a href = "<?php echo get_site_url() ?>">
                        <img class="logo" src="<?php echo get_template_directory_uri().'/inc/images/logo.png'?>"/>
                        </a>
                    </div>
                    <div class="main-menu__right-wrapper d-flex je ac">
                        <nav>
                            <ul class="main-menu__directions directions d-flex">
                                <?php foreach ($args['directions'] as $item){
                                    ?>
                                    <li class="directions__single-direction hover-line">
                                        <a href="<?php echo $item['link']?>"><?php echo $item['name']?></a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </nav>
                        <ul class="d-flex">

                            <li><button class="btn1">Sign Up</button></li>
                        </ul>
                    </div>

                </div>
            </div>
        </header>

    <div class="items-list">
        <div class="single-iteme">

        </div>
    </div>
    <?php
}
function footer_block($args)
{
    ?>
        <footer class="footer">
            <div class="footer__top">
                <div class="top-wrapper mw d-flex jb">
                    <ul class="footer__right-block w50">
                        <li class="mb20"><img class="logo" src="<?php echo get_template_directory_uri().'/inc/images/logo2.png'?>"/></li>
                        <li class="mb20">Lorem ipsum dolor sit amet, consetur acing elit, sed do eiusmod ligal</li>
                        <li class="mb20"><div class="icon-location">Gopalpur Noth Sarkartary</div></li>
                        <li class="mb20"><div class="icon-phone">(+99) 0123 4567 8</div></li>
                        <li class="mb20"><div class="icon-sphere">example@example.com</div></li>
                    </ul>
                    <ul class="footer__right">

                    </ul>
                </div>

            </div>
        </footer>
    <?php
}





