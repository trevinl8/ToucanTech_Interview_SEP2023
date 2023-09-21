@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6"><h1 class="display-6">Create Member</h1></div>
        <div class="col-lg-6"><a href="{{ route('member.index')}}" class="btn btn-warning btn-lg float-end">Back to Index</a></div>
    </div>
    <hr class="my-2">
    <div class="row">
        <div class="col-md-12 mt-3">
            <form action="{{ route('member.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Name</label>
                    <input type="text" name="fullname" class="form-control" id="exampleFormControlInput1" placeholder="Sam Smith">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="alias@domain.com">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1"class="form-label">School</label>
                  <select class="form-select" name="school"  aria-label="Default select example">
                    <option readonly>Open this select menu</option>
                    @foreach($schools as $sch)
                        <option value="{{ $sch->id }}">{{ $sch->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="d-grid mt-5">
                    <button type="submit" class="btn btn-primary">Create Member</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
