window.onload = function () {
	const menuToggle = document.querySelector(".js-open__menu");
	const closeMenuButton = document.querySelector(".js-close__menu");
	const navMenu = document.querySelector(".js-nav__menu");

	/*-------
	Open menu
	-------*/
	menuToggle.addEventListener("click", function () {
		navMenu.classList.add("is-open");
	});

	/*-------
	Close menu
	-------*/
	closeMenuButton.addEventListener("click", function () {
		navMenu.classList.remove("is-open");
	});

	/*-------
	Handle submenus
	-------*/
	const linksWithSubmenus = document.querySelectorAll(".has-submenu");
	linksWithSubmenus.forEach((element) => {
		element.addEventListener("click", function () {
			this.classList.toggle("is-stretched");
			const submenu = document.getElementById(this.getAttribute("link-for"));
			submenu.classList.toggle("is-open");
		});
	});
};
