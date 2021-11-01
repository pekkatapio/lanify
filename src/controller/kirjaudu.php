<?php

  function tarkistaKirjautuminen($email="", $salasana="") {

    // Haetaan käyttäjän tiedot sen sähköpostiosoitteella. 
    require_once(MODEL_DIR . 'henkilo.php');
    $tiedot = haeHenkiloSahkopostilla($email);
    $tiedot = array_shift($tiedot);

    // Tarkistetaan ensin löytyikö käyttäjä. Jos löytyi, niin
    // tarkistetaan täsmäävätkö salasanat.
    if ($tiedot && password_verify($salasana, $tiedot['salasana'])) {
      return true;
    }

    // Käyttäjää ei löytynyt tai salasana oli väärin. 
    return false;

  }

?>
