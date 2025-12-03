<nav id="sidebar"
    class="sticky w-64 top-0 h-screen overflow-y-auto transition-all duration-300 ease-in-out bg-white shadow-lg shrink-0 sidebar [&::-webkit-scrollbar]:hidden">
    <div class="flex items-center justify-between p-3 border-b">
        <div class="flex items-center">
            <div class="flex items-center justify-center w-10 h-10 font-bold text-white rounded-lg bg-amber-700">
                <i class="fas fa-cube"></i>
            </div>
            <h1 class="ml-3 text-xl font-bold">AdminPanel</h1>
        </div>
        <button id="sidebar-close" class="text-gray-500 cursor-pointer hover:text-gray-700 md:hidden">
            <i class="fas fa-times"></i>
        </button>
    </div>

    <div class="p-4">
        <div class="mb-6">
            <h2 class="mb-2 text-xs font-semibold tracking-wider text-gray-500 uppercase">Main Menu</h2>
            <ul id="sidebar-list" class="space-y-2">

            </ul>
        </div>

        <div class="mb-6">
            <h2 class="mb-2 text-xs font-semibold tracking-wider text-gray-500 uppercase">Settings</h2>
            <ul>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-700 rounded-lg hover:bg-amber-50"
                        data-page="settings">
                        <i class="mr-3 text-gray-500 fas fa-cog"></i>
                        <span>Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-700 rounded-lg hover:bg-amber-50"
                        data-page="help">
                        <i class="mr-3 text-gray-500 fas fa-question-circle"></i>
                        <span>Help & Support</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
