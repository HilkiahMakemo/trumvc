<?php

if(!defined('START_TIME')) define('START_TIME', microtime(true));
if(!defined('DS')) define('DS', $DS = DIRECTORY_SEPARATOR);
if(!defined('_ROOT_')) define('_ROOT_', dirname(__DIR__) . DS);
if(!defined('CLIENT')) define('CLIENT', _ROOT_ . 'client' . DS);
if(!defined('SERVER')) define('SERVER', _ROOT_ . 'server' . DS);
if(!defined('SYSTEM')) define('SYSTEM', _ROOT_ . 'system' . DS);
if(!defined('VENDOR')) define('VENDOR', _ROOT_ . 'vendor' . DS);

/**
 ********************************************************************
 * 
 ********************************************************************
 * 
 * 
 */
require_once VENDOR . 'autoload.php';

/**
 ********************************************************************
 * 
 ********************************************************************
 * 
 */
$APP = require SYSTEM . 'boot' .DS. 'init.php';

/**
 ********************************************************************
 * 
 ********************************************************************
 * 
 * 
 */
return $APP->response( START_TIME );