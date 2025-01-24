<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portofolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css','resources/js/app.js','resources/css/style.css'])
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
</head>


<body class="bg-gradient-to-br from-[#000000] to-[#070335] to-[#04041c] text-white ">

    
    <nav id="navbar" class="fixed w-[60%] z-50  text-gray-900 shadow-lg rounded-xl left-1/2 transform -translate-x-1/2 transition duration-300 mt-8">
        <div class="container mx-auto flex flex-wrap items-center justify-between p-4 ">
          <!-- Logo -->
          <div class="hidden md:flex space-x-8">
            <h1 class="font-bold text-xl">PORTOFOLIO</h1>
          </div>
          <!-- Navigation Links -->
          <div class="hidden md:flex space-x-8">
            <a href="/" class="nav-link block py-2 px-3 rounded hover:bg-gray-100 transition font-bold">Home</a>
            <a href="#about" class="nav-link block py-2 px-3 rounded hover:bg-gray-100 transition font-bold">About</a>
            <a href="#skill" class="nav-link block py-2 px-3 rounded hover:bg-gray-100 transition font-bold">Skill</a>
            <a href="#project" class="nav-link block py-2 px-3 rounded hover:bg-gray-100 transition font-bold">Project</a>
          </div>
          
          <!-- Mobile Menu Button -->
          <button id="menu-btn" class="block md:hidden text-gray-500 hover:text-gray-900 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
          </button>
          <!-- Mobile Menu -->
          <div id="mobile-menu" class="hidden md:hidden absolute top-16 left-0 w-full bg-white shadow-md rounded-lg">
            <a href="#/" class="block py-2 px-4 text-gray-900 hover:bg-gray-100">Home</a>
            <a href="#about" class="block py-2 px-4 text-gray-900 hover:bg-gray-100">About</a>
            <a href="#skill" class="block py-2 px-4 text-gray-900 hover:bg-gray-100">Skill</a>
            <a href="#project" class="block py-2 px-4 text-gray-900 hover:bg-gray-100">Project</a>
          </div>
        </div>
      </nav>
      



  <section class=" dark:bg-gray-900   dark:bg-gray-900 min-h-screen flex items-center justify-center" id="/">
    <div class="container mx-auto grid max-w-screen-xl px-4 lg:gap-8 xl:gap-0 lg:grid-cols-12 items-center">
      <!-- Section Left -->
      <div class="lg:col-span-5 flex flex-col items-center justify-center text-center">
        <img class="rounded-full w-96 h-96 mb-6" src="{{ asset('storage/images/me.jpg') }}" alt="Example Image">
        <h1 class="text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">
          Muhammad Azhar Utama
        </h1>
        <p class="text-lg font-light lg:text-xl dark:text-gray-400 mt-4">
          Backend Developer
        </p>
      </div>
      <!-- Section Right -->
      <div class="lg:col-span-7 flex justify-center items-center text-center">
        <h1 class="text-2xl font-bold dark:text-white">API GitHub</h1>
      </div>
    </div>
  </section>
  
  
  <main class="container mx-auto grid grid-cols-1 "> 
  
  <section id="about" class=" dark:bg-gray-800 min-h-screen flex items-center" data-aos="fade-up">
    <div class="container mx-auto grid grid-cols-1 lg:grid-cols-2 gap-8 px-4">
      <!-- Section Left (About) -->
      <div class="space-y-6 border border-gray-300 dark:border-gray-700 rounded-lg p-6" data-aos="fade-right">
        <h2 class="text-3xl font-bold dark:text-white text-center">About</h2>
        <p class=" dark:text-gray-400">
          Nama saya Muhammad Azhar Utama, seorang pengembang backend dengan pengalaman yang luas dalam menggunakan teknologi PHP, framework Laravel, serta manajemen basis data menggunakan MySQL. Dengan latar belakang yang kuat dalam pemrograman dan pengembangan aplikasi web, saya telah berfokus pada menciptakan solusi backend yang efektif dan scalable untuk berbagai jenis proyek.

        Saya memiliki kemampuan untuk merancang dan mengimplementasikan sistem yang efisien, mulai dari pembuatan API hingga pengelolaan database dengan integritas tinggi. Selain itu, saya memiliki komitmen untuk memastikan setiap proyek yang saya kerjakan berjalan dengan lancar dan memberikan hasil yang optimal. Saya juga selalu berusaha untuk berinovasi, menciptakan solusi yang kreatif dan sesuai dengan kebutuhan bisnis atau pengguna.

        Sebagai seorang pengembang, saya selalu berupaya untuk menguasai teknologi terbaru dan menerapkannya dalam pekerjaan sehari-hari. Dengan kemampuan komunikasi yang baik, saya dapat bekerja sama dalam tim lintas disiplin dan memastikan bahwa setiap bagian dari proyek mendapat perhatian yang diperlukan untuk mencapai kesuksesan.
                </p>
      </div>
      
      <!-- Section Right (Education) -->
      <div class="space-y-6 border border-gray-300 dark:border-gray-700 rounded-lg p-6" data-aos="fade-left">
        <h2 class="text-3xl font-bold dark:text-white text-center">Education</h2>
        <ul class="text-gray-600 dark:text-gray-400 list-disc pl-6">
          <li>
            <span class="font-semibold  dark:text-white">Pasundan University (Unpas)</span>
            <p class="text-sm">Informatics Engineering, 2022–until now</p>
          </li>
          <li>
            <span class="font-semibold  dark:text-white">SMA Negeri 1 Leuwiliang</span>
            <p class="text-sm">MIPA, 2020-2022</p>
          </li>
          
        </ul>
      </div>
    </div>
  </section>
  
  
  <section id="skill" class=" dark:bg-gray-900 min-h-screen pt-14">
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
        <div class="max-w-screen-md mb-8 lg:mb-16 text-center mx-auto">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold dark:text-white">Skill</h2>
        </div>
        <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
            <!-- Skill 1 -->
            <div class="border border-gray-300 p-6 rounded-lg text-center">
                <h3 class="mb-2 text-xl font-bold dark:text-white">Marketing</h3>
                <p class=" dark:text-gray-400">Plan it, create it, launch it. Collaborate seamlessly with all the organization and hit your marketing goals every month with our marketing plan.</p>
            </div>

            <!-- Skill 2 -->
            <div class="border border-gray-300 p-6 rounded-lg text-center">
                <h3 class="mb-2 text-xl font-bold dark:text-white">Legal</h3>
                <p class=" dark:text-gray-400">Protect your organization, devices and stay compliant with our structured workflows and custom permissions made for you.</p>
            </div>

            <!-- Skill 3 -->
            <div class="border border-gray-300 p-6 rounded-lg text-center">
                <h3 class="mb-2 text-xl font-bold dark:text-white">Business Automation</h3>
                <p class=" dark:text-gray-400">Auto-assign tasks, send Slack messages, and much more. Now power up with hundreds of new templates to help you get started.</p>
            </div>

            <!-- Skill 4 -->
            <div class="border border-gray-300 p-6 rounded-lg text-center">
                <h3 class="mb-2 text-xl font-bold dark:text-white">Finance</h3>
                <p class=" dark:text-gray-400">Audit-proof software built for critical financial operations like month-end close and quarterly budgeting.</p>
            </div>

            <!-- Skill 5 -->
            <div class="border border-gray-300 p-6 rounded-lg text-center">
                <h3 class="mb-2 text-xl font-bold dark:text-white">Enterprise Design</h3>
                <p class=" dark:text-gray-400">Craft beautiful, delightful experiences for both marketing and product with real cross-company collaboration.</p>
            </div>

            <!-- Skill 6 -->
            <div class="border border-gray-300 p-6 rounded-lg text-center">
                <h3 class="mb-2 text-xl font-bold dark:text-white">Operations</h3>
                <p class=" dark:text-gray-400">Keep your company’s lights on with customizable, iterative, and structured workflows built for all efficient teams and individual.</p>
            </div>
        </div>
    </div>
</section>


<section id="project" class=" dark:bg-gray-800 min-h-screen pt-20">
  <!-- Title Section -->
  <div class="max-w-screen-md w-full mx-auto text-center mb-6">
      <h2 class="text-4xl tracking-tight font-extrabold  dark:text-white">Project</h2>
  </div>
  
  <!-- Cards Section -->
  <div class=" mx-auto flex flex-wrap justify-center gap-6">

      <!-- Card 1 -->
      <div class="max-w-sm  border border-gray-300 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <a href="#">
              <img class="rounded-t-lg" src="{{ asset('storage/images/me.jpg') }}" alt="" />
          </a>
          <div class="p-5">
              <a href="#">
                  <h5 class="mb-2 text-2xl font-bold tracking-tight  dark:text-white">Noteworthy technology acquisitions 2021</h5>
              </a>
              <p class="mb-3 font-normal  dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
              <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white  bg-gradient-to-br from-[#4B79A1] to-[#283E51] rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  VIEW
                  <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                  </svg>
              </a>
          </div>
      </div>
      <!-- Card 1 -->
      <div class="max-w-sm  border border-gray-300 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <a href="#">
              <img class="rounded-t-lg" src="{{ asset('storage/images/me.jpg') }}" alt="" />
          </a>
          <div class="p-5">
              <a href="#">
                  <h5 class="mb-2 text-2xl font-bold tracking-tight  dark:text-white">Noteworthy technology acquisitions 2021</h5>
              </a>
              <p class="mb-3 font-normal  dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
              <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white  bg-gradient-to-br from-[#4B79A1] to-[#283E51] rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  VIEW
                  <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                  </svg>
              </a>
          </div>
      </div>
      <!-- Card 1 -->
      <div class="max-w-sm  border border-gray-300 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <a href="#">
              <img class="rounded-t-lg" src="{{ asset('storage/images/me.jpg') }}" alt="" />
          </a>
          <div class="p-5">
              <a href="#">
                  <h5 class="mb-2 text-2xl font-bold tracking-tight  dark:text-white">Noteworthy technology acquisitions 2021</h5>
              </a>
              <p class="mb-3 font-normal  dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
              <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white  bg-gradient-to-br from-[#4B79A1] to-[#283E51] rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  VIEW
                  <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                  </svg>
              </a>
          </div>
      </div>
      <!-- Card 1 -->
      <div class="max-w-sm  border border-gray-300 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <a href="#">
              <img class="rounded-t-lg" src="{{ asset('storage/images/me.jpg') }}" alt="" />
          </a>
          <div class="p-5">
              <a href="#">
                  <h5 class="mb-2 text-2xl font-bold tracking-tight  dark:text-white">Noteworthy technology acquisitions 2021</h5>
              </a>
              <p class="mb-3 font-normal  dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
              <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white  bg-gradient-to-br from-[#4B79A1] to-[#283E51] rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  VIEW
                  <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                  </svg>
              </a>
          </div>
      </div>
      <!-- Card 1 -->
      <div class="max-w-sm  border border-gray-300 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <a href="#">
              <img class="rounded-t-lg" src="{{ asset('storage/images/me.jpg') }}" alt="" />
          </a>
          <div class="p-5">
              <a href="#">
                  <h5 class="mb-2 text-2xl font-bold tracking-tight  dark:text-white">Noteworthy technology acquisitions 2021</h5>
              </a>
              <p class="mb-3 font-normal  dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
              <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white  bg-gradient-to-br from-[#4B79A1] to-[#283E51] rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  VIEW
                  <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                  </svg>
              </a>
          </div>
      </div>
 

  </div>
</section>


<section id="footer" class=" dark:bg-gray-800 flex items-center justify-center pt-32 pb-24">
    <div class="container mx-auto grid gap-4">
      
<footer class="bg-gradient-to-br from-[#1e194e] to-[#000000] text-white dark:bg-gray-900 rounded-lg shadow  py-6">
  <div class="container mx-auto grid gap-4">
  <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
      <div class="sm:flex sm:items-center sm:justify-between">
          <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
              <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
              <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">CONTACT</span>
          </a>
          <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
              <li>
                  <a href="#" class="hover:underline me-4 md:me-6">Instagram</a>
              </li>
              <li>
                  <a href="#" class="hover:underline me-4 md:me-6">Github</a>
              </li>
              <li>
                  <a href="#" class="hover:underline me-4 md:me-6">LinkedIn</a>
              </li>
              <li>
                  <a href="#" class="hover:underline">Email</a>
              </li>
          </ul>
      </div>
      <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
      <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.</span>
  </div>
  </div>
</footer>

</section>




</main>


</body>
</html>