function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

function getActors(date){
    const dat = new Date(date);
    const day = dat.getDate();
    const month = dat.getMonth() + 1;
    const xhr = new XMLHttpRequest();
    xhr.withCredentials = false;
    xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
            var response = JSON.parse(xhr.responseText);
            console.log(response);
            getBio(response);
            }
        }
    };
    xhr.open('GET', 'https://online-movie-database.p.rapidapi.com/actors/list-born-today?month='+month+'&day='+day);
    xhr.setRequestHeader('x-rapidapi-host', 'online-movie-database.p.rapidapi.com');
    xhr.setRequestHeader('x-rapidapi-key', '7300644fe6msh574fad380378bc8p142737jsnf2724f714e42');
    xhr.send();
}

async function getBio(response){
    for(var res in response){
        await sleep(5000);
        var xh = new XMLHttpRequest();
        xh.withCredentials = false;
        xh.addEventListener("readystatechange", function () {
        if (this.readyState === this.DONE) {
            if (this.status === 200) {
                var response = JSON.parse(xh.responseText);
                console.log(response["name"]);
            }
        }
        });
        xh.open("GET", "https://online-movie-database.p.rapidapi.com/actors/get-bio?nconst="+response[res].substring(6,15));
        xh.setRequestHeader("X-RapidAPI-Key", "7300644fe6msh574fad380378bc8p142737jsnf2724f714e42");
        xh.setRequestHeader("X-RapidAPI-Host", "online-movie-database.p.rapidapi.com");

        xh.send();
    }
}