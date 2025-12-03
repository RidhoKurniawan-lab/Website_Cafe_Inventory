<header class="sticky top-0 z-10 bg-white shadow-sm ">
    <div class="flex items-center justify-between px-6 py-4">
        <div class="flex items-center">
            <button id="sidebar-toggle" class="mr-4 text-gray-500 cursor-pointer hover:text-gray-700 md:hidden">
                <i class="fas fa-bars"></i>
            </button>
            <h2 class="text-lg font-semibold text-gray-800" id="page-title">Dashboard</h2>
        </div>

        <div class="flex items-center space-x-4">
            <div class="relative">
                <button class="text-gray-500 cursor-pointer hover:text-gray-700 focus:outline-none">
                    <i class="text-xl fas fa-bell"></i>
                    <span class="absolute top-0 right-0 block w-2 h-2 bg-red-500 rounded-full"></span>
                </button>
            </div>

            <div class="relative">
                <button class="flex items-center text-gray-700 cursor-pointer hover:text-gray-900 focus:outline-none"
                    id="user-menu-button">
                    <div
                        class="flex items-center justify-center w-8 h-8 font-semibold text-white rounded-full bg-amber-700">
                        <i class="fas fa-user"></i>
                    </div>
                    <span class="ml-2">Admin</span>
                    <i class="ml-1 text-xs fas fa-chevron-down"></i>
                </button>

                <!-- Dropdown Menu -->
                <div class="absolute right-0 z-20 hidden w-48 py-1 mt-2 bg-white rounded-md shadow-lg" id="user-menu">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                        <i class="mr-2 fas fa-user"></i>Profile
                    </a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                        <i class="mr-2 fas fa-cog"></i>Settings
                    </a>
                    <div class="border-t border-gray-100"></div>
                    <form id="formLogout">
                        <button type="submit" class="block w-full px-4 py-2 text-sm text-left text-gray-700 cursor-pointer hover:bg-gray-100">
                            <i class="mr-2 fas fa-sign-out-alt"></i>Sign out
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
