<?php defined('SYSPATH') or die('No direct access allowed.');

// Can other affiliate cookies overwrite the current one?
$config['overwritable']	= true;

// Is the affiliate cookie life extended on each affiliate hit?
$config['extendable'] = true;

// How long should affiliate cookies last by default?
$config['default_life'] = Date::MONTH;

// What should the parameter, which defines who the affiliate is, be called?
$config['param_name'] = 'via';

?>