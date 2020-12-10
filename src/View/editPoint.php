<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-color: lightgoldenrodyellow">
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
$sql = "SELECT * FROM `Students`";
$stmt = $conn->prepare($sql);
$stmt->execute();
$resul = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>
<br><br><br>
<h1 style="text-align: center">Nhập Điểm Học Sinh</h1>
<br><br><br>
<table align="center" id="tb" class="table" style="width: 400px;align-items: center; background-color: wheat">
    <form method="post">
        <tr>
            <td>
                <label>Mã HS</label>

                <select class="form-control" name="studentCode">
                    <?php foreach ($resul as $key => $value): ?>
                        <option><?php echo $value["id_student"]; ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
            <td>
                <label>Môn Toán</label>

                <input type="text" name="toan" placeholder="Enter toan">
            </td>
            <td>
                <label>Môn Văn</label>

                <input type="text" name="van" placeholder="Enter van">
            </td>
            <td>
                <label>Môn Anh</label>

                <input type="text" name="anh" placeholder="Enter anh">
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit" class="btn btn-success">Submit</button>

            </td>
        </tr>

    </form>

</table>
<br><br>
<footer class="footer bg-dark text-white shape-parent overflow-hidden text-center pt-160 pb-60">

    <div class="footer-copyright text-center py-3">
        <div class="footer-copyright mb-5">© Student Manager 2020-2021</div>
    </div>
    <!--    <div class="footer-copyright text-center py-3" style="background-color: #343a40; color: white">© Student Manager 2020-2021</div>-->
</footer>
</body>
</html>