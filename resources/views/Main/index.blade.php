<x-main.layout>
   
    <x-main.navbar></x-main.navbar>
  

    <main class="container mx-auto grid grid-cols-1 p-4 md:ml-64 h-full pt-20"> 
    
        <div class="dark:border-gray-600 h-full w-full">

        <section id="home" class=" dark:bg-gray-900">
          <div class="grid max-w-screen-xl px-4 py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
              <div class="mr-auto place-self-center lg:col-span-7">
                <h1 id="typing-title"
                class="text-4xl font-extrabold tracking-tight leading-tight md:text-5xl xl:text-6xl dark:text-white">
                <span id="text"></span><span class="cursor">|</span>
            </h1>
            <p class="text-lg font-light lg:text-l dark:text-gray-400 mt-6">
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
              <div class="hidden lg:mt-0 lg:col-span-5 lg:flex">
                 <img src="{{ asset('storage/images/man-vr-headset.png') }}" alt="mockup">

              </div>                
          </div>
      </section>

  
  <x-main.footer></x-main.footer>
     
  
  
    </div>
  </main>
  
  
  
  </x-main.layout>