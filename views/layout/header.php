<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'MIJURAI' ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        html, body {
            font-family: "Noto Serif", serif !important;
        }
        * {
            font-family: inherit !important;
        }
    </style>
    <link rel="stylesheet" href="/testmnm/assets/css/home.css">
    <link rel="stylesheet" href="/testmnm/assets/css/auth.css">
    <link rel="stylesheet" href="/testmnm/assets/css/account.css">
    <link rel="stylesheet" href="/testmnm/assets/css/detail-product.css">
    <link rel="stylesheet" href="/testmnm/assets/css/cart.css">
    <link rel="stylesheet" href="/testmnm/assets/css/checkout.css">
</head>

<body>

<?php 
if (strpos($_SERVER['REQUEST_URI'], '/checkout') !== false) {
    return;
}
?>

<header class="header-full">
    <div class="header-container">
        
        <!-- LOGO -->
        <div class="logo">
            <a href="/testmnm/">MIJURAI</a>
        </div>

        <!-- SEARCH BOX -->
        <form class="search-box" method="GET" action="/testmnm/search/index">
            <img src="/testmnm/assets/images/search_icon.png" class="icon-search">
            <input type="text" name="keyword" placeholder="Tìm kiếm..." value="<?= htmlspecialchars($_GET['keyword'] ?? '') ?>" required>
        </form>

        <!-- MENU -->
        <nav class="menu">
            

        <!-- CART + USER ICON -->
        <div class="header-right">

            <!-- CART ICON -->
            <a href="/testmnm/cart/view" class="cart-icon-wrap">
                <img src="/testmnm/assets/images/cartbag_icon.png" class="icon-cart" alt="Giỏ hàng">

                <?php if (!empty($cartCount) && $cartCount > 0): ?>
                    <span class="cart-badge"><?= $cartCount ?></span>
                <?php endif; ?>
            </a>

            <!-- ACCOUNT ICON -->
            <?php if(isset($_SESSION['Email'])): ?>
                <a href="/testmnm/auth/account">
                    <img src="/testmnm/assets/images/avatar_icon.png" class="icon-avatar" alt="Tài khoản">
                </a>
            <?php else: ?>
                <a href="/testmnm/auth/login">
                    <img src="/testmnm/assets/images/avatar_icon.png" class="icon-avatar" alt="Đăng nhập">
                </a>
            <?php endif; ?>

        </div>

    </div>
</header>

<main class="main-content">
