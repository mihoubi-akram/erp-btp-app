<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Personal Information')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('first_name')
                                ->label('Prénom')
                                ->required(),
                            TextInput::make('last_name')
                                ->label('Nom')
                                ->required(),
                        ]),
                        TextInput::make('phone')
                            ->label('Téléphone')
                            ->tel(),
                    ]),
                Section::make('Account Details')
                    ->schema([
                        TextInput::make('email')
                            ->label('Email address')
                            ->email()
                            ->required(),
                        TextInput::make('password')
                            ->label('Mot de passe')
                            ->password()
                            ->required(),
                        Toggle::make('is_admin')
                            ->label('Administrateur')
                            ->required(),
                    ]),
            ]);
    }
}
