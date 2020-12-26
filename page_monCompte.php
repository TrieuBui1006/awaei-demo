<?php
session_start();
if (!isset($_SESSION['id_utilisateur'])) {
    $_SESSION['id_utilisateur'] = false;
    header('Location: page_homepage.php');
}
if ($_SESSION['role_utilisateur'] != 0 || !$_SESSION['id_utilisateur']) {
    header('Location: page_homepage.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://kit.fontawesome.com/58cdc139df.js" crossorigin="anonymous"></script>
    <!--LogoPage-->
    <link rel="icon" type="image/png" href="img/logo/logo2.png" />

    <link rel="stylesheet" href="css/style.css" />

    <script src="./node_modules/plotly.js-dist/plotly.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Les Viets - Info</title>
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

        <main class="compte">
            <div class="wrapper">
                <div id="chart"></div>
            </div>
            <div class="flexBoxTemp">
                <div class="childBox">
                    <h3>Salon</h3>
                    <span id='livingroom'>30C</span>
                </div>
                <div class="childBox">
                    <h3>Chambre 1</h3>
                    <span id='bedroom1'>30C</span>
                </div>

                <div class="childBox">
                    <h3>Chambre 2</h3>
                    <span id='bedroom2'></span>
                </div>

                <div class="childBox">
                    <h3>Salle de bains</h3>
                    <span id='bathroom'></span>
                </div>

                <div class="childBox">
                    <h3>Cuisine</h3>
                    <span id='cuisine'></span>
                </div>

                <div class="childBox">
                    <h3>Garage</h3>
                    <span id='garage'></span>
                </div>

                <div class="childBox">
                    <h3>Couloir</h3>
                    <span id='couloir'></span>
                </div>

            </div>
        </main>
    </section>

    <!------------------------------------Body - END------------------------------------------>

</body>

</html>

<!--
<script>
    setInterval(getTemp, 200);
    setInterval(getTime, 1000);
    setInterval(updateNameDisplay, 1000);

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

    function updateNameDisplay() {
        document.getElementById('livingroom').innerHTML = (result_temp[0] * 256 + result_temp[1]) / 10;
        document.getElementById('bedroom1').innerHTML = (result_temp[2] * 256 + result_temp[3]) / 10;
        document.getElementById('bedroom2').innerHTML = (result_temp[2] * 256 + result_temp[3]) / 10;
        document.getElementById('cuisine').innerHTML = (result_temp[4] * 256 + result_temp[5]) / 10;
        document.getElementById('bathroom').innerHTML = (result_temp[6] * 256 + result_temp[7]) / 10;
        document.getElementById('garage').innerHTML = (result_temp[2] * 256 + result_temp[3]) / 10;
        document.getElementById('couloir').innerHTML = (result_temp[2] * 256 + result_temp[3]) / 10;
    }


    var varTest = 0;

    function getData() {
        varTest = varTest + 1;
        return varTest;
    }
    Plotly.plot('chart', [{
            y: [(result_temp[0] * 256 + result_temp[1]) / 10],
            type: 'line',
            name: 'Salon'
        },
        {
            y: [(result_temp[2] * 256 + result_temp[3]) / 10],
            type: 'line',
            name: 'Chambre1'
        },
        {
            y: [(result_temp[2] * 256 + result_temp[3]) / 10],
            type: 'line',
            name: 'Chambre2'
        },
        {
            y: [(result_temp[2] * 256 + result_temp[3]) / 10],
            type: 'line',
            name: 'Chambre3'
        },
        {
            y: [(result_temp[4] * 256 + result_temp[5]) / 10],
            type: 'line',
            name: 'cuisine'
        },
        {
            y: [(result_temp[6] * 256 + result_temp[7]) / 10],
            type: 'line',
            name: 'salle de bains 1'
        },
        {
            y: [(result_temp[6] * 256 + result_temp[7]) / 10],
            type: 'line',
            name: 'salle de bains 2'
        },
        {
            y: [(result_temp[0] * 256 + result_temp[1]) / 10],
            type: 'line',
            name: 'garage'
        },
        {
            y: [(result_temp[4] * 256 + result_temp[5]) / 10],
            type: 'line',
            name: 'couloir'
        }
    ]);
    var cnt = 0;
    setInterval(function() {
        Plotly.extendTraces('chart', {
            y: [
                [(result_temp[0] * 256 + result_temp[1]) / 10]
            ]
        }, [0]);
        Plotly.extendTraces('chart', {
            y: [
                [(result_temp[2] * 256 + result_temp[3]) / 10]
            ]
        }, [1]);
        Plotly.extendTraces('chart', {
            y: [
                [(result_temp[2] * 256 + result_temp[3]) / 10]
            ]
        }, [2]);
        Plotly.extendTraces('chart', {
            y: [
                [(result_temp[2] * 256 + result_temp[3]) / 10]
            ]
        }, [3]);
        Plotly.extendTraces('chart', {
            y: [
                [(result_temp[4] * 256 + result_temp[5]) / 10]
            ]
        }, [4]);
        Plotly.extendTraces('chart', {
            y: [
                [(result_temp[6] * 256 + result_temp[7]) / 10]
            ]
        }, [5]);
        Plotly.extendTraces('chart', {
            y: [
                [(result_temp[6] * 256 + result_temp[7]) / 10]
            ]
        }, [6]);
        Plotly.extendTraces('chart', {
            y: [
                [(result_temp[0] * 256 + result_temp[1]) / 10]
            ]
        }, [7]);
        Plotly.extendTraces('chart', {
            y: [
                [(result_temp[4] * 256 + result_temp[5]) / 10]
            ]
        }, [8]);
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
-->
