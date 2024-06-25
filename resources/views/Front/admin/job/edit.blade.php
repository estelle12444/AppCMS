@extends('Front.admin.layout')
@section('content')
<x-activity-edit
        route="job"
        :header="App\Models\Enums\ActivityTypeEnum::JOBS->getHeaderEdit()"
        :$activity
        :message="App\Models\Enums\ActivityTypeEnum::JOBS->getMessageEdit()"
        type="{{ \App\Models\Enums\ActivityTypeEnum::JOBS }}"/>
@endsection
