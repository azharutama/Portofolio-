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


<body class="bg-gradient-to-br from-[#000000] to-[#070335] to-[#04041c] text-white font-roboto ">

    
    <nav id="navbar" class="fixed w-[60%] z-50 text-gray-900 shadow-lg rounded-xl left-1/2 transform -translate-x-1/2 transition duration-300 mt-8">
        <div class="container mx-auto flex flex-wrap justify-between p-4">
          <!-- Logo -->
          <div class="md:flex space-x-8">
            <h1 class="font-bold text-xl">PORTOFOLIO</h1>
          </div>
          <!-- Navigation Links -->
          <div class="hidden md:flex space-x-8">
            <a href="#" class="nav-link block py-2 px-3 rounded hover:bg-gray-100 transition font-bold">Home</a>
            <a href="#about" class="nav-link block py-2 px-3 rounded hover:bg-gray-100 transition font-bold">About</a>
            <a href="#skill" class="nav-link block py-2 px-3 rounded hover:bg-gray-100 transition font-bold">Skill</a>
            <a href="#project" class="nav-link block py-2 px-3 rounded hover:bg-gray-100 transition font-bold">Project</a>
          </div>
      
          <!-- Mobile Menu Button -->
          <button id="menu-btn" class="block md:hidden text-grey-100 hover:text-gray-900 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
          </button>
      
          <!-- Mobile Menu -->
          <div id="mobile-menu" class="hidden md:hidden absolute top-16 left-0 w-full shadow-md rounded-lg">
            <a href="#/" class="block py-2 px-4 text-gray-900 hover:bg-gray-100">Home</a>
            <a href="#about" class="block py-2 px-4 text-gray-900 hover:bg-gray-100">About</a>
            <a href="#skill" class="block py-2 px-4 text-gray-900 hover:bg-gray-100">Skill</a>
            <a href="#project" class="block py-2 px-4 text-gray-900 hover:bg-gray-100">Project</a>
          </div>
        </div>
      </nav>
      



  <section id="home" class=" dark:bg-gray-900   dark:bg-gray-900 min-h-screen flex items-center justify-center" id="/">
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
            <span class="font-semibold  text-white">Pasundan University (Unpas)</span>
            <p class="text-white">Informatics Engineering, 2022–until now</p>
          </li>
          <li>
            <span class="font-semibold  text-white">SMA Negeri 1 Leuwiliang</span>
            <p class="text-white">MIPA, 2020-2022</p>
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
  <div class=" mx-auto flex flex-wrap justify-center gap-12">

      <!-- Card 1 -->
      <div class="max-w-sm  border border-gray-300 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 gap-10">
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

<footer class="bg-gradient-to-br from-[#1e194e] to-[#000000] text-white rounded-lg shadow sm:flex sm:items-center sm:justify-between p-4 sm:p-6 xl:p-8 antialiased mt-32 mb-8">
    <p class="mb-4 text-sm text-center text-gray-500 dark:text-gray-400 sm:mb-0">
        &copy; 2019-2022 <a href="https://flowbite.com/" class="hover:underline" target="_blank">Flowbite.com</a>. All rights reserved.
    </p>
    <div class="flex justify-center items-center space-x-1">
      <a href="#" data-tooltip-target="tooltip-facebook" class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600">
          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
              <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
          </svg>
          <span class="sr-only">Facebook</span>
      </a>
      <div id="tooltip-facebook" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
          Like us on Facebook
          <div class="tooltip-arrow" data-popper-arrow></div>
      </div>
      <a href="#" data-tooltip-target="tooltip-twitter" class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600">
          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
              <path fill="currentColor" d="M12.186 8.672 18.743.947h-2.927l-5.005 5.9-4.44-5.9H0l7.434 9.876-6.986 8.23h2.927l5.434-6.4 4.82 6.4H20L12.186 8.672Zm-2.267 2.671L8.544 9.515 3.2 2.42h2.2l4.312 5.719 1.375 1.828 5.731 7.613h-2.2l-4.699-6.237Z"/>
          </svg>
          <span class="sr-only">Twitter</span>
      </a>
      <div id="tooltip-twitter" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
          Follow us on Twitter
          <div class="tooltip-arrow" data-popper-arrow></div>
      </div>
      <a href="#" data-tooltip-target="tooltip-github" class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600">
          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
          </svg>
          <span class="sr-only">Github</span>
      </a>
      <div id="tooltip-github" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
          Star us on GitHub
          <div class="tooltip-arrow" data-popper-arrow></div>
      </div>
      <a href="#" data-tooltip-target="tooltip-dribbble" class="inline-flex justify-center p-2 text-gray-500 rounded-lg cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600">
          <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path fill-rule="evenodd" d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z" clip-rule="evenodd"/>
          </svg>
          <span class="sr-only">Dribbble</span>
      </a>
      <div id="tooltip-dribbble" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
          Follow us on Dribbble
          <div class="tooltip-arrow" data-popper-arrow></div>
      </div>
  </div>
  </footer>




</main>


</body>
</html>