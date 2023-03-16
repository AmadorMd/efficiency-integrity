<?php

namespace App\Http\Livewire\Admin\Blogs;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;

    public $title, $value, $image, $idEntry = null, $entry;
    public $image_url;
    public function mount($entry){
        $this->title = $entry->title;
        $this->value = $entry->description;
        $this->image_url = $entry->image_url;
        $this->idEntry = $entry->id;
    }
    public function storeEntry(){
        $imageRequired = 'required';
        if($this->entry->image_url){
            $imageRequired = 'nullable';
        }
        $this->validate([
            'title' => ['required', 'string', 'min:5', 'max:255'],
            'value' => ['required', 'string', 'min:5'],
            'image' => [$imageRequired , 'image', 'mimes:png,jpg,jpeg', 'max:1500']
        ], [
            'title.required' => 'El campo titulo es requerido.',
            'title.min' => 'El campo titulo debe tener minimo 5 caracteres.',
            'title.max' => 'El campo titulo debe tener máximo 5 caracteres.',
            'value.required' => 'La entrada debe tener contenido.',
            'value.min' => 'La entrada debe tener min 5 caracteres.',
            'image.required' => 'Debe seleccionar una imagen principal.',
            'image.image' => 'Debe ser una imagen.',
            'image.mimes' => 'Formatos permitidos son: png, jpg',
            'image.max' => 'Imagen no debe exceder los 1,500 MB',
        ]);
        if($this->image !== null){
            $image_url = $this->image->store('blogs', 'public');
        }else if($this->image_url){
            $image_url = $this->entry->image_url;
        }
        
        $entry = Blog::updateOrCreate([
            'id' => $this->idEntry
        ], [
            'title' => $this->title,
            'description' => $this->value,
            'image_url' => $image_url,
        ]);

        if($entry){
            return redirect()->route('admin.blogs')->with('success', 'Nueva entrada.');
        }
    }
    public function updatedValue($value){
        $this->value = $value;
    }
    public function render()
    {
        return view('livewire.admin.blogs.form');
    }
}
