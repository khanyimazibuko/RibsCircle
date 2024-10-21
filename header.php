<?php

session_start();

$username = '';

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}

?>
<nav style="background-color: white;">
    <div class="logo">
        <img src="assets/images/Logo.png" alt="Logo">
    </div>
    <ul>
        <li><a href="/ribs_circle">Home</a></li>
        <li class="menu-dropdown">
            <a>Menu</a>
            <div class="dropdown">
                <a href="/ribs_circle/Menu/Dagwood_Menu/dagwood_menu.php">Dagwood Menu</a>
                <a href="/ribs_circle/Menu/Chicken_Menu/chickenmenu.php">Chicken Menu</a>
                <a href="/ribs_circle/Menu/Ribs_Menu/Ribs.php">Ribs Menu</a>
            </div>
        </li>
        <li><a href="gallery.php">Gallery</a></li>
        <?php if (empty($username)): ?>
        <li><a href="./Register/register.php">Sign Up</a></li>
        <?php endif; ?>
    </ul>
    <ul style="display: flex; align-items: center; height: 100%;">
        <?php if (!empty($username)): ?>
        <li>
            <a href="/ribs_circle/Cart/cart.php">
                <i class="fas fa-shopping-cart"></i>
                <span id="cart-count" style="color: orange;">0</span> <!-- This span will display the item count -->
            </a>
        </li>
        <?php endif; ?>

        <li class="sign-in">

            <?php if (empty($username)): ?>
            <a href="./login/login.php">Sign In</a>
            <?php else: ?>

        <li class="menu-dropdown">
            <a><?php echo $username ?></a>
            <div class="dropdown">
                <a href="/ribs_circle/logout.php">Logout</a>
            </div>
        </li>
        <?php endif; ?>
        </li>


    </ul>
</nav>