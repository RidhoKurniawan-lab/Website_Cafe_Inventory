document.addEventListener('DOMContentLoaded', initApp);


function initApp() {
    if (!document.getElementById('sidebar')) return;

    //define elements
    const sidebarToggleBtn = document.getElementById('sidebar-toggle');
    const sidebarCloseBtn = document.getElementById('sidebar-close');
    const userMenuBtn = document.getElementById('user-menu-button');
    const sidebarLinks = document.querySelectorAll('#sidebar a[data-page]');

    const sidebar = document.getElementById('sidebar');
    const overlay = document.getElementById('overlay');
    const userMenu = document.getElementById('user-menu');

    // init functions
    sidebarOnMobile(sidebarToggleBtn, sidebar, overlay);
    sidebarCloseOnMobile(sidebarCloseBtn, sidebar, overlay);
    closeSidebarOnOverlayClick(overlay, sidebar);
    toggleUserMenu(userMenuBtn, userMenu);
    closeUserMenuOnClickOutside(userMenuBtn, userMenu);

}

//activate sidebar links
export function activateSidebarLinks() {
    const sidebarLists = document.getElementById('sidebar-list');
    const sidebarListItems = sidebarLists.querySelectorAll('li');
    sidebarListItems.forEach(item => {
        const link = item.querySelector('a');
        if (link !== null && link.classList.contains('active')) {
            const Content = item.querySelector('.dropdown-content');
            const dropdownArrows = item.querySelector('.dropdown-arrow');
            if (Content !== null) Content.classList.add('open');
            if (dropdownArrows !== null) dropdownArrows.classList.add('rotate-180');
        }
    });
}

//dropdown functionality
export function toggleDropdowns() {
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
    const dropdownContents = document.querySelectorAll('.dropdown-content');

    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function () {
            const Content = this.nextElementSibling;
            const dropdownArrows = this.querySelector('.dropdown-arrow');

            Content.classList.toggle('open');
            dropdownArrows.classList.toggle('rotate-180');


            dropdownContents.forEach(content => {
                if (content !== Content && content.classList.contains('open')) {
                    content.classList.remove('open');
                    content.previousElementSibling.querySelector('.dropdown-arrow').classList.remove('rotate-180');
                }
            });
        });
    });
}

// toggle sidebar on mobile
function sidebarOnMobile(sidebarToggleBtn, sidebar, overlay) {
    sidebarToggleBtn.addEventListener('click', () => {
        sidebar.classList.add('mobile-open');
        overlay.classList.add('active');
    });
}

// close sidebar on mobile
function sidebarCloseOnMobile(sidebarCloseBtn, sidebar, overlay) {
    sidebarCloseBtn.addEventListener('click', () => {
        sidebar.classList.remove('mobile-open');
        overlay.classList.remove('active');
    });
}

// close sidebar when clicking outside
function closeSidebarOnOverlayClick(overlay, sidebar) {
    overlay.addEventListener('click', () => {
        sidebar.classList.remove('mobile-open');
        overlay.classList.remove('active');
    });
}

//togle user dropdown menu
function toggleUserMenu(userMenuBtn, userMenu) {
    userMenuBtn.addEventListener('click', () => {
        userMenu.classList.toggle('hidden');
    });
}

// close user menu when clicking outside
function closeUserMenuOnClickOutside(userMenuBtn, userMenu) {
    document.addEventListener('click', (event) => {
        if (!userMenuBtn.contains(event.target) && !userMenu.contains(event.target)) {
            userMenu.classList.add('hidden');
        }
    });
}





