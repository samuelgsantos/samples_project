<form action="insert.php" method="GET"> 
    <label>Collection: </label>
    <?php include ("fields/collection.php"); ?>
    <label>Quantity: </label>
    <input id='quantity' name='quantity' type='number' width=5><br>
    
    <input type="hidden" id="type" name="type" value='<?php echo $type?>'>
    <input type="submit" value="Register">
</form>

            