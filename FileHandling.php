<?php
 $filePath = "file.txt";
 //open file file.txt
 $fileResource = fopen($filePath , 'r');
 echo "filesize is  ".filesize($filePath)."<br>";
 if ($fileResource == false) {
     echo " Path is not correct";
     exit();
 }
 //read from file.txt and save in $text
 $text = fread($fileResource,filesize($filePath));

 fclose($fileResource);
  //  echo ( "<pre>$text</pre>" );
 $filePath = "writingfile.txt";
 //open file writingfile to write data
 $fileResource1 = fopen($filePath , 'a');
 if ($fileResource1 == false) {
     echo "Path is not correct";
     exit();
 }
 //write data from $text 
 fwrite($fileResource1,$text);

 fclose($fileResource1);











 ?>
