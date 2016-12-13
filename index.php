<html>
<head>
    <style>
        img {
            max-width: 50%;
            height: auto;
            width: auto;
        }
    </style>
</head>
<body>

<?php
    $dir = new DirectoryIterator(dirname(__FILE__));
    $images = array();

    //build the array of files
    foreach ($dir as $fileinfo) {
        if (!$fileinfo->isDot()) {
            if ($fileinfo->getExtension() == "jpg"){
                array_push($images, $fileinfo->getFilename());
            }
        }
    }

    //sort
    sort($images);

    //display
    foreach ($images as $image) {
        ?>
        <div>
            <a href=<?php echo $image; ?>>
                <img src=<?php echo $image; ?> />
            </a>
        </div>
        <?php
    }    
?>

</body>
</html>