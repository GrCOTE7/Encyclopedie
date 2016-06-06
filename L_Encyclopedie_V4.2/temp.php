<?php
$req = $bdd->prepare('UPDATE jeux_video SET prix = :nvprix, nbre_joueurs_max = :nv_nb_joueurs WHERE nom = :nom_jeu');
$req->execute(array(
	'nvprix' => $nvprix,
	'nv_nb_joueurs' => $nv_nb_joueurs,
	'nom_jeu' => $nom_jeu
	));


 Notice: Undefined variable: Idarticle in E:\INTERNETS\_site_internet\data\localweb\local\L_Encyclopedie_V4.1\EnregistreArticle.php on line 198

$save = $bdd->prepare('UPDATE article SET TITRE = :TITRE WHERE Idarticle = :Idarticle') ;
$save->execute(array(
'TITRE' => $TITRE
);


$save = $bdd->prepare('UPDATE article SET TITRE = :TITRE , SOUSTITRE = :SOUSTITRE, DESCRIPTION = :DESCRIPTION, EXEMPLE = :EXEMPLE, SOURCE = :SOURCE , IdEtiquette = :IdEtiquette ,img1 = :img1 ,img2 =:img2 ,img3 = :img3 WHERE Idarticle = :Idarticle


$save->execute(array(
'TITRE' => $TITRE,
'SOUSTITRE' => $SOUSTITRE,
'DESCRIPTION' => $DESCRIPTION,
'EXEMPLE' => $EXEMPLE,
'SOURCE' => $SOURCE,
'IdEtiquette' => $IdEtiquette,
'img1' => $img1name,
'img2' => $img2name,
'img3' => $img3name ,
'Idarticle' => $Idarticle ;
));


?>