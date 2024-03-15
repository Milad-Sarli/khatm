<?php

namespace App\Filament\Admin\Resources\UsedJozeResource\Pages;

use App\Filament\Admin\Resources\UsedJozeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUsedJozes extends ListRecords
{
    protected static string $resource = UsedJozeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
