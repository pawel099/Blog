<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CommentsResource\Pages;
 
use App\Models\Comments;
 
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
 
use Filament\Forms\Components\TextInput; 
use Filament\Forms\Components\BelongsToSelect;
 
 
use Filament\Forms\Components\Card;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Toggle;


class CommentsResource extends Resource
{
    protected static ?string $model = Comments::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([

            Card::make()->schema([

                BelongsToSelect::make('comments_id')
                ->relationship('post','tytul'),
                TextInput::make('nick')->required(),
                TextInput::make('email')->required(),
                DateTimePicker::make('created_at'),
                Toggle::make('status'), 
                RichEditor::make('contents'),
                
            ])
     ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                Tables\Columns\TextColumn::make('comments_id'),
                Tables\Columns\TextColumn::make('nick')->sortable() ,
                Tables\Columns\TextColumn::make('email')->limit('50') ,
                Tables\Columns\BooleanColumn::make('status'),
                Tables\Columns\TextColumn::make('created_at') ,
                Tables\Columns\TextColumn::make('updated_at') ,
                

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListComments::route('/'),
            'create' => Pages\CreateComments::route('/create'),
            'edit' => Pages\EditComments::route('/{record}/edit'),
        ];
    }
}
