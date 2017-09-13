<?php 
 //WARNING: The contents of this file are auto-generated

 

    /*
    Facebook configuration file
    Author     : Nitheesh.R <nitheesh@simplecrm.com.sg>
    Date       : Feb-12-2017
    PHP version : 5.6
    */

require_once('config.php');
// initialize a temp array that will hold the options we want to create
$links = array();
global $sugar_config;
// add button1 to $links
$links['Administration']['config_facebook_settings'] = array(
 
    // pick an image from /themes/Sugar5/images
    // and drop the file extension
    'face3',
 
    // title of the link 
    'Click to Configure Facebook',
 
    // description for the link
    'Here you can configure settings for Facebook.',
 
    // where to send the user when the link is clicked
    './index.php?module=Administration&action=configureFacebookSettings',
 
);
 

// add our new admin section to the main admin_group_header array
$admin_group_header []= array(
 
    // The title for the group of links
    '<b>Facebook Configuration</b>', 
 
    // leave empty, it's used for something in /include/utils/layout_utils.php 
    // in the get_module_title() function
    '', 
 
    // set to false, it's used for something in /include/utils/layout_utils.php 
    // in the get_module_title() function
    false, 
 
    // the array of links that you created above
    // to be placed in this section
    $links, 
 
    // a description for what this section is about
    'Configure Facebook Settings'
 
);



 

    /*
    Twitter configuration file
    Author     : Nitheesh.R <nitheesh@simplecrm.com.sg>
    Date       : Feb-12-2017
    PHP version : 5.6
    */

require_once('config.php');
// initialize a temp array that will hold the options we want to create
$links = array();
global $sugar_config;
// add button1 to $links
$links['Administration']['config_twitter_settings'] = array(
 
    // pick an image from /themes/Sugar5/images
    // and drop the file extension
    'twit3',
 
    // title of the link 
    'Click to Configure Twitter',
 
    // description for the link
    'Here you can configure settings for Twitter.',
 
    // where to send the user when the link is clicked
    './index.php?module=Administration&action=configureTwitterSettings',
 
);
 

// add our new admin section to the main admin_group_header array
$admin_group_header []= array(
 
    // The title for the group of links
    '<b>Configure Twitter Settings</b>', 
 
    // leave empty, it's used for something in /include/utils/layout_utils.php 
    // in the get_module_title() function
    '', 
 
    // set to false, it's used for something in /include/utils/layout_utils.php 
    // in the get_module_title() function
    false, 
 
    // the array of links that you created above
    // to be placed in this section
    $links, 
 
    // a description for what this section is about
    'Configure Twitter Settings'
 
);





/**
 *  SugarCRM 7 Admin Link Notes
 * 
 *  http://support.sugarcrm.com/02_Documentation/04_Sugar_Developer/
 *      Sugar_Developer_Guide_7.0/50_Extension_Framework/Extensions/Administration
 *  
 *  $admin_option_defs = array();
 *  $admin_option_defs['Administration']['Section_Key'] = array(
 *      'Administration', // Icon name. Available icons in ./themes/default/images
 *      'LBL_LINK_NAME', //Link name label
 *      'LBL_LINK_DESCRIPTION', //Link description label
 *      'index.php?module=tag_Tags&action=Settings' //Link URL
 *  );
 * 
 *  $admin_group_header[] = array(
 *      'LBL_SECTION_HEADER', //Section header label
 *      '', //$other_text parameter for get_form_header()
 *      false, //$show_help parameter for get_form_header()
 *      $admin_option_defs, //Section links
 *      'LBL_SECTION_DESCRIPTION' //Section description label
 *  );
 * 
 */


$admin_option_defs = array();

// $admin_option_defs['Panel_Key']['Section_Key']

$admin_option_defs['jjwg_Maps']['config'] = array(
    'Administration', 
    'LBL_JJWG_MAPS_ADMIN_CONFIG_TITLE', 
    'LBL_JJWG_MAPS_ADMIN_CONFIG_DESC', 
    './index.php?module=jjwg_Maps&action=config'
    );
$admin_option_defs['jjwg_Maps']['geocoded_counts'] = array(
    'Contacts', 
    'LBL_JJWG_MAPS_ADMIN_GEOCODED_COUNTS_TITLE', 
    'LBL_JJWG_MAPS_ADMIN_GEOCODED_COUNTS_DESC', 
    './index.php?module=jjwg_Maps&action=geocoded_counts'
);
$admin_option_defs['jjwg_Maps']['geocoding_test'] = array(
    'CreateContacts', 
    'LBL_JJWG_MAPS_ADMIN_GEOCODING_TEST_TITLE', 
    'LBL_JJWG_MAPS_ADMIN_GEOCODING_TEST_DESC', 
    './index.php?module=jjwg_Maps&action=geocoding_test'
);
$admin_option_defs['jjwg_Maps']['geocode_addresses'] = array(
    'CreateContacts', 
    'LBL_JJWG_MAPS_ADMIN_GEOCODE_ADDRESSES_TITLE', 
    'LBL_JJWG_MAPS_ADMIN_GEOCODE_ADDRESSES_DESC', 
    './index.php?module=jjwg_Maps&action=geocode_addresses'
);
//$admin_option_defs['jjwg_Maps']['donate'] = array(
   // 'Opportunities', 
   // 'LBL_JJWG_MAPS_ADMIN_DONATE_TITLE', 
    //'LBL_JJWG_MAPS_ADMIN_DONATE_DESC', 
    //'./index.php?module=jjwg_Maps&action=donate'
//);
$admin_option_defs['jjwg_Maps']['address_cache'] = array(
    'Contacts', 
    'LBL_JJWG_MAPS_ADMIN_ADDRESS_CACHE_TITLE', 
    'LBL_JJWG_MAPS_ADMIN_ADDRESS_CACHE_DESC', 
    './index.php?module=jjwg_Address_Cache&action=index'
);


$admin_group_header[]= array(
    'LBL_JJWG_MAPS_ADMIN_HEADER', 
    '', 
    false, 
    $admin_option_defs, 
    'LBL_JJWG_MAPS_ADMIN_DESC'
);


 
/**
 * Asterisk SugarCRM Integration 
 * (c) KINAMU Business Solutions AG 2009
 * 
 * Parts of this code are (c) 2006. RustyBrick, Inc.  http://www.rustybrick.com/
 * Parts of this code are (c) 2008 vertico software GmbH  
 * Parts of this code are (c) 2009 abcona e. K. Angelo Malaguarnera E-Mail admin@abcona.de
 * http://www.sugarforge.org/projects/yaai/
 * 
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 * details.
 * 
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 * 
 * You can contact KINAMU Business Solutions AG at office@kinamu.com
 * 
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU General Public License version 3.
 * 
 */

$admin_option_defs=array();
$admin_option_defs['Administration']['asterisk_configurator']= array($image_path . 'Calls','LBL_MANAGE_ASTERISK','LBL_ASTERISK','./index.php?module=Configurator&action=asterisk_configurator');
$admin_group_header[]=array('LBL_ASTERISK_TITLE','',false,$admin_option_defs, 'LBL_ASTERISK_DESC');



?>