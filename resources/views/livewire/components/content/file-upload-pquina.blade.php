<div class="my-4">
    <div class="form-group">
        <label for="id-{{$name}}" class="label font-bold py-2">{{ __($label) }}</label>
        <input id="id-{{ $name }}"
               class="filepond"
               type="file"
               accept=".png"
               data-max-file-size="{{$maxFiles}}"
            {{$attributes}}
        />
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
            server: {
                url: '/{{$uploadRoute}}',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
            },
            credits: false,
            name: '{{$name}}',
            allowMultiple: {{$allowMultiple}},
            maxFiles: 3,
            labelFileLoadError: true,
            labelIdle: `<span class="filepond--label-action btn btn-primary"><i class="fas fa-search mr-2"></i>{{__('Upload')}}</span>`,
            acceptedFileTypes: ['image/png']


        });
        pond{{$name}}.on('warning', (error, file) => {
            console.log('Warning', error, file);
        });

    </script>
@endpush

