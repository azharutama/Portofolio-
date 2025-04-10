<x-dashboard.layout>
  <x-dashboard.navbar></x-dashboard.navbar>

  <main class="p-4 md:ml-64 h-full pt-20">
    <div class="dark:border-gray-600 h-full w-full">
      <h2 class="text-center text-xl font-bold mb-4">Contact Table</h2>
      
      <table class="w-full border-collapse border border-gray-300 dark:border-gray-600">
        <thead>
          <tr class="dark:bg-gray-700">
            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">id</th>
            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">email</th>
            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">subject</th>
            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">message</th>
            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($contacts as $contact)
          <tr>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">{{ $contact->id }}</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">{{ $contact->email }}</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">{{ $contact->subject }}</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">{{ $contact->message }}</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">
              <a href="{{ route('contacts.destroy', $contact->id) }}" class="bg-red-500 text-white px-3 py-1 rounded" onclick="return confirm('Are you sure?');">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </main>
</x-dashboard.layout>
