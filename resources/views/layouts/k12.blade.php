<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Edulive</title>
</head>

<body>
    <div class="page">
        <!------------ Header -------------->
        <div class="header">
            <nav class="navbar">
                <div class="container-fluid">
                    <a class="navbar-brand">
                        <img src="{{ asset('img/logo-web.svg') }}" alt="logo">
                    </a>
                    <div class="navbar-right d-flex">
                        <div class="cart">
                            <i class="elo el-shopping-cart"></i>
                        </div>
                        <div class="notify">
                            <i class="elo el-bell"></i>
                        </div>
                        <div class="user">
                            <button class="btn-name">
                                QU
                            </button>
                            <p class="p-sm">
                                Quân
                            </p>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!------------ Sider --------------->
        <div class="sider">
            <div class="sider-header">
                <div class="user-name">
                    <div class="name-logo">
                        QU
                    </div>
                    <div class="name d-flex">
                        <p>Quân</p>
                        <div class="award">Tài khoản thường</div>
                    </div>
                </div>
                <div class="upgrade">
                    <img src="https://beta.edulive.net/img/20220111/payment/icon_pro.svg" alt="diamon">
                    <p>Nâng cấp Edulive Pro</p>
                </div>
                <button class="btn btn-create d-flex">
                    <i class="elo el-plus-circle"></i>
                    <p class="text-create">
                        Tạo mới
                    </p>
                </button>
            </div>
            <div class="sider-body">
                <ul class="list-lesson">
                    <li><a class="list-item d-flex active" href="#">
                            <i class="elo el-book"></i>
                            <p>
                                Thư viện bài giảng
                            </p>
                        </a></li>
                    <li><a class="list-item d-flex" href="#">
                            <i class="elo el-folder"></i>
                            <p>
                                Thư mục của tôi
                            </p>
                        </a></li>
                    <li><a class="list-item d-flex" href="#">
                            <i class="elo el-classroom"></i>
                            <p>
                                Lớp học
                            </p>
                        </a></li>
                    <li><a class="list-item d-flex" href="#">
                            <i class="elo el-question-mark"></i>
                            <p>
                                Ngân hàng câu hỏi
                            </p>
                        </a></li>
                </ul>
            </div>
        </div>
        <!------------Content-------------->
        <div class="content">
            <!-- <div class="container">
                <h2>Chào mừng, Quân</h2>
                <div class="filter-search">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
                <div class="filter-lesson">

                </div>
            </div> -->
        </div>
    </div>
</body>

</html>