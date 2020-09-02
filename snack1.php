<?php
  /*
  Snack 1
  Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.

  Olimpia Milano - Cantù | 55-60

  */

  // creo l'array scrivendolo a mano. è un array di array. Per gli array figli specifico la chiave ("casa" "ospite" ecc). Per l'array padre non specifico niente e avrà indice = 1 2 3 ecc.. è come se scrivessi [0 = [array], 1 = [array]] ecc. contratto viene [array, array, array, array]
  $campionato = [
    [
      "casa" => "olimpia milano",
      "ospite" => "cantù",
      "puntiCasa" => 52,
      "puntiOspite" => 25
    ],
    [
      "casa" => "varese",
      "ospite" => "cantù",
      "puntiCasa" => 5,
      "puntiOspite" => 44
    ],
    [
      "casa" => "bologna virtus",
      "ospite" => "pesaro",
      "puntiCasa" => 88,
      "puntiOspite" => 75
    ],
    [
      "casa" => "varese",
      "ospite" => "olimpia milano",
      "puntiCasa" => 90,
      "puntiOspite" => 112
    ],
    [
      "casa" => "pesaro",
      "ospite" => "varese",
      "puntiCasa" => 66,
      "puntiOspite" => 99
    ],
    [
      "casa" => "olimpia milano",
      "ospite" => "bologna virtus",
      "puntiCasa" => 112,
      "puntiOspite" => 120
    ]
  ];

  // creo un ciclo for su tutto l'array e per ognuno stampo la stringa composta "casa" "ospiti" "puntiCasa" "puntiOspite"

  for ($i=0; $i < count($campionato); $i++) {

    // estraggo le info dall'array ad indice $i
    $casa = $campionato[$i]["casa"];
    $ospite = $campionato[$i]["ospite"];
    $puntiCasa = $campionato[$i]["puntiCasa"];
    $puntiOspite = $campionato[$i]["puntiOspite"];

    echo $casa . " - " . $ospite . " | " . $puntiCasa . "-" . $puntiOspite; // creo una stringa composta
    echo "<br>";
  }
 ?>
