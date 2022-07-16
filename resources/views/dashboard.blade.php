@extends('layout')
  
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
  
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th, h4 {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.btn {
        border: none;
        border-radius: 15px;
        color: black;
        padding: 12px 30px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        cursor: pointer;
        outline: none;
        box-shadow: 0 9px #999;
        margin: auto;  
}
.btn:hover {background-color:#BDF0D6}
.purchase {
    background:color: #F7EBDB;
    box-shadow: 0 2px #666;
    transform: translateY(4px);
}
</style>
</head>
<body>

<h4>Transaction</h4>

<table>
  <tr>
    <th>Description</th>
    <th>Price</th>
    <th>Image</th>
    <th>Paypal Integration</th>
  </tr>
  <tr>
    <td>OatMeal Bath</td>
    <td>$2</td>
    <td><img src="https://cf.shopee.ph/file/1638b09f66df7e9bda1f7ba04258ebb1" width="170" height="170"></td>
    <td><form action="{{ route('payment') }}" method="post">
                    @csrf
                    <input type="hidden" name="amount" value="2"/>
                    <button type="submit" class="btn purchase">Purchase</button>
                    </form>
    </td>
   </tr>
  <tr>
    <td>Soap Free Bath</td>
    <td>$1</td>
    <td><img src="https://ph-test-11.slatic.net/p/9a155d2cd122ef8d1e5da8999cf494e0.jpg"  width="170" height="170"></td>
    <td><form action="{{ route('payment') }}" method="post">
                    @csrf
                    <input type="hidden" name="amount" value="1"/>
                    <button type="submit" class="btn purchase">Purchase</button>
                    </form>
    </td>
  </tr>
  <tr>
    <td>Lavender and Oath Milk</td>
    <td>$4</td>
    <td><img src="https://lzd-img-global.slatic.net/g/p/ee655c023ff5b7ad4d69a5addec48724.jpg_720x720q80.jpg_.webp"  width="170" height="170"></td>
    <td><form action="{{ route('payment') }}" method="post">
                    @csrf
                    <input type="hidden" name="amount" value="4"/>
                    <button type="submit" class="btn purchase">Purchase</button>
                    </form>
    </td>
  </tr>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection