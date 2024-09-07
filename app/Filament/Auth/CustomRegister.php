<?php
namespace App\Filament\Auth;
use Filament\Forms\Form;

use Filament\Pages\Auth\Register as BaseRegister;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Illuminate\Validation\ValidationException;

class CustomRegister extends BaseRegister
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
                        // $this->getRoleFormComponent(),
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

    // protected function getRoleFormComponent(): Component
    // {
    //     return Select::make('role')
    //         ->options([
    //             'buyer' => 'Buyer',
    //             'seller' => 'Seller',
    //         ])
    //         ->default('buyer')
    //         ->required();
    // }
}
