<?php

namespace App\Http\Livewire\Admin\Programs;

use App\Models\Program;
use Livewire\Component;
use Livewire\WithFileUploads;

class Form extends Component
{
    use WithFileUploads;

    public $title, $value, $image, $idProgram = null, $program;
    public $image_url;
    public function mount($program){
        $this->title = $program->title;
        $this->value = $program->description;
        $this->image_url = $program->image_url;
        $this->idProgram = $program->id;
    }
    public function storeProgram(){
        $imageRequired = 'required';
        if($this->program->image_url){
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
            $image_url = $this->image->store('promgram', 'public');
        }else if($this->image_url){
            $image_url = $this->program->image_url;
        }
        
        $entry = Program::updateOrCreate([
            'id' => $this->idProgram
        ], [
            'title' => $this->title,
            'description' => $this->value,
            'image_url' => $image_url,
        ]);

        if($entry){
            return redirect()->route('admin.programs')->with('success', 'Nuevo programa.');
        }
    }
    public function updatedValue($value){
        $this->value = $value;
    }
    public function render()
    {
        return view('livewire.admin.programs.form');
    }
}
