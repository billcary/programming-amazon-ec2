<?php
    require_once( '/usr/share/php/AWSSDKforPHP/sdk.class.php');

    define('AWS_KEY', 'AKIAIGKECZXA7AEIJLMQ');
    define('AWS_SECRET_KEY', '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');

    $sns = new AmazonSNS();
    $sns->set_region($sns::REGION_EU_W1);

	$topic = md5( 'jurg@9apps.net/status');

    $response = $sns->create_topic( $topic);
    $response->isOK() or
        die( 'could not create topic ' + $topic);

    pr( $response->body);

    function pr($var) { print '<pre>'; print_r($var); print '</pre>'; }
?>
