@component('mail::message')
# Introduction

Hey admin
-{{$name}}
-{{$email}}
@component('mail::panel')
{{$msg}}
@endcomponent

@component('mail::button', ['url' => '','color'=>'green'])
Creer un compte
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
