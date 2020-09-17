@extends('layouts.app_master_admin')
@section('content')
<div class="box box-primary">
   <div class="box-header with-border">
      <h3 class="box-title">{{ trans('message.viewuser') }}</h3>
   </div>
   <form role="form">
      <div class="box-body">
         <input type="hidden" name="id">
         <div class="form-group ">
            <label >{{ trans('message.username') }}</label>
            <input type="text" class="form-control" value="{{ $user->username }}" >
         </div>
         <div class="form-group ">
            <label for="exampleInputEmail1">{{ trans('message.phone') }}</label>
            <input type="text" class="form-control" value="{{ $user->phone }}" >
         </div>
         <div class="form-group ">
            <label>{{ trans('message.gender') }}</label>
            <input type="text" class="form-control" value="{{ $user->gender == 1 ? 'Male' : 'Female' }}" >
         </div>
         <div class="form-group ">
            <label for="exampleInputEmail1">{{ trans('message.email') }}</label>
            <input type="email" value="{{ $user->email }}" class="form-control" >
         </div>
         <div class="form-group ">
            <label for="exampleInputPassword1">{{ trans('message.university') }}</label>
            <input type="text" value="{{ $user->university }}" class="form-control">
         </div>
         <div class="form-group ">
            <label for="exampleInputPassword1">{{ trans('message.address') }}</label>
            <input type="text" value="{{ $user->address }}" class="form-control">
         </div>
         <div class="form-group ">
            <label>{{ trans('message.birthday') }}:</label>
            <div class="input-group date">
               <div class="input-group-addon">
                  <i class="fa fa-calendar"></i>
               </div>
               <input value="{{ date('Y/m/d', strtotime($user->birthday)) }}"  type="text" class="form-control pull-right">
            </div>
         </div>
         <div class="form-group ">
            <label for="exampleInputFile">{{ trans('message.avatar') }}</label>
            <img width="200px" height="200px" src="{{URL::to($user->avatar)}}" alt="">
         </div>
         <div class="form-group ">
            <label for="exampleInputPassword1">{{ trans('message.role') }}</label>
            <input type="text" value="{{ $roleOfUser[0] == 1 ? 'trainer' : 'supervisor' }}" class="form-control" >
         </div>
      </div>
   </form>
</div>
@endsection
