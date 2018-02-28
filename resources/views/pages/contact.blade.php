@extends('layouts.default')

@section('content')

    <div class="card mt-3 pl-2 pr-2 color   ">
        <div class="card-title"><h1>Contact</h1>
            <p class="lead">contact the page owner? Fill in the details and we shall get back to you soon :)</p></div>
        <div class="card-body">

            <form role="form" id="contact-form" class="contact-form" method="POST" action="{{route('contact.store')}}">

                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">name</label>
                    <input name="name" type="name" class="form-control" id="name" placeholder="name">
                </div>

                <div class="form-group">
                    <label for="email">email</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="email">
                </div>

                <div class="form-group">
                    <label for="body">Message:</label>
                    <textarea name="body" class="form-control" id="body" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </form>
        </div>
    </div>

@endsection