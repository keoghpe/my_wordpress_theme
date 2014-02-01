<div class="clear"></div>
</div>
<footer id="footer" class="row" role="contentinfo">
<div id="copyright">
<?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'blankslate' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) );  ?>
</div>
</footer>
</div>
<?php wp_footer(); ?>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.fittext.js"></script>
<script>
$(document).ready(function(){

	//console.log($('#myTitle a').text().trim().length);
	//console.log($('#myTitle a').text().trim());
	var text = $('#myTitle a').text().trim().length;
	var width = $(window).width();
	//console.log(width/text);
	$('#myTitle').fitText(1, { minFontSize: '20px', maxFontSize: width/text*2.7 });

	$('iframe').wrapAll('<div class="flex-video" />');

	$(window).on('scroll',function(){
		if ($(window).scrollTop()>=451) {
			$('nav').parent().addClass("fixed");
			console.log('Bingo');
		} else {
			$('nav').parent().removeClass("fixed");
			console.log('Bongo');
		}	
	});

});
  
</script>
</body>
</html>