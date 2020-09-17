@extends('layouts.app_master_admin')
@section('content')
<div class="box box-primary">
   <div class="box-header with-border">
      <h3 class="box-title">{{ trans('message.createuser') }}</h3>
   </div>
   <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('users.store') }}"  >
      @csrf
      <div class="box-body">
         <div class="form-group ">
            <label >{{ trans('message.username') }}</label>
            <input type="text" class="form-control" value="{{ old('username') }}" name="username" placeholder="Enter username">
            @error('username')
            <div class="text-danger">{{ $errors->first('username') }}</div>
            @enderror
         </div>
         <div class="form-group ">
            <label for="exampleInputEmail1">{{ trans('message.phone') }}</label>
            <input type="text" class="form-control" value="{{ old('phone') }}" id="exampleInputEmail1" name="phone" placeholder="Enter phone">
            @error('phone')
            <div class="text-danger">{{ $errors->first('phone') }}</div>
            @enderror
         </div>
         <div class="form-group ">
            <label>{{ trans('message.gender') }}</label>
            <select class="form-control" name="gender">
               <option value="">--{{ trans('message.choose') }}--</option>
               <option {{ old('gender') ? 'selected' : '' }} value="1">{{ trans('message.male') }}</option>
               <option {{ old('gender') ? '' : 'selected' }}  value="0">{{ trans('message.female') }}</option>
            </select>
            @error('gender')
            <div class="text-danger">{{ $errors->first('gender') }}</div>
            @enderror
         </div>
         <div class="form-group ">
            <label for="exampleInputEmail1">{{ trans('message.email') }}</label>
            <input type="email" class="form-control" value="{{ old('email') }}" id="exampleInputEmail1" name="email" placeholder="Enter email">
            @error('email')
            <div class="text-danger">{{ $errors->first('email') }}</div>
            @enderror
         </div>
         <div class="form-group ">
            <label for="exampleInputPassword1">{{ trans('message.password') }}</label>
            <input type="password" id="inputError" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            @error('password')
            <div class="text-danger">{{ $errors->first('password') }}</div>
            @enderror
         </div>
         <div class="form-group ">
            <label for="exampleInputPassword1">{{ trans('message.university') }}</label>
            <input type="text" name="university" value="{{ old('university') }}" class="form-control" id="exampleInputPassword1" placeholder="university">
            @error('university')
            <div class="text-danger">{{ $errors->first('university') }}</div>
            @enderror
         </div>
         <div class="form-group ">
            <label for="exampleInputPassword1">{{ trans('message.address') }}</label>
            <input type="text" name="address" value="{{ old('address') }}" class="form-control" id="exampleInputPassword1" placeholder="address">
            @error('university')
            <div class="text-danger">{{ $errors->first('address') }}</div>
            @enderror
         </div>
         <div class="form-group ">
            <label>{{ trans('message.birthday') }}:</label>
            <div class="input-group date">
               <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
               </div>
               <input type="text" class="form-control pull-right" value="{{ old('birthday') }}" id="datepicker" name="birthday">
            </div>
            @error('birthday')
            <div class="text-danger">{{ $errors->first('birthday') }}</div>
            @enderror
         </div>
         <div class="form-group ">
            <label for="exampleInputFile">{{ trans('message.avatar') }}</label>
            <input type="file" name="avatar" value="{{ old('avatar') }}" id="exampleInputFile">
            @error('avatar')
            <div class="text-danger">{{ $errors->first('avatar') }}</div>
            @enderror
         </div>
         <select name="role" class="form-control">
            @foreach ($roles as $role)
            <option  value="{{ $role->id }}">{{ $role->name }}</option>
            @endforeach
         </select>
      </div>
      <div class="box-footer">
         <button type="submit" class="btn btn-primary">{{ trans('message.submitbtn') }}</button>
      </div>
   </form>
</div>
@endsection
