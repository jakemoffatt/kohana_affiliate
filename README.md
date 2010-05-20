Kohana Affiliate Module
=======================

This is a small, simple module meant for tracking visitors who have cliked 
through to your website from an affiliate's website. Affilates are assigned
codes, and when that code is attached to an incoming link, the module logs
the visit and sets the affiliate code to a cookie. Now anytime the user does
something meaningful for which the affiliate recieves a reward, this event
can be tracked and accredited.

## Database Schema

![Affiliate Database Schema](http://yuml.me/diagram/scruffy/class/[affiliates|id;slug;name;code;life]one->many[affiliate_hits|id;affiliate_id;timestamp;target;destination])