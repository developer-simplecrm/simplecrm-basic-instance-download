<?php
$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '6.5.*',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'CE',
    ),
  ),
  'readme' => '',
  'key' => 'SimpleCRMUI',
  'author' => 'SimpleCRM',
  'description' => 'SimpleCRM UI v1.2.1 Plugin',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'SimpleCRM_UI_1_2.1Plugin',
  'published_date' => '2017-04-26 14:50:06',
  'type' => 'module',
  'version' => '1.2.1',
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'SimpleCRM_UI_1_2.1Plugin',
  'copy' => 
  array (

		0 => 
		array (
		'from' => '<basepath>/root/modules/Home/views/view.additionaldetailsretrieve.php',
		'to' => 'modules/Home/views/view.additionaldetailsretrieve.php',
		),

		1 => 
		array (
		'from' => '<basepath>/root/include/ListView/ListView.php',
		'to' => 'include/ListView/ListView.php',
		),
		
		2 => 
		array (
		'from' => '<basepath>/root/include/ListView/ListViewDisplay.php',
		'to' => 'include/ListView/ListViewDisplay.php',

		),

		3 => 
		array (
		'from' => '<basepath>/root/include/ListView/ListViewGeneric.tpl',
		'to' => 'include/ListView/ListViewGeneric.tpl',
		),

		4 => 
		array (
		'from' => '<basepath>/root/include/ListView/ListViewSmarty.php',
		'to' => 'include/ListView/ListViewSmarty.php',
		),

		5 => 
		array (
		'from' => '<basepath>/root/custom_actions.php',
		'to' => 'custom_actions.php',
		),
		
		6 => 
		array (
		'from' => '<basepath>/root/custom/modules/Accounts/process_record_lead.php',
		'to' => 'custom/modules/Accounts/process_record_lead.php',
		),


		7 => 
		array (
		'from' => '<basepath>/root/include/DetailView/DetailView.tpl',
		'to' => 'include/DetailView/DetailView.tpl',
		),

		8 => 
		array (
		'from' => '<basepath>/root/include/MVC/View/SugarView.php',
		'to' => 'include/MVC/View/SugarView.php',
		),

		9 => 
		array (
		'from' => '<basepath>/root/include/SubPanel/RightTapPanelTiles.php',
		'to' => 'include/SubPanel/RightTapPanelTiles.php',
		),

		10 => 
		array (
		'from' => '<basepath>/root/themes/SuiteR/css/style.css',
		'to' => 'themes/SuiteR/css/style.css',
		),

		11 => 
		array (
		'from' => '<basepath>/root/themes/SuiteR/tpls/_headerModuleList.tpl',
		'to' => 'themes/SuiteR/tpls/_headerModuleList.tpl',
		),
		
		12 => 
		array (
		'from' => '<basepath>/root/modules/AOR_Charts/AOR_Chart.php',
		'to' => 'modules/AOR_Charts/AOR_Chart.php',
		),

		13 => 
		array (
		'from' => '<basepath>/root/themes/SuiteR/tpls/_head.tpl',
		'to' => 'themes/SuiteR/tpls/_head.tpl',
		),

		14 => 
		array (
		'from' => '<basepath>/root/themes/SuiteR/fonts/font-awesome.css',
		'to' => 'themes/SuiteR/fonts/font-awesome.css',
		),

		15 => 
		array (
		'from' => '<basepath>/root/include/EditView/header.tpl',
		'to' => 'include/EditView/header.tpl',
		),
		
		16 => 
		array (
		'from' => '<basepath>/root/imagedelete.php',
		'to' => 'imagedelete.php',
		),
		17 => 
		array (
		'from' => '<basepath>/root/include/SugarFields/Fields/Image/EditView.tpl',
		'to' => 'include/SugarFields/Fields/Image/EditView.tpl',
		),
		18 => 
		array (
		'from' => '<basepath>/root/include/EditView/EditView.tpl',
		'to' => 'include/EditView/EditView.tpl',
		),
		
		
			17 => 
		array (
		'from' => '<basepath>/root/include/Popups/tpls/header.tpl',
		'to' => 'include/Popups/tpls/header.tpl',
		),
		18 => 
		array (
		'from' => '<basepath>/root/include/Popups/tpls/PopupGeneric.tpl',
		'to' => 'include/Popups/tpls/PopupGeneric.tpl',
		),
		
		
  ),
);

?>
