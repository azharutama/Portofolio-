<x-main.layout>
   
    <x-main.navbar></x-main.navbar>
  
  
    <main class="container mx-auto grid grid-cols-1 p-4 md:ml-64 h-full pt-20"> 
      
      <div class="dark:border-gray-600 h-full w-full">
     
  <section id="contact" class="pt-32 dark:bg-gray-900">
  <div class="border rounded-lg shadow-lg py-8 lg:py-16 px-4 mx-auto max-w-screen-md" data-aos="fade-up">
      <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center dark:text-white">Contact Me!!</h2>
      <p class="mb-8 lg:mb-16 font-light text-center dark:text-gray-400 sm:text-xl">Got a technical issue? Want to send feedback about a beta feature? Need details about our Business plan? Let us know.</p>
             <!-- Flash Message -->
             @if (session('success'))
             <div class="alert bg-green-500 text-white p-4 rounded-md mb-4" id="alert">
                 {{ session('success') }}
             </div>
         @endif
  
         @if (session('error'))
             <div class="alert bg-red-500 text-white p-4 rounded-md mb-4" id="alert">
                 {{ session('error') }}
             </div>
         @endif
      <form action="{{ route('contact.store') }}" method="POST" class="space-y-8">
        @csrf
          <div>
              <label for="email" class="block mb-2 text-sm font-medium dark:text-gray-300">Your email</label>
              <input type="email" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required>
          </div>
          <div>
              <label for="subject" class="block mb-2 text-sm font-medium dark:text-gray-300">Subject</label>
              <input type="text" id="subject" name="subject" class="text-black block p-3 w-full text-sm bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>
          </div>
          <div class="sm:col-span-2">
              <label for="message" class="block mb-2 text-sm font-medium dark:text-gray-400">Your message</label>
              <textarea id="message" name="message" rows="6" class="text-black block p-2.5 w-full text-sm bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..."></textarea>
          </div>
          <button type="submit" class="border py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-transparent sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 hover:bg-white hover:text-black">Send message</button>
      </form>
  </div>
  
  
  </section>
  
  <x-main.footer></x-main.footer>
     
  
  
    </div>
  </main>
  
  
  
  </x-main.layout>