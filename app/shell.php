

<?php include("elements/header/header.php");?>
<section class="container">
  <div class="competition " hidden>
    <?php include('competition/index.php');?>
  </div>
  <div class="resultat pageN" >
    <?php include('resultat/index.php');?>
  </div>

  <div class="classementA" hidden>
    <?php include('classement/index.php');?>
  </div>
  <div class="admin" hidden>
    <?php include('connexion/connexion.php');?>
  </div>
</section>
