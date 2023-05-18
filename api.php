<?php
    header ("Content-type:application/json");

    /* Estos son clases */
    /* $nombre = (string) "Rudolf";
    $apellido = (string) "Hernandez"; */
    /* ---------------- */

    /* Estos son objetos */
    /* $obj = (object) []; */

    /* Variables dentro del objeto */
    /* $obj->nombre = (string) "Jhon";
    $obj->apellido = (string) "Almeida";
    $obj->edad = (integer) 23; */

    /* Con esto se muestra en el navegador */
    /* echo json_encode($obj); */
    /* ----------------- */

    /* Consumir una api */
    $config = (array) [];
    $config["http"] = (array) [];
    $config["http"]["method"] = (string) "GET";
    $config["http"]["header"] = (string) "Content-type:application/json";
    $strm = stream_context_create($config);

    $res = file_get_contents("https://pokeapi.co/api/v2/pokemon/", false , $strm);

    echo $res;
    /* ---------------- */





    /* echo <<<String
        nombre: ${nombre}
    String;  */

    /* echo <<<PEPINO
    {
        "nombre": '${nombre}'
        "apellido": '${apellido}'
    }
    PEPINO; */
?>