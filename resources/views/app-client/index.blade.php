@section('title'){{__('Client dashboard home')}}@endsection
<x-app-client>
  <h1>Hello {{auth()->user()->name}}</h1>
    @if(auth()->user()->onTrial())
        <h2>You are on trail</h2>
        @else
        <p class="text-yellow-500">You are not on trail</p>
    @endif


</x-app-client>
