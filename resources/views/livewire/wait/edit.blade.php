@section('title')
Edit
@endsection

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form wire:submit="update" enctype="multipart/form-data">

                        <div class="form-group mb-4">
                            <label class="fw-bold">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" wire:model="nama" placeholder="Masukkan nama">

                            <!-- error message untuk nama -->
                            @error('title')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label class="fw-bold">Kode</label>
                            <input type="text" class="form-control @error('kode') is-invalid @enderror" wire:model="kode" placeholder="Masukkan kode">

                            <!-- error message untuk kode -->
                            @error('title')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group mb-4">
                            <label class="fw-bold">Urut</label>
                            <input type="text" class="form-control @error('urut') is-invalid @enderror" wire:model="urut" placeholder="Masukkan urut">

                            <!-- error message untuk urut -->
                            @error('title')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
