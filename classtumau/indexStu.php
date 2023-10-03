<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include "StudentController.php";
    $myStdController = new StrudentController();
    $listOfStudents = $myStdController->getAllStudent();
    foreach($listOfStudents as $std){
        echo "<p> {$std->getStdID()}</p>";
        echo "<p> {$std->getStdName()}</p>";
        echo "<p> {$std->getStdMajor()}</p>";

    }

?>
</body>
</html>