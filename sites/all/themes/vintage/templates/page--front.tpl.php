<?php
// $Id: page.tpl.php,v 1.9 2010/11/07 21:48:56 dries Exp $

/**
 * @file
 * Bartik's theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template normally located in the
 * modules/system folder.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 * - $hide_site_name: TRUE if the site name has been toggled off on the theme
 *   settings page. If hidden, the "element-invisible" class is added to make
 *   the site name visually hidden, but still accessible.
 * - $hide_site_slogan: TRUE if the site slogan has been toggled off on the
 *   theme settings page. If hidden, the "element-invisible" class is added to
 *   make the site slogan visually hidden, but still accessible.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['featured']: Items for the featured region.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['triptych_first']: Items for the first triptych.
 * - $page['triptych_middle']: Items for the middle triptych.
 * - $page['triptych_last']: Items for the last triptych.
 * - $page['footer_firstcolumn']: Items for the first footer column.
 * - $page['footer_secondcolumn']: Items for the second footer column.
 * - $page['footer_thirdcolumn']: Items for the third footer column.
 * - $page['footer_fourthcolumn']: Items for the fourth footer column.
 * - $page['footer']: Items for the footer region.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see bartik_process_page()
 */
?>
<div id="wrapper">
	<div id="header_functions">
		<div id="login_1"><?php print render($page['login']) ?></div>	
		<div id="search_1"><?php print render($page['search']) ?></div>
		<div id="right_1"><?php print render($page['top_right']) ?></div>
	</div>

  <div id="header">
  	
    <div id="header_top">
		
    </div>
      
      <div>
      	<a href="/"><img src="<?php print $base_path; ?><?php print $directory; ?>/images/logo.png" /></a>
      </div>
    
    <?php /*if ($main_menu): ?>
      <div id="nav" class="menu <?php if (!empty($main_menu)) {print "with-primary";} if (!empty($secondary_menu)) {print " with-secondary";} ?>">
        <?php print theme('links', array('links' => $main_menu, 'attributes' => array('id' => 'primary', 'class' => array('links', 'clearfix', 'main-menu')))); ?>
      </div>
    <?php endif;*/ ?>
    	<!--Home  |  Estate Gallery  |  Artisan Gallery  |  Wedding & Engagement  |  Reviews & Press  |  Gilt Facets | Find Us  |  Contact-->
		<?php if(isset($page['horz_nav']) && !empty($page['horz_nav'])):  print render($page['horz_nav']); endif; ?>
  </div>
  
  <div id="main" class="<?php print main_classes();  ?> made_one">
  
  	<div id="content-wrapper">
    	
      <div id="home-content-inner">
      	
        <div id="content-inner-top">
        
        	<div id="content-inner-bottom">
          
          	<div id="left-column">
            
            	<?php print render($page['left_column']); ?>
              
              <div id="left-column-bottom">
            
            		<?php print render($page['left_column_bottom']); ?>
              
            	</div>
              
            </div>

	        <div style="width: 750px; float: left;">

		        <div class="home-slideshow">
			        <?php print render($page['home_slideshow']); ?>
		        </div>

		        <div id="center-column">

		        <?php if ($breadcrumb || $title|| $messages || $tabs || $action_links): ?>
			        <div id="content-header">

		        <?php print $breadcrumb; ?>

		        <?php /*?><?php if ($page['highlight']): ?>
                <div id="highlight"><?php print render($page['highlight']) ?></div>
              <?php endif; ?>

              <?php if ($title): ?>
                <h1 class="title"><?php print $title; ?></h1>
              <?php endif; ?><?php */?>

		        <?php print $messages; ?>
		        <?php print render($page['help']); ?>

		        <?php if ($tabs): ?>
			        <div class="tabs"><?php print render($tabs); ?></div>
		        <?php endif; ?>

		        <?php if ($action_links): ?>
			        <ul class="action-links"><?php print render($action_links); ?></ul>
		        <?php endif; ?>

		        </div> <!-- /#content-header -->
			        <?php endif; ?>

			        <?php print render($page['content']) ?>

		        </div>

		        <div id="right-column" style="clear: right;">
			        <?php print render($page['right_column']); ?>
		        </div>
	        </div>


          </div>
        
        </div>
    
    	</div>
    
    </div>
    
  </div>
  
  <div id="footer_wrapper">
  
  <div id="footer_top">
  	<?php print render($page['footer_top']); ?>
  </div>
  
  <div id="footer_mid">
  	<?php print render($page['footer_mid']); ?>
  </div>
  
  <div id="footer_bottom">
  	<?php print render($page['footer_bottom']); ?>
    <!--| Privacy Policy | Terms of Use | Conditions of Sale | Customer Service | Ring Size Tools | Favorite Links |<br />
| Contact Us | Find Us |-->
  </div>
  
  </div>
  	
</div>