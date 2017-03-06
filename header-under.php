<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <meta name="description" content="AIホールディングはWEBに特化したマーケティングを強みとし、それに派生するビジネスを展開しています。グループ法人の統括・運営また各グループ会社とシナジー効果のある新規事業の創出を行っている会社です。">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>">
    <meta property="og:description" content="AIホールディングはWEBに特化したマーケティングを強みとし、それに派生するビジネスを展開しています。グループ法人の統括・運営また各グループ会社とシナジー効果のある新規事業の創出を行っている会社です。">
    <meta property="og:site_name" content="<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>">
    <meta property="og:locale" content="ja_JP">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="<?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?>">
    <meta name="twitter:description" content="AIホールディングはWEBに特化したマーケティングを強みとし、それに派生するビジネスを展開しています。グループ法人の統括・運営また各グループ会社とシナジー効果のある新規事業の創出を行っている会社です。">
    <link href="<?php bloginfo('template_directory'); ?>/img/logo2.png" rel="icon" sizes="16x16">
    <link href="<?php bloginfo('template_url'); ?>/css/normalize.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>
    <div class="header-navi-shadow"></div>
    <div id="to-top"></div>
    <header id="top-head">
        <div class="clearfix">
            <div id="mobile-head" class="under-head">
                <a href="<?php echo esc_url( get_home_url() ); ?>">
                    <img src="<?php bloginfo('template_directory'); ?>/img/logo2.png" alt="AI HOLDINGS" height="70">
                </a>
                <div id="nav-toggle">
                    <div>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <nav id="global-nav" class="side-navi clearfix">
                <ul>
                    <li>
                        <a href="<?php echo esc_url( get_home_url() ); ?>/philosophy.html">企業理念</a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( get_home_url() ); ?>/company.html">会社概要</a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( get_home_url() ); ?>/service.html">事業内容</a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( get_home_url() ); ?>/news.html">NEWS</a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( get_home_url() ); ?>/recruit.html">採用情報</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>