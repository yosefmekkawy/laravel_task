@extends('components.layout')

@section('content')
    @include('components.navbar')
    <div class="container">
        <div class="row">
           <div class="col-12">
               <h1>Your Notifications</h1>
               @foreach($notifications as $notification)
                   <div class="alert alert-info">
                       {{ $notification->data['message'] }}
                   </div>
               @endforeach
           </div>
            </div>
        </div>

    </div>
@endsection

@section('styling')
@endsection

@section('scripts')
    <script src="{{asset('js/users.js')}}"
@endsection
