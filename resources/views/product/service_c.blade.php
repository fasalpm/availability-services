<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>SalesDock</title>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>

    </head>
    <body>
        <h1>Service C Products List</h1>
        <p> 
            This service provides a check or rule for the price, say price should be less than 500.
        </p>
        <div style= "margin-bottom: 15px;">
            <a href = "{{url('products')}}" > <button> Product List All </button>  </a>        
            <a href = "{{url('product-list-a')}}" > <button> Product List A </button>  </a>
            <a href = "{{url('product-list-b')}}" > <button> Product List B </button>  </a>            
        </div> 
        <table>
            <tr>
                <th>Sl No</th>
                <th>Name</th>
                <th>Speed</th>
                <th>Price</th>
                <th>Color</th>
            </tr>
            @foreach ($products as $key=> $product)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->speed}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->color}}</td>
            </tr>
            @endforeach
        </table>

    </body>
</html>