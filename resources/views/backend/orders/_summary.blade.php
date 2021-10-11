<div class="widget-box" id="summary" style="width: 30%; margin-left: auto">
    <div class="widget-header widget-header-blue widget-header-flat">
        <h4 class="widget-title">Summary</h4>
        <div class="widget-toolbar">
            <a href="#" data-action="collapse" class="white">
                <i class="ace-icon fa fa-chevron-up"></i>
            </a>
        </div>
    </div>

    <div class="widget-body">
        <div class="widget-main" style="margin-bottom: 20px">
            <div class="row" style="display: flex; justify-content: center">
                <div class="col-md-12">
                    <div style="display: flex; justify-content: center; margin-bottom: 10px;">
                        <span>Order No:</span>
                        <span class="stat-subtotal">&emsp;{{$order->no}}</span>
                    </div>
                    <div style="display: flex; justify-content: space-between">
                        <span>Subtotal:</span>
                        <span class="stat-subtotal">{{round($order->subtotal)}} TK</span>
                    </div>
                    <div style="display: flex; justify-content: space-between">
                        <span>Delivery:</span>
                        <span class="stat-delivery">{{round($order->shipping_charge)}} TK</span>
                    </div>
                    <div style="display: flex; justify-content: space-between; margin-bottom: 4px; padding-bottom: 4px; border-bottom: 1px solid #ddd">
                        <span>Coupon:</span>
                        <span class="stat-coupon">- {{round($order->user_coupon->value ?? 0)}} TK</span>
                    </div>
                    <div style="display: flex; justify-content: space-between">
                        <span>Subtotal:</span>
                        <span
                            class="stat-subtotal">{{round($order->subtotal + $order->shipping_charge - ($order->user_coupon->value ?? 0))}} TK</span>
                    </div>
                    <div
                        style="display: flex; justify-content: space-between; margin-bottom: 4px; padding-bottom: 4px; border-bottom: 1px solid #ddd">
                        <span>VAT:</span>
                        <span class="stat-vat">{{round($order->vat)}} TK</span>
                    </div>
                    <div style="display: flex; justify-content: space-between">
                        <span>Total:</span>
                        <span class="stat-total">{{round($order->total)}} TK</span>
                    </div>
                    <div style="display: flex; justify-content: space-between">
                        <span>Commission:</span>
                        <span class="stat-total">{{round(collect($order->details)->sum('commission'), 2)}} TK</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
