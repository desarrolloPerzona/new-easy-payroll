<div>
    <table class="table">
        <tr>
            <th> {{__('ID')}}</th>
            <th> {{__('Name')}}</th>
            <th> {{__('Permissions')}}</th>
        </tr>
        @forelse($roles as $role)
            <tr>
                <td>
                    {{ $role->id }}
                </td>
                <td>
                    {{ $role->name }}
                </td>
                <td>
                    @foreach($role->permissions as $permission)
                        <div class="badge bg-primary">{{ $permission->name }}</div>
                    @endforeach
                </td>
                <td>
                    <div class="flex justify-end">
                        @can('role_read')

                        <button class="px-2 py-1 rounded text-white bg-gray-400 hover:bg-gray-600"><i class="fas fa-eye"></i></button>

                        @endcan
                        @can('role_update')
                                <button class="px-2 py-1  mx-2 rounded text-white bg-yellow-500 hover:bg-yellow-600"><i class="fas fa-edit"></i></button>

                            @endcan
                        @can('role_delete')
                                <button class="px-2 py-1 rounded text-white bg-red-400 hover:bg-red-600"
                                        wire:click.prevent="destroy({{ $role->id}})"
                                        onclick="confirm('Are you sure?') || event.stopImmediatePropagation()"><i class="fas fa-trash"></i>
                                </button>
                        @endcan
                    </div>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="10">No entries found.</td>
            </tr>
        @endforelse

    </table>

</div>
