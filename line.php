 <?php
  

function send_LINE($msg){
 $access_token = 'G89FTlfAWoeKNhusOgTiNcioV8ijAzB3r61RzZvfqnI2+QpZGLaDv3YwVBoqPla1Ojj/3OjReCjbyXadBSDPiy0Y32k0h16MZHAZjoDERafU1vH7st8kBmvaspcuK6KX9HeV3K/u/qaQaX+8o8oNUQdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 's8tm4prcnBI18M1hvaTAw5JacBmMuVDRfuGEwhWbd80',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>
