<div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-3 mx-auto dark:bg-dark dark:text-white">

    <div class="flex">
        <div class="flex-1"><h2 class="pb-3">Valores de referencia</h2></div>
        <div class="flex-2" onclick="arrowClick('reference')">
            <div id="reference-button">
                <i id="reference-icon" class="cursor-pointer fas fa-chevron-circle-down"></i>
            </div>
        </div>
    </div>
    <div id="collapse-reference" class="display-none">
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
