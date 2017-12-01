<?php

use PhpAmqpLib\Connection\AMQPStreamConnection;
require_once __DIR__ . '/vendor/autoload.php';
require_once '/var/www/html/api/vendor/swiftmailer/swiftmailer/lib/swift_required.php';

$connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
$channel = $connection->channel();

$channel->queue_declare('task_queue', false, true, false, false);

echo ' [*] Waiting for messages. To exit press CTRL+C', "\n";

$callback = function($msg){
  echo " [x] Received ", $msg->body, "\n";
    
    $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, "ssl"))
      ->setUsername('japananimetime@gmail.com')
      ->setPassword('qwerty666!');


    $mailer = new Swift_Mailer($transport);

    $message = (new Swift_Message('Contacto'))    
     ->setFrom(array('japananimetime@gmail.com' => 'webmaster'))
     ->setTo(array($msg->body))    
     ->setBody('Registration Complete!');

    $result = $mailer->send($message);
     echo " [x] Done", "\n";
  $msg->delivery_info['channel']->basic_ack($msg->delivery_info['delivery_tag']);
};

$channel->basic_qos(null, 1, null);
$channel->basic_consume('task_queue', '', false, false, false, false, $callback);

while(count($channel->callbacks)) {
    $channel->wait();
}

$channel->close();
$connection->close();

?>
