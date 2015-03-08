<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
    [field_avatar_fid] == Content: Avatar (field_avatar)
    [title] == Node: Title
    [body] == Node: Body

 
 * @ingroup views_templates
 */
?>
<style>
.view-id-summary.view-display-id-page_5 .views-field-field-avatar-fid img
{
	float:left;
	padding:0 10px 5px 0px;
}
.view-id-summary.view-display-id-page_5 .views-row {
    background: none repeat scroll 0 0 transparent;
    border-bottom: 1px solid #E8DEA9;
    vertical-align: top;
	padding:10px 0;
}
.view-id-summary.view-display-id-page_5 .views-row .views-field-teaser
{
	height:160px;
	overflow:hidden;
}
</style>
<script>
	$(document).ready(function(){
 		$(".view-id-summary.view-display-id-page_5 .views-row .views-field-teaser").after("<div class='see-more '><a class='arrowdown' href='#'>see more</a></div>");
		$(".view-id-summary.view-display-id-page_5 .views-row .views-field-body").after("<div class='see-less '><a class='arrowup' href='#'>see less</a></div>");
		$(".view-id-summary.view-display-id-page_5 .views-row .views-field-body").hide();
		$(".view-id-summary.view-display-id-page_5 .views-row .see-less").hide();
		$(".see-more").click(
			function(e){
				e.preventDefault();
				$(this).parents(".views-row").find(".views-field-teaser").hide();
				$(this).parents(".views-row").find(".views-field-body").slideDown();
				$(this).hide();
				$(this).parents(".views-row").find(".see-less").show();
			}
		);
		$(".see-less").click(
			function(e){
				e.preventDefault();
				$(this).parents(".views-row").find(".views-field-teaser").show();
				$(this).parents(".views-row").find(".views-field-body").slideUp();
				$(this).hide();
				$(this).parents(".views-row").find(".see-more").show();
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