<?php

namespace App\Filament\Admin\Resources\UserJozeResource\Pages;

use App\Filament\Admin\Resources\UserJozeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserJozes extends ListRecords
{
    protected static string $resource = UserJozeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
