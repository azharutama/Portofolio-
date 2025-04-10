<x-dashboard.layout>
  <x-dashboard.navbar></x-dashboard.navbar>

  <main class="p-4 md:ml-64 h-full pt-20">
    
    <div class="dark:border-gray-600 h-full w-full">
      <h2 class="text-center text-xl font-bold mb-4">Achievement Table</h2>
      
      <!-- Tombol ADD -->
      <div class="mb-4">
        <a href="{{ route('achievement.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">ADD</a>
      </div>
      
      <table class="w-full border-collapse border border-gray-300 dark:border-gray-600">
        <thead>
          <tr class="dark:bg-gray-700">
            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">id</th>
            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">name</th>
            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">image</th>
            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">description</th>
            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($achievement as $achievement )
          <tr>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">{{ $achievement->id }}</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">{{ $achievement->name }}</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">{{ $achievement->image }}</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">{{ $achievement->description }}</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">
              <a href="{{ route('achievement.edit', $achievement->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded mr-2">Update</a>
              <a href="{{ route('achievement.destroy', $achievement->id) }}" class="bg-red-500 text-white px-3 py-1 rounded" onclick="return confirm('Are you sure?');">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </main>
</x-dashboard.layout>