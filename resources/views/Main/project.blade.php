<x-main.layout>
   
    <x-main.navbar></x-main.navbar>
  
  
    <main class="container mx-auto grid grid-cols-1 p-4 md:ml-64 h-full pt-20"> 
      
      <div class="dark:border-gray-600 h-full w-full">

  
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
 
  
  <x-main.footer></x-main.footer>
     
  
  
    </div>
  </main>
  
  
  
  </x-main.layout>