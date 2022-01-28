<div>
    <h2 class="my-2">{{__('FIEL')}}</h2>
    <div class="accordion mb-4" id="fielAccordion">
        <div class="accordion-item">
            <div class="accordion-header bg-secondary " id="headingFiel">
                <button type="button" class="mx-2 py-2" data-bs-toggle="collapse" data-bs-target="#collapseFiel" aria-expanded="false" aria-controls="collapseFiel">
                    <i class="fas fa-plus-circle text-gray-700 hover:text-gray-700 cursor-pointer"></i> {{__('Add FIEL data')}}
                </button>
            </div>
            <div id="collapseFiel" class="accordion-collapse collapse" aria-labelledby="headingFiel" data-bs-parent="#fielAccordion">
                <form class="p-2" enctype="multipart/form-data">

                    <input id="fiel_cert" type="file" accept=".cer" name="sat_fiel_cert">

                    <input type="file" accept=".key" name="sat_fiel_key">

                    <div class="text-left py-1">
                        <label class="font-bold" for="sat_fiel_password">{{__('Private Key Password:')}}</label>
                        <input class="w-full text-gray-800 rounded mt-2 dark:bg-dark dark:text-white" type="text" id="sat_fiel_password"
                               name="sat_fiel_password" placeholder="{{__('Password')}}">
                    </div>

                    <div class="w-2/12">
                        <div class="btn-top-holder mt-4 flow-root">
                            <button type="submit" class="cursor-pointer btn btn-dark float-right">
                                {{ __('Save') }}
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    @push('inline_scripts')
        <script>

            // var input = document.querySelector('input[type="file"]')
            // console.log(input)
            //
            // var data = new FormData()
            // data.append('file', input.files[0])
            // data.append('user', 'hubot')
            //
            // const upload = (data) => {
            //     var settings = {
            //         "url": "https://apisnet.col.gob.mx/wsSignGob/apiV1/Valida/Certificado",
            //         "method": "POST",
            //         "timeout": 0,
            //         "processData": false,
            //         "mimeType": "multipart/form-data",
            //         "contentType": false,
            //         "data": data
            //     };
            //     $.ajax(settings).done(function (response) {
            //         console.log(response);
            //     });
            // }
            //
            // upload()


            // Event handler executed when a file is selected
            // const onSelectFile = () => upload(input.files[0]);
            //
            // // Add a listener on your input
            // // It will be triggered when a file will be selected
            // input.addEventListener('change', onSelectFile, false);

            // https://pokeapi.co/api/v2/pokemon/
            const pokeUrl = 'https://pokeapi.co/api/v2/pokemon/';

            // const getPokemon = (pokemon) => {
            //     let name = pokemon
            //     fetch(pokeUrl . name, {
            //
            //     })
            //         .then(response => response.json())
            //         .then(data => {
            //             console.log(data);
            //         })
            // }

            const getAllPokemons = (pokemon) => {
                fetch(pokeUrl + pokemon, {

                })
                .then(response => response.json())
                .then(data => {
                    return data.abilities[0]
                })
            }

            getAllPokemons('bulbasaur')

        </script>
    @endpush
</div>
