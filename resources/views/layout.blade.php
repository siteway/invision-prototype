<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

<nav class="fixed top-0 left-0 right-0 z-50 bg-gray-800">
    <div class="px-2 mx-auto max-w-7xl sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start">
          <div class="flex items-center shrink-0">
            <img class="w-auto h-8" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
            <a class="ml-2 text-xl text-white" href="/">Vision</a>
          </div>
        </div>
        <div class="flex items-center justify-center flex-1 sm:items-stretch sm:justify-start">
            <a class="ml-2 text-xl text-white" href="/">
                @yield('title')
            </a>
        </div>
      </div>
    </div>
  </nav>
  <div class="mt-16">
    @yield('content')
  </div>

</body>
