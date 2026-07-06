<?php
header('Content-Type: application/json; charset=utf-8');

function respond($success, $message) {
    echo json_encode(['success' => $success, 'message' => $message]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    respond(false, 'Ungültige Anfrage.');
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$message = trim($_POST['message'] ?? '');
$privacy = $_POST['privacy'] ?? '';

if ($name === '' || $email === '' || $message === '' || $privacy === '') {
    respond(false, 'Bitte füllen Sie alle Pflichtfelder aus und akzeptieren Sie die Datenschutzerklärung.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    respond(false, 'Bitte geben Sie eine gültige E-Mail-Adresse ein.');
}

// Strip newlines from header-bound fields to prevent header injection
$name = str_replace(["\r", "\n"], '', $name);
$email = str_replace(["\r", "\n"], '', $email);
$phone = str_replace(["\r", "\n"], '', $phone);

$recipient = 'Beratung@manuela-rosenkranz.de';
$subject = 'Neue Kontaktanfrage über die Website';

$body = "Neue Nachricht über das Kontaktformular:\n\n";
$body .= "Name: {$name}\n";
$body .= "E-Mail: {$email}\n";
$body .= "Telefon: " . ($phone !== '' ? $phone : '-') . "\n\n";
$body .= "Nachricht:\n{$message}\n";

$headers = [];
$headers[] = 'From: Website Kontaktformular <noreply@manuela-rosenkranz.de>';
$headers[] = "Reply-To: {$name} <{$email}>";
$headers[] = 'Content-Type: text/plain; charset=UTF-8';

$success = @mail($recipient, '=?UTF-8?B?' . base64_encode($subject) . '?=', $body, implode("\r\n", $headers));

if ($success) {
    respond(true, 'Vielen Dank für Ihre Nachricht! Ich melde mich zeitnah bei Ihnen.');
} else {
    respond(false, 'Leider konnte Ihre Nachricht nicht gesendet werden. Bitte versuchen Sie es später erneut oder kontaktieren Sie mich telefonisch.');
}
