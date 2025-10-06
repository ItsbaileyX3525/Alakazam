document.addEventListener("DOMContentLoaded", () => {
	const elements = document.querySelectorAll("[href]");
	for (let e of elements) {
		e.addEventListener("click", event => {
			event.preventDefault();
			const href = e.getAttribute("href");
			if (href) {
				window.location.href = href;
			}
		});
	}
});
