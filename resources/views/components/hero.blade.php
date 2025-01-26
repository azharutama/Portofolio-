<section id="home" class="min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('{{ asset('storage/images/bg.png') }}');">
    <div class="container mx-auto grid max-w-screen-xl px-4 lg:gap-8 xl:gap-0 lg:grid-cols-12 items-center">
        <!-- Section Left -->
        <div class="lg:col-span-5 flex flex-col items-center lg:items-start justify-center text-center lg:text-left lg:-ml-12">
            <img class="rounded-full w-96 h-96 mb-6 shadow-lg" src="{{ asset('storage/images/me.jpg') }}" alt="Example Image">
        </div>
        <!-- Section Right -->
        <div class="lg:col-span-7 flex flex-col items-center lg:items-start text-center lg:text-left">
            <h1 class="text-4xl font-extrabold tracking-tight leading-tight md:text-5xl xl:text-6xl dark:text-white">
                Welcome to My Portfolio
            </h1>
            <p class="text-lg font-light lg:text-xl dark:text-gray-400 mt-6">
                I'm <span class="font-semibold">Muhammad Azhar Utama</span>, a <span class="font-semibold">Backend Developer</span> with extensive experience in using PHP technology, the Laravel framework, and managing databases using MySQL.
            </p>
            <p class="text-lg font-light lg:text-xl dark:text-gray-400 mt-4">
                With a strong background in programming and web application development, I focus on creating effective and scalable backend solutions for various types of projects.
            </p>
            <a href="#contact" class="mt-8 inline-block px-6 py-3 text-white bg-blue-600 rounded-lg shadow-lg hover:bg-blue-700 transition-all">
                Contact Me
            </a>
        </div>
    </div>
</section>
