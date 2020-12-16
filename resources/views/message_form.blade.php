@extends('layouts.app_layout')

@section('content')


    <div class="row">
        <div class="col-sm-4 offset-sm-4">

            @csrf

            <form action="{{ route('main_init') }}" method="post">
                <div class="form-group">
                    <label>From:</label>
                    <input type="email" name="text_from" class="form-control">
                </div>

                <div class="form-group">
                    <label>To:</label>
                    <input type="email" name="text_to" class="form-control">
                </div>

                <div class="form-group">
                    <label>Message:</label>
                    <textarea name="text_message" rows="5" class="form-control"></textarea>
                </div>

                <div class="text-center mt-3">
                    <input type="submit" value="Send One Time Message" class="btn btn-primary">
                </div>


            </form>

            @if ($errors->any())
                <div class="alert alert-danger p-2">
                    <ul>
                        @foreach ($errors->all as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>

@endsection
