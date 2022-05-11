@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>ویرایش پست</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="">بازگشت</a>
            </div>
        </div>
    </div>


    <form  action="{{route('post.update' , $post->id)}}" method="POST">
       
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>نویسنده:</strong>
                    <input type="text" name="user_id" value="{{$post->user_id}}" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>عنوان:</strong>
                    <textarea class="form-control" value="" style="height:150px" name="title" placeholder="">{{$post->title}}</textarea>
                </div>
            </div>
             @csrf
            @method('PUT')
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">ثبت</button>
            </div>
        </div>

    </form>
    @endsection
