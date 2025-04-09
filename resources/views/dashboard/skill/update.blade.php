<x-dashboard.layout>
 
    <x-dashboard.navbar></x-dashboard.navbar>

    <main class="p-4 md:ml-64 h-auto pt-20">
      <section class=" dark:bg-gray-900 ">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16 border rounded-lg border-dashed mt-36 ">
            <h2 class="mb-4 text-xl font-bold text-white dark:text-white">Add Skill</h2>
            <form action="{{ route('skills.store.edit') }}" method="post">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium  dark:text-white">Name</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type name" required="" value="{{ old('name', $skill->name) }}">
                    </div>
                  
                    <div>
                        <label for="category" class="block mb-2 text-sm font-medium dark:text-white">competention</label>
                        <select name="competention" id="competention">
                            <option value="Advance" {{ $skill->competention == 'Advance' ? 'selected' : '' }}>Advance</option>
                            <option value="Intermediate" {{ $skill->competention == 'Intermediate' ? 'selected' : '' }}>Intermediate</option>
                            <option value="Beginner" {{ $skill->competention == 'Beginner' ? 'selected' : '' }}>Beginner</option>
                        </select>
                    </div>
                   
                    <div class="sm:col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium  dark:text-white">Description</label>
                        <textarea  name="description" id="description" rows="8" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Your description here" >{{ old('description', $skill->description) }}</textarea>
                    </div>
                </div>
                <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center  focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900  hover:border text-white bg-transparent border border-white rounded-lg shadow-lg hover:bg-gray-200 hover:text-black transition-all">
                    Add
               </button>
            </form>
        </div>
      </section>
    </main>
</x-dashboard.layout>