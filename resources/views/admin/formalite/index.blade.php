@extends('layouts.partial.admin_design')

@section('content')
    <div id="content">
        <div class="container-fluid">
            <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                <h5>Listes des Formalités</h5>
            </div>
            <div class="widget-content nopadding">
                <table class="table table-bordered data-table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Libelle</th>
                        <th>Ajouter une Pièce</th>
                        <th>Ajouter Voir ses pièces</th>
                        <th>Creer a la date</th>
                        <th>Modifier a la date</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($formalites as $key=>$formalite)
                        <tr class="gradeX">
                            <td>{{$key+1}}</td>
                            <td>{{$formalite->libelle}}</td>
                            <td class="center">
                                <form id="addpiece" action="{{ route('formalite.addpiece') }}"  method="POST" >
                                {{ csrf_field() }}
                                <div class="input-group">
                                    <input class="form-control" name = "formalite_id" id="formalite_id" value="{{$formalite->id}}" type="hidden">
                                <span class="input-group-btn">
                    <button class="btn btn-mini btn-info" type="submit" id="addMember" >Ajouter</button>
                  </span>
                                </div><!-- /input-group -->
                                </form>
                            </td>
                            <td class="center"><a href="{{ route('formalite.show',$formalite->id) }}">voir</a></td>
                            <td>{{$formalite->created_at}}</td>
                            <td>{{$formalite->updated_at}}</td>
                            <td class="center">
                                <a href="{{ route('piece.edit',$formalite->id) }}" class="btn btn-primary btn-mini">Modifier</a>
                                <a id="delCat" href="{{ url('/admin/piece/delete/'.$formalite->id) }}" class="btn btn-danger btn-mini">Supprimer</a>
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
