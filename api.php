<?php

$json_dischi = file_get_contents('dischi.json');
header('Content-type: application/json');
echo $json_dischi;
