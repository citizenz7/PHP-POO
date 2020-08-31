<?php
include 'includes/auto_class_loader.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Class Film - POOL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>

  <body>

  <?php
            // require 'classes/animal.class.php';
            //
            // // $batman = new Film();
            // // $superman = new Film();
            // //
            // // $batman->setTitre('Batman');
            // // $superman->setTitre('superman');
            // //
            // // echo $batman->getTitre() . '<br>';
            // // echo $superman->getTitre() . '<br>';
            //
            // $batman = new Film('1', 'Batman', 'Olivier Prieur', '2003');
  ?>

  <div class="container py-3 px-3 mt-3 border">
    <form action='' method='post'>
            <label for='titre'>Titre : </label>
            <input type='text' name='titre' id='titre'><br>
            <label for='realisateur'>Realisateur</label>
            <input type='text' name='realisateur' id='realisateur'><br>
            <label for='annee'>Annee</label>
            <input type='text' name='annee' id='annee'><br>
            <input type="reset" value="Annuler"> <input type='submit' name="submit" value='Envoyer'>
        </form>
  </div>

  <?php
  require 'classes/film.class.php';
  require 'classes/admin.class.php';

  if(isset($_POST['submit'])) {
    //+ Vérification des données reçues (regex + filtres)
    //+ Stockage des données (base de données)

    $avatar = new Admin('1', 'Avatar', 'James Cameron', '2001');
    $batman = new Film('2', $_POST['titre'], $_POST['realisateur'], $_POST['annee']);
  ?>

<div class="container pt-5 mt-3">
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Titre</th>
        <th>Réalisateur</th>
        <th>Année</th>
      </tr>
    </thead>
    <tbody>
      <!-- <tr>
        <td><?php //echo $batman->getId2(); ?></td>
        <td><?php //echo $batman->getTitre2(); ?></td>
        <td><?php //echo $batman->getRealisateur2(); ?></td>
        <td><?php //echo $batman->getAnnee2(); ?></td>
      </tr> -->
      <tr>
        <td><?php echo $batman->getId(); ?></td>
        <td><?php echo $batman->getTitre(); ?></td>
        <td><?php echo $batman->getRealisateur(); ?></td>
        <td><?php echo $batman->getAnnee(); ?></td>
      </tr>
    </tbody>
  </table>
</div>

<?php } ?>

<?php
$canard = new Oiseau('canard');
echo $canard->getNom();

$canard->setPosition(5);
echo $canard->getPosition();
?>

  </body>
</html>
