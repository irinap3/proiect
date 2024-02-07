function adaugaInCos() {
    // Creează un element listă (li)
    var listItem = document.createElement("li");

    // Adaugă text în elementul listă
    listItem.appendChild(document.createTextNode("Nume Produs - $20"));

    // Adaugă elementul listă în lista coșului
    document.getElementById("lista-cosului").appendChild(listItem);
}

document.addEventListener("DOMContentLoaded", function () {
    var scrollToTopBtn = document.getElementById("scrollToTopBtn");

    window.onscroll = function () {
        scrollFunction();
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            scrollToTopBtn.style.display = "block";
        } else {
            scrollToTopBtn.style.display = "none";
        }
    }

    scrollToTopBtn.addEventListener("click", function () {
        document.body.scrollTop = 0; // Pentru Safari
        document.documentElement.scrollTop = 0; // Pentru alte browsere
    });
});