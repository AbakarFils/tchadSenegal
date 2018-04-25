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
                                <h5>Sauvegarde piece</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <form class="form-horizontal" method="post" action="{{route('piece.store')}}">
                                    {{ csrf_field() }}
                                    <div class="control-group">
                                        <label class="control-label">Libelle Piece</label>
                                        <div class="controls">
                                            <input type="text" name="libelle" id="category_name">
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <input type="submit" value="Ajouter" class="btn btn-success">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </div>


@endsection