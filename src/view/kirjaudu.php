<?php $this->layout('template', ['title' => 'Kirjautuminen']) ?>

<h1>Kirjautuminen</h1>

<form action="" method="POST">
  <div>
    <label>Sähköposti:</label>
    <input type="text" name="email">
  </div>
  <div>
    <label>Salasana:</label>
    <input type="password" name="salasana">
  </div>
  <div class="error"><?= getValue($error,'virhe'); ?></div>
  <div>
    <input type="submit" name="laheta" value="Kirjaudu">
  </div>
</form>

<div class="info">Jos sinulla ei ole vielä tunnuksia, niin voit luoda ne <a href="lisaa_tili">täällä</a>.</div>
