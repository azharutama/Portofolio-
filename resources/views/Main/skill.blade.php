<x-main.layout>
   
    <x-main.navbar></x-main.navbar>
  
  
    <main class="container mx-auto grid grid-cols-1 p-4 md:ml-64 h-full pt-20"> 
      
      <div class="dark:border-gray-600 h-full w-full">
     
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
  

  <x-main.footer></x-main.footer>
     
  
  
    </div>
  </main>
  
  
  
  </x-main.layout>