<?php
    
    define("ENV_PRODUCTION", 'production');
    define("ENV_SANDBOX", 'sandbox');
    
    function getBulkDataExchangeServiceEndpoint($environment)
    {
	    if ( $environment == ENV_PRODUCTION ) {
	        $endpoint = 'https://webservices.ebay.com/BulkDataExchangeService';    
	    }
	    elseif ( $environment == ENV_SANDBOX ) {  
	    	$endpoint = 'https://webservices.sandbox.ebay.com/BulkDataExchangeService';              
	    }
	    else {
	    	die("Invalid Environment: $environment");  
	    }
	    
	    return $endpoint;
    }
    
    function getFileTransferServiceEndpoint($environment)
    {
    	if ( $environment == ENV_PRODUCTION ) {
	        $endpoint = 'https://storage.ebay.com/FileTransferService';    
	    }
	    elseif ( $environment == ENV_SANDBOX ) {  
	    	$endpoint = 'https://storage.ebay.com/FileTransferService';              
	    }
	    else {
	    	die("Invalid Environment: $environment");    
	    }
	    
	    return $endpoint;
    }
    
    function getSecurityToken($environment)
    {
	    if ( $environment === ENV_PRODUCTION ) {
	        $securityToken = 'AgAAAA**AQAAAA**aAAAAA**Sy0gWw**nY+sHZ2PrBmdj6wVnY+sEZ2PrA2dj6ADlIWnDJSEow2dj6x9nY+seQ**0mAEAA**AAMAAA**Sr6A4NmEitpZ+y2SyIBr/LmFxNYtbM1jJWeTGFFq+LZ1EBx/i5D0z/RMOxD58EotAfJmOIfBsaW7dRvjzTh8cnAH736Mr7IUOMI3dX8QamPhYEIOrBD3mxQ31J4vegIvOT4/eK4LpBFcBjIWf24l/r5WmAuaIOieSCEuIHczgR05/J9+Bg+soXhnXI8xjG4Mpd50gLV+ZI5L7C54RPTBfqqQoHfTZiEDi48Dd3B94Cb2jS5osnrrsERuprZXzL9og0jtzAVx1OF1QjEDY0KA+eTvL0VhgNgJnrZ9Qjv5eUkvYDbeMa2s8gl1yi05IOCFNSmE/R2NmtZYisMVnF1iexoYtlyok9xNE2EkIc7W5nHg4xoAwy1TKGCuhPOSq1g1To0OB4z0IVweSMfMWw1WyPDWADaujmcVwsUHQMqK3MQu/AXlSlLD5IMimf0xekwOPGcgC+2B09pgAUEApY3JBx2974YvCMLGVwoo59ydxfdVJO25jcD0Tn2fZ5T/rq6nm2qD34hn8kXenMpXuD3NlH6tyXKEUxn/qwPcxin+vvdrkjK8u2VztssezoYRaROTiAJ+nYkr1/00Z4yLzVpA9+nq46kfO31XZIzMiYzKzR4i0E9KGWlApphhPBp6nUHKNeVf2gP9WiZNlRusiC9Q32mrGjrjkCNmXGdOWdf91ckAYrN9pGbR7X3MKLhhbRQzb5J7hj1wJHGC2HvAjbkjKcz3Fer5Q80I/UOZRKPpSthHMmK7kKka/eYfBleD9CMa';
	    }
	    elseif ( $environment === ENV_SANDBOX ) {  
	        $securityToken = 'AgAAAA**AQAAAA**aAAAAA**Sy0gWw**nY+sHZ2PrBmdj6wVnY+sEZ2PrA2dj6ADlIWnDJSEow2dj6x9nY+seQ**0mAEAA**AAMAAA**Sr6A4NmEitpZ+y2SyIBr/LmFxNYtbM1jJWeTGFFq+LZ1EBx/i5D0z/RMOxD58EotAfJmOIfBsaW7dRvjzTh8cnAH736Mr7IUOMI3dX8QamPhYEIOrBD3mxQ31J4vegIvOT4/eK4LpBFcBjIWf24l/r5WmAuaIOieSCEuIHczgR05/J9+Bg+soXhnXI8xjG4Mpd50gLV+ZI5L7C54RPTBfqqQoHfTZiEDi48Dd3B94Cb2jS5osnrrsERuprZXzL9og0jtzAVx1OF1QjEDY0KA+eTvL0VhgNgJnrZ9Qjv5eUkvYDbeMa2s8gl1yi05IOCFNSmE/R2NmtZYisMVnF1iexoYtlyok9xNE2EkIc7W5nHg4xoAwy1TKGCuhPOSq1g1To0OB4z0IVweSMfMWw1WyPDWADaujmcVwsUHQMqK3MQu/AXlSlLD5IMimf0xekwOPGcgC+2B09pgAUEApY3JBx2974YvCMLGVwoo59ydxfdVJO25jcD0Tn2fZ5T/rq6nm2qD34hn8kXenMpXuD3NlH6tyXKEUxn/qwPcxin+vvdrkjK8u2VztssezoYRaROTiAJ+nYkr1/00Z4yLzVpA9+nq46kfO31XZIzMiYzKzR4i0E9KGWlApphhPBp6nUHKNeVf2gP9WiZNlRusiC9Q32mrGjrjkCNmXGdOWdf91ckAYrN9pGbR7X3MKLhhbRQzb5J7hj1wJHGC2HvAjbkjKcz3Fer5Q80I/UOZRKPpSthHMmK7kKka/eYfBleD9CMa';                 
	    }
	    else {
	    	die("Invalid Environment: $environment");   
	    }
	    
	    return $securityToken;
    }

?>