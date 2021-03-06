@extends('appForm')

@section('tabTitle')
Section 6: Supporting Documents
@endsection

@section('sectBody')
<form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ url('/sct6Save') }}">
  @csrf
  <input type="hidden" id="appId" name="appId" value="{{ $appForm['id'] ?? '' }}">
  <input type="hidden" id="act" name="act" value="{{ $loadData['act'] ?? '' }}">
  <div class="card-body">
      <!--<p>View sample form here <a href=""><i class="fa fa-eye"></i></a></p>-->
      <p>Note: Please upload the document one by one to ensure success file upload.</p>
      <p>Note: Please ensure that you have uploaded all of the required document as listed below.</p>
    <!-- Table Part B --> 
    <table class="table table-bordered" >
      <thead class="thead-dark">
        <tr>
          <th style="width:  10%" scope="col">#</th>
          <th style="width:  30%" scope="col">Criteria</th>
          <th class="thalign" style="width:  60%" scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1.</th>
          <td>Company logo </td>
          <td>
            <div class="row">
              @if (isset($loadData['docs'][1]))
              <div style="">
              <a href="{{ url("/supportDoc/".$appForm['id']."/".urlencode($loadData['docs'][1])) }}" target="_blank">
                <img src="{{ asset('img/file.png') }}" alt="" style="">
                <span>{{$loadData['docs'][1]}}</span></a>
              </div>
            @endif
            </div>
            <div class="row">
              <div class="col-sm-10">
            
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="customFile-1" name="customFile-1">
              <label class="custom-file-label" for="customFile-1">Choose file</label>
              </div>
              <span class="text-danger" for="customFile-1">
                @isset($errMsg['err-1'])
                {{$errMsg['err-1']}}
                @endisset
              </span>
              </div>
              <div class="col-sm-2">
                <button type="submit" class="btn btn-success save-btn">
                  @if (isset($loadData['docs'][1])) Replace @else Upload @endif</button>
              </div>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">2.</th>
          <td>Organization Structure</td>
          <td> 
            <div class="row">
              @if (isset($loadData['docs'][2]))
              <div style="">
              <a href="{{ url("/supportDoc/".$appForm['id']."/".urlencode($loadData['docs'][2])) }}" target="_blank"><img src="{{ asset('img/file.png') }}" alt="" style="">
                <span>{{$loadData['docs'][2]}}</span></a>
              </div>
            @endif
            </div>
            <div class="row">
              <div class="col-sm-10">
            
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile-2" name="customFile-2">
                <label class="custom-file-label" for="customFile-2">Choose file</label>
              </div>
              <span class="text-danger" for="customFile-2">
                @isset($errMsg['err-2'])
                {{$errMsg['err-2']}}
                @endisset
              </span>
            </div>
            <div class="col-sm-2">
              <button type="submit" class="btn btn-success save-btn">
                @if (isset($loadData['docs'][2])) Replace @else Upload @endif
              </button>
            </div>
          </div>
          </td>
        </tr>
        <tr>
          <th scope="row">3.</th>
          <td>License and/or relevant certification relating to company activities</td>
          <td>
            <div class="row">
              @if (isset($loadData['docs'][3]))
              <div style="">
              <a href="{{ url("/supportDoc/".$appForm['id']."/".urlencode($loadData['docs'][3])) }}" target="_blank"><img src="{{ asset('img/file.png') }}" alt="" style="">
                <span>{{$loadData['docs'][3]}}</span></a>
              </div>
            @endif
            </div>
            <div class="row">
              <div class="col-sm-10">
            
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile-3" name="customFile-3">
                <label class="custom-file-label" for="customFile-3">Choose file</label>
              </div>
              <span class="text-danger" for="customFile-3">
                @isset($errMsg['err-3'])
                {{$errMsg['err-3']}}
                @endisset
              </span>
            </div>
            <div class="col-sm-2">
              <button type="submit" class="btn btn-success save-btn">
                @if (isset($loadData['docs'][3])) Replace @else Upload @endif
              </button>
            </div>
          </div>
          </td>
        </tr>
        <tr>
          <th scope="row">4.</th>
          <td>Latest 3 years financial audited statement</td>
          <td>
            <div class="row">
              @if (isset($loadData['docs'][4]))
              <div>
              <a href="{{ url("/supportDoc/".$appForm['id']."/".urlencode($loadData['docs'][4])) }}" target="_blank"><img src="{{ asset('img/file.png') }}" alt="" style="">
                <span>{{$loadData['docs'][4]}}</span></a>
              </div>
            @endif
            </div>
            <div class="row">
              <div class="col-sm-10">
            
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile-4" name="customFile-4">
                <label class="custom-file-label" for="customFile-4">Choose file</label>
              </div>
              <span class="text-danger" for="customFile-4">
                @isset($errMsg['err-4'])
                {{$errMsg['err-4']}}
                @endisset
              </span>
            </div>
            <div class="col-sm-2">
              <button type="submit" class="btn btn-success save-btn">
                @if (isset($loadData['docs'][4])) Replace @else Upload @endif
              </button>
            </div>
          </div>
          </td>
        </tr>
        <tr>
          <th scope="row">5.</th>
          <td>Memorandum and Articles of Association </td>
          <td> 
            <div class="row">
              @if (isset($loadData['docs'][5]))
              <div>
              <a href="{{ url("/supportDoc/".$appForm['id']."/".urlencode($loadData['docs'][5])) }}" target="_blank"><img src="{{ asset('img/file.png') }}" alt="" style="">
                <span>{{$loadData['docs'][5]}}</span></a>
              </div>
            @endif
            </div>
            <div class="row">
              <div class="col-sm-10">
            
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile-5" name="customFile-5">
                <label class="custom-file-label" for="customFile-5">Choose file</label>
              </div>
              <span class="text-danger" for="inputPaidUp">
                @isset($errMsg['err-5'])
                {{$errMsg['err-5']}}
                @endisset
              </span>
            </div>
            <div class="col-sm-2">
              <button type="submit" class="btn btn-success save-btn">
                @if (isset($loadData['docs'][5])) Replace @else Upload @endif
              </button>
            </div>
          </div>
          </td>
        </tr>
        <tr>
          <th scope="row">6.</th>
          <td>From 9 - Certificate of Incorporation </td>
          <td> 
            <div class="row">
              @if (isset($loadData['docs'][6]))
              <div>
              <a href="{{ url("/supportDoc/".$appForm['id']."/".urlencode($loadData['docs'][6])) }}" target="_blank"><img src="{{ asset('img/file.png') }}" alt="" style="">
                <span>{{$loadData['docs'][6]}}</span></a>
              </div>
            @endif
            </div>
            <div class="row">
              <div class="col-sm-10">
            
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile-6" name="customFile-6">
                <label class="custom-file-label" for="customFile-6">Choose file</label>
              </div>
              <span class="text-danger" for="inputPaidUp">
                @isset($errMsg['err-6'])
                {{$errMsg['err-6']}}
                @endisset
              </span>
            </div>
            <div class="col-sm-2">
              <button type="submit" class="btn btn-success save-btn">
                @if (isset($loadData['docs'][6])) Replace @else Upload @endif
              </button>
            </div>
          </div>
          </td>
        </tr>
        <tr>
          <th scope="row">7.</th>
          <td>Form 24 - Particulars of Allotment of Shares </td>
          <td> 
            <div class="row">
              @if (isset($loadData['docs'][7]))
              <div>
              <a href="{{ url("/supportDoc/".$appForm['id']."/".urlencode($loadData['docs'][7])) }}" target="_blank"><img src="{{ asset('img/file.png') }}" alt="" style="">
                <span>{{$loadData['docs'][7]}}</span></a>
              </div>
            @endif
            </div>
            <div class="row">
              <div class="col-sm-10">
            
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile-7" name="customFile-7">
                <label class="custom-file-label" for="customFile-7">Choose file</label>
              </div>
              <span class="text-danger" for="inputPaidUp">
                @isset($errMsg['err-7'])
                {{$errMsg['err-7']}}
                @endisset
              </span>
            </div>
            <div class="col-sm-2">
              <button type="submit" class="btn btn-success save-btn">
                @if (isset($loadData['docs'][7])) Replace @else Upload @endif
              </button>
            </div>
          </div>
          </td>
        </tr>
        <tr>
          <th scope="row">8.</th>
          <td>Form 49 - Particulars in Register of Directors, Managers and Secretaries and Changes of Particulars </td>
          <td> 
            <div class="row">
              @if (isset($loadData['docs'][8]))
              <div>
              <a href="{{ url("/supportDoc/".$appForm['id']."/".urlencode($loadData['docs'][8])) }}" target="_blank"><img src="{{ asset('img/file.png') }}" alt="" style="">
                <span>{{$loadData['docs'][8]}}</span></a>
              </div>
            @endif
            </div>
            <div class="row">
              <div class="col-sm-10">
            
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile-8" name="customFile-8">
                <label class="custom-file-label" for="customFile-8">Choose file</label>
              </div>
              <span class="text-danger" for="inputPaidUp">
                @isset($errMsg['err-8'])
                {{$errMsg['err-8']}}
                @endisset
              </span>
            </div>
            <div class="col-sm-2">
              <button type="submit" class="btn btn-success save-btn">
                @if (isset($loadData['docs'][8])) Replace @else Upload @endif
              </button>
            </div>
          </div>
          </td>
        </tr>
        <tr>
          <th scope="row">9.</th>
          <td>Form 13 - CHange of name </td>
          <td> 
            <div class="row">
              @if (isset($loadData['docs'][9]))
              <div>
              <a href="{{ url("/supportDoc/".$appForm['id']."/".urlencode($loadData['docs'][9])) }}" target="_blank"><img src="{{ asset('img/file.png') }}" alt="" style="">
                <span>{{$loadData['docs'][9]}}</span></a>
              </div>
            @endif
            </div>
            <div class="row">
              <div class="col-sm-10">
            
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile-9" name="customFile-9">
                <label class="custom-file-label" for="customFile-9">Choose file</label>
              </div>
              <span class="text-danger" for="inputPaidUp">
                @isset($errMsg['err-9'])
                {{$errMsg['err-9']}}
                @endisset
              </span>
            </div>
            <div class="col-sm-2">
              <button type="submit" class="btn btn-success save-btn">
                @if (isset($loadData['docs'][9])) Replace @else Upload @endif
              </button>
            </div>
          </div>
          </td>
        </tr>
        <tr>
          <th scope="row">10.</th>
          <td>Form 32A - Transfer of Shares </td>
          <td>
            <div class="row">
              @if (isset($loadData['docs'][10]))
              <div>
              <a href="{{ url("/supportDoc/".$appForm['id']."/".urlencode($loadData['docs'][10])) }}" target="_blank"><img src="{{ asset('img/file.png') }}" alt="" style="">
                <span>{{$loadData['docs'][10]}}</span></a>
              </div>
            @endif
            </div>
            <div class="row">
              <div class="col-sm-10">
            
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile-10" name="customFile-10">
                <label class="custom-file-label" for="customFile-10">Choose file</label>
              </div>
              <span class="text-danger" for="inputPaidUp">
                @isset($errMsg['err-10'])
                {{$errMsg['err-10']}}
                @endisset
              </span>
            </div>
            <div class="col-sm-2">
              <button type="submit" class="btn btn-success save-btn">
                @if (isset($loadData['docs'][10])) Replace @else Upload @endif
              </button>
            </div>
          </div>
          </td>
        </tr>
        <tr>
          <th scope="row">11.</th>
          <td>Form 20 - Return on change of Private Limited to Public Limited </td>
          <td>
            <div class="row">
              @if (isset($loadData['docs'][11]))
              <div>
              <a href="{{ url("/supportDoc/".$appForm['id']."/".urlencode($loadData['docs'][11])) }}" target="_blank"><img src="{{ asset('img/file.png') }}" alt="" style="">
                <span>{{$loadData['docs'][11]}}</span></a>
              </div>
            @endif
            </div>
            <div class="row">
              <div class="col-sm-10">
            
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile-11" name="customFile-11">
                <label class="custom-file-label" for="customFile-11">Choose file</label>
              </div>
              <span class="text-danger" for="inputPaidUp">
                @isset($errMsg['err-11'])
                {{$errMsg['err-11']}}
                @endisset
              </span>
            </div>
            <div class="col-sm-2">
              <button type="submit" class="btn btn-success save-btn">
                @if (isset($loadData['docs'][11])) Replace @else Upload @endif
              </button>
            </div>
          </div>
          </td>
        </tr>
        <tr>
          <th scope="row">12.</th>
          <td>Other relevant registration documents relating to nature of business </td>
          <td> 
            <div class="row">
              @if (isset($loadData['docs'][12]))
              <div>
              <a href="{{ url("/supportDoc/".$appForm['id']."/".urlencode($loadData['docs'][12])) }}" target="_blank"><img src="{{ asset('img/file.png') }}" alt="" style="">
                <span>{{$loadData['docs'][12]}}</span></a>
              </div>
            @endif
            </div>
            <div class="row">
              <div class="col-sm-10">
            
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile-12" name="customFile-12">
                <label class="custom-file-label" for="customFile-12">Choose file</label>
              </div>
              <span class="text-danger" for="inputPaidUp">
                @isset($errMsg['err-12'])
                {{$errMsg['err-12']}}
                @endisset
              </span>
            </div>
            <div class="col-sm-2">
              <button type="submit" class="btn btn-success save-btn">
                @if (isset($loadData['docs'][12])) Replace @else Upload @endif
              </button>
            </div>
          </div>
          </td>
        </tr>
        <tr>
          <th scope="row">13.</th>
          <td>Recruitment Job Description and Training Plan (Training Description & Milestone)</td>
          <td>  
            <div class="row">
              @if (isset($loadData['docs'][13]))
              <div>
              <a href="{{ url("/supportDoc/".$appForm['id']."/".urlencode($loadData['docs'][13])) }}" target="_blank"><img src="{{ asset('img/file.png') }}" alt="" style="">
                <span>{{$loadData['docs'][13]}}</span></a>
              </div>
            @endif
            </div>
            <div class="row">
              <div class="col-sm-10">
            
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile-13" name="customFile-13">
                <label class="custom-file-label" for="customFile-13">Choose file</label>
              </div>
              <span class="text-danger" for="inputPaidUp">
                @isset($errMsg['err-13'])
                {{$errMsg['err-13']}}
                @endisset
              </span>
            </div>
            <div class="col-sm-2">
              <button type="submit" class="btn btn-success save-btn">
                @if (isset($loadData['docs'][13])) Replace @else Upload @endif
              </button>
            </div>
          </div>
          </td>
        </tr>
        <tr>
          <th scope="row">14.</th>
          <td>Company Director's Resolution </td>
          <td>
            <div class="row">
              @if (isset($loadData['docs'][14]))
              <div>
              <a href="{{ url("/supportDoc/".$appForm['id']."/".urlencode($loadData['docs'][14])) }}" target="_blank">
                <img src="{{ asset('img/file.png') }}" alt="" style="">
                <span>{{$loadData['docs'][14]}}</span></a>
              </div>
            @endif
            </div>
            <div class="row">
              <div class="col-sm-10">
            
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile-14" name="customFile-14">
                <label class="custom-file-label" for="customFile14">Choose file</label>
              </div>
              <span class="text-danger" for="inputPaidUp">
                @isset($errMsg['err-14'])
                {{$errMsg['err-14']}}
                @endisset
              </span>
            </div>
            <div class="col-sm-2">
              <button type="submit" class="btn btn-success save-btn">
                @if (isset($loadData['docs'][14])) Replace @else Upload @endif
              </button>
            </div>
          </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
    <button type="submit" class="btn btn-success save-btn float-right" 
    name="btnProceed" value="proceed">Proceed</button>
  </div>
  <!-- /.card-footer -->
  </form>
@endsection

@section('jsscript')
<script type="text/javascript">

  $(document).ready(function () {
    bsCustomFileInput.init();
  });
</script>
@endsection