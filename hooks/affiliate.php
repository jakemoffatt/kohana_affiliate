<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Affiliate {

    public function track() {
        // Begin tracking an affiliate if the "via" key exists in $_GET
        if (array_key_exists('via', $_GET))
        {
            Affiliate::track($_GET);
        }
    }
}

?>

Event::add('affiliate.track', array('Affiliate', 'track'));