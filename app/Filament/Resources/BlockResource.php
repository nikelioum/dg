<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlockResource\Pages;
use App\Filament\Resources\BlockResource\RelationManagers;
use App\Models\Block;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Set;
use Illuminate\Support\Str;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Columns\ToggleColumn;
use Riodwanto\FilamentAceEditor\AceEditor;

class BlockResource extends Resource
{
    protected static ?string $model = Block::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([Card::make()->schema([
            TextInput::make('title')->required(),
            TextInput::make('block_id')->required(),
            AceEditor::make('body')
                ->mode('html')
                ->theme('github')
                ->darkTheme('dracula')
                ->required(),
            Toggle::make('active')->required()
        ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('block_id'),
                ToggleColumn::make('active')
            ])
            ->filters([
                //
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlocks::route('/'),
            'create' => Pages\CreateBlock::route('/create'),
            'edit' => Pages\EditBlock::route('/{record}/edit'),
        ];
    }
}
