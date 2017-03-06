<?php get_header('news'); ?>
        <section id="news-headline">
            <div class="wrapper">
            <?php
$paged = (int) get_query_var('paged');
$args = array(
    'posts_per_page' => 10,
    'paged' => $paged,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => 'publish',
    'category_name' => 'recruit'
);
$the_query = new WP_Query($args);
if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post();
?>
<?php
$category = get_the_category();
$cat_slug = $category[0]->category_nicename;
?>
                <p class="headline-container"><a href="<?php the_permalink(); ?>"><span class="category-label"><?php echo $cat_slug; ?></span><span class="headline-date"><?php the_time('Y/n/j'); ?></span><span class="headline-title"><?php the_title(); ?></span></a></p>
<?php endwhile; endif; ?>
            </div>
        </section>
        <section id="recruit-banner" class="wrapper">
            <a href="<?php echo esc_url( get_home_url() ); ?>/recruit.html"><img src="<?php bloginfo('template_directory'); ?>/img/recruit.jpg" width="100%" alt="どこまでも共に突っ走ろう。採用情報/RECRUIT">
                <div class="entry">
                    <img src="<?php bloginfo('template_directory'); ?>/img/entry.png" width="100" alt="ENTRY">
                </div>
            </a>
        </section>
    </div>
<?php get_footer(); ?>