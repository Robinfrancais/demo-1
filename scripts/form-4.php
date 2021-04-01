<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Form Submission',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => '',
    'to' => ''
    ),
    'fields' => array(
    'email' => array(
    'order' => 1,
    'type' => 'email',
    'label' => 'Email Address',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Email Address\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor();
    $processor->process($form);

    ?>