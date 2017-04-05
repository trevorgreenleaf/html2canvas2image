<?php

// get the image
$json = file_get_contents('php://input');
$data = json_decode($json);

file_put_contents('meme.png', base64_decode($data->image));


?>