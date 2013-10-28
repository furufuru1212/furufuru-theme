<?get_header();?>
	<main>
		<div class="container">
			<section>
				<?if(have_posts());?>
                   	                    		<?while(have_posts()) : the_post();?>
                   	                    			<article>
						<div class="post_info">
							<p class="cal"><span><? the_time('Y/m/d') ?></span></p>
						</div>
						<div class="post">
							<h2 class="title"><a href="<? the_permalink() ?>" title="<? the_title_attribute(); ?>"><? the_title(); ?></a></h2>
								<? the_content('続きを読む'); ?>
						</div>
						<?comments_template(); ?>
					</article>
				<? endwhile; ?>
			</section>
		</div>
	</main>
<?get_footer();?>