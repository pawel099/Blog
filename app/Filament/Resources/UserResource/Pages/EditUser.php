<?php

namespace App\Filament\Resources\UserResource\Pages;
use Filament\Pages\Actions\CreateAction;
use App\Filament\Resources\UserResource;
use Filament\Actions;
use App\Models\User;
use Filament\Resources\Pages\EditRecord;
// use Filament\Resources\Pages\EditAction;


class EditUser extends EditRecord
{

  

   protected static string $resource = UserResource::class;

    protected function mutateFormDataBeforeFill(array $data): array
{
    $data['name'] = auth()->id();
 
    return $data;
}

    protected function mutateFormDataBeforeSave(array $data): array
    {

        




        $data['name'] ;
     
        return $data;
    }





    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
