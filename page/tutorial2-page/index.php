<?php
require_once __DIR__ . '/../../utils/capitalizeFLetter.utils.php';
require_once __DIR__ . '/../../handlers/pageData.handler.php';
require_once __DIR__ . '/../../components/templates/head.component.php';
require_once __DIR__ . '/../../components/templates/nav.component.php';
?>

<?php
head("LEVEL 2", "tutorial2");
navHeader($navList);
?>
        <div id="main">
            <div class="box">
                <div class="textbox">
                    <h1>FUNCTIONS</h1>
                    <p>You can think of functions like a tv remote, where each click of the button it does the expected thing you want</p>
                    <h5>Scenario: We want to see the lists of students' names in our database but CAPITALIZE</h5>
                </div>
                <div class="codebox">
                    <h4>Code:</h4>
                    <h5>$arrayStuds = ["Luther sambeli", "Ford Dean", "dean man", "lelouch britania"];<br>
                    foreach ($arrayStuds as $studs):<br>
                        echo "Output: " . ucwords($studs);<br>
                    endforeach;
                    "
                </h5>
                <button onclick="showOutputBox0()">Show Output</button>
                    <div id="outputBox0" >
                        <?php
                        //TODO: Put an output here
                        capitalizeFLetter($arrayStuds);
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

