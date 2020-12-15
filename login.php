<?php

$encrypted_password = password_hash('MyOwnSite', PASSWORD_DEFAULT);

?>
<?php

$hashed_password = '$2y$07$BCryptRequires22Chrcte/VlQH0piJtjXl.0t1XkA8pw9dMXTpOq';

if ( password_verify($_POST['pass'], $hashed_password) ) {
  // Passwort war richtig.
  if( password_needs_rehash($hashed_password, PASSWORD_DEFAULT) ) {
    /*  Der Hashalgorithmus des gespeicherten Passworts genügt nicht mehr
     *  den aktuellen Anforderungen, daher sollte es mittels password_hash()
     *  neu gehasht und anstelle des alten Hashes in der Datenbank gespeichert
     *  werden; hier wird es nur in der entsprechenden Variable geändert:
     */
    $hashed_password = password_hash($_POST['pass'],  PASSWORD_DEFAULT);
    // ToDo: neu gehashtes Passwort in DB speichern!
  }
} else {
  // Passwort war falsch.
}

?>
