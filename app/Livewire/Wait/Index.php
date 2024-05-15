<?php

namespace App\Livewire\Wait;

use App\Models\Listw;
use Livewire\Component;
use Livewire\WithPagination;


class Index extends Component
{
    public function render()
    {
        return view('livewire.wait.index', [
            'posts' => Listw::latest()->paginate(500)
        ]);
    }
    public function addnum($id,$urut)
    {
        $post = Listw::find($id);

        //update
        $post->update([
            'urut' => $urut,
        ]);
    }
    public function destroy($id)
    {
        //destroy
        Listw::destroy($id);

        //flash message
        session()->flash('message', 'Data Berhasil Dihapus.');

        //redirect
        return redirect()->route('wait.index');
    }
}
