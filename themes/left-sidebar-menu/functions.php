<?php
## Webhook name must have the word API in it for funchion.php to work. Check line 15,16
## Debug site https://requestbin.com/r Copy URL into settings > webhook. Name it "Debug API"
## Discord 1. add and get webhook from a channel. 2. in settings > Webhook. 3. Name API Discord 4. Past webhook.
## Amazon Alexa 1. Add Notify Me skill in the alexa app. 
## 2. in WEBHOOK > settings. Name: "API Alexa" Webhook: "https://api.notifymyecho.com/v1/NotifyMe"
## 3. In $webhookData Replace accessCode => 'API_Key' with the one you receved in your email. Line 50

use BookStack\Actions\Webhook;
use BookStack\Entities\Models\Page;
use BookStack\Facades\Theme;
use BookStack\Theming\ThemeEvents;  
Theme::listen(ThemeEvents::WEBHOOK_CALL_BEFORE, function (string  $event, Webhook $webhook, $detail) {
	
    // Add a condition to only run this custom logic for specific webhook calls.
	if (strpos($webhook->name, 'API') !== false) {  
        
	// Build and return the data which will be sent as JSON to the endpoint.
	$newEvent = str_replace('_', ' was ', $event);	// Event name looks neeter 
		
	$rpl_type = array('update','create','delete','was',' '); // Remove Event detail to book detail
	$book = str_replace($rpl_type, '', $newEvent); // Show only book/page type
		
	$rpl_book = array('book','shelf','page','was',' '); // Remove Book detail to update details. 
	$type = str_replace($rpl_book, '', $newEvent); // Show only updated detail.
		
	$s = ' ';
	$nL = '
';      // culdent pass a \n to discord using this as new line instead.  
	 
	 // Avoid errors wirh getURL()
	if ($event == "auth_login"): 
		$GetURL = (' ');
		else:
		$GetURL = ($detail->getUrl()) ;
	endif;
 
	$msg_default = 'A ' . $newEvent . 'd. Event made by ' . user()->name . ' at, ' . date('D, M d, h:i A', (time())).$s. '' ;
	$webhookData = [
	
	/* Debug */	
	'Debug_'.$book => $detail,	 
	'event' => $event,
	'NewEvent' => $newEvent,
	'type' => $type,
	'book' => $book,	

	/* notifymyecho.com */
	'notification' => $msg_default , // 
	'accessCode' => 'API_KEY',
	
	/* Discord */
	'content' =>  $msg_default . $GetURL , 
	'username' => 'BookStack Discord Bot',
	]; 

	if ($detail instanceof Page) { 
		$webhookData['notification'] = 'A ' . $newEvent . 'd, Named ' . $detail->name . ', in book, ' . $detail->book->name . ', changes made by ' . user()->name . ', At ' . date('D, M, d, h:i A', (time())) . '.' ;
		$webhookData['content'] = 'User: '.user()->name.$s. $type.'d'.$s. $book.$nL. 'Page: ' .$detail->name.$nL. 'Book: ' .$detail->book->name.$nL. 'Time: ' .date('D, M, d, h:i A', (time())).$nL.'URL: ' .$detail->getUrl();
		$webhookData['DEBUG_'.$book] = $detail;
        }	
	if ($book == 'bookshelf') {
            	$webhookData['notification'] = 'At ' .date('D, M d, h:i A', (time())).', User: ' .user()->name. ' '. $type. 'd a ' .$book. ' Named: ' . $detail->name . '.  Shelf description: ' . $detail->description ; 
		$webhookData['content'] = 'User: '.user()->name.$s. $type.'d'.$s. $book.$nL. 'BookShelf: ' .$detail->name.$nL. 'Description: ' .$detail->description.$nL. 'Time: ' .date('D, M, d, h:i A', (time())).$nL.'URL: ' .$detail->getUrl();
            	$webhookData['DEBUG_'.$book] = $detail;
        }		
	
	if ($book == 'book') { 
       		$webhookData['notification'] =   'At ' .date('D, M d, h:i A', (time())).', User: ' .user()->name. ' '. $type. 'd a ' .$book. ' Named: ' . $detail->name . '.  Book description: ' . $detail->description ; //
		$webhookData['content'] = 'User: '.user()->name.$s. $type.'d'.$s. $book.$nL. 'Book: ' .$detail->name.$nL. 'Description: ' .$detail->description.$nL. 'Time: ' .date('D, M, d, h:i A', (time())).$nL.'URL: ' .$detail->getUrl();
            	$webhookData['DEBUG_'.$book] = $detail;
        }				       
		
	if ($book == 'recyclebindestroy') {
 		$newEvent = str_replace('_', ' ', $event);			 
		$webhookData['notification'] =   $newEvent. 'ed by user: '  .user()->name.', ' .date('D, M d, h:i A', (time())); //
		$webhookData['content'] = '**' .$newEvent. 'ed** by user: '  .user()->name.$nL. 'Time: ' .date('D, M d, h:i A', (time())).$nL.   'Details: '   .$detail->deletable_type;                  ;
		$webhookData['DEBUG_'.$book] = $detail;
        }			
		
	if ($book === 'authlogin') { 	    
            	$webhookData['notification'] =  'Auth Login: '.user()->name.' Just logged in to wiki.telocall.com';    
		$webhookData['content'] = '**Auth Login** - '.user()->name.' Just logged in to wiki.telocall.com';   
            	$webhookData['DEBUG_'.$book] = $detail;
        }		
		  
        return $webhookData;
    }
    return null;
});
