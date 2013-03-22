 $sms = new NexmoMessage('7d7d3db4', '963a7ae0');
     if ($sms->inboundText()) {
         $sms->reply('You said: ' . $sms->text);
     }
