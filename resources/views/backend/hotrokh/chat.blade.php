@extends('backend.master')
@section('title')
    <h3 class="page-header">
        Hộ trợ khách hàng
    </h3>
@stop
@section('content')   
<script src="https://js.pusher.com/3.1/pusher.min.js"></script>
<script type="text/javascript">
    var pusher = new Pusher('280081bfca7e082907af', {
        cluster: 'ap1',
        encrypted: true
    });
    //Subscribe to the channel we specified in our Laravel Event
    var channelStr = {!! $channel !!};
    var channel = pusher.subscribe(channelStr.toString());
    //Bind a function to a Event (the full Laravel class)
    channel.bind('addMessage', function(data) {
        if(data.self === 'admin'){
            $( "#chatContent" ).append( "<p align='right'>" + data.message + "</p>" );
        }else{
            $( "#chatContent" ).append( "<p>" + data.message + "</p>" );
        }
    });
    // magic.js
    $(document).ready(function() {
        // process the form
        $('form').submit(function(event) {
            var formData = {
                'message'            : $('input[name=message]').val(),
                '_token'             : $('input[name=_token]').val(),
                'channel'            : channel.name,
                'self'               : 'admin'
            };
            $.ajax({
                type        : 'POST', 
                url         : '/pusher', 
                data        : formData, 
                encode          : true
            })
            event.preventDefault();
            $('#message').val('');
        });
    });
</script>
<div class="panel panel-default">

    <div class="col-md-12 chat-content" id="chatContent" style="overflow-y: scroll;height: 400px;">
    </div>

    <form id="chatForm" action="/pusher" method="POST">
        <input type="hidden" name="_token" for="_token" value="{{ csrf_token() }}">
        <span>
            <input type="text" id="message" name="message" for="message" autocomplete="off">
            <input type="submit" value="Submit" >
        </span>
    </form>
</div>
@stop
