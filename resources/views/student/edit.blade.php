@extends('layouts.master')

@section('content')
<div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Inputs</h3>
								</div>
								<div class="panel-body">
                                    <form action="/student/{{$student->id}}/update" method="POST" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputName">Name</label>
                                        <input name="name" type="text" class="form-control" id="exampleInputName" value="{{$student->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputSchool">School</label>
                                        <input name="school" type="text" class="form-control" id="exampleInputSchool" value="{{$student->school}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail">Email</label>
                                        <input name="email" type="text" class="form-control" id="exampleInputEmail" value="{{$student->email}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPhone">Phone</label>
                                        <input name="phone" type="text" class="form-control" id="exampleInputPhone" value="{{$student->phone}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputGrade">Grade</label>
                                        <input name="grade" type="text" class="form-control" id="exampleInputGrade" value="{{$student->grade}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputDepartment">Department</label>
                                        <input name="department" type="text" class="form-control" id="exampleInputDepartment" value="{{$student->department}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputJumlah">Gambar</label>
                                        <input name="gambar" type="file" class="form-control">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-warning">Save</button>
                                    </div>
                                    </form>
								</div>
						</div>
                    </div>
                </div>
            </div>
        </div>
</div>
@stop
