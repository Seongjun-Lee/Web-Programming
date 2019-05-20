<!-- 구글 검색 : galley board css => CSS Only Pinterest-like Responsive Board Layout - Boardz.css | CSS ... -->
<!-- 출처 : https://www.cssscript.com/css-pinterest-like-responsive-board-layout-boardz-css/ -->
<?php

$connect = mysql_connect("localhost", "lsj", "2015136093");
mysql_select_db("lsj_db", $connect);

?>
<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8"> 

    <title>Boardz Demo</title>
    <meta name="description" content="Create Pinterest-like boards with pure CSS, in less than 1kB.">
    <meta name="author" content="Burak Karakan">
    <meta name="viewport" content="width=device-width; initial-scale = 1.0; maximum-scale=1.0; user-scalable=no" />
    <link rel="stylesheet" href="src/boardz.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/wingcss/0.1.8/wing.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="seventyfive-percent  centered-block">
        <!-- Sample code block -->
        <div>    
            <hr class="seperator">

            <!-- Example header and explanation -->
            <div class="text-center">
                <h2>Beautiful <strong>Boardz</strong></h2>
                <div style="display: block; width: 50%; margin-right: auto; margin-left: auto; position: relative;">
                    <form class='example' action='board.php' method='POST'>
                        <input type='text' placeholder='Search..' name='search'>
                        <button type='submit'><i class='fa fa-search'></i></button>
                        <?php
                        $name = $_POST[search];
                        ?>
                    </form>

                </div>
            </div>
            <!--<hr class="seperator fifty-percent">-->

            <?php

            $sql = "select image_url, title, contents from boardz where title like '%$name%'";
            $result = mysql_query($sql, $connect);

            if(!$result)
                echo "<script> alert('테이블이 존재하지 않습니다.') </script>";
            else {
                echo("<div class=\"boardz centered-block beautiful\">");

                while ($row = mysql_fetch_array($result)) {
                    if ($name != NULL || $row[title] != NULL)
                        echo("<ul>");

                    echo("<li>");

                    if ($row[title] != NULL) {
                        echo("
                    <h1>$row[title]</h1>
                    $row[contents]
                    ");
                    }

                    if ($row[contents] != NULL)
                        echo("<br>");

                    echo("<img src=$row[image_url] alt=\"demo image\"/>
                    </li>
                     ");

                    if ($name != NULL || $row[title] == NULL)
                        echo("</ul>");
                }
                echo("</div>");
            }
            ?>
            <!-- Example Boardz element. -->
            <!--<div class="boardz centered-block beautiful">
                <ul>
                    <li>
                        <h1>PHP</h1>

                        <br />
                        <img src="http://2.bp.blogspot.com/-pINYV0WlFyA/VUK-QcGbU5I/AAAAAAAABcU/fNy2pd2cFRk/s1600/WEB-Jack-White-Poster-Creative.png" alt="demo image"/>
                    </li>
                    <li>
                        <img src="http://payload140.cargocollective.com/1/10/349041/5110553/Florrie.jpg" alt="demo image"/>
                    </li>
                </ul>
                <ul>
                    <li>
                        <h1>sumo</h1>

                        <br />
                        <img src="http://wpmedia.ottawacitizen.com/2015/11/01.jpg?quality=55&strip=all&w=840&h=630&crop=1" alt="demo image"/>
                    </li>
                    <li>
                        <img src="https://s-media-cache-ak0.pinimg.com/736x/8c/ee/ff/8ceeff967c03c7cf4f86391dd6366544.jpg" alt="demo image"/>
                    </li>
                </ul>
                <ul>
                    <li>
                        <h1>sumo</h1>

                        <br />
                        <img src="https://s-media-cache-ak0.pinimg.com/originals/87/16/8c/87168cbbf07cb54a9793bebaa20b1bde.jpg" alt="demo image"/>
                    </li>
                    <li>
                        <h1>Sumo Summo</h1>
                        Ex nostrud verterem mea, duo no delicata neglegentur. Audire integre rationibus ut pri, ex cibo oblique euismod sit, cibo iracundia vix at. Legimus torquatos definiebas an nec, mazim postulant at sit. Ne qui quando vocent accusata, nam tritani fierent no. Ea per vocent voluptatibus.

                        <br />
                        <img src="https://s-media-cache-ak0.pinimg.com/736x/22/95/48/229548086245c332443109ca9f2e0890.jpg" alt="demo image"/>
                    </li>
                    <li>
                        <img src="https://inspirationfeeed.files.wordpress.com/2014/01/ca402f7410884454ec5c303336e8591d1.jpg" alt="demo image"/>
                    </li>
                </ul>
            </div>


        </div>-->

        <hr class="seperator">

    </div>
</body>
</html>