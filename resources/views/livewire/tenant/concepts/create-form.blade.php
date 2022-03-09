<div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">

    <form wire:submit.prevent="store">

        <div class="form-group d-flex gap-3">
            <div class="form-group w-50">
                <label for="name" class="font-bold form-label">{{__('Perception name')}}</label>
                <input id="name" name="name" type="text" class="form-control">
            </div>
            <div class="form-group w-50">
                <label for="name" class="font-bold form-label">{{__('SAT Concept')}}</label>
                <select id="name" name="name" type="text" class="form-control">
                    <option value="">{{__('Select')}}</option>
                    <option value="001">004 Rembolso gastos médicos</option>
                    <option value="002">006 Caja de ahorro</option>
                    <option value="002">009 Contribuciones a cargo de trabajadores</option>
                    <option value="002">011 Prima de seguro de vida</option>
                    <option value="002">012 Seguro gastos médicos</option>
                    <option value="002">013 Cueotas sindicales patrón</option>
                    <option value="002">014 Subsidio incapacidades</option>
                    <option value="002">015 Becas a trabajadores y/o hijos de trabajadores</option>
                    <option value="002">023 Pagos por separación</option>
                    <option value="002">025 Indemnizaciones</option>
                    <option value="002">026 Rembolso de funeral</option>
                    <option value="002">027 Cuotas de Seguridad Social del patrón</option>
                    <option value="002">029 Vales de despensa en efectivo</option>
                    <option value="002">031 Vales de gasolina</option>
                    <option value="002">032 Vales de ropa</option>
                    <option value="002">033 Ayuda de renta</option>
                    <option value="002">034 Ayuda de articulos escolares</option>
                    <option value="002">035 Ayuda de adqusición de anteojos</option>
                    <option value="002">036 Ayuda al transporte</option>
                    <option value="002">037 Ayuda gastos funerarios</option>
                    <option value="002">038 Otros ingresos y salarios</option>
                    <option value="002">044 Jubilaciones y pensiones</option>
                    <option value="002">047 Alimentación</option>
                    <option value="002">048 Habitación</option>
                </select>
            </div>
        </div>

        <div class="form-group d-flex gap-3">

            <div class="form-group w-1/3">
                <label for="name" class="font-bold form-label">{{__('Periodicity')}}</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="working" id="working" value="1">
                    <label for="working" class="form-check-label">{{__('Periodic')}}</label>
                </div>
                <div class="form-group">
                    <input type="radio" class="form-check-input" name="working" id="working2" value="0">
                    <label for="working2" class="form-check-label">{{__('Extraordinary')}}</label>
                </div>
            </div>

            <div class="form-group w-1/3">
                <label for="name" class="font-bold form-label">{{__('Type of perception')}}</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="working" id="working" value="1">
                    <label for="working" class="form-check-label">{{__('Ordinary')}}</label>
                </div>
                <div class="form-check margin-b-0">
                    <input type="radio" class="form-check-input" name="working" id="working2" value="0">
                    <label for="working2" class="form-check-label">{{__('Extraordinary')}}</label>
                </div>
            </div>

            <div class="form-group w-1/3">
                <label for="name" class="font-bold form-label">{{__('Payment type')}}</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="working" id="working" value="1">
                    <label for="working" class="form-check-label">{{__('Ordinary')}}</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="working" id="working2" value="0">
                    <label for="working2" class="form-check-label">{{__('Species')}}</label>
                </div>
            </div>

        </div>

        <div class="form-group d-flex gap-3">

            <div class="form-group w-1/3">
                <label for="name" class="font-bold form-label">{{__('Gravel ISR')}}</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="working" id="working" value="1">
                    <label for="working" class="form-check-label">{{__('Yes')}}</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="working" id="working2" value="0">
                    <label for="working2" class="form-check-label">{{__('No')}}</label>
                </div>
            </div>

            <div class="form-group w-1/3">
                <label for="name" class="font-bold form-label">{{__('Gravel ISN')}}</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="working" id="working" value="1">
                    <label for="working" class="form-check-label">{{__('Yes')}}</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="working" id="working2" value="0">
                    <label for="working2" class="form-check-label">{{__('No')}}</label>
                </div>
            </div>

            <div class="form-group w-1/3">
                <label for="name" class="font-bold form-label">{{__('IMSS integrate')}}</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="working" id="working" value="1">
                    <label for="working" class="form-check-label">{{__('Yes')}}</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="working" id="working2" value="0">
                    <label for="working2" class="form-check-label">{{__('No')}}</label>
                </div>
            </div>

        </div>

        <div class="form-group d-flex gap-3">
            <div class="form-group w-100">
                <label for="name" class="font-bold form-label">{{__('Accounting account')}}</label>
                <input id="name" name="name" type="text" class="form-control">
            </div>
        </div>

        <div class="btn-top-holder mb-2">
            <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
            <a href="{{ route('concept.index') }}" class="btn btn-danger ms-2 text-white">{{__('Go back')}}</a>
        </div>

    </form>

</div>
