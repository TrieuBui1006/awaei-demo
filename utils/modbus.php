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