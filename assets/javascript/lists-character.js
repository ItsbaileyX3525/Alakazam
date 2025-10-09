document.addEventListener("DOMContentLoaded", () => {
	
	const modal = document.getElementById("characterModal");
	const modalClose = document.querySelector(".modal-close");
	const modalCharacterName = document.getElementById("modalCharacterName");
	const modalDescription = document.getElementById("modalDescription");
	const modalAbility = document.getElementById("modalAbility");
	const modalVideo = document.getElementById("modalVideo");

	const cards = document.querySelectorAll(".card");

	cards.forEach((card, index) => {
		if (card.dataset.character) {
			card.addEventListener("click", (event) => {
				event.preventDefault();
				
				const characterName = card.dataset.character;
				const description = card.dataset.description;
				const ability = card.dataset.ability;
				const videoUrl = card.dataset.video;

				modalCharacterName.textContent = characterName;
				modalDescription.textContent = description;
				modalAbility.textContent = ability;
				
				// Dispatch custom event for comments system
				const modalEvent = new CustomEvent('characterModalOpened', {
					detail: {
						characterName: characterName
					}
				});
				document.dispatchEvent(modalEvent);

				if (videoUrl && videoUrl.trim() !== "") {
					let embedUrl = videoUrl;
					
					if (videoUrl.includes('youtube.com/watch?v=')) {
						const videoId = videoUrl.split('v=')[1].split('&')[0];
						embedUrl = `https://www.youtube.com/embed/${videoId}`;
					} else if (videoUrl.includes('youtu.be/')) {
						const videoId = videoUrl.split('youtu.be/')[1].split('?')[0];
						embedUrl = `https://www.youtube.com/embed/${videoId}`;
					} else if (!videoUrl.includes('/embed/')) {
						const videoIdMatch = videoUrl.match(/[?&]v=([^&]+)/);
						if (videoIdMatch) {
							embedUrl = `https://www.youtube.com/embed/${videoIdMatch[1]}`;
						}
					}
					
					modalVideo.src = embedUrl;
					modalVideo.parentElement.style.display = "block";
				} else {
					modalVideo.src = "";
					modalVideo.parentElement.style.display = "none";
				}

				modal.classList.add("active");
				document.body.style.overflow = "hidden"; // Prevent background scrolling
			});
		} else {
			console.log(`Card ${index} has no character data`);
		}
	});

	if (modalClose) {
		modalClose.addEventListener("click", () => {
			closeModal();
		});
	}

	if (modal) {
		modal.addEventListener("click", (event) => {
			if (event.target === modal) {
				closeModal();
			}
		});
	}

	document.addEventListener("keydown", (event) => {
		if (event.key === "Escape" && modal.classList.contains("active")) {
			closeModal();
		}
	});

	function closeModal() {
		modal.classList.remove("active");
		document.body.style.overflow = ""; //Restore scrolling
		if (modalVideo) {
			modalVideo.src = "";
		}
	}
});
