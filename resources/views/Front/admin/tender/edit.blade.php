@extends('Front.admin.layout')
@section('content')
<x-activity-edit
            route="tender"
            :header="App\Models\Enums\ActivityTypeEnum::TENDER->getHeaderEdit()"
            :$activity
            :message="App\Models\Enums\ActivityTypeEnum::TENDER->getMessageEdit()"
            type="{{ \App\Models\Enums\ActivityTypeEnum::TENDER }}"/>
@endsection
