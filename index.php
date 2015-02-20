<?php
require_once './config.inc';

use Noneslad\HTML\html;


$html = new html();
$html->doctype_html5();
$html->open_html();
    include './views/layout/head.php';
    $html->open_body();
        $html->open_div(array('class'=>'container'));
            include './views/layout/header.php';
            $html->open_div(array('class'=>'row'));
                include './views/layout/aside.php';
                include './views/layout/content.php';
                include './views/layout/footer.php';
            $html->close_div();
        $html->close_div();
    $html->close_body();
$html->close_html();
        