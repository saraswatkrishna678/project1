<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>form</title>
    <style>
      form{
        width: 300px;
        height: 100px;
        background-color: #f4ecbd;
        display:flex;
        justify-content: center;
      }
      body{
        background-color: #ac4ebf;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <form method="POST" enctype="multipart/form-data">
       <input type="file" name="myVar[]" multiple="multiple" />
       <input type="submit" name="Submit" style="height: 20px;"/>
    </form>
    <?php
    $total = isset($_FILES["myVar"]) ? count($_FILES["myVar"]["name"]) : 0;
for ($i = 0; $i < $total; $i++)
{
 if ($_FILES["myVar"]["error"][$i] == UPLOAD_ERR_OK)
 {
 $folderLocation = "myFiles";
 if (!file_exists($folderLocation)) mkdir($folderLocation);

 move_uploaded_file($_FILES["myVar"]["tmp_name"][$i], "$folderLocation/" .
basename($_FILES["myVar"]["name"][$i]));
 }
 else switch ($_FILES["myVar"]["error"][$i])
 {
 case UPLOAD_ERR_INI_SIZE:
 echo "Value: 1; The uploaded file exceeds the upload_max_filesize directive in
php.ini.";
 break;
 case UPLOAD_ERR_FORM_SIZE:
 echo "Value: 2; The uploaded file exceeds the MAX_FILE_SIZE directive that was
specified in the HTML form.";
 break;
 case UPLOAD_ERR_PARTIAL:
 echo "Value: 3; The uploaded file was only partially uploaded.";
 break;
 case UPLOAD_ERR_NO_FILE:
 echo "Value: 4; No file was uploaded.";
 break;
 case UPLOAD_ERR_NO_TMP_DIR:
 echo "Value: 6; Missing a temporary folder. Introduced in PHP 5.0.3.";
 break;
 case UPLOAD_ERR_CANT_WRITE:
 echo "Value: 7; Failed to write file to disk. Introduced in PHP 5.1.0.";
 break;
 case UPLOAD_ERR_EXTENSION:
 echo "Value: 8; A PHP extension stopped the file upload. PHP does not provide a way to
ascertain which extension caused the file upload to stop; examining the list of loaded extensions
with phpinfo() may help. Introduced in PHP 5.2.0.";
 break;

 default:
 echo "An unknown error has occurred.";
 break;
 }
}
?>
  </body>
</html>
