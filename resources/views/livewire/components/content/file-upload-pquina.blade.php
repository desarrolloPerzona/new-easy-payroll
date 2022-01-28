{{--
https://codepen.io/rikschennink/pen/NzRvbj
mimetypes application/x-x509-ca-cert
--}}

<div class="my-4">
    <div class="form-group">
        <label for="id-{{$name}}" class="label font-bold py-2">{{ __($label) }}</label>
        <input id="id-{{ $name }}"
               type="file"
               class="filepond"
               name="{{$name}}"
               data-max-file-size="{{$maxSize}}"
            {{$attributes}}
        />
        @error($name)
        <small class="mt-2 text-sm text-red-600">{{ $message }}</small>
        @enderror
    </div>
</div>
{{--CSS--}}
@push('inline_css')
    @once
        <link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet"/>
        <link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet"/>
    @endonce
@endpush
{{--SCRIPTS--}}
@push('inline_scripts')
    @once
        <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
        <script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>
        <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
        <script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
    @endonce

    <script>

        FilePond.registerPlugin(
            FilePondPluginFileValidateSize,
            FilePondPluginFileValidateType,
            FilePondPluginImagePreview,

        );

        const inputElement{{$name}} = document.getElementById('id-{{ $name }}');

        const pond{{$name}} = FilePond.create(inputElement{{$name}}, {
            server: {
                url: '/{{$uploadRoute}}',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
            },
            storeAsFile:true,
            credits: false,
            acceptedFileTypes:["{{$fileType}}"],
            name: '{{$name}}',
            maxFiles:{{$maxFiles}},
            allowMultiple: {{$allowMultiple}},
            labelFileLoadError: true,
            labelIdle: `<span class="filepond--label-action btn btn-primary"><i class="fas fa-cloud-upload mx-2"></i></span>`,
            labelMaxFileSizeExceeded: `{{__("Maximum file size is")}} {{$maxSize}}`
        });

        pond{{$name}}.on('warning', (error, file) => {
            console.log('Warning', error, file);
        });

    </script>
@endpush
{{--IN LINE STYLES--}}
@push('inline_styles')
    @once
        <style>
            .filepond--root {
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial,
                sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
            }

            /* use a hand cursor instead of arrow for the action buttons */
            .filepond--file-action-button {
                cursor: pointer;
            }

            /* the text color of the drop label*/
            .filepond--drop-label {
                color: #555;
            }

            /* underline color for "Browse" button */
            .filepond--label-action {
                text-decoration-color: #aaa;
            }

            /* the background color of the filepond drop area */
            .filepond--panel-root {
                background-color: red !important;
            }

            /* the border radius of the drop area */
            .filepond--panel-root {
                border-radius: 0.5em;
            }

            /* the border radius of the file item */
            .filepond--item-panel {
                border-radius: 0.5em;
            }

            /* the background color of the file and file panel (used when dropping an image) */
            .filepond--item-panel {
                background-color: #555;
            }

            /* the background color of the drop circle */
            .filepond--drip-blob {
                background-color: #999;
            }

            /* the background color of the black action buttons */
            .filepond--file-action-button {
                background-color: rgba(0, 0, 0, 0.5);
            }

            /* the icon color of the black action buttons */
            .filepond--file-action-button {
                color: white;
            }

            /* the color of the focus ring */
            .filepond--file-action-button:hover,
            .filepond--file-action-button:focus {
                box-shadow: 0 0 0 0.125em rgba(255, 255, 255, 0.9);
            }

            /* the text color of the file status and info labels */
            .filepond--file {
                color: white;
            }

            /* error state color */
            [data-filepond-item-state*='error'] .filepond--item-panel,
            [data-filepond-item-state*='invalid'] .filepond--item-panel {
                background-color: #9e4242;
            }

            [data-filepond-item-state='processing-complete'] .filepond--item-panel {
                background-color: #398339;
            }

            /* bordered drop area */
            .filepond--panel-root {
                background-color: #707785 !important;
                border: 0px solid rgba(0, 0, 0, 0) !important;
            }

        </style>
    @endonce
@endpush
