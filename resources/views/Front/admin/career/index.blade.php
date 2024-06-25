@extends('Front.admin.layout')
@section('content')

<x-activity-index
        :$activities
        route="career"
        :message="\App\Models\Enums\ActivityTypeEnum::CAREERS->getMessageDelete()"
        :header="App\Models\Enums\ActivityTypeEnum::CAREERS->getHeaderIndex()"
        type="{{ \App\Models\Enums\ActivityTypeEnum::CAREERS }}"/>

@endsection
