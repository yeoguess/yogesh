<div class="footer">
  <div class="container">
    <div class="copyright slideanim">
				<span class="copyright">&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></span>
		</div>
  </div>
</div>

<?php wp_footer(); ?>

		<!-- Horizontal-Tabs-JavaScript -->
			<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab').easyResponsiveTabs({
						type: 'default',
						width: 'auto',
						fit: true,
					});
				});
			</script>
		<!-- Horizontal-Tabs-JavaScript -->

		<!-- Stats-Number-Scroller-Animation-JavaScript -->
			<script src="js/waypoints.min.js"></script>
			<script src="js/counterup.min.js"></script>
			<script>
				jQuery(document).ready(function( $ ) {
					$('.counter').counterUp({
						delay: 10,
						time: 1000,
					});
				});
			</script>
		<!-- //Stats-Number-Scroller-Animation-JavaScript -->

		<!-- Progressive-Bars-JavaScript -->
		<script src="js/bars.js"></script>
		<!-- //Progressive-Bars-JavaScript -->

		<!-- Show-More-JavaScript -->
			<script>
				$(document).ready(function () {
					size_li = $("#myList li").size();
					x=1;
					$('#myList li:lt('+x+')').show();
					$('#loadMore').click(function () {
						x= (x+1 <= size_li) ? x+1 : size_li;
						$('#myList li:lt('+x+')').show();
					});
					$('#showLess').click(function () {
						x=(x-1<0) ? 1 : x-1;
						$('#myList li').not(':lt('+x+')').hide();
					});
				});
			</script>
		<!-- Show-More-JavaScript -->

		<!-- Tabs-JavaScript -->
			<script src="js/jquery.filterizr.js"></script>
			<script src="js/controls.js"></script>
			<script type="text/javascript">
				$(function() {
					$('.filtr-container').filterizr();
				});
			</script>
		<!-- //Tabs-JavaScript -->

		<!-- PopUp-Box-JavaScript -->
			<script src="js/jquery.chocolat.js"></script>
			<script type="text/javascript">
				$(function() {
					$('.filtr-item a').Chocolat();
				});
			</script>
		<!-- //PopUp-Box-JavaScript -->

		<!-- Owl-Carousel-JavaScript -->
			<script src="js/owl.carousel.js"></script>
			<script>
				$(document).ready(function() {
					$("#owl-demo").owlCarousel ({
						items : 8,
						lazyLoad : true,
						autoPlay : true,
						speed: 900,
						pagination : false,
					});
				});
			</script>
		<!-- //Owl-Carousel-JavaScript -->

		<!-- Slide-To-Top JavaScript -->
			<script type="text/javascript">
				$(document).ready(function() {
					var defaults = {
						containerID: 'toTop',
						containerHoverID: 'toTopHover',
						scrollSpeed: 100,
						easingType: 'linear',
					};
					$().UItoTop({ easingType: 'easeOutQuart' });
				});
			</script>
			<a href="#" id="toTop" class="stuoyal3w stieliga" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
		<!-- //Slide-To-Top JavaScript -->

		<!-- Smooth-Scrolling-JavaScript -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
					});
				});
			</script>
		<!-- //Smooth-Scrolling-JavaScript -->

	<!-- //Custom-JavaScript-File-Links -->

</body>

</html>
