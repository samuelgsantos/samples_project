<form action="insert.php" method="GET">

  <div class="box-wrap">

    <div class="form-group">
      <label>Collection: </label>
      <?php include ("fields/collection.php"); ?>
    </div>

    <div class="form-group">
      <label>Color: </label> <!-- Melhor colocar opção(mesmo q a lista seja enorme) senão o cidadão pode colocar um "Red" -->
      <input id='color' name='color' type='text' width=5>
    </div>

    <div class="form-group">
      <label>Size: </label>
      <?php include ("fields/size.php"); ?>
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
