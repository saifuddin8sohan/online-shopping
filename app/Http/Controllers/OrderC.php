<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Order;
use App\Produck;


class OrderC extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $uid= Auth::user()->id;
        $lists=[];
        

        $orders = Order::all()->where('user_id',$uid);
        $producks = Produck::all();

        //return $list[]= $producks->;
        //return $orders;
        //return $producks->user_id;

        foreach($orders as $order){
            
            foreach($producks as $produck){

                if($produck->id == $order->produck_id){

                   $lists[]= $produck;
                }
            }
        }
        

        //return $list;
        //return $orders;
        //return $producks->user_id;



        return view('order.index',compact('lists'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        //$user = Auth::user();

        //return view('produck.create',compact('user'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return $request;
        //return add;
        //$user = Auth::user();


        //$item['produck_id'] = $request->produck_id;
        //$item['user_id'] = $user->id;

        //Order::create($item);
  
        //$pid = $request->produck_id;
        //$producks = Produck::findOrFail($pid);

        //return view('order.box',compact('producks'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    	
        $order = Order::findOrFail($id);


        return view('order.show',compact('order'));
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function edit($id)
    //{
        //
       // $produck = Produck::findOrFail($id);

       // return view('produck.edit',compact('produck'));
    //}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request, $id)
    //{
        //
       // Produck::findOrFail($id)->update($request->all());

      //  return redirect('/produck');

    //}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $uid = Auth::user()->id;

        $oid =	Order::where([['user_id',$uid],['produck_id',$id]])->get(); 
        //$oid = Order::where('produck_id',$id); 

        Order::whereId($oid)->delete();

        return view('order.index',compact('uid'));

    }

}
