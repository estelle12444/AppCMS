@extends('Front.admin.layout')
@section('content')

<x-activity-index
        :$activities
        route="job"
        :message="\App\Models\Enums\ActivityTypeEnum::JOBS->getMessageDelete()"
        :header="App\Models\Enums\ActivityTypeEnum::JOBS->getHeaderIndex()"
        type="{{ \App\Models\Enums\ActivityTypeEnum::JOBS }}"/>


@endsection
