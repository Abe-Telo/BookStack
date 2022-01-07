<?php
## Amazon Alexa and echo devices.
## This webhook works with the alexa skill Notify Me, You Will receive a notification on your echo device  More info   ##
## can be found here. www.notifymyecho.com. Add this skill to your alexa app and follow instruchions. To get the api.  ## 
## Replace API_Key with the one you receved in your email. Now in webhook add https://api.notifymyecho.com/v1/NotifyMe ##                                        ##
use BookStack\Actions\Webhook;
use BookStack\Facades\Theme;
use BookStack\Theming\ThemeEvents;  
Theme::listen(ThemeEvents::WEBHOOK_CALL_BEFORE, function (string  $event, Webhook $webhook, $detail) {
    // Add a condition to only run this custom logic for specific webhook calls.
    if (strpos($webhook->endpoint, 'api.notifymyecho.com') !== false) {
        // Build and return the data which will be sent as JSON to the endpoint.
        $webhookData = [

	'notification' =>  'A ' . $event . ' was made by ' . user()->name . ' at ' . date('D, M, Y,, h:i A', (time())) ,
    'accessCode' => 'API_Key',
        ];
        return $webhookData;
    }
    return null;
});
