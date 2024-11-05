@extends('layouts.login')

@section('content')

<main class="d-flex w-100">
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="m-sm-4">
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input id="email" type="email" class="form-control form-control-sm @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="admin@gmail.com" required autocomplete="email" autofocus />
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input id="password" class="form-control form-control-sm mb-2 @error('password') is-invalid @enderror" type="password" name="password" placeholder="mypassword" required autocomplete="current-password" />
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="d-grid mt-4">
                                            <button type="submit" class="btn btn-sm px-4" style="background-color: #5fcf80">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>

@endsection