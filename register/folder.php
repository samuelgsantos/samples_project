<form action="insert.php" method="GET">

  <div class="box-wrap">

    <div class="form-group">
      <label>Collection: </label>
      <?php include ("fields/collection.php"); ?>
    </div>

    <div class="form-group">
      <label>Quantity: </label>
      <input id='quantity' name='quantity' type='number' width=5>
    </div>

  </div>

  <div class="button-group">
    <input type="hidden" id="type" name="type" value='<?php echo $type?>'>
    <button type="cancel" name="Cancel">Cancel Sample</button>
    <button type="submit" value="Register" class="proceed">Add Sample</button>
  </div>

</form>
