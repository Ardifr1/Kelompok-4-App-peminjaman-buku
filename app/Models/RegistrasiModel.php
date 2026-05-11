<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Notifications\Notifiable;


class RegistrasiModel extends Model implements AuthenticatableContract
{
    use Notifiable;

    public function getAuthPasswordName(): string
    {
        return 'password';
    }


    protected $table = 'registrasi';

    protected $fillable = ['nis', 'nama', 'username', 'kelas', 'password', 'role'];

    protected $hidden = ['password'];

    public function getAuthIdentifierName(): string
    {
        return 'id';
    }

    public function getAuthIdentifier()
    {
        return $this->getAttribute($this->getAuthIdentifierName());
    }

    public function getAuthPassword(): string
    {
        return (string) $this->getAttribute('password');
    }

    public function getRememberToken()
    {
        return null;
    }

    public function setRememberToken($value): void
    {
        // no-op
    }

    public function getRememberTokenName(): string
    {
        return '';
    }
}

