import axios from "axios";

import { activateSidebarLinks, toggleDropdowns } from "../sidebar.js";

document.addEventListener("DOMContentLoaded", initApp);

function initApp() {

    if (!document.getElementById('sidebar')) return;

    getSidebar();

}

// get role db sidebar
async function getSidebar() {
    try {

        const cached = localStorage.getItem('sidebar');

        if (cached) {
            const cachedData = JSON.parse(cached);

            sidebarComponent(cachedData);
            activateSidebarLinks();
            toggleDropdowns();
        }

        const response = await axios.get('/get_sidebar', {
            headers: { 'Content-Type': 'multipart/form-data' }
        });

        const data = response.data;

        if (JSON.stringify(data) !== cached) {
            localStorage.setItem('sidebar', JSON.stringify(data));

            sidebarComponent(data);
            activateSidebarLinks();
            toggleDropdowns();
        }


    } catch (error) {
        console.log(error);
    }
}

// parent wrapper component sidebar
function sidebarComponent(data) {


    let path = window.location.pathname.replace('/', '');

    const ulParent = document.getElementById('sidebar-list');

    data.forEach(menu => {

        let wrapperParent;

        const li = document.createElement('li');
        const iconMenu = document.createElement('i');
        const iconArrow = document.createElement('i');
        const spantext = document.createElement('span');
        const wrapperText = document.createElement('div');


        // merubah wrapper jadi link jika menu tidak ada submenu nya
        if (menu.submenu.length === 0) {
            wrapperParent = document.createElement('a');
            wrapperParent.href = '/' + menu.name.toLowerCase();
        } else {
            wrapperParent = document.createElement('div');
        }

        iconMenu.classList.add('mr-3', 'text-gray-500', 'fas', menu.icon);
        wrapperText.prepend(iconMenu);

        spantext.textContent = menu.name;
        wrapperText.appendChild(spantext);

        wrapperText.classList.add('flex', 'items-center');
        wrapperParent.prepend(wrapperText);


        if (menu.submenu.length != 0) {
            iconArrow.classList.add('text-xs', 'text-gray-400', 'dropdown-arrow', 'fas', 'fa-chevron-down');
            wrapperParent.appendChild(iconArrow);
        }

        wrapperParent.classList.add(
            ...classNames(
                'flex', 'items-center', 'justify-between', 'p-2', 'text-gray-700', 'rounded-lg', 'cursor-pointer', 'dropdown-toggle', 'hover:bg-amber-50',
                menu.submenu.length === 0 && menu.name.toLowerCase() === path && 'active'
            )
        )

        if (menu.submenu.length !== 0) li.appendChild(submenuComponent(menu.submenu));

        li.prepend(wrapperParent);

        ulParent.appendChild(li);

    });

    return ulParent;

}

// submenu component
function submenuComponent(data) {

    let path = window.location.pathname;

    const ul = document.createElement('ul');
    const li = document.createElement('li');
    const link = document.createElement('a');
    const icon = document.createElement('i');
    const span = document.createElement('span');

    data.forEach(submenu => {

        span.textContent = submenu.name;
        link.appendChild(span);

        icon.classList.add('mr-3', 'fas', submenu.icon);
        link.prepend(icon);

        link.classList.add(
            ...classNames(
                'flex', 'items-center', 'p-2', 'text-gray-600', 'rounded-lg', 'hover:bg-amber-50', 'text-sm',
                submenu.url == path && 'active'
            )
        );

        link.href = submenu.url;

        li.appendChild(link);

    });

    ul.classList.add('mt-1', 'ml-6', 'space-y-1', 'dropdown-content');
    ul.appendChild(li);

    return ul;
}


function classNames(...classes) {
    return classes.filter(Boolean);
}
