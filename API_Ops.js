// function getactors(month, day)
// {
//     const data = null;

//     const xhr = new XMLHttpRequest();
//     //xhr.withCredentials = true;
    
//     xhr.addEventListener("readystatechange", function () {
//         if (this.readyState === this.DONE) {
//             console.log(this.responseText);
//         }
//     });
//     xhr.open("GET", "https://online-movie-database.p.rapidapi.com/actors/list-born-today?month="+month+"&day="+day);
//     xhr.setRequestHeader("X-RapidAPI-Key", "2c791edfa8mshf8975378654b6fbp17e9e9jsn951f21451e32");
//     xhr.setRequestHeader("X-RapidAPI-Host", "online-movie-database.p.rapidapi.com");
    
//     xhr.send(data);
// }


// document.getElementById("form").addEventListener('birthdate', function(e) {
//     e.preventDefault(); 

//     function getActorsBio(birthdate){
//         let xhr = new XMLHttpRequest();
    
//         if(birthdate =="")
//             return;
        
//         const birthdate = document.getElementById("birthdate").value;
        
//         let date = new Date(birthdate);
//         let day = date.getDate();
//         let month = date.getMonth() + 1;
        
//         console.log(month);
        

//         var url = "API_Ops.php?month=" + month + "&day=" + day;
//         xhr.open("GET", url, true);
//         xhr.send();
    
//         let result = json_decode(getactors(month, day), true);//response of getactors 
//         let actorsArray = [];
    
//         if (result !=null) {
//             result.forEach((element) => {
//                 console.log(element);
//             })
//         } else {
//             console.log("0 results");
//         }
//         let response = JSON.parse(xhr.response);
//         let actorsNames = response["Actors' names"];
        
//         for ($i = 0; $i < sizeof(actorsNames); $i++)
//         {
//             const data = null;
//             const xhr = new XMLHttpRequest();
//             //xhr.withCredentials = true;
//             xhr.addEventListener("readystatechange", function () {
//             if (this.readyState === this.DONE) {
//             console.log(this.responseText);
//             }
//             });
    
//             xhr.open("GET", "https://online-movie-database.p.rapidapi.com/actors/get-bio?nconst="+actorsNames[i]);
//             xhr.setRequestHeader("X-RapidAPI-Key", "2c791edfa8mshf8975378654b6fbp17e9e9jsn951f21451e32");
//             xhr.setRequestHeader("X-RapidAPI-Host", "online-movie-database.p.rapidapi.com");
    
//             xhr.send(data);
//             let actorsdata = [];
//             let actorName = [];
//             let actorsArray =[];
    
//             actorsdata = json_decode(data, true);
//             actorName = actorsdata['Name'];
//             actorsArray[i] = actorName;
        
//         }
    
        
//         actorsdata.forEach((actorsArray) => {
//             "Name :"=actorsArray;
//         })
//         console.log(json_encode(actorsdata));
    
//     }


// });










