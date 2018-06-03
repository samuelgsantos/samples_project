<form action="insert.php" method="GET"> 
    <label>Pattern: </label>
    <select name="pattern">
        <option>Crush</option>
        <option>Ribbon</option>
        <option>Diamond</option>
    </select><br>
    
    <label>Color: </label> <!-- Melhor colocar opção(mesmo q a lista seja enorme) senão o cidadão pode colocar um "Red" -->
    <select name="color">
        <option>Crush - Pearl</option>
        <option>Crush - Frost</option>
        <option>Crush - Chacoal</option>
        <option>Crush - Coal</option>
        <option>Crush - Topazine</option>
        <option>Crush - Aventurine</option>
        <option>Crush - Aquamarine</option>
        <option>Crush - Amazonite</option>
    
        <option>Ribbon - Cascata</option>
        <option>Ribbon - White</option>
        <option>Ribbon - Grey</option>
        <option>Ribbon - Gregory</option>
        <option>Ribbon - Black</option>
        <option>Ribbon - Leather</option>
        <option>Ribbon - Kiss</option>
        <option>Ribbon - Horizon</option>
        <option>Ribbon - Tempest</option>
        <option>Ribbon - Aqua</option>
        <option>Ribbon - Fresh Green</option>
        <option>Ribbon - Tropicana</option>

        <option>Diamond - Pure </option>
        <option>Diamond - Natural </option>
    </select><br>
    
    <label>Size: </label>
    <select name="size">
        <option>4x4</option>
        <option>6x6</option>
    </select><br>
         
    <input type="hidden" id="type" name="type" value='<?php echo $type?>'>
    <input type="submit" value="Register">
</form>