<?php $this->layout('template', ['title' => 'Unohtunut salasana']) ?>

<h1>Unohtunut salasana</h1>

<p>Voit vaihtaa unohtuneen salasanan vaihtolinkillä avulla. Vaihtolinkin voit tilata sähköpostiisi alla olevalla lomakkeella.</p>

<form action="" method="POST">
  <div>
    <label for="email">Sähköposti:</label>
    <input id="email" type="email" name="email">
  </div>
  <div>
    <input type="submit" name="laheta" value="Lähetä">
  </div>
</form>