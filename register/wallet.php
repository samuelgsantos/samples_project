<form action="insert.php" method="GET"> 
    <label>Collection: </label>
    <?php include ("fields/collection.php"); ?>
    
    <label>Color: </label> <!-- Melhor colocar opção(mesmo q a lista seja enorme) senão o cidadão pode colocar um "Red" -->
    <input id='color' name='color' type='text' width=5><br>
    
    <label>Size: </label>
    <?php include ("fields/size.php"); ?>
    
    <label>Finish: </label>
    <?php include ("fields/finish.php"); ?>
    
    <input type="hidden" id="type" name="type" value='<?php echo $type?>'>
    <input type="submit" value="Register">
</form>