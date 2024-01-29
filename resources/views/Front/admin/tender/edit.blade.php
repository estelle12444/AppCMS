@extends('Front.admin.layout')
@section('content')
<x-activity-edit
            route="tender"
            :header="App\Models\Enums\ActivityTypeEnum::TENDERS->getHeaderEdit()"
            :$activity
            :message="App\Models\Enums\ActivityTypeEnum::TENDERS->getMessageEdit()"/>
@endsection
