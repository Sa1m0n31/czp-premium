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

