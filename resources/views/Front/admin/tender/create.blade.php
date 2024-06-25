@extends('Front.admin.layout')
@section('content')

<x-activity-create
        route="tender"
        :message="\App\Models\Enums\ActivityTypeEnum::TENDER->getMessageDelete()"
        :header="App\Models\Enums\ActivityTypeEnum::TENDER->getHeaderIndex()"
        type="{{ \App\Models\Enums\ActivityTypeEnum::TENDER }}"/>
@endsection
