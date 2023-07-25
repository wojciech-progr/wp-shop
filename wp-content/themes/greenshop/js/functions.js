// Show submenu and adjust its width
function showSubmenu(element) {

    var mainMenu = element;
    var subMenu = element.getElementsByClassName("navbar__submenu");

    var mainMenuWidth;
    var subMenuWidth;


    if (mainMenu.classList.contains("showSubmenu")) {

        // if true hide submenu
        mainMenu.classList.remove("showSubmenu");

    } else {

        // if not true show submenu
        mainMenu.classList.add("showSubmenu");

        // check width of mainmenu and submenu
        mainMenuWidth = mainMenu.offsetWidth;
        subMenuWidth = subMenu[0].offsetWidth;

        // compare widths
        if (mainMenuWidth > subMenuWidth) {

            // if true, change submenus width to mainmenus width
            subMenu[0].style.width = mainMenuWidth + 'px';

        }
    }

}