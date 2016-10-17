<?php

$height=['john'=>178,'rebert'=>189,'joly'=>186];
print_r($height);
echo '<hr>';
// echo $height['john'];

foreach ($height as $key =>$value){
    echo $key.':'.$value.'<hr>';
}



?>