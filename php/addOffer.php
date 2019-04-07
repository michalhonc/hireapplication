<?php

  include 'db.php';
  
  $job = $_POST["job"];
  $country = $_POST["country"] ? $_POST["country"] : null;
  $street = $_POST["street"] ? $_POST["street"] : null;
  $streetNumber = $_POST["streetNumber"] ? $_POST["streetNumber"] : null;
  $postCode = $_POST["postCode"] ? $_POST["postCode"] : null;
  $obligation = $_POST["obligation"] ? $_POST["obligation"] : null;
  $education = $_POST["education"] ? $_POST["education"] : null;
  $sallary = $_POST["sallary"] ? $_POST["sallary"] : null;
  $content = $_POST["content"] ? $_POST["content"] : null;

  $randomNumber = rand(1, 4);
  $pictureLink = "/images/more-from-" . $randomNumber . ".png";
  
  
  $sql = "INSERT INTO `offers` (job, country, street, streetNumber, postCode, obligation, education, sallary, content, pictureLink) VALUES ('$job', '$country', '$street', '$streetNumber', '$postCode', '$obligation', '$education', '$sallary', '$content', '$pictureLink')";

  if ($cnn->query($sql) === TRUE) {                                                                                                                                     
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $cnn->error;

    // redirect to add offer form with error status
    header("Location: ../offer.php?status=0");
  }

  $cnn->close();

  // redirect to detail page with success status
  header("Location: ../offer.php?status=0");
  die();

?>