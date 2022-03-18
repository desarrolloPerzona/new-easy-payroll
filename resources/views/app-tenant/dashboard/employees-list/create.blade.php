<x-app-tenant>
    <div class="container">

        <x-utilities.section-header classes="mb-3" title="Registration of employees" />

        <div class="card p-4 mb-2 max-w-6xl my-2 mx-auto">

            {{--        Tabs Menu--}}
            <div id="collapse-retentions" x-data="data()" class="px-2">

                {{--            Employee Tabs buttons--}}
                <ul class="nav nav-tabs w-full mb-2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active tab-retention cursor-pointer bg-primary text-white"
                           id="personal-button"
                           x-on:click="changeTab('personal')">
                            <i class="now-ui-icons objects_umbrella-13"></i> Información personal
                        </a>
                    </li>
                    <li class="nav-item">
                        <!--   <a class="nav-link tab-retention cursor-pointer" id="employee-button"
                            x-on:click="changeTab('employee')">
                             <i class="now-ui-icons shopping_cart-simple"></i> Información empleado
                         </a>-->
                        <a class="nav-link tab-retention cursor-pointer" id="employee-button">
                            <i class="now-ui-icons shopping_cart-simple"></i> Información empleado</a>

                    </li>

                </ul>

                {{--                Personal-----------------------------------------------------}}
                <div id="personal-table" class="retentions-table">
                    <div class="card p-4 mb-4">
                        <h2 class="mb-3">Información básica</h2>
                        <div class="flex my-2">
                            <div class="my-2 flex-1 w-1/3 mr-2">
                                <label class="mb-2 font-bold">Nombre</label>
                                <input type="text" class="w-full rounded dark:bg-dark dark:text-white"
                                       placeholder="Ingresa el nombre del empleado">
                            </div>
                            <div class="my-2 flex-1 w-1/3 mr-2">
                                <label class="mb-2 font-bold">Apellido paterno</label>
                                <input type="text" class="w-full rounded dark:bg-dark dark:text-white"
                                       placeholder="Ingresa el apellido paterno del empleado">
                            </div>
                            <div class="my-2 flex-1 w-1/3 mr-2">
                                <label class="mb-2 font-bold">Apellido materno</label>
                                <input type="text" class="w-full rounded dark:bg-dark dark:text-white"
                                       placeholder="Ingresa el nombre del empleado">
                            </div>
                        </div>

                        <div class="my-2">
                            <label class="mb-2 font-bold">Genero</label>
                            <div class="flex">
                                <form>
                                    <input type="radio" name="gender" class="my-2" value="male" checked> {{__('Male')}}
                                    <br>
                                    <input type="radio" name="gender" class="my-2" value="female"> {{__('Female')}}<br>
                                    <input type="radio" name="gender" class="my-2" value="other"> {{__('Other')}}
                                </form>
                            </div>
                        </div>


                        <div class="my-2">
                            <label class="mb-2 font-bold">Fecha de nacimiento</label>
                            {{--Date Picker---------------}}
                            <div
                                class="flex-1 items-center justify-center h-full dark:bg-dark dark:text-white">
                                <script
                                    src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"
                                    defer></script>

                                <style>
                                    [x-cloak] {
                                        display: none;
                                    }
                                </style>

                                <div class="antialiased sans-serif w-full">
                                    <div x-data="app()" x-init="[initDate(), getNoOfDays()]"
                                         x-cloak>
                                        <div class="container mx-auto">
                                            <div class="mb-1">

                                                <div class="relative">
                                                    <input type="hidden" name="date" x-ref="date"/>
                                                    <input
                                                        type="text"
                                                        readonly
                                                        x-model="datepickerValue"
                                                        @click="showDatepicker = !showDatepicker"
                                                        @keydown.escape="showDatepicker = false"
                                                        class=" w-full
                                                                    pl-4
                                                                    pr-10
                                                                    pt-2
                                                                    pb-3
                                                                    leading-none
                                                                    rounded-lg
                                                                    shadow-sm
                                                                    focus:outline-none focus:shadow-outline
                                                                    text-gray-600
                                                                    font-medium"
                                                        placeholder={{__('Select Date')}}
                                                    />

                                                    <div class="absolute top-0 right-0 px-3 py-2">
                                                        <svg
                                                            class="h-6 w-6 text-gray-400"
                                                            fill="none"
                                                            viewBox="0 0 24 24"
                                                            stroke="currentColor"
                                                        >
                                                            <path
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                                                            />
                                                        </svg>
                                                    </div>

                                                    <!-- <div x-text="no_of_days.length"></div>
                                                                <div x-text="32 - new Date(year, month, 32).getDate()"></div>
                                                                <div x-text="new Date(year, month).getDay()"></div> -->

                                                    <div
                                                        class="bg-white
                                                                    mt-12
                                                                    rounded-lg
                                                                    shadow
                                                                    p-4
                                                                    absolute
                                                                    top-0
                                                                    left-0"
                                                        style="width: 17rem"
                                                        x-show.transition="showDatepicker"
                                                        @click.away="showDatepicker = false"
                                                    >
                                                        <div
                                                            class="flex justify-between items-center mb-2">
                                                            <div>
                  <span
                      x-text="MONTH_NAMES[month]"
                      class="text-lg font-bold text-gray-800"
                  ></span>
                                                                <span
                                                                    x-text="year"
                                                                    class="ml-1 text-lg text-gray-600 font-normal"
                                                                ></span>
                                                            </div>
                                                            <div>
                                                                <button
                                                                    type="button"
                                                                    class="transition
                                                                                ease-in-out
                                                                                duration-100
                                                                                inline-flex
                                                                                cursor-pointer
                                                                                hover:bg-gray-200
                                                                                p-1
                                                                                rounded-full"
                                                                    :class="{'cursor-not-allowed opacity-25': month == 0 }"
                                                                    :disabled="month == 0 ? true : false"
                                                                    @click="month--; getNoOfDays()"
                                                                >
                                                                    <svg
                                                                        class="h-6 w-6 text-gray-500 inline-flex"
                                                                        fill="none"
                                                                        viewBox="0 0 24 24"
                                                                        stroke="currentColor"
                                                                    >
                                                                        <path
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-width="2"
                                                                            d="M15 19l-7-7 7-7"
                                                                        />
                                                                    </svg>
                                                                </button>
                                                                <button
                                                                    type="button"
                                                                    class="transition
                                                                                ease-in-out
                                                                                duration-100
                                                                                inline-flex
                                                                                cursor-pointer
                                                                                hover:bg-gray-200
                                                                                p-1
                                                                                rounded-full"
                                                                    :class="{'cursor-not-allowed opacity-25': month == 11 }"
                                                                    :disabled="month == 11 ? true : false"
                                                                    @click="month++; getNoOfDays()"
                                                                >
                                                                    <svg
                                                                        class="h-6 w-6 text-gray-500 inline-flex"
                                                                        fill="none"
                                                                        viewBox="0 0 24 24"
                                                                        stroke="currentColor"
                                                                    >
                                                                        <path
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            stroke-width="2"
                                                                            d="M9 5l7 7-7 7"
                                                                        />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>

                                                        <div class="flex flex-wrap mb-3 -mx-1">
                                                            <template x-for="(day, index) in DAYS"
                                                                      :key="index">
                                                                <div style="width: 14.26%"
                                                                     class="px-1">
                                                                    <div
                                                                        x-text="day"
                                                                        class="text-gray-800 font-medium text-center text-xs"
                                                                    ></div>
                                                                </div>
                                                            </template>
                                                        </div>

                                                        <div class="flex flex-wrap -mx-1">
                                                            <template x-for="blankday in blankdays">
                                                                <div
                                                                    style="width: 14.28%"
                                                                    class="text-center
                                                                                border
                                                                                p-1
                                                                                border-transparent
                                                                                text-sm"
                                                                ></div>
                                                            </template>
                                                            <template
                                                                x-for="(date, dateIndex) in no_of_days"
                                                                :key="dateIndex"
                                                            >
                                                                <div style="width: 14.28%"
                                                                     class="px-1 mb-1">
                                                                    <div
                                                                        @click="getDateValue(date)"
                                                                        x-text="date"
                                                                        class="cursor-pointer
                                                                                    text-center text-sm
                                                                                    leading-none
                                                                                    rounded-full
                                                                                    leading-loose
                                                                                    transition
                                                                                    ease-in-out
                                                                                    duration-100"
                                                                        :class="{'bg-blue-500 text-white': isToday(date) == true, 'text-gray-700 hover:bg-blue-200': isToday(date) == false }"
                                                                    ></div>
                                                                </div>
                                                            </template>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                        const MONTH_NAMES = [
                                            "{{__('January')}}",
                                            "{{__('February')}}",
                                            "{{__('March')}}",
                                            "{{__('April')}}",
                                            "{{__('May')}}",
                                            "{{__('June')}}",
                                            "{{__('July')}}",
                                            "{{__('August')}}",
                                            "{{__('September')}}",
                                            "{{__('October')}}",
                                            "{{__('November')}}",
                                            "{{__('December')}}",
                                        ];
                                        const DAYS = ["{{__('Sun')}}", "{{__('Mon')}}", "{{__('Tue')}}", "{{__('Wed')}}", "{{__('Thu')}}", "{{__('Fri')}}", "{{__('Sat')}}"];

                                        function app() {
                                            return {
                                                showDatepicker: false,
                                                datepickerValue: "",

                                                month: "",
                                                year: "",
                                                no_of_days: [],
                                                blankdays: [],
                                                days: ["{{__('Sun')}}", "{{__('Mon')}}", "{{__('Tue')}}", "{{__('Wed')}}", "{{__('Thu')}}", "{{__('Fri')}}", "{{__('Sat')}}"],

                                                initDate() {
                                                    let today = new Date();
                                                    this.month = today.getMonth();
                                                    this.year = today.getFullYear();
                                                    this.datepickerValue = new Date(
                                                        this.year,
                                                        this.month,
                                                        today.getDate()
                                                    ).toDateString();
                                                },

                                                isToday(date) {
                                                    const today = new Date();
                                                    const d = new Date(this.year, this.month, date);

                                                    return today.toDateString() === d.toDateString() ? true : false;
                                                },

                                                getDateValue(date) {
                                                    let selectedDate = new Date(this.year, this.month, date);
                                                    this.datepickerValue = selectedDate.toDateString();

                                                    this.$refs.date.value =
                                                        selectedDate.getFullYear() +
                                                        "-" +
                                                        ("0" + selectedDate.getMonth()).slice(-2) +
                                                        "-" +
                                                        ("0" + selectedDate.getDate()).slice(-2);

                                                    console.log(this.$refs.date.value);

                                                    this.showDatepicker = false;
                                                },

                                                getNoOfDays() {
                                                    let daysInMonth = new Date(
                                                        this.year,
                                                        this.month + 1,
                                                        0
                                                    ).getDate();

                                                    // find where to start calendar day of week
                                                    let dayOfWeek = new Date(this.year, this.month).getDay();
                                                    let blankdaysArray = [];
                                                    for (var i = 1; i <= dayOfWeek; i++) {
                                                        blankdaysArray.push(i);
                                                    }

                                                    let daysArray = [];
                                                    for (var i = 1; i <= daysInMonth; i++) {
                                                        daysArray.push(i);
                                                    }

                                                    this.blankdays = blankdaysArray;
                                                    this.no_of_days = daysArray;
                                                },
                                            };
                                        }
                                    </script>
                                </div>
                            </div>
                        </div>

                        <div class="my-2">
                            <label class="mb-2 font-bold">ID Empleado</label>
                            <input type="text" class="w-full rounded dark:bg-dark dark:text-white"
                                   placeholder="Número de empleado">
                            <input type="checkbox" checked> Generar automaticamente
                        </div>

                        <div class="flex my-2">
                            <div class="w-1/2 mr-2">
                                <label class="mb-2 font-bold">CURP</label>
                                <input type="text" class="w-full rounded dark:bg-dark dark:text-white"
                                       placeholder="CURP">
                            </div>
                            <div class="w-1/2">
                                <label class="mb-2 font-bold">RFC</label>
                                <input type="text" class="w-full rounded dark:bg-dark dark:text-white"
                                       placeholder="RFC">
                            </div>
                        </div>

                        <div class="my-2">
                            <label class="mb-2 font-bold">Seguro Social</label>
                            <input type="text" class="w-full rounded dark:bg-dark dark:text-white"
                                   placeholder="Número de empleado">
                        </div>

                        <div class="flex my-2">
                            <div class="w-1/2 mr-2">
                                <label class="mb-2 font-bold">Correo electrónico personal</label>
                                <input type="text" class="w-full rounded dark:bg-dark dark:text-white"
                                       placeholder="correo electronico">
                            </div>
                            <div class="w-1/2">
                                <label class="mb-2 font-bold">Correo electrónico corporativo</label>
                                <input type="text" class="w-full rounded dark:bg-dark dark:text-white"
                                       placeholder="correo electronico">
                            </div>
                        </div>

                        <div class="my-4">
                            <h2 class="font-bold">Dirección</h2>
                            <div class="flex my-2">
                                <div class="my-2 flex-1 w-1/2 mr-2">
                                    <label class="mb-2 font-bold">Código Postal</label>
                                    <input type="text" class="w-full rounded dark:bg-dark dark:text-white">
                                </div>

                                <div class="my-2 flex-1 w-1/2 mr-2">
                                    <label class="mb-2 font-bold">Estado</label>
                                    <select name="area" id="area" class="w-full rounded dark:bg-dark dark:text-white">
                                        <option value="no">Seleccione uno...</option>
                                        <option value="Aguascalientes">Aguascalientes</option>
                                        <option value="Baja California">Baja California</option>
                                        <option value="Baja California Sur">Baja California Sur</option>
                                        <option value="Campeche">Campeche</option>
                                        <option value="Chiapas">Chiapas</option>
                                        <option value="Chihuahua">Chihuahua</option>
                                        <option value="CDMX">Ciudad de México</option>
                                        <option value="Coahuila">Coahuila</option>
                                        <option value="Colima">Colima</option>
                                        <option value="Durango">Durango</option>
                                        <option value="Estado de México">Estado de México</option>
                                        <option value="Guanajuato">Guanajuato</option>
                                        <option value="Guerrero">Guerrero</option>
                                        <option value="Hidalgo">Hidalgo</option>
                                        <option value="Jalisco">Jalisco</option>
                                        <option value="Michoacán">Michoacán</option>
                                        <option value="Morelos">Morelos</option>
                                        <option value="Nayarit">Nayarit</option>
                                        <option value="Nuevo León">Nuevo León</option>
                                        <option value="Oaxaca">Oaxaca</option>
                                        <option value="Puebla">Puebla</option>
                                        <option value="Querétaro">Querétaro</option>
                                        <option value="Quintana Roo">Quintana Roo</option>
                                        <option value="San Luis Potosí">San Luis Potosí</option>
                                        <option value="Sinaloa">Sinaloa</option>
                                        <option value="Sonora">Sonora</option>
                                        <option value="Tabasco">Tabasco</option>
                                        <option value="Tamaulipas">Tamaulipas</option>
                                        <option value="Tlaxcala">Tlaxcala</option>
                                        <option value="Veracruz">Veracruz</option>
                                        <option value="Yucatán">Yucatán</option>
                                        <option value="Zacatecas">Zacatecas</option>
                                    </select>
                                </div>
                            </div>

                            <div class="flex my-2">
                                <div class="my-2 flex-1 w-1/2 mr-2">
                                    <label class="mb-2 font-bold">Ciudad</label>
                                    <input type="text" class="w-full rounded dark:bg-dark dark:text-white">
                                </div>

                                <div class="my-2 flex-1 w-1/2 mr-2">
                                    <label class="mb-2 font-bold">Calle</label>
                                    <input type="text" class="w-full rounded dark:bg-dark dark:text-white">
                                </div>
                            </div>

                            <div class="flex my-2">
                                <div class="my-2 flex-1 w-1/2 mr-2">
                                    <label class="mb-2 font-bold">Número exterior</label>
                                    <input type="text" class="w-full rounded dark:bg-dark dark:text-white">
                                </div>

                                <div class="my-2 flex-1 w-1/2 mr-2">
                                    <label class="mb-2 font-bold">Número interior</label>
                                    <input type="text" class="w-full rounded dark:bg-dark dark:text-white">
                                </div>
                            </div>
                        </div>

                        <div class="my-4">
                            <input type="checkbox"> Invitar al empleado a ingresar la información adicional
                        </div>

                    </div>

                    <div class="card p-4 mb-4">
                        <h2 class="mb-3">Información básica adicional</h2>
                        <div class="flex my-2">
                            <div class="my-2 flex-1 w-1/3 mr-2">
                                <label class="mb-2 font-bold">Nacionalidad</label>
                                <select name="nacionalidad" id="nacionalidad"
                                        class="w-full rounded dark:bg-dark dark:text-white">
                                    <option value="">Seleccione</option>
                                    <option value="argentina">Argentina</option>
                                    <option value="">Afganistán</option>
                                    <option value="30">Albania</option>
                                    <option value="40">Alemania</option>
                                    <option value="50">Andorra</option>
                                    <option value="60">Angola</option>
                                    <option value="70">Anguilla</option>
                                    <option value="80">Antártida Argentina</option>
                                    <option value="90">Antigua y Barbuda</option>
                                    <option value="100">Antillas Holandesas</option>
                                    <option value="110">Arabia Saudita</option>
                                    <option value="120">Argelia</option>
                                    <option value="130">Armenia</option>
                                    <option value="140">Aruba</option>
                                    <option value="150">Australia</option>
                                    <option value="160">Austria</option>
                                    <option value="170">Azerbaiján</option>
                                    <option value="180">Bahamas</option>
                                    <option value="190">Bahrain</option>
                                    <option value="200">Bangladesh</option>
                                    <option value="210">Barbados</option>
                                    <option value="220">Bélgica</option>
                                    <option value="230">Belice</option>
                                    <option value="240">Benin</option>
                                    <option value="250">Bhutan</option>
                                    <option value="260">Bielorusia</option>
                                    <option value="bolivia">Bolivia</option>
                                    <option value="280">Bosnia Herzegovina</option>
                                    <option value="290">Botswana</option>
                                    <option value="brasil">Brasil</option>
                                    <option value="310">Brunei</option>
                                    <option value="320">Bulgaria</option>
                                    <option value="330">Burkina Faso</option>
                                    <option value="340">Burundi</option>
                                    <option value="350">Cabo Verde</option>
                                    <option value="360">Camboya</option>
                                    <option value="370">Camerún</option>
                                    <option value="380">Canadá</option>
                                    <option value="390">Chad</option>
                                    <option value="chile">Chile</option>
                                    <option value="410">China</option>
                                    <option value="420">Chipre</option>
                                    <option value="430">Colombia</option>
                                    <option value="440">Comoros</option>
                                    <option value="450">Congo</option>
                                    <option value="460">Corea del Norte</option>
                                    <option value="470">Corea del Sur</option>
                                    <option value="480">Costa de Marfil</option>
                                    <option value="490">Costa Rica</option>
                                    <option value="500">Croacia</option>
                                    <option value="510">Cuba</option>
                                    <option value="520">Darussalam</option>
                                    <option value="530">Dinamarca</option>
                                    <option value="540">Djibouti</option>
                                    <option value="550">Dominica</option>
                                    <option value="560">Ecuador</option>
                                    <option value="570">Egipto</option>
                                    <option value="580">El Salvador</option>
                                    <option value="590">Em. Arabes Un.</option>
                                    <option value="600">Eritrea</option>
                                    <option value="610">Eslovaquia</option>
                                    <option value="620">Eslovenia</option>
                                    <option value="espana">España</option>
                                    <option value="640">Estados Unidos</option>
                                    <option value="650">Estonia</option>
                                    <option value="660">Etiopía</option>
                                    <option value="670">Fiji</option>
                                    <option value="680">Filipinas</option>
                                    <option value="690">Finlandia</option>
                                    <option value="700">Francia</option>
                                    <option value="710">Gabón</option>
                                    <option value="720">Gambia</option>
                                    <option value="730">Georgia</option>
                                    <option value="740">Ghana</option>
                                    <option value="750">Gibraltar</option>
                                    <option value="760">Grecia</option>
                                    <option value="770">Grenada</option>
                                    <option value="780">Groenlandia</option>
                                    <option value="790">Guadalupe</option>
                                    <option value="800">Guam</option>
                                    <option value="810">Guatemala</option>
                                    <option value="820">Guayana Francesa</option>
                                    <option value="830">Guinea</option>
                                    <option value="840">Guinea Ecuatorial</option>
                                    <option value="850">Guinea-Bissau</option>
                                    <option value="860">Guyana</option>
                                    <option value="870">Haití</option>
                                    <option value="880">Holanda</option>
                                    <option value="890">Honduras</option>
                                    <option value="900">Hong Kong</option>
                                    <option value="910">Hungría</option>
                                    <option value="920">India</option>
                                    <option value="930">Indonesia</option>
                                    <option value="940">Irak</option>
                                    <option value="950">Irán</option>
                                    <option value="960">Irlanda</option>
                                    <option value="970">Islandia</option>
                                    <option value="980">Islas Cayman</option>
                                    <option value="990">Islas Cook</option>
                                    <option value="1000">Islas Faroe</option>
                                    <option value="1010">Islas Marianas del Norte</option>
                                    <option value="1020">Islas Marshall</option>
                                    <option value="1030">Islas Solomon</option>
                                    <option value="1040">Islas Turcas y Caicos</option>
                                    <option value="1050">Islas Vírgenes</option>
                                    <option value="1060">Islas Wallis y Futuna</option>
                                    <option value="1070">Israel</option>
                                    <option value="1080">Italia</option>
                                    <option value="1090">Jamaica</option>
                                    <option value="1100">Japón</option>
                                    <option value="1110">Jordania</option>
                                    <option value="1120">Kazajstán</option>
                                    <option value="1130">Kenya</option>
                                    <option value="1140">Kirguistán</option>
                                    <option value="1150">Kiribati</option>
                                    <option value="1160">Kuwait</option>
                                    <option value="1170">Laos</option>
                                    <option value="1180">Lesotho</option>
                                    <option value="1190">Letonia</option>
                                    <option value="1200">Líbano</option>
                                    <option value="1210">Liberia</option>
                                    <option value="1220">Libia</option>
                                    <option value="1230">Liechtenstein</option>
                                    <option value="1240">Lituania</option>
                                    <option value="1250">Luxemburgo</option>
                                    <option value="1260">Macao</option>
                                    <option value="1270">Macedonia</option>
                                    <option value="1280">Madagascar</option>
                                    <option value="1290">Malasia</option>
                                    <option value="1300">Malawi</option>
                                    <option value="1310">Mali</option>
                                    <option value="1320">Malta</option>
                                    <option value="1330">Marruecos</option>
                                    <option value="1340">Martinica</option>
                                    <option value="1350">Mauricio</option>
                                    <option value="1360">Mauritania</option>
                                    <option value="1370">Mayotte</option>
                                    <option value="1380">México</option>
                                    <option value="1390">Micronesia</option>
                                    <option value="1400">Moldova</option>
                                    <option value="1410">Mónaco</option>
                                    <option value="1420">Mongolia</option>
                                    <option value="1430">Montserrat</option>
                                    <option value="1440">Mozambique</option>
                                    <option value="1450">Myanmar</option>
                                    <option value="1460">Namibia</option>
                                    <option value="1470">Nauru</option>
                                    <option value="1480">Nepal</option>
                                    <option value="1490">Nicaragua</option>
                                    <option value="1500">Níger</option>
                                    <option value="1510">Nigeria</option>
                                    <option value="1520">Noruega</option>
                                    <option value="1530">Nueva Caledonia</option>
                                    <option value="1540">Nueva Zelandia</option>
                                    <option value="1550">Omán</option>
                                    <option value="1570">Pakistán</option>
                                    <option value="1580">Panamá</option>
                                    <option value="1590">Papua Nueva Guinea</option>
                                    <option value="paraguay">Paraguay</option>
                                    <option value="1610">Perú</option>
                                    <option value="1620">Pitcairn</option>
                                    <option value="1630">Polinesia Francesa</option>
                                    <option value="1640">Polonia</option>
                                    <option value="1650">Portugal</option>
                                    <option value="1660">Puerto Rico</option>
                                    <option value="1670">Qatar</option>
                                    <option value="1680">RD Congo</option>
                                    <option value="1690">Reino Unido</option>
                                    <option value="1700">República Centroafricana</option>
                                    <option value="1710">República Checa</option>
                                    <option value="1720">República Dominicana</option>
                                    <option value="1730">Reunión</option>
                                    <option value="1740">Rumania</option>
                                    <option value="1750">Rusia</option>
                                    <option value="1760">Rwanda</option>
                                    <option value="1770">Sahara Occidental</option>
                                    <option value="1780">Saint Pierre y Miquelon</option>
                                    <option value="1790">Samoa</option>
                                    <option value="1800">Samoa Americana</option>
                                    <option value="1810">San Cristóbal y Nevis</option>
                                    <option value="1820">San Marino</option>
                                    <option value="1830">Santa Elena</option>
                                    <option value="1840">Santa Lucía</option>
                                    <option value="1850">Sao Tomé y Príncipe</option>
                                    <option value="1860">Senegal</option>
                                    <option value="1870">Serbia y Montenegro</option>
                                    <option value="1880">Seychelles</option>
                                    <option value="1890">Sierra Leona</option>
                                    <option value="1900">Singapur</option>
                                    <option value="1910">Siria</option>
                                    <option value="1920">Somalia</option>
                                    <option value="1930">Sri Lanka</option>
                                    <option value="1940">Sudáfrica</option>
                                    <option value="1950">Sudán</option>
                                    <option value="1960">Suecia</option>
                                    <option value="1970">Suiza</option>
                                    <option value="1980">Suriname</option>
                                    <option value="1990">Swazilandia</option>
                                    <option value="2000">Taiwán</option>
                                    <option value="uruguay">Uruguay</option>
                                </select>
                            </div>
                            <div class="my-2 flex-1 w-1/3 mr-2">
                                <label class="mb-2 font-bold">Teléfono</label>
                                <input type="tel" pattern="[0-9]{10}"
                                       class="w-full rounded dark:bg-dark dark:text-white"
                                       placeholder="Teléfono a 10 digitos">
                            </div>
                            <div class="my-2 flex-1 w-1/3 mr-2">
                                <label class="mb-2 font-bold">Estado civil</label>
                                <select name="estadocivil" id="estadocivil"
                                        class="w-full rounded dark:bg-dark dark:text-white">
                                    <option value="">Soltero</option>
                                    <option value="">Casado</option>
                                    <option value="">Divorciado</option>
                                    <option value="">Separación en proceso judicial</option>
                                    <option value="">Viudo</option>
                                    <option value="">Concubinato</option>
                                </select>
                            </div>
                        </div>


                        <div class="my-2">
                            <label class="mb-2 font-bold">¿Tiene hijos?</label>
                            <div>
                                <form>
                                    <input type="radio" name="sons" class="my-2" value="male" checked> {{__('Yes')}}<br>
                                    <input type="radio" name="sons" class="my-2" value="female"> {{__('No')}}<br>
                                </form>
                            </div>
                            <div class="my-2">
                                <label class="mb-2 font-bold">Número de hijos</label>
                                <input type="text" class="w-full rounded dark:bg-dark dark:text-white">
                            </div>
                        </div>


                    </div>

                    <div class="card p-4 mb-4">
                        <h2 class="mb-3">Contacto de emergencia</h2>

                        <div class="flex my-2">
                            <div class="my-2 flex-1 w-1/3 mr-2">
                                <label class="mb-2 font-bold">Nombre</label>
                                <input type="text" class="w-full rounded dark:bg-dark dark:text-white">
                            </div>
                            <div class="my-2 flex-1 w-1/3 mr-2">
                                <label class="mb-2 font-bold">Apellido paterno</label>
                                <input type="text" class="w-full rounded dark:bg-dark dark:text-white">
                            </div>
                            <div class="my-2 flex-1 w-1/3 mr-2">
                                <label class="mb-2 font-bold">Apellido materno</label>
                                <input type="text" class="w-full rounded dark:bg-dark dark:text-white">
                            </div>
                        </div>

                        <div class="flex">
                            <div class="flex-1 w-1/3 mr-2 my-2">
                                <label class="mb-2 font-bold">Parentesco</label>
                                <input type="text" class="w-full rounded dark:bg-dark dark:text-white">
                            </div>
                            <div class="flex-1 w-1/3 my-2 mr-2">
                                <label class="mb-2 font-bold">Correo electrónico</label>
                                <input type="text" class="w-full rounded dark:bg-dark dark:text-white">
                            </div>
                            <div class="flex-1 w-1/3 my-2">
                                <label class="mb-2 font-bold">Teléfono</label>
                                <input type="tel" pattern="[0-9]{10}"
                                       class="w-full rounded dark:bg-dark dark:text-white"
                                       placeholder="Teléfono a 10 digitos">
                            </div>
                        </div>

                    </div>
                    <div class="btn-top-holder my-3 flow-root">
                        <a x-on:click="changeTab('employee')" class="btn btn-dark float-right">
                            {{ __('Next') }}
                        </a>
                    </div>
                </div>
                {{--                Empleo-------------------------------------------------------}}
                <div id="employee-table" class="retentions-table d-none">
                    <div class="card p-4 mb-2">
                        <h2 class="mb-2">Información del puesto
                        </h2>
                        <div class="my-2 flex">
                            <div class="my-2 flex-1 w-1/2 mr-2">
                                <label class="mb-2 font-bold">Sede</label>
                                <select name="sede" id="sede" class="w-full rounded dark:bg-dark dark:text-white">
                                    <option value="">CDMX</option>
                                    <option value="">GDL</option>
                                    <option value="">MTY</option>
                                </select>
                            </div>

                            <div class="my-2 flex-1 w-1/2 mr-2">
                                <label class="mb-2 font-bold">Estado</label>
                                <select name="area" id="area" class="w-full rounded dark:bg-dark dark:text-white">
                                    <option value="no">Seleccione uno...</option>
                                    <option value="Aguascalientes">Aguascalientes</option>
                                    <option value="Baja California">Baja California</option>
                                    <option value="Baja California Sur">Baja California Sur</option>
                                    <option value="Campeche">Campeche</option>
                                    <option value="Chiapas">Chiapas</option>
                                    <option value="Chihuahua">Chihuahua</option>
                                    <option value="CDMX">Ciudad de México</option>
                                    <option value="Coahuila">Coahuila</option>
                                    <option value="Colima">Colima</option>
                                    <option value="Durango">Durango</option>
                                    <option value="Estado de México">Estado de México</option>
                                    <option value="Guanajuato">Guanajuato</option>
                                    <option value="Guerrero">Guerrero</option>
                                    <option value="Hidalgo">Hidalgo</option>
                                    <option value="Jalisco">Jalisco</option>
                                    <option value="Michoacán">Michoacán</option>
                                    <option value="Morelos">Morelos</option>
                                    <option value="Nayarit">Nayarit</option>
                                    <option value="Nuevo León">Nuevo León</option>
                                    <option value="Oaxaca">Oaxaca</option>
                                    <option value="Puebla">Puebla</option>
                                    <option value="Querétaro">Querétaro</option>
                                    <option value="Quintana Roo">Quintana Roo</option>
                                    <option value="San Luis Potosí">San Luis Potosí</option>
                                    <option value="Sinaloa">Sinaloa</option>
                                    <option value="Sonora">Sonora</option>
                                    <option value="Tabasco">Tabasco</option>
                                    <option value="Tamaulipas">Tamaulipas</option>
                                    <option value="Tlaxcala">Tlaxcala</option>
                                    <option value="Veracruz">Veracruz</option>
                                    <option value="Yucatán">Yucatán</option>
                                    <option value="Zacatecas">Zacatecas</option>
                                </select>
                            </div>

                        </div>


                        <div class="my-2 flex">
                            <div class="my-2 flex-1 w-1/2 mr-2">
                                <label class="mb-2 font-bold">Área</label>
                                <select name="area" id="area" class="w-full rounded dark:bg-dark dark:text-white">
                                    <option value="">Seleccione</option>
                                    <option value="">Dirección</option>
                                    <option value="">Ventas</option>
                                    <option value="">MKT</option>
                                    <option value="">Administracion</option>
                                    <option value="">Contabilidad</option>
                                    <option value="">Almacen</option>
                                </select>
                            </div>

                            <div class="my-2 flex-1 w-1/2 mr-2">
                                <label class="mb-2 font-bold">Puesto de trabajo</label>
                                <select name="puesto" id="puesto" class="w-full rounded dark:bg-dark dark:text-white">
                                    <option value="">Seleccione</option>
                                    <option value="">Director</option>
                                    <option value="argentina">Gerente</option>
                                    <option value="">Supervisor</option>
                                </select>
                            </div>

                        </div>

                        <div class="my-2 w-full mr-2">
                            <label class="mb-2 font-bold">Politicas</label>
                            <select name="politica" id="politica" class="w-full rounded dark:bg-dark dark:text-white">
                                <option value="">Seleccione</option>
                                <option value="">Política 1</option>
                                <option value="">Política 1</option>
                                <option value="">Política 1</option>
                            </select>
                        </div>

                        <div class="my-2">
                            <label class="mb-2 font-bold">Sindicalizado</label>
                            <div class="flex">
                                <form>
                                    <input type="radio" name="sindicate" class="my-2" value="yes" checked> {{__('Yes')}}
                                    <br>
                                    <input type="radio" name="sindicate" class="my-2" value="no"> {{__('No')}}<br>
                                </form>
                            </div>
                        </div>

                    </div>

                    <div class="card p-4 mb-2">
                        <h2 class="mb-2">Información de contrato
                        </h2>
                        <div class="my-2 flex">
                            <div class="my-2 flex-1 w-1/2 mr-2">
                                <label class="mb-2 font-bold">Fecha de antigüedad</label>
                                {{--Date Picker---------------}}
                                <div
                                    class="flex-1 items-center justify-center h-full dark:bg-dark dark:text-white">
                                    <script
                                        src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"
                                        defer></script>

                                    <style>
                                        [x-cloak] {
                                            display: none;
                                        }
                                    </style>

                                    <div class="antialiased sans-serif w-full">
                                        <div x-data="app()" x-init="[initDate(), getNoOfDays()]"
                                             x-cloak>
                                            <div class="container mx-auto">
                                                <div class="mb-1">

                                                    <div class="relative">
                                                        <input type="hidden" name="date" x-ref="date"/>
                                                        <input
                                                            type="text"
                                                            readonly
                                                            x-model="datepickerValue"
                                                            @click="showDatepicker = !showDatepicker"
                                                            @keydown.escape="showDatepicker = false"
                                                            class=" w-full
                                                                    pl-4
                                                                    pr-10
                                                                    pt-2
                                                                    pb-3
                                                                    leading-none
                                                                    rounded-lg
                                                                    shadow-sm
                                                                    focus:outline-none focus:shadow-outline
                                                                    text-gray-600
                                                                    font-medium"
                                                            placeholder={{__('Select Date')}}
                                                        />

                                                        <div class="absolute top-0 right-0 px-3 py-2">
                                                            <svg
                                                                class="h-6 w-6 text-gray-400"
                                                                fill="none"
                                                                viewBox="0 0 24 24"
                                                                stroke="currentColor"
                                                            >
                                                                <path
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                                                                />
                                                            </svg>
                                                        </div>

                                                        <!-- <div x-text="no_of_days.length"></div>
                                                                    <div x-text="32 - new Date(year, month, 32).getDate()"></div>
                                                                    <div x-text="new Date(year, month).getDay()"></div> -->

                                                        <div
                                                            class="bg-white
                                                                    mt-12
                                                                    rounded-lg
                                                                    shadow
                                                                    p-4
                                                                    absolute
                                                                    top-0
                                                                    left-0"
                                                            style="width: 17rem"
                                                            x-show.transition="showDatepicker"
                                                            @click.away="showDatepicker = false"
                                                        >
                                                            <div
                                                                class="flex justify-between items-center mb-2">
                                                                <div>
                  <span
                      x-text="MONTH_NAMES[month]"
                      class="text-lg font-bold text-gray-800"
                  ></span>
                                                                    <span
                                                                        x-text="year"
                                                                        class="ml-1 text-lg text-gray-600 font-normal"
                                                                    ></span>
                                                                </div>
                                                                <div>
                                                                    <button
                                                                        type="button"
                                                                        class="transition
                                                                                ease-in-out
                                                                                duration-100
                                                                                inline-flex
                                                                                cursor-pointer
                                                                                hover:bg-gray-200
                                                                                p-1
                                                                                rounded-full"
                                                                        :class="{'cursor-not-allowed opacity-25': month == 0 }"
                                                                        :disabled="month == 0 ? true : false"
                                                                        @click="month--; getNoOfDays()"
                                                                    >
                                                                        <svg
                                                                            class="h-6 w-6 text-gray-500 inline-flex"
                                                                            fill="none"
                                                                            viewBox="0 0 24 24"
                                                                            stroke="currentColor"
                                                                        >
                                                                            <path
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                stroke-width="2"
                                                                                d="M15 19l-7-7 7-7"
                                                                            />
                                                                        </svg>
                                                                    </button>
                                                                    <button
                                                                        type="button"
                                                                        class="transition
                                                                                ease-in-out
                                                                                duration-100
                                                                                inline-flex
                                                                                cursor-pointer
                                                                                hover:bg-gray-200
                                                                                p-1
                                                                                rounded-full"
                                                                        :class="{'cursor-not-allowed opacity-25': month == 11 }"
                                                                        :disabled="month == 11 ? true : false"
                                                                        @click="month++; getNoOfDays()"
                                                                    >
                                                                        <svg
                                                                            class="h-6 w-6 text-gray-500 inline-flex"
                                                                            fill="none"
                                                                            viewBox="0 0 24 24"
                                                                            stroke="currentColor"
                                                                        >
                                                                            <path
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                stroke-width="2"
                                                                                d="M9 5l7 7-7 7"
                                                                            />
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <div class="flex flex-wrap mb-3 -mx-1">
                                                                <template x-for="(day, index) in DAYS"
                                                                          :key="index">
                                                                    <div style="width: 14.26%"
                                                                         class="px-1">
                                                                        <div
                                                                            x-text="day"
                                                                            class="text-gray-800 font-medium text-center text-xs"
                                                                        ></div>
                                                                    </div>
                                                                </template>
                                                            </div>

                                                            <div class="flex flex-wrap -mx-1">
                                                                <template x-for="blankday in blankdays">
                                                                    <div
                                                                        style="width: 14.28%"
                                                                        class="text-center
                                                                                border
                                                                                p-1
                                                                                border-transparent
                                                                                text-sm"
                                                                    ></div>
                                                                </template>
                                                                <template
                                                                    x-for="(date, dateIndex) in no_of_days"
                                                                    :key="dateIndex"
                                                                >
                                                                    <div style="width: 14.28%"
                                                                         class="px-1 mb-1">
                                                                        <div
                                                                            @click="getDateValue(date)"
                                                                            x-text="date"
                                                                            class="cursor-pointer
                                                                                    text-center text-sm
                                                                                    leading-none
                                                                                    rounded-full
                                                                                    leading-loose
                                                                                    transition
                                                                                    ease-in-out
                                                                                    duration-100"
                                                                            :class="{'bg-blue-500 text-white': isToday(date) == true, 'text-gray-700 hover:bg-blue-200': isToday(date) == false }"
                                                                        ></div>
                                                                    </div>
                                                                </template>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            const MONTH_NAMES = [
                                                "{{__('January')}}",
                                                "{{__('February')}}",
                                                "{{__('March')}}",
                                                "{{__('April')}}",
                                                "{{__('May')}}",
                                                "{{__('June')}}",
                                                "{{__('July')}}",
                                                "{{__('August')}}",
                                                "{{__('September')}}",
                                                "{{__('October')}}",
                                                "{{__('November')}}",
                                                "{{__('December')}}",
                                            ];
                                            const DAYS = ["{{__('Sun')}}", "{{__('Mon')}}", "{{__('Tue')}}", "{{__('Wed')}}", "{{__('Thu')}}", "{{__('Fri')}}", "{{__('Sat')}}"];

                                            function app() {
                                                return {
                                                    showDatepicker: false,
                                                    datepickerValue: "",

                                                    month: "",
                                                    year: "",
                                                    no_of_days: [],
                                                    blankdays: [],
                                                    days: ["{{__('Sun')}}", "{{__('Mon')}}", "{{__('Tue')}}", "{{__('Wed')}}", "{{__('Thu')}}", "{{__('Fri')}}", "{{__('Sat')}}"],

                                                    initDate() {
                                                        let today = new Date();
                                                        this.month = today.getMonth();
                                                        this.year = today.getFullYear();
                                                        this.datepickerValue = new Date(
                                                            this.year,
                                                            this.month,
                                                            today.getDate()
                                                        ).toDateString();
                                                    },

                                                    isToday(date) {
                                                        const today = new Date();
                                                        const d = new Date(this.year, this.month, date);

                                                        return today.toDateString() === d.toDateString() ? true : false;
                                                    },

                                                    getDateValue(date) {
                                                        let selectedDate = new Date(this.year, this.month, date);
                                                        this.datepickerValue = selectedDate.toDateString();

                                                        this.$refs.date.value =
                                                            selectedDate.getFullYear() +
                                                            "-" +
                                                            ("0" + selectedDate.getMonth()).slice(-2) +
                                                            "-" +
                                                            ("0" + selectedDate.getDate()).slice(-2);

                                                        console.log(this.$refs.date.value);

                                                        this.showDatepicker = false;
                                                    },

                                                    getNoOfDays() {
                                                        let daysInMonth = new Date(
                                                            this.year,
                                                            this.month + 1,
                                                            0
                                                        ).getDate();

                                                        // find where to start calendar day of week
                                                        let dayOfWeek = new Date(this.year, this.month).getDay();
                                                        let blankdaysArray = [];
                                                        for (var i = 1; i <= dayOfWeek; i++) {
                                                            blankdaysArray.push(i);
                                                        }

                                                        let daysArray = [];
                                                        for (var i = 1; i <= daysInMonth; i++) {
                                                            daysArray.push(i);
                                                        }

                                                        this.blankdays = blankdaysArray;
                                                        this.no_of_days = daysArray;
                                                    },
                                                };
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>

                            <div class="my-2 flex-1 w-1/2 mr-2">
                                <label class="mb-2 font-bold">Tipo de contrato</label>
                                <select name="tipocontrato" id="tipocontrato"
                                        class="w-full rounded dark:bg-dark dark:text-white">
                                    <option value="">Seleccione</option>
                                    <option value="">Contrato de trabajo por tiempo indeterminado</option>
                                    <option value="">Contrato de trabajo para obra determinada</option>
                                    <option value="">Contrato de trabajo por tiempo determinado</option>
                                    <option value="">Contrato de trabajo por temporada</option>
                                    <option value="">Contrato de trabajo sujeto a prueba</option>
                                    <option value="">Contrato de trabajo con capacitación inicial</option>
                                    <option value="">Modalidad de contratación por pago de hora laborada</option>
                                    <option value="">Modalidad de trabajo por comisión laboral</option>
                                    <option value="">Modalidades de contratación donde no existe relación de trabajo
                                    </option>
                                    <option value="">Jubilación, pensión, retiro</option>
                                    <option value="">Otro contrato</option>
                                </select>
                            </div>
                        </div>

                        <div class="my-2 flex">
                            <div class="my-2 flex-1 w-1/2 mr-2">
                                <label class="mb-2 font-bold">Fecha de inicio de contrato</label>
                                {{--Date Picker---------------}}
                                <div
                                    class="flex-1 items-center justify-center h-full dark:bg-dark dark:text-white">
                                    <script
                                        src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"
                                        defer></script>

                                    <style>
                                        [x-cloak] {
                                            display: none;
                                        }
                                    </style>

                                    <div class="antialiased sans-serif w-full">
                                        <div x-data="app()" x-init="[initDate(), getNoOfDays()]"
                                             x-cloak>
                                            <div class="container mx-auto">
                                                <div class="mb-1">

                                                    <div class="relative">
                                                        <input type="hidden" name="date" x-ref="date"/>
                                                        <input
                                                            type="text"
                                                            readonly
                                                            x-model="datepickerValue"
                                                            @click="showDatepicker = !showDatepicker"
                                                            @keydown.escape="showDatepicker = false"
                                                            class=" w-full
                                                                    pl-4
                                                                    pr-10
                                                                    pt-2
                                                                    pb-3
                                                                    leading-none
                                                                    rounded-lg
                                                                    shadow-sm
                                                                    focus:outline-none focus:shadow-outline
                                                                    text-gray-600
                                                                    font-medium"
                                                            placeholder={{__('Select Date')}}
                                                        />

                                                        <div class="absolute top-0 right-0 px-3 py-2">
                                                            <svg
                                                                class="h-6 w-6 text-gray-400"
                                                                fill="none"
                                                                viewBox="0 0 24 24"
                                                                stroke="currentColor"
                                                            >
                                                                <path
                                                                    stroke-linecap="round"
                                                                    stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"
                                                                />
                                                            </svg>
                                                        </div>

                                                        <!-- <div x-text="no_of_days.length"></div>
                                                                    <div x-text="32 - new Date(year, month, 32).getDate()"></div>
                                                                    <div x-text="new Date(year, month).getDay()"></div> -->

                                                        <div
                                                            class="bg-white
                                                                    mt-12
                                                                    rounded-lg
                                                                    shadow
                                                                    p-4
                                                                    absolute
                                                                    top-0
                                                                    left-0"
                                                            style="width: 17rem"
                                                            x-show.transition="showDatepicker"
                                                            @click.away="showDatepicker = false"
                                                        >
                                                            <div
                                                                class="flex justify-between items-center mb-2">
                                                                <div>
                  <span
                      x-text="MONTH_NAMES[month]"
                      class="text-lg font-bold text-gray-800"
                  ></span>
                                                                    <span
                                                                        x-text="year"
                                                                        class="ml-1 text-lg text-gray-600 font-normal"
                                                                    ></span>
                                                                </div>
                                                                <div>
                                                                    <button
                                                                        type="button"
                                                                        class="transition
                                                                                ease-in-out
                                                                                duration-100
                                                                                inline-flex
                                                                                cursor-pointer
                                                                                hover:bg-gray-200
                                                                                p-1
                                                                                rounded-full"
                                                                        :class="{'cursor-not-allowed opacity-25': month == 0 }"
                                                                        :disabled="month == 0 ? true : false"
                                                                        @click="month--; getNoOfDays()"
                                                                    >
                                                                        <svg
                                                                            class="h-6 w-6 text-gray-500 inline-flex"
                                                                            fill="none"
                                                                            viewBox="0 0 24 24"
                                                                            stroke="currentColor"
                                                                        >
                                                                            <path
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                stroke-width="2"
                                                                                d="M15 19l-7-7 7-7"
                                                                            />
                                                                        </svg>
                                                                    </button>
                                                                    <button
                                                                        type="button"
                                                                        class="transition
                                                                                ease-in-out
                                                                                duration-100
                                                                                inline-flex
                                                                                cursor-pointer
                                                                                hover:bg-gray-200
                                                                                p-1
                                                                                rounded-full"
                                                                        :class="{'cursor-not-allowed opacity-25': month == 11 }"
                                                                        :disabled="month == 11 ? true : false"
                                                                        @click="month++; getNoOfDays()"
                                                                    >
                                                                        <svg
                                                                            class="h-6 w-6 text-gray-500 inline-flex"
                                                                            fill="none"
                                                                            viewBox="0 0 24 24"
                                                                            stroke="currentColor"
                                                                        >
                                                                            <path
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round"
                                                                                stroke-width="2"
                                                                                d="M9 5l7 7-7 7"
                                                                            />
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <div class="flex flex-wrap mb-3 -mx-1">
                                                                <template x-for="(day, index) in DAYS"
                                                                          :key="index">
                                                                    <div style="width: 14.26%"
                                                                         class="px-1">
                                                                        <div
                                                                            x-text="day"
                                                                            class="text-gray-800 font-medium text-center text-xs"
                                                                        ></div>
                                                                    </div>
                                                                </template>
                                                            </div>

                                                            <div class="flex flex-wrap -mx-1">
                                                                <template x-for="blankday in blankdays">
                                                                    <div
                                                                        style="width: 14.28%"
                                                                        class="text-center
                                                                                border
                                                                                p-1
                                                                                border-transparent
                                                                                text-sm"
                                                                    ></div>
                                                                </template>
                                                                <template
                                                                    x-for="(date, dateIndex) in no_of_days"
                                                                    :key="dateIndex"
                                                                >
                                                                    <div style="width: 14.28%"
                                                                         class="px-1 mb-1">
                                                                        <div
                                                                            @click="getDateValue(date)"
                                                                            x-text="date"
                                                                            class="cursor-pointer
                                                                                    text-center text-sm
                                                                                    leading-none
                                                                                    rounded-full
                                                                                    leading-loose
                                                                                    transition
                                                                                    ease-in-out
                                                                                    duration-100"
                                                                            :class="{'bg-blue-500 text-white': isToday(date) == true, 'text-gray-700 hover:bg-blue-200': isToday(date) == false }"
                                                                        ></div>
                                                                    </div>
                                                                </template>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            const MONTH_NAMES = [
                                                "{{__('January')}}",
                                                "{{__('February')}}",
                                                "{{__('March')}}",
                                                "{{__('April')}}",
                                                "{{__('May')}}",
                                                "{{__('June')}}",
                                                "{{__('July')}}",
                                                "{{__('August')}}",
                                                "{{__('September')}}",
                                                "{{__('October')}}",
                                                "{{__('November')}}",
                                                "{{__('December')}}",
                                            ];
                                            const DAYS = ["{{__('Sun')}}", "{{__('Mon')}}", "{{__('Tue')}}", "{{__('Wed')}}", "{{__('Thu')}}", "{{__('Fri')}}", "{{__('Sat')}}"];

                                            function app() {
                                                return {
                                                    showDatepicker: false,
                                                    datepickerValue: "",

                                                    month: "",
                                                    year: "",
                                                    no_of_days: [],
                                                    blankdays: [],
                                                    days: ["{{__('Sun')}}", "{{__('Mon')}}", "{{__('Tue')}}", "{{__('Wed')}}", "{{__('Thu')}}", "{{__('Fri')}}", "{{__('Sat')}}"],

                                                    initDate() {
                                                        let today = new Date();
                                                        this.month = today.getMonth();
                                                        this.year = today.getFullYear();
                                                        this.datepickerValue = new Date(
                                                            this.year,
                                                            this.month,
                                                            today.getDate()
                                                        ).toDateString();
                                                    },

                                                    isToday(date) {
                                                        const today = new Date();
                                                        const d = new Date(this.year, this.month, date);

                                                        return today.toDateString() === d.toDateString() ? true : false;
                                                    },

                                                    getDateValue(date) {
                                                        let selectedDate = new Date(this.year, this.month, date);
                                                        this.datepickerValue = selectedDate.toDateString();

                                                        this.$refs.date.value =
                                                            selectedDate.getFullYear() +
                                                            "-" +
                                                            ("0" + selectedDate.getMonth()).slice(-2) +
                                                            "-" +
                                                            ("0" + selectedDate.getDate()).slice(-2);

                                                        console.log(this.$refs.date.value);

                                                        this.showDatepicker = false;
                                                    },

                                                    getNoOfDays() {
                                                        let daysInMonth = new Date(
                                                            this.year,
                                                            this.month + 1,
                                                            0
                                                        ).getDate();

                                                        // find where to start calendar day of week
                                                        let dayOfWeek = new Date(this.year, this.month).getDay();
                                                        let blankdaysArray = [];
                                                        for (var i = 1; i <= dayOfWeek; i++) {
                                                            blankdaysArray.push(i);
                                                        }

                                                        let daysArray = [];
                                                        for (var i = 1; i <= daysInMonth; i++) {
                                                            daysArray.push(i);
                                                        }

                                                        this.blankdays = blankdaysArray;
                                                        this.no_of_days = daysArray;
                                                    },
                                                };
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>

                            <div class="my-2 flex-1 w-1/2 mr-2">
                                <label class="mb-2 font-bold">Tipo de empleado</label>
                                <select name="tipoempleado" id="tipoempleado"
                                        class="w-full rounded dark:bg-dark dark:text-white">
                                    <option value="">Seleccione</option>
                                    <option value="">Sueldo fijo</option>
                                    <option value="">Sueldo variable</option>
                                    <option value="">Comisiones</option>
                                </select>
                            </div>
                        </div>

                        <div class="my-2 flex">
                            <div class="my-2 flex-1 w-1/2 mr-2">
                                <label class="mb-2 font-bold">Jornada</label>
                                <select name="joranda" id="joranda" class="w-full rounded dark:bg-dark dark:text-white">
                                    <option value="">Seleccione</option>
                                    <option value="">Matutina</option>
                                    <option value="">Vespertina</option>
                                    <option value="">Nocturna</option>
                                    <option value="">Mixta</option>
                                </select>
                            </div>
                            <div class="my-2 flex-1 w-1/2">
                                <label class="mb-2 font-bold">Área geográfica</label>
                                <select name="areageografica" id="areageografica"
                                        class="w-full rounded dark:bg-dark dark:text-white">
                                    <option value="">Seleccione</option>
                                    <option value="">Área general</option>
                                    <option value="">Área frontera</option>
                                </select>
                            </div>
                        </div>

                        <div class="my-4">
                            <input type="checkbox"> Empleado subcontratado
                        </div>

                    </div>

                    <div class="card p-4 mb-2">
                        <h2 class="mb-2">Compensación
                        </h2>
                        <div class="my-2 flex">
                            <div class="my-2 flex-1 w-1/2 mr-2">
                                <label class="mb-2 font-bold">Grupo de nómina</label>
                                <select name="gruponomina" id="gruponomina"
                                        class="w-full rounded dark:bg-dark dark:text-white">
                                    <option value="">Seleccione</option>
                                    <option value="">Grupo 1 (Semanal)</option>
                                    <option value="">Grupo 2 (Quincenal)</option>
                                    <option value="">Grupo 3 (Mensual)</option>
                                </select>
                            </div>

                            <div class="my-2 flex-1 w-1/2 mr-2">

                                <label class="mb-2 font-bold">Tabla de beneficios</label>
                                <select name="tablabeneficios" id="tablabeneficios"
                                        class="w-full rounded dark:bg-dark dark:text-white">
                                    <option value="">Seleccione</option>
                                    <option value="">Directivos</option>
                                    <option value="">Gerentes</option>
                                    <option value="">Emplleados</option>
                                </select>
                            </div>
                        </div>

                            <div class="my-2 w-full">
                                <label class="mb-2 font-bold">Sueldo bruto mensual</label>
                                <input type="text" class="w-full rounded dark:bg-dark dark:text-white">
                            </div>


                        <div class="my-2 w-full mr-2">
                            <label class="mb-2 font-bold">Metodo de pago</label>
                            <select name="metodopago" id="metodopago"
                                    class="w-full rounded dark:bg-dark dark:text-white">
                                <option value="">Seleccione</option>
                                <option selected value="">Deposito bancario</option>
                                <option value="">Pago por cheque</option>
                                <option value="">Pago en efectivo</option>
                            </select>
                        </div>
                        <div class="rounded flex flex-col p-4 relative drop-shadow-sm bg-gray-200 p-2 my-2">
                            <h2 class="mb-2">Datos bancarios
                            </h2>
                            <label class="font-bold" for="name">{{__('Account name')}}</label>
                            <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name"
                                   name="Name">

                            <label class="font-bold" for="name">{{__('Account number')}}</label>
                            <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name"
                                   name="Name">


                            <label class="font-bold my-2" for="name">{{__('Bank')}}</label>
                            <label>
                                <select class="w-full rounded dark:bg-dark dark:text-white">
                                    <option value="">{{__('Select')}}</option>

                                </select>
                            </label>

                            <label class="font-bold" for="name">{{__('Information number')}}</label>
                            <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name"
                                   name="Name">

                            <label class="font-bold" for="name">{{__('Branch number')}}</label>
                            <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name"
                                   name="Name">

                            <label class="font-bold" for="name">{{__('CLABE account')}}</label>
                            <input class="text-gray-800 rounded my-2 dark:bg-dark dark:text-white" type="text" id="name"
                                   name="Name">
                        </div>
                    </div>

                    <div class="btn-top-holder my-3 flow-root">
                        <a class="btn btn-dark float-right cursor-pointer">
                            {{ __('Save') }}
                        </a>
                    </div>

                </div>


            </div>

        </div>
    </div>
    @push('inline_scripts')
        <script>
            // Alpine function to change between tabs
            function data() {
                return {
                    changeTab(button) {
                        let retentionsButton = document.getElementById(`${button}-button`);
                        let retentionTabs = document.querySelectorAll('.tab-retention')
                        let allRetentionTables = document.querySelectorAll('.retentions-table')
                        let retentionTable = document.getElementById(`${button}-table`)

                        // Change all active classes to the othew tabs and added only the clicked button, active class.
                        if (!retentionsButton.classList.contains('active')) {
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
