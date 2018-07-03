<form action="insert.php" method="GET">

  <div class="box-wrap">

    <div class="form-group">
      <label>Pattern: </label>
      <select name="pattern">
        <option>Crush</option>
        <option>Ribbon</option>
        <option>Diamond</option>
      </select>
    </div>

    <div class="form-group">
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
      </select>
    </div>

    <div class="form-group">
      <label>Size: </label>
      <select name="size">
        <option>4x4</option>
        <option>6x6</option>
      </select>
    </div>

  </div>

  <div class="button-group">
    <input type="hidden" id="type" name="type" value='<?php echo $type?>'>
    <button type="cancel" name="Cancel">Cancel Sample</button>
    <button type="submit" value="Register" class="proceed">Add Sample</button>
  </div>

</form>
