<x-main.layout>
    <x-main.navbar></x-main.navbar>

    <section class="dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full bg-transparent border-2 rounded-lg shadow  md:mt-0 sm:max-w-md xl:p-0 border-white">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight  md:text-2xl dark:text-white">
                        Login
                    </h1>
                    <form class="space-y-4 md:space-y-6" method="POST" action="/login">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium  dark:text-white">Email</label>
                            <input type="email" name="email" id="email" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-white dark:placeholder-white dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@gmail.com" required>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium  dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="enter your password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                        </div>
                      
                        <button type="submit" class="w-full inline-block items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center  focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900  hover:border text-white bg-transparent border border-white rounded-lg shadow-lg hover:bg-gray-200 hover:text-black transition-all">
                            Login
                       </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-main.layout>
