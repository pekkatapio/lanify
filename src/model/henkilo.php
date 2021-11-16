<?php

  require_once HELPERS_DIR . 'DB.php';

  function lisaaHenkilo($nimi,$email,$discord,$salasana) {
    DB::run('INSERT INTO henkilo (nimi, email, discord, salasana) VALUE  (?,?,?,?);',[$nimi,$email,$discord,$salasana]);
    return DB::lastInsertId();
  }

  function haeHenkiloSahkopostilla($email) {
    return DB::run('SELECT * FROM henkilo WHERE email = ?;', [$email])->fetchAll();
  }

  function haeHenkilo($email) {
    return DB::run('SELECT * FROM henkilo WHERE email = ?;', [$email])->fetch();
  }

  function paivitaVahvavain($email,$avain) {
    return DB::run('UPDATE henkilo SET vahvavain = ? WHERE email = ?', [$avain,$email])->rowCount();
  }

  function vahvistaTili($avain) {
    return DB::run('UPDATE henkilo SET vahvistettu = TRUE WHERE vahvavain = ?', [$avain])->rowCount();
  }

?>
