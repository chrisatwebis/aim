<!-- node-webform --> 
<div id="node-<?php print $node->nid; ?>" class="node <?php print $node_classes; ?>">
  <?php print $picture ?>

  <?php if ($page == 0): ?>
  <h2 class="title"><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  <?php endif; ?>

  <?php if ($terms): ?>
  <div class="terms">
    <?php print $terms; ?>
  </div>
  <?php endif;?>

  <div class="content">
    <div class="left half">
		<div class="body_content">
			<?php print $node->content['body']['#value']; ?>
		</div>
		<div class="location_content">

			<span class="btn-tertiary-2"><a target="_blank" href="http://maps.google.ca/?q=<?php print $node->field_location[0]["street"]."+".$node->field_location[0]["city"]."+".$node->field_location[0]["postal_code"]; ?>" >Directions</a></span>
			<?php print $field_location_rendered;?>
		</div>
	</div>
    <div class="right half">
		
		<?php print $node->content['webform']['#value']; ?>
	</div>
  </div>

  <?php if ($links): ?>
  <div class="links">
    <?php print $links; ?>
  </div>
  <?php endif; ?>

  <?php if ($node_bottom && !$teaser): ?>
  <div id="node-bottom">
    <?php print $node_bottom; ?>
  </div>
  <?php endif; ?>
</div>
<!-- /node-webform-<?php print $node->nid; ?> --> 