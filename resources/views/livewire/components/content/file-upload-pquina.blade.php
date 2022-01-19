<div class="my-4">
    <div class="form-group">
        <label for="id-{{$name}}" class="label font-bold py-2">{{$label}}</label>
        <input id="id-{{ $name }}" class="filepond" type="file">
        @error($name)
        <small class="mt-2 text-sm text-red-600">{{ $message }}</small>
        @enderror
    </div>
</div>

@push('inline_css')
    @once
        {{--FILEPOND--}}
        <!-- FILEPOND CSS -->
        <link rel="stylesheet" href="{{asset('vendor/filepond/dist/filepond.css')}}"/>
    @endonce
@endpush
@push('inline_scripts')
    @once
        {{--FILEPOND--}}
        <!-- FILEPOND JS -->
        <script src="{{asset('/vendor/filepond/dist/filepond.js')}}"></script>
    @endonce
    <script>

        const inputElement{{$name}} = document.getElementById('id-{{ $name }}');

        // Create a FilePond instance
        const pond{{$name}} = FilePond.create(inputElement{{$name}}, {
            labelIdle: `arrastra <span class="filepond--label-action btn btn-primary">buscar</span>`,
            credits: false,
            name: '{{$name}}',
            allowMultiple: false,
            labelFileLoadError: true,
            server: {
                url: '/uploadFiles',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            }


        });


    </script>
@endpush

