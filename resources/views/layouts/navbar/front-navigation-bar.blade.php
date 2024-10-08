<nav class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Left Side (Logo and Links) -->
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <img class="h-8 w-auto" src="{{ asset('images/logo.png') }}" alt="Logo">
                </div>

                <!-- Links -->
                <div class="hidden sm:-my-px sm:ml-6 sm:flex space-x-8">
                    <a href="{{ url('/blog-news') }}" class="text-gray-900 hover:text-gray-700 inline-flex items-center px-1 pt-1 text-sm font-medium">
                        Blog & News
                    </a>
                    <a href="{{ url('/customer-reviews') }}" class="text-gray-900 hover:text-gray-700 inline-flex items-center px-1 pt-1 text-sm font-medium">
                        Customer Reviews
                    </a>
                </div>
            </div>

            <!-- Right Side (Login and User Image) -->
            <div class="flex items-center space-x-4">
                <!-- Login -->
                <a href="{{ route('login') }}" class="text-gray-900 hover:text-gray-700 text-sm font-medium">
                    Login
                </a>

                <!-- User Icon -->
                <div class="relative">
                    <img class="h-8 w-8 rounded-full" src="{{ asset('images/user-icon.png') }}" alt="User Icon">
                </div>
            </div>
        </div>
    </div>
</nav>
