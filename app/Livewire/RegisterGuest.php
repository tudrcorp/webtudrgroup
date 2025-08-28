<?php

namespace App\Livewire;

use App\Models\Event;
use App\Models\Guest;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\Attributes\Validate;

class RegisterGuest extends Component
{
    #[Validate('required', message: 'Campo requerido')]
    public $firstName;

    #[Validate('required', message: 'Campo requerido')]
    public $lastName;

    #[Validate('required', message: 'Campo requerido')]
    public $phone;

    public $agency;
    public $companion;

    public $hiddenBottonOk = 'hidden';
    public $hiddenForm = '';

    
    public function register(Request $request)
    {
        $validated = $this->validate([
            'firstName' => ['required'],
            'lastName'  => ['required'],
            'phone'     => ['required'],
        ]);
        
        /**
         * Preguntamos al integracorp
         * que evento esta en estatus
         * activo
         */
        $event = Event::where('status', 'ACTIVO')->first();
        
        if(isset($event)) {
            $guest = new Guest();
            $guest->event_id    = $event->id;
            $guest->firstName   = $this->firstName;
            $guest->lastName    = $this->lastName;
            $guest->phone       = $this->converterPhone($this->phone);
            $guest->agency      = isset($this->agency) ? $this->agency : null;
            $guest->companion   = $this->companion;
            $guest->webBrowser  = request()->header('User-Agent');
            $guest->save();
        }

        $this->hiddenBottonOk = '';
        $this->hiddenForm = 'hidden';
        
    }

    public function converterPhone($phone)
    {
        // Eliminar todo lo que no sea número
        $cleanNumber = preg_replace('/\D/', '', $phone);

        // Verificar que comience con 04 (ej. 0412)
        if (str_starts_with($cleanNumber, '04')) {
            return '+58' . substr($cleanNumber, 1); // Cambia 0412... → +58412...
        }

        // Si ya tiene 11 dígitos y empieza con 4, asumimos que es 412...
        if (str_starts_with($cleanNumber, '4') && strlen($cleanNumber) == 11) {
            return '+58' . $cleanNumber;
        }

        // Si ya tiene formato +58
        if (str_starts_with($cleanNumber, '584') && strlen($cleanNumber) == 12) {
            return '+' . $cleanNumber;
        }

        // Por defecto, intenta arreglarlo
        return '+58' . ltrim($cleanNumber, '0');
    }
    
    public function render()
    {
        return view('livewire.register-guest');
    }
}