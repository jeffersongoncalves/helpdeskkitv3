<?php

namespace App\Filament\Admin\Resources\OperatorResource\Pages;

use App\Filament\Admin\Resources\OperatorResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewOperator extends ViewRecord
{
    protected static string $resource = OperatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
