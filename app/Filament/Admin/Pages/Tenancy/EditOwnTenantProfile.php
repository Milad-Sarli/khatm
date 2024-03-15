<?php
namespace App\Filament\Admin\Pages\Tenancy;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\Tenancy\EditTenantProfile;

use Illuminate\Database\Eloquent\Model;

class EditOwnTenantProfile extends EditTenantProfile
{
    public static function getLabel(): string
    {
        return 'Tenant profile';
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                TextInput::make('domain'),
            ]);
    }
    public function afterSave() {
        return redirect('/admin');
    }
}
