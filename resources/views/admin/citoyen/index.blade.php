@extends('layouts.partial.admin_design')

@section('content')
    <div id="content">
        <div class="container-fluid">
            <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                <h5>Liste des Compatriotes</h5>
            </div>
            <div class="widget-content nopadding">
                <table class="table table-bordered data-table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Domicile</th>
                        <th>Mail</th>
                        <th>Phone</th>
                        <th>Numero de Garant</th>
                        <th>Profession</th>
                        <th>Creer a la date</th>
                        <th>Modifier a la date</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($citoyens as $key=>$citoyen)
                        <tr class="gradeX">
                            <td>{{$key+1}}</td>
                            <td>{{$citoyen->nom}}</td>
                            <td>{{$citoyen->prenom}}</td>
                            <td>{{$citoyen->domicile}}</td>
                            <td>{{$citoyen->mail}}</td>
                            <td>{{$citoyen->phone}}</td>
                            <td>{{$citoyen->num_person_contact}}</td>
                            <td>{{$citoyen->profession}}</td>
                            <td class="center">{{$citoyen->created_at}}</td>
                            <td class="center">{{$citoyen->updated_at}}</td>
                            <td class="center">
                                 <a href="{{ route('citoyen.edit',$citoyen->id) }}" class="btn btn-primary btn-mini">Modifier</a>
                                 <a id="delCat" href="{{ url('/admin/delete/'.$citoyen->id) }}" class="btn btn-danger btn-mini">Supprimer</a>
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
