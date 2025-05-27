<x-main.layout>
   
    <x-main.navbar></x-main.navbar>




<main class="container mx-auto grid grid-cols-1 "> 
        <section id="home" class="relative isolate dark:bg-gray-900 mt-10 min-h-screen flex items-center overflow-hidden" data-aos="fade-up">
        <!-- Background Blur -->
        <div class="absolute inset-0 -z-10 overflow-hidden">
            <svg class="absolute left-[50%] top-0 -translate-x-1/2 blur-3xl opacity-20 w-[72rem] h-auto" viewBox="0 0 1155 678" fill="none">
            <path fill="url(#gradient)" fill-opacity=".3"
                d="M317.114 42.235C183.961 -30.593 25.553 78.37 0 191.186v486.74h1155V87.03c-136.37-32.877-276.61-59.137-426.04-38.74-165.5 22.4-316.73 155.936-411.846 33.944Z" />
            <defs>
                <linearGradient id="gradient" x1="1155" x2="0" y1="0" y2="678" gradientUnits="userSpaceOnUse">
                <stop stop-color="#ff80b5" />
                <stop offset="1" stop-color="#9089fc" />
                </linearGradient>
            </defs>
            </svg>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 py-8 px-4 sm:px-6 lg:px-8 mx-auto gap-8">
            
            <!-- Kanan (mobile): Gambar -->
            <div class="lg:hidden flex justify-center items-center">
            <img src="{{ asset('assets/hero/hero.png') }}" alt="mockup" class="w-2/3 sm:w-1/2 animate-float">
            </div>

           <!-- Kiri: Teks -->
<div class="lg:col-span-8 flex flex-col justify-center items-center text-center lg:items-start lg:text-left">
    <h1 id="typing-title" class="text-3xl sm:text-4xl md:text-5xl xl:text-6xl font-extrabold tracking-tight leading-tight dark:text-white">
        <span id="text"></span><span class="cursor">|</span>
    </h1>
    <p class="text-base sm:text-lg font-light dark:text-gray-400 mt-6">
        I'm <span class="font-semibold">Muhammad Azhar Utama</span>, a 
        <span class="font-semibold">Backend Developer</span> with extensive experience in PHP, the Laravel framework, and MySQL database management.
    </p>
    <p class="text-base sm:text-lg font-light dark:text-gray-400 mt-4">
        With a strong background in programming and web application development, I specialize in crafting efficient and scalable backend solutions for diverse projects.
    </p>
    <a href="#contact" class="mt-8 inline-block px-6 py-3 text-white bg-transparent border border-white rounded-lg shadow-lg hover:bg-gray-200 hover:text-black transition-all w-max">
        Contact Me
    </a>
</div>


            <!-- Kanan (desktop): Gambar -->
            <div class="hidden lg:flex lg:col-span-4 justify-center items-center">
            <img src="{{ asset('assets/hero/hero.png') }}" alt="mockup" class="w-full max-w-xs xl:max-w-sm animate-float">
            </div>
            
        </div>
        </section>

        <section id="about" class="dark:bg-gray-800 min-h-screen pt-20">

        <!-- Tambahan wrapper agar efek rounded rapi -->
        <div class="mx-auto w-[90%] rounded-3xl overflow-hidden shadow-lg">
            <div class="relative isolate overflow-hidden bg-gray-900 py-24 sm:py-32 mt-20 rounded-3xl">

            <!-- Background blur effect -->
            <div class="hidden sm:absolute sm:-top-10 sm:right-1/2 sm:-z-10 sm:mr-10 sm:block sm:transform-gpu sm:blur-3xl" aria-hidden="true">
                <div class="aspect-1097/845 w-274.25 bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>

            <div class="absolute -top-52 left-1/2 -z-10 -translate-x-1/2 transform-gpu blur-3xl sm:top-[-28rem] sm:ml-16 sm:translate-x-0 sm:transform-gpu"
                aria-hidden="true">
                <div class="aspect-1097/845 w-274.25 bg-gradient-to-tr from-[#ff4694] to-[#776fff] opacity-20"
                style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>

            <!-- Content -->
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-5xl font-semibold tracking-tight text-white sm:text-7xl">Work with us</h2>
                <p class="mt-8 text-lg font-medium text-pretty text-gray-300 sm:text-xl/8">Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat.</p>
                </div>
                <div class="mx-auto mt-10 max-w-2xl lg:mx-0 lg:max-w-none">
                <div class="grid grid-cols-1 gap-x-8 gap-y-6 text-base/7 font-semibold text-white sm:grid-cols-2 md:flex lg:gap-x-10">
                    <a href="#">Open roles <span aria-hidden="true">&rarr;</span></a>
                    <a href="#">Internship program <span aria-hidden="true">&rarr;</span></a>
                    <a href="#">Our values <span aria-hidden="true">&rarr;</span></a>
                    <a href="#">Meet our leadership <span aria-hidden="true">&rarr;</span></a>
                </div>
                <dl class="mt-16 grid grid-cols-1 gap-8 sm:mt-20 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="flex flex-col-reverse gap-1">
                    <dt class="text-base/7 text-gray-300">Offices worldwide</dt>
                    <dd class="text-4xl font-semibold tracking-tight text-white">12</dd>
                    </div>
                    <div class="flex flex-col-reverse gap-1">
                    <dt class="text-base/7 text-gray-300">Full-time colleagues</dt>
                    <dd class="text-4xl font-semibold tracking-tight text-white">300+</dd>
                    </div>
                    <div class="flex flex-col-reverse gap-1">
                    <dt class="text-base/7 text-gray-300">Hours per week</dt>
                    <dd class="text-4xl font-semibold tracking-tight text-white">40</dd>
                    </div>
                    <div class="flex flex-col-reverse gap-1">
                    <dt class="text-base/7 text-gray-300">Paid time off</dt>
                    <dd class="text-4xl font-semibold tracking-tight text-white">Unlimited</dd>
                    </div>
                </dl>
                </div>
            </div>

            </div>
        </div>
        </section>


<section id="education" class="bg-transparent dark:bg-gray-900 min-h-screen pt-32">
  <div class="gap-8 items-center py-20 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 lg:px-6">

    <!-- Image -->
    <div data-aos="fade-right" class="flex justify-center">
      <img class="w-4/5 rounded-2xl shadow-lg dark:hidden animate-float mx-auto" src="{{ asset('assets/hero/education.png') }}" alt="dashboard image">
      <img class="w-4/5 hidden rounded-2xl shadow-lg dark:block animate-float mx-auto" src="{{ asset('assets/hero/education.png') }}" alt="dashboard image">
    </div>

    <!-- Text Content -->
    <div class="mt-8 md:mt-0 text-center md:text-left" data-aos="fade-left">
      <h2 class="mb-4 text-4xl sm:text-5xl tracking-tight font-extrabold dark:text-white">
        Education
      </h2>
      <p class="mb-3 text-lg dark:text-gray-300 font-medium">
        <span class="text-indigo-600 dark:text-indigo-400 font-semibold">Pasundan University (Unpas)</span>
      </p>
      <p class="text-base sm:text-lg dark:text-gray-400">
        <span class="font-semibold">Major:</span> Informatics Engineering
      </p>
      <p class="mt-2 text-base sm:text-lg dark:text-gray-400">
        <span class="font-semibold">Years:</span> 2022 – Present
      </p>

      <!-- Optional Tagline -->
      <p class="mt-6 text-md text-gray-300 italic dark:text-gray-500">
        “Turning code into solutions through education and passion for technology.”
      </p>
    </div>

  </div>
</section>



        <section id="skill" class="relative isolate dark:bg-gray-900 min-h-screen pt-40 overflow-hidden">
            <!-- Background Blur -->
            <div class="absolute inset-0 -z-10 overflow-hidden">
                <svg class="absolute left-[50%] top-0 -translate-x-1/2 blur-3xl opacity-20 w-[72rem] h-auto" viewBox="0 0 1155 678" fill="none">
                    <path fill="url(#grad-skill)" fill-opacity=".3"
                        d="M317.114 42.235C183.961 -30.593 25.553 78.37 0 191.186v486.74h1155V87.03c-136.37-32.877-276.61-59.137-426.04-38.74-165.5 22.4-316.73 155.936-411.846 33.944Z" />
                    <defs>
                        <linearGradient id="grad-skill" x1="1155" x2="0" y1="0" y2="678" gradientUnits="userSpaceOnUse">
                            <stop stop-color="#6EE7B7" />
                            <stop offset="1" stop-color="#3B82F6" />
                        </linearGradient>
                    </defs>
                </svg>
            </div>

            <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6 ps-6 pe-6 md:ps-24 md:pe-24">
                <div class="max-w-screen-md mb-8 lg:mb-16 text-center mx-auto">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500 dark:text-white">Skills</h2>
                </div>

                <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                    @foreach($skills as $skill)
                    <div class="p-6 rounded-xl text-center shadow-lg border border-gray-700 bg-gray-800 hover:shadow-xl transition duration-300 transform hover:-translate-y-1 hover:border-cyan-400" data-aos="flip-left">
                        <h3 class="mb-2 text-xl font-bold text-white">{{ $skill->name }}</h3>
                        <h4 class="mb-2 text-lg font-semibold text-cyan-400">{{ $skill->competention }}</h4>
                        <p class="text-gray-400">{{ $skill->description }}</p>
                    </div>
                    @endforeach
                </div>

                @if ($skills->hasPages())
                <div class="mt-10 flex justify-center">
                    <div class="flex space-x-3">
                        {{-- Tombol Previous --}}
                        @if ($skills->onFirstPage())
                        <span class="px-4 h-10 flex items-center text-sm font-medium text-gray-500 bg-gray-700 rounded-lg cursor-not-allowed">
                            <svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 5H1m0 0 4 4M1 5l4-4" />
                            </svg>
                            Previous
                        </span>
                        @else
                        <a href="{{ $skills->previousPageUrl() }}#skill"
                            class="px-4 h-10 flex items-center text-sm font-medium text-white bg-gray-800 border border-gray-600 rounded-lg hover:bg-cyan-500 hover:text-black transition">
                            <svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 5H1m0 0 4 4M1 5l4-4" />
                            </svg>
                            Previous
                        </a>
                        @endif

                        {{-- Tombol Next --}}
                        @if ($skills->hasMorePages())
                        <a href="{{ $skills->nextPageUrl() }}#skill"
                            class="px-4 h-10 flex items-center text-sm font-medium text-white bg-gray-800 border border-gray-600 rounded-lg hover:bg-cyan-500 hover:text-black transition">
                            Next
                            <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                        @else
                        <span class="px-4 h-10 flex items-center text-sm font-medium text-gray-500 bg-gray-700 rounded-lg cursor-not-allowed">
                            Next
                            <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </span>
                        @endif
                    </div>
                </div>
                @endif
            </div>
        </section>

        <section id="project" class="dark:bg-gray-900 min-h-screen mt-20 pt-40">
        <!-- Title Section -->
        <div class="max-w-screen-md w-full mx-auto text-center mb-8">
            <h2 class="text-4xl tracking-tight font-extrabold dark:text-white">Project</h2>
        </div>
        
        <!-- Cards Section -->
        <div class="mx-auto flex flex-wrap justify-center gap-12 px-4 sm:px-6 lg:px-8">
            @foreach ($projects as $project)
            <div 
                class="relative max-w-sm rounded-lg shadow-lg dark:bg-gray-800 overflow-hidden border border-transparent
                    transform transition duration-300 hover:shadow-2xl hover:-translate-y-3 hover:border-cyan-400
                    hover:ring-1 hover:ring-cyan-400"
                data-aos="fade-up"
                data-aos-delay="{{ $loop->index * 100 }}"
            >
                <a href="{{ $project->url }}" target="_blank" rel="noopener noreferrer" class="block relative group overflow-hidden rounded-t-lg">
                    <img 
                        class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110 group-hover:brightness-75" 
                        src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->name }}" 
                    />
                    <!-- Overlay title -->
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 via-transparent to-transparent p-4">
                        <h3 class="text-white text-lg font-semibold drop-shadow-md">{{ $project->name }}</h3>
                    </div>
                </a>

                <div class="p-5 space-y-3">
                    <p class="text-gray-300">{{ Str::limit($project->description, 100) }}</p>
                    <p class="text-cyan-400 font-mono text-sm">{{ $project->technologies }}</p>

                    <div class="flex gap-4 mt-5">
                        <a href="{{ $project->url }}" target="_blank" rel="noopener noreferrer" 
                        class="flex-1 inline-flex justify-center items-center px-4 py-2 text-sm font-semibold text-white 
                                bg-gradient-to-br from-cyan-500 to-blue-700 rounded-lg shadow-md
                                hover:scale-105 hover:from-cyan-600 hover:to-blue-800
                                transition-transform duration-300 focus:outline-none focus:ring-4 focus:ring-cyan-400"
                        >
                            VIEW
                            <svg class="w-4 h-4 ms-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </a>
                        <a href="{{ $project->github }}" target="_blank" rel="noopener noreferrer" 
                        class="flex-1 inline-flex justify-center items-center px-4 py-2 text-sm font-semibold text-white 
                                bg-gradient-to-br from-gray-700 to-gray-900 rounded-lg shadow-md
                                hover:scale-105 hover:from-gray-800 hover:to-black
                                transition-transform duration-300 focus:outline-none focus:ring-4 focus:ring-gray-700"
                        >
                            GITHUB
                            <svg class="w-4 h-4 ms-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        @if ($projects->hasPages())
                <div class="mt-10 flex justify-center">
                    <div class="flex space-x-3">
                        {{-- Tombol Previous --}}
                        @if ($projects->onFirstPage())
                        <span class="px-4 h-10 flex items-center text-sm font-medium text-gray-500 bg-gray-700 rounded-lg cursor-not-allowed">
                            <svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 5H1m0 0 4 4M1 5l4-4" />
                            </svg>
                            Previous
                        </span>
                        @else
                        <a href="{{ $projects->previousPageUrl() }}#skill"
                            class="px-4 h-10 flex items-center text-sm font-medium text-white bg-gray-800 border border-gray-600 rounded-lg hover:bg-cyan-500 hover:text-black transition">
                            <svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 5H1m0 0 4 4M1 5l4-4" />
                            </svg>
                            Previous
                        </a>
                        @endif

                        {{-- Tombol Next --}}
                        @if ($projects->hasMorePages())
                        <a href="{{ $skills->nextPageUrl() }}#skill"
                            class="px-4 h-10 flex items-center text-sm font-medium text-white bg-gray-800 border border-gray-600 rounded-lg hover:bg-cyan-500 hover:text-black transition">
                            Next
                            <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </a>
                        @else
                        <span class="px-4 h-10 flex items-center text-sm font-medium text-gray-500 bg-gray-700 rounded-lg cursor-not-allowed">
                            Next
                            <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M1 5h12m0 0L9 1m4 4L9 9" />
                            </svg>
                        </span>
                        @endif
                    </div>
                </div>
                @endif
            </div>
        </section>

        <section id="achievement" class="dark:bg-gray-900 min-h-screen mt-20 pt-40">
        <!-- Title Section -->
        <div class="max-w-screen-md w-full mx-auto text-center mb-8">
            <h2 class="text-4xl tracking-tight font-extrabold dark:text-white">Achievement</h2>
        </div>
        
        <!-- Cards Section -->
        <div class="mx-auto flex flex-wrap justify-center gap-12 px-4 sm:px-6 lg:px-8">
            @foreach ($achievements as $achievement)
            <div 
                class="relative max-w-sm rounded-lg shadow-lg dark:bg-gray-800 overflow-hidden border border-transparent
                    transform transition duration-300 hover:shadow-2xl hover:-translate-y-3 hover:border-cyan-400
                    hover:ring-1 hover:ring-cyan-400"
                data-aos="fade-up"
                data-aos-delay="{{ $loop->index * 100 }}"
            >
                <a href="#" class="block relative group overflow-hidden rounded-t-lg">
                    <img 
                        class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-110 group-hover:brightness-75" 
                        src="{{ asset('storage/' . $achievement->image) }}" alt="{{ $achievement->name }}" 
                    />
                    <!-- Overlay title -->
                    <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 via-transparent to-transparent p-4">
                        <h3 class="text-white text-lg font-semibold drop-shadow-md">{{ $achievement->name }}</h3>
                    </div>
                </a>

                <div class="p-5 space-y-3">
                    <p class="text-gray-300">{{ Str::limit($achievement->description, 120) }}</p>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination -->
        @if ($achievements->hasPages())
        <div class="mt-10 flex justify-center">
            <div class="flex space-x-3">
                {{-- Tombol Previous --}}
                @if ($achievements->onFirstPage())
                <span class="px-4 h-10 flex items-center text-sm font-medium text-gray-500 bg-gray-700 rounded-lg cursor-not-allowed">
                    <svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 5H1m0 0 4 4M1 5l4-4" />
                    </svg>
                    Previous
                </span>
                @else
                <a href="{{ $achievements->previousPageUrl() }}#achievement"
                    class="px-4 h-10 flex items-center text-sm font-medium text-white bg-gray-800 border border-gray-600 rounded-lg hover:bg-cyan-500 hover:text-black transition">
                    <svg class="w-4 h-4 mr-2" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 5H1m0 0 4 4M1 5l4-4" />
                    </svg>
                    Previous
                </a>
                @endif

                {{-- Tombol Next --}}
                @if ($achievements->hasMorePages())
                <a href="{{ $achievements->nextPageUrl() }}#achievement"
                    class="px-4 h-10 flex items-center text-sm font-medium text-white bg-gray-800 border border-gray-600 rounded-lg hover:bg-cyan-500 hover:text-black transition">
                    Next
                    <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                @else
                <span class="px-4 h-10 flex items-center text-sm font-medium text-gray-500 bg-gray-700 rounded-lg cursor-not-allowed">
                    Next
                    <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </span>
                @endif
            </div>
        </div>
        @endif

        </section>



        <section class="min-h-screen relative isolate overflow-hidden px-6 py-24 sm:py-32 lg:px-8 bg-transparent dark:bg-gray-900">
        <!-- Background blur shape -->
        <div class="absolute inset-0 -z-10 overflow-hidden">
            <svg class="absolute left-[50%] top-0 -translate-x-1/2 blur-3xl opacity-20 w-[72rem] h-auto" viewBox="0 0 1155 678" fill="none">
            <path fill="url(#gradient)" fill-opacity=".3"
                d="M317.114 42.235C183.961 -30.593 25.553 78.37 0 191.186v486.74h1155V87.03c-136.37-32.877-276.61-59.137-426.04-38.74-165.5 22.4-316.73 155.936-411.846 33.944Z" />
            <defs>
                <linearGradient id="gradient" x1="1155" x2="0" y1="0" y2="678" gradientUnits="userSpaceOnUse">
                <stop stop-color="#ff80b5" />
                <stop offset="1" stop-color="#9089fc" />
                </linearGradient>
            </defs>
            </svg>
        </div>

        <!-- Quote Content -->
        <div class="mx-auto max-w-2xl lg:max-w-4xl text-center">
            <figure class="mt-10">
            <blockquote class="text-2xl sm:text-3xl font-semibold leading-relaxed text-white">
                <p>"Success is not about being the best. It’s about always getting better than you were yesterday."</p>
            </blockquote>
            <figcaption class="mt-8">
                <div class="flex justify-center items-center gap-3 text-sm text-gray-300">
                <span class="font-semibold">Muhammad Azhar Utama</span>
                <svg viewBox="0 0 2 2" width="3" height="3" aria-hidden="true" class="fill-current text-gray-300">
                    <circle cx="1" cy="1" r="1" />
                </svg>
                <span>Backend Developer</span>
                </div>
            </figcaption>
            </figure>
        </div>
        </section>


        <section id="contact" class="pt-32 dark:bg-gray-900">
        <div class="backdrop-blur-sm bg-white/5 dark:bg-gray-800/20 border border-gray-200 dark:border-gray-700 rounded-2xl shadow-lg py-10 px-6 sm:px-10 mx-auto max-w-xl" data-aos="fade-up">

            <!-- Title -->
            <h2 class="mb-4 text-3xl font-bold tracking-tight text-center  dark:text-white">
            Contact Me!!
            </h2>
            <p class="mb-8 text-center  dark:text-gray-400 text-sm sm:text-base">
            Got a technical issue? Want to send feedback or just say hi? Let me know below.
            </p>

            <!-- Form -->
            <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Email -->
            <div>
                <label for="email" class="block mb-2 text-sm font-medium  dark:text-gray-300">Your email</label>
                <input type="email" name="email" id="email" class="w-full p-3 text-sm text-gray-900 bg-white border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-indigo-500" placeholder="you@example.com" required>
            </div>

            <!-- Subject -->
            <div>
                <label for="subject" class="block mb-2 text-sm font-medium  dark:text-gray-300">Subject</label>
                <input type="text" name="subject" id="subject" class="w-full p-3 text-sm text-gray-900 bg-white border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-indigo-500" placeholder="Let me know how I can help" required>
            </div>

            <!-- Message -->
            <div>
                <label for="message" class="block mb-2 text-sm font-medium  dark:text-gray-300">Message</label>
                <textarea id="message" name="message" rows="5" class="w-full p-3 text-sm text-gray-900 bg-white border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:focus:ring-indigo-500" placeholder="Write your message here..."></textarea>
            </div>

            <!-- Button -->
            <div class="text-center">
                <button type="submit" class="bg-transparent border border-white text-white hover:bg-white hover:text-black font-medium py-2.5 px-6 rounded-lg transition duration-300 focus:outline-none focus:ring-4 focus:ring-indigo-300 dark:focus:ring-indigo-800">
                Send Message
                </button>
            </div>
            </form>
        </div>
        </section>
<footer class="relative bg-gradient-to-r from-slate-900 via-blue-900 to-slate-800 text-blue-300 rounded-t-lg shadow-lg p-12 pb-16 mt-32 mb-0 antialiased min-h-[200px]">
  <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-6">
    <p class="text-sm text-center md:text-left opacity-90">
      &copy; 2019-2025 
      <a href="https://flowbite.com/" target="_blank" rel="noopener noreferrer" class="underline hover:text-yellow-400 transition">
        Flowbite.com
      </a>. All rights reserved.
    </p>

    <div class="flex space-x-6">
      <!-- Facebook -->
      <a href="#" aria-label="Facebook" class="group relative flex items-center justify-center w-12 h-12 rounded-full bg-blue-800 hover:bg-blue-700 transition shadow-lg hover:shadow-xl transform hover:-translate-y-1">
        <svg class="w-6 h-6 text-blue-300 group-hover:text-yellow-400 transition" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
          <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd"/>
        </svg>
        <span class="sr-only">Facebook</span>
        <span class="absolute -top-10 bg-yellow-400 text-[#0b1120] px-2 py-1 rounded text-xs opacity-0 group-hover:opacity-100 transition">Like us on Facebook</span>
      </a>

      <!-- Twitter -->
      <a href="#" aria-label="Twitter" class="group relative flex items-center justify-center w-12 h-12 rounded-full bg-blue-800 hover:bg-blue-700 transition shadow-lg hover:shadow-xl transform hover:-translate-y-1">
        <svg class="w-6 h-6 text-blue-300 group-hover:text-yellow-400 transition" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
          <path fill="currentColor" d="M12.186 8.672 18.743.947h-2.927l-5.005 5.9-4.44-5.9H0l7.434 9.876-6.986 8.23h2.927l5.434-6.4 4.82 6.4H20L12.186 8.672Zm-2.267 2.671L8.544 9.515 3.2 2.42h2.2l4.312 5.719 1.375 1.828 5.731 7.613h-2.2l-4.699-6.237Z"/>
        </svg>
        <span class="sr-only">Twitter</span>
        <span class="absolute -top-10 bg-yellow-400 text-[#0b1120] px-2 py-1 rounded text-xs opacity-0 group-hover:opacity-100 transition">Follow us on Twitter</span>
      </a>

      <!-- Github -->
      <a href="#" aria-label="Github" class="group relative flex items-center justify-center w-12 h-12 rounded-full bg-blue-800 hover:bg-blue-700 transition shadow-lg hover:shadow-xl transform hover:-translate-y-1">
        <svg class="w-6 h-6 text-blue-300 group-hover:text-yellow-400 transition" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
          <path fill-rule="evenodd" d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z" clip-rule="evenodd"/>
        </svg>
        <span class="sr-only">Github</span>
        <span class="absolute -top-10 bg-yellow-400 text-[#0b1120] px-2 py-1 rounded text-xs opacity-0 group-hover:opacity-100 transition">Star us on GitHub</span>
      </a>
    </div>
  </div>

  <!-- Decorative circles -->
  <div aria-hidden="true" class="absolute bottom-0 left-0 w-32 h-32 bg-yellow-400 rounded-full opacity-20 blur-3xl mix-blend-multiply animate-pulse"></div>
  <div aria-hidden="true" class="absolute bottom-12 right-12 w-20 h-20 bg-yellow-300 rounded-full opacity-30 blur-2xl mix-blend-multiply animate-pulse delay-200"></div>
</footer>






    </main>

 


</x-main.layout>