<!DOCTYPE html>
<html lang="fi">
  <head>
    <title>lanify - <?=$this->e($title)?></title>
    <meta charset="UTF-8">    
    <link href="styles/styles.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <h1><a href="<?=BASEURL?>">lanify</a></h1>
    </header>
    <section>
      <?=$this->section('content')?>
    </section>
    <footer>
      <hr>
      <div>lanify by Kurpitsa</div>
    </footer>
  </body>
</html>