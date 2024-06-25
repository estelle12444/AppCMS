@extends('Front.admin.layout')
@section('content')
<x-activity-edit
        route="advantage"
        :header="App\Models\Enums\ActivityTypeEnum::ADVANTAGES->getHeaderEdit()"
        :$activity
        :message="App\Models\Enums\ActivityTypeEnum::ADVANTAGES->getMessageEdit()"
        type="{{ \App\Models\Enums\ActivityTypeEnum::ADVANTAGES }}"/>
@endsection
