<?php
session_start();
?>
<html>
    <head>
        <title>Samples Interstyle</title>
        <link href="../design.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">

    </head>
    <body>
      <main>
        <?php include ("../listar.php"); ?>
        <section class="wrap">

          <h3>Insert a new sample:</h3>

          <div class="box-wrap">
              <div class="sample_type">
                <a href="module_sample.php?type=Folder">
                  <img src="../assets/images/sample-icon-folder.png" alt="Folder Icon">
                  Folder
                </a>
              </div>

              <div class="sample_type">
                  <a href="module_sample.php?type=Piece">
                    <img src="../assets/images/sample-icon-piece.png" alt="Piece Icon">
                    Piece
                  </a>
              </div>

              <div class="sample_type">
                  <a href="module_sample.php?type=Mesh">
                    <img src="../assets/images/sample-icon-mesh.png" alt="Meshed Sheet Icon">
                    Mesh
                  </a>
              </div>

              <div class="sample_type">
                  <a href="module_sample.php?type=Wallet">
                    <img src="../assets/images/sample-icon-wallet.png" alt="Wallet Icon">
                    Wallet
                  </a>
              </div>

              <div class="sample_type">
                  <a href="module_sample.php?type=AGS">
                    <img src="../assets/images/sample-icon-ags.png" alt="AGS Icon">
                    AGS
                  </a>
              </div>
          </div>

        </section>

        <div class="button-group">
          <button class="">
            <a href="unset_cart.php">Cancel Order</a>
          </button>
          <button class="proceed">
            <a href="">Checkout</a>
          </button>
        </div>

      </main>

    </body>
</html>
