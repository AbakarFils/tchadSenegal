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
                                <h5>Enregistrement d'un Compatriote</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                                        <form class="form-horizontal" method="post" action="{{route('citoyen.store')}}">
                                        {{ csrf_field() }}
                                      <div class="col-md-6 col-sm-6">
                                        <div class="control-group">
                                            <label class="control-label">Nom</label>
                                            <div class="controls">
                                                <input type="text" name="nom" id="category_name">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Prenom</label>
                                            <div class="controls">
                                                <input type="text" name="prenom" id="category_name">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Père</label>
                                            <div class="controls">
                                                <input type="text" name="pere" id="category_name">
                                            </div>
                                        </div>
                                      </div>
                                      <div class="col-md-6 col-sm-6">
                                        <div class="control-group">
                                            <label class="control-label"> Mere</label>
                                            <div class="controls">
                                                <input type="text" name="mere" id="category_name">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">E-Mail</label>
                                            <div class="controls">
                                                <input type="email" name="mail" id="category_name">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Domicile</label>
                                            <div class="controls">
                                                <input type="text" name="domicile" id="category_name">
                                            </div>
                                        </div>
                                      </div>
                                       <div class="col-md-6 col-sm-6">
                                        <div class="control-group">
                                            <label class="control-label">Telephone</label>
                                              <div class="controls">
                                                <input type="text" name="phone">
                                             </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Personne à Contact</label>
                                            <div class="controls">
                                                <input type="text" name="num_person_contact" id="category_name">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Profession</label>
                                            <div class="controls">
                                                <input type="text" name="profession" id="category_name">
                                            </div>
                                        </div>
                                       </div>
                                      <div class="col-md-6 col-sm-6">
                                        <div class="control-group">
                                            <label class="control-label">Nom</label>
                                            <div class="controls">
                                                <input type="text" name="nom" id="category_name">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label">Date naissance</label>
                                            <div class="controls">
                                                <input type="text" name="date_naissance" id="category_name">
                                            </div>
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
        </div>
    </div>
@endsection