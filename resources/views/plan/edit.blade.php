@extends('layouts.app')
@section('bread')

<div class="breadcrumb-text">
    <h2>Edit Plan</h2>
    <div class="bt-option">
        <a href="/">Plan</a>

        <span>{{$info->name}}</span>
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
                    <span style="color:#f36100">Edit Plan</span>
                </div>
            </div>

            <div class="card-body leave-comment" style="color:#f36100">
                <form method="POST" Action="/plans/{{$info['id']}}">
                    @method('patch')
                    @csrf
                    <div class="mb-3">
                        <label for="name">Name(<span class="text-danger">*</span>) :</label>
                        <input type="text" name="name" id="name" class="form-control" required pattern="[A-z 0-9-_]{2/40}"
                            placeholder="Enter Name" value="{{old('name')??$info['name']}}">
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="duration">Duration(<span class="text-danger">*</span>) :</label>
                        <input type="number" name="duration" id="duration" class="form-control" required
                            value="{{(old('duration')??$info['duration'])}}" placeholder="Enter Duration In Month" 
                            title="Enter Valid Month" min="1" >
                        @error('duration')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="fees">Fees In Rs(<span class="text-danger">*</span>) :</label>
                        <input type="number" name="fees" id="fees" class="form-control" required
                            value="{{old('fees')??$info['fees']}}" placeholder="Enter Fees" 
                            title="Enter Valid Fess"  >
                        @error('fees')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="discount">Discount In %:</label>
                        <input type="discount" name="discount" id="discount" class="form-control" required
                            value="{{old('discount')??$info['discount']}}" placeholder="Enter discount" 
                            title="Enter Valid discount"  >
                       
                    </div>
                    <div class="mb-3">
                        <label for="description">Description:</label>
                        <textarea name="description" id="description" class="form-control" placeholder="Enter Your Address"
                            rows="4">{{old('description')??$info['description']}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="status">Plan Status :</label>
                        <select name="status" id="status" class="form-select text-white bg-transparent"
                            style="border:1px solid #555 !important">
                            <option value="Activate" class="text-black">Activate</option>
                            <option value="Deactivate" class="text-black" {{$info['status']=='Deactivate' ? "selected" : "" }}>
                            Deactivate</option>
                        </select>
                    </div>
                    <div class="mb-3 text-center">
                        <button class="btn btn-warning">Update</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


@endsection