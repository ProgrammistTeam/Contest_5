<?php
define('SERVER', 'mysql2.ph-hos.osemka.pl');
define ('USER', '1491912574_f');
define ('PASSWORD', 'trudnehaslo1');
define ('DB', '1335951_warsaw');
define ('WITRYNA', 'http://contestforwarsaw.awsome.pl/');
function __autoload($className){ 
    require 'class/'. $className.'.php';
}