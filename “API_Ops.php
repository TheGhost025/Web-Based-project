<?php
function RetrieveActorsList($month, $day)
{
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://online-movie-database.p.rapidapi.com/actors/list-born-today?month=" . $month . "&day=" . $day,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "X-RapidAPI-Host: online-movie-database.p.rapidapi.com",
            'X-RapidAPI-Key: 47c3e17948msh0cec7a2604f6080p1396a7jsn13c3b413e8d2',
        ],
    ]);
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        return ("cURL Error #:" . $err);
    } else {
        return $response;
    }
}

function getActorsBio($month, $day)
{
    $data = json_decode(RetrieveActorsList($month, $day), true);//response of RetrieveActorsList 
    $actorsArray = [];

    foreach ($data as $value) {
        $actorsArray[] = substr($value, 6, 9);
    }

    $actorsNames = [];

    for ($i = 0; $i < count($actorsArray); $i++) {
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
                'X-RapidAPI-Key: 47c3e17948msh0cec7a2604f6080p1396a7jsn13c3b413e8d2',
            ],
        ]);
        $response = curl_exec($curl);
        // Convert the JSON response into a PHP object or associative array
        $actorsdata = json_decode($response, true);

        // Access the name property of the object or array
        $name = $actorsdata['name'];

        $actorsNames[] = $name;

        curl_close($curl);

    }

    $actorsdata = array(
        "Actors' names" => $actorsNames
    );

    echo json_encode($actorsdata);

}

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $month = $_GET['month'];
    $day = $_GET['day'];
    getActorsBio($month, $day);
}
?>
