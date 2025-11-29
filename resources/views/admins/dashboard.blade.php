@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')

    <section id="dashboard-content" class="page-content">
        <div class="grid grid-cols-1 gap-6 mb-6 md:grid-cols-2 lg:grid-cols-4">
            <!-- Stat Cards -->
            <div class="p-6 bg-white rounded-lg shadow">
                <div class="flex items-center">
                    <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full">
                        <i class="text-xl fas fa-users"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-500">Total Users</p>
                        <h3 class="text-2xl font-bold text-gray-800">12,584</h3>
                    </div>
                </div>
                <div class="mt-4">
                    <span class="text-sm font-medium text-green-500">
                        <i class="mr-1 fas fa-arrow-up"></i> 12.5%
                    </span>
                    <span class="ml-2 text-sm text-gray-500">Since last month</span>
                </div>
            </div>

            <div class="p-6 bg-white rounded-lg shadow">
                <div class="flex items-center">
                    <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full">
                        <i class="text-xl fas fa-shopping-cart"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-500">Total Orders</p>
                        <h3 class="text-2xl font-bold text-gray-800">1,258</h3>
                    </div>
                </div>
                <div class="mt-4">
                    <span class="text-sm font-medium text-green-500">
                        <i class="mr-1 fas fa-arrow-up"></i> 8.2%
                    </span>
                    <span class="ml-2 text-sm text-gray-500">Since last month</span>
                </div>
            </div>

            <div class="p-6 bg-white rounded-lg shadow">
                <div class="flex items-center">
                    <div class="p-3 mr-4 text-purple-500 bg-purple-100 rounded-full">
                        <i class="text-xl fas fa-dollar-sign"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-500">Revenue</p>
                        <h3 class="text-2xl font-bold text-gray-800">$45,258</h3>
                    </div>
                </div>
                <div class="mt-4">
                    <span class="text-sm font-medium text-green-500">
                        <i class="mr-1 fas fa-arrow-up"></i> 15.3%
                    </span>
                    <span class="ml-2 text-sm text-gray-500">Since last month</span>
                </div>
            </div>

            <div class="p-6 bg-white rounded-lg shadow">
                <div class="flex items-center">
                    <div class="p-3 mr-4 text-yellow-500 bg-yellow-100 rounded-full">
                        <i class="text-xl fas fa-chart-line"></i>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-500">Growth</p>
                        <h3 class="text-2xl font-bold text-gray-800">+28.5%</h3>
                    </div>
                </div>
                <div class="mt-4">
                    <span class="text-sm font-medium text-green-500">
                        <i class="mr-1 fas fa-arrow-up"></i> 5.7%
                    </span>
                    <span class="ml-2 text-sm text-gray-500">Since last month</span>
                </div>
            </div>
        </div>

        <!-- Charts and Tables -->
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <article class="p-6 bg-white rounded-lg shadow">
                <h3 class="mb-4 text-lg font-semibold text-gray-800">Sales Overview</h3>
                <div class="flex items-center justify-center h-64 bg-gray-100 rounded">
                    <div class="text-center">
                        <i class="mb-2 text-4xl text-gray-400 fas fa-chart-bar"></i>
                        <p class="text-gray-500">Sales chart visualization</p>
                    </div>
                </div>
            </article>

            <article class="p-6 bg-white rounded-lg shadow">
                <h3 class="mb-4 text-lg font-semibold text-gray-800">Recent Activity</h3>
                <div class="space-y-4">
                    <div class="flex items-start">
                        <div class="shrink-0">
                            <div class="flex items-center justify-center w-10 h-10 text-blue-500 bg-blue-100 rounded-full">
                                <i class="fas fa-user-plus"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-900">New user registered</p>
                            <p class="text-sm text-gray-500">John Doe joined the platform</p>
                            <p class="mt-1 text-xs text-gray-400">2 hours ago</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="shrink-0">
                            <div
                                class="flex items-center justify-center w-10 h-10 text-green-500 bg-green-100 rounded-full">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-900">New order placed</p>
                            <p class="text-sm text-gray-500">Order #12345 has been placed</p>
                            <p class="mt-1 text-xs text-gray-400">5 hours ago</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="shrink-0">
                            <div
                                class="flex items-center justify-center w-10 h-10 text-purple-500 bg-purple-100 rounded-full">
                                <i class="fas fa-credit-card"></i>
                            </div>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-900">Payment received</p>
                            <p class="text-sm text-gray-500">Payment for order #12345 has been received</p>
                            <p class="mt-1 text-xs text-gray-400">1 day ago</p>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <section id="users-content" class="hidden page-content">
        <div class="p-6 bg-white rounded-lg shadow">
            <h2 class="mb-4 text-xl font-bold text-gray-800">Users Management</h2>
            <p class="text-gray-600">This is the users management page. You can view, add, edit, and delete users here.</p>
            <div class="mt-4 overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Name
                            </th>
                            <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Email
                            </th>
                            <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">Role
                            </th>
                            <th class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">John Doe</td>
                            <td class="px-6 py-4 whitespace-nowrap">john@example.com</td>
                            <td class="px-6 py-4 whitespace-nowrap">Admin</td>
                            <td class="px-6 py-4 whitespace-nowrap"><span
                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">Active</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">Jane Smith</td>
                            <td class="px-6 py-4 whitespace-nowrap">jane@example.com</td>
                            <td class="px-6 py-4 whitespace-nowrap">User</td>
                            <td class="px-6 py-4 whitespace-nowrap"><span
                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">Active</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section id="products-content" class="hidden page-content">
        <div class="p-6 bg-white rounded-lg shadow">
            <h2 class="mb-4 text-xl font-bold text-gray-800">Products Management</h2>
            <p class="text-gray-600">This is the products management page. You can view, add, edit, and delete products
                here.</p>
        </div>
    </section>

    <section id="orders-content" class="hidden page-content">
        <div class="p-6 bg-white rounded-lg shadow">
            <h2 class="mb-4 text-xl font-bold text-gray-800">Orders Management</h2>
            <p class="text-gray-600">This is the orders management page. You can view and manage all orders here.</p>
        </div>
    </section>

    <section id="settings-content" class="hidden page-content">
        <div class="p-6 bg-white rounded-lg shadow">
            <h2 class="mb-4 text-xl font-bold text-gray-800">Settings</h2>
            <p class="text-gray-600">This is the settings page. You can configure your application settings here.</p>
        </div>
    </section>

    <section id="help-content" class="hidden page-content">
        <div class="p-6 bg-white rounded-lg shadow">
            <h2 class="mb-4 text-xl font-bold text-gray-800">Help & Support</h2>
            <p class="text-gray-600">This is the help and support page. You can find documentation and contact support
                here.</p>
        </div>
    </section>

@endsection
