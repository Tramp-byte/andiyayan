<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Periksa kolom yang kosong
if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['message'])) {
    http_response_code(400);
    echo "Silakan isi semua kolom.";
    exit;
}

// Bersihkan input
$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// Buat isi email
$to = "andimuhsyahrul1@gmail.com"; // Ganti dengan alamat email Anda
$email_subject = "Formulir Kontak: $subject";
$email_body = "Anda telah menerima pesan baru dari formulir kontak website Anda.\n\n";
$email_body .= "Nama: $name\n";
$email_body .= "Email: $email\n";
$email_body .= "Pesan:\n$message\n";

// Set header
$headers = "From: formulir-kontak@ptgelorapermatabumi.com\n";
$headers .= "Reply-To: $email";

// Kirim email
if (mail($to, $email_subject, $email_body, $headers)) {
    http_response_code(200);
    echo "Terima kasih! Pesan Anda telah terkirim.";
} else {
    http_response_code(500);
    echo "Oops! Terjadi kesalahan, pesan Anda tidak dapat dikirim.";
}
?>
