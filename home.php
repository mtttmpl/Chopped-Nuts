<?php get_header(); ?>

		<div id="homephotolatest">
			<?php query_posts('cat='.get_option('pd_photos_category').'&showposts=1'); ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="latestphoto" style="width:9500px;height:auto;margin-left:auto;margin-right:auto;border:3px solid #F09;margin-bottom:10px;background:url(<?php print (get_post_meta($post->ID, 'big_photo_value', $single = true)) ? get_post_meta($post->ID, 'big_photo_value', $single = true) : get_bloginfo('template_directory').'/img/empty.gif' ?>) center center;">
			    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><img src="<?php print get_bloginfo('template_directory'); ?>/img/empty.gif" alt="<?php the_title(); ?>" width="950px" height="auto" /></a>
			</div>
			<?php endwhile; ?>
		</div>
		<div id="homephotos">
            	<div id="homephotoholder">
					<?php query_posts('cat='.get_option('pd_photos_category').'&showposts=20&offset=1'); ?>
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="photo" style="background:url(<?php print (get_post_meta($post->ID, 'thimage_value', $single = true)) ? get_post_meta($post->ID, 'thimage_value', $single = true) : get_bloginfo('template_directory').'/img/empty.gif' ?>) center center;">
                        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><img src="<?php print get_bloginfo('template_directory'); ?>/img/empty.gif" alt="<?php the_title(); ?>" width="190" height="130" /></a>
                    </div>
                    <?php endwhile; ?>
                </div>
        </div>
<?php get_footer(); ?>