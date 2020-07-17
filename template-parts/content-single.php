<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package 64Kitchen
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
    <header>
        <h1><?php the_title(); ?></h1>
        <div class="meta">
            <p> <?php _e('Published by','64kitchen') ?><?php the_author_posts_link(); ?> <?php _e('on','64kitchen') ?> <?php echo get_the_date(); ?> <br />
            <?php if( has_category() ): ?>
                <?php _e('Categories:','64kitchen') ?> <span><?php the_category( ' ' ); ?></span>
            <?php endif; ?>
            <br/>
            <?php if(has_tag()): ?>
                <?php _e('Tags:','64kitchen') ?> <span><?php the_tags( '', ', ' ); ?></span>
            <?php endif; ?>
            </p>                            
        </div>        
        <div class="post-thumbnail">
            <?php 
            if( has_post_thumbnail() ): 
                the_post_thumbnail( 'sixty4kitchen-blog', array( 'class' => 'img-fluid') );
            endif;
            ?>
        </div>
    </header>    
    <div class="content">
        <?php wp_link_pages(
            array(
                'before'    =>  '<p class="inner-pagination">' . __('Pages','64kitchen'),
                'after'     =>  '</p>',
            )
        ); ?>
        <?php the_content(); ?>
    </div>
</article>