<?php
if (isset($_POST['kullaniciadi'], $_POST['sifre'])) {
    $kullaniciadi = $_POST['kullaniciadi'];
    $sifre = $_POST['sifre'];

    // Gerçek bir kullanıcı adı ve şifre doğrulaması burada yapılmalıdır.
    // Örnek olarak sabit kullanıcı adı ve şifre ile doğrulama yapalım:
    $dogru_kullaniciadi = 's221210224@sakarya.edu.tr';
    $dogru_sifre = 's221210224';

    if ($kullaniciadi === $dogru_kullaniciadi && $sifre === $dogru_sifre) {
        echo "Giriş Başarılı. Hoşgeldin " . $sifre . " ";

    } else {
        echo "Bilgilerinizi Kontrol Edip Tekrar Giriş Yapın.<br>Eksik Bilgi Girdiniz...";
        echo "<p> <a href='giriş.html' class='back-btn'>&lt; GERİ DÖN</a></p>";
    }
} else {
    echo "Form gönderimi hatalı!";
}
?>
