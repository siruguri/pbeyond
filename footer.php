<?php $mts_options = get_option('clock'); ?>
		</div>
	</div><!--#page-->
<footer>
	<div class="container">
		<div class="footer-widgets">
			<div class="f-widget f-widget-1">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Left Footer') ) : ?><?php endif; ?>
			</div>
			<div class="f-widget f-widget-2">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Center Footer') ) : ?><?php endif; ?>
			</div>
			<div class="f-widget f-widget-3 last">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Footer') ) : ?><?php endif; ?>
			</div>
			<div class="copyrights">
				<?php mts_copyrights_credit(); ?>
			</div> 
		</div><!--.footer-widgets-->
	</div><!--.container-->
</footer><!--footer-->
</div><!--.main-container-->
<?php mts_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>