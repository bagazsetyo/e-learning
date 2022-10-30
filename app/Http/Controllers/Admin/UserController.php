<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Models\User;
use App\Models\Group;
use Illuminate\Http\Request;
use App\Models\ManagementUrl;
use App\Models\LogManagementUrl;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    // private $ignoreController = [
    //     'CsrfCookieController',
    //     'HealthCheckController',
    //     'ExecuteSolutionController',
    //     'UpdateConfigController',
    //     'RegisterController',
    //     'ForgotPasswordController',
    //     'ResetPasswordController',
    //     'ConfirmPasswordController',
    // ];
    private $ignoreController = [
    ];

    protected $breadcrumb = [];

    public function url()
    {
        // breadcrumb
        $this->breadcrumb = [
            'Dashboard' => route('admin.dashboard'),
            'Management Url' => route('admin.user.url'),
        ];

        if (request()->ajax()) {
            $data = ManagementUrl::orderBy('id','DESC');
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->make(true);
        }
        return view('pages.admin.user.url.index')->with([
            'breadcrumb' => $this->breadcrumb,
        ]);
    }
    
    public function url_create()
    {
        // breadcrumb
        $this->breadcrumb = [
            'Dashboard' => route('admin.dashboard'),
            'Management Url' => route('admin.user.url'),
            'Create' => route('admin.user.url.create'),
        ];

        $data = ManagementUrl::select('fullController', 'status', 'url')->get()->toArray();
        $controller_active = array_column($data, 'status','fullController');

        $controllers = [];
        $routes = [];

        foreach (Route::getRoutes() as $route)
        {
            $action = $route->getAction();
            
            if (array_key_exists('controller', $action))
            {
                $controllers_name = $action['controller'];
                $explode_special_char = preg_split('/[^a-z0-9_@]/i', $controllers_name);
                $explode_at = explode('@', end($explode_special_char));
                if(in_array($explode_at[0], $this->ignoreController)){
                    continue;
                }
                $controllers[] = $explode_at[0];

                // $status = isset($controller_active[$controllers_name]) ? $controller_active[$controllers_name] : 0;

                $status = 0;
                if(isset($controller_active[$controllers_name])){
                    $status = $controller_active[$controllers_name];
                }

                $routes[$explode_at[0]][] =  [
                    'url' => $route->uri,
                    'method' => $route->methods,
                    'name_controller' => end($explode_special_char),
                    'full_controller' => $controllers_name,
                    'method_controller' => $explode_at[1] ?? "",
                    'status' => $status,
                ];
            }

        }
        return view('pages.admin.user.url.create')->with([
            'routes' => $routes,
            'controller_active' => $controller_active,
            'breadcrumb' => $this->breadcrumb,
        ]);
    }
    public function url_store(Request $request)
    {
        // db transaction

        DB::beginTransaction();

        // return $request;
        foreach ($request->url as $key => $item) {
            $url = array_key_first(current($item));
            $method = array_key_first(current(current($item)));
            $status = current(current(current($item))) ? true : false;
            $controller_name = array_key_first($item);
            
            if(count($item[$controller_name]) > 1){
                DB::rollBack();
                return redirect()->back()->withErrors([
                    'error' => '1 method dalam 1 controller tidak boleh lebih dari 1 url', 
                    'controller' => $controller_name
                ]);
                break;
            }

            $check_url_is_created = ManagementUrl::where('fullController', $key)->where('url',$url)->first();
            
            if($check_url_is_created && $check_url_is_created->url != $url){
                $updateUrl =  tap(ManagementUrl::where('id', $check_url_is_created->id))->update([
                    'url' => $url,
                    'method' => $method,
                    'nameController' => $controller_name,
                    'fullController' => $key,
                    'status' => $status
                ])->first();

                LogManagementUrl::create([
                    'update_by' => auth()->user()->id,
                    'management_url_id' => $check_url_is_created->url,
                    'old_value' => json_encode($check_url_is_created),
                    'new_value' => json_encode($updateUrl),
                ]);
            }elseif($check_url_is_created){
                $updateUrl =  tap(ManagementUrl::where('id', $check_url_is_created->id))->update([
                    'url' => $url,
                    'method' => $method,
                    'nameController' => $controller_name,
                    'fullController' => $key,
                    'status' => $status
                ])->first();
            }

            if(!$check_url_is_created){
                ManagementUrl::create([
                    'url' => $url,
                    'method' => $method,
                    'nameController' => $controller_name,
                    'fullController' => $key,
                    'status' => $status
                ]);
            }
        }

        DB::commit();

        return redirect(route('admin.user.url'));
    }

    public function role($id)
    {
        // breadcrumb
        $this->breadcrumb = [
            'Dashboard' => route('admin.dashboard'),
            'Management Url' => route('admin.user.url'),
            'Role' => route('admin.user.role', $id),
        ];

        $group = Group::findOrFail($id);

        $data = ManagementUrl::select('fullController', 'status', 'id')->get()->toArray();
        $controller_active = array_column($data, 'status','fullController');
        $controller_id = array_column($data, 'id','fullController');

        $controllers = [];
        $routes = [];

        foreach (Route::getRoutes() as $route)
        {
            $action = $route->getAction();

            if (array_key_exists('controller', $action))
            {
                $controllers_name = $action['controller'];

                $explode_special_char = preg_split('/[^a-z0-9@]/i', $controllers_name);
                $explode_at = explode('@', end($explode_special_char));
                if(in_array($explode_at[0], $this->ignoreController)){
                    continue;
                }
                $controllers[] = $explode_at[0];

                if(isset($controller_active[$controllers_name]) && $controller_active[$controllers_name] == 1){
                    $routes[$explode_at[0]][] =  [
                        'url' => $route->uri,
                        'method' => $route->methods,
                        'fullNameController' => end($explode_special_char),
                        'fullController' => $controllers_name,
                        'id' => $controller_id[$controllers_name]
                    ];
                }
            }
        }

        $cache_menu = [];
        if($group->cache_group){
            $cache_menu = json_decode($group->cache_group, true);
        }

        return view('pages.admin.user.role.role')->with([
            'routes' => $routes,
            'group' => $group,
            'cache_menu' => $cache_menu,
            'breadcrumb' => $this->breadcrumb,
        ]);
    }

    public function save_role(Request $request, $id)
    {
        // check this function
        $group = Group::findOrFail($id);

        $group->update([
            'cache_group' => $request->role
        ]);

        return redirect(route('admin.user.role', $id));
    }

    public function menu()
    {
        // breadcrumb
        $this->breadcrumb = [
            'Dashboard' => route('admin.dashboard'),
            'Management Url' => route('admin.user.url'),
            'Menu' => route('admin.user.menu.index'),
        ];
        $data = Menu::orderBy('id','DESC')->with('parent')->where('parent_id', 0)->get();
        
        return view('pages.admin.user.menu.index')->with([
            'breadcrumb' => $this->breadcrumb,
            'data' => $data
        ]);;
    }
    public function menu_create()
    {
        // breadcrumb
        $this->breadcrumb = [
            'Dashboard' => route('admin.dashboard'),
            'Management Url' => route('admin.user.url'),
            'Menu' => route('admin.user.menu.index'),
            'Create' => route('admin.user.menu.create'),
        ];

        $menu = Menu::where('parent_id', 0)->get();
        return view('pages.admin.user.menu.create')->with([
            'menu' => $menu,
            'breadcrumb' => $this->breadcrumb,
        ]);
    }
    public function menu_store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'url' => 'required',
        ]);

        Menu::create([
            'name' => $request->name,
            'icon' => $request->icon,
            'url' => $request->url,
            'parent_id' => $request->parent_id,
            'order' => $request->order,
            'status' => $request->status,
            'created_by' => auth()->user()->id
        ]);

        return redirect(route('admin.user.menu.index'));
    }
    public function menu_edit($id)
    {
        // breadcrumb
        $this->breadcrumb = [
            'Dashboard' => route('admin.dashboard'),
            'Management Url' => route('admin.user.url'),
            'Menu' => route('admin.user.menu.index'),
            'Edit' => route('admin.user.menu.edit', $id),
        ];

        $parent_menu = Menu::where('parent_id', 0)->get();
        $menu = Menu::findOrFail($id);
        return view('pages.admin.user.menu.edit')->with([
            'menu' => $menu,
            'breadcrumb' => $this->breadcrumb,
            'parent_menu' => $parent_menu,
        ]);
    }
    public function menu_update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'url' => 'required',
        ]);

        $menu = Menu::findOrFail($id);
        $menu->update([
            'name' => $request->name,
            'icon' => $request->icon,
            'url' => $request->url,
            'parent_id' => $request->parent_id,
            'order' => $request->order,
            'status' => $request->status,
            'updated_by' => auth()->user()->id
        ]);

        return redirect(route('admin.user.menu.index'));
    }

    public function previllage()
    {
        // breadcrumb
        $this->breadcrumb = [
            'Dashboard' => route('admin.dashboard'),
            'Previllage' => route('admin.user.previllage.index'),
        ];
        
        if (request()->ajax()) {
            $data = User::orderBy('id','DESC');
            $group = Group::all()->toArray();
            return DataTables::of($data)
                    ->addColumn('action', function($item){
                        return '
                            <div class="d-inline">
                                <a href="'.route('admin.user.previllage.create',$item->id).'" class="btn btn-primary btn-sm" id="'.$item->id.'"><i class="fa fa-edit"></i></a>
                                <button class="delete btn btn-danger btn-sm ml-2" id="'.$item->id.'"><i class="fa fa-trash"></i></button>
                            </div>
                            ';
                    })
                    ->addColumn('role', function($item) use ($group){
                        if($item->group_pengguna){
                            $name = '';
                            foreach ($item->group_pengguna as $key => $value) {
                                $group_data = array_filter($group, function($v) use ($value) {
                                    return $v['id'] == $value;
                                });
                                $group_data = current($group_data);
                                $name .= $group_data['nama'].', ';
                            }
                            return $name;
                        }
                        return '';
                    })
                    ->rawColumns(['action','role'])
                    ->addIndexColumn()
                    ->make(true);
        }

        return view('pages.admin.user.previllage.index')->with([
            'breadcrumb' => $this->breadcrumb,
        ]);
    }
    public function previllage_create($id)
    {
        // breadcrumb
        $this->breadcrumb = [
            'Dashboard' => route('admin.dashboard'),
            'Management Url' => route('admin.user.url'),
            'Menu' => route('admin.user.menu.index'),
            'Previllage' => route('admin.user.previllage.index'),
            'Create' => route('admin.user.previllage.create', $id),
        ];

        $group = Group::all();
        $user = User::findOrFail($id);

        return view('pages.admin.user.previllage.create')->with([
            'group' => $group,
            'user' => $user,
            'breadcrumb' => $this->breadcrumb,
        ]);
    }
    public function previllage_store(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'group_pengguna' => $request->group,
            'name' => $request->name,
        ]);
        return redirect(route('admin.user.previllage.index'));
    }

    public function user()
    {
        return view('pages.admin.user.previllage.user');
    }
    public function user_create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json(['success' => true, 'message' => 'User berhasil ditambahkan']);
    }
    public function user_delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(['success' => true, 'message' => 'User berhasil dihapus']);
    }
}
