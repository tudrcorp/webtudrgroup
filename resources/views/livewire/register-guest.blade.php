<div>
    <div class="content-form-container">
        <div class="form-main">
            <form wire:submit.prevent="register" class="flex flex-col gap-3 {{ $hiddenForm }}">
                <div class="space-y-6">
                    <div>
                        <flux:heading size="lg">Información de contacto</flux:heading>
                    </div>
                    <div class="space-y-6">
                        <flux:input wire:model="firstName" label="Nombre" type="text" placeholder="..." />
                        <flux:input wire:model="lastName" label="Apellido" type="text" placeholder="..." />
                        <flux:input wire:model="phone" mask="(9999) 999-9999" label="Número de Teléfono" type="text" placeholder="..." />
                        <flux:input wire:model="agency" label="Agencia(opcional)" type="text" placeholder="..." />

                        <flux:select 
                            wire:model="companion" 
                            label="Número de Acompañantes" 
                            type="text" 
                            placeholder="selecione..." 
                            description:trailing="(Máximo 2 acompañantes por invitado)">
                            <flux:select.option></flux:select.option>
                            <flux:select.option>Un(1) Acompañante</flux:select.option>
                            <flux:select.option>Dos(2) Acompañantes</flux:select.option>
                        </flux:select>

                    </div>
                    <div class="space-y-2">
                        <flux:button  type="submit" variant="primary" class="w-full">Enviar</flux:button>
                        {{-- <flux:button variant="ghost" class="w-full">Sign up for a new account</flux:button> --}}
                    </div>
                </div>
            </form>
            <div class="{{ $hiddenBottonOk }}">
                <flux:button icon="check" variant="primary" color="green" wire:navigate href="/">¡Registro exitoso!.</flux:button>
            </div>
        </div>
    </div>

</div>
