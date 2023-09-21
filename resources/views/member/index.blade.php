@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6"><h1 class="display-6">Members List</h1></div>
        <div class="col-lg-6"><a href="{{ route('member.create')}}" class="btn btn-primary btn-lg float-end">Create Member</a></div>
    </div>
    <hr class="my-2">
    <div class="row">
        <div class="col-md-12 mt-3">
            <table id="dtable" class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email Address</th>
                    <th scope="col">School</th>
                    <th scope="col">Country</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($members as $memb)
                    <tr>
                      <td scope="row">{{ $memb->id }}</td>
                      <td>{{ $memb->name }}</td>
                      <td>{{ $memb->email }}</td>
                      <td>{{ $memb->school}}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
</div>
<script>
    new DataTable('#example');
</script>
@endsection
