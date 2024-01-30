@extends('Front.admin.layout')
@section('content')
<x-activity-create
        route="job"
        :message="\App\Models\Enums\ActivityTypeEnum::JOBS->getMessageDelete()"
        :header="App\Models\Enums\ActivityTypeEnum::JOBS->getHeaderIndex()"/>
@endsection
