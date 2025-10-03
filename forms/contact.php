<?php

/**
 * Requires the "PHP Email Form" library (Pro)
 * https://bootstrapmade.com/php-email-form/#requirements
 */

// Replace with your real receiving email address
$receiving_email_address = 'founder01@mapniac.com';

if (file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php')) {
  include($php_email_form);
} else {
  die('Unable to load the "PHP Email Form" Library!');
}

$contact = new PHP_Email_Form;
$contact->ajax = true;

$contact->to         = $receiving_email_address;
$contact->from_name  = isset($_POST['name']) ? trim($_POST['name']) : '';
// Why: many SMTP/DMARC setups reject arbitrary From. Use your authenticated mailbox.
$contact->from_email = 'founder01@mapniac.com';
$contact->subject    = isset($_POST['subject']) ? trim($_POST['subject']) : '';

// SMTP per tutorial (use SSL on 465)
$contact->smtp = array(
  'host'       => 'mail.mapniac.com',
  'username'   => 'founder01@mapniac.com',
  'password'   => 'c5!uyKqiXnyvTrh',
  'port'       => '465',
  'encryption' => 'ssl',  // per host’s “SMTP Port: 465”
  'auth'       => true
);

// Build message (also include visitor email so you can reply)
$contact->add_message(isset($_POST['name']) ? trim($_POST['name']) : '',    'From');
$contact->add_message(isset($_POST['email']) ? trim($_POST['email']) : '',  'Email');
$contact->add_message(isset($_POST['message']) ? trim($_POST['message']) : '', 'Message', 10);

// Honeypot: must be a hidden empty field (do NOT map visible fields)
$contact->honeypot = isset($_POST['botcheck']) ? $_POST['botcheck'] : '';

// Simple privacy gate as in your form
if (!isset($_POST['privacy']) || $_POST['privacy'] !== 'accept') {
  die('Please, accept our terms of service and privacy policy');
}

echo $contact->send();
