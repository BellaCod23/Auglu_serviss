@extends('augluserviss')


@section('title') Atsauksmes @endsection


@section('main_content')

<h1>Atsauksmes forma</h1>


@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $errors)
        <li>
            {{ $errors }}
        </li>
        @endforeach
    </ul>
</div>
@endif

<form method="post" action="review/check">

    @csrf
    <input type="email" name="email" id="email" placeholder="Ievadiet email" class="form-control"><br>

    <input type="text" name="subject" id="subject" placeholder="Ievadiet vārdu" class="form-control"><br>

    <textarea name="message" id="message" class="form-control" placeholder="Ievadiet tekstu"></textarea></textarea><br>

    <button type="submit" class="btn btn-success">Nosūtīt</button>

</form>


@endsection



