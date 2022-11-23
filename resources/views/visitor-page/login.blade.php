@extends('visitor-layout.main')

@section('content')
    <section id="login">
        <form action="#" action="POST">
            @csrf
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <form>
                            <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                            </div>
                            <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password">
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                            </div>
                            <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Signin</button>
                        </form>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
