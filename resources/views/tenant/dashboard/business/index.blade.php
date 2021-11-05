<x-app-tenant>
    <div class="container mx-auto">
        <h2 class="bg-blueSteel py-2 px-3 mb-2 rounded">
            <i class="fas  fa-building mr-2"></i>
            <span style="display: inline-flex;">{{ __('Businesses') }}</span>
        </h2>
        {{--TODO: make bread crumb component parent - child - child active urls business/create-business   --}}
        {{--<livewire:components.breadcrumb :parent="__('Business').' active'"/>--}}
        {{--<div class="bg-gradient-to-r from-gray-500 py-2 px-3 text-white">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item mb-0">{{__('Business')}}</li>
                    <li class="breadcrumb-item active">Library</li>
                    <li class="breadcrumb-item ">Data</li>
                </ol>
            </nav>
        </div>--}}
        <div class="btn-top-holder my-3">
            <a class="btn btn-dark">
                <i class="fas fa-plus-circle"></i>
                {{ __('New business') }}
            </a>
        </div>
        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto">
            <table class="table">
                <tr>
                    <th>{{__('Name')}}</th>
                    <th>{{__('Created at')}}</th>
                    <th colspan="3"></th>
                </tr>
                <tr>
                    @foreach($businesses as $business)
                        <td>{{$business->name}}</td>
                        <td>{{formatDate($business->created_at)}}</td>
                        <td>
                            <a href="{{route('business.show',$business->id)}}">
                                <i class="fad fa-eye" style="font-size: 1.2rem"></i>
                            </a>
                        </td>
                        <td><i class="fad fa-edit" style="font-size: 1.2rem"></i></td>
                        <td><i class="fad fa-trash" style="font-size: 1.2rem"></i></td>
                    @endforeach
                </tr>
            </table>
        </div>

    </div>
</x-app-tenant>

