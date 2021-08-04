<div class="w-75 my-auto">
    <table class="table table-dark table-striped">
        <tr>
            @foreach($columns as $column)
                <th>{{$column}}</th>
            @endforeach
        </tr>
        @foreach($models as $title)
            <tr>
                <td>{{$title->name}}</td>
            </tr>
        @endforeach


    </table>
</div>
