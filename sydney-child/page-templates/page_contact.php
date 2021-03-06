<?php
/**
 * Template Name: Contact Page
 *
 *
 * @package Sydney-child
 */

get_header(); ?>

	<div id="primary" class="content-area col-md-9">
		<main id="main" class="post-wrap" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<script type="text/javascript">
		jQuery(document).ready(function($){
			$("input:not([value]),input[value='']").parent().parent().addClass('empty');
			// if (!$("#message_id").val()) {
			// 	$("#message_id").parent().parent().addClass('empty');
			// }

			/* Input event handeling */
			$('input').on('input keyup',function(){
				$(this).parent().parent().toggleClass('empty', !Boolean($(this).val()));
			});
		})
	</script>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
