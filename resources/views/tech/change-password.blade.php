@extends('layouts.dashboard')

@section ('data')
<?php ### customized data
    $pageTitle      = 'Ubah password';
?>
@endsection

@section('content')
<div class="flash-message mt-2">
    @foreach (['danger','warning','success','info'] as $msg)
        @if (Session::has('alert-'.$msg))
            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-'.$msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
    @endforeach
</div>

<div class="card mt-2">
    <div class="card-header text-center text-uppercase bb-orange"><strong>{{ ucfirst($pageTitle) }}</strong></div>

    <form action="{{ route('tech.ubah.password') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card-body bg-gray-lini-2">
            <div class="col-md-6 justify-content-center">
                @if (session('error'))
                <div class="alert alert-danger">
                    <small class="form-text">
                        <strong>{{ session('error') }}</strong>
                    </small>
                </div>
                @endif
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
        
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                
                    <div class="form-group{{ $errors->has('oldPassword') ? ' has-error' : '' }}">
                        <label for="oldPassword">Password lama</label>
                        <input class="form-control" type="password" name="oldPassword" id="oldPassword" required placeholder="Masukkan password lama Anda">
                        @if ($errors->has('oldPassword'))
                            <small class="form-text text-muted">
                                <strong>{{ $errors->first('oldPassword') }}</strong>
                            </small>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password">Password baru</label>
                        <input class="form-control" type="password" required name="password" id="password" data-parsley-minlength="6" placeholder="Masukkan password baru Anda">
                        @if ($errors->has('password'))
                            <small class="form-text text-muted">
                                <strong>{{ $errors->first('password') }}</strong>
                            </small>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="new_password_retype">Masukkan ulang password baru</label>
                        <input class="form-control" name="new_password_retype" type="password" data-parsley-equalto="#password" required placeholder="Masukkan ulang password baru Anda">
                    </div>
                
            </div>
        </div>
        <div class="card-body">
            <div class="col-md">
                <button class="btn btn-orange" type="submit"> Ubah </button>
                <a href="{{ route($dashboardLink) }}" class="btn btn-blue-lini" type="button"> Batal </a>
            </div>
        </div>
    </form>
</div>
@endsection
