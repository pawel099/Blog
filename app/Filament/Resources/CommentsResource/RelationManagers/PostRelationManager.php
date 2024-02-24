<?php

namespace App\Filament\Resources\CommentsResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\RichEditor;
class PostRelationManager extends RelationManager
{
    protected static string $relationship = 'comments';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nick')
                    ->required()
                    ->maxLength(255),

                    Forms\Components\TextInput::make('email')
                    ->required()
                    ->maxLength(255),

                    RichEditor::make('contents'),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('nick')
            ->columns([
                Tables\Columns\TextColumn::make('nick'),
                Tables\Columns\TextColumn::make('email'),
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
