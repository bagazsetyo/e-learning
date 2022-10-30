@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')

<div class="page-heading">
    <h3>Group Menu</h3>
</div>
<div class="page-content">
    <section id="input-style">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input Styles</h4>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="roundText">Nama Group</label>
                                    <input type="text" id="roundText" name="nama" class="form-control round"
                                        placeholder="Rounded Input">
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
