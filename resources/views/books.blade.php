@extends('layouts.app')
@section('title', 'Recherche documentaire')
<div class="flex flex-col justify-center min-h-screen py-12 bg-gray-50 sm:px-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-md">
        <h2 class="mt-6 text-3xl font-extrabold text-center text-gray-900 leading-9">
            Recherche documentaire
        </h2>
    </div>
    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            <form wire:submit.prevent="authenticate">
                <div>
                    <label for="category" class="block text-sm font-medium text-gray-700 leading-5">
                        Catégorie
                    </label>
                    <select
                        id="categories"
                        class="mt-1 rounded-md shadow-sm appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                        @foreach($categories as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-6">
                    <label for="password" class="block text-sm font-medium text-gray-700 leading-5">
                        Livres
                    </label>
                    <div id="books" class="mt-1 rounded-md shadow-sm appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>

    const headers = {
        'X-CSRF-TOKEN': '{{ csrf_token() }}',
        'Content-Type': 'application/json',
        'Accept': 'application/json',
        'X-Requested-With': 'XMLHttpRequest'
    }

    const getBooks = async (id) => {
        const response = await fetch('/getbooks/' + id, {
            method: 'GET',
            headers: headers
        });

        const data = await response.json();

        if (response.ok) {
            document.getElementById('books').innerHTML = data.html
        } else {
            alert('Il y a une erreur !');
        }
    }

    document.getElementById('categories').addEventListener('change', e => getBooks(e.target.value));

    getBooks(document.getElementById('categories').value);

</script>
