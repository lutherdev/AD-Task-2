<?php
require_once __DIR__ . '/../../handlers/pageData.handler.php';
require_once __DIR__ . '/../../components/head.component.php';
require_once __DIR__ . '/../../components/nav.component.php';
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
                    <?php
                        $title = $boxData[0]["title"];
                        $description = $boxData[0]["description"];
                        $scenario = $boxData[0]["scenario"];
                        include __DIR__ . '/../../components/templates/textBox.component.php';
                        $snippet = $boxData[0]["snippet"];
                        $funcName = $boxData[0]["funcName"];
                        $num = 0;
                        ob_start();
                        $age = 17;
                        echo "Output: The variable \$age has value of: {$age}";
                        $outputHtml = ob_get_clean();
                        include __DIR__ . '/../../components/templates/codeBox.component.php';
                    ?>
            </div>
            <div class="box">
                    <?php
                        $title = $boxData[1]["title"];
                        $description = $boxData[1]["description"];
                        $scenario = $boxData[1]["scenario"];
                        include __DIR__ . '/../../components/templates/textBox.component.php';
                        $snippet = $boxData[1]["snippet"];
                        $funcName = $boxData[1]["funcName"];
                        $num = 1;
                        ob_start();
                        $age = 17;
                        if ($age < 18){
                            echo "Output: false, your age is {$age}";
                        } else {
                            echo "Output: You're 18+";
                        }
                        $outputHtml = ob_get_clean();
                        include __DIR__ . '/../../components/templates/codeBox.component.php';
                    ?>
            </div>
            <div class="box">
                <?php
                    $title = $boxData[2]["title"];
                    $description = $boxData[2]["description"];
                    $scenario = $boxData[2]["scenario"];
                    include __DIR__ . '/../../components/templates/textBox.component.php';
                    $snippet = $boxData[2]["snippet"];
                    $funcName = $boxData[2]["funcName"];
                    $num = 2;
                    ob_start();
                    echo "Output: ";
                    for($i = 1; $i <= 5; $i++){
                        echo " $i ";
                    }
                    $outputHtml = ob_get_clean();
                    include __DIR__ . '/../../components/templates/codeBox.component.php';
                ?>
            </div>
            <a href="../tutorial2-page/index.php">NEXT</a>
        </div>
    </div>
    <script src="assets/js/example.js"></script>
</body>
</html>

