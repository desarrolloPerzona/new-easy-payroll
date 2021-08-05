<div class="w-75 mx-auto">
    <table class="table dark-theme table-primary table-striped dark:alert-primary">
        <tr>
            @foreach($modelTitles as $title)
                <th>{{__($title)}}</th>
            @endforeach
        </tr>
        @foreach($model as $title)
            <tr>
                @foreach($modelItems as $items)
                    <td>{{$title->$items}}</td>
                @endforeach
            </tr>
        @endforeach
    </table>
    {{ $model->links() }}
</div>
