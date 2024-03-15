<?php

namespace App\Filament\Admin\Resources\UsedJozeResource\Pages;

use App\Filament\Admin\Resources\UsedJozeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUsedJoze extends EditRecord
{
    protected static string $resource = UsedJozeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
