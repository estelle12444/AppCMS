@extends('Front.admin.layout')
@section('content')

<x-activity-create
        :$activities
        route="quotation"
        :message="\App\Models\Enums\ActivityTypeEnum::QUOTATIONS->getMessageDelete()"
        :header="App\Models\Enums\ActivityTypeEnum::QUOTATIONS->getHeaderIndex()"/>
@endsection
