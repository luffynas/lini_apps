@extends('layouts.dashboard-form')

@section ('data')
<?php ### customized data
    $pageTitle      = 'Tambah aktivitas harian';
    $formRouteIndex = 'admin-minutes.index';
    $formRouteStore = 'admin-minutes.store';
?>
@endsection

@section('content')
<div class="flash-message mt-2">
    @foreach (['danger','warning','success','info'] as $msg)
        @if (Session::has('alert-'.$msg))
            <p class="alert alert-{{ $msg }}">{{ Session::get('alert-'.$msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
        @endif
    @endforeach
    @if ($errors->any())
        <p class="alert alert-danger">
            <small class="form-text">
                <strong>{{ $errors->first() }}</strong>
            </small>
        </p>
    @endif
</div>

<div class="card mt-2">
    <div class="card-header text-center text-uppercase bb-orange"><strong>{{ ucfirst($pageTitle) }}</strong></div>


    <form class="w-100" action="{{ route($formRouteStore) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body bg-gray-lini-2">
            <div class="row m-0">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama aktivitas <small class="c-red">*</small></label>
                        <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' has-error' : '' }}" value="{{ old('name') ?? '' }}" placeholder="Nama aktivitas" required>
                    </div>
                    <div class="row">
                        <div class="col-md form-group">
                            <label>Jam mulai</label>
                            <div class="input-group">
                                <input id="timepicker3" name="event_start" type="text" class="form-control" value="{{ old('event_start') ?? '' }}" required>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                                </div>
                            </div><!-- input-group -->
                        </div>
                        <div class="col-md form-group">
                            <label>Jam selesai</label>
                            <div class="input-group">
                                <input id="timepicker" name="event_end" type="text" class="form-control" value="{{ old('event_start') ?? '' }}" required>
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                                </div>
                            </div><!-- input-group -->
                        </div>
                    </div>
                    <div class="row m-0 form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        <label>Deskripsi</label>
                        <textarea name="description" class="form-control" cols="10" rows="7">{{ old('description') }}</textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="col-md form-group">
                        <label for="">Kategori </label>
                        <select id="minute_cat" name="minute_cat" class="form-control select2{{ $errors->has('minute_cat') ? ' has-error' : '' }}" required>
                            @if (!empty(old('minute_cat')))
                                @foreach ($minutesCats as $dataCat)
                                    @if ($dataCat->id == old('minute_cat'))
                                        <option value='{{ strtolower($dataCat->id) }}'>{{ ucwords(strtolower($dataCat->name)) }}</option>
                                    @endif
                                @endforeach
                            @else
                                <option value="0">Pilih kategori</option>
                            @endif
                            @foreach($minutesCats as $dataCat)
                                <option value="{{ strtolower($dataCat->id) }}">{{ ucwords($dataCat->name) }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="col-md form-group">
                        <label>Tanggal</label>
                        <input type="date" class="form-control{{ $errors->has('date') ? ' has-error' : '' }}" name="date" value="{{ old('date') ?? '' }}" min="{{ date('Y-m-d') }}" placeholder="dd/mm/yyyy">
                        @if ($errors->has('date'))
                            <small class="form-text text-muted">
                                <strong>{{ $errors->first('date') }}</strong>
                            </small>
                        @endif
                    </div>

                    <div class="col-md{{ $errors->has('image') ? ' has-error' : '' }}">
                        <label>Dokumentasi</label>
                        <input type="file" name="image" class="dropify" data-max-file-size="1M" data-default-file="{{ asset('img/minutes/admin/default.png') }}"  />
                    </div>
                </div>
            </div>
            <div class="row m-0">
                <div class="col-md form-group">
                    <label for="">Published </label>
                    <select name="published" class="form-control select2{{ $errors->has('published') ? ' has-error' : '' }}">
                        @if (!empty(old('published')))
                            @if (old('published') == 1)
                                <option value='1'>Published</option>
                            @else
                                <option value="0">Draft</option>
                            @endif
                        @else
                            <option value='1'>Published</option>
                            <option value="0">Draft</option>
                        @endif
                    </select>
                </div>
                <div class="col-md form-group">
                    <label for="">Status </label>
                    <select name="status" class="form-control select2{{ $errors->has('status') ? ' has-error' : '' }}">
                        @if (!empty(old('status')))
                            @if (old('status') == 1)
                                <option value='1'>Done</option>
                            @else
                                <option value="0">In progress</option>
                            @endif
                        @else
                            <option value="0">In progress</option>
                            <option value='1'>Done</option>
                        @endif
                    </select>
                </div>
                <div class="col-md form-group">
                    <label for="">Prosentase </label>
                    <input type="number" name="percentage" class="form-control{{ $errors->has('percentage') ? ' has-error' : '' }}" value="{{ old('percentage') ?? '' }}" placeholder="Hanya diisi jika belum done">
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="col-md">
                <button type="submit" class="btn btn-orange" name="submit">Tambah</button>
                <a href="{{ route($formRouteIndex) }}" type="button" class="btn btn-blue-lini">Kembali</a>
            </div>
        </div>
    </form>

</div> <!-- container-fluid -->
@endsection

@section ('script')
<script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'solution' );
</script>
<script src="{{ asset('admintheme/libs/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
@endsection
