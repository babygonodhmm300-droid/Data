// JavaScript สำหรับเพิ่มเอฟเฟกต์และการโต้ตอบ
document.addEventListener('DOMContentLoaded', function() {
    // เพิ่มเอฟเฟกต์เมื่อโหลดหน้าเว็บ
    const contactLinks = document.querySelectorAll('.contact-link');
    
    contactLinks.forEach((link, index) => {
        // เพิ่ม animation delay สำหรับแต่ละลิงก์
        link.style.animationDelay = `${index * 0.1}s`;
    });
    
    // เพิ่มเอฟเฟกต์เมื่อ hover ที่รูปโปรไฟล์
    const profileImage = document.querySelector('.profile-image img');
    if (profileImage) {
        profileImage.addEventListener('mouseenter', function() {
            this.style.transform = 'scale(1.05) rotate(2deg)';
        });
        
        profileImage.addEventListener('mouseleave', function() {
            this.style.transform = 'scale(1) rotate(0deg)';
        });
    }
    
    // เพิ่ม confirmation สำหรับ external links
    const externalLinks = document.querySelectorAll('a[target="_blank"]');
    externalLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            // Optional: Add confirmation dialog
            // const confirmed = confirm('คุณกำลังจะไปยังเว็บไซต์ภายนอก ต้องการดำเนินการต่อหรือไม่?');
            // if (!confirmed) {
            //     e.preventDefault();
            // }
        });
    });
    
    // Console log สำหรับ debugging
    console.log('Website loaded successfully!');
});
