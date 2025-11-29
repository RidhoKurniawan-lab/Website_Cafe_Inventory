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
            <ul id="sidebar-list">
                <li>
                    <a href="{{ route('dashboard') }}" class="flex items-center p-2 text-gray-700 rounded-lg hover:bg-blue-50 {{ request()->routeIs('dashboard') ? 'active' : '' }}"
                        data-page="dashboard">
                        <i class="mr-3 text-gray-500 fas fa-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <!-- Dropdown Menu Example 1: Analytics -->
                <li class="dropdown-group">
                    <div
                        class="flex items-center justify-between p-2 text-gray-700 rounded-lg cursor-pointer dropdown-toggle hover:bg-blue-50">
                        <div class="flex items-center">
                            <i class="mr-3 text-gray-500 fas fa-chart-bar"></i>
                            <span>Master</span>
                        </div>
                        <i class="text-xs text-gray-400 dropdown-arrow fas fa-chevron-down"></i>
                    </div>
                    <ul class="mt-1 ml-6 space-y-1 dropdown-content">
                        <li>
                            <a href="{{ route('add_master') }}"
                                class="flex items-center p-2 text-sm text-gray-600 rounded-lg hover:bg-blue-50 {{ request()->routeIs('add_master') ? 'active' : '' }}"
                                data-page="add-master">
                                <i class="mr-3 fas fa-chart-line"></i>
                                <span>Add Master</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Dropdown Menu Example 2: Users -->
                <li class="dropdown-group">
                    <div
                        class="flex items-center justify-between p-2 text-gray-700 rounded-lg cursor-pointer dropdown-toggle hover:bg-blue-50">
                        <div class="flex items-center">
                            <i class="mr-3 text-gray-500 fas fa-users"></i>
                            <span>Users</span>
                        </div>
                        <i class="text-xs text-gray-400 dropdown-arrow fas fa-chevron-down"></i>
                    </div>
                    <ul class="mt-1 ml-6 space-y-1 dropdown-content">
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-sm text-gray-600 rounded-lg hover:bg-blue-50"
                                data-page="all-users">
                                <i class="mr-3 fas fa-list"></i>
                                <span>All Users</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-sm text-gray-600 rounded-lg hover:bg-blue-50"
                                data-page="add-user">
                                <i class="mr-3 fas fa-user-plus"></i>
                                <span>Add New User</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-sm text-gray-600 rounded-lg hover:bg-blue-50"
                                data-page="user-roles">
                                <i class="mr-3 fas fa-user-tag"></i>
                                <span>User Roles</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-sm text-gray-600 rounded-lg hover:bg-blue-50"
                                data-page="user-permissions">
                                <i class="mr-3 fas fa-shield-alt"></i>
                                <span>Permissions</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Dropdown Menu Example 3: Products -->
                <li class="dropdown-group">
                    <div
                        class="flex items-center justify-between p-2 text-gray-700 rounded-lg cursor-pointer dropdown-toggle hover:bg-blue-50">
                        <div class="flex items-center">
                            <i class="mr-3 text-gray-500 fas fa-box"></i>
                            <span>Products</span>
                        </div>
                        <i class="text-xs text-gray-400 dropdown-arrow fas fa-chevron-down"></i>
                    </div>
                    <ul class="mt-1 ml-6 space-y-1 dropdown-content">
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-sm text-gray-600 rounded-lg hover:bg-blue-50"
                                data-page="all-products">
                                <i class="mr-3 fas fa-boxes"></i>
                                <span>All Products</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-sm text-gray-600 rounded-lg hover:bg-blue-50"
                                data-page="add-product">
                                <i class="mr-3 fas fa-plus-circle"></i>
                                <span>Add Product</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-sm text-gray-600 rounded-lg hover:bg-blue-50"
                                data-page="categories">
                                <i class="mr-3 fas fa-tags"></i>
                                <span>Categories</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-sm text-gray-600 rounded-lg hover:bg-blue-50"
                                data-page="inventory">
                                <i class="mr-3 fas fa-warehouse"></i>
                                <span>Inventory</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Dropdown Menu Example 4: Orders -->
                <li class="dropdown-group">
                    <div
                        class="flex items-center justify-between p-2 text-gray-700 rounded-lg cursor-pointer dropdown-toggle hover:bg-blue-50">
                        <div class="flex items-center">
                            <i class="mr-3 text-gray-500 fas fa-shopping-cart"></i>
                            <span>Orders</span>
                        </div>
                        <i class="text-xs text-gray-400 dropdown-arrow fas fa-chevron-down"></i>
                    </div>
                    <ul class="mt-1 ml-6 space-y-1 dropdown-content">
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-sm text-gray-600 rounded-lg hover:bg-blue-50"
                                data-page="all-orders">
                                <i class="mr-3 fas fa-shopping-bag"></i>
                                <span>All Orders</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-sm text-gray-600 rounded-lg hover:bg-blue-50"
                                data-page="pending-orders">
                                <i class="mr-3 fas fa-clock"></i>
                                <span>Pending Orders</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-sm text-gray-600 rounded-lg hover:bg-blue-50"
                                data-page="completed-orders">
                                <i class="mr-3 fas fa-check-circle"></i>
                                <span>Completed Orders</span>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-sm text-gray-600 rounded-lg hover:bg-blue-50"
                                data-page="cancelled-orders">
                                <i class="mr-3 fas fa-times-circle"></i>
                                <span>Cancelled Orders</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Regular menu item without dropdown -->
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-700 rounded-lg hover:bg-blue-50"
                        data-page="messages">
                        <i class="mr-3 text-gray-500 fas fa-envelope"></i>
                        <span>Messages</span>
                        <span class="px-2 py-1 ml-auto text-xs font-bold text-white bg-red-500 rounded-full">3</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="mb-6">
            <h2 class="mb-2 text-xs font-semibold tracking-wider text-gray-500 uppercase">Settings</h2>
            <ul>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-700 rounded-lg hover:bg-blue-50"
                        data-page="settings">
                        <i class="mr-3 text-gray-500 fas fa-cog"></i>
                        <span>Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-700 rounded-lg hover:bg-blue-50"
                        data-page="help">
                        <i class="mr-3 text-gray-500 fas fa-question-circle"></i>
                        <span>Help & Support</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
