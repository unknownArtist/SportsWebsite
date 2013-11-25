<?php
return array(
	/* the place the email templates is put*/
	'template_dir' => app_path().DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.'emails'.DIRECTORY_SEPARATOR.'templates',
		
	'view_prefix' => 'emails.templates',
		
	'default_template' => 'Email::templates.default',
		
	/* the placeholder use in template */
	'template_global' => array(
		'APP_LOGO' => '{{Identity::getAppLogoUrl()}}',
		'APP_NAME' => '{{Identity::getAppName()}}',
	),
	/* the placeholder use in mailer */
	'mailer_global' => array(
		'APP_LOGO' => Identity::getAppLogoUrl(),
		'APP_NAME' => Identity::getAppName(),
	),
);