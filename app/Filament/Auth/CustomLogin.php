<?php

namespace App\Filament\Auth;

use Filament\Pages\Auth\Login as BaseAuth;

use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Component;


class CustomLogin extends BaseAuth
{
    public function form(Form $form): Form
    {
        return $form->schema([
            $this->getLoginFormComponent(),
        ]);
    }

    protected function getLoginFormComponent(): Component
    {
        return TextInput::make('login')
            ->label('Login')
            ->required()
            ->autocomplete()
            ->autofocus()
            ->extraInputAttributes(['tabindex' => 1]);
    }
}
