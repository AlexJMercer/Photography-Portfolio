<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['req'])) {
        $folderName = $_POST['req'];
        $folderPath = './gallery-content/' . $folderName; // Set your folder path here

        if (is_dir($folderPath)) {
            $files = scandir($folderPath);
            foreach ($files as $file) {
                if ($file !== '.' && $file !== '..') {
                    if (pathinfo($file, PATHINFO_EXTENSION) === 'jpg' || pathinfo($file, PATHINFO_EXTENSION) === 'png') {
                        echo '<img src="' . $folderPath . '/' . $file . '" alt="' . $file . '" />';
                    }
                }
            }
        }
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <title><?php echo $folderName; ?></title>
</head>
<body>
    <h1>hello w0rlD</h1>
</body>
</html>