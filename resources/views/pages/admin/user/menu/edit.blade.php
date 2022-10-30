@extends('layouts.admin')

@section('title','Create Menu')

@section('content')
    <x-breadcrumb :breadcrumb="$breadcrumb" />
    <section>
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="badge badge-danger">
                                <ul>
                                    <li>{{ $error }}</li>
                                </ul>
                            </div>
                        @endforeach
                    @endif
                    <form class="form" method="post" action="{{ route('admin.user.menu.update', $menu->id) }}">
                        @method('put')
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" value="{{ $menu->name }}" class="form-control" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label for="">Icon</label>
                            <input type="text" value="{{ $menu->icon }}" class="form-control" name="icon" placeholder="Icon">
                        </div>
                        <div class="form-group">
                            <label for="url">Url</label>
                            <input type="text" value="{{ $menu->url }}" class="form-control" id="url" name="url" placeholder="Url" required>
                        </div>
                        <div class="form-group">
                            <label for="url">Parent</label>
                            <select class="choices form-select" name="parent_id">
                                <option value="0">--Pilih--</option>
                                @foreach ($parent_menu as $item)
                                    @if($menu->id != $item->id)
                                        <option value="{{ $item->id }}" @selected($item->id == $menu->parent_id)>{{ $item->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <select class="form-select" name="status">
                                <option value="1" @selected($menu->status == 1)>Active</option>
                                <option value="0" @selected($menu->status == 0)>Inactive</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Order</label>
                            <input type="number" value="{{ $menu->order }}" class="form-control" name="order" placeholder="Order">
                        </div>

                        <button class="btn btn-primary mt-5">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
