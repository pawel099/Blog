<?php
namespace App\Filament\Resources;
use Closure;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
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
use Filament\Tables\Columns;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\Require;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Forms\Components\MarkdownEditor; 
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\RichEditor;

use Filament\Actions\CreateAction;
 
use Filament\Tables\Components\ImageOptimizer;

use Spatie\ImageOptimizer\OptimizerChain;
use Spatie\ImageOptimizer\Optimizers\Jpegoptim;
use Spatie\ImageOptimizer\Optimizers\Joshembling;
use Spatie\ImageOptimizer\Optimizers;

use Spatie\ImageOptimizer\Image;
 
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
                    TextInput::make('slug'),
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
                Tables\Columns\TextColumn::make('tytul') ,
                Tables\Columns\BooleanColumn::make('is_published') ,
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
