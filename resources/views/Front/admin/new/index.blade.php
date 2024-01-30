@extends('Front.admin.layout')
@section('content')
<x-activity-index
        :$activities
        route="new"
        :message="\App\Models\Enums\ActivityTypeEnum::NEWS->getMessageDelete()"
        :header="App\Models\Enums\ActivityTypeEnum::NEWS->getHeaderIndex()"/>
@endsection
