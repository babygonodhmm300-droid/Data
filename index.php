<?php
// ตรวจสอบและทำความสะอาด parameters
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

$region = isset($_GET['region']) ? sanitize_input($_GET['region']) : '';
$market = isset($_GET['market']) ? sanitize_input($_GET['market']) : '';
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลติดต่อ - โปรไฟล์ของฉัน</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>ข้อมูลติดต่อ</h1>
        </header>

        <main class="main-content">
            <div class="profile-section">
                <div class="profile-image">
                    <img src="https://i.ibb.co/1JM7-GBLm/profile.jpg" alt="รูปโปรไฟล์ของฉัน" onerror="this.src='https://via.placeholder.com/200x200/1e3a8a/ffffff?text=Profile+Image'">
                </div>
                
                <div class="contact-info">
                    <h2>สมบัติ ภูมิมะสone</h2>
                    <p class="tagline">Developer & Tech Enthusiast</p>
                    
                    <div class="contact-links">
                        <a href="https://wa.me/662098591673" class="contact-link whatsapp" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                            <span>WhatsApp: +66 20 9859 1673</span>
                        </a>
                        
                        <a href="https://discord.gg/qmcn4vxhb" class="contact-link discord" target="_blank">
                            <i class="fab fa-discord"></i>
                            <span>Discord Server</span>
                        </a>
                        
                        <a href="https://www.facebook.com/share/17Jv1CCCRq/" class="contact-link facebook" target="_blank">
                            <i class="fab fa-facebook"></i>
                            <span>Facebook: Sombath Phimmasone</span>
                        </a>
                    </div>
                </div>
            </div>
        </main>

        <footer class="footer">
            <p>&copy; 2024 Sombath Phimmasone All rights reserved.</p>
        </footer>
    </div>

    <script src="script.js"></script>
</body>
</html>
