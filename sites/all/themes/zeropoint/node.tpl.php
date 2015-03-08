<!-- node --> 
<div id="node-<?php print $node->nid; ?>" class="node <?php print $node_classes; ?>">
  <?php if ($submitted): ?>
    <?php print $picture ?>
  <?php endif;?>

  <?php if ($page == 0): ?>
  <h2 class="title"><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  <?php endif; ?>
	<?php
		if($user->uid == "1"):
	?>
  <div class="meta">
    <?php if ($submitted): ?>
    <div class="submitted"><?php print $submitted ?></div>
    <?php endif; ?>
  </div>

  <?php if ($terms): ?>
  <div class="terms">
    <?php print $terms; ?>
  </div>
  <?php endif;?>
	<?php endif;?>
  <?php if ($node_middle && !$teaser): ?>
  <div id="node-middle">
    <?php print $node_middle; ?>
  </div>
  <?php endif; ?>

  <div class="content">
    <?php print $content ?>
  </div>
	<?php if($user->uid == "1"):?>
	  <?php if ($links): ?>
	  <div class="links">
		<?php print $links; ?>
	  </div>
	  <?php endif; ?>
	<?php endif;?>

  <?php if ($node_bottom && !$teaser): ?>
  <div id="node-bottom">
    <?php print $node_bottom; ?>
  </div>
  <?php endif; ?>
  <?php
	 switch($node->type){
		case "services":
		case "programs":
		case "about":
			print '  <div><a href="/About" class="btn-tertiary-2">Contact us</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.schedulicity.com/Scheduling/SelectService.aspx?business=AIMBUU

" class="btn-tertiary-2" target="_blank">Make an appointment</a></div>';
		default:
			break;
	 }
  ?>
</div>

<!-- /node-<?php print $node->nid; ?> --> 