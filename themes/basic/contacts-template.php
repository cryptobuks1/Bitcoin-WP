<?php
/*
Template Name: Контакты
Template Post Type: page
*/
global $r_opt;
get_header();

$args = array();
$frontpage_id = get_option( 'page_on_front' );
$args[] = array(
    'link' => get_bloginfo('url'),
    'name' => get_the_title($frontpage_id));
$args[] = array(
    'name' => get_the_title(),
);
echo '<div class = "page-container contacts-page mw">';
get_block('breadcrumbs',$args);

$args = array();
$args['contacts_title'] = get_the_title();

$args['contacts_phone1_title'] = 'Горячая Линия:';
$args['contacts_phone1'] = $r_opt['phone'];
$args['contacts_phone2_title'] = 'Для жителей Москвы:';
$args['contacts_phone2'] = $r_opt['phone2'];
$args['contacts_mail_title'] = 'E-mail:';
$args['contacts_mail'] = $r_opt['mail'];
$args['contacts_address_title'] = 'Адрес:';
$args['contacts_address_subtitle']='(по предварительному звонку)';
$args['contacts_address'] = $r_opt['address'];
$args['contcts_workhours_title'] = 'Режим работы:';
$args['contacts_workhours'] = $r_opt['workhours'];
$args['contacts_messengers_title'] = 'Мессенджеры:';
$args['contacts_soc_title'] = 'Соц. сети:';
$args['contacts_tg'] = $r_opt['soc-tg'];
$args['contacts_inst'] = $r_opt['soc-inst'];
$args['contacts_vk'] = $r_opt['soc-vk'];
$args['contacts_fb'] = $r_opt ['soc-fb'];
$args['contacts_wa'] = $r_opt['soc-wa'];
$args['h1_title'] = get_the_title();
echo '<div class = "d-flex mw">';

get_block('contacts_block',$args);

$args = array(

        'code'=>'[contact-form-7 id="130"]',
        'title'=>'Напишите нам!',
        'form_type'=>'Форма контакты',
        'form_class'=>'contacts-form',
        'placeholder'=>'Ваше сообщение',
        'btn_text'=>'Отправить',
        'id'=>'contacts-form'
    );
get_block('contact_form',$args);
echo '</div>';
echo '</div>';




echo '<div class="block mw">
<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af85b3692fe3fa265d12dd24827b0093435637c5188d214163e18cfeeb6b8374b&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
</div>';




echo '
<style>
.goroda ul{
    columns: 4;
}
.goroda li {
    margin-bottom: 7px;
}
@media (max-width: 992px){
    .goroda ul{
        columns: 2;
    }
}
</style>
';
echo '<div class="block mw goroda">';
    echo '<h2>Наши представительства в городах России</h2><br><br>';
    // wp_nav_menu( array('menu' => 'City-menu', 'items_wrap' => '<ul>%3$s</ul>',) ); 
echo '
<ul>
<li><a href="/sofosbuvir-almaty/">Алматы</a></li>
<li><a href="/sofosbuvir-arhangelsk/">Архангельск</a></li>
<li><a href="/sofosbuvir-astrahan/">Астрахань</a></li>
<li><a href="/sofosbuvir-balakovo/">Балаково</a></li>
<li><a href="/sofosbuvir-balashiha/">Балашиха</a></li>
<li><a href="/sofosbuvir-barnaul/">Барнаул</a></li>
<li><a href="/sofosbuvir-belgorod/">Белгород</a></li>
<li><a href="/sofosbuvir-bryansk/">Брянск</a></li>
<li><a href="/sofosbuvir-vladivostok/">Владивосток</a></li>
<li><a href="/sofosbuvir-vladikavkaz/">Владикавказ</a></li>
<li><a href="/sofosbuvir-vladimir/">Владимир</a></li>
<li><a href="/sofosbuvir-volgograd/">Волгоград</a></li>
<li><a href="/sofosbuvir-volzhskij/">Волжский</a></li>
<li><a href="/sofosbuvir-vologda/">Вологда</a></li>
<li><a href="/sofosbuvir-voronezh/">Воронеж</a></li>
<li><a href="/sofosbuvir-vsevolozhsk/">Всеволожск</a></li>
<li><a href="/sofosbuvir-gomel/">Гомель</a></li>
<li><a href="/sofosbuvir-groznyj/">Грозный</a></li>
<li><a href="/sofosbuvir-dzerzhinsk/">Дзержинск</a></li>
<li><a href="/sofosbuvir-doneck/">Донецк</a></li>
<li><a href="/sofosbuvir-ekaterinburg/">Екатеринбург</a></li>
<li><a href="/sofosbuvir-ivanovo/">Иваново</a></li>
<li><a href="/sofosbuvir-izhevsk/">Ижевск</a></li>
<li><a href="/sofosbuvir-irkutsk/">Иркутск</a></li>
<li><a href="/sofosbuvir-kazan/">Казань</a></li>
<li><a href="/sofosbuvir-kaliningrad/">Калининград</a></li>
<li><a href="/sofosbuvir-kaluga/">Калуга</a></li>
<li><a href="/sofosbuvir-kamensk-uralskij/">Каменск-Уральский</a></li>
<li><a href="/sofosbuvir-kemerovo/">Кемерово</a></li>
<li><a href="/sofosbuvir-kiev/">Киев</a></li>
<li><a href="/sofosbuvir-kirov/">Киров</a></li>
<li><a href="/sofosbuvir-kislovodsk/">Кисловодск</a></li>
<li><a href="/sofosbuvir-kolomna/">Коломна</a></li>
<li><a href="/sofosbuvir-korolyov/">Королёв</a></li>
<li><a href="/sofosbuvir-kostroma/">Кострома</a></li>
<li><a href="/sofosbuvir-krasnogorsk/">Красногорск</a></li>
<li><a href="/sofosbuvir-krasnodar/">Краснодар</a></li>
<li><a href="/sofosbuvir-krasnoyarsk/">Красноярск</a></li>
<li><a href="/sofosbuvir-kstovo/">Кстово</a></li>
<li><a href="/sofosbuvir-kurgan/">Курган</a></li>
<li><a href="/sofosbuvir-kursk/">Курск</a></li>
<li><a href="/sofosbuvir-leninsk-kuzneckij/">Ленинск-Кузнецкий</a></li>
<li><a href="/sofosbuvir-lipeck/">Липецк</a></li>
<li><a href="/sofosbuvir-lugansk/">Луганск</a></li>
<li><a href="/sofosbuvir-lyubercy/">Люберцы</a></li>
<li><a href="/sofosbuvir-magnitogorsk/">Магнитогорск</a></li>
<li><a href="/sofosbuvir-makeevka/">Макеевка</a></li>
<li><a href="/sofosbuvir-mahachkala/">Махачкала</a></li>
<li><a href="/sofosbuvir-minsk/">Минск</a></li>
<li><a href="/sofosbuvir-murmansk/">Мурманск</a></li>
<li><a href="/sofosbuvir-mytishchi/">Мытищи</a></li>
<li><a href="/sofosbuvir-naberezhnye-chelny/">Набережные Челны</a></li>
<li><a href="/sofosbuvir-nizhnevartovsk/">Нижневартовск</a></li>
<li><a href="/sofosbuvir-nizhnekamsk/">Нижнекамск</a></li>
<li><a href="/sofosbuvir-nizhnij-novgorod/">Нижний Новгород</a></li>
<li><a href="/sofosbuvir-nizhnij-tagil/">Нижний Тагил</a></li>
<li><a href="/sofosbuvir-novokuzneck/">Новокузнецк</a></li>
<li><a href="/sofosbuvir-novorossijsk/">Новороссийск</a></li>
<li><a href="/sofosbuvir-novosibirsk/">Новосибирск</a></li>
<li><a href="/sofosbuvir-novoshahtinsk/">Новошахтинск</a></li>
<li><a href="/sofosbuvir-norilsk/">Норильск</a></li>
<li><a href="/sofosbuvir-odincovo/">Одинцово</a></li>
<li><a href="/sofosbuvir-omsk/">Омск</a></li>
<li><a href="/sofosbuvir-oryol/">Орёл</a></li>
<li><a href="/sofosbuvir-orenburg/">Оренбург</a></li>
<li><a href="/sofosbuvir-orsk/">Орск</a></li>
<li><a href="/sofosbuvir-penza/">Пенза</a></li>
<li><a href="/sofosbuvir-perm/">Пермь</a></li>
<li><a href="/sofosbuvir-petrozavodsk/">Петрозаводск</a></li>
<li><a href="/sofosbuvir-podolsk/">Подольск</a></li>
<li><a href="/sofosbuvir-ramenskij-rajon/">Раменский район</a></li>
<li><a href="/sofosbuvir-ramenskoe/">Раменское</a></li>
<li><a href="/sofosbuvir-rostov-na-donu/">Ростов-на-дону</a></li>
<li><a href="/sofosbuvir-ryazan/">Рязань</a></li>
<li><a href="/sofosbuvir-samara/">Самара</a></li>
<li><a href="/sofosbuvir-sankt-peterburg/">Санкт-Петербург</a></li>
<li><a href="/sofosbuvir-saransk/">Саранск</a></li>
<li><a href="/sofosbuvir-saratov/">Саратов</a></li>
<li><a href="/sofosbuvir-sevastopol/">Севастополь</a></li>
<li><a href="/sofosbuvir-simferopol/">Симферополь</a></li>
<li><a href="/sofosbuvir-smolensk/">Смоленск</a></li>
<li><a href="/sofosbuvir-sochi/">Сочи</a></li>
<li><a href="/sofosbuvir-stavropol/">Ставрополь</a></li>
<li><a href="/sofosbuvir-sterlitamak/">Стерлитамак</a></li>
<li><a href="/sofosbuvir-surgut/">Сургут</a></li>
<li><a href="/sofosbuvir-tambov/">Тамбов</a></li>
<li><a href="/sofosbuvir-tver/">Тверь</a></li>
<li><a href="/sofosbuvir-tolyatti/">Тольятти</a></li>
<li><a href="/sofosbuvir-tomsk/">Томск</a></li>
<li><a href="/sofosbuvir-tula/">Тула</a></li>
<li><a href="/sofosbuvir-tyumen/">Тюмень</a></li>
<li><a href="/sofosbuvir-ulan-ude/">Улан-Удэ</a></li>
<li><a href="/sofosbuvir-ulyanovsk/">Ульяновск</a></li>
<li><a href="/sofosbuvir-ufa/">Уфа</a></li>
<li><a href="/sofosbuvir-habarovsk/">Хабаровск</a></li>
<li><a href="/sofosbuvir-himki/">Химки</a></li>
<li><a href="/sofosbuvir-cheboksary/">Чебоксары</a></li>
<li><a href="/sofosbuvir-chelyabinsk/">Челябинск</a></li>
<li><a href="/sofosbuvir-cherepovec/">Череповец</a></li>
<li><a href="/sofosbuvir-chita/">Чита</a></li>
<li><a href="/sofosbuvir-yuzhno-sahalinsk/">Южно-Сахалинск</a></li>
<li><a href="/sofosbuvir-yakutsk/">Якутск</a></li>
<li><a href="/sofosbuvir-yaroslavl/">Ярославль</a></li>
</ul>
';    
echo '</div>';



get_block('contact_form_2_block');

get_footer();