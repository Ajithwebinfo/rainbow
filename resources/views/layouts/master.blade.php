<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="token" content="{{csrf_token()}}">
    <!-- Favicon icon -->
    @include('layouts.header.favicon.favicon')
    @include('layouts.header.title.pagetitles')
    @include('layouts.header.css.styles')


</head>

@include('layouts.contents.contents')






@include('layouts.footer.js.scripts')
@include('layouts.footer.footer')
