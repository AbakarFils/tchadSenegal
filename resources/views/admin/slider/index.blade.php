@extends('layouts.partial.admin_design')

@section('content')
    <div id="content">
        <div class="container-fluid">
            <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                <h5>Data table</h5>
            </div>
            <div class="widget-content nopadding">
                <table class="table table-bordered data-table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>title</th>
                        <th>Sous title</th>
                        <th>image</th>
                        <th>Creer a la date</th>
                        <th>Modifier a la date</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sliders as $key=>$slider)
                        <tr class="gradeX">
                            <td>{{$key+1}}</td>
                            <td>{{$slider->title}}</td>
                            <td>{{$slider->sub_title}}</td>
                            <td>{{$slider->image}}</td>
                            <td class="center">{{$slider->created_at}}</td>
                            <td class="center">{{$slider->updated_at}}</td>
                            <td class="center">
                                <a href="{{ route('slider.edit',$slider->id) }}" class="btn btn-primary btn-mini">Edit</a>
                                <a id="delCat" href="{{ url('/admin/delete/'.$slider->id) }}" class="btn btn-danger btn-mini">Delete</a>
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
