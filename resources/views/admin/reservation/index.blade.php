@extends('layouts.partial.admin_design')

@section('content')
    <div id="content">
        <div class="container-fluid">
            <div class="widget-box">
                <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                    <h5>Listes des  Reservations</h5>
                </div>
                <div class="widget-content nopadding">
                    <table id="table" class="table table-responsive" style="overflow-x: scroll;"  cellspacing="0" width="100%">
                        <thead class="text-primary">
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Date et l'heure</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Créer à la date</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        @foreach($reservations as $key=>$reservation)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $reservation->name }}</td>
                                <td>{{ $reservation->phone }}</td>
                                <td>{{ $reservation->email }}</td>
                                <td>{{ $reservation->date_and_time }}</td>
                                <th>{{ $reservation->message }}</th>
                                <th>
                                    @if($reservation->status == true)
                                        <span class="label label-info">Confirmé</span>
                                    @else
                                        <span class="label label-danger">pas Confirmé</span>
                                    @endif

                                </th>
                                <td>{{ $reservation->created_at }}</td>
                                <td>
                                    @if($reservation->status == false)
                                        <form id="status-form-{{ $reservation->id }}" action="{{ route('reservation.status',$reservation->id) }}" style="display: none;" method="POST">
                                            @csrf
                                        </form>
                                        <button type="button" class="btn btn-info btn-sm" onclick="if(confirm('Voulez-vous Confirmé cette demande par téléphone?')){
                                                event.preventDefault();
                                                document.getElementById('status-form-{{ $reservation->id }}').submit();
                                                }else {
                                                event.preventDefault();
                                                }"><i class="icon-ok"></i>conf</button>
                                    @endif
                                    <form id="delete-form-{{ $reservation->id }}" action="{{ route('reservation.destory',$reservation->id) }}" style="display: none;" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <button type="button" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $reservation->id }}').submit();
                                            }else {
                                            event.preventDefault();
                                            }"><i class="material-icons">sup</i></button>
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