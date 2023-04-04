@extends('backend.app-master')

@section('content')
    <!-- Data Tables CSS CDN -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.5.1.js" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    @include('backend.partials.nav')


    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_sidebar.html -->
            @include('backend.partials.side')
            <div class="main-panel">
                <div class="content-wrapper">
                    <!-- Main Content untuk menaruh konten yang di buat -->
                    <div class="main-panel">
                        <div class="content-wrapper">
                          <div class="row">
                            <div class="col-lg-12 grid-margin stretch-card">
                              <div class="card">
                                <div class="card-body">
                                  <h4 class="card-title">About Create </h4>


                                  <form class="needs-validation" method="POST" action="{{ route('indexabout') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label class="font-weight-bold">GAMBAR</label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                                        <!-- error message untuk title -->
                                        @error('image')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">JUDUL</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Masukkan Judul About">

                                        <!-- error message untuk title -->
                                        @error('title')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="font-weight-bold">KONTEN</label>
                                        <textarea class="form-control @error('content') is-invalid @enderror" name="content" rows="5" placeholder="Masukkan Konten About">{{ old('content') }}</textarea>

                                        <!-- error message untuk content -->
                                        @error('content')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-md btn-primary">Save</button>
                                    <button type="reset" class="btn btn-md btn-warning">Cancle</button>


                                  </form>


                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <!-- partial -->
                      </div>
                </div>
                    @include('backend.partials.footer')
            </div>
        </div>
    </div>

     <!-- Data Tables JS CDN -->
     <script src="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css"></script>
     <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
     <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
     <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
     <script type="text/javascript"></script>

    <script>
        $(document).ready(function () {
    $('#example').DataTable();
    });
    </script>


@endsection

@section('footer')
<script type="text/javascript">
	$(document).ready(function(){
	$('.btnuser').click(function(){
	var $nik = $(this).data("nik");
    var $nm_siswa = $(this).data("nm_siswa");
    console.log($(this).data("nik"))
    $('.Dsnik').val($nik)
    $('.Dsnm_siswa').val($nm_siswa)
	});
	});
</script>

@endsection
