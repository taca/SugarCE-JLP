<?php 
$manifest = array( 
	'acceptable_sugar_versions' => array (
		'regex_matches' => array (
			"5\.5\.0.*",
		),
	),
	'acceptable_sugar_flavors' => array (
		'CE',
	),
	'name' => 'JapaneseLanguagePack',
	'description' => 'SugarCE Japanese Language Pack (lang-file-only)',
	'type' => 'langpack',
	'is_uninstallable' => true,
	'version' => '5.5.0RC2',
	'published_date' => '2009-10-26 22:00:00',
	'author' => 'SugarForum.jp',
);

$installdefs = array(
	'id'=> 'ja',
	'image_dir'=>'<basepath>/images',
	'copy' => array(
		array('from'=> '<basepath>/include','to'=> 'include'),
		array('from'=> '<basepath>/modules','to'=> 'modules'),
		array('from'=> '<basepath>/install','to'=> 'install'),
	)
);
?>