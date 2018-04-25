@extends('layouts.partial.admin_design')
@section('content')
    <div id="content">
        <div class="container-fluid">
            @include('layouts.partial.msg')
            <div class="widget-box">
                <div class="row-fluid">
                    <div class="span12">
                        <div class="widget-box">
                            <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                                <h5>Listes des Document pour la demande de : {{$formalite->libelle}}</h5>
                            </div>
                            <div class="widget-content nopadding">
                                        <div class=>
                                            <h3></h3>
                                        </div>
                                        <div class="row col-md-12 col-sm-12 col-lg-12" style="background: white; margin: 10px">
                                            <table class="table table-bordered">
                                                <thead>
                                                <th>Libelle du Document</th>
                                                </thead>
                                                <tbody>
                                                @foreach($formalite->MesPieces as $piecs)
                                                    <tr>
                                                        <td class="center">{{$piecs->libelle}}</td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection