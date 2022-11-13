@extends('layouts.app')

@section('content')
<html>
    <head>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" 
crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.css" 
integrity="sha512-1hsteeq9xTM5CX6NsXiJu3Y/g+tj+IIwtZMtTisemEv3hx+S9ngaW4nryrNcPM4xGzINcKbwUJtojslX2KG+DQ==" 
crossorigin="anonymous" referrerpolicy="no-referrer" />
 
<link rel="stylesheet" href="comment.css">
    </head>

    
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
                    {{ __('ปืนผมซื้อมาใหม่มีใครอยากแนะนำแต่งอะไรไหมครับ') }}
                    </div>

<body>
                    <div class="container">
                        <div class="row">
                            <div class="intro col-12">
                                <h1></h1>
                            </div>
                        </div>

                    <div class="row">
                        <div class="helptext col-12">
                            <p id="frist"></p>
                            <p id="second"></p>
                            <p id="third"></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <input type="text" id="userinput" placeholder="คอมเมนต์">
                            <button id="enter"><i class="fas fa-pencil-alt"></i></button>
                        </div>
                    </div>
        
                    <div class="row">
                        <div class="listTtem" col-12>
                            <ul class="col-12 offset-0 col-sm-8 offset-sm-2"></ul>
                           <!---<li>Deleat<button>X</button></li> -->
                        </div>
                    </div>
                    <script type="text/javascript" src="script.js"> </script>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection
