@extends('layouts.dashboard2.app')
@section('content')
<div class="insidebanner_wrap">
    <div class="container">
    <div class="row">
    
    
    
    
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
       
    </div>
    </div>
    </div>
          </div>
    
    
    
    <div class="member_wrap">
    
    
    <div class="member_inside">
    <div class="container">
    <div class="row">
    <div class="col-lg-12 col-md12 col-sm-12 col-xs-12">
    <div class="mem_wrapper">
    <div class="row">
    
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="member-container">
    <div class="member-right">
    
        
        
    
    <link href="./Greenhillstradeprofile_files/dash.css" rel="stylesheet" type="text/css">
    
    
    <div class="col-lg-12">
    <div class="row">
                 
                 
           
           
           
      
    
    
    <script language="javascript">
    function IsNumeric(sText) {
      var ValidChars = "0123456789.";
      var IsNumber=true;
      var Char;
      if (sText == '') return false;
      for (i = 0; i < sText.length && IsNumber == true; i++) { 
        Char = sText.charAt(i); 
        if (ValidChars.indexOf(Char) == -1) {
          IsNumber = false;
        }
      }
      return IsNumber;
    }
    
    function checkform() {
      if (document.editform.fullname.value == '') {
        alert("Please type your full name!");
        document.editform.fullname.focus();
        return false;
      }
    
    
      if (document.editform.password.value != document.editform.password2.value) {
        alert("Please check your password!");
        document.editform.fullname.focus();
        return false;
      }
    
    
    
    
      if (document.editform.email.value == '') {
        alert("Please enter your e-mail address!");
        document.editform.email.focus();
        return false;
      }
    
    
    
      for (i in document.editform.elements) {
        f = document.editform.elements[i];
        if (f.name && f.name.match(/^pay_account/)) {
          if (f.value == '') continue;
          var notice = f.getAttribute('data-validate-notice');
          var invalid = 0;
          if (f.getAttribute('data-validate') == 'regexp') {
            var re = new RegExp(f.getAttribute('data-validate-regexp'));
            if (!f.value.match(re)) {
              invalid = 1;
            }
          } else if (f.getAttribute('data-validate') == 'email') {
            var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
            if (!f.value.match(re)) {
              invalid = 1;
            }
          }
          if (invalid) {
            alert('Invalid account format. Expected '+notice);
            f.focus();
            return false;
          }
        }
      }
    
      return true;
    }
    </script>
    
    
    
    <form action="{{ route('user.profile.save') }}" method="post" onsubmit="return checkform()" name="editform">
      @csrf
    
    <table cellspacing="0" cellpadding="2" border="0" class="blank">
    <tbody><tr>
     <td>Account Name:</td>
     <td>{{ Auth::user()->username }}</td>
    </tr><tr>
     <td>Registration date:</td>
     <td>{{ date('F J, Y H:i:s', strtotime(Auth::user()->created_at)) }}</td>
    </tr><tr>
     <td>Your Full Name:</td>
     <td><input type="text" name="full_name" value="{{ old('full_name') ?? Auth::user()->full_name }}" class="inpts" size="30">
    </td></tr>
    
    <tr>
     <td>New Password:</td>
     <td><input type="password" name="password" value="" class="inpts" size="30"></td>
    </tr><tr>
     <td>Retype Password:</td>
     <td><input type="password" name="password_confirmation" value="" class="inpts" size="30"></td>
    </tr>
    @foreach ($accounts as $account)
      <tr id="accounts">
        <td>Your {{ $account->name }} Account ID:</td>
        <td><input type="text" class="inpts" size="30" name="account[{{ $account->id }}]" value="{{ $account->user_wallet }}"></td>
      </tr>
    @endforeach
    <tr>
     <td>Your E-mail address:</td>
     <td><input type="email" name="email" value="{{ old('email') ?? Auth::user()->email }}" class="inpts" size="30"></td>
    </tr>
    
    <tr>
     <td>&nbsp;</td>
     <td><input type="submit" value="Send" class="sbmt"></td>
    </tr></tbody></table>
    </form>
                    
     </div>
    
        
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection