<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg flex-row">
                <div id="products_content" class="p-4 grid gap-4">
                    @foreach( $products as $product )
                        <x-product.product-item :product="$product">
                        </x-product.product-item>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
