<?php
  $result = new stdClass();

  $result->name = 'Jhalak';
  $result->id = 10;

  echo check($result->name);
  echo check($result->grade);


  function check($data) {
    if (isset($data)) {
      return $data;
    }

    return null;
  }
