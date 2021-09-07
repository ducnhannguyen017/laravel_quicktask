@extends('main') @section('main')

<div class="wraper">
    <div class="content-wrapper" style="min-height: 1603.67px">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2" style="justify-content: space-around">
                    <h1>{{ trans('messages.ListProject') }}</h1>
                    <div
                        class="col-sm-6"
                        style="display: flex; justify-content: space-around"
                    >
                        <a
                            href="/project/create"
                            type="button"
                            class="btn btn-block btn-primary btn-lg"
                            style="width: 200px"
                        >
                            {{ trans('messages.AddProject') }}
                        </a>
                        <a
                            href="/logout"
                            type="button"
                            class="btn btn-block btn-primary btn-lg"
                            style="margin: 0; width: 200px"
                        >
                            {{ trans('messages.Logout') }}
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="card" style="align-items: center">
                <div class="card-body p-0" style="width: 80%">
                    <table class="table table-striped projects">
                        <thead>
                            <tr>
                                <th style="width: 1%">#</th>
                                <th style="width: 15%">{{ trans('messages.ProjectName') }}</th>
                                <th style="width: 20%">{{ trans('messages.Title') }}</th>
                                <th style="width: 30%" class="text-center">
                                    {{ trans('messages.Detail') }}
                                </th>
                                <th style="width: 20%">{{ trans('messages.EstimateBudget') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#</td>
                                <td class="project_progress">
                                   name
                                </td>
                                <td class="project-state">
                                    title
                                </td>
                                <td class="project-state">
                                    detail
                                </td>
                                <td class="project-state">
                                    estimate_budget
                                </td>
                                <td
                                    class="project-actions text-right"
                                    style="
                                        display: flex;
                                        justify-content: space-evenly;
                                    "
                                >
                                    <a
                                        class="btn btn-info btn-sm"
                                        href="project/edit"
                                    >
                                        <i class="fas fa-pencil-alt"> </i>
                                        {{ trans('messages.Edit') }}
                                    </a>
                                    <a
                                        class="btn btn-danger btn-sm"
                                        href="project/destroy/"
                                    >
                                        <i class="fas fa-trash"> </i>
                                        {{ trans('messages.Delete') }}
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
</div>
@endsection
