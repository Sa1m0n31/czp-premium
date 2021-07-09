<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package czp
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="container-fluid">
    <!-- TOP BAR -->
    <header class="topBar d-none d-md-flex">
        <h3 class="topBar__header">
            CZP Premium Białkowo - ręczniki ZZ, papier dla piskląt
        </h3>
        <h3 class="topBar__header d-none d-xl-block">
            Białkowo 39A, 87-400 Golub-Dobrzyń
        </h3>
        <h3 class="topBar__header d-none d-lg-block">
            tel. 607 042 741, biuro@czp-premium.pl
        </h3>
        <h3 class="topBar__header">
            Ręczniki ZZ, papier makulaturowy, papier toaletowy, papier do piskląt
        </h3>
    </header>

    <!-- TOP MENU -->
    <menu class="topMenu">
        <a class="topMenu__logo" href="<?php echo get_home_url(); ?>">
            <img class="topMenu__logo__img" src="./img/czp-logo.png" alt="czp-bialkowo" />
        </a>

        <ul class="topMenu__list d-none d-md-flex">
            <li class="topMenu__list__item">
                <a class="topMenu__list__link" href="<?php echo get_home_url(); ?>">
                    Strona główna
                </a>
            </li>
            <li class="topMenu__list__item">
                <a class="topMenu__list__link" href="<?php echo get_home_url(); ?>">
                    O firmie
                </a>
            </li>
            <li class="topMenu__list__item">
                <a class="topMenu__list__link" href="<?php echo get_page_link(get_page_by_title('Oferta')->ID); ?>">
                    Oferta
                </a>
            </li>
            <li class="topMenu__list__item">
                <a class="topMenu__list__link" href="<?php echo get_page_link(get_page_by_title('Kontakt')->ID); ?>">
                    Kontakt
                </a>
            </li>
        </ul>

        <menu class="topMenu__mobileMenu d-md-none">
            <button class="topMenu__mobileMenu__close" onclick="closeMenu()">
                <img class="topMenu__mobileMenu__close__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/close.png'; ?>" alt="zamknij" />
            </button>

            <a class="topMenu__mobileMenu__logo" href="<?php echo get_home_url(); ?>">
                <img class="topMenu__mobileMenu__logo__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/czp-logo.png'; ?>" alt="logo" />
            </a>
            <ul class="topMenu__mobileMenu__list">
                <li class="topMenu__list__item">
                    <a class="topMenu__list__link" href="<?php echo get_home_url(); ?>">
                        Strona główna
                    </a>
                </li>
                <li class="topMenu__list__item">
                    <a class="topMenu__list__link" href="<?php echo get_home_url() . '#o-firmie'; ?>">
                        O firmie
                    </a>
                </li>
                <li class="topMenu__list__item">
                    <a class="topMenu__list__link" href="<?php echo get_page_link(get_page_by_title('Oferta')->ID); ?>">
                        Oferta
                    </a>
                </li>
                <li class="topMenu__list__item">
                    <a class="topMenu__list__link" href="<?php echo get_page_link(get_page_by_title('Kontakt')->ID); ?>">
                        Kontakt
                    </a>
                </li>
            </ul>
        </menu>

        <button class="topMenu__btn d-block d-md-none" onclick="openMenu()">
            <img class="topMenu__btn__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/menu.png'; ?>" alt="menu" />
        </button>
    </menu>