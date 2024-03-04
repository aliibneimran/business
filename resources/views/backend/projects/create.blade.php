@extends('backend.layouts.app')
@section('title','Admin Dashboard')
@section('content')
<div class="container-fluid">
    <!-- begin row -->
    
    <!-- end row -->
    <!-- begin row -->
    <div class="row">
        
        <div class="col-xl-12">
            <div class="card card-statistics">
                <div class="card-header">
                    <div class="card-heading">
                        <h4 class="card-title">Add Project</h4>
                    </div>
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <div id="summernote" name="description" class="summernote"></div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Image</label>
                                <div class="custom-file">
                                    <input type="file" name="image" class="custom-file-input" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Link</label>
                                <input type="text" name="link" class="form-control">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Member</label>
                                <div class="select-wrapper">
                                    <div class="form-group mb-0">
                                        <select class="js-basic-multiple form-control" name="member[]" multiple="multiple">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-20">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
    <!-- end row -->
</div>
@endsection