@section('title'){{__('Client dashboard home')}}@endsection
<x-app-client>
    hello

    @if($user->onTrial())
        <h2>You are on trail</h2>
    @endif
</x-app-client>
