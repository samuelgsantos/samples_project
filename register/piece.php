<form action="insert.php" method="GET"> 
    <label>Size: </label>
    <?php include ("fields/size.php"); ?>
    
    <label>Color: </label> <!-- Melhor colocar opção(mesmo q a lista seja enorme) senão o cidadão pode colocar um "Red" -->
    <input id='color' name='color' type='text' width=5><br>
    
    
    <label>Quantity: </label>
    <input id='quantity' name='quantity' type='number' width=5><br>

    <label>Finish: </label>
    <?php include ("fields/finish.php"); ?>
    
    <input type="hidden" id="type" name="type" value='<?php echo $type?>'>
    <input type="submit" value="Register">
</form>
