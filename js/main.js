/* Siema carousel in hero section */
if(document.querySelector(".landing")) {
    const heroCarousel = new Siema({
        selector: ".landing__slider",
        perPage: 1,
        loop: true,
        draggable: false
    });

    const scaleSliderImg = (current) => {
        let img, imgNormal1, imgNormal2;
        switch(current) {
            case 3:
                img = document.querySelectorAll("#slider1");
                imgNormal1 = document.querySelectorAll("#slider2");
                imgNormal2 = document.querySelectorAll("#slider3");
                break;
            case 1:
                img = document.querySelectorAll("#slider2");
                imgNormal1 = document.querySelectorAll("#slider1");
                imgNormal2 = document.querySelectorAll("#slider3");
                break;
            case 2:
                img = document.querySelectorAll("#slider3");
                imgNormal1 = document.querySelectorAll("#slider2");
                imgNormal2 = document.querySelectorAll("#slider1");
                break;
            default:
                break;
        }

        img.forEach(item => {
            item.style.transform = "scale(1.2)";
        });
        imgNormal1.forEach(item => {
            item.style.transform = "scale(1)";
        });
        imgNormal2.forEach(item => {
            item.style.transform = "scale(1)";
        })
    }

    /* Siema carousel animation */
    scaleSliderImg(3);
    setInterval(() => {
        scaleSliderImg(heroCarousel.currentSlide+1);
        heroCarousel.next();
    }, 5000);
}

const sliderLoaded = () => {
    const loader = document.querySelector(".loader");
    const landing = document.querySelector(".landing__slider");

    loader.style.opacity = "0";
    landing.style.opacity = "1";

    setTimeout(() => {
        loader.style.display = "none";
    }, 1000);
}

/* Mobile menu */
const openMenu = () => {
    const menu = document.querySelector(".topMenu__mobileMenu");
    const menuItems = document.querySelectorAll(".topMenu__mobileMenu>*");
    menu.style.transform = "scaleX(1)";
    setTimeout(() => {
        menuItems.forEach(item => {
            item.style.opacity = "1";
        });
    }, 400);
}

const closeMenu = () => {
    const menu = document.querySelector(".topMenu__mobileMenu");
    const menuItems = document.querySelectorAll(".topMenu__mobileMenu>*");
    menuItems.forEach(item => {
        item.style.opacity = "0";
    });
    setTimeout(() => {
        menu.style.transform = "scaleX(0)";
    }, 400);
}

/* Sticky menu */
const topMenu = document.querySelector(".topMenu");
const topMenuLogo = document.querySelector(".topMenu__logo__img");
const topMenuItems = document.querySelectorAll(".topMenu__list__item");
window.addEventListener("scroll", () => {
    if(window.pageYOffset > 50) {
        if(window.innerWidth > 768) topMenuLogo.style.width = "150px";
        else topMenuLogo.style.width = "70px";
        topMenuLogo.style.margin = "20px 0";
        topMenu.style.borderBottom = "2px solid #CE2323";

        topMenuItems.forEach(item => {
            item.style.borderBottom = "none";
        });
    }
    else {
        if(window.innerWidth > 768) topMenuLogo.style.width = "250px";
        else topMenuLogo.style.width = "70px";
        topMenuLogo.style.margin = "0";
        topMenu.style.borderBottom = "none";

        topMenuItems.forEach(item => {
            item.style.borderBottom = "1px solid #E1E1E1";
        });
    }
});

window.addEventListener("resize", () => {
   if(window.innerWidth > 768) {
       topMenuLogo.style.width = "250px";
   }
   else {
       topMenuLogo.style.width = "70px";
   }
});

/* AOS */
AOS.init({
    delay: 100,
    duration: 600
});

/* Contact form submission */
const formConfirmation = () => {
    const contactForm = document.querySelector(".wpcf7");
    const confirmation = document.querySelector(".formConfirmation");
    const inputs = document.querySelectorAll(".input");
    const textarea = document.querySelector(".textarea");

    contactForm.style.height = "0";
    contactForm.style.opacity = "0";

    confirmation.style.opacity = "1";
    confirmation.style.height = "auto";
    confirmation.style.padding = "150px 0 500px";

    inputs.forEach(item => {
       item.value = "";
    });
    textarea.value = "";

    setTimeout(() => {
        contactForm.style.height = "auto";
        contactForm.style.opacity = "1";

        confirmation.style.opacity = "0";
        confirmation.style.height = "0";
        confirmation.style.padding = "0 0 0";
    }, 3000);
}

document.addEventListener("wpcf7mailfailed", formConfirmation);
document.addEventListener("wpcf7mailsend", formConfirmation);