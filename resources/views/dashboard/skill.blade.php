<x-dashboard.layout>
  <x-dashboard.navbar></x-dashboard.navbar>

  <main class="p-4 md:ml-64 h-full pt-20">
    
    <div class="dark:border-gray-600 h-full w-full">
      <h2 class="text-center text-xl font-bold mb-4">Skill Table</h2>
      
      <!-- Tombol ADD -->
      <div class="mb-4">
        <a href="{{ route('skills.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">ADD</a>
      </div>
      
      <table class="w-full border-collapse border border-gray-300 dark:border-gray-600">
        <thead>
          <tr class="dark:bg-gray-700">
            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">id</th>
            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">name</th>
            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">competention</th>
            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">description</th>
            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($skills as $skill )
          <tr>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">{{ $skill->id }}</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">{{ $skill->name }}</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">{{ $skill->competention }}</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">{{ $skill->description }}</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">
              <a href="{{ route('skills.edit', $skill->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded mr-2">Update</a>
              <a href="{{ route('skills.destroy', $skill->id) }}" class="bg-red-500 text-white px-3 py-1 rounded" onclick="return confirm('Are you sure?');">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </main>
</x-dashboard.layout>