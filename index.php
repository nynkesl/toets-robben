<?php
    $nameErr = $emailErr = $genderErr = "";
    $name = $email = $gender = $beoordeling = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"]) && $_POST["name"] == "") {
            $nameErr = "Name is required";
        } else {
            $name = $_POST["name"];

        }

        if (empty($_POST["email"]) && $_POST["email"] == "") {
            $emailErr = "Email is required";
        } else {
            $email = $_POST["email"];

        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = $_POST["gender"];
        }

        if (isset($_POST["beoordeling"])) {
            $beoordeling = $_POST["beoordeling"];
        }
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>

    </style>
    <h1>Hallo <?php if(empty($name)) {
        echo '';
    }
    else {
        echo $name;
    }
    ?>

    <h3>Gegevens: <?php if(empty($email)) {
        echo '';
    }
    else {
        echo $email;
    }
    if(empty($gender)) {
        echo '';
    }
    else {
        echo " " .  $gender;
    }?>
    <?php
    if(isset($beoordeling)) {
        echo " " .  $beoordeling;
    }?></h3>
    </h1>
    <form method="POST">
        Naam <input type="text" name="name"><br><br> <?php if (!empty($nameErr)){
            echo "<b>" .  $nameErr . "</b>";
        }?> <br>
        Email <input type="text "name="email"><br> <?php if (!empty($emailErr)){
            echo "<b>" .  $emailErr . "</b>";
        }?> <br>
        Geslacht <input class="checkbox1-btn" type="checkbox" name="gender" value="man">Man
        <input class="checkbox2-btn" type="checkbox" name="gender" value="vrouw">Vrouw
        <input class="checkbox3-btn" type="checkbox" name="gender" value="anders">Anders

        <br>
        <?php if (!empty($genderErr)){
            echo "<b>" .  $genderErr . "</b>";
        }?> <br> <Br>
        
        <input type="checkbox" id="yesno" onclick="validate();" name="yesno">Wilt u een beoordeling geven?
        <button type="submit">Submit</button>
        <br>
        <div id="id3" style="display: none">
            <input style="margin-right:90px; margin-left:40px;" type="radio" name="beoordeling" value="goed">
            <input style="margin-right:80px;" type="radio" name="beoordeling" value="oke">
            <input type="radio" name="beoordeling" value="slecht">
            <input style="margin-left:85px;" type="radio" name="beoordeling" value="afgrijselijk">
        </div>
        <div id="id2" style="display: none">
            <img style="width: 100px; border-radius: 100px;" src="groen.png"></img>
            <img style="width: 100px; border-radius: 100px;" src="geel.png"></img>
            <img style="width: 100px; border-radius: 100px;" src="oranje.png"></img>
            <img style="width: 100px; border-radius: 100px;"  src="rood.png"></img>
        </div>
    </form>
   
<script>
var checkbox1 = document.querySelector('.checkbox1-btn')
    checkbox1.onclick = function() {
        if (!checkbox1.checked) {
            document.body.style.backgroundColor = "white";
        } else {
            document.body.style.backgroundColor = "#8BC6FC";
            checkbox2.checked = false;
            checkbox3.checked = false;
        }
    }

    var checkbox2 = document.querySelector('.checkbox2-btn')
    checkbox2.onclick = function() {
        if (!checkbox2.checked) {
            document.body.style.backgroundColor = "white";
        } else {
            document.body.style.backgroundColor = "#FFD1DC";
            checkbox1.checked = false;
            checkbox3.checked = false;
        }
    }

    var checkbox3 = document.querySelector('.checkbox3-btn')
    checkbox3.onclick = function() {
        if (!checkbox3.checked) {
            document.body.style.backgroundColor = "white";
        } else {
            document.body.style.backgroundColor = "#B1A2CA";
            checkbox2.checked = false;
            checkbox1.checked = false;
        }
    }

    function validate() {
        var checkBox = document.getElementById("yesno");
        var id2 = document.getElementById("id2");
        var id3 = document.getElementById("id3");

        if (checkBox.checked == true){
            id2.style.display = "block";
            id3.style.display = "block";
        } else {
            id2.style.display = "none";
            id3.style.display = "none";
        }
    }
</script>

</body>
</html>