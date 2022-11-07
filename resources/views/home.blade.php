@extends('layouts.app')

@section('content')
<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('gologle_user') }} </div>
                
                 <img src="/img/glock34.jpg" alt="Cover Image"/>
                 {{-- alt="description of myimagr"> --}}
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                        
                    @endif
                    {{ __('My New !! Gun Glock34 Tarantactical !!!') }}
                    </div>

                    <div id="" class="form-input">
                        <h2>Comment</h2>
                        <input type="text" id="myInput" placeholder="comment">
                        <button type="submit" class="btn btn-primary">save</button>
                      </div>
                      
                      <ul id="myUL">
                       
                      </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
