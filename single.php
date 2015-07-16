<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">	
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

				<nav class="nav-single">
					<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
				</nav><!-- .nav-single -->
				
				<!--百度分享代码-->
				<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more">分享到：</a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间">QQ空间</a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博">新浪微博</a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博">腾讯微博</a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网">人人网</a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信">微信</a></div>
				<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"16"},"share":{"bdSize":16},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
				<!--百度分享代码-->
				
				<!-- 广告位 -->
				<script type="text/rocketscript">if (typeof swfobject == "undefined") {document.write('<script type="text/javascript" src="http://cpanel.hostinger.com.hk/scripts/swfobject.js"><\/script>');}swfobject.registerObject('referralBanner892', '8.0.0');</script><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="468" height="60" id="referralBanner892"><param name="movie" value="http://www.hostinger.com.hk/banners/cn/hostinger-468x60-1.swf?clickTAG=http%3A%2F%2Fapi.hostinger.com.hk%2Fredir%2F6397814" /><!--[if !IE]>--><object type="application/x-shockwave-flash" data="http://www.hostinger.com.hk/banners/cn/hostinger-468x60-1.swf?clickTAG=http%3A%2F%2Fapi.hostinger.com.hk%2Fredir%2F6397814" width="468" height="60"><!--<![endif]--><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="获取Adobe Flash player" /></a><!--[if !IE]>--></object><!--<![endif]--></object>
				<!-- 广告位 -->
				
				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>