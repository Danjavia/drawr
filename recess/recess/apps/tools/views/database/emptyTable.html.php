<?php
Layout::extend('layouts/database');
$title = 'Empty ' . $tableName;
?>

<h1><span class="highlight">Empty "<?php echo $tableName; ?>" table</span>?</h1>
<h2><a href="<?php echo $controller->urlTo('showTable', $sourceName, $tableName); ?>">No, Just Kidding, Take Me Back</a></h2>

<h2>This action cannot be undone.</h2>
<form method="POST" action="<?php echo $controller->urlTo('emptyTablePost',$sourceName,$tableName); ?>">
	<input class="removed" type="submit" name="confirm" value="Yes, Empty it!" />
</form>