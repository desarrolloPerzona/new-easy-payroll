<x-app-tenant>
    <div class="container mx-auto">
        <livewire:components.breadcrumb :parent="'Fiel'" :children="[]" :item-id="''" :icon="'fak fa-empresa-perzona mr-2'"/>

        <div class="bg-white p-4 my-4 rounded shadow-md">
            <livewire:components.content.content-header :title="'New FIEL'" :icon="'fas fa-plus-circle'"/>
            <form action="{{route('fiel.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <livewire:components.content.form-input :name="'name'" :type="'text'" :placeholder="'Name'" :classes="''" :identifier="'name'" :attributes="''" value="{{old('name')}}" />
                <livewire:components.content.file-upload-pquina :name="'fiel_private_key'" :max-files="1" :file-type="'image/png, image/jpeg, image/gif'" :allow-multiple="''" :attributes="''" :label="'fiel_private_key'" :upload-route="'uploadFiles'"/>
                <livewire:components.content.file-upload-pquina :name="'fiel_cert'" :max-files="1" :file-type="''" :allow-multiple="''" :attributes="''" :label="'fiel_cert'" :upload-route="'uploadFiles'"/>
                <livewire:components.content.form-input :name="'fiel_password'" :type="'password'" :placeholder="'Password'" :classes="''" :identifier="'fiel_password'" :attributes="''" value="{{old('fiel_password')}}"/>
                <livewire:components.content.form-button :type="'submit'" :title="'Send'" :color="'primary'" :icon="'fad fa-paper-plane'" :classes="''"/>
            </form>
        </div>

        <div class="bg-white p-4 my-4 rounded shadow-md">
            <livewire:components.content.content-header :title="'FIEL TABLE'" :icon="'fas fa-table'"/>
            <table class="table table-dark">
                <thead>
                <tr>
                    <th>{{__('Name')}}</th>
                    <th>{{__('Private Key file')}}</th>
                    <th>{{__('Cert File')}}</th>
                    <th>{{__('Password')}}</th>
                    <th>{{__('Created at')}}</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @forelse($fiels as $fiel)
                    <tr>
                        <td>{{ $fiel->name }}</td>
                        <td>{{ Str::limit( $fiel->fiel_private_key, 20) }}</td>
                        <td>{{ $fiel->fiel_cert }}</td>
                        <td>{{ Str::limit($fiel->fiel_password, 20) }}</td>
                        <td>{{ $fiel->created_at }}</td>
                        <td>
                            <div class="mx-2 inline-block">
                                <button type="button" aria-expanded="false" >
                                    <i class="fas fa-eye text-gray-400 hover:text-gray-700 cursor-pointer"></i>
                                </button>
                            </div>
                            <div class="mx-2 inline-block">
                                <a href="{{route('imss-employer-registers.edit',1)}}"> <i class="fas fa-edit text-gray-400 hover:text-gray-700 cursor-pointer"></i></a>
                            </div>
                            <div class="mx-2 inline-block">
                                <i class="fas fa-trash-alt text-gray-400"></i>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center"><b>{{ __('No data') }}</b></td>
                    </tr>
                @endforelse
                </tbody>

            </table>
        </div>
    </div>
</x-app-tenant>
