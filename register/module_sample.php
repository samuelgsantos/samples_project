<?php
session_start();

$type = $_GET['type'];
?>

<head>
    <link href="../design.css" rel="stylesheet">
</head>

<header>
  <h1>Order Samples</h1>
  <img src="../assets/images/interstyle_logo2.png" alt="Interstyle Logo">
</header>

<main>
  <section class="wrap">

      <?php
      echo "<h3>Insert new Sample " . $type . "</h3>";
      /* session_start; */

      if ($type == NULL){
          $type = "folder";
      }

          /*if($type == "folder"){
              include "register/folder.php";
          }*/
          switch ($type) {
              case "Folder":
                  include "folder.php";
                  break;
              case "Piece";
                  include "piece.php";
                  break;
              case "Mesh";
                  include "mesh.php";
                  break;
              case "Wallet";
                  include "wallet.php";
                  break;
              case "AGS";
                  include "ags.php";
                  break;
          }

      ?>

  </section>
</main>
