
@extends('layout.mainlayout_admin')

   @section('content')
      <main>
         <div class="pattern-square"></div>
        


         

         

         <!--Open positions start-->
         <section class="py-lg-9 py-5">
            <div class="container">

               <!--Open positions start-->
                    <section class="py-lg-9 py-5">
                        <div class="container">
                            <form action="/handle-one-time-payment" method="POST">
                                @csrf

                                {{-- <div class="form-group">
                                    <label for="amount">Amount</label>
                                    <input type="number" class="form-control" id="amount" name="amount" required>
                                </div> --}}

                                <div class="form-group">
                                    <label for="user_id">User </label>
                                    <input type="number" class="form-control" id="user_id" name="user_id" value="23" required>
                                </div>

                                <div class="form-group">
                                    <label for="currency">Currency</label>
                                    <input type="text" class="form-control" id="currency" name="currency" value="inr" required>
                                </div>

                                <div class="form-group">
                                    <label for="payment_method_id">Payment Method ID</label>
                                    <input type="text" class="form-control" id="payment_method_id" name="payment_method_id" value="pm_1QZ6PHSA6v11N8PDoCgzqeQs" required>
                                </div>

                                <button type="submit" class="btn btn-primary">Submit Payment</button>
                            </form>
                        </div>
                    </section>



            </div>
         </section>
         <!--Open positions end-->
      </main>

   @endsection