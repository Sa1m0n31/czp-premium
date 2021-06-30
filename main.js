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
