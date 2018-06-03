<form action="insert.php" method="GET"> 
    <label>Size: </label>
    <?php include ("fields/size.php"); ?>
    
    <label>Color: </label> <!-- Melhor colocar opção(mesmo q a lista seja enorme) senão o cidadão pode colocar um "Red" -->
    <input id='color' name='color' type='text' width=5><br>
    
    <label>Pattern: </label>
    <select value="Pattern">
        <option value="straight" >Straight</option>
        <option value="running" >Running</option>
        <option value="random" >Random</option>
        <option value="Herringbone" >herringbone</option>
    </select><br>
    
    <label>Swacth Size: </label>
    <input id='swacth_size' name='swacth_size' type='text' width=5><br><!-- Ver opções para ser Option -->

    <label>Finish: </label>
    <?php include ("fields/finish.php"); ?>
    
    <input type="hidden" id="type" name="type" value='<?php echo $type?>'>
    <input type="submit" value="Register">
</form>