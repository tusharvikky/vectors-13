@layout('event-multiple-template')

@section('maincontent')   
        <h6>{{$event->name;}}</h6>
        <p>{{$event->tagline;}}</p>

<dl class="tabs contained">
  <dt>Events</dt>
  <dd class="active"><a href="#{{$event1->permalink;}}">{{$event1->name;}}</a></dd>
  <dd class=""><a href="#{{$event2->permalink;}}">{{$event2->name;}}</a></dd>
  <dd class=""><a href="#{{$event3->permalink;}}">{{$event3->name;}}</a></dd>
  <dd class=""><a href="#{{$event4->permalink;}}">{{$event4->name;}}</a></dd>
</dl>
<ul class="tabs-content">
  <li class="active" id="{{$event1->permalink;}}Tab">

            <hr class='style-two' />

            <strong>OBJECTIVE: </strong>{{$event1->objective;}}

            <hr class='style-two' />

            <table style="width: 500px;">
            <tbody>
                <tr>
                    <td><strong>Time: </strong>{{$event1->time;}}</td>
                </tr>
                <tr>
                    <td><strong>Venue: </strong>{{$event1->venue;}}</td>
                </tr>
            </tbody>
            </table>

            <hr class='style-two' />

            <div style="margin-top: 20px;">
                <strong>RULES: </strong>
                <div style="margin-left: 40px;">{{$event1->rules;}}</div>
            </div>

  </li>
  <li id="{{$event2->permalink;}}Tab"><hr class='style-two' />

            <strong>OBJECTIVE: </strong>{{$event2->objective;}}

            <hr class='style-two' />

            <table style="width: 500px;">
            <tbody>
                <tr>
                    <td><strong>Time: </strong>{{$event2->time;}}</td>
                </tr>
                <tr>
                    <td><strong>Venue: </strong>{{$event2->venue;}}</td>
                </tr>
            </tbody>
            </table>

            <hr class='style-two' />

            <div style="margin-top: 20px;">
                <strong>RULES: </strong>
                <div style="margin-left: 40px;">{{$event2->rules;}}</div>
            </div></li>
  <li id="{{$event3->permalink;}}Tab"><hr class='style-two' />

            <strong>OBJECTIVE: </strong>{{$event3->objective;}}

            <hr class='style-two' />

            <table style="width: 500px;">
            <tbody>
                <tr>
                    <td><strong>Time: </strong>{{$event3->time;}}</td>
                </tr>
                <tr>
                    <td><strong>Venue: </strong>{{$event3->venue;}}</td>
                </tr>
            </tbody>
            </table>

            <hr class='style-two' />

            <div style="margin-top: 20px;">
                <strong>RULES: </strong>
                <div style="margin-left: 40px;">{{$event3->rules;}}</div>
            </div></li>
  <li id="{{$event4->permalink;}}Tab"><hr class='style-two' />

            <strong>OBJECTIVE: </strong>{{$event4->objective;}}

            <hr class='style-two' />

            <table style="width: 500px;">
            <tbody>
                <tr>
                    <td><strong>Time: </strong>{{$event4->time;}}</td>
                </tr>
                <tr>
                    <td><strong>Venue: </strong>{{$event4->venue;}}</td>
                </tr>
            </tbody>
            </table>

            <hr class='style-two' />

            <div style="margin-top: 20px;">
                <strong>RULES: </strong>
                <div style="margin-left: 40px;">{{$event4->rules;}}</div>
            </div></li>
</ul>
            <hr class='style-two' />

            <div style="margin-top: 20px;">
                <strong>CERTIFICATE POLICY: </strong>{{$event->certificate;}}
            </div>
@endsection

@section('sidebar')
    <li class="widget-text">
                            <h6 class="widgettitle"><span>Event Head: </span></h6>
                            <p>
                                {{$event->manager;}}
                            </p>
                        </li>
                         <li class="widget-text">
                            <h6 class="widgettitle"><span>Event Details: </span></h6>
                            <p><strong>Date: {{ $event->date; }}</strong></p>
                            <p><strong>Spot Entry: </strong>{{$event->spotentry;}}</p>
                            <p><strong>Re-entry: </strong>{{$event->reentry;}}</p>
                                
                        </li>
@endsection