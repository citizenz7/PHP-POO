<?php
spl_autoload_register('my_auto_class_loader');

function my_auto_class_loader($classname) {
  require 'classes' . DIRECTORY_SEPARATOR . $classname . '.php';
}

?>
