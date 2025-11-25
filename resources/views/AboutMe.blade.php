<x-app-layout>
     <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('About Me') }}
        </h2>
    </x-slot>

    <div class="py-6 max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-sm sm:rounded-lg p-6">

            <div class="flex items-center space-x-4">
                <img src="{{ asset('images/Me.jpg') }}" alt="Avatar" class="h-20 w-20 rounded-full object-cover">
                <div>
                    <div class="text-lg font-bold"> Danai Phapchomphoo</div>
                    <div class="text-sm text-gray-500">
                        <a href="mailto:danai.ph@ku.th" class="text-blue-600 hover:underline">danai.ph@ku.th</a>
                    </div>
                </div>
            </div>
            <div class="mt-6">
                <h4 class="font-medium mb-2">Contact</h4>
                <div class="text-sm text-gray-600 space-y-1">
                    <!--<div>Website: <a href="https://example.com" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline">example.com</a></div>-->
                    <div>GitHub: <a href="https://github.com/DanielUTD" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline">github.com/DanielUTD</a></div>
                    <div>LinkedIn: <a href="https://linkedin.com/in/danai-phapchomphoo-96529836a/" target="_blank" rel="noopener noreferrer" class="text-blue-600 hover:underline">linkedin.com/in/danai-phapchomphoo-96529836a/</a></div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>