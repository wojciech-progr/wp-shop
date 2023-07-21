// Pokaż submenu
function showSubmenu(id) {

    var mainMenu = document.getElementById("header__option-" + id);

    if (mainMenu.classList.contains("showSubmenu")) {
        mainMenu.classList.remove("showSubmenu");
    } else {
        mainMenu.classList.add("showSubmenu");
    }

}