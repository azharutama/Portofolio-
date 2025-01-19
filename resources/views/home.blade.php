<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css','resources/js/app.js','resources/css/style.css'])
</head>
<body>
  <nav id="navbar" class="fixed w-full z-50 bg-white text-gray-900 shadow-sm transition duration-300">
    <div class="container mx-auto flex flex-wrap items-center justify-between p-4">
      <!-- Logo -->
      <div class="hidden md:flex space-x-8">
<h2>Portofolio</h2>
      </div>
      <!-- Navigation Links -->
      <div class="hidden md:flex space-x-8">
        <a href="/" class="nav-link block py-2 px-3 rounded hover:bg-gray-100 transition">Home</a>
        <a href="#about" class="nav-link block py-2 px-3 rounded hover:bg-gray-100 transition">About</a>
        <a href="#skill" class="nav-link block py-2 px-3 rounded hover:bg-gray-100 transition">Services</a>
      </div>
      <!-- Mobile Menu Button -->
      <button id="menu-btn" class="block md:hidden text-gray-500 hover:text-gray-900 focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
        </svg>
      </button>
      <!-- Mobile Menu -->
      <div id="mobile-menu" class="hidden md:hidden absolute top-16 left-0 w-full bg-white shadow-md">
        <a href="#/" class="block py-2 px-4 text-gray-900 hover:bg-gray-100">Home</a>
        <a href="#About" class="block py-2 px-4 text-gray-900 hover:bg-gray-100">About</a>
        <a href="#skill" class="block py-2 px-4 text-gray-900 hover:bg-gray-100">Services</a>
      </div>
    </div>
  </nav>

  <section class="bg-white dark:bg-gray-900 min-h-screen flex items-center" id="/">
    <div class="container mx-auto grid max-w-screen-xl px-4 lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
      <div class="lg:mt-0 lg:col-span-5 lg:flex">
        <img class="rounded-full w-96 h-96" src="{{ asset('storage/images/me.jpg') }}" alt="Example Image">
      </div>
      <div class="mr-auto place-self-center lg:col-span-7">
        <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white text-center">Muhammad Azhar Utama</h1>
        <p class="max-w-2xl mb-6 font-light text-gray-500 lg:mb-8 md:text-lg lg:text-xl dark:text-gray-400 text-center">Backend Developer</p>
      </div>
    </div>
  </section>

  <section id="about" class="bg-gray-100 dark:bg-gray-800 min-h-screen flex items-center" data-aos="fade-up">
    <div class="container mx-auto grid grid-cols-1 gap-8 px-4">
      <div class="space-y-6" data-aos="fade-right">
        <h2 class="text-3xl font-bold dark:text-white">Tentang Saya</h2>
        <p class="text-gray-600 dark:text-gray-400">
          Saya Muhammad Azhar Utama, seorang pengembang backend dengan pengalaman dalam PHP, Laravel, dan database.
          Berkomitmen untuk memberikan solusi teknologi yang efisien dan kreatif.
        </p>
      </div>
    </div>
  </section>

  <section id="skill" class="bg-white dark:bg-gray-900 min-h-screen flex items-center">
    <div class="container mx-auto px-4 space-y-8">
      <h2 class="text-3xl font-bold text-center dark:text-white">Keahlian Saya</h2>
      <div class="space-y-6">
        <div>
          <label class="text-gray-600 dark:text-gray-400">Backend Development</label>
          <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
            <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 85%">85%</div>
          </div>
        </div>
        <div>
          <label class="text-gray-600 dark:text-gray-400">Database Management</label>
          <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
            <div class="bg-green-600 text-xs font-medium text-green-100 text-center p-0.5 leading-none rounded-full" style="width: 75%">75%</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="project" class="bg-gray-100 dark:bg-gray-800 min-h-screen flex items-center">
    <div class="container mx-auto grid gap-4">
      <div>
        <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/featured/image.jpg" alt="">
      </div>
      <div class="grid grid-cols-5 gap-4">
        <div>
          <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
        </div>
        <div>
          <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
        </div>
        <div>
          <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
        </div>
        <div>
          <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
        </div>
        <div>
          <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
        </div>
      </div>
    </div>
  </section>

  <footer class="bg-gray-900 text-white py-6">
    <div class="container mx-auto px-4 text-center">
      <p>© 2025 Muhammad Azhar Utama. Semua Hak Dilindungi.</p>
      <div class="flex justify-center space-x-4 mt-4">
        <a href="#" class="text-blue-400 hover:text-blue-600">LinkedIn</a>
        <a href="#" class="text-blue-400 hover:text-blue-600">GitHub</a>
      </div>
    </div>
  </footer>
</body>
</html>
