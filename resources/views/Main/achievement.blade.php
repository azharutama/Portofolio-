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
      @foreach ($achievements as $achievement) 
      <div class="max-w-sm border border-gray-300 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700" data-aos="fade-up">
          <a href="#">
            <img class="rounded-t-lg w-full h-48 object-cover" src="{{ asset('storage/' . $achievement->image) }}" alt="{{ $achievement->name }}" />
  
          </a>
          <div class="p-5">
              <a href="#">
                  <h5 class="mb-2 text-2xl font-bold tracking-tight dark:text-white">{{$achievement->name }}</h5>
              </a>
              <p class="mb-3 font-normal dark:text-gray-400">{{$achievement->description }}</p>
            
          </div>
      </div>
      @endforeach
     
  </div>
 
  
  <x-main.footer></x-main.footer>
     
  
  
    </div>
  </main>
  
  
  
  </x-main.layout>