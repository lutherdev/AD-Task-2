<?php
require_once __DIR__ . '/handlers/pageData.handler.php';
require_once __DIR__ . '/components/templates/head.component.php';
require_once __DIR__ . '/components/templates/nav.component.php';
?>

<?php
head("Home");
navHeader($navList);
?>
<!-- REMOVE FOR CHECKING
        <div id="navbar">           
            <div class="sitename">LEARNPHP</div>
            <div class="buttons">
                <a href="" target="_self" class="btn">Home</a>
                <a href="page/tutorial-page/index.php" target="_self" class="btn">Basic PHP</a>
            </div>
        </div> -->
        <div id="main">
            <div id="hero-text">
                <h1>Welcome Programmer!</h1>
                <p>Discover the basics of PHP!</p>
                <a href="page/tutorial-page/index.php" class="btn"> PHP BASICS </a>
            </div>
            
        </div>
</body>
</html>