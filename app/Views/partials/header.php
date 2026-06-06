<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiệm Sách Cũ</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../public/assets/css/all.css">
</head>

<body class="d-flex flex-column min-vh-100">

    <header class="shadow-sm">
        <div class="header-top py-2">
            <div class="container-fluid px-lg-5 px-3">

                <div class="row align-items-center g-3">

                    <div class="col-2 d-lg-none">
                        <button class="btn fs-1 text-brown border-0 p-0" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#mobileMenu">
                            <i class="bi bi-list"></i>
                        </button>
                    </div>

                    <div class="col-lg-3 col-md-5 col-8">
                        <div class="d-flex align-items-center justify-content-lg-start justify-content-center gap-3">
                            <div class="logo-mark">
                                <img src="../../public/assets/images/logo.png" alt="Logo">
                            </div>

                            <h2 class="logo-title mb-0">
                                TRẠM SÁCH
                            </h2>
                        </div>
                    </div>
                    <div class="col-2 d-lg-none text-end">
                        <div class="icon-box position-relative ms-auto">
                            <i class="bi bi-bag-fill"></i>
                            <span class="cart-badge">0</span>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12">
                        <form class="input-group search-box">
                            <input type="text" class="form-control border-0"
                                placeholder="Tìm sách, tác giả, thể loại...">

                            <button class="btn search-btn" type="submit">
                                <i class="bi bi-search"></i>
                            </button>
                        </form>
                    </div>

                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="d-flex justify-content-end align-items-center gap-4">

                            <div class="d-flex align-items-center gap-3">
                                <span class="icon-box">
                                    <i class="bi bi-person-fill"></i>
                                </span>

                                <div>
                                    <strong>Đăng nhập</strong>
                                    <p class="mb-0 small text-brown-light">Tài khoản của bạn</p>
                                </div>
                            </div>

                            <div class="icon-box position-relative">
                                <i class="bi bi-bag-fill"></i>
                                <span class="cart-badge">0</span>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <nav class="category-bar py-2 d-none d-lg-block">
            <div class="container-fluid px-5">
                <div class="d-flex justify-content-center align-items-center gap-4 flex-wrap">

                    <a href="#" class="nav-item-book">
                        <i class="bi bi-book"></i> Sách văn học
                    </a>

                    <a href="#" class="nav-item-book">
                        <i class="bi bi-journal-text"></i> Sách giáo khoa
                    </a>

                    <a href="#" class="nav-item-book">
                        <i class="bi bi-stars"></i> Sách tham khảo
                    </a>

                    <a href="#" class="nav-item-book">
                        <i class="bi bi-book-half"></i> Truyện tranh
                    </a>

                    <a href="#" class="nav-item-book">
                        <i class="bi bi-tags"></i> Sách đồng giá
                    </a>


                </div>
            </div>
        </nav>
    </header>

    <div class="offcanvas offcanvas-start mobile-sidebar" tabindex="-1" id="mobileMenu">

        <div class="offcanvas-header mobile-sidebar-header">
            <div>
                <h5 class="fw-bold mb-1">
                    <i class="bi bi-person-circle me-2"></i>
                    Tài khoản
                </h5>
                <strong>Đăng nhập</strong>
            </div>

            <button type="button" class="btn-close" data-bs-dismiss="offcanvas">
            </button>
        </div>

        <div class="offcanvas-body p-0">
            <a href="#" class="mobile-menu-item">
                <span><i class="bi bi-book"></i> Sách văn học</span>
                <i class="bi bi-chevron-right"></i>
            </a>

            <a href="#" class="mobile-menu-item">
                <span><i class="bi bi-journal-text"></i> Sách giáo khoa</span>
                <i class="bi bi-chevron-right"></i>
            </a>

            <a href="#" class="mobile-menu-item">
                <span><i class="bi bi-stars"></i> Sách tham khảo</span>
                <i class="bi bi-chevron-right"></i>
            </a>

            <a href="#" class="mobile-menu-item">
                <span><i class="bi bi-book-half"></i> Truyện tranh</span>
                <i class="bi bi-chevron-right"></i>
            </a>

            <a href="#" class="mobile-menu-item">
                <span><i class="bi bi-tags"></i> Sách đồng giá</span>
                <i class="bi bi-chevron-right"></i>
            </a>
        </div>

        <div class="mobile-sidebar-footer">
            <a href="#">Gọi điện <i class="bi bi-telephone-fill"></i></a>
            <a href="#">Nhắn tin <i class="bi bi-messenger"></i></a>
        </div>
    </div>