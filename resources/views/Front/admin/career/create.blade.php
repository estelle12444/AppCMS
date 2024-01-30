@extends('Front.admin.layout')
@section('content')

<x-activity-create
        route="career"
        :message="\App\Models\Enums\ActivityTypeEnum::CAREERS->getMessageDelete()"
        :header="App\Models\Enums\ActivityTypeEnum::CAREERS->getHeaderIndex()"/>


@endsection
