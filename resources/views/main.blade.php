<x-layout>
   
    <x-navbar></x-navbar>

    <section id="home" class="min-h-screen flex items-center justify-center text-center relative bg-cover bg-center"
    style="background-image:url('{{ asset('storage/images/nice-snow.png') }}');">

    <!-- Overlay untuk transparansi -->
    <div class="absolute inset-0 bg-black bg-opacity-50 dark:bg-opacity-70"></div>

    <div class="container mx-auto flex flex-col items-center justify-center max-w-screen-xl px-4 relative z-10">
        <h1 id="typing-title"
            class="text-4xl font-extrabold tracking-tight leading-tight md:text-5xl xl:text-6xl dark:text-white">
            <span id="text"></span><span class="cursor">|</span>
        </h1>
        <p class="text-lg font-light lg:text-xl dark:text-gray-400 mt-6">
            I'm <span class="font-semibold">Muhammad Azhar Utama</span>, a <span class="font-semibold">Backend Developer</span> with extensive experience in PHP, the Laravel framework, and MySQL database management.
        </p>
        <p class="text-lg font-light lg:text-xl dark:text-gray-400 mt-4">
            With a strong background in programming and web application development, I specialize in crafting efficient and scalable backend solutions for diverse projects.
        </p>
        <a href="#contact"
            class="mt-8 inline-block px-6 py-3 text-white bg-transparent border border-white rounded-lg shadow-lg hover:bg-gray-200 hover:text-black transition-all">
            Contact Me
        </a>
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

 {{-- skill section --}}

      <section id="skill" class="dark:bg-gray-900 min-h-screen pt-14">
    <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 shadow-lg ps-24 pr-24">
        <div class="max-w-screen-md mb-8 lg:mb-16 text-center mx-auto">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold dark:text-white">Skills</h2>
        </div>
        <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
            @foreach($skills as $skill)
                <div class="border border-gray-300 p-6 rounded-lg text-center" data-aos="flip-left">
                    <h3 class="mb-2 text-xl font-bold dark:text-white">{{ $skill->name }}</h3>
                    <h4 class="mb-2 text-xl font-bold dark:text-white">{{ $skill->competention }}</h4>
                    <p class="dark:text-gray-400">{{ $skill->description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section id="project" class="dark:bg-gray-800 min-h-screen pt-20">
  <!-- Title Section -->
  <div class="max-w-screen-md w-full mx-auto text-center mb-6">
      <h2 class="text-4xl tracking-tight font-extrabold dark:text-white">Project</h2>
  </div>
  
  <!-- Cards Section -->
  <div class="mx-auto flex flex-wrap justify-center gap-12">
      @foreach ($projects as $project )
      <div class="max-w-sm border border-gray-300 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" data-aos="fade-up">
          <a href="#">
            <img class="rounded-t-lg w-full h-48 object-cover" src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->name }}" />

          </a>
          <div class="p-5">
              <a href="#">
                  <h5 class="mb-2 text-2xl font-bold tracking-tight dark:text-white">{{ $project->name }}</h5>
              </a>
              <p class="mb-3 font-normal dark:text-gray-400">{{ $project->description }}</p>
              <p class="mb-3 font-normal dark:text-gray-400">{{ $project->technologies }}</p>
              <a href="{{ $project->url }}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gradient-to-br from-[#4B79A1] to-[#283E51] rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  VIEW website
                  <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                  </svg>
              </a>
              <a href="{{ $project->github}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gradient-to-br from-[#4B79A1] to-[#283E51] rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                  VIEW ON github
                  <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                  </svg>
              </a>
          </div>
      </div>
      @endforeach
     
  </div>
</section>
<section id="contact" class="pt-32 dark:bg-gray-900">
  <div class="border rounded-lg shadow-lg py-8 lg:py-16 px-4 mx-auto max-w-screen-md" data-aos="fade-up">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center dark:text-white">Contact Me!!</h2>
      <p class="mb-8 lg:mb-16 font-light text-center dark:text-gray-400 sm:text-xl">Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>
      <form action="" method="POST" class="space-y-8">
        @csrf
          <div>
              <label for="email" class="block mb-2 text-sm font-medium dark:text-gray-300">Your email</label>
              <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required>
          </div>
          <div>
              <label for="subject" class="block mb-2 text-sm font-medium dark:text-gray-300">Subject</label>
              <input type="text" id="subject" class="text-black block p-3 w-full text-sm bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>
          </div>
          <div class="sm:col-span-2">
              <label for="message" class="block mb-2 text-sm font-medium dark:text-gray-400">Your message</label>
              <textarea id="message" rows="6" class="text-black block p-2.5 w-full text-sm bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..."></textarea>
          </div>
          <button type="submit" class="border py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-transparent sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 hover:bg-white hover:text-black">Send message</button>
      </form>
  </div>

  
</section>

        
<footer class="bg-gradient-to-br from-[#1e194e] to-[#000000] text-white rounded-lg shadow sm:flex sm:items-center sm:justify-between p-4 sm:p-6 xl:p-8 antialiased mt-32 mb-8">
  <p class="mb-4 text-sm text-center text-white dark:text-gray-400 sm:mb-0">
      &copy; 2019-2022 <a href="https://flowbite.com/" class="hover:underline" target="_blank">Flowbite.com</a>. All rights reserved.
  </p>
  <div class="flex justify-center items-center space-x-1">
    <a href="#" data-tooltip-target="tooltip-facebook" class="inline-flex justify-center p-2 text-white rounded-lg cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600">
        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
            <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
        </svg>
        <span class="sr-only">Facebook</span>
    </a>
    <div id="tooltip-facebook" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
        Like us on Facebook
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>
    <a href="#" data-tooltip-target="tooltip-twitter" class="inline-flex justify-center p-2 text-white  rounded-lg cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600">
        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path fill="currentColor" d="M12.186 8.672 18.743.947h-2.927l-5.005 5.9-4.44-5.9H0l7.434 9.876-6.986 8.23h2.927l5.434-6.4 4.82 6.4H20L12.186 8.672Zm-2.267 2.671L8.544 9.515 3.2 2.42h2.2l4.312 5.719 1.375 1.828 5.731 7.613h-2.2l-4.699-6.237Z"/>
        </svg>
        <span class="sr-only">Twitter</span>
    </a>
    <div id="tooltip-twitter" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
        Follow us on Twitter
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>
    <a href="#" data-tooltip-target="tooltip-github" class="inline-flex justify-center p-2 text-white  rounded-lg cursor-pointer dark:text-gray-400 dark:hover:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-600">
        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
        </svg>
        <span class="sr-only">Github</span>
    </a>
    <div id="tooltip-github" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
        Star us on GitHub
        <div class="tooltip-arrow" data-popper-arrow></div>
    </div>
  
</div>
</footer>
      </main>

 


</x-layout>