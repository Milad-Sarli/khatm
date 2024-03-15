<?php

namespace App\Filament\Admin\Resources\UserJozeResource\Pages;

use App\Filament\Admin\Resources\UserJozeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserJoze extends EditRecord
{
    protected static string $resource = UserJozeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
