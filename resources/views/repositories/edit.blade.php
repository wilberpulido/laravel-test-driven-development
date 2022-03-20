<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Repositorio
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
                <form action="{{ route('repositories.update',$repository)}}" method="POST" class="mx-w-md" >
                    @csrf
                    @method('PUT')

                    <label for="url" class="block font-medium text-sm text-gray-700">
                        URL *
                    </label>
                    <input class="form-input w-full rounded-md shadow-sm" id="url" type="text" name="url" value="{{$repository->url}}" />

                    <label for="description" class="block font-medium text-sm text-gray-700">
                        Description *
                    </label>
                    <textarea class="form-input w-full rounded-md shadow-sm" id="url" type="text" name="description">{{$repository->description}}</textarea>
                    <hr class="my-4">

                    <input type="submit" value="Editar" class="bg-blue-500 text-white font-bold py-2 px-4 rounded-md" >
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
