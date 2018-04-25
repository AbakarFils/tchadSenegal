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
                                <h5>Sauvegarde Formalité</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <form class="form-horizontal" method="post" action="{{route('formalite.attachdocuments')}}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="formalite_id" value="{{$formalite->id}}">
                                    @if($pieces != null)
                                        <div class="control-group">
                                         <div class="controls">
                                             <label for="company-content">Selectionner les Documents a associé pour : {{$formalite->libelle}}</label>
                                             <select name="piece_id[]" class="form-control" multiple >
                                                 @foreach($pieces as $piece)
                                                     <option value="{{$piece->id}}"> {{$piece->libelle}} </option>
                                                 @endforeach
                                             </select>
                                         </div>
                                        </div>
                                    @endif
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