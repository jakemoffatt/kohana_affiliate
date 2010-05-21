<?php defined('SYSPATH') or die('No direct script access.');

class Affiliate {

	const CODE_KEY = 'affiliate_code';

	/**
	 * Examines the $_GET array for an affiliate tracking code and parameters.
	 * Logs an affiliate hit and creates an affiliate tracking cookie.
	 * @param  array  A copy of the $_GET array
	 */
	public static function track(array $params)
	{
		$affiliate = ORM::factory('affiliate')
			->where('code', '=', $params['via'])
			->find();

		if ($affiliate->loaded())
		{
			$target = Arr::get($params, 'target');
			$affiliate->hit($target);

			$code = Cookie::get(Affiliate::CODE_KEY);

			$should_create_cookie = (bool)
			(
				! $code
				OR
				$code !== $affiliate->code AND Kohana::config('affiliate.overwritable')
				OR
				$code === $affiliate->code AND Kohana::config('affiliate.extendable')
			);

			$life = $affiliate->life ? $affiliate->life : Kohana::config('affiliate.default_life');

			if ($should_create_cookie)
			{
				Cookie::set(Affiliate::CODE_KEY, $affiliate->code, $life);
			}
		}
	}

	/**
	 * Checks to see if an affiliate cookie exists.
	 * @return  bool  Whether or not the affiliate cookie exists
	 */
	public static function cookie_exists()
	{
		return (bool) Cookie::get(Affiliate::CODE_KEY);
	}

	/**
	 * Identifies the affiliate which a user came from based on the affilaite
	 * tracking cookie and returns that affiliate. Returns NULL if the cookie
	 * is missing or invalid.
	 * @return  Affiliate  The affiliate to which the tracking code applies
	 */
	public static function identify()
	{
		$affiliate = NULL;

		if (Affiliate::cookie_exists())
		{
			$affiliate = ORM::factory('affiliate')
				->where('code', '=', Cookie::get(Affiliate::CODE_KEY))
				->find();

			if ( ! $affiliate->loaded())
			{
				$affiliate = NULL;
			}
		}

		return $affiliate;
	}

	/**
	 * Clears an affiliate tracking cookie if one exists
	 */
	public static function clear()
	{
		return Cookie::delete(Affiliate::CODE_KEY);
	}

} // End Affilate
