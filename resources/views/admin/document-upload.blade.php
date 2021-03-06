@extends('layouts.app')

@section('content')
<main class="pt-2 mx-lg-5 text-font">
    <div class="container-fluid mt-5 pt-5">
        <div class="col-md-6 card text-center p-4  py-5" style="box-shadow:none;">
            <div class="col-md-12 text-center">
                <div class="" >
                   <img src="{{asset('uploads/users/'.$user->profile_image)}}" width="100" class="img-thumbnail mb-3">
                   <h3 class="">{{$user->name}}</h3>
                   <p><b>Client Id:</b> SMT{{$user->id}} <br><b>Contact:</b> {{$user->mobile}}<br> <b>Email:</b>  {{$user->email}}<br> <b>Address:</b> {{$user->address}}</p>
               </div>
           </div>
            <br>
            <h4 class="h4 h4-responsive">
              SMT{{$user->id}} Others
            </h4>
            <form method="POST"  enctype="multipart/form-data" action="{{route('admin.doc.upload')}}">
                @csrf
                <div class="row justify-content-center m-auto">
                    <div class="col-md-10">
                        @include('partials.alert')
                        <div class="text-left">
                            <label for="title" >Title</label>
                        <input type="text" id="" name="title" class="form-control" required>
                        </div>

                        <div class="text-left">
                            <label for="note" >Note</label>
                        <textarea  name="note" class="form-control" >  </textarea>
                        </div>

                        <input type="hidden" name="location" value="o">
                        <input type="hidden" name="user_id" value="{{$user->id}}">
                        <div class="text-left py-3">
                            <select class="browser-default custom-select" name="year" required>
                              <option selected>Select Year</option>
                              @for($i=1990;$i<=date('Y',strtotime(now()));$i++)
                              <option value="{{$i}}">{{$i}}</option>
                              @endfor
                            </select>
                        </div>

                         <div class="input-group   ">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                  </div>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                      aria-describedby="inputGroupFileAddon01" name="file" required>
                    <label class="custom-file-label text-left" for="inputGroupFile01">Choose file</label>

                  </div>
                </div>
                    </div>

                </div>

                <!--<p class="m-0 p-0 text-left">-->
                <!--    <small class="text-danger">File Format pdf,jpg,Xls,doc</small>-->
                <!--</p>-->

                <button type="submit" class="btn btn-custom white-text mt-2">
                  Upload
                </button>
            </form>




    </div>
    </div>
</main>

@endsection
