<?php
use Noneslad\HTML\html;

$html = new html();
$html->alert("Bienvenue sur la page d'accueil !");
$date = date('d-m-Y');
$html->video('',array('src' => 'img/movie.mp4'));
$html->audio('',array('src' => 'img/horse.ogg'));

$text1 = 'Le Lorem Ipsum est simplement du faux texte employ� dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de limprimerie depuis les ann�es 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour r�aliser un livre sp�cimen de polices de texte. Il na pas fait que survivre cinq si�cles, mais sest aussi adapt� � la bureautique informatique, sans que son contenu nen soit modifi�. Il a �t� popularis� dans les ann�es 1960 gr�ce � la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus r�cemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.';
$text2 = 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens est source de distractions, et emp�che de se concentrer sur la mise en page elle-m�me. Lavantage du Lorem Ipsum sur un texte g�n�rique comme Du texte. Du texte. Du texte. est quil poss�de une distribution de lettres plus ou moins normale, et en tout cas comparable avec celle du fran�ais standard. De nombreuses suites logicielles de mise en page ou �diteurs de sites Web ont fait du Lorem Ipsum leur faux texte par d�faut, et une recherche pour Lorem Ipsum vous conduira vers de nombreux sites qui nen sont encore qu� leur phase de construction. Plusieurs versions sont apparues avec le temps, parfois par accident, souvent intentionnellement (histoire dy rajouter de petits clins doeil, voire des phrases embarassantes).';
$text3 = 'Plusieurs variations de Lorem Ipsum peuvent �tre trouv�es ici ou l�, mais la majeure partie dentre elles a �t� alt�r�e par laddition dhumour ou de mots al�atoires qui ne ressemblent pas une seconde � du texte standard. Si vous voulez utiliser un passage du Lorem Ipsum, vous devez �tre s�r quil ny a rien dembarrassant cach� dans le texte. Tous les g�n�rateurs de Lorem Ipsum sur Internet tendent � reproduire le m�me extrait sans fin, ce qui fait de lipsum.com le seul vrai g�n�rateur de Lorem Ipsum. Iil utilise un dictionnaire de plus de 200 mots latins, en combinaison de plusieurs structures de phrases, pour g�n�rer un Lorem Ipsum irr�prochable. Le Lorem Ipsum ainsi obtenu ne contient aucune r�p�tition, ni ne contient des mots farfelus, ou des touches dhumour.';

$html->ficheArt('Qu est ce que le lorem',$text1,'Origine','img/videocam.jpg',$date);
$html->ficheArt('Pourquoi l utiliser',$text2,'Raison','img/videocam.jpg',$date);
$html->ficheArt('Ou l avoir',$text3,'Location','img/videocam.jpg',$date);