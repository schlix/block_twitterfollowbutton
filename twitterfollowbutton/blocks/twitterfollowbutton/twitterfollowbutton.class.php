<?php
namespace Block;
/**
 * Twitter Follow Button - Main Class
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
class TwitterFollowButton extends \SCHLIX\cmsBlock
{
	public function Run()
	{
                
		$twitter_name = $this->config['str_twitter_screen_name'];
		$data_show_count = $this->config['bool_data_show_count'] ? 'true' : 'false' ;
		$show_screen_name = $this->config['bool_hide_screen_name']  ? 'false' : 'true' ;		
		$language = ($this->config['str_language'] ? $this->config['str_language'] : 'en');
		$width = $this->config['str_width'];
                if ($width)
		(!(strpos('px',$width) !== false || strpos('%',$width) !== false )) ? $data_width=' data_width="'+$width+'" ' : $data_width = '';
		$size = $this->config['str_size'] ? $this->config['str_size'] : 'medium' ;
		$alignment = $this->config['str_alignment'] ?  $this->config['str_alignment'] : 'left';
                
                $this->loadTemplateFile('view.block',compact(array_keys(get_defined_vars())));
                
  	}
}

?>
