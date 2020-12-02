<?php
session_start();
if (!isset($_SESSION['id_utilisateur'])) {
    $_SESSION['id_utilisateur'] = false;
    header('Location: index.php');
}
if ($_SESSION['role_utilisateur'] != 0 || !$_SESSION['id_utilisateur']) {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://kit.fontawesome.com/58cdc139df.js" crossorigin="anonymous"></script>
    <!--LogoPage-->
    <link rel="icon" type="image/png" href="../img/logo.jpg" />

    <link rel="stylesheet" href="css/style.css" />
    <script src="./node_modules/plotly.js-dist/plotly.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Les Viets - Chambre 1</title>
</head>

<body id="mainpage">
    <!------------------------------- HEADER - START ------------------------------------------>
    <?php
    require_once('utils/header.php');
    ?>
    <!----------------------------------- HEADER - END ---------------------------------------->

    <!------------------------------------Body - START------------------------------------------>

    <section class="mon-compte">
        <input type="checkbox" id="check-compte">
        <label for="check-compte">
            <i class="fas fa-bars toogle"></i>
        </label>

        <?php
        require_once('utils/monCompteNavbar.php');
        ?>

        <main>
            <div class="wrapper">
                <div id="chart"></div>
            </div>

            </div>
        </main>
    </section>

    <!------------------------------------Body - END------------------------------------------>

</body>

</html>

<script>
setInterval(getTemp, 200);
setInterval(getTime, 1000);

var result_temp = 0;
var result_time = 0;

function getTemp() {
    jQuery.ajax({
        type: "POST",
        url: 'utils/modbus.php',
        dataType: 'json',
        data: {
            functionname: 'getTemp',
            arguments: 0
        },

        success: function(obj, textstatus) {
            if (!('error' in obj)) {
                result_temp = obj.result;
                console.log(obj);
            } else {
                console.log(obj.error);
            }
        }
    });
}

function getTime() {
    jQuery.ajax({
        type: "POST",
        url: 'utils/modbus.php',
        dataType: 'json',
        data: {
            functionname: 'getTime',
            arguments: 0
        },

        success: function(obj, textstatus) {
            if (!('error' in obj)) {
                result_time = obj.result;
                console.log(result_time);
            } else {
                console.log(obj.error);
            }
        }
    });
}

var varTest = 0;

function getData() {
    varTest = varTest + 1;
    return varTest;
}
Plotly.plot('chart', [{
    y: [result_temp[3] / 10],
    type: 'line',
    name: 'chambre'
}, ]);
var cnt = 0;
setInterval(function() {
    Plotly.extendTraces('chart', {
        y: [
            [result_temp[3] / 10]
        ]
    }, [0]);
    cnt++;
    if (cnt > 200) {
        Plotly.relayout('chart', {
            xaxis: {
                range: [cnt - 200, cnt]
            }
        });
    }
}, 50);
</script>