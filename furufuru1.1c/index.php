<?get_header(); ?>
	<div style="padding-top: 20px;"></div>
	<main>
			<div class="maincontent">
			<?if(have_posts());?>
                    	                    <?while(have_posts()) : the_post();?>
				<div class="post">
					<div class="post_info">
						<p style="text-align:right;"><?the_time('Y/m/d'); ?> Posted by <? the_author(); ?></p>
					</div>
				<h2 class="title"><a href="<?the_permalink();?>" title="<?the_title_attribute(); ?>"><?the_title(); ?></a></h2>
				<?the_content('続きを読む'); ?>
				</div>
			<?endwhile; ?>
			</div>
	</main>
<?get_footer();?>