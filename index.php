<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package czp
 */

get_header();
?>

    <!-- LANDING PAGE -->
    <main class="landing">
        <img class="landing__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/reczniki_zz_duze.png'; ?>" alt="reczniki-zz" />
        <section class="landing__content">
            <h2 class="landing__content__header">
                O papierze wiemy wszystko!
            </h2>
            <h1 class="landing__content__subheader">
                Ręczniki ZZ, papier toaletowy, papier dla piskląt
            </h1>
        </section>
    </main>

    <section class="section" id="o-firmie">
        <h2 class="section__header text-center" data-aos="fade-up">
            CZP Premium Białkowo - producent ręczników ZZ
        </h2>
        <p class="section__text text-center" data-aos="fade-up">
            <b>Centrum Zaopatrzenia Papiernictwa Premium</b> prowadzi działalność od 2016 roku i specjalizuje się w produkcji <b>ręczników ZZ</b>. Siedziba naszego przedsiębiorstwa znajduje się w Białkowie w województwie kujawsko-pomorskim. Właścicielem firmy jest Mariusz Szefler.
        </p>

        <section class="section__images">
            <a class="section__images__link" href="<?php echo get_page_link(get_page_by_title('Papier toaletowy')->ID); ?>">
                <figure class="section__images__wrapper" data-aos="flip-up">
                    <img class="section__images__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/papier_toaletowy.png'; ?>" alt="papier-toaletowy" />
                </figure>
                <h3 class="section__images__captions__item" data-aos="fade-up">
                    Papier toaletowy
                </h3>
            </a>
            <a class="section__images__link" href="<?php echo get_page_link(get_page_by_title('Papier dla piskląt')->ID); ?>">
                <figure class="section__images__wrapper" data-aos="flip-up">
                    <img class="section__images__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/papier_dla_pisklat.png'; ?>" alt="papier-dla-pisklat" />
                </figure>
                <h3 class="section__images__captions__item" data-aos="fade-up">
                    Papier dla piskląt
                </h3>
            </a>
            <a class="section__images__link" href="<?php echo get_page_link(get_page_by_title('Ręczniki ZZ')->ID); ?>">
                <figure class="section__images__wrapper" data-aos="flip-up">
                    <img class="section__images__img" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/reczniki_zz.png'; ?>" alt="reczniki-zz" />
                </figure>
                <h3 class="section__images__captions__item" data-aos="fade-up">
                    Ręczniki ZZ
                </h3>
            </a>
        </section>

        <p class="section__text text-center" data-aos="fade-up">
            W naszej ofercie znajduje się szeroki wybór <b>papieru toaletowego</b>. Asortyment obejmuje papier jedno-, dwu- i trzywarstwowy. Prowadzimy sprzedaż <b>papieru toaletowego makulaturowego i celulozowego</b>.
        </p>
        <p class="section__text text-center" data-aos="fade-up">
            Celem naszej działalności jest przygotowanie <b>kompleksowej oferty zaopatrzenia producentów i przetwórców papieru w surowce i niezbędne półprodukty</b>. Zajmujemy się również dystrybucją gotowych wyrobów higienicznych do odbiorców hurtowych oraz detalicznych. Z naszych usług korzystają również fermy drobiu, którym oferujemy papier dla piskląt, a także obiekty użyteczności publicznej, które zamawiają u nas <b>ręczniki ZZ i jumbo rolle</b>. Klientom indywidualnym polecamy nasze ręczniki kuchenne, które są bardzo chłonne i wytrzymałe.
        </p>
    </section>

    <section class="section section__icons">
        <section class="section__icons__item">
            <img class="section__icons__item__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/like.svg'; ?>" alt="korzystne-warunki" data-aos="zoom-in" />
            <h4 class="section__icons__item__header text-center" data-aos="fade-up">
                Korzystne warunki
            </h4>
            <p class="section__icons__item__text text-center" data-aos="fade-up">
                Rozeznanie w branży papierniczej i współpraca z czołowymi dostawcami na rynku pozwalają nam proponować bardzo korzystne warunki zakupu.
            </p>
        </section>
        <section class="section__icons__item">
            <img class="section__icons__item__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/correct-symbol.svg'; ?>" alt="korzystne-warunki" data-aos="zoom-in" />
            <h4 class="section__icons__item__header text-center" data-aos="fade-up">
                Kompleksowa oferta
            </h4>
            <p class="section__icons__item__text text-center" data-aos="fade-up">
                Szeroka oferta sprawia, że zamiast robić zakupy w kilku sklepach, wszystko znajdziesz w jednym miejscu. Pozwoli to zaoszczędzić nie tylko pieniądze, ale również czas.
            </p>
        </section>
        <section class="section__icons__item">
            <img class="section__icons__item__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/helping.svg'; ?>" alt="korzystne-warunki" data-aos="zoom-in" />
            <h4 class="section__icons__item__header text-center" data-aos="fade-up">
                Wsparcie techniczne
            </h4>
            <p class="section__icons__item__text text-center" data-aos="fade-up">
                Doświadczenie i znajomość branży papierniczej sprawiają, że możemy służyć fachowym doradztwem i tym samym zaspokoić wymagania klientów.
            </p>
        </section>
        <section class="section__icons__item">
            <img class="section__icons__item__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/people.svg'; ?>" alt="korzystne-warunki" data-aos="zoom-in" />
            <h4 class="section__icons__item__header text-center" data-aos="fade-up">
                Kontakt z klientem
            </h4>
            <p class="section__icons__item__text text-center" data-aos="fade-up">
                Doświadczenie i znajomość branży papierniczej sprawiają, że możemy służyć fachowym doradztwem i tym samym zaspokoić wymagania klientów.
            </p>
        </section>
    </section>

    <section class="section section--noPaddingSmall">
        <p class="section__text text-center" data-aos="fade-up">
            Dzięki naszemu doświadczeniu i kontaktom w branży papierniczej możemy przygotować korzystne rozwiązania w zakupie surowców <b>(makulatura, bobina, gilzy, papier w tamborach, barwnik, klej itp.)</b> dostosowane do warunków logistycznych oraz potrzeb ilościowych. <b>Obsługujemy rynek wschodni i zachodni</b>. Nasz papier toaletowy zamawiają klienci z Torunia i innych miast województwa kujawsko-pomorskiego. Wszystkie nasze produkty posiadają <b>niezbędne atesty</b> i tym samym są bezpieczne w użyciu.
        </p>

        <h2 class="section__header text-center m-md-5 mt-5 p-md-5 mb-0" data-aos="fade-up">
            Zaufaj naszemu doświadczeniu! Pozwól, aby firma <span class="red">CZP Premium</span> zapewniła zaopatrzenie i rozwiązania dla Twojej firmy.
        </h2>
    </section>

    <section class="section pt-1">
        <h3 class="section__header section__header--form text-center" data-aos="fade-up">
            Masz pytania? Skontaktuj się z nami używając poniższego <b>formularza kontaktowego</b>.
        </h3>

        <form class="form" data-aos="fade-up">
            <label class="label">
                <figure class="label__iconWrapper">
                    <img class="label__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/user_square.svg'; ?>" alt="imie-i-nazwisko" />
                </figure>
                <input class="input"
                       placeholder="Imię i nazwisko lub nazwa firmy" />
            </label>
            <label class="label">
                <figure class="label__iconWrapper">
                    <img class="label__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/people_outline.svg'; ?>" alt="numer-telefonu" />
                </figure>
                <input class="input"
                       placeholder="Numer telefonu" />
            </label>
            <label class="label">
                <figure class="label__iconWrapper">
                    <img class="label__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/mail.svg'; ?>" alt="adres-email" />
                </figure>
                <input class="input"
                       placeholder="Adres email" />
            </label>
            <label class="label">
                <textarea class="textarea"
                          placeholder="Treść wiadomości (opcjonalnie)"
                ></textarea>
            </label>
            <button class="button button--submit">
                Wyślij formularz
            </button>
        </form>
    </section>

<?php
get_footer();
?>