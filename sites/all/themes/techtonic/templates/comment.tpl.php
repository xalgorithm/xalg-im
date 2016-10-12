<div class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
	
	<?php print $picture ?>
 
  <div class="comment-content">
 
		<?php if ($new): ?>
      <span class="new"><?php print $new ?></span>
    <?php endif; ?>
    
    <div class="submitted">
      <?php print $submitted; ?>
    </div>
    
    <div class="content"<?php print $content_attributes; ?>>
    
      <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['links']);
      print render($content);
      ?>
     
    
      <?php if ($signature): ?>
        <div class="user-signature clearfix">
          <?php print $signature ?>
        </div>
      <?php endif; ?>
    
    </div>
    
    <div class="comment-links clearfix">
      <?php print render($content['links'])?>
			<?php print $permalink; ?>
    </div>
  
  </div>

</div> 