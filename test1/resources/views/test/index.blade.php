@extends('layout')
@section('content')
<div>
    @foreach ($test as $t)
    <h3>{{$t['trainee_id']}}       <strong>{{$t['course_id']}}</strong>             {{$t['user_id']}}  </h3>
    @endforeach
 
</div>
<div>
    <form action="{{route('receipts.store')}}" method="POST">
        @csrf
        <label class="form-label"> t</label>
        <input name="t" type="text" class="form-control">
        <label class="form-label">u </label>
        <input name="u" type="text" class="form-control">
        <label class="form-label">c </label>
        <input name="c" type="text" class="form-control">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection