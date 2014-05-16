<?php
require_once('lib/codebird/codebird.php');
\Codebird\Codebird::setConsumerKey('7NhUR863lWCR3V0bbbHoCTBft', 'rH0jr4HdvJdRIikhQDIdRS5rnXrPkAayX7dXVCWOP1RVWCweqA');

$cb = \Codebird\Codebird::getInstance();

$cb->setToken('171615519-XOTYhWmUshtc1k30lbj9ZmsQdCJKiPBVaFR1nmfv', 'MuZYW3xW402dIMjJwNdl0C8wAY2WdB08l0fwDRFXNZjOO');

$reply = (array) $cb->statuses_homeTimeline();
print_r($reply);