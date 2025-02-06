<?php
if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}

function emailhost_MetaData()
{
    return array(
        'DisplayName' => 'Email Hosting Module',
        'APIVersion' => '1.1',
    );
}

function emailhost_ConfigOptions()
{
    return array(
        'API Endpoint' => array(
            'Type' => 'text',
            'Size' => '50',
            'Default' => '',
            'Description' => 'Enter your API endpoint here',
        ),
        'API Key' => array(
            'Type' => 'password',
            'Size' => '50',
            'Default' => '',
            'Description' => 'Enter your API key here',
        ),
        'cPanel Username' => array(
            'Type' => 'text',
            'Size' => '50',
            'Default' => '',
            'Description' => 'Enter your cPanel username here',
        ),
        'cPanel Password' => array(
            'Type' => 'password',
            'Size' => '50',
            'Default' => '',
            'Description' => 'Enter your cPanel password here',
        ),
        'Storage Quota (MB)' => array(
            'Type' => 'text',
            'Size' => '50',
            'Default' => '1024',
            'Description' => 'Enter the default storage quota in MB',
        ),
        'Max Email Accounts' => array(
            'Type' => 'text',
            'Size' => '50',
            'Default' => '10',
            'Description' => 'Enter the maximum number of email accounts',
        ),
        'Autoresponders' => array(
            'Type' => 'yesno',
            'Description' => 'Allow autoresponders',
        ),
        'Email Forwarding' => array(
            'Type' => 'yesno',
            'Description' => 'Allow email forwarding',
        ),
    );
}

function emailhost_CreateAccount($params)
{
    // Call the API to create the email account
    $response = EmailHostAPI::createEmailAccount($params);
    if ($response['success']) {
        return 'success';
    } else {
        return $response['error'];
    }
}

function emailhost_TerminateAccount($params)
{
    // Call the API to terminate the email account
    $response = EmailHostAPI::terminateEmailAccount($params);
    if ($response['success']) {
        return 'success';
    } else {
        return $response['error'];
    }
}
?>
