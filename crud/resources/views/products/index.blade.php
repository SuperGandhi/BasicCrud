@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

    <table class="table-fixed w-full">
      <thead>
          <tr class="bg-green-500 text-white">
              <th class="w-20 py-4 ...">ID</th>
              <th class="w-1/8 py-4 ...">Title</th>
              <th class="w-1/16 py-4 ...">Country</th>
              <th class="w-1/16 py-4 ...">Price</th>
              <th class="w-1/16 py-4 ...">Created</th>
              <th class="w-1/16 py-4 ...">Updated</th>
              <th class="w-28 py-4 ...">Actions</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach ($products as $row)
            
            <tr>
                <td class="py-3 px-6">{{ $row->id }}</td>
                <td class="py-3 px-6">{{ $row->title }}</td>
                <td class="p-3">{{ $row->country}}</td>
                <td class="p-3">{{ $row -> price}}</td>
                <td class="p-3 text-center">{{ $row->created_at}}</td>
                <td class="p-3 text-center">{{ $row->updated_at}}</td>
                <td class="p-3">
                    <button class="bg-red-500 text-white px-3 py-1 rounded-sm">
                        <i class="fas fa-trash"></i></button>
                        <button class="bg-green-500 text-white px-3 py-1 rounded-sm">
                            <i class="fas fa-pen"></i></button>
                        </td>
                    </tr>
                    <tr class="bg-indigo-100">
                        <td class="py-3 px-6">858</td>
                        <td class="p-3">Lorem ipsum dolor sit amet consectetur adipiscing elit mi platea proin.</td>
                        <td class="p-3 text-center">12-03-2021 12:40:43</td>
                        <td class="p-3 text-center">12-03-2021 12:40:43</td>
                        <td class="p-3">
                            <button class="bg-red-500 text-white px-3 py-1 rounded-sm">
                                <i class="fas fa-trash"></i></button>
                                <button class="bg-green-500 text-white px-3 py-1 rounded-sm">
                                    <i class="fas fa-pen"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td class="py-3 px-6">858</td>
                                <td class="p-3">Lorem ipsum dolor sit amet consectetur adipiscing elit mi platea proin.</td>
                                <td class="p-3 text-center">12-03-2021 12:40:43</td>
                                <td class="p-3 text-center">12-03-2021 12:40:43</td>
                                <td class="p-3">
                                    <button class="bg-red-500 text-white px-3 py-1 rounded-sm">
                                        <i class="fas fa-trash"></i></button>
                                        <button class="bg-green-500 text-white px-3 py-1 rounded-sm">
                                            <i class="fas fa-pen"></i></button>
                                        </td>
                                    </tr>
                                    <tr class="bg-indigo-100">
                                        <td class="py-3 px-6">858</td>
                                        <td class="p-3">Lorem ipsum dolor sit amet consectetur adipiscing elit mi platea proin.</td>
                                        <td class="p-3 text-center">12-03-2021 12:40:43</td>
                                        <td class="p-3 text-center">12-03-2021 12:40:43</td>
                                        <td class="p-3">
            <button class="bg-red-500 text-white px-3 py-1 rounded-sm">
                <i class="fas fa-trash"></i></button>
                <button class="bg-green-500 text-white px-3 py-1 rounded-sm">
                    <i class="fas fa-pen"></i></button>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endforeach
@endsection
