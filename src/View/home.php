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


<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" align="center">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img style="height: 450px" class="d-block w-75" src="https://i0.wp.com/codegym.vn/wp-content/uploads/2018/03/Hinh-anh-hoc-bong.jpg?resize=984%2C603&ssl=1" alt="First slide">
        </div>
        <div class="carousel-item">
            <img style="height: 450px" class="d-block w-75" src="https://bob.codegym.vn/assets/images/Feature-small.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img style="height: 450px" class="d-block w-75" src="https://nhanlucnganhluat.vn/uploads/images/CC5D2D3D/logo/2019-11/68d6e0fa-42d1-11e8-9485-56c566ee3692.png" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<footer class="footer bg-dark text-white shape-parent overflow-hidden text-center pt-160 pb-60">
    <div class="footer-copyright text-center py-3">
        <div class="footer-copyright mb-5">© Student Manager 2020-2021</div>
    </div>
</footer>