@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="columns is- is-marginless is-centered">
            <div class="column is-7">
                <nav class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            add User
                        </p>
                    </header>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card-content">

                        <form action="/add-user" method="post">
                            {{csrf_field()}}
                            <input type="text" placeholder="name" name="name">
                            <input type="text" placeholder="email" name="email">
                            <input type="text" placeholder="password" name="password">
                            <input type="submit" value="submit">


                        </form>






                    </div>
                </nav>
            </div>
        </div>
    </div>
@endsection
