
<x-main> 
  <x-slot:title>{{$title}}</x-slot>

    <x-navbar/>
    <div class="container">
      <div class="row">
        <div class="col-12 my-3 text-center">
    <h1>{{$title}}</h1>  
    <h3 class="mx-3">{{$text}}</h3>
    </div>

    @if(session()->has('success'))
    <p>{{session()->get('success')}}</p>
    @endif


    <form action="{{route('contacts-send')}}" method="POST" class="m-3">
      @csrf
      <div class="col-12 fs-5">
      <label for="name">Nome</label>
      </div>
      <div class="col-12">
      <input class =" form form-control" type="text" name="name" id="name">
      </div>
      <div class="col-12 fs-5">
      <label for="email">Email</label>
      </div>
      <div class="col-12">
      <input class =" form form-control" type="email" name="email" id="email">
      </div>
      <div class="col-12 fs-5">
      <label for="message">Messaggio</label>
      </div>
      <div class="col-12">
      <textarea class =" form form-control" name="message" id="message" cols="30" rows="10"></textarea>
      </div>
      <div class="col-12 my-2">
      <button class="btn btn-primary" input="submit">Invia</button>
      </div>


    </form>

    </div>
    </div>

    
</x-main>