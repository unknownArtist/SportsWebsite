<?php

return array(
	'providers' => Config::get('auth.social'),
    'models' => array(
        'user' => '\User',
        'user_social' => '\SocialConnection',
    )
);