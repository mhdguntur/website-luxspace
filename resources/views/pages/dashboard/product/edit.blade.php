<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Product &raquo; {{$item->name}} &raquo; Edit
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                @if($errors->any())
                <div class="mb-6" role="alert">
                    <div class="border border-t-0 border-red-700 rounded-b bg-red-100 text-red-700 px-4 py-2">
                        There's something wrong!
                    </div>
                    <br>
                    <div class="border border-t-0 border-red-700 rounded-b bg-red-100 px-4 py-3 text-red-700">
                        <p>
                            <ul>
                                @foreach($errors->all() as $errors)
                                    <li>{{ $errors }}</li>
                                @endforeach
                            </ul>
                        </p>
                    </div>
                </div>
                @endif
                <form action="{{route('dashboard.product.update',$item->id)}}" class="w-full" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT') 
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-semibold mb-4">Name</label>
                            <input type="text" placeholder="Product Name" value="{{ old('name') ?? $item->name}}" name="name" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-gray-50 focus:border-gray-300" >
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-semibold mb-4">Description</label>
                            <textarea placeholder="Description" name="description" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-gray-50 focus:border-gray-300" >{!! old('description') ?? $item->description !!}</textarea>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-semibold mb-4">Price</label>
                            <input type="number" placeholder="Price" value="{{ old('price') ?? $item->price}}" name="price" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-gray-50 focus:border-gray-300" >
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                           <button type="submit" class="bg-gray-50 hover:bg-gray-100 text-black font-semibold py-2 px-4 rounded shadow-lg">
                               Update Product
                           </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description' );
    </script>
</x-app-layout>
