<?php /* Wrapper Name: Footer */ ?>
<div class="row">
	<div class="span12">
		<div id="back-top-wrapper">
			<p id="back-top">
				<?php echo apply_filters( 'cherry_back_top_html', '<a href="#top"><span></span></a>' ); ?>
			</p>
		</div>
	</div>
</div>
<div class="row footer-widgets">
	<div class="span12" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-1">
		<?php dynamic_sidebar("footer-sidebar-1"); ?>
	</div>
	<div class="span12" data-motopress-type="dynamic-sidebar" data-motopress-sidebar-id="footer-sidebar-2">
		<?php dynamic_sidebar("footer-sidebar-2"); ?>
	</div>
</div>
<div class="row copyright">
	<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-footer-text.php">
		<?php get_template_part("static/static-footer-text"); ?>
	</div>
	<div class="span12" data-motopress-type="static" data-motopress-static-file="static/static-footer-nav.php">
		<?php get_template_part("static/static-footer-nav"); ?>
	</div>
</div>