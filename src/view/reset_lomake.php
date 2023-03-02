<?php $this->layout('template', ['title' => 'Salasanan vaihtaminen']) ?>

<h1>Salasanan vaihtaminen</h1>

<form action="" method="POST">
  <div>
    <label for="salasana1">Salasana:</label>
    <input id="salasana1" type="password" name="salasana1">
  </div>
  <div>
    <label for="salasana2">Salasana uudelleen:</label>
    <input id="salasana2" type="password" name="salasana2">
  </div>
  <div>
    <div class="error"><?= $error ?></div>
  </div>
  <div>
    <input type="submit" name="laheta" value="Vaihda salasana">
  </div>
</form>
