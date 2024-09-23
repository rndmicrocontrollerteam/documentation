@extends('layouts.master')

@section('contents')
<div class="container mt-4">
    <h1 class="text-2xl">User Management</h1>

    <table class="min-w-full bg-white rounded-lg shadow-md">
        <thead class="bg-gray-100">
            <tr>
                <th class="py-3 px-4 text-center">Id</th>
                <th class="py-3 px-4 text-center">Name</th>
                <th class="py-3 px-4 text-center">Email</th>
                <th class="py-3 px-4 text-center">Role</th>
                <th class="py-3 px-4 text-center">Date Created</th>
                <th class="py-3 px-4 text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr class="border-b">
                <td class="py-3 px-4 text-center">{{ $user->id }}</td>
                <td class="py-3 px-4 text-center">{{ $user->name }}</td>
                <td class="py-3 px-4 text-center">{{ $user->email }}</td>
                <td class="py-3 px-4 text-center">{{ $user->user_roles_id }}</td>
                <td class="py-3 px-4 text-center">{{ $user->created_at }}</td>
                <td class="py-3 px-4 text-center">
                    <a href="{{ route('controladmin.edit', $user->id) }}" class="text-yellow-500 hover:text-yellow-700">
                        <ion-icon name="pencil" class="text-xl"></ion-icon>
                    </a>
                    <form action="{{ route('controladmin.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:text-red-700" onclick="return confirm('Are you sure?')">
                            <ion-icon name="trash" class="text-xl"></ion-icon>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <form action="{{ route('admin.logout') }}" method="POST" style="display:inline;">
        @csrf
        <button type="submit" class="px-4 py-2 bg-red-600 text-black font-semibold rounded-md hover:bg-red-700 shadow-sm">
            Logout
        </button>
    </form>

</div>
@endsection
