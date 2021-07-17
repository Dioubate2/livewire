@extends("layouts.master")
@section("content")
<div class="col-12">
    <div class="card">
    <div class="card-header">
        <h3 class="card-title">La liste des utilisateurs</h3>&#160; &#160;
        <a href="{{ route('add-user') }}" class="btn btn-primary float-right">
            <i class="nav-icon fas fa-plus"></i> Ajouter
        </a>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped table-hover">
        <thead>
        <tr>
            <th>Nom et Prenom</th>
            <th>Email</th>
            <th>Genre</th>
            <th>Role</th>
            <th>Photo</th>
            <th>Photo</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        </tbody>

        </table>
    </div>
    <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
@stop
