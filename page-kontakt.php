<?php
get_header();
?>

<!-- MAIN -->
<main class="page">
    <h1 class="pageHeader">
        Kontakt
    </h1>

    <h2 class="companyName" data-aos="fade-up">
        <b>CZP Premium Golub-Dobrzyń</b> Mariusz Szefler
    </h2>

    <section class="pageSection pageSection--flex">
        <section class="contactSection">
            <img class="contactSection__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/location.svg'; ?>" alt="lokalizacja" data-aos="zoom-in" />

            <h4 class="contactSection__header" data-aos="fade-up">
                <span>Białkowo 39A</span>
                <span>87-400 Golub-Dobrzyń</span>
            </h4>
        </section>

        <section class="contactSection">
            <img class="contactSection__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/contact.svg'; ?>" alt="kontakt" data-aos="zoom-in" />

            <h4 class="contactSection__header" data-aos="fade-up">
                <span>607 042 741</span>
                <span>biuro@czp-premium.pl</span>
            </h4>
        </section>

        <section class="contactSection">
            <img class="contactSection__icon" src="<?php echo get_bloginfo('stylesheet_directory') . '/img/information.svg'; ?>" alt="nip-i-regon" data-aos="zoom-in" />

            <h4 class="contactSection__header" data-aos="fade-up">
                <span>REGON: 8781112121</span>
                <span>NIP: 8781141980</span>
            </h4>
        </section>
    </section>

    <section class="map" data-aos="fade-up">
        <?php echo the_content(); ?>
    </section>
</main>

<?php
get_footer();
?>
