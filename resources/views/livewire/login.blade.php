<div>
    <form wire:submit.prevent="login">
        <input type="text" wire:model="email" placeholder="Correo electrónico">
        <input type="password" wire:model="password" placeholder="Contraseña">
        <button type="submit">Iniciar sesión</button>
    </form>
</div>