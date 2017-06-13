@extends('layouts/app')

@section('content')
<h1>Create New</h1>
<div class="panel panel-primary">
  <div class="panel-heading">
    @if(isset($run))
        Edit From
    @else
        Add From
    @endif
  </div>
    @if(isset($run))
      {{ Form::open(['method' => 'put', 'route' => ['run.update', $run->id] ]) }}
    @else
      {{ Form::open(['url' => 'run']) }}
    @endif
    <div class="panel-body">
      @if(count($errors) > 0)
        <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all as $error)
                <li>{{ $error }}</li>
              @endforeach
          </ul>
        </div>
      </div>
      @endif
      <div>
        <div class="col-xs-2">
            {{ Form::label('bank', 'วิธีการโอน' ) }}
        </div>
        @if(isset($run->bank))
          {{ Form::text('bank',$run->bank,['class' => 'form-control']) }}
        @else
          {{ Form::text('bank','',['class' => 'form-control']) }}
        @endif
      </div>
      <div>
        <div class="col-xs-2">
            {{ Form::label('fromBank', 'โอนจากธนาคาร') }}
        </div>
        @if(isset($run->fromBank))
          {{ Form::text('fromBank',$run->fromBank,['class' => 'form-control']) }}
        @else
          {{ Form::text('fromBank','',['class' => 'form-control']) }}
        @endif
      </div>
      <div>
        <div class="col-xs-2">
            {{ Form::label('fromNumber', 'โอนจากเลขที่บัญชี') }}
        </div>
        @if(isset($run->fromNumber))
          {{ Form::text('fromNumber',$run->fromNumber,['class' => 'form-control']) }}
        @else
          {{ Form::text('fromNumber','',['class' => 'form-control']) }}
        @endif
      </div>
      <div>
        <div class="col-xs-2">
            {{ Form::label('frombankName', 'โอนจากชื่อบัญชี') }}
        </div>
        @if(isset($run->frombankName))
          {{ Form::text('frombankName',$run->frombankName,['class' => 'form-control']) }}
        @else
          {{ Form::text('frombankName','',['class' => 'form-control']) }}
        @endif
      </div>
      <div>
        <div class="col-xs-2">
            {{ Form::label('amount', 'จำนวนเงิน') }}
        </div>
        @if(isset($run->amount))
          {{ Form::text('amount',$run->amount,['class' => 'form-control']) }}
        @else
          {{ Form::text('amount','',['class' => 'form-control']) }}
        @endif
      </div>
      <div>
        <div class="col-xs-2">
            {{ Form::label('dateadd', 'วันที่โอน') }}
        </div>
        @if(isset($run->dateadd))
          {{ Form::text('dateadd',$run->dateadd,['class' => 'form-control']) }}
        @else
          {{ Form::text('dateadd','',['class' => 'form-control']) }}
        @endif
      </div>
      <div>
        <div class="col-xs-2">
            {{ Form::label('timeadd', 'เวลาโอน') }}
        </div>
        @if(isset($run->timeadd))
          {{ Form::text('timeadd',$run->timeadd,['class' => 'form-control']) }}
        @else
          {{ Form::text('timeadd','',['class' => 'form-control']) }}
        @endif
      </div>
      <div>
        <div class="col-xs-2">
            {{ Form::label('toBank', 'โอนเข้าธนาคาร') }}
        </div>
        @if(isset($run->toBank))
          {{ Form::text('toBank',$run->toBank,['class' => 'form-control']) }}
        @else
          {{ Form::text('toBank','',['class' => 'form-control']) }}
        @endif
      </div>
      <div>
        <div class="col-xs-2">
            {{ Form::label('toNumber', 'โอนเข้าเลขที่บัญชี') }}
        </div>
        @if(isset($run->toNumber))
          {{ Form::text('toNumber',$run->toNumber,['class' => 'form-control']) }}
        @else
          {{ Form::text('toNumber','',['class' => 'form-control']) }}
        @endif
      </div>
      <div>
        <div class="col-xs-2">
            {{ Form::label('toNamebank', 'โอนเข้าชื่อบัญชี') }}
        </div>
        @if(isset($run->toNamebank))
          {{ Form::text('toNamebank',$run->toNamebank,['class' => 'form-control']) }}
        @else
          {{ Form::text('toNamebank','',['class' => 'form-control']) }}
        @endif
      </div>
      <div>
        <br>
        <div class="col-xs-5">
            {{ Form::submit('save',['class' => 'btn btn-primary']) }}
        </div>
    </div>
    {{ Form::close() }}
</div>
@endsection
