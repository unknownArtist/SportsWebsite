<?php

return array(

	// Beware that this values will be used across identity components
	// ensure you change it into proper model, if you plan to change it
	'relations' => array(

		'user' => array(

			'model' => 'User',

		),

		'attachment' => array(

			'model' => 'Attachment',

		),
	)
);