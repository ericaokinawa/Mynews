@extends('layouts.profile')
@section('title','プロフィールの編集')
@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-8 mx-auto">
        <h2>プロフィールの編集</h2>
          <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">
            @if (count($errors) > 0)
              <ul>
                @foreach($errors->all() as $e)
                  <li>{{ $e }}</li>
                @endforeach
              </ul>
            @endif
          <div class="form-group row">
            <label class="col-md-2" for="name">名前</label>
              <div class="col-md-10">
                <input type="text" class="form-control" name="name" value="{{ $profile_form->name }}">
              </div>
          </div>
          
          <div class="form-group row">
            <label class="col-md-2" for="gender">性別</label>
              <div class="col-md-10">
                <label class="col-md-2" for="male">男性</label>
                  <input type="radio" class="form-control" name="gender" {{ old('gender', 'male') == 'male' ? 'checked' : ''}}>
              </div>
              <div class="col-md-10">
                <label class="col-md-2" for="female">女性</label>
                  <input type="radio" class="form-control" name="gender" {{ old('gender', 'femle') == 'male' ? 'checked' : ''}}>
              </div>
          </div>
          
          <div class="form-group row">
            <label class="col-md-2" for="hobby">趣味</label>
              <div class="col-md-10">
                <textarea type="text" class="form-control" name="hobby" value="{{ $profile_form->hobby }}">
              </div>
          </div>
          
          <div class="form-group row">
            <label class="col-md-2" for="introduction">自己紹介</label>
              <div class="col-md-10">
                <textarea type="text" class="form-control" name="introdction" value="{{ $profile_form->introdction }}">
              </div>
          </div>
            
          <div class="form-group row">
              <div class="col-md-10">
                <input type="hidden" name="id" value="{{ $news_form->id }}">
                  {{ csrf_field() }}
                <input type="submit" class="btn btn-primary" value="更新">
              </div>
          </div>
          
          
        </form>
      </div>
    </div>
  </div>
</div>
@endsection