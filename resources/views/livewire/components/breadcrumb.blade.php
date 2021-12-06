<div>
<div class="bg-blueSteel text-white p-2 mb-4 rounded">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <lli><i class="{{$icon}} mr-2"></i></lli>
            <li class="breadcrumb-item no-underline"><a href="{{'/'.strtolower($parent)}}" class="no-underline text-warning">{{__($parent)}}</a></li>
            @forelse ($children as $item)
              <li class="breadcrumb-item">  <a href="{{'/'.strtolower($parent).'/'.strtolower($item)}}" class="no-underline text-white">{{__($item)}}</a></li>
            @empty
                <li class="breadcrumb-item">{{__('you need to add a children')}}</li>
            @endforelse
        </ol>
    </nav>
</div>
</div>
