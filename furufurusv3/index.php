<?get_header();?>
	<main>
		<div class="container">
			<section>
				<?if(have_posts());?>
                   	                    		<?while(have_posts()) : the_post();?>
                   	                    			<article>
						<div class="post_info">
							<p class="cal"><span><? the_time('Y/m/d') ?></span></p>
							<p class="author">Posted by <? the_author(); ?></p>
						</div>
						<div class="post">
							<h2 class="title"><a href="<? the_permalink() ?>" title="<? the_title_attribute(); ?>"><? the_title(); ?></a></h2>
								<? the_content('続きを読む'); ?>
						</div>
					</article>
				<? endwhile; ?>
			</section>
		</div>
	</main>
<?get_footer();?>