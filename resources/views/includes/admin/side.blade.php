@php
    // $pengaturan = \App\Models\Pengaturan::where('nama','allow_menu')->first();
 
    $allow_menu = \App\Helpers\Helper::checkAllowMenu();

    $group_pengguna = Auth::user()->group_pengguna ?? [];
    $group = App\Models\Group::whereIn('id', $group_pengguna)->get();

    $group_id = [];
    foreach ($group as $key => $value) {
        if($value->cache_group){
            $listItemDecode = json_decode($value->cache_group);

            foreach ($listItemDecode as $item) {
                $group_id[] = $item;
            }

        }
    }

    $group_id = array_unique($group_id);

    $list_route_active = [];
    $list_route = App\Models\ManagementUrl::select('url')->whereIn('id', $group_id)
        ->where('status', 1)
        ->get()
        ->toArray();
    $list_route_active = array_column($list_route, 'url');
    
    $menu = App\Models\Menu::orderBy('parent_id', 'asc')
        ->with('parent')
        ->where('parent_id', 0)
        ->withCount('parent')
        ->get()
        ->toArray();
@endphp

<div class="sidebar-menu">
    <ul class="menu">
        <li class="sidebar-title">Menu</li>

        <li
            @class(['active' => request()->is('admin/dashboard'), 'sidebar-item'])>
            <a href="{{ route('admin.dashboard') }}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Dashboard</span>
            </a>
        </li>
        @if($allow_menu)
        <li
            @class(['active' => request()->is('admin/pengaturan'), 'sidebar-item'])>
            <a href="{{ route('admin.pengaturan.index') }}" class='sidebar-link'>
                <i class="bi bi-grid-fill"></i>
                <span>Pengaturan</span>
            </a>
        </li>
        <li
            @class(['active' => request()->is('admin/user/*'), 'has-sub', 'sidebar-item'])>
            <a href="#" class='sidebar-link'>
                <i class="bi bi-person-fill"></i>
                <span>User</span>
            </a>
            <ul @class(['active' => request()->is('admin/user/*'), 'submenu'])>
                <li class="submenu-item ">
                    <a href="{{ route('admin.user.url') }}">Url</a>
                    <a href="{{ route('admin.user.group.index') }}">Group</a>
                    <a href="{{ route('admin.user.previllage.index') }}">User</a>
                    <a href="{{ route('admin.user.menu.index') }}">Menu</a>
                </li>
            </ul>
        </li>
        @endif
        @include('includes.admin._list_menu', ['listMenu' => $menu, 'list_route_active' => $list_route_active])
        
        <li class="sidebar-item">
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"
                class='sidebar-link'>
                <i class="bi bi-power"></i>
                <span>Logout</span>
            </a>
            <form action="{{ route('logout') }}" method="post" id="logout-form">
                @csrf
            </form>
        </li>
    </ul>
</div>
<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
