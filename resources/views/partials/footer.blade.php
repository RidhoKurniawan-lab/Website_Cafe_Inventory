<script>

    // // Handle sidebar navigation
    // const sidebarLinks = document.querySelectorAll('#sidebar a[data-page]');
    // const pageContents = document.querySelectorAll('.page-content');
    // const pageTitle = document.getElementById('page-title');

    // sidebarLinks.forEach(link => {
    //     link.addEventListener('click', function(e) {
    //         e.preventDefault();

    //         // Remove active class from all links
    //         sidebarLinks.forEach(l => {
    //             l.classList.remove('active');
    //         });

    //         // Add active class to clicked link
    //         this.classList.add('active');

    //         // Hide all page contents
    //         pageContents.forEach(content => {
    //             content.classList.add('hidden');
    //         });

    //         // Show the selected page content
    //         const pageId = this.getAttribute('data-page') + '-content';
    //         document.getElementById(pageId).classList.remove('hidden');

    //         // Update page title
    //         const pageName = this.querySelector('span').textContent;
    //         pageTitle.textContent = pageName;

    //         // Close sidebar on mobile after navigation
    //         if (window.innerWidth < 768) {
    //             const sidebar = document.getElementById('sidebar');
    //             const overlay = document.getElementById('overlay');

    //             sidebar.classList.remove('mobile-open');
    //             overlay.classList.remove('active');
    //         }
    //     });
    // });
</script>
