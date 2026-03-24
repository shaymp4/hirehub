<x-layout>
    <x-slot:heading>Jobs</x-slot:heading>
    <div class="bg-white shadow-md rounded-lg p-6 mb-4">
        <h2 class="text-xl font-bold text-gray-800">{{ $job['title'] }}</h2>
        <p class="text-lg font-semibold text-green-600">{{ $job['salary'] }}</p>
        <p class="mt-4 text-gray-700">{{ $job['description'] }}</p>
    </div>

</x-layout>