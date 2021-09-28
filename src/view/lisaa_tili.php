<?php $this->layout('template', ['title' => 'Uuden tilin luonti']) ?>

<h1>Uuden tilin luonti</h1>

<form action="" method="POST">
  <div>
    <label for="nimi">Nimi:</label>
    <input id="nimi" type="text" name="nimi" value="<?= getValue($formdata,'nimi') ?>">
    <div class="error"><span><?= getValue($error,'nimi'); ?></span></div>
  </div>
  <div>
    <label for="email">Sähköposti:</label>
    <input id="email" type="email" name="email" value="<?= getValue($formdata,'email') ?>">
    <div class="error"><?= getValue($error,'email'); ?></div>
  </div>
  <div>
    <label for="discord">Discord-tunnus:</label>
    <input id="discord" type="text" name="discord" value="<?= getValue($formdata,'discord')?>">
    <div class="error"><?= getValue($error,'discord'); ?></div>
  </div>
  <div>
    <label for="salasana1">Salasana:</label>
    <input id="salasana1" type="password" name="salasana1">
    <div class="error"><?= getValue($error,'salasana'); ?></div>
  </div>
  <div>
    <label for="salasana2">Salasana uudelleen:</label>
    <input id="salasana2" type="password" name="salasana2">
  </div>
  <div>
    <input type="submit" name="laheta" value="Luo tili">
  </div>
</form>
