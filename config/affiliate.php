<?php defined('SYSPATH') or die('No direct access allowed.');

return array
(
	// Can other affiliate cookies overwrite the current one?
	'overwritable' => TRUE,

	// Is the affiliate cookie life extended on each affiliate hit?
	'extendable'   => TRUE,

	// How long should affiliate cookies last by default?
	'default_life' => Date::MONTH,
);
