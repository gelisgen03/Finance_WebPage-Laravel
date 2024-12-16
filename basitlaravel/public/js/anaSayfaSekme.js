
        function changeContent1(contentId) {
            // Tüm card-header öğelerini gizle
            const allContent = document.querySelectorAll('.card-header');
            allContent.forEach(content => content.classList.remove('active'));

            // Seçilen içeriği göster
            const selectedContent = document.getElementById('Grafik' + contentId);
            if (selectedContent) {
                selectedContent.classList.add('active');
            }
        }
   