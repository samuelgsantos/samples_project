<?php
    include ("conexao.php");
    if(isset($_COOKIE['cart'])) {$cart = $_COOKIE['cart'];}
    else {$cart = NULL;}    
    $sql_list = "SELECT * FROM `sample` WHERE `id_cart`=$cart";
    $list = mysqli_query($conexao, $sql_list);


    if ($cart <> 0){
        while ($row = mysqli_fetch_assoc($list)){
        echo "<table border=1>
                <tr>
                    <th> " . $row['type'] . "</th>
                    <th> " . $row['quantity'] . " " . $row['collection'] . " " . $row['size'] . " " . $row['color'] . " " . $row['finish'] . " " . $row['pattern'] . " " . $row['swacth_size'] . " 
                </tr>
            </table>";

        }
    }
?>