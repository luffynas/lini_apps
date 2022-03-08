@extends('layouts.dashboard-datatables')

@section ('data')
<?php ### customized data
    $pageTitle      = 'Daftar kategori laporan'; 
    $dashboardLink  = 'user-projects.index';
    $formRouteCreate = 'user-projects-category.create';
    $formRouteEdit = 'user-projects-category.edit';
    $formRouteDestroy = 'user-projects-category.destroy';
    //sub category
    $formRouteSubcatCreate = 'user-projects-subcategory.create';
    $formRouteSubcatEdit = 'user-projects-subcategory.edit';
    $formRouteSubcatDestroy = 'user-projects-subcategory.destroy';
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

    @if (isset($projectReportCategorys))
        <div class="card-body bg-gray-lini-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="" class="display table table-bordered table-bordered dt-responsive nowrap">
                                <thead>
                                    <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Tipe</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @foreach ($projectReportCategorys as $data)
                                        <tr>
                                            <td>
                                                {{ $i }}
                                            </td>
                                            <td><strong>{{ ucwords($data->name) }}</strong>
                                                @if($projectReportSubcategorys != null)
                                                    @if($data->status == 1)
                                                    <ul>
                                                        @foreach($projectReportSubcategorys as $dataSubcat)
                                                            @if($dataSubcat->cat_id == $data->id)
                                                            <li>{{ ucfirst($dataSubcat->name) }} |

                                                                @if ($dataSubcat->status == 1)
                                                                    <span class="text-success">Active</span>
                                                                @else
                                                                    <span class="text-danger">Pending</span>
                                                                @endif

                                                                <form action="{{ route($formRouteSubcatDestroy, $dataSubcat->id) }}" method="POST" style="display:inline">
                                                                @method('DELETE')
                                                                @csrf
                                                                    @if($data->publisher_id == Auth::user()->id && $data->publisher_type == Auth::user()->user_type)
                                                                        <a href="{{ route($formRouteSubcatEdit, $dataSubcat->id) }}" class="btn btn-link waves-effect waves-light p-1"> <i class='fas fa-edit' title='Edit'></i> </a>
                                                                        <button type="submit" class="btn text-danger p-1" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')" disabled><i class="fas fa-times" title='Delete'></i> </button>  
                                                                    @endif
                                                                </form>
                                                            </li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                    @else
                                                    <ul></ul>
                                                    @endif
                                                    <a href="{{ route($formRouteSubcatCreate, 'cat_id='.$data->id) }}" class="btn btn-info{{ $data->status == 1 ? '' : ' disabled'}}">Tambah sub kategori</a>
                                                
                                                @else
                                                    <a href="{{ route($formRouteSubcatCreate, 'cat_id='.$data->id) }}" class="btn btn-info{{ $data->status == 1 ? '' : ' disabled'}}">Tambah sub kategori</a>
                                                @endif

                                            </td>
                                            <td>
                                                @if ($data->type == 1)
                                                    <span class="text-success">Gambar</span>
                                                @else
                                                    <span class="text-info">Text</span>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($data->status == 1)
                                                    <span class="text-success">{{ ucwords($data->status_name) }}</span>
                                                @else
                                                    <span class="text-danger">{{ ucwords($data->status_name) }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <form action="{{ route($formRouteDestroy, $data->id) }}" method="POST">
                                                @method('DELETE')
                                                @csrf
                                                    @if($data->publisher_id == Auth::user()->id && $data->publisher_type == Auth::user()->user_type)
                                                        <a href="{{ route($formRouteEdit, $data->id) }}" class='btn btn-icon waves-effect waves-light btn-info t-white'> <i class='fas fa-edit' title='Edit'></i> Ubah</a>
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?')" disabled><i class="fas fa-times" title='Delete'></i> Hapus</button>  
                                                    @else
                                                        <small class="text-danger">Tidak tersedia.</small>
                                                    @endif
                                                </form>
                                            </td>
                                        </tr>
                                        <?php $i++; ?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- container-fluid -->
        </div>
        <div class="card-body">
            <a href="{{ route($formRouteCreate) }}" class="btn btn-orange"><i class="fa fa-plus"></i> Tambah kategori</a>
        </div>
    @else
        <div class="card-body bg-gray-lini-2">
            <div class="alert alert-warning">Belum ada data.</div>
        </div>
        <div class="card-body">
            <a href="{{ route($formRouteCreate) }}" class="btn btn-orange"><i class="fa fa-plus"></i> Tambah kategori</a>
        </div>
    @endif
</div> <!-- container-fluid -->
@endsection

@section ('script')
<script>
    $(document).ready(function() {
        $('table.display').DataTable();
    } );
</script>
@endsection
