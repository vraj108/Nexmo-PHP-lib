 $sms = new NexmoMessage('7cd9c582', '3ffff4bc');
     if ($sms->inboundText()) {
         $sms->reply('You said: ' . $sms->text);
     }
