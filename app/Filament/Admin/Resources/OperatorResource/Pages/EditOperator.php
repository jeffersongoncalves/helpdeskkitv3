<?php

namespace App\Filament\Admin\Resources\OperatorResource\Pages;

use App\Filament\Admin\Resources\OperatorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOperator extends EditRecord
{
    protected static string $resource = OperatorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
