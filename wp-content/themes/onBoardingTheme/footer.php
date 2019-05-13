<footer class="footer">
	<div class="mask-top"></div>
	<div class="mask-bg"></div>
	 <?php 
	 	if(is_active_sidebar( 'footer-1' )) {
			dynamic_sidebar( 'footer-1' ); ?>
	
		<?php } ?>
</footer>
<!-- /footer -->
</div>
<!-- /wrapper -->
	<?php wp_footer(); ?>
</body>

</html>