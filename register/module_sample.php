<?php
session_start();

$type = $_GET['type'];
?>
<head>
    <link href="../design.css" rel="stylesheet">
</head>
<?php
echo "<h4>Insert new Sample " . $type . "</h4>";
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