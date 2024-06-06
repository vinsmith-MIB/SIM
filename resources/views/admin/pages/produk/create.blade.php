<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Edit Produk</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{ asset('assets/css/sb-admin-2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
    <!-- Or for RTL support -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.rtl.min.css" />
    <style>
        .content-wrapper {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 40px);
            /* Adjusted for footer height */
        }

        .card {
            width: 100%;
            max-width: 600px;
        }

        .sticky-footer {
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Begin Page Content -->
        <div class="container-fluid py-5 content-wrapper">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800 text-center">Tambah Produk</h1>

            <!-- Edit Kategori Produk Form -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambah Produk</h6>
                </div>
                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>

                @endif
                <div class="card-body">
                    <form action="{{ route('admin.produk.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama_produk">Nama Produk</label>
                            <input type="text" class="form-control" id="nama_produk" name="nama_produk" required maxlength="255">
                        </div>
                        <div class="form-group">
                            <label for="kategori_produk">Kategori Produk</label>
                            <select class=" form-select " id="kategori_produk" name="id_kategori">
                                <option class="null" value=""></option>
                                @foreach ($kategoris as $kategori)
                                <option value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="produk_seo">Produk SEO</label>
                            <input type="text" class="form-control" id="produk_seo" name="produk_seo" required>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number" class="form-control" id="harga" name="harga" required min="0" step="any">
                        </div>
                        <div class="form-group">
                            <label for="stok">Stok</label>
                            <input type="number" class="form-control" id="stok" name="stok" required min="0">
                        </div>
                        <div class="form-group">
                            <label for="satuan">Satuan</label>
                            <input type="text" class="form-control" id="satuan" name="satuan" required>
                        </div>
                        <div class="form-group">
                            <label for="diskon">Diskon</label>
                            <input type="number" class="form-control" id="diskon" name="diskon" min="0" step="any">
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" class="form-control-file" id="gambar" name="gambar" required accept="image/*" onchange="previewImage(this)">
                            <img id="preview" src="#" alt="Preview Gambar" style="display: none; max-width: 100px; margin-top: 10px;">
                            @error('gambar')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="w-100 d-flex justify-content-end">
                            <a href="{{ route('admin.produk.index') }}" type="button" class="btn btn-danger mr-2">Kembali</a>
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Produk</button>
                        </div>
                    </form>
                </div>


            </div>
            <!-- /.container-fluid -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; CS Admin 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('assets/js/select2.min.js') }}"></script>
        <!-- Custom scripts for all pages-->
        <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>
        <script>
            function previewImage(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#preview').attr('src', e.target.result);
                        $('#preview').css('display', 'block');
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }


            $(document).ready(function() {
                $('#kategori_produk').select2({
                    theme: "bootstrap-5",
                    width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                    placeholder: $(this).data('placeholder'),
                });
                $('.select2-results').click(function() {
                    $(this).find('span').first.remove();
                });
            });
        </script>


</body>

</html>