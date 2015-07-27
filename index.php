<?php
if(!defined('BASH_PATH')){
    define('BASH_PATH', dirname(__FILE__).'/');
}
include BASH_PATH.'config/web.php';

echo $path['root'];
