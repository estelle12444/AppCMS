@extends('Front.admin.layout')
@section('content')

<x-activity-create
        route="new"
        :message="\App\Models\Enums\ActivityTypeEnum::NEWS->getMessageDelete()"
        :header="App\Models\Enums\ActivityTypeEnum::NEWS->getHeaderIndex()"
        type="{{ \App\Models\Enums\ActivityTypeEnum::NEWS }}"/>
@endsection
