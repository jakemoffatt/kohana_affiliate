<?php defined('SYSPATH') or die('No direct script access.');

class Affiliate {

	/**
	 * Examines the $_GET array for an affiliate tracking code and parameters.
	 * Logs an affiliate hit and creates an affiliate tracking cookie.
	 * @param  array  A copy of the $_GET array
	 */
	public static function track(array $params)
	{
		// Stub
	}

	/**
	 * Checks to see if an affiliate cookie exists.
	 * @return  bool  Whether or not the affiliate cookie exists
	 */
	public static function cookie_exists()
	{
		// Stub

		return FALSE;
	}

	/**
	 * Identifies the affiliate which a user came from based on the affilaite
	 * tracking cookie and returns that affiliate. Returns NULL if the cookie
	 * is missing or invalid.
	 * @return  Affiliate  The affiliate to which the tracking code applies
	 */
	public static function identify()
	{
		// Stub

		return NULL;
	}

	/**
	 * Clears an affiliate tracking cookie if one exists
	 */
	public static function clear()
	{
		// Stub
	}

} // End Affilate
