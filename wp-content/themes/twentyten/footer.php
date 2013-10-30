<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->

	<div id="footer" role="contentinfo">
		<div id="colophon">

<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>

			<div id="site-info">
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>
			</div><!-- #site-info -->

			<div id="site-generator">
				<?php //do_action( 'twentyten_credits' ); ?>
				<!--<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyten' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyten' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s.', 'twentyten' ), 'WordPress' ); ?></a>-->
<div style="visibility:hidden;width:0px;height:0px"><p class="51lastat statcounter" style="text-align:right;">
<script type="text/javascript">var sc_project=8741700; var sc_invisible=0; var sc_security="211664f7"; var scJsHost = (("https:" == document.location.protocol) ? "https://secure." : "http://www."); document.write("<sc"+"ript type='text/javascript' src='" + scJsHost+"statcounter.com/counter/counter.js'></"+"script>");</script>
<noscript><div class="statcounter"><a title="free hit counter"
href="http://statcounter.com/" target="_blank"><img class="statcounter"
src="http://c.statcounter.com/8741700/0/211664f7/0/" alt="free hit
counter"></a></div></noscript>				
<script language="javascript" type="text/javascript" src="http://js.users.51.la/15512862.js"></script>
<noscript><a href="http://www.51.la/?15512862" target="_blank"><img alt="&#x6211;&#x8981;&#x5566;&#x514D;&#x8D39;&#x7EDF;&#x8BA1;" src="http://img.users.51.la/15512862.asp" style="border:none"></a></noscript><span style="display:none"><script language="javascript" type="text/javascript" src="http://quote.51.la/?id=15512862&amp;mb=1"></script></span>
</p>
<p class="googlestat">
<script type="text/javascript">var _gaq = _gaq || [];var pluginUrl='//www.google-analytics.com/plugins/ga/inpage_linkid.js';_gaq.push(['_require', 'inpage_linkid', pluginUrl]);_gaq.push(['_setAccount', 'UA-38678057-1']);_gaq.push(['_trackPageview']);(function() {var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();</script>
</p></div>
			</div><!-- #site-generator -->

		</div><!-- #colophon -->
	</div><!-- #footer -->

</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
