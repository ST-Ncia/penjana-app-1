@extends('appForm')

@section('tabTitle')
Section 3: Employee Details
@endsection

@section('sectBody')
<form class="form-horizontal"  method="post" action="{{ url('/sct3Save') }}">
    @csrf
    <input type="hidden" id="appId" name="appId" value="{{ $appForm['id'] ?? '' }}">
    <input type="hidden" id="act" name="act" value="{{ $loadData['act'] ?? '' }}">
    <div class="card-body">
      <!--<p>View sample form here <a href=""><i class="fa fa-eye"></i></a></p> -->
      <!-- Part A --> 
      <div class="form-group row">
        <label  class="col-sm-10 col-form-label">Please fill in the details on the human capital requirement based on the company hiring plan.</label>
      </div>
      <div class="form-group row">
        <label  class="col-sm-2 col-form-label">PART A</label>
      </div>
      <!-- Table Part A --> 
      <table class="table table-bordered table-sm w-auto" onchange="calculateAmount2(this.value2)" required >
        <thead class="thead-dark">
          <tr>
            <th style="width:  50%" class="thalign" scope="col">Category</th>
            <th style="width:  50%" class="thalign" scope="col">No. of current employees</th>
          </tr>
          <tr>
            <td scope="row">(A) No. of employees (Malaysian)</th>
            <td class="tdtextboxalign">
              <input type="number" min=0 oninput="validity.valid||(value='');" class="textboxalign border border-dark" 
              id="inputMalayEmp" name="inputMalayEmp" value="{{ $appForm['inputMalayEmp'] ?? '' }}">
              <span class="text-danger" >
                @isset($errMsg['inputMalayEmp'])
                {{$errMsg['inputMalayEmp']}}
                @endisset
              </span>
            </td>
          </tr>
          <tr>
            <td scope="row">(B) No. of employees (Foreign)</th>
            <td class="tdtextboxalign">
              <input type="number" min=0 oninput="validity.valid||(value='');" class="textboxalign border border-dark"  
              id="inputForeignEmp" name="inputForeignEmp" value="{{ $appForm['inputForeignEmp'] ?? '' }}">
              <span class="text-danger" >
                @isset($errMsg['inputForeignEmp'])
                {{$errMsg['inputForeignEmp']}}
                @endisset
              </span>
            </td>
          </tr>
        </thead>
          <tr>
            <th class="thcalculate" scope="row">TOTAL (A+B)=(C+D+E+F) </th>
            <td class="tdtextboxalign">
              <span class="text-danger" >
                @isset($errMsg['total'])
                {{$errMsg['total']}}<br/>
                @endisset
              </span>
              <input type="number" class="textboxalign boldformula" id="total1" name="total1" readonly="readonly">
            </td>
          </tr>
          <thead class="thead-dark">
          <tr>
            <td scope="row">(C) Management</th>
            <td class="tdtextboxalign">
              <span class="text-danger" >
                @isset($errMsg['inputManagement'])
                {{$errMsg['inputManagement']}}<br/>
                @endisset
              </span>
              <input type="number" class="textboxalign border border-dark" min=0 oninput="validity.valid||(value='');" 
              id="inputManagement" style="width:98px" name="inputManagement" value="{{ $appForm['inputManagement'] ?? '' }}">
               out of
               <input type="number" class="textboxalign boldformula" id="outof1" name="outof1" style="width:98px" readonly="readonly">
               
            </td>
          </tr>
          <tr>
            <td scope="row">(D) Technical</td>
            <td class="tdtextboxalign">
              <span class="text-danger" >
                @isset($errMsg['inputTechnical'])
                {{$errMsg['inputTechnical']}}<br/>
                @endisset
              </span>
              <input type="number" min=0 oninput="validity.valid||(value='');" class="textboxalign border border-dark" style="width:98px" 
              id="inputTechnical" name="inputTechnical" value="{{ $appForm['inputTechnical'] ?? '' }}">
              out of
              <input type="number" class="textboxalign boldformula" id="outof2" name="outof2" style="width:98px" readonly="readonly">
            </td>
          </tr>
          <tr>
            <td scope="row">(E) Supervisory</td>
            <td class="tdtextboxalign">
              <span class="text-danger" >
                @isset($errMsg['inputSupervisory'])
                {{$errMsg['inputSupervisory']}}<br/>
                @endisset
              </span>
              <input type="number" min=0 oninput="validity.valid||(value='');" class="textboxalign border border-dark" style="width:98px" 
              id="inputSupervisory" name="inputSupervisory" value="{{ $appForm['inputSupervisory'] ?? '' }}">
              out of
              <input type="number" class="textboxalign boldformula" id="outof3" name="outof3" style="width:98px" readonly="readonly">
            </td>
          </tr>
          <tr>
            <td scope="row">(F) Others (E.g Operators)</td>
             
            <td class="tdtextboxalign">
              <span class="text-danger" >
                @isset($errMsg['inputOthers'])
                {{$errMsg['inputOthers']}}<br/>
                @endisset
              </span>
              <input type="number" min=0 oninput="validity.valid||(value='');" class="textboxalign border border-dark" style="width:98px" 
              id="inputOthers" name="inputOthers" value="{{ $appForm['inputOthers'] ?? '' }}">
              out of
              <input type="number" class="textboxalign boldformula" id="outof4" name="outof4" style="width:98px" readonly="readonly">
            </td>
          </tr>
        </thead>
          <tr>
            <th class="thcalculate" scope="row">MTS % = [(C+D+E)/TOTAL]*100</th>
            <td class="tdtextboxalign"><input  type="number" class="textboxalign boldformula" id="total2" name="total2" readonly="readonly"></td>
          </tr>
      </table>

      <!-- Part B --> 
      <div class="form-group row">
        <label class="col-sm-2 col-form-label"></label>
      </div>
      <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">PART B</label>
      </div>

      <!-- Table Part B --> 
      <table  class="table table-bordered table-sm w-auto" onchange="calculateAmount1(this.value1)" required >
        <thead class="thead-dark">
        <tr>
          <th class="thalign" colspan="2" rowspan="2" >Category</th>
          <th class="thalign" colspan="6" >Job Creation (Projection)- year specific</th>
        </tr>
        <tr>
          <th class="thalign">2020</th>
          <th class="thalign" >2021</th>
          <th class="thalign" >2022</th>
          <th class="thalign" >2023</th>
          <th class="thalign" >2024</th>
          <th class="thalign">TOTAL</th>
        </tr>
        <tr>
          <td colspan="2">(a) No. of employees (Malaysian) </td>
          <td class="tdtextboxalign">
            <input type="number" min=0 oninput="validity.valid||(value='');" class="textboxalign border border-dark" 
            id="inputLocalYear1" name="inputLocalYear1" value="{{ $appForm['inputLocalYear1'] ?? '' }}">
            <span class="text-danger" >
              @isset($errMsg['inputLocalYear1'])
              {{$errMsg['inputLocalYear1']}}
              @endisset
            </span>
          </td>
          <td class="tdtextboxalign">
            <input type="number" min=0 oninput="validity.valid||(value='');" class="textboxalign border border-dark" 
            id="inputLocalYear2" name="inputLocalYear2" value="{{ $appForm['inputLocalYear2'] ?? '' }}">
            <span class="text-danger" >
              @isset($errMsg['inputLocalYear2'])
              {{$errMsg['inputLocalYear2']}}
              @endisset
            </span>
          </td>
          <td class="tdtextboxalign">
            <input type="number" min=0 oninput="validity.valid||(value='');" class="textboxalign border border-dark" 
            id="inputLocalYear3" name="inputLocalYear3" value="{{ $appForm['inputLocalYear3'] ?? '' }}">
            <span class="text-danger" >
              @isset($errMsg['inputLocalYear3'])
              {{$errMsg['inputLocalYear3']}}
              @endisset
            </span>
          </td>
          <td class="tdtextboxalign">
            <input type="number" min=0 oninput="validity.valid||(value='');" class="textboxalign border border-dark" 
            id="inputLocalYear4" name="inputLocalYear4" value="{{ $appForm['inputLocalYear4'] ?? '' }}">
            <span class="text-danger" >
              @isset($errMsg['inputLocalYear4'])
              {{$errMsg['inputLocalYear4']}}
              @endisset
            </span>
          </td>
          <td class="tdtextboxalign">
            <input type="number" min=0 oninput="validity.valid||(value='');" class="textboxalign border border-dark" 
            id="inputLocalYear5" name="inputLocalYear5" value="{{ $appForm['inputLocalYear5'] ?? '' }}">
            <span class="text-danger" >
              @isset($errMsg['inputLocalYear5'])
              {{$errMsg['inputLocalYear5']}}
              @endisset
            </span>
          </td>
          <td><input type="number" class="textboxalign boldformula" name="sum1" id="sum1"  readonly="readonly"></td>
        </tr>
        <tr>
            <td colspan="2">(b) No. of employees Foreign </th>
            <td class="tdtextboxalign">
              <input type="number" min=0 oninput="validity.valid||(value='');" class="textboxalign border border-dark" 
              id="inputForeignerYear1" name="inputForeignerYear1" value="{{ $appForm['inputForeignerYear1'] ?? '' }}">
              <span class="text-danger" >
                @isset($errMsg['inputForeignerYear1'])
                {{$errMsg['inputForeignerYear1']}}
                @endisset
              </span>
            </td>
            <td class="tdtextboxalign">
              <input type="number" min=0 oninput="validity.valid||(value='');" class="textboxalign border border-dark" 
              id="inputForeignerYear2" name="inputForeignerYear2" value="{{ $appForm['inputForeignerYear2'] ?? '' }}">
              <span class="text-danger" >
                @isset($errMsg['inputForeignerYear2'])
                {{$errMsg['inputForeignerYear2']}}
                @endisset
              </span>
            </td>
            <td class="tdtextboxalign">
              <input type="number" min=0 oninput="validity.valid||(value='');" class="textboxalign border border-dark" 
              id="inputForeignerYear3" name="inputForeignerYear3" value="{{ $appForm['inputForeignerYear3'] ?? '' }}">
              <span class="text-danger" >
                @isset($errMsg['inputForeignerYear3'])
                {{$errMsg['inputForeignerYear3']}}
                @endisset
              </span>
            </td>
            <td class="tdtextboxalign">
              <input type="number" min=0 oninput="validity.valid||(value='');" 
              class="textboxalign border border-dark" 
              id="inputForeignerYear4" name="inputForeignerYear4" value="{{ $appForm['inputForeignerYear4'] ?? '' }}">
              <span class="text-danger" >
                @isset($errMsg['inputForeignerYear4'])
                {{$errMsg['inputForeignerYear4']}}
                @endisset
              </span>
            </td>
            <td class="tdtextboxalign">
              <input type="number" min=0 oninput="validity.valid||(value='');" 
              class="textboxalign border border-dark" 
              id="inputForeignerYear5" name="inputForeignerYear5" value="{{ $appForm['inputForeignerYear5'] ?? '' }}">
              <span class="text-danger" >
                @isset($errMsg['inputForeignerYear5'])
                {{$errMsg['inputForeignerYear5']}}
                @endisset
              </span>
            </td>
            <td>
              <input type="number" class="textboxalign boldformula" name="sum2" readonly="readonly">
            </td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th class="thcalculate" colspan="2"></td>
          <td><input type="number" class="textboxalign boldformula" name="sum2020" id="sum2020"  readonly="readonly"></td>
          <td><input type="number" class="textboxalign boldformula" name="sum2021" id="sum2021"  readonly="readonly"></td>
          <td><input type="number" class="textboxalign boldformula" name="sum2022" id="sum2022"  readonly="readonly"></td>
          <td><input type="number" class="textboxalign boldformula" name="sum2023" id="sum2023"  readonly="readonly"></td>
          <td><input type="number" class="textboxalign boldformula" name="sum2024" id="sum2024"  readonly="readonly"></td>
          <td><input type="number" class="textboxalign boldformula" name="sum3" readonly="readonly"></td>
        </tr>
      </tbody>
      </table>
    </div>


    <!-- /.card-body -->
    <div class="card-footer">
      <button type="submit" class="btn btn-success save-btn float-right">Save And Proceed</button>
    </div>
    <!-- /.card-footer -->
  </form>

@endsection

@section('jsscript')
<script>
  function calculateAmount1(val1) {

      let numlocal1 = document.getElementsByName("inputLocalYear1")[0].value;
      let numlocal2 = document.getElementsByName("inputLocalYear2")[0].value;
      let numlocal3 = document.getElementsByName("inputLocalYear3")[0].value;
      let numlocal4 = document.getElementsByName("inputLocalYear4")[0].value;
      let numlocal5 = document.getElementsByName("inputLocalYear5")[0].value;
      let sum1 = Number(numlocal1) + Number(numlocal2) + Number(numlocal3) 
      + Number(numlocal4) + Number(numlocal5) ;
      document.getElementsByName("sum1")[0].value = sum1;

      let numforeign1 = document.getElementsByName("inputForeignerYear1")[0].value;
      let numforeign2 = document.getElementsByName("inputForeignerYear2")[0].value;
      let numforeign3 = document.getElementsByName("inputForeignerYear3")[0].value;
      let numforeign4 = document.getElementsByName("inputForeignerYear4")[0].value;
      let numforeign5 = document.getElementsByName("inputForeignerYear5")[0].value;
      let sum2 = Number(numforeign1) + Number(numforeign2) 
      + Number(numforeign3) + Number(numforeign4) + + Number(numforeign5);
      document.getElementsByName("sum2")[0].value = sum2;

      let sum3 = Number(sum1) + Number(sum2);
      document.getElementsByName("sum3")[0].value = sum3;

      let sum2020 = Number(numlocal1) + Number(numforeign1);
      document.getElementsByName("sum2020")[0].value = sum2020;

      let sum2021 = Number(numlocal2) + Number(numforeign2);
      document.getElementsByName("sum2021")[0].value = sum2021;

      let sum2022 = Number(numlocal3) + Number(numforeign3);
      document.getElementsByName("sum2022")[0].value = sum2022;

      let sum2023 = Number(numlocal4) + Number(numforeign4);
      document.getElementsByName("sum2023")[0].value = sum2023;

      let sum2024 = Number(numlocal5) + Number(numforeign5);
      document.getElementsByName("sum2024")[0].value = sum2024;

  }

  function calculateAmount2(val2) {
      let num1 = document.getElementsByName("inputMalayEmp")[0].value;
      let num2 = document.getElementsByName("inputForeignEmp")[0].value;
      let total1 = Number(num1) + Number(num2);
      document.getElementsByName("total1")[0].value = total1;

      let outof1 = Number(num1) + Number(num2);
      document.getElementsByName("outof1")[0].value = outof1;

      let outof2 = Number(num1) + Number(num2);
      document.getElementsByName("outof2")[0].value = outof2;

      let outof3 = Number(num1) + Number(num2);
      document.getElementsByName("outof3")[0].value = outof3;

      let outof4 = Number(num1) + Number(num2);
      document.getElementsByName("outof4")[0].value = outof4;

      let num3 = document.getElementsByName("inputManagement")[0].value;
      let num4 = document.getElementsByName("inputTechnical")[0].value;
      let num5 = document.getElementsByName("inputSupervisory")[0].value;
      let num6 = document.getElementsByName("inputOthers")[0].value;

      let total2 = (((Number(num3) + Number(num4) + Number(num5))/total1)*100).toFixed(2);
      document.getElementsByName("total2")[0].value = total2;

  }

  $(document).ready(function() {
    calculateAmount1(0);
    calculateAmount2(0);
  });

</script>
@endsection