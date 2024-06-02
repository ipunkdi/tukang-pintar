<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Craftsman;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CraftsmanResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CraftsmanResource\RelationManagers;
use Filament\Forms\Components\Select;

class CraftsmanResource extends Resource
{
    protected static ?string $model = Craftsman::class;

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                TextInput::make('name')
                ->label('Nama')
                ->required()
                ->maxLength(255),
                TextInput::make('email')
                ->label('Email')
                ->email()
                ->required()
                ->maxLength(255),
                TextInput::make('phone_number')
                ->label('Nomor Telepon')
                ->required()
                ->maxLength(255),
                Textarea::make('address')
                    ->label('Alamat')
                    ->required()
                    ->autosize(),
                Select::make('skill_description')
                ->label('Pilih Keahlian')
                ->options([
                    'cat' => 'Tukang Cat',
                    'listrik' => 'Tukang Listrik',
                    'keramik' => 'Tukang Keramik',
                    'dinding/tembok' => 'Tukang Dinding/Tembok',
                    'pintu/jendela' => 'Tukang Pintu/Jendela',
                    'tangki air' => 'Tukang Tangki Air',
                ])
                ->native(false)
                ->required()
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('no')->state(
                static function (HasTable $livewire, $rowLoop): string {
                    return (string) (
                        $rowLoop->iteration +
                        ($livewire->getTableRecordsPerPage() * (
                            $livewire->getTablePage() - 1
                        ))
                    );
                }
            ),
                TextColumn::make('name')->searchable(),
                TextColumn::make('email'),
                TextColumn::make('phone_number'),
                TextColumn::make('address'),
                TextColumn::make('skill_description'),
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
            'index' => Pages\ListCraftsmen::route('/'),
            'create' => Pages\CreateCraftsman::route('/create'),
            'edit' => Pages\EditCraftsman::route('/{record}/edit'),
        ];
    }
}
