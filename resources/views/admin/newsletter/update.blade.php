@extends('layouts.app')

@section('content')

    <form method="post" action="{{ route('admin.newsletter.update', ['newsletter'=> $newsletter]) }}">
        @csrf
        <h1>{{__('Newsletter page title')}}</h1>
        <h2>{{__('Update newsletter')  }}</h2>

        @include('admin.newsletter.wysiwyg')

        <div class="row justify-content-around">
            <input type="submit" class="btn btn-primary" value="Enregistrer">
            <a class="btn btn-danger" href="{{route('admin.newsletter.index')}}">Annuler</a>
        </div>
    </form>
@endsection