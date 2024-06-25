@extends('Front.admin.layout')
@section('content')

<x-activity-create
        route="advantage"
        :message="\App\Models\Enums\ActivityTypeEnum::ADVANTAGES->getMessageDelete()"
        :header="App\Models\Enums\ActivityTypeEnum::ADVANTAGES->getHeaderIndex()"
        type="{{ \App\Models\Enums\ActivityTypeEnum::ADVANTAGES }}"/>


@endsection
