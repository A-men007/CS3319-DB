<?php /*code to 1. check for valid img type (.jpg, .gif, etc) 2.check to ensure img isn't too big (bytes) 
3.checks to make sure file uploaded correctly 4. make sure filename doesn't exist 5.mv and store in
upload area 6. var petpic holds location and name of current file*/
  $allowedExts = array("gif", "jpeg", "jpg", "png");
  $temp = explode(".", $_FILES["file"]["name"]);
  $extension = end($temp);  
  $extension = strtolower($extension);
  $uploadholder = dirname(__FILE__) . "/uploadarea";
  if ((($_FILES["file"]["type"] == "image/gif")
      || ($_FILES["file"]["type"] == "image/jpeg")
      || ($_FILES["file"]["type"] == "image/jpg")
      || ($_FILES["file"]["type"] == "image/pjpeg")
      || ($_FILES["file"]["type"] == "image/x-png")
      || ($_FILES["file"]["type"] == "image/png"))
      && ($_FILES["file"]["size"] < 500000)
      && in_array($extension, $allowedExts)) {
            if ($_FILES["file"]["error"] > 0) {
                        echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
            } else {
                        if (file_exists("uploadarea/" . $_FILES["file"]["name"])) {
                                    echo '<p><hr>';
                                    echo $_FILES["file"]["name"] . " already exists. ";
                                    echo '<p><hr>';
                                    $petpic = "NULL";
                        } else {
                                    move_uploaded_file($_FILES["file"]["tmp_name"],"uploadarea/" . $_FILES["file"]["name"]);
                                    $petpic = "uploadarea/" . $_FILES["file"]["name"];
                        } // end of else
            } // end of else
     } else {
            echo "Invalid file";
    } //end of else
?>
