<?php
/*define ( 'MiPush_Root', dirname ( __FILE__ ) . '/' );
function mipushAutoload($classname) {
	$parts = explode ( '\\', $classname );
	$path = MiPush_Root . implode ( '/', $parts ) . '.php';
	if (file_exists ( $path )) {
		include ($path);
	}
}

spl_autoload_register ( 'mipushAutoload' );*/

function classLoader($class)
{
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $path = str_replace('Xmpush' . DIRECTORY_SEPARATOR, '', $path);

    $file = __DIR__ . '/sdk/' . $path . '.php';

    if (file_exists($file)) {

        require $file;
    }
}
spl_autoload_register('classLoader');
