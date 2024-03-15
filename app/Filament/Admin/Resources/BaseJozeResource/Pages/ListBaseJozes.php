<?php

namespace App\Filament\Admin\Resources\BaseJozeResource\Pages;

use App\Filament\Admin\Resources\BaseJozeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBaseJozes extends ListRecords
{
    protected static string $resource = BaseJozeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
