<?php

include(__DIR__ . '/webdata/init.inc.php');

Pix_Session::setAdapter('cookie', array('secret' => getenv('SESSION_SECRET'), 'cookie_key' => 'SESSION_OPENGOVCONTACT'));
Pix_Controller::addCommonHelpers();
Pix_Controller::dispatch(__DIR__ . '/webdata/');
