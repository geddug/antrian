@section('title')
    Data
@endsection

<div class="container mt-5 mb-5">
    <div class="row" wire:poll>
        @forelse ($posts as $post)
            <div class="col-md-4 mb-3">
                <div class="card p-3 text-center border-0 rounded shadow-sm">
                    <p class="h2 bold">{!! $post->nama !!}</p>
                    <hr>
                    <p class="bold h2">{!! $post->kode !!}<span>{{$post->urut}}</span></p>
                </div>
            </div>
        @empty
            <div class="alert alert-danger col-md-12">Data Post belum Tersedia.</div>
        @endforelse
    </div>

</div>
