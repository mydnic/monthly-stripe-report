@if(session('flash_notification'))

    @foreach (session('flash_notification', collect())->toArray() as $message)
        <notification level="{{ $message['level'] }}" message="{!! $message['message'] !!}"></notification>
    @endforeach

    {{ session()->forget('flash_notification') }}
@endif
<notification></notification>
