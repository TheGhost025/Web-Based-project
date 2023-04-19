<?php
function getactors($month, $day)
{
    $curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://online-movie-database.p.rapidapi.com/actors/list-born-today?month=".$month."&day=".$day,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: online-movie-database.p.rapidapi.com",
		"X-RapidAPI-Key: 7300644fe6msh574fad380378bc8p142737jsnf2724f714e42"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	return "cURL Error #:" . $err;
} else {
	return $response;
}
}

function getActorsBio($month, $day)
{
    $result = json_decode(getactors($month, $day), true);//response of getactors 
    $actorsArray = [];
    $actorsNames = [];
	
	if ($result !=null) {
		foreach ($result as $value) {
			$actorsArray[] = $value;
		}
	} else {
		echo "0 results";
	}        


    for ($i = 0; $i < sizeof($actorsArray); $i++) {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://imdb8.p.rapidapi.com/actors/get-bio?nconst=" . $actorsArray[$i],
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: online-movie-database.p.rapidapi.com",
                'X-RapidAPI-Key: 2c791edfa8mshf8975378654b6fbp17e9e9jsn951f21451e32',
            ],
        ]);
        $response = curl_exec($curl);
        $actorsdata = json_decode($response, true);
        $actorName = $actorsdata['name'];
        $actorsArray[] = $actorName;
        curl_close($curl);
    }
    $actorsdata = array(
        "Names" => $actorsArray
    );
    echo json_encode($actorsdata);
}


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $month = $_GET['month'];
    $day = $_GET['day'];
    getActorsBio($month, $day);
}
?>