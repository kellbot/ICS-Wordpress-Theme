<?php get_header(); ?>
<div>
	<?php if (have_posts()) : ?>

		<h2>Search Results</h2>

		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

		<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class('main-box') ?> id="post-<?php the_ID(); ?>">

				<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

				<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

				<div class="entry">

					<?php the_excerpt(); ?>

				</div>

			</div>

		<?php endwhile; ?>

		<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>No posts found.</h2>

</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>
