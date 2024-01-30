@extends('Front.admin.layout')
@section('content')

<x-activity-create
        :$activities
        route="career"
        :message="\App\Models\Enums\ActivityTypeEnum::CAREERS->getMessageDelete()"
        :header="App\Models\Enums\ActivityTypeEnum::CAREERS->getHeaderIndex()"/>


@endsection
