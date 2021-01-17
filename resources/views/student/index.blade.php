@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">

								<div class="panel-heading">
                                    <h3 class="panel-title"> </h3>
                                    <div class="right">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        Add Student
                                        </button>
                                    </div>
                                    
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
                                                <th>Name</th>
                                                <th>School</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Grade</th>
                                                <th>Department</th>
											</tr>
										</thead>
										<tbody>
                                            @foreach($data_student as $student)
                                            <tr>
                                                <td><a href="/student/{{$student->id}}/profil">{{$student->name}}</a></td>
                                                <td>{{$student->school}}</td>
                                                <td>{{$student->email}}</td>
                                                <td>{{$student->phone}}</td>
                                                <td>{{$student->grade}}</td>
                                                <td>{{$student->department}}</td>
                                                <td>
                                                    <a href="/student/{{$student->id}}/edit" class="btn btn-warning">Edit</a>
                                                    <a href="/student/{{$student->id}}/delete" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
										</tbody>
									</table>
								</div>
							
                    </div>
                </div>
            </div>
        </div>
    </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="/student/create" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="exampleInputName">Name</label>
                                <input name="name" type="text" class="form-control" id="exampleInputName">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputSchool">School</label>
                                <input name="school" type="text" class="form-control" id="exampleInputSchool">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail">Email</label>
                                <input name="email" type="text" class="form-control" id="exampleInputEmail">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPhone">Phone</label>
                                <input name="phone" type="text" class="form-control" id="exampleInputPhone">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputGrade">Grade</label>
                                <input name="grade" type="text" class="form-control" id="exampleInputGrade">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputDepartment">Department</label>
                                <input name="department" type="text" class="form-control" id="exampleInputDepartment">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputJumlah">Gambar</label>
                                <input name="gambar" type="file" class="form-control">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
@stop