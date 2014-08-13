<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
    
    {{ HTML::style('css/main.css')}}
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
</head>
<body>


<div id="containner">

@if (Session::has('message'))
 
<p>{{ Session::get('message') }}</p>
 
@endif



    {{ Form::open(array('url' => 'register_action')) }}
    
    <table cellpadding="0" cellspacing="0" border="0" width="100%">
    <tr>
    <td height="30" colspan="2" align="center" valign="middle"><h2>Contact Us</h2></td>
    </tr>
    
    <tr>
    <td width="551" align="right" valign="middle" class="ind-title">First name <span class="star">*</span></td>
    <td width="682" align="left" valign="middle">
    {{ Form::text('firstname', Input::old('firstname'), array('class' => 'input-square','placeholder' => 'Enter First name')) }}
    @if ($errors->any())
	<span class="error">
	{{ $errors->first('firstname') }}
	</span>
	@endif<?php //echo $errors->first('firstname'); ?></td>
    </tr>
    
    <tr>
    <td width="551" align="right" valign="middle" class="ind-title">Surname <span class="star">*</span></td>
    <td align="left" valign="middle">{{ Form::text('surname', Input::old('surname'), array('class' => 'input-square','placeholder' => 'Enter Surname')) }}
    @if ($errors->any())
	<span class="error">
	{{ $errors->first('surname') }}
	</span>
	@endif</td>
    </tr>
    
    <tr>
    <td width="551" align="right" valign="middle" class="ind-title">Email address <span class="star">*</span></td>
    <td align="left" valign="middle">{{ Form::text('email', Input::old('email'), array('class' => 'input-square','placeholder' => 'Enter Email address')) }}
    @if ($errors->any())
	<span class="error">
	{{ $errors->first('email') }}
	</span>
	@endif
    </td>
    </tr>
    
    <tr>
    <td width="551" align="right" valign="middle" class="ind-title">Daytime contact number <span class="star">*</span></td>
    <td align="left" valign="middle">{{ Form::text('daytimecontact', Input::old('daytimecontact'), array('class' => 'input-square','placeholder' => 'Ex:123-456-7890 or (123) 456-7890')) }}
    @if ($errors->any())
	<span class="error">
	{{ $errors->first('daytimecontact') }}
	</span>
	@endif</td>
    </tr>
    
    <tr>
    <td width="551" align="right" valign="middle" class="ind-title">Address <span class="star">*</span></td>
    <td align="left" valign="middle">{{ Form::text('address', Input::old('address'), array('class' => 'input-square','placeholder' => 'Enter Address')) }}
    @if ($errors->any())
	<span class="error">
	{{ $errors->first('address') }}
	</span>
	@endif</td>
    </tr>
    
    <tr>
    <td width="551" align="right" valign="middle" class="ind-title">Suburb <span class="star">*</span></td>
    <td>{{ Form::text('suburb', Input::old('suburb'), array('class' => 'input-square','placeholder' => 'Enter Suburb')) }}
    @if ($errors->any())
	<span class="error">
	{{ $errors->first('suburb') }}
	</span>
	@endif</td>
    </tr>
    
    <tr>
    <td align="right" valign="middle" class="ind-title">State <span class="star">*</span></td>
    <td><!--{{ Form::text('state') }}-->
   
    {{ Form::select('state', array('' => 'Select State', 'ACT' => 'ACT', 'NSW' => 'NSW', 'NT' => 'NT', 'QLD' => 'QLD', 'SA' => 'SA', 'TAS' => 'TAS', 'VIC' => 'VIC', 'WA' => 'WA'  ), array('placeholder' => 'Enquiry type')) }}
    
    @if ($errors->any())
	<span class="error">
	{{ $errors->first('state') }}
	</span>
	@endif
    </td>
    </tr>
    
    <tr>
    <td width="551" align="right" valign="middle" class="ind-title">Postcode <span class="star">*</span></td>
    <td align="left" valign="middle">{{ Form::text('postcode', Input::old('postcode'), array('class' => 'input-square','placeholder' => 'Enter Postcode')) }}
    @if ($errors->any())
	<span class="error">
	{{ $errors->first('postcode') }}
	</span>
	@endif</td>
    </tr>
    
    <tr>
    <td width="551" align="right" valign="middle" class="ind-title">Enquiry type <span class="star">*</span></td>
    <td align="left" valign="middle"><!--{{ Form::text('enquirytype') }}-->

    {{ Form::select('enquirytype', array('' => 'Select Enquiry type', '1' => 'General enquiry', '2' => 'Product feedback or enquiry', '3' => 'Product complaint' ), array('placeholder' => 'Enquiry type')) }}
      
    
    @if ($errors->any())
	<span class="error">
	{{ $errors->first('enquirytype') }}
	</span>
	@endif
     
    </td>
    </tr>
    
    <tr>
    <td width="551" align="right" valign="middle" class="ind-title">Product name </td>
    <td align="left" valign="middle">{{ Form::text('productname', Input::old('productname'), array('class' => 'input-square','placeholder' => 'Enter Product name')) }}
    @if ($errors->any())
	<span class="error">
	{{ $errors->first('productname') }}
	</span>
	@endif</td>
    </tr>
    
    <tr>
    <td align="right" valign="middle" class="ind-title">Product size </td>
    <td align="left" valign="middle">{{ Form::text('productsize', Input::old('surname'), array('class' => 'input-square','placeholder' => 'Enter Product size')) }}
    @if ($errors->any())
	<span class="error">
	{{ $errors->first('productsize') }}
	</span>
	@endif</td>
    </tr>
    
    <tr>
    <td width="551" align="right" valign="middle" class="ind-title">Use-by date </td>
    <td>{{ Form::text('usebydate', Input::old('usebydate'), array('class' => 'input-square','placeholder' => 'Enter Use-by date')) }}
    @if ($errors->any())
	<span class="error">
	{{ $errors->first('usebydate') }}
	</span>
	@endif</td>
    </tr>
    
    <tr>
    <td width="551" align="right" valign="middle" class="ind-title">Batch Code </td>
    <td>{{ Form::text('batchcode', Input::old('batchcode'), array('class' => 'input-square','placeholder' => 'Enter Batch Code')) }}
    @if ($errors->any())
	<span class="error">
	{{ $errors->first('batchcode') }}
	</span>
	@endif</td>
    </tr>
    
    <tr>
    <td width="551" align="right" valign="middle" class="ind-title">Enquiry </td>
    <td align="left" valign="middle">{{ Form::textarea('enquiry', Input::old('enquiry'), array('placeholder' => 'Enter Enquiry')) }}</td>
    </tr>
    
    <tr>
    <td></td>
    <td align="left" valign="middle">{{ Form::submit('Submit', array('class' => 'submit-btn')) }}</td>
    </tr>
    </table>
    

    {{ Form::close() }}
    
</div>    
<script type="text/javascript">
  WebFontConfig = {
    google: { families: [ 'Oswald::latin' ] }
  };
  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
      '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })(); </script>
</body>
</html>