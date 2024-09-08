<?php

namespace App\Filament\Auth;

use Filament\Pages\Auth\EditProfile as BaseEditProfile;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Illuminate\Validation\ValidationException;
use Filament\Forms\Form;
use Filament\Facades\Filament;
use function Filament\Support\is_app_url;

class CustomEditProfile extends BaseEditProfile
{
    protected function getForms(): array
    {
        return [
            'form' => $this->form(
                $this->makeForm()
                    ->schema([
                        $this->getUserNameFormComponent(),
                        $this->getNameFormComponent(),
                        $this->getEmailFormComponent(),
                        $this->getPasswordFormComponent(),
                        $this->getPasswordConfirmationFormComponent(),
                    ])
                    ->statePath('data'),
            ),
        ];
    }

    protected function getUserNameFormComponent(): Component
    {
        return TextInput::make('username')
        ->label('Username')
        ->autocomplete()
        ->autofocus();
    }

    public static function isSimple(): bool
    {
        return false;
    }

}
