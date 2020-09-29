@extends('admin::layouts.master')

@section('content')
    <h1>Current module: {!! config('admin.name') !!}</h1>
@endsection

@section('docList')
<div class="showAllDocs">
    <h2>
        Document list:
    </h2>
    <div class="docList">
        <ul>
            @foreach ($docList as $doc)
                <li>
                    {{ $doc }}
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection

@section('alarmList')
<div class="showAllDocs">
    <h2>
        Alarm list:
    </h2>
    <div class="alarmList">
        <ul>
            @foreach ($alarmList as $alarm)
                <li>
                    {{ $alarm }}
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
