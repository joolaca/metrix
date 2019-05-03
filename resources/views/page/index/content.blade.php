@extends('layouts.web_layout')
@section('content')

    {!!  \App\Http\Controllers\IndexPageController::renderHeader()!!}
    {!!  \App\Http\Controllers\IndexPageController::renderAbout()!!}
    {!!  \App\Http\Controllers\IndexPageController::renderBigDescription()!!}
    {!!  \App\Http\Controllers\IndexPageController::renderReferences()!!}
    {!!  \App\Http\Controllers\IndexPageController::renderPortfolio()!!}
    {!!  \App\Http\Controllers\IndexPageController::renderTeam()!!}
    {!!  \App\Http\Controllers\IndexPageController::renderIndexHr()!!}
    {!!  \App\Http\Controllers\IndexPageController::renderJobAdvertisements()!!}
    {!!  \App\Http\Controllers\IndexPageController::renderContact()!!}
    {!!  \App\Http\Controllers\IndexPageController::renderFooter()!!}


@endsection
