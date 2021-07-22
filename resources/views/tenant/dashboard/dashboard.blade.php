@section('title')  {{Auth::user()->tenancy_domain ?? __('Not logged')}} - Dashboard @endsection
<x-tenant-dashboard>
    <div class="container mx-auto">
        <!-- start wrapper -->
        <h1 class="uppercase">{{__('Dashboard')}}</h1>
        <div id="carbon-block" class="my-3"></div>
        <div class="my-3">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero ipsum cumque nemo architecto laboriosam perspiciatis consequatur atque quidem vel excepturi distinctio recusandae reprehenderit vitae, libero unde ea temporibus quaerat animi ducimus ratione esse? Aspernatur magnam facere suscipit vitae itaque maxime quo amet officiis animi, harum et inventore delectus nihil cumque!</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni sit nostrum aliquid mollitia optio veniam at excepturi vitae sint laudantium fugit ratione molestias, doloremque cumque eaque eligendi nobis quia. Labore officiis quisquam officia dolore! Eos labore, alias, voluptatem maxime sunt culpa dolorum at quam architecto impedit cupiditate quis ipsum odit, necessitatibus accusantium quod quo molestias enim laboriosam! Maiores facere accusamus repellat saepe enim omnis perspiciatis dolor, cupiditate ex doloremque laudantium similique sunt quisquam! Quaerat, facere ipsum natus officia cupiditate repellendus.</p>

            <div class="line"></div>
            <h3>Lorem Ipsum</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione voluptas consequuntur laboriosam quia vero corporis, officiis, dolore natus iste incidunt animi dolor porro accusamus similique aut, facilis architecto quas? Assumenda mollitia error vel blanditiis perferendis quis sequi deleniti repellat laboriosam!</p>

        </div>
    </div>
    <!-- wrapper and -->
@push('in_page_scripts')
    <!-- SIDEBAR SCRIPT -->
    @endpush
</x-tenant-dashboard>
