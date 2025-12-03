@extends('layouts.auth')

@section('title', 'Login - Beanology Admin')

@section('content')

<div class="w-full max-w-4xl">
        <!-- Login Card -->
        <div class="flex flex-col overflow-hidden bg-white shadow-2xl rounded-4xl md:flex-row">
            <!-- left Side - Image -->
            <div class="relative items-center justify-center hidden w-full p-12 m-3 overflow-hidden rounded-3xl md:w-1/2 md:flex">

                <div class="">
                    <img
                        src="{{ Vite::asset('resources/images/login.jpg') }}"
                        alt="Admin Login Illustration"
                        class="absolute bottom-0 left-0 object-cover w-full h-full brightness-80"
                    >
                </div>

                <!-- Content -->
                <div class="relative z-10 max-w-xs text-center text-white">
                    <div class="flex items-center justify-center mx-auto mb-6 bg-white h-15 w-15 bg-opacity-20 rounded-2xl">
                        <i class="text-3xl text-black fas fa-shield-alt"></i>
                    </div>
                    <h2 class="mb-4 text-2xl font-bold">Secure Admin Access</h2>
                    <p class="leading-relaxed text-blue-100">
                        Access your dashboard with secure authentication. Manage your data with confidence and efficiency.
                    </p>

                    <!-- Features List -->
                    <div class="mt-8 space-y-3 text-left">
                        <div class="flex items-center">
                            <i class="mr-3 text-green-300 fas fa-check-circle"></i>
                            <span class="text-sm text-blue-100">Two-factor authentication</span>
                        </div>
                        <div class="flex items-center">
                            <i class="mr-3 text-green-300 fas fa-check-circle"></i>
                            <span class="text-sm text-blue-100">End-to-end encryption</span>
                        </div>
                        <div class="flex items-center">
                            <i class="mr-3 text-green-300 fas fa-check-circle"></i>
                            <span class="text-sm text-blue-100">24/7 Security monitoring</span>
                        </div>
                    </div>
                </div>
            </div>

            {{-- right Side - Login Form --}}
            <div class="w-full p-8 md:w-1/2 md:p-12">
                <!-- Header -->
                <div class="mb-8 text-center">
                    <div class="flex items-center justify-center mb-4">
                    </div>
                    <h1 class="text-2xl font-bold text-gray-800">Welcome Back</h1>
                    <p class="mt-2 text-gray-600">Sign in to your account</p>
                </div>

                <!-- Login Form -->
                <form id="formLogin" class="space-y-4">
                    <!-- Email Input -->
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-700">
                            <i class="mr-2 text-amber-700 fas fa-envelope"></i>
                            Email Address
                        </label>
                        <div class="relative">
                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="w-full px-4 py-3 transition-all duration-200 border border-gray-300 rounded-lg outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Enter your email"
                                required
                            >
                            <div class="absolute text-gray-400 right-3 top-3">
                                <i class="hidden text-green-500 fas fa-check-circle"></i>
                            </div>
                        </div>
                        <p id="validation-email" class="pl-1 text-sm text-red-500"></p>
                    </div>

                    <!-- Password Input -->
                    <div>
                        <div class="flex items-center justify-between mb-2">
                            <label for="password" class="block text-sm font-medium text-gray-700">
                                <i class="mr-2 text-amber-700 fas fa-lock"></i>
                                Password
                            </label>
                            <a href="#" class="text-sm transition-colors duration-200 text-amber-700 hover:text-amber-500">
                                Forgot password?
                            </a>
                        </div>
                        <div id="password-wrapper" class="relative">
                            <input
                                type="password"
                                id="password"
                                name="password"
                                class="w-full px-4 py-3 transition-all duration-200 border border-gray-300 rounded-lg outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                                placeholder="Enter your password"
                                required
                            >
                            <button
                                type="button"
                                class="absolute text-gray-400 transition-colors duration-200 cursor-pointer right-3 top-3 hover:text-gray-600"
                            >
                                <i class="fas fa-eye" id="password-toggle"></i>
                            </button>
                        </div>
                        <p id="validation-password" class="pl-1 text-sm text-red-500"></p>

                    </div>
                    <!-- Submit Button -->
                    <button
                        type="submit"
                        class="flex items-center justify-center w-full px-4 py-3 font-semibold text-white transition-all duration-200 rounded-lg cursor-pointer bg-amber-700 hover:bg-amber-600 focus:ring-4 focus:ring-amber-200"
                    >
                        <i class="mr-2 fas fa-sign-in-alt"></i>
                        Sign In
                    </button>

                    <!-- Divider -->
                    <div class="relative flex items-center justify-center my-6">
                        <div class="w-full border-t border-gray-300"></div>
                        <span class="absolute px-3 text-sm text-gray-500 bg-white">or</span>
                    </div>

                    <!-- Social Login -->
                    <div class="grid grid-cols-2 gap-4">
                        <button
                            type="button"
                            class="flex items-center justify-center px-4 py-2 transition-all duration-200 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50"
                        >
                            <i class="mr-2 text-red-500 fab fa-google"></i>
                            <span class="text-sm font-medium">Google</span>
                        </button>
                        <button
                            type="button"
                            class="flex items-center justify-center px-4 py-2 transition-all duration-200 border border-gray-300 rounded-lg cursor-pointer hover:bg-gray-50"
                        >
                            <i class="mr-2 text-gray-800 fab fa-github"></i>
                            <span class="text-sm font-medium">GitHub</span>
                        </button>
                    </div>

                    <!-- Sign Up Link -->
                    <div class="mt-6 text-center">
                        <p class="text-gray-600">
                            Don't have an account?
                            <a href="#" class="ml-1 font-semibold transition-colors duration-200 text-amber-700 hover:text-amber-600">
                                Sign up
                            </a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
