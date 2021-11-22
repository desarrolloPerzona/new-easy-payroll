<x-app-tenant>
    <div class="container mx-auto">
        <h2 class="bg-blueSteel py-2 px-3 mb-4 rounded">
            <i class="fas  fa-building mr-2"></i>
            <span style="display: inline-flex;">{{ __('Create bank accounts') }}</span>
        </h2>

        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto">
            <label class="font-bold" for="name">{{__('Account name')}}</label>
            <input class="text-gray-800 rounded my-2" type="text" id="name" name="Name">

            <label class="font-bold" for="name">{{__('Account number')}}</label>
            <input class="text-gray-800 rounded my-2" type="text" id="name" name="Name">

            <label class="font-bold" for="name">{{__('Description')}}</label>
            <input class="text-gray-800 rounded my-2" type="text" id="name" name="Name">

            <label class="font-bold my-2" for="name">{{__('Bank')}}</label>
            <label>
                <select class="w-full rounded">
                    <option value="40138">{{__('Select')}}</option>
                    <option value="40138">ABC CAPITAL</option>
                    <option value="40102">ACENDO BANK</option>
                    <option value="40133">ACTINVER</option>
                    <option value="40062">AFIRME</option>
                    <option value="40062">AKALA</option>
                    <option value="40062">AMERICAN EXPRESS</option>
                    <option value="40062">ASP INTEGRA OPC</option>
                    <option value="40062">AZTECA</option>
                    <option value="40062">BAJIO</option>
                    <option value="40062">BANAMEX</option>
                    <option value="40062">BANCO FINTERRA</option>
                    <option value="40062">BANCO BANCOMEXT</option>
                    <option value="40062">BANCOPPEL</option>
                    <option value="40062">BANCO S3</option>
                    <option value="40062">BANCREA</option>
                    <option value="40062">BANJERCITO</option>
                    <option value="40062">BANKAOOL</option>
                    <option value="40062">BANKS OF AMERICA</option>
                    <option value="40062">BANOBRAS</option>
                    <option value="40062">BANORTE</option>
                    <option value="40062">BANREGIO</option>
                    <option value="40062">BANSEFI</option>
                    <option value="40062">BANSI</option>
                    <option value="40062">BANXICO</option>
                    <option value="40062">BARCLAYS</option>
                    <option value="40062">BBASE</option>
                    <option value="40062">BBVA BANCOMER</option>
                    <option value="40062">BMONEX</option>
                    <option value="40062">CAJA POP MEXICA</option>
                    <option value="40062">CAJA TELEFONIST</option>
                    <option value="40062">CB INTERCAM</option>
                    <option value="40062">CIBANCO</option>
                    <option value="40062">CI BOLSA</option>
                    <option value="40062">CLS</option>
                    <option value="40062">CoDI VALIDA</option>
                    <option value="40062">COMPARTAMOS</option>
                    <option value="40062">CONSUBANCO</option>
                    <option value="40062">CREDICAPITAL</option>
                    <option value="40062">CREDIT SUISSE</option>
                    <option value="40062">CRISTOBAL COLON</option>
                    <option value="40062">DEUTSCHE</option>
                    <option value="40062">DONDE</option>
                    <option value="40062">ESTRUCTURADORES</option>
                    <option value="40062">FINAMEX</option>
                </select>
            </label>

            <label class="font-bold" for="name">{{__('Information number')}}</label>
            <input class="text-gray-800 rounded my-2" type="text" id="name" name="Name" >

            <label class="font-bold" for="name">{{__('Branch number')}}</label>
            <input class="text-gray-800 rounded my-2" type="text" id="name" name="Name" >

            <label class="font-bold" for="name">{{__('CLABE account')}}</label>
            <input class="text-gray-800 rounded my-2" type="text" id="name" name="Name" >

            <div class="btn-top-holder my-3">
                <a href="javascript: history.go(-1)" class="btn btn-dark">
                    {{ __('Save') }}
                </a>
            </div>

        </div>
    </div>


</x-app-tenant>
