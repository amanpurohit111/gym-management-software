@extends('layouts.app')
@section('bread')

<div class="breadcrumb-text">
    <h2>Trainer Registration</h2>
    <div class="bt-option">
        <a href="/">Trainer</a>

        <span>Registration</span>
    </div>
</div>

@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-2">
            @include('layouts.leftbar')
        </div>
        <div class="col-9" style="border-radius: 6px; border:1px solid #444;box-shadow:1px 1px 5px #000;">
            <div class="card bg-transparent">
                <div class="card-header text-center">
                    <span style="color:#f36100">Create Trainer</span>
                </div>
            </div>

            <div class="card-body leave-comment" style="color:#f36100">
                <form method="POST" action="/Trainers/">
                    @csrf
                    <div class="mb-3">
                        <label for="name">Name(<span class="text-danger">*</span>) :</label>
                        <input type="text" name="name" id="name" class="form-control" required pattern="[A-z]{2/40}"
                            placeholder="Enter Name" value="{{old('name')}}">
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="mobile">Mobile(<span class="text-danger">*</span>) :</label>
                        <input type="text" name="mobile" id="mobile" class="form-control" required
                            value="{{old('mobile')}}" placeholder="Enter Mobile" pattern="[6-9]{1}[0-9]{9}"
                            title="Enter Valid 10 Digit Mobile Number">
                        @error('mobile')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="fees">Fees In Rs(<span class="text-danger">*</span>) :</label>
                        <input type="number" name="fees" id="fees" class="form-control" required
                            value="{{old('fees')}}" placeholder="Enter Fees" 
                            title="Enter Valid Fess"  >
                        @error('fees')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="duration">Duration(<span class="text-danger">*</span>) :</label>
                        <input type="text" name="duration" id="duration" class="form-control" required
                            value="{{old('duration')}}" placeholder="Enter Duration" pattern="[6-9]{1}[0-9]{9}"
                            title="Enter Valid Duration In Month">
                        @error('mobile')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="doj">Date Of Join :</label>
                        <input type="date" name="doj" id="doj" class="form-control"
                            placeholder="Enter Your Date Of Join" value="{{old('doj')?old('doj'):date('Y-m-d',time())}}">
                    </div>
                    <div class="mb-3">
                        <label for="details">Details :</label>
                        <textarea name="details" id="details" class="form-control" placeholder="Enter Your Details"
                            rows="4">{{old('details')}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="status">User Status :</label>
                        <select name="status" id="status" class="form-select text-white bg-transparent"
                            style="border:1px solid #555 !important">
                            <option value="Activate" class="text-black">Activate</option>
                            <option value="Deactivate" class="text-black" {{old('status')=='Deactivate' ? "selected" : "" }}>
                            Deactivate</option>
                        </select>
                    </div>
                    <div class="mb-3 text-center">
                        <button class="btn btn-warning" >Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


@endsection