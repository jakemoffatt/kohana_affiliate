<?php defined('SYSPATH') or die('No direct script access.');

// Begin tracking an affiliate if the "via" key exists in $_GET
if (array_key_exists('via', $_GET))
{
	Affiliate::track($_GET);
}
