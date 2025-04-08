<?php
// This file is generated. Do not modify it manually.
return array(
	'greeting-block' => array(
		'$schema' => 'https://schemas.wp.org/trunk/block.json',
		'apiVersion' => 2,
		'name' => 'my-custom/greeting-block',
		'title' => 'Greeting Block',
		'category' => 'text',
		'icon' => 'smiley',
		'description' => 'A block to display a custom greeting.',
		'attributes' => array(
			'name' => array(
				'type' => 'string',
				'default' => 'Visitor'
			)
		),
		'supports' => array(
			'align' => true
		),
		'editorScript' => 'file:./index.js',
		'style' => 'file:./style.css'
	)
);
