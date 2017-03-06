<?php get_header(); ?>

    <section id="eye-catch">
        <div class="wrapper">
            <h2><img src="<?php bloginfo('template_directory'); ?>/img/header_catch.png" height="100" alt="Create company that makes the happiest in the world!!"></h2>
            <p>
                <a href="#news"><img src="<?php bloginfo('template_directory'); ?>/img/scroll.png" width="50"></a>
            </p>
            <img class="eye-catch-logo" src="<?php bloginfo('template_directory'); ?>/img/footer_logo.png" height="70">
        </div>
    </section>
    <div class="main-container">
        <div class="wrapper clearfix">
            <section id="news">
                <h3><img src="<?php bloginfo('template_directory'); ?>/img/news.png" height="20" alt="NEWS"><a class="to-detail" href="<?php echo esc_url( get_home_url() ); ?>/news.html">news一覧へ</a></h3>
                <?php
$paged = (int) get_query_var('paged');
$args = array(
    'posts_per_page' => 3,
    'paged' => $paged,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'post',
    'post_status' => 'publish'
);
$the_query = new WP_Query($args);
if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post();
?>
<?php
$cat = get_the_category();
$catslug = $cat[0]->slug;
?>
                <div class="news-container">
                    <a href="<?php the_permalink(); ?>">
                        <table class="news-table">
                            <tbody>
                                <tr>
                                    <th class="news-date"><?php the_time('Y.n.j'); ?></th>
                                    <td class="news-title"><?php the_title(); ?></td>
                                    <td class="news-text"><?php echo mb_substr(strip_tags($post-> post_content),0,60); ?>
                                    </td>
                                </tr>
                                <img src="<?php bloginfo('template_directory'); ?>/img/news_arrow.png" width="15">
                            </tbody>
                        </table>
                    </a>
                </div>
<?php endwhile; endif; ?>
            </section>
            <section id="philosophy-banner">
                <a href="<?php echo esc_url( get_home_url() ); ?>/philosophy.html"><img src="<?php bloginfo('template_directory'); ?>/img/philosophy.jpg" width="100%" alt="企業理念/corporate philosophy"></a>
            </section>
            <section id="company-banner">
                <a href="<?php echo esc_url( get_home_url() ); ?>/company.html"><img src="<?php bloginfo('template_directory'); ?>/img/company.jpg" width="100%" alt="会社概要/company"></a>
            </section>
        </div>
        <div class="wrapper service-container clearfix">
            <div class="marketing-banner service-banner">
                <a href="<?php echo esc_url( get_home_url() ); ?>/service.html">
                    <h3>ウェブマーケティング事業</h3>
                    <img src="<?php bloginfo('template_directory'); ?>/img/web_marketing.png" height="70">
                    <h4>WEB MARKETING</h4>
                    <p>詳しくはこちら</p>
                </a>
            </div>
            <div class="order-banner service-banner">
                <a href="<?php echo esc_url( get_home_url() ); ?>/service.html">
                    <h3>通販事業</h3>
                    <img src="<?php bloginfo('template_directory'); ?>/img/mail_order.png" height="70">
                    <h4>MAIL ORDER</h4>
                    <p>詳しくはこちら</p>
                </a>
            </div>
            <div class="investment-banner service-banner">
                <a href="<?php echo esc_url( get_home_url() ); ?>/service.html">
                    <h3>自己投資事業</h3>
                    <img src="<?php bloginfo('template_directory'); ?>/img/investment.png" height="70">
                    <h4>INVESTMENT</h4>
                    <p>詳しくはこちら</p>
                </a>
            </div>
        </div>
        <p class="news-more wrapper"><a href="<?php echo esc_url( get_home_url() ); ?>/service.html">> 事業内容ページへ</a></p>
        <section id="recruit-banner" class="wrapper">
            <a href="<?php echo esc_url( get_home_url() ); ?>/recruit.html"><img src="<?php bloginfo('template_directory'); ?>/img/recruit.jpg" width="100%" alt="どこまでも共に突っ走ろう。採用情報/RECRUIT">
                <div class="entry">
                    <img src="<?php bloginfo('template_directory'); ?>/img/entry.png" width="100" alt="ENTRY">
                </div>
            </a>
        </section>
    </div>
<?php get_footer(); ?>