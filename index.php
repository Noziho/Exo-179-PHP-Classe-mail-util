<?php
require 'mail.php';
$firstMail = new mail();
$firstMail->writingMail('noah.decroix3@gmail.com', "testEmailClass", "Voici mon message");
$firstMail->sendMail();