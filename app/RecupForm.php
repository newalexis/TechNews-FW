<?php
/*
=================
app/RecupForm.php
=================
*/

if(!empty($_POST[ 'IDCATEGORIE'])  && !empty($_POST[ 'TITREARTICLE'])    && !empty($_POST[ 'FEATUREDIMAGEARTICLE'])   && !empty($_POST[ 'CONTENUARTICLE']))
{

    $formulaire = array(
      'IDCATEGORIE' => $_POST[ 'IDCATEGORIE'] ,
      'TITREARTICLE' => $_POST[ 'IDCATTITREARTICLEGORIE'] ,
      'FEATUREDIMAGEARTICLE' => $_POST[ 'FEATUREDIMAGEARTICLE'] ,
      'CONTENUARTICLE' => $_POST[ 'CONTENUARTICLE']
      ) ;

} else
{
  echo 'Merci de renseigner tous les champs.' ;

} //if(    (!empty()




 ?>
