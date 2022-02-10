<x-app-tenant>
    <div class="container">
        <h2 class="bg-blueSteel py-2 px-3 mb-2 rounded">
            <i class="fak fa-admin-perzona mr-2"></i>
            <span style="display: inline-flex;">Juan Perez</span>
        </h2>

        <div class="flex mb-6">
            <div class="flex-1 w-3/12">
                <img class="px-5 m-auto" src="/assets/images/avatar/user.jpg" alt="">
            </div>
            <div class="flex-1 w-3/12">
              <h2 class="mb-4">Juan Perez</h2>
                <div class="mb-2"><i class="fa-solid fa-square-dollar fa-xl"></i> $ 35,000</div>
                <div class="mb-2"><i class="fa-solid fa-envelope fa-xl"></i> juan.perez@espresa.com</div>
                <div class="mb-2"><i class="fa-regular fa-envelope fa-xl"></i> juan.perez@personal.com</div>
            </div>
            <div class="flex-1 w-3/12">
                <div class="mb-6">&nbsp;</div>
                <div class="mb-2"><i class="fa-solid fa-square-a fa-xl"></i> Ventas</div>
                <div class="mb-2"><i class="fa-solid fa-circle-location-arrow fa-xl"></i> CDMX</div>
                <div class="mb-2"><i class="fa-solid fa-cake-candles fa-xl"></i> 03/04/1976</div>
            </div>
            <div class="flex-1 w-3/12">
                <div class="btn-top-holder my-3 flow-root">
                    <a class="btn btn-dark float-right cursor-pointer">
                        {{ __('Download PDF') }}
                    </a>
                </div>
            </div>
        </div>

        <div id="collapse-retentions" x-data="data()" class="px-2">
            <ul class="nav nav-tabs w-full mb-4" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active tab-retention cursor-pointer bg-primary text-white" id="daily-button" x-on:click="changeTab('personal')">
                        <i class="now-ui-icons objects_umbrella-13"></i> Personal
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link tab-retention cursor-pointer" id="weekly-button" x-on:click="changeTab('employee')">
                        <i class="now-ui-icons shopping_cart-simple"></i> Empleo
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link tab-retention cursor-pointer" id="ten-days-button" x-on:click="changeTab('payment')">
                        <i class="now-ui-icons shopping_shop"></i> Pago
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link tab-retention cursor-pointer" id="ten-days-button" x-on:click="changeTab('events')">
                        <i class="now-ui-icons shopping_shop"></i> Eventos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link tab-retention cursor-pointer" id="biweekly-button" x-on:click="changeTab('documents')">
                        <i class="now-ui-icons ui-2_settings-90"></i> Documentos
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link tab-retention cursor-pointer" id="monthly-button" x-on:click="changeTab('kardex')">
                        <i class="now-ui-icons ui-2_settings-90"></i> Kardex
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link tab-retention cursor-pointer" id="monthly-button" x-on:click="changeTab('notes')">
                        <i class="now-ui-icons ui-2_settings-90"></i> Notas
                    </a>
                </li>
            </ul>

            {{--                Personal--}}
            <div id="personal" class="retentions-table">

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">{{__('Límite inferior')}}</th>
                        <th scope="col">{{__('Límite superior')}}</th>
                        <th scope="col">{{__('Cuota fija')}}</th>
                        <th scope="col">{{__('Excedentes %')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>

            </div>

            {{--                Empleo--}}
            <div id="employee" class="retentions-table">

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">{{__('Límite inferior')}}</th>
                        <th scope="col">{{__('Límite superior')}}</th>
                        <th scope="col">{{__('Cuota fija')}}</th>
                        <th scope="col">{{__('Excedentes %')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tbody>
                </table>

            </div>



        </div>

    </div>
    @push('inline_scripts')
        <script>

            // Function to collapse tables with effect and changeing arrow icon
            const arrowClick = (name) => {
                $("#collapse-" + name).slideToggle(function() {
                    let arrowButton = document.getElementById(`${name}-icon`)
                    if (arrowButton.classList.contains('fa-chevron-circle-down')){
                        arrowButton.classList.remove('fa-chevron-circle-down')
                        arrowButton.classList.add('fa-chevron-circle-up')
                    } else{
                        arrowButton.classList.remove('fa-chevron-circle-up')
                        arrowButton.classList.add('fa-chevron-circle-down')
                    }
                });
            }

            // Alpine function to change between tabs
            function data(){
                return{
                    changeTab(button){
                        let retentionsButton = document.getElementById(`${button}-button`);
                        let retentionTabs = document.querySelectorAll('.tab-retention')
                        let allRetentionTables = document.querySelectorAll('.retentions-table')
                        let retentionTable = document.getElementById(`${button}-table`)

                        // Change all active classes to the othew tabs and added only the clicked button, active class.
                        if(!retentionsButton.classList.contains('active')){
                            retentionTabs.forEach(item => {
                                item.classList.remove('active', 'bg-primary', 'text-white')
                            })
                            allRetentionTables.forEach(item => {
                                item.classList.add('d-none')
                            })
                            retentionsButton.classList.add('active', 'bg-primary', 'text-white')
                            retentionTable.classList.remove('d-none')
                        }
                    }
                }
            }

        </script>
    @endpush
</x-app-tenant>
