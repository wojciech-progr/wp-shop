// Show submenu
function showSubmenu(element) {

    var mainMenu = element;

    if (mainMenu.classList.contains("showSubmenu")) {
        mainMenu.classList.remove("showSubmenu");
    } else {
        mainMenu.classList.add("showSubmenu");
    }

}