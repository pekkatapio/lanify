<?php

  require_once HELPERS_DIR . 'DB.php';

  function lisaaHenkilo($nimi,$email,$discord,$salasana) {
    DB::run('INSERT INTO henkilo (nimi, email, discord, salasana) VALUE  (?,?,?,?);',[$nimi,$email,$discord,$salasana]);
    return DB::lastInsertId();
  }

?>
