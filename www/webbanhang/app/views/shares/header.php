<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to bottom, #ffffff, #f7e6c7);
            overflow-x: hidden;
        }

        .navbar {
            background-color: #dc3545 !important;
        }

        .navbar-brand {
            color: #fff !important;
            font-weight: bold;
            font-size: 1.5rem;
        }

        .nav-link {
            color: #fff !important;
            font-weight: 500;
            transition: 0.3s;
        }

        .nav-link:hover {
            color: #ffdd57 !important;
        }
    </style>
</head>

<body class="container-fluid">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/webbanhang/product/list">Quản lý sản phẩm</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/webbanhang/Product/list">📦 Danh sách sản phẩm</a>
                    </li>
                    <?php if (SessionHelper::isAdmin()): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/webbanhang/Product/add">➕ Thêm sản phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/webbanhang/category/list">📂 Quản lý danh mục</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/webbanhang/Product/Cart">🛒 Giỏ hàng</a>
                        </li>
                    <?php endif; ?>

                    <?php if (SessionHelper::isLoggedIn()): ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                👤 <?php echo htmlspecialchars($_SESSION['username']); ?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                                <li><a class="dropdown-item" href="/webbanhang/account/profile">👤 Thông tin tài khoản</a></li>
                                <li><a class="dropdown-item" href="/webbanhang/account/orders">📦 Đơn hàng của tôi</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item text-danger" href="/webbanhang/account/logout">🚪 Đăng xuất</a></li>
                            </ul>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/webbanhang/account/login">🔑 Đăng nhập</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/webbanhang/account/register">📝 Đăng ký</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <!-- Content goes here -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
