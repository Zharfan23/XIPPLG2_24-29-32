<?php

namespace App\Filament\Resources\MovieCategoryResource\Pages;

use App\Filament\Resources\MovieCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMovieCategory extends CreateRecord
{
    protected static string $resource = MovieCategoryResource::class;
}