<?php

class RegisterController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($data)
	{
		//echo $data['enquirytype'];exit; 
		
		$dependent=array();	
		
		if($data['enquirytype']==3){
		
		$dependent=array(
					'productname'     => 'required',
            		'productsize'     => 'required',
                    'usebydate'       => 'required',
					'batchcode'       => 'required',
		
		);	
			
		}
	
		$rule  =  array(
                    'firstname'       => 'required',
                    'surname'      	  => 'required',
                    'email'           => 'required|email',
					'daytimecontact'  => 'regex:/^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/',
                    'address'         => 'required',
                    'suburb'   		  => 'required',
					'state'           => 'required',
                    'postcode'        => 'required',
                    'enquirytype'     => 'required',
					//'productname'     => 'required_if_attribute:enquirytype,==,3',
					'enquiry'         => ''
                ) ;
				
				$messages = array(
                               
                                'daytimecontact.regex' => 'The :attribute number is invalid , accepted format: xxx-xxx-xxxx',
                                
                               );
                           
				
			
			if(count($dependent)>0){
			$rule=array_merge($rule,$dependent);
			}else{
			$rule=$rule;	
			}
			
				

            $validator = Validator::make($data,$rule);


            if ($validator->fails())
            {
				
            return Redirect::to('register')->withInput()->withErrors($validator->messages());
			
            }
            else
            {
				
                    Register::saveFormData(Input::except(array('_token','cpassword')));

                    return Redirect::to('register')
                            ->withMessage('Data has been added successfully.');
            }
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
