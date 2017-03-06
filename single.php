<?php get_header('under'); ?>

    <div class="main-container">
        <section id="news-category" class="single-news-category">
            <div class="wrapper clearfix">
                <h1 class="single-title">NEWS</h1>
                <table class="category-table">
                    <tr>
                        <th>CATEGORY</th>
                        <td><a href="<?php echo esc_url( get_home_url() ); ?>/category/news">News</a></td>
                        <td><a href="<?php echo esc_url( get_home_url() ); ?>/category/press">Press</a></td>
                        <td><a href="<?php echo esc_url( get_home_url() ); ?>/category/release">Release</a></td>
                        <td><a href="<?php echo esc_url( get_home_url() ); ?>/category/recruit">Recruit</a></td>
                    </tr>
                    <tr>
                        <th class="archive-th">ARCHIVE</th>
                        <td><a href="<?php echo esc_url( get_home_url() ); ?>/2016/">2016</a></td>
                        <td><a href="<?php echo esc_url( get_home_url() ); ?>/2015/">2015</a></td>
                        <td><a href="<?php echo esc_url( get_home_url() ); ?>/2014/">2014</a></td>
                        <td><a href="<?php echo esc_url( get_home_url() ); ?>/2013/">2013</a></td>
                    </tr>
                </table>
        </section>
        </div>
        <div class="main-container single-page">
            <section id="single-main-container">
                <div class="wrapper">
                <?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php
$category = get_the_category();
$cat_slug = $category[0]->category_nicename;
?>
                    <h2 class="news-detail-title">2018年度 新卒採用を開始致しました。</h2>
                    <p class="label-and-date clearfix"><span class="category-label"><?php echo $cat_slug; ?></span><span class="headline-date"><?php the_time('Y/n/j'); ?></span></p>
                    <div class="news-img">
                        <?php the_post_thumbnail( 'thumbnail', array('class' => 'responsive-img') ); ?>
                    </div>
                    <p class="single-content"><?php the_content(); ?></p>
                    <?php endwhile; ?>
            <?php endif; ?>
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
    </div>
<?php get_footer(); ?>

