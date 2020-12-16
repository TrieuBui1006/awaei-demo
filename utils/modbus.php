<?php
header('Content-Type: application/json');

$aResult = array();

if (!isset($_POST['functionname'])) {
    $aResult['error'] = 'No function name!';
}

if (!isset($_POST['arguments'])) {
    $aResult['error'] = 'No function arguments!';
}

if (!isset($aResult['error'])) {

    switch ($_POST['functionname']) {
        case 'getTemp':
            $aResult['result'] = getTemp();
            break;

        case 'getTime':
            $aResult['result'] = getTime();
            break;

        case 'turnOn':
            $aResult['result'] = turnOnVent();
            break;

        case 'turnOffVent':
            $aResult['result'] = turnOffVent();
            break;

        case 'turnOnRad':
            $aResult['result'] = turnOnRad();
            break;

        case 'turnOffRad':
            $aResult['result'] = turnOffRad();
            break;

        default:
            $aResult['error'] = 'Not found function ' . $_POST['functionname'] . '!';
            break;
    }
}

echo json_encode($aResult);
/**
 * init_modbus
 *
 * initialize modbus function
 */
function init_modbus()
{
    require_once dirname(__FILE__) . '/../phpmodbus-master/Phpmodbus/ModbusMaster.php';
}

function getTemp()
{
    init_modbus();

    $ip = "192.168.52.232";
    $port = 502;
    $debut = 16;
    $nbits = 20;
    $modbus = new ModbusMaster($ip, "TCP", $port);
    $data = $modbus->fc3(1, $debut, $nbits);
    return $data;
}

function getTime()
{
    init_modbus();

    $ip = "192.168.52.232";
    $port = 502;
    $debut = 16;
    $nbits = 20;
    $modbus = new ModbusMaster($ip, "TCP", $port);
    $data = $modbus->fc3(1, $debut, $nbits);
    return $data;
}

function turnOnVent()
{
    init_modbus();

    $debut = 4;
    $data = array("1");
    $ip = "192.168.52.232";
    $port = 502;
    $dataType = array("BOOLEAN");
    $modbus = new ModbusMaster($ip, "TCP", $port);
    $modbus->writeMultipleRegister(0, $debut, $data, $dataType);
}

function turnOffVent()
{
    init_modbus();

    $debut = 4;
    $data = array("0");
    $ip = "192.168.52.232";
    $port = 502;
    $dataType = array("BOOLEAN");
    $modbus = new ModbusMaster($ip, "TCP", $port);
    $modbus->writeMultipleRegister(0, $debut, $data, $dataType);
}

function turnOnRad()
{
    init_modbus();

    $debut = 11;
    $data = array("1");
    $ip = "192.168.52.232";
    $port = 502;
    $dataType = array("BOOLEAN");
    $modbus = new ModbusMaster($ip, "TCP", $port);
    $modbus->writeMultipleRegister(0, $debut, $data, $dataType);
}

function turnOffRad()
{
    init_modbus();

    $debut = 11;
    $data = array("0");
    $ip = "192.168.52.232";
    $port = 502;
    $dataType = array("BOOLEAN");
    $modbus = new ModbusMaster($ip, "TCP", $port);
    $modbus->writeMultipleRegister(0, $debut, $data, $dataType);
}