<?php
return array(
    'name' => 'Заглушка',
    'description' => 'Закрывает доступ к магазину на время проведения технических работ.',
    'vendor' => '1042611',
    'version' => '1.1',
	'img'  => 'img/icon.png',
	'handlers' => array(
		'routing' => 'routing',
		'backend_menu' => 'backendmenu'
	),
	'frontend' => true,
	'custom_settings' => true
);
