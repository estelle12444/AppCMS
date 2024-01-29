@extends('Front.admin.layout')
@section('content')
<x-activity-edit
        route="quotation"
        :header="App\Models\Enums\ActivityTypeEnum::QUOTATIONS->getHeaderEdit()"
        :$activity
        :message="App\Models\Enums\ActivityTypeEnum::QUOTATIONS->getMessageEdit()"/>
@endsection
