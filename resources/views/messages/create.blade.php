@extends('layouts.default',['title'=>'Contact'])
@section('content')
<div class="container">

 <div class="row">
   <div class="col-md-12 col-md-offset-2 col-sm-10 col-sm-offset-1">
      <h2>Get in Touch</h2>
      <p class="text-muted">If you having trouble with this service, please <a href="mailto:momardieng19@gmail.com">ask for help</a>.</p>
      <form class="" action="index.html" method="post">
        <div class="form-group">
          <label for="name" class="control-label">Name</label>
          <input type="text" name="name" value="" id="name" class="form-control" required="required">
        </div>

        <div class="form-group">
          <label for="email" class="control-label">Email</label>
          <input type="email" name="email" value="" id="email" class="form-control" required="required">
        </div>

        <div class="form-group">
          <label for="message" class="control-label sr-only">Message</label>
          <textarea name="message" rows="8" cols="90" class="form-control" required="required" id="message"></textarea>
        </div>

        <div class="form-group">
          <button class="btn btn-dark btn-block" type="submit" name="button">Submit Enquiry &raquo;</button>
        </div>
      </form>
   </div>
 </div>
</div>
@stop
