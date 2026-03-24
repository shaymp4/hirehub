<x-layout>
    <x-slot:heading>Jobs</x-slot:heading>
    @foreach ($jobs as $job)
        <div class="bg-white shadow-md rounded-lg p-6 mb-4">
            <a href="/jobs/{{ $job['id'] }}"
            class="text-xl font-bold text-gray-800">{{ $job['title'] }}
            </a>
            <p class="text-lg font-semibold text-green-600">{{ $job['salary'] }}</p>
        </div>
    @endforeach
</x-layout>