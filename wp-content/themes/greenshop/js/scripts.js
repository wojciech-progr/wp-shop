// Show submenu
function showSubmenu(id) {

    var mainMenu = document.getElementById("navbar__option-" + id);

    if (mainMenu.classList.contains("showSubmenu")) {
        mainMenu.classList.remove("showSubmenu");
    } else {
        mainMenu.classList.add("showSubmenu");
    }

}