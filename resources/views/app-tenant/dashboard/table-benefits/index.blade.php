<x-app-tenant>
    <div class="container">

        <x-utilities.section-header classes="" title="Benefits table" />

        <div class="btn-top-holder my-3 max-w-6xl mx-auto">
            <a href="{{route('table-benefits.create',1)}}" class="btn btn-dark">
                <i class="fas fa-plus-circle"></i>
                {{ __('New table of benefits') }}
            </a>
        </div>
        <div class="card bg-white shadow-sm rounded p-4 max-w-6xl my-2 mx-auto dark:bg-dark dark:text-white">
            <table class="table">
                <tr>
                    <th style="width: 16.6%">{{__('Name')}}</th>
                    <th style="width: 16.6%">{{__('Bonus days')}}</th>
                    <th style="width: 16.6%">{{__('Vacations')}}</th>
                    <th style="width: 16.6%">{{__('Vacation premium')}}</th>
                    <th style="width: 16.6%">{{__('Economic days')}}</th>
                    <th style="width: 16.6%"></th>
                </tr>
            </table>
            {{--ACCORDION--}}
            <div class="mb-2 text-white shadow-sm dark:bg-dark rounded">
                <div class="accordion" id="newItem">

                    {{--J1--------------}}
                    <div class="accordion-item">
                        <div class="accordion-header mr-4" id="headingOne">
                            <table class="table">

                                <td style="width: 16.6%">Estandar</td>
                                <td style="width: 16.6%">15</td>
                                <td style="width: 16.6%">6</td>
                                <td style="width: 16.6%">0.25</td>
                                <td style="width: 16.6%">0</td>
                                <td style="width: 2%">
                                    <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseS1"
                                            aria-expanded="false" aria-controls="collapseS1">
                                        <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                    </button>
                                </td>
                                <td style="width: 2%"><a href="{{route('table-benefits.edit',1)}}">
                                        <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></a>
                                </td>
                                <td style="width: 2%"><i class="fas fa-trash-alt text-gray-400"></i></td>

                            </table>
                        </div>

                        <div id="collapseS1" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#newItem">
                            <div class="accordion-body text-dark bg-gray-200 dark:bg-dark dark:text-white">

                                <div class="row bg-gray-200 dark:bg-dark dark:text-white">
                                    <div class="col-md-3 text-center"><label class="my-2 font-bold">{{__('Años antiguedad')}}</label></div>
                                    <div class="col-md-2 text-center"><label class="my-2 font-bold">{{__('Bonus days')}}</label></div>
                                    <div class="col-md-2 text-center"><label class="my-2 font-bold">{{__('Vacations')}}</label> </div>
                                    <div class="col-md-2 text-center"><label class="my-2 font-bold">{{__('Vacation premium')}}</label> </div>
                                    <div class="col-md-2 text-center"><label class="my-2 font-bold">{{__('Economic days')}}</label> </div>
                                </div>
                                <div class="row bg-gray-100 dark:bg-dark dark:text-white">
                                    <div class="col-md-3 text-center"><label class="my-2"> </label>1</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>15</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>6</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0.25</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0</div>
                                </div>
                                <div class="row bg-gray-200 dark:bg-dark dark:text-white">
                                    <div class="col-md-3 text-center"><label class="my-2"> </label>2</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>15</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>8</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0.25</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0</div>
                                </div>
                                <div class="row bg-gray-100 dark:bg-dark dark:text-white">
                                    <div class="col-md-3 text-center"><label class="my-2"> </label>3</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>15</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>10</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0.25</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0</div>
                                </div>
                                <div class="row bg-gray-200 dark:bg-dark dark:text-white">
                                    <div class="col-md-3 text-center"><label class="my-2"> </label>4</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>15</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>12</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0.25</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0</div>
                                </div>
                                <div class="row bg-gray-100 dark:bg-dark dark:text-white">
                                    <div class="col-md-3 text-center"><label class="my-2"> </label>5-9</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>15</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>14</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0.25</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0</div>
                                </div>
                                <div class="row bg-gray-200 dark:bg-dark dark:text-white">
                                    <div class="col-md-3 text-center"><label class="my-2"> </label>10-14</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>15</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>16</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0.25</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0</div>
                                </div>
                                <div class="row bg-gray-100 dark:bg-dark dark:text-white">
                                    <div class="col-md-3 text-center"><label class="my-2"> </label>15-19</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>15</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>18</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0.25</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0</div>
                                </div>
                                <div class="row bg-gray-200 dark:bg-dark dark:text-white">
                                    <div class="col-md-3 text-center"><label class="my-2"> </label>20-24</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>15</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>20</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0.25</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0</div>
                                </div>
                                <div class="row bg-gray-100 dark:bg-dark dark:text-white">
                                    <div class="col-md-3 text-center"><label class="my-2"> </label>25-*</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>15</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>22</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0.25</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0</div>
                                </div>




                            </div>
                        </div>
                    </div>



                    {{--J2--------------}}
                    <div class="accordion-item">
                        <div class="accordion-header mr-4" id="headingFiel">

                            <table class="table">

                                <td style="width: 16.6%">Ejecutivos</td>
                                <td style="width: 16.6%">15</td>
                                <td style="width: 16.6%">8</td>
                                <td style="width: 16.6%">0.25</td>
                                <td style="width: 16.6%">2</td>
                                <td style="width: 2%">
                                    <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseS2"
                                            aria-expanded="false" aria-controls="collapseS2">
                                        <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                    </button>
                                </td>
                                <td style="width: 2%"><a href="{{route('working-day-holiday.edit',1)}}">
                                        <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></a>
                                </td>
                                <td style="width: 2%"><i class="fas fa-trash-alt text-gray-400"></i></td>

                            </table>

                        </div>
                        <div id="collapseS2" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#newItem">
                            <div class="accordion-body text-dark bg-gray-200 dark:bg-dark dark:text-white">

                                <div class="row bg-gray-200 dark:bg-dark dark:text-white">
                                    <div class="col-md-3 text-center"><label class="my-2 font-bold">{{__('Años antiguedad')}}</label></div>
                                    <div class="col-md-2 text-center"><label class="my-2 font-bold">{{__('Bonus days')}}</label></div>
                                    <div class="col-md-2 text-center"><label class="my-2 font-bold">{{__('Vacations')}}</label> </div>
                                    <div class="col-md-2 text-center"><label class="my-2 font-bold">{{__('Vacation premium')}}</label> </div>
                                    <div class="col-md-2 text-center"><label class="my-2 font-bold">{{__('Economic days')}}</label> </div>
                                </div>
                                <div class="row bg-gray-100 dark:bg-dark dark:text-white">
                                    <div class="col-md-3 text-center"><label class="my-2"> </label>1</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>15</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>8</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0.25</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>2</div>
                                </div>
                                <div class="row bg-gray-200 dark:bg-dark dark:text-white">
                                    <div class="col-md-3 text-center"><label class="my-2"> </label>2</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>15</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>10</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0.25</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>3</div>
                                </div>
                                <div class="row bg-gray-100 dark:bg-dark dark:text-white">
                                    <div class="col-md-3 text-center"><label class="my-2"> </label>3</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>15</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>12</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0.25</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>4</div>
                                </div>
                                <div class="row bg-gray-200 dark:bg-dark dark:text-white">
                                    <div class="col-md-3 text-center"><label class="my-2"> </label>4</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>15</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>14</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0.25</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>5</div>
                                </div>
                                <div class="row bg-gray-100 dark:bg-dark dark:text-white">
                                    <div class="col-md-3 text-center"><label class="my-2"> </label>5-9</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>15</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>16</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0.25</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>5</div>
                                </div>
                                <div class="row bg-gray-200 dark:bg-dark dark:text-white">
                                    <div class="col-md-3 text-center"><label class="my-2"> </label>10-14</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>15</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>18</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0.25</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>5</div>
                                </div>
                                <div class="row bg-gray-100 dark:bg-dark dark:text-white">
                                    <div class="col-md-3 text-center"><label class="my-2"> </label>15-19</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>15</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>20</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0.25</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>5</div>
                                </div>
                                <div class="row bg-gray-200 dark:bg-dark dark:text-white">
                                    <div class="col-md-3 text-center"><label class="my-2"> </label>20-24</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>15</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>22</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0.25</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>6</div>
                                </div>
                                <div class="row bg-gray-100 dark:bg-dark dark:text-white">
                                    <div class="col-md-3 text-center"><label class="my-2"> </label>25-*</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>15</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>24</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0.25</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>6</div>
                                </div>




                            </div>
                        </div>
                    </div>

                    {{--J3--------------}}
                    <div class="accordion-item">
                        <div class="accordion-header mr-4" id="headingFiel">

                            <table class="table">

                                <td style="width: 16.6%">Directores</td>
                                <td style="width: 16.6%">20</td>
                                <td style="width: 16.6%">12</td>
                                <td style="width: 16.6%">0.5</td>
                                <td style="width: 16.6%">7</td>
                                <td style="width: 2%">
                                    <button type="button" data-bs-toggle="collapse" data-bs-target="#collapseS3"
                                            aria-expanded="false" aria-controls="collapseS1">
                                        <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                    </button>
                                </td>
                                <td style="width: 2%"><a href="{{route('working-day-holiday.edit',1)}}">
                                        <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></a>
                                </td>
                                <td style="width: 2%"><i class="fas fa-trash-alt text-gray-400"></i></td>

                            </table>

                        </div>
                        <div id="collapseS3" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                             data-bs-parent="#newItem">
                            <div class="accordion-body text-dark bg-gray-200 dark:bg-dark dark:text-white">

                                <div class="row bg-gray-200 dark:bg-dark dark:text-white">
                                    <div class="col-md-3 text-center"><label class="my-2 font-bold">{{__('Años antiguedad')}}</label></div>
                                    <div class="col-md-2 text-center"><label class="my-2 font-bold">{{__('Bonus days')}}</label></div>
                                    <div class="col-md-2 text-center"><label class="my-2 font-bold">{{__('Vacations')}}</label> </div>
                                    <div class="col-md-2 text-center"><label class="my-2 font-bold">{{__('Vacation premium')}}</label> </div>
                                    <div class="col-md-2 text-center"><label class="my-2 font-bold">{{__('Economic days')}}</label> </div>
                                </div>
                                <div class="row bg-gray-100 dark:bg-dark dark:text-white">
                                    <div class="col-md-3 text-center"><label class="my-2"> </label>1</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>20</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>12</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0.50</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>7</div>
                                </div>
                                <div class="row bg-gray-200 dark:bg-dark dark:text-white">
                                    <div class="col-md-3 text-center"><label class="my-2"> </label>2</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>20</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>14</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0.50</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>7</div>
                                </div>
                                <div class="row bg-gray-100 dark:bg-dark dark:text-white">
                                    <div class="col-md-3 text-center"><label class="my-2"> </label>3</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>20</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>16</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0.50</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>7</div>
                                </div>
                                <div class="row bg-gray-200 dark:bg-dark dark:text-white">
                                    <div class="col-md-3 text-center"><label class="my-2"> </label>4</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>20</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>18</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0.50</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>7</div>
                                </div>
                                <div class="row bg-gray-100 dark:bg-dark dark:text-white">
                                    <div class="col-md-3 text-center"><label class="my-2"> </label>5-9</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>20</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>20</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0.50</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>7</div>
                                </div>
                                <div class="row bg-gray-200 dark:bg-dark dark:text-white">
                                    <div class="col-md-3 text-center"><label class="my-2"> </label>10-14</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>20</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>22</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0.50</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>7</div>
                                </div>
                                <div class="row bg-gray-100 dark:bg-dark dark:text-white">
                                    <div class="col-md-3 text-center"><label class="my-2"> </label>15-19</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>20</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>24</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0.50</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>7</div>
                                </div>
                                <div class="row bg-gray-200 dark:bg-dark dark:text-white">
                                    <div class="col-md-3 text-center"><label class="my-2"> </label>20-24</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>20</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>26</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0.50</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>7</div>
                                </div>
                                <div class="row bg-gray-100 dark:bg-dark dark:text-white">
                                    <div class="col-md-3 text-center"><label class="my-2"> </label>25-*</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>20</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>28</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>0.50</div>
                                    <div class="col-md-2 text-center"><label class="my-2"> </label>7</div>
                                </div>




                            </div>
                        </div>
                    </div>

                </div>
            </div>
            {{--ACCORDION--}}

        </div>

    </div>


</x-app-tenant>
