<?php

/**
 * @author pqvinh
 * @copyright 2017
 */

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>