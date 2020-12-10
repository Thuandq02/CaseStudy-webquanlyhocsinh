<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Thêm Học Sinh</title>
    <style>
        .table{
            background-color: wheat;
        }
    </style>
</head>
<body style="background-color:lightgoldenrodyellow">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php"><img src="img/logo.png" style="width: 100px;" alt="logo" ></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php?page=#">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item"><a href="index.php?page=list-student" class="nav-link">LIST STUDENT</a></li>
            <li class="nav-item"><a href="index.php?page=list-point" class="nav-link">LIST POINT</a>
            <li class="nav-item"><a href="index.php?page=list-subject" class="nav-link">LIST SUBJECT</a></li>
            <li class="nav-item"><a href="index.php?page=list-class" class="nav-link">LIST CLASS</a></li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            <!--            <a href="index.php?page=add-student" class="btn btn-success btn-xs pull-right">Thêm học sinh</a>-->
        </form>
    </div>
</nav>


<?php
//include_once "DBConnect.php";
$db = new \QLD\Model\DBConnect();
$conn = $db->connect();
$sql = "SELECT * FROM `Class`";
$stmt = $conn->prepare($sql);
$stmt->execute();
$resul = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<br>
<form method="post">
    <form method="POST" enctype="multipart/form-data">
        <table align="center" class="table" style="width: auto; border-radius: 15px">
            <thead class="thead-dark">
            <tr>
                <td colspan="2" align="center"><h1>Thêm Học Sinh</h1></td>
            </tr>
            <tr>
                <td>Mã Lớp</td>
                <td>
                    <select class="form-control" name="classCode">
                        <?php foreach ($resul as $key => $value): ?>
                            <option><?php echo $value["id_class"]; ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tên Học Sinh</td>
                <td><input type="text" class="form-control" name="name" placeholder="Enter name"></td>
            </tr>
            <tr>
                <td>Giới tính</td>
                <td>
                    <select name="gender" class="form-control">
                        <option>Nam</option>
                        <option>Nữ</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Ngày Sinh</td>
                <td><input type="date" class="form-control" name="date" placeholder="Enter date"></td>
            </tr>
            <tr>
                <td>Địa Chỉ</td>
                <td><input type="text" class="form-control" name="address" placeholder="Enter address"></td>
            </tr>
            <tr>
                <td>
                    <a class="btn btn-warning" href="index.php?page=list-student">End</a>
                </td>
                <td>
                    <button style="width: 200px" class="btn btn-success" type="submit">Submit</button>
                </td>
            </tr>
            </thead>
        </table>
    </form>
</form>
<footer class="footer bg-dark text-white shape-parent overflow-hidden text-center pt-160 pb-60">

    <div class="footer-copyright text-center py-3">
        <div class="footer-copyright mb-5">© Student Manager 2020-2021</div>
    </div>
    <!--    <div class="footer-copyright text-center py-3" style="background-color: #343a40; color: white">© Student Manager 2020-2021</div>-->
</footer>

</body>
</html>
