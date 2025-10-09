const quoteParagraph = document.getElementById("quote");
const quoterParagraph = document.getElementById("quoter");
const logoutButton = document.getElementById("logout-btn");
const fact1 = document.getElementById("fact-1");
const fact2 = document.getElementById("fact-2");
const fact3 = document.getElementById("fact-3");

function getRandomFact() {
	const anime = animeFacts[Math.floor(Math.random() * animeFacts.length)];
	const fact = anime.facts[Math.floor(Math.random() * anime.facts.length)];
	return { anime: anime.anime, fact };
}

const animeFacts = [
	{
		anime: "One Piece",
		facts: [
			"Eiichiro Oda originally planned One Piece to last only 5 years, but it has been running since 1997",
			"Luffy's signature straw hat originally belonged to Gol D Roger before being passed down to Shanks",
			"The World Government's flag design resembles a map projection of the world, with the lines symbolizing the seas",
			"Zoro was originally intended to be part of Buggy's crew before Oda changed his role to a main protagonist",
			"The Going Merry's funeral scene was personally drawn by Oda because he wanted it to feel like a real character's death"
		]
	},

	{
		anime: "JoJo's Bizarre Adventure",
		facts: [
			"Araki designed each JoJo protagonist to represent a different form of 'justice' through the generations",
			"Stands were introduced in Part 3 to simplify the depiction of complex battles without physical damage to characters",
			"The character design in later parts shows Araki's transition from muscular Western art style to a sleek fashion-inspired style",
			"'ZA WARUDO!' became iconic because of DIO's exaggerated pronunciation in the anime adaptation",
			"Araki once stated that he doesn't age as fast as others because he draws beautiful characters all the time"
		]
	},

	{
		anime: "Bleach",
		facts: [
			"The title 'Bleach' was chosen because Tite Kubo liked the idea of cleansing souls — similar to how bleach cleanses color",
			"Ichigo's name means 'strawberry,' but also can mean 'one who protects,' fitting his personality",
			"Kubo was heavily inspired by fashion magazines, which is why Bleach characters often have stylish clothing",
			"The anime was canceled before adapting the final arc due to production issues, not lack of popularity",
			"The Soul Society's architecture and hierarchy are inspired by traditional Japanese feudal systems"
		]
	},

	{
		anime: "Jujutsu Kaisen",
		facts: [
			"Gege Akutami said that Sukuna's design was inspired by traditional depictions of Japanese oni",
			"Gojo Satoru's blindfold technique allows him to control how much of his Six Eyes he uses to conserve energy",
			"The Tokyo Jujutsu High uniforms were based on modern streetwear rather than traditional school outfits",
			"Akutami originally wanted Yuji to die early on, but changed it after editors pushed for a longer story",
			"The curses' appearances are designed to resemble real-life fears and negative emotions"
		]
	},

	{
		anime: "Black Clover",
		facts: [
			"Asta was originally going to have magic but lose it midway; Tabata changed this to make him completely magicless from the start",
			"The grimoire's five-leaf clover represents the devil, a twist on the typical four-leaf clover symbol of luck",
			"Yami's catchphrase 'Surpass your limits' is inspired by Tabata's personal motto during his career struggles",
			"Many of the Black Bulls' base interiors are inspired by RPG game designs, especially from Dragon Quest",
			"Finral's spatial magic concept came from Tabata's fascination with instant travel abilities in older fantasy series"
		]
	}
];


async function fetchQuote() {
    fetch('https://yurippe.vercel.app/api/quotes?show=one%20piece&random=1')
        .then(response => response.json())
        .then((quote) => {
            quoterParagraph.textContent = "--- " +  quote[0].character
            quoteParagraph.textContent = quote[0].quote
        })
}

function fetchFacts() {
    var facts1 = getRandomFact()
    var facts2 = getRandomFact()
    var facts3 = getRandomFact()
    fact1.textContent = facts1.fact + ", " + facts1.anime
    fact2.textContent = facts2.fact + ", " + facts2.anime
    fact3.textContent = facts3.fact + ", " + facts3.anime
}

logoutButton.addEventListener("click", () => {
    window.location.href = "/logout"
})

document.addEventListener("DOMContentLoaded", () => {
    fetchQuote()
    fetchFacts()
})