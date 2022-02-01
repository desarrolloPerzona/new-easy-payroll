<x-app-tenant>
    @push('inline_css')
        <style>
            #collapse_reference{
                display: none;
            }
            #collapse_retentions{
                display: none;
            }
        </style>
    @endpush
    <div class="container">
        <h2 class="bg-blueSteel py-2 px-3 mb-2 rounded">
            <i class="fak fa-admin-perzona mr-2"></i>
            <span style="display: inline-flex;">{{ __('Table and value') }}</span>
        </h2>

        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-3 mx-auto dark:bg-dark dark:text-white">

            <div class="flex">
                <div class="flex-1"><h2 class="pb-3">Valores de referencia</h2></div>
                <div class="flex-2">
                    <div id="reference_button">
                        <i id="reference_icon" class="cursor-pointer fas fa-chevron-circle-down"></i>
                    </div>
                </div>
            </div>
            <div class="prueba" id="collapse_reference">
                <p class="pt-1">{{__($discount_infonavit->name)}}</p>

                <div class="flex border-b-2">
                    <div class="flex-1 pb-2 text-gray-500">
                        Valor:
                    </div>
                    <div class="flex-1">
                        {{ $discount_infonavit->value }}
                    </div>
                </div>

                <p class="pt-1 uppercase">{{__($uma->name)}}</p>

                <div class="flex border-b-2">
                    <div class="flex-1 pb-2 text-gray-500">
                        Valor:
                    </div>
                    <div class="flex-1">
                        {{ $uma->value }}
                    </div>
                </div>

                <p class="pt-1">{{__($minimum_salary_general->name)}}</p>

                <div class="flex border-b-2">
                    <div class="flex-1 pb-2 text-gray-500">
                        Valor:
                    </div>
                    <div class="flex-1">
                        {{ $minimum_salary_general->value }}
                    </div>
                </div>

                <p class="pt-1">{{__($minimum_salary_border->name)}}</p>

                <div class="flex border-b-2">
                    <div class="flex-1 pb-2 text-gray-500">
                        Valor:
                    </div>
                    <div class="flex-1">
                        {{ $minimum_salary_border->value }}
                    </div>
                </div>
            </div>
        </div>

        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-3 mx-auto dark:bg-dark dark:text-white">
            <div class="flex">
                <div class="flex-1">
                    <h2 class="pb-3">Retenciones periódicas de ISR:</h2>
                </div>
                <div class="flex-2">
                    <div id="retentions_button">
                        <i id="retentions_icon" class="fas fa-chevron-circle-down cursor-pointer"></i>
                    </div>
                </div>
            </div>

            <div id="collapse_retentions" x-data="data()">
                <ul class="nav nav-tabs w-full mb-4" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active tab-retention cursor-pointer" id="daily-button" x-on:click="changeTab('daily')">
                            <i class="now-ui-icons objects_umbrella-13"></i> Diaria
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tab-retention cursor-pointer" id="weekly-button" x-on:click="changeTab('weekly')">
                            <i class="now-ui-icons shopping_cart-simple"></i> Semanal
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tab-retention cursor-pointer" id="ten-days-button" x-on:click="changeTab('ten-days')">
                            <i class="now-ui-icons shopping_shop"></i> Decenal
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tab-retention cursor-pointer" id="biweekly-button" x-on:click="changeTab('biweekly')">
                            <i class="now-ui-icons ui-2_settings-90"></i> Quincenal
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link tab-retention cursor-pointer" id="monthly-button" x-on:click="changeTab('monthly')">
                            <i class="now-ui-icons ui-2_settings-90"></i> Mensual
                        </a>
                    </li>
                </ul>

{{--                Daily table--}}
                <div class="d-none">
                    <div class="flex border-b-2">
                        <div class="flex-1 font-bold pb-2">
                            Límite inferior
                        </div>
                        <div class="flex-1 font-bold">
                            Límite superior
                        </div>
                        <div class="flex-1 font-bold">
                            Cuota fija
                        </div>
                        <div class="flex-1 font-bold">
                            Excedentes %
                        </div>
                    </div>

                    <div class="flex bg-gray-200 p-1 dark:bg-dark dark:text-white">
                        <div class="flex-1">
                            0.01
                        </div>
                        <div class="flex-1">
                            296.85
                        </div>
                        <div class="flex-1">
                            0
                        </div>
                        <div class="flex-1">
                            1.92
                        </div>
                    </div>

                    <div class="flex p-1">
                        <div class="flex-1">
                            296,86
                        </div>
                        <div class="flex-1">
                            2,519.5
                        </div>
                        <div class="flex-1">
                            5.7
                        </div>
                        <div class="flex-1">
                            6.7
                        </div>
                    </div>

                    <div class="flex bg-gray-200 p-1 dark:bg-dark dark:text-white">
                        <div class="flex-1">
                            2,519,51
                        </div>
                        <div class="flex-1">
                            4,427.8
                        </div>
                        <div class="flex-1">
                            147.95
                        </div>
                        <div class="flex-1">
                            10.88
                        </div>
                    </div>

                    <div class="flex p-1">
                        <div class="flex-1">
                            4,427.81
                        </div>
                        <div class="flex-1">
                            5,147.13
                        </div>
                        <div class="flex-1">
                            355.57
                        </div>
                        <div class="flex-1">
                            16
                        </div>
                    </div>

                    <div class="flex bg-gray-200 p-1 dark:bg-dark dark:text-white">
                        <div class="flex-1">
                            5,147.14
                        </div>
                        <div class="flex-1">
                            6,162.52
                        </div>
                        <div class="flex-1">
                            470.66
                        </div>
                        <div class="flex-1">
                            17.92
                        </div>
                    </div>

                    <div class="flex p-1">
                        <div class="flex-1">
                            0.01
                        </div>
                        <div class="flex-1">
                            296.85
                        </div>
                        <div class="flex-1">
                            0
                        </div>
                        <div class="flex-1">
                            1.92
                        </div>
                    </div>

                    <div class="flex bg-gray-200 p-1 dark:bg-dark dark:text-white">
                        <div class="flex-1">
                            6,162.53
                        </div>
                        <div class="flex-1">
                            14,428.91
                        </div>
                        <div class="flex-1">
                            625.62
                        </div>
                        <div class="flex-1">
                            21.36
                        </div>
                    </div>

                    <div class="flex p-1">
                        <div class="flex-1">
                            14,428.92
                        </div>
                        <div class="flex-1">
                            19,589.68
                        </div>
                        <div class="flex-1">
                            1,991.12
                        </div>
                        <div class="flex-1">
                            23.52
                        </div>
                    </div>

                    <div class="flex bg-gray-200 p-1 dark:bg-dark dark:text-white">
                        <div class="flex-1">
                            19,589.69
                        </div>
                        <div class="flex-1">
                            37,399.92
                        </div>
                        <div class="flex-1">
                            3,675.34
                        </div>
                        <div class="flex-1">
                            30
                        </div>
                    </div>

                    <div class="flex p-1">
                        <div class="flex-1">
                            37,399.93
                        </div>
                        <div class="flex-1">
                            49,866.26
                        </div>
                        <div class="flex-1">
                            9,018.41
                        </div>
                        <div class="flex-1">
                            32
                        </div>
                    </div>

                    <div class="flex bg-gray-200 p-1 dark:bg-dark dark:text-white">
                        <div class="flex-1">
                            49,866.27
                        </div>
                        <div class="flex-1">
                            149,599.68
                        </div>
                        <div class="flex-1">
                            13,007.73
                        </div>
                        <div class="flex-1">
                            34
                        </div>
                    </div>

                    <div class="flex p-1">
                        <div class="flex-1">
                            149,599.69
                        </div>
                        <div class="flex-1">
                            En adelante
                        </div>
                        <div class="flex-1">
                            46,916.99
                        </div>
                        <div class="flex-1">
                            35
                        </div>
                    </div>
                </div>

{{--                Weekly table--}}
                <div>
                    <div class="flex border-b-2">
                        <div class="flex-1 font-bold pb-2">
                            Límite inferior semanal
                        </div>
                        <div class="flex-1 font-bold">
                            Límite superior semanal
                        </div>
                        <div class="flex-1 font-bold">
                            Cuota fija semanal
                        </div>
                        <div class="flex-1 font-bold">
                            Excedentes % semanal
                        </div>
                    </div>

                    <div class="flex bg-gray-200 p-1 dark:bg-dark dark:text-white">
                        <div class="flex-1">
                            0.01
                        </div>
                        <div class="flex-1">
                            296.85
                        </div>
                        <div class="flex-1">
                            0
                        </div>
                        <div class="flex-1">
                            1.92
                        </div>
                    </div>

                    <div class="flex p-1">
                        <div class="flex-1">
                            296,86
                        </div>
                        <div class="flex-1">
                            2,519.5
                        </div>
                        <div class="flex-1">
                            5.7
                        </div>
                        <div class="flex-1">
                            6.7
                        </div>
                    </div>

                    <div class="flex bg-gray-200 p-1 dark:bg-dark dark:text-white">
                        <div class="flex-1">
                            2,519,51
                        </div>
                        <div class="flex-1">
                            4,427.8
                        </div>
                        <div class="flex-1">
                            147.95
                        </div>
                        <div class="flex-1">
                            10.88
                        </div>
                    </div>

                    <div class="flex p-1">
                        <div class="flex-1">
                            4,427.81
                        </div>
                        <div class="flex-1">
                            5,147.13
                        </div>
                        <div class="flex-1">
                            355.57
                        </div>
                        <div class="flex-1">
                            16
                        </div>
                    </div>

                    <div class="flex bg-gray-200 p-1 dark:bg-dark dark:text-white">
                        <div class="flex-1">
                            5,147.14
                        </div>
                        <div class="flex-1">
                            6,162.52
                        </div>
                        <div class="flex-1">
                            470.66
                        </div>
                        <div class="flex-1">
                            17.92
                        </div>
                    </div>

                    <div class="flex p-1">
                        <div class="flex-1">
                            0.01
                        </div>
                        <div class="flex-1">
                            296.85
                        </div>
                        <div class="flex-1">
                            0
                        </div>
                        <div class="flex-1">
                            1.92
                        </div>
                    </div>

                    <div class="flex bg-gray-200 p-1 dark:bg-dark dark:text-white">
                        <div class="flex-1">
                            6,162.53
                        </div>
                        <div class="flex-1">
                            14,428.91
                        </div>
                        <div class="flex-1">
                            625.62
                        </div>
                        <div class="flex-1">
                            21.36
                        </div>
                    </div>

                    <div class="flex p-1">
                        <div class="flex-1">
                            14,428.92
                        </div>
                        <div class="flex-1">
                            19,589.68
                        </div>
                        <div class="flex-1">
                            1,991.12
                        </div>
                        <div class="flex-1">
                            23.52
                        </div>
                    </div>

                    <div class="flex bg-gray-200 p-1 dark:bg-dark dark:text-white">
                        <div class="flex-1">
                            19,589.69
                        </div>
                        <div class="flex-1">
                            37,399.92
                        </div>
                        <div class="flex-1">
                            3,675.34
                        </div>
                        <div class="flex-1">
                            30
                        </div>
                    </div>

                    <div class="flex p-1">
                        <div class="flex-1">
                            37,399.93
                        </div>
                        <div class="flex-1">
                            49,866.26
                        </div>
                        <div class="flex-1">
                            9,018.41
                        </div>
                        <div class="flex-1">
                            32
                        </div>
                    </div>

                    <div class="flex bg-gray-200 p-1 dark:bg-dark dark:text-white">
                        <div class="flex-1">
                            49,866.27
                        </div>
                        <div class="flex-1">
                            149,599.68
                        </div>
                        <div class="flex-1">
                            13,007.73
                        </div>
                        <div class="flex-1">
                            34
                        </div>
                    </div>

                    <div class="flex p-1">
                        <div class="flex-1">
                            149,599.69
                        </div>
                        <div class="flex-1">
                            En adelante
                        </div>
                        <div class="flex-1">
                            46,916.99
                        </div>
                        <div class="flex-1">
                            35
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-3 mx-auto dark:bg-dark dark:text-white">
            <div class="flex">
                <div class="flex-1">  <h2 class="pb-3">Tablas periódicas a subsidio</h2></div>
                <div class="flex-2"><i class="fas fa-chevron-circle-down"></i></div>
            </div>
        </div>

        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-3 mx-auto dark:bg-dark dark:text-white">
            <div class="flex">
                <div class="flex-1">  <h2 class="pb-3">Tablas de impuesto sobre nómina</h2></div>
                <div class="flex-2"><i class="fas fa-chevron-circle-down"></i></div>
            </div>

        </div>

    </div>

    @push('inline_scripts')
        <script>

            // Function to collapse tables with effect
            $( "#reference_button" ).click(function() {
                $( "#collapse_reference" ).slideToggle(function() {
                    let arrow1 = document.getElementById('reference_icon')
                    if (document.getElementById('reference_icon').classList.contains('fa-chevron-circle-down')){
                        arrow1.classList.remove('fa-chevron-circle-down')
                        arrow1.classList.add('fa-chevron-circle-up')
                    } else{
                        arrow1.classList.remove('fa-chevron-circle-up')
                        arrow1.classList.add('fa-chevron-circle-down')
                    }
                });
            });

            // Function to collapse tables with effect
            $( "#retentions_button" ).click(function() {
                $( "#collapse_retentions" ).slideToggle(function() {
                    let arrow1 = document.getElementById('retentions_icon')
                    if (document.getElementById('retentions_icon').classList.contains('fa-chevron-circle-down')){
                        arrow1.classList.remove('fa-chevron-circle-down')
                        arrow1.classList.add('fa-chevron-circle-up')
                    } else{
                        arrow1.classList.remove('fa-chevron-circle-up')
                        arrow1.classList.add('fa-chevron-circle-down')
                    }
                });
            });

            // Alpine function to change between tabs
            function data(){
                return{
                    changeTab(button){
                        let retentionsButton = document.getElementById(`${button}-button`);
                        let retentionTabs = document.querySelectorAll('.tab-retention')

                        // Change all active classes to the othew tabs and added only the clicked button, active class.
                        if(!retentionsButton.classList.contains('active')){
                            retentionTabs.forEach(item => {
                                console.log(item.classList.remove('active'))
                            })
                            retentionsButton.classList.add('active')
                        }
                    }
                }
            }

        </script>
    @endpush

</x-app-tenant>
