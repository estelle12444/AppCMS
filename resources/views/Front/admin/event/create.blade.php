@extends('Front.admin.layout')
@section('content')
    <x-activity-create route="event" :header="App\Models\Enums\ActivityTypeEnum::EVENTS->getHeaderCreate()"/>
@endsection
