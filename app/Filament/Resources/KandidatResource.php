<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KandidatResource\Pages;
use App\Filament\Resources\KandidatResource\RelationManagers;
use App\Models\Kandidat;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KandidatResource extends Resource
{
    protected static ?string $model = Kandidat::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id'),
                Forms\Components\TextInput::make('nomor_urut'),
                Forms\Components\TextInput::make('nama'),
                Forms\Components\TextInput::make('visi'),
                Forms\Components\TextArea::make('isivisi'),
                Forms\Components\TextInput::make('misi'),
                Forms\Components\TextArea::make('isimisi'),
                Forms\Components\TextInput::make('foto1'),
                Forms\Components\TextInput::make('foto2'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('nomor_urut')->searchable(),
                Tables\Columns\TextColumn::make('nama'),
                Tables\Columns\TextColumn::make('visi'),
                Tables\Columns\TextColumn::make('isivisi'),
                Tables\Columns\TextColumn::make('misi'),
                Tables\Columns\TextColumn::make('isimisi'),
                Tables\Columns\TextColumn::make('foto1'),
                Tables\Columns\TextColumn::make('foto2'),
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
            'index' => Pages\ListKandidats::route('/'),
            'create' => Pages\CreateKandidat::route('/create'),
            'edit' => Pages\EditKandidat::route('/{record}/edit'),
        ];
    }
}
