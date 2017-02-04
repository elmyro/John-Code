<?php
echo "Find a pet";



?>

<html>
<head>
    <meta charset="utf-8">
    <title>Find Pet</title>

    <link href="css/jquery.datepick.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/jquery.plugin.min.js"></script>
    <script src="js/jquery.datepick.js"></script>



    <script type="text/javascript">

        $(function() {

        $(document).ready(function () {
            if ($("#input")) {
                $("#input").keyup(function () {
                    $("#suggest").html("");
                    var input = $("#input").val();
                    input = $.trim(input);

                    if (input) {
                        $.ajax({

                            url: "ajax.php",
                            data: "input=" + input,
                            success: function (msg) {
                                var $s = $("#suggest");
                                $s.html(msg);

                                $s.find("ul li").mouseover(function () {

                                    $s.find("ul li").removeClass("hover");
                                    $(this).addClass("hover");

                                })
                                $s.find("ul li").click(function () {
                                    var value = $(this).html();
                                    $("#input").val(value);
                                    $s.find("ul").remove();

                                });

                            }
                        });
                    }
                });
            }
            if ($("#input1")) {

                $("#input1").keyup(function () {
                    $("#suggest1").html("");
                    var input1 = $("#input1").val();
                    input1 = $.trim(input1);

                    if (input1) {
                        $.ajax({

                            url: "ajax_b.php",
                            data: "input=" + input1,
                            success: function (msg) {
                                var $s1 = $("#suggest1");
                                $s1.html(msg);

                                $s1.find("ul li").mouseover(function () {

                                    $s1.find("ul li").removeClass("hover");
                                    $(this).addClass("hover");

                                });
                                $s1.find("ul li").click(function () {
                                    var value1 = $(this).html();
                                    $("#input1").val(value1);
                                    $s1.find("ul").remove();

                                });

                            }
                        });
                    }
                });
            }

            if ($("#input2")) {

                $("#input2").keyup(function () {
                    $("#suggest2").html("");
                    var input2 = $("#input2").val();
                    input2 = $.trim(input2);

                    if (input2) {
                        $.ajax({

                            url: "ajax_age.php",
                            data: "input=" + input2,
                            success: function (msg) {
                                var $s2 = $("#suggest2");
                                $s2.html(msg);

                                $s2.find("ul li").mouseover(function () {

                                    $s2.find("ul li").removeClass("hover");
                                    $(this).addClass("hover");

                                });
                                $s2.find("ul li").click(function () {
                                    var value2 = $(this).html();
                                    $("#input2").val(value2);
                                    $s2.find("ul").remove();

                                });

                            }
                        });
                    }
                });
            }

            if ($("#s_date")){
                $("#s_date").datepick({ dateFormat: 'yyyy-mm-dd'});
            }

            if ($("#e_date")){
                $("#e_date").datepick({ dateFormat: 'yyyy-mm-dd'});
            }

        });


        });




        
    </script>
    <style>
        .lista{
            background-color: #8aa6c1;
            height: auto;
            list-style: none outside none;
            margin-right:0;
            margin-top: 0;
            padding-left: 0;
            text-align: center;
            width: 173px;
        }
        .hover{
            background-color: #41a83e;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form action="findpetCon.php" method="GET">
        <div>
            <h2>Pet type</h2>
            <input type="text" id="input" name="type" autocomplete="off">
            <div id="suggest">
            </div>
            <br>
            <h2>Pet Breed</h2>
            <input type="text" id="input1" name="breed" autocomplete="off">
            <div id="suggest1">
            </div>
            <br>
            <h2>Pet Age</h2>
            <input type="text" id="input2" name="age" autocomplete="off">
            <div id="suggest2">
            </div>
            <h2>Starting Date</h2>
            <input type="text"  id="s_date" name="s_date" autocomplete="off">
            <br><br>
            <h2>Ending Date</h2>
            <input type="text"  id="e_date" name="e_date" autocomplete="off">
            <br><br>
            <input type="submit" name="submit">
        </div>
    </form>

</body>

</html>
