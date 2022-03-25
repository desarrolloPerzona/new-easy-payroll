<x-app-tenant>
    <div class="container mx-auto">

        <x-utilities.header-section title="Businesses" classes="mb-3" maxSize=""/>

        <x-utilities.create-button route="business.create" classes="" title="New business"/>

        {{--BUSINESS HOLDER--}}
        <div class="card bg-white dark:bg-gray-600 dark:text-white shadow-sm rounded p-4  my-2 mx-auto">
            @foreach($businesses as $business)
                <div class="mb-2 bg-blueSteel text-white shadow-sm dark:bg-gray-700 rounded">
                    <table class="table my-0">
                        <tr>
                            <td class="text-white uppercase">
                                {{$business->name}}
                            </td>
                            <td class="text-white">
                                {{formatDate($business->created_at)}}
                            </td>
                            <td class="text-white">
                               @if(!$business->business_name)
                                   <span class="text-warning"> {{__('You must fill out data')}}</span>
                                @endif
                            </td>
                            <td class="flex flex-row-reverse">
                                @if($business->id === 1)
                                @else
                                    <form action="{{ route('business.destroy',$business->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('¿Desea eliminar este registro?')" class="mx-2 tool-tip" data-tippy-content="{{__('Disable Business, all your current employees will be disabled')}}" data-tippy-duration="0"><i class="fad fa-unlink text-danger"></i></button>
                                    </form>
                                @endif
                                <a href="{{route('business.edit', $business->id)}}" class="no-underline">
                                    <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer mx-2" ></i>
                                </a>
                                <a href="{{route('business.show', $business->id)}}" class="no-underline">
                                    <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer mx-2"></i>
                                </a>
                            </td>
                        </tr>
                    </table>
                </div>
            @endforeach
        </div>
    </div>

</x-app-tenant>
