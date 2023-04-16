const data = null;

const xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
	if (this.readyState === this.DONE) {
		console.log(this.responseText);
	}
});

xhr.open("GET", "https://online-movie-database.p.rapidapi.com/actors/list-born-today?month=7&day=27");
xhr.setRequestHeader("X-RapidAPI-Key", "7300644fe6msh574fad380378bc8p142737jsnf2724f714e42");
xhr.setRequestHeader("X-RapidAPI-Host", "online-movie-database.p.rapidapi.com");

xhr.send(data);