<? get_header(); ?>
	<div style="padding-top: 20px;" />
	<div id="main">
		<div class="maincontent">
		<? if (have_posts()) : ?>
                                        <? while (have_posts()) : the_post(); ?>
		<div class="post">
		<div class="blog_info">
			<ul>
			<li class="cal"><? the_time('Y/m/d') ?></li>
			</ul>
			<br style="clear: both;">
		</div>
		<h2 class="title"><? the_title(); ?></h2>
		<? the_content(); ?>
		<div style="padding-bottom:20px;"></div>
		</div>
		<? endwhile; ?>
		<? comments_template(); ?>
		</div>
	</div>
</div>
<? endif; ?>

<? get_footer(); ?>
