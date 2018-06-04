<style>
    .invoice {
        background: #fff;
        -webkit-border-radius: 4px;
        border-radius: 4px;
        -webkit-box-shadow: 0 2px 4px rgba(108, 111, 115, 0.1);
        box-shadow: 0 2px 4px rgba(108, 111, 115, 0.1);
    }
    .info p{ 
        text-align:right;
    }
    .invoice .invoice__head {
        overflow: hidden;
        padding: 40px 30px 30px;
        border-bottom: 1px solid #ececec;
    }
    .invoice .invoice__head .info h4 {
        font-size: 20px;
        margin-bottom: 5px;
        line-height: 32px;
        color: #333;
        font-weight: 500;
    }
    .info h4{
        text-align:right;
        color:red;
    } 
    .invoice .invoice__meta {
    padding: 20px 30px;
}
.invoice .invoice__meta .address {
    width: 50%;
    display: inline-block;
    margin-left: -3px;
}
.invoice .invoice__meta .address h5 {
    color: #000;
    font-size: 16px;
    line-height: 30px;
}
.invoice .invoice__meta p {
    line-height: 30px;
}
.date_info {
    width: 50%;
    display: inline-block;
    vertical-align: top;
    text-align: right;
    margin-left: -3px;
}
.address h5 {
    color: #000;
    font-size: 16px;
    line-height: 30px;
}
p {
    font-size: 15px;
    line-height: 26px;
    color: #555555;
    font-weight: 400;
}
.invoice .invoice__meta .date_info p span {
    color: #000;
    font-weight: 500;
    margin-right: 5px;
}
.table {
    width: 100%;
    max-width: 100%;
    margin-bottom: 1rem;
    background-color: transparent;
}
.invoice .invoice__detail {
    margin-top: 00px;
}
.table thead > tr > th {
    color: #000;
    font-size: 16px;
    font-weight: 500;
    padding: 25px 0 25px 28px;
}
.table thead th {
    vertical-align: bottom;
    border-bottom: 2px solid #dee2e6;
}
.table tbody > tr {
    border-bottom: 1px solid #ececec;
}

.table tbody > tr > td {
    padding: 20px 0 20px 28px;
    font-size: 16px;
    vertical-align: middle;
    color: #333;
}
.table td, .table th {
    padding: .75rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}
.table tbody > tr > td.detail a {
    color: #0674ec;
    font-weight: 500;
}
.invoice .pricing_info {
    padding: 0 30px 100px; 
    text-align: right;
}
.invoice .pricing_info p {
    margin: 0;
    color: #000;
    line-height: 36px;
}
.invoice .pricing_info .bold {
    font-size: 18px;
}
.invoice .pricing_info p {
    margin: 0;
    color: #000;
    line-height: 36px;
}
.bold {
    font-weight: 500;
}
.table-responsive {
    display: block;
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
}
</style>
<h1>
<section class="dashboard-area"> 
    <div class="dashboard_contents">
        <div class="container">  
            <div class="row">
                <div class="col-md-12">
                    <div class="invoice">
                        <div class="invoice__head">
                            <div class="invoice_logo">
                                <img style="max-width:70px;" src="images/logo.png" alt="">
                            </div>

                            <div class="info">
                                <h4>Invoice info</h4>
                                <p>Order # MP810094</p>
                            </div>
                        </div>
                        <!-- end /.invoice__head -->

                        <div class="invoice__meta">
                            <div class="address">
                                <h5 class="bold">AazzTech</h5>
                                <p>1355 Market Street, Suite 900</p>
                                <p>San Francisco, CA 94103</p>
                                <p>United States</p>
                            </div>

                            <div class="date_info">
                                <p>
                                    <span>Invoice Date</span>May 05, 2017</p>
                                <p>
                                    <span>Due Date</span>May 10, 2017</p>
                                <p class="status">
                                    <span>Status</span>Sale</p>
                            </div>
                        </div>
                        <!-- end /.invoice__meta -->

                        <div class="invoice__detail">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>AazzTech</th>
                                            <th>Item</th>
                                            <th>License</th>
                                            <th>Unit Cost</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <tr>
                                            <td>03 Jul 2017</td>
                                            <td class="author">AazzTech</td>
                                            <td class="detail">
                                                <a href="#">Multipurpose Blog Template</a>
                                            </td>
                                            <td>Regular</td>
                                            <td>$30</td>
                                            <td>$30</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="pricing_info">
                                <p>Sub - Total amount: $30</p>
                                <p class="bold">Total : $30</p>
                            </div>
                        </div>
                        <!-- end /.invoice_detail -->
                    </div>
                    <!-- end /.invoice --> 
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </div>
</section>
</h1>