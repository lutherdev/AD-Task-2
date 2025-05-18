<?php
$navList = [
    [
        "label" => "Home", 
        "url" => "/"
    ],
    [
        "label" => "Tutorial", 
        "url" => "/page/tutorial-page/index.php"
    ],
];

$arrayStuds = ["Luther sambeli", "Ford Dean", "dean man", "lelouch britania"];

$boxData = [
    [
        "title" => "DECLARATION",
        "description" => "To declare a variable in PHP we use the syntax",
        "scenario" => '$variablename = value',
        "snippet" => '$age = 17;<br>
                    echo "Output: The variable \$age has value of: {$age}";
                    ',
        "funcName" => "showOutputBox0",

    ],
    [
        "title" => "CONDITIONAL",
        "description" => "There are numerous ways to control a flow in which condition comes in!",
        "scenario" => "Scenario: Let's say your age is 17 but the condition is that you should be 18+",
        "snippet" => '$age = 17;<br>
                    if ($age < 18){<br>
                    echo "false, your age is {$age}";<br>
                    } else {<br>
                        echo "You\'re 18+";<br>
                    }
                    ',
        "funcName" => "showOutputBox1",

    ],
    [
        "title" => "LOOPING",
        "description" => "If we want to repeat a code multiple times, looping statements is what u need",
        "scenario" => "Scenario: we want to output 1 to 5",
        "snippet" => 'echo "Output: ";<br>
                    for($i = 1; $i <= 5; $i++){<br>
                        echo " $i ";<br>
                    }
                    ',
        "funcName" => "showOutputBox2",

    ],
    [
        "title" => "FUNCTION",
        "description" => "You can think of functions like a tv remote, where each click of the button it does the expected thing you want",
        "scenario" => "Scenario: We want to see the lists of students' names in our database but CAPITALIZE",
        "snippet" => '$arrayStuds = ["Luther sambeli", "Ford Dean", "dean man", "lelouch britania"];<br>
                    foreach ($arrayStuds as $studs):<br>
                        echo "Output: " . ucwords($studs);<br>
                    endforeach;
                    ',
        "funcName" => "showOutputBox0",

    ],
]

?>