@extends('layouts.master')
@section('title', 'Add Quizzes')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/quill.snow.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/dropzone.min.css')}}">
@endsection

@section('breadcrumb-title')
    <h3>{{ __('Add Quizzes') }}</h3>
@endsection


@section('breadcrumb-items')
    <li class="breadcrumb-item">{{ __('Dashboard') }}</li>
    <li class="breadcrumb-item active">{{ __('Add Quizzes') }}</li>
@endsection
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header">
          <h5>Quiz Edit</h5>
        </div>
        <div class="card-body add-post">
          <form class="row g-3">
            <div class="col-sm-12">
              <div class="mb-3">
                <label for="validationCustom01">Title:</label>
                <input class="form-control" id="validationCustom01" type="text" placeholder="Quiz Title">
              </div>
              
              <div class="mb-3">
                <div class="col-form-label">Category:
                  <select class="js-example-placeholder-multiple col-sm-12" multiple="multiple">
                    <option value="AL">Lifestyle</option>
                    <option value="WY">Travel</option>
                    <option value="FY">Food</option>
                    <option value="PY">Photography</option>
                    <option value="HD">Home Decor</option>
                    <option value="FS">Fitness </option>
                    <option value="ED">Education</option>
                    <option value="BR">Book Reviews</option>
                  </select>
                </div>
              </div>
              <div class="email-wrapper">
                <div class="theme-form">
                  <div class="mb-3">
                    <label class="w-100">Quiz Questions</label>
                    <div class="toolbar-box">
                      <div id="editor8"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
          
          <form class="row g-3 e-category">
            <div class="col-md-12 mb-3">
              <label class="form-label">Quiz Answers</label>
              <div class="toolbar-box">
                <div id="toolbar4">
                  <button class="ql-bold">Bold </button>
                  <button class="ql-italic">Italic </button>
                  <button class="ql-underline">underline</button>
                  <button class="ql-strike">Strike </button>
                  <button class="ql-list" value="ordered">List </button>
                  <button class="ql-list" value="bullet"> </button>
                  <button class="ql-indent" value="-1"> </button>
                  <button class="ql-indent" value="+1"></button>
                  <button class="ql-link"></button>
                </div>
                <div id="editor4"></div>
              </div>
            </div>
          </form>
          <form class="dropzone dropzone-secondary" id="multiFileUpload" action="/upload.php">
            <div class="dz-message needsclick">
              <h6>Drop files here or click to upload.</h6><span class="note needsclick">(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</span>
            </div>
          </form>
          <div class="common-flex justify-content-end mt-3">
            <button class="btn btn-primary" type="submit">Publish</button>
            <input class="btn btn-secondary" type="reset" value="Discard">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection

@section('script')
<script src="{{ asset('assets/js/select2/select2.full.min.js')}}"></script>
<script src="{{ asset('assets/js/custom-select2.js') }}"></script>
<script src="{{ asset('assets/js/editors/custom-quill.js') }}"></script>
<script src="{{ asset('assets/js/dropzone/dropzone.min.js')}}"></script>
<script src="{{ asset('assets/js/custom-dropzone.js')}}"></script>

<script>
  var editor4 = new Quill("#editor4", {
    modules: { toolbar: "#toolbar4" },
    theme: "snow",
    placeholder: "Enter your messages...",
  });
</script>
@endsection