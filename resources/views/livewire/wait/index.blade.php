@section('title')
Data
@endsection

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">

            <!-- flash message -->
            @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
            <!-- end flash message -->

            <a href="/tambah" wire:navigate class="btn btn-md btn-success rounded shadow-sm border-0 mb-3">Tambah</a>
            <div class="row">
                @forelse ($posts as $post)
                <div class="col-md-4 mb-3">
                    <div class="card p-3 text-center border-0 rounded shadow-sm">
                        <p>{!! $post->nama !!}</p>
                        <p class="bold h3">{!! $post->kode !!}</p>
                        <p class="bold"><a wire:click="addnum({{ $post->id.",'".sprintf('%04d',($post->urut+1))."'" }})" class="btn btn-sm btn-primary">+</a> {!! $post->urut !!} <a wire:click="addnum({{ $post->id.",'".sprintf('%04d',($post->urut-1))."'" }})" class="btn btn-sm btn-primary">-</a></p>
                        <div class="text-center">
                            <a wire:click="addnum({{ $post->id.",'0001'" }})" class="btn btn-sm btn-warning">Reset</a>
                            <a href="/edit/{{ $post->id }}" wire:navigate class="btn btn-sm btn-primary">Edit</a>
                            <button wire:click="destroy({{ $post->id }})" class="btn btn-sm btn-danger">Hapus</button>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="alert alert-danger col-md-12">Data Post belum Tersedia.</div>
                @endforelse
            </div>
            
        </div>
    </div>
</div>