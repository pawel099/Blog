<?php
namespace App\Filament\Resources;
 
use App\Filament\Resources\CommentsResource\RelationManagers\PostRelationManager;
use Spatie\MediaLibrary\MediaCollections\File;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;

use App\Filament\Resources\PostResource\Pages;
 
use App\Models\Posts;
  
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput; 
use Filament\Forms\Components\BelongsToSelect;
 
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\RichEditor;

 
 
 class PostResource extends Resource
{
    protected static ?string $model = Posts::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Card::make()->schema([

                    BelongsToSelect::make('category_id')
                    ->relationship('category','name'),
                    TextInput::make('tytul')->required(),
                    TextInput::make('naglowek')->required(), 
                    SpatieMediaLibraryFileUpload::make('image_path')->collection('image_path'),
                    RichEditor::make('tresc'),
                    Toggle::make('is_published')
                ])
         ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                
                Tables\Columns\TextColumn::make('id') ,

                SpatieMediaLibraryImageColumn::make('image_path')->collection('image_path')
                ->size(50),
             
                Tables\Columns\TextColumn::make('tytul'),
                
                Tables\Columns\BooleanColumn::make('is_published'),
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

           
           PostRelationManager::class
           

            
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
