<?php
/**
 * Twitter Follow Button - Configuration
 * 
 * 
 *
 * @copyright 2016 SCHLIX Web Inc
 *
 * @license GPLv2
 *
 * @package twitterfollowbutton
 * @version 1.0
 * @author  SCHLIX Web Inc <info@schlix.com>
 * @link    http://www.schlix.com
 */
if (!defined('SCHLIX_VERSION'))
    die('No Access');
?>
<?php
	$languages_array = array(
	array('value'=>"en",'label'=>'English'),	
	array('value'=>"zh-cn",'label'=>'Simplified Chinese - 简体中文'),
	array('value'=>"zh-tw",'label'=>'Traditional Chinese - 繁體中文'),	
	array('value'=>"pt",'label'=>'Portuguese'),
	array('value'=>"it",'label'=>'Italian - Italiano'),
	array('value'=>"es",'label'=>'Spanish'),
	array('value'=>"da",'label'=>'Danish - Dansk'),
	array('value'=>"tr",'label'=>'Turkish'),
	array('value'=>"ko",'label'=>'Korean - 한국어'),
	array('value'=>"fr",'label'=>'French'),
	array('value'=>"sv",'label'=>'Swedish - Svenska'),
	array('value'=>"no",'label'=>'Norwegian - Norsk'),
	array('value'=>"nl",'label'=>'Dutch - Nederlands'),
	array('value'=>"ru",'label'=>'Russian - Русский'),
	array('value'=>"de",'label'=>'German - Deutsch'),
	array('value'=>"ja",'label'=>'Japanese - 日本語'),
	array('value'=>"fi",'label'=>'Finnish - Suomi'),
	array('value'=>"fil",'label'=>'Filipino - Filipino'),	
	array('value'=>"id",'label'=>'Indonesian - Bahasa Indonesia'),	
	array('value'=>"msa",'label'=>'Malay - Bahasa Melayu'), 
	array('value'=>"hi",'label'=>'Hindi'),	
	array('value'=>"pl",'label'=>'Polish - Polski'));

	$alignments_array = array(
	array('value'=>"left",'label'=>'Left'),	
	array('value'=>"right",'label'=>'Right'));

	$sizes_array = array(
	array('value'=>"medium",'label'=>'Medium'),	
	array('value'=>"large",'label'=>'Large'));

  
?>
<!-- Example begins -->
<schlix-config:textbox config-key='str_twitter_screen_name' label='<?= ___('Twitter Screen Name') ?>' class='form-control' />
<schlix-config:checkbox config-key='bool_hide_screen_name' label='<?= ___('Hide Screen Name') ?>' />
<schlix-config:checkbox config-key='bool_data_show_count' label='<?= ___('Display followers count') ?>' />

<schlix-config:dropdownlist class="form-control" config-key="str_option_select" label="<?= ___('Language') ?>" >
    <schlix-config:option value="0"><?= ___('Please select') ?></schlix-config:option>
    <?php foreach ($languages_array as $language): ?>
    <schlix-config:option value="<?= SAFE_HTML($language['value']) ?>"><?= SAFE_HTML($language['label']) ?></schlix-config:option>
    <?php endforeach ?>
</schlix-config:dropdownlist> 
<schlix-config:textbox config-key='str_width' label='<?= ___('Width') ?>' class='form-control' placeholder="<?= ___('(Optional. Please add px or %. e.g: 300px or 40%)') ?>" />

 
<schlix-config:radiogroup config-key="str_size" label="<?= ('Size') ?>" >
    <schlix-config:option value="medium"><?= SAFE_HTML(___('Medium')) ?></schlix-config:option>
    <schlix-config:option value="large"><?= SAFE_HTML(___('Large')) ?></schlix-config:option>
</schlix-config:radiogroup>

<schlix-config:radiogroup config-key="str_alignment" label="<?= ('Alignment') ?>" >
    <schlix-config:option value="left"><?= SAFE_HTML(___('Left')) ?></schlix-config:option>
    <schlix-config:option value="right"><?= SAFE_HTML(___('Right')) ?></schlix-config:option>
</schlix-config:radiogroup>

