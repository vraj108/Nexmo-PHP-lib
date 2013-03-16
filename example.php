 $sms = new NexmoMessage('f47229b4', 'f1fd89e2');
     if ($sms->inboundText()) {
         $sms->reply('You said: ' . $sms->text);
     }
