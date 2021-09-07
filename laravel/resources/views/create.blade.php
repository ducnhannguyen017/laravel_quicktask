@extends('main') 
@section('main')

<div class="content-wrapper" style="min-height: 1603.67px">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>{{ trans('messages.AddProject') }}</h1>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->

    <form action="/project/store" method="post">
        @csrf
        <section class="content">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputmain">{{ trans('messages.ProjectName') }}</label>
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    class="form-control"
                                />
                            </div>
                            <div class="form-group">
                                <label for="inputClientCompany">{{ trans('messages.Title') }}</label>
                                <input
                                    type="text"
                                    id="inputClientCompany"
                                    name="title"
                                    class="form-control"
                                />
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">{{ trans('messages.Detail') }}</label>
                                <textarea
                                    id="inputDescription"
                                    class="form-control"
                                    name="detail"
                                    rows="4"
                                ></textarea>
                            </div>

                            <div class="form-group">
                                <label for="inputProjectLeader"
                                    >{{ trans('messages.EstimateBudget') }}</label
                                >
                                <input
                                    type="text"
                                    id="inputProjectLeader"
                                    name="estimate_budget"
                                    class="form-control"
                                />
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <a href="/project" class="btn btn-secondary">{{ trans('messages.Cancel') }}</a>
                    <input
                        type="submit"
                        value="{{ trans('messages.Create') }}"
                        class="btn btn-success float-right"
                    />
                </div>
            </div>
        </section>
    </form>
    <!-- /.content -->
</div>
@endsection
