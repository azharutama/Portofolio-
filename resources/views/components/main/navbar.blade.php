<nav id="navbar" class="fixed top-4 left-1/2 transform -translate-x-1/2 z-50 text-white bg-transparent px-6 py-4 rounded-full w-[45%] max-w-screen-lg transition-all duration-300">
  <div class="flex items-center justify-between w-full">
    <!-- Hamburger Menu (Kiri) -->
    <button id="menu-btn" class="md:hidden text-white hover:text-gray-300">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
      </svg>
    </button>

    <!-- Menu Tengah (Desktop) -->
    <div class="hidden md:flex space-x-10 mx-auto">
      <a href="#home" class="nav-link font-bold hover:text-blue-400 transition">Home</a>
      <a href="#about" class="nav-link font-bold hover:text-blue-400 transition">About</a>
      <a href="#education" class="nav-link font-bold hover:text-blue-400 transition">Education</a>
      <a href="#skill" class="nav-link font-bold hover:text-blue-400 transition">Skill</a>
      <a href="#project" class="nav-link font-bold hover:text-blue-400 transition">Project</a>
      <a href="#achievement" class="nav-link font-bold hover:text-blue-400 transition">Achievement</a>
    </div>

    <!-- Spacer kanan agar rata -->
    <div class="w-7 md:hidden"></div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="hidden md:hidden absolute top-full left-0 w-full bg-[#00111c]/80 backdrop-blur-md shadow rounded-b-xl transition-all">
    <a href="#home" class="block py-3 px-6 text-white hover:bg-white/10">Home</a>
    <a href="#about" class="block py-3 px-6 text-white hover:bg-white/10">About</a>
    <a href="#education" class="block py-3 px-6 text-white hover:bg-white/10">Education</a>
    <a href="#skill" class="block py-3 px-6 text-white hover:bg-white/10">Skill</a>
    <a href="#project" class="block py-3 px-6 text-white hover:bg-white/10">Project</a>
    <a href="#achievement" class="block py-3 px-6 text-white hover:bg-white/10">Achievement</a>
  </div>
</nav>
