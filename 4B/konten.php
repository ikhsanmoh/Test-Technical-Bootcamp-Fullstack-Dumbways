<?php
  // Halaman yang dapat diakses
  $halamanArr = array(
    "home", "add-book", "add-category","add-writer", "process-add-book", "process-add-category", "process-add-writer",
    "delete-book",
    "delete-category",
    "delete-writer",
    "edit-book",
    "edit-category",
    "edit-writer",
    "process-update-book",
    "process-update-category",
    "process-update-writer",
    "book-detail"
  );

  $isRedirectToHome = true;
  foreach($halamanArr as $h){
    if ($h == $hal && $h != 'home') {
      $isRedirectToHome = false;
      include "$h.php";
      break;
    }
  }

  if ($isRedirectToHome) {
    include "home.php";
  }
?>