@extends('Front.admin.layout')
@section('content')
<x-activity-index
        :$activities
        route="quotation"
        :message="\App\Models\Enums\ActivityTypeEnum::QUOTATIONS->getMessageDelete()"
        :header="App\Models\Enums\ActivityTypeEnum::QUOTATIONS->getHeaderIndex()"
        type="{{ \App\Models\Enums\ActivityTypeEnum::QUOTATIONS }}"/>
@endsection
