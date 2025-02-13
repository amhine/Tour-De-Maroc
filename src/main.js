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