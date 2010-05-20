<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Affiliate extends ORM {

	protected $_has_many = array('affiliate_hits' => array());

} // End Affiliate Model
