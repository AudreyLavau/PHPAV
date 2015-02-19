<?php
use Noneslad\HTML\html;

$html = new html();
$table = new Table();

$html->doctype_html5();
$html->open_html();
    $html->open_head();
        $html->edit_meta_type('text/html', 'utf-8');
        $html->title_page('CV FRIER ARNAULT');
        $html->css('//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css');
        $html->css('helpers/css/generic_ge.css');
    $html->close_head();
    $html->open_body(array('id'=>'main_body'));
        $html->bouton_retour_style();
        $html->open_div(array('id'=>'form_container','class'=>'container alert alert-info','style'=>'padding-bottom : 25px;'));
            $html->open_div(array('class'=>'width_30 float_r'));
                $html->img(array('src'=>'img/tof.png','class'=>'margin_l_50'));
            $html->close_div();
            $html->open_div(array('class'=>'width_60 float_l'));
                $table->debut_table();
                    $table->debut_tr();
                        $table->td($html->get_span('FRIER Arnault', array('class'=>'gras font_size_up')));
                    $table->fin_tr();
                    $table->debut_tr();
                        $table->td($html->get_span('32 Rue des Arts et Metiers', array('class'=>'italic')));
                    $table->fin_tr();
                    $table->debut_tr();
                        $table->td($html->get_span('38000'.$html->get_span(' GRENOBLE', array('class'=>'gras')), array('class'=>'italic')));
                    $table->fin_tr();
                    $table->debut_tr();
                        $table->td($html->get_span('tel : ', array('class'=>'font_size_down')).$html->get_span('06 72 96 93 03', array('class','gras font_size_up')));
                    $table->fin_tr();
                $table->fin_table();
            $html->close_div();
            $html->br(7);
            $html->open_div(array('class'=>'margin_t_50'));
                $html->h1('Experience Professionelle');
                $html->open_div(array('class'=>'margin_l_150'));
                    $table->debut_table(array('class'=>'width_4 table-striped'));
                        $table->debut_tr(array('class'=>'width_4 margin_b_10'));
                            $table->td($html->get_span('2004', array('class'=>'gras font_size_up ')),array('class'=>'width_30'));
                            $table->td($html->get_span('BAC STT INFORMATIQUE ET GESTION', array('class'=>'gras ')), array('class' => 'width_70','colspan'=>'2'));
                        $table->fin_tr();
                        $table->debut_tr(array('class'=>'width_4 margin_b_10'));
                            $table->td($html->get_span('2009 - 2011', array('class'=>'gras font_size_up')),array('class'=>'width_30'));
                            $table->td($html->get_span('BTS INFORMATIQUE DE GESTION', array('class'=>'gras ')),array('class'=>'width_30'));
                            $table->td($html->get_span('Mise en place de GED pour Vanguard Medical services création du portail de dépot et récupération ', array('class'=>'width_30 ')));
                        $table->fin_tr();
                        $table->debut_tr(array('class'=>'width_4 margin_b_10'));
                            $table->td($html->get_span('2011 - 2013', array('class'=>'gras font_size_up')),array('class'=>'width_30'));
                            $table->td($html->get_span('CDI Concepteur Developpeur Informatique', array('class'=>'gras')),array('class'=>'width_30'));
                            $table->td($html->get_span('Développement WEB Diverses', array('class'=>'width_30')));
                        $table->fin_tr();
                    $table->fin_table();
                $html->close_div();
                $html->br(5);
                $html->h1('Languages utilisés');
                $html->open_div(array('class'=>'margin_l_150'));
                    $table->debut_table(array('class'=>'width_4 table-striped'));
                        $table->debut_tr();
                            $table->th('Language',array('class'=>'width_30 text_left'));
                            $table->th('Maitrise',array('class'=>'width_30 text_left'));
                            $table->th('Intéret',array('class'=>'width_30 text_left'));
                        $table->fin_tr();
                        $table->debut_tr();
                            $table->td('PHP');
                            $table->td('<b>+</b><b>+</b><b>+</b>');
                            $table->td('<b>+</b><b>+</b><b>+</b>');
                        $table->fin_tr();
                        $table->debut_tr();
                            $table->td('HTML < 5');
                            $table->td('<b>+</b><b>+</b><b>+</b>');
                            $table->td('<b>+</b>');
                        $table->fin_tr();
                        $table->debut_tr();
                            $table->td('HTML 5');
                            $table->td('<b>+</b>');
                            $table->td('<b>+</b><b>+</b><b>+</b>');
                        $table->fin_tr();
                        $table->debut_tr();
                            $table->td('JS (jQuery + Ajax)');
                            $table->td('<b>+</b><b>+</b>');
                            $table->td('<b>+</b><b>+</b><b>+</b>');
                        $table->fin_tr();
                        $table->debut_tr();
                            $table->td('CSS 1,2');
                            $table->td('<b>+</b><b>+</b><b>+</b>');
                            $table->td('<b>+</b><b>+</b>');
                        $table->fin_tr();
                        $table->debut_tr();
                            $table->td('CSS 3');
                            $table->td('<b>+</b>');
                            $table->td('<b>+</b><b>+</b><b>+</b>');
                        $table->fin_tr();
                        $table->debut_tr();
                            $table->td('C# C++ C');
                            $table->td('<b>+</b>');
                            $table->td('<b>+</b>');
                        $table->fin_tr();
                        $table->debut_tr();
                            $table->td('Java');
                            $table->td('<b>+</b>');
                            $table->td('<b>+</b><b>+</b>');
                        $table->fin_tr();
                    $table->fin_table();
                $html->close_div();
            $html->close_div();
        $html->close_div();
    $html->close_body();
$html->close_html();
?>