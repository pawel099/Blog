<?php

namespace App\Filament\Resources\CategoryResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;

use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput; 
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostsRelationManager extends RelationManager
{
    protected static string $relationship = 'posts';

    public function form(Form $form): Form
    {
        return $form
            ->schema([

                Card::make()->schema([

                    BelongsToSelect::make('category_id')
                    ->relationship('category','name'),
                    TextInput::make('tytul')->required(),
                     
                    SpatieMediaLibraryFileUpload::make('image_path')->collection('image_path'),
                    RichEditor::make('tresc'),
                    Toggle::make('is_published')
                ])
         ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                 
                Tables\Columns\TextColumn::make('id') ,
                SpatieMediaLibraryImageColumn::make('image_path')->collection('image_path')
                ->size(50),
                Tables\Columns\TextColumn::make('tytul') ,
                Tables\Columns\BooleanColumn::make('is_published') ,
                Tables\Columns\TextColumn::make('created_at') ,
                Tables\Columns\TextColumn::make('updated_at') ,


            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
