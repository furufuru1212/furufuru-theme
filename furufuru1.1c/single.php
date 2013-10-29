<?get_header(); ?>
	<div style="padding-top: 20px;" />
	<div id="main">
			<div class="maincontent">
				<?if (have_posts());?>
                    		                    <?while (have_posts()) : the_post(); ?>
				<div class="post">
					<div class="post_info">
						<p style="text-align:right;"><?the_time('Y/m/d'); ?> Posted by <? the_author(); ?></p>
					</div>
					<h2 class="title"><? the_title(); ?></h2>
					<?the_content(); ?>
				<div style="padding-bottom:20px;"></div>
				</div>
				<?comments_template(); ?>
				<? endwhile; ?>
			</div>
	</div>
</div>
<?get_footer(); ?>
