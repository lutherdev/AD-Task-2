<?php
require_once __DIR__ . '/../../handlers/pageData.handler.php';
require_once __DIR__ . '/../../components/templates/head.component.php';
require_once __DIR__ . '/../../components/templates/nav.component.php';
?>

<?php
head("LEVEL 1", "tutorial");
navHeader($navList);
?>
        <div id="main">
            <div class="box">
                <div id="hero-text">
                    <h1>THESE ARE THE BASICS OF PHP!</h1>
                    <p>Discover the basics of PHP!</p>
                    <p>remember: always enclose the code to < <span>?php</span>[code here] ?></p>
                </div>
            </div>
            <div class="box">
                <div class="textbox">
                    <h1>DECLARATION</h1>
                    <p>To declare a variable in PHP we use the syntax</p>
                    <h5>$variablename = value</h5>
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
            <div class="box">
                <div class="textbox">
                    <h1>CONDITIONAL</h1>
                    <p>There are numerous ways to control a flow in which condition comes in!</p>
                    <h5>Scenario: Let's say your age is 17 but the condition is that you should be 18+</h5>
                </div>
                <div class="codebox">
                    <h4>Code:</h4>
                    <h5>$age = 17;<br>
                    if ($age < 18){<br>
                    echo "false, your age is {$age}";<br>
                    } else {<br>
                        echo "You're 18+";<br>
                    }
                    </h5>
                    
                    <button onclick="showOutputBox1()">Show Output</button>
                    <div id="outputBox1" >
                        <?php
                        $age = 17;
                        if ($age < 18){
                            echo "Output: false, your age is {$age}";
                        } else {
                            echo "Output: You're 18+";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="box">
                <div class="textbox">
                    <h1>LOOPING</h1>
                    <p>If we want to repeat a code multiple times, looping statements is what u need</p>
                    <h5>Scenario: we want to output 1 to 5</h5>
                </div>
                <div class="codebox">
                    <h4>Code:</h4>
                    <h5>
                    echo "Output: ";<br>
                    for($i = 1; $i <= 5; $i++){<br>
                        echo " $i ";<br>
                    }
                    </h5>
                    
                    <button onclick="showOutputBox2()">Show Output</button>
                    <div id="outputBox2">
                        <?php 
                        echo "Output: ";
                        for($i = 1; $i <= 5; $i++){
                            echo " $i ";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <a href="../tutorial2-page/index.php">NEXT</a>
        </div>
    </div>
    <script src="assets/js/example.js"></script>
</body>
</html>

