<?php

header('Content-type: application/json; charset: utf-'.'8');
header('Cache-Control: must-revalidate');

$set_id = '72157627787685973';  // **** Replace 72157626404485997 with your current photoset id **

$user_id = '21130674@N07';


$url = 'http://api.flickr.com/services/feeds/photoset.gne?set='.$set_id.'&nsid='.$user_id.'&format=json&nojsoncallback=1';

if (!empty($_REQUEST['tags'])) {
    $url .= '&tags=' . urlencode($_REQUEST['tags']);
}

echo file_get_contents($url);

?>