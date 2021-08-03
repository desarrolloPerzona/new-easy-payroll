<div>
    <table class="table table-striped table-hover">
        <tr scope="row">
            <th>{{__('Name')}}</th>
            <th>{{__('Institutional Key')}}</th>
        </tr>

        @foreach($banks as $bank)
            <tr scope="row">
                <td>{{$bank->name}}</td>
                <td>{{$bank->institutional_key}}</td>
            </tr>
        @endforeach

    </table>
    {{ $banks->links() }}
</div>
