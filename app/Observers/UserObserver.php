<?php

namespace App\Observers;

use App\User;

class UserObserver
{
    public function creating(User $user)
    {
        // Aqui poderia mandar um email enquanto cria
        var_dump('EStou enviando uma imagem');
    }
    
}