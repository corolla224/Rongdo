@extends('layouts/app')

@section('content')
<h1>Hello Run</h1>
<table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>bank</th>
        <th>fromBank</th>
        <th>fromNumber</th>
        <th>frombankName</th>
        <th>amount</th>
        <th>date_add</th>
        <th>time_add</th>
        <th>toBank</th>
        <th>toNumber</th>
        <th>toNamebank</th>
        <th>thansferStatus</th>
        <th width="200">Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td> 
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>

</table>
<div class="row">
    <div class="col-xs-5">
      {{ Html::link('run/create', 'Create New', array(
        'class' => 'btn btn-primary'
      ))}}

    </div>

</div>

@endsection
