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
    <?php include ("../listar.php"); ?>
        <h3>Insert new Sample</h3>
        <div class="samples">

            <div class="sample_type sample_type--piece">
                <a href="module_sample.php?type=Folder">Folder</a>
            </div>

            <div class="sample_type sample_type--wallet">
                <a href="module_sample.php?type=Piece">Piece</a>
            </div>

            <div class="sample_type sample_type---folder">
                <a href="module_sample.php?type=Mesh">Mesh</a>
            </div>

            <div class="sample_type sample_type--mesh">
                <a href="module_sample.php?type=Wallet">Wallet</a>
            </div>

            <div class="sample_type sample_type--ags">
                <a href="module_sample.php?type=AGS">AGS</a>
            </div>
        </div>
    </body>
    <p><a href="unset_cart.php">Cancel Order</a></p>
</html>
