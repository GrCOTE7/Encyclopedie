<?php 
//		@$Idarticle=$_POST['Idarticle'];// On répére le Idarticle

include("head.php") ?>
<title>correction</title>
<?php include("head2.php") ?>

	<h1>correction</h1>

<?php include("menue.php") ?>	
<div id="corp">
<?php
$Idarticle=$_GET["Idarticle"];


$bdd=new pdo ('mysql:host=localhost;dbname=encyclopedie','root' , '',array(pdo::ATTR_ERRMODE=>pdo::ERRMODE_EXCEPTION));  //ouverture de la bdd
$req = $bdd->prepare('SELECT * FROM article WHERE Idarticle = ?');
//	$req->execute(array("$Idarticle"));
$req->execute(array("$Idarticle"));
$resultat=$req->fetch();


?>


 <!-- Make sure the path to CKEditor is correct. -->
        <script src="ckeditor/ckeditor.js"></script>
		
<form method="POST" action="fragment/correction/EnregistreArticle.php"  enctype="multipart/form-data">

IdEtiquette= <input type="text" name="etiquette"  value="<?php echo $resultat['IdEtiquette'] ; ?>"> <hr>



<?php echo $resultat['IdEtiquette'] ; ?> 


</select>

</select >
<hr>
<label for="titre">
placer votre titre ici
</label>
<input type="text" name="titre"  value="<?php echo $resultat['TITRE'] ; ?> "  id="titre"> <hr>

<label for="sous-titre">
Le sous titre sers au moteur de recherche
</label>
<input type="text" name="sousTitre"  value="<?php echo $resultat['SOUSTITRE'] ; ?> "  id="sous-titre">
<br><input type="submit" name="ok"  placeholder="		"   class="envoyer">
<hr>

<label for="img1">
L'image n°1
</label>
<input type="file" name="img1" id="img1"/><hr />
<strong>
Code de couleur :<br>
Sujet => Bleu , Bras .<br>
Danger => Gras , Surlignée rouge  .<br>
Alert => Gras , Surlignée Orange  .<br>
</strong>
<label for="textarea">
Placer votre article ici <br>
</label>

<textarea name="textarea" id="textarea" rows="50" cols="160">
<?php echo $resultat['DESCRIPTION'] ; ?> 
            </textarea>
            <script>
                CKEDITOR.replace( 'textarea' );
            </script>
			<hr>
			
<label for="img2">
L'image n°2
</label>
<input type="file" name="img2" id="img2"/><hr />

<label for="exemple">
Placer votre exemple ici <br>
</label>
<strong>
Code couleur :<br>
Variable => Rouge .<br>
Variable Super-globale=> Gras bleu .<br>
Fonction => Bleu .<br>
Chiffre  => Orange .<br>
Lettre  => Gris .<br>
Commentaire  => Vers .<br>
</strong>

<textarea id="exemple" name="exemple" rows="50" cols="160" >
<?php echo $resultat['EXEMPLE'] ; ?> 

</textarea>
            <script>
                CKEDITOR.replace( 'exemple' );
            </script>

<hr>



<label for="source">
source
</label>
<input type="text" name="source"  value="<?php echo $resultat['SOURCE'] ; ?> "  id="source"><hr>

<label for="submit">
une fois prêt apuis sur
</label>
<hr>
<input type="submit" name="ok"  placeholder="		"   class="envoyer"><hr>






</form>












<?php include("footer.php") ?>