@extends('Front.admin.layout')

@section('content')
                     <x-activity-edit
                        route="event"
                        :header="App\Models\Enums\ActivityTypeEnum::EVENTS->getHeaderEdit()"
                        :$activity
                        :message="App\Models\Enums\ActivityTypeEnum::EVENTS->getMessageEdit()"
                        type="{{ \App\Models\Enums\ActivityTypeEnum::EVENTS }}"/>
@endsection


