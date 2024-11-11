<nav>
    <ul>
        <li>Home</li>
        <li>Product</li>
        <li><a href='account.php'>My Account</a></li>
        <li><?php echo $logged_in ? '<a href=\'logout.php\'> Sign Out' : '<a href=\'login.php\'> Sign In';?></a></li>
    </ul>
</nav>