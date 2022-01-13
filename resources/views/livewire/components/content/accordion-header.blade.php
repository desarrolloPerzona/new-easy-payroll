<div>
    <table class="table">
        <td class="text-white" style="width: 45%"><span class="uppercase">{{$name}}</span></td>
        <td class="text-white" style="width: 50%">{{formatDate($createdAt)}}</td>
        <td style="width: 3%">
            <button type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{$iteration}}" aria-expanded="false" aria-controls="collapse-{{$iteration}}">
                <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
            </button>
        </td>
        <td style="width: 3%"><a href="{{route($route,$modelId)}}"> <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></a></td>
        <td style="width: 3%">
            @if($modelId === 1)
            @else
                <form action="{{ route($route,$modelId) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('¿Desea eliminar este registro?')"><i class="fas fa-trash text-danger"></i></button>
                </form>
            @endif
        </td>
    </table>
</div>
