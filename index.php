<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>Resume</title>
</head>
<body>
<?php
include_once (__DIR__.'/class/resumeGenerator.php');
$dataResume = require_once(__DIR__.'/src/inputData.php');
$resumeGenerator = new resumeGenerator($dataResume['head'], $dataResume['bodyResume'], $dataResume['footer']);
echo $resumeGenerator ->generateResume();
//echo '<pre>';
//var_dump($resumeGenerator->getHead());
//echo '</pre>';
?>
</body>
</html>


