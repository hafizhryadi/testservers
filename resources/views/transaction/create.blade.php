@extends('template.main')
@section('title', 'Add Transaction')
@section('container')

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Add Data</h4>
                <a href="{{ route('transaction.index') }}" class="btn btn-outline-primary rounded-pill "><i
                        class="fa-solid fa-angle-left"></i>Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <form action="{{ url('/transaction') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <form>
                    <div class="col-md-4">
                        <label>Title</label>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group has-icon-left">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Title" name="title"
                                    id="first-name-icon">
                                <div class="form-control-icon">
                                    <i class="bi bi-patch-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label>Amount</label>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group has-icon-left">
                            <div class="position-relative">
                                <input type="number" class="form-control" placeholder="Amount" name="amount"
                                    id="first-name-icon">
                                <div class="form-control-icon">
                                    <i class="bi bi-currency-dollar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label>Image</label>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group has-icon-left">
                            <div class="position-relative">
                                <input type="file" class="form-control" placeholder="" name="image"
                                    id="first-name-icon">
                                <div class="form-control-icon">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label>Product</label>
                    </div>
                    <div class="col-md-8">
                        <fieldset class="form-group">
                            <div class="position-relative">
                                <select class="form-select" id="basicSelect" name="product_id">
                                    <option selected>Select Product</option>
                                    <option value="1">Rice</option>
                                    <option value="2">Fish</option>
                                </select>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-md-4">
                        <label>Time</label>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group has-icon-left">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Time" name="time">
                                <div class="form-control-icon">
                                    <i class="bi bi-calendar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label>Type</label>
                    </div>
                    <div class="col-md-8">
                        <fieldset class="form-group">
                            <div class="position-relative">
                                <select class="form-select" id="basicSelect" name="type">
                                    <option value="expense">Expense</option>
                                    <option value="revenue">Revenue</option>
                                </select>
                            </div>
                        </fieldset>
                    </div>
                    <div class="col-12 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                        <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                    </div>
                </form>
            </form>
        </div>
    </div>






    {{-- <div class="row">
        <div class="col-12 col-md-10">
            <h3>Tambah Data</h3>
        </div>
        <div class="col-12 col-md-2 text-end">
            <a class="btn btn-primary" href="{{ Route('transaction.index') }}">Go Back </a>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{ url('/transaction') }}">
                @csrf
                @method('POST')
                <form>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" id="" placeholder="Nama">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">NISN</label>
                        <input type="text" name="nisn" class="form-control" id="" placeholder="NISN">
                    </div>
                    <select class="form-select" aria-label="Default select example" name="jurusan">
                        <option selected>Jurusan</option>
                        <option value="TKJ">TKJ</option>
                        <option value="AKL">AKL</option>
                        <option value="BDP">BDP</option>
                    </select><br>

                    <select class="form-select" aria-label="Default select example" name="jenis_kelamin">
                        <option selected>Jenis Kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="text" name="tempat_lahir" class="form-control" id=""
                            placeholder="2xxx-12-31">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Ayah</label>
                        <input type="text" name="nama_ayah" class="form-control" id="" placeholder="nama ayah">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Ibu</label>
                        <input type="text" name="nama_ibu" class="form-control" id="" placeholder="nama_ibu">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="" placeholder="alamat">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Asal Sekolah</label>
                        <input type="text" name="asal_sekolah" class="form-control" id=""
                            placeholder="asal sekolah">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </form>
        </div>
    </div> --}}
@endsection
