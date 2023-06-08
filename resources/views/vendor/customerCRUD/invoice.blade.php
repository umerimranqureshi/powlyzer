@extends('vendor.customerCRUD.layout', ['cli_count' => $cli_count, 'dev_count'=> $dev_count, ])
 
@section('content')
@php
$total_price = 0;
@endphp

<h2 style="background-color: white;">Customers Invoice</h2>
    <div class="row">
        <div class="col-lg-12 margin-tb">
           
                
            
           
                <a class="btn btn-success" href="/vendor/customers/invoice/create/{{$client_id}}/{{$vendor_id}}"> Create new invoice</a>
            
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div  class="alert alert-success" style="margin-top: 60px;">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered" style="margin-top: 50px;">
        <tr>
            <th>No</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Unit Price</th>
            <th>Description</th>
            <th>Paid Status</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($invoices as $invoice)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $invoice->product_name }}</td>
                            <td>{{ $invoice->quantity }}</td>
                            <td>{{ $invoice->rate }}</td>
                            <td>{{ $invoice->description }}</td>
                            
                                @php
                                if(isset($invoice->paid_date))
                                {
                                    echo "<td style=\"  background-color: #ccffcc;\">paid</td>";
                                }
                                else
                                {
                                    echo "<td style=\"background-color: #ffcccc;\">not paid</td>";
                                }
                                
                                @endphp
                            

                            <td >
                                <form action="/vendor/customers/invoice/destroy/{{$invoice->id}}" method="POST">
                                    
                      
                                   <!--  <a class="btn btn-info" href="/vendor/customers/invoice/show/{{$invoice->invoice_id}}">Show</a> -->
                    
                                    <a class="btn btn-primary" href="/vendor/customers/invoice/edit/{{$invoice->id}}">Edit</a>
                   
                                    @csrf
                                    @method('POST')
                      
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @php
                           $price = $invoice->rate * $invoice->quantity;
                           $total_price = $total_price + $price;
                        @endphp
                        @endforeach
                        <tr>
                            <td colspan="7"> Total Amount is  <b>Rs.{{$total_price}} </b></td>
                            
                        </tr>
    </table>
  
   
      
@endsection