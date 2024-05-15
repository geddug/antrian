<?php

namespace App\Livewire\Wait;
use App\Models\Listw;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Create extends Component
{
    //nama
    #[Rule('required', message: 'Masukkan nama')]
    public $nama;

    //content
    #[Rule('required', message: 'Masukkan kode')]
    public $kode;

    /**
     * store
     *
     * @return void
     */
    public function store()
    {
        $this->validate();

        //create post
        Listw::create([
            'nama' => $this->nama,
            'kode' => $this->kode,
            'urut' => '0001',
        ]);

        //flash message
        session()->flash('message', 'Data Berhasil Disimpan.');

        //redirect
        return redirect()->route('wait.index');
    }
    public function render()
    {
        return view('livewire.wait.create');
    }
}
