<?php
/**
 * Twitter Follow Button
 * 
 * This is a block to simply display a Twitter follow button. It can be placed on your sidebar.
 *
 * @copyright SCHLIX Web Inc
 *
 * @license GNU Public License v2
 *
 * @package twitterfollowbutton
 * @version 1.0
 * @author  Prana <info@schlix.com>
 * @link    https://www.schlix.com
 */
if (!defined('SCHLIX_VERSION')) die('No Access');
?>
<?php if ($twitter_name): ?>
<a href="https://twitter.com/<?= $twitter_name; ?>" data-show-count="<?= $data_show_count; ?>" data-lang="<?= $language; ?>" <?= $data_width; ?> data-align="<?= $alignment; ?>" class="twitter-follow-button" data-show-screen-name="<?= $show_screen_name; ?>" data-size="<?= $size; ?>">Follow @<?= $twitter_name; ?></a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<?php else: ?>
<div class="alert alert-warning">
    <i class="fa fa-exclamation-triangle"></i>&nbsp;<?= ___('Twitter screen name has not been configured') ?>
</div>
<?php endif ?>