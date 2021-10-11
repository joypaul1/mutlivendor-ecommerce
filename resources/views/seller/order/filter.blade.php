
<form class="form-horizontal"
      action="/{{request()->route()->uri()}}"
      method="GET">
    <table class="table table-bordered">
        <tbody>
        <tr>
            <th class="bg-dark" style="width: 14.28%"><label for="order">Order No.</label></th>
            <th class="bg-dark" style="width: 15.1%"><label for="item">Item</label></th>
            <th class="bg-dark" style="width: 14.28%"><label for="qty">Quantity</label></th>
            <th class="bg-dark" style="width: 14.28%"><label for="total">Total</label></th>
            <th class="bg-dark" style="width: 14.28%"><label for="from_date">From Date</label></th>
            <th class="bg-dark" style="width: 14.28%"><label for="to_date">To Date</label></th>
            <th class="bg-dark" style="width: 12%"><label for="action">Action</label></th>
        </tr>
        <tr>
            <td>
                <select name="order" id="order" class="chosen-select" data-placeholder="- Select Order -">
                    <option value=""></option>
                    @foreach($orders as $order)
                        <option value="{{$order->no}}"
                            {{request()->query('order') == $order->no ? 'selected' : ''}}>
                            {{$order->no}}
                        </option>
                    @endforeach
                </select>
            </td>
            <td>
                <select name="item" id="item" class="chosen-select" data-placeholder="- Select Item -">
                    <option value=""></option>
                    @foreach($items as $item)
                        <option value="{{$item->id}}"
                            {{request()->query('item') == $item->id ? 'selected' : ''}}>
                            {{$item->name}}
                        </option>
                    @endforeach
                </select>
            </td>
            <td>
                <input name="qty"
                       id="qty"
                       type="text"
                       class="input-sm text-center"
                       value="{{request()->query('qty')}}"
                       placeholder="Quantity">
            </td>
            <td>
                <input name="total"
                       id="total"
                       type="text"
                       class="input-sm text-center"
                       value="{{request()->query('total')}}"
                       placeholder="Total">
            </td>
            <td>
                <input type="text"
                       id="from_date"
                       name="from_date"
                       placeholder="From Date"
                       value="{{request()->query('from_date')}}"
                       class="input-sm form-control text-center datepicker">
            </td>
            <td>
                <input type="text"
                       id="to_date"
                       name="to_date"
                       placeholder="To Date"
                       value="{{request()->query('to_date')}}"
                       class="input-sm form-control text-center datepicker">
            </td>
            <td>
                <div class="btn-group btn-group-mini btn-corner">
                    <button type="submit" class="btn btn-mini btn-primary" title="Search"><i class="fa fa-search"></i></button>
                    <a href="/{{request()->route()->uri()}}" class="btn btn-mini btn-info" title="Show All"><i class="fa fa-list"></i></a>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</form>
