<?php
use Xmpush\IOSBuilder;
use Xmpush\Sender;
use Xmpush\Constants;
use Xmpush\Stats;
use Xmpush\Tracer;

require_once dirname(__FILE__).'/../autoload.php';

$secret = 'your app secret';
$bundleId = 'your app bundleId';

Constants::setBundleId($bundleId);
Constants::setSecret($secret);

$aliasList = array('2', 'alias2');
$desc = '这是一条mipush推送消息';
$payload = '{"test":1,"ok":"It\'s a string"}';

$message = new IOSBuilder();
$message->description($desc);
$message->soundUrl('default');
$message->badge('4');
$message->extra('payload', $payload);
$message->build();

$sender = new Sender();
print_r($sender->sendToAliases($message, $aliasList)->getRaw());
