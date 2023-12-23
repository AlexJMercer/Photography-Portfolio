<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php echo $folderName . ' Gallery'; ?></title>
</head>
<body>
    <h1>Gallery</h1>
    <?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['folderName'])) {
        
        $folderName = $_POST['folderName'];
        $folderPath = './gallery-content/' . $folderName;    

        if (is_dir($folderPath)) {
            $files = scandir($folderPath);
            foreach ($files as $file) {
                if ($file !== '.' && $file !== '..') {
                    if (pathinfo($file, PATHINFO_EXTENSION) === 'jpg' || pathinfo($file, PATHINFO_EXTENSION) === 'png') {
                        echo '<img src="' . $folderPath . '/' . $file . '" alt="' . $file . '" >';
                    }
                }
            }
        } else {
            echo '<h3>
                <center>Folder not found</center>
            </h3>';
        }
    } else {
        echo '<h3>
            <center>Request Not Found</center>
        </h3>';
    }
} else {
    echo '<h3>
        <center>Invalid request</center>
    </h3>';
}

?>
</body>
</html>
