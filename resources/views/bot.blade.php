@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <form action="command">
                          Command<br>
                          <input type="text" name="command" value="{{ isset($command) ? $command : ''}}" id="command">
                          <br> <br>
                          <input type="hidden" name="allcommand" value="{{ isset($allcommand) ? $allcommand : ''}}" id="allcommand">

                          <input type="submit" value="Submit">
                    </form> 
                    <hr>
                    <div> <u>LOG</u><br></div>
                    <div>
                        <!-- {!! $allcommand !!}  -->
                        {{$command}}
                    </div>
                    <hr>
                    <div> 
                    <div class="form-group">                   
                      <label>
                              <u>Output</u><br>
                               Result = ( {{$x}} , {{$y}} ) <br>
                               Direction = {{ $dir}}
                      </label>   
                    </div>
                    <div class="form-group">
                          <label for="example">
                            <u>Guide</u><br>
                            Command = RW15RW1<br>
                            Result = X: 15 Y: -1  <br>
                            Direction: South
                          </label>
                          
                     </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
