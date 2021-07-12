<?php
get_header();
?>

<!-- MAIN -->
<main class="page page--offer">
    <h1 class="pageHeader">
        Nasza oferta
    </h1>

    <main class="offerContent">
        <a class="offerContent__item" href="<?php echo get_page_link(get_page_by_title('Ręczniki ZZ')->ID); ?>" data-aos="zoom-in">
            <figure class="offerContent__item__imgWrapper">
                <img class="offerContent__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/reczniki_zz.png'; ?>" alt="reczniki-zz" />
            </figure>
            <h2 class="offerContent__item__header">
                Ręczniki ZZ
            </h2>
            <p class="offerContent__item__text">
                Nasze ręczniki ZZ o listkach w rozmiarze 25 x 23 cm są dopasowane do popularnych na rynku podajników do ręczników.
            </p>
            <button class="button offerContent__item__btn">
                Więcej informacji
            </button>
        </a>

        <a class="offerContent__item" href="<?php echo get_page_link(get_page_by_title('Papier dla piskląt')->ID); ?>" data-aos="zoom-in">
            <figure class="offerContent__item__imgWrapper">
                <img class="offerContent__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/papier_dla_pisklat.png'; ?>" alt="papier-dla-pisklat" />
            </figure>
            <h2 class="offerContent__item__header">
                Papier dla piskląt
            </h2>
            <p class="offerContent__item__text">
                Papier dla piskląt cieszy się coraz większą popularnością wśród hodowców drobiu. Posiadamy duże doświadczenie w produkcji papieru do piskląt.
            </p>
            <button class="button offerContent__item__btn">
                Więcej informacji
            </button>
        </a>

        <a class="offerContent__item" href="<?php echo get_page_link(get_page_by_title('Papier toaletowy')->ID); ?>" data-aos="zoom-in">
            <figure class="offerContent__item__imgWrapper">
                <img class="offerContent__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/papier_toaletowy.png'; ?>" alt="papier-toaletowy" />
            </figure>
            <h2 class="offerContent__item__header">
                Papier toaletowy celulozowy
            </h2>
            <p class="offerContent__item__text">
                Papier toaletowy celulozowy to produkt o najwyższej jakości dla wymagających klientów.
            </p>
            <button class="button offerContent__item__btn">
                Więcej informacji
            </button>
        </a>

        <a class="offerContent__item" href="<?php echo get_page_link(get_page_by_title('Papier makulaturowy')->ID); ?>" data-aos="zoom-in">
            <figure class="offerContent__item__imgWrapper">
                <img class="offerContent__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/papier-makulatura.png'; ?>" alt="papier-makulaturowy" />
            </figure>
            <h2 class="offerContent__item__header">
                Papier makulaturowy
            </h2>
            <p class="offerContent__item__text">
                Papier toaletowy niezbędny jest w każdym miejscu. Możne on być wykonany z celulozy lub makulatury.
            </p>
            <button class="button offerContent__item__btn">
                Więcej informacji
            </button>
        </a>

        <a class="offerContent__item" href="<?php echo get_page_link(get_page_by_title('Jumbo rolle')->ID); ?>" data-aos="zoom-in">
            <figure class="offerContent__item__imgWrapper">
                <img class="offerContent__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/jumbo-rolle.png'; ?>" alt="jumbo-rolle" />
            </figure>
            <h2 class="offerContent__item__header">
                Jumbo rolle
            </h2>
            <p class="offerContent__item__text">
                Tam gdzie szary szary papier toaletowy nie wystarczy i liczy się przede wszystkim jego duża ilość, niezbędne będą Jumbo rolle.
            </p>
                <button class="button offerContent__item__btn">
                Więcej informacji
            </button>
        </a>

        <a class="offerContent__item" href="<?php echo get_page_link(get_page_by_title('Ręczniki kuchenne')->ID); ?>" data-aos="zoom-in">
            <figure class="offerContent__item__imgWrapper">
                <img class="offerContent__item__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/reczniki-kuchenne.png'; ?>" alt="reczniki-kuchenne" />
            </figure>
            <h2 class="offerContent__item__header">
                Ręczniki kuchenne
            </h2>
            <p class="offerContent__item__text">
                Papierowe ręczniki kuchenne to produkt niezbędny w każdej kuchni, czy to prywatnej, czy szkolnej lub firmowej.
            </p>
            <button class="button offerContent__item__btn">
                Więcej informacji
            </button>
        </a>
    </main>
</main>

<?php
get_footer();
?>
