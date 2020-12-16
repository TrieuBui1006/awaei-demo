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

        case 'turnOnVen':
            $aResult['result'] = turnOnVen();

        case 'turnOffVen':
            $aResult['result'] = turnOffVen();

        case 'turnOnRes':
            $aResult['result'] = turnOnRes();

        case 'turnOffRes':
            $aResult['result'] = turnOffRes();

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

function writeBit($adr, $data)
{
    init_modbus();

    $ip = "192.168.52.232";
    $port = 502;

    $modbus = new ModbusMaster($ip, "TCP", $port);
    $data = $modbus->fc15(0, $adr, $data);
    return true;
}

function turnOnVen()
{
    writeBit(4, TRUE);
}

function turnOffVen()
{
    writeBit(4, FALSE);
}

function turnOnRes()
{
    writeBit(11, TRUE);
}

function turnOffRes()
{
    writeBit(11, FALSE);
}