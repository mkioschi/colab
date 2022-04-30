<?php

require get_template_directory() . '/inc/vendor/Mobile_Detect/src/Mobile_Detect.php';

$detect = new Mobile_Detect;

$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

define("DEVICE_TYPE", $deviceType);