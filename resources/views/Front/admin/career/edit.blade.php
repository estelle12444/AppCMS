@extends('Front.admin.layout')
@section('content')
<x-activity-edit
        route="career"
        :header="App\Models\Enums\ActivityTypeEnum::CAREERS->getHeaderEdit()"
        :$activity
        :message="App\Models\Enums\ActivityTypeEnum::CAREERS->getMessageEdit()"/>
@endsection
