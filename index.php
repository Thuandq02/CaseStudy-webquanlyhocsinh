<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Manager</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
</body>

</html>
<?php
require __DIR__."/vendor/autoload.php";
$studentController = new \QLD\Controller\StudentController();
$subjectController = new \QLD\Controller\SubjectController();
$pointController = new \QLD\Controller\PointController();
$classStudentController = new \QLD\Controller\ClassController();
$page = isset($_REQUEST["page"])? $_REQUEST["page"]: NULL;

switch ($page){
    case "add-student":
        $studentController->addStudent();
        break;
    case "add-point":
        $pointController->addPoint();
        break;
    case 'edit-point':
        $pointController->editPoint();
        break;
    case "delete-student":
        $studentController->deleteStudent();
        break;
    case 'edit-student':
        $studentController->editStudent();
        break;
    case "point-subject":
        $subjectController->showSubject();
        break;
    case "point-list":
        $pointController->showPoint();;
        break;
    case 'list-student':
        $studentController->showStudent();
        break;
    case 'list-subject':
        $subjectController->showSubject();
        break;
    case "list-point":
        $pointController->showPoint();
        break;
    case "search":
        $studentController->search();
        break;
    case 'list-class':
        $classStudentController->showClass();
        break;
    default :
        $studentController->showHome();
}
?>