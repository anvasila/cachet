<div class="panel panel-message incident">
    <div class="panel-heading">
        @if($current_user)
        <div class="pull-right btn-group">
            <a href="{{ route('dashboard.incidents.edit', ['id' => $incident->id]) }}" class="btn btn-default">{{ trans('forms.edit') }}</a>
            <a href="{{ route('dashboard.incidents.delete', ['id' => $incident->id]) }}" class="btn btn-danger confirm-action" data-method='DELETE'>{{ trans('forms.delete') }}</a>
        </div>
        @endif
        @if($incident->component)
        <span class="label label-default">{{ $incident->component->name }}</span>
        @endif
        <strong>{{ $incident->name }}</strong>{{ $incident->isScheduled ? trans("cachet.incidents.scheduled_at", ["timestamp" => $incident->timestamp_datetime]) : null }}
        <br>
        <small class="date">
            @if($with_link)
            <a href="{{ route('incident', ['id' => $incident->id]) }}" class="links"><abbr class="" data-toggle="tooltip" data-placement="right" title="{{ $incident->timestamp_formatted }}">{{ $incident->timestamp_datetime }}</abbr></a>
            @else
            <abbr class="" data-toggle="tooltip" data-placement="right" title="{{ $incident->timestamp_formatted }}">{{ $incident->timestamp_datetime }}</abbr>
            @endif
        </small>
    </div>
    <div class="panel-body markdown-body">
        {!! $incident->formattedMessage !!}
    </div>
</div>
