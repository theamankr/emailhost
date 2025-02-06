<?php
add_hook('ClientAreaPrimaryNavbar', 1, function ($primaryNavbar) {
    $primaryNavbar->addChild('Email Login', array(
        'label' => 'Email Login',
        'uri' => 'clientarea.php?action=email-login',
        'order' => 10,
    ));
});
?>
