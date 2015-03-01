<?php
// Include CForm
include('../../autoloader.php');

//parameter = path to folder.
$cache = new \phpe\cache\CCache('../../folder');

//parameter = name of file and content.
$cache->Put('file', 'hello');

/**
* Prune a item from cache.
*
* @param string $key to the cached object.
*/
$cache->Prune($key);
/**
* Prune all items from cache.
*
* @return int number of items removed.
*/
$cache->PruneAll();

?>


<!doctype html>
<meta charset=utf8>
<title>CCache</title>
<h1>Get file cached content</h1>
<?=$cache->Get('file')?>

