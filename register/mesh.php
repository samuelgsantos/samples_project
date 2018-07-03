<form action="insert.php" method="GET">

  <div class="box-wrap">

    <div class="form-group">
      <label>Tile Size: </label>
      <?php include ("fields/size.php"); ?>
    </div>

    <div class="form-group">
      <label>Color: </label> <!-- Melhor colocar opção(mesmo q a lista seja enorme) senão o cidadão pode colocar um "Red" -->
      <input id='color' name='color' type='text' width=5>
    </div>

    <div class="form-group">
      <label>Pattern: </label>
      <select value="Pattern">
        <option value="straight" >Straight</option>
        <option value="running" >Running</option>
        <option value="random" >Random</option>
        <option value="Herringbone" >herringbone</option>
      </select>
    </div>

    <div class="form-group">
      <label>Swacth Size: </label>
      <input id='swacth_size' name='swacth_size' type='text' width=5><!-- Ver opções para ser Option -->
    </div>

    <div class="form-group">
      <label>Finish: </label>
      <?php include ("fields/finish.php"); ?>
    </div>

  </div>

  <div class="button-group">
    <input type="hidden" id="type" name="type" value='<?php echo $type?>'>
    <button type="cancel" name="Cancel">Cancel Sample</button>
    <button type="submit" value="Register" class="proceed">Add Sample</button>
  </div>

</form>
