<?php
	$option = get_option('SOCIAL_BUTTONS_WP');
	
	if(isset($_POST['enabled']) && isset($_POST['cursor'])) {
		
		$option['cursor_id'] = $_POST['cursor_id'];
		$option['cursor'] = $_POST['cursor'];
		$option['cursor_enabled'] = $_POST['enabled'];
		update_option('SOCIAL_BUTTONS_WP', $option);
	}
	
	if(isset($_GET['social_buttons_unlock'])){
		$option['locked'] = false;
		update_option('SOCIAL_BUTTONS_WP', $option);
	}

?>

<div class="wrap nw-boot">
	<h2><img src="<?php echo SOCIAL_BUTTONS_WP_URL ?>images/logo.png" height="48" width="199" /> <!--a style="float: right" target="_blank" href="http://www.facebook.com/sharer.php?s=100&p[title]=<?php echo urlencode('Unique Cursor - Free Premium WP plugin') ?>&p[summary]=<?php echo urlencode('You can make your Wordpress site more unique! ') ?>&p[url]=<?php echo urlencode('http://wordpress.org/plugins/unique-cursor/') ?>&p[images][0]=<?php echo urlencode('http://commondatastorage.googleapis.com/other_salex/fb-share-pic1.png') ?>" class="joinFB"><img src="<?php echo SOCIAL_BUTTONS_WP_URL ?>images/fb-like.gif" /></a--></h2>
	
	
	<?php if(isset($_GET['social_buttons_unlock'])){ ?>
	<div class="update-nag">
		<h3>Unlocked Successfully! Enjoy!</h3>
	</div>
	<?php } ?>
	
<br/><br/>

	<form action="" method="POST" class="form-horizontal">
		<div class="form-actions">
			<div class="control-group">
				<label class="control-label">Text:</label>
				<div class="controls">
					<input id="sobtn_text" type="text" />
				</div>
			</div>
			<div class="control-group">
				<label class="control-label">URL:</label>
				<div class="controls">
					<input id="sobtn_url" type="text" />
				</div>
			</div>
			<div class="control-group control-group-width">
				<label class="control-label"><em><strong>Preview:</strong></em></label>
				<div class="controls" id="prev-container">
					<em style="display: block; padding: 8px 0 0 20px;">Select button below</em>
				</div>
			</div>
			<div class="control-group control-group-width  bt-code-btn">
				<button type="button" class="btn-primary btn-xs gt_code_btn"> [get code] </button>
			</div>
			<div class="control-group bt-code" style="width: 700px;">
				<label class="control-label">Short Code:</label>
				<div class="controls">
					<input style="width: 400px;" readonly="readonly" id="sh_code" type="text" />
				</div>
				<label class="control-label">HTML:</label>
				<div class="controls">
					<input style="width: 400px;"  readonly="readonly" id="ht_code" type="text" />
				</div>
			</div>
		</div>
	</form>
<br/><br/>
	<div class="social-b-box" style="position: relative">
		<?php 
		$lk = "";
		if($option['locked']): 
			$lk = "style='opacity: 0.5'  data-value='locked'";
			?>
			<iframe  frameborder="no" allowtransparency="yes" scrolling="no" id="unlock-frame" src="//commondatastorage.googleapis.com/other_salex/fb_iframe_usocial.html?r_url=<?php echo urlencode(admin_url('admin.php')."?page=social-buttons-wp&social_buttons_unlock"); ?>" width="260" height="47" style="position: absolute; top: -9999px; left: 0; z-index: 999"></iframe>
		<?php endif; ?>
		<div><a href="#" class="linkedIn socialBtn">Join up on Linked in</a></div>
		<div><a href="#" class="flickr socialBtn">Flickr Photostream</a></div>
		<div><a href="#" class="rss socialBtn">Grab our RSS feed</a></div>
		<div><a href="#" class="facebook socialBtn" <?php echo $lk ?>>Like us on Facebook</a></div>
		<div><a href="#" class="twitter socialBtn" <?php echo $lk ?>>Follow me on Twitter</a></div>
		<div><a href="#" class="skype socialBtn" <?php echo $lk ?>>Add us on Skype</a></div>
		<div><a href="#" class="vimeo socialBtn" <?php echo $lk ?>>Watch on Vimeo</a></div>
		<div><a href="#" class="designmoo socialBtn" <?php echo $lk ?>>Designmoo resources</a></div>
		
		<div><a href="#" class="viddler socialBtn" <?php echo $lk ?>>Watch on Viddler</a></div>
		<div><a href="#" class="deviantart socialBtn" <?php echo $lk ?>>deviantART gallery</a></div>
		<div><a href="#" class="paypal socialBtn" <?php echo $lk ?>>Pay using PayPal</a></div>
		<div><a href="#" class="dribbble socialBtn" <?php echo $lk ?>>Dribbble shots</a>		</div>
		<div><a href="#" class="tumblr socialBtn" <?php echo $lk ?>>Follow my Tumblog</a></div>
		<div><a href="#" class="wordpress socialBtn" <?php echo $lk ?>>Wordpress blog</a></div>
		<div><a href="#" class="stumbleupon socialBtn" <?php echo $lk ?>>Stumbleupon this</a></div>
		
		<div><a href="#" class="digg socialBtn" <?php echo $lk ?>>Digg this</a></div>
		<div><a href="#" class="lastfm socialBtn" <?php echo $lk ?>>Listen on last.fm</a></div>
		<div><a href="#" class="youtube socialBtn" <?php echo $lk ?>>YouTube channel</a></div>
		<div><a href="#" class="blogger socialBtn" <?php echo $lk ?>>Blogger weblog</a></div>
		<div><a href="#" class="google socialBtn" <?php echo $lk ?>>Add to iGoogle</a></div>
		<div><a href="#" class="picasa socialBtn" <?php echo $lk ?>>Picasa photo album</a></div>
		<div><a href="#" class="gowalla socialBtn" <?php echo $lk ?>>Follow me on Gowalla</a></div>
	</div>

	<!--form action="" method="POST" class="form-horizontal">
		<input type="hidden" name="enabled" value="<?php echo $option["cursor_enabled"] ?>" />
		<input type="hidden" name="cursor" value="<?php echo (empty($option["cursor"])?$cursors[0]:$option["cursor"]) ?>" />
		<input type="hidden" name="cursor_id" value="<?php echo $option["cursor_id"] ?>" />
		<div class="control-group">
			<label class="control-label">Enable Cursor:</label>
			<div class="controls">
				<div class="btn-group all-special onoff" data-toggle="buttons-radio">
					<button type="button" class="btn btn-default <?php print((!$option["cursor_enabled"])?'active btn-danger':''); ?> btn-off" data-value="small">
						Disable
					</button>
					<button type="button" class="btn btn-default <?php print(($option["cursor_enabled"])?'active btn-success':''); ?> btn-on" data-value="medium">
						Enable
					</button>
				</div>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label">Unique Cursor:</label>
			<div class="controls">
				<div class="btn-group cursors"  data-toggle="buttons-radio" style="position: relative;">
					<iframe  frameborder="no" allowtransparency="yes" scrolling="no" id="unlock-frame" src="//commondatastorage.googleapis.com/other_salex/fb_iframe_ucursor.html?r_url=<?php echo urlencode(admin_url('admin.php')."?page=unique-cursor&SOCIAL_BUTTONS_WP_unlock"); ?>" width="56" height="44" style="position: absolute; top: -9999px; left: 0; z-index: 999"></iframe>
					<?php foreach ($cursors as $key => $value) { ?>
						<?php if(($option['locked'] && $key < 8) || !$option['locked']) { ?>
						<button type="button" class="btn btn-default" data-value="<?php echo $key ?>">
							<div style="width: 30px; height: 30px"><img src="<?php echo SOCIAL_BUTTONS_WP_URL ?>images/<?php echo $value; ?>"/></div>
						</button>
						<?php } else {?>
							<button type="button" class="btn btn-default" data-value="locked">
								
								<div style="width: 30px; height: 30px"><img src="<?php echo SOCIAL_BUTTONS_WP_URL ?>images/<?php echo $value; ?>"/></div>
							</button>
						<?php }?>
					<?php } ?>
				</div><br />
				<iframe allowtransparency="yes" scrolling="no" frameborder="no" src="//commondatastorage.googleapis.com/other_salex/fb_iframe_ucursor_updated.html" width="400" height="25" style="margin-top: 15px;"></iframe>
			</div>
		</div>
		<div class="form-actions">
			<button type="submit" class="btn btn-danger license-key-register" data-loading-text="Checking...">
				Save
			</button>
		</div>
	</form-->
</div>
