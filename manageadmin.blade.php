@props(['users' => []])

<table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
  <thead class="bg-gray-50 dark:bg-neutral-700">
    <tr>
      <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Name</th>
      <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Email</th>
      <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Created At</th>
      <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">Action</th>
    </tr>
  </thead>
  <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
    @foreach($users as $user)
    <tr>
      <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800 dark:text-neutral-200">{{ $user->name }}</td>
      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{ $user->email }}</td>
      <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800 dark:text-neutral-200">{{ $user->created_at->format('Y-m-d') }}</td>
      <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
        <button type="button" class="py-1 px-2 inline-flex items-center gap-x-2 text-xs font-montserrat rounded-md bg-secondary focus:outline-none disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#edit-modal">
          Edit
        </button>
        <form action="{{ route('admin.destroy', $user->id) }}" method="POST" class="inline">
          @csrf
          @method('DELETE')
          <button type="submit" class="py-1 px-2 inline-flex items-center gap-x-2 text-xs font-montserrat rounded-md bg-danger text-white focus:outline-none disabled:opacity-50 disabled:pointer-events-none">
            Delete
          </button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
