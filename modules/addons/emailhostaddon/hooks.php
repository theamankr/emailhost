<?php
add_hook('ClientAreaPrimaryNavbar', 1, function ($primaryNavbar) {
    $primaryNavbar->addChild('Email Management', array(
        'label' => 'Email Management',
        'uri' => 'index.php?m=emailhostaddon',
        'order' => 10,
    ));
});
?>
