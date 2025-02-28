<x-dashboard.layout>
  <x-dashboard.navbar></x-dashboard.navbar>

  <main class="p-4 md:ml-64 h-full pt-20">
    
    <div class="dark:border-gray-600 h-full w-full">

      <h2 class="text-center text-xl font-bold mb-4">Contact Table</h2>
      
      <!-- Tombol ADD -->
      <div class="mb-4">
        <button class="bg-blue-500 text-white px-4 py-2 rounded">ADD</button>
      </div>
      
      <table class="w-full border-collapse border border-gray-300 dark:border-gray-600">
        <thead>
          <tr class=" dark:bg-gray-700">
            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Header 1</th>
            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Header 2</th>
            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Header 3</th>
            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Header 4</th>
            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Header 5</th>
            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Row 1 Col 1</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Row 1 Col 2</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Row 1 Col 3</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Row 1 Col 4</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Row 1 Col 5</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">
              <button class="bg-yellow-500 text-white px-3 py-1 rounded mr-2">Update</button>
              <button class="bg-red-500 text-white px-3 py-1 rounded">Delete</button>
            </td>
          </tr>
          <tr>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Row 2 Col 1</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Row 2 Col 2</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Row 2 Col 3</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Row 2 Col 4</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Row 2 Col 5</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">
              <button class="bg-yellow-500 text-white px-3 py-1 rounded mr-2">Update</button>
              <button class="bg-red-500 text-white px-3 py-1 rounded">Delete</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </main>
</x-dashboard.layout>
