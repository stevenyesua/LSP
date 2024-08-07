document.addEventListener('DOMContentLoaded', function () {
    const dropdownToggle = document.getElementById('user-menu-button');
    const dropdownMenu = document.getElementById('user-dropdown');

    if (dropdownToggle && dropdownMenu) {
        dropdownToggle.addEventListener('click', function () {
            dropdownMenu.classList.toggle('hidden');
        });
    }
});