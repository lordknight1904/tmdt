<!-- Pusher -->
<script src="https://js.pusher.com/3.1/pusher.min.js"></script>
<script>
    @if (Auth::check())
        var channelStr = {{Auth::user()->id}};
        $(document).ready(function() {
            var formData1 = {
                '_token'             : $('input[name=_token]').val(),
                'channel'             : channelStr
            };
            $.ajax({
                type        : 'POST', 
                url         : '/pusherAdmin', 
                data        : formData1, 
                encode      : true
            }).done(function() {
                console.log('done register');
            });
        });


        Pusher.logToConsole = true;
        //instantiate a Pusher object with our Credential's key
        var pusher = new Pusher('280081bfca7e082907af', {
          cluster: 'ap1',
          encrypted: true
        });
        //Subscribe to the channel we specified in our Laravel Event
        var channel = pusher.subscribe(channelStr.toString());

        //Bind a function to a Event (the full Laravel class)
        channel.bind('addMessage', function(data) {
            if(data.self === 'admin'){
                $( "#chatContent" ).append( "<p>" + data.message + "</p>" );
            }else{
                $( "#chatContent" ).append( "<p align='right'>" + data.message + "</p>" );
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
                    'self'               :  {{Auth::user()->id}}
                };
                console.log(formData);
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
    @endif
</script>
    @if (Auth::check())
<div class="chatHide transform" id="chatShow">
        <div class="col-md-12 chat-title" >
            <a onclick="animation()" id="bt">Hỗ trợ trực tuyến</a>
        </div>
        <div class="col-md-12 chat-content" id="chatContent">
        </div>
        <div class="col-md-12 chat-textbox">
            <form id="chatForm" action="/pusher" method="POST">
                    <input type="hidden" name="_token" for="_token" value="{{ csrf_token() }}">
                    <span>Bạn cần giúp gì?</span><br/>
                    <span>

                    <input type="text" id="message" name="message" for="message" autocomplete="off">
                    <input type="submit" value="Submit" >
                    </span>
            </form>
        </div>
        
</div>  
@else
<div class="chatHide transform" id="chatShow">
    <div class="col-md-12 chat-title" >
        <a id="bt">Hãy đăng nhập đễ được hỗ trợ</a>
    </div>
</div>  
@endif         