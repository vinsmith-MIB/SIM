<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Kategori Produk</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="{{asset('assets/css/sb-admin-2.min.css')}}">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include('admin.partials.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('admin.partials.topbar')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">kategori Produk</h1>
                    </div>

                    <!-- tabel kategori -->
                    <div class="container mt-5">
                        <h3 class="mb-4 text-center">Daftar Kategori Produk</h3>
                        <a href="{{route('admin.kategori.create')}}" class="btn btn-primary mb-3"><i class="fa fa-plus" aria-hidden="true"></i> Tambahkan Kategori</a>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kategori</th>
                                    <th>Kategori SEO</th>
                                    <th>Dibuat Pada</th>
                                    <th>Diperbarui Pada</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $key => $kategori)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $kategori->nama_kategori }}</td>
                                    <td>{{ $kategori->kategori_seo }}</td>
                                    <td>{{ \Carbon\Carbon::parse($kategori->created_at)->locale('id')->translatedFormat('d F Y H:i') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($kategori->updated_at)->locale('id')->translatedFormat('d F Y H:i') }}</td>
                                    <td>
                                        <a href="{{ route('admin.kategori.edit', $kategori->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <form action="{{ route('admin.kategori.destroy', $kategori->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- Pagination -->
                        {{ $categories->links('pagination::bootstrap-5') }}
                        <!-- Pagination -->
                    </div>



                    <!-- Footer -->
                    <footer class="sticky-footer py-3 bg-white">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright &copy; Kelompok 2 - Manajemen Informatika 2022B</span>
                            </div>
                        </div>
                    </footer>
                    <!-- End of Footer -->

                </div>
                <!-- End of Content Wrapper -->

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

            @include('admin.partials.footer')

</body>

</html>