<x-app-layout>
     <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6" x-data="{ tab: 'products' }">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <!-- TAB BUTTONS -->
            <div class="flex space-x-4 mb-6">

                <button 
                    @click="tab = 'products'" 
                    :class="tab === 'products' ? 'bg-blue-500 text-white' : 'bg-gray-200 text-black'"
                    class="px-4 py-2 rounded-lg">
                    Products
                </button>
                <button 
                    @click="tab = 'users'" 
                    :class="tab === 'users' ? 'bg-blue-500 text-white' : 'bg-gray-200 text-black'"
                    class="px-4 py-2 rounded-lg">
                    Users
                </button>

                
            </div>

            <!-- USERS TABLE -->
            <div x-show="tab === 'users'">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h3 class="text-lg font-bold mb-4">Users</h3>
                    <p class="mb-4">All Users: {{ $users->count() }} </p>

                    <table class="w-full border-collapse">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="border px-4 py-2">ID</th>
                                <th class="border px-4 py-2">Name</th>
                                <th class="border px-4 py-2">Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td class="border px-4 py-2">{{ $user->id }}</td>
                                    <td class="border px-4 py-2">{{ $user->name }}</td>
                                    <td class="border px-4 py-2">{{ $user->email }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- PRODUCTS TABLE -->
            <div x-show="tab === 'products'">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-bold">Product</h3>
                        <a href="{{ route('products.create') }}" 
                           class="bg-green-600 text-white px-4 py-2 rounded">
                           + Add Product
                        </a>
                    </div>
                    <p class="mb-4">All Product: {{ $products->count() }}</p>
                    <table class="w-full border-collapse">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="border px-4 py-2">-</th>
                                <th class="border px-4 py-2">ID</th>
                                <th class="border px-4 py-2">Name</th>
                                <th class="border px-4 py-2">Description</th>
                                <th class="border px-4 py-2">Price</th>
                                <th class="border px-4 py-2">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td class="border px-4 py-2">{{ $loop->iteration }}</td>
                                    <td class="border px-4 py-2">{{ $product->id }}</td>
                                    <td class="border px-4 py-2">{{ $product->name }}</td>
                                    <td class="border px-4 py-2">{{ $product->description }}</td>
                                    <td class="border px-4 py-2">{{ $product->price }} บาท</td>
                                    <td class="border px-4 py-2 flex space-x-2">
                                        <a href="{{ route('products.edit', $product->id) }}" 
                                           class="px-3 py-1 bg-yellow-500 text-white rounded">
                                           Edit
                                        </a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                                              onsubmit="return confirm('ต้องการลบสินค้านี้?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="px-3 py-1 bg-red-500 text-white rounded">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>
