<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Transaction Details</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Transaction Details</li>
              </ol>
            </nav>
          </div>
         
        </div>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-5 mx-auto offset-col-3">
            <h6 class="mb-0 text-uppercase">Transaction Details</h6>
            <hr/>
            <div class="card">
             <?php foreach ($h as $transaction ) {
                   
              
              ?>
              <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                      <img src="<?= base_url('assets/images/avatar.png'); ?>">
                      <div class="mt-3">
                        <h4><a href="<?= base_url('admin/client_profile/').$transaction->user_id; ?>"><?php if($transaction->user_fname){ echo $transaction->user_fname; } ?>  <?php if($transaction->user_lname){ echo $transaction->user_lname; } ?></a></h4>
                              
                      </div>
                    </div>
                    <hr class="my-4">
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="bx bx-barcode font-20"></i> Transaction Code</h6>
                        <span class="text-secondary"><?= $transaction->transaction_code; ?></span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="bx bx-adjust font-20"></i> Transaction Status</h6>
                        <span class="text-secondary"><?= $transaction->transaction_status; ?></span>
                      </li>
                       <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="bx bx-edit font-20"></i> For Order ID</h6>
                        <span class="text-secondary"><a href="<?= base_url('admin/get_paper_details/').$transaction->order_id; ?>"><?= $transaction->transaction_order_id; ?></a></span>
                      </li>
                      <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="bx bx-time font-20"></i> Date</h6>
                        <span class="text-secondary"><?= date_output($transaction->transaction_added); ?></span>
                      </li>
                       <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                        <h6 class="mb-0"><i class="bx bx-credit-card-alt font-20"></i> Payment Gateway</h6>
                        <span class="text-secondary"><?= $transaction->payment_name; ?></span>
                      </li>
                   
                    </ul>
                  </div>
                <?php } ?>

                </div> <!-- end content -->
           </div>
        </div>
      </div>
   </div>      

  