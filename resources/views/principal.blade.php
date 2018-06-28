@extends('layouts.app')
@section('content')

<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
 <div style="height:80vh">{!! Mapper::render()!!}</div>
@endsection
