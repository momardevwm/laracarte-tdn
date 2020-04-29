@extends('layouts.default',['title'=>'Contact'])
@section('content')
<div class="container">

 <div class="row">
   <div class="col-md-12 col-md-offset-2 col-sm-10 col-sm-offset-1">
      <h2>Get in Touch</h2>
      <p class="text-muted">If you having trouble with this service, please <a href="mailto:momardieng19@gmail.com">ask for help</a>.</p>
      <form class="" action="{{route('store')}}" method="post">
        {{ csrf_field() }}
        <div class="form-group {{ $errors->has('name') ? 'error' : ''}}">
          <label for="name" class="control-label">Name</label>
          <input type="text" name="name"  id="name" class="form-control" value="{{ old('name')}}">
          {!! $errors->first('name','<span class="help-block">:message</span>') !!}
        </div>

        <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
          <label for="email" class="control-label">Email</label>
          <input type="email" name="email" id="email" class="form-control" value="{{ old('email')}}">
          {!! $errors->first('email','<span class="help-block">:message</span>') !!}
        </div>

        <div class="form-group {{ $errors->has('message') ? 'has-error' : ''}}">
          <label for="message" class="control-label sr-only">Message</label>
          <textarea name="message" rows="8" cols="90" class="form-control" id="message">{{ old('message')}}</textarea>
          {!! $errors->first('message','<span class="help-block">:message</span>') !!}
        </div>

        <div class="form-group">
          <button class="btn btn-dark btn-block" type="submit" name="button">Submit Enquiry &raquo;</button>
        </div>
      </form>
   </div>
 </div>
</div>
@stop
