<x-app-landlord>
    @section('title') {{__('Users')}}@endsection
    @foreach($users as $user)
        <p>{{$user->name}}</p>
    @endforeach
</x-app-landlord>
