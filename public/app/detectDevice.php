<?php
use DeviceDetector\ClientHints;
use DeviceDetector\DeviceDetector;
use DeviceDetector\Parser\Device\AbstractDeviceParser;

AbstractDeviceParser::setVersionTruncation(AbstractDeviceParser::VERSION_TRUNCATION_NONE);

$userAgent = $_SERVER['HTTP_USER_AGENT']; 
$clientHints = ClientHints::factory($_SERVER);
$dd = new DeviceDetector($userAgent, $clientHints);
$dd->parse();
$detected = (Object)[];

if ($dd->isBot()) {
    $detected->botInfo = $dd->getBot();
} else {
    $detected->clientInfo = $dd->getClient();
    $detected->osInfo = $dd->getOs();
    $detected->device = $dd->getDeviceName();
    $detected->brand = $dd->getBrandName();
    $detected->model = $dd->getModel();
}
return $detected;