document.addEventListener('DOMContentLoaded', function() {
    // Csak akkor futtatjuk, ha létezik a custom nav
    const customNav = document.querySelector('.custom-main-nav');
    if (!customNav) return;

    const hamburger = customNav.querySelector('.custom-hamburger');
    const navMenu = customNav.querySelector('.custom-nav-menu');
    const navLinks = customNav.querySelectorAll('.custom-nav-menu a');
    const dropdown = customNav.querySelector('.custom-dropdown');
    const dropdownToggle = customNav.querySelector('.custom-dropdown-toggle');

    if (!hamburger || !navMenu) return;

    // Hamburger menü
    hamburger.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        e.stopImmediatePropagation();
        
        hamburger.classList.toggle('active');
        navMenu.classList.toggle('active');
    });

    // Bezárás link kattintáskor
    navLinks.forEach(function(link) {
        link.addEventListener('click', function(e) {
            // Ha nem dropdown toggle
            if (!link.classList.contains('custom-dropdown-toggle')) {
                hamburger.classList.remove('active');
                navMenu.classList.remove('active');
                if (dropdown) {
                    dropdown.classList.remove('active');
                }
            }
        });
    });

    // Dropdown toggle mobilon
    if (dropdownToggle && dropdown) {
        dropdownToggle.addEventListener('click', function(e) {
            if (window.innerWidth <= 768) {
                e.preventDefault();
                e.stopPropagation();
                e.stopImmediatePropagation();
                dropdown.classList.toggle('active');
            }
        });
    }

    // Bezárás kívülre kattintáskor
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.custom-main-nav')) {
            hamburger.classList.remove('active');
            navMenu.classList.remove('active');
            if (dropdown) {
                dropdown.classList.remove('active');
            }
        }
    });

    // Bootstrap dropdown blokkolás
    if (dropdown) {
        dropdown.addEventListener('show.bs.dropdown', function(e) {
            e.preventDefault();
            e.stopPropagation();
            e.stopImmediatePropagation();
            return false;
        });
        
        dropdown.addEventListener('hide.bs.dropdown', function(e) {
            e.preventDefault();
            e.stopPropagation();
            e.stopImmediatePropagation();
            return false;
        });
    }
});