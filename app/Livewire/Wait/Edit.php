<?php

namespace App\Livewire\Wait;
use App\Models\Listw;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Edit extends Component
{
    //id
    public $id;

    //nama
    #[Rule('required', message: 'Masukkan nama')]
    public $nama;

    //kode
    #[Rule('required', message: 'Masukkan kode')]
    public $kode;

    //kode
    #[Rule('required', message: 'Masukkan urut')]
    public $urut;


    public function mount($id)
    {
        //get post
        $post = Listw::find($id);

        //assign
        $this->id   = $post->id;
        $this->nama = $post->nama;
        $this->kode = $post->kode;
        $this->urut = $post->urut;
    }

    /**
     * update
     *
     * @return void
     */
    public function update()
    {
        $this->validate();

        //get
        $post = Listw::find($this->id);

        //update
        $post->update([
            'nama' => $this->nama,
            'kode' => $this->kode,
            'urut' => $this->urut,
        ]);

        //flash message
        session()->flash('message', 'Data Berhasil Diupdate.');

        //redirect
        return redirect()->route('wait.index');
    }

    /**
     * render
     *
     * @return void
     */
    public function render()
    {
        return view('livewire.wait.edit');
    }
}
