<?php
require_once __DIR__ . '/../../utils/capitalizeFLetter.utils.php';
require_once __DIR__ . '/../../handlers/pageData.handler.php';
require_once __DIR__ . '/../../components/head.component.php';
require_once __DIR__ . '/../../components/nav.component.php';
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
                <?php
                    $snippet = $codeBoxData[0]["snippet"];
                    $funcName = $codeBoxData[0]["funcName"];
                    $num = 0;
                    ob_start();
                    capitalizeFLetter($arrayStuds);
                    $outputHtml = ob_get_clean();
                    include __DIR__ . '/../../components/templates/codeBox.component.php';
                ?>
            </div>
            <a href="../tutorial-page/index.php">BACK</a>
        </div>
    </div>
    <script src="assets/js/example.js"></script>
</body>
</html>

