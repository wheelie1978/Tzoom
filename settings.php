<?php

/*
 * @author    Shaun Daubney
 * @package   theme_tzoom
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    // Basic Heading
    $name = 'theme_tzoom/basicheading';
    $heading = get_string('basicheading', 'theme_tzoom');
    $information = get_string('basicheadingdesc', 'theme_tzoom');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
	
// Logo file setting
$name = 'theme_tzoom/logo';
$title = get_string('logo','theme_tzoom');
$description = get_string('logodesc', 'theme_tzoom');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);	

// Hide Menu
$name = 'theme_tzoom/hidemenu';
$title = get_string('hidemenu','theme_tzoom');
$description = get_string('hidemenudesc', 'theme_tzoom');
$default = 1;
$choices = array(1=>get_string('yes',''), 0=>get_string('no',''));
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

// Email url setting

$name = 'theme_tzoom/emailurl';
$title = get_string('emailurl','theme_tzoom');
$description = get_string('emailurldesc', 'theme_tzoom');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$settings->add($setting);

// Custom CSS file
$name = 'theme_tzoom/customcss';
$title = get_string('customcss','theme_tzoom');
$description = get_string('customcssdesc', 'theme_tzoom');
$default = '';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$settings->add($setting);

	// Frontpage Heading
    $name = 'theme_tzoom/frontpageheading';
    $heading = get_string('frontpageheading', 'theme_tzoom');
    $information = get_string('frontpageheadingdesc', 'theme_tzoom');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);

    // Colour Heading
    $name = 'theme_tzoom/colourheading';
    $heading = get_string('colourheading', 'theme_tzoom');
    $information = get_string('colourheadingdesc', 'theme_tzoom');
    $setting = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
	
// Background colour setting
$name = 'theme_tzoom/backcolor';
$title = get_string('backcolor','theme_tzoom');
$description = get_string('backcolordesc', 'theme_tzoom');
$default = '#fafafa';
$previewconfig = NULL;
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);

// Graphic Wrap (Background Image)
$name = 'theme_tzoom/backimage';
$title=get_string('backimage','theme_tzoom');
$description = get_string('backimagedesc', 'theme_tzoom');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$settings->add($setting);

// Graphic Wrap (Background Position)
$name = 'theme_tzoom/backposition';
$title = get_string('backposition','theme_tzoom');
$description = get_string('backpositiondesc', 'theme_tzoom');
$default = 'no-repeat';
$choices = array('no-repeat'=>get_string('backpositioncentred','theme_tzoom'), 'no-repeat fixed'=>get_string('backpositionfixed','theme_tzoom'), 'repeat'=>get_string('backpositiontiled','theme_tzoom'), 'repeat-x'=>get_string('backpositionrepeat','theme_tzoom'));
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

// Menu hover background colour setting
$name = 'theme_tzoom/menuhovercolor';
$title = get_string('menuhovercolor','theme_tzoom');
$description = get_string('menuhovercolordesc', 'theme_tzoom');
$default = '#f42941';
$previewconfig = NULL;
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
$settings->add($setting);	

// Title Date setting

$name = 'theme_tzoom/titledate';
$title = get_string('titledate','theme_tzoom');
$description = get_string('titledatedesc', 'theme_tzoom');
$default = 1;
$choices = array(1=>get_string('yes',''), 0=>get_string('no',''));
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$settings->add($setting);

// General Alert setting
$name = 'theme_tzoom/generalalert';
$title = get_string('generalalert','theme_tzoom');
$description = get_string('generalalertdesc', 'theme_tzoom');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$settings->add($setting);

// Snow Alert setting
$name = 'theme_tzoom/snowalert';
$title = get_string('snowalert','theme_tzoom');
$description = get_string('snowalertdesc', 'theme_tzoom');
$default = '';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$settings->add($setting);
	
}

