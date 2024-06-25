@extends('Front.admin.layout')
@section('content')
<x-activity-create
        route="event"
        :message="\App\Models\Enums\ActivityTypeEnum::EVENTS->getMessageDelete()"
        :header="App\Models\Enums\ActivityTypeEnum::EVENTS->getHeaderIndex()"
        type="{{ \App\Models\Enums\ActivityTypeEnum::EVENTS }}"/>
@endsection
