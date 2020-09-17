@extends('layouts.app_master_admin')
@section('content')
<div class="box box-primary">
   <div class="box-header with-border">
      <h3 class="box-title">{{ trans('message.edituser') }}</h3>
   </div>
   <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('users.update',$user->id) }}"  >
      @csrf
      @method('PUT')
      <div class="box-body">
         <input type="hidden" name="id">
         <div class="form-group ">
            <label >{{ trans('message.username') }}</label>
            <input type="text" class="form-control"  name="username" value="{{ $user->username }}" placeholder="Enter username">
            @error('username')
            <div class="text-danger">{{ $errors->first('username') }}</div>
            @enderror
         </div>
         <div class="form-group ">
            <label for="exampleInputEmail1">{{ trans('message.phone') }}</label>
            <input type="text" class="form-control" value="{{ $user->phone }}" id="exampleInputEmail1" name="phone" placeholder="Enter phone">
            @error('phone')
            <div class="text-danger">{{ $errors->first('phone') }}</div>
            @enderror
         </div>
         <div class="form-group ">
            <label>{{ trans('message.gender') }}</label>
            <select class="form-control" name="gender">
               <option value="">--{{ trans('message.choose') }}--</option>
               <option {{ $user->gender == 1 ? 'selected' : "" }} value="1">{{ trans('message.male') }}</option>
               <option {{ $user->gender == 0? 'selected' : "" }} value="0">{{ trans('message.female') }}</option>
            </select>
            @error('gender')
            <div class="text-danger">{{ $errors->first('gender') }}</div>
            @enderror
         </div>
         <div class="form-group ">
            <label for="exampleInputEmail1">{{ trans('message.email') }}</label>
            <input type="email" value="{{ $user->email }}" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
            @error('email')
            <div class="text-danger">{{ $errors->first('email') }}</div>
            @enderror
         </div>
         <div class="form-group ">
            <label for="exampleInputPassword1">{{ trans('message.password') }}</label>
            <input type="password" id="inputError" name="password"  class="form-control" id="exampleInputPassword1" placeholder="Password">
            @error('password')
            <div class="text-danger">{{ $errors->first('password') }}</div>
            @enderror
         </div>
         <div class="form-group ">
            <label for="exampleInputPassword1">{{ trans('message.university') }}</label>
            <input type="text" name="university" value="{{ $user->university }}" class="form-control" id="exampleInputPassword1" placeholder="university">
            @error('university')
            <div class="text-danger">{{ $errors->first('university') }}</div>
            @enderror
         </div>
         <div class="form-group ">
            <label for="exampleInputPassword1">{{ trans('message.address') }}</label>
            <input type="text" name="address" value="{{ $user->address }}" class="form-control" id="exampleInputPassword1" placeholder="address">
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
               <input value="{{ date('Y/m/d', strtotime($user->birthday)) }}"  type="text" class="form-control pull-right" id="datepicker" name="birthday">
            </div>
            @error('birthday')
            <div class="text-danger">{{ $errors->first('birthday') }}</div>
            @enderror
         </div>
         <div class="form-group ">
            <label for="exampleInputFile">{{ trans('message.avatar') }}</label>
            <input type="file" name="avatar" id="exampleInputFile">
            @error('avatar')
            <div class="text-danger">{{ $errors->first('avatar') }}</div>
            @enderror
         </div>
         <div class="form-group ">
            <label for="exampleInputFile">{{ trans('message.oldavatar') }}</label>
            <img id="image_index_user" src="{{URL::to($user->avatar)}}" alt="">
            <input type="hidden" name="old_avatar" value="{{$user->avatar}}">
         </div>
         <select name="role" class="form-control">
         @foreach ($roles as $role)
         <option {{ $roleOfUser->contains($role->id) ? 'selected' : '' }} value="{{ $role->id }}">{{ $role->name }}</option>
         @endforeach
         </select>
      </div>
      <div class="box-footer">
         <button type="submit" class="btn btn-primary">{{ trans('message.submitbtn') }}</button>
         <button type="reset" class="btn btn-warning">{{ trans('message.resetbtn') }}</button>
      </div>
   </form>
</div>
@endsection
