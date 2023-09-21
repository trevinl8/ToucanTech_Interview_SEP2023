@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <h4><strong>Number of Members in Schools</strong></h4>
                    <table class="table table-hover border mt-4">
                        <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">School Name</th>
                              <th scope="col">No. of Members</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach( $schoolcount as $sc)
                            <tr>
                              <th scope="row">{{ $sc->id}}</th>
                              <td>{{$sc->name}}</td>
                              <td>Otto</td>
                            </tr>
                            @endforeach
                          </tbody>
                      </table>
                </div>
                <div class="col-md-6">
                    <h4><strong>Number of Members in Schools</strong></h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
