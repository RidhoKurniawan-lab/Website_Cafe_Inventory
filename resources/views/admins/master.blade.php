@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')

    <!-- Other Pages Content (Hidden by default) -->
    <section id="analytics-content" class="page-content">
        <div class="p-6 bg-white rounded-lg shadow">
            <h2 class="mb-4 text-xl font-bold text-gray-800">Analytics Page</h2>
            <p class="text-gray-600">This is the analytics page content. You can add charts, graphs, and data visualizations
                here.</p>
            <div class="grid grid-cols-1 gap-4 mt-4 md:grid-cols-2">
                <div class="p-4 rounded-lg bg-blue-50">
                    <h3 class="font-semibold text-blue-800">Traffic Sources</h3>
                    <p class="mt-2 text-sm text-blue-600">Detailed analytics about your traffic sources</p>
                </div>
                <div class="p-4 rounded-lg bg-green-50">
                    <h3 class="font-semibold text-green-800">User Behavior</h3>
                    <p class="mt-2 text-sm text-green-600">Analysis of user interactions and behavior</p>
                </div>
            </div>
        </div>
    </section>
@endsection
