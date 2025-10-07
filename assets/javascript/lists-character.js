document.addEventListener("DOMContentLoaded", () => {
	console.log("lists-character.js loaded successfully");
	
	const modal = document.getElementById("characterModal");
	const modalClose = document.querySelector(".modal-close");
	const modalCharacterName = document.getElementById("modalCharacterName");
	const modalDescription = document.getElementById("modalDescription");
	const modalAbility = document.getElementById("modalAbility");
	const modalVideo = document.getElementById("modalVideo");

	console.log("Modal element:", modal);
	console.log("Modal elements found:", {
		modal: !!modal,
		modalClose: !!modalClose,
		modalCharacterName: !!modalCharacterName,
		modalDescription: !!modalDescription,
		modalAbility: !!modalAbility,
		modalVideo: !!modalVideo
	});

	const cards = document.querySelectorAll(".card");
	console.log(`Found ${cards.length} cards`);

	cards.forEach((card, index) => {
		if (card.dataset.character) {
			console.log(`Adding click handler to card ${index}: ${card.dataset.character}`);
			card.addEventListener("click", (event) => {
				console.log(`Card clicked: ${card.dataset.character}`);
				event.preventDefault();
				
				const characterName = card.dataset.character;
				const description = card.dataset.description;
				const ability = card.dataset.ability;
				const videoUrl = card.dataset.video;

				modalCharacterName.textContent = characterName;
				modalDescription.textContent = description;
				modalAbility.textContent = ability;
				
				if (videoUrl && videoUrl.trim() !== "") {
					modalVideo.src = videoUrl;
					modalVideo.parentElement.style.display = "block";
				} else {
					modalVideo.src = "";
					modalVideo.parentElement.style.display = "none";
				}

				console.log("Showing modal");
				modal.classList.add("active");
				document.body.style.overflow = "hidden"; // Prevent background scrolling
			});
		} else {
			console.log(`Card ${index} has no character data`);
		}
	});

	if (modalClose) {
		modalClose.addEventListener("click", () => {
			console.log("Close button clicked");
			closeModal();
		});
	}

	if (modal) {
		modal.addEventListener("click", (event) => {
			if (event.target === modal) {
				console.log("Clicked outside modal");
				closeModal();
			}
		});
	}

	document.addEventListener("keydown", (event) => {
		if (event.key === "Escape" && modal.classList.contains("active")) {
			console.log("Escape key pressed");
			closeModal();
		}
	});

	function closeModal() {
		console.log("Closing modal");
		modal.classList.remove("active");
		document.body.style.overflow = ""; // Restore scrolling
		if (modalVideo) {
			modalVideo.src = "";
		}
	}
});
