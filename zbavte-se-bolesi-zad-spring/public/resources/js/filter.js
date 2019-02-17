function myFunction(timetableElem) {

    let divsToHide = document.getElementsByClassName(timetableElem); //divsToHide is an array

    for (let i = 0; i < divsToHide.length; i++) {
        if (divsToHide[i].style.visibility === "hidden") {
            divsToHide[i].style.visibility = "visible"; // block/none || hidden/visible
        }else {
            divsToHide[i].style.visibility = "hidden";
        }
    }
}