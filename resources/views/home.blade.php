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

                      </table>
                </div>
                <div class="col-md-6">
                    <h4><strong>Search Members by School</strong></h4>
                    <form class="mt-4" action="{{ route('school.store') }}" method="POST">
                        @csrf
                    <div class="row">
                        <div class="col-md-8">
                            <select class="form-select form-select-lg mb-3" name="school" aria-label="Large select example">
                                <option readonly>Select a school</option>
                                @foreach($schools as $sch)
                                <option value="{{ $sch->id }}">{{ $sch->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-secondary btn-lg">Search</button>
                        </div>
                    </div>
                    </form>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-hover border mt-4">
                                <thead>
                                    <tr>
                                      <th scope="col">Members of  </th>
                                    </tr>
                                  </thead>
                                  <tbody>

                                    <tr>
                                      <td></td>
                                    </tr>

                                  </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
