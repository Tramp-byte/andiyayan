<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $user_phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Nomor telepon Anda dalam format internasional tanpa tanda '+'
    $my_phone = "6289601124670"; // Ganti dengan nomor Anda sendiri

    // Format pesan yang akan dikirim ke WhatsApp
    $whatsapp_message = "Hallo, *$name*!\n\n";
    $whatsapp_message .= "Pesan: $message\n";
    $whatsapp_message .= "dari email : $user_phone";

    // Link untuk mengirim pesan WhatsApp dengan format yang benar
    $whatsapp_link = "https://wa.me/$my_phone?text=" . urlencode($whatsapp_message);

    // Redirect ke link WhatsApp
    header("Location: $whatsapp_link");
    exit;
} else {
    http_response_code(405); // Method Not Allowed
    echo "Metode tidak diizinkan.";
}
?>

