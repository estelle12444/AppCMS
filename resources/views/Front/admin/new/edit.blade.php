@extends('Front.admin.layout')
@section('content')
<x-activity-edit
        route="new"
        :header="App\Models\Enums\ActivityTypeEnum::NEWS->getHeaderEdit()"
        :$activity
        :message="App\Models\Enums\ActivityTypeEnum::NEWS->getMessageEdit()"
        type="{{ \App\Models\Enums\ActivityTypeEnum::NEWS }}"/>
@endsection
