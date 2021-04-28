<!--Navbar-->
<body>
<nav class="navbar">
    <div class="logo"><img src="Images/Mists%20favicon-01.png"></div>
    <a href="#" class="toggle-button">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </a>
    <div class="navbar-links">
        <ul>
            <li><a href="home.php">HOME</a></li>
            <li><a href="shop.php">SHOP</a></li>
            <li><a href="cart.php">CART</a></li>
            <li><a href="contact.php">CONTACT</a></li>
        </ul>
    </div>


</nav>

<script>
    const toggleButton = document.getElementsByClassName('toggle-button')[0]
    const navbarLinks = document.getElementsByClassName('navbar-links')[0]

    toggleButton.addEventListener('click', () => {
        navbarLinks.classList.toggle('active')
    })

</script>