const navLinks = ["Mon profil\n→", "Articles\n→", "Témoignages\n→", "S'inscrire →", "Se connecter →"];



document.addEventListener("click", (e) => {
    if (e.target.innerText === "☰") {
        burgerMenu.innerText = "X";
        burgerMenu.style.color = "#051514"
        nav.classList.add("burger-menu");
        headNav.style.background = "#fef5ea"
        search.style.border = "1px solid #5C7142"
    } else if (e.target.innerText === "X") {
        nav.classList.toggle("burger-menu");
        burgerMenu.innerText = "☰";
        headNav.style.background = "transparent"
        burgerMenu.style.color = "#fef5ea"
        search.style.border = "none"
    }
    if (navLinks.includes(e.target.innerText)) {
        nav.classList.toggle("burger-menu");
        burgerMenu.innerText = "☰";
        headNav.style.background = "transparent"
        burgerMenu.style.color = "#fef5ea"
        search.style.border = "none"
    }
})
