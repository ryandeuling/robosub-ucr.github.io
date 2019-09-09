<?php
    //PHP SCRIPT: getimages.php
    Header("content-type: application/x-javascript");
    header('Content-type: text/html; charset=utf-8');
    //echo "A";
     
    //This function gets the file names of all images in the current directory
    //and ouputs them as a JavaScript array
    function returnimages($dirname=".") {
        $pattern="(\.jpg$)|(\.png$)|(\.jpeg$)|(\.gif$)"; //valid image extensions
        $include = array("png", "gif", "jpg", "jpeg", "HEIC");

        $files = array();
        $curimage=0;
        if($handle = opendir($dirname)) {
            while(false !== ($file = readdir($handle))) {
                if (preg_match('/\.('.implode('|', $include).')$/', $file, $matches)) {
                    //Output it as a JavaScript array element
                    echo 'galleryarray['.$curimage.']="'.$file .'";';
                    $curimage++;
                }
            }
     
            closedir($handle);
        }
        return($files);
    }
    echo "var galleryarray = new Array();";
    returnimages() //Output the array elements containing the image file names
?>