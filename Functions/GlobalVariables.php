<?php
  $authorName = "William Shakespeare";

  function setAuthorName() {
    global $authorName;
    $authorName = "Charles Dickens";
  }
  setAuthorName();

  echo $authorName;

 ?>
