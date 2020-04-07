@extends('layouts.default')
@section('content')
<div class="container">
  <br>
  <h2>What is Laracarte</h2>
  <p>Laracarte is a clone app of <a href="https://laramap.com" target="_blank">Laramap.com</a> </p>
  <div class="row">
     <div class="col-md-6">
       <div class="alert alert-warning">
      <p>  <strong><i class="fal fa-exclamation-triangle" aria-hidden="true"></i>This app has been built by <a href="http://twitter.com/etsmo"> @etsmo</a> for learning purposes.</strong></p>
       </div>
     </div>
  </div>
  <p>Feel free to help to improve the <a href="#">source code</a>.</p>

  <hr>
  <h2>What is Laramap</h2>
  <p>Laramap is the website by which Laracarte was inspired.</p>
  <p>More info <a href="https://laramap.com/p/about">here</a>.</p>
  <hr>
  <h2>Which tools and services are used in Laracarte</h2>
  <p>Basically it's built on laravel &amp; Bootstrap. But there's a bunch of services used for email and othier section.</p>
  <ul>
    <li>Laravel</li>
    <li>Bootstrap</li>
    <li>Amazone S3</li>
    <li>Mandrill</li>
    <li>Google Maps</li>
    <li>Gravatar</li>
    <li>Antony Martin's Geolocation Package</li>
    <li>Michel Fortin's Markdown Paser Package</li>
    <li>Heroko</li>
  </ul>
</div>
@stop
