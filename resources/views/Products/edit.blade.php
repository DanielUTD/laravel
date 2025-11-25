
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Edit Product
        </h2>
    </x-slot>

    <div class="py-6 max-w-3xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white shadow-sm sm:rounded-lg p-6">

            @if ($errors->any())
                <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('products.update', $product->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="block font-medium text-gray-700">ชื่อสินค้า</label>
                    <input type="text" name="name" id="name"
                           value="{{ old('name', $product->name) }}"
                           class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>

                <div class="mb-4">
                    <label for="description" class="block font-medium text-gray-700">รายละเอียด</label>
                    <textarea name="description" id="description" rows="4"
                              class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('description', $product->description) }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="price" class="block font-medium text-gray-700">ราคา</label>
                    <input type="number" step="0.01" name="price" id="price"
                           value="{{ old('price', $product->price) }}"
                           class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>

                <div class="flex space-x-4">
                    <button type="submit"
                            class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                        Save
                    </button>

                    <a href="{{ route('dashboard') }}"
                       class="bg-gray-300 text-black px-4 py-2 rounded hover:bg-gray-400">
                        Cancle
                    </a>
                </div>

            </form>

        </div>
    </div>
</x-app-layout>
