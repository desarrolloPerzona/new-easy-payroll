<x-app-tenant>
    <div class="container mx-auto">
        <livewire:components.breadcrumb :parent="'Business'" :children="[]" :item-id="''" :icon="'fak fa-empresa-perzona mr-2'"/>
        {{--NEW BUSINESS BTN--}}
        <div class="btn-top-holder my-3">
            <a href="{{route('business.create')}}" class="btn btn-dark">
                <i class="fas fa-plus-circle"></i>
                {{ __('New business') }}
            </a>
        </div>
        {{--BUSINESS HOLDER--}}
        <div class="card bg-white dark:bg-gray-600 dark:text-white shadow-sm rounded p-4  my-2 mx-auto">
            @foreach($businesses as $business)
                <div class="mb-2 bg-blueSteel text-white shadow-sm dark:bg-gray-700 rounded">
                    <table class="table my-0">
                        <td class="text-white" style="width: 45%"><span class="uppercase">{{$business->name}}</span></td>
                        <td class="text-white" style="width: 50%">{{formatDate($business->createdAt)}}</td>
                        <td style="width: 3%">
                            <a href="{{route('business.show', $business->id)}}">
                                <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                            </a>
                        </td>
                        <td style="width: 3%"><a href="{{route('business.edit', $business->id)}}"> <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></a></td>
                        <td style="width: 3%">
                            @if($business->id === 1)
                            @else
                                <form action="{{ route('business.destroy',$business->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('¿Desea eliminar este registro?')"><i class="fas fa-trash text-danger"></i></button>
                                </form>
                            @endif
                        </td>
                    </table>
                </div>
            @endforeach
        </div>
    </div>

</x-app-tenant>



