<?php
  /*
  Snack 3
  Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta
  */

  $arr = [];

  while (count($arr) < 15) { // count restituisce il numero di elementi di un array. con il while ciclo finchè l'array non ha 15 elementi

    $randNum = rand(1, 20); // la funzione rand genera un numero casuale. accetta due paramentri che fanno da numero min e numero max se si vuole generare numeri casuali entro un range. Funziona anche senza specificare un minimo e un massimo.

    if (!in_array($randNum, $arr)) { // in_array restituisce true se l'elemento è presente nell'array. altrimenti restituisce false. se non è presente aggiungo l'elemento all'array. In questo modo evito di avere numeri doppi. array[] = valore funziona tipo .push() in js. non specificando l'indice lui aggiunge in coda un nuovo elemento.
      $arr[] = $randNum;
    }
  }

  // utilizzo un ciclo foreach per stampare tutti i numeri
  foreach ($arr as $value) {
    echo $value . "  ";
  }
 ?>
