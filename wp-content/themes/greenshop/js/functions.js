/* 

Show subElement and adjust its width 

'mainElement' is direct parent of 'subElement'
subElement has to be ul
add more elements to first line of function if needed

*/
function showSubElement(mainElement) {

    var subElement = mainElement.getElementsByTagName("ul");
    var subElementStyle = getComputedStyle(subElement[0]).getPropertyValue("display");

    if (subElementStyle == 'none') {

        // show element
        mainElement.classList.add("showSubElement");

        adjustsubElementSize(mainElement, subElement[0]);

        if (mainElement.offsetWidth > subElement[0].offsetWidth) {

            adjustsubElementSize(mainElement.offsetWidth, subElement[0]);

        }

    } else {

        // hide element
        mainElement.classList.remove("showSubElement");

    }

}

// Adjusts size of subElement
function adjustsubElementSize(mainElementWidth, subElement) {

    subElement.style.width = mainElementWidth + 'px';

}