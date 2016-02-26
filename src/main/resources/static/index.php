<?php

$services = scandir("./");

?>
<html>
    <head>
        <title>Maxxton documentation</title>
        <link rel="stylesheet" href="styles.css"/>
    </head>
    <body>
        <div class="page">
            <h3><img src="maxxton-logo.jpg" /> Service Documentation</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Services</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach($services as $service){
                    $api_path = $service . "/springdoc/spring-summary.html";
                    $source_path = $service . "/jxr/index.html";
                    $javadoc_path = $service . "/javadoc/index.html";
                    if(file_exists($api_path)){
                        echo "<tr>";
                        echo "<th>$service</th>";
                        echo "<td><a class='green' href='$api_path'>Api</a></td>";
                        echo "<td><a class='blue' href='$source_path'>Sources</a></td>";
                        echo "<td><a class='blue-gray' href='$javadoc_path'>Javadoc</a></td>";
                        echo "</tr>";
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
    </body>
</html>