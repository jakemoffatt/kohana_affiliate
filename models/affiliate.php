<?php defined('SYSPATH') or die('No direct access allowed.');

class Affiliate_Model extends ORM {

	protected $has_many = array(
        'affiliate_hits',
    );

	public function hit($target = NULL)
	{
		$hit = ORM::factory('affiliate_hit');
		$hit->affiliate_id = $this->id;
		$hit->target = $target;
		$hit->timestamp = time();
		$hit->save();
		return $hit;
	}

} // End Affiliate Model
