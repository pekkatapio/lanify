<?php $this->layout('template', ['title' => 'Tili luotu']) ?>

<h1>Sinulle on luotu uusi tili!</h1>

<p>Sinun tulee varmistaa sähköpostiosoitteesi ennen, kuin voit käyttää
tiliäsi. Sinulle on lähetetty sähköpostiisi (<?= getValue($formdata,'email') ?>)
vahvistusviesti. Ole hyvä ja käy vahvistamassa sähköpostiosoitteesi klikkaamalla
viestissä olevaa linkkiä.</p>
