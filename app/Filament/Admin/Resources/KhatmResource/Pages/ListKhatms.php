<?php

namespace App\Filament\Admin\Resources\KhatmResource\Pages;

use App\Filament\Admin\Resources\KhatmResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKhatms extends ListRecords
{
    protected static string $resource = KhatmResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
