<?php
// Routes

$app->post('/', function ($request, $response, $args) {

    /** @var \Slim\Http\Request $request */

    /** @var \Illuminate\Database\Capsule\Manager $db */
    $db = $this->db;

    /** @var \Monolog\Logger $logger */
    $logger = $this->logger;

    $requestBody = json_decode($request->getBody()->getContents());

    $message = json_decode($requestBody->Message);

    if(is_array($message->mail->destination))
    {
        foreach($message->mail->destination as $mail)
        {
            $db->table('storage')->insert([ 'messageId'  => $requestBody->MessageId,
                                            'message'   => json_encode($requestBody),
                                            'email'     => $mail,]);

        }
    }

    $logger->debug(json_encode($requestBody));

});
