<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<script>
	
	$(document).ready(function(){
		/* $(".views-field-title a").each(
			function(index)
			{	
				$(this).addClass("arrowdown");
				$(this).parents(".views-row").find(".views-field-body").css("display","none");
				$(this).click(
					function(e){
						e.preventDefault();
						if($(this).hasClass("arrowdown")){
							$(this).removeClass("arrowdown");
							$(this).addClass("arrowup");
							$(this).parents(".views-row").find(".views-field-body").slideDown();
						}else{
							$(this).removeClass("arrowup");
							$(this).addClass("arrowdown");
							$(this).parents(".views-row").find(".views-field-body").slideUp();
						}
						
					}
				);
			}
		); */
		$(".view-id-summary.view-display-id-page_3 .views-row-first ").append("<div class='see-more '><a class='arrowdown' href='#'>see more</a></div>");
		$(".view-id-summary.view-display-id-page_3 .views-row-last").append("<div class='see-less '><a class='arrowup' href='#'>see less</a></div>");
		$(".view-id-summary.view-display-id-page_3 .views-row:not(.views-row-first)").hide();
		$(".see-more").click(
			function(e){
				e.preventDefault();
				$(".view-id-summary.view-display-id-page_3 .views-row:not(.views-row-first)").slideDown().fadeIn();
			}
		);
		$(".see-less").click(
			function(e){
				e.preventDefault();
				$(".view-id-summary.view-display-id-page_3 .views-row:not(.views-row-first)").slideUp();
			}
		);
	});

</script>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div class="<?php print $classes[$id]; ?>">
    <?php print $row;?>

  </div>
<?php endforeach; ?>