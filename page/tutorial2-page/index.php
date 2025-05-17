<?php
require_once __DIR__ . '/../../handlers/pageData.handler.php';
require_once __DIR__ . '/../../components/templates/head.component.php';
require_once __DIR__ . '/../../components/templates/nav.component.php';
?>

<?php
head("Home");
navHeader($navList);
?>
        <div id="main">
            <div class="box">
                <div class="textbox">
                    <h1>CLASSES AND FUNCTIONS</h1>
                    <p>Classes are like blueprints for a product, where you can use this blueprint to create objects! It consists of related stuff like variables and functions to act on those variables</p>
                    <h5>class Classname {
                        variables..
                        functions..    
                    
                    }</h5>
                </div>
                <div class="codebox">
                    <h4>Code:</h4>
                    <h5>$age = 17;<br>
                    echo "Output: The variable \$age has value of: {$age}";
                    "
                </h5>
                <button onclick="showOutputBox0()">Show Output</button>
                    <div id="outputBox0" >
                        <?php
                        $age = 17;
                        echo "Output: The variable \$age has value of: {$age}";
                        ?>
                    </div>
                </div>
            </div>
            <a href="../tutorial-page/index.php">BACK</a>
        </div>
    </div>
    <script src="assets/js/example.js"></script>
</body>
</html>

