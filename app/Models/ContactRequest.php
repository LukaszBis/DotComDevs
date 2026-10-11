<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactRequest extends Model
{
    public const WHO = [
        'student' => 'Student / studentka',
        'uczen'   => 'Uczeń / uczennica szkoły średniej',
        'firma'   => 'Firma / działalność',
        'inne'    => 'Inne',
    ];

    public const TOPICS = [
        'strona'      => 'Strona internetowa',
        'projekt'     => 'Projekt zaliczeniowy / na studia',
        'excel'       => 'Excel i arkusze kalkulacyjne',
        'korepetycje' => 'Korepetycje z programowania / informatyki',
        'serwis'      => 'Serwis komputera / laptopa',
        'inne'        => 'Coś innego',
    ];

    public const STATUSES = [
        'new'         => 'Nowe',
        'in_progress' => 'W trakcie',
        'done'        => 'Zamknięte',
    ];

    protected $fillable = ['name', 'email', 'phone', 'who', 'topic', 'message', 'status'];

    public function whoLabel(): string
    {
        return self::WHO[$this->who] ?? $this->who;
    }

    public function topicLabel(): string
    {
        return self::TOPICS[$this->topic] ?? $this->topic;
    }

    public function statusLabel(): string
    {
        return self::STATUSES[$this->status] ?? $this->status;
    }
}
