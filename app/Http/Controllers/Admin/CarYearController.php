<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Input; /* For input */
use App\Model\Make;                                         /* Model name*/
use App\Model\Carmodel;                                     /* Model name*/
use App\Model\Caryear;                                      /* Model name*/
use App\Model\RequestQueue;		                            /* Model name*/
use App\Model\DealerMakeMap;                                /* Model name*/
use App\Model\RequestDealerLog;                             /* Model name*/
use App\Model\RequestStyleEngineTransmissionColor;          /* Model name*/
use App\Model\BidQueue;                                     /* Model name*/
use App\Model\BidAcceptanceQueue;                           /* Model name*/
use App\Model\BlockBidLog;                                  /* Model name*/
use App\Model\Client;                                       /* Model name*/
use Validator;
use Session;
use DB;
use Mail;
use Hash;
use Auth;
use Imagine\Image\Box;
use Image\Image\ImageInterface;
use App\Helper\helpers;


class CarYearController extends Controller
{
    //
    var $obj;
    //
    public function getYear(){

    	$Caryears=Caryear::with('makes','models')->get();

    	return view('admin.caryear.year_list',compact('Caryears'),array('title'=>'Dealers Direct Admin | Year List'));

    }
}
