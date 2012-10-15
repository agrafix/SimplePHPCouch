<?php
/**
 * SimplePHPCouch Example
 */

header('Content-Type: text/plain');

require 'CouchSimple.class.php';

$couch = new CouchSimple('test', 'localhost', 5984, null, null, true);

$doc = new stdClass();
$doc->_id = 'testdoc-1';
$doc->text = 'Hello SimplePHPCouch!';

echo $couch->storeDoc($doc);
echo "\n";

echo $couch->getDocById('testdoc-1');
echo "\n";

