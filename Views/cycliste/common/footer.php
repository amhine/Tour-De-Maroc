<!-- Footer -->
<footer class="bg-black text-white mt-16 py-12">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 text-sm">
            <a href="#" class="hover:text-yellow-400">ESPACE PRO</a>
            <a href="#" class="hover:text-yellow-400">ACCRÉDITATIONS</a>
            <a href="#" class="hover:text-yellow-400">CONTACTS</a>
            <a href="#" class="hover:text-yellow-400">DÉFICIENTS VISUELS</a>
            <a href="#" class="hover:text-yellow-400">POLITIQUE DE CONFIDENTIALITÉ</a>
            <a href="#" class="hover:text-yellow-400">VOS DROITS RGPD</a>
        </div>
    </div>
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const profileButton = document.getElementById('profileButton');
        const dropdownMenu = document.getElementById('dropdownMenu');
        let isOpen = false;

        profileButton.addEventListener('click', function(e) {
            e.stopPropagation();
            isOpen = !isOpen;
            if (isOpen) {
                dropdownMenu.classList.add('active');
            } else {
                dropdownMenu.classList.remove('active');
            }
        });

        document.addEventListener('click', function(e) {
            if (!dropdownMenu.contains(e.target) && !profileButton.contains(e.target)) {
                dropdownMenu.classList.remove('active');
                isOpen = false;
            }
        });
    });
</script>
</body>
</html>