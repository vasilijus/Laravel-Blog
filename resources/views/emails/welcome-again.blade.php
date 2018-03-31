@component('mail::message')
# Introduction

Thanks for registering

@component('mail::button', ['url' => 'http://127.0.0.1:8000/'])
Start Browsing the Blog
@endcomponent

@component('mail::panel', ['url' => ''])
Lorem ipsum tra la la. Bla bla bla.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
