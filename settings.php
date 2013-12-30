<?php

/*
 * @author    Shaun Daubney
 * @package   theme_tzoom
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    
    // Basic Heading
    $name        = 'theme_tzoom/basicheading';
    $heading     = get_string('basicheading', 'theme_tzoom');
    $information = get_string('basicheadingdesc', 'theme_tzoom');
    $setting     = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
    
    // Logo file setting
    $name        = 'theme_tzoom/logo';
    $title       = get_string('logo', 'theme_tzoom');
    $description = get_string('logodesc', 'theme_tzoom');
    $setting     = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $settings->add($setting);
    
    // Hide Menu
    $name        = 'theme_tzoom/hidemenu';
    $title       = get_string('hidemenu', 'theme_tzoom');
    $description = get_string('hidemenudesc', 'theme_tzoom');
    $default     = 1;
    $choices     = array(
        1 => get_string('yes', ''),
        0 => get_string('no', '')
    );
    $setting     = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);
    
    // Email url setting
    
    $name        = 'theme_tzoom/emailurl';
    $title       = get_string('emailurl', 'theme_tzoom');
    $description = get_string('emailurldesc', 'theme_tzoom');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $settings->add($setting);
    
    // Custom CSS file
    $name        = 'theme_tzoom/customcss';
    $title       = get_string('customcss', 'theme_tzoom');
    $description = get_string('customcssdesc', 'theme_tzoom');
    $default     = '';
    $setting     = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
    
    // Frontpage Heading
    $name        = 'theme_tzoom/frontpageheading';
    $heading     = get_string('frontpageheading', 'theme_tzoom');
    $information = get_string('frontpageheadingdesc', 'theme_tzoom');
    $setting     = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
    
    // Colour Heading
    $name        = 'theme_tzoom/colourheading';
    $heading     = get_string('colourheading', 'theme_tzoom');
    $information = get_string('colourheadingdesc', 'theme_tzoom');
    $setting     = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
    
    // Background colour setting
    $name          = 'theme_tzoom/backcolor';
    $title         = get_string('backcolor', 'theme_tzoom');
    $description   = get_string('backcolordesc', 'theme_tzoom');
    $default       = '#fafafa';
    $previewconfig = NULL;
    $setting       = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);
    
    // Graphic Wrap (Background Image)
    $name        = 'theme_tzoom/backimage';
    $title       = get_string('backimage', 'theme_tzoom');
    $description = get_string('backimagedesc', 'theme_tzoom');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $settings->add($setting);
    
    // Graphic Wrap (Background Position)
    $name        = 'theme_tzoom/backposition';
    $title       = get_string('backposition', 'theme_tzoom');
    $description = get_string('backpositiondesc', 'theme_tzoom');
    $default     = 'no-repeat';
    $choices     = array(
        'no-repeat' => get_string('backpositioncentred', 'theme_tzoom'),
        'no-repeat fixed' => get_string('backpositionfixed', 'theme_tzoom'),
        'repeat' => get_string('backpositiontiled', 'theme_tzoom'),
        'repeat-x' => get_string('backpositionrepeat', 'theme_tzoom')
    );
    $setting     = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);
    
    // Menu hover background colour setting
    $name          = 'theme_tzoom/menuhovercolor';
    $title         = get_string('menuhovercolor', 'theme_tzoom');
    $description   = get_string('menuhovercolordesc', 'theme_tzoom');
    $default       = '#f42941';
    $previewconfig = NULL;
    $setting       = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $settings->add($setting);
    
    // Title Date setting
    
    $name        = 'theme_tzoom/titledate';
    $title       = get_string('titledate', 'theme_tzoom');
    $description = get_string('titledatedesc', 'theme_tzoom');
    $default     = 1;
    $choices     = array(
        1 => get_string('yes', ''),
        0 => get_string('no', '')
    );
    $setting     = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);
    
    // General Alert setting
    $name        = 'theme_tzoom/generalalert';
    $title       = get_string('generalalert', 'theme_tzoom');
    $description = get_string('generalalertdesc', 'theme_tzoom');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $settings->add($setting);
    
    // Snow Alert setting
    $name        = 'theme_tzoom/snowalert';
    $title       = get_string('snowalert', 'theme_tzoom');
    $description = get_string('snowalertdesc', 'theme_tzoom');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $settings->add($setting);
    
    // Footer Options Heading
    $name        = 'theme_tzoom/footeroptheading';
    $heading     = get_string('footeroptheading', 'theme_tzoom');
    $information = get_string('footeroptdesc', 'theme_tzoom');
    $setting     = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
    
    // Copyright setting
    
    $name        = 'theme_tzoom/copyright';
    $title       = get_string('copyright', 'theme_tzoom');
    $description = get_string('copyrightdesc', 'theme_tzoom');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $settings->add($setting);
    
    // CEOP
    $name        = 'theme_tzoom/ceop';
    $title       = get_string('ceop', 'theme_tzoom');
    $description = get_string('ceopdesc', 'theme_tzoom');
    $default     = '';
    $choices     = array(
        '' => get_string('ceopnone', 'theme_tzoom'),
        'http://www.thinkuknow.org.au/site/report.asp' => get_string('ceopaus', 'theme_tzoom'),
        'http://www.ceop.police.uk/report-abuse/' => get_string('ceopuk', 'theme_tzoom')
    );
    $setting     = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $settings->add($setting);
    
    // Disclaimer setting
    $name        = 'theme_tzoom/disclaimer';
    $title       = get_string('disclaimer', 'theme_tzoom');
    $description = get_string('disclaimerdesc', 'theme_tzoom');
    $default     = '';
    $setting     = new admin_setting_confightmleditor($name, $title, $description, $default);
    $settings->add($setting);
    
    // Social Icons Heading
    $name        = 'theme_tzoom/socialiconsheading';
    $heading     = get_string('socialiconsheading', 'theme_tzoom');
    $information = get_string('socialiconsheadingdesc', 'theme_tzoom');
    $setting     = new admin_setting_heading($name, $heading, $information);
    $settings->add($setting);
    
    // Website url setting
    
    $name        = 'theme_tzoom/website';
    $title       = get_string('website', 'theme_tzoom');
    $description = get_string('websitedesc', 'theme_tzoom');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $settings->add($setting);
    
    // Facebook url setting
    
    $name        = 'theme_tzoom/facebook';
    $title       = get_string('facebook', 'theme_tzoom');
    $description = get_string('facebookdesc', 'theme_tzoom');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $settings->add($setting);
    
    // Twitter url setting
    
    $name        = 'theme_tzoom/twitter';
    $title       = get_string('twitter', 'theme_tzoom');
    $description = get_string('twitterdesc', 'theme_tzoom');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $settings->add($setting);
    
    // Google+ url setting
    
    $name        = 'theme_tzoom/googleplus';
    $title       = get_string('googleplus', 'theme_tzoom');
    $description = get_string('googleplusdesc', 'theme_tzoom');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $settings->add($setting);
    
    // Flickr url setting
    
    $name        = 'theme_tzoom/flickr';
    $title       = get_string('flickr', 'theme_tzoom');
    $description = get_string('flickrdesc', 'theme_tzoom');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $settings->add($setting);
    
    // Pinterest url setting
    
    $name        = 'theme_tzoom/pinterest';
    $title       = get_string('pinterest', 'theme_tzoom');
    $description = get_string('pinterestdesc', 'theme_tzoom');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $settings->add($setting);
    
    // Instagram url setting
    
    $name        = 'theme_tzoom/instagram';
    $title       = get_string('instagram', 'theme_tzoom');
    $description = get_string('instagramdesc', 'theme_tzoom');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $settings->add($setting);
    
    // LinkedIn url setting
    
    $name        = 'theme_tzoom/linkedin';
    $title       = get_string('linkedin', 'theme_tzoom');
    $description = get_string('linkedindesc', 'theme_tzoom');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $settings->add($setting);
    
    // YouTube url setting
    
    $name        = 'theme_tzoom/youtube';
    $title       = get_string('youtube', 'theme_tzoom');
    $description = get_string('youtubedesc', 'theme_tzoom');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $settings->add($setting);
    
    // Apple url setting
    
    $name        = 'theme_tzoom/apple';
    $title       = get_string('apple', 'theme_tzoom');
    $description = get_string('appledesc', 'theme_tzoom');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $settings->add($setting);
    
    // Android url setting
    
    $name        = 'theme_tzoom/android';
    $title       = get_string('android', 'theme_tzoom');
    $description = get_string('androiddesc', 'theme_tzoom');
    $default     = '';
    $setting     = new admin_setting_configtext($name, $title, $description, $default);
    $settings->add($setting);
    
}
