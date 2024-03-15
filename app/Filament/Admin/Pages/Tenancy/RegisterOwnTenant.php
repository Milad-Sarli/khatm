<?php
namespace App\Filament\Admin\Pages\Tenancy;

use App\Models\Tenant;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\RegisterTenant;
class RegisterOwnTenant extends RegisterTenant
{
    public static function getLabel(): string
    {
        return 'Register Tenant';
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                TextInput::make('domain'),
            ]);
    }

    protected function handleRegistration(array $data): Tenant
    {
        $tenant = Tenant::create($data);
        $tenant->members()->attach(auth()->user());
        return $tenant;
    }
}