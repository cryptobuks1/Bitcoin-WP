<?php /*
Template Name: Не трогать
Template Post Type: page
*/

get_header();
echo '
    



<div><textarea style="border: 3px solid red;" class="inputjs"> </textarea></div>
<div><button class="clickjs button">Форматировать</button></div>
<div><div style="border: 3px solid #ff0000;" class="outputjs"></div></div>
<div><button class="clickjs button">Скопировать</button> </div>

';
get_footer();