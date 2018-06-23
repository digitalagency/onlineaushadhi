<div class="history">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr class="info">
                <th>S.N.</th>
                <th>Name</th>
                <!-- <th>Batch</th>
                <th>Expiry</th> -->
                <th>Rate</th>
                <th>Price (NRs)</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->index + 1 }}</td>
                    <td>{{ $order->medicine_name }}</td>
                    <!-- <td>Batch</td>
                    <td>Expiry</td> -->
                    <td>{{ $order->Rate }}</td>
                    <td>{{ $order->total_amount }}</td>
                </tr>
            @endforeach
                <tr>
                    <td colspan="3" align="right"><b>Total</b></td>
                    <td>{{ $sale->total_amount }}</td>
                </tr>
                <tr>
                    <td colspan="3" align="right"><b>Discount</b></td>
                    <td>{{ $sale->discount_amount }}</td>
                </tr>
                <tr>
                    <td colspan="3" align="right"><b>Total price</b></td>
                    <td>{{ $sale->net_amount }}</td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
