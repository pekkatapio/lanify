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

  function logout() {

    // Tyhjennetään istuntomuuttujat.
    $_SESSION = array();

    // Poistetaan istunnon eväste.
    if (ini_get("session.use_cookies")) {
      $params = session_get_cookie_params();
      setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
      );
    }

    // Tuhotaan vielä lopuksi istunto.
    session_destroy();

  }

?>
