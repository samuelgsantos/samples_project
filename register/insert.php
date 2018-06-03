<?php
session_start();
include ("../conexao.php");

if (isset($_GET['type'])){$type = $_GET['type'];}
else{$type = NULL;}

if (isset($_GET['collection'])){$collection = $_GET['collection'];}
else{$collection = NULL;}

if (isset($_GET['quantity'])){$quantity = $_GET['quantity'];}
else{$quantity = NULL;}

if (isset($_GET['size'])){$size = $_GET['size'];}
else{$size = NULL;}

if (isset($_GET['color'])){$color = $_GET['color'];}
else{$color = NULL;}

if (isset($_GET['finish'])){$finish = $_GET['finish'];}
else{$finish = NULL;}

if (isset($_GET['pattern'])){$pattern = $_GET['pattern'];}
else{$pattern = NULL;}

if (isset($_GET['swacth_size'])){$swacth_size = $_GET['swacth_size'];}
else{$swacth_size = NULL;}


echo $type . ", " . $collection . ", " . $quantity . ", " . $size . ", " . $color . ", " . $finish . ", " . $pattern . ", " . $swacth_size;

//setcookie('cart', 1, time() - 3600); /* Linha para apagar o cookie (tirar o comentário da linha para apagar) */
if(isset($_COOKIE['cart'])) {$cart = $_COOKIE['cart'];}
else{
    $sql_cart = "INSERT INTO `cart` (`id_cart`, `id_customer` , `id_shipping` , `date`, `status`) VALUES (NULL, NULL, NULL, CURRENT_TIMESTAMP, 'open')";
    $insert_cart = mysqli_query($conexao,$sql_cart);
    $cart = mysqli_insert_id($conexao);
    setcookie('cart', $cart);
    echo "<br><br>novo Cart criado com o número: " . $cart;
    echo "<br> O ultimo registro é: " . $id_sample = mysqli_insert_id($conexao);
}

//inserindo sample no database
$sql = "INSERT INTO `sample` (`id_sample`, `id_cart`, `type`, `collection`, `quantity`, `size`, `color`, `finish`, `pattern`, `swacth_size`) VALUES (NULL, '$cart', '$type', '$collection', '$quantity', '$size', '$color', '$finish', '$pattern', '$swacth_size');";
$insert_sample = mysqli_query($conexao,$sql);
echo "<br> O ultimo registro é: " . $id_sample = mysqli_insert_id($conexao);


/*INSERT INTO `cart` 
    (`id_cart`, `id_sample` , `id_customer` , `id_shipping` , `date`, `status`) 
    VALUES (NULL, '1', 'Mesh', '', '', '', 'RED', '', '', '2x2 ');
echo "<p>" . $_COOKIE['cart'] . "</p>";
/* linha para inserir no banco
INSERT INTO `sample` (`id_sample`, `id_cart`, `type`, `collection`, `quantity`, `size`, `color`, `finish`, `pattern`, `swacth_size`) VALUES (NULL, '1', 'Mesh', '', '', '', 'RED', '', '', '2x2 ');
*/
?>
<p>Sample Inserted succesfully.</p>
<a href="index.php">Click here to add more Samples</a><br>
<a href="order.php">Click here to close order</a><br>
<?php
header("Location:index.php",3)
?>