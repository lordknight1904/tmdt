@extends('backend.master')
@section('title')
    <h3 class="page-header">
        Hộ trợ khách hàng
    </h3>
@stop
@section('content')   
<script src="https://js.pusher.com/3.1/pusher.min.js"></script>    
<script>
    var pusher = new Pusher('280081bfca7e082907af', {
      cluster: 'ap1',
      encrypted: true
    });
    //Subscribe to the channel we specified in our Laravel Event
    var channel = pusher.subscribe('adminChannel');
    var listenedChannel = [];
    //Bind a function to a Event (the full Laravel class)
    channel.bind('add', function(data) {
        if(listenedChannel.indexOf(data.channel) == -1){
            listenedChannel.push(data.channel); 
            var str = '';
            str+="<tr class='table-row' data-href='http://testvhost/admin/hotrokh/chat/";
            str+=data.channel;
            str+="''><td>";
            str+=data.channel;
            str+="</td><td>Waiting</td></tr>";
            console.log(str);
            $( "#tableBody" ).append(str);
            $(document).ready(function($) {
                $(".table-row").click(function() {
                    window.open( $(this).data("href"), '_blank');
                });
            });
        }
    });
</script>   
<div class="panel panel-default">
<div class="panel-heading">
    <b><i>Danh sách khách hàng đang online</i></b>
</div>
<!-- /.panel-heading -->
<div class="panel-body">
    <table class="table">
        <thead>
          <tr>
            <th>userId</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody id="tableBody">
          
        </tbody>
    </table>
</div>
</div>
@stop
