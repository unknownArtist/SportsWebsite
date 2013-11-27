@extends('layouts.admin')
@section('content')

<div class="well">
    @if ($errors->any())
    <ul>
        {{ implode('', $errors->all('<li class="error">:message</li>')) }}
    </ul>
@endif
    </div>

     <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-bordered" id="companies">
    <thead>
    <tbody>

        {{ Form::open(array('url'=>'events/create','POST','files'=>true))}}
        <tr class="odd gradeX">

        {{ Form::open(array('url'=>'events/create','POST','files' => true))}}
        <tr>

            <tr>
                <td>
                    {{ Form::label('ev_name','Event Name')}}
                    {{ Form::text('ev_name','',array('class'=>'form-control','id'=>'myId'))}}

                </td>
            </tr>    
            <tr>    
                <td>
                    {{ Form::label('ev_time','Event Date&Time')}}

                    {{ Form::text('ev_time','',array('class'=>'form-control'))}}
                    

                </td>

            </tr>
            <tr>
                <td>
                    {{ Form::label('ev_place','Event Place')}}
                    {{ Form::text('ev_place','',array('class'=>'form-control'))}}
                </td>
            </tr>    
            <tr>
            <td>
                
                {{ HTML::link('events','Back',array('class'=>'btn btn-success'))}}
                {{ Form::submit('Add',array('class'=>'btn btn-primary'))}}
            </td>

        </tr>

        {{ Form::close() }}
    </tbody>
    </table>
    </table>
@stop