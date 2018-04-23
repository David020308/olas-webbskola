<?php get_header(); ?>

    <div id="content">
    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            
            <header class="entry-header">
                <h2><?php the_title(); ?></h2>
            </header>
        
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        
            <footer class="entry-footer">
                <span class="posted-on"><?php echo __('Posted: ') .  get_the_date() . " " .  get_the_time(); ?></span>
                <span class="cat-links"><?php echo __('Categories: ') ?><?php the_category( ', '); ?> </span>
                <span class="tags-links"><?php echo __('Tags: ') ?><?php the_tags('',', '); ?></span>
            </footer>
    
        </article>
        <?php endwhile; else: ?>
            <article><div class="entry-content">
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            </div></article>
        <?php endif; ?>
    
    </div>
    <?php get_sidebar(); ?>
    


<?php get_footer(); ?>