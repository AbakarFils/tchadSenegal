@extends('layouts.partial.admin_design')

@section('content')
    <div id="content">
        <div class="container-fluid">
            <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                <h5>Listes des Pieces</h5>
            </div>
            <div class="widget-content nopadding">
                <table class="table table-bordered data-table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Libelle</th>
                        <th>Creer a la date</th>
                        <th>Modifier a la date</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($pieces as $key=>$piece)
                        <tr class="gradeX">
                            <td>{{$key+1}}</td>
                            <td>{{$piece->libelle}}</td>
                            <td class="center">{{$piece->created_at}}</td>
                            <td class="center">{{$piece->updated_at}}</td>
                            <td class="center">
                                <a href="{{ route('piece.edit',$piece->id) }}" class="btn btn-primary btn-mini">Modifier</a>
                                <a id="delCat" href="{{ url('/admin/piece/delete/'.$piece->id) }}" class="btn btn-danger btn-mini">Supprimer</a>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
@endsection
