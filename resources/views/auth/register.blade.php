@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name English</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name_ar') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Name Arabic</label>

                            <div class="col-md-6">
                                <input id="name_ar" type="text" class="form-control" name="name_ar" value="{{ old('name_ar') }}" required>

                                @if ($errors->has('name_ar'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_ar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('student_id') ? ' has-error' : '' }}">
                            <label for="student_id" class="col-md-4 control-label">ID</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="student_id" value="{{ old('student_id') }}" required>

                                @if ($errors->has('student_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('student_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Date of Birth</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control" name="dob" value="{{ old('dob') }}" required>

                                @if ($errors->has('dob'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                                <select  id="gender" class="form-control" name="gender" value="{{ old('gender') }}" required>
                                    <option value="0">Male</option>
                                    <option value="1">Female</option>
                                </select>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('hs_grade') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">High school Grade</label>

                            <div class="col-md-6">
                                <input id="hs_grade" type="text" class="form-control" name="hs_grade" value="{{ old('hs_grade') }}" placeholder="76" required>

                                @if ($errors->has('hs_grade'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('hs_grade') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('g_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Graduated Type</label>

                            <div class="col-md-6">
                                <select  id="g_name" class="form-control" name="g_name" value="{{ old('g_name') }}" required>
                                    <option value="0">ثانوية عامة</option>
                                    <option value="1">معادلة</option>
                                    <option value="2">محول</option>
                                </select>

                                @if ($errors->has('g_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('g_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('facebook_account') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Facebook Account</label>

                            <div class="col-md-6">
                                <input id="facebook_account" type="text" class="form-control" name="facebook_account" value="{{ old('facebook_account') }}" placeholder="http://fb.com/IRONMANCODER" required>

                                @if ($errors->has('facebook_account'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('facebook_account') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" placeholder="01111111111" required>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
