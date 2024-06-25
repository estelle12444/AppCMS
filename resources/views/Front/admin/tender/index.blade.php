@extends('Front.admin.layout')

@section('content')
    <x-activity-index
                        :$activities
                        route="tender"
                        :message="\App\Models\Enums\ActivityTypeEnum::TENDER->getMessageDelete()"
                        :header="App\Models\Enums\ActivityTypeEnum::TENDER->getHeaderIndex()"
                        type="{{ \App\Models\Enums\ActivityTypeEnum::TENDER }}"/>
@endsection
