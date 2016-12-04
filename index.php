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

    foreach ($dir as $fileinfo) {
        if (!$fileinfo->isDot()) {
            if ($fileinfo->getExtension() == "jpg"){
                ?>
                <div>
                    <a href=<?php echo $fileinfo->getFilename(); ?>>
                        <img src=<?php echo $fileinfo->getFilename(); ?> />
                    </a>
                </div>
                <?php
            }
        }
    }
?>

</body>
</html>