<?php

function cleanArrayData($array=[]) {
  $result = array();
  foreach ($array as $key => $value) {
    $cleaned = trim($value);
    $cleaned = stripslashes($cleaned);
    $result[$key] = $cleaned;
  }
  return $result;
}

function getValue($values, $key) {
  if (array_key_exists($key, $values)) {
    return htmlspecialchars($values[$key]);
  } else {
    return null;
  }
}

?>
