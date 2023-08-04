<?php

namespace App\Http\Controllers;

use App\Models\BookTripe;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;


class BookTripeController extends Controller
{
    public function book_tripe(Request $request)
    {
        $date = date('Y-m-d');
        $newDate = Carbon::createFromFormat('Y-m-d', $date)
                                    ->format('m/d/Y');
        $data= new BookTripe;
        $data->name=$request->name;
        $data->activities=$request->activities;
        $data->destination=$request->destination;
        $data->date=$newDate;
        $data->save();

        return redirect('/');
    }

    public function show_booktriep_data(Request $request)
    {
        $search=$request->search;
    
        if ($request->search) {
            $data = BookTripe::where('name','LIKE','%'.$search.'%')
            ->orwhere('activities','LIKE','%'.$search.'%')->orwhere('destination','LIKE','%'.$search.'%')
            ->orwhere('date','LIKE','%'.$search.'%')->paginate(10);;
        } else {
            $data = BookTripe::paginate(20);
        }
        $count=$data->count();
        return view('customer/show_booktriep_data',['book_data'=>$data,'counts'=>$count]);
            
    }
    public function tresh_customers(Request $request)
    {
        $search=$request->search;
        if ($request->search) {
            $data = BookTripe::onlyTrashed()->where('name','LIKE','%'.$search.'%')
            ->orwhere('activities','LIKE','%'.$search.'%')->orwhere('destination','LIKE','%'.$search.'%')
            ->orwhere('date','LIKE','%'.$search.'%')->paginate(10);
        } else {
            $data = BookTripe::onlyTrashed()->paginate(10);
        }
        
        return view('customer/customer_tresh',['book_data'=>$data]);
          
    }
    public function restore_customers($id)
    {
        $data= BookTripe::withTrashed()->find($id);

        $data->restore();
        return redirect('/show_booktriep_data');
            
    }
    public function edit_customer($id)
    {
        $data= BookTripe::find($id);

        return view('customer/update_customer',['customers_data' => $data]);
            
    }
    public function update_customer($id ,Request $request)
    {
        // $date = date('Y-m-d');
        // $newDate = Carbon::createFromFormat('Y-m-d', $date)
        //                             ->format('m/d/Y');
        $data= BookTripe::find($id);
        $data->name=$request->name;
        $data->activities=$request->activities;
        $data->destination=$request->destination;
        $data->date=$request->date;
        $data->save();

        return redirect('/show_booktriep_data');
              
    }
    
    public function destroy_customers($id)
    {
        $data=BookTripe::withTrashed()->find($id);
        $data->forceDelete();
        return redirect('/tresh_data');
    }

    public function delete_customer($id)
    {
        $data=BookTripe::find($id);
        $data->delete();
        return redirect('/show_booktriep_data');
    }


    public function export_pdf()
    {
        $mydata= BookTripe::all();
        $data=['book_data'=>$mydata];
        $pdf = PDF::loadView('pdf_view',$data);

        // Now you can use other methods of the PDF instance, such as download(), stream(), etc.
        return $pdf->download('customerdata.pdf');
}
}