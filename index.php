<html>
<head>
<title>Hello PHP!</title>
</head>
<body>
<?php

function thumbnailImage($imagePath)
{
    echo $imagePath;
    $imagick = new Imagick($imagePath);
    $imagick->setbackgroundcolor('rgb(64, 64, 64)');
    $imagick->thumbnailImage(100, 100, true, true);
    header("Content-Type: image/jpg");
    echo $imagick->getImageBlob();
}

thumbnailImage('image.jpg');

?>
</body>
</html>
