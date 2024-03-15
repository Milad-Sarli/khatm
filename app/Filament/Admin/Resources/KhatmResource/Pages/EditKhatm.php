<?php

namespace App\Filament\Admin\Resources\KhatmResource\Pages;

use App\Filament\Admin\Resources\KhatmResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKhatm extends EditRecord
{
    protected static string $resource = KhatmResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
