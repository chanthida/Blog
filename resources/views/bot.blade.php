@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <form action="command">
                          command<br>
                          <input type="text" name="command" value="{{ isset($command) ? $command : ''}}" id="command">
                          <br> <br>
                          <input type="hidden" name="allcommand" value="{{ isset($allcommand) ? $allcommand : ''}}" id="allcommand">

                          <input type="submit" value="Submit">
                    </form> 
                    <hr>
                    <div class="panel-heading">LOG</div>
                    <div>
                        <!-- {!! $allcommand !!}  -->
                        {{$command}}
                    </div>
                    <hr>
                    <div>
                     <div class="panel-heading">Output</div>
                     Point = ( {{$x}} , {{$y}} )
                    <br>
                    Direction = {{ $dir}}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
