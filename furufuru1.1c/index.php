<?get_header(); ?>
	<div style="padding-top: 20px;"></div>
	<div id="main">
		<div class="maincontent">
		<?if(have_posts());?>
                                        <?while(have_posts()) : the_post();?>
		<div class="post">
		<div class="post_info">
			<?the_time('Y/m/d') ?>
		</div>
		<h2 class="title"><a href="<?the_permalink() ?>" title="<?the_title_attribute(); ?>"><?the_title(); ?></a></h2>
		<?//if(has_post_thumbnail()) { echo the_post_thumbnail(); } ?>
		<?the_content('続きを読む'); ?>
		</div>
		<?endwhile; ?>
		</div>
	</div>
</div>
<?endif;?>

<?get_footer();?>