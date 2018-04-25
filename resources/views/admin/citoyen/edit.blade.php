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
                                <h5>Modification de  Citoyen</h5>
                            </div>
                            <div class="widget-content nopadding">
                                <form class="form-horizontal" method="post" action="{{route('slider.update',$slider->id)}}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="put">
                                    <div class="control-group">
                                        <label class="control-label">Nom</label>
                                        <div class="controls">
                                            <input type="text" value="{{$slider->title}}" name="title" id="category_name">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label"> Sous Title</label>
                                        <div class="controls">
                                            <input type="text" value="{{$slider->sub_title}}" name="sub_title" id="category_name">
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">image</label>
                                        <div class="controls">
                                            <input type="file" name="image" id="url">
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <input type="submit" value="Modifier" class="btn btn-warning">
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