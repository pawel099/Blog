<?php
namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use App\Models\Posts;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput; 
use Filament\Forms\Components\Textarea;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Require;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\MarkdownEditor; 
use Filament\Actions\CreateAction;
 
 class PostResource extends Resource
{
    protected static ?string $model = Posts::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                
                TextInput::make('nick')->required(),
                TextInput::make('email')->email(),
                TextInput::make('naglowek'),
                TextInput::make('tytul')->required(),
                FileUpload::make('image_path')
                 
                 
                ->directory("images")
                
                ->storeFileNamesIn("orginal_filename")
                ->visibility('private'),

                //SpatieMediaLibraryFileUpload::make('image_path')
                //->multiple()
                //->enableReordering()
                //->conversionsDisk('s3'),
                
                MarkdownEditor::make('tresc'),
                
                DatePicker::make('created_at') ,
                DateTimePicker::make('updated_at') 
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('id') ,
                Tables\Columns\ImageColumn::make('image_path')->square(),
                Tables\Columns\TextColumn::make('nick') ,
                
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('naglowek'),
                Tables\Columns\TextColumn::make('tytul') ,
                
                
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
