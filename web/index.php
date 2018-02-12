<?php

define('ROOT',dirname(realpath(getcwd())));
define('TEMP_ROOT',ROOT.'/app/view/templates');
define('CACHE_PATH',ROOT.'/runtime/cache');
define('COMPILE_PATH',ROOT.'/runtime/compile');



require ROOT . '/vendor/autoload.php';
require ROOT.'/vendor/smarty/smarty/libs/Smarty.class.php';

$conf = require 'config.php';


(new JiSwoole\Server($conf))->run();





