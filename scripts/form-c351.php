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
    'text' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'text',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'text\' is required.'
    )
    ),
    'text-1' => array(
    'order' => 2,
    'type' => 'string',
    'label' => 'text-1',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'text-1\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>