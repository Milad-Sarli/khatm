<?php

namespace App\Filament\Admin\Resources\BaseJozeResource\Pages;

use App\Filament\Admin\Resources\BaseJozeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBaseJoze extends EditRecord
{
    protected static string $resource = BaseJozeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
