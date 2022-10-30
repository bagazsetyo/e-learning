@extends('layouts.admin')

@section('title','Role')

@section('content')
    <x-breadcrumb :breadcrumb="$breadcrumb" />
    <section>
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <form class="form" method="post" action="{{ route('admin.user.menu.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label for="">Icon</label>
                            <input type="text" class="form-control" name="icon" placeholder="Icon">
                        </div>
                        <div class="form-group">
                            <label for="url">Url</label>
                            <input type="text" class="form-control" id="url" name="url" placeholder="Url" required>
                        </div>
                        <div class="form-group">
                            <label for="url">Parent</label>
                            <select class="choices form-select" name="parent_id">
                                <option value="0">--Pilih--</option>
                                @foreach ($menu as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <select class="form-select" name="status">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Order</label>
                            <input type="number" class="form-control" name="order" placeholder="Order">
                        </div>

                        <button class="btn btn-primary mt-5">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
