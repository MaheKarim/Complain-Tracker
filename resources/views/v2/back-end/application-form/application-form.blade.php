@extends('v2.back-end.master')

@section('content')

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h2 align="center">Your Application</h2>
                     <hr>
                    <form action="{{ route('submit') }}" method="POST">
                            @csrf
                                <div class="form-group">
                                 <label for="">Full Name</label>
                                 <input type="text" name="applicant_name" placeholder="Name Of Applicant" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Your ID</label>
                                    <input type="text" name="applicant_id" placeholder="Your Student ID" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <input type="text" name="applicant_description" placeholder="Write down your application" class="form-control">
                                </div>
                                <div class="form-group">
                                  <input type="submit" class="btn btn-success" value="Submit Application">
                                </div>
                        </form>
                </div>
            </div>
        </div>
</div>



@endsection
