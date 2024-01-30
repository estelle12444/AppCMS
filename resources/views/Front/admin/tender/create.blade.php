@extends('Front.admin.layout')
@section('content')

<x-activity-create
        route="tender"
        :message="\App\Models\Enums\ActivityTypeEnum::TENDERS->getMessageDelete()"
        :header="App\Models\Enums\ActivityTypeEnum::TENDERS->getHeaderIndex()"/>
@endsection
