<div>
    <div class="bg-blueSteel text-white p-2 mb-4 rounded">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <lli><i class="{{$icon}} mr-2"></i></lli>
                <li class="breadcrumb-item no-underline"><a href="{{'/'.strtolower($parent)}}" class="no-underline text-gray-400 font-bold hover:text-gray-200 text-capitalize">{{__(str_replace('-',' ',$parent))}}</a></li>
                @forelse ($children as $item)
                    <li class="breadcrumb-item">
                        <a
                            href="@if($item =='Show')
                            {{'/'.strtolower($parent).'/'.$itemId}}
                            @elseif($item == 'Edit')
                            {{'/'.strtolower($parent).$itemId.'/'.strtolower($item)}}
                            @elseif($item == 'Create')
                            {{'/'.strtolower($parent).'/'.strtolower($item)}}
                            @endif" class="no-underline text-white">
                            {{__(str_replace('-',' ',$item))}}
                        </a>
                    </li>
                @empty

                @endforelse
            </ol>
        </nav>
    </div>
</div>
