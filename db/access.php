<?php 

$capabilities = [
    'tool/scott:view' => [
        'riskbitmask' => RISK_SPAM,
        'captype' => 'read',
        'contextlevel' => CONTEXT_MODULE
    ],
    'tool/scott:edit' => [
        'riskbitmask' => RISK_SPAM,
        'captype' => 'write',
        'contextlevel' => CONTEXT_MODULE
    ]
 ];