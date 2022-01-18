<x-app-tenant>
    <div class="container mx-auto">
        <livewire:components.breadcrumb :parent="'Fiel'" :children="[]" :item-id="''" :icon="'fak fa-empresa-perzona mr-2'"/>

        <div class="bg-white p-2 my-4 rounded shadow-md">
            <livewire:components.content.content-header :title="'New FIEL'" :icon="'fas fa-plus-circle'"/>

            <div class="form-group">
{{--                <label for="" class="label">{{__('Name')}}</label>--}}
{{--                <input class="form-control" type="text">--}}
                <livewire:components.content.form-input :name="'name'" :type="'text'" :placeholder="'Ingresar nombre'" :classes="'form-control'" :identifier="'name'" :attributes="''" value=""/>
            </div>
        </div>


        <div class="bg-white p-2 my-4 rounded shadow-md">
            <table class="table table-dark">
                <tr>
                    <th>{{__('Name')}}</th>
                    <th>{{__('Private Key file')}}</th>
                    <th>{{__('Cert File')}}</th>
                    <th>{{__('Password')}}</th>
                    <th>{{__('Created at')}}</th>
                </tr>
                <tr>
                    @forelse($fiels as $fiel)

                        <td>{{ $fiel->name }}</td>
                        <td>{{ $fiel->fiel_private_key }}</td>
                        <td>{{ $fiel->fiel_cert }}</td>
                        <td>{{ $fiel->fiel_password }}</td>
                        <td>{{ $fiel->created_at }}</td>
                    @empty
                        <td colspan="5">
                            <p>{{__('No data')}}</p>
                        </td>
                @endforelse
            </table>
        </div>
    </div>
</x-app-tenant>
