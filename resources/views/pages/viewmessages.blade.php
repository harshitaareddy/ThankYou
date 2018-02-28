@extends('layouts.default')

@section('content')
    <div class="viewmessages">

    <table class="table color">
        <thead>
        <tr>
            <th scope="col"></th>
            <th scope="col">Choose</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">I</th>
            <td>
                <a href="/fitness">Fault in the webpage</a>

            </td>
            <td>
                <button type="submit" class="btn btn-primary">Delete</button>
            </td>
        </tr>
        <tr>
            <th scope="row">II</th>
            <td>
                <a href="/fitness">Error Loading the site</a>

            </td>
            <td>
                <button type="submit" class="btn btn-primary">Delete</button>
            </td>
        </tr>
        <tr>

    </div>



@endsection