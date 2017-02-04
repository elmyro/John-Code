<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Pet</title>


</head>
<body>

<?php

require_once('addpetCon.php');


?>


<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        if ($("#p_type")) {
            $("#p_type").keyup(function () {
                $("#suggest").html("");
                var input = $("#p_type").val();
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
                                $("#p_type").val(value);
                                $s.find("ul").remove();

                            });

                        }
                    });
                }
            });
        }
        if ($("#p_breed")) {

            $("#p_breed").keyup(function () {
                $("#suggest1").html("");
                var input1 = $("#p_breed").val();
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
                                $("#p_breed").val(value1);
                                $s1.find("ul").remove();

                            });

                        }
                    });
                }
            });
        }

        if ($("#pet_age")) {

            $("#p_breed").keyup(function () {
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

<form action="addpetCon.php" method="GET" >



    <label for="pet_type">Pet Type </label><br><input  type="text" name="pet_type" id="p_type" autocomplete="off">
    <div id="suggest">
    </div>
    <br>

    <label for="pet_breed">Pet Breed </label><br><input type="text" name="pet_breed" id="p_breed" autocomplete="off">
    <div id="suggest1">
    </div>
    <br>

    <label for="pet_age">Pet Age </label><br><input type="text" name="pet_age" id="pet_age">
    <br>

    <label for="advert_type">Advert Type</label>
    <input type="radio" name="advert_type" id="sell" value="0">For Sale
    <input type="radio" name="advert_type" id="donation" value="1">Donation
    <br>


    <!--
    XREIAZOMASTE method="POST" enctype=" multipart/form-data"

    <div>
            <input type="hidden" name="size" value="1000000">
        </div>
        <div>
            <input type="file" name="image">
        </div>
        <div>
            <textarea name="text" cols="40" rows="4" placeholder="write comments"></textarea>
        </div>
        <div>
            <input type="submit" name="upload" value="upload image">
        </div>
    -->

    <br>

    <label for="submit_date">Submission Date</label>
    <input type="date" name="s_date" id="s_date">

    <label for="lasr_date">End of Offer</label>
    <input type="date" name="l_date" id="l_date">


    <button type="submit"  >Register </button>

</form>




</body>
</html>

