<x-app-tenant>
    <div class="container mx-auto">
        <h2 class="bg-blueSteel py-2 px-3 mb-2 rounded">
            <i class="fas  fa-building mr-2"></i>
            <span style="display: inline-flex;">{{ __('Businesses') }}</span>
        </h2>

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

