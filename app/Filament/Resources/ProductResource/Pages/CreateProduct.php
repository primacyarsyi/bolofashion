<?php

namespace App\Filament\Resources\ProductResource\Pages;

use App\Filament\Resources\ProductResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProduct extends CreateRecord
{
    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
    protected static string $resource = ProductResource::class;
}
