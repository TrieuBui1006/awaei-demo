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
    <link rel="icon" type="image/png" href="img/logo/logo2.png" />

    <link rel="stylesheet" href="css/style.css" />
    <script src="./node_modules/plotly.js-dist/plotly.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Les Viets - Garage</title>
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
            <section class="description-salle">
                <h1 style="margin: 20px 0">Mon Garage</h1>
                <div class="content-main-salle">
                Bienvenue dans votre garage ! 
                </div>
                <div class="content-salle">
                    <img src="./img/room/garage.jpg" alt="salle">
                    <div class="box-salle">
                        <div class="degree" id="degree">
                            30C
                        </div>
                        <div class="text-supp">
                            <div>
                                <h3>Radiateur</h3>
                                <div class="led" id="ledRad"></div>
                                <div>
                                    <button id="btnOnRad">On</button>
                                    <button id="btnOffRad">Off</button>
                                </div>
                            </div>
                            <div>
                                <h3>Luminiere</h3>
                                <div class="led" id="ledLum"></div>
                                <div>
                                    <button id="btnOnLum">On</button>
                                    <button id="btnOffLum">Off</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </section>

    <!------------------------------------Body - END------------------------------------------>

</body>

</html>

<script>
setInterval(getTemp, 1000);
setInterval(updateNameDisplay, 1000);

var result_temp = 0;
var write_result = 0;

let luminiere = false
let radiateur = false

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

function updateNameDisplay() {
    document.getElementById('degree').innerHTML = (result_temp[2] * 256 + result_temp[3]) / 10;
}

function turnOnRad() {
    jQuery.ajax({
        type: "POST",
        url: 'utils/modbus.php',
        dataType: 'json',
        data: {
            functionname: 'turnOnRad',
            arguments: 0
        },

        success: function(obj, textstatus) {
            if (!('error' in obj)) {
                write_result = obj.result;
                radiateur = true
                console.log("Turn On Radiateur");
            } else {
                console.log(obj.error);
            }
        }
    });

    console.log("Button actived");

}

function turnOffRad() {
    jQuery.ajax({
        type: "POST",
        url: 'utils/modbus.php',
        dataType: 'json',
        data: {
            functionname: 'turnOffRad',
            arguments: 0
        },

        success: function(obj, textstatus) {
            if (!('error' in obj)) {
                write_result = obj.result;
                radiateur = false
                console.log("Turn Off Radiateur");
            } else {
                console.log(obj.error);
            }
        }
    });

    console.log("Button actived");
}

const ledRad = document.getElementById('ledRad')
const ledLum = document.getElementById('ledLum')
const btnOnRad = document.getElementById('btnOnRad')
const btnOffRad = document.getElementById('btnOffRad')
const btnOnLum = document.getElementById('btnOnLum')
const btnOffLum = document.getElementById('btnOffLum')

const updatePage = () => {
    if (!radiateur) {
        ledRad.style.backgroundColor = '#cccccc'
        ledRad.innerHTML = 'OFF'
    } else if (radiateur) {
        ledRad.style.backgroundColor = '#9efe00'
        ledRad.innerHTML = 'ON'
    }

    if (!luminiere) {
        ledLum.style.backgroundColor = '#cccccc'
        ledLum.innerHTML = 'OFF'
    } else if (luminiere) {
        ledLum.style.backgroundColor = '#9efe00'
        ledLum.innerHTML = 'ON'
    }
}

const btnOnRadHandler = () => {
    turnOnRad()
    updatePage()
}

const btnOffRadHandler = () => {
    turnOffRad()
    updatePage()
}

const btnOnLumHandler = () => {
    luminiere = true
    updatePage()
}

const btnOffLumHandler = () => {
    luminiere = false
    updatePage()
}

const setupButtonsControl = () => {
    btnOnRad.onclick = btnOnRadHandler

    btnOffRad.onclick = btnOffRadHandler

    btnOnLum.onclick = btnOnLumHandler

    btnOffLum.onclick = btnOffLumHandler
}

const init = () => {
    setupButtonsControl()
    updatePage()
}

window.onload = init()
</script>