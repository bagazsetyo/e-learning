@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')

<x-breadcrumb :breadcrumb="$breadcrumb" />
<div class="page-content">
    <section id="input-style">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Tambah Role</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.user.previllage.store', $user->id) }}" method="post" id="createGroup">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="nama">Nama User</label>
                                        <input type="text" id="nama" name="name" value="{{ $user->name }}" class="form-control round"
                                            placeholder="Admin">
                                    </div>
                                </div>
                                <div class="col-12" style="padding-top: 20px; padding-bottom: 20px;">
                                    <h6>Group List</h6>
                                    @foreach($group as $group_list)
                                    <div class="checkbox">
                                        <input type="checkbox" name="group[]" @checked(in_array($group_list->id, ($user->group_pengguna ?? []))) id="{{ $group_list->id }}" value="{{ $group_list->id }}">
                                        <label for="{{ $group_list->id }}">
                                            {{ $group_list->nama }}
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary" id="simpan">Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('after-scripts')
@endpush
