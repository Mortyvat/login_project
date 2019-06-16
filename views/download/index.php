<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Stahnout testovací soubor</h3>
  </div>
  <div class="panel-body">
  <div class="form-group">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <a id ="prdel" href="http://localhost/demo/login_project/test.zip">Test</a>
    <div class="form-group">
    <label>Název souboru</label>
    		<input type="text" name="title" class="form-control" />
    	</div>
    	<input class="btn btn-primary" name="submit" type="submit" value="Stáhnout" />
        <a class="button" href="<?php echo ROOT_PATH; ?>home">Cancel</a>
        
    </form>
    </div>
  </div>
</div>
<script>

</script>