<?php defined('SYSPATH') or die('No direct access allowed.');

class Affiliate_Hit_Model extends ORM {

	protected $belongs_to = array(
        'affiliates'
    );

} // End Affiliate Hit Model
