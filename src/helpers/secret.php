<?php

  function generateActivationCode($text='') {
    return hash('sha1', $text . rand());
  }

  function generateResetCode($text='') {
    return generateActivationCode($text);
  }

?>
