<?php
class EmailHostAPI
{
    public static function createEmailAccount($params)
    {
        $apiEndpoint = $params['configoption1'];
        $apiKey = $params['configoption2'];
        $cpanelUser = $params['configoption3'];
        $cpanelPass = $params['configoption4'];
        $quota = $params['configoption5'];
        $maxEmailAccounts = $params['configoption6'];
        $allowAutoresponders = $params['configoption7'];
        $allowForwarding = $params['configoption8'];

        // Implement the API call to create the email account here
        $postData = array(
            'action' => 'create',
            'domain' => $params['domain'],
            'username' => $params['username'],
            'password' => $params['password'],
            'quota' => $quota,
            'maxEmailAccounts' => $maxEmailAccounts,
            'allowAutoresponders' => $allowAutoresponders,
            'allowForwarding' => $allowForwarding,
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiEndpoint);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer ' . $apiKey,
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response, true);
    }

    public static function terminateEmailAccount($params)
    {
        $apiEndpoint = $params['configoption1'];
        $apiKey = $params['configoption2'];
        $cpanelUser = $params['configoption3'];
        $cpanelPass = $params['configoption4'];

        // Implement the API call to terminate the email account here
        $postData = array(
            'action' => 'terminate',
            'domain' => $params['domain'],
            'username' => $params['username'],
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $apiEndpoint);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer ' . $apiKey,
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response, true);
    }
}
?>
