<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language; ?>" xml:lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
<title><?php print $head_title ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=8" />
<?php print $head ?>
<!--[if lte IE 6]>
<?php print $ie6_style; ?>
<![endif]-->
<!--[if IE 7]>
<?php print $ie7_style; ?>
<![endif]-->
<?php print $styles ?>
<?php print $scripts ?>
<script type="text/javascript"><?php /* Needed to avoid Flash of Unstyle Content in IE */ ?> </script>
</head>

<body class="<?php print $body_classes; ?>">
<div id="skip-nav"><a href="#main">Skip to Content</a></div>

<div id="bg1"><div id="bg2">

<div id="top_bg" class="page0">
<div class="sizer0">
<div id="topex" class="expander0">
<div id="top_left">
<div id="top_right">
<div id="headimg">



<div id="header" class="clearfix">
	<div id="main_nav">
	<?php if (isset($primary_links)) { ?>
	<?php if (theme_get_setting('menutype')== '0'): ?><div class="<?php print menupos() ?>"><?php print theme('links', $primary_links, array('class' =>'links', 'id' => 'navlist')); ?></div><?php endif; ?>
	<?php if (theme_get_setting('menutype')== '1'): ?><div id="navlinks" class="<?php print menupos() ?>"><?php print $primary_links_tree; ?></div><?php endif; ?>
	<?php } ?>
	</div>
	<div id="above" class="clearfix">
	  <?php if ($above): ?><?php print $above; ?><?php endif; ?>
	</div>
  <div id="top-elements">
    <?php if ($search_box): ?>
      <div id="search-box"><?php print $search_box; ?></div>
    <?php endif; ?>
    <?php if (function_exists('toplinks')): ?>
      <div id="toplinks"><?php print toplinks() ?></div>
    <?php endif; ?>
    <?php if ($banner): ?>
      <div id="banner"><?php print $banner; ?></div>
    <?php endif; ?>
  </div><!-- /top-elements -->

  <!--
  <div id="name-and-slogan">
<?php if ($site_name) : ?>
  <?php if ($is_front): ?>
    <h1 id="site-name"><a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></h1>   
  <?php endif; ?> 
  <?php if (!$is_front): ?>
    <p id="site-name"><a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>"><?php print $site_name; ?></a></p>
  <?php endif; ?>
<?php endif; ?>
  <?php if ($site_slogan): ?>
    <div id="site-slogan">
      <?php print $site_slogan; ?>
    </div>
  <?php endif; ?>
  </div> <!-- /name-and-slogan -->

<div class="brclear"></div>

<?php if ($header): ?>
  <?php print $header; ?>
<?php endif; ?>



</div> <!-- /header -->

</div>
</div><!-- /top_right -->
</div><!-- /top_left -->
</div><!-- /expander0 -->
</div><!-- /sizer0 -->
</div><!-- /page0 -->

<div id="body_bg" class="page0">
<div class="sizer0">
<div class="expander0">
<div id="body_left">
<div id="body_right">

<?php if (isset($secondary_links)) { ?>
  <div class="<?php print menupos() ?>"><?php print theme('links', $secondary_links, array('class' =>'links', 'id' => 'subnavlist')); ?></div>
<?php } ?>

<?php if ($breadcrumb): ?>
  <div id="breadcrumb">
    <?php print $breadcrumb; ?>
  </div>
<?php endif; ?>

<?php if ($user1 or $user2 or $user3 or $user4): ?>
  <div id="section1">
  <table class="sections" cellspacing="0" cellpadding="0">
    <tr>
    <?php if ($user1): ?><td class="section u1"><?php print $user1; ?></td><?php endif; ?>
    <?php if ($user2): ?><td class="section u2 <?php if ($user1): ?>divider<?php endif; ?>"><?php print $user2; ?></td><?php endif; ?>
    <?php if ($user3): ?><td class="section u3 <?php if ($user1 or $user2): ?>divider<?php endif; ?>"><?php print $user3; ?></td><?php endif; ?>
    <?php if ($user4): ?><td class="section u4 <?php if ($user1 or $user2 or $user3): ?>divider<?php endif; ?>"><?php print $user4; ?></td><?php endif; ?>
    </tr>
  </table>
  </div>  <!-- /section1 -->
<?php endif; ?>

<div id="middlecontainer">
  <div id="wrapper">
    <?php if ($title): if ($is_front){ print '<h2 class="page_title title frontpage">'. $title .'</h2>'; } else { print '<h2 class="page_title title">'. $title .'</h2>'; } endif; ?>
	<?php
		if(!$is_front):
	?>
	<div class="social">
		<!-- AddThis Button BEGIN -->
		<a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=250&amp;pubid=ra-4deede133d094239"><img src="http://s7.addthis.com/static/btn/v2/lg-share-en.gif" width="125" height="16" alt="Bookmark and Share" style="border:0"/></a>
		
		<!-- AddThis Button END -->
	</div>
	<?php
		endif;
	?>
	<div class="outer">
      
	  <div class="float-wrap">
        <div class="colmain">
          <div id="main">
            <?php if ($mission) { ?><div id="mission"><?php print $mission ?></div><?php } ?>
            <?php if ($content_top):?><div id="content-top"><?php print $content_top; ?></div><?php endif; ?>
            
            <div class="tabs"><?php print $tabs ?></div>
            <?php print $help ?>
            <?php print $messages ?>
            <?php print $content; ?>
            <?php //print $feed_icons; ?>
            <?php if ($content_bottom): ?><div id="content-bottom"><?php print $content_bottom; ?></div><?php endif; ?>
          </div>
        </div> <!-- /colmain -->
        
		<div class="colleft">
		  <div id="logo">
		  <?php if ($logo): ?>
			<a href="<?php print check_url($front_page); ?>" title="<?php print t('Home'); ?>">
			  <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
			</a>
		  <?php endif; ?>
		  </div> <!-- /logo -->
		<?php if ($left) { ?>  
            <div id="sidebar-left"><?php print $left ?></div>
        <?php } ?>
        </div>
		
		<br class="brclear" />
      </div> <!-- /float-wrap -->
      <?php if ($right) { ?>
        <div class="colright">
          <div id="sidebar-right"><?php print $right ?></div>
        </div>
      <?php } ?>
      <br class="brclear" />
    </div><!-- /outer -->
  </div><!-- /wrapper -->
</div>

<div id="bar"></div>

<?php if ($user5 or $user6 or $user7 or $user8): ?>
  <div id="section2">
  <table class="sections" cellspacing="0" cellpadding="0">
    <tr>
    <?php if ($user5): ?><td class="section u5"><?php print $user5; ?></td><?php endif; ?>
    <?php if ($user6): ?><td class="section u6 <?php if ($user5): ?>divider<?php endif; ?>"><?php print $user6; ?></td><?php endif; ?>
    <?php if ($user7): ?><td class="section u7 <?php if ($user5 or $user6): ?>divider<?php endif; ?>"><?php print $user7; ?></td><?php endif; ?>
    <?php if ($user8): ?><td class="section u8 <?php if ($user5 or $user6 or $user7): ?>divider<?php endif; ?>"><?php print $user8; ?></td><?php endif; ?>
    </tr>
  </table>
  </div>  <!-- /section2 -->
<?php endif; ?>



</div><!-- /body_right -->
</div><!-- /body_left -->
</div><!-- /expander0 -->
</div><!-- /sizer0 -->
</div><!-- /page0 -->

<div class="eopage">
<div id="bottom_bg" class="page0">
<div class="sizer0">
<div class="expander0">
<div id="bottom_left">
<div id="bottom_right">

<div id="footer-wrapper" class="clearfix">
  <div id="footer">
	<div class="left">
		<?php if (isset($primary_links)) { ?><?php print theme('links', $primary_links, array('class' =>'links', 'id' => 'navlist2')) ?><?php } ?>
	</div>
	<div class="right">
		<div class="legal">
		  Copyright &copy; <?php print date('Y') ?> <a href="/"><?php print $site_name ?></a>. <?php print $footer_message ?>
		</div>
    <div class="developed" style="padding:0 20px; float: right; font-size: 10px;">
      Developed By <a href="http://www.webis.ca">webis.ca</a>.
    </div>
	</div>
    <?php if ($below) { ?><div id="below"><?php print $below; ?></div><?php } ?>
    
  </div>
</div> <!-- /footer-wrapper -->

<div id="belowme">
</div>

</div><!-- /bottom_right -->
</div><!-- /bottom_left -->
</div><!-- /expander0 -->
</div><!-- /sizer0 -->
</div><!-- /page0 -->
</div>

</div></div><!-- /bg# -->

<?php print $closure ?>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4deede133d094239"></script>
</body>
</html>
