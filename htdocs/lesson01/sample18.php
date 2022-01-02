<?php
$file = file_get_contents('feed.json');
$json = json_decode($file);

echo $json->items[1]->title;
foreach ($json->title as $item):
  echo $item->title;
endforeach;
?>