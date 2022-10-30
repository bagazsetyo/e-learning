@foreach ($menu as $parent)
    @if($parent['parent_count'] == 0 && $parent['status'] == 1 && in_array($parent['url'], $list_route_active))
        <li @class(['active' => request()->is($parent['url'] .'/*'), 'sidebar-item']) >
            <a href="/{{ $parent['url'] }}" class='sidebar-link'>
                <i class="{{ $parent['icon'] ?? 'fa fa-home' }}"></i>
                <span>{{ $parent['name'] }}</span>
            </a>
        </li>
    @elseif($parent['parent_count'] > 0)
        <li
            @class(['active' => request()->is($parent['url'] .'/*'), 'sidebar-item', 'has-sub', 'list-sub'])>
            <a href="#" class='sidebar-link'>
                <i class="{{ $parent['icon'] ?? 'fa fa-home' }}"></i>
                <span>{{ $parent['name'] }}</span>
            </a>
            <ul @class(['active' => request()->is('belajar/*'), 'submenu'])>
                @foreach ($parent['parent'] as $subMenuItem)
                        @if($subMenuItem['status'] == 1 && in_array($subMenuItem['url'], $list_route_active))
                            <li class="submenu-item ">
                                <a href="/{{ $subMenuItem['url'] }}">{{ $subMenuItem['name'] }}</a>
                            </li>
                        @endif
                @endforeach
            </ul>
        </li>
    @endif
@endforeach