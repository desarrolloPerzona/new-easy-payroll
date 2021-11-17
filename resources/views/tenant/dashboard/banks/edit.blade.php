<x-app-tenant>
    <div class="container mx-auto">
        <h2 class="bg-blueSteel py-2 px-3 mb-2 rounded">
            <i class="fas  fa-building mr-2"></i>
            <span style="display: inline-flex;">{{ __('Edit bank accounts') }}</span>
        </h2>

        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto">
            <lavel class="font-bold" for="name">Alias de la cuenta</lavel>
            <input class="text-gray-800 rounded my-2" type="text" id="name" name="Name"
                   placeholder="Cuenta BBVA 1256">

            <lavel class="font-bold" for="name">Número de cuenta</lavel>
            <input class="text-gray-800 rounded my-2" type="text" id="name" name="Name" placeholder="2361256">

            <lavel class="font-bold" for="name">Descripción</lavel>
            <input class="text-gray-800 rounded my-2" type="text" id="name" name="Name" placeholder="BBVA 01">

            <lavel class="font-bold" for="name">Banco</lavel>
            <label>
                <select class="w-full rounded">
                    <option value="40138">ABC CAPITAL</option>
                    <option value="40102">ACENDO BANK</option>
                    <option value="40133">ACTINVER</option>
                    <option value="40062">AFIRME</option>
                    <option value="40062">AKALA</option>
                    <option value="40062">AMERICAN EXPRESS</option>
                    <option value="40062">ASP INTEGRA OPC</option>
                    <option value="40062">AUTOFIN</option>
                    <option value="40062">AFIRME</option>
                    <option value="40062">AFIRME</option>
                    <option value="40062">AFIRME</option>
                    <option value="40062">AFIRME</option>
                    <option value="40062">AFIRME</option>
                    <option value="40062">AFIRME</option>
                    <option value="40062">AFIRME</option>
                    <option value="40062">AFIRME</option>
                    <option value="40062">AFIRME</option>
                </select>
            </label>

            <lavel class="font-bold" for="name">Número de información</lavel>
            <input class="text-gray-800 rounded my-2" type="text" id="name" name="Name" placeholder="-">

            <lavel class="font-bold" for="name">Número de sucursal</lavel>
            <input class="text-gray-800 rounded my-2" type="text" id="name" name="Name" placeholder="2369">

            <lavel class="font-bold" for="name">Cuenta CLABE</lavel>
            <input class="text-gray-800 rounded my-2" type="text" id="name" name="Name" placeholder="4523698531256">

            <div class="btn-top-holder my-3">
                <a href="javascript: history.go(-1)" class="btn btn-dark">
                    {{ __('Save') }}
                </a>
            </div>

        </div>
    </div>


</x-app-tenant>
