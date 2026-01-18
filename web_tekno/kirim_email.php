<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Ambil data dari form
    $nama = strip_tags(trim($_POST["nama"]));
    $nomor = strip_tags(trim($_POST["nomor"]));
    $layanan = strip_tags(trim($_POST["layanan"]));
    $pesan = strip_tags(trim($_POST["pesan"]));

    // 2. Konfigurasi Email Penerima (Email Admin/Anda)
    // GANTI EMAIL INI DENGAN EMAIL ANDA SENDIRI
    $to = "natansalum477@gmail.com"; 
    
    // 3. Subjek Email
    $subject = "Order Baru dari: $nama ($layanan)";

    // 4. Isi Pesan Email
    $email_content = "Halo Admin VisiTech,\n\n";
    $email_content .= "Ada pesanan baru dari website:\n\n";
    $email_content .= "Nama: $nama\n";
    $email_content .= "No WA: $nomor\n";
    $email_content .= "Layanan: $layanan\n\n";
    $email_content .= "Detail Pesan:\n$pesan\n";

    // 5. Header Email
    $headers = "From: Website VisiTech <noreply@visitech.id>";

    // 6. Coba Kirim Email
    // CATATAN PENTING: Fungsi mail() ini hanya bekerja jika server sudah dikonfigurasi SMTP-nya.
    if (mail($to, $subject, $email_content, $headers)) {
        // Jika Berhasil
        echo "<script>
                alert('Pesan berhasil terkirim ke email admin!'); 
                window.location.href = 'order.php';
            </script>";
    } else {
        // Jika Gagal
        echo "<script>
                alert('Maaf, gagal mengirim email. Server Localhost (XAMPP) biasanya butuh setting SMTP tambahan. Silakan gunakan WhatsApp saja dulu.'); 
                window.location.href = 'order.php';
            </script>";
    }

} else {
    // Jika orang mencoba buka file ini langsung tanpa isi form
    header("Location: order.php");
    exit;
}
?>