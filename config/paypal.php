<?php 
return [ 
    'client_id' => 'AcfLd50lszxWX9gpkzZVw4CS2NHYRVy8XZgIsoU2j3eiK3tL8Ar_bEpa7zVp3mELSBmvwmaRu6UjkSPP',
	'secret' => 'EH0qSvTc9GnEHYOKHGvY-jKL7B_IZvGGl09fk__ax-UfZ1brBVK3k8_bcsV3crn0YL6GB1Ab7hiKmMAV',
    'settings' => array(
        'mode' => 'sandbox',
        'http.ConnectionTimeOut' => 1000,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'FINE'
    ),
];