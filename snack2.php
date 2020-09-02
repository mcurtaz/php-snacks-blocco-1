<?php
  /*
  Snack 2
  Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato".
  */


  // Creo le 3 condizioni salvandole per comodità in 3 variabili

  $nameLengthOk = strlen($_GET["name"]) > 3; // strlen mi restituisce la lunghezza della stringa. verifico sia maggiore di 3. La variabile $nameLengthOk sarà un booleano (true se name è più lungo di 3 caratteri)

  $mailOk = strpos($_GET["mail"],".") !== false && strpos($_GET["mail"],"@") !== false;  // strpos cerca il secondo argomento nella stringa al primo argomento e restituisce la posizione. In questo caso cerca prima il punto poi la chiocciola nella stringa passata col GET con chiave mail. Se strpos non trova nessuna corrispondenza restituisce false. In questo caso lego le due condizioni con un && perchè deve trovare sia il punto sia la chiocciola altrimenti la condizione non è soddisfatta. Si usa il triplo uguale === (in questo caso !==) perchè alcuni numeri (tipo la posizione 0) in booleano possono dare falso anche se una corrispondenza viene trovata.

  //   Warning (dalla documentazione php)
  // This function may return Boolean FALSE, but may also return a non-Boolean value which evaluates to FALSE. Please read the section on Booleans for more information. Use the === operator for testing the return value of this function.


  $ageOk = is_numeric($_GET["age"]); // is_numeric restituisce true o false a seconda se l'argomento è un numero o no.

  if($nameLengthOk && $mailOk && $ageOk){ // verifico le tre condizioni e faccio un echo di conseguenza. L' url dovrà passare parametri col GET (se non li passa comunque le condizioni di controllo danno false e risulta accesso negato)
    echo "Accesso Riuscito";
  } else {
    echo "Accesso Negato";
  }
 ?>
